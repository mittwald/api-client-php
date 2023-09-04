<?php

namespace Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser;

use GuzzleHttp\Psr7\Request;

class SSHSFTPUserClient
{
    private \GuzzleHttp\Client $client;

    public function __construct(\GuzzleHttp\Client $client)
    {
        $this->client = $client;
    }

    public function createSftpUser(CreateSftpUser\CreateSftpUserRequest $request) : CreateSftpUser\CreateSftpUser201Response|CreateSftpUser\CreateSftpUser400Response|CreateSftpUser\CreateSftpUserDefaultResponse
    {
        $httpRequest = new Request(CreateSftpUser\CreateSftpUserRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => CreateSftpUser\CreateSftpUser201Response::fromResponse($httpResponse),
            400 => CreateSftpUser\CreateSftpUser400Response::fromResponse($httpResponse),
            default => CreateSftpUser\CreateSftpUserDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listSftpUsers(ListSftpUsers\ListSftpUsersRequest $request) : ListSftpUsers\ListSftpUsers200Response|ListSftpUsers\ListSftpUsers404Response|ListSftpUsers\ListSftpUsersDefaultResponse
    {
        $httpRequest = new Request(ListSftpUsers\ListSftpUsersRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListSftpUsers\ListSftpUsers200Response::fromResponse($httpResponse),
            404 => ListSftpUsers\ListSftpUsers404Response::fromResponse($httpResponse),
            default => ListSftpUsers\ListSftpUsersDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deleteSftpUser(DeleteSftpUser\DeleteSftpUserRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|DeleteSftpUser\DeleteSftpUserDefaultResponse
    {
        $httpRequest = new Request(DeleteSftpUser\DeleteSftpUserRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            default => DeleteSftpUser\DeleteSftpUserDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getSftpUser(GetSftpUser\GetSftpUserRequest $request) : GetSftpUser\GetSftpUser200Response|GetSftpUser\GetSftpUser404Response|GetSftpUser\GetSftpUserDefaultResponse
    {
        $httpRequest = new Request(GetSftpUser\GetSftpUserRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetSftpUser\GetSftpUser200Response::fromResponse($httpResponse),
            404 => GetSftpUser\GetSftpUser404Response::fromResponse($httpResponse),
            default => GetSftpUser\GetSftpUserDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function updateSftpUser(UpdateSftpUser\UpdateSftpUserRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|UpdateSftpUser\UpdateSftpUser400Response|UpdateSftpUser\UpdateSftpUserDefaultResponse
    {
        $httpRequest = new Request(UpdateSftpUser\UpdateSftpUserRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => UpdateSftpUser\UpdateSftpUser400Response::fromResponse($httpResponse),
            default => UpdateSftpUser\UpdateSftpUserDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function createSshUser(CreateSshUser\CreateSshUserRequest $request) : CreateSshUser\CreateSshUser201Response|CreateSshUser\CreateSshUser400Response|CreateSshUser\CreateSshUserDefaultResponse
    {
        $httpRequest = new Request(CreateSshUser\CreateSshUserRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => CreateSshUser\CreateSshUser201Response::fromResponse($httpResponse),
            400 => CreateSshUser\CreateSshUser400Response::fromResponse($httpResponse),
            default => CreateSshUser\CreateSshUserDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listSshUsers(ListSshUsers\ListSshUsersRequest $request) : ListSshUsers\ListSshUsers200Response|ListSshUsers\ListSshUsers404Response|ListSshUsers\ListSshUsersDefaultResponse
    {
        $httpRequest = new Request(ListSshUsers\ListSshUsersRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListSshUsers\ListSshUsers200Response::fromResponse($httpResponse),
            404 => ListSshUsers\ListSshUsers404Response::fromResponse($httpResponse),
            default => ListSshUsers\ListSshUsersDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deleteSshUser(DeleteSshUser\DeleteSshUserRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|DeleteSshUser\DeleteSshUserDefaultResponse
    {
        $httpRequest = new Request(DeleteSshUser\DeleteSshUserRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            default => DeleteSshUser\DeleteSshUserDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getSshUser(GetSshUser\GetSshUserRequest $request) : GetSshUser\GetSshUser200Response|GetSshUser\GetSshUser404Response|GetSshUser\GetSshUserDefaultResponse
    {
        $httpRequest = new Request(GetSshUser\GetSshUserRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetSshUser\GetSshUser200Response::fromResponse($httpResponse),
            404 => GetSshUser\GetSshUser404Response::fromResponse($httpResponse),
            default => GetSshUser\GetSshUserDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function updateSshUser(UpdateSshUser\UpdateSshUserRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|UpdateSshUser\UpdateSshUser400Response|UpdateSshUser\UpdateSshUserDefaultResponse
    {
        $httpRequest = new Request(UpdateSshUser\UpdateSshUserRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => UpdateSshUser\UpdateSshUser400Response::fromResponse($httpResponse),
            default => UpdateSshUser\UpdateSshUserDefaultResponse::fromResponse($httpResponse),
        };
    }
}

