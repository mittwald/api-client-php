<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use Mittwald\ApiClient\Client\UntypedResponse;
use Mittwald\ApiClient\Error\UnexpectedResponseException;
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
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionCreateExtensionInstance\ExtensionCreateExtensionInstanceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionCreateExtensionInstance\ExtensionCreateExtensionInstanceTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionCreateRetrievalKey\ExtensionCreateRetrievalKeyBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionCreateRetrievalKey\ExtensionCreateRetrievalKeyDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionCreateRetrievalKey\ExtensionCreateRetrievalKeyOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionCreateRetrievalKey\ExtensionCreateRetrievalKeyRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionCreateRetrievalKey\ExtensionCreateRetrievalKeyTooManyRequestsResponse;
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
     * Consent to extension scopes.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Marketplace/operation/extension-consent-to-extension-scopes
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExtensionConsentToExtensionScopesRequest $request An object representing the request for this operation
     * @return UntypedResponse NoContent
     */
    public function extensionConsentToExtensionScopes(ExtensionConsentToExtensionScopesRequest $request): UntypedResponse
    {
        $httpRequest = new Request(ExtensionConsentToExtensionScopesRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return UntypedResponse::fromResponse($httpResponse);
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
