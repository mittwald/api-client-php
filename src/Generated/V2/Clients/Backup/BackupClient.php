<?php

namespace Mittwald\ApiClient\Generated\V2\Clients\Backup;

use GuzzleHttp\Psr7\Request;

class BackupClient
{
    private \GuzzleHttp\Client $client;

    public function __construct(\GuzzleHttp\Client $client)
    {
        $this->client = $client;
    }

    public function createProjectBackupExport(CreateProjectBackupExport\CreateProjectBackupExportRequest $request): \Mittwald\ApiClient\Client\EmptyResponse|CreateProjectBackupExport\CreateProjectBackupExport400Response|CreateProjectBackupExport\CreateProjectBackupExport403Response|CreateProjectBackupExport\CreateProjectBackupExport404Response|CreateProjectBackupExport\CreateProjectBackupExportDefaultResponse
    {
        $httpRequest = new Request(CreateProjectBackupExport\CreateProjectBackupExportRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => CreateProjectBackupExport\CreateProjectBackupExport400Response::fromResponse($httpResponse),
            403 => CreateProjectBackupExport\CreateProjectBackupExport403Response::fromResponse($httpResponse),
            404 => CreateProjectBackupExport\CreateProjectBackupExport404Response::fromResponse($httpResponse),
            default => CreateProjectBackupExport\CreateProjectBackupExportDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deleteProjectBackupExport(DeleteProjectBackupExport\DeleteProjectBackupExportRequest $request): \Mittwald\ApiClient\Client\EmptyResponse|DeleteProjectBackupExport\DeleteProjectBackupExport403Response|DeleteProjectBackupExport\DeleteProjectBackupExport404Response|DeleteProjectBackupExport\DeleteProjectBackupExportDefaultResponse
    {
        $httpRequest = new Request(DeleteProjectBackupExport\DeleteProjectBackupExportRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            403 => DeleteProjectBackupExport\DeleteProjectBackupExport403Response::fromResponse($httpResponse),
            404 => DeleteProjectBackupExport\DeleteProjectBackupExport404Response::fromResponse($httpResponse),
            default => DeleteProjectBackupExport\DeleteProjectBackupExportDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function createProjectBackupSchedule(CreateProjectBackupSchedule\CreateProjectBackupScheduleRequest $request): CreateProjectBackupSchedule\CreateProjectBackupSchedule201Response|CreateProjectBackupSchedule\CreateProjectBackupSchedule400Response|CreateProjectBackupSchedule\CreateProjectBackupSchedule404Response|CreateProjectBackupSchedule\CreateProjectBackupScheduleDefaultResponse
    {
        $httpRequest = new Request(CreateProjectBackupSchedule\CreateProjectBackupScheduleRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => CreateProjectBackupSchedule\CreateProjectBackupSchedule201Response::fromResponse($httpResponse),
            400 => CreateProjectBackupSchedule\CreateProjectBackupSchedule400Response::fromResponse($httpResponse),
            404 => CreateProjectBackupSchedule\CreateProjectBackupSchedule404Response::fromResponse($httpResponse),
            default => CreateProjectBackupSchedule\CreateProjectBackupScheduleDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listProjectBackupSchedules(ListProjectBackupSchedules\ListProjectBackupSchedulesRequest $request): ListProjectBackupSchedules\ListProjectBackupSchedules200Response|ListProjectBackupSchedules\ListProjectBackupSchedulesDefaultResponse
    {
        $httpRequest = new Request(ListProjectBackupSchedules\ListProjectBackupSchedulesRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListProjectBackupSchedules\ListProjectBackupSchedules200Response::fromResponse($httpResponse),
            default => ListProjectBackupSchedules\ListProjectBackupSchedulesDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function createProjectBackup(CreateProjectBackup\CreateProjectBackupRequest $request): CreateProjectBackup\CreateProjectBackup201Response|CreateProjectBackup\CreateProjectBackup400Response|CreateProjectBackup\CreateProjectBackup404Response|CreateProjectBackup\CreateProjectBackupDefaultResponse
    {
        $httpRequest = new Request(CreateProjectBackup\CreateProjectBackupRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => CreateProjectBackup\CreateProjectBackup201Response::fromResponse($httpResponse),
            400 => CreateProjectBackup\CreateProjectBackup400Response::fromResponse($httpResponse),
            404 => CreateProjectBackup\CreateProjectBackup404Response::fromResponse($httpResponse),
            default => CreateProjectBackup\CreateProjectBackupDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listProjectBackups(ListProjectBackups\ListProjectBackupsRequest $request): ListProjectBackups\ListProjectBackups200Response|ListProjectBackups\ListProjectBackupsDefaultResponse
    {
        $httpRequest = new Request(ListProjectBackups\ListProjectBackupsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListProjectBackups\ListProjectBackups200Response::fromResponse($httpResponse),
            default => ListProjectBackups\ListProjectBackupsDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deleteProjectBackupSchedule(DeleteProjectBackupSchedule\DeleteProjectBackupScheduleRequest $request): \Mittwald\ApiClient\Client\EmptyResponse|DeleteProjectBackupSchedule\DeleteProjectBackupSchedule403Response|DeleteProjectBackupSchedule\DeleteProjectBackupSchedule404Response|DeleteProjectBackupSchedule\DeleteProjectBackupScheduleDefaultResponse
    {
        $httpRequest = new Request(DeleteProjectBackupSchedule\DeleteProjectBackupScheduleRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            403 => DeleteProjectBackupSchedule\DeleteProjectBackupSchedule403Response::fromResponse($httpResponse),
            404 => DeleteProjectBackupSchedule\DeleteProjectBackupSchedule404Response::fromResponse($httpResponse),
            default => DeleteProjectBackupSchedule\DeleteProjectBackupScheduleDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getProjectBackupSchedule(GetProjectBackupSchedule\GetProjectBackupScheduleRequest $request): GetProjectBackupSchedule\GetProjectBackupSchedule200Response|GetProjectBackupSchedule\GetProjectBackupSchedule403Response|GetProjectBackupSchedule\GetProjectBackupSchedule404Response|GetProjectBackupSchedule\GetProjectBackupScheduleDefaultResponse
    {
        $httpRequest = new Request(GetProjectBackupSchedule\GetProjectBackupScheduleRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetProjectBackupSchedule\GetProjectBackupSchedule200Response::fromResponse($httpResponse),
            403 => GetProjectBackupSchedule\GetProjectBackupSchedule403Response::fromResponse($httpResponse),
            404 => GetProjectBackupSchedule\GetProjectBackupSchedule404Response::fromResponse($httpResponse),
            default => GetProjectBackupSchedule\GetProjectBackupScheduleDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function updateProjectBackupSchedule(UpdateProjectBackupSchedule\UpdateProjectBackupScheduleRequest $request): \Mittwald\ApiClient\Client\EmptyResponse|UpdateProjectBackupSchedule\UpdateProjectBackupSchedule400Response|UpdateProjectBackupSchedule\UpdateProjectBackupSchedule404Response|UpdateProjectBackupSchedule\UpdateProjectBackupSchedule412Response|UpdateProjectBackupSchedule\UpdateProjectBackupScheduleDefaultResponse
    {
        $httpRequest = new Request(UpdateProjectBackupSchedule\UpdateProjectBackupScheduleRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => UpdateProjectBackupSchedule\UpdateProjectBackupSchedule400Response::fromResponse($httpResponse),
            404 => UpdateProjectBackupSchedule\UpdateProjectBackupSchedule404Response::fromResponse($httpResponse),
            412 => UpdateProjectBackupSchedule\UpdateProjectBackupSchedule412Response::fromResponse($httpResponse),
            default => UpdateProjectBackupSchedule\UpdateProjectBackupScheduleDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deleteProjectBackup(DeleteProjectBackup\DeleteProjectBackupRequest $request): \Mittwald\ApiClient\Client\EmptyResponse|DeleteProjectBackup\DeleteProjectBackup403Response|DeleteProjectBackup\DeleteProjectBackup404Response|DeleteProjectBackup\DeleteProjectBackupDefaultResponse
    {
        $httpRequest = new Request(DeleteProjectBackup\DeleteProjectBackupRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            403 => DeleteProjectBackup\DeleteProjectBackup403Response::fromResponse($httpResponse),
            404 => DeleteProjectBackup\DeleteProjectBackup404Response::fromResponse($httpResponse),
            default => DeleteProjectBackup\DeleteProjectBackupDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getProjectBackup(GetProjectBackup\GetProjectBackupRequest $request): GetProjectBackup\GetProjectBackup200Response|GetProjectBackup\GetProjectBackup403Response|GetProjectBackup\GetProjectBackup404Response|GetProjectBackup\GetProjectBackupDefaultResponse
    {
        $httpRequest = new Request(GetProjectBackup\GetProjectBackupRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetProjectBackup\GetProjectBackup200Response::fromResponse($httpResponse),
            403 => GetProjectBackup\GetProjectBackup403Response::fromResponse($httpResponse),
            404 => GetProjectBackup\GetProjectBackup404Response::fromResponse($httpResponse),
            default => GetProjectBackup\GetProjectBackupDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function updateProjectBackupDescription(UpdateProjectBackupDescription\UpdateProjectBackupDescriptionRequest $request): \Mittwald\ApiClient\Client\EmptyResponse|UpdateProjectBackupDescription\UpdateProjectBackupDescription400Response|UpdateProjectBackupDescription\UpdateProjectBackupDescription403Response|UpdateProjectBackupDescription\UpdateProjectBackupDescription404Response|UpdateProjectBackupDescription\UpdateProjectBackupDescriptionDefaultResponse
    {
        $httpRequest = new Request(UpdateProjectBackupDescription\UpdateProjectBackupDescriptionRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => UpdateProjectBackupDescription\UpdateProjectBackupDescription400Response::fromResponse($httpResponse),
            403 => UpdateProjectBackupDescription\UpdateProjectBackupDescription403Response::fromResponse($httpResponse),
            404 => UpdateProjectBackupDescription\UpdateProjectBackupDescription404Response::fromResponse($httpResponse),
            default => UpdateProjectBackupDescription\UpdateProjectBackupDescriptionDefaultResponse::fromResponse($httpResponse),
        };
    }
}
