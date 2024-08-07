<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Conversation;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use Mittwald\ApiClient\Client\UntypedResponse;
use Mittwald\ApiClient\Error\UnexpectedResponseException;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\CreateConversation\CreateConversationBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\CreateConversation\CreateConversationCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\CreateConversation\CreateConversationDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\CreateConversation\CreateConversationRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\CreateConversation\CreateConversationTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\CreateMessage\CreateMessageBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\CreateMessage\CreateMessageCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\CreateMessage\CreateMessageDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\CreateMessage\CreateMessageForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\CreateMessage\CreateMessageNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\CreateMessage\CreateMessageRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\CreateMessage\CreateMessageTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\GetCategory\GetCategoryBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\GetCategory\GetCategoryDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\GetCategory\GetCategoryNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\GetCategory\GetCategoryOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\GetCategory\GetCategoryRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\GetCategory\GetCategoryTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\GetConversation\GetConversationBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\GetConversation\GetConversationDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\GetConversation\GetConversationForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\GetConversation\GetConversationNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\GetConversation\GetConversationOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\GetConversation\GetConversationRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\GetConversation\GetConversationTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\GetConversationMembers\GetConversationMembersBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\GetConversationMembers\GetConversationMembersDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\GetConversationMembers\GetConversationMembersForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\GetConversationMembers\GetConversationMembersNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\GetConversationMembers\GetConversationMembersOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\GetConversationMembers\GetConversationMembersRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\GetConversationMembers\GetConversationMembersTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\GetConversationPreferencesOfCustomer\GetConversationPreferencesOfCustomerBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\GetConversationPreferencesOfCustomer\GetConversationPreferencesOfCustomerDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\GetConversationPreferencesOfCustomer\GetConversationPreferencesOfCustomerForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\GetConversationPreferencesOfCustomer\GetConversationPreferencesOfCustomerNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\GetConversationPreferencesOfCustomer\GetConversationPreferencesOfCustomerOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\GetConversationPreferencesOfCustomer\GetConversationPreferencesOfCustomerRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\GetConversationPreferencesOfCustomer\GetConversationPreferencesOfCustomerTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\GetFileAccessToken\GetFileAccessTokenBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\GetFileAccessToken\GetFileAccessTokenDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\GetFileAccessToken\GetFileAccessTokenNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\GetFileAccessToken\GetFileAccessTokenOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\GetFileAccessToken\GetFileAccessTokenRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\GetFileAccessToken\GetFileAccessTokenTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\ListCategories\ListCategoriesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\ListCategories\ListCategoriesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\ListCategories\ListCategoriesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\ListCategories\ListCategoriesTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\ListConversations\ListConversationsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\ListConversations\ListConversationsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\ListConversations\ListConversationsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\ListConversations\ListConversationsTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\ListMessagesByConversation\ListMessagesByConversationDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\ListMessagesByConversation\ListMessagesByConversationForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\ListMessagesByConversation\ListMessagesByConversationNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\ListMessagesByConversation\ListMessagesByConversationRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\ListMessagesByConversation\ListMessagesByConversationTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\RequestFileUpload\RequestFileUploadBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\RequestFileUpload\RequestFileUploadCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\RequestFileUpload\RequestFileUploadDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\RequestFileUpload\RequestFileUploadRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\RequestFileUpload\RequestFileUploadTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\SetConversationStatus\SetConversationStatusBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\SetConversationStatus\SetConversationStatusDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\SetConversationStatus\SetConversationStatusForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\SetConversationStatus\SetConversationStatusNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\SetConversationStatus\SetConversationStatusOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\SetConversationStatus\SetConversationStatusRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\SetConversationStatus\SetConversationStatusTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\UpdateConversation\UpdateConversationBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\UpdateConversation\UpdateConversationDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\UpdateConversation\UpdateConversationForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\UpdateConversation\UpdateConversationNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\UpdateConversation\UpdateConversationOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\UpdateConversation\UpdateConversationRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\UpdateConversation\UpdateConversationTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\UpdateMessage\UpdateMessageBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\UpdateMessage\UpdateMessageDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\UpdateMessage\UpdateMessageForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\UpdateMessage\UpdateMessageNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\UpdateMessage\UpdateMessageOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\UpdateMessage\UpdateMessageRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\UpdateMessage\UpdateMessageTooManyRequestsResponse;

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
class ConversationClientImpl implements ConversationClient
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
     * @throws UnexpectedResponseException
     * @param CreateConversationRequest $request An object representing the request for this operation
     */
    public function createConversation(CreateConversationRequest $request): CreateConversationCreatedResponse
    {
        $httpRequest = new Request(CreateConversationRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 201) {
            return CreateConversationCreatedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => CreateConversationBadRequestResponse::fromResponse($httpResponse),
            429 => CreateConversationTooManyRequestsResponse::fromResponse($httpResponse),
            default => CreateConversationDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Send a new message in the conversation.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Conversation/operation/conversation-create-message
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CreateMessageRequest $request An object representing the request for this operation
     */
    public function createMessage(CreateMessageRequest $request): CreateMessageCreatedResponse
    {
        $httpRequest = new Request(CreateMessageRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 201) {
            return CreateMessageCreatedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => CreateMessageBadRequestResponse::fromResponse($httpResponse),
            403 => CreateMessageForbiddenResponse::fromResponse($httpResponse),
            404 => CreateMessageNotFoundResponse::fromResponse($httpResponse),
            429 => CreateMessageTooManyRequestsResponse::fromResponse($httpResponse),
            default => CreateMessageDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a specific conversation category.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Conversation/operation/conversation-get-category
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetCategoryRequest $request An object representing the request for this operation
     */
    public function getCategory(GetCategoryRequest $request): GetCategoryOKResponse
    {
        $httpRequest = new Request(GetCategoryRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetCategoryOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => GetCategoryBadRequestResponse::fromResponse($httpResponse),
            404 => GetCategoryNotFoundResponse::fromResponse($httpResponse),
            429 => GetCategoryTooManyRequestsResponse::fromResponse($httpResponse),
            default => GetCategoryDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a support conversation.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Conversation/operation/conversation-get-conversation
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetConversationRequest $request An object representing the request for this operation
     * @return GetConversationOKResponse The metadata of the conversation.
     * Does not contain messages send in the conversation.
     * Use [`/v2/conversations/{conversationId}/messages`](#/Conversation/conversation-service-get-messages-by-conversation-v2) to get the messages.
     */
    public function getConversation(GetConversationRequest $request): GetConversationOKResponse
    {
        $httpRequest = new Request(GetConversationRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetConversationOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => GetConversationBadRequestResponse::fromResponse($httpResponse),
            403 => GetConversationForbiddenResponse::fromResponse($httpResponse),
            404 => GetConversationNotFoundResponse::fromResponse($httpResponse),
            429 => GetConversationTooManyRequestsResponse::fromResponse($httpResponse),
            default => GetConversationDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get members of a support conversation.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Conversation/operation/conversation-get-conversation-members
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetConversationMembersRequest $request An object representing the request for this operation
     * @return GetConversationMembersOKResponse The members of the conversation.
     */
    public function getConversationMembers(GetConversationMembersRequest $request): GetConversationMembersOKResponse
    {
        $httpRequest = new Request(GetConversationMembersRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetConversationMembersOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => GetConversationMembersBadRequestResponse::fromResponse($httpResponse),
            403 => GetConversationMembersForbiddenResponse::fromResponse($httpResponse),
            404 => GetConversationMembersNotFoundResponse::fromResponse($httpResponse),
            429 => GetConversationMembersTooManyRequestsResponse::fromResponse($httpResponse),
            default => GetConversationMembersDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get preferences for customer conversations.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Conversation/operation/conversation-get-conversation-preferences-of-customer
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetConversationPreferencesOfCustomerRequest $request An object representing the request for this operation
     */
    public function getConversationPreferencesOfCustomer(GetConversationPreferencesOfCustomerRequest $request): GetConversationPreferencesOfCustomerOKResponse
    {
        $httpRequest = new Request(GetConversationPreferencesOfCustomerRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetConversationPreferencesOfCustomerOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => GetConversationPreferencesOfCustomerBadRequestResponse::fromResponse($httpResponse),
            403 => GetConversationPreferencesOfCustomerForbiddenResponse::fromResponse($httpResponse),
            404 => GetConversationPreferencesOfCustomerNotFoundResponse::fromResponse($httpResponse),
            429 => GetConversationPreferencesOfCustomerTooManyRequestsResponse::fromResponse($httpResponse),
            default => GetConversationPreferencesOfCustomerDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Request an access token for the File belonging to the Conversation.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Conversation/operation/conversation-get-file-access-token
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetFileAccessTokenRequest $request An object representing the request for this operation
     * @return GetFileAccessTokenOKResponse The file access token required to access the file linked with the conversation.
     */
    public function getFileAccessToken(GetFileAccessTokenRequest $request): GetFileAccessTokenOKResponse
    {
        $httpRequest = new Request(GetFileAccessTokenRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetFileAccessTokenOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => GetFileAccessTokenBadRequestResponse::fromResponse($httpResponse),
            404 => GetFileAccessTokenNotFoundResponse::fromResponse($httpResponse),
            429 => GetFileAccessTokenTooManyRequestsResponse::fromResponse($httpResponse),
            default => GetFileAccessTokenDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get all conversation categories.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Conversation/operation/conversation-list-categories
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListCategoriesRequest $request An object representing the request for this operation
     */
    public function listCategories(ListCategoriesRequest $request): ListCategoriesOKResponse
    {
        $httpRequest = new Request(ListCategoriesRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListCategoriesOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            429 => ListCategoriesTooManyRequestsResponse::fromResponse($httpResponse),
            default => ListCategoriesDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get all conversation the authenticated user has created or has access to.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Conversation/operation/conversation-list-conversations
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListConversationsRequest $request An object representing the request for this operation
     * @return ListConversationsOKResponse The conversations list ordered by creation date
     */
    public function listConversations(ListConversationsRequest $request): ListConversationsOKResponse
    {
        $httpRequest = new Request(ListConversationsRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListConversationsOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            429 => ListConversationsTooManyRequestsResponse::fromResponse($httpResponse),
            default => ListConversationsDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get all message of the conversation.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Conversation/operation/conversation-list-messages-by-conversation
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListMessagesByConversationRequest $request An object representing the request for this operation
     */
    public function listMessagesByConversation(ListMessagesByConversationRequest $request): UntypedResponse
    {
        $httpRequest = new Request(ListMessagesByConversationRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return UntypedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            403 => ListMessagesByConversationForbiddenResponse::fromResponse($httpResponse),
            404 => ListMessagesByConversationNotFoundResponse::fromResponse($httpResponse),
            429 => ListMessagesByConversationTooManyRequestsResponse::fromResponse($httpResponse),
            default => ListMessagesByConversationDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Request a file upload token for the conversation.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Conversation/operation/conversation-request-file-upload
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param RequestFileUploadRequest $request An object representing the request for this operation
     * @return RequestFileUploadCreatedResponse The upload token with additional rules describing what files can be uploaded using this token.
     * The token can be used with [`POST /v2/files`](#/Files/file-service-file-create) to upload a file that is
     * linked with the conversation.
     */
    public function requestFileUpload(RequestFileUploadRequest $request): RequestFileUploadCreatedResponse
    {
        $httpRequest = new Request(RequestFileUploadRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 201) {
            return RequestFileUploadCreatedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => RequestFileUploadBadRequestResponse::fromResponse($httpResponse),
            429 => RequestFileUploadTooManyRequestsResponse::fromResponse($httpResponse),
            default => RequestFileUploadDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update the status of a conversation.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Conversation/operation/conversation-set-conversation-status
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param SetConversationStatusRequest $request An object representing the request for this operation
     */
    public function setConversationStatus(SetConversationStatusRequest $request): SetConversationStatusOKResponse
    {
        $httpRequest = new Request(SetConversationStatusRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return SetConversationStatusOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => SetConversationStatusBadRequestResponse::fromResponse($httpResponse),
            403 => SetConversationStatusForbiddenResponse::fromResponse($httpResponse),
            404 => SetConversationStatusNotFoundResponse::fromResponse($httpResponse),
            429 => SetConversationStatusTooManyRequestsResponse::fromResponse($httpResponse),
            default => SetConversationStatusDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update the basic properties of the conversation.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Conversation/operation/conversation-update-conversation
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateConversationRequest $request An object representing the request for this operation
     */
    public function updateConversation(UpdateConversationRequest $request): UpdateConversationOKResponse
    {
        $httpRequest = new Request(UpdateConversationRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return UpdateConversationOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateConversationBadRequestResponse::fromResponse($httpResponse),
            403 => UpdateConversationForbiddenResponse::fromResponse($httpResponse),
            404 => UpdateConversationNotFoundResponse::fromResponse($httpResponse),
            429 => UpdateConversationTooManyRequestsResponse::fromResponse($httpResponse),
            default => UpdateConversationDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update the content of the message
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Conversation/operation/conversation-update-message
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateMessageRequest $request An object representing the request for this operation
     */
    public function updateMessage(UpdateMessageRequest $request): UpdateMessageOKResponse
    {
        $httpRequest = new Request(UpdateMessageRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return UpdateMessageOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateMessageBadRequestResponse::fromResponse($httpResponse),
            403 => UpdateMessageForbiddenResponse::fromResponse($httpResponse),
            404 => UpdateMessageNotFoundResponse::fromResponse($httpResponse),
            429 => UpdateMessageTooManyRequestsResponse::fromResponse($httpResponse),
            default => UpdateMessageDefaultResponse::fromResponse($httpResponse),
        });
    }
}
