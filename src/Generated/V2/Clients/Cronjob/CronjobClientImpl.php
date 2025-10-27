<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Cronjob;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use Mittwald\ApiClient\Client\EmptyResponse;
use Mittwald\ApiClient\Error\UnexpectedResponseException;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\AbortExecution\AbortExecutionDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\AbortExecution\AbortExecutionNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\AbortExecution\AbortExecutionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\AbortExecution\AbortExecutionTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\CreateCronjob\CreateCronjobBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\CreateCronjob\CreateCronjobCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\CreateCronjob\CreateCronjobDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\CreateCronjob\CreateCronjobPreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\CreateCronjob\CreateCronjobRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\CreateCronjob\CreateCronjobTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\CreateExecution\CreateExecutionCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\CreateExecution\CreateExecutionDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\CreateExecution\CreateExecutionNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\CreateExecution\CreateExecutionPreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\CreateExecution\CreateExecutionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\CreateExecution\CreateExecutionTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\DeleteCronjob\DeleteCronjobBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\DeleteCronjob\DeleteCronjobDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\DeleteCronjob\DeleteCronjobPreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\DeleteCronjob\DeleteCronjobRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\DeleteCronjob\DeleteCronjobTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\GetCronjob\GetCronjobDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\GetCronjob\GetCronjobNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\GetCronjob\GetCronjobOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\GetCronjob\GetCronjobRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\GetCronjob\GetCronjobTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\GetExecution\GetExecutionDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\GetExecution\GetExecutionNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\GetExecution\GetExecutionOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\GetExecution\GetExecutionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\GetExecution\GetExecutionTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\GetExecutionAnalysis\GetExecutionAnalysisBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\GetExecutionAnalysis\GetExecutionAnalysisDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\GetExecutionAnalysis\GetExecutionAnalysisForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\GetExecutionAnalysis\GetExecutionAnalysisInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\GetExecutionAnalysis\GetExecutionAnalysisNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\GetExecutionAnalysis\GetExecutionAnalysisOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\GetExecutionAnalysis\GetExecutionAnalysisPreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\GetExecutionAnalysis\GetExecutionAnalysisRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\GetExecutionAnalysis\GetExecutionAnalysisTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\ListCronjobs\ListCronjobsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\ListCronjobs\ListCronjobsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\ListCronjobs\ListCronjobsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\ListCronjobs\ListCronjobsTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\ListExecutions\ListExecutionsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\ListExecutions\ListExecutionsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\ListExecutions\ListExecutionsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\ListExecutions\ListExecutionsTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\UpdateCronjob\UpdateCronjobBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\UpdateCronjob\UpdateCronjobDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\UpdateCronjob\UpdateCronjobNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\UpdateCronjob\UpdateCronjobPreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\UpdateCronjob\UpdateCronjobRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\UpdateCronjob\UpdateCronjobTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\UpdateCronjobAppId\UpdateCronjobAppIdBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\UpdateCronjobAppId\UpdateCronjobAppIdDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\UpdateCronjobAppId\UpdateCronjobAppIdPreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\UpdateCronjobAppId\UpdateCronjobAppIdRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\UpdateCronjobAppId\UpdateCronjobAppIdTooManyRequestsResponse;

/**
 * Client for Cronjob API
 *
 * The cronjob API allows you to manage cronjobs within a project.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class CronjobClientImpl implements CronjobClient
{
    private Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Abort a CronjobExecution.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Cronjob/operation/cronjob-abort-execution
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param AbortExecutionRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function abortExecution(AbortExecutionRequest $request): EmptyResponse
    {
        $httpRequest = new Request(AbortExecutionRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => AbortExecutionNotFoundResponse::fromResponse($httpResponse),
            429 => AbortExecutionTooManyRequestsResponse::fromResponse($httpResponse),
            default => AbortExecutionDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Create a Cronjob.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Cronjob/operation/cronjob-create-cronjob
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CreateCronjobRequest $request An object representing the request for this operation
     * @return CreateCronjobCreatedResponse Created
     */
    public function createCronjob(CreateCronjobRequest $request): CreateCronjobCreatedResponse
    {
        $httpRequest = new Request(CreateCronjobRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 201) {
            return CreateCronjobCreatedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => CreateCronjobBadRequestResponse::fromResponse($httpResponse),
            412 => CreateCronjobPreconditionFailedResponse::fromResponse($httpResponse),
            429 => CreateCronjobTooManyRequestsResponse::fromResponse($httpResponse),
            default => CreateCronjobDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Trigger a Cronjob.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Cronjob/operation/cronjob-create-execution
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CreateExecutionRequest $request An object representing the request for this operation
     * @return CreateExecutionCreatedResponse Created
     */
    public function createExecution(CreateExecutionRequest $request): CreateExecutionCreatedResponse
    {
        $httpRequest = new Request(CreateExecutionRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 201) {
            return CreateExecutionCreatedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => CreateExecutionNotFoundResponse::fromResponse($httpResponse),
            412 => CreateExecutionPreconditionFailedResponse::fromResponse($httpResponse),
            429 => CreateExecutionTooManyRequestsResponse::fromResponse($httpResponse),
            default => CreateExecutionDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Delete a Cronjob.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Cronjob/operation/cronjob-delete-cronjob
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteCronjobRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function deleteCronjob(DeleteCronjobRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeleteCronjobRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeleteCronjobBadRequestResponse::fromResponse($httpResponse),
            412 => DeleteCronjobPreconditionFailedResponse::fromResponse($httpResponse),
            429 => DeleteCronjobTooManyRequestsResponse::fromResponse($httpResponse),
            default => DeleteCronjobDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a Cronjob.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Cronjob/operation/cronjob-get-cronjob
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetCronjobRequest $request An object representing the request for this operation
     * @return GetCronjobOKResponse OK
     */
    public function getCronjob(GetCronjobRequest $request): GetCronjobOKResponse
    {
        $httpRequest = new Request(GetCronjobRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetCronjobOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => GetCronjobNotFoundResponse::fromResponse($httpResponse),
            429 => GetCronjobTooManyRequestsResponse::fromResponse($httpResponse),
            default => GetCronjobDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a CronjobExecution.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Cronjob/operation/cronjob-get-execution
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetExecutionRequest $request An object representing the request for this operation
     * @return GetExecutionOKResponse OK
     */
    public function getExecution(GetExecutionRequest $request): GetExecutionOKResponse
    {
        $httpRequest = new Request(GetExecutionRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetExecutionOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => GetExecutionNotFoundResponse::fromResponse($httpResponse),
            429 => GetExecutionTooManyRequestsResponse::fromResponse($httpResponse),
            default => GetExecutionDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a CronjobExecution analysis for failed executions.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Cronjob/operation/cronjob-get-execution-analysis
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetExecutionAnalysisRequest $request An object representing the request for this operation
     * @return GetExecutionAnalysisOKResponse OK
     */
    public function getExecutionAnalysis(GetExecutionAnalysisRequest $request): GetExecutionAnalysisOKResponse
    {
        $httpRequest = new Request(GetExecutionAnalysisRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetExecutionAnalysisOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => GetExecutionAnalysisBadRequestResponse::fromResponse($httpResponse),
            403 => GetExecutionAnalysisForbiddenResponse::fromResponse($httpResponse),
            404 => GetExecutionAnalysisNotFoundResponse::fromResponse($httpResponse),
            412 => GetExecutionAnalysisPreconditionFailedResponse::fromResponse($httpResponse),
            429 => GetExecutionAnalysisTooManyRequestsResponse::fromResponse($httpResponse),
            500 => GetExecutionAnalysisInternalServerErrorResponse::fromResponse($httpResponse),
            default => GetExecutionAnalysisDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List Cronjobs belonging to a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Cronjob/operation/cronjob-list-cronjobs
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListCronjobsRequest $request An object representing the request for this operation
     * @return ListCronjobsOKResponse OK
     */
    public function listCronjobs(ListCronjobsRequest $request): ListCronjobsOKResponse
    {
        $httpRequest = new Request(ListCronjobsRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListCronjobsOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            429 => ListCronjobsTooManyRequestsResponse::fromResponse($httpResponse),
            default => ListCronjobsDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List CronjobExecutions belonging to a Cronjob.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Cronjob/operation/cronjob-list-executions
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListExecutionsRequest $request An object representing the request for this operation
     * @return ListExecutionsOKResponse OK
     */
    public function listExecutions(ListExecutionsRequest $request): ListExecutionsOKResponse
    {
        $httpRequest = new Request(ListExecutionsRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListExecutionsOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            429 => ListExecutionsTooManyRequestsResponse::fromResponse($httpResponse),
            default => ListExecutionsDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update a Cronjob.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Cronjob/operation/cronjob-update-cronjob
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateCronjobRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function updateCronjob(UpdateCronjobRequest $request): EmptyResponse
    {
        $httpRequest = new Request(UpdateCronjobRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateCronjobBadRequestResponse::fromResponse($httpResponse),
            404 => UpdateCronjobNotFoundResponse::fromResponse($httpResponse),
            412 => UpdateCronjobPreconditionFailedResponse::fromResponse($httpResponse),
            429 => UpdateCronjobTooManyRequestsResponse::fromResponse($httpResponse),
            default => UpdateCronjobDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update a Cronjob's app id.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Cronjob/operation/cronjob-update-cronjob-app-id
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateCronjobAppIdRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function updateCronjobAppId(UpdateCronjobAppIdRequest $request): EmptyResponse
    {
        $httpRequest = new Request(UpdateCronjobAppIdRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateCronjobAppIdBadRequestResponse::fromResponse($httpResponse),
            412 => UpdateCronjobAppIdPreconditionFailedResponse::fromResponse($httpResponse),
            429 => UpdateCronjobAppIdTooManyRequestsResponse::fromResponse($httpResponse),
            default => UpdateCronjobAppIdDefaultResponse::fromResponse($httpResponse),
        });
    }
}
