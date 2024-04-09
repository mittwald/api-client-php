<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Database;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use Mittwald\ApiClient\Client\EmptyResponse;
use Mittwald\ApiClient\Error\UnexpectedResponseException;
use Mittwald\ApiClient\Generated\V2\Clients\Database\CreateMysqlDatabase\CreateMysqlDatabaseBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\CreateMysqlDatabase\CreateMysqlDatabaseCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\CreateMysqlDatabase\CreateMysqlDatabaseDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\CreateMysqlDatabase\CreateMysqlDatabaseNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\CreateMysqlDatabase\CreateMysqlDatabaseRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Database\CreateMysqlUser\CreateMysqlUserBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\CreateMysqlUser\CreateMysqlUserCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\CreateMysqlUser\CreateMysqlUserDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\CreateMysqlUser\CreateMysqlUserNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\CreateMysqlUser\CreateMysqlUserRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Database\CreateRedisDatabase\CreateRedisDatabaseBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\CreateRedisDatabase\CreateRedisDatabaseCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\CreateRedisDatabase\CreateRedisDatabaseDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\CreateRedisDatabase\CreateRedisDatabaseNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\CreateRedisDatabase\CreateRedisDatabaseRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Database\DeleteMysqlDatabase\DeleteMysqlDatabaseBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\DeleteMysqlDatabase\DeleteMysqlDatabaseDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\DeleteMysqlDatabase\DeleteMysqlDatabaseInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\DeleteMysqlDatabase\DeleteMysqlDatabasePreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\DeleteMysqlDatabase\DeleteMysqlDatabaseRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Database\DeleteMysqlDatabase\DeleteMysqlDatabaseServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\DeleteMysqlUser\DeleteMysqlUserBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\DeleteMysqlUser\DeleteMysqlUserDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\DeleteMysqlUser\DeleteMysqlUserNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\DeleteMysqlUser\DeleteMysqlUserRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Database\DeleteRedisDatabase\DeleteRedisDatabaseBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\DeleteRedisDatabase\DeleteRedisDatabaseDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\DeleteRedisDatabase\DeleteRedisDatabaseInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\DeleteRedisDatabase\DeleteRedisDatabasePreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\DeleteRedisDatabase\DeleteRedisDatabaseRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Database\DeleteRedisDatabase\DeleteRedisDatabaseServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\DisableMysqlUser\DisableMysqlUserBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\DisableMysqlUser\DisableMysqlUserDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\DisableMysqlUser\DisableMysqlUserNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\DisableMysqlUser\DisableMysqlUserRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Database\EnableMysqlUser\EnableMysqlUserBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\EnableMysqlUser\EnableMysqlUserDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\EnableMysqlUser\EnableMysqlUserNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\EnableMysqlUser\EnableMysqlUserRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Database\GetMysqlDatabase\GetMysqlDatabaseBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\GetMysqlDatabase\GetMysqlDatabaseDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\GetMysqlDatabase\GetMysqlDatabaseInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\GetMysqlDatabase\GetMysqlDatabaseNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\GetMysqlDatabase\GetMysqlDatabaseOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\GetMysqlDatabase\GetMysqlDatabaseRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Database\GetMysqlUser\GetMysqlUserBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\GetMysqlUser\GetMysqlUserDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\GetMysqlUser\GetMysqlUserNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\GetMysqlUser\GetMysqlUserOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\GetMysqlUser\GetMysqlUserRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Database\GetMysqlUserPhpMyAdminUrl\GetMysqlUserPhpMyAdminUrlBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\GetMysqlUserPhpMyAdminUrl\GetMysqlUserPhpMyAdminUrlDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\GetMysqlUserPhpMyAdminUrl\GetMysqlUserPhpMyAdminUrlNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\GetMysqlUserPhpMyAdminUrl\GetMysqlUserPhpMyAdminUrlOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\GetMysqlUserPhpMyAdminUrl\GetMysqlUserPhpMyAdminUrlRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Database\GetRedisDatabase\GetRedisDatabaseBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\GetRedisDatabase\GetRedisDatabaseDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\GetRedisDatabase\GetRedisDatabaseInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\GetRedisDatabase\GetRedisDatabaseNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\GetRedisDatabase\GetRedisDatabaseOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\GetRedisDatabase\GetRedisDatabaseRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListMysqlCharsets\ListMysqlCharsetsBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListMysqlCharsets\ListMysqlCharsetsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListMysqlCharsets\ListMysqlCharsetsNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListMysqlCharsets\ListMysqlCharsetsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListMysqlCharsets\ListMysqlCharsetsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListMysqlDatabases\ListMysqlDatabasesBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListMysqlDatabases\ListMysqlDatabasesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListMysqlDatabases\ListMysqlDatabasesNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListMysqlDatabases\ListMysqlDatabasesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListMysqlDatabases\ListMysqlDatabasesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListMysqlUsers\ListMysqlUsersBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListMysqlUsers\ListMysqlUsersDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListMysqlUsers\ListMysqlUsersNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListMysqlUsers\ListMysqlUsersOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListMysqlUsers\ListMysqlUsersRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListMysqlVersions\ListMysqlVersionsBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListMysqlVersions\ListMysqlVersionsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListMysqlVersions\ListMysqlVersionsNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListMysqlVersions\ListMysqlVersionsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListMysqlVersions\ListMysqlVersionsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListRedisDatabases\ListRedisDatabasesBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListRedisDatabases\ListRedisDatabasesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListRedisDatabases\ListRedisDatabasesNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListRedisDatabases\ListRedisDatabasesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListRedisDatabases\ListRedisDatabasesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListRedisVersions\ListRedisVersionsBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListRedisVersions\ListRedisVersionsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListRedisVersions\ListRedisVersionsNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListRedisVersions\ListRedisVersionsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\ListRedisVersions\ListRedisVersionsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Database\UpdateMysqlDatabaseDefaultCharset\UpdateMysqlDatabaseDefaultCharsetBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\UpdateMysqlDatabaseDefaultCharset\UpdateMysqlDatabaseDefaultCharsetDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\UpdateMysqlDatabaseDefaultCharset\UpdateMysqlDatabaseDefaultCharsetNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\UpdateMysqlDatabaseDefaultCharset\UpdateMysqlDatabaseDefaultCharsetRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Database\UpdateMysqlDatabaseDescription\UpdateMysqlDatabaseDescriptionBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\UpdateMysqlDatabaseDescription\UpdateMysqlDatabaseDescriptionDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\UpdateMysqlDatabaseDescription\UpdateMysqlDatabaseDescriptionNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\UpdateMysqlDatabaseDescription\UpdateMysqlDatabaseDescriptionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Database\UpdateMysqlUser\UpdateMysqlUserBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\UpdateMysqlUser\UpdateMysqlUserDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\UpdateMysqlUser\UpdateMysqlUserNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\UpdateMysqlUser\UpdateMysqlUserRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Database\UpdateMysqlUserPassword\UpdateMysqlUserPasswordBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\UpdateMysqlUserPassword\UpdateMysqlUserPasswordDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\UpdateMysqlUserPassword\UpdateMysqlUserPasswordNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\UpdateMysqlUserPassword\UpdateMysqlUserPasswordRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Database\UpdateRedisDatabaseConfiguration\UpdateRedisDatabaseConfigurationBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\UpdateRedisDatabaseConfiguration\UpdateRedisDatabaseConfigurationDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\UpdateRedisDatabaseConfiguration\UpdateRedisDatabaseConfigurationNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\UpdateRedisDatabaseConfiguration\UpdateRedisDatabaseConfigurationRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Database\UpdateRedisDatabaseDescription\UpdateRedisDatabaseDescriptionBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\UpdateRedisDatabaseDescription\UpdateRedisDatabaseDescriptionDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Database\UpdateRedisDatabaseDescription\UpdateRedisDatabaseDescriptionNotFoundResponse;
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
class DatabaseClientImpl implements DatabaseClient
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
     * @throws UnexpectedResponseException
     * @param CreateMysqlDatabaseRequest $request An object representing the request for this operation
     * @return CreateMysqlDatabaseCreatedResponse Created
     */
    public function createMysqlDatabase(CreateMysqlDatabaseRequest $request): CreateMysqlDatabaseCreatedResponse
    {
        $httpRequest = new Request(CreateMysqlDatabaseRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 201) {
            return CreateMysqlDatabaseCreatedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => CreateMysqlDatabaseBadRequestResponse::fromResponse($httpResponse),
            404 => CreateMysqlDatabaseNotFoundResponse::fromResponse($httpResponse),
            default => CreateMysqlDatabaseDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Create a MySQLUser.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Database/operation/database-create-mysql-user
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CreateMysqlUserRequest $request An object representing the request for this operation
     * @return CreateMysqlUserCreatedResponse Created
     */
    public function createMysqlUser(CreateMysqlUserRequest $request): CreateMysqlUserCreatedResponse
    {
        $httpRequest = new Request(CreateMysqlUserRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 201) {
            return CreateMysqlUserCreatedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => CreateMysqlUserBadRequestResponse::fromResponse($httpResponse),
            404 => CreateMysqlUserNotFoundResponse::fromResponse($httpResponse),
            default => CreateMysqlUserDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Create a RedisDatabase.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Database/operation/database-create-redis-database
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CreateRedisDatabaseRequest $request An object representing the request for this operation
     * @return CreateRedisDatabaseCreatedResponse Created
     */
    public function createRedisDatabase(CreateRedisDatabaseRequest $request): CreateRedisDatabaseCreatedResponse
    {
        $httpRequest = new Request(CreateRedisDatabaseRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 201) {
            return CreateRedisDatabaseCreatedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => CreateRedisDatabaseBadRequestResponse::fromResponse($httpResponse),
            404 => CreateRedisDatabaseNotFoundResponse::fromResponse($httpResponse),
            default => CreateRedisDatabaseDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Delete a MySQLDatabase.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Database/operation/database-delete-mysql-database
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteMysqlDatabaseRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function deleteMysqlDatabase(DeleteMysqlDatabaseRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeleteMysqlDatabaseRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeleteMysqlDatabaseBadRequestResponse::fromResponse($httpResponse),
            412 => DeleteMysqlDatabasePreconditionFailedResponse::fromResponse($httpResponse),
            500 => DeleteMysqlDatabaseInternalServerErrorResponse::fromResponse($httpResponse),
            503 => DeleteMysqlDatabaseServiceUnavailableResponse::fromResponse($httpResponse),
            default => DeleteMysqlDatabaseDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Delete a MySQLUser.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Database/operation/database-delete-mysql-user
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteMysqlUserRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function deleteMysqlUser(DeleteMysqlUserRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeleteMysqlUserRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeleteMysqlUserBadRequestResponse::fromResponse($httpResponse),
            404 => DeleteMysqlUserNotFoundResponse::fromResponse($httpResponse),
            default => DeleteMysqlUserDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Delete a RedisDatabase.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Database/operation/database-delete-redis-database
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteRedisDatabaseRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function deleteRedisDatabase(DeleteRedisDatabaseRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeleteRedisDatabaseRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeleteRedisDatabaseBadRequestResponse::fromResponse($httpResponse),
            412 => DeleteRedisDatabasePreconditionFailedResponse::fromResponse($httpResponse),
            500 => DeleteRedisDatabaseInternalServerErrorResponse::fromResponse($httpResponse),
            503 => DeleteRedisDatabaseServiceUnavailableResponse::fromResponse($httpResponse),
            default => DeleteRedisDatabaseDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Disable a MySQLUser.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Database/operation/database-disable-mysql-user
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DisableMysqlUserRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function disableMysqlUser(DisableMysqlUserRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DisableMysqlUserRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DisableMysqlUserBadRequestResponse::fromResponse($httpResponse),
            404 => DisableMysqlUserNotFoundResponse::fromResponse($httpResponse),
            default => DisableMysqlUserDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Enable a MySQLUser.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Database/operation/database-enable-mysql-user
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param EnableMysqlUserRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function enableMysqlUser(EnableMysqlUserRequest $request): EmptyResponse
    {
        $httpRequest = new Request(EnableMysqlUserRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => EnableMysqlUserBadRequestResponse::fromResponse($httpResponse),
            404 => EnableMysqlUserNotFoundResponse::fromResponse($httpResponse),
            default => EnableMysqlUserDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a MySQLDatabase.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Database/operation/database-get-mysql-database
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetMysqlDatabaseRequest $request An object representing the request for this operation
     * @return GetMysqlDatabaseOKResponse OK
     */
    public function getMysqlDatabase(GetMysqlDatabaseRequest $request): GetMysqlDatabaseOKResponse
    {
        $httpRequest = new Request(GetMysqlDatabaseRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetMysqlDatabaseOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => GetMysqlDatabaseBadRequestResponse::fromResponse($httpResponse),
            404 => GetMysqlDatabaseNotFoundResponse::fromResponse($httpResponse),
            500 => GetMysqlDatabaseInternalServerErrorResponse::fromResponse($httpResponse),
            default => GetMysqlDatabaseDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a MySQLUser.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Database/operation/database-get-mysql-user
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetMysqlUserRequest $request An object representing the request for this operation
     * @return GetMysqlUserOKResponse OK
     */
    public function getMysqlUser(GetMysqlUserRequest $request): GetMysqlUserOKResponse
    {
        $httpRequest = new Request(GetMysqlUserRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetMysqlUserOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => GetMysqlUserBadRequestResponse::fromResponse($httpResponse),
            404 => GetMysqlUserNotFoundResponse::fromResponse($httpResponse),
            default => GetMysqlUserDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a MySQLUser's PhpMyAdmin-URL.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Database/operation/database-get-mysql-user-php-my-admin-url
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetMysqlUserPhpMyAdminUrlRequest $request An object representing the request for this operation
     * @return GetMysqlUserPhpMyAdminUrlOKResponse OK
     */
    public function getMysqlUserPhpMyAdminUrl(GetMysqlUserPhpMyAdminUrlRequest $request): GetMysqlUserPhpMyAdminUrlOKResponse
    {
        $httpRequest = new Request(GetMysqlUserPhpMyAdminUrlRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetMysqlUserPhpMyAdminUrlOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => GetMysqlUserPhpMyAdminUrlBadRequestResponse::fromResponse($httpResponse),
            404 => GetMysqlUserPhpMyAdminUrlNotFoundResponse::fromResponse($httpResponse),
            default => GetMysqlUserPhpMyAdminUrlDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a RedisDatabase.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Database/operation/database-get-redis-database
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetRedisDatabaseRequest $request An object representing the request for this operation
     * @return GetRedisDatabaseOKResponse OK
     */
    public function getRedisDatabase(GetRedisDatabaseRequest $request): GetRedisDatabaseOKResponse
    {
        $httpRequest = new Request(GetRedisDatabaseRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetRedisDatabaseOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => GetRedisDatabaseBadRequestResponse::fromResponse($httpResponse),
            404 => GetRedisDatabaseNotFoundResponse::fromResponse($httpResponse),
            500 => GetRedisDatabaseInternalServerErrorResponse::fromResponse($httpResponse),
            default => GetRedisDatabaseDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List available MySQL character sets and collations, optionally filtered by a MySQLVersion.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Database/operation/database-list-mysql-charsets
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListMysqlCharsetsRequest $request An object representing the request for this operation
     * @return ListMysqlCharsetsOKResponse OK
     */
    public function listMysqlCharsets(ListMysqlCharsetsRequest $request): ListMysqlCharsetsOKResponse
    {
        $httpRequest = new Request(ListMysqlCharsetsRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListMysqlCharsetsOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ListMysqlCharsetsBadRequestResponse::fromResponse($httpResponse),
            404 => ListMysqlCharsetsNotFoundResponse::fromResponse($httpResponse),
            default => ListMysqlCharsetsDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List MySQLDatabases belonging to a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Database/operation/database-list-mysql-databases
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListMysqlDatabasesRequest $request An object representing the request for this operation
     * @return ListMysqlDatabasesOKResponse OK
     */
    public function listMysqlDatabases(ListMysqlDatabasesRequest $request): ListMysqlDatabasesOKResponse
    {
        $httpRequest = new Request(ListMysqlDatabasesRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListMysqlDatabasesOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ListMysqlDatabasesBadRequestResponse::fromResponse($httpResponse),
            404 => ListMysqlDatabasesNotFoundResponse::fromResponse($httpResponse),
            default => ListMysqlDatabasesDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List MySQLUsers belonging to a Database.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Database/operation/database-list-mysql-users
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListMysqlUsersRequest $request An object representing the request for this operation
     * @return ListMysqlUsersOKResponse OK
     */
    public function listMysqlUsers(ListMysqlUsersRequest $request): ListMysqlUsersOKResponse
    {
        $httpRequest = new Request(ListMysqlUsersRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListMysqlUsersOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ListMysqlUsersBadRequestResponse::fromResponse($httpResponse),
            404 => ListMysqlUsersNotFoundResponse::fromResponse($httpResponse),
            default => ListMysqlUsersDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List MySQLVersions.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Database/operation/database-list-mysql-versions
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListMysqlVersionsRequest $request An object representing the request for this operation
     * @return ListMysqlVersionsOKResponse OK
     */
    public function listMysqlVersions(ListMysqlVersionsRequest $request): ListMysqlVersionsOKResponse
    {
        $httpRequest = new Request(ListMysqlVersionsRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListMysqlVersionsOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ListMysqlVersionsBadRequestResponse::fromResponse($httpResponse),
            404 => ListMysqlVersionsNotFoundResponse::fromResponse($httpResponse),
            default => ListMysqlVersionsDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List RedisDatabases belonging to a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Database/operation/database-list-redis-databases
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListRedisDatabasesRequest $request An object representing the request for this operation
     * @return ListRedisDatabasesOKResponse OK
     */
    public function listRedisDatabases(ListRedisDatabasesRequest $request): ListRedisDatabasesOKResponse
    {
        $httpRequest = new Request(ListRedisDatabasesRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListRedisDatabasesOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ListRedisDatabasesBadRequestResponse::fromResponse($httpResponse),
            404 => ListRedisDatabasesNotFoundResponse::fromResponse($httpResponse),
            default => ListRedisDatabasesDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List RedisVersions.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Database/operation/database-list-redis-versions
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListRedisVersionsRequest $request An object representing the request for this operation
     * @return ListRedisVersionsOKResponse OK
     */
    public function listRedisVersions(ListRedisVersionsRequest $request): ListRedisVersionsOKResponse
    {
        $httpRequest = new Request(ListRedisVersionsRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListRedisVersionsOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ListRedisVersionsBadRequestResponse::fromResponse($httpResponse),
            404 => ListRedisVersionsNotFoundResponse::fromResponse($httpResponse),
            default => ListRedisVersionsDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update a MySQLDatabase's default character settings.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Database/operation/database-update-mysql-database-default-charset
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateMysqlDatabaseDefaultCharsetRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function updateMysqlDatabaseDefaultCharset(UpdateMysqlDatabaseDefaultCharsetRequest $request): EmptyResponse
    {
        $httpRequest = new Request(UpdateMysqlDatabaseDefaultCharsetRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateMysqlDatabaseDefaultCharsetBadRequestResponse::fromResponse($httpResponse),
            404 => UpdateMysqlDatabaseDefaultCharsetNotFoundResponse::fromResponse($httpResponse),
            default => UpdateMysqlDatabaseDefaultCharsetDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update a MySQLDatabase's description.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Database/operation/database-update-mysql-database-description
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateMysqlDatabaseDescriptionRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function updateMysqlDatabaseDescription(UpdateMysqlDatabaseDescriptionRequest $request): EmptyResponse
    {
        $httpRequest = new Request(UpdateMysqlDatabaseDescriptionRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateMysqlDatabaseDescriptionBadRequestResponse::fromResponse($httpResponse),
            404 => UpdateMysqlDatabaseDescriptionNotFoundResponse::fromResponse($httpResponse),
            default => UpdateMysqlDatabaseDescriptionDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update a MySQLUser.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Database/operation/database-update-mysql-user
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateMysqlUserRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function updateMysqlUser(UpdateMysqlUserRequest $request): EmptyResponse
    {
        $httpRequest = new Request(UpdateMysqlUserRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateMysqlUserBadRequestResponse::fromResponse($httpResponse),
            404 => UpdateMysqlUserNotFoundResponse::fromResponse($httpResponse),
            default => UpdateMysqlUserDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update a MySQLUser's password.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Database/operation/database-update-mysql-user-password
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateMysqlUserPasswordRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function updateMysqlUserPassword(UpdateMysqlUserPasswordRequest $request): EmptyResponse
    {
        $httpRequest = new Request(UpdateMysqlUserPasswordRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateMysqlUserPasswordBadRequestResponse::fromResponse($httpResponse),
            404 => UpdateMysqlUserPasswordNotFoundResponse::fromResponse($httpResponse),
            default => UpdateMysqlUserPasswordDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update a RedisDatabase's configuration.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Database/operation/database-update-redis-database-configuration
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateRedisDatabaseConfigurationRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function updateRedisDatabaseConfiguration(UpdateRedisDatabaseConfigurationRequest $request): EmptyResponse
    {
        $httpRequest = new Request(UpdateRedisDatabaseConfigurationRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateRedisDatabaseConfigurationBadRequestResponse::fromResponse($httpResponse),
            404 => UpdateRedisDatabaseConfigurationNotFoundResponse::fromResponse($httpResponse),
            default => UpdateRedisDatabaseConfigurationDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update a RedisDatabase's description.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Database/operation/database-update-redis-database-description
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateRedisDatabaseDescriptionRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function updateRedisDatabaseDescription(UpdateRedisDatabaseDescriptionRequest $request): EmptyResponse
    {
        $httpRequest = new Request(UpdateRedisDatabaseDescriptionRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateRedisDatabaseDescriptionBadRequestResponse::fromResponse($httpResponse),
            404 => UpdateRedisDatabaseDescriptionNotFoundResponse::fromResponse($httpResponse),
            default => UpdateRedisDatabaseDescriptionDefaultResponse::fromResponse($httpResponse),
        });
    }
}
