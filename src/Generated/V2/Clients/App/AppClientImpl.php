<?php

namespace Mittwald\ApiClient\Generated\V2\Clients\App;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use Mittwald\ApiClient\Client\EmptyResponse;
use Mittwald\ApiClient\Error\UnexpectedResponseException;
use Mittwald\ApiClient\Generated\V2\Clients\App\DeprecatedAppLinkDatabase\DeprecatedAppLinkDatabaseDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\DeprecatedAppLinkDatabase\DeprecatedAppLinkDatabaseNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\DeprecatedAppLinkDatabase\DeprecatedAppLinkDatabaseRequest;
use Mittwald\ApiClient\Generated\V2\Clients\App\ExecuteAction\ExecuteActionDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\ExecuteAction\ExecuteActionNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\ExecuteAction\ExecuteActionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\App\GetApp\GetAppDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\GetApp\GetAppNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\GetApp\GetAppOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\GetApp\GetAppRequest;
use Mittwald\ApiClient\Generated\V2\Clients\App\GetAppinstallation\GetAppinstallationDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\GetAppinstallation\GetAppinstallationNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\GetAppinstallation\GetAppinstallationOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\GetAppinstallation\GetAppinstallationRequest;
use Mittwald\ApiClient\Generated\V2\Clients\App\GetAppversion\GetAppversionDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\GetAppversion\GetAppversionNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\GetAppversion\GetAppversionOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\GetAppversion\GetAppversionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\App\GetInstalledSystemsoftwareForAppinstallation\GetInstalledSystemsoftwareForAppinstallationDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\GetInstalledSystemsoftwareForAppinstallation\GetInstalledSystemsoftwareForAppinstallationNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\GetInstalledSystemsoftwareForAppinstallation\GetInstalledSystemsoftwareForAppinstallationOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\GetInstalledSystemsoftwareForAppinstallation\GetInstalledSystemsoftwareForAppinstallationRequest;
use Mittwald\ApiClient\Generated\V2\Clients\App\GetMissingDependenciesForAppinstallation\GetMissingDependenciesForAppinstallationDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\GetMissingDependenciesForAppinstallation\GetMissingDependenciesForAppinstallationNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\GetMissingDependenciesForAppinstallation\GetMissingDependenciesForAppinstallationOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\GetMissingDependenciesForAppinstallation\GetMissingDependenciesForAppinstallationRequest;
use Mittwald\ApiClient\Generated\V2\Clients\App\GetSystemsoftware\GetSystemsoftwareDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\GetSystemsoftware\GetSystemsoftwareNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\GetSystemsoftware\GetSystemsoftwareOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\GetSystemsoftware\GetSystemsoftwareRequest;
use Mittwald\ApiClient\Generated\V2\Clients\App\GetSystemsoftwareversion\GetSystemsoftwareversionDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\GetSystemsoftwareversion\GetSystemsoftwareversionNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\GetSystemsoftwareversion\GetSystemsoftwareversionOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\GetSystemsoftwareversion\GetSystemsoftwareversionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\App\LinkDatabase\LinkDatabaseDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\LinkDatabase\LinkDatabaseNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\LinkDatabase\LinkDatabaseRequest;
use Mittwald\ApiClient\Generated\V2\Clients\App\ListAppinstallations\ListAppinstallationsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\ListAppinstallations\ListAppinstallationsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\ListAppinstallations\ListAppinstallationsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\App\ListApps\ListAppsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\ListApps\ListAppsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\ListApps\ListAppsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\App\ListAppversions\ListAppversionsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\ListAppversions\ListAppversionsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\ListAppversions\ListAppversionsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\App\ListSystemsoftwares\ListSystemsoftwaresDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\ListSystemsoftwares\ListSystemsoftwaresOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\ListSystemsoftwares\ListSystemsoftwaresRequest;
use Mittwald\ApiClient\Generated\V2\Clients\App\ListSystemsoftwareversions\ListSystemsoftwareversionsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\ListSystemsoftwareversions\ListSystemsoftwareversionsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\ListSystemsoftwareversions\ListSystemsoftwareversionsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\App\ListUpdateCandidatesForAppversion\ListUpdateCandidatesForAppversionDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\ListUpdateCandidatesForAppversion\ListUpdateCandidatesForAppversionOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\ListUpdateCandidatesForAppversion\ListUpdateCandidatesForAppversionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\App\PatchAppinstallation\PatchAppinstallationDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\PatchAppinstallation\PatchAppinstallationNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\PatchAppinstallation\PatchAppinstallationRequest;
use Mittwald\ApiClient\Generated\V2\Clients\App\RequestAppinstallation\RequestAppinstallationCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\RequestAppinstallation\RequestAppinstallationDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\RequestAppinstallation\RequestAppinstallationNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\RequestAppinstallation\RequestAppinstallationRequest;
use Mittwald\ApiClient\Generated\V2\Clients\App\RequestAppinstallationCopy\RequestAppinstallationCopyCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\RequestAppinstallationCopy\RequestAppinstallationCopyDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\RequestAppinstallationCopy\RequestAppinstallationCopyNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\RequestAppinstallationCopy\RequestAppinstallationCopyRequest;
use Mittwald\ApiClient\Generated\V2\Clients\App\RetrieveStatus\RetrieveStatusDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\RetrieveStatus\RetrieveStatusNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\RetrieveStatus\RetrieveStatusOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\RetrieveStatus\RetrieveStatusRequest;
use Mittwald\ApiClient\Generated\V2\Clients\App\SetDatabaseUsers\SetDatabaseUsersDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\SetDatabaseUsers\SetDatabaseUsersNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\SetDatabaseUsers\SetDatabaseUsersRequest;
use Mittwald\ApiClient\Generated\V2\Clients\App\UninstallAppinstallation\UninstallAppinstallationDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\UninstallAppinstallation\UninstallAppinstallationNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\UninstallAppinstallation\UninstallAppinstallationRequest;
use Mittwald\ApiClient\Generated\V2\Clients\App\UnlinkDatabase\UnlinkDatabaseDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\UnlinkDatabase\UnlinkDatabaseNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\UnlinkDatabase\UnlinkDatabaseRequest;

/**
 * Client for App API
 *
 * The App API allows you to manage your apps within a project, and all the system
 * softwares that are installed as dependencies.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class AppClientImpl implements AppClient
{
    private Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Execute a runtime concerning action on a specific `AppInstallation`.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/App/operation/app-execute-action
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ExecuteAction\ExecuteActionRequest $request An object representing the request for this operation
     * @return EmptyResponse The given action has been executed.
     */
    public function executeAction(ExecuteActionRequest $request): EmptyResponse
    {
        $httpRequest = new Request(ExecuteActionRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => ExecuteActionNotFoundResponse::fromResponse($httpResponse),
            default => ExecuteActionDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a specific `App`.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/App/operation/app-get-app
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetApp\GetAppRequest $request An object representing the request for this operation
     * @return GetApp\GetAppOKResponse The app object.
     */
    public function getApp(GetAppRequest $request): GetAppOKResponse
    {
        $httpRequest = new Request(GetAppRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetAppOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => GetAppNotFoundResponse::fromResponse($httpResponse),
            default => GetAppDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a specific `AppInstallation`.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/App/operation/app-get-appinstallation
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetAppinstallation\GetAppinstallationRequest $request An object representing the request for this operation
     * @return GetAppinstallation\GetAppinstallationOKResponse The appInstallation object.
     */
    public function getAppinstallation(GetAppinstallationRequest $request): GetAppinstallationOKResponse
    {
        $httpRequest = new Request(GetAppinstallationRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetAppinstallationOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => GetAppinstallationNotFoundResponse::fromResponse($httpResponse),
            default => GetAppinstallationDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a specific `AppVersion`.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/App/operation/app-get-appversion
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetAppversion\GetAppversionRequest $request An object representing the request for this operation
     * @return GetAppversion\GetAppversionOKResponse The appVersion object.
     */
    public function getAppversion(GetAppversionRequest $request): GetAppversionOKResponse
    {
        $httpRequest = new Request(GetAppversionRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetAppversionOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => GetAppversionNotFoundResponse::fromResponse($httpResponse),
            default => GetAppversionDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get the installed `SystemSoftware' for a specific `AppInstallation`.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/App/operation/app-get-installed-systemsoftware-for-appinstallation
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetInstalledSystemsoftwareForAppinstallation\GetInstalledSystemsoftwareForAppinstallationRequest $request An object representing the request for this operation
     * @return GetInstalledSystemsoftwareForAppinstallation\GetInstalledSystemsoftwareForAppinstallationOKResponse The list of installed 'SystemSoftware'.
     */
    public function getInstalledSystemsoftwareForAppinstallation(GetInstalledSystemsoftwareForAppinstallationRequest $request): GetInstalledSystemsoftwareForAppinstallationOKResponse
    {
        $httpRequest = new Request(GetInstalledSystemsoftwareForAppinstallationRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetInstalledSystemsoftwareForAppinstallationOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => GetInstalledSystemsoftwareForAppinstallationNotFoundResponse::fromResponse($httpResponse),
            default => GetInstalledSystemsoftwareForAppinstallationDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get the missing requirements of an appInstallation for a specific target AppVersion.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/App/operation/app-get-missing-dependencies-for-appinstallation
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetMissingDependenciesForAppinstallation\GetMissingDependenciesForAppinstallationRequest $request An object representing the request for this operation
     * @return GetMissingDependenciesForAppinstallation\GetMissingDependenciesForAppinstallationOKResponse The missing dependencies of the appInstallation for the target AppVersion.
     */
    public function getMissingDependenciesForAppinstallation(GetMissingDependenciesForAppinstallationRequest $request): GetMissingDependenciesForAppinstallationOKResponse
    {
        $httpRequest = new Request(GetMissingDependenciesForAppinstallationRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetMissingDependenciesForAppinstallationOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => GetMissingDependenciesForAppinstallationNotFoundResponse::fromResponse($httpResponse),
            default => GetMissingDependenciesForAppinstallationDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a specific `SystemSoftware`.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/App/operation/app-get-systemsoftware
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetSystemsoftware\GetSystemsoftwareRequest $request An object representing the request for this operation
     * @return GetSystemsoftware\GetSystemsoftwareOKResponse The systemSoftware object.
     */
    public function getSystemsoftware(GetSystemsoftwareRequest $request): GetSystemsoftwareOKResponse
    {
        $httpRequest = new Request(GetSystemsoftwareRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetSystemsoftwareOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => GetSystemsoftwareNotFoundResponse::fromResponse($httpResponse),
            default => GetSystemsoftwareDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a specific `SystemSoftwareVersion`.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/App/operation/app-get-systemsoftwareversion
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetSystemsoftwareversion\GetSystemsoftwareversionRequest $request An object representing the request for this operation
     * @return GetSystemsoftwareversion\GetSystemsoftwareversionOKResponse The systemSoftwareVersion object.
     */
    public function getSystemsoftwareversion(GetSystemsoftwareversionRequest $request): GetSystemsoftwareversionOKResponse
    {
        $httpRequest = new Request(GetSystemsoftwareversionRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetSystemsoftwareversionOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => GetSystemsoftwareversionNotFoundResponse::fromResponse($httpResponse),
            default => GetSystemsoftwareversionDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Create linkage between an `AppInstallation` and a MySql-`Database`.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/App/operation/app-link-database
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param LinkDatabase\LinkDatabaseRequest $request An object representing the request for this operation
     * @return EmptyResponse The database has been linked.
     */
    public function linkDatabase(LinkDatabaseRequest $request): EmptyResponse
    {
        $httpRequest = new Request(LinkDatabaseRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => LinkDatabaseNotFoundResponse::fromResponse($httpResponse),
            default => LinkDatabaseDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get all `AppInstallations` inside a specific `Project`.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/App/operation/app-list-appinstallations
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListAppinstallations\ListAppinstallationsRequest $request An object representing the request for this operation
     * @return ListAppinstallations\ListAppinstallationsOKResponse Object containing the list of AppInstallations.
     */
    public function listAppinstallations(ListAppinstallationsRequest $request): ListAppinstallationsOKResponse
    {
        $httpRequest = new Request(ListAppinstallationsRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListAppinstallationsOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            default => ListAppinstallationsDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get all available `Apps`.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/App/operation/app-list-apps
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListApps\ListAppsRequest $request An object representing the request for this operation
     * @return ListApps\ListAppsOKResponse Object containing the list of Apps.
     */
    public function listApps(ListAppsRequest $request): ListAppsOKResponse
    {
        $httpRequest = new Request(ListAppsRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListAppsOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            default => ListAppsDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get all `AppVersions` of a specific `App`.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/App/operation/app-list-appversions
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListAppversions\ListAppversionsRequest $request An object representing the request for this operation
     * @return ListAppversions\ListAppversionsOKResponse Object containing the list of AppVersions.
     */
    public function listAppversions(ListAppversionsRequest $request): ListAppversionsOKResponse
    {
        $httpRequest = new Request(ListAppversionsRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListAppversionsOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            default => ListAppversionsDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get all available `SystemSoftware`.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/App/operation/app-list-systemsoftwares
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListSystemsoftwares\ListSystemsoftwaresRequest $request An object representing the request for this operation
     * @return ListSystemsoftwares\ListSystemsoftwaresOKResponse Object containing the list of SystemSoftwares.
     */
    public function listSystemsoftwares(ListSystemsoftwaresRequest $request): ListSystemsoftwaresOKResponse
    {
        $httpRequest = new Request(ListSystemsoftwaresRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListSystemsoftwaresOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            default => ListSystemsoftwaresDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get all available `SystemSoftwareVersions` of a specific `SystemSoftware`.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/App/operation/app-list-systemsoftwareversions
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListSystemsoftwareversions\ListSystemsoftwareversionsRequest $request An object representing the request for this operation
     * @return ListSystemsoftwareversions\ListSystemsoftwareversionsOKResponse Object containing the list of SystemSoftwareVersions.
     */
    public function listSystemsoftwareversions(ListSystemsoftwareversionsRequest $request): ListSystemsoftwareversionsOKResponse
    {
        $httpRequest = new Request(ListSystemsoftwareversionsRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListSystemsoftwareversionsOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            default => ListSystemsoftwareversionsDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get all update candidates for a specific `AppVersion`.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/App/operation/app-list-update-candidates-for-appversion
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListUpdateCandidatesForAppversion\ListUpdateCandidatesForAppversionRequest $request An object representing the request for this operation
     * @return ListUpdateCandidatesForAppversion\ListUpdateCandidatesForAppversionOKResponse Object containing the list of AppVersions.
     */
    public function listUpdateCandidatesForAppversion(ListUpdateCandidatesForAppversionRequest $request): ListUpdateCandidatesForAppversionOKResponse
    {
        $httpRequest = new Request(ListUpdateCandidatesForAppversionRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListUpdateCandidatesForAppversionOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            default => ListUpdateCandidatesForAppversionDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Patch desired properties of a specific `AppInstallation`.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/App/operation/app-patch-appinstallation
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param PatchAppinstallation\PatchAppinstallationRequest $request An object representing the request for this operation
     * @return EmptyResponse The AppInstallation has been patched.
     */
    public function patchAppinstallation(PatchAppinstallationRequest $request): EmptyResponse
    {
        $httpRequest = new Request(PatchAppinstallationRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => PatchAppinstallationNotFoundResponse::fromResponse($httpResponse),
            default => PatchAppinstallationDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Request a new `AppInstallation`.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/App/operation/app-request-appinstallation
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param RequestAppinstallation\RequestAppinstallationRequest $request An object representing the request for this operation
     * @return RequestAppinstallation\RequestAppinstallationCreatedResponse The AppInstallation has been requested.
     */
    public function requestAppinstallation(RequestAppinstallationRequest $request): RequestAppinstallationCreatedResponse
    {
        $httpRequest = new Request(RequestAppinstallationRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 201) {
            return RequestAppinstallationCreatedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => RequestAppinstallationNotFoundResponse::fromResponse($httpResponse),
            default => RequestAppinstallationDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Request a copy of an `AppInstallation`.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/App/operation/app-request-appinstallation-copy
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param RequestAppinstallationCopy\RequestAppinstallationCopyRequest $request An object representing the request for this operation
     * @return RequestAppinstallationCopy\RequestAppinstallationCopyCreatedResponse The AppInstallation copy has been requested.
     */
    public function requestAppinstallationCopy(RequestAppinstallationCopyRequest $request): RequestAppinstallationCopyCreatedResponse
    {
        $httpRequest = new Request(RequestAppinstallationCopyRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 201) {
            return RequestAppinstallationCopyCreatedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => RequestAppinstallationCopyNotFoundResponse::fromResponse($httpResponse),
            default => RequestAppinstallationCopyDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get runtime status of a specific `AppInstallation`.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/App/operation/app-retrieve-status
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param RetrieveStatus\RetrieveStatusRequest $request An object representing the request for this operation
     * @return RetrieveStatus\RetrieveStatusOKResponse The appInstallation status.
     */
    public function retrieveStatus(RetrieveStatusRequest $request): RetrieveStatusOKResponse
    {
        $httpRequest = new Request(RetrieveStatusRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return RetrieveStatusOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => RetrieveStatusNotFoundResponse::fromResponse($httpResponse),
            default => RetrieveStatusDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Create linkage between an `AppInstallation` and `DatabaseUsers`.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/App/operation/app-set-database-users
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param SetDatabaseUsers\SetDatabaseUsersRequest $request An object representing the request for this operation
     * @return EmptyResponse The database users have been set.
     */
    public function setDatabaseUsers(SetDatabaseUsersRequest $request): EmptyResponse
    {
        $httpRequest = new Request(SetDatabaseUsersRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => SetDatabaseUsersNotFoundResponse::fromResponse($httpResponse),
            default => SetDatabaseUsersDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Start uninstallation process for a specific `AppInstallation`.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/App/operation/app-uninstall-appinstallation
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UninstallAppinstallation\UninstallAppinstallationRequest $request An object representing the request for this operation
     * @return EmptyResponse The app installation is going to be deleted.
     */
    public function uninstallAppinstallation(UninstallAppinstallationRequest $request): EmptyResponse
    {
        $httpRequest = new Request(UninstallAppinstallationRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => UninstallAppinstallationNotFoundResponse::fromResponse($httpResponse),
            default => UninstallAppinstallationDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Remove linkage between an `AppInstallation` and a `Database`.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/App/operation/app-unlink-database
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UnlinkDatabase\UnlinkDatabaseRequest $request An object representing the request for this operation
     * @return EmptyResponse The database has been unlinked.
     */
    public function unlinkDatabase(UnlinkDatabaseRequest $request): EmptyResponse
    {
        $httpRequest = new Request(UnlinkDatabaseRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => UnlinkDatabaseNotFoundResponse::fromResponse($httpResponse),
            default => UnlinkDatabaseDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Create linkage between an `AppInstallation` and a MySql-`Database`.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/App/operation/deprecated-app-link-database
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedAppLinkDatabase\DeprecatedAppLinkDatabaseRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse The database has been linked.
     */
    public function deprecatedAppLinkDatabase(DeprecatedAppLinkDatabaseRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeprecatedAppLinkDatabaseRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => DeprecatedAppLinkDatabaseNotFoundResponse::fromResponse($httpResponse),
            default => DeprecatedAppLinkDatabaseDefaultResponse::fromResponse($httpResponse),
        });
    }
}
