<?php

namespace Mittwald\ApiClient\Generated\V2\Clients\Project;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use Mittwald\ApiClient\Client\EmptyResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\AcceptProjectInvite\AcceptProjectInvite400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\AcceptProjectInvite\AcceptProjectInvite403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\AcceptProjectInvite\AcceptProjectInvite412Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\AcceptProjectInvite\AcceptProjectInviteDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\AcceptProjectInvite\AcceptProjectInviteRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\CreateProject\CreateProject201Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\CreateProject\CreateProject400Response;
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
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeleteProject\DeleteProject412Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeleteProject\DeleteProject500Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeleteProject\DeleteProjectDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeleteProject\DeleteProjectRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeleteProjectAvatar\DeleteProjectAvatar400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeleteProjectAvatar\DeleteProjectAvatarDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeleteProjectAvatar\DeleteProjectAvatarRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeleteProjectInvite\DeleteProjectInviteDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeleteProjectInvite\DeleteProjectInviteRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeleteProjectMembership\DeleteProjectMembershipDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeleteProjectMembership\DeleteProjectMembershipRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeleteServerAvatar\DeleteServerAvatar400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeleteServerAvatar\DeleteServerAvatarDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\DeleteServerAvatar\DeleteServerAvatarRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetProject\GetProject200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\GetProject\GetProject404Response;
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
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListProjects\ListProjectsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListProjects\ListProjectsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListServers\ListServers200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListServers\ListServers403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListServers\ListServersDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ListServers\ListServersRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\RequestProjectAvatarUpload\RequestProjectAvatarUpload200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\RequestProjectAvatarUpload\RequestProjectAvatarUpload400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\RequestProjectAvatarUpload\RequestProjectAvatarUploadDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\RequestProjectAvatarUpload\RequestProjectAvatarUploadRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\RequestServerAvatarUpload\RequestServerAvatarUpload200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\RequestServerAvatarUpload\RequestServerAvatarUpload400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\RequestServerAvatarUpload\RequestServerAvatarUploadDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\RequestServerAvatarUpload\RequestServerAvatarUploadRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ResendProjectInviteMail\ResendProjectInviteMail403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ResendProjectInviteMail\ResendProjectInviteMailDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ResendProjectInviteMail\ResendProjectInviteMailRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\UpdateProjectDescription\UpdateProjectDescription400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\UpdateProjectDescription\UpdateProjectDescription404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\UpdateProjectDescription\UpdateProjectDescriptionDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\UpdateProjectDescription\UpdateProjectDescriptionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\UpdateProjectMembership\UpdateProjectMembershipDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Project\UpdateProjectMembership\UpdateProjectMembershipRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Project\UpdateServerDescription\UpdateServerDescription400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Project\UpdateServerDescription\UpdateServerDescriptionRequest;

class ProjectClient
{
    private Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

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

    public function createProject(CreateProjectRequest $request): CreateProject201Response|CreateProject400Response|CreateProject412Response|CreateProjectDefaultResponse
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
            412 => CreateProject412Response::fromResponse($httpResponse),
            default => CreateProjectDefaultResponse::fromResponse($httpResponse),
        };
    }

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

    public function deleteProjectAvatar(DeleteProjectAvatarRequest $request): EmptyResponse|DeleteProjectAvatar400Response|DeleteProjectAvatarDefaultResponse
    {
        $httpRequest = new Request(DeleteProjectAvatarRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => DeleteProjectAvatar400Response::fromResponse($httpResponse),
            default => DeleteProjectAvatarDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function requestProjectAvatarUpload(RequestProjectAvatarUploadRequest $request): RequestProjectAvatarUpload200Response|RequestProjectAvatarUpload400Response|RequestProjectAvatarUploadDefaultResponse
    {
        $httpRequest = new Request(RequestProjectAvatarUploadRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => RequestProjectAvatarUpload200Response::fromResponse($httpResponse),
            400 => RequestProjectAvatarUpload400Response::fromResponse($httpResponse),
            default => RequestProjectAvatarUploadDefaultResponse::fromResponse($httpResponse),
        };
    }

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

    public function deleteProject(DeleteProjectRequest $request): EmptyResponse|DeleteProject200Response|DeleteProject400Response|DeleteProject412Response|DeleteProject500Response|DeleteProjectDefaultResponse
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
            412 => DeleteProject412Response::fromResponse($httpResponse),
            500 => DeleteProject500Response::fromResponse($httpResponse),
            default => DeleteProjectDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deleteServerAvatar(DeleteServerAvatarRequest $request): EmptyResponse|DeleteServerAvatar400Response|DeleteServerAvatarDefaultResponse
    {
        $httpRequest = new Request(DeleteServerAvatarRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => DeleteServerAvatar400Response::fromResponse($httpResponse),
            default => DeleteServerAvatarDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function requestServerAvatarUpload(RequestServerAvatarUploadRequest $request): RequestServerAvatarUpload200Response|RequestServerAvatarUpload400Response|RequestServerAvatarUploadDefaultResponse
    {
        $httpRequest = new Request(RequestServerAvatarUploadRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => RequestServerAvatarUpload200Response::fromResponse($httpResponse),
            400 => RequestServerAvatarUpload400Response::fromResponse($httpResponse),
            default => RequestServerAvatarUploadDefaultResponse::fromResponse($httpResponse),
        };
    }

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

    public function getProject(GetProjectRequest $request): GetProject200Response|GetProject404Response|GetProjectDefaultResponse
    {
        $httpRequest = new Request(GetProjectRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetProject200Response::fromResponse($httpResponse),
            404 => GetProject404Response::fromResponse($httpResponse),
            default => GetProjectDefaultResponse::fromResponse($httpResponse),
        };
    }

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

    public function getServer(GetServerRequest $request): GetServer200Response|GetServer404Response|GetServerDefaultResponse
    {
        $httpRequest = new Request(GetServerRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetServer200Response::fromResponse($httpResponse),
            404 => GetServer404Response::fromResponse($httpResponse),
            default => GetServerDefaultResponse::fromResponse($httpResponse),
        };
    }

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

    public function listProjects(ListProjectsRequest $request): ListProjects200Response|ListProjects400Response|ListProjectsDefaultResponse
    {
        $httpRequest = new Request(ListProjectsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListProjects200Response::fromResponse($httpResponse),
            400 => ListProjects400Response::fromResponse($httpResponse),
            default => ListProjectsDefaultResponse::fromResponse($httpResponse),
        };
    }

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

    public function updateProjectDescription(UpdateProjectDescriptionRequest $request): EmptyResponse|UpdateProjectDescription400Response|UpdateProjectDescription404Response|UpdateProjectDescriptionDefaultResponse
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
            404 => UpdateProjectDescription404Response::fromResponse($httpResponse),
            default => UpdateProjectDescriptionDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function updateServerDescription(UpdateServerDescriptionRequest $request): EmptyResponse|UpdateServerDescription400Response
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
        };
    }
}
