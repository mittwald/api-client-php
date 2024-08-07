<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Relocation;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use Mittwald\ApiClient\Client\EmptyResponse;
use Mittwald\ApiClient\Error\UnexpectedResponseException;
use Mittwald\ApiClient\Generated\V2\Clients\Relocation\CreateLegacyTariffChange\CreateLegacyTariffChangeCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Relocation\CreateLegacyTariffChange\CreateLegacyTariffChangeDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Relocation\CreateLegacyTariffChange\CreateLegacyTariffChangeRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Relocation\CreateLegacyTariffChange\CreateLegacyTariffChangeTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Relocation\CreateRelocation\CreateRelocationBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Relocation\CreateRelocation\CreateRelocationDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Relocation\CreateRelocation\CreateRelocationRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Relocation\CreateRelocation\CreateRelocationTooManyRequestsResponse;

/**
 * Client for Relocation API
 *
 * The relocation API allows you to manage your relocations.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class RelocationClientImpl implements RelocationClient
{
    private Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Register a tariff change for a legacy tariff.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Relocation/operation/relocation-create-legacy-tariff-change
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CreateLegacyTariffChangeRequest $request An object representing the request for this operation
     */
    public function createLegacyTariffChange(CreateLegacyTariffChangeRequest $request): CreateLegacyTariffChangeCreatedResponse
    {
        $httpRequest = new Request(CreateLegacyTariffChangeRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 201) {
            return CreateLegacyTariffChangeCreatedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            429 => CreateLegacyTariffChangeTooManyRequestsResponse::fromResponse($httpResponse),
            default => CreateLegacyTariffChangeDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Relocate an external Project to mittwald.
     *
     * Give mittwald access to your Provider and let them move your Project to mittwald.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Relocation/operation/relocation-create-relocation
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CreateRelocationRequest $request An object representing the request for this operation
     * @return EmptyResponse No content
     */
    public function createRelocation(CreateRelocationRequest $request): EmptyResponse
    {
        $httpRequest = new Request(CreateRelocationRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => CreateRelocationBadRequestResponse::fromResponse($httpResponse),
            429 => CreateRelocationTooManyRequestsResponse::fromResponse($httpResponse),
            default => CreateRelocationDefaultResponse::fromResponse($httpResponse),
        });
    }
}
