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
use Mittwald\ApiClient\Generated\V2\Clients\Backup\CreateProjectBackup\CreateProjectBackupTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\CreateProjectBackupExport\CreateProjectBackupExportBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\CreateProjectBackupExport\CreateProjectBackupExportDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\CreateProjectBackupExport\CreateProjectBackupExportForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\CreateProjectBackupExport\CreateProjectBackupExportNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\CreateProjectBackupExport\CreateProjectBackupExportRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\CreateProjectBackupExport\CreateProjectBackupExportTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\CreateProjectBackupSchedule\CreateProjectBackupScheduleBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\CreateProjectBackupSchedule\CreateProjectBackupScheduleCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\CreateProjectBackupSchedule\CreateProjectBackupScheduleDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\CreateProjectBackupSchedule\CreateProjectBackupScheduleNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\CreateProjectBackupSchedule\CreateProjectBackupScheduleRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\CreateProjectBackupSchedule\CreateProjectBackupScheduleTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\DeleteProjectBackup\DeleteProjectBackupDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\DeleteProjectBackup\DeleteProjectBackupForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\DeleteProjectBackup\DeleteProjectBackupNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\DeleteProjectBackup\DeleteProjectBackupRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\DeleteProjectBackup\DeleteProjectBackupTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\DeleteProjectBackupExport\DeleteProjectBackupExportDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\DeleteProjectBackupExport\DeleteProjectBackupExportForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\DeleteProjectBackupExport\DeleteProjectBackupExportNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\DeleteProjectBackupExport\DeleteProjectBackupExportRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\DeleteProjectBackupExport\DeleteProjectBackupExportTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\DeleteProjectBackupSchedule\DeleteProjectBackupScheduleDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\DeleteProjectBackupSchedule\DeleteProjectBackupScheduleForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\DeleteProjectBackupSchedule\DeleteProjectBackupScheduleNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\DeleteProjectBackupSchedule\DeleteProjectBackupScheduleRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\DeleteProjectBackupSchedule\DeleteProjectBackupScheduleTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\GetProjectBackup\GetProjectBackupDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\GetProjectBackup\GetProjectBackupForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\GetProjectBackup\GetProjectBackupNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\GetProjectBackup\GetProjectBackupOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\GetProjectBackup\GetProjectBackupRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\GetProjectBackup\GetProjectBackupTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\GetProjectBackupDatabaseDumpsV2Experimental\GetProjectBackupDatabaseDumpsV2ExperimentalBadGatewayResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\GetProjectBackupDatabaseDumpsV2Experimental\GetProjectBackupDatabaseDumpsV2ExperimentalDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\GetProjectBackupDatabaseDumpsV2Experimental\GetProjectBackupDatabaseDumpsV2ExperimentalForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\GetProjectBackupDatabaseDumpsV2Experimental\GetProjectBackupDatabaseDumpsV2ExperimentalNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\GetProjectBackupDatabaseDumpsV2Experimental\GetProjectBackupDatabaseDumpsV2ExperimentalOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\GetProjectBackupDatabaseDumpsV2Experimental\GetProjectBackupDatabaseDumpsV2ExperimentalRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\GetProjectBackupDatabaseDumpsV2Experimental\GetProjectBackupDatabaseDumpsV2ExperimentalServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\GetProjectBackupDatabaseDumpsV2Experimental\GetProjectBackupDatabaseDumpsV2ExperimentalTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\GetProjectBackupDirectories\GetProjectBackupDirectoriesBadGatewayResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\GetProjectBackupDirectories\GetProjectBackupDirectoriesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\GetProjectBackupDirectories\GetProjectBackupDirectoriesForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\GetProjectBackupDirectories\GetProjectBackupDirectoriesNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\GetProjectBackupDirectories\GetProjectBackupDirectoriesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\GetProjectBackupDirectories\GetProjectBackupDirectoriesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\GetProjectBackupDirectories\GetProjectBackupDirectoriesServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\GetProjectBackupDirectories\GetProjectBackupDirectoriesTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\GetProjectBackupSchedule\GetProjectBackupScheduleDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\GetProjectBackupSchedule\GetProjectBackupScheduleForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\GetProjectBackupSchedule\GetProjectBackupScheduleNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\GetProjectBackupSchedule\GetProjectBackupScheduleOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\GetProjectBackupSchedule\GetProjectBackupScheduleRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\GetProjectBackupSchedule\GetProjectBackupScheduleTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\ListProjectBackups\ListProjectBackupsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\ListProjectBackups\ListProjectBackupsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\ListProjectBackups\ListProjectBackupsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\ListProjectBackups\ListProjectBackupsTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\ListProjectBackupSchedules\ListProjectBackupSchedulesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\ListProjectBackupSchedules\ListProjectBackupSchedulesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\ListProjectBackupSchedules\ListProjectBackupSchedulesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\ListProjectBackupSchedules\ListProjectBackupSchedulesTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\RequestProjectBackupRestorePathDeprecated\RequestProjectBackupRestorePathDeprecatedBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\RequestProjectBackupRestorePathDeprecated\RequestProjectBackupRestorePathDeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\RequestProjectBackupRestorePathDeprecated\RequestProjectBackupRestorePathDeprecatedForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\RequestProjectBackupRestorePathDeprecated\RequestProjectBackupRestorePathDeprecatedNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\RequestProjectBackupRestorePathDeprecated\RequestProjectBackupRestorePathDeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\RequestProjectBackupRestorePathDeprecated\RequestProjectBackupRestorePathDeprecatedTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\RequestProjectBackupRestoreV2Experimental\RequestProjectBackupRestoreV2ExperimentalBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\RequestProjectBackupRestoreV2Experimental\RequestProjectBackupRestoreV2ExperimentalDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\RequestProjectBackupRestoreV2Experimental\RequestProjectBackupRestoreV2ExperimentalForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\RequestProjectBackupRestoreV2Experimental\RequestProjectBackupRestoreV2ExperimentalNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\RequestProjectBackupRestoreV2Experimental\RequestProjectBackupRestoreV2ExperimentalRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\RequestProjectBackupRestoreV2Experimental\RequestProjectBackupRestoreV2ExperimentalTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\UpdateProjectBackupDescription\UpdateProjectBackupDescriptionBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\UpdateProjectBackupDescription\UpdateProjectBackupDescriptionDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\UpdateProjectBackupDescription\UpdateProjectBackupDescriptionForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\UpdateProjectBackupDescription\UpdateProjectBackupDescriptionNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\UpdateProjectBackupDescription\UpdateProjectBackupDescriptionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\UpdateProjectBackupDescription\UpdateProjectBackupDescriptionTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\UpdateProjectBackupExpirationTime\UpdateProjectBackupExpirationTimeBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\UpdateProjectBackupExpirationTime\UpdateProjectBackupExpirationTimeDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\UpdateProjectBackupExpirationTime\UpdateProjectBackupExpirationTimeForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\UpdateProjectBackupExpirationTime\UpdateProjectBackupExpirationTimeNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\UpdateProjectBackupExpirationTime\UpdateProjectBackupExpirationTimeRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\UpdateProjectBackupExpirationTime\UpdateProjectBackupExpirationTimeTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\UpdateProjectBackupSchedule\UpdateProjectBackupScheduleBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\UpdateProjectBackupSchedule\UpdateProjectBackupScheduleDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\UpdateProjectBackupSchedule\UpdateProjectBackupScheduleNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\UpdateProjectBackupSchedule\UpdateProjectBackupSchedulePreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\UpdateProjectBackupSchedule\UpdateProjectBackupScheduleRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\UpdateProjectBackupSchedule\UpdateProjectBackupScheduleTooManyRequestsResponse;

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
     * @param CreateProjectBackupRequest $request An object representing the request for this operation
     * @return CreateProjectBackupCreatedResponse Created
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
            429 => CreateProjectBackupTooManyRequestsResponse::fromResponse($httpResponse),
            default => CreateProjectBackupDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Export a ProjectBackup for download.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Backup/operation/backup-create-project-backup-export
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CreateProjectBackupExportRequest $request An object representing the request for this operation
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
            429 => CreateProjectBackupExportTooManyRequestsResponse::fromResponse($httpResponse),
            default => CreateProjectBackupExportDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Create a BackupSchedule for a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Backup/operation/backup-create-project-backup-schedule
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CreateProjectBackupScheduleRequest $request An object representing the request for this operation
     * @return CreateProjectBackupScheduleCreatedResponse Created
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
            429 => CreateProjectBackupScheduleTooManyRequestsResponse::fromResponse($httpResponse),
            default => CreateProjectBackupScheduleDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Delete a ProjectBackup.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Backup/operation/backup-delete-project-backup
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteProjectBackupRequest $request An object representing the request for this operation
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
            429 => DeleteProjectBackupTooManyRequestsResponse::fromResponse($httpResponse),
            default => DeleteProjectBackupDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Delete a ProjectBackupExport.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Backup/operation/backup-delete-project-backup-export
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteProjectBackupExportRequest $request An object representing the request for this operation
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
            429 => DeleteProjectBackupExportTooManyRequestsResponse::fromResponse($httpResponse),
            default => DeleteProjectBackupExportDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Delete a ProjectBackupSchedule.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Backup/operation/backup-delete-project-backup-schedule
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteProjectBackupScheduleRequest $request An object representing the request for this operation
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
            429 => DeleteProjectBackupScheduleTooManyRequestsResponse::fromResponse($httpResponse),
            default => DeleteProjectBackupScheduleDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a ProjectBackup.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Backup/operation/backup-get-project-backup
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetProjectBackupRequest $request An object representing the request for this operation
     * @return GetProjectBackupOKResponse OK
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
            429 => GetProjectBackupTooManyRequestsResponse::fromResponse($httpResponse),
            default => GetProjectBackupDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List database dump's for a ProjectBackup.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Backup/operation/backup-get-project-backup-database-dumps-v2-experimental
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetProjectBackupDatabaseDumpsV2ExperimentalRequest $request An object representing the request for this operation
     * @return GetProjectBackupDatabaseDumpsV2ExperimentalOKResponse OK
     */
    public function getProjectBackupDatabaseDumpsV2Experimental(GetProjectBackupDatabaseDumpsV2ExperimentalRequest $request): GetProjectBackupDatabaseDumpsV2ExperimentalOKResponse
    {
        $httpRequest = new Request(GetProjectBackupDatabaseDumpsV2ExperimentalRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetProjectBackupDatabaseDumpsV2ExperimentalOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            403 => GetProjectBackupDatabaseDumpsV2ExperimentalForbiddenResponse::fromResponse($httpResponse),
            404 => GetProjectBackupDatabaseDumpsV2ExperimentalNotFoundResponse::fromResponse($httpResponse),
            429 => GetProjectBackupDatabaseDumpsV2ExperimentalTooManyRequestsResponse::fromResponse($httpResponse),
            502 => GetProjectBackupDatabaseDumpsV2ExperimentalBadGatewayResponse::fromResponse($httpResponse),
            503 => GetProjectBackupDatabaseDumpsV2ExperimentalServiceUnavailableResponse::fromResponse($httpResponse),
            default => GetProjectBackupDatabaseDumpsV2ExperimentalDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List paths for a ProjectBackup.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Backup/operation/backup-get-project-backup-directories
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetProjectBackupDirectoriesRequest $request An object representing the request for this operation
     * @return GetProjectBackupDirectoriesOKResponse OK
     */
    public function getProjectBackupDirectories(GetProjectBackupDirectoriesRequest $request): GetProjectBackupDirectoriesOKResponse
    {
        $httpRequest = new Request(GetProjectBackupDirectoriesRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetProjectBackupDirectoriesOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            403 => GetProjectBackupDirectoriesForbiddenResponse::fromResponse($httpResponse),
            404 => GetProjectBackupDirectoriesNotFoundResponse::fromResponse($httpResponse),
            429 => GetProjectBackupDirectoriesTooManyRequestsResponse::fromResponse($httpResponse),
            502 => GetProjectBackupDirectoriesBadGatewayResponse::fromResponse($httpResponse),
            503 => GetProjectBackupDirectoriesServiceUnavailableResponse::fromResponse($httpResponse),
            default => GetProjectBackupDirectoriesDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a ProjectBackupSchedule.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Backup/operation/backup-get-project-backup-schedule
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetProjectBackupScheduleRequest $request An object representing the request for this operation
     * @return GetProjectBackupScheduleOKResponse OK
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
            429 => GetProjectBackupScheduleTooManyRequestsResponse::fromResponse($httpResponse),
            default => GetProjectBackupScheduleDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List BackupSchedules belonging to a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Backup/operation/backup-list-project-backup-schedules
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListProjectBackupSchedulesRequest $request An object representing the request for this operation
     * @return ListProjectBackupSchedulesOKResponse OK
     */
    public function listProjectBackupSchedules(ListProjectBackupSchedulesRequest $request): ListProjectBackupSchedulesOKResponse
    {
        $httpRequest = new Request(ListProjectBackupSchedulesRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListProjectBackupSchedulesOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            429 => ListProjectBackupSchedulesTooManyRequestsResponse::fromResponse($httpResponse),
            default => ListProjectBackupSchedulesDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List Backups belonging to a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Backup/operation/backup-list-project-backups
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListProjectBackupsRequest $request An object representing the request for this operation
     * @return ListProjectBackupsOKResponse OK
     */
    public function listProjectBackups(ListProjectBackupsRequest $request): ListProjectBackupsOKResponse
    {
        $httpRequest = new Request(ListProjectBackupsRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListProjectBackupsOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            429 => ListProjectBackupsTooManyRequestsResponse::fromResponse($httpResponse),
            default => ListProjectBackupsDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Restore a ProjectBackup's path.
     *
     * **Deprecated**: Use POST /v2/project-backups/{projectBackupId}/restore instead.
     * This endpoint will be removed in a future version.
     *
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Backup/operation/backup-request-project-backup-restore-path-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param RequestProjectBackupRestorePathDeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse NoContent
     */
    public function requestProjectBackupRestorePathDeprecated(RequestProjectBackupRestorePathDeprecatedRequest $request): EmptyResponse
    {
        $httpRequest = new Request(RequestProjectBackupRestorePathDeprecatedRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => RequestProjectBackupRestorePathDeprecatedBadRequestResponse::fromResponse($httpResponse),
            403 => RequestProjectBackupRestorePathDeprecatedForbiddenResponse::fromResponse($httpResponse),
            404 => RequestProjectBackupRestorePathDeprecatedNotFoundResponse::fromResponse($httpResponse),
            429 => RequestProjectBackupRestorePathDeprecatedTooManyRequestsResponse::fromResponse($httpResponse),
            default => RequestProjectBackupRestorePathDeprecatedDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Restore a ProjectBackup.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Backup/operation/backup-request-project-backup-restore-v2-experimental
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param RequestProjectBackupRestoreV2ExperimentalRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function requestProjectBackupRestoreV2Experimental(RequestProjectBackupRestoreV2ExperimentalRequest $request): EmptyResponse
    {
        $httpRequest = new Request(RequestProjectBackupRestoreV2ExperimentalRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => RequestProjectBackupRestoreV2ExperimentalBadRequestResponse::fromResponse($httpResponse),
            403 => RequestProjectBackupRestoreV2ExperimentalForbiddenResponse::fromResponse($httpResponse),
            404 => RequestProjectBackupRestoreV2ExperimentalNotFoundResponse::fromResponse($httpResponse),
            429 => RequestProjectBackupRestoreV2ExperimentalTooManyRequestsResponse::fromResponse($httpResponse),
            default => RequestProjectBackupRestoreV2ExperimentalDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Change the description of a ProjectBackup.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Backup/operation/backup-update-project-backup-description
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateProjectBackupDescriptionRequest $request An object representing the request for this operation
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
            429 => UpdateProjectBackupDescriptionTooManyRequestsResponse::fromResponse($httpResponse),
            default => UpdateProjectBackupDescriptionDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Change the expiry of a ProjectBackup.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Backup/operation/backup-update-project-backup-expiration-time
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateProjectBackupExpirationTimeRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function updateProjectBackupExpirationTime(UpdateProjectBackupExpirationTimeRequest $request): EmptyResponse
    {
        $httpRequest = new Request(UpdateProjectBackupExpirationTimeRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateProjectBackupExpirationTimeBadRequestResponse::fromResponse($httpResponse),
            403 => UpdateProjectBackupExpirationTimeForbiddenResponse::fromResponse($httpResponse),
            404 => UpdateProjectBackupExpirationTimeNotFoundResponse::fromResponse($httpResponse),
            429 => UpdateProjectBackupExpirationTimeTooManyRequestsResponse::fromResponse($httpResponse),
            default => UpdateProjectBackupExpirationTimeDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update a ProjectBackupSchedule.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Backup/operation/backup-update-project-backup-schedule
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateProjectBackupScheduleRequest $request An object representing the request for this operation
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
            429 => UpdateProjectBackupScheduleTooManyRequestsResponse::fromResponse($httpResponse),
            default => UpdateProjectBackupScheduleDefaultResponse::fromResponse($httpResponse),
        });
    }
}
