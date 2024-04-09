<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use Mittwald\ApiClient\Client\UntypedResponse;
use Mittwald\ApiClient\Error\UnexpectedResponseException;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionAuthenticateInstance\ExtensionAuthenticateInstanceBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionAuthenticateInstance\ExtensionAuthenticateInstanceCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionAuthenticateInstance\ExtensionAuthenticateInstanceDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionAuthenticateInstance\ExtensionAuthenticateInstanceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionConsentToExtensionScopes\ExtensionConsentToExtensionScopesBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionConsentToExtensionScopes\ExtensionConsentToExtensionScopesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionConsentToExtensionScopes\ExtensionConsentToExtensionScopesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionCreateExtensionInstance\ExtensionCreateExtensionInstanceBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionCreateExtensionInstance\ExtensionCreateExtensionInstanceCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionCreateExtensionInstance\ExtensionCreateExtensionInstanceDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionCreateExtensionInstance\ExtensionCreateExtensionInstanceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionDeleteExtensionInstance\ExtensionDeleteExtensionInstanceDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionDeleteExtensionInstance\ExtensionDeleteExtensionInstanceNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionDeleteExtensionInstance\ExtensionDeleteExtensionInstanceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionDisableExtensionInstance\ExtensionDisableExtensionInstanceBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionDisableExtensionInstance\ExtensionDisableExtensionInstanceDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionDisableExtensionInstance\ExtensionDisableExtensionInstanceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionEnableExtensionInstance\ExtensionEnableExtensionInstanceBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionEnableExtensionInstance\ExtensionEnableExtensionInstanceDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionEnableExtensionInstance\ExtensionEnableExtensionInstanceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetContributor\ExtensionGetContributorDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetContributor\ExtensionGetContributorNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetContributor\ExtensionGetContributorOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetContributor\ExtensionGetContributorRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetExtension\ExtensionGetExtensionDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetExtension\ExtensionGetExtensionOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetExtension\ExtensionGetExtensionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetExtensionInstance\ExtensionGetExtensionInstanceDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetExtensionInstance\ExtensionGetExtensionInstanceNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetExtensionInstance\ExtensionGetExtensionInstanceOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetExtensionInstance\ExtensionGetExtensionInstanceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetPublicKey\ExtensionGetPublicKeyDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetPublicKey\ExtensionGetPublicKeyNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetPublicKey\ExtensionGetPublicKeyOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetPublicKey\ExtensionGetPublicKeyRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionListContributors\ExtensionListContributorsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionListContributors\ExtensionListContributorsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionListContributors\ExtensionListContributorsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionListExtensionInstances\ExtensionListExtensionInstancesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionListExtensionInstances\ExtensionListExtensionInstancesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionListExtensionInstances\ExtensionListExtensionInstancesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionListExtensions\ExtensionListExtensionsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionListExtensions\ExtensionListExtensionsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionListExtensions\ExtensionListExtensionsRequest;

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
            default => ExtensionConsentToExtensionScopesDefaultResponse::fromResponse($httpResponse),
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
            default => ExtensionCreateExtensionInstanceDefaultResponse::fromResponse($httpResponse),
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
            default => ExtensionDisableExtensionInstanceDefaultResponse::fromResponse($httpResponse),
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
            default => ExtensionGetExtensionInstanceDefaultResponse::fromResponse($httpResponse),
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
            default => ExtensionListExtensionsDefaultResponse::fromResponse($httpResponse),
        });
    }
}
