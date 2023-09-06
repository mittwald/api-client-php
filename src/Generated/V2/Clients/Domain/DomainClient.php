<?php

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain;

use GuzzleHttp\Psr7\Request;

class DomainClient
{
    private \GuzzleHttp\Client $client;

    public function __construct(\GuzzleHttp\Client $client)
    {
        $this->client = $client;
    }

    public function dnsRecordASetCustom(DnsRecordASetCustom\DnsRecordASetCustomRequest $request): \Mittwald\ApiClient\Client\EmptyResponse|DnsRecordASetCustom\DnsRecordASetCustom400Response|DnsRecordASetCustom\DnsRecordASetCustomDefaultResponse
    {
        $httpRequest = new Request(DnsRecordASetCustom\DnsRecordASetCustomRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => DnsRecordASetCustom\DnsRecordASetCustom400Response::fromResponse($httpResponse),
            default => DnsRecordASetCustom\DnsRecordASetCustomDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function dnsRecordASetManagedByIngress(DnsRecordASetManagedByIngress\DnsRecordASetManagedByIngressRequest $request): DnsRecordASetManagedByIngress\DnsRecordASetManagedByIngress204Response|DnsRecordASetManagedByIngress\DnsRecordASetManagedByIngress400Response|DnsRecordASetManagedByIngress\DnsRecordASetManagedByIngressDefaultResponse
    {
        $httpRequest = new Request(DnsRecordASetManagedByIngress\DnsRecordASetManagedByIngressRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => DnsRecordASetManagedByIngress\DnsRecordASetManagedByIngress204Response::fromResponse($httpResponse),
            400 => DnsRecordASetManagedByIngress\DnsRecordASetManagedByIngress400Response::fromResponse($httpResponse),
            default => DnsRecordASetManagedByIngress\DnsRecordASetManagedByIngressDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function dnsRecordCnameSet(DnsRecordCnameSet\DnsRecordCnameSetRequest $request): \Mittwald\ApiClient\Client\EmptyResponse|DnsRecordCnameSet\DnsRecordCnameSet400Response|DnsRecordCnameSet\DnsRecordCnameSetDefaultResponse
    {
        $httpRequest = new Request(DnsRecordCnameSet\DnsRecordCnameSetRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => DnsRecordCnameSet\DnsRecordCnameSet400Response::fromResponse($httpResponse),
            default => DnsRecordCnameSet\DnsRecordCnameSetDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function dnsRecordMxSetCustom(DnsRecordMxSetCustom\DnsRecordMxSetCustomRequest $request): \Mittwald\ApiClient\Client\EmptyResponse|DnsRecordMxSetCustom\DnsRecordMxSetCustom400Response|DnsRecordMxSetCustom\DnsRecordMxSetCustomDefaultResponse
    {
        $httpRequest = new Request(DnsRecordMxSetCustom\DnsRecordMxSetCustomRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => DnsRecordMxSetCustom\DnsRecordMxSetCustom400Response::fromResponse($httpResponse),
            default => DnsRecordMxSetCustom\DnsRecordMxSetCustomDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function dnsRecordMxSetManaged(DnsRecordMxSetManaged\DnsRecordMxSetManagedRequest $request): \Mittwald\ApiClient\Client\EmptyResponse|DnsRecordMxSetManaged\DnsRecordMxSetManaged400Response|DnsRecordMxSetManaged\DnsRecordMxSetManagedDefaultResponse
    {
        $httpRequest = new Request(DnsRecordMxSetManaged\DnsRecordMxSetManagedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => DnsRecordMxSetManaged\DnsRecordMxSetManaged400Response::fromResponse($httpResponse),
            default => DnsRecordMxSetManaged\DnsRecordMxSetManagedDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function dnsRecordSrvSet(DnsRecordSrvSet\DnsRecordSrvSetRequest $request): \Mittwald\ApiClient\Client\EmptyResponse|DnsRecordSrvSet\DnsRecordSrvSet400Response|DnsRecordSrvSet\DnsRecordSrvSetDefaultResponse
    {
        $httpRequest = new Request(DnsRecordSrvSet\DnsRecordSrvSetRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => DnsRecordSrvSet\DnsRecordSrvSet400Response::fromResponse($httpResponse),
            default => DnsRecordSrvSet\DnsRecordSrvSetDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function dnsRecordTxtSet(DnsRecordTxtSet\DnsRecordTxtSetRequest $request): \Mittwald\ApiClient\Client\EmptyResponse|DnsRecordTxtSet\DnsRecordTxtSet400Response|DnsRecordTxtSet\DnsRecordTxtSetDefaultResponse
    {
        $httpRequest = new Request(DnsRecordTxtSet\DnsRecordTxtSetRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => DnsRecordTxtSet\DnsRecordTxtSet400Response::fromResponse($httpResponse),
            default => DnsRecordTxtSet\DnsRecordTxtSetDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function dnsSubZoneCreate(DnsSubZoneCreate\DnsSubZoneCreateRequest $request): DnsSubZoneCreate\DnsSubZoneCreate201Response|DnsSubZoneCreate\DnsSubZoneCreate400Response|DnsSubZoneCreate\DnsSubZoneCreateDefaultResponse
    {
        $httpRequest = new Request(DnsSubZoneCreate\DnsSubZoneCreateRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => DnsSubZoneCreate\DnsSubZoneCreate201Response::fromResponse($httpResponse),
            400 => DnsSubZoneCreate\DnsSubZoneCreate400Response::fromResponse($httpResponse),
            default => DnsSubZoneCreate\DnsSubZoneCreateDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function dnsZoneGetSpecific(DnsZoneGetSpecific\DnsZoneGetSpecificRequest $request): DnsZoneGetSpecific\DnsZoneGetSpecific200Response|DnsZoneGetSpecific\DnsZoneGetSpecific400Response|DnsZoneGetSpecific\DnsZoneGetSpecificDefaultResponse
    {
        $httpRequest = new Request(DnsZoneGetSpecific\DnsZoneGetSpecificRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => DnsZoneGetSpecific\DnsZoneGetSpecific200Response::fromResponse($httpResponse),
            400 => DnsZoneGetSpecific\DnsZoneGetSpecific400Response::fromResponse($httpResponse),
            default => DnsZoneGetSpecific\DnsZoneGetSpecificDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function dnsZonesForProject(DnsZonesForProject\DnsZonesForProjectRequest $request): DnsZonesForProject\DnsZonesForProject200Response|DnsZonesForProject\DnsZonesForProject400Response|DnsZonesForProject\DnsZonesForProjectDefaultResponse
    {
        $httpRequest = new Request(DnsZonesForProject\DnsZonesForProjectRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => DnsZonesForProject\DnsZonesForProject200Response::fromResponse($httpResponse),
            400 => DnsZonesForProject\DnsZonesForProject400Response::fromResponse($httpResponse),
            default => DnsZonesForProject\DnsZonesForProjectDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function abortDeclareProcess(AbortDeclareProcess\AbortDeclareProcessRequest $request): \Mittwald\ApiClient\Client\EmptyResponse|AbortDeclareProcess\AbortDeclareProcess400Response|AbortDeclareProcess\AbortDeclareProcess404Response|AbortDeclareProcess\AbortDeclareProcessDefaultResponse
    {
        $httpRequest = new Request(AbortDeclareProcess\AbortDeclareProcessRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => AbortDeclareProcess\AbortDeclareProcess400Response::fromResponse($httpResponse),
            404 => AbortDeclareProcess\AbortDeclareProcess404Response::fromResponse($httpResponse),
            default => AbortDeclareProcess\AbortDeclareProcessDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function changeOwnercOfDomain(ChangeOwnercOfDomain\ChangeOwnercOfDomainRequest $request): ChangeOwnercOfDomain\ChangeOwnercOfDomain200Response|ChangeOwnercOfDomain\ChangeOwnercOfDomain400Response|ChangeOwnercOfDomain\ChangeOwnercOfDomain404Response|ChangeOwnercOfDomain\ChangeOwnercOfDomainDefaultResponse
    {
        $httpRequest = new Request(ChangeOwnercOfDomain\ChangeOwnercOfDomainRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ChangeOwnercOfDomain\ChangeOwnercOfDomain200Response::fromResponse($httpResponse),
            400 => ChangeOwnercOfDomain\ChangeOwnercOfDomain400Response::fromResponse($httpResponse),
            404 => ChangeOwnercOfDomain\ChangeOwnercOfDomain404Response::fromResponse($httpResponse),
            default => ChangeOwnercOfDomain\ChangeOwnercOfDomainDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function changeProjectOfDomain(ChangeProjectOfDomain\ChangeProjectOfDomainRequest $request): \Mittwald\ApiClient\Client\EmptyResponse|ChangeProjectOfDomain\ChangeProjectOfDomain400Response|ChangeProjectOfDomain\ChangeProjectOfDomain404Response|ChangeProjectOfDomain\ChangeProjectOfDomainDefaultResponse
    {
        $httpRequest = new Request(ChangeProjectOfDomain\ChangeProjectOfDomainRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => ChangeProjectOfDomain\ChangeProjectOfDomain400Response::fromResponse($httpResponse),
            404 => ChangeProjectOfDomain\ChangeProjectOfDomain404Response::fromResponse($httpResponse),
            default => ChangeProjectOfDomain\ChangeProjectOfDomainDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function checkDomainAvailability(CheckDomainAvailability\CheckDomainAvailabilityRequest $request): CheckDomainAvailability\CheckDomainAvailability200Response|CheckDomainAvailability\CheckDomainAvailability400Response|CheckDomainAvailability\CheckDomainAvailabilityDefaultResponse
    {
        $httpRequest = new Request(CheckDomainAvailability\CheckDomainAvailabilityRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => CheckDomainAvailability\CheckDomainAvailability200Response::fromResponse($httpResponse),
            400 => CheckDomainAvailability\CheckDomainAvailability400Response::fromResponse($httpResponse),
            default => CheckDomainAvailability\CheckDomainAvailabilityDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function createAuthcodeForDomain(CreateAuthcodeForDomain\CreateAuthcodeForDomainRequest $request): CreateAuthcodeForDomain\CreateAuthcodeForDomain201Response|CreateAuthcodeForDomain\CreateAuthcodeForDomain400Response|CreateAuthcodeForDomain\CreateAuthcodeForDomain404Response|CreateAuthcodeForDomain\CreateAuthcodeForDomainDefaultResponse
    {
        $httpRequest = new Request(CreateAuthcodeForDomain\CreateAuthcodeForDomainRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => CreateAuthcodeForDomain\CreateAuthcodeForDomain201Response::fromResponse($httpResponse),
            400 => CreateAuthcodeForDomain\CreateAuthcodeForDomain400Response::fromResponse($httpResponse),
            404 => CreateAuthcodeForDomain\CreateAuthcodeForDomain404Response::fromResponse($httpResponse),
            default => CreateAuthcodeForDomain\CreateAuthcodeForDomainDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function createAuthcode2ForDomain(CreateAuthcode2ForDomain\CreateAuthcode2ForDomainRequest $request): \Mittwald\ApiClient\Client\EmptyResponse|CreateAuthcode2ForDomain\CreateAuthcode2ForDomain400Response|CreateAuthcode2ForDomain\CreateAuthcode2ForDomain404Response|CreateAuthcode2ForDomain\CreateAuthcode2ForDomainDefaultResponse
    {
        $httpRequest = new Request(CreateAuthcode2ForDomain\CreateAuthcode2ForDomainRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => CreateAuthcode2ForDomain\CreateAuthcode2ForDomain400Response::fromResponse($httpResponse),
            404 => CreateAuthcode2ForDomain\CreateAuthcode2ForDomain404Response::fromResponse($httpResponse),
            default => CreateAuthcode2ForDomain\CreateAuthcode2ForDomainDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function declareNameservers(DeclareNameservers\DeclareNameserversRequest $request): \Mittwald\ApiClient\Client\EmptyResponse|DeclareNameservers\DeclareNameservers400Response|DeclareNameservers\DeclareNameservers404Response|DeclareNameservers\DeclareNameserversDefaultResponse
    {
        $httpRequest = new Request(DeclareNameservers\DeclareNameserversRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => DeclareNameservers\DeclareNameservers400Response::fromResponse($httpResponse),
            404 => DeclareNameservers\DeclareNameservers404Response::fromResponse($httpResponse),
            default => DeclareNameservers\DeclareNameserversDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function declareProcessChangeAuthcode(DeclareProcessChangeAuthcode\DeclareProcessChangeAuthcodeRequest $request): DeclareProcessChangeAuthcode\DeclareProcessChangeAuthcode200Response|DeclareProcessChangeAuthcode\DeclareProcessChangeAuthcode400Response|DeclareProcessChangeAuthcode\DeclareProcessChangeAuthcode404Response|DeclareProcessChangeAuthcode\DeclareProcessChangeAuthcodeDefaultResponse
    {
        $httpRequest = new Request(DeclareProcessChangeAuthcode\DeclareProcessChangeAuthcodeRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => DeclareProcessChangeAuthcode\DeclareProcessChangeAuthcode200Response::fromResponse($httpResponse),
            400 => DeclareProcessChangeAuthcode\DeclareProcessChangeAuthcode400Response::fromResponse($httpResponse),
            404 => DeclareProcessChangeAuthcode\DeclareProcessChangeAuthcode404Response::fromResponse($httpResponse),
            default => DeclareProcessChangeAuthcode\DeclareProcessChangeAuthcodeDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function declareProcessChangeHandles(DeclareProcessChangeHandles\DeclareProcessChangeHandlesRequest $request): DeclareProcessChangeHandles\DeclareProcessChangeHandles200Response|DeclareProcessChangeHandles\DeclareProcessChangeHandles400Response|DeclareProcessChangeHandles\DeclareProcessChangeHandles404Response|DeclareProcessChangeHandles\DeclareProcessChangeHandlesDefaultResponse
    {
        $httpRequest = new Request(DeclareProcessChangeHandles\DeclareProcessChangeHandlesRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => DeclareProcessChangeHandles\DeclareProcessChangeHandles200Response::fromResponse($httpResponse),
            400 => DeclareProcessChangeHandles\DeclareProcessChangeHandles400Response::fromResponse($httpResponse),
            404 => DeclareProcessChangeHandles\DeclareProcessChangeHandles404Response::fromResponse($httpResponse),
            default => DeclareProcessChangeHandles\DeclareProcessChangeHandlesDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deleteDomain(DeleteDomain\DeleteDomainRequest $request): DeleteDomain\DeleteDomain200Response|DeleteDomain\DeleteDomain400Response|DeleteDomain\DeleteDomain404Response|DeleteDomain\DeleteDomainDefaultResponse
    {
        $httpRequest = new Request(DeleteDomain\DeleteDomainRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => DeleteDomain\DeleteDomain200Response::fromResponse($httpResponse),
            400 => DeleteDomain\DeleteDomain400Response::fromResponse($httpResponse),
            404 => DeleteDomain\DeleteDomain404Response::fromResponse($httpResponse),
            default => DeleteDomain\DeleteDomainDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getDomain(GetDomain\GetDomainRequest $request): GetDomain\GetDomain200Response|GetDomain\GetDomain400Response|GetDomain\GetDomain404Response|GetDomain\GetDomainDefaultResponse
    {
        $httpRequest = new Request(GetDomain\GetDomainRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetDomain\GetDomain200Response::fromResponse($httpResponse),
            400 => GetDomain\GetDomain400Response::fromResponse($httpResponse),
            404 => GetDomain\GetDomain404Response::fromResponse($httpResponse),
            default => GetDomain\GetDomainDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getHandleFields(GetHandleFields\GetHandleFieldsRequest $request): GetHandleFields\GetHandleFields200Response|GetHandleFields\GetHandleFieldsDefaultResponse
    {
        $httpRequest = new Request(GetHandleFields\GetHandleFieldsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetHandleFields\GetHandleFields200Response::fromResponse($httpResponse),
            default => GetHandleFields\GetHandleFieldsDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getScreenshotForDomain(GetScreenshotForDomain\GetScreenshotForDomainRequest $request): GetScreenshotForDomain\GetScreenshotForDomain200Response|GetScreenshotForDomain\GetScreenshotForDomain404Response|GetScreenshotForDomain\GetScreenshotForDomainDefaultResponse
    {
        $httpRequest = new Request(GetScreenshotForDomain\GetScreenshotForDomainRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetScreenshotForDomain\GetScreenshotForDomain200Response::fromResponse($httpResponse),
            404 => GetScreenshotForDomain\GetScreenshotForDomain404Response::fromResponse($httpResponse),
            default => GetScreenshotForDomain\GetScreenshotForDomainDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getSpecificDomainOwnership(GetSpecificDomainOwnership\GetSpecificDomainOwnershipRequest $request): GetSpecificDomainOwnership\GetSpecificDomainOwnership200Response|GetSpecificDomainOwnership\GetSpecificDomainOwnership400Response|GetSpecificDomainOwnership\GetSpecificDomainOwnership404Response|GetSpecificDomainOwnership\GetSpecificDomainOwnershipDefaultResponse
    {
        $httpRequest = new Request(GetSpecificDomainOwnership\GetSpecificDomainOwnershipRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetSpecificDomainOwnership\GetSpecificDomainOwnership200Response::fromResponse($httpResponse),
            400 => GetSpecificDomainOwnership\GetSpecificDomainOwnership400Response::fromResponse($httpResponse),
            404 => GetSpecificDomainOwnership\GetSpecificDomainOwnership404Response::fromResponse($httpResponse),
            default => GetSpecificDomainOwnership\GetSpecificDomainOwnershipDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function verifyDomainOwnership(VerifyDomainOwnership\VerifyDomainOwnershipRequest $request): \Mittwald\ApiClient\Client\EmptyResponse|VerifyDomainOwnership\VerifyDomainOwnership400Response|VerifyDomainOwnership\VerifyDomainOwnership404Response|VerifyDomainOwnership\VerifyDomainOwnershipDefaultResponse
    {
        $httpRequest = new Request(VerifyDomainOwnership\VerifyDomainOwnershipRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => VerifyDomainOwnership\VerifyDomainOwnership400Response::fromResponse($httpResponse),
            404 => VerifyDomainOwnership\VerifyDomainOwnership404Response::fromResponse($httpResponse),
            default => VerifyDomainOwnership\VerifyDomainOwnershipDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listDomainOwnerships(ListDomainOwnerships\ListDomainOwnershipsRequest $request): ListDomainOwnerships\ListDomainOwnerships200Response|ListDomainOwnerships\ListDomainOwnerships400Response|ListDomainOwnerships\ListDomainOwnershipsDefaultResponse
    {
        $httpRequest = new Request(ListDomainOwnerships\ListDomainOwnershipsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListDomainOwnerships\ListDomainOwnerships200Response::fromResponse($httpResponse),
            400 => ListDomainOwnerships\ListDomainOwnerships400Response::fromResponse($httpResponse),
            default => ListDomainOwnerships\ListDomainOwnershipsDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listDomains(ListDomains\ListDomainsRequest $request): ListDomains\ListDomains200Response|ListDomains\ListDomains400Response|ListDomains\ListDomainsDefaultResponse
    {
        $httpRequest = new Request(ListDomains\ListDomainsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListDomains\ListDomains200Response::fromResponse($httpResponse),
            400 => ListDomains\ListDomains400Response::fromResponse($httpResponse),
            default => ListDomains\ListDomainsDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function resendDomainEmail(ResendDomainEmail\ResendDomainEmailRequest $request): \Mittwald\ApiClient\Client\EmptyResponse|ResendDomainEmail\ResendDomainEmail400Response|ResendDomainEmail\ResendDomainEmail404Response|ResendDomainEmail\ResendDomainEmailDefaultResponse
    {
        $httpRequest = new Request(ResendDomainEmail\ResendDomainEmailRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => ResendDomainEmail\ResendDomainEmail400Response::fromResponse($httpResponse),
            404 => ResendDomainEmail\ResendDomainEmail404Response::fromResponse($httpResponse),
            default => ResendDomainEmail\ResendDomainEmailDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function ingressCreate(IngressCreate\IngressCreateRequest $request): IngressCreate\IngressCreate201Response|IngressCreate\IngressCreate404Response|IngressCreate\IngressCreateDefaultResponse
    {
        $httpRequest = new Request(IngressCreate\IngressCreateRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => IngressCreate\IngressCreate201Response::fromResponse($httpResponse),
            404 => IngressCreate\IngressCreate404Response::fromResponse($httpResponse),
            default => IngressCreate\IngressCreateDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function ingressDelete(IngressDelete\IngressDeleteRequest $request): \Mittwald\ApiClient\Client\EmptyResponse|IngressDelete\IngressDelete404Response|IngressDelete\IngressDeleteDefaultResponse
    {
        $httpRequest = new Request(IngressDelete\IngressDeleteRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            404 => IngressDelete\IngressDelete404Response::fromResponse($httpResponse),
            default => IngressDelete\IngressDeleteDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function ingressGetSpecific(IngressGetSpecific\IngressGetSpecificRequest $request): IngressGetSpecific\IngressGetSpecific200Response|IngressGetSpecific\IngressGetSpecific404Response|IngressGetSpecific\IngressGetSpecificDefaultResponse
    {
        $httpRequest = new Request(IngressGetSpecific\IngressGetSpecificRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => IngressGetSpecific\IngressGetSpecific200Response::fromResponse($httpResponse),
            404 => IngressGetSpecific\IngressGetSpecific404Response::fromResponse($httpResponse),
            default => IngressGetSpecific\IngressGetSpecificDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function ingressListAccessible(IngressListAccessible\IngressListAccessibleRequest $request): IngressListAccessible\IngressListAccessible200Response|IngressListAccessible\IngressListAccessible404Response|IngressListAccessible\IngressListAccessibleDefaultResponse
    {
        $httpRequest = new Request(IngressListAccessible\IngressListAccessibleRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => IngressListAccessible\IngressListAccessible200Response::fromResponse($httpResponse),
            404 => IngressListAccessible\IngressListAccessible404Response::fromResponse($httpResponse),
            default => IngressListAccessible\IngressListAccessibleDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function ingressListForProject(IngressListForProject\IngressListForProjectRequest $request): IngressListForProject\IngressListForProject200Response|IngressListForProject\IngressListForProject404Response|IngressListForProject\IngressListForProjectDefaultResponse
    {
        $httpRequest = new Request(IngressListForProject\IngressListForProjectRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => IngressListForProject\IngressListForProject200Response::fromResponse($httpResponse),
            404 => IngressListForProject\IngressListForProject404Response::fromResponse($httpResponse),
            default => IngressListForProject\IngressListForProjectDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function ingressPaths(IngressPaths\IngressPathsRequest $request): \Mittwald\ApiClient\Client\EmptyResponse|IngressPaths\IngressPaths404Response|IngressPaths\IngressPathsDefaultResponse
    {
        $httpRequest = new Request(IngressPaths\IngressPathsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->toJson()['body'],
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            404 => IngressPaths\IngressPaths404Response::fromResponse($httpResponse),
            default => IngressPaths\IngressPathsDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function ingressRequestAcmeCertificateIssuance(IngressRequestAcmeCertificateIssuance\IngressRequestAcmeCertificateIssuanceRequest $request): \Mittwald\ApiClient\Client\EmptyResponse|IngressRequestAcmeCertificateIssuance\IngressRequestAcmeCertificateIssuance400Response|IngressRequestAcmeCertificateIssuance\IngressRequestAcmeCertificateIssuance404Response|IngressRequestAcmeCertificateIssuance\IngressRequestAcmeCertificateIssuanceDefaultResponse
    {
        $httpRequest = new Request(IngressRequestAcmeCertificateIssuance\IngressRequestAcmeCertificateIssuanceRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => IngressRequestAcmeCertificateIssuance\IngressRequestAcmeCertificateIssuance400Response::fromResponse($httpResponse),
            404 => IngressRequestAcmeCertificateIssuance\IngressRequestAcmeCertificateIssuance404Response::fromResponse($httpResponse),
            default => IngressRequestAcmeCertificateIssuance\IngressRequestAcmeCertificateIssuanceDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function ingressTls(IngressTls\IngressTlsRequest $request): IngressTls\IngressTls200Response|IngressTls\IngressTls404Response|IngressTls\IngressTlsDefaultResponse
    {
        $httpRequest = new Request(IngressTls\IngressTlsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => IngressTls\IngressTls200Response::fromResponse($httpResponse),
            404 => IngressTls\IngressTls404Response::fromResponse($httpResponse),
            default => IngressTls\IngressTlsDefaultResponse::fromResponse($httpResponse),
        };
    }
}
