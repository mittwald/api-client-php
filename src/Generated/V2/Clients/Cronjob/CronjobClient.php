<?php

namespace Mittwald\ApiClient\Generated\V2\Clients\Cronjob;

use GuzzleHttp\Psr7\Request;

class CronjobClient
{
    private \GuzzleHttp\Client $client;

    public function __construct(\GuzzleHttp\Client $client)
    {
        $this->client = $client;
    }

    public function abortExecution(AbortExecution\AbortExecutionRequest $request) : AbortExecution\AbortExecution200Response|AbortExecution\AbortExecution404Response|AbortExecution\AbortExecutionDefaultResponse
    {
        $httpRequest = new Request(AbortExecution\AbortExecutionRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => AbortExecution\AbortExecution200Response::fromResponse($httpResponse),
            404 => AbortExecution\AbortExecution404Response::fromResponse($httpResponse),
            default => AbortExecution\AbortExecutionDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function createCronjob(CreateCronjob\CreateCronjobRequest $request) : CreateCronjob\CreateCronjob201Response|CreateCronjob\CreateCronjob400Response|CreateCronjob\CreateCronjob412Response|CreateCronjob\CreateCronjobDefaultResponse
    {
        $httpRequest = new Request(CreateCronjob\CreateCronjobRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => CreateCronjob\CreateCronjob201Response::fromResponse($httpResponse),
            400 => CreateCronjob\CreateCronjob400Response::fromResponse($httpResponse),
            412 => CreateCronjob\CreateCronjob412Response::fromResponse($httpResponse),
            default => CreateCronjob\CreateCronjobDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listCronjobs(ListCronjobs\ListCronjobsRequest $request) : ListCronjobs\ListCronjobs200Response|ListCronjobs\ListCronjobsDefaultResponse
    {
        $httpRequest = new Request(ListCronjobs\ListCronjobsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListCronjobs\ListCronjobs200Response::fromResponse($httpResponse),
            default => ListCronjobs\ListCronjobsDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function createExecution(CreateExecution\CreateExecutionRequest $request) : CreateExecution\CreateExecution201Response|CreateExecution\CreateExecution404Response|CreateExecution\CreateExecution412Response|CreateExecution\CreateExecutionDefaultResponse
    {
        $httpRequest = new Request(CreateExecution\CreateExecutionRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => CreateExecution\CreateExecution201Response::fromResponse($httpResponse),
            404 => CreateExecution\CreateExecution404Response::fromResponse($httpResponse),
            412 => CreateExecution\CreateExecution412Response::fromResponse($httpResponse),
            default => CreateExecution\CreateExecutionDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listExecutions(ListExecutions\ListExecutionsRequest $request) : ListExecutions\ListExecutions200Response|ListExecutions\ListExecutionsDefaultResponse
    {
        $httpRequest = new Request(ListExecutions\ListExecutionsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListExecutions\ListExecutions200Response::fromResponse($httpResponse),
            default => ListExecutions\ListExecutionsDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deleteCronjob(DeleteCronjob\DeleteCronjobRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|DeleteCronjob\DeleteCronjob400Response|DeleteCronjob\DeleteCronjob412Response|DeleteCronjob\DeleteCronjobDefaultResponse
    {
        $httpRequest = new Request(DeleteCronjob\DeleteCronjobRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200, 204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => DeleteCronjob\DeleteCronjob400Response::fromResponse($httpResponse),
            412 => DeleteCronjob\DeleteCronjob412Response::fromResponse($httpResponse),
            default => DeleteCronjob\DeleteCronjobDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getCronjob(GetCronjob\GetCronjobRequest $request) : GetCronjob\GetCronjob200Response|GetCronjob\GetCronjob404Response|GetCronjob\GetCronjobDefaultResponse
    {
        $httpRequest = new Request(GetCronjob\GetCronjobRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetCronjob\GetCronjob200Response::fromResponse($httpResponse),
            404 => GetCronjob\GetCronjob404Response::fromResponse($httpResponse),
            default => GetCronjob\GetCronjobDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function updateCronjob(UpdateCronjob\UpdateCronjobRequest $request) : UpdateCronjob\UpdateCronjob200Response|UpdateCronjob\UpdateCronjob400Response|UpdateCronjob\UpdateCronjob404Response|UpdateCronjob\UpdateCronjob412Response|UpdateCronjob\UpdateCronjobDefaultResponse
    {
        $httpRequest = new Request(UpdateCronjob\UpdateCronjobRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => UpdateCronjob\UpdateCronjob200Response::fromResponse($httpResponse),
            400 => UpdateCronjob\UpdateCronjob400Response::fromResponse($httpResponse),
            404 => UpdateCronjob\UpdateCronjob404Response::fromResponse($httpResponse),
            412 => UpdateCronjob\UpdateCronjob412Response::fromResponse($httpResponse),
            default => UpdateCronjob\UpdateCronjobDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getExecution(GetExecution\GetExecutionRequest $request) : GetExecution\GetExecution200Response|GetExecution\GetExecution404Response|GetExecution\GetExecutionDefaultResponse
    {
        $httpRequest = new Request(GetExecution\GetExecutionRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetExecution\GetExecution200Response::fromResponse($httpResponse),
            404 => GetExecution\GetExecution404Response::fromResponse($httpResponse),
            default => GetExecution\GetExecutionDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function updateCronjobAppId(UpdateCronjobAppId\UpdateCronjobAppIdRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|UpdateCronjobAppId\UpdateCronjobAppId201Response|UpdateCronjobAppId\UpdateCronjobAppId400Response|UpdateCronjobAppId\UpdateCronjobAppId412Response|UpdateCronjobAppId\UpdateCronjobAppIdDefaultResponse
    {
        $httpRequest = new Request(UpdateCronjobAppId\UpdateCronjobAppIdRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => UpdateCronjobAppId\UpdateCronjobAppId201Response::fromResponse($httpResponse),
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => UpdateCronjobAppId\UpdateCronjobAppId400Response::fromResponse($httpResponse),
            412 => UpdateCronjobAppId\UpdateCronjobAppId412Response::fromResponse($httpResponse),
            default => UpdateCronjobAppId\UpdateCronjobAppIdDefaultResponse::fromResponse($httpResponse),
        };
    }
}

