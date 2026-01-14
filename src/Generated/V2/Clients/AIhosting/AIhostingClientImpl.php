<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\AIhosting;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use Mittwald\ApiClient\Client\EmptyResponse;
use Mittwald\ApiClient\Error\UnexpectedResponseException;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerCreateKey\AiHostingCustomerCreateKeyBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerCreateKey\AiHostingCustomerCreateKeyConflictResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerCreateKey\AiHostingCustomerCreateKeyCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerCreateKey\AiHostingCustomerCreateKeyDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerCreateKey\AiHostingCustomerCreateKeyForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerCreateKey\AiHostingCustomerCreateKeyNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerCreateKey\AiHostingCustomerCreateKeyPreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerCreateKey\AiHostingCustomerCreateKeyRequest;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerCreateKey\AiHostingCustomerCreateKeyTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerDeleteKey\AiHostingCustomerDeleteKeyBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerDeleteKey\AiHostingCustomerDeleteKeyConflictResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerDeleteKey\AiHostingCustomerDeleteKeyDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerDeleteKey\AiHostingCustomerDeleteKeyForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerDeleteKey\AiHostingCustomerDeleteKeyNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerDeleteKey\AiHostingCustomerDeleteKeyPreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerDeleteKey\AiHostingCustomerDeleteKeyRequest;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerDeleteKey\AiHostingCustomerDeleteKeyTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerGetKey\AiHostingCustomerGetKeyBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerGetKey\AiHostingCustomerGetKeyDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerGetKey\AiHostingCustomerGetKeyForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerGetKey\AiHostingCustomerGetKeyNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerGetKey\AiHostingCustomerGetKeyOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerGetKey\AiHostingCustomerGetKeyRequest;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerGetKey\AiHostingCustomerGetKeyTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerGetKeys\AiHostingCustomerGetKeysBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerGetKeys\AiHostingCustomerGetKeysDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerGetKeys\AiHostingCustomerGetKeysForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerGetKeys\AiHostingCustomerGetKeysNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerGetKeys\AiHostingCustomerGetKeysOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerGetKeys\AiHostingCustomerGetKeysRequest;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerGetKeys\AiHostingCustomerGetKeysTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerGetUsage\AiHostingCustomerGetUsageBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerGetUsage\AiHostingCustomerGetUsageDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerGetUsage\AiHostingCustomerGetUsageForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerGetUsage\AiHostingCustomerGetUsageNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerGetUsage\AiHostingCustomerGetUsageOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerGetUsage\AiHostingCustomerGetUsageRequest;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerGetUsage\AiHostingCustomerGetUsageTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerUpdateKey\AiHostingCustomerUpdateKeyBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerUpdateKey\AiHostingCustomerUpdateKeyConflictResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerUpdateKey\AiHostingCustomerUpdateKeyDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerUpdateKey\AiHostingCustomerUpdateKeyForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerUpdateKey\AiHostingCustomerUpdateKeyNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerUpdateKey\AiHostingCustomerUpdateKeyOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerUpdateKey\AiHostingCustomerUpdateKeyPreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerUpdateKey\AiHostingCustomerUpdateKeyRequest;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingCustomerUpdateKey\AiHostingCustomerUpdateKeyTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingGetModels\AiHostingGetModelsBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingGetModels\AiHostingGetModelsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingGetModels\AiHostingGetModelsForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingGetModels\AiHostingGetModelsNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingGetModels\AiHostingGetModelsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingGetModels\AiHostingGetModelsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingGetModels\AiHostingGetModelsTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectCreateKey\AiHostingProjectCreateKeyBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectCreateKey\AiHostingProjectCreateKeyConflictResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectCreateKey\AiHostingProjectCreateKeyCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectCreateKey\AiHostingProjectCreateKeyDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectCreateKey\AiHostingProjectCreateKeyForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectCreateKey\AiHostingProjectCreateKeyNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectCreateKey\AiHostingProjectCreateKeyPreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectCreateKey\AiHostingProjectCreateKeyRequest;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectCreateKey\AiHostingProjectCreateKeyTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectDeleteKey\AiHostingProjectDeleteKeyBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectDeleteKey\AiHostingProjectDeleteKeyConflictResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectDeleteKey\AiHostingProjectDeleteKeyDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectDeleteKey\AiHostingProjectDeleteKeyForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectDeleteKey\AiHostingProjectDeleteKeyNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectDeleteKey\AiHostingProjectDeleteKeyPreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectDeleteKey\AiHostingProjectDeleteKeyRequest;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectDeleteKey\AiHostingProjectDeleteKeyTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectGetKey\AiHostingProjectGetKeyBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectGetKey\AiHostingProjectGetKeyDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectGetKey\AiHostingProjectGetKeyForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectGetKey\AiHostingProjectGetKeyNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectGetKey\AiHostingProjectGetKeyOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectGetKey\AiHostingProjectGetKeyRequest;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectGetKey\AiHostingProjectGetKeyTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectGetKeys\AiHostingProjectGetKeysBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectGetKeys\AiHostingProjectGetKeysDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectGetKeys\AiHostingProjectGetKeysForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectGetKeys\AiHostingProjectGetKeysNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectGetKeys\AiHostingProjectGetKeysOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectGetKeys\AiHostingProjectGetKeysRequest;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectGetKeys\AiHostingProjectGetKeysTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectGetUsage\AiHostingProjectGetUsageBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectGetUsage\AiHostingProjectGetUsageDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectGetUsage\AiHostingProjectGetUsageForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectGetUsage\AiHostingProjectGetUsageNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectGetUsage\AiHostingProjectGetUsageOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectGetUsage\AiHostingProjectGetUsageRequest;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectGetUsage\AiHostingProjectGetUsageTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectUpdateKey\AiHostingProjectUpdateKeyBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectUpdateKey\AiHostingProjectUpdateKeyConflictResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectUpdateKey\AiHostingProjectUpdateKeyDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectUpdateKey\AiHostingProjectUpdateKeyForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectUpdateKey\AiHostingProjectUpdateKeyNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectUpdateKey\AiHostingProjectUpdateKeyOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectUpdateKey\AiHostingProjectUpdateKeyPreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectUpdateKey\AiHostingProjectUpdateKeyRequest;
use Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectUpdateKey\AiHostingProjectUpdateKeyTooManyRequestsResponse;

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
     * Creates a new key.
     *
     * Creates a new key. Can be linked with a project to directly create web-ui container.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/AI-hosting/operation/ai-hosting-customer-create-key
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param AiHostingCustomerCreateKeyRequest $request An object representing the request for this operation
     */
    public function aiHostingCustomerCreateKey(AiHostingCustomerCreateKeyRequest $request): AiHostingCustomerCreateKeyCreatedResponse
    {
        $httpRequest = new Request(AiHostingCustomerCreateKeyRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 201) {
            return AiHostingCustomerCreateKeyCreatedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => AiHostingCustomerCreateKeyBadRequestResponse::fromResponse($httpResponse),
            403 => AiHostingCustomerCreateKeyForbiddenResponse::fromResponse($httpResponse),
            404 => AiHostingCustomerCreateKeyNotFoundResponse::fromResponse($httpResponse),
            409 => AiHostingCustomerCreateKeyConflictResponse::fromResponse($httpResponse),
            412 => AiHostingCustomerCreateKeyPreconditionFailedResponse::fromResponse($httpResponse),
            429 => AiHostingCustomerCreateKeyTooManyRequestsResponse::fromResponse($httpResponse),
            default => AiHostingCustomerCreateKeyDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Delete a key for a customer.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/AI-hosting/operation/ai-hosting-customer-delete-key
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param AiHostingCustomerDeleteKeyRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function aiHostingCustomerDeleteKey(AiHostingCustomerDeleteKeyRequest $request): EmptyResponse
    {
        $httpRequest = new Request(AiHostingCustomerDeleteKeyRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => AiHostingCustomerDeleteKeyBadRequestResponse::fromResponse($httpResponse),
            403 => AiHostingCustomerDeleteKeyForbiddenResponse::fromResponse($httpResponse),
            404 => AiHostingCustomerDeleteKeyNotFoundResponse::fromResponse($httpResponse),
            409 => AiHostingCustomerDeleteKeyConflictResponse::fromResponse($httpResponse),
            412 => AiHostingCustomerDeleteKeyPreconditionFailedResponse::fromResponse($httpResponse),
            429 => AiHostingCustomerDeleteKeyTooManyRequestsResponse::fromResponse($httpResponse),
            default => AiHostingCustomerDeleteKeyDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a key of a customer.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/AI-hosting/operation/ai-hosting-customer-get-key
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param AiHostingCustomerGetKeyRequest $request An object representing the request for this operation
     * @return AiHostingCustomerGetKeyOKResponse The key of a customer.
     */
    public function aiHostingCustomerGetKey(AiHostingCustomerGetKeyRequest $request): AiHostingCustomerGetKeyOKResponse
    {
        $httpRequest = new Request(AiHostingCustomerGetKeyRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return AiHostingCustomerGetKeyOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => AiHostingCustomerGetKeyBadRequestResponse::fromResponse($httpResponse),
            403 => AiHostingCustomerGetKeyForbiddenResponse::fromResponse($httpResponse),
            404 => AiHostingCustomerGetKeyNotFoundResponse::fromResponse($httpResponse),
            429 => AiHostingCustomerGetKeyTooManyRequestsResponse::fromResponse($httpResponse),
            default => AiHostingCustomerGetKeyDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a list of already created keys.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/AI-hosting/operation/ai-hosting-customer-get-keys
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param AiHostingCustomerGetKeysRequest $request An object representing the request for this operation
     * @return AiHostingCustomerGetKeysOKResponse List of keys of a customer.
     */
    public function aiHostingCustomerGetKeys(AiHostingCustomerGetKeysRequest $request): AiHostingCustomerGetKeysOKResponse
    {
        $httpRequest = new Request(AiHostingCustomerGetKeysRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return AiHostingCustomerGetKeysOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => AiHostingCustomerGetKeysBadRequestResponse::fromResponse($httpResponse),
            403 => AiHostingCustomerGetKeysForbiddenResponse::fromResponse($httpResponse),
            404 => AiHostingCustomerGetKeysNotFoundResponse::fromResponse($httpResponse),
            429 => AiHostingCustomerGetKeysTooManyRequestsResponse::fromResponse($httpResponse),
            default => AiHostingCustomerGetKeysDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get ai hosting tariff and usages of a customer.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/AI-hosting/operation/ai-hosting-customer-get-usage
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param AiHostingCustomerGetUsageRequest $request An object representing the request for this operation
     * @return AiHostingCustomerGetUsageOKResponse The customer usage and tariff.
     */
    public function aiHostingCustomerGetUsage(AiHostingCustomerGetUsageRequest $request): AiHostingCustomerGetUsageOKResponse
    {
        $httpRequest = new Request(AiHostingCustomerGetUsageRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return AiHostingCustomerGetUsageOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => AiHostingCustomerGetUsageBadRequestResponse::fromResponse($httpResponse),
            403 => AiHostingCustomerGetUsageForbiddenResponse::fromResponse($httpResponse),
            404 => AiHostingCustomerGetUsageNotFoundResponse::fromResponse($httpResponse),
            429 => AiHostingCustomerGetUsageTooManyRequestsResponse::fromResponse($httpResponse),
            default => AiHostingCustomerGetUsageDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update a key for a customer.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/AI-hosting/operation/ai-hosting-customer-update-key
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param AiHostingCustomerUpdateKeyRequest $request An object representing the request for this operation
     */
    public function aiHostingCustomerUpdateKey(AiHostingCustomerUpdateKeyRequest $request): AiHostingCustomerUpdateKeyOKResponse
    {
        $httpRequest = new Request(AiHostingCustomerUpdateKeyRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return AiHostingCustomerUpdateKeyOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => AiHostingCustomerUpdateKeyBadRequestResponse::fromResponse($httpResponse),
            403 => AiHostingCustomerUpdateKeyForbiddenResponse::fromResponse($httpResponse),
            404 => AiHostingCustomerUpdateKeyNotFoundResponse::fromResponse($httpResponse),
            409 => AiHostingCustomerUpdateKeyConflictResponse::fromResponse($httpResponse),
            412 => AiHostingCustomerUpdateKeyPreconditionFailedResponse::fromResponse($httpResponse),
            429 => AiHostingCustomerUpdateKeyTooManyRequestsResponse::fromResponse($httpResponse),
            default => AiHostingCustomerUpdateKeyDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a list of currently active models.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/AI-hosting/operation/ai-hosting-get-models
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param AiHostingGetModelsRequest $request An object representing the request for this operation
     * @return AiHostingGetModelsOKResponse List of currently active models.
     */
    public function aiHostingGetModels(AiHostingGetModelsRequest $request): AiHostingGetModelsOKResponse
    {
        $httpRequest = new Request(AiHostingGetModelsRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return AiHostingGetModelsOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => AiHostingGetModelsBadRequestResponse::fromResponse($httpResponse),
            403 => AiHostingGetModelsForbiddenResponse::fromResponse($httpResponse),
            404 => AiHostingGetModelsNotFoundResponse::fromResponse($httpResponse),
            429 => AiHostingGetModelsTooManyRequestsResponse::fromResponse($httpResponse),
            default => AiHostingGetModelsDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Creates a new key for a project.
     *
     * Creates a new key for a project. Same as the customer route but with required projectId. And project users can create it.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/AI-hosting/operation/ai-hosting-project-create-key
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param AiHostingProjectCreateKeyRequest $request An object representing the request for this operation
     */
    public function aiHostingProjectCreateKey(AiHostingProjectCreateKeyRequest $request): AiHostingProjectCreateKeyCreatedResponse
    {
        $httpRequest = new Request(AiHostingProjectCreateKeyRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 201) {
            return AiHostingProjectCreateKeyCreatedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => AiHostingProjectCreateKeyBadRequestResponse::fromResponse($httpResponse),
            403 => AiHostingProjectCreateKeyForbiddenResponse::fromResponse($httpResponse),
            404 => AiHostingProjectCreateKeyNotFoundResponse::fromResponse($httpResponse),
            409 => AiHostingProjectCreateKeyConflictResponse::fromResponse($httpResponse),
            412 => AiHostingProjectCreateKeyPreconditionFailedResponse::fromResponse($httpResponse),
            429 => AiHostingProjectCreateKeyTooManyRequestsResponse::fromResponse($httpResponse),
            default => AiHostingProjectCreateKeyDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Delete a key for a project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/AI-hosting/operation/ai-hosting-project-delete-key
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param AiHostingProjectDeleteKeyRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function aiHostingProjectDeleteKey(AiHostingProjectDeleteKeyRequest $request): EmptyResponse
    {
        $httpRequest = new Request(AiHostingProjectDeleteKeyRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => AiHostingProjectDeleteKeyBadRequestResponse::fromResponse($httpResponse),
            403 => AiHostingProjectDeleteKeyForbiddenResponse::fromResponse($httpResponse),
            404 => AiHostingProjectDeleteKeyNotFoundResponse::fromResponse($httpResponse),
            409 => AiHostingProjectDeleteKeyConflictResponse::fromResponse($httpResponse),
            412 => AiHostingProjectDeleteKeyPreconditionFailedResponse::fromResponse($httpResponse),
            429 => AiHostingProjectDeleteKeyTooManyRequestsResponse::fromResponse($httpResponse),
            default => AiHostingProjectDeleteKeyDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a key of a project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/AI-hosting/operation/ai-hosting-project-get-key
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param AiHostingProjectGetKeyRequest $request An object representing the request for this operation
     * @return AiHostingProjectGetKeyOKResponse The key of a project.
     */
    public function aiHostingProjectGetKey(AiHostingProjectGetKeyRequest $request): AiHostingProjectGetKeyOKResponse
    {
        $httpRequest = new Request(AiHostingProjectGetKeyRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return AiHostingProjectGetKeyOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => AiHostingProjectGetKeyBadRequestResponse::fromResponse($httpResponse),
            403 => AiHostingProjectGetKeyForbiddenResponse::fromResponse($httpResponse),
            404 => AiHostingProjectGetKeyNotFoundResponse::fromResponse($httpResponse),
            429 => AiHostingProjectGetKeyTooManyRequestsResponse::fromResponse($httpResponse),
            default => AiHostingProjectGetKeyDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a list of keys of a project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/AI-hosting/operation/ai-hosting-project-get-keys
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param AiHostingProjectGetKeysRequest $request An object representing the request for this operation
     * @return AiHostingProjectGetKeysOKResponse List of keys of a project.
     */
    public function aiHostingProjectGetKeys(AiHostingProjectGetKeysRequest $request): AiHostingProjectGetKeysOKResponse
    {
        $httpRequest = new Request(AiHostingProjectGetKeysRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return AiHostingProjectGetKeysOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => AiHostingProjectGetKeysBadRequestResponse::fromResponse($httpResponse),
            403 => AiHostingProjectGetKeysForbiddenResponse::fromResponse($httpResponse),
            404 => AiHostingProjectGetKeysNotFoundResponse::fromResponse($httpResponse),
            429 => AiHostingProjectGetKeysTooManyRequestsResponse::fromResponse($httpResponse),
            default => AiHostingProjectGetKeysDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get ai hosting tariff and usages of a project. Same as the customer route, but less details.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/AI-hosting/operation/ai-hosting-project-get-usage
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param AiHostingProjectGetUsageRequest $request An object representing the request for this operation
     * @return AiHostingProjectGetUsageOKResponse The project usage and tariff.
     */
    public function aiHostingProjectGetUsage(AiHostingProjectGetUsageRequest $request): AiHostingProjectGetUsageOKResponse
    {
        $httpRequest = new Request(AiHostingProjectGetUsageRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return AiHostingProjectGetUsageOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => AiHostingProjectGetUsageBadRequestResponse::fromResponse($httpResponse),
            403 => AiHostingProjectGetUsageForbiddenResponse::fromResponse($httpResponse),
            404 => AiHostingProjectGetUsageNotFoundResponse::fromResponse($httpResponse),
            429 => AiHostingProjectGetUsageTooManyRequestsResponse::fromResponse($httpResponse),
            default => AiHostingProjectGetUsageDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update a key for a project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/AI-hosting/operation/ai-hosting-project-update-key
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param AiHostingProjectUpdateKeyRequest $request An object representing the request for this operation
     */
    public function aiHostingProjectUpdateKey(AiHostingProjectUpdateKeyRequest $request): AiHostingProjectUpdateKeyOKResponse
    {
        $httpRequest = new Request(AiHostingProjectUpdateKeyRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return AiHostingProjectUpdateKeyOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => AiHostingProjectUpdateKeyBadRequestResponse::fromResponse($httpResponse),
            403 => AiHostingProjectUpdateKeyForbiddenResponse::fromResponse($httpResponse),
            404 => AiHostingProjectUpdateKeyNotFoundResponse::fromResponse($httpResponse),
            409 => AiHostingProjectUpdateKeyConflictResponse::fromResponse($httpResponse),
            412 => AiHostingProjectUpdateKeyPreconditionFailedResponse::fromResponse($httpResponse),
            429 => AiHostingProjectUpdateKeyTooManyRequestsResponse::fromResponse($httpResponse),
            default => AiHostingProjectUpdateKeyDefaultResponse::fromResponse($httpResponse),
        });
    }
}
