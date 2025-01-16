<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Project;

use GuzzleHttp\Exception\GuzzleException;
use Mittwald\ApiClient\Client\EmptyResponse;
use Mittwald\ApiClient\Error\UnexpectedResponseException;
use Mittwald\ApiClient\Generated\V2\Clients\Project\AcceptProjectInvite\AcceptProjectInviteRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\CreateProject\CreateProjectCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\CreateProject\CreateProjectRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\CreateProjectInvite\CreateProjectInviteCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\CreateProjectInvite\CreateProjectInviteRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeclineProjectInvite\DeclineProjectInviteRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeleteProject\DeleteProjectRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeleteProjectAvatar\DeleteProjectAvatarRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeleteProjectInvite\DeleteProjectInviteRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeleteProjectMembership\DeleteProjectMembershipRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeleteServerAvatar\DeleteServerAvatarRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeprecatedProjectLeaveProject\DeprecatedProjectLeaveProjectRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetProject\GetProjectOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetProject\GetProjectRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetProjectInvite\GetProjectInviteOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetProjectInvite\GetProjectInviteRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetProjectMembership\GetProjectMembershipOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetProjectMembership\GetProjectMembershipRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetProjectTokenInvite\GetProjectTokenInviteOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetProjectTokenInvite\GetProjectTokenInviteRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetSelfMembershipForProject\GetSelfMembershipForProjectOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetSelfMembershipForProject\GetSelfMembershipForProjectRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetServer\GetServerOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetServer\GetServerRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListInvitesForProject\ListInvitesForProjectOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListInvitesForProject\ListInvitesForProjectRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListMembershipsForProject\ListMembershipsForProjectOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListMembershipsForProject\ListMembershipsForProjectRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListProjectInvites\ListProjectInvitesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListProjectInvites\ListProjectInvitesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListProjectMemberships\ListProjectMembershipsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListProjectMemberships\ListProjectMembershipsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListProjects\ListProjectsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListProjects\ListProjectsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListServers\ListServersOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListServers\ListServersRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\RequestProjectAvatarUpload\RequestProjectAvatarUploadOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\RequestProjectAvatarUpload\RequestProjectAvatarUploadRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\RequestServerAvatarUpload\RequestServerAvatarUploadOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\RequestServerAvatarUpload\RequestServerAvatarUploadRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ResendProjectInviteMail\ResendProjectInviteMailRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\StoragespaceGetProjectStatistics\StoragespaceGetProjectStatisticsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\StoragespaceGetProjectStatistics\StoragespaceGetProjectStatisticsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\StoragespaceGetServerStatistics\StoragespaceGetServerStatisticsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\StoragespaceGetServerStatistics\StoragespaceGetServerStatisticsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\StoragespaceReplaceProjectNotificationThreshold\StoragespaceReplaceProjectNotificationThresholdRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\StoragespaceReplaceServerNotificationThreshold\StoragespaceReplaceServerNotificationThresholdRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\UpdateProjectDescription\UpdateProjectDescriptionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\UpdateProjectMembership\UpdateProjectMembershipRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\UpdateServerDescription\UpdateServerDescriptionRequest;

/**
 * Client for Project API
 *
 * The project API allows you to manage your projects, and also any kinds of user
 * memberships concerning these projects.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
interface ProjectClient
{
    /**
     * Leave a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/deprecated-project-leave-project
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedProjectLeaveProjectRequest $request An object representing the request for this operation
     * @deprecated
     */
    public function deprecatedProjectLeaveProject(DeprecatedProjectLeaveProjectRequest $request): EmptyResponse;
    /**
     * Accept a ProjectInvite.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-accept-project-invite
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param AcceptProjectInviteRequest $request An object representing the request for this operation
     */
    public function acceptProjectInvite(AcceptProjectInviteRequest $request): EmptyResponse;
    /**
     * Create a Project belonging to a Server.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-create-project
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CreateProjectRequest $request An object representing the request for this operation
     * @return CreateProjectCreatedResponse Created
     */
    public function createProject(CreateProjectRequest $request): CreateProjectCreatedResponse;
    /**
     * Create a ProjectInvite.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-create-project-invite
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CreateProjectInviteRequest $request An object representing the request for this operation
     * @return CreateProjectInviteCreatedResponse Created
     */
    public function createProjectInvite(CreateProjectInviteRequest $request): CreateProjectInviteCreatedResponse;
    /**
     * Decline a ProjectInvite.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-decline-project-invite
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeclineProjectInviteRequest $request An object representing the request for this operation
     */
    public function declineProjectInvite(DeclineProjectInviteRequest $request): EmptyResponse;
    /**
     * Delete a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-delete-project
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteProjectRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function deleteProject(DeleteProjectRequest $request): EmptyResponse;
    /**
     * Delete a Project's avatar.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-delete-project-avatar
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteProjectAvatarRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function deleteProjectAvatar(DeleteProjectAvatarRequest $request): EmptyResponse;
    /**
     * Delete a ProjectInvite.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-delete-project-invite
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteProjectInviteRequest $request An object representing the request for this operation
     */
    public function deleteProjectInvite(DeleteProjectInviteRequest $request): EmptyResponse;
    /**
     * Delete a ProjectMembership.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-delete-project-membership
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteProjectMembershipRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function deleteProjectMembership(DeleteProjectMembershipRequest $request): EmptyResponse;
    /**
     * Delete a Server's avatar.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-delete-server-avatar
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteServerAvatarRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function deleteServerAvatar(DeleteServerAvatarRequest $request): EmptyResponse;
    /**
     * Get a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-get-project
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetProjectRequest $request An object representing the request for this operation
     * @return GetProjectOKResponse OK
     */
    public function getProject(GetProjectRequest $request): GetProjectOKResponse;
    /**
     * Get a ProjectInvite.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-get-project-invite
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetProjectInviteRequest $request An object representing the request for this operation
     * @return GetProjectInviteOKResponse OK
     */
    public function getProjectInvite(GetProjectInviteRequest $request): GetProjectInviteOKResponse;
    /**
     * Get a ProjectMembership
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-get-project-membership
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetProjectMembershipRequest $request An object representing the request for this operation
     */
    public function getProjectMembership(GetProjectMembershipRequest $request): GetProjectMembershipOKResponse;
    /**
     * Get a ProjectInvite by token.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-get-project-token-invite
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetProjectTokenInviteRequest $request An object representing the request for this operation
     * @return GetProjectTokenInviteOKResponse OK
     */
    public function getProjectTokenInvite(GetProjectTokenInviteRequest $request): GetProjectTokenInviteOKResponse;
    /**
     * Get the executing user's membership in a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-get-self-membership-for-project
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetSelfMembershipForProjectRequest $request An object representing the request for this operation
     * @return GetSelfMembershipForProjectOKResponse OK
     */
    public function getSelfMembershipForProject(GetSelfMembershipForProjectRequest $request): GetSelfMembershipForProjectOKResponse;
    /**
     * Get a Server.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-get-server
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetServerRequest $request An object representing the request for this operation
     * @return GetServerOKResponse OK
     */
    public function getServer(GetServerRequest $request): GetServerOKResponse;
    /**
     * List Invites belonging to a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-list-invites-for-project
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListInvitesForProjectRequest $request An object representing the request for this operation
     * @return ListInvitesForProjectOKResponse OK
     */
    public function listInvitesForProject(ListInvitesForProjectRequest $request): ListInvitesForProjectOKResponse;
    /**
     * List Memberships belonging to a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-list-memberships-for-project
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListMembershipsForProjectRequest $request An object representing the request for this operation
     * @return ListMembershipsForProjectOKResponse OK
     */
    public function listMembershipsForProject(ListMembershipsForProjectRequest $request): ListMembershipsForProjectOKResponse;
    /**
     * List ProjectInvites belonging to the executing user.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-list-project-invites
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListProjectInvitesRequest $request An object representing the request for this operation
     * @return ListProjectInvitesOKResponse OK
     */
    public function listProjectInvites(ListProjectInvitesRequest $request): ListProjectInvitesOKResponse;
    /**
     * List ProjectMemberships belonging to the executing user.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-list-project-memberships
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListProjectMembershipsRequest $request An object representing the request for this operation
     * @return ListProjectMembershipsOKResponse OK
     */
    public function listProjectMemberships(ListProjectMembershipsRequest $request): ListProjectMembershipsOKResponse;
    /**
     * List Projects belonging to the executing user.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-list-projects
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListProjectsRequest $request An object representing the request for this operation
     * @return ListProjectsOKResponse OK
     */
    public function listProjects(ListProjectsRequest $request): ListProjectsOKResponse;
    /**
     * List Servers belonging to the executing user.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-list-servers
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListServersRequest $request An object representing the request for this operation
     * @return ListServersOKResponse OK
     */
    public function listServers(ListServersRequest $request): ListServersOKResponse;
    /**
     * Request a Project avatar upload.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-request-project-avatar-upload
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param RequestProjectAvatarUploadRequest $request An object representing the request for this operation
     * @return RequestProjectAvatarUploadOKResponse OK
     */
    public function requestProjectAvatarUpload(RequestProjectAvatarUploadRequest $request): RequestProjectAvatarUploadOKResponse;
    /**
     * Request a Server avatar upload.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-request-server-avatar-upload
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param RequestServerAvatarUploadRequest $request An object representing the request for this operation
     * @return RequestServerAvatarUploadOKResponse OK
     */
    public function requestServerAvatarUpload(RequestServerAvatarUploadRequest $request): RequestServerAvatarUploadOKResponse;
    /**
     * Resend the mail for a ProjectInvite.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-resend-project-invite-mail
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ResendProjectInviteMailRequest $request An object representing the request for this operation
     */
    public function resendProjectInviteMail(ResendProjectInviteMailRequest $request): EmptyResponse;
    /**
     * Update a Project's description.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-update-project-description
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateProjectDescriptionRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function updateProjectDescription(UpdateProjectDescriptionRequest $request): EmptyResponse;
    /**
     * Update a ProjectMembership.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-update-project-membership
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateProjectMembershipRequest $request An object representing the request for this operation
     */
    public function updateProjectMembership(UpdateProjectMembershipRequest $request): EmptyResponse;
    /**
     * Update a Servers's description.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-update-server-description
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateServerDescriptionRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function updateServerDescription(UpdateServerDescriptionRequest $request): EmptyResponse;
    /**
     * Get storage space Statistics belonging to a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/storagespace-get-project-statistics
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param StoragespaceGetProjectStatisticsRequest $request An object representing the request for this operation
     * @return StoragespaceGetProjectStatisticsOKResponse OK
     */
    public function storagespaceGetProjectStatistics(StoragespaceGetProjectStatisticsRequest $request): StoragespaceGetProjectStatisticsOKResponse;
    /**
     * Get storage space Statistics belonging to a Server.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/storagespace-get-server-statistics
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param StoragespaceGetServerStatisticsRequest $request An object representing the request for this operation
     * @return StoragespaceGetServerStatisticsOKResponse OK
     */
    public function storagespaceGetServerStatistics(StoragespaceGetServerStatisticsRequest $request): StoragespaceGetServerStatisticsOKResponse;
    /**
     * Update a Project's storage space notification threshold.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/storagespace-replace-project-notification-threshold
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param StoragespaceReplaceProjectNotificationThresholdRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function storagespaceReplaceProjectNotificationThreshold(StoragespaceReplaceProjectNotificationThresholdRequest $request): EmptyResponse;
    /**
     * Update a Server's storage space notification threshold.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/storagespace-replace-server-notification-threshold
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param StoragespaceReplaceServerNotificationThresholdRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function storagespaceReplaceServerNotificationThreshold(StoragespaceReplaceServerNotificationThresholdRequest $request): EmptyResponse;
}
