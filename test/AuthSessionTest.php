<?php

namespace Odditt\ApiClient\Test;

use Odditt\ApiClient\AuthConfiguration;
use Odditt\ApiClient\AuthSession;
use PHPUnit\Framework\TestCase;

/**
 * Unit tests for the hand-written AuthSession auth helper.
 */
class AuthSessionTest extends TestCase
{
    public function testAuthConfigurationResolvesTokenDynamically(): void
    {
        $config = new AuthConfiguration();
        $token = 'tok-1';
        $config->setTokenProvider(fn (): string => $token);
        self::assertSame('tok-1', $config->getAccessToken());
        $token = 'tok-2';
        self::assertSame('tok-2', $config->getAccessToken());
    }

    public function testFromApiKeySetsXApiKey(): void
    {
        $session = AuthSession::fromApiKey('my-key');
        self::assertSame('my-key', $session->getConfiguration()->getApiKey('X-API-Key'));
    }

    public function testFromClientCredentialsDoesNotSetApiKey(): void
    {
        $session = AuthSession::fromClientCredentials('id', 'secret');
        self::assertNull($session->getConfiguration()->getApiKey('X-API-Key'));
    }
}
