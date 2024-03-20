<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Backup;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use Mittwald\ApiClient\Client\EmptyResponse;
use Mittwald\ApiClient\Error\UnexpectedResponseException;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\CreateProjectBackup\CreateProjectBackupBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\CreateProjectBackup\CreateProjectBackupCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\CreateProjectBackup\CreateProjectBackupDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\CreateProjectBackup\CreateProjectBackupNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\CreateProjectBackup\CreateProjectBackupRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\CreateProjectBackupExport\CreateProjectBackupExportBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\CreateProjectBackupExport\CreateProjectBackupExportDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\CreateProjectBackupExport\CreateProjectBackupExportForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\CreateProjectBackupExport\CreateProjectBackupExportNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\CreateProjectBackupExport\CreateProjectBackupExportRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\CreateProjectBackupSchedule\CreateProjectBackupScheduleBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\CreateProjectBackupSchedule\CreateProjectBackupScheduleCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\CreateProjectBackupSchedule\CreateProjectBackupScheduleDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\CreateProjectBackupSchedule\CreateProjectBackupScheduleNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\CreateProjectBackupSchedule\CreateProjectBackupScheduleRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\DeleteProjectBackup\DeleteProjectBackupDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\DeleteProjectBackup\DeleteProjectBackupForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\DeleteProjectBackup\DeleteProjectBackupNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\DeleteProjectBackup\DeleteProjectBackupRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\DeleteProjectBackupExport\DeleteProjectBackupExportDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\DeleteProjectBackupExport\DeleteProjectBackupExportForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\DeleteProjectBackupExport\DeleteProjectBackupExportNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\DeleteProjectBackupExport\DeleteProjectBackupExportRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\DeleteProjectBackupSchedule\DeleteProjectBackupScheduleDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\DeleteProjectBackupSchedule\DeleteProjectBackupScheduleForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\DeleteProjectBackupSchedule\DeleteProjectBackupScheduleNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\DeleteProjectBackupSchedule\DeleteProjectBackupScheduleRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\GetProjectBackup\GetProjectBackupDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\GetProjectBackup\GetProjectBackupForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\GetProjectBackup\GetProjectBackupNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\GetProjectBackup\GetProjectBackupOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\GetProjectBackup\GetProjectBackupRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\GetProjectBackupSchedule\GetProjectBackupScheduleDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\GetProjectBackupSchedule\GetProjectBackupScheduleForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\GetProjectBackupSchedule\GetProjectBackupScheduleNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\GetProjectBackupSchedule\GetProjectBackupScheduleOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\GetProjectBackupSchedule\GetProjectBackupScheduleRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\ListProjectBackups\ListProjectBackupsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\ListProjectBackups\ListProjectBackupsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\ListProjectBackups\ListProjectBackupsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\ListProjectBackupSchedules\ListProjectBackupSchedulesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\ListProjectBackupSchedules\ListProjectBackupSchedulesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\ListProjectBackupSchedules\ListProjectBackupSchedulesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\UpdateProjectBackupDescription\UpdateProjectBackupDescriptionBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\UpdateProjectBackupDescription\UpdateProjectBackupDescriptionDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\UpdateProjectBackupDescription\UpdateProjectBackupDescriptionForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\UpdateProjectBackupDescription\UpdateProjectBackupDescriptionNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\UpdateProjectBackupDescription\UpdateProjectBackupDescriptionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\UpdateProjectBackupSchedule\UpdateProjectBackupScheduleBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\UpdateProjectBackupSchedule\UpdateProjectBackupScheduleDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\UpdateProjectBackupSchedule\UpdateProjectBackupScheduleNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\UpdateProjectBackupSchedule\UpdateProjectBackupSchedulePreconditionFailedResponse;
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
class BackupClientImpl implements BackupClient
{
    private Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Create a Backup of a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Backup/operation/backup-create-project-backup
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CreateProjectBackup\CreateProjectBackupRequest $request An object representing the request for this operation
     * @return CreateProjectBackup\CreateProjectBackupCreatedResponse Created
     */
    public function createProjectBackup(CreateProjectBackupRequest $request): CreateProjectBackupCreatedResponse
    {
        $httpRequest = new Request(CreateProjectBackupRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 201) {
            return CreateProjectBackupCreatedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => CreateProjectBackupBadRequestResponse::fromResponse($httpResponse),
            404 => CreateProjectBackupNotFoundResponse::fromResponse($httpResponse),
            default => CreateProjectBackupDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Export a ProjectBackup for download.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Backup/operation/backup-create-project-backup-export
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CreateProjectBackupExport\CreateProjectBackupExportRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function createProjectBackupExport(CreateProjectBackupExportRequest $request): EmptyResponse
    {
        $httpRequest = new Request(CreateProjectBackupExportRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => CreateProjectBackupExportBadRequestResponse::fromResponse($httpResponse),
            403 => CreateProjectBackupExportForbiddenResponse::fromResponse($httpResponse),
            404 => CreateProjectBackupExportNotFoundResponse::fromResponse($httpResponse),
            default => CreateProjectBackupExportDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Create a BackupSchedule for a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Backup/operation/backup-create-project-backup-schedule
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CreateProjectBackupSchedule\CreateProjectBackupScheduleRequest $request An object representing the request for this operation
     * @return CreateProjectBackupSchedule\CreateProjectBackupScheduleCreatedResponse Created
     */
    public function createProjectBackupSchedule(CreateProjectBackupScheduleRequest $request): CreateProjectBackupScheduleCreatedResponse
    {
        $httpRequest = new Request(CreateProjectBackupScheduleRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 201) {
            return CreateProjectBackupScheduleCreatedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => CreateProjectBackupScheduleBadRequestResponse::fromResponse($httpResponse),
            404 => CreateProjectBackupScheduleNotFoundResponse::fromResponse($httpResponse),
            default => CreateProjectBackupScheduleDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Delete a ProjectBackup.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Backup/operation/backup-delete-project-backup
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteProjectBackup\DeleteProjectBackupRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function deleteProjectBackup(DeleteProjectBackupRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeleteProjectBackupRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            403 => DeleteProjectBackupForbiddenResponse::fromResponse($httpResponse),
            404 => DeleteProjectBackupNotFoundResponse::fromResponse($httpResponse),
            default => DeleteProjectBackupDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Delete a ProjectBackupExport.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Backup/operation/backup-delete-project-backup-export
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteProjectBackupExport\DeleteProjectBackupExportRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function deleteProjectBackupExport(DeleteProjectBackupExportRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeleteProjectBackupExportRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            403 => DeleteProjectBackupExportForbiddenResponse::fromResponse($httpResponse),
            404 => DeleteProjectBackupExportNotFoundResponse::fromResponse($httpResponse),
            default => DeleteProjectBackupExportDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Delete a ProjectBackupSchedule.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Backup/operation/backup-delete-project-backup-schedule
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteProjectBackupSchedule\DeleteProjectBackupScheduleRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function deleteProjectBackupSchedule(DeleteProjectBackupScheduleRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeleteProjectBackupScheduleRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            403 => DeleteProjectBackupScheduleForbiddenResponse::fromResponse($httpResponse),
            404 => DeleteProjectBackupScheduleNotFoundResponse::fromResponse($httpResponse),
            default => DeleteProjectBackupScheduleDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a ProjectBackup.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Backup/operation/backup-get-project-backup
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetProjectBackup\GetProjectBackupRequest $request An object representing the request for this operation
     * @return GetProjectBackup\GetProjectBackupOKResponse OK
     */
    public function getProjectBackup(GetProjectBackupRequest $request): GetProjectBackupOKResponse
    {
        $httpRequest = new Request(GetProjectBackupRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetProjectBackupOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            403 => GetProjectBackupForbiddenResponse::fromResponse($httpResponse),
            404 => GetProjectBackupNotFoundResponse::fromResponse($httpResponse),
            default => GetProjectBackupDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a ProjectBackupSchedule.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Backup/operation/backup-get-project-backup-schedule
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetProjectBackupSchedule\GetProjectBackupScheduleRequest $request An object representing the request for this operation
     * @return GetProjectBackupSchedule\GetProjectBackupScheduleOKResponse OK
     */
    public function getProjectBackupSchedule(GetProjectBackupScheduleRequest $request): GetProjectBackupScheduleOKResponse
    {
        $httpRequest = new Request(GetProjectBackupScheduleRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetProjectBackupScheduleOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            403 => GetProjectBackupScheduleForbiddenResponse::fromResponse($httpResponse),
            404 => GetProjectBackupScheduleNotFoundResponse::fromResponse($httpResponse),
            default => GetProjectBackupScheduleDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List BackupSchedules belonging to a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Backup/operation/backup-list-project-backup-schedules
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListProjectBackupSchedules\ListProjectBackupSchedulesRequest $request An object representing the request for this operation
     * @return ListProjectBackupSchedules\ListProjectBackupSchedulesOKResponse OK
     */
    public function listProjectBackupSchedules(ListProjectBackupSchedulesRequest $request): ListProjectBackupSchedulesOKResponse
    {
        $httpRequest = new Request(ListProjectBackupSchedulesRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListProjectBackupSchedulesOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            default => ListProjectBackupSchedulesDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List Backups belonging to a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Backup/operation/backup-list-project-backups
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListProjectBackups\ListProjectBackupsRequest $request An object representing the request for this operation
     * @return ListProjectBackups\ListProjectBackupsOKResponse OK
     */
    public function listProjectBackups(ListProjectBackupsRequest $request): ListProjectBackupsOKResponse
    {
        $httpRequest = new Request(ListProjectBackupsRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListProjectBackupsOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            default => ListProjectBackupsDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Change the description of a ProjectBackup.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Backup/operation/backup-update-project-backup-description
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateProjectBackupDescription\UpdateProjectBackupDescriptionRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function updateProjectBackupDescription(UpdateProjectBackupDescriptionRequest $request): EmptyResponse
    {
        $httpRequest = new Request(UpdateProjectBackupDescriptionRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateProjectBackupDescriptionBadRequestResponse::fromResponse($httpResponse),
            403 => UpdateProjectBackupDescriptionForbiddenResponse::fromResponse($httpResponse),
            404 => UpdateProjectBackupDescriptionNotFoundResponse::fromResponse($httpResponse),
            default => UpdateProjectBackupDescriptionDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update a ProjectBackupSchedule.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Backup/operation/backup-update-project-backup-schedule
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateProjectBackupSchedule\UpdateProjectBackupScheduleRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function updateProjectBackupSchedule(UpdateProjectBackupScheduleRequest $request): EmptyResponse
    {
        $httpRequest = new Request(UpdateProjectBackupScheduleRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateProjectBackupScheduleBadRequestResponse::fromResponse($httpResponse),
            404 => UpdateProjectBackupScheduleNotFoundResponse::fromResponse($httpResponse),
            412 => UpdateProjectBackupSchedulePreconditionFailedResponse::fromResponse($httpResponse),
            default => UpdateProjectBackupScheduleDefaultResponse::fromResponse($httpResponse),
        });
    }
}
