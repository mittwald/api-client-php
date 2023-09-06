<?php

namespace Mittwald\ApiClient\Generated\V2\Clients\Conversation;

use GuzzleHttp\Psr7\Request;

class ConversationClient
{
    private \GuzzleHttp\Client $client;

    public function __construct(\GuzzleHttp\Client $client)
    {
        $this->client = $client;
    }

    public function createConversation(CreateConversation\CreateConversationRequest $request): CreateConversation\CreateConversation201Response|CreateConversation\CreateConversation400Response|CreateConversation\CreateConversationDefaultResponse
    {
        $httpRequest = new Request(CreateConversation\CreateConversationRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => CreateConversation\CreateConversation201Response::fromResponse($httpResponse),
            400 => CreateConversation\CreateConversation400Response::fromResponse($httpResponse),
            default => CreateConversation\CreateConversationDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listConversations(ListConversations\ListConversationsRequest $request): ListConversations\ListConversations200Response|ListConversations\ListConversationsDefaultResponse
    {
        $httpRequest = new Request(ListConversations\ListConversationsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListConversations\ListConversations200Response::fromResponse($httpResponse),
            default => ListConversations\ListConversationsDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function createMessage(CreateMessage\CreateMessageRequest $request): CreateMessage\CreateMessage201Response|CreateMessage\CreateMessage400Response|CreateMessage\CreateMessage403Response|CreateMessage\CreateMessage404Response|CreateMessage\CreateMessageDefaultResponse
    {
        $httpRequest = new Request(CreateMessage\CreateMessageRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => CreateMessage\CreateMessage201Response::fromResponse($httpResponse),
            400 => CreateMessage\CreateMessage400Response::fromResponse($httpResponse),
            403 => CreateMessage\CreateMessage403Response::fromResponse($httpResponse),
            404 => CreateMessage\CreateMessage404Response::fromResponse($httpResponse),
            default => CreateMessage\CreateMessageDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listMessagesByConversation(ListMessagesByConversation\ListMessagesByConversationRequest $request): \Mittwald\ApiClient\Client\UntypedResponse|ListMessagesByConversation\ListMessagesByConversation403Response|ListMessagesByConversation\ListMessagesByConversation404Response|ListMessagesByConversation\ListMessagesByConversationDefaultResponse
    {
        $httpRequest = new Request(ListMessagesByConversation\ListMessagesByConversationRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => \Mittwald\ApiClient\Client\UntypedResponse::fromResponse($httpResponse),
            403 => ListMessagesByConversation\ListMessagesByConversation403Response::fromResponse($httpResponse),
            404 => ListMessagesByConversation\ListMessagesByConversation404Response::fromResponse($httpResponse),
            default => ListMessagesByConversation\ListMessagesByConversationDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getCategory(GetCategory\GetCategoryRequest $request): GetCategory\GetCategory200Response|GetCategory\GetCategory400Response|GetCategory\GetCategory404Response|GetCategory\GetCategoryDefaultResponse
    {
        $httpRequest = new Request(GetCategory\GetCategoryRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetCategory\GetCategory200Response::fromResponse($httpResponse),
            400 => GetCategory\GetCategory400Response::fromResponse($httpResponse),
            404 => GetCategory\GetCategory404Response::fromResponse($httpResponse),
            default => GetCategory\GetCategoryDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getConversation(GetConversation\GetConversationRequest $request): GetConversation\GetConversation200Response|GetConversation\GetConversation400Response|GetConversation\GetConversation403Response|GetConversation\GetConversation404Response|GetConversation\GetConversationDefaultResponse
    {
        $httpRequest = new Request(GetConversation\GetConversationRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetConversation\GetConversation200Response::fromResponse($httpResponse),
            400 => GetConversation\GetConversation400Response::fromResponse($httpResponse),
            403 => GetConversation\GetConversation403Response::fromResponse($httpResponse),
            404 => GetConversation\GetConversation404Response::fromResponse($httpResponse),
            default => GetConversation\GetConversationDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function updateConversation(UpdateConversation\UpdateConversationRequest $request): UpdateConversation\UpdateConversation200Response|UpdateConversation\UpdateConversation400Response|UpdateConversation\UpdateConversation403Response|UpdateConversation\UpdateConversation404Response|UpdateConversation\UpdateConversationDefaultResponse
    {
        $httpRequest = new Request(UpdateConversation\UpdateConversationRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => UpdateConversation\UpdateConversation200Response::fromResponse($httpResponse),
            400 => UpdateConversation\UpdateConversation400Response::fromResponse($httpResponse),
            403 => UpdateConversation\UpdateConversation403Response::fromResponse($httpResponse),
            404 => UpdateConversation\UpdateConversation404Response::fromResponse($httpResponse),
            default => UpdateConversation\UpdateConversationDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listCategories(ListCategories\ListCategoriesRequest $request): ListCategories\ListCategories200Response|ListCategories\ListCategoriesDefaultResponse
    {
        $httpRequest = new Request(ListCategories\ListCategoriesRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListCategories\ListCategories200Response::fromResponse($httpResponse),
            default => ListCategories\ListCategoriesDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function requestFileUpload(RequestFileUpload\RequestFileUploadRequest $request): RequestFileUpload\RequestFileUpload201Response|RequestFileUpload\RequestFileUpload400Response|RequestFileUpload\RequestFileUploadDefaultResponse
    {
        $httpRequest = new Request(RequestFileUpload\RequestFileUploadRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => RequestFileUpload\RequestFileUpload201Response::fromResponse($httpResponse),
            400 => RequestFileUpload\RequestFileUpload400Response::fromResponse($httpResponse),
            default => RequestFileUpload\RequestFileUploadDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function setConversationStatus(SetConversationStatus\SetConversationStatusRequest $request): SetConversationStatus\SetConversationStatus200Response|SetConversationStatus\SetConversationStatus400Response|SetConversationStatus\SetConversationStatus403Response|SetConversationStatus\SetConversationStatus404Response|SetConversationStatus\SetConversationStatusDefaultResponse
    {
        $httpRequest = new Request(SetConversationStatus\SetConversationStatusRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => SetConversationStatus\SetConversationStatus200Response::fromResponse($httpResponse),
            400 => SetConversationStatus\SetConversationStatus400Response::fromResponse($httpResponse),
            403 => SetConversationStatus\SetConversationStatus403Response::fromResponse($httpResponse),
            404 => SetConversationStatus\SetConversationStatus404Response::fromResponse($httpResponse),
            default => SetConversationStatus\SetConversationStatusDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function updateMessage(UpdateMessage\UpdateMessageRequest $request): UpdateMessage\UpdateMessage200Response|UpdateMessage\UpdateMessage400Response|UpdateMessage\UpdateMessage403Response|UpdateMessage\UpdateMessage404Response|UpdateMessage\UpdateMessageDefaultResponse
    {
        $httpRequest = new Request(UpdateMessage\UpdateMessageRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => UpdateMessage\UpdateMessage200Response::fromResponse($httpResponse),
            400 => UpdateMessage\UpdateMessage400Response::fromResponse($httpResponse),
            403 => UpdateMessage\UpdateMessage403Response::fromResponse($httpResponse),
            404 => UpdateMessage\UpdateMessage404Response::fromResponse($httpResponse),
            default => UpdateMessage\UpdateMessageDefaultResponse::fromResponse($httpResponse),
        };
    }
}
