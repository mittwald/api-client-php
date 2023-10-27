<?php

namespace Mittwald\ApiClient\Generated\V2\Clients\Customer;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use Mittwald\ApiClient\Client\EmptyResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\AcceptCustomerInvite\AcceptCustomerInvite400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\AcceptCustomerInvite\AcceptCustomerInvite403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\AcceptCustomerInvite\AcceptCustomerInvite412Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\AcceptCustomerInvite\AcceptCustomerInviteDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\AcceptCustomerInvite\AcceptCustomerInviteRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCategory\CreateCategory201Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCategory\CreateCategory400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCategory\CreateCategoryDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCategory\CreateCategoryRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCustomer\CreateCustomer201Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCustomer\CreateCustomer400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCustomer\CreateCustomerDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCustomer\CreateCustomerRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCustomerInvite\CreateCustomerInvite201Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCustomerInvite\CreateCustomerInvite400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCustomerInvite\CreateCustomerInvite409Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCustomerInvite\CreateCustomerInviteDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCustomerInvite\CreateCustomerInviteRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeclineCustomerInvite\DeclineCustomerInviteDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeclineCustomerInvite\DeclineCustomerInviteRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeleteCategory\DeleteCategory200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeleteCategory\DeleteCategoryDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeleteCategory\DeleteCategoryRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeleteCustomer\DeleteCustomer200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeleteCustomer\DeleteCustomer404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeleteCustomer\DeleteCustomerDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeleteCustomer\DeleteCustomerRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeleteCustomerInvite\DeleteCustomerInviteDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeleteCustomerInvite\DeleteCustomerInviteRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeleteCustomerMembership\DeleteCustomerMembershipDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeleteCustomerMembership\DeleteCustomerMembershipRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomer\GetCustomer200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomer\GetCustomer404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomer\GetCustomerDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomer\GetCustomerRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerCategory\GetCustomerCategory200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerCategory\GetCustomerCategoryDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerCategory\GetCustomerCategoryRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerInvite\GetCustomerInvite200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerInvite\GetCustomerInvite404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerInvite\GetCustomerInviteDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerInvite\GetCustomerInviteRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerMembership\GetCustomerMembership200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerMembership\GetCustomerMembership404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerMembership\GetCustomerMembershipDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerMembership\GetCustomerMembershipRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerTokenInvite\GetCustomerTokenInvite200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerTokenInvite\GetCustomerTokenInvite404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerTokenInvite\GetCustomerTokenInviteDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerTokenInvite\GetCustomerTokenInviteRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\IsCustomerLegallyCompetent\IsCustomerLegallyCompetent200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\IsCustomerLegallyCompetent\IsCustomerLegallyCompetent400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\IsCustomerLegallyCompetent\IsCustomerLegallyCompetent404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\IsCustomerLegallyCompetent\IsCustomerLegallyCompetentDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\IsCustomerLegallyCompetent\IsCustomerLegallyCompetentRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\LeaveCustomer\LeaveCustomerDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\LeaveCustomer\LeaveCustomerRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListCustomerInvites\ListCustomerInvites200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListCustomerInvites\ListCustomerInvites404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListCustomerInvites\ListCustomerInvitesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListCustomerInvites\ListCustomerInvitesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListCustomerMemberships\ListCustomerMemberships200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListCustomerMemberships\ListCustomerMemberships404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListCustomerMemberships\ListCustomerMembershipsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListCustomerMemberships\ListCustomerMembershipsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListCustomers\ListCustomers200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListCustomers\ListCustomersDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListCustomers\ListCustomersRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListInvitesForCustomer\ListInvitesForCustomer200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListInvitesForCustomer\ListInvitesForCustomer404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListInvitesForCustomer\ListInvitesForCustomerDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListInvitesForCustomer\ListInvitesForCustomerRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListMembershipsForCustomer\ListMembershipsForCustomer200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListMembershipsForCustomer\ListMembershipsForCustomer404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListMembershipsForCustomer\ListMembershipsForCustomerDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListMembershipsForCustomer\ListMembershipsForCustomerRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListOfCustomerCategories\ListOfCustomerCategories200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListOfCustomerCategories\ListOfCustomerCategoriesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListOfCustomerCategories\ListOfCustomerCategoriesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\RemoveAvatar\RemoveAvatar400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\RemoveAvatar\RemoveAvatar401Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\RemoveAvatar\RemoveAvatar500Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\RemoveAvatar\RemoveAvatarRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\RequestAvatarUpload\RequestAvatarUpload200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\RequestAvatarUpload\RequestAvatarUpload400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\RequestAvatarUpload\RequestAvatarUpload401Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\RequestAvatarUpload\RequestAvatarUpload500Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\RequestAvatarUpload\RequestAvatarUploadRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ResendCustomerInviteMail\ResendCustomerInviteMail403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ResendCustomerInviteMail\ResendCustomerInviteMailDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ResendCustomerInviteMail\ResendCustomerInviteMailRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\UpdateCategory\UpdateCategory200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\UpdateCategory\UpdateCategory400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\UpdateCategory\UpdateCategory404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\UpdateCategory\UpdateCategoryDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\UpdateCategory\UpdateCategoryRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\UpdateCustomer\UpdateCustomer200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\UpdateCustomer\UpdateCustomer400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\UpdateCustomer\UpdateCustomer404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\UpdateCustomer\UpdateCustomerDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\UpdateCustomer\UpdateCustomerRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\UpdateCustomerMembership\UpdateCustomerMembershipDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\UpdateCustomerMembership\UpdateCustomerMembershipRequest;

/**
 * Client for Customer API
 *
 * The customer API allows you to manage your own organizations and users.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class CustomerClient
{
    private Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Accept a CustomerInvite.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-accept-customer-invite
     * @throws GuzzleException
     * @param AcceptCustomerInvite\AcceptCustomerInviteRequest $request An object representing the request for this operation
     * @return EmptyResponse|AcceptCustomerInvite\AcceptCustomerInvite400Response|AcceptCustomerInvite\AcceptCustomerInvite403Response|AcceptCustomerInvite\AcceptCustomerInvite412Response|AcceptCustomerInvite\AcceptCustomerInviteDefaultResponse
     */
    public function acceptCustomerInvite(AcceptCustomerInviteRequest $request): EmptyResponse|AcceptCustomerInvite400Response|AcceptCustomerInvite403Response|AcceptCustomerInvite412Response|AcceptCustomerInviteDefaultResponse
    {
        $httpRequest = new Request(AcceptCustomerInviteRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => AcceptCustomerInvite400Response::fromResponse($httpResponse),
            403 => AcceptCustomerInvite403Response::fromResponse($httpResponse),
            412 => AcceptCustomerInvite412Response::fromResponse($httpResponse),
            default => AcceptCustomerInviteDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Create a new customer category.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-create-category
     * @throws GuzzleException
     * @param CreateCategory\CreateCategoryRequest $request An object representing the request for this operation
     * @return CreateCategory\CreateCategory201Response|CreateCategory\CreateCategory400Response|CreateCategory\CreateCategoryDefaultResponse The new customer category
     */
    public function createCategory(CreateCategoryRequest $request): CreateCategory201Response|CreateCategory400Response|CreateCategoryDefaultResponse
    {
        $httpRequest = new Request(CreateCategoryRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => CreateCategory201Response::fromResponse($httpResponse),
            400 => CreateCategory400Response::fromResponse($httpResponse),
            default => CreateCategoryDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Get all customer categories.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-list-of-customer-categories
     * @throws GuzzleException
     * @param ListOfCustomerCategories\ListOfCustomerCategoriesRequest $request An object representing the request for this operation
     * @return ListOfCustomerCategories\ListOfCustomerCategories200Response|ListOfCustomerCategories\ListOfCustomerCategoriesDefaultResponse Object containing the list of customer categories
     */
    public function listOfCustomerCategories(ListOfCustomerCategoriesRequest $request): ListOfCustomerCategories200Response|ListOfCustomerCategoriesDefaultResponse
    {
        $httpRequest = new Request(ListOfCustomerCategoriesRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListOfCustomerCategories200Response::fromResponse($httpResponse),
            default => ListOfCustomerCategoriesDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Create a CustomerInvite.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-create-customer-invite
     * @throws GuzzleException
     * @param CreateCustomerInvite\CreateCustomerInviteRequest $request An object representing the request for this operation
     * @return CreateCustomerInvite\CreateCustomerInvite201Response|CreateCustomerInvite\CreateCustomerInvite400Response|CreateCustomerInvite\CreateCustomerInvite409Response|CreateCustomerInvite\CreateCustomerInviteDefaultResponse
     */
    public function createCustomerInvite(CreateCustomerInviteRequest $request): CreateCustomerInvite201Response|CreateCustomerInvite400Response|CreateCustomerInvite409Response|CreateCustomerInviteDefaultResponse
    {
        $httpRequest = new Request(CreateCustomerInviteRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => CreateCustomerInvite201Response::fromResponse($httpResponse),
            400 => CreateCustomerInvite400Response::fromResponse($httpResponse),
            409 => CreateCustomerInvite409Response::fromResponse($httpResponse),
            default => CreateCustomerInviteDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Create a new customer profile.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-create-customer
     * @throws GuzzleException
     * @param CreateCustomer\CreateCustomerRequest $request An object representing the request for this operation
     * @return CreateCustomer\CreateCustomer201Response|CreateCustomer\CreateCustomer400Response|CreateCustomer\CreateCustomerDefaultResponse The new customer
     */
    public function createCustomer(CreateCustomerRequest $request): CreateCustomer201Response|CreateCustomer400Response|CreateCustomerDefaultResponse
    {
        $httpRequest = new Request(CreateCustomerRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => CreateCustomer201Response::fromResponse($httpResponse),
            400 => CreateCustomer400Response::fromResponse($httpResponse),
            default => CreateCustomerDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Get all customer profiles the authenticated user has access to.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-list-customers
     * @throws GuzzleException
     * @param ListCustomers\ListCustomersRequest $request An object representing the request for this operation
     * @return ListCustomers\ListCustomers200Response|ListCustomers\ListCustomersDefaultResponse The list of customers the user is a member for
     */
    public function listCustomers(ListCustomersRequest $request): ListCustomers200Response|ListCustomersDefaultResponse
    {
        $httpRequest = new Request(ListCustomersRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListCustomers200Response::fromResponse($httpResponse),
            default => ListCustomersDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Decline a CustomerInvite.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-decline-customer-invite
     * @throws GuzzleException
     * @param DeclineCustomerInvite\DeclineCustomerInviteRequest $request An object representing the request for this operation
     * @return EmptyResponse|DeclineCustomerInvite\DeclineCustomerInviteDefaultResponse
     */
    public function declineCustomerInvite(DeclineCustomerInviteRequest $request): EmptyResponse|DeclineCustomerInviteDefaultResponse
    {
        $httpRequest = new Request(DeclineCustomerInviteRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            default => DeclineCustomerInviteDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Delete a customer category.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-delete-category
     * @throws GuzzleException
     * @param DeleteCategory\DeleteCategoryRequest $request An object representing the request for this operation
     * @return DeleteCategory\DeleteCategory200Response|DeleteCategory\DeleteCategoryDefaultResponse
     */
    public function deleteCategory(DeleteCategoryRequest $request): DeleteCategory200Response|DeleteCategoryDefaultResponse
    {
        $httpRequest = new Request(DeleteCategoryRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => DeleteCategory200Response::fromResponse($httpResponse),
            default => DeleteCategoryDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Get a customer category.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-get-customer-category
     * @throws GuzzleException
     * @param GetCustomerCategory\GetCustomerCategoryRequest $request An object representing the request for this operation
     * @return GetCustomerCategory\GetCustomerCategory200Response|GetCustomerCategory\GetCustomerCategoryDefaultResponse Returns the customer category
     */
    public function getCustomerCategory(GetCustomerCategoryRequest $request): GetCustomerCategory200Response|GetCustomerCategoryDefaultResponse
    {
        $httpRequest = new Request(GetCustomerCategoryRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetCustomerCategory200Response::fromResponse($httpResponse),
            default => GetCustomerCategoryDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Update a customer category.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-update-category
     * @throws GuzzleException
     * @param UpdateCategory\UpdateCategoryRequest $request An object representing the request for this operation
     * @return UpdateCategory\UpdateCategory200Response|UpdateCategory\UpdateCategory400Response|UpdateCategory\UpdateCategory404Response|UpdateCategory\UpdateCategoryDefaultResponse The updated customer category
     */
    public function updateCategory(UpdateCategoryRequest $request): UpdateCategory200Response|UpdateCategory400Response|UpdateCategory404Response|UpdateCategoryDefaultResponse
    {
        $httpRequest = new Request(UpdateCategoryRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => UpdateCategory200Response::fromResponse($httpResponse),
            400 => UpdateCategory400Response::fromResponse($httpResponse),
            404 => UpdateCategory404Response::fromResponse($httpResponse),
            default => UpdateCategoryDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Delete a CustomerInvite.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-delete-customer-invite
     * @throws GuzzleException
     * @param DeleteCustomerInvite\DeleteCustomerInviteRequest $request An object representing the request for this operation
     * @return EmptyResponse|DeleteCustomerInvite\DeleteCustomerInviteDefaultResponse
     */
    public function deleteCustomerInvite(DeleteCustomerInviteRequest $request): EmptyResponse|DeleteCustomerInviteDefaultResponse
    {
        $httpRequest = new Request(DeleteCustomerInviteRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            default => DeleteCustomerInviteDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Get a CustomerInvite.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-get-customer-invite
     * @throws GuzzleException
     * @param GetCustomerInvite\GetCustomerInviteRequest $request An object representing the request for this operation
     * @return GetCustomerInvite\GetCustomerInvite200Response|GetCustomerInvite\GetCustomerInvite404Response|GetCustomerInvite\GetCustomerInviteDefaultResponse OK
     */
    public function getCustomerInvite(GetCustomerInviteRequest $request): GetCustomerInvite200Response|GetCustomerInvite404Response|GetCustomerInviteDefaultResponse
    {
        $httpRequest = new Request(GetCustomerInviteRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetCustomerInvite200Response::fromResponse($httpResponse),
            404 => GetCustomerInvite404Response::fromResponse($httpResponse),
            default => GetCustomerInviteDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Delete a CustomerMembership.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-delete-customer-membership
     * @throws GuzzleException
     * @param DeleteCustomerMembership\DeleteCustomerMembershipRequest $request An object representing the request for this operation
     * @return EmptyResponse|DeleteCustomerMembership\DeleteCustomerMembershipDefaultResponse
     */
    public function deleteCustomerMembership(DeleteCustomerMembershipRequest $request): EmptyResponse|DeleteCustomerMembershipDefaultResponse
    {
        $httpRequest = new Request(DeleteCustomerMembershipRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            default => DeleteCustomerMembershipDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Get a CustomerMembership.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-get-customer-membership
     * @throws GuzzleException
     * @param GetCustomerMembership\GetCustomerMembershipRequest $request An object representing the request for this operation
     * @return GetCustomerMembership\GetCustomerMembership200Response|GetCustomerMembership\GetCustomerMembership404Response|GetCustomerMembership\GetCustomerMembershipDefaultResponse OK
     */
    public function getCustomerMembership(GetCustomerMembershipRequest $request): GetCustomerMembership200Response|GetCustomerMembership404Response|GetCustomerMembershipDefaultResponse
    {
        $httpRequest = new Request(GetCustomerMembershipRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetCustomerMembership200Response::fromResponse($httpResponse),
            404 => GetCustomerMembership404Response::fromResponse($httpResponse),
            default => GetCustomerMembershipDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Update a CustomerMembership.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-update-customer-membership
     * @throws GuzzleException
     * @param UpdateCustomerMembership\UpdateCustomerMembershipRequest $request An object representing the request for this operation
     * @return EmptyResponse|UpdateCustomerMembership\UpdateCustomerMembershipDefaultResponse
     */
    public function updateCustomerMembership(UpdateCustomerMembershipRequest $request): EmptyResponse|UpdateCustomerMembershipDefaultResponse
    {
        $httpRequest = new Request(UpdateCustomerMembershipRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            default => UpdateCustomerMembershipDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Delete a customer profile.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-delete-customer
     * @throws GuzzleException
     * @param DeleteCustomer\DeleteCustomerRequest $request An object representing the request for this operation
     * @return DeleteCustomer\DeleteCustomer200Response|DeleteCustomer\DeleteCustomer404Response|DeleteCustomer\DeleteCustomerDefaultResponse
     */
    public function deleteCustomer(DeleteCustomerRequest $request): DeleteCustomer200Response|DeleteCustomer404Response|DeleteCustomerDefaultResponse
    {
        $httpRequest = new Request(DeleteCustomerRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => DeleteCustomer200Response::fromResponse($httpResponse),
            404 => DeleteCustomer404Response::fromResponse($httpResponse),
            default => DeleteCustomerDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Get a customer profile.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-get-customer
     * @throws GuzzleException
     * @param GetCustomer\GetCustomerRequest $request An object representing the request for this operation
     * @return GetCustomer\GetCustomer200Response|GetCustomer\GetCustomer404Response|GetCustomer\GetCustomerDefaultResponse The customer object
     */
    public function getCustomer(GetCustomerRequest $request): GetCustomer200Response|GetCustomer404Response|GetCustomerDefaultResponse
    {
        $httpRequest = new Request(GetCustomerRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetCustomer200Response::fromResponse($httpResponse),
            404 => GetCustomer404Response::fromResponse($httpResponse),
            default => GetCustomerDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Update a customer profile.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-update-customer
     * @throws GuzzleException
     * @param UpdateCustomer\UpdateCustomerRequest $request An object representing the request for this operation
     * @return UpdateCustomer\UpdateCustomer200Response|UpdateCustomer\UpdateCustomer400Response|UpdateCustomer\UpdateCustomer404Response|UpdateCustomer\UpdateCustomerDefaultResponse Name and id of the updated customer
     */
    public function updateCustomer(UpdateCustomerRequest $request): UpdateCustomer200Response|UpdateCustomer400Response|UpdateCustomer404Response|UpdateCustomerDefaultResponse
    {
        $httpRequest = new Request(UpdateCustomerRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => UpdateCustomer200Response::fromResponse($httpResponse),
            400 => UpdateCustomer400Response::fromResponse($httpResponse),
            404 => UpdateCustomer404Response::fromResponse($httpResponse),
            default => UpdateCustomerDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Get a CustomerInvite by token.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-get-customer-token-invite
     * @throws GuzzleException
     * @param GetCustomerTokenInvite\GetCustomerTokenInviteRequest $request An object representing the request for this operation
     * @return GetCustomerTokenInvite\GetCustomerTokenInvite200Response|GetCustomerTokenInvite\GetCustomerTokenInvite404Response|GetCustomerTokenInvite\GetCustomerTokenInviteDefaultResponse
     */
    public function getCustomerTokenInvite(GetCustomerTokenInviteRequest $request): GetCustomerTokenInvite200Response|GetCustomerTokenInvite404Response|GetCustomerTokenInviteDefaultResponse
    {
        $httpRequest = new Request(GetCustomerTokenInviteRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetCustomerTokenInvite200Response::fromResponse($httpResponse),
            404 => GetCustomerTokenInvite404Response::fromResponse($httpResponse),
            default => GetCustomerTokenInviteDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Check if the customer profile has a valid contract partner configured.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-is-customer-legally-competent
     * @throws GuzzleException
     * @param IsCustomerLegallyCompetent\IsCustomerLegallyCompetentRequest $request An object representing the request for this operation
     * @return IsCustomerLegallyCompetent\IsCustomerLegallyCompetent200Response|IsCustomerLegallyCompetent\IsCustomerLegallyCompetent400Response|IsCustomerLegallyCompetent\IsCustomerLegallyCompetent404Response|IsCustomerLegallyCompetent\IsCustomerLegallyCompetentDefaultResponse Check if customer is allowed to order a paid item.
     */
    public function isCustomerLegallyCompetent(IsCustomerLegallyCompetentRequest $request): IsCustomerLegallyCompetent200Response|IsCustomerLegallyCompetent400Response|IsCustomerLegallyCompetent404Response|IsCustomerLegallyCompetentDefaultResponse
    {
        $httpRequest = new Request(IsCustomerLegallyCompetentRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => IsCustomerLegallyCompetent200Response::fromResponse($httpResponse),
            400 => IsCustomerLegallyCompetent400Response::fromResponse($httpResponse),
            404 => IsCustomerLegallyCompetent404Response::fromResponse($httpResponse),
            default => IsCustomerLegallyCompetentDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Leave a Customer.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-leave-customer
     * @throws GuzzleException
     * @param LeaveCustomer\LeaveCustomerRequest $request An object representing the request for this operation
     * @return EmptyResponse|LeaveCustomer\LeaveCustomerDefaultResponse
     */
    public function leaveCustomer(LeaveCustomerRequest $request): EmptyResponse|LeaveCustomerDefaultResponse
    {
        $httpRequest = new Request(LeaveCustomerRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            default => LeaveCustomerDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * List CustomerInvites belonging to the executing user.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-list-customer-invites
     * @throws GuzzleException
     * @param ListCustomerInvites\ListCustomerInvitesRequest $request An object representing the request for this operation
     * @return ListCustomerInvites\ListCustomerInvites200Response|ListCustomerInvites\ListCustomerInvites404Response|ListCustomerInvites\ListCustomerInvitesDefaultResponse OK
     */
    public function listCustomerInvites(ListCustomerInvitesRequest $request): ListCustomerInvites200Response|ListCustomerInvites404Response|ListCustomerInvitesDefaultResponse
    {
        $httpRequest = new Request(ListCustomerInvitesRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListCustomerInvites200Response::fromResponse($httpResponse),
            404 => ListCustomerInvites404Response::fromResponse($httpResponse),
            default => ListCustomerInvitesDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * List CustomerMemberships belonging to the executing user.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-list-customer-memberships
     * @throws GuzzleException
     * @param ListCustomerMemberships\ListCustomerMembershipsRequest $request An object representing the request for this operation
     * @return ListCustomerMemberships\ListCustomerMemberships200Response|ListCustomerMemberships\ListCustomerMemberships404Response|ListCustomerMemberships\ListCustomerMembershipsDefaultResponse OK
     */
    public function listCustomerMemberships(ListCustomerMembershipsRequest $request): ListCustomerMemberships200Response|ListCustomerMemberships404Response|ListCustomerMembershipsDefaultResponse
    {
        $httpRequest = new Request(ListCustomerMembershipsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListCustomerMemberships200Response::fromResponse($httpResponse),
            404 => ListCustomerMemberships404Response::fromResponse($httpResponse),
            default => ListCustomerMembershipsDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * List Invites belonging to a Customer.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-list-invites-for-customer
     * @throws GuzzleException
     * @param ListInvitesForCustomer\ListInvitesForCustomerRequest $request An object representing the request for this operation
     * @return ListInvitesForCustomer\ListInvitesForCustomer200Response|ListInvitesForCustomer\ListInvitesForCustomer404Response|ListInvitesForCustomer\ListInvitesForCustomerDefaultResponse OK
     */
    public function listInvitesForCustomer(ListInvitesForCustomerRequest $request): ListInvitesForCustomer200Response|ListInvitesForCustomer404Response|ListInvitesForCustomerDefaultResponse
    {
        $httpRequest = new Request(ListInvitesForCustomerRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListInvitesForCustomer200Response::fromResponse($httpResponse),
            404 => ListInvitesForCustomer404Response::fromResponse($httpResponse),
            default => ListInvitesForCustomerDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * List Memberships belonging to a Customer.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-list-memberships-for-customer
     * @throws GuzzleException
     * @param ListMembershipsForCustomer\ListMembershipsForCustomerRequest $request An object representing the request for this operation
     * @return ListMembershipsForCustomer\ListMembershipsForCustomer200Response|ListMembershipsForCustomer\ListMembershipsForCustomer404Response|ListMembershipsForCustomer\ListMembershipsForCustomerDefaultResponse OK
     */
    public function listMembershipsForCustomer(ListMembershipsForCustomerRequest $request): ListMembershipsForCustomer200Response|ListMembershipsForCustomer404Response|ListMembershipsForCustomerDefaultResponse
    {
        $httpRequest = new Request(ListMembershipsForCustomerRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListMembershipsForCustomer200Response::fromResponse($httpResponse),
            404 => ListMembershipsForCustomer404Response::fromResponse($httpResponse),
            default => ListMembershipsForCustomerDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Remove the avatar picture of the customer profile.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-remove-avatar
     * @throws GuzzleException
     * @param RemoveAvatar\RemoveAvatarRequest $request An object representing the request for this operation
     * @return EmptyResponse|RemoveAvatar\RemoveAvatar400Response|RemoveAvatar\RemoveAvatar401Response|RemoveAvatar\RemoveAvatar500Response Avatar removal was successful
     */
    public function removeAvatar(RemoveAvatarRequest $request): EmptyResponse|RemoveAvatar400Response|RemoveAvatar401Response|RemoveAvatar500Response
    {
        $httpRequest = new Request(RemoveAvatarRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => RemoveAvatar400Response::fromResponse($httpResponse),
            401 => RemoveAvatar401Response::fromResponse($httpResponse),
            500 => RemoveAvatar500Response::fromResponse($httpResponse),
        };
    }

    /**
     * Request a new avatar upload for the customer profile.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-request-avatar-upload
     * @throws GuzzleException
     * @param RequestAvatarUpload\RequestAvatarUploadRequest $request An object representing the request for this operation
     * @return RequestAvatarUpload\RequestAvatarUpload200Response|RequestAvatarUpload\RequestAvatarUpload400Response|RequestAvatarUpload\RequestAvatarUpload401Response|RequestAvatarUpload\RequestAvatarUpload500Response Avatar request was successful. Use the `refId` to upload your avatar to the file service.
     */
    public function requestAvatarUpload(RequestAvatarUploadRequest $request): RequestAvatarUpload200Response|RequestAvatarUpload400Response|RequestAvatarUpload401Response|RequestAvatarUpload500Response
    {
        $httpRequest = new Request(RequestAvatarUploadRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => RequestAvatarUpload200Response::fromResponse($httpResponse),
            400 => RequestAvatarUpload400Response::fromResponse($httpResponse),
            401 => RequestAvatarUpload401Response::fromResponse($httpResponse),
            500 => RequestAvatarUpload500Response::fromResponse($httpResponse),
        };
    }

    /**
     * Resend the mail for a CustomerInvite.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-resend-customer-invite-mail
     * @throws GuzzleException
     * @param ResendCustomerInviteMail\ResendCustomerInviteMailRequest $request An object representing the request for this operation
     * @return EmptyResponse|ResendCustomerInviteMail\ResendCustomerInviteMail403Response|ResendCustomerInviteMail\ResendCustomerInviteMailDefaultResponse
     */
    public function resendCustomerInviteMail(ResendCustomerInviteMailRequest $request): EmptyResponse|ResendCustomerInviteMail403Response|ResendCustomerInviteMailDefaultResponse
    {
        $httpRequest = new Request(ResendCustomerInviteMailRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            403 => ResendCustomerInviteMail403Response::fromResponse($httpResponse),
            default => ResendCustomerInviteMailDefaultResponse::fromResponse($httpResponse),
        };
    }
}
