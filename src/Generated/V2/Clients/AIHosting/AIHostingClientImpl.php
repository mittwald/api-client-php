<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\AIHosting;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use Mittwald\ApiClient\Client\EmptyResponse;
use Mittwald\ApiClient\Error\UnexpectedResponseException;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\CustomerCreateKey\CustomerCreateKeyBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\CustomerCreateKey\CustomerCreateKeyConflictResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\CustomerCreateKey\CustomerCreateKeyCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\CustomerCreateKey\CustomerCreateKeyDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\CustomerCreateKey\CustomerCreateKeyForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\CustomerCreateKey\CustomerCreateKeyNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\CustomerCreateKey\CustomerCreateKeyPreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\CustomerCreateKey\CustomerCreateKeyRequest;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\CustomerCreateKey\CustomerCreateKeyTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\CustomerDeleteKey\CustomerDeleteKeyBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\CustomerDeleteKey\CustomerDeleteKeyConflictResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\CustomerDeleteKey\CustomerDeleteKeyDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\CustomerDeleteKey\CustomerDeleteKeyForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\CustomerDeleteKey\CustomerDeleteKeyNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\CustomerDeleteKey\CustomerDeleteKeyPreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\CustomerDeleteKey\CustomerDeleteKeyRequest;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\CustomerDeleteKey\CustomerDeleteKeyTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\CustomerGetKey\CustomerGetKeyBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\CustomerGetKey\CustomerGetKeyDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\CustomerGetKey\CustomerGetKeyForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\CustomerGetKey\CustomerGetKeyNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\CustomerGetKey\CustomerGetKeyOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\CustomerGetKey\CustomerGetKeyRequest;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\CustomerGetKey\CustomerGetKeyTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\CustomerGetKeys\CustomerGetKeysBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\CustomerGetKeys\CustomerGetKeysDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\CustomerGetKeys\CustomerGetKeysForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\CustomerGetKeys\CustomerGetKeysNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\CustomerGetKeys\CustomerGetKeysOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\CustomerGetKeys\CustomerGetKeysRequest;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\CustomerGetKeys\CustomerGetKeysTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\CustomerGetUsage\CustomerGetUsageBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\CustomerGetUsage\CustomerGetUsageDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\CustomerGetUsage\CustomerGetUsageForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\CustomerGetUsage\CustomerGetUsageNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\CustomerGetUsage\CustomerGetUsageOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\CustomerGetUsage\CustomerGetUsageRequest;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\CustomerGetUsage\CustomerGetUsageTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\CustomerUpdateKey\CustomerUpdateKeyBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\CustomerUpdateKey\CustomerUpdateKeyConflictResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\CustomerUpdateKey\CustomerUpdateKeyDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\CustomerUpdateKey\CustomerUpdateKeyForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\CustomerUpdateKey\CustomerUpdateKeyNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\CustomerUpdateKey\CustomerUpdateKeyOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\CustomerUpdateKey\CustomerUpdateKeyPreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\CustomerUpdateKey\CustomerUpdateKeyRequest;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\CustomerUpdateKey\CustomerUpdateKeyTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\GetModels\GetModelsBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\GetModels\GetModelsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\GetModels\GetModelsForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\GetModels\GetModelsNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\GetModels\GetModelsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\GetModels\GetModelsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\GetModels\GetModelsTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\ProjectCreateKey\ProjectCreateKeyBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\ProjectCreateKey\ProjectCreateKeyConflictResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\ProjectCreateKey\ProjectCreateKeyCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\ProjectCreateKey\ProjectCreateKeyDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\ProjectCreateKey\ProjectCreateKeyForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\ProjectCreateKey\ProjectCreateKeyNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\ProjectCreateKey\ProjectCreateKeyPreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\ProjectCreateKey\ProjectCreateKeyRequest;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\ProjectCreateKey\ProjectCreateKeyTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\ProjectDeleteKey\ProjectDeleteKeyBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\ProjectDeleteKey\ProjectDeleteKeyConflictResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\ProjectDeleteKey\ProjectDeleteKeyDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\ProjectDeleteKey\ProjectDeleteKeyForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\ProjectDeleteKey\ProjectDeleteKeyNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\ProjectDeleteKey\ProjectDeleteKeyPreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\ProjectDeleteKey\ProjectDeleteKeyRequest;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\ProjectDeleteKey\ProjectDeleteKeyTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\ProjectGetKey\ProjectGetKeyBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\ProjectGetKey\ProjectGetKeyDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\ProjectGetKey\ProjectGetKeyForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\ProjectGetKey\ProjectGetKeyNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\ProjectGetKey\ProjectGetKeyOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\ProjectGetKey\ProjectGetKeyRequest;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\ProjectGetKey\ProjectGetKeyTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\ProjectGetKeys\ProjectGetKeysBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\ProjectGetKeys\ProjectGetKeysDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\ProjectGetKeys\ProjectGetKeysForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\ProjectGetKeys\ProjectGetKeysNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\ProjectGetKeys\ProjectGetKeysOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\ProjectGetKeys\ProjectGetKeysRequest;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\ProjectGetKeys\ProjectGetKeysTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\ProjectGetUsage\ProjectGetUsageBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\ProjectGetUsage\ProjectGetUsageDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\ProjectGetUsage\ProjectGetUsageForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\ProjectGetUsage\ProjectGetUsageNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\ProjectGetUsage\ProjectGetUsageOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\ProjectGetUsage\ProjectGetUsageRequest;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\ProjectGetUsage\ProjectGetUsageTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\ProjectUpdateKey\ProjectUpdateKeyBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\ProjectUpdateKey\ProjectUpdateKeyConflictResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\ProjectUpdateKey\ProjectUpdateKeyDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\ProjectUpdateKey\ProjectUpdateKeyForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\ProjectUpdateKey\ProjectUpdateKeyNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\ProjectUpdateKey\ProjectUpdateKeyOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\ProjectUpdateKey\ProjectUpdateKeyPreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\ProjectUpdateKey\ProjectUpdateKeyRequest;
use Mittwald\ApiClient\Generated\V2\Clients\AIHosting\ProjectUpdateKey\ProjectUpdateKeyTooManyRequestsResponse;

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
class AIHostingClientImpl implements AIHostingClient
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
     * @param CustomerCreateKeyRequest $request An object representing the request for this operation
     */
    public function customerCreateKey(CustomerCreateKeyRequest $request): CustomerCreateKeyCreatedResponse
    {
        $httpRequest = new Request(CustomerCreateKeyRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 201) {
            return CustomerCreateKeyCreatedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => CustomerCreateKeyBadRequestResponse::fromResponse($httpResponse),
            403 => CustomerCreateKeyForbiddenResponse::fromResponse($httpResponse),
            404 => CustomerCreateKeyNotFoundResponse::fromResponse($httpResponse),
            409 => CustomerCreateKeyConflictResponse::fromResponse($httpResponse),
            412 => CustomerCreateKeyPreconditionFailedResponse::fromResponse($httpResponse),
            429 => CustomerCreateKeyTooManyRequestsResponse::fromResponse($httpResponse),
            default => CustomerCreateKeyDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Delete a key for a customer.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/AI-hosting/operation/ai-hosting-customer-delete-key
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CustomerDeleteKeyRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function customerDeleteKey(CustomerDeleteKeyRequest $request): EmptyResponse
    {
        $httpRequest = new Request(CustomerDeleteKeyRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => CustomerDeleteKeyBadRequestResponse::fromResponse($httpResponse),
            403 => CustomerDeleteKeyForbiddenResponse::fromResponse($httpResponse),
            404 => CustomerDeleteKeyNotFoundResponse::fromResponse($httpResponse),
            409 => CustomerDeleteKeyConflictResponse::fromResponse($httpResponse),
            412 => CustomerDeleteKeyPreconditionFailedResponse::fromResponse($httpResponse),
            429 => CustomerDeleteKeyTooManyRequestsResponse::fromResponse($httpResponse),
            default => CustomerDeleteKeyDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a key of a customer.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/AI-hosting/operation/ai-hosting-customer-get-key
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CustomerGetKeyRequest $request An object representing the request for this operation
     * @return CustomerGetKeyOKResponse The key of a customer.
     */
    public function customerGetKey(CustomerGetKeyRequest $request): CustomerGetKeyOKResponse
    {
        $httpRequest = new Request(CustomerGetKeyRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return CustomerGetKeyOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => CustomerGetKeyBadRequestResponse::fromResponse($httpResponse),
            403 => CustomerGetKeyForbiddenResponse::fromResponse($httpResponse),
            404 => CustomerGetKeyNotFoundResponse::fromResponse($httpResponse),
            429 => CustomerGetKeyTooManyRequestsResponse::fromResponse($httpResponse),
            default => CustomerGetKeyDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a list of already created keys.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/AI-hosting/operation/ai-hosting-customer-get-keys
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CustomerGetKeysRequest $request An object representing the request for this operation
     * @return CustomerGetKeysOKResponse List of keys of a customer.
     */
    public function customerGetKeys(CustomerGetKeysRequest $request): CustomerGetKeysOKResponse
    {
        $httpRequest = new Request(CustomerGetKeysRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return CustomerGetKeysOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => CustomerGetKeysBadRequestResponse::fromResponse($httpResponse),
            403 => CustomerGetKeysForbiddenResponse::fromResponse($httpResponse),
            404 => CustomerGetKeysNotFoundResponse::fromResponse($httpResponse),
            429 => CustomerGetKeysTooManyRequestsResponse::fromResponse($httpResponse),
            default => CustomerGetKeysDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get ai hosting plan and usages of a customer.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/AI-hosting/operation/ai-hosting-customer-get-usage
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CustomerGetUsageRequest $request An object representing the request for this operation
     * @return CustomerGetUsageOKResponse The customer usage and plan.
     */
    public function customerGetUsage(CustomerGetUsageRequest $request): CustomerGetUsageOKResponse
    {
        $httpRequest = new Request(CustomerGetUsageRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return CustomerGetUsageOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => CustomerGetUsageBadRequestResponse::fromResponse($httpResponse),
            403 => CustomerGetUsageForbiddenResponse::fromResponse($httpResponse),
            404 => CustomerGetUsageNotFoundResponse::fromResponse($httpResponse),
            429 => CustomerGetUsageTooManyRequestsResponse::fromResponse($httpResponse),
            default => CustomerGetUsageDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update a key for a customer.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/AI-hosting/operation/ai-hosting-customer-update-key
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CustomerUpdateKeyRequest $request An object representing the request for this operation
     */
    public function customerUpdateKey(CustomerUpdateKeyRequest $request): CustomerUpdateKeyOKResponse
    {
        $httpRequest = new Request(CustomerUpdateKeyRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return CustomerUpdateKeyOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => CustomerUpdateKeyBadRequestResponse::fromResponse($httpResponse),
            403 => CustomerUpdateKeyForbiddenResponse::fromResponse($httpResponse),
            404 => CustomerUpdateKeyNotFoundResponse::fromResponse($httpResponse),
            409 => CustomerUpdateKeyConflictResponse::fromResponse($httpResponse),
            412 => CustomerUpdateKeyPreconditionFailedResponse::fromResponse($httpResponse),
            429 => CustomerUpdateKeyTooManyRequestsResponse::fromResponse($httpResponse),
            default => CustomerUpdateKeyDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a list of currently active models.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/AI-hosting/operation/ai-hosting-get-models
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetModelsRequest $request An object representing the request for this operation
     * @return GetModelsOKResponse List of currently active models.
     */
    public function getModels(GetModelsRequest $request): GetModelsOKResponse
    {
        $httpRequest = new Request(GetModelsRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetModelsOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => GetModelsBadRequestResponse::fromResponse($httpResponse),
            403 => GetModelsForbiddenResponse::fromResponse($httpResponse),
            404 => GetModelsNotFoundResponse::fromResponse($httpResponse),
            429 => GetModelsTooManyRequestsResponse::fromResponse($httpResponse),
            default => GetModelsDefaultResponse::fromResponse($httpResponse),
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
     * @param ProjectCreateKeyRequest $request An object representing the request for this operation
     */
    public function projectCreateKey(ProjectCreateKeyRequest $request): ProjectCreateKeyCreatedResponse
    {
        $httpRequest = new Request(ProjectCreateKeyRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 201) {
            return ProjectCreateKeyCreatedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ProjectCreateKeyBadRequestResponse::fromResponse($httpResponse),
            403 => ProjectCreateKeyForbiddenResponse::fromResponse($httpResponse),
            404 => ProjectCreateKeyNotFoundResponse::fromResponse($httpResponse),
            409 => ProjectCreateKeyConflictResponse::fromResponse($httpResponse),
            412 => ProjectCreateKeyPreconditionFailedResponse::fromResponse($httpResponse),
            429 => ProjectCreateKeyTooManyRequestsResponse::fromResponse($httpResponse),
            default => ProjectCreateKeyDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Delete a key for a project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/AI-hosting/operation/ai-hosting-project-delete-key
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ProjectDeleteKeyRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function projectDeleteKey(ProjectDeleteKeyRequest $request): EmptyResponse
    {
        $httpRequest = new Request(ProjectDeleteKeyRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ProjectDeleteKeyBadRequestResponse::fromResponse($httpResponse),
            403 => ProjectDeleteKeyForbiddenResponse::fromResponse($httpResponse),
            404 => ProjectDeleteKeyNotFoundResponse::fromResponse($httpResponse),
            409 => ProjectDeleteKeyConflictResponse::fromResponse($httpResponse),
            412 => ProjectDeleteKeyPreconditionFailedResponse::fromResponse($httpResponse),
            429 => ProjectDeleteKeyTooManyRequestsResponse::fromResponse($httpResponse),
            default => ProjectDeleteKeyDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a key of a project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/AI-hosting/operation/ai-hosting-project-get-key
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ProjectGetKeyRequest $request An object representing the request for this operation
     * @return ProjectGetKeyOKResponse The key of a project.
     */
    public function projectGetKey(ProjectGetKeyRequest $request): ProjectGetKeyOKResponse
    {
        $httpRequest = new Request(ProjectGetKeyRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ProjectGetKeyOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ProjectGetKeyBadRequestResponse::fromResponse($httpResponse),
            403 => ProjectGetKeyForbiddenResponse::fromResponse($httpResponse),
            404 => ProjectGetKeyNotFoundResponse::fromResponse($httpResponse),
            429 => ProjectGetKeyTooManyRequestsResponse::fromResponse($httpResponse),
            default => ProjectGetKeyDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a list of keys of a project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/AI-hosting/operation/ai-hosting-project-get-keys
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ProjectGetKeysRequest $request An object representing the request for this operation
     * @return ProjectGetKeysOKResponse List of keys of a project.
     */
    public function projectGetKeys(ProjectGetKeysRequest $request): ProjectGetKeysOKResponse
    {
        $httpRequest = new Request(ProjectGetKeysRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ProjectGetKeysOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ProjectGetKeysBadRequestResponse::fromResponse($httpResponse),
            403 => ProjectGetKeysForbiddenResponse::fromResponse($httpResponse),
            404 => ProjectGetKeysNotFoundResponse::fromResponse($httpResponse),
            429 => ProjectGetKeysTooManyRequestsResponse::fromResponse($httpResponse),
            default => ProjectGetKeysDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get ai hosting plan and usages of a project. Same as the customer route, but less details.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/AI-hosting/operation/ai-hosting-project-get-usage
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ProjectGetUsageRequest $request An object representing the request for this operation
     * @return ProjectGetUsageOKResponse The project usage and plan.
     */
    public function projectGetUsage(ProjectGetUsageRequest $request): ProjectGetUsageOKResponse
    {
        $httpRequest = new Request(ProjectGetUsageRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ProjectGetUsageOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ProjectGetUsageBadRequestResponse::fromResponse($httpResponse),
            403 => ProjectGetUsageForbiddenResponse::fromResponse($httpResponse),
            404 => ProjectGetUsageNotFoundResponse::fromResponse($httpResponse),
            429 => ProjectGetUsageTooManyRequestsResponse::fromResponse($httpResponse),
            default => ProjectGetUsageDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update a key for a project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/AI-hosting/operation/ai-hosting-project-update-key
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ProjectUpdateKeyRequest $request An object representing the request for this operation
     */
    public function projectUpdateKey(ProjectUpdateKeyRequest $request): ProjectUpdateKeyOKResponse
    {
        $httpRequest = new Request(ProjectUpdateKeyRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ProjectUpdateKeyOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ProjectUpdateKeyBadRequestResponse::fromResponse($httpResponse),
            403 => ProjectUpdateKeyForbiddenResponse::fromResponse($httpResponse),
            404 => ProjectUpdateKeyNotFoundResponse::fromResponse($httpResponse),
            409 => ProjectUpdateKeyConflictResponse::fromResponse($httpResponse),
            412 => ProjectUpdateKeyPreconditionFailedResponse::fromResponse($httpResponse),
            429 => ProjectUpdateKeyTooManyRequestsResponse::fromResponse($httpResponse),
            default => ProjectUpdateKeyDefaultResponse::fromResponse($httpResponse),
        });
    }
}
