<?php

declare(strict_types=1);

namespace Mittwald\ApiClient;

use Mittwald\ApiClient\Generated\V2\ClientImpl;
use Mittwald\ApiClient\Generated\V2\Clients\User\Authenticate\AuthenticateRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\Authenticate\AuthenticateRequestBody;

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
    final protected function __construct(string $baseUri, string|null $apiKey = null)
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
     */
    public static function newWithToken(string $apiToken): static
    {
        return new static('https://api.mittwald.de/v2/', $apiToken);
    }

    /**
     * Instantiates a new client without an API token.
     *
     * This is useful for endpoints that do not require authentication, such as
     * the user registration endpoint, or the authentication endpoints themselves.
     */
    public static function newUnauthenticated(): static
    {
        return new static('https://api.mittwald.de/v2/');
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
     */
    public static function newWithCredentials(string $email, string $password): static
    {
        $authenticateRequest  = new AuthenticateRequest(new AuthenticateRequestBody($email, $password));
        $authenticateResponse = static::newUnauthenticated()->user()->authenticate($authenticateRequest);

        return static::newWithToken($authenticateResponse->getBody()->getToken());
    }
}
