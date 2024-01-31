<?php

namespace Mittwald\ApiClient\Generated\V2\Clients\Customer;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use Mittwald\ApiClient\Client\EmptyResponse;
use Mittwald\ApiClient\Error\UnexpectedResponseException;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\AcceptCustomerInvite\AcceptCustomerInviteBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\AcceptCustomerInvite\AcceptCustomerInviteDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\AcceptCustomerInvite\AcceptCustomerInviteForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\AcceptCustomerInvite\AcceptCustomerInvitePreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\AcceptCustomerInvite\AcceptCustomerInviteRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCategory\CreateCategoryBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCategory\CreateCategoryCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCategory\CreateCategoryDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCategory\CreateCategoryRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCustomer\CreateCustomerBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCustomer\CreateCustomerCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCustomer\CreateCustomerDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCustomer\CreateCustomerRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCustomerInvite\CreateCustomerInviteBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCustomerInvite\CreateCustomerInviteConflictResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCustomerInvite\CreateCustomerInviteCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCustomerInvite\CreateCustomerInviteDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCustomerInvite\CreateCustomerInviteForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCustomerInvite\CreateCustomerInviteRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeclineCustomerInvite\DeclineCustomerInviteDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeclineCustomerInvite\DeclineCustomerInviteRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeleteCategory\DeleteCategoryDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeleteCategory\DeleteCategoryOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeleteCategory\DeleteCategoryRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeleteCustomer\DeleteCustomerDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeleteCustomer\DeleteCustomerNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeleteCustomer\DeleteCustomerOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeleteCustomer\DeleteCustomerRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeleteCustomerInvite\DeleteCustomerInviteDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeleteCustomerInvite\DeleteCustomerInviteRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeleteCustomerMembership\DeleteCustomerMembershipDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeleteCustomerMembership\DeleteCustomerMembershipRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomer\GetCustomerDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomer\GetCustomerNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomer\GetCustomerOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomer\GetCustomerRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerCategory\GetCustomerCategoryDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerCategory\GetCustomerCategoryOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerCategory\GetCustomerCategoryRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerInvite\GetCustomerInviteDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerInvite\GetCustomerInviteNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerInvite\GetCustomerInviteOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerInvite\GetCustomerInviteRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerMembership\GetCustomerMembershipDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerMembership\GetCustomerMembershipNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerMembership\GetCustomerMembershipOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerMembership\GetCustomerMembershipRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerTokenInvite\GetCustomerTokenInviteDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerTokenInvite\GetCustomerTokenInviteNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerTokenInvite\GetCustomerTokenInviteOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerTokenInvite\GetCustomerTokenInviteRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\IsCustomerLegallyCompetent\IsCustomerLegallyCompetentBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\IsCustomerLegallyCompetent\IsCustomerLegallyCompetentDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\IsCustomerLegallyCompetent\IsCustomerLegallyCompetentNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\IsCustomerLegallyCompetent\IsCustomerLegallyCompetentOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\IsCustomerLegallyCompetent\IsCustomerLegallyCompetentRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\LeaveCustomer\LeaveCustomerDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\LeaveCustomer\LeaveCustomerRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListCustomerInvites\ListCustomerInvitesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListCustomerInvites\ListCustomerInvitesNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListCustomerInvites\ListCustomerInvitesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListCustomerInvites\ListCustomerInvitesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListCustomerMemberships\ListCustomerMembershipsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListCustomerMemberships\ListCustomerMembershipsNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListCustomerMemberships\ListCustomerMembershipsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListCustomerMemberships\ListCustomerMembershipsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListCustomers\ListCustomersDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListCustomers\ListCustomersOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListCustomers\ListCustomersRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListInvitesForCustomer\ListInvitesForCustomerDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListInvitesForCustomer\ListInvitesForCustomerNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListInvitesForCustomer\ListInvitesForCustomerOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListInvitesForCustomer\ListInvitesForCustomerRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListMembershipsForCustomer\ListMembershipsForCustomerDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListMembershipsForCustomer\ListMembershipsForCustomerNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListMembershipsForCustomer\ListMembershipsForCustomerOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListMembershipsForCustomer\ListMembershipsForCustomerRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListOfCustomerCategories\ListOfCustomerCategoriesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListOfCustomerCategories\ListOfCustomerCategoriesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListOfCustomerCategories\ListOfCustomerCategoriesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\RemoveAvatar\RemoveAvatarBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\RemoveAvatar\RemoveAvatarInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\RemoveAvatar\RemoveAvatarRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\RemoveAvatar\RemoveAvatarUnauthorizedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\RequestAvatarUpload\RequestAvatarUploadBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\RequestAvatarUpload\RequestAvatarUploadInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\RequestAvatarUpload\RequestAvatarUploadOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\RequestAvatarUpload\RequestAvatarUploadRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\RequestAvatarUpload\RequestAvatarUploadUnauthorizedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ResendCustomerInviteMail\ResendCustomerInviteMailDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ResendCustomerInviteMail\ResendCustomerInviteMailForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ResendCustomerInviteMail\ResendCustomerInviteMailRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\UpdateCategory\UpdateCategoryBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\UpdateCategory\UpdateCategoryDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\UpdateCategory\UpdateCategoryNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\UpdateCategory\UpdateCategoryOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\UpdateCategory\UpdateCategoryRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\UpdateCustomer\UpdateCustomerBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\UpdateCustomer\UpdateCustomerDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\UpdateCustomer\UpdateCustomerNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\UpdateCustomer\UpdateCustomerOKResponse;
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
class CustomerClientImpl implements CustomerClient
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
     * @throws UnexpectedResponseException
     * @param AcceptCustomerInvite\AcceptCustomerInviteRequest $request An object representing the request for this operation
     * @return EmptyResponse
     */
    public function acceptCustomerInvite(AcceptCustomerInviteRequest $request): EmptyResponse
    {
        $httpRequest = new Request(AcceptCustomerInviteRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => AcceptCustomerInviteBadRequestResponse::fromResponse($httpResponse),
            403 => AcceptCustomerInviteForbiddenResponse::fromResponse($httpResponse),
            412 => AcceptCustomerInvitePreconditionFailedResponse::fromResponse($httpResponse),
            default => AcceptCustomerInviteDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Create a new customer category.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-create-category
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CreateCategory\CreateCategoryRequest $request An object representing the request for this operation
     * @return CreateCategory\CreateCategoryCreatedResponse The new customer category
     */
    public function createCategory(CreateCategoryRequest $request): CreateCategoryCreatedResponse
    {
        $httpRequest = new Request(CreateCategoryRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 201) {
            return CreateCategoryCreatedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => CreateCategoryBadRequestResponse::fromResponse($httpResponse),
            default => CreateCategoryDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Create a new customer profile.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-create-customer
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CreateCustomer\CreateCustomerRequest $request An object representing the request for this operation
     * @return CreateCustomer\CreateCustomerCreatedResponse The new customer
     */
    public function createCustomer(CreateCustomerRequest $request): CreateCustomerCreatedResponse
    {
        $httpRequest = new Request(CreateCustomerRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 201) {
            return CreateCustomerCreatedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => CreateCustomerBadRequestResponse::fromResponse($httpResponse),
            default => CreateCustomerDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Create a CustomerInvite.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-create-customer-invite
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CreateCustomerInvite\CreateCustomerInviteRequest $request An object representing the request for this operation
     * @return CreateCustomerInvite\CreateCustomerInviteCreatedResponse
     */
    public function createCustomerInvite(CreateCustomerInviteRequest $request): CreateCustomerInviteCreatedResponse
    {
        $httpRequest = new Request(CreateCustomerInviteRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 201) {
            return CreateCustomerInviteCreatedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => CreateCustomerInviteBadRequestResponse::fromResponse($httpResponse),
            403 => CreateCustomerInviteForbiddenResponse::fromResponse($httpResponse),
            409 => CreateCustomerInviteConflictResponse::fromResponse($httpResponse),
            default => CreateCustomerInviteDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Decline a CustomerInvite.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-decline-customer-invite
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeclineCustomerInvite\DeclineCustomerInviteRequest $request An object representing the request for this operation
     * @return EmptyResponse
     */
    public function declineCustomerInvite(DeclineCustomerInviteRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeclineCustomerInviteRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            default => DeclineCustomerInviteDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Delete a customer category.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-delete-category
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteCategory\DeleteCategoryRequest $request An object representing the request for this operation
     * @return DeleteCategory\DeleteCategoryOKResponse
     */
    public function deleteCategory(DeleteCategoryRequest $request): DeleteCategoryOKResponse
    {
        $httpRequest = new Request(DeleteCategoryRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return DeleteCategoryOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            default => DeleteCategoryDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Delete a customer profile.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-delete-customer
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteCustomer\DeleteCustomerRequest $request An object representing the request for this operation
     * @return DeleteCustomer\DeleteCustomerOKResponse
     */
    public function deleteCustomer(DeleteCustomerRequest $request): DeleteCustomerOKResponse
    {
        $httpRequest = new Request(DeleteCustomerRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return DeleteCustomerOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => DeleteCustomerNotFoundResponse::fromResponse($httpResponse),
            default => DeleteCustomerDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Delete a CustomerInvite.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-delete-customer-invite
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteCustomerInvite\DeleteCustomerInviteRequest $request An object representing the request for this operation
     * @return EmptyResponse
     */
    public function deleteCustomerInvite(DeleteCustomerInviteRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeleteCustomerInviteRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            default => DeleteCustomerInviteDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Delete a CustomerMembership.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-delete-customer-membership
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteCustomerMembership\DeleteCustomerMembershipRequest $request An object representing the request for this operation
     * @return EmptyResponse
     */
    public function deleteCustomerMembership(DeleteCustomerMembershipRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeleteCustomerMembershipRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            default => DeleteCustomerMembershipDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a customer profile.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-get-customer
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetCustomer\GetCustomerRequest $request An object representing the request for this operation
     * @return GetCustomer\GetCustomerOKResponse The customer object
     */
    public function getCustomer(GetCustomerRequest $request): GetCustomerOKResponse
    {
        $httpRequest = new Request(GetCustomerRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetCustomerOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => GetCustomerNotFoundResponse::fromResponse($httpResponse),
            default => GetCustomerDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a customer category.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-get-customer-category
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetCustomerCategory\GetCustomerCategoryRequest $request An object representing the request for this operation
     * @return GetCustomerCategory\GetCustomerCategoryOKResponse Returns the customer category
     */
    public function getCustomerCategory(GetCustomerCategoryRequest $request): GetCustomerCategoryOKResponse
    {
        $httpRequest = new Request(GetCustomerCategoryRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetCustomerCategoryOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            default => GetCustomerCategoryDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a CustomerInvite.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-get-customer-invite
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetCustomerInvite\GetCustomerInviteRequest $request An object representing the request for this operation
     * @return GetCustomerInvite\GetCustomerInviteOKResponse OK
     */
    public function getCustomerInvite(GetCustomerInviteRequest $request): GetCustomerInviteOKResponse
    {
        $httpRequest = new Request(GetCustomerInviteRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetCustomerInviteOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => GetCustomerInviteNotFoundResponse::fromResponse($httpResponse),
            default => GetCustomerInviteDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a CustomerMembership.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-get-customer-membership
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetCustomerMembership\GetCustomerMembershipRequest $request An object representing the request for this operation
     * @return GetCustomerMembership\GetCustomerMembershipOKResponse OK
     */
    public function getCustomerMembership(GetCustomerMembershipRequest $request): GetCustomerMembershipOKResponse
    {
        $httpRequest = new Request(GetCustomerMembershipRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetCustomerMembershipOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => GetCustomerMembershipNotFoundResponse::fromResponse($httpResponse),
            default => GetCustomerMembershipDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a CustomerInvite by token.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-get-customer-token-invite
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetCustomerTokenInvite\GetCustomerTokenInviteRequest $request An object representing the request for this operation
     * @return GetCustomerTokenInvite\GetCustomerTokenInviteOKResponse
     */
    public function getCustomerTokenInvite(GetCustomerTokenInviteRequest $request): GetCustomerTokenInviteOKResponse
    {
        $httpRequest = new Request(GetCustomerTokenInviteRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetCustomerTokenInviteOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => GetCustomerTokenInviteNotFoundResponse::fromResponse($httpResponse),
            default => GetCustomerTokenInviteDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Check if the customer profile has a valid contract partner configured.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-is-customer-legally-competent
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param IsCustomerLegallyCompetent\IsCustomerLegallyCompetentRequest $request An object representing the request for this operation
     * @return IsCustomerLegallyCompetent\IsCustomerLegallyCompetentOKResponse Check if customer is allowed to order a paid item.
     */
    public function isCustomerLegallyCompetent(IsCustomerLegallyCompetentRequest $request): IsCustomerLegallyCompetentOKResponse
    {
        $httpRequest = new Request(IsCustomerLegallyCompetentRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return IsCustomerLegallyCompetentOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => IsCustomerLegallyCompetentBadRequestResponse::fromResponse($httpResponse),
            404 => IsCustomerLegallyCompetentNotFoundResponse::fromResponse($httpResponse),
            default => IsCustomerLegallyCompetentDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Leave a Customer.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-leave-customer
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param LeaveCustomer\LeaveCustomerRequest $request An object representing the request for this operation
     * @return EmptyResponse
     */
    public function leaveCustomer(LeaveCustomerRequest $request): EmptyResponse
    {
        $httpRequest = new Request(LeaveCustomerRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            default => LeaveCustomerDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List CustomerInvites belonging to the executing user.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-list-customer-invites
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListCustomerInvites\ListCustomerInvitesRequest $request An object representing the request for this operation
     * @return ListCustomerInvites\ListCustomerInvitesOKResponse OK
     */
    public function listCustomerInvites(ListCustomerInvitesRequest $request): ListCustomerInvitesOKResponse
    {
        $httpRequest = new Request(ListCustomerInvitesRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListCustomerInvitesOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => ListCustomerInvitesNotFoundResponse::fromResponse($httpResponse),
            default => ListCustomerInvitesDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List CustomerMemberships belonging to the executing user.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-list-customer-memberships
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListCustomerMemberships\ListCustomerMembershipsRequest $request An object representing the request for this operation
     * @return ListCustomerMemberships\ListCustomerMembershipsOKResponse OK
     */
    public function listCustomerMemberships(ListCustomerMembershipsRequest $request): ListCustomerMembershipsOKResponse
    {
        $httpRequest = new Request(ListCustomerMembershipsRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListCustomerMembershipsOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => ListCustomerMembershipsNotFoundResponse::fromResponse($httpResponse),
            default => ListCustomerMembershipsDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get all customer profiles the authenticated user has access to.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-list-customers
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListCustomers\ListCustomersRequest $request An object representing the request for this operation
     * @return ListCustomers\ListCustomersOKResponse The list of customers the user is a member for
     */
    public function listCustomers(ListCustomersRequest $request): ListCustomersOKResponse
    {
        $httpRequest = new Request(ListCustomersRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListCustomersOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            default => ListCustomersDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List Invites belonging to a Customer.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-list-invites-for-customer
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListInvitesForCustomer\ListInvitesForCustomerRequest $request An object representing the request for this operation
     * @return ListInvitesForCustomer\ListInvitesForCustomerOKResponse OK
     */
    public function listInvitesForCustomer(ListInvitesForCustomerRequest $request): ListInvitesForCustomerOKResponse
    {
        $httpRequest = new Request(ListInvitesForCustomerRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListInvitesForCustomerOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => ListInvitesForCustomerNotFoundResponse::fromResponse($httpResponse),
            default => ListInvitesForCustomerDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List Memberships belonging to a Customer.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-list-memberships-for-customer
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListMembershipsForCustomer\ListMembershipsForCustomerRequest $request An object representing the request for this operation
     * @return ListMembershipsForCustomer\ListMembershipsForCustomerOKResponse OK
     */
    public function listMembershipsForCustomer(ListMembershipsForCustomerRequest $request): ListMembershipsForCustomerOKResponse
    {
        $httpRequest = new Request(ListMembershipsForCustomerRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListMembershipsForCustomerOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => ListMembershipsForCustomerNotFoundResponse::fromResponse($httpResponse),
            default => ListMembershipsForCustomerDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get all customer categories.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-list-of-customer-categories
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListOfCustomerCategories\ListOfCustomerCategoriesRequest $request An object representing the request for this operation
     * @return ListOfCustomerCategories\ListOfCustomerCategoriesOKResponse Object containing the list of customer categories
     */
    public function listOfCustomerCategories(ListOfCustomerCategoriesRequest $request): ListOfCustomerCategoriesOKResponse
    {
        $httpRequest = new Request(ListOfCustomerCategoriesRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListOfCustomerCategoriesOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            default => ListOfCustomerCategoriesDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Remove the avatar picture of the customer profile.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-remove-avatar
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param RemoveAvatar\RemoveAvatarRequest $request An object representing the request for this operation
     * @return EmptyResponse Avatar removal was successful
     */
    public function removeAvatar(RemoveAvatarRequest $request): EmptyResponse
    {
        $httpRequest = new Request(RemoveAvatarRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => RemoveAvatarBadRequestResponse::fromResponse($httpResponse),
            401 => RemoveAvatarUnauthorizedResponse::fromResponse($httpResponse),
            500 => RemoveAvatarInternalServerErrorResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Request a new avatar upload for the customer profile.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-request-avatar-upload
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param RequestAvatarUpload\RequestAvatarUploadRequest $request An object representing the request for this operation
     * @return RequestAvatarUpload\RequestAvatarUploadOKResponse Avatar request was successful. Use the `refId` to upload your avatar to the file service.
     */
    public function requestAvatarUpload(RequestAvatarUploadRequest $request): RequestAvatarUploadOKResponse
    {
        $httpRequest = new Request(RequestAvatarUploadRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return RequestAvatarUploadOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => RequestAvatarUploadBadRequestResponse::fromResponse($httpResponse),
            401 => RequestAvatarUploadUnauthorizedResponse::fromResponse($httpResponse),
            500 => RequestAvatarUploadInternalServerErrorResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Resend the mail for a CustomerInvite.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-resend-customer-invite-mail
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ResendCustomerInviteMail\ResendCustomerInviteMailRequest $request An object representing the request for this operation
     * @return EmptyResponse
     */
    public function resendCustomerInviteMail(ResendCustomerInviteMailRequest $request): EmptyResponse
    {
        $httpRequest = new Request(ResendCustomerInviteMailRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            403 => ResendCustomerInviteMailForbiddenResponse::fromResponse($httpResponse),
            default => ResendCustomerInviteMailDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update a customer category.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-update-category
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateCategory\UpdateCategoryRequest $request An object representing the request for this operation
     * @return UpdateCategory\UpdateCategoryOKResponse The updated customer category
     */
    public function updateCategory(UpdateCategoryRequest $request): UpdateCategoryOKResponse
    {
        $httpRequest = new Request(UpdateCategoryRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return UpdateCategoryOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateCategoryBadRequestResponse::fromResponse($httpResponse),
            404 => UpdateCategoryNotFoundResponse::fromResponse($httpResponse),
            default => UpdateCategoryDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update a customer profile.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-update-customer
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateCustomer\UpdateCustomerRequest $request An object representing the request for this operation
     * @return UpdateCustomer\UpdateCustomerOKResponse Name and id of the updated customer
     */
    public function updateCustomer(UpdateCustomerRequest $request): UpdateCustomerOKResponse
    {
        $httpRequest = new Request(UpdateCustomerRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return UpdateCustomerOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateCustomerBadRequestResponse::fromResponse($httpResponse),
            404 => UpdateCustomerNotFoundResponse::fromResponse($httpResponse),
            default => UpdateCustomerDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update a CustomerMembership.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-update-customer-membership
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateCustomerMembership\UpdateCustomerMembershipRequest $request An object representing the request for this operation
     * @return EmptyResponse
     */
    public function updateCustomerMembership(UpdateCustomerMembershipRequest $request): EmptyResponse
    {
        $httpRequest = new Request(UpdateCustomerMembershipRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            default => UpdateCustomerMembershipDefaultResponse::fromResponse($httpResponse),
        });
    }
}
