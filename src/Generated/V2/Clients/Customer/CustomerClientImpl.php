<?php

declare(strict_types=1);

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
use Mittwald\ApiClient\Generated\V2\Clients\Customer\AcceptCustomerInvite\AcceptCustomerInviteTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCustomer\CreateCustomerBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCustomer\CreateCustomerCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCustomer\CreateCustomerDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCustomer\CreateCustomerRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCustomer\CreateCustomerTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCustomerInvite\CreateCustomerInviteBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCustomerInvite\CreateCustomerInviteConflictResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCustomerInvite\CreateCustomerInviteCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCustomerInvite\CreateCustomerInviteDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCustomerInvite\CreateCustomerInviteForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCustomerInvite\CreateCustomerInviteRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCustomerInvite\CreateCustomerInviteTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeclineCustomerInvite\DeclineCustomerInviteDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeclineCustomerInvite\DeclineCustomerInviteRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeclineCustomerInvite\DeclineCustomerInviteTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeleteCustomer\DeleteCustomerDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeleteCustomer\DeleteCustomerNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeleteCustomer\DeleteCustomerOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeleteCustomer\DeleteCustomerPreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeleteCustomer\DeleteCustomerRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeleteCustomer\DeleteCustomerTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeleteCustomerInvite\DeleteCustomerInviteDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeleteCustomerInvite\DeleteCustomerInviteRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeleteCustomerInvite\DeleteCustomerInviteTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeleteCustomerMembership\DeleteCustomerMembershipDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeleteCustomerMembership\DeleteCustomerMembershipRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeleteCustomerMembership\DeleteCustomerMembershipTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomer\GetCustomerDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomer\GetCustomerForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomer\GetCustomerNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomer\GetCustomerOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomer\GetCustomerRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomer\GetCustomerTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomer\GetCustomerUnauthorizedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerInvite\GetCustomerInviteDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerInvite\GetCustomerInviteNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerInvite\GetCustomerInviteOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerInvite\GetCustomerInviteRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerInvite\GetCustomerInviteTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerMembership\GetCustomerMembershipDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerMembership\GetCustomerMembershipNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerMembership\GetCustomerMembershipOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerMembership\GetCustomerMembershipRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerMembership\GetCustomerMembershipTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerTokenInvite\GetCustomerTokenInviteDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerTokenInvite\GetCustomerTokenInviteNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerTokenInvite\GetCustomerTokenInviteOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerTokenInvite\GetCustomerTokenInviteRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerTokenInvite\GetCustomerTokenInviteTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\IsCustomerLegallyCompetent\IsCustomerLegallyCompetentBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\IsCustomerLegallyCompetent\IsCustomerLegallyCompetentDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\IsCustomerLegallyCompetent\IsCustomerLegallyCompetentNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\IsCustomerLegallyCompetent\IsCustomerLegallyCompetentOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\IsCustomerLegallyCompetent\IsCustomerLegallyCompetentRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\IsCustomerLegallyCompetent\IsCustomerLegallyCompetentTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\LeaveCustomer\LeaveCustomerDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\LeaveCustomer\LeaveCustomerRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\LeaveCustomer\LeaveCustomerTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListCustomerInvites\ListCustomerInvitesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListCustomerInvites\ListCustomerInvitesForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListCustomerInvites\ListCustomerInvitesNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListCustomerInvites\ListCustomerInvitesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListCustomerInvites\ListCustomerInvitesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListCustomerInvites\ListCustomerInvitesTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListCustomerMemberships\ListCustomerMembershipsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListCustomerMemberships\ListCustomerMembershipsForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListCustomerMemberships\ListCustomerMembershipsNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListCustomerMemberships\ListCustomerMembershipsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListCustomerMemberships\ListCustomerMembershipsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListCustomerMemberships\ListCustomerMembershipsTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListCustomers\ListCustomersDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListCustomers\ListCustomersOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListCustomers\ListCustomersRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListCustomers\ListCustomersTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListInvitesForCustomer\ListInvitesForCustomerDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListInvitesForCustomer\ListInvitesForCustomerNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListInvitesForCustomer\ListInvitesForCustomerOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListInvitesForCustomer\ListInvitesForCustomerRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListInvitesForCustomer\ListInvitesForCustomerTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListMembershipsForCustomer\ListMembershipsForCustomerDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListMembershipsForCustomer\ListMembershipsForCustomerNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListMembershipsForCustomer\ListMembershipsForCustomerOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListMembershipsForCustomer\ListMembershipsForCustomerRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListMembershipsForCustomer\ListMembershipsForCustomerTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\RemoveAvatar\RemoveAvatarBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\RemoveAvatar\RemoveAvatarInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\RemoveAvatar\RemoveAvatarRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\RemoveAvatar\RemoveAvatarTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\RemoveAvatar\RemoveAvatarUnauthorizedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\RequestAvatarUpload\RequestAvatarUploadBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\RequestAvatarUpload\RequestAvatarUploadInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\RequestAvatarUpload\RequestAvatarUploadOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\RequestAvatarUpload\RequestAvatarUploadRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\RequestAvatarUpload\RequestAvatarUploadTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\RequestAvatarUpload\RequestAvatarUploadUnauthorizedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ResendCustomerInviteMail\ResendCustomerInviteMailDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ResendCustomerInviteMail\ResendCustomerInviteMailForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ResendCustomerInviteMail\ResendCustomerInviteMailRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ResendCustomerInviteMail\ResendCustomerInviteMailTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\UpdateCustomer\UpdateCustomerBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\UpdateCustomer\UpdateCustomerDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\UpdateCustomer\UpdateCustomerNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\UpdateCustomer\UpdateCustomerOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\UpdateCustomer\UpdateCustomerRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\UpdateCustomer\UpdateCustomerTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\UpdateCustomerMembership\UpdateCustomerMembershipDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\UpdateCustomerMembership\UpdateCustomerMembershipRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\UpdateCustomerMembership\UpdateCustomerMembershipTooManyRequestsResponse;

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
     * @param AcceptCustomerInviteRequest $request An object representing the request for this operation
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
            429 => AcceptCustomerInviteTooManyRequestsResponse::fromResponse($httpResponse),
            default => AcceptCustomerInviteDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Create a new customer profile.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-create-customer
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CreateCustomerRequest $request An object representing the request for this operation
     * @return CreateCustomerCreatedResponse The new customer
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
            429 => CreateCustomerTooManyRequestsResponse::fromResponse($httpResponse),
            default => CreateCustomerDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Create a CustomerInvite.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-create-customer-invite
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CreateCustomerInviteRequest $request An object representing the request for this operation
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
            429 => CreateCustomerInviteTooManyRequestsResponse::fromResponse($httpResponse),
            default => CreateCustomerInviteDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Decline a CustomerInvite.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-decline-customer-invite
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeclineCustomerInviteRequest $request An object representing the request for this operation
     */
    public function declineCustomerInvite(DeclineCustomerInviteRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeclineCustomerInviteRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            429 => DeclineCustomerInviteTooManyRequestsResponse::fromResponse($httpResponse),
            default => DeclineCustomerInviteDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Delete a customer profile.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-delete-customer
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteCustomerRequest $request An object representing the request for this operation
     * @return DeleteCustomerOKResponse Returns the uuid of the deleted customer
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
            412 => DeleteCustomerPreconditionFailedResponse::fromResponse($httpResponse),
            429 => DeleteCustomerTooManyRequestsResponse::fromResponse($httpResponse),
            default => DeleteCustomerDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Delete a CustomerInvite.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-delete-customer-invite
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteCustomerInviteRequest $request An object representing the request for this operation
     */
    public function deleteCustomerInvite(DeleteCustomerInviteRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeleteCustomerInviteRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            429 => DeleteCustomerInviteTooManyRequestsResponse::fromResponse($httpResponse),
            default => DeleteCustomerInviteDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Delete a CustomerMembership.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-delete-customer-membership
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteCustomerMembershipRequest $request An object representing the request for this operation
     */
    public function deleteCustomerMembership(DeleteCustomerMembershipRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeleteCustomerMembershipRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            429 => DeleteCustomerMembershipTooManyRequestsResponse::fromResponse($httpResponse),
            default => DeleteCustomerMembershipDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a customer profile.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-get-customer
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetCustomerRequest $request An object representing the request for this operation
     * @return GetCustomerOKResponse The customer object
     */
    public function getCustomer(GetCustomerRequest $request): GetCustomerOKResponse
    {
        $httpRequest = new Request(GetCustomerRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetCustomerOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            401 => GetCustomerUnauthorizedResponse::fromResponse($httpResponse),
            403 => GetCustomerForbiddenResponse::fromResponse($httpResponse),
            404 => GetCustomerNotFoundResponse::fromResponse($httpResponse),
            429 => GetCustomerTooManyRequestsResponse::fromResponse($httpResponse),
            default => GetCustomerDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a CustomerInvite.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-get-customer-invite
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetCustomerInviteRequest $request An object representing the request for this operation
     * @return GetCustomerInviteOKResponse OK
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
            429 => GetCustomerInviteTooManyRequestsResponse::fromResponse($httpResponse),
            default => GetCustomerInviteDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a CustomerMembership.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-get-customer-membership
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetCustomerMembershipRequest $request An object representing the request for this operation
     * @return GetCustomerMembershipOKResponse OK
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
            429 => GetCustomerMembershipTooManyRequestsResponse::fromResponse($httpResponse),
            default => GetCustomerMembershipDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a CustomerInvite by token.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-get-customer-token-invite
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetCustomerTokenInviteRequest $request An object representing the request for this operation
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
            429 => GetCustomerTokenInviteTooManyRequestsResponse::fromResponse($httpResponse),
            default => GetCustomerTokenInviteDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Check if the customer profile has a valid contract partner configured.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-is-customer-legally-competent
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param IsCustomerLegallyCompetentRequest $request An object representing the request for this operation
     * @return IsCustomerLegallyCompetentOKResponse Check if customer is allowed to order a paid item.
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
            429 => IsCustomerLegallyCompetentTooManyRequestsResponse::fromResponse($httpResponse),
            default => IsCustomerLegallyCompetentDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Leave a Customer.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-leave-customer
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param LeaveCustomerRequest $request An object representing the request for this operation
     */
    public function leaveCustomer(LeaveCustomerRequest $request): EmptyResponse
    {
        $httpRequest = new Request(LeaveCustomerRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            429 => LeaveCustomerTooManyRequestsResponse::fromResponse($httpResponse),
            default => LeaveCustomerDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List CustomerInvites belonging to the executing user.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-list-customer-invites
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListCustomerInvitesRequest $request An object representing the request for this operation
     * @return ListCustomerInvitesOKResponse OK
     */
    public function listCustomerInvites(ListCustomerInvitesRequest $request): ListCustomerInvitesOKResponse
    {
        $httpRequest = new Request(ListCustomerInvitesRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListCustomerInvitesOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            403 => ListCustomerInvitesForbiddenResponse::fromResponse($httpResponse),
            404 => ListCustomerInvitesNotFoundResponse::fromResponse($httpResponse),
            429 => ListCustomerInvitesTooManyRequestsResponse::fromResponse($httpResponse),
            default => ListCustomerInvitesDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List CustomerMemberships belonging to the executing user.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-list-customer-memberships
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListCustomerMembershipsRequest $request An object representing the request for this operation
     * @return ListCustomerMembershipsOKResponse OK
     */
    public function listCustomerMemberships(ListCustomerMembershipsRequest $request): ListCustomerMembershipsOKResponse
    {
        $httpRequest = new Request(ListCustomerMembershipsRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListCustomerMembershipsOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            403 => ListCustomerMembershipsForbiddenResponse::fromResponse($httpResponse),
            404 => ListCustomerMembershipsNotFoundResponse::fromResponse($httpResponse),
            429 => ListCustomerMembershipsTooManyRequestsResponse::fromResponse($httpResponse),
            default => ListCustomerMembershipsDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get all customer profiles the authenticated user has access to.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-list-customers
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListCustomersRequest $request An object representing the request for this operation
     * @return ListCustomersOKResponse The list of customers the authenticated user is a member for
     */
    public function listCustomers(ListCustomersRequest $request): ListCustomersOKResponse
    {
        $httpRequest = new Request(ListCustomersRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListCustomersOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            429 => ListCustomersTooManyRequestsResponse::fromResponse($httpResponse),
            default => ListCustomersDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List Invites belonging to a Customer.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-list-invites-for-customer
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListInvitesForCustomerRequest $request An object representing the request for this operation
     * @return ListInvitesForCustomerOKResponse OK
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
            429 => ListInvitesForCustomerTooManyRequestsResponse::fromResponse($httpResponse),
            default => ListInvitesForCustomerDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List Memberships belonging to a Customer.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-list-memberships-for-customer
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListMembershipsForCustomerRequest $request An object representing the request for this operation
     * @return ListMembershipsForCustomerOKResponse OK
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
            429 => ListMembershipsForCustomerTooManyRequestsResponse::fromResponse($httpResponse),
            default => ListMembershipsForCustomerDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Remove the avatar picture of the customer profile.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-remove-avatar
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param RemoveAvatarRequest $request An object representing the request for this operation
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
            429 => RemoveAvatarTooManyRequestsResponse::fromResponse($httpResponse),
            500 => RemoveAvatarInternalServerErrorResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Request a new avatar upload for the customer profile.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-request-avatar-upload
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param RequestAvatarUploadRequest $request An object representing the request for this operation
     * @return RequestAvatarUploadOKResponse Avatar request was successful. Use the `refId` to upload your avatar to the file service.
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
            429 => RequestAvatarUploadTooManyRequestsResponse::fromResponse($httpResponse),
            500 => RequestAvatarUploadInternalServerErrorResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Resend the mail for a CustomerInvite.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-resend-customer-invite-mail
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ResendCustomerInviteMailRequest $request An object representing the request for this operation
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
            429 => ResendCustomerInviteMailTooManyRequestsResponse::fromResponse($httpResponse),
            default => ResendCustomerInviteMailDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update a customer profile.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-update-customer
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateCustomerRequest $request An object representing the request for this operation
     * @return UpdateCustomerOKResponse Name and id of the updated customer
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
            429 => UpdateCustomerTooManyRequestsResponse::fromResponse($httpResponse),
            default => UpdateCustomerDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update a CustomerMembership.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-update-customer-membership
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateCustomerMembershipRequest $request An object representing the request for this operation
     */
    public function updateCustomerMembership(UpdateCustomerMembershipRequest $request): EmptyResponse
    {
        $httpRequest = new Request(UpdateCustomerMembershipRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            429 => UpdateCustomerMembershipTooManyRequestsResponse::fromResponse($httpResponse),
            default => UpdateCustomerMembershipDefaultResponse::fromResponse($httpResponse),
        });
    }
}
