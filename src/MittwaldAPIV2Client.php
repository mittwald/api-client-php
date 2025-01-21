<?php

declare(strict_types=1);

namespace Mittwald\ApiClient;

use Mittwald\ApiClient\Generated\V2\ClientImpl;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionAuthenticateInstance\ExtensionAuthenticateInstanceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionAuthenticateInstance\ExtensionAuthenticateInstanceRequestBody;
use Mittwald\ApiClient\Generated\V2\Clients\User\Authenticate\AuthenticateRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\Authenticate\AuthenticateRequestBody;
use Mittwald\ApiClient\Generated\V2\Clients\User\AuthenticateWithAccessTokenRetrievalKey\AuthenticateWithAccessTokenRetrievalKeyRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\AuthenticateWithAccessTokenRetrievalKey\AuthenticateWithAccessTokenRetrievalKeyRequestBody;
use SensitiveParameter;

/**
 * MittwaldAPIV2Client is the main entry point for the mStudio v2 API.
 *
 * It is a wrapper around the generated API client, and provides some more
 * sophisticated authentication methods.
 *
 * Use the topic-specific factory methods to instantiate specific API clients:
 *
 *     $client->project()
 *     $client->app()
 *     $client->...
 */
class MittwaldAPIV2Client extends ClientImpl
{
    private const DEFAULT_BASE_URL = 'https://api.mittwald.de/v2/';

    final protected function __construct(string $baseUri, #[SensitiveParameter] string|null $apiKey = null)
    {
        parent::__construct($baseUri, $apiKey);
    }

    /**
     * Instantiates a new client with an existing API token.
     *
     * This is the recommended way of instantiating a new API client. You can
     * create a new API token in the mStudio UI, or via the API itself
     *
     * @param string $apiToken The API token
     * @param string $baseUri The base URL of the API. Defaults to the production API. Note that this is only useful for testing.
     */
    public static function newWithToken(#[SensitiveParameter] string $apiToken, string $baseUri = self::DEFAULT_BASE_URL): static
    {
        return new static($baseUri, $apiToken);
    }

    /**
     * Instantiates a new client without an API token.
     *
     * This is useful for endpoints that do not require authentication, such as
     * the user registration endpoint, or the authentication endpoints themselves.
     *
     * @param string $baseUri The base URL of the API. Defaults to the production API. Note that this is only useful for testing.
     */
    public static function newUnauthenticated(string $baseUri = self::DEFAULT_BASE_URL): static
    {
        return new static($baseUri);
    }

    /**
     * Instantiates a new client with an email and password.
     *
     * This is NOT recommended, as it requires the client to store the password
     * in plain text. Also, this authentication method will not work if the user
     * has 2FA enabled.
     *
     * @param string $email The email address of your mStudio user.
     * @param string $password The password of your mStudio user.
     * @param string $baseUri The base URL of the API. Defaults to the production API. Note that this is only useful for testing.
     */
    public static function newWithCredentials(string $email, #[SensitiveParameter] string $password, string $baseUri = self::DEFAULT_BASE_URL): static
    {
        $authenticateRequest  = new AuthenticateRequest(new AuthenticateRequestBody($email, $password));
        $authenticateResponse = static::newUnauthenticated($baseUri)->user()->authenticate($authenticateRequest);

        return static::newWithToken($authenticateResponse->getBody()->getToken(), baseUri: $baseUri);
    }

    /**
     * Instantiates a new client that is authenticated using an "access token retrieval key".
     *
     * This is a special mechanism for one-click-authenticating users that are
     * redirected to an mStudio extension [1].
     *
     * [1]: https://developer.mittwald.de/docs/v2/contribution/overview/concepts/authentication/
     *
     * @param string $userId The ID of the user to authenticate. This value is passed as a parameter during the authentication flow.
     * @param string $key The access token retrieval key.
     * @param string $baseUri The base URL of the API. Defaults to the production API. Note that this is only useful for testing.
     */
    public static function newWithAccessTokenRetrievalKey(string $userId, #[SensitiveParameter] string $key, string $baseUri = self::DEFAULT_BASE_URL): static
    {
        $authenticateRequest = new AuthenticateWithAccessTokenRetrievalKeyRequest(new AuthenticateWithAccessTokenRetrievalKeyRequestBody(
            accessTokenRetrievalKey: $key,
            userId: $userId,
        ));
        $authenticateResponse = static::newUnauthenticated($baseUri)->user()->authenticateWithAccessTokenRetrievalKey($authenticateRequest);

        return static::newWithToken($authenticateResponse->getBody()->getToken(), baseUri: $baseUri);
    }

    /**
     * Instantiates a client that is authenticated as an mStudio extension (not a user).
     *
     * @param string $extensionInstanceId The extension instance ID; this is passed to you via a webhook when the extension is installed.
     * @param string $extensionSecret The extension instance secret; this is passed to you via a webhook when the extension is installed.
     * @param string $baseUri The base URL of the API. Defaults to the production API. Note that this is only useful for testing.
     */
    public static function newWithExtensionSecret(string $extensionInstanceId, #[SensitiveParameter] string $extensionSecret, string $baseUri = self::DEFAULT_BASE_URL): static
    {
        $authenticateRequest = new ExtensionAuthenticateInstanceRequest(
            extensionInstanceId: $extensionInstanceId,
            body: new ExtensionAuthenticateInstanceRequestBody(
                extensionInstanceSecret: $extensionSecret,
            )
        );
        $authenticateResponse = static::newUnauthenticated($baseUri)->marketplace()->extensionAuthenticateInstance($authenticateRequest);

        return static::newWithToken($authenticateResponse->getBody()->getPublicToken(), baseUri: $baseUri);
    }
}
