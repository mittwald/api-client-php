<?php

namespace Mittwald\ApiClient\Generated\V2\Clients\App;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use Mittwald\ApiClient\Client\EmptyResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\ExecuteAction\ExecuteAction404Response;
use Mittwald\ApiClient\Generated\V2\Clients\App\ExecuteAction\ExecuteActionDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\ExecuteAction\ExecuteActionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\App\GetApp\GetApp200Response;
use Mittwald\ApiClient\Generated\V2\Clients\App\GetApp\GetApp404Response;
use Mittwald\ApiClient\Generated\V2\Clients\App\GetApp\GetAppDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\GetApp\GetAppRequest;
use Mittwald\ApiClient\Generated\V2\Clients\App\GetAppinstallation\GetAppinstallation200Response;
use Mittwald\ApiClient\Generated\V2\Clients\App\GetAppinstallation\GetAppinstallation404Response;
use Mittwald\ApiClient\Generated\V2\Clients\App\GetAppinstallation\GetAppinstallationDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\GetAppinstallation\GetAppinstallationRequest;
use Mittwald\ApiClient\Generated\V2\Clients\App\GetAppversion\GetAppversion200Response;
use Mittwald\ApiClient\Generated\V2\Clients\App\GetAppversion\GetAppversion404Response;
use Mittwald\ApiClient\Generated\V2\Clients\App\GetAppversion\GetAppversionDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\GetAppversion\GetAppversionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\App\GetMissingDependenciesForAppinstallation\GetMissingDependenciesForAppinstallation200Response;
use Mittwald\ApiClient\Generated\V2\Clients\App\GetMissingDependenciesForAppinstallation\GetMissingDependenciesForAppinstallation404Response;
use Mittwald\ApiClient\Generated\V2\Clients\App\GetMissingDependenciesForAppinstallation\GetMissingDependenciesForAppinstallationDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\GetMissingDependenciesForAppinstallation\GetMissingDependenciesForAppinstallationRequest;
use Mittwald\ApiClient\Generated\V2\Clients\App\GetSystemsoftware\GetSystemsoftware200Response;
use Mittwald\ApiClient\Generated\V2\Clients\App\GetSystemsoftware\GetSystemsoftware404Response;
use Mittwald\ApiClient\Generated\V2\Clients\App\GetSystemsoftware\GetSystemsoftwareDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\GetSystemsoftware\GetSystemsoftwareRequest;
use Mittwald\ApiClient\Generated\V2\Clients\App\GetSystemsoftwareversion\GetSystemsoftwareversion200Response;
use Mittwald\ApiClient\Generated\V2\Clients\App\GetSystemsoftwareversion\GetSystemsoftwareversion404Response;
use Mittwald\ApiClient\Generated\V2\Clients\App\GetSystemsoftwareversion\GetSystemsoftwareversionDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\GetSystemsoftwareversion\GetSystemsoftwareversionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\App\LinkDatabase\LinkDatabase404Response;
use Mittwald\ApiClient\Generated\V2\Clients\App\LinkDatabase\LinkDatabaseDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\LinkDatabase\LinkDatabaseRequest;
use Mittwald\ApiClient\Generated\V2\Clients\App\ListAppinstallations\ListAppinstallations200Response;
use Mittwald\ApiClient\Generated\V2\Clients\App\ListAppinstallations\ListAppinstallationsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\ListAppinstallations\ListAppinstallationsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\App\ListApps\ListApps200Response;
use Mittwald\ApiClient\Generated\V2\Clients\App\ListApps\ListAppsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\ListApps\ListAppsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\App\ListAppversions\ListAppversions200Response;
use Mittwald\ApiClient\Generated\V2\Clients\App\ListAppversions\ListAppversionsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\ListAppversions\ListAppversionsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\App\ListSystemsoftwares\ListSystemsoftwares200Response;
use Mittwald\ApiClient\Generated\V2\Clients\App\ListSystemsoftwares\ListSystemsoftwaresDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\ListSystemsoftwares\ListSystemsoftwaresRequest;
use Mittwald\ApiClient\Generated\V2\Clients\App\ListSystemsoftwareversions\ListSystemsoftwareversions200Response;
use Mittwald\ApiClient\Generated\V2\Clients\App\ListSystemsoftwareversions\ListSystemsoftwareversionsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\ListSystemsoftwareversions\ListSystemsoftwareversionsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\App\ListUpdateCandidatesForAppversion\ListUpdateCandidatesForAppversion200Response;
use Mittwald\ApiClient\Generated\V2\Clients\App\ListUpdateCandidatesForAppversion\ListUpdateCandidatesForAppversionDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\ListUpdateCandidatesForAppversion\ListUpdateCandidatesForAppversionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\App\PatchAppinstallation\PatchAppinstallation404Response;
use Mittwald\ApiClient\Generated\V2\Clients\App\PatchAppinstallation\PatchAppinstallationDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\PatchAppinstallation\PatchAppinstallationRequest;
use Mittwald\ApiClient\Generated\V2\Clients\App\ReconcileDetectedApps\ReconcileDetectedApps404Response;
use Mittwald\ApiClient\Generated\V2\Clients\App\ReconcileDetectedApps\ReconcileDetectedAppsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\ReconcileDetectedApps\ReconcileDetectedAppsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\App\RequestAppinstallation\RequestAppinstallation201Response;
use Mittwald\ApiClient\Generated\V2\Clients\App\RequestAppinstallation\RequestAppinstallation404Response;
use Mittwald\ApiClient\Generated\V2\Clients\App\RequestAppinstallation\RequestAppinstallationDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\RequestAppinstallation\RequestAppinstallationRequest;
use Mittwald\ApiClient\Generated\V2\Clients\App\RequestAppinstallationCopy\RequestAppinstallationCopy201Response;
use Mittwald\ApiClient\Generated\V2\Clients\App\RequestAppinstallationCopy\RequestAppinstallationCopy404Response;
use Mittwald\ApiClient\Generated\V2\Clients\App\RequestAppinstallationCopy\RequestAppinstallationCopyDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\RequestAppinstallationCopy\RequestAppinstallationCopyRequest;
use Mittwald\ApiClient\Generated\V2\Clients\App\RetrieveStatus\RetrieveStatus200Response;
use Mittwald\ApiClient\Generated\V2\Clients\App\RetrieveStatus\RetrieveStatus404Response;
use Mittwald\ApiClient\Generated\V2\Clients\App\RetrieveStatus\RetrieveStatusDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\RetrieveStatus\RetrieveStatusRequest;
use Mittwald\ApiClient\Generated\V2\Clients\App\SetDatabaseUsers\SetDatabaseUsers404Response;
use Mittwald\ApiClient\Generated\V2\Clients\App\SetDatabaseUsers\SetDatabaseUsersDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\SetDatabaseUsers\SetDatabaseUsersRequest;
use Mittwald\ApiClient\Generated\V2\Clients\App\UninstallAppinstallation\UninstallAppinstallation404Response;
use Mittwald\ApiClient\Generated\V2\Clients\App\UninstallAppinstallation\UninstallAppinstallationDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\UninstallAppinstallation\UninstallAppinstallationRequest;
use Mittwald\ApiClient\Generated\V2\Clients\App\UnlinkDatabase\UnlinkDatabase404Response;
use Mittwald\ApiClient\Generated\V2\Clients\App\UnlinkDatabase\UnlinkDatabaseDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\App\UnlinkDatabase\UnlinkDatabaseRequest;

class AppClient
{
    private Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function executeAction(ExecuteActionRequest $request): EmptyResponse|ExecuteAction404Response|ExecuteActionDefaultResponse
    {
        $httpRequest = new Request(ExecuteActionRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            404 => ExecuteAction404Response::fromResponse($httpResponse),
            default => ExecuteActionDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getApp(GetAppRequest $request): GetApp200Response|GetApp404Response|GetAppDefaultResponse
    {
        $httpRequest = new Request(GetAppRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetApp200Response::fromResponse($httpResponse),
            404 => GetApp404Response::fromResponse($httpResponse),
            default => GetAppDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getAppinstallation(GetAppinstallationRequest $request): GetAppinstallation200Response|GetAppinstallation404Response|GetAppinstallationDefaultResponse
    {
        $httpRequest = new Request(GetAppinstallationRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetAppinstallation200Response::fromResponse($httpResponse),
            404 => GetAppinstallation404Response::fromResponse($httpResponse),
            default => GetAppinstallationDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function patchAppinstallation(PatchAppinstallationRequest $request): EmptyResponse|PatchAppinstallation404Response|PatchAppinstallationDefaultResponse
    {
        $httpRequest = new Request(PatchAppinstallationRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            404 => PatchAppinstallation404Response::fromResponse($httpResponse),
            default => PatchAppinstallationDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function uninstallAppinstallation(UninstallAppinstallationRequest $request): EmptyResponse|UninstallAppinstallation404Response|UninstallAppinstallationDefaultResponse
    {
        $httpRequest = new Request(UninstallAppinstallationRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            404 => UninstallAppinstallation404Response::fromResponse($httpResponse),
            default => UninstallAppinstallationDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getAppversion(GetAppversionRequest $request): GetAppversion200Response|GetAppversion404Response|GetAppversionDefaultResponse
    {
        $httpRequest = new Request(GetAppversionRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetAppversion200Response::fromResponse($httpResponse),
            404 => GetAppversion404Response::fromResponse($httpResponse),
            default => GetAppversionDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getMissingDependenciesForAppinstallation(GetMissingDependenciesForAppinstallationRequest $request): GetMissingDependenciesForAppinstallation200Response|GetMissingDependenciesForAppinstallation404Response|GetMissingDependenciesForAppinstallationDefaultResponse
    {
        $httpRequest = new Request(GetMissingDependenciesForAppinstallationRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetMissingDependenciesForAppinstallation200Response::fromResponse($httpResponse),
            404 => GetMissingDependenciesForAppinstallation404Response::fromResponse($httpResponse),
            default => GetMissingDependenciesForAppinstallationDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getSystemsoftware(GetSystemsoftwareRequest $request): GetSystemsoftware200Response|GetSystemsoftware404Response|GetSystemsoftwareDefaultResponse
    {
        $httpRequest = new Request(GetSystemsoftwareRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetSystemsoftware200Response::fromResponse($httpResponse),
            404 => GetSystemsoftware404Response::fromResponse($httpResponse),
            default => GetSystemsoftwareDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getSystemsoftwareversion(GetSystemsoftwareversionRequest $request): GetSystemsoftwareversion200Response|GetSystemsoftwareversion404Response|GetSystemsoftwareversionDefaultResponse
    {
        $httpRequest = new Request(GetSystemsoftwareversionRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetSystemsoftwareversion200Response::fromResponse($httpResponse),
            404 => GetSystemsoftwareversion404Response::fromResponse($httpResponse),
            default => GetSystemsoftwareversionDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function linkDatabase(LinkDatabaseRequest $request): EmptyResponse|LinkDatabase404Response|LinkDatabaseDefaultResponse
    {
        $httpRequest = new Request(LinkDatabaseRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            404 => LinkDatabase404Response::fromResponse($httpResponse),
            default => LinkDatabaseDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listAppinstallations(ListAppinstallationsRequest $request): ListAppinstallations200Response|ListAppinstallationsDefaultResponse
    {
        $httpRequest = new Request(ListAppinstallationsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListAppinstallations200Response::fromResponse($httpResponse),
            default => ListAppinstallationsDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function requestAppinstallation(RequestAppinstallationRequest $request): RequestAppinstallation201Response|RequestAppinstallation404Response|RequestAppinstallationDefaultResponse
    {
        $httpRequest = new Request(RequestAppinstallationRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => RequestAppinstallation201Response::fromResponse($httpResponse),
            404 => RequestAppinstallation404Response::fromResponse($httpResponse),
            default => RequestAppinstallationDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listApps(ListAppsRequest $request): ListApps200Response|ListAppsDefaultResponse
    {
        $httpRequest = new Request(ListAppsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListApps200Response::fromResponse($httpResponse),
            default => ListAppsDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listAppversions(ListAppversionsRequest $request): ListAppversions200Response|ListAppversionsDefaultResponse
    {
        $httpRequest = new Request(ListAppversionsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListAppversions200Response::fromResponse($httpResponse),
            default => ListAppversionsDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listSystemsoftwares(ListSystemsoftwaresRequest $request): ListSystemsoftwares200Response|ListSystemsoftwaresDefaultResponse
    {
        $httpRequest = new Request(ListSystemsoftwaresRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListSystemsoftwares200Response::fromResponse($httpResponse),
            default => ListSystemsoftwaresDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listSystemsoftwareversions(ListSystemsoftwareversionsRequest $request): ListSystemsoftwareversions200Response|ListSystemsoftwareversionsDefaultResponse
    {
        $httpRequest = new Request(ListSystemsoftwareversionsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListSystemsoftwareversions200Response::fromResponse($httpResponse),
            default => ListSystemsoftwareversionsDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listUpdateCandidatesForAppversion(ListUpdateCandidatesForAppversionRequest $request): ListUpdateCandidatesForAppversion200Response|ListUpdateCandidatesForAppversionDefaultResponse
    {
        $httpRequest = new Request(ListUpdateCandidatesForAppversionRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListUpdateCandidatesForAppversion200Response::fromResponse($httpResponse),
            default => ListUpdateCandidatesForAppversionDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function reconcileDetectedApps(ReconcileDetectedAppsRequest $request): EmptyResponse|ReconcileDetectedApps404Response|ReconcileDetectedAppsDefaultResponse
    {
        $httpRequest = new Request(ReconcileDetectedAppsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->toJson()['body'],
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            404 => ReconcileDetectedApps404Response::fromResponse($httpResponse),
            default => ReconcileDetectedAppsDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function requestAppinstallationCopy(RequestAppinstallationCopyRequest $request): RequestAppinstallationCopy201Response|RequestAppinstallationCopy404Response|RequestAppinstallationCopyDefaultResponse
    {
        $httpRequest = new Request(RequestAppinstallationCopyRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => RequestAppinstallationCopy201Response::fromResponse($httpResponse),
            404 => RequestAppinstallationCopy404Response::fromResponse($httpResponse),
            default => RequestAppinstallationCopyDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function retrieveStatus(RetrieveStatusRequest $request): RetrieveStatus200Response|RetrieveStatus404Response|RetrieveStatusDefaultResponse
    {
        $httpRequest = new Request(RetrieveStatusRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => RetrieveStatus200Response::fromResponse($httpResponse),
            404 => RetrieveStatus404Response::fromResponse($httpResponse),
            default => RetrieveStatusDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function setDatabaseUsers(SetDatabaseUsersRequest $request): EmptyResponse|SetDatabaseUsers404Response|SetDatabaseUsersDefaultResponse
    {
        $httpRequest = new Request(SetDatabaseUsersRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            404 => SetDatabaseUsers404Response::fromResponse($httpResponse),
            default => SetDatabaseUsersDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function unlinkDatabase(UnlinkDatabaseRequest $request): EmptyResponse|UnlinkDatabase404Response|UnlinkDatabaseDefaultResponse
    {
        $httpRequest = new Request(UnlinkDatabaseRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            404 => UnlinkDatabase404Response::fromResponse($httpResponse),
            default => UnlinkDatabaseDefaultResponse::fromResponse($httpResponse),
        };
    }
}
