<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Project;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use Mittwald\ApiClient\Client\EmptyResponse;
use Mittwald\ApiClient\Error\UnexpectedResponseException;
use Mittwald\ApiClient\Generated\V2\Clients\Project\AcceptProjectInvite\AcceptProjectInviteBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\AcceptProjectInvite\AcceptProjectInviteDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\AcceptProjectInvite\AcceptProjectInviteForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\AcceptProjectInvite\AcceptProjectInvitePreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\AcceptProjectInvite\AcceptProjectInviteRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\CreateProject\CreateProjectBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\CreateProject\CreateProjectCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\CreateProject\CreateProjectDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\CreateProject\CreateProjectForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\CreateProject\CreateProjectPreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\CreateProject\CreateProjectRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\CreateProjectInvite\CreateProjectInviteBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\CreateProjectInvite\CreateProjectInviteConflictResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\CreateProjectInvite\CreateProjectInviteCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\CreateProjectInvite\CreateProjectInviteDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\CreateProjectInvite\CreateProjectInviteRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeclineProjectInvite\DeclineProjectInviteDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeclineProjectInvite\DeclineProjectInviteRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeleteProject\DeleteProjectBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeleteProject\DeleteProjectDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeleteProject\DeleteProjectForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeleteProject\DeleteProjectInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeleteProject\DeleteProjectPreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeleteProject\DeleteProjectRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeleteProjectAvatar\DeleteProjectAvatarBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeleteProjectAvatar\DeleteProjectAvatarDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeleteProjectAvatar\DeleteProjectAvatarForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeleteProjectAvatar\DeleteProjectAvatarRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeleteProjectInvite\DeleteProjectInviteDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeleteProjectInvite\DeleteProjectInviteRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeleteProjectMembership\DeleteProjectMembershipDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeleteProjectMembership\DeleteProjectMembershipRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeleteServerAvatar\DeleteServerAvatarBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeleteServerAvatar\DeleteServerAvatarDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeleteServerAvatar\DeleteServerAvatarForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeleteServerAvatar\DeleteServerAvatarRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetProject\GetProjectDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetProject\GetProjectForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetProject\GetProjectOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetProject\GetProjectRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetProjectInvite\GetProjectInviteDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetProjectInvite\GetProjectInviteNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetProjectInvite\GetProjectInviteOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetProjectInvite\GetProjectInviteRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetProjectMembership\GetProjectMembershipDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetProjectMembership\GetProjectMembershipNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetProjectMembership\GetProjectMembershipOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetProjectMembership\GetProjectMembershipRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetProjectTokenInvite\GetProjectTokenInviteDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetProjectTokenInvite\GetProjectTokenInviteNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetProjectTokenInvite\GetProjectTokenInviteOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetProjectTokenInvite\GetProjectTokenInviteRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetSelfMembershipForProject\GetSelfMembershipForProjectDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetSelfMembershipForProject\GetSelfMembershipForProjectForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetSelfMembershipForProject\GetSelfMembershipForProjectNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetSelfMembershipForProject\GetSelfMembershipForProjectOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetSelfMembershipForProject\GetSelfMembershipForProjectRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetServer\GetServerDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetServer\GetServerForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetServer\GetServerNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetServer\GetServerOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetServer\GetServerRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\LeaveProject\LeaveProjectDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\LeaveProject\LeaveProjectRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListInvitesForProject\ListInvitesForProjectDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListInvitesForProject\ListInvitesForProjectNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListInvitesForProject\ListInvitesForProjectOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListInvitesForProject\ListInvitesForProjectRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListMembershipsForProject\ListMembershipsForProjectDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListMembershipsForProject\ListMembershipsForProjectNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListMembershipsForProject\ListMembershipsForProjectOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListMembershipsForProject\ListMembershipsForProjectRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListProjectInvites\ListProjectInvitesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListProjectInvites\ListProjectInvitesForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListProjectInvites\ListProjectInvitesNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListProjectInvites\ListProjectInvitesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListProjectInvites\ListProjectInvitesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListProjectMemberships\ListProjectMembershipsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListProjectMemberships\ListProjectMembershipsForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListProjectMemberships\ListProjectMembershipsNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListProjectMemberships\ListProjectMembershipsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListProjectMemberships\ListProjectMembershipsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListProjects\ListProjectsBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListProjects\ListProjectsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListProjects\ListProjectsForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListProjects\ListProjectsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListProjects\ListProjectsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListServers\ListServersDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListServers\ListServersForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListServers\ListServersOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListServers\ListServersRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\RequestProjectAvatarUpload\RequestProjectAvatarUploadBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\RequestProjectAvatarUpload\RequestProjectAvatarUploadDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\RequestProjectAvatarUpload\RequestProjectAvatarUploadForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\RequestProjectAvatarUpload\RequestProjectAvatarUploadOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\RequestProjectAvatarUpload\RequestProjectAvatarUploadRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\RequestServerAvatarUpload\RequestServerAvatarUploadBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\RequestServerAvatarUpload\RequestServerAvatarUploadDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\RequestServerAvatarUpload\RequestServerAvatarUploadForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\RequestServerAvatarUpload\RequestServerAvatarUploadOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\RequestServerAvatarUpload\RequestServerAvatarUploadRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ResendProjectInviteMail\ResendProjectInviteMailDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ResendProjectInviteMail\ResendProjectInviteMailForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ResendProjectInviteMail\ResendProjectInviteMailRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\UpdateProjectDescription\UpdateProjectDescriptionBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\UpdateProjectDescription\UpdateProjectDescriptionDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\UpdateProjectDescription\UpdateProjectDescriptionForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\UpdateProjectDescription\UpdateProjectDescriptionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\UpdateProjectMembership\UpdateProjectMembershipDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\UpdateProjectMembership\UpdateProjectMembershipRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\UpdateServerDescription\UpdateServerDescriptionBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\UpdateServerDescription\UpdateServerDescriptionDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\UpdateServerDescription\UpdateServerDescriptionForbiddenResponse;
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
class ProjectClientImpl implements ProjectClient
{
    private Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Accept a ProjectInvite.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-accept-project-invite
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param AcceptProjectInviteRequest $request An object representing the request for this operation
     */
    public function acceptProjectInvite(AcceptProjectInviteRequest $request): EmptyResponse
    {
        $httpRequest = new Request(AcceptProjectInviteRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => AcceptProjectInviteBadRequestResponse::fromResponse($httpResponse),
            403 => AcceptProjectInviteForbiddenResponse::fromResponse($httpResponse),
            412 => AcceptProjectInvitePreconditionFailedResponse::fromResponse($httpResponse),
            default => AcceptProjectInviteDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Create a Project belonging to a Server.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-create-project
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CreateProjectRequest $request An object representing the request for this operation
     * @return CreateProjectCreatedResponse Created
     */
    public function createProject(CreateProjectRequest $request): CreateProjectCreatedResponse
    {
        $httpRequest = new Request(CreateProjectRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 201) {
            return CreateProjectCreatedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => CreateProjectBadRequestResponse::fromResponse($httpResponse),
            403 => CreateProjectForbiddenResponse::fromResponse($httpResponse),
            412 => CreateProjectPreconditionFailedResponse::fromResponse($httpResponse),
            default => CreateProjectDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Create a ProjectInvite.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-create-project-invite
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CreateProjectInviteRequest $request An object representing the request for this operation
     * @return CreateProjectInviteCreatedResponse Created
     */
    public function createProjectInvite(CreateProjectInviteRequest $request): CreateProjectInviteCreatedResponse
    {
        $httpRequest = new Request(CreateProjectInviteRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 201) {
            return CreateProjectInviteCreatedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => CreateProjectInviteBadRequestResponse::fromResponse($httpResponse),
            409 => CreateProjectInviteConflictResponse::fromResponse($httpResponse),
            default => CreateProjectInviteDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Decline a ProjectInvite.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-decline-project-invite
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeclineProjectInviteRequest $request An object representing the request for this operation
     */
    public function declineProjectInvite(DeclineProjectInviteRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeclineProjectInviteRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            default => DeclineProjectInviteDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Delete a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-delete-project
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteProjectRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function deleteProject(DeleteProjectRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeleteProjectRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeleteProjectBadRequestResponse::fromResponse($httpResponse),
            403 => DeleteProjectForbiddenResponse::fromResponse($httpResponse),
            412 => DeleteProjectPreconditionFailedResponse::fromResponse($httpResponse),
            500 => DeleteProjectInternalServerErrorResponse::fromResponse($httpResponse),
            default => DeleteProjectDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Delete a Project's avatar.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-delete-project-avatar
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteProjectAvatarRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function deleteProjectAvatar(DeleteProjectAvatarRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeleteProjectAvatarRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeleteProjectAvatarBadRequestResponse::fromResponse($httpResponse),
            403 => DeleteProjectAvatarForbiddenResponse::fromResponse($httpResponse),
            default => DeleteProjectAvatarDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Delete a ProjectInvite.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-delete-project-invite
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteProjectInviteRequest $request An object representing the request for this operation
     */
    public function deleteProjectInvite(DeleteProjectInviteRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeleteProjectInviteRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            default => DeleteProjectInviteDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Delete a ProjectMembership.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-delete-project-membership
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteProjectMembershipRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function deleteProjectMembership(DeleteProjectMembershipRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeleteProjectMembershipRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            default => DeleteProjectMembershipDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Delete a Server's avatar.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-delete-server-avatar
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteServerAvatarRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function deleteServerAvatar(DeleteServerAvatarRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeleteServerAvatarRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeleteServerAvatarBadRequestResponse::fromResponse($httpResponse),
            403 => DeleteServerAvatarForbiddenResponse::fromResponse($httpResponse),
            default => DeleteServerAvatarDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-get-project
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetProjectRequest $request An object representing the request for this operation
     * @return GetProjectOKResponse OK
     */
    public function getProject(GetProjectRequest $request): GetProjectOKResponse
    {
        $httpRequest = new Request(GetProjectRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetProjectOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            403 => GetProjectForbiddenResponse::fromResponse($httpResponse),
            default => GetProjectDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a ProjectInvite.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-get-project-invite
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetProjectInviteRequest $request An object representing the request for this operation
     * @return GetProjectInviteOKResponse OK
     */
    public function getProjectInvite(GetProjectInviteRequest $request): GetProjectInviteOKResponse
    {
        $httpRequest = new Request(GetProjectInviteRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetProjectInviteOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => GetProjectInviteNotFoundResponse::fromResponse($httpResponse),
            default => GetProjectInviteDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a ProjectMembership
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-get-project-membership
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetProjectMembershipRequest $request An object representing the request for this operation
     */
    public function getProjectMembership(GetProjectMembershipRequest $request): GetProjectMembershipOKResponse
    {
        $httpRequest = new Request(GetProjectMembershipRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetProjectMembershipOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => GetProjectMembershipNotFoundResponse::fromResponse($httpResponse),
            default => GetProjectMembershipDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a ProjectInvite by token.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-get-project-token-invite
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetProjectTokenInviteRequest $request An object representing the request for this operation
     * @return GetProjectTokenInviteOKResponse OK
     */
    public function getProjectTokenInvite(GetProjectTokenInviteRequest $request): GetProjectTokenInviteOKResponse
    {
        $httpRequest = new Request(GetProjectTokenInviteRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetProjectTokenInviteOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => GetProjectTokenInviteNotFoundResponse::fromResponse($httpResponse),
            default => GetProjectTokenInviteDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get the executing user's membership in a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-get-self-membership-for-project
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetSelfMembershipForProjectRequest $request An object representing the request for this operation
     * @return GetSelfMembershipForProjectOKResponse OK
     */
    public function getSelfMembershipForProject(GetSelfMembershipForProjectRequest $request): GetSelfMembershipForProjectOKResponse
    {
        $httpRequest = new Request(GetSelfMembershipForProjectRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetSelfMembershipForProjectOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            403 => GetSelfMembershipForProjectForbiddenResponse::fromResponse($httpResponse),
            404 => GetSelfMembershipForProjectNotFoundResponse::fromResponse($httpResponse),
            default => GetSelfMembershipForProjectDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a Server.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-get-server
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetServerRequest $request An object representing the request for this operation
     * @return GetServerOKResponse OK
     */
    public function getServer(GetServerRequest $request): GetServerOKResponse
    {
        $httpRequest = new Request(GetServerRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetServerOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            403 => GetServerForbiddenResponse::fromResponse($httpResponse),
            404 => GetServerNotFoundResponse::fromResponse($httpResponse),
            default => GetServerDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Leave a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-leave-project
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param LeaveProjectRequest $request An object representing the request for this operation
     */
    public function leaveProject(LeaveProjectRequest $request): EmptyResponse
    {
        $httpRequest = new Request(LeaveProjectRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            default => LeaveProjectDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List Invites belonging to a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-list-invites-for-project
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListInvitesForProjectRequest $request An object representing the request for this operation
     * @return ListInvitesForProjectOKResponse OK
     */
    public function listInvitesForProject(ListInvitesForProjectRequest $request): ListInvitesForProjectOKResponse
    {
        $httpRequest = new Request(ListInvitesForProjectRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListInvitesForProjectOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => ListInvitesForProjectNotFoundResponse::fromResponse($httpResponse),
            default => ListInvitesForProjectDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List Memberships belonging to a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-list-memberships-for-project
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListMembershipsForProjectRequest $request An object representing the request for this operation
     * @return ListMembershipsForProjectOKResponse OK
     */
    public function listMembershipsForProject(ListMembershipsForProjectRequest $request): ListMembershipsForProjectOKResponse
    {
        $httpRequest = new Request(ListMembershipsForProjectRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListMembershipsForProjectOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => ListMembershipsForProjectNotFoundResponse::fromResponse($httpResponse),
            default => ListMembershipsForProjectDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List ProjectInvites belonging to the executing user.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-list-project-invites
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListProjectInvitesRequest $request An object representing the request for this operation
     * @return ListProjectInvitesOKResponse OK
     */
    public function listProjectInvites(ListProjectInvitesRequest $request): ListProjectInvitesOKResponse
    {
        $httpRequest = new Request(ListProjectInvitesRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListProjectInvitesOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            403 => ListProjectInvitesForbiddenResponse::fromResponse($httpResponse),
            404 => ListProjectInvitesNotFoundResponse::fromResponse($httpResponse),
            default => ListProjectInvitesDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List ProjectMemberships belonging to the executing user.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-list-project-memberships
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListProjectMembershipsRequest $request An object representing the request for this operation
     * @return ListProjectMembershipsOKResponse OK
     */
    public function listProjectMemberships(ListProjectMembershipsRequest $request): ListProjectMembershipsOKResponse
    {
        $httpRequest = new Request(ListProjectMembershipsRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListProjectMembershipsOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            403 => ListProjectMembershipsForbiddenResponse::fromResponse($httpResponse),
            404 => ListProjectMembershipsNotFoundResponse::fromResponse($httpResponse),
            default => ListProjectMembershipsDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List Projects belonging to the executing user.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-list-projects
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListProjectsRequest $request An object representing the request for this operation
     * @return ListProjectsOKResponse OK
     */
    public function listProjects(ListProjectsRequest $request): ListProjectsOKResponse
    {
        $httpRequest = new Request(ListProjectsRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListProjectsOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ListProjectsBadRequestResponse::fromResponse($httpResponse),
            403 => ListProjectsForbiddenResponse::fromResponse($httpResponse),
            default => ListProjectsDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List Servers belonging to the executing user.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-list-servers
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListServersRequest $request An object representing the request for this operation
     * @return ListServersOKResponse OK
     */
    public function listServers(ListServersRequest $request): ListServersOKResponse
    {
        $httpRequest = new Request(ListServersRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListServersOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            403 => ListServersForbiddenResponse::fromResponse($httpResponse),
            default => ListServersDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Request a Project avatar upload.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-request-project-avatar-upload
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param RequestProjectAvatarUploadRequest $request An object representing the request for this operation
     * @return RequestProjectAvatarUploadOKResponse OK
     */
    public function requestProjectAvatarUpload(RequestProjectAvatarUploadRequest $request): RequestProjectAvatarUploadOKResponse
    {
        $httpRequest = new Request(RequestProjectAvatarUploadRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return RequestProjectAvatarUploadOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => RequestProjectAvatarUploadBadRequestResponse::fromResponse($httpResponse),
            403 => RequestProjectAvatarUploadForbiddenResponse::fromResponse($httpResponse),
            default => RequestProjectAvatarUploadDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Request a Server avatar upload.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-request-server-avatar-upload
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param RequestServerAvatarUploadRequest $request An object representing the request for this operation
     * @return RequestServerAvatarUploadOKResponse OK
     */
    public function requestServerAvatarUpload(RequestServerAvatarUploadRequest $request): RequestServerAvatarUploadOKResponse
    {
        $httpRequest = new Request(RequestServerAvatarUploadRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return RequestServerAvatarUploadOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => RequestServerAvatarUploadBadRequestResponse::fromResponse($httpResponse),
            403 => RequestServerAvatarUploadForbiddenResponse::fromResponse($httpResponse),
            default => RequestServerAvatarUploadDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Resend the mail for a ProjectInvite.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-resend-project-invite-mail
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ResendProjectInviteMailRequest $request An object representing the request for this operation
     */
    public function resendProjectInviteMail(ResendProjectInviteMailRequest $request): EmptyResponse
    {
        $httpRequest = new Request(ResendProjectInviteMailRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            403 => ResendProjectInviteMailForbiddenResponse::fromResponse($httpResponse),
            default => ResendProjectInviteMailDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update a Project's description.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-update-project-description
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateProjectDescriptionRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function updateProjectDescription(UpdateProjectDescriptionRequest $request): EmptyResponse
    {
        $httpRequest = new Request(UpdateProjectDescriptionRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateProjectDescriptionBadRequestResponse::fromResponse($httpResponse),
            403 => UpdateProjectDescriptionForbiddenResponse::fromResponse($httpResponse),
            default => UpdateProjectDescriptionDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update a ProjectMembership.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-update-project-membership
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateProjectMembershipRequest $request An object representing the request for this operation
     */
    public function updateProjectMembership(UpdateProjectMembershipRequest $request): EmptyResponse
    {
        $httpRequest = new Request(UpdateProjectMembershipRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            default => UpdateProjectMembershipDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update a Servers's description.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-update-server-description
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateServerDescriptionRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function updateServerDescription(UpdateServerDescriptionRequest $request): EmptyResponse
    {
        $httpRequest = new Request(UpdateServerDescriptionRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateServerDescriptionBadRequestResponse::fromResponse($httpResponse),
            403 => UpdateServerDescriptionForbiddenResponse::fromResponse($httpResponse),
            default => UpdateServerDescriptionDefaultResponse::fromResponse($httpResponse),
        });
    }
}
