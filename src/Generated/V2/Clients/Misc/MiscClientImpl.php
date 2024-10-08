<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Misc;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use Mittwald\ApiClient\Error\UnexpectedResponseException;
use Mittwald\ApiClient\Generated\V2\Clients\Misc\ServicetokenAuthenticateService\ServicetokenAuthenticateServiceDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Misc\ServicetokenAuthenticateService\ServicetokenAuthenticateServiceOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Misc\ServicetokenAuthenticateService\ServicetokenAuthenticateServiceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Misc\ServicetokenAuthenticateService\ServicetokenAuthenticateServiceTooManyRequestsResponse;

/**
 * Client for Misc API
 *
 * API endpoints that are not related to any specific API domain
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class MiscClientImpl implements MiscClient
{
    private Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Obtain a service token.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Misc/operation/servicetoken-authenticate-service
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ServicetokenAuthenticateServiceRequest $request An object representing the request for this operation
     * @return ServicetokenAuthenticateServiceOKResponse Authentication has been successful.
     */
    public function servicetokenAuthenticateService(ServicetokenAuthenticateServiceRequest $request): ServicetokenAuthenticateServiceOKResponse
    {
        $httpRequest = new Request(ServicetokenAuthenticateServiceRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ServicetokenAuthenticateServiceOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            429 => ServicetokenAuthenticateServiceTooManyRequestsResponse::fromResponse($httpResponse),
            default => ServicetokenAuthenticateServiceDefaultResponse::fromResponse($httpResponse),
        });
    }
}
