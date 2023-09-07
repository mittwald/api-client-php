<?php

namespace Mittwald\ApiClient\Generated\V2\Clients\Database;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use Mittwald\ApiClient\Client\EmptyResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\CreateMysqlDatabase\CreateMysqlDatabase201Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\CreateMysqlDatabase\CreateMysqlDatabase400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\CreateMysqlDatabase\CreateMysqlDatabase404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\CreateMysqlDatabase\CreateMysqlDatabaseDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\CreateMysqlDatabase\CreateMysqlDatabaseRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Database\CreateMysqlUser\CreateMysqlUser201Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\CreateMysqlUser\CreateMysqlUser400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\CreateMysqlUser\CreateMysqlUser404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\CreateMysqlUser\CreateMysqlUserDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\CreateMysqlUser\CreateMysqlUserRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Database\CreateRedisDatabase\CreateRedisDatabase201Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\CreateRedisDatabase\CreateRedisDatabase400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\CreateRedisDatabase\CreateRedisDatabase404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\CreateRedisDatabase\CreateRedisDatabaseDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\CreateRedisDatabase\CreateRedisDatabaseRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Database\DeleteMysqlDatabase\DeleteMysqlDatabase400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\DeleteMysqlDatabase\DeleteMysqlDatabase412Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\DeleteMysqlDatabase\DeleteMysqlDatabase500Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\DeleteMysqlDatabase\DeleteMysqlDatabase503Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\DeleteMysqlDatabase\DeleteMysqlDatabaseDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\DeleteMysqlDatabase\DeleteMysqlDatabaseRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Database\DeleteMysqlUser\DeleteMysqlUser400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\DeleteMysqlUser\DeleteMysqlUser404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\DeleteMysqlUser\DeleteMysqlUserDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\DeleteMysqlUser\DeleteMysqlUserRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Database\DeleteRedisDatabase\DeleteRedisDatabase400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\DeleteRedisDatabase\DeleteRedisDatabase412Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\DeleteRedisDatabase\DeleteRedisDatabase500Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\DeleteRedisDatabase\DeleteRedisDatabase503Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\DeleteRedisDatabase\DeleteRedisDatabaseDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\DeleteRedisDatabase\DeleteRedisDatabaseRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Database\DisableMysqlUser\DisableMysqlUser400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\DisableMysqlUser\DisableMysqlUser404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\DisableMysqlUser\DisableMysqlUserDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\DisableMysqlUser\DisableMysqlUserRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Database\EnableMysqlUser\EnableMysqlUser400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\EnableMysqlUser\EnableMysqlUser404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\EnableMysqlUser\EnableMysqlUserDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\EnableMysqlUser\EnableMysqlUserRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Database\GetMysqlDatabase\GetMysqlDatabase200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\GetMysqlDatabase\GetMysqlDatabase400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\GetMysqlDatabase\GetMysqlDatabase404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\GetMysqlDatabase\GetMysqlDatabase500Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\GetMysqlDatabase\GetMysqlDatabaseDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\GetMysqlDatabase\GetMysqlDatabaseRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Database\GetMysqlUser\GetMysqlUser200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\GetMysqlUser\GetMysqlUser400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\GetMysqlUser\GetMysqlUser404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\GetMysqlUser\GetMysqlUserDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\GetMysqlUser\GetMysqlUserRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Database\GetMysqlUserPhpMyAdminUrl\GetMysqlUserPhpMyAdminUrl200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\GetMysqlUserPhpMyAdminUrl\GetMysqlUserPhpMyAdminUrl400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\GetMysqlUserPhpMyAdminUrl\GetMysqlUserPhpMyAdminUrl404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\GetMysqlUserPhpMyAdminUrl\GetMysqlUserPhpMyAdminUrlDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\GetMysqlUserPhpMyAdminUrl\GetMysqlUserPhpMyAdminUrlRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Database\GetRedisDatabase\GetRedisDatabase200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\GetRedisDatabase\GetRedisDatabase400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\GetRedisDatabase\GetRedisDatabase404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\GetRedisDatabase\GetRedisDatabase500Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\GetRedisDatabase\GetRedisDatabaseDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\GetRedisDatabase\GetRedisDatabaseRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListMysqlCharsets\ListMysqlCharsets200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListMysqlCharsets\ListMysqlCharsets400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListMysqlCharsets\ListMysqlCharsets404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListMysqlCharsets\ListMysqlCharsetsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListMysqlCharsets\ListMysqlCharsetsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListMysqlDatabases\ListMysqlDatabases200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListMysqlDatabases\ListMysqlDatabases400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListMysqlDatabases\ListMysqlDatabases404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListMysqlDatabases\ListMysqlDatabasesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListMysqlDatabases\ListMysqlDatabasesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListMysqlUsers\ListMysqlUsers200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListMysqlUsers\ListMysqlUsers400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListMysqlUsers\ListMysqlUsers404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListMysqlUsers\ListMysqlUsersDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListMysqlUsers\ListMysqlUsersRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListMysqlVersions\ListMysqlVersions200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListMysqlVersions\ListMysqlVersions400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListMysqlVersions\ListMysqlVersions404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListMysqlVersions\ListMysqlVersionsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListMysqlVersions\ListMysqlVersionsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListRedisDatabases\ListRedisDatabases200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListRedisDatabases\ListRedisDatabases400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListRedisDatabases\ListRedisDatabases404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListRedisDatabases\ListRedisDatabasesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListRedisDatabases\ListRedisDatabasesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListRedisVersions\ListRedisVersions200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListRedisVersions\ListRedisVersions400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListRedisVersions\ListRedisVersions404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListRedisVersions\ListRedisVersionsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListRedisVersions\ListRedisVersionsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Database\UpdateMysqlDatabaseDefaultCharset\UpdateMysqlDatabaseDefaultCharset400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\UpdateMysqlDatabaseDefaultCharset\UpdateMysqlDatabaseDefaultCharset404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\UpdateMysqlDatabaseDefaultCharset\UpdateMysqlDatabaseDefaultCharsetDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\UpdateMysqlDatabaseDefaultCharset\UpdateMysqlDatabaseDefaultCharsetRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Database\UpdateMysqlDatabaseDescription\UpdateMysqlDatabaseDescription400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\UpdateMysqlDatabaseDescription\UpdateMysqlDatabaseDescription404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\UpdateMysqlDatabaseDescription\UpdateMysqlDatabaseDescriptionDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\UpdateMysqlDatabaseDescription\UpdateMysqlDatabaseDescriptionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Database\UpdateMysqlUser\UpdateMysqlUser400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\UpdateMysqlUser\UpdateMysqlUser404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\UpdateMysqlUser\UpdateMysqlUserDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\UpdateMysqlUser\UpdateMysqlUserRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Database\UpdateMysqlUserPassword\UpdateMysqlUserPassword400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\UpdateMysqlUserPassword\UpdateMysqlUserPassword404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\UpdateMysqlUserPassword\UpdateMysqlUserPasswordDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\UpdateMysqlUserPassword\UpdateMysqlUserPasswordRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Database\UpdateRedisDatabaseConfiguration\UpdateRedisDatabaseConfiguration400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\UpdateRedisDatabaseConfiguration\UpdateRedisDatabaseConfiguration404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\UpdateRedisDatabaseConfiguration\UpdateRedisDatabaseConfigurationDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\UpdateRedisDatabaseConfiguration\UpdateRedisDatabaseConfigurationRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Database\UpdateRedisDatabaseDescription\UpdateRedisDatabaseDescription400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\UpdateRedisDatabaseDescription\UpdateRedisDatabaseDescription404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Database\UpdateRedisDatabaseDescription\UpdateRedisDatabaseDescriptionDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\UpdateRedisDatabaseDescription\UpdateRedisDatabaseDescriptionRequest;

/**
 * Client for Database API
 *
 * The database API allows you to manage your databases, like MySQL and Redis
 * databases.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class DatabaseClient
{
    private Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Create a MySQLDatabase with a MySQLUser.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Database/operation/database-create-mysql-database
     * @throws GuzzleException
     * @param CreateMysqlDatabase\CreateMysqlDatabaseRequest $request An object representing the request for this operation
     * @return CreateMysqlDatabase\CreateMysqlDatabase201Response|CreateMysqlDatabase\CreateMysqlDatabase400Response|CreateMysqlDatabase\CreateMysqlDatabase404Response|CreateMysqlDatabase\CreateMysqlDatabaseDefaultResponse Accepted
     */
    public function createMysqlDatabase(CreateMysqlDatabaseRequest $request): CreateMysqlDatabase201Response|CreateMysqlDatabase400Response|CreateMysqlDatabase404Response|CreateMysqlDatabaseDefaultResponse
    {
        $httpRequest = new Request(CreateMysqlDatabaseRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => CreateMysqlDatabase201Response::fromResponse($httpResponse),
            400 => CreateMysqlDatabase400Response::fromResponse($httpResponse),
            404 => CreateMysqlDatabase404Response::fromResponse($httpResponse),
            default => CreateMysqlDatabaseDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * List MySQLDatabases belonging to a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Database/operation/database-list-mysql-databases
     * @throws GuzzleException
     * @param ListMysqlDatabases\ListMysqlDatabasesRequest $request An object representing the request for this operation
     * @return ListMysqlDatabases\ListMysqlDatabases200Response|ListMysqlDatabases\ListMysqlDatabases400Response|ListMysqlDatabases\ListMysqlDatabases404Response|ListMysqlDatabases\ListMysqlDatabasesDefaultResponse OK
     */
    public function listMysqlDatabases(ListMysqlDatabasesRequest $request): ListMysqlDatabases200Response|ListMysqlDatabases400Response|ListMysqlDatabases404Response|ListMysqlDatabasesDefaultResponse
    {
        $httpRequest = new Request(ListMysqlDatabasesRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListMysqlDatabases200Response::fromResponse($httpResponse),
            400 => ListMysqlDatabases400Response::fromResponse($httpResponse),
            404 => ListMysqlDatabases404Response::fromResponse($httpResponse),
            default => ListMysqlDatabasesDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Create a MySQLUser.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Database/operation/database-create-mysql-user
     * @throws GuzzleException
     * @param CreateMysqlUser\CreateMysqlUserRequest $request An object representing the request for this operation
     * @return CreateMysqlUser\CreateMysqlUser201Response|CreateMysqlUser\CreateMysqlUser400Response|CreateMysqlUser\CreateMysqlUser404Response|CreateMysqlUser\CreateMysqlUserDefaultResponse Created
     */
    public function createMysqlUser(CreateMysqlUserRequest $request): CreateMysqlUser201Response|CreateMysqlUser400Response|CreateMysqlUser404Response|CreateMysqlUserDefaultResponse
    {
        $httpRequest = new Request(CreateMysqlUserRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => CreateMysqlUser201Response::fromResponse($httpResponse),
            400 => CreateMysqlUser400Response::fromResponse($httpResponse),
            404 => CreateMysqlUser404Response::fromResponse($httpResponse),
            default => CreateMysqlUserDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * List MySQLUsers belonging to a Database.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Database/operation/database-list-mysql-users
     * @throws GuzzleException
     * @param ListMysqlUsers\ListMysqlUsersRequest $request An object representing the request for this operation
     * @return ListMysqlUsers\ListMysqlUsers200Response|ListMysqlUsers\ListMysqlUsers400Response|ListMysqlUsers\ListMysqlUsers404Response|ListMysqlUsers\ListMysqlUsersDefaultResponse OK
     */
    public function listMysqlUsers(ListMysqlUsersRequest $request): ListMysqlUsers200Response|ListMysqlUsers400Response|ListMysqlUsers404Response|ListMysqlUsersDefaultResponse
    {
        $httpRequest = new Request(ListMysqlUsersRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListMysqlUsers200Response::fromResponse($httpResponse),
            400 => ListMysqlUsers400Response::fromResponse($httpResponse),
            404 => ListMysqlUsers404Response::fromResponse($httpResponse),
            default => ListMysqlUsersDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Create a RedisDatabase.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Database/operation/database-create-redis-database
     * @throws GuzzleException
     * @param CreateRedisDatabase\CreateRedisDatabaseRequest $request An object representing the request for this operation
     * @return CreateRedisDatabase\CreateRedisDatabase201Response|CreateRedisDatabase\CreateRedisDatabase400Response|CreateRedisDatabase\CreateRedisDatabase404Response|CreateRedisDatabase\CreateRedisDatabaseDefaultResponse Created
     */
    public function createRedisDatabase(CreateRedisDatabaseRequest $request): CreateRedisDatabase201Response|CreateRedisDatabase400Response|CreateRedisDatabase404Response|CreateRedisDatabaseDefaultResponse
    {
        $httpRequest = new Request(CreateRedisDatabaseRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => CreateRedisDatabase201Response::fromResponse($httpResponse),
            400 => CreateRedisDatabase400Response::fromResponse($httpResponse),
            404 => CreateRedisDatabase404Response::fromResponse($httpResponse),
            default => CreateRedisDatabaseDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * List RedisDatabases belonging to a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Database/operation/database-list-redis-databases
     * @throws GuzzleException
     * @param ListRedisDatabases\ListRedisDatabasesRequest $request An object representing the request for this operation
     * @return ListRedisDatabases\ListRedisDatabases200Response|ListRedisDatabases\ListRedisDatabases400Response|ListRedisDatabases\ListRedisDatabases404Response|ListRedisDatabases\ListRedisDatabasesDefaultResponse OK
     */
    public function listRedisDatabases(ListRedisDatabasesRequest $request): ListRedisDatabases200Response|ListRedisDatabases400Response|ListRedisDatabases404Response|ListRedisDatabasesDefaultResponse
    {
        $httpRequest = new Request(ListRedisDatabasesRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListRedisDatabases200Response::fromResponse($httpResponse),
            400 => ListRedisDatabases400Response::fromResponse($httpResponse),
            404 => ListRedisDatabases404Response::fromResponse($httpResponse),
            default => ListRedisDatabasesDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Delete a MySQLDatabase.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Database/operation/database-delete-mysql-database
     * @throws GuzzleException
     * @param DeleteMysqlDatabase\DeleteMysqlDatabaseRequest $request An object representing the request for this operation
     * @return EmptyResponse|DeleteMysqlDatabase\DeleteMysqlDatabase400Response|DeleteMysqlDatabase\DeleteMysqlDatabase412Response|DeleteMysqlDatabase\DeleteMysqlDatabase500Response|DeleteMysqlDatabase\DeleteMysqlDatabase503Response|DeleteMysqlDatabase\DeleteMysqlDatabaseDefaultResponse NoContent
     */
    public function deleteMysqlDatabase(DeleteMysqlDatabaseRequest $request): EmptyResponse|DeleteMysqlDatabase400Response|DeleteMysqlDatabase412Response|DeleteMysqlDatabase500Response|DeleteMysqlDatabase503Response|DeleteMysqlDatabaseDefaultResponse
    {
        $httpRequest = new Request(DeleteMysqlDatabaseRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200, 204 => new EmptyResponse($httpResponse),
            400 => DeleteMysqlDatabase400Response::fromResponse($httpResponse),
            412 => DeleteMysqlDatabase412Response::fromResponse($httpResponse),
            500 => DeleteMysqlDatabase500Response::fromResponse($httpResponse),
            503 => DeleteMysqlDatabase503Response::fromResponse($httpResponse),
            default => DeleteMysqlDatabaseDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Get a MySQLDatabase.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Database/operation/database-get-mysql-database
     * @throws GuzzleException
     * @param GetMysqlDatabase\GetMysqlDatabaseRequest $request An object representing the request for this operation
     * @return GetMysqlDatabase\GetMysqlDatabase200Response|GetMysqlDatabase\GetMysqlDatabase400Response|GetMysqlDatabase\GetMysqlDatabase404Response|GetMysqlDatabase\GetMysqlDatabase500Response|GetMysqlDatabase\GetMysqlDatabaseDefaultResponse OK
     */
    public function getMysqlDatabase(GetMysqlDatabaseRequest $request): GetMysqlDatabase200Response|GetMysqlDatabase400Response|GetMysqlDatabase404Response|GetMysqlDatabase500Response|GetMysqlDatabaseDefaultResponse
    {
        $httpRequest = new Request(GetMysqlDatabaseRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetMysqlDatabase200Response::fromResponse($httpResponse),
            400 => GetMysqlDatabase400Response::fromResponse($httpResponse),
            404 => GetMysqlDatabase404Response::fromResponse($httpResponse),
            500 => GetMysqlDatabase500Response::fromResponse($httpResponse),
            default => GetMysqlDatabaseDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Delete a MySQLUser.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Database/operation/database-delete-mysql-user
     * @throws GuzzleException
     * @param DeleteMysqlUser\DeleteMysqlUserRequest $request An object representing the request for this operation
     * @return EmptyResponse|DeleteMysqlUser\DeleteMysqlUser400Response|DeleteMysqlUser\DeleteMysqlUser404Response|DeleteMysqlUser\DeleteMysqlUserDefaultResponse NoContent
     */
    public function deleteMysqlUser(DeleteMysqlUserRequest $request): EmptyResponse|DeleteMysqlUser400Response|DeleteMysqlUser404Response|DeleteMysqlUserDefaultResponse
    {
        $httpRequest = new Request(DeleteMysqlUserRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200, 204 => new EmptyResponse($httpResponse),
            400 => DeleteMysqlUser400Response::fromResponse($httpResponse),
            404 => DeleteMysqlUser404Response::fromResponse($httpResponse),
            default => DeleteMysqlUserDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Get a MySQLUser.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Database/operation/database-get-mysql-user
     * @throws GuzzleException
     * @param GetMysqlUser\GetMysqlUserRequest $request An object representing the request for this operation
     * @return GetMysqlUser\GetMysqlUser200Response|GetMysqlUser\GetMysqlUser400Response|GetMysqlUser\GetMysqlUser404Response|GetMysqlUser\GetMysqlUserDefaultResponse OK
     */
    public function getMysqlUser(GetMysqlUserRequest $request): GetMysqlUser200Response|GetMysqlUser400Response|GetMysqlUser404Response|GetMysqlUserDefaultResponse
    {
        $httpRequest = new Request(GetMysqlUserRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetMysqlUser200Response::fromResponse($httpResponse),
            400 => GetMysqlUser400Response::fromResponse($httpResponse),
            404 => GetMysqlUser404Response::fromResponse($httpResponse),
            default => GetMysqlUserDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Update a MySQLUser.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Database/operation/database-update-mysql-user
     * @throws GuzzleException
     * @param UpdateMysqlUser\UpdateMysqlUserRequest $request An object representing the request for this operation
     * @return EmptyResponse|UpdateMysqlUser\UpdateMysqlUser400Response|UpdateMysqlUser\UpdateMysqlUser404Response|UpdateMysqlUser\UpdateMysqlUserDefaultResponse OK
     */
    public function updateMysqlUser(UpdateMysqlUserRequest $request): EmptyResponse|UpdateMysqlUser400Response|UpdateMysqlUser404Response|UpdateMysqlUserDefaultResponse
    {
        $httpRequest = new Request(UpdateMysqlUserRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new EmptyResponse($httpResponse),
            400 => UpdateMysqlUser400Response::fromResponse($httpResponse),
            404 => UpdateMysqlUser404Response::fromResponse($httpResponse),
            default => UpdateMysqlUserDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Delete a RedisDatabase.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Database/operation/database-delete-redis-database
     * @throws GuzzleException
     * @param DeleteRedisDatabase\DeleteRedisDatabaseRequest $request An object representing the request for this operation
     * @return EmptyResponse|DeleteRedisDatabase\DeleteRedisDatabase400Response|DeleteRedisDatabase\DeleteRedisDatabase412Response|DeleteRedisDatabase\DeleteRedisDatabase500Response|DeleteRedisDatabase\DeleteRedisDatabase503Response|DeleteRedisDatabase\DeleteRedisDatabaseDefaultResponse NoContent
     */
    public function deleteRedisDatabase(DeleteRedisDatabaseRequest $request): EmptyResponse|DeleteRedisDatabase400Response|DeleteRedisDatabase412Response|DeleteRedisDatabase500Response|DeleteRedisDatabase503Response|DeleteRedisDatabaseDefaultResponse
    {
        $httpRequest = new Request(DeleteRedisDatabaseRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200, 204 => new EmptyResponse($httpResponse),
            400 => DeleteRedisDatabase400Response::fromResponse($httpResponse),
            412 => DeleteRedisDatabase412Response::fromResponse($httpResponse),
            500 => DeleteRedisDatabase500Response::fromResponse($httpResponse),
            503 => DeleteRedisDatabase503Response::fromResponse($httpResponse),
            default => DeleteRedisDatabaseDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Get a RedisDatabase.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Database/operation/database-get-redis-database
     * @throws GuzzleException
     * @param GetRedisDatabase\GetRedisDatabaseRequest $request An object representing the request for this operation
     * @return GetRedisDatabase\GetRedisDatabase200Response|GetRedisDatabase\GetRedisDatabase400Response|GetRedisDatabase\GetRedisDatabase404Response|GetRedisDatabase\GetRedisDatabase500Response|GetRedisDatabase\GetRedisDatabaseDefaultResponse OK
     */
    public function getRedisDatabase(GetRedisDatabaseRequest $request): GetRedisDatabase200Response|GetRedisDatabase400Response|GetRedisDatabase404Response|GetRedisDatabase500Response|GetRedisDatabaseDefaultResponse
    {
        $httpRequest = new Request(GetRedisDatabaseRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetRedisDatabase200Response::fromResponse($httpResponse),
            400 => GetRedisDatabase400Response::fromResponse($httpResponse),
            404 => GetRedisDatabase404Response::fromResponse($httpResponse),
            500 => GetRedisDatabase500Response::fromResponse($httpResponse),
            default => GetRedisDatabaseDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Disable a MySQLUser.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Database/operation/database-disable-mysql-user
     * @throws GuzzleException
     * @param DisableMysqlUser\DisableMysqlUserRequest $request An object representing the request for this operation
     * @return EmptyResponse|DisableMysqlUser\DisableMysqlUser400Response|DisableMysqlUser\DisableMysqlUser404Response|DisableMysqlUser\DisableMysqlUserDefaultResponse OK
     */
    public function disableMysqlUser(DisableMysqlUserRequest $request): EmptyResponse|DisableMysqlUser400Response|DisableMysqlUser404Response|DisableMysqlUserDefaultResponse
    {
        $httpRequest = new Request(DisableMysqlUserRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new EmptyResponse($httpResponse),
            400 => DisableMysqlUser400Response::fromResponse($httpResponse),
            404 => DisableMysqlUser404Response::fromResponse($httpResponse),
            default => DisableMysqlUserDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Enable a MySQLUser.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Database/operation/database-enable-mysql-user
     * @throws GuzzleException
     * @param EnableMysqlUser\EnableMysqlUserRequest $request An object representing the request for this operation
     * @return EmptyResponse|EnableMysqlUser\EnableMysqlUser400Response|EnableMysqlUser\EnableMysqlUser404Response|EnableMysqlUser\EnableMysqlUserDefaultResponse OK
     */
    public function enableMysqlUser(EnableMysqlUserRequest $request): EmptyResponse|EnableMysqlUser400Response|EnableMysqlUser404Response|EnableMysqlUserDefaultResponse
    {
        $httpRequest = new Request(EnableMysqlUserRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new EmptyResponse($httpResponse),
            400 => EnableMysqlUser400Response::fromResponse($httpResponse),
            404 => EnableMysqlUser404Response::fromResponse($httpResponse),
            default => EnableMysqlUserDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Get a MySQLUser's PhpMyAdmin-URL.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Database/operation/database-get-mysql-user-php-my-admin-url
     * @throws GuzzleException
     * @param GetMysqlUserPhpMyAdminUrl\GetMysqlUserPhpMyAdminUrlRequest $request An object representing the request for this operation
     * @return GetMysqlUserPhpMyAdminUrl\GetMysqlUserPhpMyAdminUrl200Response|GetMysqlUserPhpMyAdminUrl\GetMysqlUserPhpMyAdminUrl400Response|GetMysqlUserPhpMyAdminUrl\GetMysqlUserPhpMyAdminUrl404Response|GetMysqlUserPhpMyAdminUrl\GetMysqlUserPhpMyAdminUrlDefaultResponse OK
     */
    public function getMysqlUserPhpMyAdminUrl(GetMysqlUserPhpMyAdminUrlRequest $request): GetMysqlUserPhpMyAdminUrl200Response|GetMysqlUserPhpMyAdminUrl400Response|GetMysqlUserPhpMyAdminUrl404Response|GetMysqlUserPhpMyAdminUrlDefaultResponse
    {
        $httpRequest = new Request(GetMysqlUserPhpMyAdminUrlRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetMysqlUserPhpMyAdminUrl200Response::fromResponse($httpResponse),
            400 => GetMysqlUserPhpMyAdminUrl400Response::fromResponse($httpResponse),
            404 => GetMysqlUserPhpMyAdminUrl404Response::fromResponse($httpResponse),
            default => GetMysqlUserPhpMyAdminUrlDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * List available MySQL character sets and collations, optionally filtered by a MySQLVersion.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Database/operation/database-list-mysql-charsets
     * @throws GuzzleException
     * @param ListMysqlCharsets\ListMysqlCharsetsRequest $request An object representing the request for this operation
     * @return ListMysqlCharsets\ListMysqlCharsets200Response|ListMysqlCharsets\ListMysqlCharsets400Response|ListMysqlCharsets\ListMysqlCharsets404Response|ListMysqlCharsets\ListMysqlCharsetsDefaultResponse OK
     */
    public function listMysqlCharsets(ListMysqlCharsetsRequest $request): ListMysqlCharsets200Response|ListMysqlCharsets400Response|ListMysqlCharsets404Response|ListMysqlCharsetsDefaultResponse
    {
        $httpRequest = new Request(ListMysqlCharsetsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListMysqlCharsets200Response::fromResponse($httpResponse),
            400 => ListMysqlCharsets400Response::fromResponse($httpResponse),
            404 => ListMysqlCharsets404Response::fromResponse($httpResponse),
            default => ListMysqlCharsetsDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * List MySQLVersions.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Database/operation/database-list-mysql-versions
     * @throws GuzzleException
     * @param ListMysqlVersions\ListMysqlVersionsRequest $request An object representing the request for this operation
     * @return ListMysqlVersions\ListMysqlVersions200Response|ListMysqlVersions\ListMysqlVersions400Response|ListMysqlVersions\ListMysqlVersions404Response|ListMysqlVersions\ListMysqlVersionsDefaultResponse OK
     */
    public function listMysqlVersions(ListMysqlVersionsRequest $request): ListMysqlVersions200Response|ListMysqlVersions400Response|ListMysqlVersions404Response|ListMysqlVersionsDefaultResponse
    {
        $httpRequest = new Request(ListMysqlVersionsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListMysqlVersions200Response::fromResponse($httpResponse),
            400 => ListMysqlVersions400Response::fromResponse($httpResponse),
            404 => ListMysqlVersions404Response::fromResponse($httpResponse),
            default => ListMysqlVersionsDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * List RedisVersions.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Database/operation/database-list-redis-versions
     * @throws GuzzleException
     * @param ListRedisVersions\ListRedisVersionsRequest $request An object representing the request for this operation
     * @return ListRedisVersions\ListRedisVersions200Response|ListRedisVersions\ListRedisVersions400Response|ListRedisVersions\ListRedisVersions404Response|ListRedisVersions\ListRedisVersionsDefaultResponse OK
     */
    public function listRedisVersions(ListRedisVersionsRequest $request): ListRedisVersions200Response|ListRedisVersions400Response|ListRedisVersions404Response|ListRedisVersionsDefaultResponse
    {
        $httpRequest = new Request(ListRedisVersionsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListRedisVersions200Response::fromResponse($httpResponse),
            400 => ListRedisVersions400Response::fromResponse($httpResponse),
            404 => ListRedisVersions404Response::fromResponse($httpResponse),
            default => ListRedisVersionsDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Update a MySQLDatabase's default character settings.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Database/operation/database-update-mysql-database-default-charset
     * @throws GuzzleException
     * @param UpdateMysqlDatabaseDefaultCharset\UpdateMysqlDatabaseDefaultCharsetRequest $request An object representing the request for this operation
     * @return EmptyResponse|UpdateMysqlDatabaseDefaultCharset\UpdateMysqlDatabaseDefaultCharset400Response|UpdateMysqlDatabaseDefaultCharset\UpdateMysqlDatabaseDefaultCharset404Response|UpdateMysqlDatabaseDefaultCharset\UpdateMysqlDatabaseDefaultCharsetDefaultResponse OK
     */
    public function updateMysqlDatabaseDefaultCharset(UpdateMysqlDatabaseDefaultCharsetRequest $request): EmptyResponse|UpdateMysqlDatabaseDefaultCharset400Response|UpdateMysqlDatabaseDefaultCharset404Response|UpdateMysqlDatabaseDefaultCharsetDefaultResponse
    {
        $httpRequest = new Request(UpdateMysqlDatabaseDefaultCharsetRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new EmptyResponse($httpResponse),
            400 => UpdateMysqlDatabaseDefaultCharset400Response::fromResponse($httpResponse),
            404 => UpdateMysqlDatabaseDefaultCharset404Response::fromResponse($httpResponse),
            default => UpdateMysqlDatabaseDefaultCharsetDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Update a MySQLDatabase's description.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Database/operation/database-update-mysql-database-description
     * @throws GuzzleException
     * @param UpdateMysqlDatabaseDescription\UpdateMysqlDatabaseDescriptionRequest $request An object representing the request for this operation
     * @return EmptyResponse|UpdateMysqlDatabaseDescription\UpdateMysqlDatabaseDescription400Response|UpdateMysqlDatabaseDescription\UpdateMysqlDatabaseDescription404Response|UpdateMysqlDatabaseDescription\UpdateMysqlDatabaseDescriptionDefaultResponse OK
     */
    public function updateMysqlDatabaseDescription(UpdateMysqlDatabaseDescriptionRequest $request): EmptyResponse|UpdateMysqlDatabaseDescription400Response|UpdateMysqlDatabaseDescription404Response|UpdateMysqlDatabaseDescriptionDefaultResponse
    {
        $httpRequest = new Request(UpdateMysqlDatabaseDescriptionRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new EmptyResponse($httpResponse),
            400 => UpdateMysqlDatabaseDescription400Response::fromResponse($httpResponse),
            404 => UpdateMysqlDatabaseDescription404Response::fromResponse($httpResponse),
            default => UpdateMysqlDatabaseDescriptionDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Update a MySQLUser's password.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Database/operation/database-update-mysql-user-password
     * @throws GuzzleException
     * @param UpdateMysqlUserPassword\UpdateMysqlUserPasswordRequest $request An object representing the request for this operation
     * @return EmptyResponse|UpdateMysqlUserPassword\UpdateMysqlUserPassword400Response|UpdateMysqlUserPassword\UpdateMysqlUserPassword404Response|UpdateMysqlUserPassword\UpdateMysqlUserPasswordDefaultResponse OK
     */
    public function updateMysqlUserPassword(UpdateMysqlUserPasswordRequest $request): EmptyResponse|UpdateMysqlUserPassword400Response|UpdateMysqlUserPassword404Response|UpdateMysqlUserPasswordDefaultResponse
    {
        $httpRequest = new Request(UpdateMysqlUserPasswordRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new EmptyResponse($httpResponse),
            400 => UpdateMysqlUserPassword400Response::fromResponse($httpResponse),
            404 => UpdateMysqlUserPassword404Response::fromResponse($httpResponse),
            default => UpdateMysqlUserPasswordDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Update a RedisDatabase's configuration.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Database/operation/database-update-redis-database-configuration
     * @throws GuzzleException
     * @param UpdateRedisDatabaseConfiguration\UpdateRedisDatabaseConfigurationRequest $request An object representing the request for this operation
     * @return EmptyResponse|UpdateRedisDatabaseConfiguration\UpdateRedisDatabaseConfiguration400Response|UpdateRedisDatabaseConfiguration\UpdateRedisDatabaseConfiguration404Response|UpdateRedisDatabaseConfiguration\UpdateRedisDatabaseConfigurationDefaultResponse OK
     */
    public function updateRedisDatabaseConfiguration(UpdateRedisDatabaseConfigurationRequest $request): EmptyResponse|UpdateRedisDatabaseConfiguration400Response|UpdateRedisDatabaseConfiguration404Response|UpdateRedisDatabaseConfigurationDefaultResponse
    {
        $httpRequest = new Request(UpdateRedisDatabaseConfigurationRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new EmptyResponse($httpResponse),
            400 => UpdateRedisDatabaseConfiguration400Response::fromResponse($httpResponse),
            404 => UpdateRedisDatabaseConfiguration404Response::fromResponse($httpResponse),
            default => UpdateRedisDatabaseConfigurationDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Update a RedisDatabase's description.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Database/operation/database-update-redis-database-description
     * @throws GuzzleException
     * @param UpdateRedisDatabaseDescription\UpdateRedisDatabaseDescriptionRequest $request An object representing the request for this operation
     * @return EmptyResponse|UpdateRedisDatabaseDescription\UpdateRedisDatabaseDescription400Response|UpdateRedisDatabaseDescription\UpdateRedisDatabaseDescription404Response|UpdateRedisDatabaseDescription\UpdateRedisDatabaseDescriptionDefaultResponse OK
     */
    public function updateRedisDatabaseDescription(UpdateRedisDatabaseDescriptionRequest $request): EmptyResponse|UpdateRedisDatabaseDescription400Response|UpdateRedisDatabaseDescription404Response|UpdateRedisDatabaseDescriptionDefaultResponse
    {
        $httpRequest = new Request(UpdateRedisDatabaseDescriptionRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new EmptyResponse($httpResponse),
            400 => UpdateRedisDatabaseDescription400Response::fromResponse($httpResponse),
            404 => UpdateRedisDatabaseDescription404Response::fromResponse($httpResponse),
            default => UpdateRedisDatabaseDescriptionDefaultResponse::fromResponse($httpResponse),
        };
    }
}
