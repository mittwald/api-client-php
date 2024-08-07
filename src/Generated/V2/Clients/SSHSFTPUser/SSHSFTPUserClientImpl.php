<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use Mittwald\ApiClient\Client\EmptyResponse;
use Mittwald\ApiClient\Error\UnexpectedResponseException;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\CreateSftpUser\CreateSftpUserBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\CreateSftpUser\CreateSftpUserCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\CreateSftpUser\CreateSftpUserDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\CreateSftpUser\CreateSftpUserForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\CreateSftpUser\CreateSftpUserRequest;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\CreateSftpUser\CreateSftpUserTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\CreateSshUser\CreateSshUserBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\CreateSshUser\CreateSshUserCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\CreateSshUser\CreateSshUserDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\CreateSshUser\CreateSshUserForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\CreateSshUser\CreateSshUserRequest;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\CreateSshUser\CreateSshUserTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\DeleteSftpUser\DeleteSftpUserDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\DeleteSftpUser\DeleteSftpUserForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\DeleteSftpUser\DeleteSftpUserRequest;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\DeleteSftpUser\DeleteSftpUserTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\DeleteSshUser\DeleteSshUserDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\DeleteSshUser\DeleteSshUserForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\DeleteSshUser\DeleteSshUserRequest;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\DeleteSshUser\DeleteSshUserTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\GetSftpUser\GetSftpUserDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\GetSftpUser\GetSftpUserForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\GetSftpUser\GetSftpUserNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\GetSftpUser\GetSftpUserOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\GetSftpUser\GetSftpUserRequest;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\GetSftpUser\GetSftpUserTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\GetSshUser\GetSshUserDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\GetSshUser\GetSshUserForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\GetSshUser\GetSshUserNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\GetSshUser\GetSshUserOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\GetSshUser\GetSshUserRequest;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\GetSshUser\GetSshUserTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\ListSftpUsers\ListSftpUsersDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\ListSftpUsers\ListSftpUsersForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\ListSftpUsers\ListSftpUsersNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\ListSftpUsers\ListSftpUsersOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\ListSftpUsers\ListSftpUsersRequest;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\ListSftpUsers\ListSftpUsersTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\ListSshUsers\ListSshUsersDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\ListSshUsers\ListSshUsersForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\ListSshUsers\ListSshUsersNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\ListSshUsers\ListSshUsersOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\ListSshUsers\ListSshUsersRequest;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\ListSshUsers\ListSshUsersTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\UpdateSftpUser\UpdateSftpUserBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\UpdateSftpUser\UpdateSftpUserDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\UpdateSftpUser\UpdateSftpUserForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\UpdateSftpUser\UpdateSftpUserRequest;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\UpdateSftpUser\UpdateSftpUserTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\UpdateSshUser\UpdateSshUserBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\UpdateSshUser\UpdateSshUserDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\UpdateSshUser\UpdateSshUserForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\UpdateSshUser\UpdateSshUserRequest;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\UpdateSshUser\UpdateSshUserTooManyRequestsResponse;

/**
 * Client for SSH/SFTP User API
 *
 * The SSH/SFTP User API allows you to manage your SSH/SFTP users within a project.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class SSHSFTPUserClientImpl implements SSHSFTPUserClient
{
    private Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Create an SFTPUser for a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/SSHSFTP-User/operation/sftp-user-create-sftp-user
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CreateSftpUserRequest $request An object representing the request for this operation
     * @return CreateSftpUserCreatedResponse Created
     */
    public function createSftpUser(CreateSftpUserRequest $request): CreateSftpUserCreatedResponse
    {
        $httpRequest = new Request(CreateSftpUserRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 201) {
            return CreateSftpUserCreatedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => CreateSftpUserBadRequestResponse::fromResponse($httpResponse),
            403 => CreateSftpUserForbiddenResponse::fromResponse($httpResponse),
            429 => CreateSftpUserTooManyRequestsResponse::fromResponse($httpResponse),
            default => CreateSftpUserDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Delete an SFTPUser.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/SSHSFTP-User/operation/sftp-user-delete-sftp-user
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteSftpUserRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function deleteSftpUser(DeleteSftpUserRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeleteSftpUserRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            403 => DeleteSftpUserForbiddenResponse::fromResponse($httpResponse),
            429 => DeleteSftpUserTooManyRequestsResponse::fromResponse($httpResponse),
            default => DeleteSftpUserDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get an SFTPUser.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/SSHSFTP-User/operation/sftp-user-get-sftp-user
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetSftpUserRequest $request An object representing the request for this operation
     * @return GetSftpUserOKResponse OK
     */
    public function getSftpUser(GetSftpUserRequest $request): GetSftpUserOKResponse
    {
        $httpRequest = new Request(GetSftpUserRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetSftpUserOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            403 => GetSftpUserForbiddenResponse::fromResponse($httpResponse),
            404 => GetSftpUserNotFoundResponse::fromResponse($httpResponse),
            429 => GetSftpUserTooManyRequestsResponse::fromResponse($httpResponse),
            default => GetSftpUserDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get all SFTPUsers for a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/SSHSFTP-User/operation/sftp-user-list-sftp-users
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListSftpUsersRequest $request An object representing the request for this operation
     * @return ListSftpUsersOKResponse OK
     */
    public function listSftpUsers(ListSftpUsersRequest $request): ListSftpUsersOKResponse
    {
        $httpRequest = new Request(ListSftpUsersRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListSftpUsersOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            403 => ListSftpUsersForbiddenResponse::fromResponse($httpResponse),
            404 => ListSftpUsersNotFoundResponse::fromResponse($httpResponse),
            429 => ListSftpUsersTooManyRequestsResponse::fromResponse($httpResponse),
            default => ListSftpUsersDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update an SFTPUser.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/SSHSFTP-User/operation/sftp-user-update-sftp-user
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateSftpUserRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function updateSftpUser(UpdateSftpUserRequest $request): EmptyResponse
    {
        $httpRequest = new Request(UpdateSftpUserRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateSftpUserBadRequestResponse::fromResponse($httpResponse),
            403 => UpdateSftpUserForbiddenResponse::fromResponse($httpResponse),
            429 => UpdateSftpUserTooManyRequestsResponse::fromResponse($httpResponse),
            default => UpdateSftpUserDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Create an SSHUser for a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/SSHSFTP-User/operation/ssh-user-create-ssh-user
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CreateSshUserRequest $request An object representing the request for this operation
     * @return CreateSshUserCreatedResponse Created
     */
    public function createSshUser(CreateSshUserRequest $request): CreateSshUserCreatedResponse
    {
        $httpRequest = new Request(CreateSshUserRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 201) {
            return CreateSshUserCreatedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => CreateSshUserBadRequestResponse::fromResponse($httpResponse),
            403 => CreateSshUserForbiddenResponse::fromResponse($httpResponse),
            429 => CreateSshUserTooManyRequestsResponse::fromResponse($httpResponse),
            default => CreateSshUserDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Delete an SSHUser.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/SSHSFTP-User/operation/ssh-user-delete-ssh-user
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteSshUserRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function deleteSshUser(DeleteSshUserRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeleteSshUserRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            403 => DeleteSshUserForbiddenResponse::fromResponse($httpResponse),
            429 => DeleteSshUserTooManyRequestsResponse::fromResponse($httpResponse),
            default => DeleteSshUserDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get an SSHUser.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/SSHSFTP-User/operation/ssh-user-get-ssh-user
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetSshUserRequest $request An object representing the request for this operation
     * @return GetSshUserOKResponse OK
     */
    public function getSshUser(GetSshUserRequest $request): GetSshUserOKResponse
    {
        $httpRequest = new Request(GetSshUserRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetSshUserOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            403 => GetSshUserForbiddenResponse::fromResponse($httpResponse),
            404 => GetSshUserNotFoundResponse::fromResponse($httpResponse),
            429 => GetSshUserTooManyRequestsResponse::fromResponse($httpResponse),
            default => GetSshUserDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get all SSHUsers for a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/SSHSFTP-User/operation/ssh-user-list-ssh-users
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListSshUsersRequest $request An object representing the request for this operation
     * @return ListSshUsersOKResponse OK
     */
    public function listSshUsers(ListSshUsersRequest $request): ListSshUsersOKResponse
    {
        $httpRequest = new Request(ListSshUsersRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListSshUsersOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            403 => ListSshUsersForbiddenResponse::fromResponse($httpResponse),
            404 => ListSshUsersNotFoundResponse::fromResponse($httpResponse),
            429 => ListSshUsersTooManyRequestsResponse::fromResponse($httpResponse),
            default => ListSshUsersDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update an SSHUser.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/SSHSFTP-User/operation/ssh-user-update-ssh-user
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateSshUserRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function updateSshUser(UpdateSshUserRequest $request): EmptyResponse
    {
        $httpRequest = new Request(UpdateSshUserRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateSshUserBadRequestResponse::fromResponse($httpResponse),
            403 => UpdateSshUserForbiddenResponse::fromResponse($httpResponse),
            429 => UpdateSshUserTooManyRequestsResponse::fromResponse($httpResponse),
            default => UpdateSshUserDefaultResponse::fromResponse($httpResponse),
        });
    }
}
