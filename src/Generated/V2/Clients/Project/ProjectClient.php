<?php

namespace Mittwald\ApiClient\Generated\V2\Clients\Project;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use Mittwald\ApiClient\Client\EmptyResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\AcceptProjectInvite\AcceptProjectInvite400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\AcceptProjectInvite\AcceptProjectInvite403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\AcceptProjectInvite\AcceptProjectInvite412Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\AcceptProjectInvite\AcceptProjectInviteDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\AcceptProjectInvite\AcceptProjectInviteRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\CreateProject\CreateProject201Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\CreateProject\CreateProject400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\CreateProject\CreateProject403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\CreateProject\CreateProject412Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\CreateProject\CreateProjectDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\CreateProject\CreateProjectRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\CreateProjectInvite\CreateProjectInvite201Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\CreateProjectInvite\CreateProjectInvite400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\CreateProjectInvite\CreateProjectInvite409Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\CreateProjectInvite\CreateProjectInviteDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\CreateProjectInvite\CreateProjectInviteRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeclineProjectInvite\DeclineProjectInviteDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeclineProjectInvite\DeclineProjectInviteRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeleteProject\DeleteProject200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeleteProject\DeleteProject400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeleteProject\DeleteProject403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeleteProject\DeleteProject412Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeleteProject\DeleteProject500Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeleteProject\DeleteProjectDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeleteProject\DeleteProjectRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeleteProjectAvatar\DeleteProjectAvatar400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeleteProjectAvatar\DeleteProjectAvatar403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeleteProjectAvatar\DeleteProjectAvatarDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeleteProjectAvatar\DeleteProjectAvatarRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeleteProjectInvite\DeleteProjectInviteDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeleteProjectInvite\DeleteProjectInviteRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeleteProjectMembership\DeleteProjectMembershipDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeleteProjectMembership\DeleteProjectMembershipRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeleteServerAvatar\DeleteServerAvatar400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeleteServerAvatar\DeleteServerAvatar403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeleteServerAvatar\DeleteServerAvatarDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeleteServerAvatar\DeleteServerAvatarRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetProject\GetProject200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetProject\GetProject403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetProject\GetProjectDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetProject\GetProjectRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetProjectInvite\GetProjectInvite200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetProjectInvite\GetProjectInvite404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetProjectInvite\GetProjectInviteDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetProjectInvite\GetProjectInviteRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetProjectMembership\GetProjectMembership200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetProjectMembership\GetProjectMembership404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetProjectMembership\GetProjectMembershipDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetProjectMembership\GetProjectMembershipRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetProjectTokenInvite\GetProjectTokenInvite200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetProjectTokenInvite\GetProjectTokenInvite404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetProjectTokenInvite\GetProjectTokenInviteDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetProjectTokenInvite\GetProjectTokenInviteRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetSelfMembershipForProject\GetSelfMembershipForProject200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetSelfMembershipForProject\GetSelfMembershipForProject404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetSelfMembershipForProject\GetSelfMembershipForProjectDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetSelfMembershipForProject\GetSelfMembershipForProjectRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetServer\GetServer200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetServer\GetServer403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetServer\GetServer404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetServer\GetServerDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetServer\GetServerRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\LeaveProject\LeaveProjectDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\LeaveProject\LeaveProjectRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListInvitesForProject\ListInvitesForProject200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListInvitesForProject\ListInvitesForProject404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListInvitesForProject\ListInvitesForProjectDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListInvitesForProject\ListInvitesForProjectRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListMembershipsForProject\ListMembershipsForProject200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListMembershipsForProject\ListMembershipsForProject404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListMembershipsForProject\ListMembershipsForProjectDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListMembershipsForProject\ListMembershipsForProjectRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListProjectInvites\ListProjectInvites200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListProjectInvites\ListProjectInvites404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListProjectInvites\ListProjectInvitesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListProjectInvites\ListProjectInvitesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListProjectMemberships\ListProjectMemberships200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListProjectMemberships\ListProjectMemberships404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListProjectMemberships\ListProjectMembershipsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListProjectMemberships\ListProjectMembershipsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListProjects\ListProjects200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListProjects\ListProjects400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListProjects\ListProjects403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListProjects\ListProjectsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListProjects\ListProjectsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListServers\ListServers200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListServers\ListServers403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListServers\ListServersDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListServers\ListServersRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\RequestProjectAvatarUpload\RequestProjectAvatarUpload200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\RequestProjectAvatarUpload\RequestProjectAvatarUpload400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\RequestProjectAvatarUpload\RequestProjectAvatarUpload403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\RequestProjectAvatarUpload\RequestProjectAvatarUploadDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\RequestProjectAvatarUpload\RequestProjectAvatarUploadRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\RequestServerAvatarUpload\RequestServerAvatarUpload200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\RequestServerAvatarUpload\RequestServerAvatarUpload400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\RequestServerAvatarUpload\RequestServerAvatarUpload403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\RequestServerAvatarUpload\RequestServerAvatarUploadDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\RequestServerAvatarUpload\RequestServerAvatarUploadRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ResendProjectInviteMail\ResendProjectInviteMail403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ResendProjectInviteMail\ResendProjectInviteMailDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ResendProjectInviteMail\ResendProjectInviteMailRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\UpdateProjectDescription\UpdateProjectDescription400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\UpdateProjectDescription\UpdateProjectDescription403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\UpdateProjectDescription\UpdateProjectDescriptionDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\UpdateProjectDescription\UpdateProjectDescriptionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\UpdateProjectMembership\UpdateProjectMembershipDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\UpdateProjectMembership\UpdateProjectMembershipRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\UpdateServerDescription\UpdateServerDescription400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\UpdateServerDescription\UpdateServerDescription403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\UpdateServerDescription\UpdateServerDescriptionDefaultResponse;
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
class ProjectClient
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
     * @param AcceptProjectInvite\AcceptProjectInviteRequest $request An object representing the request for this operation
     * @return EmptyResponse|AcceptProjectInvite\AcceptProjectInvite400Response|AcceptProjectInvite\AcceptProjectInvite403Response|AcceptProjectInvite\AcceptProjectInvite412Response|AcceptProjectInvite\AcceptProjectInviteDefaultResponse
     */
    public function acceptProjectInvite(AcceptProjectInviteRequest $request): EmptyResponse|AcceptProjectInvite400Response|AcceptProjectInvite403Response|AcceptProjectInvite412Response|AcceptProjectInviteDefaultResponse
    {
        $httpRequest = new Request(AcceptProjectInviteRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => AcceptProjectInvite400Response::fromResponse($httpResponse),
            403 => AcceptProjectInvite403Response::fromResponse($httpResponse),
            412 => AcceptProjectInvite412Response::fromResponse($httpResponse),
            default => AcceptProjectInviteDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Create a ProjectInvite.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-create-project-invite
     * @throws GuzzleException
     * @param CreateProjectInvite\CreateProjectInviteRequest $request An object representing the request for this operation
     * @return CreateProjectInvite\CreateProjectInvite201Response|CreateProjectInvite\CreateProjectInvite400Response|CreateProjectInvite\CreateProjectInvite409Response|CreateProjectInvite\CreateProjectInviteDefaultResponse Created
     */
    public function createProjectInvite(CreateProjectInviteRequest $request): CreateProjectInvite201Response|CreateProjectInvite400Response|CreateProjectInvite409Response|CreateProjectInviteDefaultResponse
    {
        $httpRequest = new Request(CreateProjectInviteRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => CreateProjectInvite201Response::fromResponse($httpResponse),
            400 => CreateProjectInvite400Response::fromResponse($httpResponse),
            409 => CreateProjectInvite409Response::fromResponse($httpResponse),
            default => CreateProjectInviteDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Create a Project belonging to a Server.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-create-project
     * @throws GuzzleException
     * @param CreateProject\CreateProjectRequest $request An object representing the request for this operation
     * @return CreateProject\CreateProject201Response|CreateProject\CreateProject400Response|CreateProject\CreateProject403Response|CreateProject\CreateProject412Response|CreateProject\CreateProjectDefaultResponse Created
     */
    public function createProject(CreateProjectRequest $request): CreateProject201Response|CreateProject400Response|CreateProject403Response|CreateProject412Response|CreateProjectDefaultResponse
    {
        $httpRequest = new Request(CreateProjectRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => CreateProject201Response::fromResponse($httpResponse),
            400 => CreateProject400Response::fromResponse($httpResponse),
            403 => CreateProject403Response::fromResponse($httpResponse),
            412 => CreateProject412Response::fromResponse($httpResponse),
            default => CreateProjectDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Decline a ProjectInvite.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-decline-project-invite
     * @throws GuzzleException
     * @param DeclineProjectInvite\DeclineProjectInviteRequest $request An object representing the request for this operation
     * @return EmptyResponse|DeclineProjectInvite\DeclineProjectInviteDefaultResponse
     */
    public function declineProjectInvite(DeclineProjectInviteRequest $request): EmptyResponse|DeclineProjectInviteDefaultResponse
    {
        $httpRequest = new Request(DeclineProjectInviteRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            default => DeclineProjectInviteDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Delete a Project's avatar.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-delete-project-avatar
     * @throws GuzzleException
     * @param DeleteProjectAvatar\DeleteProjectAvatarRequest $request An object representing the request for this operation
     * @return EmptyResponse|DeleteProjectAvatar\DeleteProjectAvatar400Response|DeleteProjectAvatar\DeleteProjectAvatar403Response|DeleteProjectAvatar\DeleteProjectAvatarDefaultResponse NoContent
     */
    public function deleteProjectAvatar(DeleteProjectAvatarRequest $request): EmptyResponse|DeleteProjectAvatar400Response|DeleteProjectAvatar403Response|DeleteProjectAvatarDefaultResponse
    {
        $httpRequest = new Request(DeleteProjectAvatarRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => DeleteProjectAvatar400Response::fromResponse($httpResponse),
            403 => DeleteProjectAvatar403Response::fromResponse($httpResponse),
            default => DeleteProjectAvatarDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Request a Project avatar upload.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-request-project-avatar-upload
     * @throws GuzzleException
     * @param RequestProjectAvatarUpload\RequestProjectAvatarUploadRequest $request An object representing the request for this operation
     * @return RequestProjectAvatarUpload\RequestProjectAvatarUpload200Response|RequestProjectAvatarUpload\RequestProjectAvatarUpload400Response|RequestProjectAvatarUpload\RequestProjectAvatarUpload403Response|RequestProjectAvatarUpload\RequestProjectAvatarUploadDefaultResponse OK
     */
    public function requestProjectAvatarUpload(RequestProjectAvatarUploadRequest $request): RequestProjectAvatarUpload200Response|RequestProjectAvatarUpload400Response|RequestProjectAvatarUpload403Response|RequestProjectAvatarUploadDefaultResponse
    {
        $httpRequest = new Request(RequestProjectAvatarUploadRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => RequestProjectAvatarUpload200Response::fromResponse($httpResponse),
            400 => RequestProjectAvatarUpload400Response::fromResponse($httpResponse),
            403 => RequestProjectAvatarUpload403Response::fromResponse($httpResponse),
            default => RequestProjectAvatarUploadDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Delete a ProjectInvite.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-delete-project-invite
     * @throws GuzzleException
     * @param DeleteProjectInvite\DeleteProjectInviteRequest $request An object representing the request for this operation
     * @return EmptyResponse|DeleteProjectInvite\DeleteProjectInviteDefaultResponse
     */
    public function deleteProjectInvite(DeleteProjectInviteRequest $request): EmptyResponse|DeleteProjectInviteDefaultResponse
    {
        $httpRequest = new Request(DeleteProjectInviteRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            default => DeleteProjectInviteDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Get a ProjectInvite.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-get-project-invite
     * @throws GuzzleException
     * @param GetProjectInvite\GetProjectInviteRequest $request An object representing the request for this operation
     * @return GetProjectInvite\GetProjectInvite200Response|GetProjectInvite\GetProjectInvite404Response|GetProjectInvite\GetProjectInviteDefaultResponse OK
     */
    public function getProjectInvite(GetProjectInviteRequest $request): GetProjectInvite200Response|GetProjectInvite404Response|GetProjectInviteDefaultResponse
    {
        $httpRequest = new Request(GetProjectInviteRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetProjectInvite200Response::fromResponse($httpResponse),
            404 => GetProjectInvite404Response::fromResponse($httpResponse),
            default => GetProjectInviteDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Delete a ProjectMembership.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-delete-project-membership
     * @throws GuzzleException
     * @param DeleteProjectMembership\DeleteProjectMembershipRequest $request An object representing the request for this operation
     * @return EmptyResponse|DeleteProjectMembership\DeleteProjectMembershipDefaultResponse OK
     */
    public function deleteProjectMembership(DeleteProjectMembershipRequest $request): EmptyResponse|DeleteProjectMembershipDefaultResponse
    {
        $httpRequest = new Request(DeleteProjectMembershipRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            default => DeleteProjectMembershipDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Get a ProjectMembership
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-get-project-membership
     * @throws GuzzleException
     * @param GetProjectMembership\GetProjectMembershipRequest $request An object representing the request for this operation
     * @return GetProjectMembership\GetProjectMembership200Response|GetProjectMembership\GetProjectMembership404Response|GetProjectMembership\GetProjectMembershipDefaultResponse
     */
    public function getProjectMembership(GetProjectMembershipRequest $request): GetProjectMembership200Response|GetProjectMembership404Response|GetProjectMembershipDefaultResponse
    {
        $httpRequest = new Request(GetProjectMembershipRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetProjectMembership200Response::fromResponse($httpResponse),
            404 => GetProjectMembership404Response::fromResponse($httpResponse),
            default => GetProjectMembershipDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Update a ProjectMembership.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-update-project-membership
     * @throws GuzzleException
     * @param UpdateProjectMembership\UpdateProjectMembershipRequest $request An object representing the request for this operation
     * @return EmptyResponse|UpdateProjectMembership\UpdateProjectMembershipDefaultResponse
     */
    public function updateProjectMembership(UpdateProjectMembershipRequest $request): EmptyResponse|UpdateProjectMembershipDefaultResponse
    {
        $httpRequest = new Request(UpdateProjectMembershipRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            default => UpdateProjectMembershipDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Delete a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-delete-project
     * @throws GuzzleException
     * @param DeleteProject\DeleteProjectRequest $request An object representing the request for this operation
     * @return DeleteProject\DeleteProject200Response|EmptyResponse|DeleteProject\DeleteProject400Response|DeleteProject\DeleteProject403Response|DeleteProject\DeleteProject412Response|DeleteProject\DeleteProject500Response|DeleteProject\DeleteProjectDefaultResponse NoContent
     */
    public function deleteProject(DeleteProjectRequest $request): EmptyResponse|DeleteProject200Response|DeleteProject400Response|DeleteProject403Response|DeleteProject412Response|DeleteProject500Response|DeleteProjectDefaultResponse
    {
        $httpRequest = new Request(DeleteProjectRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => DeleteProject200Response::fromResponse($httpResponse),
            204 => new EmptyResponse($httpResponse),
            400 => DeleteProject400Response::fromResponse($httpResponse),
            403 => DeleteProject403Response::fromResponse($httpResponse),
            412 => DeleteProject412Response::fromResponse($httpResponse),
            500 => DeleteProject500Response::fromResponse($httpResponse),
            default => DeleteProjectDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Get a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-get-project
     * @throws GuzzleException
     * @param GetProject\GetProjectRequest $request An object representing the request for this operation
     * @return GetProject\GetProject200Response|GetProject\GetProject403Response|GetProject\GetProjectDefaultResponse OK
     */
    public function getProject(GetProjectRequest $request): GetProject200Response|GetProject403Response|GetProjectDefaultResponse
    {
        $httpRequest = new Request(GetProjectRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetProject200Response::fromResponse($httpResponse),
            403 => GetProject403Response::fromResponse($httpResponse),
            default => GetProjectDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Delete a Server's avatar.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-delete-server-avatar
     * @throws GuzzleException
     * @param DeleteServerAvatar\DeleteServerAvatarRequest $request An object representing the request for this operation
     * @return EmptyResponse|DeleteServerAvatar\DeleteServerAvatar400Response|DeleteServerAvatar\DeleteServerAvatar403Response|DeleteServerAvatar\DeleteServerAvatarDefaultResponse NoContent
     */
    public function deleteServerAvatar(DeleteServerAvatarRequest $request): EmptyResponse|DeleteServerAvatar400Response|DeleteServerAvatar403Response|DeleteServerAvatarDefaultResponse
    {
        $httpRequest = new Request(DeleteServerAvatarRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => DeleteServerAvatar400Response::fromResponse($httpResponse),
            403 => DeleteServerAvatar403Response::fromResponse($httpResponse),
            default => DeleteServerAvatarDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Request a Server avatar upload.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-request-server-avatar-upload
     * @throws GuzzleException
     * @param RequestServerAvatarUpload\RequestServerAvatarUploadRequest $request An object representing the request for this operation
     * @return RequestServerAvatarUpload\RequestServerAvatarUpload200Response|RequestServerAvatarUpload\RequestServerAvatarUpload400Response|RequestServerAvatarUpload\RequestServerAvatarUpload403Response|RequestServerAvatarUpload\RequestServerAvatarUploadDefaultResponse OK
     */
    public function requestServerAvatarUpload(RequestServerAvatarUploadRequest $request): RequestServerAvatarUpload200Response|RequestServerAvatarUpload400Response|RequestServerAvatarUpload403Response|RequestServerAvatarUploadDefaultResponse
    {
        $httpRequest = new Request(RequestServerAvatarUploadRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => RequestServerAvatarUpload200Response::fromResponse($httpResponse),
            400 => RequestServerAvatarUpload400Response::fromResponse($httpResponse),
            403 => RequestServerAvatarUpload403Response::fromResponse($httpResponse),
            default => RequestServerAvatarUploadDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Get a ProjectInvite by token.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-get-project-token-invite
     * @throws GuzzleException
     * @param GetProjectTokenInvite\GetProjectTokenInviteRequest $request An object representing the request for this operation
     * @return GetProjectTokenInvite\GetProjectTokenInvite200Response|GetProjectTokenInvite\GetProjectTokenInvite404Response|GetProjectTokenInvite\GetProjectTokenInviteDefaultResponse OK
     */
    public function getProjectTokenInvite(GetProjectTokenInviteRequest $request): GetProjectTokenInvite200Response|GetProjectTokenInvite404Response|GetProjectTokenInviteDefaultResponse
    {
        $httpRequest = new Request(GetProjectTokenInviteRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetProjectTokenInvite200Response::fromResponse($httpResponse),
            404 => GetProjectTokenInvite404Response::fromResponse($httpResponse),
            default => GetProjectTokenInviteDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Get the executing user's membership in a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-get-self-membership-for-project
     * @throws GuzzleException
     * @param GetSelfMembershipForProject\GetSelfMembershipForProjectRequest $request An object representing the request for this operation
     * @return GetSelfMembershipForProject\GetSelfMembershipForProject200Response|GetSelfMembershipForProject\GetSelfMembershipForProject404Response|GetSelfMembershipForProject\GetSelfMembershipForProjectDefaultResponse OK
     */
    public function getSelfMembershipForProject(GetSelfMembershipForProjectRequest $request): GetSelfMembershipForProject200Response|GetSelfMembershipForProject404Response|GetSelfMembershipForProjectDefaultResponse
    {
        $httpRequest = new Request(GetSelfMembershipForProjectRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetSelfMembershipForProject200Response::fromResponse($httpResponse),
            404 => GetSelfMembershipForProject404Response::fromResponse($httpResponse),
            default => GetSelfMembershipForProjectDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Get a Server.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-get-server
     * @throws GuzzleException
     * @param GetServer\GetServerRequest $request An object representing the request for this operation
     * @return GetServer\GetServer200Response|GetServer\GetServer403Response|GetServer\GetServer404Response|GetServer\GetServerDefaultResponse OK
     */
    public function getServer(GetServerRequest $request): GetServer200Response|GetServer403Response|GetServer404Response|GetServerDefaultResponse
    {
        $httpRequest = new Request(GetServerRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetServer200Response::fromResponse($httpResponse),
            403 => GetServer403Response::fromResponse($httpResponse),
            404 => GetServer404Response::fromResponse($httpResponse),
            default => GetServerDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Leave a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-leave-project
     * @throws GuzzleException
     * @param LeaveProject\LeaveProjectRequest $request An object representing the request for this operation
     * @return EmptyResponse|LeaveProject\LeaveProjectDefaultResponse
     */
    public function leaveProject(LeaveProjectRequest $request): EmptyResponse|LeaveProjectDefaultResponse
    {
        $httpRequest = new Request(LeaveProjectRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            default => LeaveProjectDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * List Invites belonging to a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-list-invites-for-project
     * @throws GuzzleException
     * @param ListInvitesForProject\ListInvitesForProjectRequest $request An object representing the request for this operation
     * @return ListInvitesForProject\ListInvitesForProject200Response|ListInvitesForProject\ListInvitesForProject404Response|ListInvitesForProject\ListInvitesForProjectDefaultResponse OK
     */
    public function listInvitesForProject(ListInvitesForProjectRequest $request): ListInvitesForProject200Response|ListInvitesForProject404Response|ListInvitesForProjectDefaultResponse
    {
        $httpRequest = new Request(ListInvitesForProjectRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListInvitesForProject200Response::fromResponse($httpResponse),
            404 => ListInvitesForProject404Response::fromResponse($httpResponse),
            default => ListInvitesForProjectDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * List Memberships belonging to a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-list-memberships-for-project
     * @throws GuzzleException
     * @param ListMembershipsForProject\ListMembershipsForProjectRequest $request An object representing the request for this operation
     * @return ListMembershipsForProject\ListMembershipsForProject200Response|ListMembershipsForProject\ListMembershipsForProject404Response|ListMembershipsForProject\ListMembershipsForProjectDefaultResponse OK
     */
    public function listMembershipsForProject(ListMembershipsForProjectRequest $request): ListMembershipsForProject200Response|ListMembershipsForProject404Response|ListMembershipsForProjectDefaultResponse
    {
        $httpRequest = new Request(ListMembershipsForProjectRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListMembershipsForProject200Response::fromResponse($httpResponse),
            404 => ListMembershipsForProject404Response::fromResponse($httpResponse),
            default => ListMembershipsForProjectDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * List ProjectInvites belonging to the executing user.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-list-project-invites
     * @throws GuzzleException
     * @param ListProjectInvites\ListProjectInvitesRequest $request An object representing the request for this operation
     * @return ListProjectInvites\ListProjectInvites200Response|ListProjectInvites\ListProjectInvites404Response|ListProjectInvites\ListProjectInvitesDefaultResponse OK
     */
    public function listProjectInvites(ListProjectInvitesRequest $request): ListProjectInvites200Response|ListProjectInvites404Response|ListProjectInvitesDefaultResponse
    {
        $httpRequest = new Request(ListProjectInvitesRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListProjectInvites200Response::fromResponse($httpResponse),
            404 => ListProjectInvites404Response::fromResponse($httpResponse),
            default => ListProjectInvitesDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * List ProjectMemberships belonging to the executing user.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-list-project-memberships
     * @throws GuzzleException
     * @param ListProjectMemberships\ListProjectMembershipsRequest $request An object representing the request for this operation
     * @return ListProjectMemberships\ListProjectMemberships200Response|ListProjectMemberships\ListProjectMemberships404Response|ListProjectMemberships\ListProjectMembershipsDefaultResponse OK
     */
    public function listProjectMemberships(ListProjectMembershipsRequest $request): ListProjectMemberships200Response|ListProjectMemberships404Response|ListProjectMembershipsDefaultResponse
    {
        $httpRequest = new Request(ListProjectMembershipsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListProjectMemberships200Response::fromResponse($httpResponse),
            404 => ListProjectMemberships404Response::fromResponse($httpResponse),
            default => ListProjectMembershipsDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * List Projects belonging to the executing user.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-list-projects
     * @throws GuzzleException
     * @param ListProjects\ListProjectsRequest $request An object representing the request for this operation
     * @return ListProjects\ListProjects200Response|ListProjects\ListProjects400Response|ListProjects\ListProjects403Response|ListProjects\ListProjectsDefaultResponse OK
     */
    public function listProjects(ListProjectsRequest $request): ListProjects200Response|ListProjects400Response|ListProjects403Response|ListProjectsDefaultResponse
    {
        $httpRequest = new Request(ListProjectsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListProjects200Response::fromResponse($httpResponse),
            400 => ListProjects400Response::fromResponse($httpResponse),
            403 => ListProjects403Response::fromResponse($httpResponse),
            default => ListProjectsDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * List Servers belonging to the executing user.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-list-servers
     * @throws GuzzleException
     * @param ListServers\ListServersRequest $request An object representing the request for this operation
     * @return ListServers\ListServers200Response|ListServers\ListServers403Response|ListServers\ListServersDefaultResponse OK
     */
    public function listServers(ListServersRequest $request): ListServers200Response|ListServers403Response|ListServersDefaultResponse
    {
        $httpRequest = new Request(ListServersRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListServers200Response::fromResponse($httpResponse),
            403 => ListServers403Response::fromResponse($httpResponse),
            default => ListServersDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Resend the mail for a ProjectInvite.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-resend-project-invite-mail
     * @throws GuzzleException
     * @param ResendProjectInviteMail\ResendProjectInviteMailRequest $request An object representing the request for this operation
     * @return EmptyResponse|ResendProjectInviteMail\ResendProjectInviteMail403Response|ResendProjectInviteMail\ResendProjectInviteMailDefaultResponse
     */
    public function resendProjectInviteMail(ResendProjectInviteMailRequest $request): EmptyResponse|ResendProjectInviteMail403Response|ResendProjectInviteMailDefaultResponse
    {
        $httpRequest = new Request(ResendProjectInviteMailRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            403 => ResendProjectInviteMail403Response::fromResponse($httpResponse),
            default => ResendProjectInviteMailDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Update a Project's description.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-update-project-description
     * @throws GuzzleException
     * @param UpdateProjectDescription\UpdateProjectDescriptionRequest $request An object representing the request for this operation
     * @return EmptyResponse|UpdateProjectDescription\UpdateProjectDescription400Response|UpdateProjectDescription\UpdateProjectDescription403Response|UpdateProjectDescription\UpdateProjectDescriptionDefaultResponse OK
     */
    public function updateProjectDescription(UpdateProjectDescriptionRequest $request): EmptyResponse|UpdateProjectDescription400Response|UpdateProjectDescription403Response|UpdateProjectDescriptionDefaultResponse
    {
        $httpRequest = new Request(UpdateProjectDescriptionRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new EmptyResponse($httpResponse),
            400 => UpdateProjectDescription400Response::fromResponse($httpResponse),
            403 => UpdateProjectDescription403Response::fromResponse($httpResponse),
            default => UpdateProjectDescriptionDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Update a Servers's description.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project/operation/project-update-server-description
     * @throws GuzzleException
     * @param UpdateServerDescription\UpdateServerDescriptionRequest $request An object representing the request for this operation
     * @return EmptyResponse|UpdateServerDescription\UpdateServerDescription400Response|UpdateServerDescription\UpdateServerDescription403Response|UpdateServerDescription\UpdateServerDescriptionDefaultResponse OK
     */
    public function updateServerDescription(UpdateServerDescriptionRequest $request): EmptyResponse|UpdateServerDescription400Response|UpdateServerDescription403Response|UpdateServerDescriptionDefaultResponse
    {
        $httpRequest = new Request(UpdateServerDescriptionRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new EmptyResponse($httpResponse),
            400 => UpdateServerDescription400Response::fromResponse($httpResponse),
            403 => UpdateServerDescription403Response::fromResponse($httpResponse),
            default => UpdateServerDescriptionDefaultResponse::fromResponse($httpResponse),
        };
    }
}
