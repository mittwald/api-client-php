<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace;

use GuzzleHttp\Exception\GuzzleException;
use Mittwald\ApiClient\Client\UntypedResponse;
use Mittwald\ApiClient\Error\UnexpectedResponseException;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorGetLoginLink\ContributorGetLoginLinkOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorGetLoginLink\ContributorGetLoginLinkRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorRotateSecretForExtensionInstance\ContributorRotateSecretForExtensionInstanceOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorRotateSecretForExtensionInstance\ContributorRotateSecretForExtensionInstanceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionAuthenticateInstance\ExtensionAuthenticateInstanceCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionAuthenticateInstance\ExtensionAuthenticateInstanceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionConsentToExtensionScopes\ExtensionConsentToExtensionScopesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionCreateContributorOnboardingProcess\ExtensionCreateContributorOnboardingProcessCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionCreateContributorOnboardingProcess\ExtensionCreateContributorOnboardingProcessRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionCreateExtensionInstance\ExtensionCreateExtensionInstanceCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionCreateExtensionInstance\ExtensionCreateExtensionInstanceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionCreateRetrievalKey\ExtensionCreateRetrievalKeyOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionCreateRetrievalKey\ExtensionCreateRetrievalKeyRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionDeleteExtensionInstance\ExtensionDeleteExtensionInstanceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionDisableExtensionInstance\ExtensionDisableExtensionInstanceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionDryRunWebhook\ExtensionDryRunWebhookOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionDryRunWebhook\ExtensionDryRunWebhookRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionEnableExtensionInstance\ExtensionEnableExtensionInstanceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetContributor\ExtensionGetContributorOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetContributor\ExtensionGetContributorRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetExtension\ExtensionGetExtensionOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetExtension\ExtensionGetExtensionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetExtensionInstance\ExtensionGetExtensionInstanceOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetExtensionInstance\ExtensionGetExtensionInstanceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetExtensionInstanceForCustomer\ExtensionGetExtensionInstanceForCustomerOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetExtensionInstanceForCustomer\ExtensionGetExtensionInstanceForCustomerRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetExtensionInstanceForProject\ExtensionGetExtensionInstanceForProjectOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetExtensionInstanceForProject\ExtensionGetExtensionInstanceForProjectRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetPublicKey\ExtensionGetPublicKeyOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetPublicKey\ExtensionGetPublicKeyRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionListContributors\ExtensionListContributorsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionListContributors\ExtensionListContributorsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionListExtensionInstances\ExtensionListExtensionInstancesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionListExtensionInstances\ExtensionListExtensionInstancesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionListExtensions\ExtensionListExtensionsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionListExtensions\ExtensionListExtensionsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionListOwnExtensions\ExtensionListOwnExtensionsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionListOwnExtensions\ExtensionListOwnExtensionsRequest;
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
     * Get the Stripe Dashboard Link for a Contributor.
     *
     * Get the Stripe Dashboard Link for a Contributor.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/contributor-get-login-link
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ContributorGetLoginLinkRequest $request An object representing the request for this operation
     * @return ContributorGetLoginLinkOKResponse The generated link to the stripe dashboard
     */
    public function contributorGetLoginLink(ContributorGetLoginLinkRequest $request): ContributorGetLoginLinkOKResponse;
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
     * Consent to extension scopes.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-consent-to-extension-scopes
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionConsentToExtensionScopesRequest $request An object representing the request for this operation
     * @return UntypedResponse NoContent
     */
    public function extensionConsentToExtensionScopes(ExtensionConsentToExtensionScopesRequest $request): UntypedResponse;
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
     * Delete an ExtensionInstance.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-delete-extension-instance
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionDeleteExtensionInstanceRequest $request An object representing the request for this operation
     * @return UntypedResponse NoContent
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
     * Get a Contributor.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-get-contributor
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionGetContributorRequest $request An object representing the request for this operation
     * @return ExtensionGetContributorOKResponse OK
     */
    public function extensionGetContributor(ExtensionGetContributorRequest $request): ExtensionGetContributorOKResponse;
    /**
     * Get an Extension.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-get-extension
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionGetExtensionRequest $request An object representing the request for this operation
     * @return ExtensionGetExtensionOKResponse OK
     */
    public function extensionGetExtension(ExtensionGetExtensionRequest $request): ExtensionGetExtensionOKResponse;
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
     * @return ExtensionListExtensionInstancesOKResponse OK
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
     * Update or Create Contract for existing Extension Instances.
     *
     * Call to update Contract for existing Extension Instances. For example to accept a new Pricing.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-update-extension-instance-contract
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionUpdateExtensionInstanceContractRequest $request An object representing the request for this operation
     * @return ExtensionUpdateExtensionInstanceContractOKResponse The Pricing adjustment can be confirmed in the checkout with the given url.
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
}
