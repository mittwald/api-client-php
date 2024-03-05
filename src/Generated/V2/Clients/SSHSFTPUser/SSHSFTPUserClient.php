<?php

namespace Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser;

use GuzzleHttp\Exception\GuzzleException;
use Mittwald\ApiClient\Client\EmptyResponse;
use Mittwald\ApiClient\Error\UnexpectedResponseException;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\CreateSftpUser\CreateSftpUserCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\CreateSftpUser\CreateSftpUserRequest;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\CreateSshUser\CreateSshUserCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\CreateSshUser\CreateSshUserRequest;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\DeleteSftpUser\DeleteSftpUserRequest;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\DeleteSshUser\DeleteSshUserRequest;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\GetSftpUser\GetSftpUserOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\GetSftpUser\GetSftpUserRequest;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\GetSshUser\GetSshUserOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\GetSshUser\GetSshUserRequest;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\ListSftpUsers\ListSftpUsersOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\ListSftpUsers\ListSftpUsersRequest;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\ListSshUsers\ListSshUsersOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\ListSshUsers\ListSshUsersRequest;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\UpdateSftpUser\UpdateSftpUserRequest;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\UpdateSshUser\UpdateSshUserRequest;

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
interface SSHSFTPUserClient
{
    /**
     * Create an SFTPUser for a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/SSHSFTP-User/operation/sftp-user-create-sftp-user
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CreateSftpUser\CreateSftpUserRequest $request An object representing the request for this operation
     * @return CreateSftpUser\CreateSftpUserCreatedResponse Created
     */
    public function createSftpUser(CreateSftpUserRequest $request): CreateSftpUserCreatedResponse;
    /**
     * Delete an SFTPUser.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/SSHSFTP-User/operation/sftp-user-delete-sftp-user
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteSftpUser\DeleteSftpUserRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function deleteSftpUser(DeleteSftpUserRequest $request): EmptyResponse;
    /**
     * Get an SFTPUser.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/SSHSFTP-User/operation/sftp-user-get-sftp-user
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetSftpUser\GetSftpUserRequest $request An object representing the request for this operation
     * @return GetSftpUser\GetSftpUserOKResponse OK
     */
    public function getSftpUser(GetSftpUserRequest $request): GetSftpUserOKResponse;
    /**
     * Get all SFTPUsers for a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/SSHSFTP-User/operation/sftp-user-list-sftp-users
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListSftpUsers\ListSftpUsersRequest $request An object representing the request for this operation
     * @return ListSftpUsers\ListSftpUsersOKResponse OK
     */
    public function listSftpUsers(ListSftpUsersRequest $request): ListSftpUsersOKResponse;
    /**
     * Update an SFTPUser.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/SSHSFTP-User/operation/sftp-user-update-sftp-user
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateSftpUser\UpdateSftpUserRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function updateSftpUser(UpdateSftpUserRequest $request): EmptyResponse;
    /**
     * Create an SSHUser for a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/SSHSFTP-User/operation/ssh-user-create-ssh-user
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CreateSshUser\CreateSshUserRequest $request An object representing the request for this operation
     * @return CreateSshUser\CreateSshUserCreatedResponse Created
     */
    public function createSshUser(CreateSshUserRequest $request): CreateSshUserCreatedResponse;
    /**
     * Delete an SSHUser.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/SSHSFTP-User/operation/ssh-user-delete-ssh-user
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteSshUser\DeleteSshUserRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function deleteSshUser(DeleteSshUserRequest $request): EmptyResponse;
    /**
     * Get an SSHUser.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/SSHSFTP-User/operation/ssh-user-get-ssh-user
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetSshUser\GetSshUserRequest $request An object representing the request for this operation
     * @return GetSshUser\GetSshUserOKResponse OK
     */
    public function getSshUser(GetSshUserRequest $request): GetSshUserOKResponse;
    /**
     * Get all SSHUsers for a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/SSHSFTP-User/operation/ssh-user-list-ssh-users
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListSshUsers\ListSshUsersRequest $request An object representing the request for this operation
     * @return ListSshUsers\ListSshUsersOKResponse OK
     */
    public function listSshUsers(ListSshUsersRequest $request): ListSshUsersOKResponse;
    /**
     * Update an SSHUser.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/SSHSFTP-User/operation/ssh-user-update-ssh-user
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateSshUser\UpdateSshUserRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function updateSshUser(UpdateSshUserRequest $request): EmptyResponse;
}
