<?php

namespace Mittwald\ApiClient\Generated\V2\Clients\File;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use Mittwald\ApiClient\Client\StringResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\CreateFile\CreateFile201Response;
use Mittwald\ApiClient\Generated\V2\Clients\File\CreateFile\CreateFile400Response;
use Mittwald\ApiClient\Generated\V2\Clients\File\CreateFile\CreateFile500Response;
use Mittwald\ApiClient\Generated\V2\Clients\File\CreateFile\CreateFileDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\CreateFile\CreateFileRequest;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFile\GetFile400Response;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFile\GetFile404Response;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFile\GetFile500Response;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFile\GetFileDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFile\GetFileRequest;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFileMeta\GetFileMeta200Response;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFileMeta\GetFileMeta404Response;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFileMeta\GetFileMetaDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFileMeta\GetFileMetaRequest;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFileTokenRules\GetFileTokenRules200Response;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFileTokenRules\GetFileTokenRules404Response;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFileTokenRules\GetFileTokenRules500Response;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFileTokenRules\GetFileTokenRulesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFileTokenRules\GetFileTokenRulesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFileTypeRules\GetFileTypeRules200Response;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFileTypeRules\GetFileTypeRules404Response;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFileTypeRules\GetFileTypeRules500Response;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFileTypeRules\GetFileTypeRulesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\File\GetFileTypeRules\GetFileTypeRulesRequest;

class FileClient
{
    private Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function createFile(CreateFileRequest $request): CreateFile201Response|CreateFile400Response|CreateFile500Response|CreateFileDefaultResponse
    {
        $httpRequest = new Request(CreateFileRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => CreateFile201Response::fromResponse($httpResponse),
            400 => CreateFile400Response::fromResponse($httpResponse),
            500 => CreateFile500Response::fromResponse($httpResponse),
            default => CreateFileDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getFileMeta(GetFileMetaRequest $request): GetFileMeta200Response|GetFileMeta404Response|GetFileMetaDefaultResponse
    {
        $httpRequest = new Request(GetFileMetaRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetFileMeta200Response::fromResponse($httpResponse),
            404 => GetFileMeta404Response::fromResponse($httpResponse),
            default => GetFileMetaDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getFileTokenRules(GetFileTokenRulesRequest $request): GetFileTokenRules200Response|GetFileTokenRules404Response|GetFileTokenRules500Response|GetFileTokenRulesDefaultResponse
    {
        $httpRequest = new Request(GetFileTokenRulesRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetFileTokenRules200Response::fromResponse($httpResponse),
            404 => GetFileTokenRules404Response::fromResponse($httpResponse),
            500 => GetFileTokenRules500Response::fromResponse($httpResponse),
            default => GetFileTokenRulesDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getFileTypeRules(GetFileTypeRulesRequest $request): GetFileTypeRules200Response|GetFileTypeRules404Response|GetFileTypeRules500Response|GetFileTypeRulesDefaultResponse
    {
        $httpRequest = new Request(GetFileTypeRulesRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetFileTypeRules200Response::fromResponse($httpResponse),
            404 => GetFileTypeRules404Response::fromResponse($httpResponse),
            500 => GetFileTypeRules500Response::fromResponse($httpResponse),
            default => GetFileTypeRulesDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getFile(GetFileRequest $request): StringResponse|GetFile400Response|GetFile404Response|GetFile500Response|GetFileDefaultResponse
    {
        $httpRequest = new Request(GetFileRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => StringResponse::fromResponse($httpResponse),
            400 => GetFile400Response::fromResponse($httpResponse),
            404 => GetFile404Response::fromResponse($httpResponse),
            500 => GetFile500Response::fromResponse($httpResponse),
            default => GetFileDefaultResponse::fromResponse($httpResponse),
        };
    }
}
