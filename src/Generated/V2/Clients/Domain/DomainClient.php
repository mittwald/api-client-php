<?php

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use Mittwald\ApiClient\Client\EmptyResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\AbortDomainDeclaration\AbortDomainDeclaration400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\AbortDomainDeclaration\AbortDomainDeclaration404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\AbortDomainDeclaration\AbortDomainDeclarationDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\AbortDomainDeclaration\AbortDomainDeclarationRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ChangeOwnercOfDomainV2Deprecated\ChangeOwnercOfDomainV2Deprecated200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ChangeOwnercOfDomainV2Deprecated\ChangeOwnercOfDomainV2Deprecated400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ChangeOwnercOfDomainV2Deprecated\ChangeOwnercOfDomainV2Deprecated404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ChangeOwnercOfDomainV2Deprecated\ChangeOwnercOfDomainV2DeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ChangeOwnercOfDomainV2Deprecated\ChangeOwnercOfDomainV2DeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ChangeProjectOfDomainV2Deprecated\ChangeProjectOfDomainV2Deprecated400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ChangeProjectOfDomainV2Deprecated\ChangeProjectOfDomainV2Deprecated404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ChangeProjectOfDomainV2Deprecated\ChangeProjectOfDomainV2DeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ChangeProjectOfDomainV2Deprecated\ChangeProjectOfDomainV2DeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CheckDomainRegistrability\CheckDomainRegistrability200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CheckDomainRegistrability\CheckDomainRegistrability400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CheckDomainRegistrability\CheckDomainRegistrabilityDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CheckDomainRegistrability\CheckDomainRegistrabilityRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CheckDomainRegistrabilityV2Deprecated\CheckDomainRegistrabilityV2Deprecated200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CheckDomainRegistrabilityV2Deprecated\CheckDomainRegistrabilityV2Deprecated400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CheckDomainRegistrabilityV2Deprecated\CheckDomainRegistrabilityV2DeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CheckDomainRegistrabilityV2Deprecated\CheckDomainRegistrabilityV2DeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CreateDomainAuthCode\CreateDomainAuthCode201Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CreateDomainAuthCode\CreateDomainAuthCode400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CreateDomainAuthCode\CreateDomainAuthCode404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CreateDomainAuthCode\CreateDomainAuthCodeDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CreateDomainAuthCode\CreateDomainAuthCodeRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CreateDomainAuthCode2\CreateDomainAuthCode2400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CreateDomainAuthCode2\CreateDomainAuthCode2404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CreateDomainAuthCode2\CreateDomainAuthCode2DefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CreateDomainAuthCode2\CreateDomainAuthCode2Request;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareNameserversV2Deprecated\DeclareNameserversV2Deprecated400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareNameserversV2Deprecated\DeclareNameserversV2Deprecated404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareNameserversV2Deprecated\DeclareNameserversV2DeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareNameserversV2Deprecated\DeclareNameserversV2DeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareProcessChangeAuthcodeV2Deprecated\DeclareProcessChangeAuthcodeV2Deprecated200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareProcessChangeAuthcodeV2Deprecated\DeclareProcessChangeAuthcodeV2Deprecated400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareProcessChangeAuthcodeV2Deprecated\DeclareProcessChangeAuthcodeV2Deprecated404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareProcessChangeAuthcodeV2Deprecated\DeclareProcessChangeAuthcodeV2DeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareProcessChangeAuthcodeV2Deprecated\DeclareProcessChangeAuthcodeV2DeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareProcessChangeHandlesV2Deprecated\DeclareProcessChangeHandlesV2Deprecated200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareProcessChangeHandlesV2Deprecated\DeclareProcessChangeHandlesV2Deprecated400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareProcessChangeHandlesV2Deprecated\DeclareProcessChangeHandlesV2Deprecated404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareProcessChangeHandlesV2Deprecated\DeclareProcessChangeHandlesV2DeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareProcessChangeHandlesV2Deprecated\DeclareProcessChangeHandlesV2DeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeleteDomain\DeleteDomain200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeleteDomain\DeleteDomain400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeleteDomain\DeleteDomain404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeleteDomain\DeleteDomainDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeleteDomain\DeleteDomainRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsCreateDnsZone\DnsCreateDnsZone201Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsCreateDnsZone\DnsCreateDnsZone400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsCreateDnsZone\DnsCreateDnsZoneDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsCreateDnsZone\DnsCreateDnsZoneRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsDeleteDnsZone\DnsDeleteDnsZone400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsDeleteDnsZone\DnsDeleteDnsZoneDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsDeleteDnsZone\DnsDeleteDnsZoneRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsGetDnsZone\DnsGetDnsZone200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsGetDnsZone\DnsGetDnsZone400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsGetDnsZone\DnsGetDnsZoneDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsGetDnsZone\DnsGetDnsZoneRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsListDnsZones\DnsListDnsZones200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsListDnsZones\DnsListDnsZones400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsListDnsZones\DnsListDnsZonesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsListDnsZones\DnsListDnsZonesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordASetCustomDeprecated\DnsRecordASetCustomDeprecated400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordASetCustomDeprecated\DnsRecordASetCustomDeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordASetCustomDeprecated\DnsRecordASetCustomDeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordASetManagedByIngressDeprecated\DnsRecordASetManagedByIngressDeprecated204Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordASetManagedByIngressDeprecated\DnsRecordASetManagedByIngressDeprecated400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordASetManagedByIngressDeprecated\DnsRecordASetManagedByIngressDeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordASetManagedByIngressDeprecated\DnsRecordASetManagedByIngressDeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordCnameSetDeprecated\DnsRecordCnameSetDeprecated400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordCnameSetDeprecated\DnsRecordCnameSetDeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordCnameSetDeprecated\DnsRecordCnameSetDeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordMxSetCustomDeprecated\DnsRecordMxSetCustomDeprecated400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordMxSetCustomDeprecated\DnsRecordMxSetCustomDeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordMxSetCustomDeprecated\DnsRecordMxSetCustomDeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordMxSetManagedDeprecated\DnsRecordMxSetManagedDeprecated400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordMxSetManagedDeprecated\DnsRecordMxSetManagedDeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordMxSetManagedDeprecated\DnsRecordMxSetManagedDeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordSrvSetDeprecated\DnsRecordSrvSetDeprecated400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordSrvSetDeprecated\DnsRecordSrvSetDeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordSrvSetDeprecated\DnsRecordSrvSetDeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordTxtSetDeprecated\DnsRecordTxtSetDeprecated400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordTxtSetDeprecated\DnsRecordTxtSetDeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordTxtSetDeprecated\DnsRecordTxtSetDeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsSetRecordSetManaged\DnsSetRecordSetManaged204Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsSetRecordSetManaged\DnsSetRecordSetManaged400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsSetRecordSetManaged\DnsSetRecordSetManagedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsSetRecordSetManaged\DnsSetRecordSetManagedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsUpdateRecordSet\DnsUpdateRecordSet400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsUpdateRecordSet\DnsUpdateRecordSetDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsUpdateRecordSet\DnsUpdateRecordSetRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetDomain\GetDomain200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetDomain\GetDomain400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetDomain\GetDomain404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetDomain\GetDomainDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetDomain\GetDomainRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetDomainOwnership\GetDomainOwnership200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetDomainOwnership\GetDomainOwnership400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetDomainOwnership\GetDomainOwnership404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetDomainOwnership\GetDomainOwnershipDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetDomainOwnership\GetDomainOwnershipRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetHandleFieldsV2Deprecated\GetHandleFieldsV2Deprecated200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetHandleFieldsV2Deprecated\GetHandleFieldsV2DeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetHandleFieldsV2Deprecated\GetHandleFieldsV2DeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetScreenshotForDomain\GetScreenshotForDomain200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetScreenshotForDomain\GetScreenshotForDomain404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetScreenshotForDomain\GetScreenshotForDomainDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetScreenshotForDomain\GetScreenshotForDomainRequest;
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
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ListTldContactSchemas\ListTldContactSchemas200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ListTldContactSchemas\ListTldContactSchemasDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ListTldContactSchemas\ListTldContactSchemasRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ListTlds\ListTlds200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ListTlds\ListTldsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ListTlds\ListTldsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ResendDomainEmail\ResendDomainEmail400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ResendDomainEmail\ResendDomainEmail404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ResendDomainEmail\ResendDomainEmailDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ResendDomainEmail\ResendDomainEmailRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainAuthCode\UpdateDomainAuthCode200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainAuthCode\UpdateDomainAuthCode400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainAuthCode\UpdateDomainAuthCode404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainAuthCode\UpdateDomainAuthCodeDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainAuthCode\UpdateDomainAuthCodeRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainContact\UpdateDomainContact200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainContact\UpdateDomainContact400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainContact\UpdateDomainContact404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainContact\UpdateDomainContactDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainContact\UpdateDomainContactRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainNameservers\UpdateDomainNameservers400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainNameservers\UpdateDomainNameservers404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainNameservers\UpdateDomainNameserversDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainNameservers\UpdateDomainNameserversRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainProjectId\UpdateDomainProjectId400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainProjectId\UpdateDomainProjectId404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainProjectId\UpdateDomainProjectIdDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainProjectId\UpdateDomainProjectIdRequest;
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
     * Create a DNSZone.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/dns-create-dns-zone
     * @throws GuzzleException
     * @param DnsCreateDnsZone\DnsCreateDnsZoneRequest $request An object representing the request for this operation
     * @return DnsCreateDnsZone\DnsCreateDnsZone201Response|DnsCreateDnsZone\DnsCreateDnsZone400Response|DnsCreateDnsZone\DnsCreateDnsZoneDefaultResponse The ID of the created DNSZone.
     */
    public function dnsCreateDnsZone(DnsCreateDnsZoneRequest $request): DnsCreateDnsZone201Response|DnsCreateDnsZone400Response|DnsCreateDnsZoneDefaultResponse
    {
        $httpRequest = new Request(DnsCreateDnsZoneRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => DnsCreateDnsZone201Response::fromResponse($httpResponse),
            400 => DnsCreateDnsZone400Response::fromResponse($httpResponse),
            default => DnsCreateDnsZoneDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Delete a DNSZone.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/dns-delete-dns-zone
     * @throws GuzzleException
     * @param DnsDeleteDnsZone\DnsDeleteDnsZoneRequest $request An object representing the request for this operation
     * @return EmptyResponse|DnsDeleteDnsZone\DnsDeleteDnsZone400Response|DnsDeleteDnsZone\DnsDeleteDnsZoneDefaultResponse OK
     */
    public function dnsDeleteDnsZone(DnsDeleteDnsZoneRequest $request): EmptyResponse|DnsDeleteDnsZone400Response|DnsDeleteDnsZoneDefaultResponse
    {
        $httpRequest = new Request(DnsDeleteDnsZoneRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new EmptyResponse($httpResponse),
            400 => DnsDeleteDnsZone400Response::fromResponse($httpResponse),
            default => DnsDeleteDnsZoneDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Get a DNSZone.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/dns-get-dns-zone
     * @throws GuzzleException
     * @param DnsGetDnsZone\DnsGetDnsZoneRequest $request An object representing the request for this operation
     * @return DnsGetDnsZone\DnsGetDnsZone200Response|DnsGetDnsZone\DnsGetDnsZone400Response|DnsGetDnsZone\DnsGetDnsZoneDefaultResponse The requested DNSZone.
     */
    public function dnsGetDnsZone(DnsGetDnsZoneRequest $request): DnsGetDnsZone200Response|DnsGetDnsZone400Response|DnsGetDnsZoneDefaultResponse
    {
        $httpRequest = new Request(DnsGetDnsZoneRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => DnsGetDnsZone200Response::fromResponse($httpResponse),
            400 => DnsGetDnsZone400Response::fromResponse($httpResponse),
            default => DnsGetDnsZoneDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * List DNSZones belonging to a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/dns-list-dns-zones
     * @throws GuzzleException
     * @param DnsListDnsZones\DnsListDnsZonesRequest $request An object representing the request for this operation
     * @return DnsListDnsZones\DnsListDnsZones200Response|DnsListDnsZones\DnsListDnsZones400Response|DnsListDnsZones\DnsListDnsZonesDefaultResponse An array of DNSZone objects.
     */
    public function dnsListDnsZones(DnsListDnsZonesRequest $request): DnsListDnsZones200Response|DnsListDnsZones400Response|DnsListDnsZonesDefaultResponse
    {
        $httpRequest = new Request(DnsListDnsZonesRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => DnsListDnsZones200Response::fromResponse($httpResponse),
            400 => DnsListDnsZones400Response::fromResponse($httpResponse),
            default => DnsListDnsZonesDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * updates a-records for a specific zone
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/dns-record-a-set-custom-deprecated
     * @throws GuzzleException
     * @param DnsRecordASetCustomDeprecated\DnsRecordASetCustomDeprecatedRequest $request An object representing the request for this operation
     * @return EmptyResponse|DnsRecordASetCustomDeprecated\DnsRecordASetCustomDeprecated400Response|DnsRecordASetCustomDeprecated\DnsRecordASetCustomDeprecatedDefaultResponse recordset updated
     */
    public function dnsRecordASetCustomDeprecated(DnsRecordASetCustomDeprecatedRequest $request): EmptyResponse|DnsRecordASetCustomDeprecated400Response|DnsRecordASetCustomDeprecatedDefaultResponse
    {
        $httpRequest = new Request(DnsRecordASetCustomDeprecatedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => DnsRecordASetCustomDeprecated400Response::fromResponse($httpResponse),
            default => DnsRecordASetCustomDeprecatedDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * set a-records managed by ingress for a specific zone
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/dns-record-a-set-managed-by-ingress-deprecated
     * @throws GuzzleException
     * @param DnsRecordASetManagedByIngressDeprecated\DnsRecordASetManagedByIngressDeprecatedRequest $request An object representing the request for this operation
     * @return DnsRecordASetManagedByIngressDeprecated\DnsRecordASetManagedByIngressDeprecated204Response|DnsRecordASetManagedByIngressDeprecated\DnsRecordASetManagedByIngressDeprecated400Response|DnsRecordASetManagedByIngressDeprecated\DnsRecordASetManagedByIngressDeprecatedDefaultResponse zone set managed by ingressId
     */
    public function dnsRecordASetManagedByIngressDeprecated(DnsRecordASetManagedByIngressDeprecatedRequest $request): DnsRecordASetManagedByIngressDeprecated204Response|DnsRecordASetManagedByIngressDeprecated400Response|DnsRecordASetManagedByIngressDeprecatedDefaultResponse
    {
        $httpRequest = new Request(DnsRecordASetManagedByIngressDeprecatedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => DnsRecordASetManagedByIngressDeprecated204Response::fromResponse($httpResponse),
            400 => DnsRecordASetManagedByIngressDeprecated400Response::fromResponse($httpResponse),
            default => DnsRecordASetManagedByIngressDeprecatedDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * updates cname-record for a specific zone
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/dns-record-cname-set-deprecated
     * @throws GuzzleException
     * @param DnsRecordCnameSetDeprecated\DnsRecordCnameSetDeprecatedRequest $request An object representing the request for this operation
     * @return EmptyResponse|DnsRecordCnameSetDeprecated\DnsRecordCnameSetDeprecated400Response|DnsRecordCnameSetDeprecated\DnsRecordCnameSetDeprecatedDefaultResponse recordset updated
     */
    public function dnsRecordCnameSetDeprecated(DnsRecordCnameSetDeprecatedRequest $request): EmptyResponse|DnsRecordCnameSetDeprecated400Response|DnsRecordCnameSetDeprecatedDefaultResponse
    {
        $httpRequest = new Request(DnsRecordCnameSetDeprecatedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => DnsRecordCnameSetDeprecated400Response::fromResponse($httpResponse),
            default => DnsRecordCnameSetDeprecatedDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * updates mx-records for a specific zone
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/dns-record-mx-set-custom-deprecated
     * @throws GuzzleException
     * @param DnsRecordMxSetCustomDeprecated\DnsRecordMxSetCustomDeprecatedRequest $request An object representing the request for this operation
     * @return EmptyResponse|DnsRecordMxSetCustomDeprecated\DnsRecordMxSetCustomDeprecated400Response|DnsRecordMxSetCustomDeprecated\DnsRecordMxSetCustomDeprecatedDefaultResponse recordset updated
     */
    public function dnsRecordMxSetCustomDeprecated(DnsRecordMxSetCustomDeprecatedRequest $request): EmptyResponse|DnsRecordMxSetCustomDeprecated400Response|DnsRecordMxSetCustomDeprecatedDefaultResponse
    {
        $httpRequest = new Request(DnsRecordMxSetCustomDeprecatedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => DnsRecordMxSetCustomDeprecated400Response::fromResponse($httpResponse),
            default => DnsRecordMxSetCustomDeprecatedDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * sets mx-records to managed for a specific zone
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/dns-record-mx-set-managed-deprecated
     * @throws GuzzleException
     * @param DnsRecordMxSetManagedDeprecated\DnsRecordMxSetManagedDeprecatedRequest $request An object representing the request for this operation
     * @return EmptyResponse|DnsRecordMxSetManagedDeprecated\DnsRecordMxSetManagedDeprecated400Response|DnsRecordMxSetManagedDeprecated\DnsRecordMxSetManagedDeprecatedDefaultResponse recordset updated
     */
    public function dnsRecordMxSetManagedDeprecated(DnsRecordMxSetManagedDeprecatedRequest $request): EmptyResponse|DnsRecordMxSetManagedDeprecated400Response|DnsRecordMxSetManagedDeprecatedDefaultResponse
    {
        $httpRequest = new Request(DnsRecordMxSetManagedDeprecatedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => DnsRecordMxSetManagedDeprecated400Response::fromResponse($httpResponse),
            default => DnsRecordMxSetManagedDeprecatedDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * updates srv-records for a specific zone
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/dns-record-srv-set-deprecated
     * @throws GuzzleException
     * @param DnsRecordSrvSetDeprecated\DnsRecordSrvSetDeprecatedRequest $request An object representing the request for this operation
     * @return EmptyResponse|DnsRecordSrvSetDeprecated\DnsRecordSrvSetDeprecated400Response|DnsRecordSrvSetDeprecated\DnsRecordSrvSetDeprecatedDefaultResponse recordset updated
     */
    public function dnsRecordSrvSetDeprecated(DnsRecordSrvSetDeprecatedRequest $request): EmptyResponse|DnsRecordSrvSetDeprecated400Response|DnsRecordSrvSetDeprecatedDefaultResponse
    {
        $httpRequest = new Request(DnsRecordSrvSetDeprecatedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => DnsRecordSrvSetDeprecated400Response::fromResponse($httpResponse),
            default => DnsRecordSrvSetDeprecatedDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * updates txt-records for a specific zone
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/dns-record-txt-set-deprecated
     * @throws GuzzleException
     * @param DnsRecordTxtSetDeprecated\DnsRecordTxtSetDeprecatedRequest $request An object representing the request for this operation
     * @return EmptyResponse|DnsRecordTxtSetDeprecated\DnsRecordTxtSetDeprecated400Response|DnsRecordTxtSetDeprecated\DnsRecordTxtSetDeprecatedDefaultResponse recordset updated
     */
    public function dnsRecordTxtSetDeprecated(DnsRecordTxtSetDeprecatedRequest $request): EmptyResponse|DnsRecordTxtSetDeprecated400Response|DnsRecordTxtSetDeprecatedDefaultResponse
    {
        $httpRequest = new Request(DnsRecordTxtSetDeprecatedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => DnsRecordTxtSetDeprecated400Response::fromResponse($httpResponse),
            default => DnsRecordTxtSetDeprecatedDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Set a record set on a DNSZone to managed.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/dns-set-record-set-managed
     * @throws GuzzleException
     * @param DnsSetRecordSetManaged\DnsSetRecordSetManagedRequest $request An object representing the request for this operation
     * @return DnsSetRecordSetManaged\DnsSetRecordSetManaged204Response|DnsSetRecordSetManaged\DnsSetRecordSetManaged400Response|DnsSetRecordSetManaged\DnsSetRecordSetManagedDefaultResponse The ID of the Ingress the a-records were set for, or an empty object if mx-records were set.
     */
    public function dnsSetRecordSetManaged(DnsSetRecordSetManagedRequest $request): DnsSetRecordSetManaged204Response|DnsSetRecordSetManaged400Response|DnsSetRecordSetManagedDefaultResponse
    {
        $httpRequest = new Request(DnsSetRecordSetManagedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => DnsSetRecordSetManaged204Response::fromResponse($httpResponse),
            400 => DnsSetRecordSetManaged400Response::fromResponse($httpResponse),
            default => DnsSetRecordSetManagedDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Update a record set on a DNSZone.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/dns-update-record-set
     * @throws GuzzleException
     * @param DnsUpdateRecordSet\DnsUpdateRecordSetRequest $request An object representing the request for this operation
     * @return EmptyResponse|DnsUpdateRecordSet\DnsUpdateRecordSet400Response|DnsUpdateRecordSet\DnsUpdateRecordSetDefaultResponse Record set updated.
     */
    public function dnsUpdateRecordSet(DnsUpdateRecordSetRequest $request): EmptyResponse|DnsUpdateRecordSet400Response|DnsUpdateRecordSetDefaultResponse
    {
        $httpRequest = new Request(DnsUpdateRecordSetRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => DnsUpdateRecordSet400Response::fromResponse($httpResponse),
            default => DnsUpdateRecordSetDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Abort a Domain declaration.
     *
     * Abort an incomplete Domain registration/transfer.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-abort-domain-declaration
     * @throws GuzzleException
     * @param AbortDomainDeclaration\AbortDomainDeclarationRequest $request An object representing the request for this operation
     * @return EmptyResponse|AbortDomainDeclaration\AbortDomainDeclaration400Response|AbortDomainDeclaration\AbortDomainDeclaration404Response|AbortDomainDeclaration\AbortDomainDeclarationDefaultResponse No Content
     */
    public function abortDomainDeclaration(AbortDomainDeclarationRequest $request): EmptyResponse|AbortDomainDeclaration400Response|AbortDomainDeclaration404Response|AbortDomainDeclarationDefaultResponse
    {
        $httpRequest = new Request(AbortDomainDeclarationRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => AbortDomainDeclaration400Response::fromResponse($httpResponse),
            404 => AbortDomainDeclaration404Response::fromResponse($httpResponse),
            default => AbortDomainDeclarationDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Change the owner contact of a domain.
     *
     * Change the domain owner of a fully registered domain.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-change-ownerc-of-domain-v2-deprecated
     * @throws GuzzleException
     * @param ChangeOwnercOfDomainV2Deprecated\ChangeOwnercOfDomainV2DeprecatedRequest $request An object representing the request for this operation
     * @return ChangeOwnercOfDomainV2Deprecated\ChangeOwnercOfDomainV2Deprecated200Response|ChangeOwnercOfDomainV2Deprecated\ChangeOwnercOfDomainV2Deprecated400Response|ChangeOwnercOfDomainV2Deprecated\ChangeOwnercOfDomainV2Deprecated404Response|ChangeOwnercOfDomainV2Deprecated\ChangeOwnercOfDomainV2DeprecatedDefaultResponse OK
     */
    public function changeOwnercOfDomainV2Deprecated(ChangeOwnercOfDomainV2DeprecatedRequest $request): ChangeOwnercOfDomainV2Deprecated200Response|ChangeOwnercOfDomainV2Deprecated400Response|ChangeOwnercOfDomainV2Deprecated404Response|ChangeOwnercOfDomainV2DeprecatedDefaultResponse
    {
        $httpRequest = new Request(ChangeOwnercOfDomainV2DeprecatedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ChangeOwnercOfDomainV2Deprecated200Response::fromResponse($httpResponse),
            400 => ChangeOwnercOfDomainV2Deprecated400Response::fromResponse($httpResponse),
            404 => ChangeOwnercOfDomainV2Deprecated404Response::fromResponse($httpResponse),
            default => ChangeOwnercOfDomainV2DeprecatedDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Change the Project relation of a Domain.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-change-project-of-domain-v2-deprecated
     * @throws GuzzleException
     * @param ChangeProjectOfDomainV2Deprecated\ChangeProjectOfDomainV2DeprecatedRequest $request An object representing the request for this operation
     * @return EmptyResponse|ChangeProjectOfDomainV2Deprecated\ChangeProjectOfDomainV2Deprecated400Response|ChangeProjectOfDomainV2Deprecated\ChangeProjectOfDomainV2Deprecated404Response|ChangeProjectOfDomainV2Deprecated\ChangeProjectOfDomainV2DeprecatedDefaultResponse No Content
     */
    public function changeProjectOfDomainV2Deprecated(ChangeProjectOfDomainV2DeprecatedRequest $request): EmptyResponse|ChangeProjectOfDomainV2Deprecated400Response|ChangeProjectOfDomainV2Deprecated404Response|ChangeProjectOfDomainV2DeprecatedDefaultResponse
    {
        $httpRequest = new Request(ChangeProjectOfDomainV2DeprecatedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => ChangeProjectOfDomainV2Deprecated400Response::fromResponse($httpResponse),
            404 => ChangeProjectOfDomainV2Deprecated404Response::fromResponse($httpResponse),
            default => ChangeProjectOfDomainV2DeprecatedDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Check if a Domain is available to register.
     *
     * If false, you have to start a transfer with an auth code instead.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-check-domain-registrability
     * @throws GuzzleException
     * @param CheckDomainRegistrability\CheckDomainRegistrabilityRequest $request An object representing the request for this operation
     * @return CheckDomainRegistrability\CheckDomainRegistrability200Response|CheckDomainRegistrability\CheckDomainRegistrability400Response|CheckDomainRegistrability\CheckDomainRegistrabilityDefaultResponse OK
     */
    public function checkDomainRegistrability(CheckDomainRegistrabilityRequest $request): CheckDomainRegistrability200Response|CheckDomainRegistrability400Response|CheckDomainRegistrabilityDefaultResponse
    {
        $httpRequest = new Request(CheckDomainRegistrabilityRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => CheckDomainRegistrability200Response::fromResponse($httpResponse),
            400 => CheckDomainRegistrability400Response::fromResponse($httpResponse),
            default => CheckDomainRegistrabilityDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Check if a Domain is available to register.
     *
     * If false, you have to start a transfer with an auth code instead.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-check-domain-registrability-v2-deprecated
     * @throws GuzzleException
     * @param CheckDomainRegistrabilityV2Deprecated\CheckDomainRegistrabilityV2DeprecatedRequest $request An object representing the request for this operation
     * @return CheckDomainRegistrabilityV2Deprecated\CheckDomainRegistrabilityV2Deprecated200Response|CheckDomainRegistrabilityV2Deprecated\CheckDomainRegistrabilityV2Deprecated400Response|CheckDomainRegistrabilityV2Deprecated\CheckDomainRegistrabilityV2DeprecatedDefaultResponse OK
     */
    public function checkDomainRegistrabilityV2Deprecated(CheckDomainRegistrabilityV2DeprecatedRequest $request): CheckDomainRegistrabilityV2Deprecated200Response|CheckDomainRegistrabilityV2Deprecated400Response|CheckDomainRegistrabilityV2DeprecatedDefaultResponse
    {
        $httpRequest = new Request(CheckDomainRegistrabilityV2DeprecatedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => CheckDomainRegistrabilityV2Deprecated200Response::fromResponse($httpResponse),
            400 => CheckDomainRegistrabilityV2Deprecated400Response::fromResponse($httpResponse),
            default => CheckDomainRegistrabilityV2DeprecatedDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Create an auth code 2.
     *
     * Start an auth code 2 process for a DENIC Domain. You will receive a letter from DENIC.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-create-domain-auth-code-2
     * @throws GuzzleException
     * @param CreateDomainAuthCode2\CreateDomainAuthCode2Request $request An object representing the request for this operation
     * @return EmptyResponse|CreateDomainAuthCode2\CreateDomainAuthCode2400Response|CreateDomainAuthCode2\CreateDomainAuthCode2404Response|CreateDomainAuthCode2\CreateDomainAuthCode2DefaultResponse No Content
     */
    public function createDomainAuthCode2(CreateDomainAuthCode2Request $request): EmptyResponse|CreateDomainAuthCode2400Response|CreateDomainAuthCode2404Response|CreateDomainAuthCode2DefaultResponse
    {
        $httpRequest = new Request(CreateDomainAuthCode2Request::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => CreateDomainAuthCode2400Response::fromResponse($httpResponse),
            404 => CreateDomainAuthCode2404Response::fromResponse($httpResponse),
            default => CreateDomainAuthCode2DefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Create an auth code for a Domains transfer-out process.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-create-domain-auth-code
     * @throws GuzzleException
     * @param CreateDomainAuthCode\CreateDomainAuthCodeRequest $request An object representing the request for this operation
     * @return CreateDomainAuthCode\CreateDomainAuthCode201Response|CreateDomainAuthCode\CreateDomainAuthCode400Response|CreateDomainAuthCode\CreateDomainAuthCode404Response|CreateDomainAuthCode\CreateDomainAuthCodeDefaultResponse Created
     */
    public function createDomainAuthCode(CreateDomainAuthCodeRequest $request): CreateDomainAuthCode201Response|CreateDomainAuthCode400Response|CreateDomainAuthCode404Response|CreateDomainAuthCodeDefaultResponse
    {
        $httpRequest = new Request(CreateDomainAuthCodeRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => CreateDomainAuthCode201Response::fromResponse($httpResponse),
            400 => CreateDomainAuthCode400Response::fromResponse($httpResponse),
            404 => CreateDomainAuthCode404Response::fromResponse($httpResponse),
            default => CreateDomainAuthCodeDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Change all nameservers of a Domain.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-declare-nameservers-v2-deprecated
     * @throws GuzzleException
     * @param DeclareNameserversV2Deprecated\DeclareNameserversV2DeprecatedRequest $request An object representing the request for this operation
     * @return EmptyResponse|DeclareNameserversV2Deprecated\DeclareNameserversV2Deprecated400Response|DeclareNameserversV2Deprecated\DeclareNameserversV2Deprecated404Response|DeclareNameserversV2Deprecated\DeclareNameserversV2DeprecatedDefaultResponse No Content
     */
    public function declareNameserversV2Deprecated(DeclareNameserversV2DeprecatedRequest $request): EmptyResponse|DeclareNameserversV2Deprecated400Response|DeclareNameserversV2Deprecated404Response|DeclareNameserversV2DeprecatedDefaultResponse
    {
        $httpRequest = new Request(DeclareNameserversV2DeprecatedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => DeclareNameserversV2Deprecated400Response::fromResponse($httpResponse),
            404 => DeclareNameserversV2Deprecated404Response::fromResponse($httpResponse),
            default => DeclareNameserversV2DeprecatedDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Update the nameservers of a Domain.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-update-domain-nameservers
     * @throws GuzzleException
     * @param UpdateDomainNameservers\UpdateDomainNameserversRequest $request An object representing the request for this operation
     * @return EmptyResponse|UpdateDomainNameservers\UpdateDomainNameservers400Response|UpdateDomainNameservers\UpdateDomainNameservers404Response|UpdateDomainNameservers\UpdateDomainNameserversDefaultResponse No Content
     */
    public function updateDomainNameservers(UpdateDomainNameserversRequest $request): EmptyResponse|UpdateDomainNameservers400Response|UpdateDomainNameservers404Response|UpdateDomainNameserversDefaultResponse
    {
        $httpRequest = new Request(UpdateDomainNameserversRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => UpdateDomainNameservers400Response::fromResponse($httpResponse),
            404 => UpdateDomainNameservers404Response::fromResponse($httpResponse),
            default => UpdateDomainNameserversDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Update an AuthCode.
     *
     * Change a wrong AuthCode of your transfer domain request (declare domain process). This route will also restart the transfer itself.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-declare-process-change-authcode-v2-deprecated
     * @throws GuzzleException
     * @param DeclareProcessChangeAuthcodeV2Deprecated\DeclareProcessChangeAuthcodeV2DeprecatedRequest $request An object representing the request for this operation
     * @return DeclareProcessChangeAuthcodeV2Deprecated\DeclareProcessChangeAuthcodeV2Deprecated200Response|DeclareProcessChangeAuthcodeV2Deprecated\DeclareProcessChangeAuthcodeV2Deprecated400Response|DeclareProcessChangeAuthcodeV2Deprecated\DeclareProcessChangeAuthcodeV2Deprecated404Response|DeclareProcessChangeAuthcodeV2Deprecated\DeclareProcessChangeAuthcodeV2DeprecatedDefaultResponse OK
     */
    public function declareProcessChangeAuthcodeV2Deprecated(DeclareProcessChangeAuthcodeV2DeprecatedRequest $request): DeclareProcessChangeAuthcodeV2Deprecated200Response|DeclareProcessChangeAuthcodeV2Deprecated400Response|DeclareProcessChangeAuthcodeV2Deprecated404Response|DeclareProcessChangeAuthcodeV2DeprecatedDefaultResponse
    {
        $httpRequest = new Request(DeclareProcessChangeAuthcodeV2DeprecatedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => DeclareProcessChangeAuthcodeV2Deprecated200Response::fromResponse($httpResponse),
            400 => DeclareProcessChangeAuthcodeV2Deprecated400Response::fromResponse($httpResponse),
            404 => DeclareProcessChangeAuthcodeV2Deprecated404Response::fromResponse($httpResponse),
            default => DeclareProcessChangeAuthcodeV2DeprecatedDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Update a Domain's OwnerC handle.
     *
     * This route will also restart the transfer or register itself.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-declare-process-change-handles-v2-deprecated
     * @throws GuzzleException
     * @param DeclareProcessChangeHandlesV2Deprecated\DeclareProcessChangeHandlesV2DeprecatedRequest $request An object representing the request for this operation
     * @return DeclareProcessChangeHandlesV2Deprecated\DeclareProcessChangeHandlesV2Deprecated200Response|DeclareProcessChangeHandlesV2Deprecated\DeclareProcessChangeHandlesV2Deprecated400Response|DeclareProcessChangeHandlesV2Deprecated\DeclareProcessChangeHandlesV2Deprecated404Response|DeclareProcessChangeHandlesV2Deprecated\DeclareProcessChangeHandlesV2DeprecatedDefaultResponse OK
     */
    public function declareProcessChangeHandlesV2Deprecated(DeclareProcessChangeHandlesV2DeprecatedRequest $request): DeclareProcessChangeHandlesV2Deprecated200Response|DeclareProcessChangeHandlesV2Deprecated400Response|DeclareProcessChangeHandlesV2Deprecated404Response|DeclareProcessChangeHandlesV2DeprecatedDefaultResponse
    {
        $httpRequest = new Request(DeclareProcessChangeHandlesV2DeprecatedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => DeclareProcessChangeHandlesV2Deprecated200Response::fromResponse($httpResponse),
            400 => DeclareProcessChangeHandlesV2Deprecated400Response::fromResponse($httpResponse),
            404 => DeclareProcessChangeHandlesV2Deprecated404Response::fromResponse($httpResponse),
            default => DeclareProcessChangeHandlesV2DeprecatedDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Delete a Domain.
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
     * Get a DomainOwnership.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-get-domain-ownership
     * @throws GuzzleException
     * @param GetDomainOwnership\GetDomainOwnershipRequest $request An object representing the request for this operation
     * @return GetDomainOwnership\GetDomainOwnership200Response|GetDomainOwnership\GetDomainOwnership400Response|GetDomainOwnership\GetDomainOwnership404Response|GetDomainOwnership\GetDomainOwnershipDefaultResponse OK
     */
    public function getDomainOwnership(GetDomainOwnershipRequest $request): GetDomainOwnership200Response|GetDomainOwnership400Response|GetDomainOwnership404Response|GetDomainOwnershipDefaultResponse
    {
        $httpRequest = new Request(GetDomainOwnershipRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetDomainOwnership200Response::fromResponse($httpResponse),
            400 => GetDomainOwnership400Response::fromResponse($httpResponse),
            404 => GetDomainOwnership404Response::fromResponse($httpResponse),
            default => GetDomainOwnershipDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Get a HandleSchema.
     *
     * Get required handle fields of a registrar for your domain process (transfer/registration).
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-get-handle-fields-v2-deprecated
     * @throws GuzzleException
     * @param GetHandleFieldsV2Deprecated\GetHandleFieldsV2DeprecatedRequest $request An object representing the request for this operation
     * @return GetHandleFieldsV2Deprecated\GetHandleFieldsV2Deprecated200Response|GetHandleFieldsV2Deprecated\GetHandleFieldsV2DeprecatedDefaultResponse The parseable json schema objects
     */
    public function getHandleFieldsV2Deprecated(GetHandleFieldsV2DeprecatedRequest $request): GetHandleFieldsV2Deprecated200Response|GetHandleFieldsV2DeprecatedDefaultResponse
    {
        $httpRequest = new Request(GetHandleFieldsV2DeprecatedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetHandleFieldsV2Deprecated200Response::fromResponse($httpResponse),
            default => GetHandleFieldsV2DeprecatedDefaultResponse::fromResponse($httpResponse),
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
     * List the DomainOwnerships of a project.
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
     * List the contact schemas for a TLD.
     *
     * List the contact schemas describing the fields required to register/transfer a Domain.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-list-tld-contact-schemas
     * @throws GuzzleException
     * @param ListTldContactSchemas\ListTldContactSchemasRequest $request An object representing the request for this operation
     * @return ListTldContactSchemas\ListTldContactSchemas200Response|ListTldContactSchemas\ListTldContactSchemasDefaultResponse The JSON-Schema objects.
     */
    public function listTldContactSchemas(ListTldContactSchemasRequest $request): ListTldContactSchemas200Response|ListTldContactSchemasDefaultResponse
    {
        $httpRequest = new Request(ListTldContactSchemasRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListTldContactSchemas200Response::fromResponse($httpResponse),
            default => ListTldContactSchemasDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * List TLDs.
     *
     * List the top level domains currently supported by our API.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-list-tlds
     * @throws GuzzleException
     * @param ListTlds\ListTldsRequest $request An object representing the request for this operation
     * @return ListTlds\ListTlds200Response|ListTlds\ListTldsDefaultResponse
     */
    public function listTlds(ListTldsRequest $request): ListTlds200Response|ListTldsDefaultResponse
    {
        $httpRequest = new Request(ListTldsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListTlds200Response::fromResponse($httpResponse),
            default => ListTldsDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Resend a Domain email.
     *
     * Trigger a resend of a confirmation or registrant verification email. Has no effect on .de Domains.
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
     * Update the auth code of a Domain.
     *
     * Update an incorrect auth code of an ongoing/failed Domain transfer. This route will also restart the transfer itself.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-update-domain-auth-code
     * @throws GuzzleException
     * @param UpdateDomainAuthCode\UpdateDomainAuthCodeRequest $request An object representing the request for this operation
     * @return UpdateDomainAuthCode\UpdateDomainAuthCode200Response|UpdateDomainAuthCode\UpdateDomainAuthCode400Response|UpdateDomainAuthCode\UpdateDomainAuthCode404Response|UpdateDomainAuthCode\UpdateDomainAuthCodeDefaultResponse OK
     */
    public function updateDomainAuthCode(UpdateDomainAuthCodeRequest $request): UpdateDomainAuthCode200Response|UpdateDomainAuthCode400Response|UpdateDomainAuthCode404Response|UpdateDomainAuthCodeDefaultResponse
    {
        $httpRequest = new Request(UpdateDomainAuthCodeRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => UpdateDomainAuthCode200Response::fromResponse($httpResponse),
            400 => UpdateDomainAuthCode400Response::fromResponse($httpResponse),
            404 => UpdateDomainAuthCode404Response::fromResponse($httpResponse),
            default => UpdateDomainAuthCodeDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Update a contact of a Domain.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-update-domain-contact
     * @throws GuzzleException
     * @param UpdateDomainContact\UpdateDomainContactRequest $request An object representing the request for this operation
     * @return UpdateDomainContact\UpdateDomainContact200Response|UpdateDomainContact\UpdateDomainContact400Response|UpdateDomainContact\UpdateDomainContact404Response|UpdateDomainContact\UpdateDomainContactDefaultResponse OK
     */
    public function updateDomainContact(UpdateDomainContactRequest $request): UpdateDomainContact200Response|UpdateDomainContact400Response|UpdateDomainContact404Response|UpdateDomainContactDefaultResponse
    {
        $httpRequest = new Request(UpdateDomainContactRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => UpdateDomainContact200Response::fromResponse($httpResponse),
            400 => UpdateDomainContact400Response::fromResponse($httpResponse),
            404 => UpdateDomainContact404Response::fromResponse($httpResponse),
            default => UpdateDomainContactDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Update a Domain's project id.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-update-domain-project-id
     * @throws GuzzleException
     * @param UpdateDomainProjectId\UpdateDomainProjectIdRequest $request An object representing the request for this operation
     * @return EmptyResponse|UpdateDomainProjectId\UpdateDomainProjectId400Response|UpdateDomainProjectId\UpdateDomainProjectId404Response|UpdateDomainProjectId\UpdateDomainProjectIdDefaultResponse No Content
     */
    public function updateDomainProjectId(UpdateDomainProjectIdRequest $request): EmptyResponse|UpdateDomainProjectId400Response|UpdateDomainProjectId404Response|UpdateDomainProjectIdDefaultResponse
    {
        $httpRequest = new Request(UpdateDomainProjectIdRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => UpdateDomainProjectId400Response::fromResponse($httpResponse),
            404 => UpdateDomainProjectId404Response::fromResponse($httpResponse),
            default => UpdateDomainProjectIdDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Verify a DomainOwnership.
     *
     * Verify your access to a Domain with an already set TXT Record. On success, the domain will be linked with the webserver.
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
