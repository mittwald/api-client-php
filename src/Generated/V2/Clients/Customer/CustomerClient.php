<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Customer;

use GuzzleHttp\Exception\GuzzleException;
use Mittwald\ApiClient\Client\EmptyResponse;
use Mittwald\ApiClient\Error\UnexpectedResponseException;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\AcceptCustomerInvite\AcceptCustomerInviteRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCategory\CreateCategoryCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCategory\CreateCategoryRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCustomer\CreateCustomerCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCustomer\CreateCustomerRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCustomerInvite\CreateCustomerInviteCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCustomerInvite\CreateCustomerInviteRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeclineCustomerInvite\DeclineCustomerInviteRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeleteCategory\DeleteCategoryOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeleteCategory\DeleteCategoryRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeleteCustomer\DeleteCustomerOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeleteCustomer\DeleteCustomerRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeleteCustomerInvite\DeleteCustomerInviteRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeleteCustomerMembership\DeleteCustomerMembershipRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomer\GetCustomerOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomer\GetCustomerRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerCategory\GetCustomerCategoryOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerCategory\GetCustomerCategoryRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerInvite\GetCustomerInviteOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerInvite\GetCustomerInviteRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerMembership\GetCustomerMembershipOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerMembership\GetCustomerMembershipRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerTokenInvite\GetCustomerTokenInviteOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerTokenInvite\GetCustomerTokenInviteRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\IsCustomerLegallyCompetent\IsCustomerLegallyCompetentOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\IsCustomerLegallyCompetent\IsCustomerLegallyCompetentRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\LeaveCustomer\LeaveCustomerRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListCustomerInvites\ListCustomerInvitesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListCustomerInvites\ListCustomerInvitesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListCustomerMemberships\ListCustomerMembershipsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListCustomerMemberships\ListCustomerMembershipsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListCustomers\ListCustomersOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListCustomers\ListCustomersRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListInvitesForCustomer\ListInvitesForCustomerOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListInvitesForCustomer\ListInvitesForCustomerRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListMembershipsForCustomer\ListMembershipsForCustomerOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListMembershipsForCustomer\ListMembershipsForCustomerRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListOfCustomerCategories\ListOfCustomerCategoriesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListOfCustomerCategories\ListOfCustomerCategoriesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\RemoveAvatar\RemoveAvatarRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\RequestAvatarUpload\RequestAvatarUploadOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\RequestAvatarUpload\RequestAvatarUploadRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ResendCustomerInviteMail\ResendCustomerInviteMailRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\UpdateCategory\UpdateCategoryOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\UpdateCategory\UpdateCategoryRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\UpdateCustomer\UpdateCustomerOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\UpdateCustomer\UpdateCustomerRequest;
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
interface CustomerClient
{
    /**
     * Accept a CustomerInvite.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-accept-customer-invite
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param AcceptCustomerInviteRequest $request An object representing the request for this operation
     */
    public function acceptCustomerInvite(AcceptCustomerInviteRequest $request): EmptyResponse;
    /**
     * Create a new customer category.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-create-category
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CreateCategoryRequest $request An object representing the request for this operation
     * @return CreateCategoryCreatedResponse The new customer category
     */
    public function createCategory(CreateCategoryRequest $request): CreateCategoryCreatedResponse;
    /**
     * Create a new customer profile.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-create-customer
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CreateCustomerRequest $request An object representing the request for this operation
     * @return CreateCustomerCreatedResponse The new customer
     */
    public function createCustomer(CreateCustomerRequest $request): CreateCustomerCreatedResponse;
    /**
     * Create a CustomerInvite.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-create-customer-invite
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CreateCustomerInviteRequest $request An object representing the request for this operation
     */
    public function createCustomerInvite(CreateCustomerInviteRequest $request): CreateCustomerInviteCreatedResponse;
    /**
     * Decline a CustomerInvite.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-decline-customer-invite
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeclineCustomerInviteRequest $request An object representing the request for this operation
     */
    public function declineCustomerInvite(DeclineCustomerInviteRequest $request): EmptyResponse;
    /**
     * Delete a customer category.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-delete-category
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteCategoryRequest $request An object representing the request for this operation
     */
    public function deleteCategory(DeleteCategoryRequest $request): DeleteCategoryOKResponse;
    /**
     * Delete a customer profile.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-delete-customer
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteCustomerRequest $request An object representing the request for this operation
     * @return DeleteCustomerOKResponse Returns the uuid of the deleted customer
     */
    public function deleteCustomer(DeleteCustomerRequest $request): DeleteCustomerOKResponse;
    /**
     * Delete a CustomerInvite.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-delete-customer-invite
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteCustomerInviteRequest $request An object representing the request for this operation
     */
    public function deleteCustomerInvite(DeleteCustomerInviteRequest $request): EmptyResponse;
    /**
     * Delete a CustomerMembership.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-delete-customer-membership
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteCustomerMembershipRequest $request An object representing the request for this operation
     */
    public function deleteCustomerMembership(DeleteCustomerMembershipRequest $request): EmptyResponse;
    /**
     * Get a customer profile.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-get-customer
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetCustomerRequest $request An object representing the request for this operation
     * @return GetCustomerOKResponse The customer object
     */
    public function getCustomer(GetCustomerRequest $request): GetCustomerOKResponse;
    /**
     * Get a customer category.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-get-customer-category
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetCustomerCategoryRequest $request An object representing the request for this operation
     * @return GetCustomerCategoryOKResponse Returns the customer category
     */
    public function getCustomerCategory(GetCustomerCategoryRequest $request): GetCustomerCategoryOKResponse;
    /**
     * Get a CustomerInvite.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-get-customer-invite
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetCustomerInviteRequest $request An object representing the request for this operation
     * @return GetCustomerInviteOKResponse OK
     */
    public function getCustomerInvite(GetCustomerInviteRequest $request): GetCustomerInviteOKResponse;
    /**
     * Get a CustomerMembership.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-get-customer-membership
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetCustomerMembershipRequest $request An object representing the request for this operation
     * @return GetCustomerMembershipOKResponse OK
     */
    public function getCustomerMembership(GetCustomerMembershipRequest $request): GetCustomerMembershipOKResponse;
    /**
     * Get a CustomerInvite by token.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-get-customer-token-invite
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetCustomerTokenInviteRequest $request An object representing the request for this operation
     */
    public function getCustomerTokenInvite(GetCustomerTokenInviteRequest $request): GetCustomerTokenInviteOKResponse;
    /**
     * Check if the customer profile has a valid contract partner configured.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-is-customer-legally-competent
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param IsCustomerLegallyCompetentRequest $request An object representing the request for this operation
     * @return IsCustomerLegallyCompetentOKResponse Check if customer is allowed to order a paid item.
     */
    public function isCustomerLegallyCompetent(IsCustomerLegallyCompetentRequest $request): IsCustomerLegallyCompetentOKResponse;
    /**
     * Leave a Customer.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-leave-customer
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param LeaveCustomerRequest $request An object representing the request for this operation
     */
    public function leaveCustomer(LeaveCustomerRequest $request): EmptyResponse;
    /**
     * List CustomerInvites belonging to the executing user.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-list-customer-invites
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListCustomerInvitesRequest $request An object representing the request for this operation
     * @return ListCustomerInvitesOKResponse OK
     */
    public function listCustomerInvites(ListCustomerInvitesRequest $request): ListCustomerInvitesOKResponse;
    /**
     * List CustomerMemberships belonging to the executing user.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-list-customer-memberships
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListCustomerMembershipsRequest $request An object representing the request for this operation
     * @return ListCustomerMembershipsOKResponse OK
     */
    public function listCustomerMemberships(ListCustomerMembershipsRequest $request): ListCustomerMembershipsOKResponse;
    /**
     * Get all customer profiles the authenticated user has access to.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-list-customers
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListCustomersRequest $request An object representing the request for this operation
     * @return ListCustomersOKResponse The list of customers the authenticated user is a member for
     */
    public function listCustomers(ListCustomersRequest $request): ListCustomersOKResponse;
    /**
     * List Invites belonging to a Customer.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-list-invites-for-customer
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListInvitesForCustomerRequest $request An object representing the request for this operation
     * @return ListInvitesForCustomerOKResponse OK
     */
    public function listInvitesForCustomer(ListInvitesForCustomerRequest $request): ListInvitesForCustomerOKResponse;
    /**
     * List Memberships belonging to a Customer.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-list-memberships-for-customer
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListMembershipsForCustomerRequest $request An object representing the request for this operation
     * @return ListMembershipsForCustomerOKResponse OK
     */
    public function listMembershipsForCustomer(ListMembershipsForCustomerRequest $request): ListMembershipsForCustomerOKResponse;
    /**
     * Get all customer categories.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-list-of-customer-categories
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListOfCustomerCategoriesRequest $request An object representing the request for this operation
     * @return ListOfCustomerCategoriesOKResponse Object containing the list of customer categories
     */
    public function listOfCustomerCategories(ListOfCustomerCategoriesRequest $request): ListOfCustomerCategoriesOKResponse;
    /**
     * Remove the avatar picture of the customer profile.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-remove-avatar
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param RemoveAvatarRequest $request An object representing the request for this operation
     * @return EmptyResponse Avatar removal was successful
     */
    public function removeAvatar(RemoveAvatarRequest $request): EmptyResponse;
    /**
     * Request a new avatar upload for the customer profile.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-request-avatar-upload
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param RequestAvatarUploadRequest $request An object representing the request for this operation
     * @return RequestAvatarUploadOKResponse Avatar request was successful. Use the `refId` to upload your avatar to the file service.
     */
    public function requestAvatarUpload(RequestAvatarUploadRequest $request): RequestAvatarUploadOKResponse;
    /**
     * Resend the mail for a CustomerInvite.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-resend-customer-invite-mail
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ResendCustomerInviteMailRequest $request An object representing the request for this operation
     */
    public function resendCustomerInviteMail(ResendCustomerInviteMailRequest $request): EmptyResponse;
    /**
     * Update a customer category.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-update-category
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateCategoryRequest $request An object representing the request for this operation
     * @return UpdateCategoryOKResponse The updated customer category
     */
    public function updateCategory(UpdateCategoryRequest $request): UpdateCategoryOKResponse;
    /**
     * Update a customer profile.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-update-customer
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateCustomerRequest $request An object representing the request for this operation
     * @return UpdateCustomerOKResponse Name and id of the updated customer
     */
    public function updateCustomer(UpdateCustomerRequest $request): UpdateCustomerOKResponse;
    /**
     * Update a CustomerMembership.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Customer/operation/customer-update-customer-membership
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateCustomerMembershipRequest $request An object representing the request for this operation
     */
    public function updateCustomerMembership(UpdateCustomerMembershipRequest $request): EmptyResponse;
}
