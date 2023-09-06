<?php

namespace Mittwald\ApiClient\Generated\V2\Clients\Cronjob;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use Mittwald\ApiClient\Client\EmptyResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\AbortExecution\AbortExecution200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\AbortExecution\AbortExecution404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\AbortExecution\AbortExecutionDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\AbortExecution\AbortExecutionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\CreateCronjob\CreateCronjob201Response;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\CreateCronjob\CreateCronjob400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\CreateCronjob\CreateCronjob412Response;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\CreateCronjob\CreateCronjobDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\CreateCronjob\CreateCronjobRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\CreateExecution\CreateExecution201Response;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\CreateExecution\CreateExecution404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\CreateExecution\CreateExecution412Response;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\CreateExecution\CreateExecutionDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\CreateExecution\CreateExecutionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\DeleteCronjob\DeleteCronjob400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\DeleteCronjob\DeleteCronjob412Response;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\DeleteCronjob\DeleteCronjobDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\DeleteCronjob\DeleteCronjobRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\GetCronjob\GetCronjob200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\GetCronjob\GetCronjob404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\GetCronjob\GetCronjobDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\GetCronjob\GetCronjobRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\GetExecution\GetExecution200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\GetExecution\GetExecution404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\GetExecution\GetExecutionDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\GetExecution\GetExecutionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\ListCronjobs\ListCronjobs200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\ListCronjobs\ListCronjobsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\ListCronjobs\ListCronjobsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\ListExecutions\ListExecutions200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\ListExecutions\ListExecutionsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\ListExecutions\ListExecutionsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\UpdateCronjob\UpdateCronjob200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\UpdateCronjob\UpdateCronjob400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\UpdateCronjob\UpdateCronjob404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\UpdateCronjob\UpdateCronjob412Response;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\UpdateCronjob\UpdateCronjobDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\UpdateCronjob\UpdateCronjobRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\UpdateCronjobAppId\UpdateCronjobAppId201Response;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\UpdateCronjobAppId\UpdateCronjobAppId400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\UpdateCronjobAppId\UpdateCronjobAppId412Response;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\UpdateCronjobAppId\UpdateCronjobAppIdDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\UpdateCronjobAppId\UpdateCronjobAppIdRequest;

class CronjobClient
{
    private Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function abortExecution(AbortExecutionRequest $request): AbortExecution200Response|AbortExecution404Response|AbortExecutionDefaultResponse
    {
        $httpRequest = new Request(AbortExecutionRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => AbortExecution200Response::fromResponse($httpResponse),
            404 => AbortExecution404Response::fromResponse($httpResponse),
            default => AbortExecutionDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function createCronjob(CreateCronjobRequest $request): CreateCronjob201Response|CreateCronjob400Response|CreateCronjob412Response|CreateCronjobDefaultResponse
    {
        $httpRequest = new Request(CreateCronjobRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => CreateCronjob201Response::fromResponse($httpResponse),
            400 => CreateCronjob400Response::fromResponse($httpResponse),
            412 => CreateCronjob412Response::fromResponse($httpResponse),
            default => CreateCronjobDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listCronjobs(ListCronjobsRequest $request): ListCronjobs200Response|ListCronjobsDefaultResponse
    {
        $httpRequest = new Request(ListCronjobsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListCronjobs200Response::fromResponse($httpResponse),
            default => ListCronjobsDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function createExecution(CreateExecutionRequest $request): CreateExecution201Response|CreateExecution404Response|CreateExecution412Response|CreateExecutionDefaultResponse
    {
        $httpRequest = new Request(CreateExecutionRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => CreateExecution201Response::fromResponse($httpResponse),
            404 => CreateExecution404Response::fromResponse($httpResponse),
            412 => CreateExecution412Response::fromResponse($httpResponse),
            default => CreateExecutionDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listExecutions(ListExecutionsRequest $request): ListExecutions200Response|ListExecutionsDefaultResponse
    {
        $httpRequest = new Request(ListExecutionsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListExecutions200Response::fromResponse($httpResponse),
            default => ListExecutionsDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deleteCronjob(DeleteCronjobRequest $request): EmptyResponse|DeleteCronjob400Response|DeleteCronjob412Response|DeleteCronjobDefaultResponse
    {
        $httpRequest = new Request(DeleteCronjobRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200, 204 => new EmptyResponse($httpResponse),
            400 => DeleteCronjob400Response::fromResponse($httpResponse),
            412 => DeleteCronjob412Response::fromResponse($httpResponse),
            default => DeleteCronjobDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getCronjob(GetCronjobRequest $request): GetCronjob200Response|GetCronjob404Response|GetCronjobDefaultResponse
    {
        $httpRequest = new Request(GetCronjobRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetCronjob200Response::fromResponse($httpResponse),
            404 => GetCronjob404Response::fromResponse($httpResponse),
            default => GetCronjobDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function updateCronjob(UpdateCronjobRequest $request): UpdateCronjob200Response|UpdateCronjob400Response|UpdateCronjob404Response|UpdateCronjob412Response|UpdateCronjobDefaultResponse
    {
        $httpRequest = new Request(UpdateCronjobRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => UpdateCronjob200Response::fromResponse($httpResponse),
            400 => UpdateCronjob400Response::fromResponse($httpResponse),
            404 => UpdateCronjob404Response::fromResponse($httpResponse),
            412 => UpdateCronjob412Response::fromResponse($httpResponse),
            default => UpdateCronjobDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getExecution(GetExecutionRequest $request): GetExecution200Response|GetExecution404Response|GetExecutionDefaultResponse
    {
        $httpRequest = new Request(GetExecutionRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetExecution200Response::fromResponse($httpResponse),
            404 => GetExecution404Response::fromResponse($httpResponse),
            default => GetExecutionDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function updateCronjobAppId(UpdateCronjobAppIdRequest $request): EmptyResponse|UpdateCronjobAppId201Response|UpdateCronjobAppId400Response|UpdateCronjobAppId412Response|UpdateCronjobAppIdDefaultResponse
    {
        $httpRequest = new Request(UpdateCronjobAppIdRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => UpdateCronjobAppId201Response::fromResponse($httpResponse),
            204 => new EmptyResponse($httpResponse),
            400 => UpdateCronjobAppId400Response::fromResponse($httpResponse),
            412 => UpdateCronjobAppId412Response::fromResponse($httpResponse),
            default => UpdateCronjobAppIdDefaultResponse::fromResponse($httpResponse),
        };
    }
}
