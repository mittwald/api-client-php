<?php

namespace Mittwald\ApiClient\AI;

use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\CustomerGetKey\CustomerGetKeyRequest;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\ProjectGetKey\ProjectGetKeyRequest;
use Mittwald\ApiClient\Generated\V2\Schemas\AIHosting\Key;
use Mittwald\ApiClient\MittwaldAPIV2Client;
use OpenAI;
use SensitiveParameter;

/**
 * Factory for OpenAI clients configured for mittwald AI Hosting.
 */
class ClientFactory
{
    private const BASE_URI = "https://llm.aihosting.mittwald.de/v1";

    private MittwaldAPIV2Client $client;

    public function __construct(MittwaldAPIV2Client $client)
    {
        if (!class_exists(OpenAI\Client::class)) {
            throw new \RuntimeException('The OpenAI PHP client library is not installed. Please install it via Composer: composer require openai-php/client');
        }

        $this->client = $client;
    }

    /**
     * Builds a preconfigured OpenAI client, using the given API key.
     */
    public function build(#[SensitiveParameter] string $key): OpenAI\Client
    {
        return OpenAI::factory()
            ->withBaseUri(self::BASE_URI)
            ->withApiKey($key)
            ->make();
    }

    /**
     * Builds a preconfigured OpenAI client for the given customer and key ID.
     *
     * Neither customer or key ID are sensitive, as they are just identifiers,
     * the actual sensitive API key is retrieved from the mittwald API.
     */
    public function buildClientForCustomer(string $customerId, string $keyId): OpenAI\Client
    {
        $keyResponse = $this->client->aiHosting()->customerGetKey(new CustomerGetKeyRequest($customerId, $keyId));
        return $this->buildClientForKey($keyResponse->getBody());
    }

    /**
     * Builds a preconfigured OpenAI client for the given project and key ID.
     *
     * Neither project or key ID are sensitive, as they are just identifiers,
     * the actual sensitive API key is retrieved from the mittwald API.
     */
    public function buildClientForProject(string $projectId, string $keyId): OpenAI\Client
    {
        $keyResponse = $this->client->aiHosting()->projectGetKey(new ProjectGetKeyRequest($projectId, $keyId));
        return $this->buildClientForKey($keyResponse->getBody());
    }

    /**
     * Builds a preconfigured OpenAI client for the given Key schema.
     */
    private function buildClientForKey(Key $key): OpenAI\Client
    {
        return $this->build($key->getKey());
    }
}