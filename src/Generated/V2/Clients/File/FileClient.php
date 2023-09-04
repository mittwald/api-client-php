<?php

namespace Mittwald\ApiClient\Generated\V2\Clients\File;

use GuzzleHttp\Psr7\Request;

class FileClient
{
    private \GuzzleHttp\Client $client;

    public function __construct(\GuzzleHttp\Client $client)
    {
        $this->client = $client;
    }

    public function createFile(CreateFile\CreateFileRequest $request) : CreateFile\CreateFile201Response|CreateFile\CreateFile400Response|CreateFile\CreateFile500Response|CreateFile\CreateFileDefaultResponse
    {
        $httpRequest = new Request(CreateFile\CreateFileRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => CreateFile\CreateFile201Response::fromResponse($httpResponse),
            400 => CreateFile\CreateFile400Response::fromResponse($httpResponse),
            500 => CreateFile\CreateFile500Response::fromResponse($httpResponse),
            default => CreateFile\CreateFileDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getFileMeta(GetFileMeta\GetFileMetaRequest $request) : GetFileMeta\GetFileMeta200Response|GetFileMeta\GetFileMeta404Response|GetFileMeta\GetFileMetaDefaultResponse
    {
        $httpRequest = new Request(GetFileMeta\GetFileMetaRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetFileMeta\GetFileMeta200Response::fromResponse($httpResponse),
            404 => GetFileMeta\GetFileMeta404Response::fromResponse($httpResponse),
            default => GetFileMeta\GetFileMetaDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getFileTokenRules(GetFileTokenRules\GetFileTokenRulesRequest $request) : GetFileTokenRules\GetFileTokenRules200Response|GetFileTokenRules\GetFileTokenRules404Response|GetFileTokenRules\GetFileTokenRules500Response|GetFileTokenRules\GetFileTokenRulesDefaultResponse
    {
        $httpRequest = new Request(GetFileTokenRules\GetFileTokenRulesRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetFileTokenRules\GetFileTokenRules200Response::fromResponse($httpResponse),
            404 => GetFileTokenRules\GetFileTokenRules404Response::fromResponse($httpResponse),
            500 => GetFileTokenRules\GetFileTokenRules500Response::fromResponse($httpResponse),
            default => GetFileTokenRules\GetFileTokenRulesDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getFileTypeRules(GetFileTypeRules\GetFileTypeRulesRequest $request) : GetFileTypeRules\GetFileTypeRules200Response|GetFileTypeRules\GetFileTypeRules404Response|GetFileTypeRules\GetFileTypeRules500Response|GetFileTypeRules\GetFileTypeRulesDefaultResponse
    {
        $httpRequest = new Request(GetFileTypeRules\GetFileTypeRulesRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetFileTypeRules\GetFileTypeRules200Response::fromResponse($httpResponse),
            404 => GetFileTypeRules\GetFileTypeRules404Response::fromResponse($httpResponse),
            500 => GetFileTypeRules\GetFileTypeRules500Response::fromResponse($httpResponse),
            default => GetFileTypeRules\GetFileTypeRulesDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getFile(GetFile\GetFileRequest $request) : \Mittwald\ApiClient\Client\StringResponse|GetFile\GetFile400Response|GetFile\GetFile404Response|GetFile\GetFile500Response|GetFile\GetFileDefaultResponse
    {
        $httpRequest = new Request(GetFile\GetFileRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => \Mittwald\ApiClient\Client\StringResponse::fromResponse($httpResponse),
            400 => GetFile\GetFile400Response::fromResponse($httpResponse),
            404 => GetFile\GetFile404Response::fromResponse($httpResponse),
            500 => GetFile\GetFile500Response::fromResponse($httpResponse),
            default => GetFile\GetFileDefaultResponse::fromResponse($httpResponse),
        };
    }
}

