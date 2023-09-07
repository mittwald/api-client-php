<?php

namespace Mittwald\ApiClient\Generated\V2\Clients\Backup;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use Mittwald\ApiClient\Client\EmptyResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\CreateProjectBackup\CreateProjectBackup201Response;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\CreateProjectBackup\CreateProjectBackup400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\CreateProjectBackup\CreateProjectBackup404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\CreateProjectBackup\CreateProjectBackupDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\CreateProjectBackup\CreateProjectBackupRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\CreateProjectBackupExport\CreateProjectBackupExport400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\CreateProjectBackupExport\CreateProjectBackupExport403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\CreateProjectBackupExport\CreateProjectBackupExport404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\CreateProjectBackupExport\CreateProjectBackupExportDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\CreateProjectBackupExport\CreateProjectBackupExportRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\CreateProjectBackupSchedule\CreateProjectBackupSchedule201Response;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\CreateProjectBackupSchedule\CreateProjectBackupSchedule400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\CreateProjectBackupSchedule\CreateProjectBackupSchedule404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\CreateProjectBackupSchedule\CreateProjectBackupScheduleDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\CreateProjectBackupSchedule\CreateProjectBackupScheduleRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\DeleteProjectBackup\DeleteProjectBackup403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\DeleteProjectBackup\DeleteProjectBackup404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\DeleteProjectBackup\DeleteProjectBackupDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\DeleteProjectBackup\DeleteProjectBackupRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\DeleteProjectBackupExport\DeleteProjectBackupExport403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\DeleteProjectBackupExport\DeleteProjectBackupExport404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\DeleteProjectBackupExport\DeleteProjectBackupExportDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\DeleteProjectBackupExport\DeleteProjectBackupExportRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\DeleteProjectBackupSchedule\DeleteProjectBackupSchedule403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\DeleteProjectBackupSchedule\DeleteProjectBackupSchedule404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\DeleteProjectBackupSchedule\DeleteProjectBackupScheduleDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\DeleteProjectBackupSchedule\DeleteProjectBackupScheduleRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\GetProjectBackup\GetProjectBackup200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\GetProjectBackup\GetProjectBackup403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\GetProjectBackup\GetProjectBackup404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\GetProjectBackup\GetProjectBackupDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\GetProjectBackup\GetProjectBackupRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\GetProjectBackupSchedule\GetProjectBackupSchedule200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\GetProjectBackupSchedule\GetProjectBackupSchedule403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\GetProjectBackupSchedule\GetProjectBackupSchedule404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\GetProjectBackupSchedule\GetProjectBackupScheduleDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\GetProjectBackupSchedule\GetProjectBackupScheduleRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\ListProjectBackups\ListProjectBackups200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\ListProjectBackups\ListProjectBackupsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\ListProjectBackups\ListProjectBackupsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\ListProjectBackupSchedules\ListProjectBackupSchedules200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\ListProjectBackupSchedules\ListProjectBackupSchedulesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\ListProjectBackupSchedules\ListProjectBackupSchedulesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\UpdateProjectBackupDescription\UpdateProjectBackupDescription400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\UpdateProjectBackupDescription\UpdateProjectBackupDescription403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\UpdateProjectBackupDescription\UpdateProjectBackupDescription404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\UpdateProjectBackupDescription\UpdateProjectBackupDescriptionDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\UpdateProjectBackupDescription\UpdateProjectBackupDescriptionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\UpdateProjectBackupSchedule\UpdateProjectBackupSchedule400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\UpdateProjectBackupSchedule\UpdateProjectBackupSchedule404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\UpdateProjectBackupSchedule\UpdateProjectBackupSchedule412Response;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\UpdateProjectBackupSchedule\UpdateProjectBackupScheduleDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\UpdateProjectBackupSchedule\UpdateProjectBackupScheduleRequest;

/**
 * Client for Backup API
 *
 * The backup API allows you to manage your project backups.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class BackupClient
{
    private Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Export a ProjectBackup for download.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Backup/operation/backup-create-project-backup-export
     * @throws GuzzleException
     * @param CreateProjectBackupExport\CreateProjectBackupExportRequest $request An object representing the request for this operation
     * @return EmptyResponse|CreateProjectBackupExport\CreateProjectBackupExport400Response|CreateProjectBackupExport\CreateProjectBackupExport403Response|CreateProjectBackupExport\CreateProjectBackupExport404Response|CreateProjectBackupExport\CreateProjectBackupExportDefaultResponse NoContent
     */
    public function createProjectBackupExport(CreateProjectBackupExportRequest $request): EmptyResponse|CreateProjectBackupExport400Response|CreateProjectBackupExport403Response|CreateProjectBackupExport404Response|CreateProjectBackupExportDefaultResponse
    {
        $httpRequest = new Request(CreateProjectBackupExportRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => CreateProjectBackupExport400Response::fromResponse($httpResponse),
            403 => CreateProjectBackupExport403Response::fromResponse($httpResponse),
            404 => CreateProjectBackupExport404Response::fromResponse($httpResponse),
            default => CreateProjectBackupExportDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Delete a ProjectBackupExport.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Backup/operation/backup-delete-project-backup-export
     * @throws GuzzleException
     * @param DeleteProjectBackupExport\DeleteProjectBackupExportRequest $request An object representing the request for this operation
     * @return EmptyResponse|DeleteProjectBackupExport\DeleteProjectBackupExport403Response|DeleteProjectBackupExport\DeleteProjectBackupExport404Response|DeleteProjectBackupExport\DeleteProjectBackupExportDefaultResponse NoContent
     */
    public function deleteProjectBackupExport(DeleteProjectBackupExportRequest $request): EmptyResponse|DeleteProjectBackupExport403Response|DeleteProjectBackupExport404Response|DeleteProjectBackupExportDefaultResponse
    {
        $httpRequest = new Request(DeleteProjectBackupExportRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            403 => DeleteProjectBackupExport403Response::fromResponse($httpResponse),
            404 => DeleteProjectBackupExport404Response::fromResponse($httpResponse),
            default => DeleteProjectBackupExportDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Create a BackupSchedule for a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Backup/operation/backup-create-project-backup-schedule
     * @throws GuzzleException
     * @param CreateProjectBackupSchedule\CreateProjectBackupScheduleRequest $request An object representing the request for this operation
     * @return CreateProjectBackupSchedule\CreateProjectBackupSchedule201Response|CreateProjectBackupSchedule\CreateProjectBackupSchedule400Response|CreateProjectBackupSchedule\CreateProjectBackupSchedule404Response|CreateProjectBackupSchedule\CreateProjectBackupScheduleDefaultResponse Created
     */
    public function createProjectBackupSchedule(CreateProjectBackupScheduleRequest $request): CreateProjectBackupSchedule201Response|CreateProjectBackupSchedule400Response|CreateProjectBackupSchedule404Response|CreateProjectBackupScheduleDefaultResponse
    {
        $httpRequest = new Request(CreateProjectBackupScheduleRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => CreateProjectBackupSchedule201Response::fromResponse($httpResponse),
            400 => CreateProjectBackupSchedule400Response::fromResponse($httpResponse),
            404 => CreateProjectBackupSchedule404Response::fromResponse($httpResponse),
            default => CreateProjectBackupScheduleDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * List BackupSchedules belonging to a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Backup/operation/backup-list-project-backup-schedules
     * @throws GuzzleException
     * @param ListProjectBackupSchedules\ListProjectBackupSchedulesRequest $request An object representing the request for this operation
     * @return ListProjectBackupSchedules\ListProjectBackupSchedules200Response|ListProjectBackupSchedules\ListProjectBackupSchedulesDefaultResponse OK
     */
    public function listProjectBackupSchedules(ListProjectBackupSchedulesRequest $request): ListProjectBackupSchedules200Response|ListProjectBackupSchedulesDefaultResponse
    {
        $httpRequest = new Request(ListProjectBackupSchedulesRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListProjectBackupSchedules200Response::fromResponse($httpResponse),
            default => ListProjectBackupSchedulesDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Create a Backup of a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Backup/operation/backup-create-project-backup
     * @throws GuzzleException
     * @param CreateProjectBackup\CreateProjectBackupRequest $request An object representing the request for this operation
     * @return CreateProjectBackup\CreateProjectBackup201Response|CreateProjectBackup\CreateProjectBackup400Response|CreateProjectBackup\CreateProjectBackup404Response|CreateProjectBackup\CreateProjectBackupDefaultResponse Created
     */
    public function createProjectBackup(CreateProjectBackupRequest $request): CreateProjectBackup201Response|CreateProjectBackup400Response|CreateProjectBackup404Response|CreateProjectBackupDefaultResponse
    {
        $httpRequest = new Request(CreateProjectBackupRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => CreateProjectBackup201Response::fromResponse($httpResponse),
            400 => CreateProjectBackup400Response::fromResponse($httpResponse),
            404 => CreateProjectBackup404Response::fromResponse($httpResponse),
            default => CreateProjectBackupDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * List Backups belonging to a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Backup/operation/backup-list-project-backups
     * @throws GuzzleException
     * @param ListProjectBackups\ListProjectBackupsRequest $request An object representing the request for this operation
     * @return ListProjectBackups\ListProjectBackups200Response|ListProjectBackups\ListProjectBackupsDefaultResponse OK
     */
    public function listProjectBackups(ListProjectBackupsRequest $request): ListProjectBackups200Response|ListProjectBackupsDefaultResponse
    {
        $httpRequest = new Request(ListProjectBackupsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListProjectBackups200Response::fromResponse($httpResponse),
            default => ListProjectBackupsDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Delete a ProjectBackupSchedule.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Backup/operation/backup-delete-project-backup-schedule
     * @throws GuzzleException
     * @param DeleteProjectBackupSchedule\DeleteProjectBackupScheduleRequest $request An object representing the request for this operation
     * @return EmptyResponse|DeleteProjectBackupSchedule\DeleteProjectBackupSchedule403Response|DeleteProjectBackupSchedule\DeleteProjectBackupSchedule404Response|DeleteProjectBackupSchedule\DeleteProjectBackupScheduleDefaultResponse NoContent
     */
    public function deleteProjectBackupSchedule(DeleteProjectBackupScheduleRequest $request): EmptyResponse|DeleteProjectBackupSchedule403Response|DeleteProjectBackupSchedule404Response|DeleteProjectBackupScheduleDefaultResponse
    {
        $httpRequest = new Request(DeleteProjectBackupScheduleRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            403 => DeleteProjectBackupSchedule403Response::fromResponse($httpResponse),
            404 => DeleteProjectBackupSchedule404Response::fromResponse($httpResponse),
            default => DeleteProjectBackupScheduleDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Get a ProjectBackupSchedule.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Backup/operation/backup-get-project-backup-schedule
     * @throws GuzzleException
     * @param GetProjectBackupSchedule\GetProjectBackupScheduleRequest $request An object representing the request for this operation
     * @return GetProjectBackupSchedule\GetProjectBackupSchedule200Response|GetProjectBackupSchedule\GetProjectBackupSchedule403Response|GetProjectBackupSchedule\GetProjectBackupSchedule404Response|GetProjectBackupSchedule\GetProjectBackupScheduleDefaultResponse OK
     */
    public function getProjectBackupSchedule(GetProjectBackupScheduleRequest $request): GetProjectBackupSchedule200Response|GetProjectBackupSchedule403Response|GetProjectBackupSchedule404Response|GetProjectBackupScheduleDefaultResponse
    {
        $httpRequest = new Request(GetProjectBackupScheduleRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetProjectBackupSchedule200Response::fromResponse($httpResponse),
            403 => GetProjectBackupSchedule403Response::fromResponse($httpResponse),
            404 => GetProjectBackupSchedule404Response::fromResponse($httpResponse),
            default => GetProjectBackupScheduleDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Update a ProjectBackupSchedule.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Backup/operation/backup-update-project-backup-schedule
     * @throws GuzzleException
     * @param UpdateProjectBackupSchedule\UpdateProjectBackupScheduleRequest $request An object representing the request for this operation
     * @return EmptyResponse|UpdateProjectBackupSchedule\UpdateProjectBackupSchedule400Response|UpdateProjectBackupSchedule\UpdateProjectBackupSchedule404Response|UpdateProjectBackupSchedule\UpdateProjectBackupSchedule412Response|UpdateProjectBackupSchedule\UpdateProjectBackupScheduleDefaultResponse OK
     */
    public function updateProjectBackupSchedule(UpdateProjectBackupScheduleRequest $request): EmptyResponse|UpdateProjectBackupSchedule400Response|UpdateProjectBackupSchedule404Response|UpdateProjectBackupSchedule412Response|UpdateProjectBackupScheduleDefaultResponse
    {
        $httpRequest = new Request(UpdateProjectBackupScheduleRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new EmptyResponse($httpResponse),
            400 => UpdateProjectBackupSchedule400Response::fromResponse($httpResponse),
            404 => UpdateProjectBackupSchedule404Response::fromResponse($httpResponse),
            412 => UpdateProjectBackupSchedule412Response::fromResponse($httpResponse),
            default => UpdateProjectBackupScheduleDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Delete a ProjectBackup.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Backup/operation/backup-delete-project-backup
     * @throws GuzzleException
     * @param DeleteProjectBackup\DeleteProjectBackupRequest $request An object representing the request for this operation
     * @return EmptyResponse|DeleteProjectBackup\DeleteProjectBackup403Response|DeleteProjectBackup\DeleteProjectBackup404Response|DeleteProjectBackup\DeleteProjectBackupDefaultResponse NoContent
     */
    public function deleteProjectBackup(DeleteProjectBackupRequest $request): EmptyResponse|DeleteProjectBackup403Response|DeleteProjectBackup404Response|DeleteProjectBackupDefaultResponse
    {
        $httpRequest = new Request(DeleteProjectBackupRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            403 => DeleteProjectBackup403Response::fromResponse($httpResponse),
            404 => DeleteProjectBackup404Response::fromResponse($httpResponse),
            default => DeleteProjectBackupDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Get a ProjectBackup.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Backup/operation/backup-get-project-backup
     * @throws GuzzleException
     * @param GetProjectBackup\GetProjectBackupRequest $request An object representing the request for this operation
     * @return GetProjectBackup\GetProjectBackup200Response|GetProjectBackup\GetProjectBackup403Response|GetProjectBackup\GetProjectBackup404Response|GetProjectBackup\GetProjectBackupDefaultResponse OK
     */
    public function getProjectBackup(GetProjectBackupRequest $request): GetProjectBackup200Response|GetProjectBackup403Response|GetProjectBackup404Response|GetProjectBackupDefaultResponse
    {
        $httpRequest = new Request(GetProjectBackupRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetProjectBackup200Response::fromResponse($httpResponse),
            403 => GetProjectBackup403Response::fromResponse($httpResponse),
            404 => GetProjectBackup404Response::fromResponse($httpResponse),
            default => GetProjectBackupDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Change the description of a ProjectBackup.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Backup/operation/backup-update-project-backup-description
     * @throws GuzzleException
     * @param UpdateProjectBackupDescription\UpdateProjectBackupDescriptionRequest $request An object representing the request for this operation
     * @return EmptyResponse|UpdateProjectBackupDescription\UpdateProjectBackupDescription400Response|UpdateProjectBackupDescription\UpdateProjectBackupDescription403Response|UpdateProjectBackupDescription\UpdateProjectBackupDescription404Response|UpdateProjectBackupDescription\UpdateProjectBackupDescriptionDefaultResponse NoContent
     */
    public function updateProjectBackupDescription(UpdateProjectBackupDescriptionRequest $request): EmptyResponse|UpdateProjectBackupDescription400Response|UpdateProjectBackupDescription403Response|UpdateProjectBackupDescription404Response|UpdateProjectBackupDescriptionDefaultResponse
    {
        $httpRequest = new Request(UpdateProjectBackupDescriptionRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => UpdateProjectBackupDescription400Response::fromResponse($httpResponse),
            403 => UpdateProjectBackupDescription403Response::fromResponse($httpResponse),
            404 => UpdateProjectBackupDescription404Response::fromResponse($httpResponse),
            default => UpdateProjectBackupDescriptionDefaultResponse::fromResponse($httpResponse),
        };
    }
}
