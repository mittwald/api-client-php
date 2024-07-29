<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use Mittwald\ApiClient\Client\StringResponse;
use Mittwald\ApiClient\Error\UnexpectedResponseException;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetDirectories\ProjectFileSystemGetDirectoriesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetDirectories\ProjectFileSystemGetDirectoriesForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetDirectories\ProjectFileSystemGetDirectoriesNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetDirectories\ProjectFileSystemGetDirectoriesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetDirectories\ProjectFileSystemGetDirectoriesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetDirectories\ProjectFileSystemGetDirectoriesServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetDirectories\ProjectFileSystemGetDirectoriesTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetDiskUsage\ProjectFileSystemGetDiskUsageDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetDiskUsage\ProjectFileSystemGetDiskUsageForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetDiskUsage\ProjectFileSystemGetDiskUsageNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetDiskUsage\ProjectFileSystemGetDiskUsageOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetDiskUsage\ProjectFileSystemGetDiskUsageRequest;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetDiskUsage\ProjectFileSystemGetDiskUsageServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetDiskUsage\ProjectFileSystemGetDiskUsageTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetFileContent\ProjectFileSystemGetFileContentDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetFileContent\ProjectFileSystemGetFileContentForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetFileContent\ProjectFileSystemGetFileContentNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetFileContent\ProjectFileSystemGetFileContentRequest;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetFileContent\ProjectFileSystemGetFileContentServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetFileContent\ProjectFileSystemGetFileContentTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetJwt\ProjectFileSystemGetJwtForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetJwt\ProjectFileSystemGetJwtNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetJwt\ProjectFileSystemGetJwtOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetJwt\ProjectFileSystemGetJwtRequest;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetJwt\ProjectFileSystemGetJwtServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetJwt\ProjectFileSystemGetJwtTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemListFiles\ProjectFileSystemListFilesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemListFiles\ProjectFileSystemListFilesForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemListFiles\ProjectFileSystemListFilesNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemListFiles\ProjectFileSystemListFilesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemListFiles\ProjectFileSystemListFilesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemListFiles\ProjectFileSystemListFilesServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemListFiles\ProjectFileSystemListFilesTooManyRequestsResponse;

/**
 * Client for Project File System API
 *
 * The filesystem API allows you to directly access the filesystem of your project.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class ProjectFileSystemClientImpl implements ProjectFileSystemClient
{
    private Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * List directories belonging to a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project-File-System/operation/project-file-system-get-directories
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ProjectFileSystemGetDirectoriesRequest $request An object representing the request for this operation
     * @return ProjectFileSystemGetDirectoriesOKResponse OK
     */
    public function projectFileSystemGetDirectories(ProjectFileSystemGetDirectoriesRequest $request): ProjectFileSystemGetDirectoriesOKResponse
    {
        $httpRequest = new Request(ProjectFileSystemGetDirectoriesRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ProjectFileSystemGetDirectoriesOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            403 => ProjectFileSystemGetDirectoriesForbiddenResponse::fromResponse($httpResponse),
            404 => ProjectFileSystemGetDirectoriesNotFoundResponse::fromResponse($httpResponse),
            429 => ProjectFileSystemGetDirectoriesTooManyRequestsResponse::fromResponse($httpResponse),
            503 => ProjectFileSystemGetDirectoriesServiceUnavailableResponse::fromResponse($httpResponse),
            default => ProjectFileSystemGetDirectoriesDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a Project directory filesystem usage.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project-File-System/operation/project-file-system-get-disk-usage
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ProjectFileSystemGetDiskUsageRequest $request An object representing the request for this operation
     * @return ProjectFileSystemGetDiskUsageOKResponse OK
     */
    public function projectFileSystemGetDiskUsage(ProjectFileSystemGetDiskUsageRequest $request): ProjectFileSystemGetDiskUsageOKResponse
    {
        $httpRequest = new Request(ProjectFileSystemGetDiskUsageRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ProjectFileSystemGetDiskUsageOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            403 => ProjectFileSystemGetDiskUsageForbiddenResponse::fromResponse($httpResponse),
            404 => ProjectFileSystemGetDiskUsageNotFoundResponse::fromResponse($httpResponse),
            429 => ProjectFileSystemGetDiskUsageTooManyRequestsResponse::fromResponse($httpResponse),
            503 => ProjectFileSystemGetDiskUsageServiceUnavailableResponse::fromResponse($httpResponse),
            default => ProjectFileSystemGetDiskUsageDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a Project file's content.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project-File-System/operation/project-file-system-get-file-content
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ProjectFileSystemGetFileContentRequest $request An object representing the request for this operation
     * @return StringResponse OK
     */
    public function projectFileSystemGetFileContent(ProjectFileSystemGetFileContentRequest $request): StringResponse
    {
        $httpRequest = new Request(ProjectFileSystemGetFileContentRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return StringResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            403 => ProjectFileSystemGetFileContentForbiddenResponse::fromResponse($httpResponse),
            404 => ProjectFileSystemGetFileContentNotFoundResponse::fromResponse($httpResponse),
            429 => ProjectFileSystemGetFileContentTooManyRequestsResponse::fromResponse($httpResponse),
            503 => ProjectFileSystemGetFileContentServiceUnavailableResponse::fromResponse($httpResponse),
            default => ProjectFileSystemGetFileContentDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a Project's file/filesystem authorization token.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project-File-System/operation/project-file-system-get-jwt
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ProjectFileSystemGetJwtRequest $request An object representing the request for this operation
     * @return ProjectFileSystemGetJwtOKResponse OK
     */
    public function projectFileSystemGetJwt(ProjectFileSystemGetJwtRequest $request): ProjectFileSystemGetJwtOKResponse
    {
        $httpRequest = new Request(ProjectFileSystemGetJwtRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ProjectFileSystemGetJwtOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            403 => ProjectFileSystemGetJwtForbiddenResponse::fromResponse($httpResponse),
            404 => ProjectFileSystemGetJwtNotFoundResponse::fromResponse($httpResponse),
            429 => ProjectFileSystemGetJwtTooManyRequestsResponse::fromResponse($httpResponse),
            503 => ProjectFileSystemGetJwtServiceUnavailableResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a Project file's information.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project-File-System/operation/project-file-system-list-files
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ProjectFileSystemListFilesRequest $request An object representing the request for this operation
     * @return ProjectFileSystemListFilesOKResponse OK
     */
    public function projectFileSystemListFiles(ProjectFileSystemListFilesRequest $request): ProjectFileSystemListFilesOKResponse
    {
        $httpRequest = new Request(ProjectFileSystemListFilesRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ProjectFileSystemListFilesOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            403 => ProjectFileSystemListFilesForbiddenResponse::fromResponse($httpResponse),
            404 => ProjectFileSystemListFilesNotFoundResponse::fromResponse($httpResponse),
            429 => ProjectFileSystemListFilesTooManyRequestsResponse::fromResponse($httpResponse),
            503 => ProjectFileSystemListFilesServiceUnavailableResponse::fromResponse($httpResponse),
            default => ProjectFileSystemListFilesDefaultResponse::fromResponse($httpResponse),
        });
    }
}
