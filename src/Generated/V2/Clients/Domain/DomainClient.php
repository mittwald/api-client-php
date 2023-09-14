<?php

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use Mittwald\ApiClient\Client\EmptyResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\AbortDeclareProcess\AbortDeclareProcess400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\AbortDeclareProcess\AbortDeclareProcess404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\AbortDeclareProcess\AbortDeclareProcessDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\AbortDeclareProcess\AbortDeclareProcessRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ChangeOwnercOfDomain\ChangeOwnercOfDomain200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ChangeOwnercOfDomain\ChangeOwnercOfDomain400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ChangeOwnercOfDomain\ChangeOwnercOfDomain404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ChangeOwnercOfDomain\ChangeOwnercOfDomainDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ChangeOwnercOfDomain\ChangeOwnercOfDomainRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ChangeProjectOfDomain\ChangeProjectOfDomain400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ChangeProjectOfDomain\ChangeProjectOfDomain404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ChangeProjectOfDomain\ChangeProjectOfDomainDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ChangeProjectOfDomain\ChangeProjectOfDomainRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CheckDomainAvailability\CheckDomainAvailability200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CheckDomainAvailability\CheckDomainAvailability400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CheckDomainAvailability\CheckDomainAvailabilityDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CheckDomainAvailability\CheckDomainAvailabilityRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CreateAuthcode2ForDomain\CreateAuthcode2ForDomain400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CreateAuthcode2ForDomain\CreateAuthcode2ForDomain404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CreateAuthcode2ForDomain\CreateAuthcode2ForDomainDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CreateAuthcode2ForDomain\CreateAuthcode2ForDomainRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CreateAuthcodeForDomain\CreateAuthcodeForDomain201Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CreateAuthcodeForDomain\CreateAuthcodeForDomain400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CreateAuthcodeForDomain\CreateAuthcodeForDomain404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CreateAuthcodeForDomain\CreateAuthcodeForDomainDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CreateAuthcodeForDomain\CreateAuthcodeForDomainRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareNameservers\DeclareNameservers400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareNameservers\DeclareNameservers404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareNameservers\DeclareNameserversDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareNameservers\DeclareNameserversRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareProcessChangeAuthcode\DeclareProcessChangeAuthcode200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareProcessChangeAuthcode\DeclareProcessChangeAuthcode400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareProcessChangeAuthcode\DeclareProcessChangeAuthcode404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareProcessChangeAuthcode\DeclareProcessChangeAuthcodeDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareProcessChangeAuthcode\DeclareProcessChangeAuthcodeRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareProcessChangeHandles\DeclareProcessChangeHandles200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareProcessChangeHandles\DeclareProcessChangeHandles400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareProcessChangeHandles\DeclareProcessChangeHandles404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareProcessChangeHandles\DeclareProcessChangeHandlesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareProcessChangeHandles\DeclareProcessChangeHandlesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeleteDomain\DeleteDomain200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeleteDomain\DeleteDomain400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeleteDomain\DeleteDomain404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeleteDomain\DeleteDomainDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeleteDomain\DeleteDomainRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordASetCustom\DnsRecordASetCustom400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordASetCustom\DnsRecordASetCustomDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordASetCustom\DnsRecordASetCustomRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordASetManagedByIngress\DnsRecordASetManagedByIngress204Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordASetManagedByIngress\DnsRecordASetManagedByIngress400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordASetManagedByIngress\DnsRecordASetManagedByIngressDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordASetManagedByIngress\DnsRecordASetManagedByIngressRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordCnameSet\DnsRecordCnameSet400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordCnameSet\DnsRecordCnameSetDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordCnameSet\DnsRecordCnameSetRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordMxSetCustom\DnsRecordMxSetCustom400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordMxSetCustom\DnsRecordMxSetCustomDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordMxSetCustom\DnsRecordMxSetCustomRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordMxSetManaged\DnsRecordMxSetManaged400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordMxSetManaged\DnsRecordMxSetManagedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordMxSetManaged\DnsRecordMxSetManagedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordSrvSet\DnsRecordSrvSet400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordSrvSet\DnsRecordSrvSetDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordSrvSet\DnsRecordSrvSetRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordTxtSet\DnsRecordTxtSet400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordTxtSet\DnsRecordTxtSetDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordTxtSet\DnsRecordTxtSetRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsSubZoneCreate\DnsSubZoneCreate201Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsSubZoneCreate\DnsSubZoneCreate400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsSubZoneCreate\DnsSubZoneCreateDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsSubZoneCreate\DnsSubZoneCreateRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsZoneGetSpecific\DnsZoneGetSpecific200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsZoneGetSpecific\DnsZoneGetSpecific400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsZoneGetSpecific\DnsZoneGetSpecificDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsZoneGetSpecific\DnsZoneGetSpecificRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsZonesForProject\DnsZonesForProject200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsZonesForProject\DnsZonesForProject400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsZonesForProject\DnsZonesForProjectDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsZonesForProject\DnsZonesForProjectRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetDomain\GetDomain200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetDomain\GetDomain400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetDomain\GetDomain404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetDomain\GetDomainDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetDomain\GetDomainRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetHandleFields\GetHandleFields200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetHandleFields\GetHandleFieldsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetHandleFields\GetHandleFieldsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetScreenshotForDomain\GetScreenshotForDomain200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetScreenshotForDomain\GetScreenshotForDomain404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetScreenshotForDomain\GetScreenshotForDomainDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetScreenshotForDomain\GetScreenshotForDomainRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetSpecificDomainOwnership\GetSpecificDomainOwnership200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetSpecificDomainOwnership\GetSpecificDomainOwnership400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetSpecificDomainOwnership\GetSpecificDomainOwnership404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetSpecificDomainOwnership\GetSpecificDomainOwnershipDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetSpecificDomainOwnership\GetSpecificDomainOwnershipRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressCreate\IngressCreate201Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressCreate\IngressCreate404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressCreate\IngressCreateDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressCreate\IngressCreateRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressDelete\IngressDelete404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressDelete\IngressDeleteDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressDelete\IngressDeleteRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressGetSpecific\IngressGetSpecific200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressGetSpecific\IngressGetSpecific404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressGetSpecific\IngressGetSpecificDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressGetSpecific\IngressGetSpecificRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressListAccessible\IngressListAccessible200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressListAccessible\IngressListAccessible404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressListAccessible\IngressListAccessibleDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressListAccessible\IngressListAccessibleRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressListForProject\IngressListForProject200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressListForProject\IngressListForProject404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressListForProject\IngressListForProjectDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressListForProject\IngressListForProjectRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressPaths\IngressPaths404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressPaths\IngressPathsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressPaths\IngressPathsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressRequestAcmeCertificateIssuance\IngressRequestAcmeCertificateIssuance400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressRequestAcmeCertificateIssuance\IngressRequestAcmeCertificateIssuance404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressRequestAcmeCertificateIssuance\IngressRequestAcmeCertificateIssuanceDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressRequestAcmeCertificateIssuance\IngressRequestAcmeCertificateIssuanceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressTls\IngressTls200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressTls\IngressTls404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressTls\IngressTlsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressTls\IngressTlsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ListDomainOwnerships\ListDomainOwnerships200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ListDomainOwnerships\ListDomainOwnerships400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ListDomainOwnerships\ListDomainOwnershipsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ListDomainOwnerships\ListDomainOwnershipsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ListDomains\ListDomains200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ListDomains\ListDomains400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ListDomains\ListDomainsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ListDomains\ListDomainsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ResendDomainEmail\ResendDomainEmail400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ResendDomainEmail\ResendDomainEmail404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ResendDomainEmail\ResendDomainEmailDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ResendDomainEmail\ResendDomainEmailRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\VerifyDomainOwnership\VerifyDomainOwnership400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\VerifyDomainOwnership\VerifyDomainOwnership404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\VerifyDomainOwnership\VerifyDomainOwnershipDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\VerifyDomainOwnership\VerifyDomainOwnershipRequest;

/**
 * Client for Domain API
 *
 * The domain API allows you to manage your domains, DNS records and ingress
 * resources.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class DomainClient
{
    private Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * updates a-records for a specific zone
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/dns-record-a-set-custom
     * @throws GuzzleException
     * @param DnsRecordASetCustom\DnsRecordASetCustomRequest $request An object representing the request for this operation
     * @return EmptyResponse|DnsRecordASetCustom\DnsRecordASetCustom400Response|DnsRecordASetCustom\DnsRecordASetCustomDefaultResponse recordset updated
     */
    public function dnsRecordASetCustom(DnsRecordASetCustomRequest $request): EmptyResponse|DnsRecordASetCustom400Response|DnsRecordASetCustomDefaultResponse
    {
        $httpRequest = new Request(DnsRecordASetCustomRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => DnsRecordASetCustom400Response::fromResponse($httpResponse),
            default => DnsRecordASetCustomDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * set a-records managed by ingress for a specific zone
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/dns-record-a-set-managed-by-ingress
     * @throws GuzzleException
     * @param DnsRecordASetManagedByIngress\DnsRecordASetManagedByIngressRequest $request An object representing the request for this operation
     * @return DnsRecordASetManagedByIngress\DnsRecordASetManagedByIngress204Response|DnsRecordASetManagedByIngress\DnsRecordASetManagedByIngress400Response|DnsRecordASetManagedByIngress\DnsRecordASetManagedByIngressDefaultResponse zone set managed by ingressId
     */
    public function dnsRecordASetManagedByIngress(DnsRecordASetManagedByIngressRequest $request): DnsRecordASetManagedByIngress204Response|DnsRecordASetManagedByIngress400Response|DnsRecordASetManagedByIngressDefaultResponse
    {
        $httpRequest = new Request(DnsRecordASetManagedByIngressRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => DnsRecordASetManagedByIngress204Response::fromResponse($httpResponse),
            400 => DnsRecordASetManagedByIngress400Response::fromResponse($httpResponse),
            default => DnsRecordASetManagedByIngressDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * updates cname-record for a specific zone
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/dns-record-cname-set
     * @throws GuzzleException
     * @param DnsRecordCnameSet\DnsRecordCnameSetRequest $request An object representing the request for this operation
     * @return EmptyResponse|DnsRecordCnameSet\DnsRecordCnameSet400Response|DnsRecordCnameSet\DnsRecordCnameSetDefaultResponse recordset updated
     */
    public function dnsRecordCnameSet(DnsRecordCnameSetRequest $request): EmptyResponse|DnsRecordCnameSet400Response|DnsRecordCnameSetDefaultResponse
    {
        $httpRequest = new Request(DnsRecordCnameSetRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => DnsRecordCnameSet400Response::fromResponse($httpResponse),
            default => DnsRecordCnameSetDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * updates mx-records for a specific zone
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/dns-record-mx-set-custom
     * @throws GuzzleException
     * @param DnsRecordMxSetCustom\DnsRecordMxSetCustomRequest $request An object representing the request for this operation
     * @return EmptyResponse|DnsRecordMxSetCustom\DnsRecordMxSetCustom400Response|DnsRecordMxSetCustom\DnsRecordMxSetCustomDefaultResponse recordset updated
     */
    public function dnsRecordMxSetCustom(DnsRecordMxSetCustomRequest $request): EmptyResponse|DnsRecordMxSetCustom400Response|DnsRecordMxSetCustomDefaultResponse
    {
        $httpRequest = new Request(DnsRecordMxSetCustomRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => DnsRecordMxSetCustom400Response::fromResponse($httpResponse),
            default => DnsRecordMxSetCustomDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * sets mx-records to managed for a specific zone
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/dns-record-mx-set-managed
     * @throws GuzzleException
     * @param DnsRecordMxSetManaged\DnsRecordMxSetManagedRequest $request An object representing the request for this operation
     * @return EmptyResponse|DnsRecordMxSetManaged\DnsRecordMxSetManaged400Response|DnsRecordMxSetManaged\DnsRecordMxSetManagedDefaultResponse recordset updated
     */
    public function dnsRecordMxSetManaged(DnsRecordMxSetManagedRequest $request): EmptyResponse|DnsRecordMxSetManaged400Response|DnsRecordMxSetManagedDefaultResponse
    {
        $httpRequest = new Request(DnsRecordMxSetManagedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => DnsRecordMxSetManaged400Response::fromResponse($httpResponse),
            default => DnsRecordMxSetManagedDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * updates srv-records for a specific zone
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/dns-record-srv-set
     * @throws GuzzleException
     * @param DnsRecordSrvSet\DnsRecordSrvSetRequest $request An object representing the request for this operation
     * @return EmptyResponse|DnsRecordSrvSet\DnsRecordSrvSet400Response|DnsRecordSrvSet\DnsRecordSrvSetDefaultResponse recordset updated
     */
    public function dnsRecordSrvSet(DnsRecordSrvSetRequest $request): EmptyResponse|DnsRecordSrvSet400Response|DnsRecordSrvSetDefaultResponse
    {
        $httpRequest = new Request(DnsRecordSrvSetRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => DnsRecordSrvSet400Response::fromResponse($httpResponse),
            default => DnsRecordSrvSetDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * updates txt-records for a specific zone
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/dns-record-txt-set
     * @throws GuzzleException
     * @param DnsRecordTxtSet\DnsRecordTxtSetRequest $request An object representing the request for this operation
     * @return EmptyResponse|DnsRecordTxtSet\DnsRecordTxtSet400Response|DnsRecordTxtSet\DnsRecordTxtSetDefaultResponse recordset updated
     */
    public function dnsRecordTxtSet(DnsRecordTxtSetRequest $request): EmptyResponse|DnsRecordTxtSet400Response|DnsRecordTxtSetDefaultResponse
    {
        $httpRequest = new Request(DnsRecordTxtSetRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => DnsRecordTxtSet400Response::fromResponse($httpResponse),
            default => DnsRecordTxtSetDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * creates a sub zone for a given dns zone
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/dns-sub-zone-create
     * @throws GuzzleException
     * @param DnsSubZoneCreate\DnsSubZoneCreateRequest $request An object representing the request for this operation
     * @return DnsSubZoneCreate\DnsSubZoneCreate201Response|DnsSubZoneCreate\DnsSubZoneCreate400Response|DnsSubZoneCreate\DnsSubZoneCreateDefaultResponse
     */
    public function dnsSubZoneCreate(DnsSubZoneCreateRequest $request): DnsSubZoneCreate201Response|DnsSubZoneCreate400Response|DnsSubZoneCreateDefaultResponse
    {
        $httpRequest = new Request(DnsSubZoneCreateRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => DnsSubZoneCreate201Response::fromResponse($httpResponse),
            400 => DnsSubZoneCreate400Response::fromResponse($httpResponse),
            default => DnsSubZoneCreateDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * gets a specific zone
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/dns-zone-get-specific
     * @throws GuzzleException
     * @param DnsZoneGetSpecific\DnsZoneGetSpecificRequest $request An object representing the request for this operation
     * @return DnsZoneGetSpecific\DnsZoneGetSpecific200Response|DnsZoneGetSpecific\DnsZoneGetSpecific400Response|DnsZoneGetSpecific\DnsZoneGetSpecificDefaultResponse zone
     */
    public function dnsZoneGetSpecific(DnsZoneGetSpecificRequest $request): DnsZoneGetSpecific200Response|DnsZoneGetSpecific400Response|DnsZoneGetSpecificDefaultResponse
    {
        $httpRequest = new Request(DnsZoneGetSpecificRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => DnsZoneGetSpecific200Response::fromResponse($httpResponse),
            400 => DnsZoneGetSpecific400Response::fromResponse($httpResponse),
            default => DnsZoneGetSpecificDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * gets all dns zones by project id
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/dns-zones-for-project
     * @throws GuzzleException
     * @param DnsZonesForProject\DnsZonesForProjectRequest $request An object representing the request for this operation
     * @return DnsZonesForProject\DnsZonesForProject200Response|DnsZonesForProject\DnsZonesForProject400Response|DnsZonesForProject\DnsZonesForProjectDefaultResponse zone
     */
    public function dnsZonesForProject(DnsZonesForProjectRequest $request): DnsZonesForProject200Response|DnsZonesForProject400Response|DnsZonesForProjectDefaultResponse
    {
        $httpRequest = new Request(DnsZonesForProjectRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => DnsZonesForProject200Response::fromResponse($httpResponse),
            400 => DnsZonesForProject400Response::fromResponse($httpResponse),
            default => DnsZonesForProjectDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Abort a declare process.
     *
     * Abort a failed declare process within all created contract items.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-abort-declare-process
     * @throws GuzzleException
     * @param AbortDeclareProcess\AbortDeclareProcessRequest $request An object representing the request for this operation
     * @return EmptyResponse|AbortDeclareProcess\AbortDeclareProcess400Response|AbortDeclareProcess\AbortDeclareProcess404Response|AbortDeclareProcess\AbortDeclareProcessDefaultResponse No Content
     */
    public function abortDeclareProcess(AbortDeclareProcessRequest $request): EmptyResponse|AbortDeclareProcess400Response|AbortDeclareProcess404Response|AbortDeclareProcessDefaultResponse
    {
        $httpRequest = new Request(AbortDeclareProcessRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => AbortDeclareProcess400Response::fromResponse($httpResponse),
            404 => AbortDeclareProcess404Response::fromResponse($httpResponse),
            default => AbortDeclareProcessDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Change the owner contact of a domain.
     *
     * Change the domain owner of a fully registered domain.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-change-ownerc-of-domain
     * @throws GuzzleException
     * @param ChangeOwnercOfDomain\ChangeOwnercOfDomainRequest $request An object representing the request for this operation
     * @return ChangeOwnercOfDomain\ChangeOwnercOfDomain200Response|ChangeOwnercOfDomain\ChangeOwnercOfDomain400Response|ChangeOwnercOfDomain\ChangeOwnercOfDomain404Response|ChangeOwnercOfDomain\ChangeOwnercOfDomainDefaultResponse OK
     */
    public function changeOwnercOfDomain(ChangeOwnercOfDomainRequest $request): ChangeOwnercOfDomain200Response|ChangeOwnercOfDomain400Response|ChangeOwnercOfDomain404Response|ChangeOwnercOfDomainDefaultResponse
    {
        $httpRequest = new Request(ChangeOwnercOfDomainRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ChangeOwnercOfDomain200Response::fromResponse($httpResponse),
            400 => ChangeOwnercOfDomain400Response::fromResponse($httpResponse),
            404 => ChangeOwnercOfDomain404Response::fromResponse($httpResponse),
            default => ChangeOwnercOfDomainDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Change the Project relation of a Domain.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-change-project-of-domain
     * @throws GuzzleException
     * @param ChangeProjectOfDomain\ChangeProjectOfDomainRequest $request An object representing the request for this operation
     * @return EmptyResponse|ChangeProjectOfDomain\ChangeProjectOfDomain400Response|ChangeProjectOfDomain\ChangeProjectOfDomain404Response|ChangeProjectOfDomain\ChangeProjectOfDomainDefaultResponse No Content
     */
    public function changeProjectOfDomain(ChangeProjectOfDomainRequest $request): EmptyResponse|ChangeProjectOfDomain400Response|ChangeProjectOfDomain404Response|ChangeProjectOfDomainDefaultResponse
    {
        $httpRequest = new Request(ChangeProjectOfDomainRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => ChangeProjectOfDomain400Response::fromResponse($httpResponse),
            404 => ChangeProjectOfDomain404Response::fromResponse($httpResponse),
            default => ChangeProjectOfDomainDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Check if a Domain is available to register.
     *
     * If true, you can register a domain. If false, you have to start a transfer with an AuthCode.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-check-domain-availability
     * @throws GuzzleException
     * @param CheckDomainAvailability\CheckDomainAvailabilityRequest $request An object representing the request for this operation
     * @return CheckDomainAvailability\CheckDomainAvailability200Response|CheckDomainAvailability\CheckDomainAvailability400Response|CheckDomainAvailability\CheckDomainAvailabilityDefaultResponse OK
     */
    public function checkDomainAvailability(CheckDomainAvailabilityRequest $request): CheckDomainAvailability200Response|CheckDomainAvailability400Response|CheckDomainAvailabilityDefaultResponse
    {
        $httpRequest = new Request(CheckDomainAvailabilityRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => CheckDomainAvailability200Response::fromResponse($httpResponse),
            400 => CheckDomainAvailability400Response::fromResponse($httpResponse),
            default => CheckDomainAvailabilityDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Create an AuthCode for a Domains transfer out process.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-create-authcode-for-domain
     * @throws GuzzleException
     * @param CreateAuthcodeForDomain\CreateAuthcodeForDomainRequest $request An object representing the request for this operation
     * @return CreateAuthcodeForDomain\CreateAuthcodeForDomain201Response|CreateAuthcodeForDomain\CreateAuthcodeForDomain400Response|CreateAuthcodeForDomain\CreateAuthcodeForDomain404Response|CreateAuthcodeForDomain\CreateAuthcodeForDomainDefaultResponse Created
     */
    public function createAuthcodeForDomain(CreateAuthcodeForDomainRequest $request): CreateAuthcodeForDomain201Response|CreateAuthcodeForDomain400Response|CreateAuthcodeForDomain404Response|CreateAuthcodeForDomainDefaultResponse
    {
        $httpRequest = new Request(CreateAuthcodeForDomainRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => CreateAuthcodeForDomain201Response::fromResponse($httpResponse),
            400 => CreateAuthcodeForDomain400Response::fromResponse($httpResponse),
            404 => CreateAuthcodeForDomain404Response::fromResponse($httpResponse),
            default => CreateAuthcodeForDomainDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Create an AuthCode2.
     *
     * Start an AuthCode2 process for a DENIC domain. You will receive a letter from DENIC.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-create-authcode2-for-domain
     * @throws GuzzleException
     * @param CreateAuthcode2ForDomain\CreateAuthcode2ForDomainRequest $request An object representing the request for this operation
     * @return EmptyResponse|CreateAuthcode2ForDomain\CreateAuthcode2ForDomain400Response|CreateAuthcode2ForDomain\CreateAuthcode2ForDomain404Response|CreateAuthcode2ForDomain\CreateAuthcode2ForDomainDefaultResponse No Content
     */
    public function createAuthcode2ForDomain(CreateAuthcode2ForDomainRequest $request): EmptyResponse|CreateAuthcode2ForDomain400Response|CreateAuthcode2ForDomain404Response|CreateAuthcode2ForDomainDefaultResponse
    {
        $httpRequest = new Request(CreateAuthcode2ForDomainRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => CreateAuthcode2ForDomain400Response::fromResponse($httpResponse),
            404 => CreateAuthcode2ForDomain404Response::fromResponse($httpResponse),
            default => CreateAuthcode2ForDomainDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Change all nameservers of a Domain.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-declare-nameservers
     * @throws GuzzleException
     * @param DeclareNameservers\DeclareNameserversRequest $request An object representing the request for this operation
     * @return EmptyResponse|DeclareNameservers\DeclareNameservers400Response|DeclareNameservers\DeclareNameservers404Response|DeclareNameservers\DeclareNameserversDefaultResponse No Content
     */
    public function declareNameservers(DeclareNameserversRequest $request): EmptyResponse|DeclareNameservers400Response|DeclareNameservers404Response|DeclareNameserversDefaultResponse
    {
        $httpRequest = new Request(DeclareNameserversRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => DeclareNameservers400Response::fromResponse($httpResponse),
            404 => DeclareNameservers404Response::fromResponse($httpResponse),
            default => DeclareNameserversDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Update an AuthCode.
     *
     * Change a wrong AuthCode of your transfer domain request (declare domain process). This route will also restart the transfer itself.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-declare-process-change-authcode
     * @throws GuzzleException
     * @param DeclareProcessChangeAuthcode\DeclareProcessChangeAuthcodeRequest $request An object representing the request for this operation
     * @return DeclareProcessChangeAuthcode\DeclareProcessChangeAuthcode200Response|DeclareProcessChangeAuthcode\DeclareProcessChangeAuthcode400Response|DeclareProcessChangeAuthcode\DeclareProcessChangeAuthcode404Response|DeclareProcessChangeAuthcode\DeclareProcessChangeAuthcodeDefaultResponse OK
     */
    public function declareProcessChangeAuthcode(DeclareProcessChangeAuthcodeRequest $request): DeclareProcessChangeAuthcode200Response|DeclareProcessChangeAuthcode400Response|DeclareProcessChangeAuthcode404Response|DeclareProcessChangeAuthcodeDefaultResponse
    {
        $httpRequest = new Request(DeclareProcessChangeAuthcodeRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => DeclareProcessChangeAuthcode200Response::fromResponse($httpResponse),
            400 => DeclareProcessChangeAuthcode400Response::fromResponse($httpResponse),
            404 => DeclareProcessChangeAuthcode404Response::fromResponse($httpResponse),
            default => DeclareProcessChangeAuthcodeDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Update a Domain's OwnerC handle.
     *
     * This route will also restart the transfer or register itself.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-declare-process-change-handles
     * @throws GuzzleException
     * @param DeclareProcessChangeHandles\DeclareProcessChangeHandlesRequest $request An object representing the request for this operation
     * @return DeclareProcessChangeHandles\DeclareProcessChangeHandles200Response|DeclareProcessChangeHandles\DeclareProcessChangeHandles400Response|DeclareProcessChangeHandles\DeclareProcessChangeHandles404Response|DeclareProcessChangeHandles\DeclareProcessChangeHandlesDefaultResponse OK
     */
    public function declareProcessChangeHandles(DeclareProcessChangeHandlesRequest $request): DeclareProcessChangeHandles200Response|DeclareProcessChangeHandles400Response|DeclareProcessChangeHandles404Response|DeclareProcessChangeHandlesDefaultResponse
    {
        $httpRequest = new Request(DeclareProcessChangeHandlesRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => DeclareProcessChangeHandles200Response::fromResponse($httpResponse),
            400 => DeclareProcessChangeHandles400Response::fromResponse($httpResponse),
            404 => DeclareProcessChangeHandles404Response::fromResponse($httpResponse),
            default => DeclareProcessChangeHandlesDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Delete a Domain.
     *
     * Delete a fully registered domain.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-delete-domain
     * @throws GuzzleException
     * @param DeleteDomain\DeleteDomainRequest $request An object representing the request for this operation
     * @return DeleteDomain\DeleteDomain200Response|DeleteDomain\DeleteDomain400Response|DeleteDomain\DeleteDomain404Response|DeleteDomain\DeleteDomainDefaultResponse OK
     */
    public function deleteDomain(DeleteDomainRequest $request): DeleteDomain200Response|DeleteDomain400Response|DeleteDomain404Response|DeleteDomainDefaultResponse
    {
        $httpRequest = new Request(DeleteDomainRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => DeleteDomain200Response::fromResponse($httpResponse),
            400 => DeleteDomain400Response::fromResponse($httpResponse),
            404 => DeleteDomain404Response::fromResponse($httpResponse),
            default => DeleteDomainDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Get a Domain.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-get-domain
     * @throws GuzzleException
     * @param GetDomain\GetDomainRequest $request An object representing the request for this operation
     * @return GetDomain\GetDomain200Response|GetDomain\GetDomain400Response|GetDomain\GetDomain404Response|GetDomain\GetDomainDefaultResponse OK
     */
    public function getDomain(GetDomainRequest $request): GetDomain200Response|GetDomain400Response|GetDomain404Response|GetDomainDefaultResponse
    {
        $httpRequest = new Request(GetDomainRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetDomain200Response::fromResponse($httpResponse),
            400 => GetDomain400Response::fromResponse($httpResponse),
            404 => GetDomain404Response::fromResponse($httpResponse),
            default => GetDomainDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Get a HandleSchema.
     *
     * Get required handle fields of a registrar for your domain process (transfer/registration).
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-get-handle-fields
     * @throws GuzzleException
     * @param GetHandleFields\GetHandleFieldsRequest $request An object representing the request for this operation
     * @return GetHandleFields\GetHandleFields200Response|GetHandleFields\GetHandleFieldsDefaultResponse The parseable json schema objects
     */
    public function getHandleFields(GetHandleFieldsRequest $request): GetHandleFields200Response|GetHandleFieldsDefaultResponse
    {
        $httpRequest = new Request(GetHandleFieldsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetHandleFields200Response::fromResponse($httpResponse),
            default => GetHandleFieldsDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Get File Service Reference for a Screenshot of a domain.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-get-screenshot-for-domain
     * @throws GuzzleException
     * @param GetScreenshotForDomain\GetScreenshotForDomainRequest $request An object representing the request for this operation
     * @return GetScreenshotForDomain\GetScreenshotForDomain200Response|GetScreenshotForDomain\GetScreenshotForDomain404Response|GetScreenshotForDomain\GetScreenshotForDomainDefaultResponse The References.
     */
    public function getScreenshotForDomain(GetScreenshotForDomainRequest $request): GetScreenshotForDomain200Response|GetScreenshotForDomain404Response|GetScreenshotForDomainDefaultResponse
    {
        $httpRequest = new Request(GetScreenshotForDomainRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetScreenshotForDomain200Response::fromResponse($httpResponse),
            404 => GetScreenshotForDomain404Response::fromResponse($httpResponse),
            default => GetScreenshotForDomainDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Get a domain ownership.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-get-specific-domain-ownership
     * @throws GuzzleException
     * @param GetSpecificDomainOwnership\GetSpecificDomainOwnershipRequest $request An object representing the request for this operation
     * @return GetSpecificDomainOwnership\GetSpecificDomainOwnership200Response|GetSpecificDomainOwnership\GetSpecificDomainOwnership400Response|GetSpecificDomainOwnership\GetSpecificDomainOwnership404Response|GetSpecificDomainOwnership\GetSpecificDomainOwnershipDefaultResponse OK
     */
    public function getSpecificDomainOwnership(GetSpecificDomainOwnershipRequest $request): GetSpecificDomainOwnership200Response|GetSpecificDomainOwnership400Response|GetSpecificDomainOwnership404Response|GetSpecificDomainOwnershipDefaultResponse
    {
        $httpRequest = new Request(GetSpecificDomainOwnershipRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetSpecificDomainOwnership200Response::fromResponse($httpResponse),
            400 => GetSpecificDomainOwnership400Response::fromResponse($httpResponse),
            404 => GetSpecificDomainOwnership404Response::fromResponse($httpResponse),
            default => GetSpecificDomainOwnershipDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Verify a domain ownership.
     *
     * Verify your access to a domain with an already set TXT Record. On success, the domain will be linked with the webserver.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-verify-domain-ownership
     * @throws GuzzleException
     * @param VerifyDomainOwnership\VerifyDomainOwnershipRequest $request An object representing the request for this operation
     * @return EmptyResponse|VerifyDomainOwnership\VerifyDomainOwnership400Response|VerifyDomainOwnership\VerifyDomainOwnership404Response|VerifyDomainOwnership\VerifyDomainOwnershipDefaultResponse No Content
     */
    public function verifyDomainOwnership(VerifyDomainOwnershipRequest $request): EmptyResponse|VerifyDomainOwnership400Response|VerifyDomainOwnership404Response|VerifyDomainOwnershipDefaultResponse
    {
        $httpRequest = new Request(VerifyDomainOwnershipRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => VerifyDomainOwnership400Response::fromResponse($httpResponse),
            404 => VerifyDomainOwnership404Response::fromResponse($httpResponse),
            default => VerifyDomainOwnershipDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * List all domain ownerships of a project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-list-domain-ownerships
     * @throws GuzzleException
     * @param ListDomainOwnerships\ListDomainOwnershipsRequest $request An object representing the request for this operation
     * @return ListDomainOwnerships\ListDomainOwnerships200Response|ListDomainOwnerships\ListDomainOwnerships400Response|ListDomainOwnerships\ListDomainOwnershipsDefaultResponse OK
     */
    public function listDomainOwnerships(ListDomainOwnershipsRequest $request): ListDomainOwnerships200Response|ListDomainOwnerships400Response|ListDomainOwnershipsDefaultResponse
    {
        $httpRequest = new Request(ListDomainOwnershipsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListDomainOwnerships200Response::fromResponse($httpResponse),
            400 => ListDomainOwnerships400Response::fromResponse($httpResponse),
            default => ListDomainOwnershipsDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * List Domains belonging to a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-list-domains
     * @throws GuzzleException
     * @param ListDomains\ListDomainsRequest $request An object representing the request for this operation
     * @return ListDomains\ListDomains200Response|ListDomains\ListDomains400Response|ListDomains\ListDomainsDefaultResponse OK
     */
    public function listDomains(ListDomainsRequest $request): ListDomains200Response|ListDomains400Response|ListDomainsDefaultResponse
    {
        $httpRequest = new Request(ListDomainsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListDomains200Response::fromResponse($httpResponse),
            400 => ListDomains400Response::fromResponse($httpResponse),
            default => ListDomainsDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Resend a domain email.
     *
     * A confirmation email or domain registrant verification email. Does not work with .de domains.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-resend-domain-email
     * @throws GuzzleException
     * @param ResendDomainEmail\ResendDomainEmailRequest $request An object representing the request for this operation
     * @return EmptyResponse|ResendDomainEmail\ResendDomainEmail400Response|ResendDomainEmail\ResendDomainEmail404Response|ResendDomainEmail\ResendDomainEmailDefaultResponse No Content
     */
    public function resendDomainEmail(ResendDomainEmailRequest $request): EmptyResponse|ResendDomainEmail400Response|ResendDomainEmail404Response|ResendDomainEmailDefaultResponse
    {
        $httpRequest = new Request(ResendDomainEmailRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => ResendDomainEmail400Response::fromResponse($httpResponse),
            404 => ResendDomainEmail404Response::fromResponse($httpResponse),
            default => ResendDomainEmailDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Create an Ingress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ingress-create
     * @throws GuzzleException
     * @param IngressCreate\IngressCreateRequest $request An object representing the request for this operation
     * @return IngressCreate\IngressCreate201Response|IngressCreate\IngressCreate404Response|IngressCreate\IngressCreateDefaultResponse Created
     */
    public function ingressCreate(IngressCreateRequest $request): IngressCreate201Response|IngressCreate404Response|IngressCreateDefaultResponse
    {
        $httpRequest = new Request(IngressCreateRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => IngressCreate201Response::fromResponse($httpResponse),
            404 => IngressCreate404Response::fromResponse($httpResponse),
            default => IngressCreateDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Delete an Ingress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ingress-delete
     * @throws GuzzleException
     * @param IngressDelete\IngressDeleteRequest $request An object representing the request for this operation
     * @return EmptyResponse|IngressDelete\IngressDelete404Response|IngressDelete\IngressDeleteDefaultResponse No Content
     */
    public function ingressDelete(IngressDeleteRequest $request): EmptyResponse|IngressDelete404Response|IngressDeleteDefaultResponse
    {
        $httpRequest = new Request(IngressDeleteRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            404 => IngressDelete404Response::fromResponse($httpResponse),
            default => IngressDeleteDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Get an Ingress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ingress-get-specific
     * @throws GuzzleException
     * @param IngressGetSpecific\IngressGetSpecificRequest $request An object representing the request for this operation
     * @return IngressGetSpecific\IngressGetSpecific200Response|IngressGetSpecific\IngressGetSpecific404Response|IngressGetSpecific\IngressGetSpecificDefaultResponse OK
     */
    public function ingressGetSpecific(IngressGetSpecificRequest $request): IngressGetSpecific200Response|IngressGetSpecific404Response|IngressGetSpecificDefaultResponse
    {
        $httpRequest = new Request(IngressGetSpecificRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => IngressGetSpecific200Response::fromResponse($httpResponse),
            404 => IngressGetSpecific404Response::fromResponse($httpResponse),
            default => IngressGetSpecificDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * List Ingresses the user has access to.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ingress-list-accessible
     * @throws GuzzleException
     * @param IngressListAccessible\IngressListAccessibleRequest $request An object representing the request for this operation
     * @return IngressListAccessible\IngressListAccessible200Response|IngressListAccessible\IngressListAccessible404Response|IngressListAccessible\IngressListAccessibleDefaultResponse OK
     */
    public function ingressListAccessible(IngressListAccessibleRequest $request): IngressListAccessible200Response|IngressListAccessible404Response|IngressListAccessibleDefaultResponse
    {
        $httpRequest = new Request(IngressListAccessibleRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => IngressListAccessible200Response::fromResponse($httpResponse),
            404 => IngressListAccessible404Response::fromResponse($httpResponse),
            default => IngressListAccessibleDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * List Ingresses belonging to a project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ingress-list-for-project
     * @throws GuzzleException
     * @param IngressListForProject\IngressListForProjectRequest $request An object representing the request for this operation
     * @return IngressListForProject\IngressListForProject200Response|IngressListForProject\IngressListForProject404Response|IngressListForProject\IngressListForProjectDefaultResponse OK
     */
    public function ingressListForProject(IngressListForProjectRequest $request): IngressListForProject200Response|IngressListForProject404Response|IngressListForProjectDefaultResponse
    {
        $httpRequest = new Request(IngressListForProjectRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => IngressListForProject200Response::fromResponse($httpResponse),
            404 => IngressListForProject404Response::fromResponse($httpResponse),
            default => IngressListForProjectDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Update an Ingresses paths.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ingress-paths
     * @throws GuzzleException
     * @param IngressPaths\IngressPathsRequest $request An object representing the request for this operation
     * @return EmptyResponse|IngressPaths\IngressPaths404Response|IngressPaths\IngressPathsDefaultResponse No Content
     */
    public function ingressPaths(IngressPathsRequest $request): EmptyResponse|IngressPaths404Response|IngressPathsDefaultResponse
    {
        $httpRequest = new Request(IngressPathsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->toJson()['body'],
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            404 => IngressPaths404Response::fromResponse($httpResponse),
            default => IngressPathsDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Request ACME certificate issuance
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ingress-request-acme-certificate-issuance
     * @throws GuzzleException
     * @param IngressRequestAcmeCertificateIssuance\IngressRequestAcmeCertificateIssuanceRequest $request An object representing the request for this operation
     * @return EmptyResponse|IngressRequestAcmeCertificateIssuance\IngressRequestAcmeCertificateIssuance400Response|IngressRequestAcmeCertificateIssuance\IngressRequestAcmeCertificateIssuance404Response|IngressRequestAcmeCertificateIssuance\IngressRequestAcmeCertificateIssuanceDefaultResponse OK
     */
    public function ingressRequestAcmeCertificateIssuance(IngressRequestAcmeCertificateIssuanceRequest $request): EmptyResponse|IngressRequestAcmeCertificateIssuance400Response|IngressRequestAcmeCertificateIssuance404Response|IngressRequestAcmeCertificateIssuanceDefaultResponse
    {
        $httpRequest = new Request(IngressRequestAcmeCertificateIssuanceRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new EmptyResponse($httpResponse),
            400 => IngressRequestAcmeCertificateIssuance400Response::fromResponse($httpResponse),
            404 => IngressRequestAcmeCertificateIssuance404Response::fromResponse($httpResponse),
            default => IngressRequestAcmeCertificateIssuanceDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Update an Ingresses tls settings.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ingress-tls
     * @throws GuzzleException
     * @param IngressTls\IngressTlsRequest $request An object representing the request for this operation
     * @return IngressTls\IngressTls200Response|IngressTls\IngressTls404Response|IngressTls\IngressTlsDefaultResponse OK
     */
    public function ingressTls(IngressTlsRequest $request): IngressTls200Response|IngressTls404Response|IngressTlsDefaultResponse
    {
        $httpRequest = new Request(IngressTlsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => IngressTls200Response::fromResponse($httpResponse),
            404 => IngressTls404Response::fromResponse($httpResponse),
            default => IngressTlsDefaultResponse::fromResponse($httpResponse),
        };
    }
}
