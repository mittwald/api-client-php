<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace;

use GuzzleHttp\Exception\GuzzleException;
use Mittwald\ApiClient\Client\EmptyResponse;
use Mittwald\ApiClient\Client\UntypedResponse;
use Mittwald\ApiClient\Error\UnexpectedResponseException;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorRotateSecretForExtensionInstance\ContributorRotateSecretForExtensionInstanceOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorRotateSecretForExtensionInstance\ContributorRotateSecretForExtensionInstanceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionAuthenticateInstance\ExtensionAuthenticateInstanceCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionAuthenticateInstance\ExtensionAuthenticateInstanceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionAuthenticateWithSessionToken\ExtensionAuthenticateWithSessionTokenCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionAuthenticateWithSessionToken\ExtensionAuthenticateWithSessionTokenRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionConsentToExtensionScopes\ExtensionConsentToExtensionScopesRequest;
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
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGenerateSessionToken\ExtensionGenerateSessionTokenOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGenerateSessionToken\ExtensionGenerateSessionTokenRequest;
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
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetOwnExtension\ExtensionGetOwnExtensionOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetOwnExtension\ExtensionGetOwnExtensionRequest;
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
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionPatchExtension\ExtensionPatchExtensionOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionPatchExtension\ExtensionPatchExtensionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRegisterExtension\ExtensionRegisterExtensionCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRegisterExtension\ExtensionRegisterExtensionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRemoveAsset\ExtensionRemoveAssetRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRequestAssetUpload\ExtensionRequestAssetUploadOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRequestAssetUpload\ExtensionRequestAssetUploadRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRequestExtensionVerification\ExtensionRequestExtensionVerificationNoContentResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRequestExtensionVerification\ExtensionRequestExtensionVerificationRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRequestLogoUpload\ExtensionRequestLogoUploadOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRequestLogoUpload\ExtensionRequestLogoUploadRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionSetExtensionPublishedState\ExtensionSetExtensionPublishedStateOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionSetExtensionPublishedState\ExtensionSetExtensionPublishedStateRequest;

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
     * Authenticate your external application using the extensionInstanceSecret.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-authenticate-with-session-token
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionAuthenticateWithSessionTokenRequest $request An object representing the request for this operation
     * @return ExtensionAuthenticateWithSessionTokenCreatedResponse You received a public token with a short expiry. You can now perform domain actions.
     */
    public function extensionAuthenticateWithSessionToken(ExtensionAuthenticateWithSessionTokenRequest $request): ExtensionAuthenticateWithSessionTokenCreatedResponse;
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
     * Publish or withdraw an Extension.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-set-extension-published-state
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionSetExtensionPublishedStateRequest $request An object representing the request for this operation
     * @return ExtensionSetExtensionPublishedStateOKResponse The Extension visibility has been adjusted.
     */
    public function extensionSetExtensionPublishedState(ExtensionSetExtensionPublishedStateRequest $request): ExtensionSetExtensionPublishedStateOKResponse;
}
