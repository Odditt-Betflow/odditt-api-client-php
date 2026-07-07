<?php

/**
 * Odditt B2B Public API — convenience authentication layer (hand-written).
 *
 * Kept in .openapi-generator-ignore so regeneration preserves it.
 */

namespace Odditt\ApiClient;

/**
 * A Configuration whose access token is resolved dynamically per request, so the
 * Bearer token can be refreshed transparently. Used by {@see AuthSession}.
 */
class AuthConfiguration extends Configuration
{
    /** @var callable():string */
    private $tokenProvider;

    public function setTokenProvider(callable $provider): void
    {
        $this->tokenProvider = $provider;
    }

    public function getAccessToken()
    {
        return ($this->tokenProvider)();
    }
}
