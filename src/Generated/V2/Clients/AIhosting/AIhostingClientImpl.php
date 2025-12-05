<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\AIhosting;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use Mittwald\ApiClient\Client\EmptyResponse;
use Mittwald\ApiClient\Error\UnexpectedResponseException;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerCreateLlmLicence\AiHostingCustomerCreateLlmLicenceBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerCreateLlmLicence\AiHostingCustomerCreateLlmLicenceConflictResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerCreateLlmLicence\AiHostingCustomerCreateLlmLicenceCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerCreateLlmLicence\AiHostingCustomerCreateLlmLicenceDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerCreateLlmLicence\AiHostingCustomerCreateLlmLicenceForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerCreateLlmLicence\AiHostingCustomerCreateLlmLicenceNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerCreateLlmLicence\AiHostingCustomerCreateLlmLicencePreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerCreateLlmLicence\AiHostingCustomerCreateLlmLicenceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerCreateLlmLicence\AiHostingCustomerCreateLlmLicenceTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerDeleteLlmLicence\AiHostingCustomerDeleteLlmLicenceBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerDeleteLlmLicence\AiHostingCustomerDeleteLlmLicenceConflictResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerDeleteLlmLicence\AiHostingCustomerDeleteLlmLicenceDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerDeleteLlmLicence\AiHostingCustomerDeleteLlmLicenceForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerDeleteLlmLicence\AiHostingCustomerDeleteLlmLicenceNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerDeleteLlmLicence\AiHostingCustomerDeleteLlmLicencePreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerDeleteLlmLicence\AiHostingCustomerDeleteLlmLicenceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerDeleteLlmLicence\AiHostingCustomerDeleteLlmLicenceTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerGetLlmLicence\AiHostingCustomerGetLlmLicenceBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerGetLlmLicence\AiHostingCustomerGetLlmLicenceDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerGetLlmLicence\AiHostingCustomerGetLlmLicenceForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerGetLlmLicence\AiHostingCustomerGetLlmLicenceNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerGetLlmLicence\AiHostingCustomerGetLlmLicenceOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerGetLlmLicence\AiHostingCustomerGetLlmLicenceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerGetLlmLicence\AiHostingCustomerGetLlmLicenceTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerGetLlmLicences\AiHostingCustomerGetLlmLicencesBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerGetLlmLicences\AiHostingCustomerGetLlmLicencesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerGetLlmLicences\AiHostingCustomerGetLlmLicencesForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerGetLlmLicences\AiHostingCustomerGetLlmLicencesNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerGetLlmLicences\AiHostingCustomerGetLlmLicencesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerGetLlmLicences\AiHostingCustomerGetLlmLicencesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerGetLlmLicences\AiHostingCustomerGetLlmLicencesTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerGetLlmTariffOptions\AiHostingCustomerGetLlmTariffOptionsBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerGetLlmTariffOptions\AiHostingCustomerGetLlmTariffOptionsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerGetLlmTariffOptions\AiHostingCustomerGetLlmTariffOptionsForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerGetLlmTariffOptions\AiHostingCustomerGetLlmTariffOptionsNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerGetLlmTariffOptions\AiHostingCustomerGetLlmTariffOptionsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerGetLlmTariffOptions\AiHostingCustomerGetLlmTariffOptionsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerGetLlmTariffOptions\AiHostingCustomerGetLlmTariffOptionsTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerUpdateLlmLicence\AiHostingCustomerUpdateLlmLicenceBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerUpdateLlmLicence\AiHostingCustomerUpdateLlmLicenceConflictResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerUpdateLlmLicence\AiHostingCustomerUpdateLlmLicenceDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerUpdateLlmLicence\AiHostingCustomerUpdateLlmLicenceForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerUpdateLlmLicence\AiHostingCustomerUpdateLlmLicenceNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerUpdateLlmLicence\AiHostingCustomerUpdateLlmLicenceOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerUpdateLlmLicence\AiHostingCustomerUpdateLlmLicencePreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerUpdateLlmLicence\AiHostingCustomerUpdateLlmLicenceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerUpdateLlmLicence\AiHostingCustomerUpdateLlmLicenceTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingGetLlmModels\AiHostingGetLlmModelsBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingGetLlmModels\AiHostingGetLlmModelsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingGetLlmModels\AiHostingGetLlmModelsForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingGetLlmModels\AiHostingGetLlmModelsNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingGetLlmModels\AiHostingGetLlmModelsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingGetLlmModels\AiHostingGetLlmModelsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingGetLlmModels\AiHostingGetLlmModelsTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectCreateLlmLicence\AiHostingProjectCreateLlmLicenceBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectCreateLlmLicence\AiHostingProjectCreateLlmLicenceConflictResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectCreateLlmLicence\AiHostingProjectCreateLlmLicenceCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectCreateLlmLicence\AiHostingProjectCreateLlmLicenceDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectCreateLlmLicence\AiHostingProjectCreateLlmLicenceForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectCreateLlmLicence\AiHostingProjectCreateLlmLicenceNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectCreateLlmLicence\AiHostingProjectCreateLlmLicencePreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectCreateLlmLicence\AiHostingProjectCreateLlmLicenceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectCreateLlmLicence\AiHostingProjectCreateLlmLicenceTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectDeleteLlmLicence\AiHostingProjectDeleteLlmLicenceBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectDeleteLlmLicence\AiHostingProjectDeleteLlmLicenceConflictResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectDeleteLlmLicence\AiHostingProjectDeleteLlmLicenceDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectDeleteLlmLicence\AiHostingProjectDeleteLlmLicenceForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectDeleteLlmLicence\AiHostingProjectDeleteLlmLicenceNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectDeleteLlmLicence\AiHostingProjectDeleteLlmLicencePreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectDeleteLlmLicence\AiHostingProjectDeleteLlmLicenceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectDeleteLlmLicence\AiHostingProjectDeleteLlmLicenceTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectGetLlmLicence\AiHostingProjectGetLlmLicenceBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectGetLlmLicence\AiHostingProjectGetLlmLicenceDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectGetLlmLicence\AiHostingProjectGetLlmLicenceForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectGetLlmLicence\AiHostingProjectGetLlmLicenceNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectGetLlmLicence\AiHostingProjectGetLlmLicenceOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectGetLlmLicence\AiHostingProjectGetLlmLicenceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectGetLlmLicence\AiHostingProjectGetLlmLicenceTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectGetLlmLicences\AiHostingProjectGetLlmLicencesBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectGetLlmLicences\AiHostingProjectGetLlmLicencesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectGetLlmLicences\AiHostingProjectGetLlmLicencesForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectGetLlmLicences\AiHostingProjectGetLlmLicencesNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectGetLlmLicences\AiHostingProjectGetLlmLicencesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectGetLlmLicences\AiHostingProjectGetLlmLicencesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectGetLlmLicences\AiHostingProjectGetLlmLicencesTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectGetLlmTariffOptions\AiHostingProjectGetLlmTariffOptionsBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectGetLlmTariffOptions\AiHostingProjectGetLlmTariffOptionsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectGetLlmTariffOptions\AiHostingProjectGetLlmTariffOptionsForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectGetLlmTariffOptions\AiHostingProjectGetLlmTariffOptionsNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectGetLlmTariffOptions\AiHostingProjectGetLlmTariffOptionsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectGetLlmTariffOptions\AiHostingProjectGetLlmTariffOptionsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectGetLlmTariffOptions\AiHostingProjectGetLlmTariffOptionsTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectUpdateLlmLicence\AiHostingProjectUpdateLlmLicenceBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectUpdateLlmLicence\AiHostingProjectUpdateLlmLicenceConflictResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectUpdateLlmLicence\AiHostingProjectUpdateLlmLicenceDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectUpdateLlmLicence\AiHostingProjectUpdateLlmLicenceForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectUpdateLlmLicence\AiHostingProjectUpdateLlmLicenceNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectUpdateLlmLicence\AiHostingProjectUpdateLlmLicenceOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectUpdateLlmLicence\AiHostingProjectUpdateLlmLicencePreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectUpdateLlmLicence\AiHostingProjectUpdateLlmLicenceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectUpdateLlmLicence\AiHostingProjectUpdateLlmLicenceTooManyRequestsResponse;

/**
 * Client for AI hosting API
 *
 * The AI hosting provides access to multiple large language and embedding models
 * – GDPR compliant and hosted in Germany.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class AIhostingClientImpl implements AIhostingClient
{
    private Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Creates a new llm licence for a customer.
     *
     * Creates a new llm licence for a customer. Can be linked with a project to directly create web-ui container.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/AI-hosting/operation/ai-hosting-customer-create-llm-licence
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param AiHostingCustomerCreateLlmLicenceRequest $request An object representing the request for this operation
     */
    public function aiHostingCustomerCreateLlmLicence(AiHostingCustomerCreateLlmLicenceRequest $request): AiHostingCustomerCreateLlmLicenceCreatedResponse
    {
        $httpRequest = new Request(AiHostingCustomerCreateLlmLicenceRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 201) {
            return AiHostingCustomerCreateLlmLicenceCreatedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => AiHostingCustomerCreateLlmLicenceBadRequestResponse::fromResponse($httpResponse),
            403 => AiHostingCustomerCreateLlmLicenceForbiddenResponse::fromResponse($httpResponse),
            404 => AiHostingCustomerCreateLlmLicenceNotFoundResponse::fromResponse($httpResponse),
            409 => AiHostingCustomerCreateLlmLicenceConflictResponse::fromResponse($httpResponse),
            412 => AiHostingCustomerCreateLlmLicencePreconditionFailedResponse::fromResponse($httpResponse),
            429 => AiHostingCustomerCreateLlmLicenceTooManyRequestsResponse::fromResponse($httpResponse),
            default => AiHostingCustomerCreateLlmLicenceDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Delete a llm Licence for a customer.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/AI-hosting/operation/ai-hosting-customer-delete-llm-licence
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param AiHostingCustomerDeleteLlmLicenceRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function aiHostingCustomerDeleteLlmLicence(AiHostingCustomerDeleteLlmLicenceRequest $request): EmptyResponse
    {
        $httpRequest = new Request(AiHostingCustomerDeleteLlmLicenceRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => AiHostingCustomerDeleteLlmLicenceBadRequestResponse::fromResponse($httpResponse),
            403 => AiHostingCustomerDeleteLlmLicenceForbiddenResponse::fromResponse($httpResponse),
            404 => AiHostingCustomerDeleteLlmLicenceNotFoundResponse::fromResponse($httpResponse),
            409 => AiHostingCustomerDeleteLlmLicenceConflictResponse::fromResponse($httpResponse),
            412 => AiHostingCustomerDeleteLlmLicencePreconditionFailedResponse::fromResponse($httpResponse),
            429 => AiHostingCustomerDeleteLlmLicenceTooManyRequestsResponse::fromResponse($httpResponse),
            default => AiHostingCustomerDeleteLlmLicenceDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a licence of a customer.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/AI-hosting/operation/ai-hosting-customer-get-llm-licence
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param AiHostingCustomerGetLlmLicenceRequest $request An object representing the request for this operation
     * @return AiHostingCustomerGetLlmLicenceOKResponse The llm licence of a customer.
     */
    public function aiHostingCustomerGetLlmLicence(AiHostingCustomerGetLlmLicenceRequest $request): AiHostingCustomerGetLlmLicenceOKResponse
    {
        $httpRequest = new Request(AiHostingCustomerGetLlmLicenceRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return AiHostingCustomerGetLlmLicenceOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => AiHostingCustomerGetLlmLicenceBadRequestResponse::fromResponse($httpResponse),
            403 => AiHostingCustomerGetLlmLicenceForbiddenResponse::fromResponse($httpResponse),
            404 => AiHostingCustomerGetLlmLicenceNotFoundResponse::fromResponse($httpResponse),
            429 => AiHostingCustomerGetLlmLicenceTooManyRequestsResponse::fromResponse($httpResponse),
            default => AiHostingCustomerGetLlmLicenceDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a list of already created llm licences.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/AI-hosting/operation/ai-hosting-customer-get-llm-licences
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param AiHostingCustomerGetLlmLicencesRequest $request An object representing the request for this operation
     * @return AiHostingCustomerGetLlmLicencesOKResponse List of llm licences of a customer.
     */
    public function aiHostingCustomerGetLlmLicences(AiHostingCustomerGetLlmLicencesRequest $request): AiHostingCustomerGetLlmLicencesOKResponse
    {
        $httpRequest = new Request(AiHostingCustomerGetLlmLicencesRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return AiHostingCustomerGetLlmLicencesOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => AiHostingCustomerGetLlmLicencesBadRequestResponse::fromResponse($httpResponse),
            403 => AiHostingCustomerGetLlmLicencesForbiddenResponse::fromResponse($httpResponse),
            404 => AiHostingCustomerGetLlmLicencesNotFoundResponse::fromResponse($httpResponse),
            429 => AiHostingCustomerGetLlmLicencesTooManyRequestsResponse::fromResponse($httpResponse),
            default => AiHostingCustomerGetLlmLicencesDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get llm tariff and usages of a customer.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/AI-hosting/operation/ai-hosting-customer-get-llm-tariff-options
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param AiHostingCustomerGetLlmTariffOptionsRequest $request An object representing the request for this operation
     * @return AiHostingCustomerGetLlmTariffOptionsOKResponse The customer llm tariff options.
     */
    public function aiHostingCustomerGetLlmTariffOptions(AiHostingCustomerGetLlmTariffOptionsRequest $request): AiHostingCustomerGetLlmTariffOptionsOKResponse
    {
        $httpRequest = new Request(AiHostingCustomerGetLlmTariffOptionsRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return AiHostingCustomerGetLlmTariffOptionsOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => AiHostingCustomerGetLlmTariffOptionsBadRequestResponse::fromResponse($httpResponse),
            403 => AiHostingCustomerGetLlmTariffOptionsForbiddenResponse::fromResponse($httpResponse),
            404 => AiHostingCustomerGetLlmTariffOptionsNotFoundResponse::fromResponse($httpResponse),
            429 => AiHostingCustomerGetLlmTariffOptionsTooManyRequestsResponse::fromResponse($httpResponse),
            default => AiHostingCustomerGetLlmTariffOptionsDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update a llm Licence for a customer.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/AI-hosting/operation/ai-hosting-customer-update-llm-licence
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param AiHostingCustomerUpdateLlmLicenceRequest $request An object representing the request for this operation
     */
    public function aiHostingCustomerUpdateLlmLicence(AiHostingCustomerUpdateLlmLicenceRequest $request): AiHostingCustomerUpdateLlmLicenceOKResponse
    {
        $httpRequest = new Request(AiHostingCustomerUpdateLlmLicenceRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return AiHostingCustomerUpdateLlmLicenceOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => AiHostingCustomerUpdateLlmLicenceBadRequestResponse::fromResponse($httpResponse),
            403 => AiHostingCustomerUpdateLlmLicenceForbiddenResponse::fromResponse($httpResponse),
            404 => AiHostingCustomerUpdateLlmLicenceNotFoundResponse::fromResponse($httpResponse),
            409 => AiHostingCustomerUpdateLlmLicenceConflictResponse::fromResponse($httpResponse),
            412 => AiHostingCustomerUpdateLlmLicencePreconditionFailedResponse::fromResponse($httpResponse),
            429 => AiHostingCustomerUpdateLlmLicenceTooManyRequestsResponse::fromResponse($httpResponse),
            default => AiHostingCustomerUpdateLlmLicenceDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a list of currently active llm models.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/AI-hosting/operation/ai-hosting-get-llm-models
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param AiHostingGetLlmModelsRequest $request An object representing the request for this operation
     * @return AiHostingGetLlmModelsOKResponse List of currently active llm models.
     */
    public function aiHostingGetLlmModels(AiHostingGetLlmModelsRequest $request): AiHostingGetLlmModelsOKResponse
    {
        $httpRequest = new Request(AiHostingGetLlmModelsRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return AiHostingGetLlmModelsOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => AiHostingGetLlmModelsBadRequestResponse::fromResponse($httpResponse),
            403 => AiHostingGetLlmModelsForbiddenResponse::fromResponse($httpResponse),
            404 => AiHostingGetLlmModelsNotFoundResponse::fromResponse($httpResponse),
            429 => AiHostingGetLlmModelsTooManyRequestsResponse::fromResponse($httpResponse),
            default => AiHostingGetLlmModelsDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Creates a new llm Licence for a project.
     *
     * Creates a new llm Licence for a project. Can be linked with a project to directly create web-ui container.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/AI-hosting/operation/ai-hosting-project-create-llm-licence
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param AiHostingProjectCreateLlmLicenceRequest $request An object representing the request for this operation
     */
    public function aiHostingProjectCreateLlmLicence(AiHostingProjectCreateLlmLicenceRequest $request): AiHostingProjectCreateLlmLicenceCreatedResponse
    {
        $httpRequest = new Request(AiHostingProjectCreateLlmLicenceRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 201) {
            return AiHostingProjectCreateLlmLicenceCreatedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => AiHostingProjectCreateLlmLicenceBadRequestResponse::fromResponse($httpResponse),
            403 => AiHostingProjectCreateLlmLicenceForbiddenResponse::fromResponse($httpResponse),
            404 => AiHostingProjectCreateLlmLicenceNotFoundResponse::fromResponse($httpResponse),
            409 => AiHostingProjectCreateLlmLicenceConflictResponse::fromResponse($httpResponse),
            412 => AiHostingProjectCreateLlmLicencePreconditionFailedResponse::fromResponse($httpResponse),
            429 => AiHostingProjectCreateLlmLicenceTooManyRequestsResponse::fromResponse($httpResponse),
            default => AiHostingProjectCreateLlmLicenceDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Delete a llm Licence for a project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/AI-hosting/operation/ai-hosting-project-delete-llm-licence
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param AiHostingProjectDeleteLlmLicenceRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function aiHostingProjectDeleteLlmLicence(AiHostingProjectDeleteLlmLicenceRequest $request): EmptyResponse
    {
        $httpRequest = new Request(AiHostingProjectDeleteLlmLicenceRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => AiHostingProjectDeleteLlmLicenceBadRequestResponse::fromResponse($httpResponse),
            403 => AiHostingProjectDeleteLlmLicenceForbiddenResponse::fromResponse($httpResponse),
            404 => AiHostingProjectDeleteLlmLicenceNotFoundResponse::fromResponse($httpResponse),
            409 => AiHostingProjectDeleteLlmLicenceConflictResponse::fromResponse($httpResponse),
            412 => AiHostingProjectDeleteLlmLicencePreconditionFailedResponse::fromResponse($httpResponse),
            429 => AiHostingProjectDeleteLlmLicenceTooManyRequestsResponse::fromResponse($httpResponse),
            default => AiHostingProjectDeleteLlmLicenceDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a licence of a project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/AI-hosting/operation/ai-hosting-project-get-llm-licence
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param AiHostingProjectGetLlmLicenceRequest $request An object representing the request for this operation
     * @return AiHostingProjectGetLlmLicenceOKResponse The llm licence of a project.
     */
    public function aiHostingProjectGetLlmLicence(AiHostingProjectGetLlmLicenceRequest $request): AiHostingProjectGetLlmLicenceOKResponse
    {
        $httpRequest = new Request(AiHostingProjectGetLlmLicenceRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return AiHostingProjectGetLlmLicenceOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => AiHostingProjectGetLlmLicenceBadRequestResponse::fromResponse($httpResponse),
            403 => AiHostingProjectGetLlmLicenceForbiddenResponse::fromResponse($httpResponse),
            404 => AiHostingProjectGetLlmLicenceNotFoundResponse::fromResponse($httpResponse),
            429 => AiHostingProjectGetLlmLicenceTooManyRequestsResponse::fromResponse($httpResponse),
            default => AiHostingProjectGetLlmLicenceDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a list of already created llm licences of a project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/AI-hosting/operation/ai-hosting-project-get-llm-licences
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param AiHostingProjectGetLlmLicencesRequest $request An object representing the request for this operation
     * @return AiHostingProjectGetLlmLicencesOKResponse List of llm licences of a project.
     */
    public function aiHostingProjectGetLlmLicences(AiHostingProjectGetLlmLicencesRequest $request): AiHostingProjectGetLlmLicencesOKResponse
    {
        $httpRequest = new Request(AiHostingProjectGetLlmLicencesRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return AiHostingProjectGetLlmLicencesOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => AiHostingProjectGetLlmLicencesBadRequestResponse::fromResponse($httpResponse),
            403 => AiHostingProjectGetLlmLicencesForbiddenResponse::fromResponse($httpResponse),
            404 => AiHostingProjectGetLlmLicencesNotFoundResponse::fromResponse($httpResponse),
            429 => AiHostingProjectGetLlmLicencesTooManyRequestsResponse::fromResponse($httpResponse),
            default => AiHostingProjectGetLlmLicencesDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get llm tariff and usages of a project. Same as the customer route, but less details.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/AI-hosting/operation/ai-hosting-project-get-llm-tariff-options
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param AiHostingProjectGetLlmTariffOptionsRequest $request An object representing the request for this operation
     * @return AiHostingProjectGetLlmTariffOptionsOKResponse The project llm tariff options.
     */
    public function aiHostingProjectGetLlmTariffOptions(AiHostingProjectGetLlmTariffOptionsRequest $request): AiHostingProjectGetLlmTariffOptionsOKResponse
    {
        $httpRequest = new Request(AiHostingProjectGetLlmTariffOptionsRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return AiHostingProjectGetLlmTariffOptionsOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => AiHostingProjectGetLlmTariffOptionsBadRequestResponse::fromResponse($httpResponse),
            403 => AiHostingProjectGetLlmTariffOptionsForbiddenResponse::fromResponse($httpResponse),
            404 => AiHostingProjectGetLlmTariffOptionsNotFoundResponse::fromResponse($httpResponse),
            429 => AiHostingProjectGetLlmTariffOptionsTooManyRequestsResponse::fromResponse($httpResponse),
            default => AiHostingProjectGetLlmTariffOptionsDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update a llm Licence for a project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/AI-hosting/operation/ai-hosting-project-update-llm-licence
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param AiHostingProjectUpdateLlmLicenceRequest $request An object representing the request for this operation
     */
    public function aiHostingProjectUpdateLlmLicence(AiHostingProjectUpdateLlmLicenceRequest $request): AiHostingProjectUpdateLlmLicenceOKResponse
    {
        $httpRequest = new Request(AiHostingProjectUpdateLlmLicenceRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return AiHostingProjectUpdateLlmLicenceOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => AiHostingProjectUpdateLlmLicenceBadRequestResponse::fromResponse($httpResponse),
            403 => AiHostingProjectUpdateLlmLicenceForbiddenResponse::fromResponse($httpResponse),
            404 => AiHostingProjectUpdateLlmLicenceNotFoundResponse::fromResponse($httpResponse),
            409 => AiHostingProjectUpdateLlmLicenceConflictResponse::fromResponse($httpResponse),
            412 => AiHostingProjectUpdateLlmLicencePreconditionFailedResponse::fromResponse($httpResponse),
            429 => AiHostingProjectUpdateLlmLicenceTooManyRequestsResponse::fromResponse($httpResponse),
            default => AiHostingProjectUpdateLlmLicenceDefaultResponse::fromResponse($httpResponse),
        });
    }
}
