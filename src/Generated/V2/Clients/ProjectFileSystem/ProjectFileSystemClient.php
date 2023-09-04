<?php

namespace Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem;

use GuzzleHttp\Psr7\Request;

class ProjectFileSystemClient
{
    private \GuzzleHttp\Client $client;

    public function __construct(\GuzzleHttp\Client $client)
    {
        $this->client = $client;
    }

    public function projectFileSystemGetDirectories(ProjectFileSystemGetDirectories\ProjectFileSystemGetDirectoriesRequest $request) : ProjectFileSystemGetDirectories\ProjectFileSystemGetDirectories200Response|ProjectFileSystemGetDirectories\ProjectFileSystemGetDirectories403Response|ProjectFileSystemGetDirectories\ProjectFileSystemGetDirectories404Response|ProjectFileSystemGetDirectories\ProjectFileSystemGetDirectories503Response|ProjectFileSystemGetDirectories\ProjectFileSystemGetDirectoriesDefaultResponse
    {
        $httpRequest = new Request(ProjectFileSystemGetDirectories\ProjectFileSystemGetDirectoriesRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ProjectFileSystemGetDirectories\ProjectFileSystemGetDirectories200Response::fromResponse($httpResponse),
            403 => ProjectFileSystemGetDirectories\ProjectFileSystemGetDirectories403Response::fromResponse($httpResponse),
            404 => ProjectFileSystemGetDirectories\ProjectFileSystemGetDirectories404Response::fromResponse($httpResponse),
            503 => ProjectFileSystemGetDirectories\ProjectFileSystemGetDirectories503Response::fromResponse($httpResponse),
            default => ProjectFileSystemGetDirectories\ProjectFileSystemGetDirectoriesDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function projectFileSystemGetDiskUsage(ProjectFileSystemGetDiskUsage\ProjectFileSystemGetDiskUsageRequest $request) : ProjectFileSystemGetDiskUsage\ProjectFileSystemGetDiskUsage200Response|ProjectFileSystemGetDiskUsage\ProjectFileSystemGetDiskUsage403Response|ProjectFileSystemGetDiskUsage\ProjectFileSystemGetDiskUsage404Response|ProjectFileSystemGetDiskUsage\ProjectFileSystemGetDiskUsage503Response|ProjectFileSystemGetDiskUsage\ProjectFileSystemGetDiskUsageDefaultResponse
    {
        $httpRequest = new Request(ProjectFileSystemGetDiskUsage\ProjectFileSystemGetDiskUsageRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ProjectFileSystemGetDiskUsage\ProjectFileSystemGetDiskUsage200Response::fromResponse($httpResponse),
            403 => ProjectFileSystemGetDiskUsage\ProjectFileSystemGetDiskUsage403Response::fromResponse($httpResponse),
            404 => ProjectFileSystemGetDiskUsage\ProjectFileSystemGetDiskUsage404Response::fromResponse($httpResponse),
            503 => ProjectFileSystemGetDiskUsage\ProjectFileSystemGetDiskUsage503Response::fromResponse($httpResponse),
            default => ProjectFileSystemGetDiskUsage\ProjectFileSystemGetDiskUsageDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function projectFileSystemGetFileContent(ProjectFileSystemGetFileContent\ProjectFileSystemGetFileContentRequest $request) : \Mittwald\ApiClient\Client\StringResponse|ProjectFileSystemGetFileContent\ProjectFileSystemGetFileContent403Response|ProjectFileSystemGetFileContent\ProjectFileSystemGetFileContent404Response|ProjectFileSystemGetFileContent\ProjectFileSystemGetFileContent503Response|ProjectFileSystemGetFileContent\ProjectFileSystemGetFileContentDefaultResponse
    {
        $httpRequest = new Request(ProjectFileSystemGetFileContent\ProjectFileSystemGetFileContentRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => \Mittwald\ApiClient\Client\StringResponse::fromResponse($httpResponse),
            403 => ProjectFileSystemGetFileContent\ProjectFileSystemGetFileContent403Response::fromResponse($httpResponse),
            404 => ProjectFileSystemGetFileContent\ProjectFileSystemGetFileContent404Response::fromResponse($httpResponse),
            503 => ProjectFileSystemGetFileContent\ProjectFileSystemGetFileContent503Response::fromResponse($httpResponse),
            default => ProjectFileSystemGetFileContent\ProjectFileSystemGetFileContentDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function projectFileSystemGetJwt(ProjectFileSystemGetJwt\ProjectFileSystemGetJwtRequest $request) : ProjectFileSystemGetJwt\ProjectFileSystemGetJwt200Response|ProjectFileSystemGetJwt\ProjectFileSystemGetJwt403Response|ProjectFileSystemGetJwt\ProjectFileSystemGetJwt404Response|ProjectFileSystemGetJwt\ProjectFileSystemGetJwt503Response
    {
        $httpRequest = new Request(ProjectFileSystemGetJwt\ProjectFileSystemGetJwtRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ProjectFileSystemGetJwt\ProjectFileSystemGetJwt200Response::fromResponse($httpResponse),
            403 => ProjectFileSystemGetJwt\ProjectFileSystemGetJwt403Response::fromResponse($httpResponse),
            404 => ProjectFileSystemGetJwt\ProjectFileSystemGetJwt404Response::fromResponse($httpResponse),
            503 => ProjectFileSystemGetJwt\ProjectFileSystemGetJwt503Response::fromResponse($httpResponse),
        };
    }

    public function projectFileSystemListFiles(ProjectFileSystemListFiles\ProjectFileSystemListFilesRequest $request) : ProjectFileSystemListFiles\ProjectFileSystemListFiles200Response|ProjectFileSystemListFiles\ProjectFileSystemListFiles403Response|ProjectFileSystemListFiles\ProjectFileSystemListFiles404Response|ProjectFileSystemListFiles\ProjectFileSystemListFiles503Response|ProjectFileSystemListFiles\ProjectFileSystemListFilesDefaultResponse
    {
        $httpRequest = new Request(ProjectFileSystemListFiles\ProjectFileSystemListFilesRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ProjectFileSystemListFiles\ProjectFileSystemListFiles200Response::fromResponse($httpResponse),
            403 => ProjectFileSystemListFiles\ProjectFileSystemListFiles403Response::fromResponse($httpResponse),
            404 => ProjectFileSystemListFiles\ProjectFileSystemListFiles404Response::fromResponse($httpResponse),
            503 => ProjectFileSystemListFiles\ProjectFileSystemListFiles503Response::fromResponse($httpResponse),
            default => ProjectFileSystemListFiles\ProjectFileSystemListFilesDefaultResponse::fromResponse($httpResponse),
        };
    }
}

