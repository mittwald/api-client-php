<?php

namespace Mittwald\ApiClient\Generated\V2\Clients\Project;

use GuzzleHttp\Psr7\Request;

class ProjectClient
{
    private \GuzzleHttp\Client $client;

    public function __construct(\GuzzleHttp\Client $client)
    {
        $this->client = $client;
    }

    public function acceptProjectInvite(AcceptProjectInvite\AcceptProjectInviteRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|AcceptProjectInvite\AcceptProjectInvite400Response|AcceptProjectInvite\AcceptProjectInvite403Response|AcceptProjectInvite\AcceptProjectInvite412Response|AcceptProjectInvite\AcceptProjectInviteDefaultResponse
    {
        $httpRequest = new Request(AcceptProjectInvite\AcceptProjectInviteRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => AcceptProjectInvite\AcceptProjectInvite400Response::fromResponse($httpResponse),
            403 => AcceptProjectInvite\AcceptProjectInvite403Response::fromResponse($httpResponse),
            412 => AcceptProjectInvite\AcceptProjectInvite412Response::fromResponse($httpResponse),
            default => AcceptProjectInvite\AcceptProjectInviteDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function createProjectInvite(CreateProjectInvite\CreateProjectInviteRequest $request) : CreateProjectInvite\CreateProjectInvite201Response|CreateProjectInvite\CreateProjectInvite400Response|CreateProjectInvite\CreateProjectInvite409Response|CreateProjectInvite\CreateProjectInviteDefaultResponse
    {
        $httpRequest = new Request(CreateProjectInvite\CreateProjectInviteRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => CreateProjectInvite\CreateProjectInvite201Response::fromResponse($httpResponse),
            400 => CreateProjectInvite\CreateProjectInvite400Response::fromResponse($httpResponse),
            409 => CreateProjectInvite\CreateProjectInvite409Response::fromResponse($httpResponse),
            default => CreateProjectInvite\CreateProjectInviteDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function createProject(CreateProject\CreateProjectRequest $request) : CreateProject\CreateProject201Response|CreateProject\CreateProject400Response|CreateProject\CreateProject412Response|CreateProject\CreateProjectDefaultResponse
    {
        $httpRequest = new Request(CreateProject\CreateProjectRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => CreateProject\CreateProject201Response::fromResponse($httpResponse),
            400 => CreateProject\CreateProject400Response::fromResponse($httpResponse),
            412 => CreateProject\CreateProject412Response::fromResponse($httpResponse),
            default => CreateProject\CreateProjectDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function declineProjectInvite(DeclineProjectInvite\DeclineProjectInviteRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|DeclineProjectInvite\DeclineProjectInviteDefaultResponse
    {
        $httpRequest = new Request(DeclineProjectInvite\DeclineProjectInviteRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            default => DeclineProjectInvite\DeclineProjectInviteDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deleteProjectAvatar(DeleteProjectAvatar\DeleteProjectAvatarRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|DeleteProjectAvatar\DeleteProjectAvatar400Response|DeleteProjectAvatar\DeleteProjectAvatarDefaultResponse
    {
        $httpRequest = new Request(DeleteProjectAvatar\DeleteProjectAvatarRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => DeleteProjectAvatar\DeleteProjectAvatar400Response::fromResponse($httpResponse),
            default => DeleteProjectAvatar\DeleteProjectAvatarDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function requestProjectAvatarUpload(RequestProjectAvatarUpload\RequestProjectAvatarUploadRequest $request) : RequestProjectAvatarUpload\RequestProjectAvatarUpload200Response|RequestProjectAvatarUpload\RequestProjectAvatarUpload400Response|RequestProjectAvatarUpload\RequestProjectAvatarUploadDefaultResponse
    {
        $httpRequest = new Request(RequestProjectAvatarUpload\RequestProjectAvatarUploadRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => RequestProjectAvatarUpload\RequestProjectAvatarUpload200Response::fromResponse($httpResponse),
            400 => RequestProjectAvatarUpload\RequestProjectAvatarUpload400Response::fromResponse($httpResponse),
            default => RequestProjectAvatarUpload\RequestProjectAvatarUploadDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deleteProjectInvite(DeleteProjectInvite\DeleteProjectInviteRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|DeleteProjectInvite\DeleteProjectInviteDefaultResponse
    {
        $httpRequest = new Request(DeleteProjectInvite\DeleteProjectInviteRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            default => DeleteProjectInvite\DeleteProjectInviteDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getProjectInvite(GetProjectInvite\GetProjectInviteRequest $request) : GetProjectInvite\GetProjectInvite200Response|GetProjectInvite\GetProjectInvite404Response|GetProjectInvite\GetProjectInviteDefaultResponse
    {
        $httpRequest = new Request(GetProjectInvite\GetProjectInviteRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetProjectInvite\GetProjectInvite200Response::fromResponse($httpResponse),
            404 => GetProjectInvite\GetProjectInvite404Response::fromResponse($httpResponse),
            default => GetProjectInvite\GetProjectInviteDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deleteProjectMembership(DeleteProjectMembership\DeleteProjectMembershipRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|DeleteProjectMembership\DeleteProjectMembershipDefaultResponse
    {
        $httpRequest = new Request(DeleteProjectMembership\DeleteProjectMembershipRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            default => DeleteProjectMembership\DeleteProjectMembershipDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getProjectMembership(GetProjectMembership\GetProjectMembershipRequest $request) : GetProjectMembership\GetProjectMembership200Response|GetProjectMembership\GetProjectMembership404Response|GetProjectMembership\GetProjectMembershipDefaultResponse
    {
        $httpRequest = new Request(GetProjectMembership\GetProjectMembershipRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetProjectMembership\GetProjectMembership200Response::fromResponse($httpResponse),
            404 => GetProjectMembership\GetProjectMembership404Response::fromResponse($httpResponse),
            default => GetProjectMembership\GetProjectMembershipDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function updateProjectMembership(UpdateProjectMembership\UpdateProjectMembershipRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|UpdateProjectMembership\UpdateProjectMembershipDefaultResponse
    {
        $httpRequest = new Request(UpdateProjectMembership\UpdateProjectMembershipRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            default => UpdateProjectMembership\UpdateProjectMembershipDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deleteProject(DeleteProject\DeleteProjectRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|DeleteProject\DeleteProject200Response|DeleteProject\DeleteProject400Response|DeleteProject\DeleteProject412Response|DeleteProject\DeleteProject500Response|DeleteProject\DeleteProjectDefaultResponse
    {
        $httpRequest = new Request(DeleteProject\DeleteProjectRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => DeleteProject\DeleteProject200Response::fromResponse($httpResponse),
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => DeleteProject\DeleteProject400Response::fromResponse($httpResponse),
            412 => DeleteProject\DeleteProject412Response::fromResponse($httpResponse),
            500 => DeleteProject\DeleteProject500Response::fromResponse($httpResponse),
            default => DeleteProject\DeleteProjectDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deleteServerAvatar(DeleteServerAvatar\DeleteServerAvatarRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|DeleteServerAvatar\DeleteServerAvatar400Response|DeleteServerAvatar\DeleteServerAvatarDefaultResponse
    {
        $httpRequest = new Request(DeleteServerAvatar\DeleteServerAvatarRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => DeleteServerAvatar\DeleteServerAvatar400Response::fromResponse($httpResponse),
            default => DeleteServerAvatar\DeleteServerAvatarDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function requestServerAvatarUpload(RequestServerAvatarUpload\RequestServerAvatarUploadRequest $request) : RequestServerAvatarUpload\RequestServerAvatarUpload200Response|RequestServerAvatarUpload\RequestServerAvatarUpload400Response|RequestServerAvatarUpload\RequestServerAvatarUploadDefaultResponse
    {
        $httpRequest = new Request(RequestServerAvatarUpload\RequestServerAvatarUploadRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => RequestServerAvatarUpload\RequestServerAvatarUpload200Response::fromResponse($httpResponse),
            400 => RequestServerAvatarUpload\RequestServerAvatarUpload400Response::fromResponse($httpResponse),
            default => RequestServerAvatarUpload\RequestServerAvatarUploadDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getProjectTokenInvite(GetProjectTokenInvite\GetProjectTokenInviteRequest $request) : GetProjectTokenInvite\GetProjectTokenInvite200Response|GetProjectTokenInvite\GetProjectTokenInvite404Response|GetProjectTokenInvite\GetProjectTokenInviteDefaultResponse
    {
        $httpRequest = new Request(GetProjectTokenInvite\GetProjectTokenInviteRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetProjectTokenInvite\GetProjectTokenInvite200Response::fromResponse($httpResponse),
            404 => GetProjectTokenInvite\GetProjectTokenInvite404Response::fromResponse($httpResponse),
            default => GetProjectTokenInvite\GetProjectTokenInviteDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getProject(GetProject\GetProjectRequest $request) : GetProject\GetProject200Response|GetProject\GetProject404Response|GetProject\GetProjectDefaultResponse
    {
        $httpRequest = new Request(GetProject\GetProjectRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetProject\GetProject200Response::fromResponse($httpResponse),
            404 => GetProject\GetProject404Response::fromResponse($httpResponse),
            default => GetProject\GetProjectDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getSelfMembershipForProject(GetSelfMembershipForProject\GetSelfMembershipForProjectRequest $request) : GetSelfMembershipForProject\GetSelfMembershipForProject200Response|GetSelfMembershipForProject\GetSelfMembershipForProject404Response|GetSelfMembershipForProject\GetSelfMembershipForProjectDefaultResponse
    {
        $httpRequest = new Request(GetSelfMembershipForProject\GetSelfMembershipForProjectRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetSelfMembershipForProject\GetSelfMembershipForProject200Response::fromResponse($httpResponse),
            404 => GetSelfMembershipForProject\GetSelfMembershipForProject404Response::fromResponse($httpResponse),
            default => GetSelfMembershipForProject\GetSelfMembershipForProjectDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getServer(GetServer\GetServerRequest $request) : GetServer\GetServer200Response|GetServer\GetServer404Response|GetServer\GetServerDefaultResponse
    {
        $httpRequest = new Request(GetServer\GetServerRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetServer\GetServer200Response::fromResponse($httpResponse),
            404 => GetServer\GetServer404Response::fromResponse($httpResponse),
            default => GetServer\GetServerDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function leaveProject(LeaveProject\LeaveProjectRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|LeaveProject\LeaveProjectDefaultResponse
    {
        $httpRequest = new Request(LeaveProject\LeaveProjectRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            default => LeaveProject\LeaveProjectDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listInvitesForProject(ListInvitesForProject\ListInvitesForProjectRequest $request) : ListInvitesForProject\ListInvitesForProject200Response|ListInvitesForProject\ListInvitesForProject404Response|ListInvitesForProject\ListInvitesForProjectDefaultResponse
    {
        $httpRequest = new Request(ListInvitesForProject\ListInvitesForProjectRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListInvitesForProject\ListInvitesForProject200Response::fromResponse($httpResponse),
            404 => ListInvitesForProject\ListInvitesForProject404Response::fromResponse($httpResponse),
            default => ListInvitesForProject\ListInvitesForProjectDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listMembershipsForProject(ListMembershipsForProject\ListMembershipsForProjectRequest $request) : ListMembershipsForProject\ListMembershipsForProject200Response|ListMembershipsForProject\ListMembershipsForProject404Response|ListMembershipsForProject\ListMembershipsForProjectDefaultResponse
    {
        $httpRequest = new Request(ListMembershipsForProject\ListMembershipsForProjectRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListMembershipsForProject\ListMembershipsForProject200Response::fromResponse($httpResponse),
            404 => ListMembershipsForProject\ListMembershipsForProject404Response::fromResponse($httpResponse),
            default => ListMembershipsForProject\ListMembershipsForProjectDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listProjectInvites(ListProjectInvites\ListProjectInvitesRequest $request) : ListProjectInvites\ListProjectInvites200Response|ListProjectInvites\ListProjectInvites404Response|ListProjectInvites\ListProjectInvitesDefaultResponse
    {
        $httpRequest = new Request(ListProjectInvites\ListProjectInvitesRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListProjectInvites\ListProjectInvites200Response::fromResponse($httpResponse),
            404 => ListProjectInvites\ListProjectInvites404Response::fromResponse($httpResponse),
            default => ListProjectInvites\ListProjectInvitesDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listProjectMemberships(ListProjectMemberships\ListProjectMembershipsRequest $request) : ListProjectMemberships\ListProjectMemberships200Response|ListProjectMemberships\ListProjectMemberships404Response|ListProjectMemberships\ListProjectMembershipsDefaultResponse
    {
        $httpRequest = new Request(ListProjectMemberships\ListProjectMembershipsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListProjectMemberships\ListProjectMemberships200Response::fromResponse($httpResponse),
            404 => ListProjectMemberships\ListProjectMemberships404Response::fromResponse($httpResponse),
            default => ListProjectMemberships\ListProjectMembershipsDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listProjects(ListProjects\ListProjectsRequest $request) : ListProjects\ListProjects200Response|ListProjects\ListProjects400Response|ListProjects\ListProjectsDefaultResponse
    {
        $httpRequest = new Request(ListProjects\ListProjectsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListProjects\ListProjects200Response::fromResponse($httpResponse),
            400 => ListProjects\ListProjects400Response::fromResponse($httpResponse),
            default => ListProjects\ListProjectsDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listServers(ListServers\ListServersRequest $request) : ListServers\ListServers200Response|ListServers\ListServers403Response|ListServers\ListServersDefaultResponse
    {
        $httpRequest = new Request(ListServers\ListServersRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListServers\ListServers200Response::fromResponse($httpResponse),
            403 => ListServers\ListServers403Response::fromResponse($httpResponse),
            default => ListServers\ListServersDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function resendProjectInviteMail(ResendProjectInviteMail\ResendProjectInviteMailRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|ResendProjectInviteMail\ResendProjectInviteMail403Response|ResendProjectInviteMail\ResendProjectInviteMailDefaultResponse
    {
        $httpRequest = new Request(ResendProjectInviteMail\ResendProjectInviteMailRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            403 => ResendProjectInviteMail\ResendProjectInviteMail403Response::fromResponse($httpResponse),
            default => ResendProjectInviteMail\ResendProjectInviteMailDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function updateProjectDescription(UpdateProjectDescription\UpdateProjectDescriptionRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|UpdateProjectDescription\UpdateProjectDescription400Response|UpdateProjectDescription\UpdateProjectDescription404Response|UpdateProjectDescription\UpdateProjectDescriptionDefaultResponse
    {
        $httpRequest = new Request(UpdateProjectDescription\UpdateProjectDescriptionRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => UpdateProjectDescription\UpdateProjectDescription400Response::fromResponse($httpResponse),
            404 => UpdateProjectDescription\UpdateProjectDescription404Response::fromResponse($httpResponse),
            default => UpdateProjectDescription\UpdateProjectDescriptionDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function updateServerDescription(UpdateServerDescription\UpdateServerDescriptionRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|UpdateServerDescription\UpdateServerDescription400Response
    {
        $httpRequest = new Request(UpdateServerDescription\UpdateServerDescriptionRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => UpdateServerDescription\UpdateServerDescription400Response::fromResponse($httpResponse),
        };
    }
}

