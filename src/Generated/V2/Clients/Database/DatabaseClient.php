<?php

namespace Mittwald\ApiClient\Generated\V2\Clients\Database;

use GuzzleHttp\Psr7\Request;

class DatabaseClient
{
    private \GuzzleHttp\Client $client;

    public function __construct(\GuzzleHttp\Client $client)
    {
        $this->client = $client;
    }

    public function createMysqlDatabase(CreateMysqlDatabase\CreateMysqlDatabaseRequest $request) : CreateMysqlDatabase\CreateMysqlDatabase201Response|CreateMysqlDatabase\CreateMysqlDatabase400Response|CreateMysqlDatabase\CreateMysqlDatabase404Response|CreateMysqlDatabase\CreateMysqlDatabaseDefaultResponse
    {
        $httpRequest = new Request(CreateMysqlDatabase\CreateMysqlDatabaseRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => CreateMysqlDatabase\CreateMysqlDatabase201Response::fromResponse($httpResponse),
            400 => CreateMysqlDatabase\CreateMysqlDatabase400Response::fromResponse($httpResponse),
            404 => CreateMysqlDatabase\CreateMysqlDatabase404Response::fromResponse($httpResponse),
            default => CreateMysqlDatabase\CreateMysqlDatabaseDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listMysqlDatabases(ListMysqlDatabases\ListMysqlDatabasesRequest $request) : ListMysqlDatabases\ListMysqlDatabases200Response|ListMysqlDatabases\ListMysqlDatabases400Response|ListMysqlDatabases\ListMysqlDatabases404Response|ListMysqlDatabases\ListMysqlDatabasesDefaultResponse
    {
        $httpRequest = new Request(ListMysqlDatabases\ListMysqlDatabasesRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListMysqlDatabases\ListMysqlDatabases200Response::fromResponse($httpResponse),
            400 => ListMysqlDatabases\ListMysqlDatabases400Response::fromResponse($httpResponse),
            404 => ListMysqlDatabases\ListMysqlDatabases404Response::fromResponse($httpResponse),
            default => ListMysqlDatabases\ListMysqlDatabasesDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function createMysqlUser(CreateMysqlUser\CreateMysqlUserRequest $request) : CreateMysqlUser\CreateMysqlUser201Response|CreateMysqlUser\CreateMysqlUser400Response|CreateMysqlUser\CreateMysqlUser404Response|CreateMysqlUser\CreateMysqlUserDefaultResponse
    {
        $httpRequest = new Request(CreateMysqlUser\CreateMysqlUserRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => CreateMysqlUser\CreateMysqlUser201Response::fromResponse($httpResponse),
            400 => CreateMysqlUser\CreateMysqlUser400Response::fromResponse($httpResponse),
            404 => CreateMysqlUser\CreateMysqlUser404Response::fromResponse($httpResponse),
            default => CreateMysqlUser\CreateMysqlUserDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listMysqlUsers(ListMysqlUsers\ListMysqlUsersRequest $request) : ListMysqlUsers\ListMysqlUsers200Response|ListMysqlUsers\ListMysqlUsers400Response|ListMysqlUsers\ListMysqlUsers404Response|ListMysqlUsers\ListMysqlUsersDefaultResponse
    {
        $httpRequest = new Request(ListMysqlUsers\ListMysqlUsersRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListMysqlUsers\ListMysqlUsers200Response::fromResponse($httpResponse),
            400 => ListMysqlUsers\ListMysqlUsers400Response::fromResponse($httpResponse),
            404 => ListMysqlUsers\ListMysqlUsers404Response::fromResponse($httpResponse),
            default => ListMysqlUsers\ListMysqlUsersDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function createRedisDatabase(CreateRedisDatabase\CreateRedisDatabaseRequest $request) : CreateRedisDatabase\CreateRedisDatabase201Response|CreateRedisDatabase\CreateRedisDatabase400Response|CreateRedisDatabase\CreateRedisDatabase404Response|CreateRedisDatabase\CreateRedisDatabaseDefaultResponse
    {
        $httpRequest = new Request(CreateRedisDatabase\CreateRedisDatabaseRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => CreateRedisDatabase\CreateRedisDatabase201Response::fromResponse($httpResponse),
            400 => CreateRedisDatabase\CreateRedisDatabase400Response::fromResponse($httpResponse),
            404 => CreateRedisDatabase\CreateRedisDatabase404Response::fromResponse($httpResponse),
            default => CreateRedisDatabase\CreateRedisDatabaseDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listRedisDatabases(ListRedisDatabases\ListRedisDatabasesRequest $request) : ListRedisDatabases\ListRedisDatabases200Response|ListRedisDatabases\ListRedisDatabases400Response|ListRedisDatabases\ListRedisDatabases404Response|ListRedisDatabases\ListRedisDatabasesDefaultResponse
    {
        $httpRequest = new Request(ListRedisDatabases\ListRedisDatabasesRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListRedisDatabases\ListRedisDatabases200Response::fromResponse($httpResponse),
            400 => ListRedisDatabases\ListRedisDatabases400Response::fromResponse($httpResponse),
            404 => ListRedisDatabases\ListRedisDatabases404Response::fromResponse($httpResponse),
            default => ListRedisDatabases\ListRedisDatabasesDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deleteMysqlDatabase(DeleteMysqlDatabase\DeleteMysqlDatabaseRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|DeleteMysqlDatabase\DeleteMysqlDatabase400Response|DeleteMysqlDatabase\DeleteMysqlDatabase412Response|DeleteMysqlDatabase\DeleteMysqlDatabase500Response|DeleteMysqlDatabase\DeleteMysqlDatabase503Response|DeleteMysqlDatabase\DeleteMysqlDatabaseDefaultResponse
    {
        $httpRequest = new Request(DeleteMysqlDatabase\DeleteMysqlDatabaseRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200, 204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => DeleteMysqlDatabase\DeleteMysqlDatabase400Response::fromResponse($httpResponse),
            412 => DeleteMysqlDatabase\DeleteMysqlDatabase412Response::fromResponse($httpResponse),
            500 => DeleteMysqlDatabase\DeleteMysqlDatabase500Response::fromResponse($httpResponse),
            503 => DeleteMysqlDatabase\DeleteMysqlDatabase503Response::fromResponse($httpResponse),
            default => DeleteMysqlDatabase\DeleteMysqlDatabaseDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getMysqlDatabase(GetMysqlDatabase\GetMysqlDatabaseRequest $request) : GetMysqlDatabase\GetMysqlDatabase200Response|GetMysqlDatabase\GetMysqlDatabase400Response|GetMysqlDatabase\GetMysqlDatabase404Response|GetMysqlDatabase\GetMysqlDatabase500Response|GetMysqlDatabase\GetMysqlDatabaseDefaultResponse
    {
        $httpRequest = new Request(GetMysqlDatabase\GetMysqlDatabaseRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetMysqlDatabase\GetMysqlDatabase200Response::fromResponse($httpResponse),
            400 => GetMysqlDatabase\GetMysqlDatabase400Response::fromResponse($httpResponse),
            404 => GetMysqlDatabase\GetMysqlDatabase404Response::fromResponse($httpResponse),
            500 => GetMysqlDatabase\GetMysqlDatabase500Response::fromResponse($httpResponse),
            default => GetMysqlDatabase\GetMysqlDatabaseDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deleteMysqlUser(DeleteMysqlUser\DeleteMysqlUserRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|DeleteMysqlUser\DeleteMysqlUser400Response|DeleteMysqlUser\DeleteMysqlUser404Response|DeleteMysqlUser\DeleteMysqlUserDefaultResponse
    {
        $httpRequest = new Request(DeleteMysqlUser\DeleteMysqlUserRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200, 204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => DeleteMysqlUser\DeleteMysqlUser400Response::fromResponse($httpResponse),
            404 => DeleteMysqlUser\DeleteMysqlUser404Response::fromResponse($httpResponse),
            default => DeleteMysqlUser\DeleteMysqlUserDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getMysqlUser(GetMysqlUser\GetMysqlUserRequest $request) : GetMysqlUser\GetMysqlUser200Response|GetMysqlUser\GetMysqlUser400Response|GetMysqlUser\GetMysqlUser404Response|GetMysqlUser\GetMysqlUserDefaultResponse
    {
        $httpRequest = new Request(GetMysqlUser\GetMysqlUserRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetMysqlUser\GetMysqlUser200Response::fromResponse($httpResponse),
            400 => GetMysqlUser\GetMysqlUser400Response::fromResponse($httpResponse),
            404 => GetMysqlUser\GetMysqlUser404Response::fromResponse($httpResponse),
            default => GetMysqlUser\GetMysqlUserDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function updateMysqlUser(UpdateMysqlUser\UpdateMysqlUserRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|UpdateMysqlUser\UpdateMysqlUser400Response|UpdateMysqlUser\UpdateMysqlUser404Response|UpdateMysqlUser\UpdateMysqlUserDefaultResponse
    {
        $httpRequest = new Request(UpdateMysqlUser\UpdateMysqlUserRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => UpdateMysqlUser\UpdateMysqlUser400Response::fromResponse($httpResponse),
            404 => UpdateMysqlUser\UpdateMysqlUser404Response::fromResponse($httpResponse),
            default => UpdateMysqlUser\UpdateMysqlUserDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deleteRedisDatabase(DeleteRedisDatabase\DeleteRedisDatabaseRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|DeleteRedisDatabase\DeleteRedisDatabase400Response|DeleteRedisDatabase\DeleteRedisDatabase412Response|DeleteRedisDatabase\DeleteRedisDatabase500Response|DeleteRedisDatabase\DeleteRedisDatabase503Response|DeleteRedisDatabase\DeleteRedisDatabaseDefaultResponse
    {
        $httpRequest = new Request(DeleteRedisDatabase\DeleteRedisDatabaseRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200, 204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => DeleteRedisDatabase\DeleteRedisDatabase400Response::fromResponse($httpResponse),
            412 => DeleteRedisDatabase\DeleteRedisDatabase412Response::fromResponse($httpResponse),
            500 => DeleteRedisDatabase\DeleteRedisDatabase500Response::fromResponse($httpResponse),
            503 => DeleteRedisDatabase\DeleteRedisDatabase503Response::fromResponse($httpResponse),
            default => DeleteRedisDatabase\DeleteRedisDatabaseDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getRedisDatabase(GetRedisDatabase\GetRedisDatabaseRequest $request) : GetRedisDatabase\GetRedisDatabase200Response|GetRedisDatabase\GetRedisDatabase400Response|GetRedisDatabase\GetRedisDatabase404Response|GetRedisDatabase\GetRedisDatabase500Response|GetRedisDatabase\GetRedisDatabaseDefaultResponse
    {
        $httpRequest = new Request(GetRedisDatabase\GetRedisDatabaseRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetRedisDatabase\GetRedisDatabase200Response::fromResponse($httpResponse),
            400 => GetRedisDatabase\GetRedisDatabase400Response::fromResponse($httpResponse),
            404 => GetRedisDatabase\GetRedisDatabase404Response::fromResponse($httpResponse),
            500 => GetRedisDatabase\GetRedisDatabase500Response::fromResponse($httpResponse),
            default => GetRedisDatabase\GetRedisDatabaseDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function disableMysqlUser(DisableMysqlUser\DisableMysqlUserRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|DisableMysqlUser\DisableMysqlUser400Response|DisableMysqlUser\DisableMysqlUser404Response|DisableMysqlUser\DisableMysqlUserDefaultResponse
    {
        $httpRequest = new Request(DisableMysqlUser\DisableMysqlUserRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => DisableMysqlUser\DisableMysqlUser400Response::fromResponse($httpResponse),
            404 => DisableMysqlUser\DisableMysqlUser404Response::fromResponse($httpResponse),
            default => DisableMysqlUser\DisableMysqlUserDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function enableMysqlUser(EnableMysqlUser\EnableMysqlUserRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|EnableMysqlUser\EnableMysqlUser400Response|EnableMysqlUser\EnableMysqlUser404Response|EnableMysqlUser\EnableMysqlUserDefaultResponse
    {
        $httpRequest = new Request(EnableMysqlUser\EnableMysqlUserRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => EnableMysqlUser\EnableMysqlUser400Response::fromResponse($httpResponse),
            404 => EnableMysqlUser\EnableMysqlUser404Response::fromResponse($httpResponse),
            default => EnableMysqlUser\EnableMysqlUserDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getMysqlUserPhpMyAdminUrl(GetMysqlUserPhpMyAdminUrl\GetMysqlUserPhpMyAdminUrlRequest $request) : GetMysqlUserPhpMyAdminUrl\GetMysqlUserPhpMyAdminUrl200Response|GetMysqlUserPhpMyAdminUrl\GetMysqlUserPhpMyAdminUrl400Response|GetMysqlUserPhpMyAdminUrl\GetMysqlUserPhpMyAdminUrl404Response|GetMysqlUserPhpMyAdminUrl\GetMysqlUserPhpMyAdminUrlDefaultResponse
    {
        $httpRequest = new Request(GetMysqlUserPhpMyAdminUrl\GetMysqlUserPhpMyAdminUrlRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetMysqlUserPhpMyAdminUrl\GetMysqlUserPhpMyAdminUrl200Response::fromResponse($httpResponse),
            400 => GetMysqlUserPhpMyAdminUrl\GetMysqlUserPhpMyAdminUrl400Response::fromResponse($httpResponse),
            404 => GetMysqlUserPhpMyAdminUrl\GetMysqlUserPhpMyAdminUrl404Response::fromResponse($httpResponse),
            default => GetMysqlUserPhpMyAdminUrl\GetMysqlUserPhpMyAdminUrlDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listMysqlCharsets(ListMysqlCharsets\ListMysqlCharsetsRequest $request) : ListMysqlCharsets\ListMysqlCharsets200Response|ListMysqlCharsets\ListMysqlCharsets400Response|ListMysqlCharsets\ListMysqlCharsets404Response|ListMysqlCharsets\ListMysqlCharsetsDefaultResponse
    {
        $httpRequest = new Request(ListMysqlCharsets\ListMysqlCharsetsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListMysqlCharsets\ListMysqlCharsets200Response::fromResponse($httpResponse),
            400 => ListMysqlCharsets\ListMysqlCharsets400Response::fromResponse($httpResponse),
            404 => ListMysqlCharsets\ListMysqlCharsets404Response::fromResponse($httpResponse),
            default => ListMysqlCharsets\ListMysqlCharsetsDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listMysqlVersions(ListMysqlVersions\ListMysqlVersionsRequest $request) : ListMysqlVersions\ListMysqlVersions200Response|ListMysqlVersions\ListMysqlVersions400Response|ListMysqlVersions\ListMysqlVersions404Response|ListMysqlVersions\ListMysqlVersionsDefaultResponse
    {
        $httpRequest = new Request(ListMysqlVersions\ListMysqlVersionsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListMysqlVersions\ListMysqlVersions200Response::fromResponse($httpResponse),
            400 => ListMysqlVersions\ListMysqlVersions400Response::fromResponse($httpResponse),
            404 => ListMysqlVersions\ListMysqlVersions404Response::fromResponse($httpResponse),
            default => ListMysqlVersions\ListMysqlVersionsDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listRedisVersions(ListRedisVersions\ListRedisVersionsRequest $request) : ListRedisVersions\ListRedisVersions200Response|ListRedisVersions\ListRedisVersions400Response|ListRedisVersions\ListRedisVersions404Response|ListRedisVersions\ListRedisVersionsDefaultResponse
    {
        $httpRequest = new Request(ListRedisVersions\ListRedisVersionsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListRedisVersions\ListRedisVersions200Response::fromResponse($httpResponse),
            400 => ListRedisVersions\ListRedisVersions400Response::fromResponse($httpResponse),
            404 => ListRedisVersions\ListRedisVersions404Response::fromResponse($httpResponse),
            default => ListRedisVersions\ListRedisVersionsDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function updateMysqlDatabaseDefaultCharset(UpdateMysqlDatabaseDefaultCharset\UpdateMysqlDatabaseDefaultCharsetRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|UpdateMysqlDatabaseDefaultCharset\UpdateMysqlDatabaseDefaultCharset400Response|UpdateMysqlDatabaseDefaultCharset\UpdateMysqlDatabaseDefaultCharset404Response|UpdateMysqlDatabaseDefaultCharset\UpdateMysqlDatabaseDefaultCharsetDefaultResponse
    {
        $httpRequest = new Request(UpdateMysqlDatabaseDefaultCharset\UpdateMysqlDatabaseDefaultCharsetRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => UpdateMysqlDatabaseDefaultCharset\UpdateMysqlDatabaseDefaultCharset400Response::fromResponse($httpResponse),
            404 => UpdateMysqlDatabaseDefaultCharset\UpdateMysqlDatabaseDefaultCharset404Response::fromResponse($httpResponse),
            default => UpdateMysqlDatabaseDefaultCharset\UpdateMysqlDatabaseDefaultCharsetDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function updateMysqlDatabaseDescription(UpdateMysqlDatabaseDescription\UpdateMysqlDatabaseDescriptionRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|UpdateMysqlDatabaseDescription\UpdateMysqlDatabaseDescription400Response|UpdateMysqlDatabaseDescription\UpdateMysqlDatabaseDescription404Response|UpdateMysqlDatabaseDescription\UpdateMysqlDatabaseDescriptionDefaultResponse
    {
        $httpRequest = new Request(UpdateMysqlDatabaseDescription\UpdateMysqlDatabaseDescriptionRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => UpdateMysqlDatabaseDescription\UpdateMysqlDatabaseDescription400Response::fromResponse($httpResponse),
            404 => UpdateMysqlDatabaseDescription\UpdateMysqlDatabaseDescription404Response::fromResponse($httpResponse),
            default => UpdateMysqlDatabaseDescription\UpdateMysqlDatabaseDescriptionDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function updateMysqlUserPassword(UpdateMysqlUserPassword\UpdateMysqlUserPasswordRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|UpdateMysqlUserPassword\UpdateMysqlUserPassword400Response|UpdateMysqlUserPassword\UpdateMysqlUserPassword404Response|UpdateMysqlUserPassword\UpdateMysqlUserPasswordDefaultResponse
    {
        $httpRequest = new Request(UpdateMysqlUserPassword\UpdateMysqlUserPasswordRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => UpdateMysqlUserPassword\UpdateMysqlUserPassword400Response::fromResponse($httpResponse),
            404 => UpdateMysqlUserPassword\UpdateMysqlUserPassword404Response::fromResponse($httpResponse),
            default => UpdateMysqlUserPassword\UpdateMysqlUserPasswordDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function updateRedisDatabaseConfiguration(UpdateRedisDatabaseConfiguration\UpdateRedisDatabaseConfigurationRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|UpdateRedisDatabaseConfiguration\UpdateRedisDatabaseConfiguration400Response|UpdateRedisDatabaseConfiguration\UpdateRedisDatabaseConfiguration404Response|UpdateRedisDatabaseConfiguration\UpdateRedisDatabaseConfigurationDefaultResponse
    {
        $httpRequest = new Request(UpdateRedisDatabaseConfiguration\UpdateRedisDatabaseConfigurationRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => UpdateRedisDatabaseConfiguration\UpdateRedisDatabaseConfiguration400Response::fromResponse($httpResponse),
            404 => UpdateRedisDatabaseConfiguration\UpdateRedisDatabaseConfiguration404Response::fromResponse($httpResponse),
            default => UpdateRedisDatabaseConfiguration\UpdateRedisDatabaseConfigurationDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function updateRedisDatabaseDescription(UpdateRedisDatabaseDescription\UpdateRedisDatabaseDescriptionRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|UpdateRedisDatabaseDescription\UpdateRedisDatabaseDescription400Response|UpdateRedisDatabaseDescription\UpdateRedisDatabaseDescription404Response|UpdateRedisDatabaseDescription\UpdateRedisDatabaseDescriptionDefaultResponse
    {
        $httpRequest = new Request(UpdateRedisDatabaseDescription\UpdateRedisDatabaseDescriptionRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => UpdateRedisDatabaseDescription\UpdateRedisDatabaseDescription400Response::fromResponse($httpResponse),
            404 => UpdateRedisDatabaseDescription\UpdateRedisDatabaseDescription404Response::fromResponse($httpResponse),
            default => UpdateRedisDatabaseDescription\UpdateRedisDatabaseDescriptionDefaultResponse::fromResponse($httpResponse),
        };
    }
}

