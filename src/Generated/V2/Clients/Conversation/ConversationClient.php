<?php

namespace Mittwald\ApiClient\Generated\V2\Clients\Conversation;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
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
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\GetFileAccessToken\GetFileAccessToken200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\GetFileAccessToken\GetFileAccessToken400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\GetFileAccessToken\GetFileAccessToken404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\GetFileAccessToken\GetFileAccessTokenDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\GetFileAccessToken\GetFileAccessTokenRequest;
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

/**
 * Client for Conversation API
 *
 * The conversation API allows you to manage your support conversations.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class ConversationClient
{
    private Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Create a conversation.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Conversation/operation/conversation-create-conversation
     * @throws GuzzleException
     * @param CreateConversation\CreateConversationRequest $request An object representing the request for this operation
     * @return CreateConversation\CreateConversation201Response|CreateConversation\CreateConversation400Response|CreateConversation\CreateConversationDefaultResponse
     */
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

    /**
     * Get all conversation the authenticated user has created or has access to.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Conversation/operation/conversation-list-conversations
     * @throws GuzzleException
     * @param ListConversations\ListConversationsRequest $request An object representing the request for this operation
     * @return ListConversations\ListConversations200Response|ListConversations\ListConversationsDefaultResponse The conversations list ordered by creation date
     */
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

    /**
     * Send a new message in the conversation.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Conversation/operation/conversation-create-message
     * @throws GuzzleException
     * @param CreateMessage\CreateMessageRequest $request An object representing the request for this operation
     * @return CreateMessage\CreateMessage201Response|CreateMessage\CreateMessage400Response|CreateMessage\CreateMessage403Response|CreateMessage\CreateMessage404Response|CreateMessage\CreateMessageDefaultResponse
     */
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

    /**
     * Get all message of the conversation.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Conversation/operation/conversation-list-messages-by-conversation
     * @throws GuzzleException
     * @param ListMessagesByConversation\ListMessagesByConversationRequest $request An object representing the request for this operation
     * @return UntypedResponse|ListMessagesByConversation\ListMessagesByConversation403Response|ListMessagesByConversation\ListMessagesByConversation404Response|ListMessagesByConversation\ListMessagesByConversationDefaultResponse
     */
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

    /**
     * Get a specific conversation category.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Conversation/operation/conversation-get-category
     * @throws GuzzleException
     * @param GetCategory\GetCategoryRequest $request An object representing the request for this operation
     * @return GetCategory\GetCategory200Response|GetCategory\GetCategory400Response|GetCategory\GetCategory404Response|GetCategory\GetCategoryDefaultResponse
     */
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

    /**
     * Get a support conversation.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Conversation/operation/conversation-get-conversation
     * @throws GuzzleException
     * @param GetConversation\GetConversationRequest $request An object representing the request for this operation
     * @return GetConversation\GetConversation200Response|GetConversation\GetConversation400Response|GetConversation\GetConversation403Response|GetConversation\GetConversation404Response|GetConversation\GetConversationDefaultResponse The metadata of the conversation.
     * Does not contain messages send in the conversation.
     * Use [`/v2/conversations/{conversationId}/messages`](#/Conversation/conversation-service-get-messages-by-conversation-v2) to get the messages.
     */
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

    /**
     * Update the basic properties of the conversation.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Conversation/operation/conversation-update-conversation
     * @throws GuzzleException
     * @param UpdateConversation\UpdateConversationRequest $request An object representing the request for this operation
     * @return UpdateConversation\UpdateConversation200Response|UpdateConversation\UpdateConversation400Response|UpdateConversation\UpdateConversation403Response|UpdateConversation\UpdateConversation404Response|UpdateConversation\UpdateConversationDefaultResponse
     */
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

    /**
     * Request an access token for the File belonging to the Conversation.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Conversation/operation/conversation-get-file-access-token
     * @throws GuzzleException
     * @param GetFileAccessToken\GetFileAccessTokenRequest $request An object representing the request for this operation
     * @return GetFileAccessToken\GetFileAccessToken200Response|GetFileAccessToken\GetFileAccessToken400Response|GetFileAccessToken\GetFileAccessToken404Response|GetFileAccessToken\GetFileAccessTokenDefaultResponse The file access token required to access the file linked with the conversation.
     */
    public function getFileAccessToken(GetFileAccessTokenRequest $request): GetFileAccessToken200Response|GetFileAccessToken400Response|GetFileAccessToken404Response|GetFileAccessTokenDefaultResponse
    {
        $httpRequest = new Request(GetFileAccessTokenRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetFileAccessToken200Response::fromResponse($httpResponse),
            400 => GetFileAccessToken400Response::fromResponse($httpResponse),
            404 => GetFileAccessToken404Response::fromResponse($httpResponse),
            default => GetFileAccessTokenDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Get all conversation categories.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Conversation/operation/conversation-list-categories
     * @throws GuzzleException
     * @param ListCategories\ListCategoriesRequest $request An object representing the request for this operation
     * @return ListCategories\ListCategories200Response|ListCategories\ListCategoriesDefaultResponse
     */
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

    /**
     * Request a file upload token for the conversation.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Conversation/operation/conversation-request-file-upload
     * @throws GuzzleException
     * @param RequestFileUpload\RequestFileUploadRequest $request An object representing the request for this operation
     * @return RequestFileUpload\RequestFileUpload201Response|RequestFileUpload\RequestFileUpload400Response|RequestFileUpload\RequestFileUploadDefaultResponse The upload token with additional rules describing what files can be uploaded using this token.
     * The token can be used with [`POST /v2/files`](#/Files/file-service-file-create) to upload a file that is
     * linked with the conversation.
     */
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

    /**
     * Update the status of a conversation.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Conversation/operation/conversation-set-conversation-status
     * @throws GuzzleException
     * @param SetConversationStatus\SetConversationStatusRequest $request An object representing the request for this operation
     * @return SetConversationStatus\SetConversationStatus200Response|SetConversationStatus\SetConversationStatus400Response|SetConversationStatus\SetConversationStatus403Response|SetConversationStatus\SetConversationStatus404Response|SetConversationStatus\SetConversationStatusDefaultResponse
     */
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

    /**
     * Update the content of the message
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Conversation/operation/conversation-update-message
     * @throws GuzzleException
     * @param UpdateMessage\UpdateMessageRequest $request An object representing the request for this operation
     * @return UpdateMessage\UpdateMessage200Response|UpdateMessage\UpdateMessage400Response|UpdateMessage\UpdateMessage403Response|UpdateMessage\UpdateMessage404Response|UpdateMessage\UpdateMessageDefaultResponse
     */
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
