<?php

namespace Mittwald\ApiClient\Generated\V2\Clients\Conversation;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use Mittwald\ApiClient\Client\UntypedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\CreateConversation\CreateConversation201Response;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\CreateConversation\CreateConversation400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\CreateConversation\CreateConversationDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\CreateConversation\CreateConversationRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\CreateMessage\CreateMessage201Response;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\CreateMessage\CreateMessage400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\CreateMessage\CreateMessage403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\CreateMessage\CreateMessage404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\CreateMessage\CreateMessageDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\CreateMessage\CreateMessageRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\GetCategory\GetCategory200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\GetCategory\GetCategory400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\GetCategory\GetCategory404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\GetCategory\GetCategoryDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\GetCategory\GetCategoryRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\GetConversation\GetConversation200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\GetConversation\GetConversation400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\GetConversation\GetConversation403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\GetConversation\GetConversation404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\GetConversation\GetConversationDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\GetConversation\GetConversationRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\ListCategories\ListCategories200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\ListCategories\ListCategoriesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\ListCategories\ListCategoriesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\ListConversations\ListConversations200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\ListConversations\ListConversationsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\ListConversations\ListConversationsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\ListMessagesByConversation\ListMessagesByConversation403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\ListMessagesByConversation\ListMessagesByConversation404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\ListMessagesByConversation\ListMessagesByConversationDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\ListMessagesByConversation\ListMessagesByConversationRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\RequestFileUpload\RequestFileUpload201Response;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\RequestFileUpload\RequestFileUpload400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\RequestFileUpload\RequestFileUploadDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\RequestFileUpload\RequestFileUploadRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\SetConversationStatus\SetConversationStatus200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\SetConversationStatus\SetConversationStatus400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\SetConversationStatus\SetConversationStatus403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\SetConversationStatus\SetConversationStatus404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\SetConversationStatus\SetConversationStatusDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\SetConversationStatus\SetConversationStatusRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\UpdateConversation\UpdateConversation200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\UpdateConversation\UpdateConversation400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\UpdateConversation\UpdateConversation403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\UpdateConversation\UpdateConversation404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\UpdateConversation\UpdateConversationDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\UpdateConversation\UpdateConversationRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\UpdateMessage\UpdateMessage200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\UpdateMessage\UpdateMessage400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\UpdateMessage\UpdateMessage403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\UpdateMessage\UpdateMessage404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\UpdateMessage\UpdateMessageDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\UpdateMessage\UpdateMessageRequest;

class ConversationClient
{
    private Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function createConversation(CreateConversationRequest $request): CreateConversation201Response|CreateConversation400Response|CreateConversationDefaultResponse
    {
        $httpRequest = new Request(CreateConversationRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => CreateConversation201Response::fromResponse($httpResponse),
            400 => CreateConversation400Response::fromResponse($httpResponse),
            default => CreateConversationDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listConversations(ListConversationsRequest $request): ListConversations200Response|ListConversationsDefaultResponse
    {
        $httpRequest = new Request(ListConversationsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListConversations200Response::fromResponse($httpResponse),
            default => ListConversationsDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function createMessage(CreateMessageRequest $request): CreateMessage201Response|CreateMessage400Response|CreateMessage403Response|CreateMessage404Response|CreateMessageDefaultResponse
    {
        $httpRequest = new Request(CreateMessageRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => CreateMessage201Response::fromResponse($httpResponse),
            400 => CreateMessage400Response::fromResponse($httpResponse),
            403 => CreateMessage403Response::fromResponse($httpResponse),
            404 => CreateMessage404Response::fromResponse($httpResponse),
            default => CreateMessageDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listMessagesByConversation(ListMessagesByConversationRequest $request): UntypedResponse|ListMessagesByConversation403Response|ListMessagesByConversation404Response|ListMessagesByConversationDefaultResponse
    {
        $httpRequest = new Request(ListMessagesByConversationRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => UntypedResponse::fromResponse($httpResponse),
            403 => ListMessagesByConversation403Response::fromResponse($httpResponse),
            404 => ListMessagesByConversation404Response::fromResponse($httpResponse),
            default => ListMessagesByConversationDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getCategory(GetCategoryRequest $request): GetCategory200Response|GetCategory400Response|GetCategory404Response|GetCategoryDefaultResponse
    {
        $httpRequest = new Request(GetCategoryRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetCategory200Response::fromResponse($httpResponse),
            400 => GetCategory400Response::fromResponse($httpResponse),
            404 => GetCategory404Response::fromResponse($httpResponse),
            default => GetCategoryDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getConversation(GetConversationRequest $request): GetConversation200Response|GetConversation400Response|GetConversation403Response|GetConversation404Response|GetConversationDefaultResponse
    {
        $httpRequest = new Request(GetConversationRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetConversation200Response::fromResponse($httpResponse),
            400 => GetConversation400Response::fromResponse($httpResponse),
            403 => GetConversation403Response::fromResponse($httpResponse),
            404 => GetConversation404Response::fromResponse($httpResponse),
            default => GetConversationDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function updateConversation(UpdateConversationRequest $request): UpdateConversation200Response|UpdateConversation400Response|UpdateConversation403Response|UpdateConversation404Response|UpdateConversationDefaultResponse
    {
        $httpRequest = new Request(UpdateConversationRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => UpdateConversation200Response::fromResponse($httpResponse),
            400 => UpdateConversation400Response::fromResponse($httpResponse),
            403 => UpdateConversation403Response::fromResponse($httpResponse),
            404 => UpdateConversation404Response::fromResponse($httpResponse),
            default => UpdateConversationDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listCategories(ListCategoriesRequest $request): ListCategories200Response|ListCategoriesDefaultResponse
    {
        $httpRequest = new Request(ListCategoriesRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListCategories200Response::fromResponse($httpResponse),
            default => ListCategoriesDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function requestFileUpload(RequestFileUploadRequest $request): RequestFileUpload201Response|RequestFileUpload400Response|RequestFileUploadDefaultResponse
    {
        $httpRequest = new Request(RequestFileUploadRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => RequestFileUpload201Response::fromResponse($httpResponse),
            400 => RequestFileUpload400Response::fromResponse($httpResponse),
            default => RequestFileUploadDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function setConversationStatus(SetConversationStatusRequest $request): SetConversationStatus200Response|SetConversationStatus400Response|SetConversationStatus403Response|SetConversationStatus404Response|SetConversationStatusDefaultResponse
    {
        $httpRequest = new Request(SetConversationStatusRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => SetConversationStatus200Response::fromResponse($httpResponse),
            400 => SetConversationStatus400Response::fromResponse($httpResponse),
            403 => SetConversationStatus403Response::fromResponse($httpResponse),
            404 => SetConversationStatus404Response::fromResponse($httpResponse),
            default => SetConversationStatusDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function updateMessage(UpdateMessageRequest $request): UpdateMessage200Response|UpdateMessage400Response|UpdateMessage403Response|UpdateMessage404Response|UpdateMessageDefaultResponse
    {
        $httpRequest = new Request(UpdateMessageRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => UpdateMessage200Response::fromResponse($httpResponse),
            400 => UpdateMessage400Response::fromResponse($httpResponse),
            403 => UpdateMessage403Response::fromResponse($httpResponse),
            404 => UpdateMessage404Response::fromResponse($httpResponse),
            default => UpdateMessageDefaultResponse::fromResponse($httpResponse),
        };
    }
}
