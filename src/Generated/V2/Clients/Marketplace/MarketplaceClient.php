<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace;

use GuzzleHttp\Exception\GuzzleException;
use Mittwald\ApiClient\Client\EmptyResponse;
use Mittwald\ApiClient\Client\UntypedResponse;
use Mittwald\ApiClient\Error\UnexpectedResponseException;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorDeleteContributor\ContributorDeleteContributorRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorExpressInterestToContribute\ContributorExpressInterestToContributeCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorExpressInterestToContribute\ContributorExpressInterestToContributeRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorGetBillingInformation\ContributorGetBillingInformationOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorGetBillingInformation\ContributorGetBillingInformationRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorGetCustomerBillingPortalLink\ContributorGetCustomerBillingPortalLinkOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorGetCustomerBillingPortalLink\ContributorGetCustomerBillingPortalLinkRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorGetLoginLink\ContributorGetLoginLinkOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorGetLoginLink\ContributorGetLoginLinkRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorListContractPartnersOfContributor\ContributorListContractPartnersOfContributorOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorListContractPartnersOfContributor\ContributorListContractPartnersOfContributorRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorListIncomingInvoices\ContributorListIncomingInvoicesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorListIncomingInvoices\ContributorListIncomingInvoicesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorListOnbehalfInvoices\ContributorListOnbehalfInvoicesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorListOnbehalfInvoices\ContributorListOnbehalfInvoicesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorPatchContributor\ContributorPatchContributorOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorPatchContributor\ContributorPatchContributorRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorReceiptGetFileAccessToken\ContributorReceiptGetFileAccessTokenOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorReceiptGetFileAccessToken\ContributorReceiptGetFileAccessTokenRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorRequestDeviatingContributorAvatarUpload\ContributorRequestDeviatingContributorAvatarUploadOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorRequestDeviatingContributorAvatarUpload\ContributorRequestDeviatingContributorAvatarUploadRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorResetContributorAvatar\ContributorResetContributorAvatarRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorRotateSecretForExtensionInstance\ContributorRotateSecretForExtensionInstanceOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorRotateSecretForExtensionInstance\ContributorRotateSecretForExtensionInstanceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorUpdateBillingInformation\ContributorUpdateBillingInformationOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorUpdateBillingInformation\ContributorUpdateBillingInformationRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\CustomerGetPaymentMethod\CustomerGetPaymentMethodOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\CustomerGetPaymentMethod\CustomerGetPaymentMethodRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\CustomerUpdatePaymentMethod\CustomerUpdatePaymentMethodOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\CustomerUpdatePaymentMethod\CustomerUpdatePaymentMethodRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionAuthenticateInstance\ExtensionAuthenticateInstanceCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionAuthenticateInstance\ExtensionAuthenticateInstanceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionAuthenticateWithSessionToken\ExtensionAuthenticateWithSessionTokenCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionAuthenticateWithSessionToken\ExtensionAuthenticateWithSessionTokenRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionCancelExtensionTermination\ExtensionCancelExtensionTerminationOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionCancelExtensionTermination\ExtensionCancelExtensionTerminationRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionChangeContext\ExtensionChangeContextOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionChangeContext\ExtensionChangeContextRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionConsentToExtensionScopes\ExtensionConsentToExtensionScopesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionCreateContributorOnboardingProcess\ExtensionCreateContributorOnboardingProcessCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionCreateContributorOnboardingProcess\ExtensionCreateContributorOnboardingProcessRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionCreateExtensionInstance\ExtensionCreateExtensionInstanceCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionCreateExtensionInstance\ExtensionCreateExtensionInstanceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionCreateRetrievalKey\ExtensionCreateRetrievalKeyOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionCreateRetrievalKey\ExtensionCreateRetrievalKeyRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionDeleteExtension\ExtensionDeleteExtensionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionDeleteExtensionInstance\ExtensionDeleteExtensionInstanceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionDisableExtensionInstance\ExtensionDisableExtensionInstanceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionDryRunWebhook\ExtensionDryRunWebhookOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionDryRunWebhook\ExtensionDryRunWebhookRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionEnableExtensionInstance\ExtensionEnableExtensionInstanceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGenerateExtensionSecret\ExtensionGenerateExtensionSecretOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGenerateExtensionSecret\ExtensionGenerateExtensionSecretRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGenerateSessionToken\ExtensionGenerateSessionTokenOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGenerateSessionToken\ExtensionGenerateSessionTokenRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetContributor\ExtensionGetContributorRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetCustomerExtensionInstanceOrders\ExtensionGetCustomerExtensionInstanceOrdersOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetCustomerExtensionInstanceOrders\ExtensionGetCustomerExtensionInstanceOrdersRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetExtension\ExtensionGetExtensionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetExtensionInstance\ExtensionGetExtensionInstanceOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetExtensionInstance\ExtensionGetExtensionInstanceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetExtensionInstanceContract\ExtensionGetExtensionInstanceContractOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetExtensionInstanceContract\ExtensionGetExtensionInstanceContractRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetExtensionInstanceForCustomer\ExtensionGetExtensionInstanceForCustomerOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetExtensionInstanceForCustomer\ExtensionGetExtensionInstanceForCustomerRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetExtensionInstanceForProject\ExtensionGetExtensionInstanceForProjectOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetExtensionInstanceForProject\ExtensionGetExtensionInstanceForProjectRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetOwnExtension\ExtensionGetOwnExtensionOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetOwnExtension\ExtensionGetOwnExtensionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetProjectExtensionInstanceOrders\ExtensionGetProjectExtensionInstanceOrdersOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetProjectExtensionInstanceOrders\ExtensionGetProjectExtensionInstanceOrdersRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetPublicKey\ExtensionGetPublicKeyOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetPublicKey\ExtensionGetPublicKeyRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionInvalidateExtensionSecret\ExtensionInvalidateExtensionSecretRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionListContributors\ExtensionListContributorsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionListContributors\ExtensionListContributorsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionListExtensionInstances\ExtensionListExtensionInstancesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionListExtensionInstances\ExtensionListExtensionInstancesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionListExtensions\ExtensionListExtensionsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionListExtensions\ExtensionListExtensionsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionListOwnExtensions\ExtensionListOwnExtensionsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionListOwnExtensions\ExtensionListOwnExtensionsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionListScopes\ExtensionListScopesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionListScopes\ExtensionListScopesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionOrderExtension\ExtensionOrderExtensionCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionOrderExtension\ExtensionOrderExtensionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionPatchExtension\ExtensionPatchExtensionOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionPatchExtension\ExtensionPatchExtensionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRegisterExtension\ExtensionRegisterExtensionCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRegisterExtension\ExtensionRegisterExtensionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRemoveAsset\ExtensionRemoveAssetRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRemoveLogo\ExtensionRemoveLogoRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRequestAssetUpload\ExtensionRequestAssetUploadOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRequestAssetUpload\ExtensionRequestAssetUploadRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRequestExtensionVerification\ExtensionRequestExtensionVerificationNoContentResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRequestExtensionVerification\ExtensionRequestExtensionVerificationRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRequestLogoUpload\ExtensionRequestLogoUploadOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRequestLogoUpload\ExtensionRequestLogoUploadRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionScheduleExtensionTermination\ExtensionScheduleExtensionTerminationCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionScheduleExtensionTermination\ExtensionScheduleExtensionTerminationRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionSetExtensionPublishedState\ExtensionSetExtensionPublishedStateOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionSetExtensionPublishedState\ExtensionSetExtensionPublishedStateRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionUpdateExtensionInstanceContract\ExtensionUpdateExtensionInstanceContractOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionUpdateExtensionInstanceContract\ExtensionUpdateExtensionInstanceContractRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionUpdateExtensionPricing\ExtensionUpdateExtensionPricingOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionUpdateExtensionPricing\ExtensionUpdateExtensionPricingRequest;

/**
 * Client for Marketplace API
 *
 * The marketplace API allows you to manage extensions and more information
 * regaring the marketplace.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
interface MarketplaceClient
{
    /**
     * Delete a Contributor.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/contributor-delete-contributor
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ContributorDeleteContributorRequest $request An object representing the request for this operation
     * @return EmptyResponse The Contributor has been deleted.
     */
    public function contributorDeleteContributor(ContributorDeleteContributorRequest $request): EmptyResponse;
    /**
     * Express interest to be a contributor.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/contributor-express-interest-to-contribute
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ContributorExpressInterestToContributeRequest $request An object representing the request for this operation
     * @return ContributorExpressInterestToContributeCreatedResponse Customer became an unverified contributor.
     */
    public function contributorExpressInterestToContribute(ContributorExpressInterestToContributeRequest $request): ContributorExpressInterestToContributeCreatedResponse;
    /**
     * Get Contributor Billing Information.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/contributor-get-billing-information
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ContributorGetBillingInformationRequest $request An object representing the request for this operation
     * @return ContributorGetBillingInformationOKResponse The billing related information of the Contributor
     */
    public function contributorGetBillingInformation(ContributorGetBillingInformationRequest $request): ContributorGetBillingInformationOKResponse;
    /**
     * Get the Stripe Billing Portal Link for a Customer
     *
     * Get the Stripe Billing Portal Link for a Customer.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/contributor-get-customer-billing-portal-link
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ContributorGetCustomerBillingPortalLinkRequest $request An object representing the request for this operation
     * @return ContributorGetCustomerBillingPortalLinkOKResponse The generated link to the Stripe Billing Portal
     */
    public function contributorGetCustomerBillingPortalLink(ContributorGetCustomerBillingPortalLinkRequest $request): ContributorGetCustomerBillingPortalLinkOKResponse;
    /**
     * Get the Stripe Dashboard Link for a Contributor.
     *
     * Get the Stripe Dashboard Link for a Contributor.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/contributor-get-login-link
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ContributorGetLoginLinkRequest $request An object representing the request for this operation
     * @return ContributorGetLoginLinkOKResponse The generated link to the Stripe dashboard
     */
    public function contributorGetLoginLink(ContributorGetLoginLinkRequest $request): ContributorGetLoginLinkOKResponse;
    /**
     * List ContractPartners of the contributor.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/contributor-list-contract-partners-of-contributor
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ContributorListContractPartnersOfContributorRequest $request An object representing the request for this operation
     * @return ContributorListContractPartnersOfContributorOKResponse A list of contract partners.
     */
    public function contributorListContractPartnersOfContributor(ContributorListContractPartnersOfContributorRequest $request): ContributorListContractPartnersOfContributorOKResponse;
    /**
     * List incoming Invoices of a Contributor.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/contributor-list-incoming-invoices
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ContributorListIncomingInvoicesRequest $request An object representing the request for this operation
     * @return ContributorListIncomingInvoicesOKResponse List of incoming Invoices
     */
    public function contributorListIncomingInvoices(ContributorListIncomingInvoicesRequest $request): ContributorListIncomingInvoicesOKResponse;
    /**
     * List all invoices on behalf of a contributor.
     *
     * List all invoices on behalf of a contributor.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/contributor-list-onbehalf-invoices
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ContributorListOnbehalfInvoicesRequest $request An object representing the request for this operation
     * @return ContributorListOnbehalfInvoicesOKResponse The list of invoices on behalf of a contributor.
     */
    public function contributorListOnbehalfInvoices(ContributorListOnbehalfInvoicesRequest $request): ContributorListOnbehalfInvoicesOKResponse;
    /**
     * Patch Contributor.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/contributor-patch-contributor
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ContributorPatchContributorRequest $request An object representing the request for this operation
     * @return ContributorPatchContributorOKResponse Contributor has been patched.
     */
    public function contributorPatchContributor(ContributorPatchContributorRequest $request): ContributorPatchContributorOKResponse;
    /**
     * Request an Access Token for the Incoming Invoice file.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/contributor-receipt-get-file-access-token
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ContributorReceiptGetFileAccessTokenRequest $request An object representing the request for this operation
     * @return ContributorReceiptGetFileAccessTokenOKResponse The File Access Token required to access the Incoming Invoice file.
     */
    public function contributorReceiptGetFileAccessToken(ContributorReceiptGetFileAccessTokenRequest $request): ContributorReceiptGetFileAccessTokenOKResponse;
    /**
     * Add a deviating avatar to a Contributor.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/contributor-request-deviating-contributor-avatar-upload
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ContributorRequestDeviatingContributorAvatarUploadRequest $request An object representing the request for this operation
     * @return ContributorRequestDeviatingContributorAvatarUploadOKResponse The Upload of an avatar for the contributor has been requested.
     */
    public function contributorRequestDeviatingContributorAvatarUpload(ContributorRequestDeviatingContributorAvatarUploadRequest $request): ContributorRequestDeviatingContributorAvatarUploadOKResponse;
    /**
     * Delete deviating contributor avatar und return to the inherited customer avatar.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/contributor-reset-contributor-avatar
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ContributorResetContributorAvatarRequest $request An object representing the request for this operation
     * @return EmptyResponse Returned to the inherited customer avatar.
     */
    public function contributorResetContributorAvatar(ContributorResetContributorAvatarRequest $request): EmptyResponse;
    /**
     * Rotate the secret for an extension instance.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/contributor-rotate-secret-for-extension-instance
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ContributorRotateSecretForExtensionInstanceRequest $request An object representing the request for this operation
     * @return ContributorRotateSecretForExtensionInstanceOKResponse Secret rotated successfully.
     */
    public function contributorRotateSecretForExtensionInstance(ContributorRotateSecretForExtensionInstanceRequest $request): ContributorRotateSecretForExtensionInstanceOKResponse;
    /**
     * Update Contributor Billing Information.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/contributor-update-billing-information
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ContributorUpdateBillingInformationRequest $request An object representing the request for this operation
     * @return ContributorUpdateBillingInformationOKResponse The billing related information of the Contributor
     */
    public function contributorUpdateBillingInformation(ContributorUpdateBillingInformationRequest $request): ContributorUpdateBillingInformationOKResponse;
    /**
     * Authenticate your external application using the extensionInstanceSecret.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-authenticate-instance
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionAuthenticateInstanceRequest $request An object representing the request for this operation
     * @return ExtensionAuthenticateInstanceCreatedResponse You received a public token with a short expiry. You can now perform domain actions.
     */
    public function extensionAuthenticateInstance(ExtensionAuthenticateInstanceRequest $request): ExtensionAuthenticateInstanceCreatedResponse;
    /**
     * Authenticate your external application using a session token and an extension secret
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-authenticate-with-session-token
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionAuthenticateWithSessionTokenRequest $request An object representing the request for this operation
     * @return ExtensionAuthenticateWithSessionTokenCreatedResponse You received a public token with a short expiry. You can now perform domain actions.
     */
    public function extensionAuthenticateWithSessionToken(ExtensionAuthenticateWithSessionTokenRequest $request): ExtensionAuthenticateWithSessionTokenCreatedResponse;
    /**
     * Cancel an Extension Instance Termination.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-cancel-extension-termination
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionCancelExtensionTerminationRequest $request An object representing the request for this operation
     * @return ExtensionCancelExtensionTerminationOKResponse The Termination was cancelled.
     */
    public function extensionCancelExtensionTermination(ExtensionCancelExtensionTerminationRequest $request): ExtensionCancelExtensionTerminationOKResponse;
    /**
     * Change the context of an Extension.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-change-context
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionChangeContextRequest $request An object representing the request for this operation
     * @return ExtensionChangeContextOKResponse The Extension context-change has been requested.
     */
    public function extensionChangeContext(ExtensionChangeContextRequest $request): ExtensionChangeContextOKResponse;
    /**
     * Consent to extension scopes.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-consent-to-extension-scopes
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionConsentToExtensionScopesRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function extensionConsentToExtensionScopes(ExtensionConsentToExtensionScopesRequest $request): EmptyResponse;
    /**
     * Create the OnboardingProcess of a Contributor.
     *
     * The OnboardingProcess is needed to publish paid extensions.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-create-contributor-onboarding-process
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionCreateContributorOnboardingProcessRequest $request An object representing the request for this operation
     * @return ExtensionCreateContributorOnboardingProcessCreatedResponse The Process has been started.
     */
    public function extensionCreateContributorOnboardingProcess(ExtensionCreateContributorOnboardingProcessRequest $request): ExtensionCreateContributorOnboardingProcessCreatedResponse;
    /**
     * Create an ExtensionInstance.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-create-extension-instance
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionCreateExtensionInstanceRequest $request An object representing the request for this operation
     * @return ExtensionCreateExtensionInstanceCreatedResponse The ExtensionInstance ID.
     */
    public function extensionCreateExtensionInstance(ExtensionCreateExtensionInstanceRequest $request): ExtensionCreateExtensionInstanceCreatedResponse;
    /**
     * Create an access token retrieval key for an extension instance.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-create-retrieval-key
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionCreateRetrievalKeyRequest $request An object representing the request for this operation
     * @return ExtensionCreateRetrievalKeyOKResponse An access token retrieval key. This key can be used to retrieve a scoped access token from an external application.
     */
    public function extensionCreateRetrievalKey(ExtensionCreateRetrievalKeyRequest $request): ExtensionCreateRetrievalKeyOKResponse;
    /**
     * Delete an extension.
     *
     * This action deletes all ExtensionInstances and afterwards the Extension itself.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-delete-extension
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionDeleteExtensionRequest $request An object representing the request for this operation
     * @return EmptyResponse The extension will be removed asynchronously
     */
    public function extensionDeleteExtension(ExtensionDeleteExtensionRequest $request): EmptyResponse;
    /**
     * Delete a free ExtensionInstance. If the Extension is chargable the contract must be terminated instead.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-delete-extension-instance
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionDeleteExtensionInstanceRequest $request An object representing the request for this operation
     * @return UntypedResponse The ExtensionInstance has been removed. It will be cleaned up in the background.
     */
    public function extensionDeleteExtensionInstance(ExtensionDeleteExtensionInstanceRequest $request): UntypedResponse;
    /**
     * Disable an ExtensionInstance.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-disable-extension-instance
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionDisableExtensionInstanceRequest $request An object representing the request for this operation
     * @return UntypedResponse NoContent
     */
    public function extensionDisableExtensionInstance(ExtensionDisableExtensionInstanceRequest $request): UntypedResponse;
    /**
     * Dry run a webhook with random or given values.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-dry-run-webhook
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionDryRunWebhookRequest $request An object representing the request for this operation
     * @return ExtensionDryRunWebhookOKResponse The webhook has been run successfully.
     */
    public function extensionDryRunWebhook(ExtensionDryRunWebhookRequest $request): ExtensionDryRunWebhookOKResponse;
    /**
     * Enable an ExtensionInstance.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-enable-extension-instance
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionEnableExtensionInstanceRequest $request An object representing the request for this operation
     * @return UntypedResponse NoContent
     */
    public function extensionEnableExtensionInstance(ExtensionEnableExtensionInstanceRequest $request): UntypedResponse;
    /**
     * Generate an Extension secret for the given Extension.
     *
     * This generates a new Extension secret for the given Extension.
     * If an Extension secret existed previously, it will deprecate the existing secret.
     * This means, it will be invalidated after approximately one day.
     *
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-generate-extension-secret
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionGenerateExtensionSecretRequest $request An object representing the request for this operation
     * @return ExtensionGenerateExtensionSecretOKResponse A new Extension secret has been generated.
     */
    public function extensionGenerateExtensionSecret(ExtensionGenerateExtensionSecretRequest $request): ExtensionGenerateExtensionSecretOKResponse;
    /**
     * Generate a session token to transmit it to the extensions frontend fragment.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-generate-session-token
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionGenerateSessionTokenRequest $request An object representing the request for this operation
     * @return ExtensionGenerateSessionTokenOKResponse The generated session token
     */
    public function extensionGenerateSessionToken(ExtensionGenerateSessionTokenRequest $request): ExtensionGenerateSessionTokenOKResponse;
    /**
     * Get a Contributor.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-get-contributor
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionGetContributorRequest $request An object representing the request for this operation
     * @return UntypedResponse OK
     */
    public function extensionGetContributor(ExtensionGetContributorRequest $request): UntypedResponse;
    /**
     * Get all open extension orders for given customer
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-get-customer-extension-instance-orders
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionGetCustomerExtensionInstanceOrdersRequest $request An object representing the request for this operation
     */
    public function extensionGetCustomerExtensionInstanceOrders(ExtensionGetCustomerExtensionInstanceOrdersRequest $request): ExtensionGetCustomerExtensionInstanceOrdersOKResponse;
    /**
     * Get an Extension.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-get-extension
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionGetExtensionRequest $request An object representing the request for this operation
     * @return UntypedResponse OK
     */
    public function extensionGetExtension(ExtensionGetExtensionRequest $request): UntypedResponse;
    /**
     * Get an ExtensionInstance.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-get-extension-instance
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionGetExtensionInstanceRequest $request An object representing the request for this operation
     * @return ExtensionGetExtensionInstanceOKResponse OK
     */
    public function extensionGetExtensionInstance(ExtensionGetExtensionInstanceRequest $request): ExtensionGetExtensionInstanceOKResponse;
    /**
     * Get the Contract Strategy of an Extension Instance
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-get-extension-instance-contract
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionGetExtensionInstanceContractRequest $request An object representing the request for this operation
     */
    public function extensionGetExtensionInstanceContract(ExtensionGetExtensionInstanceContractRequest $request): ExtensionGetExtensionInstanceContractOKResponse;
    /**
     * Get the ExtensionInstance of a specific customer and extension, if existing.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-get-extension-instance-for-customer
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionGetExtensionInstanceForCustomerRequest $request An object representing the request for this operation
     * @return ExtensionGetExtensionInstanceForCustomerOKResponse OK
     */
    public function extensionGetExtensionInstanceForCustomer(ExtensionGetExtensionInstanceForCustomerRequest $request): ExtensionGetExtensionInstanceForCustomerOKResponse;
    /**
     * Get the ExtensionInstance of a specific project and extension, if existing.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-get-extension-instance-for-project
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionGetExtensionInstanceForProjectRequest $request An object representing the request for this operation
     * @return ExtensionGetExtensionInstanceForProjectOKResponse OK
     */
    public function extensionGetExtensionInstanceForProject(ExtensionGetExtensionInstanceForProjectRequest $request): ExtensionGetExtensionInstanceForProjectOKResponse;
    /**
     * Get Extension of own contributor.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-get-own-extension
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionGetOwnExtensionRequest $request An object representing the request for this operation
     * @return ExtensionGetOwnExtensionOKResponse Get your own extension.
     */
    public function extensionGetOwnExtension(ExtensionGetOwnExtensionRequest $request): ExtensionGetOwnExtensionOKResponse;
    /**
     * Get all open extension orders for given project
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-get-project-extension-instance-orders
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionGetProjectExtensionInstanceOrdersRequest $request An object representing the request for this operation
     */
    public function extensionGetProjectExtensionInstanceOrders(ExtensionGetProjectExtensionInstanceOrdersRequest $request): ExtensionGetProjectExtensionInstanceOrdersOKResponse;
    /**
     * Get the public key to verify the webhook signature.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-get-public-key
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionGetPublicKeyRequest $request An object representing the request for this operation
     * @return ExtensionGetPublicKeyOKResponse Use this public key to verify the webhook signature on your end.
     */
    public function extensionGetPublicKey(ExtensionGetPublicKeyRequest $request): ExtensionGetPublicKeyOKResponse;
    /**
     * Invalidate the given Extension secret immediately.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-invalidate-extension-secret
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionInvalidateExtensionSecretRequest $request An object representing the request for this operation
     * @return EmptyResponse The Extension secret has been invalidated and cannot be used anymore.
     */
    public function extensionInvalidateExtensionSecret(ExtensionInvalidateExtensionSecretRequest $request): EmptyResponse;
    /**
     * List Contributors.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-list-contributors
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionListContributorsRequest $request An object representing the request for this operation
     * @return ExtensionListContributorsOKResponse OK
     */
    public function extensionListContributors(ExtensionListContributorsRequest $request): ExtensionListContributorsOKResponse;
    /**
     * List ExtensionInstances.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-list-extension-instances
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionListExtensionInstancesRequest $request An object representing the request for this operation
     * @return ExtensionListExtensionInstancesOKResponse A list of extension instances.
     */
    public function extensionListExtensionInstances(ExtensionListExtensionInstancesRequest $request): ExtensionListExtensionInstancesOKResponse;
    /**
     * List Extensions.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-list-extensions
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionListExtensionsRequest $request An object representing the request for this operation
     * @return ExtensionListExtensionsOKResponse OK
     */
    public function extensionListExtensions(ExtensionListExtensionsRequest $request): ExtensionListExtensionsOKResponse;
    /**
     * List Extensions of own contributor.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-list-own-extensions
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionListOwnExtensionsRequest $request An object representing the request for this operation
     * @return ExtensionListOwnExtensionsOKResponse A list of extensions of the contributor.
     */
    public function extensionListOwnExtensions(ExtensionListOwnExtensionsRequest $request): ExtensionListOwnExtensionsOKResponse;
    /**
     * List Scopes.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-list-scopes
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionListScopesRequest $request An object representing the request for this operation
     * @return ExtensionListScopesOKResponse A list of possible scopes for the mStudio.
     */
    public function extensionListScopes(ExtensionListScopesRequest $request): ExtensionListScopesOKResponse;
    /**
     * Order Extension with saved payment method
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-order-extension
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionOrderExtensionRequest $request An object representing the request for this operation
     * @return ExtensionOrderExtensionCreatedResponse Order successful. Extension will be installed in the background.
     */
    public function extensionOrderExtension(ExtensionOrderExtensionRequest $request): ExtensionOrderExtensionCreatedResponse;
    /**
     * Patch Extension.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-patch-extension
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionPatchExtensionRequest $request An object representing the request for this operation
     * @return ExtensionPatchExtensionOKResponse The extension has been patched.
     */
    public function extensionPatchExtension(ExtensionPatchExtensionRequest $request): ExtensionPatchExtensionOKResponse;
    /**
     * Register an Extension.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-register-extension
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionRegisterExtensionRequest $request An object representing the request for this operation
     * @return ExtensionRegisterExtensionCreatedResponse The extension has been registered.
     */
    public function extensionRegisterExtension(ExtensionRegisterExtensionRequest $request): ExtensionRegisterExtensionCreatedResponse;
    /**
     * Remove an asset of an extension.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-remove-asset
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionRemoveAssetRequest $request An object representing the request for this operation
     * @return EmptyResponse The asset has been removed.
     */
    public function extensionRemoveAsset(ExtensionRemoveAssetRequest $request): EmptyResponse;
    /**
     * Remove the logo of an extension.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-remove-logo
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionRemoveLogoRequest $request An object representing the request for this operation
     * @return EmptyResponse The Logo has been removed.
     */
    public function extensionRemoveLogo(ExtensionRemoveLogoRequest $request): EmptyResponse;
    /**
     * Add an asset to an extension.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-request-asset-upload
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionRequestAssetUploadRequest $request An object representing the request for this operation
     * @return ExtensionRequestAssetUploadOKResponse The Upload of an asset for the extension has been requested.
     */
    public function extensionRequestAssetUpload(ExtensionRequestAssetUploadRequest $request): ExtensionRequestAssetUploadOKResponse;
    /**
     * Start the verification process of an Extension.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-request-extension-verification
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionRequestExtensionVerificationRequest $request An object representing the request for this operation
     * @return ExtensionRequestExtensionVerificationNoContentResponse The verification has been requested.
     */
    public function extensionRequestExtensionVerification(ExtensionRequestExtensionVerificationRequest $request): ExtensionRequestExtensionVerificationNoContentResponse;
    /**
     * Add a logo to an extension.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-request-logo-upload
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionRequestLogoUploadRequest $request An object representing the request for this operation
     * @return ExtensionRequestLogoUploadOKResponse The Upload of a logo for the extension has been requested.
     */
    public function extensionRequestLogoUpload(ExtensionRequestLogoUploadRequest $request): ExtensionRequestLogoUploadOKResponse;
    /**
     * Schedule an Extension Instance Termination for the next possible date.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-schedule-extension-termination
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionScheduleExtensionTerminationRequest $request An object representing the request for this operation
     * @return ExtensionScheduleExtensionTerminationCreatedResponse A Termination was scheduled.
     */
    public function extensionScheduleExtensionTermination(ExtensionScheduleExtensionTerminationRequest $request): ExtensionScheduleExtensionTerminationCreatedResponse;
    /**
     * Publish or withdraw an Extension.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-set-extension-published-state
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionSetExtensionPublishedStateRequest $request An object representing the request for this operation
     * @return ExtensionSetExtensionPublishedStateOKResponse The Extension visibility has been adjusted.
     */
    public function extensionSetExtensionPublishedState(ExtensionSetExtensionPublishedStateRequest $request): ExtensionSetExtensionPublishedStateOKResponse;
    /**
     * Update or Create Contract for existing Extension Instances.
     *
     * Call to update Contract for existing Extension Instances. For example to accept a new Pricing.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-update-extension-instance-contract
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionUpdateExtensionInstanceContractRequest $request An object representing the request for this operation
     * @return ExtensionUpdateExtensionInstanceContractOKResponse The Price Update has successfully confirmed.
     */
    public function extensionUpdateExtensionInstanceContract(ExtensionUpdateExtensionInstanceContractRequest $request): ExtensionUpdateExtensionInstanceContractOKResponse;
    /**
     * Creates or Updates Pricing for an Extension.
     *
     * The Pricing is needed to publish paid extensions.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-update-extension-pricing
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionUpdateExtensionPricingRequest $request An object representing the request for this operation
     * @return ExtensionUpdateExtensionPricingOKResponse The Pricing has been updated.
     */
    public function extensionUpdateExtensionPricing(ExtensionUpdateExtensionPricingRequest $request): ExtensionUpdateExtensionPricingOKResponse;
    /**
     * Get payment method details
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/marketplace-customer-get-payment-method
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CustomerGetPaymentMethodRequest $request An object representing the request for this operation
     * @return CustomerGetPaymentMethodOKResponse The payment method details
     */
    public function customerGetPaymentMethod(CustomerGetPaymentMethodRequest $request): CustomerGetPaymentMethodOKResponse;
    /**
     * Get the link to update the marketplace payment method
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/marketplace-customer-update-payment-method
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CustomerUpdatePaymentMethodRequest $request An object representing the request for this operation
     * @return CustomerUpdatePaymentMethodOKResponse The generated link to the Stripe payment method setup
     */
    public function customerUpdatePaymentMethod(CustomerUpdatePaymentMethodRequest $request): CustomerUpdatePaymentMethodOKResponse;
}
