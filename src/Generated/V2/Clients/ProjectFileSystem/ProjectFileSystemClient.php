<?php

namespace Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use Mittwald\ApiClient\Client\StringResponse;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetDirectories\ProjectFileSystemGetDirectories200Response;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetDirectories\ProjectFileSystemGetDirectories403Response;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetDirectories\ProjectFileSystemGetDirectories404Response;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetDirectories\ProjectFileSystemGetDirectories503Response;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetDirectories\ProjectFileSystemGetDirectoriesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetDirectories\ProjectFileSystemGetDirectoriesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetDiskUsage\ProjectFileSystemGetDiskUsage200Response;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetDiskUsage\ProjectFileSystemGetDiskUsage403Response;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetDiskUsage\ProjectFileSystemGetDiskUsage404Response;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetDiskUsage\ProjectFileSystemGetDiskUsage503Response;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetDiskUsage\ProjectFileSystemGetDiskUsageDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetDiskUsage\ProjectFileSystemGetDiskUsageRequest;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetFileContent\ProjectFileSystemGetFileContent403Response;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetFileContent\ProjectFileSystemGetFileContent404Response;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetFileContent\ProjectFileSystemGetFileContent503Response;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetFileContent\ProjectFileSystemGetFileContentDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetFileContent\ProjectFileSystemGetFileContentRequest;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetJwt\ProjectFileSystemGetJwt200Response;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetJwt\ProjectFileSystemGetJwt403Response;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetJwt\ProjectFileSystemGetJwt404Response;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetJwt\ProjectFileSystemGetJwt503Response;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemGetJwt\ProjectFileSystemGetJwtRequest;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemListFiles\ProjectFileSystemListFiles200Response;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemListFiles\ProjectFileSystemListFiles403Response;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemListFiles\ProjectFileSystemListFiles404Response;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemListFiles\ProjectFileSystemListFiles503Response;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemListFiles\ProjectFileSystemListFilesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemListFiles\ProjectFileSystemListFilesRequest;

class ProjectFileSystemClient
{
    private Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function projectFileSystemGetDirectories(ProjectFileSystemGetDirectoriesRequest $request): ProjectFileSystemGetDirectories200Response|ProjectFileSystemGetDirectories403Response|ProjectFileSystemGetDirectories404Response|ProjectFileSystemGetDirectories503Response|ProjectFileSystemGetDirectoriesDefaultResponse
    {
        $httpRequest = new Request(ProjectFileSystemGetDirectoriesRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ProjectFileSystemGetDirectories200Response::fromResponse($httpResponse),
            403 => ProjectFileSystemGetDirectories403Response::fromResponse($httpResponse),
            404 => ProjectFileSystemGetDirectories404Response::fromResponse($httpResponse),
            503 => ProjectFileSystemGetDirectories503Response::fromResponse($httpResponse),
            default => ProjectFileSystemGetDirectoriesDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function projectFileSystemGetDiskUsage(ProjectFileSystemGetDiskUsageRequest $request): ProjectFileSystemGetDiskUsage200Response|ProjectFileSystemGetDiskUsage403Response|ProjectFileSystemGetDiskUsage404Response|ProjectFileSystemGetDiskUsage503Response|ProjectFileSystemGetDiskUsageDefaultResponse
    {
        $httpRequest = new Request(ProjectFileSystemGetDiskUsageRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ProjectFileSystemGetDiskUsage200Response::fromResponse($httpResponse),
            403 => ProjectFileSystemGetDiskUsage403Response::fromResponse($httpResponse),
            404 => ProjectFileSystemGetDiskUsage404Response::fromResponse($httpResponse),
            503 => ProjectFileSystemGetDiskUsage503Response::fromResponse($httpResponse),
            default => ProjectFileSystemGetDiskUsageDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function projectFileSystemGetFileContent(ProjectFileSystemGetFileContentRequest $request): StringResponse|ProjectFileSystemGetFileContent403Response|ProjectFileSystemGetFileContent404Response|ProjectFileSystemGetFileContent503Response|ProjectFileSystemGetFileContentDefaultResponse
    {
        $httpRequest = new Request(ProjectFileSystemGetFileContentRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => StringResponse::fromResponse($httpResponse),
            403 => ProjectFileSystemGetFileContent403Response::fromResponse($httpResponse),
            404 => ProjectFileSystemGetFileContent404Response::fromResponse($httpResponse),
            503 => ProjectFileSystemGetFileContent503Response::fromResponse($httpResponse),
            default => ProjectFileSystemGetFileContentDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function projectFileSystemGetJwt(ProjectFileSystemGetJwtRequest $request): ProjectFileSystemGetJwt200Response|ProjectFileSystemGetJwt403Response|ProjectFileSystemGetJwt404Response|ProjectFileSystemGetJwt503Response
    {
        $httpRequest = new Request(ProjectFileSystemGetJwtRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ProjectFileSystemGetJwt200Response::fromResponse($httpResponse),
            403 => ProjectFileSystemGetJwt403Response::fromResponse($httpResponse),
            404 => ProjectFileSystemGetJwt404Response::fromResponse($httpResponse),
            503 => ProjectFileSystemGetJwt503Response::fromResponse($httpResponse),
        };
    }

    public function projectFileSystemListFiles(ProjectFileSystemListFilesRequest $request): ProjectFileSystemListFiles200Response|ProjectFileSystemListFiles403Response|ProjectFileSystemListFiles404Response|ProjectFileSystemListFiles503Response|ProjectFileSystemListFilesDefaultResponse
    {
        $httpRequest = new Request(ProjectFileSystemListFilesRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ProjectFileSystemListFiles200Response::fromResponse($httpResponse),
            403 => ProjectFileSystemListFiles403Response::fromResponse($httpResponse),
            404 => ProjectFileSystemListFiles404Response::fromResponse($httpResponse),
            503 => ProjectFileSystemListFiles503Response::fromResponse($httpResponse),
            default => ProjectFileSystemListFilesDefaultResponse::fromResponse($httpResponse),
        };
    }
}
