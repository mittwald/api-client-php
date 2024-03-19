<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem;

use GuzzleHttp\Exception\GuzzleException;
use Mittwald\ApiClient\Client\StringResponse;
use Mittwald\ApiClient\Error\UnexpectedResponseException;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetDirectories\ProjectFileSystemGetDirectoriesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetDirectories\ProjectFileSystemGetDirectoriesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetDiskUsage\ProjectFileSystemGetDiskUsageOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetDiskUsage\ProjectFileSystemGetDiskUsageRequest;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetFileContent\ProjectFileSystemGetFileContentRequest;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetJwt\ProjectFileSystemGetJwtOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetJwt\ProjectFileSystemGetJwtRequest;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemListFiles\ProjectFileSystemListFilesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemListFiles\ProjectFileSystemListFilesRequest;

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
interface ProjectFileSystemClient
{
    /**
     * List directories belonging to a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project-File-System/operation/project-file-system-get-directories
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ProjectFileSystemGetDirectories\ProjectFileSystemGetDirectoriesRequest $request An object representing the request for this operation
     * @return ProjectFileSystemGetDirectories\ProjectFileSystemGetDirectoriesOKResponse OK
     */
    public function projectFileSystemGetDirectories(ProjectFileSystemGetDirectoriesRequest $request): ProjectFileSystemGetDirectoriesOKResponse;
    /**
     * Get a Project directory filesystem usage.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project-File-System/operation/project-file-system-get-disk-usage
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ProjectFileSystemGetDiskUsage\ProjectFileSystemGetDiskUsageRequest $request An object representing the request for this operation
     * @return ProjectFileSystemGetDiskUsage\ProjectFileSystemGetDiskUsageOKResponse OK
     */
    public function projectFileSystemGetDiskUsage(ProjectFileSystemGetDiskUsageRequest $request): ProjectFileSystemGetDiskUsageOKResponse;
    /**
     * Get a Project file's content.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project-File-System/operation/project-file-system-get-file-content
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ProjectFileSystemGetFileContent\ProjectFileSystemGetFileContentRequest $request An object representing the request for this operation
     * @return StringResponse OK
     */
    public function projectFileSystemGetFileContent(ProjectFileSystemGetFileContentRequest $request): StringResponse;
    /**
     * Get a Project's file/filesystem authorization token.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project-File-System/operation/project-file-system-get-jwt
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ProjectFileSystemGetJwt\ProjectFileSystemGetJwtRequest $request An object representing the request for this operation
     * @return ProjectFileSystemGetJwt\ProjectFileSystemGetJwtOKResponse OK
     */
    public function projectFileSystemGetJwt(ProjectFileSystemGetJwtRequest $request): ProjectFileSystemGetJwtOKResponse;
    /**
     * Get a Project file's information.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Project-File-System/operation/project-file-system-list-files
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ProjectFileSystemListFiles\ProjectFileSystemListFilesRequest $request An object representing the request for this operation
     * @return ProjectFileSystemListFiles\ProjectFileSystemListFilesOKResponse OK
     */
    public function projectFileSystemListFiles(ProjectFileSystemListFilesRequest $request): ProjectFileSystemListFilesOKResponse;
}
