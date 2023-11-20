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
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainGetScreenshotForDomain\DeprecatedDomainGetScreenshotForDomain200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainGetScreenshotForDomain\DeprecatedDomainGetScreenshotForDomain404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainGetScreenshotForDomain\DeprecatedDomainGetScreenshotForDomainDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainGetScreenshotForDomain\DeprecatedDomainGetScreenshotForDomainRequest;
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
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetLatestScreenshot\GetLatestScreenshot200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetLatestScreenshot\GetLatestScreenshot404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetLatestScreenshot\GetLatestScreenshotDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetLatestScreenshot\GetLatestScreenshotRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressCreateIngress\IngressCreateIngress201Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressCreateIngress\IngressCreateIngress404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressCreateIngress\IngressCreateIngressDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressCreateIngress\IngressCreateIngressRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressDeleteIngress\IngressDeleteIngress404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressDeleteIngress\IngressDeleteIngressDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressDeleteIngress\IngressDeleteIngressRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressGetIngress\IngressGetIngress200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressGetIngress\IngressGetIngress404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressGetIngress\IngressGetIngressDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressGetIngress\IngressGetIngressRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressListIngresses\IngressListIngresses200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressListIngresses\IngressListIngresses404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressListIngresses\IngressListIngressesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressListIngresses\IngressListIngressesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressListIngressesV2Deprecated\IngressListIngressesV2Deprecated200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressListIngressesV2Deprecated\IngressListIngressesV2Deprecated404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressListIngressesV2Deprecated\IngressListIngressesV2DeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressListIngressesV2Deprecated\IngressListIngressesV2DeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressPathsDeprecated\IngressPathsDeprecated404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressPathsDeprecated\IngressPathsDeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressPathsDeprecated\IngressPathsDeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressRequestIngressAcmeCertificateIssuance\IngressRequestIngressAcmeCertificateIssuance400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressRequestIngressAcmeCertificateIssuance\IngressRequestIngressAcmeCertificateIssuance404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressRequestIngressAcmeCertificateIssuance\IngressRequestIngressAcmeCertificateIssuanceDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressRequestIngressAcmeCertificateIssuance\IngressRequestIngressAcmeCertificateIssuanceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressTlsDeprecated\IngressTlsDeprecated200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressTlsDeprecated\IngressTlsDeprecated404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressTlsDeprecated\IngressTlsDeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressTlsDeprecated\IngressTlsDeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressUpdateIngressPaths\IngressUpdateIngressPaths404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressUpdateIngressPaths\IngressUpdateIngressPathsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressUpdateIngressPaths\IngressUpdateIngressPathsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressUpdateIngressTls\IngressUpdateIngressTls200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressUpdateIngressTls\IngressUpdateIngressTls404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressUpdateIngressTls\IngressUpdateIngressTlsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressUpdateIngressTls\IngressUpdateIngressTlsRequest;
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
     * Get File Service Reference for a Screenshot of a domain.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/deprecated-domain-get-screenshot-for-domain
     * @throws GuzzleException
     * @param DeprecatedDomainGetScreenshotForDomain\DeprecatedDomainGetScreenshotForDomainRequest $request An object representing the request for this operation
     * @return DeprecatedDomainGetScreenshotForDomain\DeprecatedDomainGetScreenshotForDomain200Response|DeprecatedDomainGetScreenshotForDomain\DeprecatedDomainGetScreenshotForDomain404Response|DeprecatedDomainGetScreenshotForDomain\DeprecatedDomainGetScreenshotForDomainDefaultResponse The References.
     */
    public function deprecatedDomainGetScreenshotForDomain(DeprecatedDomainGetScreenshotForDomainRequest $request): DeprecatedDomainGetScreenshotForDomain200Response|DeprecatedDomainGetScreenshotForDomain404Response|DeprecatedDomainGetScreenshotForDomainDefaultResponse
    {
        $httpRequest = new Request(DeprecatedDomainGetScreenshotForDomainRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => DeprecatedDomainGetScreenshotForDomain200Response::fromResponse($httpResponse),
            404 => DeprecatedDomainGetScreenshotForDomain404Response::fromResponse($httpResponse),
            default => DeprecatedDomainGetScreenshotForDomainDefaultResponse::fromResponse($httpResponse),
        };
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
     * Get the latest screenshot's FileReference belonging to a Domain.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-get-latest-screenshot
     * @throws GuzzleException
     * @param GetLatestScreenshot\GetLatestScreenshotRequest $request An object representing the request for this operation
     * @return GetLatestScreenshot\GetLatestScreenshot200Response|GetLatestScreenshot\GetLatestScreenshot404Response|GetLatestScreenshot\GetLatestScreenshotDefaultResponse OK
     */
    public function getLatestScreenshot(GetLatestScreenshotRequest $request): GetLatestScreenshot200Response|GetLatestScreenshot404Response|GetLatestScreenshotDefaultResponse
    {
        $httpRequest = new Request(GetLatestScreenshotRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetLatestScreenshot200Response::fromResponse($httpResponse),
            404 => GetLatestScreenshot404Response::fromResponse($httpResponse),
            default => GetLatestScreenshotDefaultResponse::fromResponse($httpResponse),
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
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ingress-create-ingress
     * @throws GuzzleException
     * @param IngressCreateIngress\IngressCreateIngressRequest $request An object representing the request for this operation
     * @return IngressCreateIngress\IngressCreateIngress201Response|IngressCreateIngress\IngressCreateIngress404Response|IngressCreateIngress\IngressCreateIngressDefaultResponse Created
     */
    public function ingressCreateIngress(IngressCreateIngressRequest $request): IngressCreateIngress201Response|IngressCreateIngress404Response|IngressCreateIngressDefaultResponse
    {
        $httpRequest = new Request(IngressCreateIngressRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => IngressCreateIngress201Response::fromResponse($httpResponse),
            404 => IngressCreateIngress404Response::fromResponse($httpResponse),
            default => IngressCreateIngressDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * List Ingresses.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ingress-list-ingresses
     * @throws GuzzleException
     * @param IngressListIngresses\IngressListIngressesRequest $request An object representing the request for this operation
     * @return IngressListIngresses\IngressListIngresses200Response|IngressListIngresses\IngressListIngresses404Response|IngressListIngresses\IngressListIngressesDefaultResponse OK
     */
    public function ingressListIngresses(IngressListIngressesRequest $request): IngressListIngresses200Response|IngressListIngresses404Response|IngressListIngressesDefaultResponse
    {
        $httpRequest = new Request(IngressListIngressesRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => IngressListIngresses200Response::fromResponse($httpResponse),
            404 => IngressListIngresses404Response::fromResponse($httpResponse),
            default => IngressListIngressesDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Delete an Ingress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ingress-delete-ingress
     * @throws GuzzleException
     * @param IngressDeleteIngress\IngressDeleteIngressRequest $request An object representing the request for this operation
     * @return EmptyResponse|IngressDeleteIngress\IngressDeleteIngress404Response|IngressDeleteIngress\IngressDeleteIngressDefaultResponse No Content
     */
    public function ingressDeleteIngress(IngressDeleteIngressRequest $request): EmptyResponse|IngressDeleteIngress404Response|IngressDeleteIngressDefaultResponse
    {
        $httpRequest = new Request(IngressDeleteIngressRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            404 => IngressDeleteIngress404Response::fromResponse($httpResponse),
            default => IngressDeleteIngressDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Get an Ingress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ingress-get-ingress
     * @throws GuzzleException
     * @param IngressGetIngress\IngressGetIngressRequest $request An object representing the request for this operation
     * @return IngressGetIngress\IngressGetIngress200Response|IngressGetIngress\IngressGetIngress404Response|IngressGetIngress\IngressGetIngressDefaultResponse OK
     */
    public function ingressGetIngress(IngressGetIngressRequest $request): IngressGetIngress200Response|IngressGetIngress404Response|IngressGetIngressDefaultResponse
    {
        $httpRequest = new Request(IngressGetIngressRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => IngressGetIngress200Response::fromResponse($httpResponse),
            404 => IngressGetIngress404Response::fromResponse($httpResponse),
            default => IngressGetIngressDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * List Ingresses belonging to a project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ingress-list-ingresses-v2-deprecated
     * @throws GuzzleException
     * @param IngressListIngressesV2Deprecated\IngressListIngressesV2DeprecatedRequest $request An object representing the request for this operation
     * @return IngressListIngressesV2Deprecated\IngressListIngressesV2Deprecated200Response|IngressListIngressesV2Deprecated\IngressListIngressesV2Deprecated404Response|IngressListIngressesV2Deprecated\IngressListIngressesV2DeprecatedDefaultResponse OK
     */
    public function ingressListIngressesV2Deprecated(IngressListIngressesV2DeprecatedRequest $request): IngressListIngressesV2Deprecated200Response|IngressListIngressesV2Deprecated404Response|IngressListIngressesV2DeprecatedDefaultResponse
    {
        $httpRequest = new Request(IngressListIngressesV2DeprecatedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => IngressListIngressesV2Deprecated200Response::fromResponse($httpResponse),
            404 => IngressListIngressesV2Deprecated404Response::fromResponse($httpResponse),
            default => IngressListIngressesV2DeprecatedDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Update an Ingresses paths.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ingress-paths-deprecated
     * @throws GuzzleException
     * @param IngressPathsDeprecated\IngressPathsDeprecatedRequest $request An object representing the request for this operation
     * @return EmptyResponse|IngressPathsDeprecated\IngressPathsDeprecated404Response|IngressPathsDeprecated\IngressPathsDeprecatedDefaultResponse No Content
     */
    public function ingressPathsDeprecated(IngressPathsDeprecatedRequest $request): EmptyResponse|IngressPathsDeprecated404Response|IngressPathsDeprecatedDefaultResponse
    {
        $httpRequest = new Request(IngressPathsDeprecatedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->toJson()['body'],
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            404 => IngressPathsDeprecated404Response::fromResponse($httpResponse),
            default => IngressPathsDeprecatedDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Update the paths of an Ingress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ingress-update-ingress-paths
     * @throws GuzzleException
     * @param IngressUpdateIngressPaths\IngressUpdateIngressPathsRequest $request An object representing the request for this operation
     * @return EmptyResponse|IngressUpdateIngressPaths\IngressUpdateIngressPaths404Response|IngressUpdateIngressPaths\IngressUpdateIngressPathsDefaultResponse No Content
     */
    public function ingressUpdateIngressPaths(IngressUpdateIngressPathsRequest $request): EmptyResponse|IngressUpdateIngressPaths404Response|IngressUpdateIngressPathsDefaultResponse
    {
        $httpRequest = new Request(IngressUpdateIngressPathsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->toJson()['body'],
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            404 => IngressUpdateIngressPaths404Response::fromResponse($httpResponse),
            default => IngressUpdateIngressPathsDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Request the ACME certificate issuance of an Ingress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ingress-request-ingress-acme-certificate-issuance
     * @throws GuzzleException
     * @param IngressRequestIngressAcmeCertificateIssuance\IngressRequestIngressAcmeCertificateIssuanceRequest $request An object representing the request for this operation
     * @return EmptyResponse|IngressRequestIngressAcmeCertificateIssuance\IngressRequestIngressAcmeCertificateIssuance400Response|IngressRequestIngressAcmeCertificateIssuance\IngressRequestIngressAcmeCertificateIssuance404Response|IngressRequestIngressAcmeCertificateIssuance\IngressRequestIngressAcmeCertificateIssuanceDefaultResponse OK
     */
    public function ingressRequestIngressAcmeCertificateIssuance(IngressRequestIngressAcmeCertificateIssuanceRequest $request): EmptyResponse|IngressRequestIngressAcmeCertificateIssuance400Response|IngressRequestIngressAcmeCertificateIssuance404Response|IngressRequestIngressAcmeCertificateIssuanceDefaultResponse
    {
        $httpRequest = new Request(IngressRequestIngressAcmeCertificateIssuanceRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new EmptyResponse($httpResponse),
            400 => IngressRequestIngressAcmeCertificateIssuance400Response::fromResponse($httpResponse),
            404 => IngressRequestIngressAcmeCertificateIssuance404Response::fromResponse($httpResponse),
            default => IngressRequestIngressAcmeCertificateIssuanceDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Update an Ingresses tls settings.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ingress-tls-deprecated
     * @throws GuzzleException
     * @param IngressTlsDeprecated\IngressTlsDeprecatedRequest $request An object representing the request for this operation
     * @return IngressTlsDeprecated\IngressTlsDeprecated200Response|IngressTlsDeprecated\IngressTlsDeprecated404Response|IngressTlsDeprecated\IngressTlsDeprecatedDefaultResponse OK
     */
    public function ingressTlsDeprecated(IngressTlsDeprecatedRequest $request): IngressTlsDeprecated200Response|IngressTlsDeprecated404Response|IngressTlsDeprecatedDefaultResponse
    {
        $httpRequest = new Request(IngressTlsDeprecatedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => IngressTlsDeprecated200Response::fromResponse($httpResponse),
            404 => IngressTlsDeprecated404Response::fromResponse($httpResponse),
            default => IngressTlsDeprecatedDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Update the tls settings of an Ingress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ingress-update-ingress-tls
     * @throws GuzzleException
     * @param IngressUpdateIngressTls\IngressUpdateIngressTlsRequest $request An object representing the request for this operation
     * @return IngressUpdateIngressTls\IngressUpdateIngressTls200Response|IngressUpdateIngressTls\IngressUpdateIngressTls404Response|IngressUpdateIngressTls\IngressUpdateIngressTlsDefaultResponse OK
     */
    public function ingressUpdateIngressTls(IngressUpdateIngressTlsRequest $request): IngressUpdateIngressTls200Response|IngressUpdateIngressTls404Response|IngressUpdateIngressTlsDefaultResponse
    {
        $httpRequest = new Request(IngressUpdateIngressTlsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => IngressUpdateIngressTls200Response::fromResponse($httpResponse),
            404 => IngressUpdateIngressTls404Response::fromResponse($httpResponse),
            default => IngressUpdateIngressTlsDefaultResponse::fromResponse($httpResponse),
        };
    }
}
