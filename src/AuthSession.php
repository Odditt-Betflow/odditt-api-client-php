<?php

/**
 * Odditt B2B Public API — convenience authentication layer (hand-written).
 *
 * Kept in .openapi-generator-ignore so regeneration preserves it.
 */

namespace Odditt\ApiClient;

use GuzzleHttp\Client;
use Odditt\ApiClient\Api\AuthenticationApi;
use Odditt\ApiClient\Model\AuthOAuthLoginRequest;
use Odditt\ApiClient\Model\AuthRefreshRequest;
use Odditt\ApiClient\Model\AuthTokenPair;

/**
 * Auto-login/refresh authentication wrapper over the generated client.
 *
 * The API accepts two credential types, both exchanged for a short-lived Bearer
 * JWT at a login endpoint:
 *
 *   - an API key           -> POST /v1/auth/login  (sends the X-API-Key header)
 *   - client_id + secret   -> POST /v1/oauth/login (body {client_id, client_secret})
 *
 * Data endpoints also accept the API key directly via X-API-Key, so no login is
 * needed for them; the account endpoints (/v1/account/...) require the Bearer
 * token. The session configures the client with the X-API-Key header (for an
 * API-key credential) and a dynamic access token that lazily logs in and
 * transparently refreshes the Bearer token before it expires.
 *
 * ```php
 * $session = AuthSession::fromApiKey('YOUR_API_KEY');
 * $account = new AccountApi(new GuzzleHttp\Client(), $session->getConfiguration());
 * $account->v1AccountApiKeysGet();
 *
 * $session = AuthSession::fromClientCredentials('CLIENT_ID', 'CLIENT_SECRET');
 * ```
 */
class AuthSession
{
    private AuthConfiguration $config;
    private AuthenticationApi $authApi;
    private ?string $apiKey;
    private ?string $clientId;
    private ?string $clientSecret;
    private int $skew;
    private ?AuthTokenPair $tokenPair = null;
    private ?int $expiresAt = null;

    private function __construct(
        ?string $apiKey,
        ?string $clientId,
        ?string $clientSecret,
        ?string $host,
        int $skewSeconds
    ) {
        if ($apiKey === null && ($clientId === null || $clientSecret === null)) {
            throw new \InvalidArgumentException('provide an apiKey, or clientId and clientSecret');
        }
        $this->apiKey = $apiKey;
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->skew = $skewSeconds;

        $config = new AuthConfiguration();
        if ($host !== null) {
            $config->setHost($host);
        }
        if ($apiKey !== null) {
            $config->setApiKey('X-API-Key', $apiKey); // data endpoints
        }
        $config->setTokenProvider(fn (): string => $this->bearerToken());
        $this->config = $config;

        // Unauthenticated client for the public login/refresh endpoints.
        $authConfig = new Configuration();
        if ($host !== null) {
            $authConfig->setHost($host);
        }
        $this->authApi = new AuthenticationApi(new Client(), $authConfig);
    }

    public static function fromApiKey(string $apiKey, ?string $host = null, int $skewSeconds = 60): self
    {
        return new self($apiKey, null, null, $host, $skewSeconds);
    }

    public static function fromClientCredentials(
        string $clientId,
        string $clientSecret,
        ?string $host = null,
        int $skewSeconds = 60
    ): self {
        return new self(null, $clientId, $clientSecret, $host, $skewSeconds);
    }

    /** The auth-configured Configuration. Pass it to any generated *Api. */
    public function getConfiguration(): Configuration
    {
        return $this->config;
    }

    /** Returns a currently-valid Bearer token, logging in or refreshing as needed. */
    public function bearerToken(): string
    {
        if ($this->tokenPair !== null && !$this->expired()) {
            return $this->tokenPair->getAccessToken();
        }
        $this->tokenPair = ($this->tokenPair !== null && $this->tokenPair->getRefreshToken() !== null)
            ? $this->refresh()
            : $this->login();
        $this->expiresAt = $this->computeExpiry($this->tokenPair);
        return $this->tokenPair->getAccessToken();
    }

    private function login(): AuthTokenPair
    {
        if ($this->apiKey !== null) {
            return $this->authApi->v1AuthLoginPost($this->apiKey);
        }
        return $this->authApi->v1OauthLoginPost(new AuthOAuthLoginRequest([
            'client_id' => $this->clientId,
            'client_secret' => $this->clientSecret,
        ]));
    }

    private function refresh(): AuthTokenPair
    {
        $request = new AuthRefreshRequest(['refresh_token' => $this->tokenPair->getRefreshToken()]);
        try {
            return $this->apiKey !== null
                ? $this->authApi->v1AuthRefreshPost($request)
                : $this->authApi->v1OauthRefreshPost($request);
        } catch (\Exception $e) {
            return $this->login(); // a rejected refresh token falls back to a full login
        }
    }

    private function expired(): bool
    {
        return $this->expiresAt === null || time() >= ($this->expiresAt - $this->skew);
    }

    private function computeExpiry(AuthTokenPair $pair): int
    {
        $expiresAt = $pair->getExpiresAt();
        if ($expiresAt instanceof \DateTimeInterface) {
            return $expiresAt->getTimestamp();
        }
        if (is_string($expiresAt) && ($ts = strtotime($expiresAt)) !== false) {
            return $ts;
        }
        $expiresIn = $pair->getExpiresIn();
        return time() + (is_int($expiresIn) && $expiresIn > 0 ? $expiresIn : 3600);
    }
}
