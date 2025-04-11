<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use Mittwald\ApiClient\Client\EmptyResponse;
use Mittwald\ApiClient\Client\UntypedResponse;
use Mittwald\ApiClient\Error\UnexpectedResponseException;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorGetBillingInformation\ContributorGetBillingInformationBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorGetBillingInformation\ContributorGetBillingInformationDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorGetBillingInformation\ContributorGetBillingInformationNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorGetBillingInformation\ContributorGetBillingInformationOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorGetBillingInformation\ContributorGetBillingInformationRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorGetBillingInformation\ContributorGetBillingInformationTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorGetCustomerBillingPortalLink\ContributorGetCustomerBillingPortalLinkBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorGetCustomerBillingPortalLink\ContributorGetCustomerBillingPortalLinkDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorGetCustomerBillingPortalLink\ContributorGetCustomerBillingPortalLinkNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorGetCustomerBillingPortalLink\ContributorGetCustomerBillingPortalLinkOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorGetCustomerBillingPortalLink\ContributorGetCustomerBillingPortalLinkRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorGetCustomerBillingPortalLink\ContributorGetCustomerBillingPortalLinkTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorGetLoginLink\ContributorGetLoginLinkBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorGetLoginLink\ContributorGetLoginLinkDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorGetLoginLink\ContributorGetLoginLinkNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorGetLoginLink\ContributorGetLoginLinkOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorGetLoginLink\ContributorGetLoginLinkRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorGetLoginLink\ContributorGetLoginLinkTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorListIncomingInvoices\ContributorListIncomingInvoicesBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorListIncomingInvoices\ContributorListIncomingInvoicesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorListIncomingInvoices\ContributorListIncomingInvoicesNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorListIncomingInvoices\ContributorListIncomingInvoicesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorListIncomingInvoices\ContributorListIncomingInvoicesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorListIncomingInvoices\ContributorListIncomingInvoicesTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorListOnbehalfInvoices\ContributorListOnbehalfInvoicesBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorListOnbehalfInvoices\ContributorListOnbehalfInvoicesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorListOnbehalfInvoices\ContributorListOnbehalfInvoicesNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorListOnbehalfInvoices\ContributorListOnbehalfInvoicesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorListOnbehalfInvoices\ContributorListOnbehalfInvoicesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorListOnbehalfInvoices\ContributorListOnbehalfInvoicesTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorReceiptGetFileAccessToken\ContributorReceiptGetFileAccessTokenBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorReceiptGetFileAccessToken\ContributorReceiptGetFileAccessTokenDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorReceiptGetFileAccessToken\ContributorReceiptGetFileAccessTokenNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorReceiptGetFileAccessToken\ContributorReceiptGetFileAccessTokenOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorReceiptGetFileAccessToken\ContributorReceiptGetFileAccessTokenRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorReceiptGetFileAccessToken\ContributorReceiptGetFileAccessTokenTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorRotateSecretForExtensionInstance\ContributorRotateSecretForExtensionInstanceBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorRotateSecretForExtensionInstance\ContributorRotateSecretForExtensionInstanceDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorRotateSecretForExtensionInstance\ContributorRotateSecretForExtensionInstanceNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorRotateSecretForExtensionInstance\ContributorRotateSecretForExtensionInstanceOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorRotateSecretForExtensionInstance\ContributorRotateSecretForExtensionInstanceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorRotateSecretForExtensionInstance\ContributorRotateSecretForExtensionInstanceTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionAuthenticateInstance\ExtensionAuthenticateInstanceBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionAuthenticateInstance\ExtensionAuthenticateInstanceCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionAuthenticateInstance\ExtensionAuthenticateInstanceDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionAuthenticateInstance\ExtensionAuthenticateInstanceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionAuthenticateWithSessionToken\ExtensionAuthenticateWithSessionTokenBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionAuthenticateWithSessionToken\ExtensionAuthenticateWithSessionTokenCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionAuthenticateWithSessionToken\ExtensionAuthenticateWithSessionTokenDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionAuthenticateWithSessionToken\ExtensionAuthenticateWithSessionTokenNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionAuthenticateWithSessionToken\ExtensionAuthenticateWithSessionTokenRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionChangeContext\ExtensionChangeContextDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionChangeContext\ExtensionChangeContextNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionChangeContext\ExtensionChangeContextOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionChangeContext\ExtensionChangeContextRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionChangeContext\ExtensionChangeContextTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionConsentToExtensionScopes\ExtensionConsentToExtensionScopesBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionConsentToExtensionScopes\ExtensionConsentToExtensionScopesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionConsentToExtensionScopes\ExtensionConsentToExtensionScopesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionConsentToExtensionScopes\ExtensionConsentToExtensionScopesTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionCreateContributorOnboardingProcess\ExtensionCreateContributorOnboardingProcessBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionCreateContributorOnboardingProcess\ExtensionCreateContributorOnboardingProcessCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionCreateContributorOnboardingProcess\ExtensionCreateContributorOnboardingProcessDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionCreateContributorOnboardingProcess\ExtensionCreateContributorOnboardingProcessNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionCreateContributorOnboardingProcess\ExtensionCreateContributorOnboardingProcessRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionCreateContributorOnboardingProcess\ExtensionCreateContributorOnboardingProcessTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionCreateExtensionInstance\ExtensionCreateExtensionInstanceBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionCreateExtensionInstance\ExtensionCreateExtensionInstanceCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionCreateExtensionInstance\ExtensionCreateExtensionInstanceDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionCreateExtensionInstance\ExtensionCreateExtensionInstanceNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionCreateExtensionInstance\ExtensionCreateExtensionInstancePreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionCreateExtensionInstance\ExtensionCreateExtensionInstanceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionCreateExtensionInstance\ExtensionCreateExtensionInstanceTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionCreateRetrievalKey\ExtensionCreateRetrievalKeyBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionCreateRetrievalKey\ExtensionCreateRetrievalKeyDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionCreateRetrievalKey\ExtensionCreateRetrievalKeyOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionCreateRetrievalKey\ExtensionCreateRetrievalKeyRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionCreateRetrievalKey\ExtensionCreateRetrievalKeyTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionDeleteExtension\ExtensionDeleteExtensionDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionDeleteExtension\ExtensionDeleteExtensionNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionDeleteExtension\ExtensionDeleteExtensionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionDeleteExtension\ExtensionDeleteExtensionTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionDeleteExtensionInstance\ExtensionDeleteExtensionInstanceDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionDeleteExtensionInstance\ExtensionDeleteExtensionInstanceNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionDeleteExtensionInstance\ExtensionDeleteExtensionInstanceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionDeleteExtensionInstance\ExtensionDeleteExtensionInstanceTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionDisableExtensionInstance\ExtensionDisableExtensionInstanceBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionDisableExtensionInstance\ExtensionDisableExtensionInstanceDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionDisableExtensionInstance\ExtensionDisableExtensionInstanceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionDisableExtensionInstance\ExtensionDisableExtensionInstanceTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionDryRunWebhook\ExtensionDryRunWebhookBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionDryRunWebhook\ExtensionDryRunWebhookDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionDryRunWebhook\ExtensionDryRunWebhookOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionDryRunWebhook\ExtensionDryRunWebhookRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionDryRunWebhook\ExtensionDryRunWebhookTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionEnableExtensionInstance\ExtensionEnableExtensionInstanceBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionEnableExtensionInstance\ExtensionEnableExtensionInstanceDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionEnableExtensionInstance\ExtensionEnableExtensionInstanceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionEnableExtensionInstance\ExtensionEnableExtensionInstanceTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGenerateSessionToken\ExtensionGenerateSessionTokenBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGenerateSessionToken\ExtensionGenerateSessionTokenDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGenerateSessionToken\ExtensionGenerateSessionTokenNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGenerateSessionToken\ExtensionGenerateSessionTokenOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGenerateSessionToken\ExtensionGenerateSessionTokenRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGenerateSessionToken\ExtensionGenerateSessionTokenTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetContributor\ExtensionGetContributorDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetContributor\ExtensionGetContributorNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetContributor\ExtensionGetContributorOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetContributor\ExtensionGetContributorRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetContributor\ExtensionGetContributorTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetExtension\ExtensionGetExtensionDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetExtension\ExtensionGetExtensionNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetExtension\ExtensionGetExtensionOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetExtension\ExtensionGetExtensionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetExtension\ExtensionGetExtensionTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetExtensionInstance\ExtensionGetExtensionInstanceDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetExtensionInstance\ExtensionGetExtensionInstanceNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetExtensionInstance\ExtensionGetExtensionInstanceOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetExtensionInstance\ExtensionGetExtensionInstanceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetExtensionInstance\ExtensionGetExtensionInstanceTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetExtensionInstanceForCustomer\ExtensionGetExtensionInstanceForCustomerDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetExtensionInstanceForCustomer\ExtensionGetExtensionInstanceForCustomerNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetExtensionInstanceForCustomer\ExtensionGetExtensionInstanceForCustomerOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetExtensionInstanceForCustomer\ExtensionGetExtensionInstanceForCustomerRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetExtensionInstanceForCustomer\ExtensionGetExtensionInstanceForCustomerTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetExtensionInstanceForProject\ExtensionGetExtensionInstanceForProjectDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetExtensionInstanceForProject\ExtensionGetExtensionInstanceForProjectNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetExtensionInstanceForProject\ExtensionGetExtensionInstanceForProjectOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetExtensionInstanceForProject\ExtensionGetExtensionInstanceForProjectRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetExtensionInstanceForProject\ExtensionGetExtensionInstanceForProjectTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetOwnExtension\ExtensionGetOwnExtensionDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetOwnExtension\ExtensionGetOwnExtensionNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetOwnExtension\ExtensionGetOwnExtensionOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetOwnExtension\ExtensionGetOwnExtensionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetOwnExtension\ExtensionGetOwnExtensionTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetPublicKey\ExtensionGetPublicKeyDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetPublicKey\ExtensionGetPublicKeyNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetPublicKey\ExtensionGetPublicKeyOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetPublicKey\ExtensionGetPublicKeyRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetPublicKey\ExtensionGetPublicKeyTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionListContributors\ExtensionListContributorsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionListContributors\ExtensionListContributorsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionListContributors\ExtensionListContributorsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionListContributors\ExtensionListContributorsTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionListExtensionInstances\ExtensionListExtensionInstancesBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionListExtensionInstances\ExtensionListExtensionInstancesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionListExtensionInstances\ExtensionListExtensionInstancesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionListExtensionInstances\ExtensionListExtensionInstancesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionListExtensionInstances\ExtensionListExtensionInstancesTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionListExtensions\ExtensionListExtensionsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionListExtensions\ExtensionListExtensionsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionListExtensions\ExtensionListExtensionsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionListExtensions\ExtensionListExtensionsTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionListOwnExtensions\ExtensionListOwnExtensionsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionListOwnExtensions\ExtensionListOwnExtensionsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionListOwnExtensions\ExtensionListOwnExtensionsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionListOwnExtensions\ExtensionListOwnExtensionsTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionPatchExtension\ExtensionPatchExtensionBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionPatchExtension\ExtensionPatchExtensionConflictResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionPatchExtension\ExtensionPatchExtensionDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionPatchExtension\ExtensionPatchExtensionNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionPatchExtension\ExtensionPatchExtensionOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionPatchExtension\ExtensionPatchExtensionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionPatchExtension\ExtensionPatchExtensionTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRegisterExtension\ExtensionRegisterExtensionBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRegisterExtension\ExtensionRegisterExtensionCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRegisterExtension\ExtensionRegisterExtensionDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRegisterExtension\ExtensionRegisterExtensionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRegisterExtension\ExtensionRegisterExtensionTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRemoveAsset\ExtensionRemoveAssetDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRemoveAsset\ExtensionRemoveAssetNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRemoveAsset\ExtensionRemoveAssetRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRemoveAsset\ExtensionRemoveAssetTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRemoveLogo\ExtensionRemoveLogoDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRemoveLogo\ExtensionRemoveLogoNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRemoveLogo\ExtensionRemoveLogoRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRemoveLogo\ExtensionRemoveLogoTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRequestAssetUpload\ExtensionRequestAssetUploadBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRequestAssetUpload\ExtensionRequestAssetUploadDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRequestAssetUpload\ExtensionRequestAssetUploadNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRequestAssetUpload\ExtensionRequestAssetUploadOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRequestAssetUpload\ExtensionRequestAssetUploadPreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRequestAssetUpload\ExtensionRequestAssetUploadRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRequestAssetUpload\ExtensionRequestAssetUploadTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRequestExtensionVerification\ExtensionRequestExtensionVerificationBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRequestExtensionVerification\ExtensionRequestExtensionVerificationDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRequestExtensionVerification\ExtensionRequestExtensionVerificationNoContentResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRequestExtensionVerification\ExtensionRequestExtensionVerificationRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRequestExtensionVerification\ExtensionRequestExtensionVerificationTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRequestLogoUpload\ExtensionRequestLogoUploadDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRequestLogoUpload\ExtensionRequestLogoUploadNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRequestLogoUpload\ExtensionRequestLogoUploadOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRequestLogoUpload\ExtensionRequestLogoUploadRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRequestLogoUpload\ExtensionRequestLogoUploadTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionSetExtensionPublishedState\ExtensionSetExtensionPublishedStateDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionSetExtensionPublishedState\ExtensionSetExtensionPublishedStateNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionSetExtensionPublishedState\ExtensionSetExtensionPublishedStateOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionSetExtensionPublishedState\ExtensionSetExtensionPublishedStateRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionSetExtensionPublishedState\ExtensionSetExtensionPublishedStateTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionStartExtensionCheckout\ExtensionStartExtensionCheckoutBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionStartExtensionCheckout\ExtensionStartExtensionCheckoutCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionStartExtensionCheckout\ExtensionStartExtensionCheckoutDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionStartExtensionCheckout\ExtensionStartExtensionCheckoutNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionStartExtensionCheckout\ExtensionStartExtensionCheckoutRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionStartExtensionCheckout\ExtensionStartExtensionCheckoutTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionUpdateExtensionInstanceContract\ExtensionUpdateExtensionInstanceContractBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionUpdateExtensionInstanceContract\ExtensionUpdateExtensionInstanceContractDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionUpdateExtensionInstanceContract\ExtensionUpdateExtensionInstanceContractNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionUpdateExtensionInstanceContract\ExtensionUpdateExtensionInstanceContractOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionUpdateExtensionInstanceContract\ExtensionUpdateExtensionInstanceContractRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionUpdateExtensionInstanceContract\ExtensionUpdateExtensionInstanceContractTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionUpdateExtensionPricing\ExtensionUpdateExtensionPricingBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionUpdateExtensionPricing\ExtensionUpdateExtensionPricingDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionUpdateExtensionPricing\ExtensionUpdateExtensionPricingNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionUpdateExtensionPricing\ExtensionUpdateExtensionPricingOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionUpdateExtensionPricing\ExtensionUpdateExtensionPricingRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionUpdateExtensionPricing\ExtensionUpdateExtensionPricingTooManyRequestsResponse;

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
class MarketplaceClientImpl implements MarketplaceClient
{
    private Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Get Contributor Billing Information.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/contributor-get-billing-information
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ContributorGetBillingInformationRequest $request An object representing the request for this operation
     * @return ContributorGetBillingInformationOKResponse The billing related information of the Contributor
     */
    public function contributorGetBillingInformation(ContributorGetBillingInformationRequest $request): ContributorGetBillingInformationOKResponse
    {
        $httpRequest = new Request(ContributorGetBillingInformationRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ContributorGetBillingInformationOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ContributorGetBillingInformationBadRequestResponse::fromResponse($httpResponse),
            404 => ContributorGetBillingInformationNotFoundResponse::fromResponse($httpResponse),
            429 => ContributorGetBillingInformationTooManyRequestsResponse::fromResponse($httpResponse),
            default => ContributorGetBillingInformationDefaultResponse::fromResponse($httpResponse),
        });
    }

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
    public function contributorGetCustomerBillingPortalLink(ContributorGetCustomerBillingPortalLinkRequest $request): ContributorGetCustomerBillingPortalLinkOKResponse
    {
        $httpRequest = new Request(ContributorGetCustomerBillingPortalLinkRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ContributorGetCustomerBillingPortalLinkOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ContributorGetCustomerBillingPortalLinkBadRequestResponse::fromResponse($httpResponse),
            404 => ContributorGetCustomerBillingPortalLinkNotFoundResponse::fromResponse($httpResponse),
            429 => ContributorGetCustomerBillingPortalLinkTooManyRequestsResponse::fromResponse($httpResponse),
            default => ContributorGetCustomerBillingPortalLinkDefaultResponse::fromResponse($httpResponse),
        });
    }

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
    public function contributorGetLoginLink(ContributorGetLoginLinkRequest $request): ContributorGetLoginLinkOKResponse
    {
        $httpRequest = new Request(ContributorGetLoginLinkRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ContributorGetLoginLinkOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ContributorGetLoginLinkBadRequestResponse::fromResponse($httpResponse),
            404 => ContributorGetLoginLinkNotFoundResponse::fromResponse($httpResponse),
            429 => ContributorGetLoginLinkTooManyRequestsResponse::fromResponse($httpResponse),
            default => ContributorGetLoginLinkDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List incoming Invoices of a Contributor.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/contributor-list-incoming-invoices
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ContributorListIncomingInvoicesRequest $request An object representing the request for this operation
     * @return ContributorListIncomingInvoicesOKResponse List of incoming Invoices
     */
    public function contributorListIncomingInvoices(ContributorListIncomingInvoicesRequest $request): ContributorListIncomingInvoicesOKResponse
    {
        $httpRequest = new Request(ContributorListIncomingInvoicesRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ContributorListIncomingInvoicesOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ContributorListIncomingInvoicesBadRequestResponse::fromResponse($httpResponse),
            404 => ContributorListIncomingInvoicesNotFoundResponse::fromResponse($httpResponse),
            429 => ContributorListIncomingInvoicesTooManyRequestsResponse::fromResponse($httpResponse),
            default => ContributorListIncomingInvoicesDefaultResponse::fromResponse($httpResponse),
        });
    }

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
    public function contributorListOnbehalfInvoices(ContributorListOnbehalfInvoicesRequest $request): ContributorListOnbehalfInvoicesOKResponse
    {
        $httpRequest = new Request(ContributorListOnbehalfInvoicesRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ContributorListOnbehalfInvoicesOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ContributorListOnbehalfInvoicesBadRequestResponse::fromResponse($httpResponse),
            404 => ContributorListOnbehalfInvoicesNotFoundResponse::fromResponse($httpResponse),
            429 => ContributorListOnbehalfInvoicesTooManyRequestsResponse::fromResponse($httpResponse),
            default => ContributorListOnbehalfInvoicesDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Request an Access Token for the Incoming Invoice file.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/contributor-receipt-get-file-access-token
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ContributorReceiptGetFileAccessTokenRequest $request An object representing the request for this operation
     * @return ContributorReceiptGetFileAccessTokenOKResponse The File Access Token required to access the Incoming Invoice file.
     */
    public function contributorReceiptGetFileAccessToken(ContributorReceiptGetFileAccessTokenRequest $request): ContributorReceiptGetFileAccessTokenOKResponse
    {
        $httpRequest = new Request(ContributorReceiptGetFileAccessTokenRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ContributorReceiptGetFileAccessTokenOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ContributorReceiptGetFileAccessTokenBadRequestResponse::fromResponse($httpResponse),
            404 => ContributorReceiptGetFileAccessTokenNotFoundResponse::fromResponse($httpResponse),
            429 => ContributorReceiptGetFileAccessTokenTooManyRequestsResponse::fromResponse($httpResponse),
            default => ContributorReceiptGetFileAccessTokenDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Rotate the secret for an extension instance.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/contributor-rotate-secret-for-extension-instance
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ContributorRotateSecretForExtensionInstanceRequest $request An object representing the request for this operation
     * @return ContributorRotateSecretForExtensionInstanceOKResponse Secret rotated successfully.
     */
    public function contributorRotateSecretForExtensionInstance(ContributorRotateSecretForExtensionInstanceRequest $request): ContributorRotateSecretForExtensionInstanceOKResponse
    {
        $httpRequest = new Request(ContributorRotateSecretForExtensionInstanceRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ContributorRotateSecretForExtensionInstanceOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ContributorRotateSecretForExtensionInstanceBadRequestResponse::fromResponse($httpResponse),
            404 => ContributorRotateSecretForExtensionInstanceNotFoundResponse::fromResponse($httpResponse),
            429 => ContributorRotateSecretForExtensionInstanceTooManyRequestsResponse::fromResponse($httpResponse),
            default => ContributorRotateSecretForExtensionInstanceDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Authenticate your external application using the extensionInstanceSecret.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-authenticate-instance
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionAuthenticateInstanceRequest $request An object representing the request for this operation
     * @return ExtensionAuthenticateInstanceCreatedResponse You received a public token with a short expiry. You can now perform domain actions.
     */
    public function extensionAuthenticateInstance(ExtensionAuthenticateInstanceRequest $request): ExtensionAuthenticateInstanceCreatedResponse
    {
        $httpRequest = new Request(ExtensionAuthenticateInstanceRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 201) {
            return ExtensionAuthenticateInstanceCreatedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ExtensionAuthenticateInstanceBadRequestResponse::fromResponse($httpResponse),
            default => ExtensionAuthenticateInstanceDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Authenticate your external application using a session token and an extension secret
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-authenticate-with-session-token
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionAuthenticateWithSessionTokenRequest $request An object representing the request for this operation
     * @return ExtensionAuthenticateWithSessionTokenCreatedResponse You received a public token with a short expiry. You can now perform domain actions.
     */
    public function extensionAuthenticateWithSessionToken(ExtensionAuthenticateWithSessionTokenRequest $request): ExtensionAuthenticateWithSessionTokenCreatedResponse
    {
        $httpRequest = new Request(ExtensionAuthenticateWithSessionTokenRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 201) {
            return ExtensionAuthenticateWithSessionTokenCreatedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ExtensionAuthenticateWithSessionTokenBadRequestResponse::fromResponse($httpResponse),
            404 => ExtensionAuthenticateWithSessionTokenNotFoundResponse::fromResponse($httpResponse),
            default => ExtensionAuthenticateWithSessionTokenDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Change the context of an Extension.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-change-context
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionChangeContextRequest $request An object representing the request for this operation
     * @return ExtensionChangeContextOKResponse The Extension context-change has been requested.
     */
    public function extensionChangeContext(ExtensionChangeContextRequest $request): ExtensionChangeContextOKResponse
    {
        $httpRequest = new Request(ExtensionChangeContextRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ExtensionChangeContextOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => ExtensionChangeContextNotFoundResponse::fromResponse($httpResponse),
            429 => ExtensionChangeContextTooManyRequestsResponse::fromResponse($httpResponse),
            default => ExtensionChangeContextDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Consent to extension scopes.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-consent-to-extension-scopes
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionConsentToExtensionScopesRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function extensionConsentToExtensionScopes(ExtensionConsentToExtensionScopesRequest $request): EmptyResponse
    {
        $httpRequest = new Request(ExtensionConsentToExtensionScopesRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ExtensionConsentToExtensionScopesBadRequestResponse::fromResponse($httpResponse),
            429 => ExtensionConsentToExtensionScopesTooManyRequestsResponse::fromResponse($httpResponse),
            default => ExtensionConsentToExtensionScopesDefaultResponse::fromResponse($httpResponse),
        });
    }

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
    public function extensionCreateContributorOnboardingProcess(ExtensionCreateContributorOnboardingProcessRequest $request): ExtensionCreateContributorOnboardingProcessCreatedResponse
    {
        $httpRequest = new Request(ExtensionCreateContributorOnboardingProcessRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 201) {
            return ExtensionCreateContributorOnboardingProcessCreatedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ExtensionCreateContributorOnboardingProcessBadRequestResponse::fromResponse($httpResponse),
            404 => ExtensionCreateContributorOnboardingProcessNotFoundResponse::fromResponse($httpResponse),
            429 => ExtensionCreateContributorOnboardingProcessTooManyRequestsResponse::fromResponse($httpResponse),
            default => ExtensionCreateContributorOnboardingProcessDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Create an ExtensionInstance.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-create-extension-instance
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionCreateExtensionInstanceRequest $request An object representing the request for this operation
     * @return ExtensionCreateExtensionInstanceCreatedResponse The ExtensionInstance ID.
     */
    public function extensionCreateExtensionInstance(ExtensionCreateExtensionInstanceRequest $request): ExtensionCreateExtensionInstanceCreatedResponse
    {
        $httpRequest = new Request(ExtensionCreateExtensionInstanceRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 201) {
            return ExtensionCreateExtensionInstanceCreatedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ExtensionCreateExtensionInstanceBadRequestResponse::fromResponse($httpResponse),
            404 => ExtensionCreateExtensionInstanceNotFoundResponse::fromResponse($httpResponse),
            412 => ExtensionCreateExtensionInstancePreconditionFailedResponse::fromResponse($httpResponse),
            429 => ExtensionCreateExtensionInstanceTooManyRequestsResponse::fromResponse($httpResponse),
            default => ExtensionCreateExtensionInstanceDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Create an access token retrieval key for an extension instance.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-create-retrieval-key
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionCreateRetrievalKeyRequest $request An object representing the request for this operation
     * @return ExtensionCreateRetrievalKeyOKResponse An access token retrieval key. This key can be used to retrieve a scoped access token from an external application.
     */
    public function extensionCreateRetrievalKey(ExtensionCreateRetrievalKeyRequest $request): ExtensionCreateRetrievalKeyOKResponse
    {
        $httpRequest = new Request(ExtensionCreateRetrievalKeyRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ExtensionCreateRetrievalKeyOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ExtensionCreateRetrievalKeyBadRequestResponse::fromResponse($httpResponse),
            429 => ExtensionCreateRetrievalKeyTooManyRequestsResponse::fromResponse($httpResponse),
            default => ExtensionCreateRetrievalKeyDefaultResponse::fromResponse($httpResponse),
        });
    }

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
    public function extensionDeleteExtension(ExtensionDeleteExtensionRequest $request): EmptyResponse
    {
        $httpRequest = new Request(ExtensionDeleteExtensionRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => ExtensionDeleteExtensionNotFoundResponse::fromResponse($httpResponse),
            429 => ExtensionDeleteExtensionTooManyRequestsResponse::fromResponse($httpResponse),
            default => ExtensionDeleteExtensionDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Delete an ExtensionInstance.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-delete-extension-instance
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionDeleteExtensionInstanceRequest $request An object representing the request for this operation
     * @return UntypedResponse NoContent
     */
    public function extensionDeleteExtensionInstance(ExtensionDeleteExtensionInstanceRequest $request): UntypedResponse
    {
        $httpRequest = new Request(ExtensionDeleteExtensionInstanceRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return UntypedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => ExtensionDeleteExtensionInstanceNotFoundResponse::fromResponse($httpResponse),
            429 => ExtensionDeleteExtensionInstanceTooManyRequestsResponse::fromResponse($httpResponse),
            default => ExtensionDeleteExtensionInstanceDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Disable an ExtensionInstance.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-disable-extension-instance
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionDisableExtensionInstanceRequest $request An object representing the request for this operation
     * @return UntypedResponse NoContent
     */
    public function extensionDisableExtensionInstance(ExtensionDisableExtensionInstanceRequest $request): UntypedResponse
    {
        $httpRequest = new Request(ExtensionDisableExtensionInstanceRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return UntypedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ExtensionDisableExtensionInstanceBadRequestResponse::fromResponse($httpResponse),
            429 => ExtensionDisableExtensionInstanceTooManyRequestsResponse::fromResponse($httpResponse),
            default => ExtensionDisableExtensionInstanceDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Dry run a webhook with random or given values.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-dry-run-webhook
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionDryRunWebhookRequest $request An object representing the request for this operation
     * @return ExtensionDryRunWebhookOKResponse The webhook has been run successfully.
     */
    public function extensionDryRunWebhook(ExtensionDryRunWebhookRequest $request): ExtensionDryRunWebhookOKResponse
    {
        $httpRequest = new Request(ExtensionDryRunWebhookRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ExtensionDryRunWebhookOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ExtensionDryRunWebhookBadRequestResponse::fromResponse($httpResponse),
            429 => ExtensionDryRunWebhookTooManyRequestsResponse::fromResponse($httpResponse),
            default => ExtensionDryRunWebhookDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Enable an ExtensionInstance.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-enable-extension-instance
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionEnableExtensionInstanceRequest $request An object representing the request for this operation
     * @return UntypedResponse NoContent
     */
    public function extensionEnableExtensionInstance(ExtensionEnableExtensionInstanceRequest $request): UntypedResponse
    {
        $httpRequest = new Request(ExtensionEnableExtensionInstanceRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return UntypedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ExtensionEnableExtensionInstanceBadRequestResponse::fromResponse($httpResponse),
            429 => ExtensionEnableExtensionInstanceTooManyRequestsResponse::fromResponse($httpResponse),
            default => ExtensionEnableExtensionInstanceDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Generate a session token to transmit it to the extensions frontend fragment.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-generate-session-token
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionGenerateSessionTokenRequest $request An object representing the request for this operation
     * @return ExtensionGenerateSessionTokenOKResponse The generated session token
     */
    public function extensionGenerateSessionToken(ExtensionGenerateSessionTokenRequest $request): ExtensionGenerateSessionTokenOKResponse
    {
        $httpRequest = new Request(ExtensionGenerateSessionTokenRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ExtensionGenerateSessionTokenOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ExtensionGenerateSessionTokenBadRequestResponse::fromResponse($httpResponse),
            404 => ExtensionGenerateSessionTokenNotFoundResponse::fromResponse($httpResponse),
            429 => ExtensionGenerateSessionTokenTooManyRequestsResponse::fromResponse($httpResponse),
            default => ExtensionGenerateSessionTokenDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a Contributor.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-get-contributor
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionGetContributorRequest $request An object representing the request for this operation
     * @return ExtensionGetContributorOKResponse OK
     */
    public function extensionGetContributor(ExtensionGetContributorRequest $request): ExtensionGetContributorOKResponse
    {
        $httpRequest = new Request(ExtensionGetContributorRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ExtensionGetContributorOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => ExtensionGetContributorNotFoundResponse::fromResponse($httpResponse),
            429 => ExtensionGetContributorTooManyRequestsResponse::fromResponse($httpResponse),
            default => ExtensionGetContributorDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get an Extension.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-get-extension
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionGetExtensionRequest $request An object representing the request for this operation
     * @return ExtensionGetExtensionOKResponse OK
     */
    public function extensionGetExtension(ExtensionGetExtensionRequest $request): ExtensionGetExtensionOKResponse
    {
        $httpRequest = new Request(ExtensionGetExtensionRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ExtensionGetExtensionOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => ExtensionGetExtensionNotFoundResponse::fromResponse($httpResponse),
            429 => ExtensionGetExtensionTooManyRequestsResponse::fromResponse($httpResponse),
            default => ExtensionGetExtensionDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get an ExtensionInstance.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-get-extension-instance
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionGetExtensionInstanceRequest $request An object representing the request for this operation
     * @return ExtensionGetExtensionInstanceOKResponse OK
     */
    public function extensionGetExtensionInstance(ExtensionGetExtensionInstanceRequest $request): ExtensionGetExtensionInstanceOKResponse
    {
        $httpRequest = new Request(ExtensionGetExtensionInstanceRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ExtensionGetExtensionInstanceOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => ExtensionGetExtensionInstanceNotFoundResponse::fromResponse($httpResponse),
            429 => ExtensionGetExtensionInstanceTooManyRequestsResponse::fromResponse($httpResponse),
            default => ExtensionGetExtensionInstanceDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get the ExtensionInstance of a specific customer and extension, if existing.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-get-extension-instance-for-customer
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionGetExtensionInstanceForCustomerRequest $request An object representing the request for this operation
     * @return ExtensionGetExtensionInstanceForCustomerOKResponse OK
     */
    public function extensionGetExtensionInstanceForCustomer(ExtensionGetExtensionInstanceForCustomerRequest $request): ExtensionGetExtensionInstanceForCustomerOKResponse
    {
        $httpRequest = new Request(ExtensionGetExtensionInstanceForCustomerRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ExtensionGetExtensionInstanceForCustomerOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => ExtensionGetExtensionInstanceForCustomerNotFoundResponse::fromResponse($httpResponse),
            429 => ExtensionGetExtensionInstanceForCustomerTooManyRequestsResponse::fromResponse($httpResponse),
            default => ExtensionGetExtensionInstanceForCustomerDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get the ExtensionInstance of a specific project and extension, if existing.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-get-extension-instance-for-project
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionGetExtensionInstanceForProjectRequest $request An object representing the request for this operation
     * @return ExtensionGetExtensionInstanceForProjectOKResponse OK
     */
    public function extensionGetExtensionInstanceForProject(ExtensionGetExtensionInstanceForProjectRequest $request): ExtensionGetExtensionInstanceForProjectOKResponse
    {
        $httpRequest = new Request(ExtensionGetExtensionInstanceForProjectRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ExtensionGetExtensionInstanceForProjectOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => ExtensionGetExtensionInstanceForProjectNotFoundResponse::fromResponse($httpResponse),
            429 => ExtensionGetExtensionInstanceForProjectTooManyRequestsResponse::fromResponse($httpResponse),
            default => ExtensionGetExtensionInstanceForProjectDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get Extension of own contributor.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-get-own-extension
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionGetOwnExtensionRequest $request An object representing the request for this operation
     * @return ExtensionGetOwnExtensionOKResponse Get your own extension.
     */
    public function extensionGetOwnExtension(ExtensionGetOwnExtensionRequest $request): ExtensionGetOwnExtensionOKResponse
    {
        $httpRequest = new Request(ExtensionGetOwnExtensionRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ExtensionGetOwnExtensionOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => ExtensionGetOwnExtensionNotFoundResponse::fromResponse($httpResponse),
            429 => ExtensionGetOwnExtensionTooManyRequestsResponse::fromResponse($httpResponse),
            default => ExtensionGetOwnExtensionDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get the public key to verify the webhook signature.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-get-public-key
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionGetPublicKeyRequest $request An object representing the request for this operation
     * @return ExtensionGetPublicKeyOKResponse Use this public key to verify the webhook signature on your end.
     */
    public function extensionGetPublicKey(ExtensionGetPublicKeyRequest $request): ExtensionGetPublicKeyOKResponse
    {
        $httpRequest = new Request(ExtensionGetPublicKeyRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ExtensionGetPublicKeyOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => ExtensionGetPublicKeyNotFoundResponse::fromResponse($httpResponse),
            429 => ExtensionGetPublicKeyTooManyRequestsResponse::fromResponse($httpResponse),
            default => ExtensionGetPublicKeyDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List Contributors.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-list-contributors
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionListContributorsRequest $request An object representing the request for this operation
     * @return ExtensionListContributorsOKResponse OK
     */
    public function extensionListContributors(ExtensionListContributorsRequest $request): ExtensionListContributorsOKResponse
    {
        $httpRequest = new Request(ExtensionListContributorsRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ExtensionListContributorsOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            429 => ExtensionListContributorsTooManyRequestsResponse::fromResponse($httpResponse),
            default => ExtensionListContributorsDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List ExtensionInstances.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-list-extension-instances
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionListExtensionInstancesRequest $request An object representing the request for this operation
     * @return ExtensionListExtensionInstancesOKResponse OK
     */
    public function extensionListExtensionInstances(ExtensionListExtensionInstancesRequest $request): ExtensionListExtensionInstancesOKResponse
    {
        $httpRequest = new Request(ExtensionListExtensionInstancesRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ExtensionListExtensionInstancesOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ExtensionListExtensionInstancesBadRequestResponse::fromResponse($httpResponse),
            429 => ExtensionListExtensionInstancesTooManyRequestsResponse::fromResponse($httpResponse),
            default => ExtensionListExtensionInstancesDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List Extensions.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-list-extensions
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionListExtensionsRequest $request An object representing the request for this operation
     * @return ExtensionListExtensionsOKResponse OK
     */
    public function extensionListExtensions(ExtensionListExtensionsRequest $request): ExtensionListExtensionsOKResponse
    {
        $httpRequest = new Request(ExtensionListExtensionsRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ExtensionListExtensionsOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            429 => ExtensionListExtensionsTooManyRequestsResponse::fromResponse($httpResponse),
            default => ExtensionListExtensionsDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List Extensions of own contributor.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-list-own-extensions
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionListOwnExtensionsRequest $request An object representing the request for this operation
     * @return ExtensionListOwnExtensionsOKResponse A list of extensions of the contributor.
     */
    public function extensionListOwnExtensions(ExtensionListOwnExtensionsRequest $request): ExtensionListOwnExtensionsOKResponse
    {
        $httpRequest = new Request(ExtensionListOwnExtensionsRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ExtensionListOwnExtensionsOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            429 => ExtensionListOwnExtensionsTooManyRequestsResponse::fromResponse($httpResponse),
            default => ExtensionListOwnExtensionsDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Patch Extension.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-patch-extension
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionPatchExtensionRequest $request An object representing the request for this operation
     * @return ExtensionPatchExtensionOKResponse The extension has been patched.
     */
    public function extensionPatchExtension(ExtensionPatchExtensionRequest $request): ExtensionPatchExtensionOKResponse
    {
        $httpRequest = new Request(ExtensionPatchExtensionRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ExtensionPatchExtensionOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ExtensionPatchExtensionBadRequestResponse::fromResponse($httpResponse),
            404 => ExtensionPatchExtensionNotFoundResponse::fromResponse($httpResponse),
            409 => ExtensionPatchExtensionConflictResponse::fromResponse($httpResponse),
            429 => ExtensionPatchExtensionTooManyRequestsResponse::fromResponse($httpResponse),
            default => ExtensionPatchExtensionDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Register an Extension.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-register-extension
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionRegisterExtensionRequest $request An object representing the request for this operation
     * @return ExtensionRegisterExtensionCreatedResponse The extension has been registered.
     */
    public function extensionRegisterExtension(ExtensionRegisterExtensionRequest $request): ExtensionRegisterExtensionCreatedResponse
    {
        $httpRequest = new Request(ExtensionRegisterExtensionRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 201) {
            return ExtensionRegisterExtensionCreatedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ExtensionRegisterExtensionBadRequestResponse::fromResponse($httpResponse),
            429 => ExtensionRegisterExtensionTooManyRequestsResponse::fromResponse($httpResponse),
            default => ExtensionRegisterExtensionDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Remove an asset of an extension.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-remove-asset
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionRemoveAssetRequest $request An object representing the request for this operation
     * @return EmptyResponse The asset has been removed.
     */
    public function extensionRemoveAsset(ExtensionRemoveAssetRequest $request): EmptyResponse
    {
        $httpRequest = new Request(ExtensionRemoveAssetRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => ExtensionRemoveAssetNotFoundResponse::fromResponse($httpResponse),
            429 => ExtensionRemoveAssetTooManyRequestsResponse::fromResponse($httpResponse),
            default => ExtensionRemoveAssetDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Remove the logo of an extension.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-remove-logo
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionRemoveLogoRequest $request An object representing the request for this operation
     * @return EmptyResponse The Logo has been removed.
     */
    public function extensionRemoveLogo(ExtensionRemoveLogoRequest $request): EmptyResponse
    {
        $httpRequest = new Request(ExtensionRemoveLogoRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => ExtensionRemoveLogoNotFoundResponse::fromResponse($httpResponse),
            429 => ExtensionRemoveLogoTooManyRequestsResponse::fromResponse($httpResponse),
            default => ExtensionRemoveLogoDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Add an asset to an extension.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-request-asset-upload
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionRequestAssetUploadRequest $request An object representing the request for this operation
     * @return ExtensionRequestAssetUploadOKResponse The Upload of an asset for the extension has been requested.
     */
    public function extensionRequestAssetUpload(ExtensionRequestAssetUploadRequest $request): ExtensionRequestAssetUploadOKResponse
    {
        $httpRequest = new Request(ExtensionRequestAssetUploadRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ExtensionRequestAssetUploadOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ExtensionRequestAssetUploadBadRequestResponse::fromResponse($httpResponse),
            404 => ExtensionRequestAssetUploadNotFoundResponse::fromResponse($httpResponse),
            412 => ExtensionRequestAssetUploadPreconditionFailedResponse::fromResponse($httpResponse),
            429 => ExtensionRequestAssetUploadTooManyRequestsResponse::fromResponse($httpResponse),
            default => ExtensionRequestAssetUploadDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Start the verification process of an Extension.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-request-extension-verification
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionRequestExtensionVerificationRequest $request An object representing the request for this operation
     * @return ExtensionRequestExtensionVerificationNoContentResponse The verification has been requested.
     */
    public function extensionRequestExtensionVerification(ExtensionRequestExtensionVerificationRequest $request): ExtensionRequestExtensionVerificationNoContentResponse
    {
        $httpRequest = new Request(ExtensionRequestExtensionVerificationRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return ExtensionRequestExtensionVerificationNoContentResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ExtensionRequestExtensionVerificationBadRequestResponse::fromResponse($httpResponse),
            429 => ExtensionRequestExtensionVerificationTooManyRequestsResponse::fromResponse($httpResponse),
            default => ExtensionRequestExtensionVerificationDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Add a logo to an extension.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-request-logo-upload
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionRequestLogoUploadRequest $request An object representing the request for this operation
     * @return ExtensionRequestLogoUploadOKResponse The Upload of a logo for the extension has been requested.
     */
    public function extensionRequestLogoUpload(ExtensionRequestLogoUploadRequest $request): ExtensionRequestLogoUploadOKResponse
    {
        $httpRequest = new Request(ExtensionRequestLogoUploadRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ExtensionRequestLogoUploadOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => ExtensionRequestLogoUploadNotFoundResponse::fromResponse($httpResponse),
            429 => ExtensionRequestLogoUploadTooManyRequestsResponse::fromResponse($httpResponse),
            default => ExtensionRequestLogoUploadDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Publish or withdraw an Extension.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-set-extension-published-state
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionSetExtensionPublishedStateRequest $request An object representing the request for this operation
     * @return ExtensionSetExtensionPublishedStateOKResponse The Extension visibility has been adjusted.
     */
    public function extensionSetExtensionPublishedState(ExtensionSetExtensionPublishedStateRequest $request): ExtensionSetExtensionPublishedStateOKResponse
    {
        $httpRequest = new Request(ExtensionSetExtensionPublishedStateRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ExtensionSetExtensionPublishedStateOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => ExtensionSetExtensionPublishedStateNotFoundResponse::fromResponse($httpResponse),
            429 => ExtensionSetExtensionPublishedStateTooManyRequestsResponse::fromResponse($httpResponse),
            default => ExtensionSetExtensionPublishedStateDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Start a checkout process for an extension.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-start-extension-checkout
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionStartExtensionCheckoutRequest $request An object representing the request for this operation
     * @return ExtensionStartExtensionCheckoutCreatedResponse A Checkout URL has been created.
     */
    public function extensionStartExtensionCheckout(ExtensionStartExtensionCheckoutRequest $request): ExtensionStartExtensionCheckoutCreatedResponse
    {
        $httpRequest = new Request(ExtensionStartExtensionCheckoutRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 201) {
            return ExtensionStartExtensionCheckoutCreatedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ExtensionStartExtensionCheckoutBadRequestResponse::fromResponse($httpResponse),
            404 => ExtensionStartExtensionCheckoutNotFoundResponse::fromResponse($httpResponse),
            429 => ExtensionStartExtensionCheckoutTooManyRequestsResponse::fromResponse($httpResponse),
            default => ExtensionStartExtensionCheckoutDefaultResponse::fromResponse($httpResponse),
        });
    }

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
    public function extensionUpdateExtensionInstanceContract(ExtensionUpdateExtensionInstanceContractRequest $request): ExtensionUpdateExtensionInstanceContractOKResponse
    {
        $httpRequest = new Request(ExtensionUpdateExtensionInstanceContractRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ExtensionUpdateExtensionInstanceContractOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ExtensionUpdateExtensionInstanceContractBadRequestResponse::fromResponse($httpResponse),
            404 => ExtensionUpdateExtensionInstanceContractNotFoundResponse::fromResponse($httpResponse),
            429 => ExtensionUpdateExtensionInstanceContractTooManyRequestsResponse::fromResponse($httpResponse),
            default => ExtensionUpdateExtensionInstanceContractDefaultResponse::fromResponse($httpResponse),
        });
    }

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
    public function extensionUpdateExtensionPricing(ExtensionUpdateExtensionPricingRequest $request): ExtensionUpdateExtensionPricingOKResponse
    {
        $httpRequest = new Request(ExtensionUpdateExtensionPricingRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ExtensionUpdateExtensionPricingOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ExtensionUpdateExtensionPricingBadRequestResponse::fromResponse($httpResponse),
            404 => ExtensionUpdateExtensionPricingNotFoundResponse::fromResponse($httpResponse),
            429 => ExtensionUpdateExtensionPricingTooManyRequestsResponse::fromResponse($httpResponse),
            default => ExtensionUpdateExtensionPricingDefaultResponse::fromResponse($httpResponse),
        });
    }
}
