<?php

namespace Mittwald\ApiClient;

use Mittwald\ApiClient\Generated\V2\Client;
use Mittwald\ApiClient\Generated\V2\Clients\User\Authenticate\Authenticate200Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\Authenticate\AuthenticateRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\Authenticate\AuthenticateRequestBody;

class MittwaldAPIV2Client extends Client
{
    protected final function __construct(string $baseUri, string|null $apiKey = null)
    {
        parent::__construct($baseUri, $apiKey);
    }

    public static function newWithToken(string $apiToken): static
    {
        return new static('https://api.mittwald.de/v2/', $apiToken);
    }

    public static function newUnauthenticated(): static
    {
        return new static('https://api.mittwald.de/v2/');
    }

    public static function newWithCredentials(string $email, string $password): static
    {
        $authenticateRequest = new AuthenticateRequest(new AuthenticateRequestBody($email, $password));
        $authenticateResponse = static::newUnauthenticated()->user()->authenticate($authenticateRequest);

        return match (get_class($authenticateResponse)) {
            Authenticate200Response::class => static::newWithToken($authenticateResponse->getBody()->getToken()),
            default => throw new \Exception("Unexpected response: " . json_encode($authenticateResponse->getBody()->toJson())),
        };
    }
}