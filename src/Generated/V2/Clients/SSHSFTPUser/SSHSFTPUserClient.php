<?php

namespace Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use Mittwald\ApiClient\Client\EmptyResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\CreateSftpUser\CreateSftpUser201Response;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\CreateSftpUser\CreateSftpUser400Response;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\CreateSftpUser\CreateSftpUserDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\CreateSftpUser\CreateSftpUserRequest;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\CreateSshUser\CreateSshUser201Response;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\CreateSshUser\CreateSshUser400Response;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\CreateSshUser\CreateSshUserDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\CreateSshUser\CreateSshUserRequest;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\DeleteSftpUser\DeleteSftpUserDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\DeleteSftpUser\DeleteSftpUserRequest;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\DeleteSshUser\DeleteSshUserDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\DeleteSshUser\DeleteSshUserRequest;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\GetSftpUser\GetSftpUser200Response;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\GetSftpUser\GetSftpUser404Response;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\GetSftpUser\GetSftpUserDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\GetSftpUser\GetSftpUserRequest;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\GetSshUser\GetSshUser200Response;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\GetSshUser\GetSshUser404Response;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\GetSshUser\GetSshUserDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\GetSshUser\GetSshUserRequest;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\ListSftpUsers\ListSftpUsers200Response;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\ListSftpUsers\ListSftpUsers404Response;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\ListSftpUsers\ListSftpUsersDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\ListSftpUsers\ListSftpUsersRequest;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\ListSshUsers\ListSshUsers200Response;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\ListSshUsers\ListSshUsers404Response;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\ListSshUsers\ListSshUsersDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\ListSshUsers\ListSshUsersRequest;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\UpdateSftpUser\UpdateSftpUser400Response;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\UpdateSftpUser\UpdateSftpUserDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\UpdateSftpUser\UpdateSftpUserRequest;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\UpdateSshUser\UpdateSshUser400Response;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\UpdateSshUser\UpdateSshUserDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\UpdateSshUser\UpdateSshUserRequest;

class SSHSFTPUserClient
{
    private Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function createSftpUser(CreateSftpUserRequest $request): CreateSftpUser201Response|CreateSftpUser400Response|CreateSftpUserDefaultResponse
    {
        $httpRequest = new Request(CreateSftpUserRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => CreateSftpUser201Response::fromResponse($httpResponse),
            400 => CreateSftpUser400Response::fromResponse($httpResponse),
            default => CreateSftpUserDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listSftpUsers(ListSftpUsersRequest $request): ListSftpUsers200Response|ListSftpUsers404Response|ListSftpUsersDefaultResponse
    {
        $httpRequest = new Request(ListSftpUsersRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListSftpUsers200Response::fromResponse($httpResponse),
            404 => ListSftpUsers404Response::fromResponse($httpResponse),
            default => ListSftpUsersDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deleteSftpUser(DeleteSftpUserRequest $request): EmptyResponse|DeleteSftpUserDefaultResponse
    {
        $httpRequest = new Request(DeleteSftpUserRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            default => DeleteSftpUserDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getSftpUser(GetSftpUserRequest $request): GetSftpUser200Response|GetSftpUser404Response|GetSftpUserDefaultResponse
    {
        $httpRequest = new Request(GetSftpUserRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetSftpUser200Response::fromResponse($httpResponse),
            404 => GetSftpUser404Response::fromResponse($httpResponse),
            default => GetSftpUserDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function updateSftpUser(UpdateSftpUserRequest $request): EmptyResponse|UpdateSftpUser400Response|UpdateSftpUserDefaultResponse
    {
        $httpRequest = new Request(UpdateSftpUserRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => UpdateSftpUser400Response::fromResponse($httpResponse),
            default => UpdateSftpUserDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function createSshUser(CreateSshUserRequest $request): CreateSshUser201Response|CreateSshUser400Response|CreateSshUserDefaultResponse
    {
        $httpRequest = new Request(CreateSshUserRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => CreateSshUser201Response::fromResponse($httpResponse),
            400 => CreateSshUser400Response::fromResponse($httpResponse),
            default => CreateSshUserDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listSshUsers(ListSshUsersRequest $request): ListSshUsers200Response|ListSshUsers404Response|ListSshUsersDefaultResponse
    {
        $httpRequest = new Request(ListSshUsersRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListSshUsers200Response::fromResponse($httpResponse),
            404 => ListSshUsers404Response::fromResponse($httpResponse),
            default => ListSshUsersDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deleteSshUser(DeleteSshUserRequest $request): EmptyResponse|DeleteSshUserDefaultResponse
    {
        $httpRequest = new Request(DeleteSshUserRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            default => DeleteSshUserDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getSshUser(GetSshUserRequest $request): GetSshUser200Response|GetSshUser404Response|GetSshUserDefaultResponse
    {
        $httpRequest = new Request(GetSshUserRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetSshUser200Response::fromResponse($httpResponse),
            404 => GetSshUser404Response::fromResponse($httpResponse),
            default => GetSshUserDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function updateSshUser(UpdateSshUserRequest $request): EmptyResponse|UpdateSshUser400Response|UpdateSshUserDefaultResponse
    {
        $httpRequest = new Request(UpdateSshUserRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => UpdateSshUser400Response::fromResponse($httpResponse),
            default => UpdateSshUserDefaultResponse::fromResponse($httpResponse),
        };
    }
}
