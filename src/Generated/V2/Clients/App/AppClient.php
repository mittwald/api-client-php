<?php

namespace Mittwald\ApiClient\Generated\V2\Clients\App;

use GuzzleHttp\Psr7\Request;

class AppClient
{
    private \GuzzleHttp\Client $client;

    public function __construct(\GuzzleHttp\Client $client)
    {
        $this->client = $client;
    }

    public function executeAction(ExecuteAction\ExecuteActionRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|ExecuteAction\ExecuteAction404Response|ExecuteAction\ExecuteActionDefaultResponse
    {
        $httpRequest = new Request(ExecuteAction\ExecuteActionRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            404 => ExecuteAction\ExecuteAction404Response::fromResponse($httpResponse),
            default => ExecuteAction\ExecuteActionDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getApp(GetApp\GetAppRequest $request) : GetApp\GetApp200Response|GetApp\GetApp404Response|GetApp\GetAppDefaultResponse
    {
        $httpRequest = new Request(GetApp\GetAppRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetApp\GetApp200Response::fromResponse($httpResponse),
            404 => GetApp\GetApp404Response::fromResponse($httpResponse),
            default => GetApp\GetAppDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getAppinstallation(GetAppinstallation\GetAppinstallationRequest $request) : GetAppinstallation\GetAppinstallation200Response|GetAppinstallation\GetAppinstallation404Response|GetAppinstallation\GetAppinstallationDefaultResponse
    {
        $httpRequest = new Request(GetAppinstallation\GetAppinstallationRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetAppinstallation\GetAppinstallation200Response::fromResponse($httpResponse),
            404 => GetAppinstallation\GetAppinstallation404Response::fromResponse($httpResponse),
            default => GetAppinstallation\GetAppinstallationDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function patchAppinstallation(PatchAppinstallation\PatchAppinstallationRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|PatchAppinstallation\PatchAppinstallation404Response|PatchAppinstallation\PatchAppinstallationDefaultResponse
    {
        $httpRequest = new Request(PatchAppinstallation\PatchAppinstallationRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            404 => PatchAppinstallation\PatchAppinstallation404Response::fromResponse($httpResponse),
            default => PatchAppinstallation\PatchAppinstallationDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function uninstallAppinstallation(UninstallAppinstallation\UninstallAppinstallationRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|UninstallAppinstallation\UninstallAppinstallation404Response|UninstallAppinstallation\UninstallAppinstallationDefaultResponse
    {
        $httpRequest = new Request(UninstallAppinstallation\UninstallAppinstallationRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            404 => UninstallAppinstallation\UninstallAppinstallation404Response::fromResponse($httpResponse),
            default => UninstallAppinstallation\UninstallAppinstallationDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getAppversion(GetAppversion\GetAppversionRequest $request) : GetAppversion\GetAppversion200Response|GetAppversion\GetAppversion404Response|GetAppversion\GetAppversionDefaultResponse
    {
        $httpRequest = new Request(GetAppversion\GetAppversionRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetAppversion\GetAppversion200Response::fromResponse($httpResponse),
            404 => GetAppversion\GetAppversion404Response::fromResponse($httpResponse),
            default => GetAppversion\GetAppversionDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getMissingDependenciesForAppinstallation(GetMissingDependenciesForAppinstallation\GetMissingDependenciesForAppinstallationRequest $request) : GetMissingDependenciesForAppinstallation\GetMissingDependenciesForAppinstallation200Response|GetMissingDependenciesForAppinstallation\GetMissingDependenciesForAppinstallation404Response|GetMissingDependenciesForAppinstallation\GetMissingDependenciesForAppinstallationDefaultResponse
    {
        $httpRequest = new Request(GetMissingDependenciesForAppinstallation\GetMissingDependenciesForAppinstallationRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetMissingDependenciesForAppinstallation\GetMissingDependenciesForAppinstallation200Response::fromResponse($httpResponse),
            404 => GetMissingDependenciesForAppinstallation\GetMissingDependenciesForAppinstallation404Response::fromResponse($httpResponse),
            default => GetMissingDependenciesForAppinstallation\GetMissingDependenciesForAppinstallationDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getSystemsoftware(GetSystemsoftware\GetSystemsoftwareRequest $request) : GetSystemsoftware\GetSystemsoftware200Response|GetSystemsoftware\GetSystemsoftware404Response|GetSystemsoftware\GetSystemsoftwareDefaultResponse
    {
        $httpRequest = new Request(GetSystemsoftware\GetSystemsoftwareRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetSystemsoftware\GetSystemsoftware200Response::fromResponse($httpResponse),
            404 => GetSystemsoftware\GetSystemsoftware404Response::fromResponse($httpResponse),
            default => GetSystemsoftware\GetSystemsoftwareDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getSystemsoftwareversion(GetSystemsoftwareversion\GetSystemsoftwareversionRequest $request) : GetSystemsoftwareversion\GetSystemsoftwareversion200Response|GetSystemsoftwareversion\GetSystemsoftwareversion404Response|GetSystemsoftwareversion\GetSystemsoftwareversionDefaultResponse
    {
        $httpRequest = new Request(GetSystemsoftwareversion\GetSystemsoftwareversionRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetSystemsoftwareversion\GetSystemsoftwareversion200Response::fromResponse($httpResponse),
            404 => GetSystemsoftwareversion\GetSystemsoftwareversion404Response::fromResponse($httpResponse),
            default => GetSystemsoftwareversion\GetSystemsoftwareversionDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function linkDatabase(LinkDatabase\LinkDatabaseRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|LinkDatabase\LinkDatabase404Response|LinkDatabase\LinkDatabaseDefaultResponse
    {
        $httpRequest = new Request(LinkDatabase\LinkDatabaseRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            404 => LinkDatabase\LinkDatabase404Response::fromResponse($httpResponse),
            default => LinkDatabase\LinkDatabaseDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listAppinstallations(ListAppinstallations\ListAppinstallationsRequest $request) : ListAppinstallations\ListAppinstallations200Response|ListAppinstallations\ListAppinstallationsDefaultResponse
    {
        $httpRequest = new Request(ListAppinstallations\ListAppinstallationsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListAppinstallations\ListAppinstallations200Response::fromResponse($httpResponse),
            default => ListAppinstallations\ListAppinstallationsDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function requestAppinstallation(RequestAppinstallation\RequestAppinstallationRequest $request) : RequestAppinstallation\RequestAppinstallation201Response|RequestAppinstallation\RequestAppinstallation404Response|RequestAppinstallation\RequestAppinstallationDefaultResponse
    {
        $httpRequest = new Request(RequestAppinstallation\RequestAppinstallationRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => RequestAppinstallation\RequestAppinstallation201Response::fromResponse($httpResponse),
            404 => RequestAppinstallation\RequestAppinstallation404Response::fromResponse($httpResponse),
            default => RequestAppinstallation\RequestAppinstallationDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listApps(ListApps\ListAppsRequest $request) : ListApps\ListApps200Response|ListApps\ListAppsDefaultResponse
    {
        $httpRequest = new Request(ListApps\ListAppsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListApps\ListApps200Response::fromResponse($httpResponse),
            default => ListApps\ListAppsDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listAppversions(ListAppversions\ListAppversionsRequest $request) : ListAppversions\ListAppversions200Response|ListAppversions\ListAppversionsDefaultResponse
    {
        $httpRequest = new Request(ListAppversions\ListAppversionsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListAppversions\ListAppversions200Response::fromResponse($httpResponse),
            default => ListAppversions\ListAppversionsDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listSystemsoftwares(ListSystemsoftwares\ListSystemsoftwaresRequest $request) : ListSystemsoftwares\ListSystemsoftwares200Response|ListSystemsoftwares\ListSystemsoftwaresDefaultResponse
    {
        $httpRequest = new Request(ListSystemsoftwares\ListSystemsoftwaresRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListSystemsoftwares\ListSystemsoftwares200Response::fromResponse($httpResponse),
            default => ListSystemsoftwares\ListSystemsoftwaresDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listSystemsoftwareversions(ListSystemsoftwareversions\ListSystemsoftwareversionsRequest $request) : ListSystemsoftwareversions\ListSystemsoftwareversions200Response|ListSystemsoftwareversions\ListSystemsoftwareversionsDefaultResponse
    {
        $httpRequest = new Request(ListSystemsoftwareversions\ListSystemsoftwareversionsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListSystemsoftwareversions\ListSystemsoftwareversions200Response::fromResponse($httpResponse),
            default => ListSystemsoftwareversions\ListSystemsoftwareversionsDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listUpdateCandidatesForAppversion(ListUpdateCandidatesForAppversion\ListUpdateCandidatesForAppversionRequest $request) : ListUpdateCandidatesForAppversion\ListUpdateCandidatesForAppversion200Response|ListUpdateCandidatesForAppversion\ListUpdateCandidatesForAppversionDefaultResponse
    {
        $httpRequest = new Request(ListUpdateCandidatesForAppversion\ListUpdateCandidatesForAppversionRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListUpdateCandidatesForAppversion\ListUpdateCandidatesForAppversion200Response::fromResponse($httpResponse),
            default => ListUpdateCandidatesForAppversion\ListUpdateCandidatesForAppversionDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function reconcileDetectedApps(ReconcileDetectedApps\ReconcileDetectedAppsRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|ReconcileDetectedApps\ReconcileDetectedApps404Response|ReconcileDetectedApps\ReconcileDetectedAppsDefaultResponse
    {
        $httpRequest = new Request(ReconcileDetectedApps\ReconcileDetectedAppsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->toJson()['body'],
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            404 => ReconcileDetectedApps\ReconcileDetectedApps404Response::fromResponse($httpResponse),
            default => ReconcileDetectedApps\ReconcileDetectedAppsDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function requestAppinstallationCopy(RequestAppinstallationCopy\RequestAppinstallationCopyRequest $request) : RequestAppinstallationCopy\RequestAppinstallationCopy201Response|RequestAppinstallationCopy\RequestAppinstallationCopy404Response|RequestAppinstallationCopy\RequestAppinstallationCopyDefaultResponse
    {
        $httpRequest = new Request(RequestAppinstallationCopy\RequestAppinstallationCopyRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => RequestAppinstallationCopy\RequestAppinstallationCopy201Response::fromResponse($httpResponse),
            404 => RequestAppinstallationCopy\RequestAppinstallationCopy404Response::fromResponse($httpResponse),
            default => RequestAppinstallationCopy\RequestAppinstallationCopyDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function retrieveStatus(RetrieveStatus\RetrieveStatusRequest $request) : RetrieveStatus\RetrieveStatus200Response|RetrieveStatus\RetrieveStatus404Response|RetrieveStatus\RetrieveStatusDefaultResponse
    {
        $httpRequest = new Request(RetrieveStatus\RetrieveStatusRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => RetrieveStatus\RetrieveStatus200Response::fromResponse($httpResponse),
            404 => RetrieveStatus\RetrieveStatus404Response::fromResponse($httpResponse),
            default => RetrieveStatus\RetrieveStatusDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function setDatabaseUsers(SetDatabaseUsers\SetDatabaseUsersRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|SetDatabaseUsers\SetDatabaseUsers404Response|SetDatabaseUsers\SetDatabaseUsersDefaultResponse
    {
        $httpRequest = new Request(SetDatabaseUsers\SetDatabaseUsersRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            404 => SetDatabaseUsers\SetDatabaseUsers404Response::fromResponse($httpResponse),
            default => SetDatabaseUsers\SetDatabaseUsersDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function unlinkDatabase(UnlinkDatabase\UnlinkDatabaseRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|UnlinkDatabase\UnlinkDatabase404Response|UnlinkDatabase\UnlinkDatabaseDefaultResponse
    {
        $httpRequest = new Request(UnlinkDatabase\UnlinkDatabaseRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            404 => UnlinkDatabase\UnlinkDatabase404Response::fromResponse($httpResponse),
            default => UnlinkDatabase\UnlinkDatabaseDefaultResponse::fromResponse($httpResponse),
        };
    }
}

