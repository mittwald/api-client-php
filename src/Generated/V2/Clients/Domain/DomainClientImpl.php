<?php

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use Mittwald\ApiClient\Client\EmptyResponse;
use Mittwald\ApiClient\Error\UnexpectedResponseException;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\AbortDomainDeclaration\AbortDomainDeclarationBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\AbortDomainDeclaration\AbortDomainDeclarationDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\AbortDomainDeclaration\AbortDomainDeclarationNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\AbortDomainDeclaration\AbortDomainDeclarationRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ChangeOwnercOfDomainV2Deprecated\ChangeOwnercOfDomainV2DeprecatedBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ChangeOwnercOfDomainV2Deprecated\ChangeOwnercOfDomainV2DeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ChangeOwnercOfDomainV2Deprecated\ChangeOwnercOfDomainV2DeprecatedNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ChangeOwnercOfDomainV2Deprecated\ChangeOwnercOfDomainV2DeprecatedOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ChangeOwnercOfDomainV2Deprecated\ChangeOwnercOfDomainV2DeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ChangeProjectOfDomainV2Deprecated\ChangeProjectOfDomainV2DeprecatedBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ChangeProjectOfDomainV2Deprecated\ChangeProjectOfDomainV2DeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ChangeProjectOfDomainV2Deprecated\ChangeProjectOfDomainV2DeprecatedNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ChangeProjectOfDomainV2Deprecated\ChangeProjectOfDomainV2DeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CheckDomainRegistrability\CheckDomainRegistrabilityBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CheckDomainRegistrability\CheckDomainRegistrabilityDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CheckDomainRegistrability\CheckDomainRegistrabilityOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CheckDomainRegistrability\CheckDomainRegistrabilityRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CheckDomainRegistrabilityV2Deprecated\CheckDomainRegistrabilityV2DeprecatedBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CheckDomainRegistrabilityV2Deprecated\CheckDomainRegistrabilityV2DeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CheckDomainRegistrabilityV2Deprecated\CheckDomainRegistrabilityV2DeprecatedOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CheckDomainRegistrabilityV2Deprecated\CheckDomainRegistrabilityV2DeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CreateDomainAuthCode\CreateDomainAuthCodeBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CreateDomainAuthCode\CreateDomainAuthCodeCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CreateDomainAuthCode\CreateDomainAuthCodeDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CreateDomainAuthCode\CreateDomainAuthCodeNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CreateDomainAuthCode\CreateDomainAuthCodeRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CreateDomainAuthCode2\CreateDomainAuthCode2BadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CreateDomainAuthCode2\CreateDomainAuthCode2DefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CreateDomainAuthCode2\CreateDomainAuthCode2NotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CreateDomainAuthCode2\CreateDomainAuthCode2Request;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareNameserversV2Deprecated\DeclareNameserversV2DeprecatedBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareNameserversV2Deprecated\DeclareNameserversV2DeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareNameserversV2Deprecated\DeclareNameserversV2DeprecatedNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareNameserversV2Deprecated\DeclareNameserversV2DeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareProcessChangeAuthcodeV2Deprecated\DeclareProcessChangeAuthcodeV2DeprecatedBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareProcessChangeAuthcodeV2Deprecated\DeclareProcessChangeAuthcodeV2DeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareProcessChangeAuthcodeV2Deprecated\DeclareProcessChangeAuthcodeV2DeprecatedNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareProcessChangeAuthcodeV2Deprecated\DeclareProcessChangeAuthcodeV2DeprecatedOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareProcessChangeAuthcodeV2Deprecated\DeclareProcessChangeAuthcodeV2DeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareProcessChangeHandlesV2Deprecated\DeclareProcessChangeHandlesV2DeprecatedBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareProcessChangeHandlesV2Deprecated\DeclareProcessChangeHandlesV2DeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareProcessChangeHandlesV2Deprecated\DeclareProcessChangeHandlesV2DeprecatedNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareProcessChangeHandlesV2Deprecated\DeclareProcessChangeHandlesV2DeprecatedOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareProcessChangeHandlesV2Deprecated\DeclareProcessChangeHandlesV2DeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeleteDomain\DeleteDomainBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeleteDomain\DeleteDomainDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeleteDomain\DeleteDomainNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeleteDomain\DeleteDomainOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeleteDomain\DeleteDomainRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainGetScreenshotForDomain\DeprecatedDomainGetScreenshotForDomainDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainGetScreenshotForDomain\DeprecatedDomainGetScreenshotForDomainNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainGetScreenshotForDomain\DeprecatedDomainGetScreenshotForDomainOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainGetScreenshotForDomain\DeprecatedDomainGetScreenshotForDomainRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsCreateDnsZone\DnsCreateDnsZoneBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsCreateDnsZone\DnsCreateDnsZoneCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsCreateDnsZone\DnsCreateDnsZoneDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsCreateDnsZone\DnsCreateDnsZoneRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsDeleteDnsZone\DnsDeleteDnsZoneBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsDeleteDnsZone\DnsDeleteDnsZoneDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsDeleteDnsZone\DnsDeleteDnsZoneRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsGetDnsZone\DnsGetDnsZoneBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsGetDnsZone\DnsGetDnsZoneDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsGetDnsZone\DnsGetDnsZoneOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsGetDnsZone\DnsGetDnsZoneRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsListDnsZones\DnsListDnsZonesBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsListDnsZones\DnsListDnsZonesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsListDnsZones\DnsListDnsZonesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsListDnsZones\DnsListDnsZonesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordASetCustomDeprecated\DnsRecordASetCustomDeprecatedBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordASetCustomDeprecated\DnsRecordASetCustomDeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordASetCustomDeprecated\DnsRecordASetCustomDeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordASetManagedByIngressDeprecated\DnsRecordASetManagedByIngressDeprecatedBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordASetManagedByIngressDeprecated\DnsRecordASetManagedByIngressDeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordASetManagedByIngressDeprecated\DnsRecordASetManagedByIngressDeprecatedNoContentResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordASetManagedByIngressDeprecated\DnsRecordASetManagedByIngressDeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordCnameSetDeprecated\DnsRecordCnameSetDeprecatedBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordCnameSetDeprecated\DnsRecordCnameSetDeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordCnameSetDeprecated\DnsRecordCnameSetDeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordMxSetCustomDeprecated\DnsRecordMxSetCustomDeprecatedBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordMxSetCustomDeprecated\DnsRecordMxSetCustomDeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordMxSetCustomDeprecated\DnsRecordMxSetCustomDeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordMxSetManagedDeprecated\DnsRecordMxSetManagedDeprecatedBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordMxSetManagedDeprecated\DnsRecordMxSetManagedDeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordMxSetManagedDeprecated\DnsRecordMxSetManagedDeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordSrvSetDeprecated\DnsRecordSrvSetDeprecatedBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordSrvSetDeprecated\DnsRecordSrvSetDeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordSrvSetDeprecated\DnsRecordSrvSetDeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordTxtSetDeprecated\DnsRecordTxtSetDeprecatedBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordTxtSetDeprecated\DnsRecordTxtSetDeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordTxtSetDeprecated\DnsRecordTxtSetDeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsSetRecordSetManaged\DnsSetRecordSetManagedBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsSetRecordSetManaged\DnsSetRecordSetManagedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsSetRecordSetManaged\DnsSetRecordSetManagedNoContentResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsSetRecordSetManaged\DnsSetRecordSetManagedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsUpdateRecordSet\DnsUpdateRecordSetBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsUpdateRecordSet\DnsUpdateRecordSetDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsUpdateRecordSet\DnsUpdateRecordSetRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetDomain\GetDomainBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetDomain\GetDomainDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetDomain\GetDomainNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetDomain\GetDomainOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetDomain\GetDomainRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetDomainOwnership\GetDomainOwnershipBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetDomainOwnership\GetDomainOwnershipDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetDomainOwnership\GetDomainOwnershipNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetDomainOwnership\GetDomainOwnershipOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetDomainOwnership\GetDomainOwnershipRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetHandleFieldsV2Deprecated\GetHandleFieldsV2DeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetHandleFieldsV2Deprecated\GetHandleFieldsV2DeprecatedOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetHandleFieldsV2Deprecated\GetHandleFieldsV2DeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetLatestScreenshot\GetLatestScreenshotDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetLatestScreenshot\GetLatestScreenshotNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetLatestScreenshot\GetLatestScreenshotOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetLatestScreenshot\GetLatestScreenshotRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressCreateIngress\IngressCreateIngressCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressCreateIngress\IngressCreateIngressDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressCreateIngress\IngressCreateIngressNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressCreateIngress\IngressCreateIngressRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressDeleteIngress\IngressDeleteIngressDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressDeleteIngress\IngressDeleteIngressNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressDeleteIngress\IngressDeleteIngressRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressGetIngress\IngressGetIngressDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressGetIngress\IngressGetIngressNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressGetIngress\IngressGetIngressOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressGetIngress\IngressGetIngressRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressListIngresses\IngressListIngressesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressListIngresses\IngressListIngressesNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressListIngresses\IngressListIngressesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressListIngresses\IngressListIngressesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressListIngressesV2Deprecated\IngressListIngressesV2DeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressListIngressesV2Deprecated\IngressListIngressesV2DeprecatedNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressListIngressesV2Deprecated\IngressListIngressesV2DeprecatedOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressListIngressesV2Deprecated\IngressListIngressesV2DeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressPathsDeprecated\IngressPathsDeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressPathsDeprecated\IngressPathsDeprecatedNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressPathsDeprecated\IngressPathsDeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressRequestIngressAcmeCertificateIssuance\IngressRequestIngressAcmeCertificateIssuanceBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressRequestIngressAcmeCertificateIssuance\IngressRequestIngressAcmeCertificateIssuanceDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressRequestIngressAcmeCertificateIssuance\IngressRequestIngressAcmeCertificateIssuanceNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressRequestIngressAcmeCertificateIssuance\IngressRequestIngressAcmeCertificateIssuanceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressTlsDeprecated\IngressTlsDeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressTlsDeprecated\IngressTlsDeprecatedNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressTlsDeprecated\IngressTlsDeprecatedOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressTlsDeprecated\IngressTlsDeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressUpdateIngressPaths\IngressUpdateIngressPathsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressUpdateIngressPaths\IngressUpdateIngressPathsNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressUpdateIngressPaths\IngressUpdateIngressPathsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressUpdateIngressTls\IngressUpdateIngressTlsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressUpdateIngressTls\IngressUpdateIngressTlsNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressUpdateIngressTls\IngressUpdateIngressTlsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressUpdateIngressTls\IngressUpdateIngressTlsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ListDomainOwnerships\ListDomainOwnershipsBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ListDomainOwnerships\ListDomainOwnershipsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ListDomainOwnerships\ListDomainOwnershipsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ListDomainOwnerships\ListDomainOwnershipsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ListDomains\ListDomainsBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ListDomains\ListDomainsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ListDomains\ListDomainsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ListDomains\ListDomainsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ListTldContactSchemas\ListTldContactSchemasDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ListTldContactSchemas\ListTldContactSchemasOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ListTldContactSchemas\ListTldContactSchemasRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ListTlds\ListTldsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ListTlds\ListTldsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ListTlds\ListTldsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ResendDomainEmail\ResendDomainEmailBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ResendDomainEmail\ResendDomainEmailDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ResendDomainEmail\ResendDomainEmailNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ResendDomainEmail\ResendDomainEmailRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainAuthCode\UpdateDomainAuthCodeBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainAuthCode\UpdateDomainAuthCodeDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainAuthCode\UpdateDomainAuthCodeNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainAuthCode\UpdateDomainAuthCodeOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainAuthCode\UpdateDomainAuthCodeRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainContact\UpdateDomainContactBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainContact\UpdateDomainContactDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainContact\UpdateDomainContactNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainContact\UpdateDomainContactOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainContact\UpdateDomainContactRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainNameservers\UpdateDomainNameserversBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainNameservers\UpdateDomainNameserversDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainNameservers\UpdateDomainNameserversNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainNameservers\UpdateDomainNameserversRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainProjectId\UpdateDomainProjectIdBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainProjectId\UpdateDomainProjectIdDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainProjectId\UpdateDomainProjectIdNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainProjectId\UpdateDomainProjectIdRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\VerifyDomainOwnership\VerifyDomainOwnershipBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\VerifyDomainOwnership\VerifyDomainOwnershipDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\VerifyDomainOwnership\VerifyDomainOwnershipNotFoundResponse;
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
class DomainClientImpl implements DomainClient
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
     * @throws UnexpectedResponseException
     * @param DeprecatedDomainGetScreenshotForDomain\DeprecatedDomainGetScreenshotForDomainRequest $request An object representing the request for this operation
     * @deprecated
     * @return DeprecatedDomainGetScreenshotForDomain\DeprecatedDomainGetScreenshotForDomainOKResponse The References.
     */
    public function deprecatedDomainGetScreenshotForDomain(DeprecatedDomainGetScreenshotForDomainRequest $request): DeprecatedDomainGetScreenshotForDomainOKResponse
    {
        $httpRequest = new Request(DeprecatedDomainGetScreenshotForDomainRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        if ($httpResponse->getStatusCode() === 200) {
            return DeprecatedDomainGetScreenshotForDomainOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => DeprecatedDomainGetScreenshotForDomainNotFoundResponse::fromResponse($httpResponse),
            default => DeprecatedDomainGetScreenshotForDomainDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Create a DNSZone.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/dns-create-dns-zone
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DnsCreateDnsZone\DnsCreateDnsZoneRequest $request An object representing the request for this operation
     * @return DnsCreateDnsZone\DnsCreateDnsZoneCreatedResponse The ID of the created DNSZone.
     */
    public function dnsCreateDnsZone(DnsCreateDnsZoneRequest $request): DnsCreateDnsZoneCreatedResponse
    {
        $httpRequest = new Request(DnsCreateDnsZoneRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        if ($httpResponse->getStatusCode() === 201) {
            return DnsCreateDnsZoneCreatedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DnsCreateDnsZoneBadRequestResponse::fromResponse($httpResponse),
            default => DnsCreateDnsZoneDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Delete a DNSZone.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/dns-delete-dns-zone
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DnsDeleteDnsZone\DnsDeleteDnsZoneRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function dnsDeleteDnsZone(DnsDeleteDnsZoneRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DnsDeleteDnsZoneRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        if ($httpResponse->getStatusCode() === 200) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DnsDeleteDnsZoneBadRequestResponse::fromResponse($httpResponse),
            default => DnsDeleteDnsZoneDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a DNSZone.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/dns-get-dns-zone
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DnsGetDnsZone\DnsGetDnsZoneRequest $request An object representing the request for this operation
     * @return DnsGetDnsZone\DnsGetDnsZoneOKResponse The requested DNSZone.
     */
    public function dnsGetDnsZone(DnsGetDnsZoneRequest $request): DnsGetDnsZoneOKResponse
    {
        $httpRequest = new Request(DnsGetDnsZoneRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        if ($httpResponse->getStatusCode() === 200) {
            return DnsGetDnsZoneOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DnsGetDnsZoneBadRequestResponse::fromResponse($httpResponse),
            default => DnsGetDnsZoneDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List DNSZones belonging to a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/dns-list-dns-zones
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DnsListDnsZones\DnsListDnsZonesRequest $request An object representing the request for this operation
     * @return DnsListDnsZones\DnsListDnsZonesOKResponse An array of DNSZone objects.
     */
    public function dnsListDnsZones(DnsListDnsZonesRequest $request): DnsListDnsZonesOKResponse
    {
        $httpRequest = new Request(DnsListDnsZonesRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        if ($httpResponse->getStatusCode() === 200) {
            return DnsListDnsZonesOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DnsListDnsZonesBadRequestResponse::fromResponse($httpResponse),
            default => DnsListDnsZonesDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * updates a-records for a specific zone
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/dns-record-a-set-custom-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DnsRecordASetCustomDeprecated\DnsRecordASetCustomDeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse recordset updated
     */
    public function dnsRecordASetCustomDeprecated(DnsRecordASetCustomDeprecatedRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DnsRecordASetCustomDeprecatedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DnsRecordASetCustomDeprecatedBadRequestResponse::fromResponse($httpResponse),
            default => DnsRecordASetCustomDeprecatedDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * set a-records managed by ingress for a specific zone
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/dns-record-a-set-managed-by-ingress-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DnsRecordASetManagedByIngressDeprecated\DnsRecordASetManagedByIngressDeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return DnsRecordASetManagedByIngressDeprecated\DnsRecordASetManagedByIngressDeprecatedNoContentResponse zone set managed by ingressId
     */
    public function dnsRecordASetManagedByIngressDeprecated(DnsRecordASetManagedByIngressDeprecatedRequest $request): DnsRecordASetManagedByIngressDeprecatedNoContentResponse
    {
        $httpRequest = new Request(DnsRecordASetManagedByIngressDeprecatedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        if ($httpResponse->getStatusCode() === 204) {
            return DnsRecordASetManagedByIngressDeprecatedNoContentResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DnsRecordASetManagedByIngressDeprecatedBadRequestResponse::fromResponse($httpResponse),
            default => DnsRecordASetManagedByIngressDeprecatedDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * updates cname-record for a specific zone
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/dns-record-cname-set-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DnsRecordCnameSetDeprecated\DnsRecordCnameSetDeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse recordset updated
     */
    public function dnsRecordCnameSetDeprecated(DnsRecordCnameSetDeprecatedRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DnsRecordCnameSetDeprecatedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DnsRecordCnameSetDeprecatedBadRequestResponse::fromResponse($httpResponse),
            default => DnsRecordCnameSetDeprecatedDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * updates mx-records for a specific zone
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/dns-record-mx-set-custom-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DnsRecordMxSetCustomDeprecated\DnsRecordMxSetCustomDeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse recordset updated
     */
    public function dnsRecordMxSetCustomDeprecated(DnsRecordMxSetCustomDeprecatedRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DnsRecordMxSetCustomDeprecatedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DnsRecordMxSetCustomDeprecatedBadRequestResponse::fromResponse($httpResponse),
            default => DnsRecordMxSetCustomDeprecatedDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * sets mx-records to managed for a specific zone
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/dns-record-mx-set-managed-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DnsRecordMxSetManagedDeprecated\DnsRecordMxSetManagedDeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse recordset updated
     */
    public function dnsRecordMxSetManagedDeprecated(DnsRecordMxSetManagedDeprecatedRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DnsRecordMxSetManagedDeprecatedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DnsRecordMxSetManagedDeprecatedBadRequestResponse::fromResponse($httpResponse),
            default => DnsRecordMxSetManagedDeprecatedDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * updates srv-records for a specific zone
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/dns-record-srv-set-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DnsRecordSrvSetDeprecated\DnsRecordSrvSetDeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse recordset updated
     */
    public function dnsRecordSrvSetDeprecated(DnsRecordSrvSetDeprecatedRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DnsRecordSrvSetDeprecatedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DnsRecordSrvSetDeprecatedBadRequestResponse::fromResponse($httpResponse),
            default => DnsRecordSrvSetDeprecatedDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * updates txt-records for a specific zone
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/dns-record-txt-set-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DnsRecordTxtSetDeprecated\DnsRecordTxtSetDeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse recordset updated
     */
    public function dnsRecordTxtSetDeprecated(DnsRecordTxtSetDeprecatedRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DnsRecordTxtSetDeprecatedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DnsRecordTxtSetDeprecatedBadRequestResponse::fromResponse($httpResponse),
            default => DnsRecordTxtSetDeprecatedDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Set a record set on a DNSZone to managed.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/dns-set-record-set-managed
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DnsSetRecordSetManaged\DnsSetRecordSetManagedRequest $request An object representing the request for this operation
     * @return DnsSetRecordSetManaged\DnsSetRecordSetManagedNoContentResponse The ID of the Ingress the a-records were set for, or an empty object if mx-records were set.
     */
    public function dnsSetRecordSetManaged(DnsSetRecordSetManagedRequest $request): DnsSetRecordSetManagedNoContentResponse
    {
        $httpRequest = new Request(DnsSetRecordSetManagedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        if ($httpResponse->getStatusCode() === 204) {
            return DnsSetRecordSetManagedNoContentResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DnsSetRecordSetManagedBadRequestResponse::fromResponse($httpResponse),
            default => DnsSetRecordSetManagedDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update a record set on a DNSZone.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/dns-update-record-set
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DnsUpdateRecordSet\DnsUpdateRecordSetRequest $request An object representing the request for this operation
     * @return EmptyResponse Record set updated.
     */
    public function dnsUpdateRecordSet(DnsUpdateRecordSetRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DnsUpdateRecordSetRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DnsUpdateRecordSetBadRequestResponse::fromResponse($httpResponse),
            default => DnsUpdateRecordSetDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Abort a Domain declaration.
     *
     * Abort an incomplete Domain registration/transfer.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-abort-domain-declaration
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param AbortDomainDeclaration\AbortDomainDeclarationRequest $request An object representing the request for this operation
     * @return EmptyResponse No Content
     */
    public function abortDomainDeclaration(AbortDomainDeclarationRequest $request): EmptyResponse
    {
        $httpRequest = new Request(AbortDomainDeclarationRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => AbortDomainDeclarationBadRequestResponse::fromResponse($httpResponse),
            404 => AbortDomainDeclarationNotFoundResponse::fromResponse($httpResponse),
            default => AbortDomainDeclarationDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Change the owner contact of a domain.
     *
     * Change the domain owner of a fully registered domain.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-change-ownerc-of-domain-v2-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ChangeOwnercOfDomainV2Deprecated\ChangeOwnercOfDomainV2DeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return ChangeOwnercOfDomainV2Deprecated\ChangeOwnercOfDomainV2DeprecatedOKResponse OK
     */
    public function changeOwnercOfDomainV2Deprecated(ChangeOwnercOfDomainV2DeprecatedRequest $request): ChangeOwnercOfDomainV2DeprecatedOKResponse
    {
        $httpRequest = new Request(ChangeOwnercOfDomainV2DeprecatedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        if ($httpResponse->getStatusCode() === 200) {
            return ChangeOwnercOfDomainV2DeprecatedOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ChangeOwnercOfDomainV2DeprecatedBadRequestResponse::fromResponse($httpResponse),
            404 => ChangeOwnercOfDomainV2DeprecatedNotFoundResponse::fromResponse($httpResponse),
            default => ChangeOwnercOfDomainV2DeprecatedDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Change the Project relation of a Domain.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-change-project-of-domain-v2-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ChangeProjectOfDomainV2Deprecated\ChangeProjectOfDomainV2DeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse No Content
     */
    public function changeProjectOfDomainV2Deprecated(ChangeProjectOfDomainV2DeprecatedRequest $request): EmptyResponse
    {
        $httpRequest = new Request(ChangeProjectOfDomainV2DeprecatedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ChangeProjectOfDomainV2DeprecatedBadRequestResponse::fromResponse($httpResponse),
            404 => ChangeProjectOfDomainV2DeprecatedNotFoundResponse::fromResponse($httpResponse),
            default => ChangeProjectOfDomainV2DeprecatedDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Check if a Domain is available to register.
     *
     * If false, you have to start a transfer with an auth code instead.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-check-domain-registrability
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CheckDomainRegistrability\CheckDomainRegistrabilityRequest $request An object representing the request for this operation
     * @return CheckDomainRegistrability\CheckDomainRegistrabilityOKResponse OK
     */
    public function checkDomainRegistrability(CheckDomainRegistrabilityRequest $request): CheckDomainRegistrabilityOKResponse
    {
        $httpRequest = new Request(CheckDomainRegistrabilityRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        if ($httpResponse->getStatusCode() === 200) {
            return CheckDomainRegistrabilityOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => CheckDomainRegistrabilityBadRequestResponse::fromResponse($httpResponse),
            default => CheckDomainRegistrabilityDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Check if a Domain is available to register.
     *
     * If false, you have to start a transfer with an auth code instead.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-check-domain-registrability-v2-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CheckDomainRegistrabilityV2Deprecated\CheckDomainRegistrabilityV2DeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return CheckDomainRegistrabilityV2Deprecated\CheckDomainRegistrabilityV2DeprecatedOKResponse OK
     */
    public function checkDomainRegistrabilityV2Deprecated(CheckDomainRegistrabilityV2DeprecatedRequest $request): CheckDomainRegistrabilityV2DeprecatedOKResponse
    {
        $httpRequest = new Request(CheckDomainRegistrabilityV2DeprecatedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        if ($httpResponse->getStatusCode() === 200) {
            return CheckDomainRegistrabilityV2DeprecatedOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => CheckDomainRegistrabilityV2DeprecatedBadRequestResponse::fromResponse($httpResponse),
            default => CheckDomainRegistrabilityV2DeprecatedDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Create an auth code for a Domains transfer-out process.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-create-domain-auth-code
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CreateDomainAuthCode\CreateDomainAuthCodeRequest $request An object representing the request for this operation
     * @return CreateDomainAuthCode\CreateDomainAuthCodeCreatedResponse Created
     */
    public function createDomainAuthCode(CreateDomainAuthCodeRequest $request): CreateDomainAuthCodeCreatedResponse
    {
        $httpRequest = new Request(CreateDomainAuthCodeRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        if ($httpResponse->getStatusCode() === 201) {
            return CreateDomainAuthCodeCreatedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => CreateDomainAuthCodeBadRequestResponse::fromResponse($httpResponse),
            404 => CreateDomainAuthCodeNotFoundResponse::fromResponse($httpResponse),
            default => CreateDomainAuthCodeDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Create an auth code 2.
     *
     * Start an auth code 2 process for a DENIC Domain. You will receive a letter from DENIC.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-create-domain-auth-code-2
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CreateDomainAuthCode2\CreateDomainAuthCode2Request $request An object representing the request for this operation
     * @return EmptyResponse No Content
     */
    public function createDomainAuthCode2(CreateDomainAuthCode2Request $request): EmptyResponse
    {
        $httpRequest = new Request(CreateDomainAuthCode2Request::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => CreateDomainAuthCode2BadRequestResponse::fromResponse($httpResponse),
            404 => CreateDomainAuthCode2NotFoundResponse::fromResponse($httpResponse),
            default => CreateDomainAuthCode2DefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Change all nameservers of a Domain.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-declare-nameservers-v2-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeclareNameserversV2Deprecated\DeclareNameserversV2DeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse No Content
     */
    public function declareNameserversV2Deprecated(DeclareNameserversV2DeprecatedRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeclareNameserversV2DeprecatedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeclareNameserversV2DeprecatedBadRequestResponse::fromResponse($httpResponse),
            404 => DeclareNameserversV2DeprecatedNotFoundResponse::fromResponse($httpResponse),
            default => DeclareNameserversV2DeprecatedDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update an AuthCode.
     *
     * Change a wrong AuthCode of your transfer domain request (declare domain process). This route will also restart the transfer itself.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-declare-process-change-authcode-v2-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeclareProcessChangeAuthcodeV2Deprecated\DeclareProcessChangeAuthcodeV2DeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return DeclareProcessChangeAuthcodeV2Deprecated\DeclareProcessChangeAuthcodeV2DeprecatedOKResponse OK
     */
    public function declareProcessChangeAuthcodeV2Deprecated(DeclareProcessChangeAuthcodeV2DeprecatedRequest $request): DeclareProcessChangeAuthcodeV2DeprecatedOKResponse
    {
        $httpRequest = new Request(DeclareProcessChangeAuthcodeV2DeprecatedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        if ($httpResponse->getStatusCode() === 200) {
            return DeclareProcessChangeAuthcodeV2DeprecatedOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeclareProcessChangeAuthcodeV2DeprecatedBadRequestResponse::fromResponse($httpResponse),
            404 => DeclareProcessChangeAuthcodeV2DeprecatedNotFoundResponse::fromResponse($httpResponse),
            default => DeclareProcessChangeAuthcodeV2DeprecatedDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update a Domain's OwnerC handle.
     *
     * This route will also restart the transfer or register itself.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-declare-process-change-handles-v2-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeclareProcessChangeHandlesV2Deprecated\DeclareProcessChangeHandlesV2DeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return DeclareProcessChangeHandlesV2Deprecated\DeclareProcessChangeHandlesV2DeprecatedOKResponse OK
     */
    public function declareProcessChangeHandlesV2Deprecated(DeclareProcessChangeHandlesV2DeprecatedRequest $request): DeclareProcessChangeHandlesV2DeprecatedOKResponse
    {
        $httpRequest = new Request(DeclareProcessChangeHandlesV2DeprecatedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        if ($httpResponse->getStatusCode() === 200) {
            return DeclareProcessChangeHandlesV2DeprecatedOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeclareProcessChangeHandlesV2DeprecatedBadRequestResponse::fromResponse($httpResponse),
            404 => DeclareProcessChangeHandlesV2DeprecatedNotFoundResponse::fromResponse($httpResponse),
            default => DeclareProcessChangeHandlesV2DeprecatedDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Delete a Domain.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-delete-domain
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteDomain\DeleteDomainRequest $request An object representing the request for this operation
     * @return DeleteDomain\DeleteDomainOKResponse OK
     */
    public function deleteDomain(DeleteDomainRequest $request): DeleteDomainOKResponse
    {
        $httpRequest = new Request(DeleteDomainRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        if ($httpResponse->getStatusCode() === 200) {
            return DeleteDomainOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeleteDomainBadRequestResponse::fromResponse($httpResponse),
            404 => DeleteDomainNotFoundResponse::fromResponse($httpResponse),
            default => DeleteDomainDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a Domain.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-get-domain
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetDomain\GetDomainRequest $request An object representing the request for this operation
     * @return GetDomain\GetDomainOKResponse OK
     */
    public function getDomain(GetDomainRequest $request): GetDomainOKResponse
    {
        $httpRequest = new Request(GetDomainRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        if ($httpResponse->getStatusCode() === 200) {
            return GetDomainOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => GetDomainBadRequestResponse::fromResponse($httpResponse),
            404 => GetDomainNotFoundResponse::fromResponse($httpResponse),
            default => GetDomainDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a DomainOwnership.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-get-domain-ownership
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetDomainOwnership\GetDomainOwnershipRequest $request An object representing the request for this operation
     * @return GetDomainOwnership\GetDomainOwnershipOKResponse OK
     */
    public function getDomainOwnership(GetDomainOwnershipRequest $request): GetDomainOwnershipOKResponse
    {
        $httpRequest = new Request(GetDomainOwnershipRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        if ($httpResponse->getStatusCode() === 200) {
            return GetDomainOwnershipOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => GetDomainOwnershipBadRequestResponse::fromResponse($httpResponse),
            404 => GetDomainOwnershipNotFoundResponse::fromResponse($httpResponse),
            default => GetDomainOwnershipDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a HandleSchema.
     *
     * Get required handle fields of a registrar for your domain process (transfer/registration).
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-get-handle-fields-v2-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetHandleFieldsV2Deprecated\GetHandleFieldsV2DeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return GetHandleFieldsV2Deprecated\GetHandleFieldsV2DeprecatedOKResponse The parseable json schema objects
     */
    public function getHandleFieldsV2Deprecated(GetHandleFieldsV2DeprecatedRequest $request): GetHandleFieldsV2DeprecatedOKResponse
    {
        $httpRequest = new Request(GetHandleFieldsV2DeprecatedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        if ($httpResponse->getStatusCode() === 200) {
            return GetHandleFieldsV2DeprecatedOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            default => GetHandleFieldsV2DeprecatedDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get the latest screenshot's FileReference belonging to a Domain.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-get-latest-screenshot
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetLatestScreenshot\GetLatestScreenshotRequest $request An object representing the request for this operation
     * @return GetLatestScreenshot\GetLatestScreenshotOKResponse OK
     */
    public function getLatestScreenshot(GetLatestScreenshotRequest $request): GetLatestScreenshotOKResponse
    {
        $httpRequest = new Request(GetLatestScreenshotRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        if ($httpResponse->getStatusCode() === 200) {
            return GetLatestScreenshotOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => GetLatestScreenshotNotFoundResponse::fromResponse($httpResponse),
            default => GetLatestScreenshotDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List the DomainOwnerships of a project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-list-domain-ownerships
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListDomainOwnerships\ListDomainOwnershipsRequest $request An object representing the request for this operation
     * @return ListDomainOwnerships\ListDomainOwnershipsOKResponse OK
     */
    public function listDomainOwnerships(ListDomainOwnershipsRequest $request): ListDomainOwnershipsOKResponse
    {
        $httpRequest = new Request(ListDomainOwnershipsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        if ($httpResponse->getStatusCode() === 200) {
            return ListDomainOwnershipsOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ListDomainOwnershipsBadRequestResponse::fromResponse($httpResponse),
            default => ListDomainOwnershipsDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List Domains belonging to a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-list-domains
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListDomains\ListDomainsRequest $request An object representing the request for this operation
     * @return ListDomains\ListDomainsOKResponse OK
     */
    public function listDomains(ListDomainsRequest $request): ListDomainsOKResponse
    {
        $httpRequest = new Request(ListDomainsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        if ($httpResponse->getStatusCode() === 200) {
            return ListDomainsOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ListDomainsBadRequestResponse::fromResponse($httpResponse),
            default => ListDomainsDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List the contact schemas for a TLD.
     *
     * List the contact schemas describing the fields required to register/transfer a Domain.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-list-tld-contact-schemas
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListTldContactSchemas\ListTldContactSchemasRequest $request An object representing the request for this operation
     * @return ListTldContactSchemas\ListTldContactSchemasOKResponse The JSON-Schema objects.
     */
    public function listTldContactSchemas(ListTldContactSchemasRequest $request): ListTldContactSchemasOKResponse
    {
        $httpRequest = new Request(ListTldContactSchemasRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        if ($httpResponse->getStatusCode() === 200) {
            return ListTldContactSchemasOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            default => ListTldContactSchemasDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List TLDs.
     *
     * List the top level domains currently supported by our API.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-list-tlds
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListTlds\ListTldsRequest $request An object representing the request for this operation
     * @return ListTlds\ListTldsOKResponse
     */
    public function listTlds(ListTldsRequest $request): ListTldsOKResponse
    {
        $httpRequest = new Request(ListTldsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        if ($httpResponse->getStatusCode() === 200) {
            return ListTldsOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            default => ListTldsDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Resend a Domain email.
     *
     * Trigger a resend of a confirmation or registrant verification email. Has no effect on .de Domains.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-resend-domain-email
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ResendDomainEmail\ResendDomainEmailRequest $request An object representing the request for this operation
     * @return EmptyResponse No Content
     */
    public function resendDomainEmail(ResendDomainEmailRequest $request): EmptyResponse
    {
        $httpRequest = new Request(ResendDomainEmailRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ResendDomainEmailBadRequestResponse::fromResponse($httpResponse),
            404 => ResendDomainEmailNotFoundResponse::fromResponse($httpResponse),
            default => ResendDomainEmailDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update the auth code of a Domain.
     *
     * Update an incorrect auth code of an ongoing/failed Domain transfer. This route will also restart the transfer itself.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-update-domain-auth-code
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateDomainAuthCode\UpdateDomainAuthCodeRequest $request An object representing the request for this operation
     * @return UpdateDomainAuthCode\UpdateDomainAuthCodeOKResponse OK
     */
    public function updateDomainAuthCode(UpdateDomainAuthCodeRequest $request): UpdateDomainAuthCodeOKResponse
    {
        $httpRequest = new Request(UpdateDomainAuthCodeRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        if ($httpResponse->getStatusCode() === 200) {
            return UpdateDomainAuthCodeOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateDomainAuthCodeBadRequestResponse::fromResponse($httpResponse),
            404 => UpdateDomainAuthCodeNotFoundResponse::fromResponse($httpResponse),
            default => UpdateDomainAuthCodeDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update a contact of a Domain.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-update-domain-contact
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateDomainContact\UpdateDomainContactRequest $request An object representing the request for this operation
     * @return UpdateDomainContact\UpdateDomainContactOKResponse OK
     */
    public function updateDomainContact(UpdateDomainContactRequest $request): UpdateDomainContactOKResponse
    {
        $httpRequest = new Request(UpdateDomainContactRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        if ($httpResponse->getStatusCode() === 200) {
            return UpdateDomainContactOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateDomainContactBadRequestResponse::fromResponse($httpResponse),
            404 => UpdateDomainContactNotFoundResponse::fromResponse($httpResponse),
            default => UpdateDomainContactDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update the nameservers of a Domain.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-update-domain-nameservers
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateDomainNameservers\UpdateDomainNameserversRequest $request An object representing the request for this operation
     * @return EmptyResponse No Content
     */
    public function updateDomainNameservers(UpdateDomainNameserversRequest $request): EmptyResponse
    {
        $httpRequest = new Request(UpdateDomainNameserversRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateDomainNameserversBadRequestResponse::fromResponse($httpResponse),
            404 => UpdateDomainNameserversNotFoundResponse::fromResponse($httpResponse),
            default => UpdateDomainNameserversDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update a Domain's project id.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-update-domain-project-id
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateDomainProjectId\UpdateDomainProjectIdRequest $request An object representing the request for this operation
     * @return EmptyResponse No Content
     */
    public function updateDomainProjectId(UpdateDomainProjectIdRequest $request): EmptyResponse
    {
        $httpRequest = new Request(UpdateDomainProjectIdRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateDomainProjectIdBadRequestResponse::fromResponse($httpResponse),
            404 => UpdateDomainProjectIdNotFoundResponse::fromResponse($httpResponse),
            default => UpdateDomainProjectIdDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Verify a DomainOwnership.
     *
     * Verify your access to a Domain with an already set TXT Record. On success, the domain will be linked with the webserver.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-verify-domain-ownership
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param VerifyDomainOwnership\VerifyDomainOwnershipRequest $request An object representing the request for this operation
     * @return EmptyResponse No Content
     */
    public function verifyDomainOwnership(VerifyDomainOwnershipRequest $request): EmptyResponse
    {
        $httpRequest = new Request(VerifyDomainOwnershipRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => VerifyDomainOwnershipBadRequestResponse::fromResponse($httpResponse),
            404 => VerifyDomainOwnershipNotFoundResponse::fromResponse($httpResponse),
            default => VerifyDomainOwnershipDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Create an Ingress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ingress-create-ingress
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param IngressCreateIngress\IngressCreateIngressRequest $request An object representing the request for this operation
     * @return IngressCreateIngress\IngressCreateIngressCreatedResponse Created
     */
    public function ingressCreateIngress(IngressCreateIngressRequest $request): IngressCreateIngressCreatedResponse
    {
        $httpRequest = new Request(IngressCreateIngressRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        if ($httpResponse->getStatusCode() === 201) {
            return IngressCreateIngressCreatedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => IngressCreateIngressNotFoundResponse::fromResponse($httpResponse),
            default => IngressCreateIngressDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Delete an Ingress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ingress-delete-ingress
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param IngressDeleteIngress\IngressDeleteIngressRequest $request An object representing the request for this operation
     * @return EmptyResponse No Content
     */
    public function ingressDeleteIngress(IngressDeleteIngressRequest $request): EmptyResponse
    {
        $httpRequest = new Request(IngressDeleteIngressRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => IngressDeleteIngressNotFoundResponse::fromResponse($httpResponse),
            default => IngressDeleteIngressDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get an Ingress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ingress-get-ingress
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param IngressGetIngress\IngressGetIngressRequest $request An object representing the request for this operation
     * @return IngressGetIngress\IngressGetIngressOKResponse OK
     */
    public function ingressGetIngress(IngressGetIngressRequest $request): IngressGetIngressOKResponse
    {
        $httpRequest = new Request(IngressGetIngressRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        if ($httpResponse->getStatusCode() === 200) {
            return IngressGetIngressOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => IngressGetIngressNotFoundResponse::fromResponse($httpResponse),
            default => IngressGetIngressDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List Ingresses.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ingress-list-ingresses
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param IngressListIngresses\IngressListIngressesRequest $request An object representing the request for this operation
     * @return IngressListIngresses\IngressListIngressesOKResponse OK
     */
    public function ingressListIngresses(IngressListIngressesRequest $request): IngressListIngressesOKResponse
    {
        $httpRequest = new Request(IngressListIngressesRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        if ($httpResponse->getStatusCode() === 200) {
            return IngressListIngressesOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => IngressListIngressesNotFoundResponse::fromResponse($httpResponse),
            default => IngressListIngressesDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List Ingresses belonging to a project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ingress-list-ingresses-v2-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param IngressListIngressesV2Deprecated\IngressListIngressesV2DeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return IngressListIngressesV2Deprecated\IngressListIngressesV2DeprecatedOKResponse OK
     */
    public function ingressListIngressesV2Deprecated(IngressListIngressesV2DeprecatedRequest $request): IngressListIngressesV2DeprecatedOKResponse
    {
        $httpRequest = new Request(IngressListIngressesV2DeprecatedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        if ($httpResponse->getStatusCode() === 200) {
            return IngressListIngressesV2DeprecatedOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => IngressListIngressesV2DeprecatedNotFoundResponse::fromResponse($httpResponse),
            default => IngressListIngressesV2DeprecatedDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update an Ingresses paths.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ingress-paths-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param IngressPathsDeprecated\IngressPathsDeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse No Content
     */
    public function ingressPathsDeprecated(IngressPathsDeprecatedRequest $request): EmptyResponse
    {
        $httpRequest = new Request(IngressPathsDeprecatedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->toJson()['body'],
        ]);
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => IngressPathsDeprecatedNotFoundResponse::fromResponse($httpResponse),
            default => IngressPathsDeprecatedDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Request the ACME certificate issuance of an Ingress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ingress-request-ingress-acme-certificate-issuance
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param IngressRequestIngressAcmeCertificateIssuance\IngressRequestIngressAcmeCertificateIssuanceRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function ingressRequestIngressAcmeCertificateIssuance(IngressRequestIngressAcmeCertificateIssuanceRequest $request): EmptyResponse
    {
        $httpRequest = new Request(IngressRequestIngressAcmeCertificateIssuanceRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        if ($httpResponse->getStatusCode() === 200) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => IngressRequestIngressAcmeCertificateIssuanceBadRequestResponse::fromResponse($httpResponse),
            404 => IngressRequestIngressAcmeCertificateIssuanceNotFoundResponse::fromResponse($httpResponse),
            default => IngressRequestIngressAcmeCertificateIssuanceDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update an Ingresses tls settings.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ingress-tls-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param IngressTlsDeprecated\IngressTlsDeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return IngressTlsDeprecated\IngressTlsDeprecatedOKResponse OK
     */
    public function ingressTlsDeprecated(IngressTlsDeprecatedRequest $request): IngressTlsDeprecatedOKResponse
    {
        $httpRequest = new Request(IngressTlsDeprecatedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        if ($httpResponse->getStatusCode() === 200) {
            return IngressTlsDeprecatedOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => IngressTlsDeprecatedNotFoundResponse::fromResponse($httpResponse),
            default => IngressTlsDeprecatedDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update the paths of an Ingress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ingress-update-ingress-paths
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param IngressUpdateIngressPaths\IngressUpdateIngressPathsRequest $request An object representing the request for this operation
     * @return EmptyResponse No Content
     */
    public function ingressUpdateIngressPaths(IngressUpdateIngressPathsRequest $request): EmptyResponse
    {
        $httpRequest = new Request(IngressUpdateIngressPathsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->toJson()['body'],
        ]);
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => IngressUpdateIngressPathsNotFoundResponse::fromResponse($httpResponse),
            default => IngressUpdateIngressPathsDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update the tls settings of an Ingress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ingress-update-ingress-tls
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param IngressUpdateIngressTls\IngressUpdateIngressTlsRequest $request An object representing the request for this operation
     * @return IngressUpdateIngressTls\IngressUpdateIngressTlsOKResponse OK
     */
    public function ingressUpdateIngressTls(IngressUpdateIngressTlsRequest $request): IngressUpdateIngressTlsOKResponse
    {
        $httpRequest = new Request(IngressUpdateIngressTlsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        if ($httpResponse->getStatusCode() === 200) {
            return IngressUpdateIngressTlsOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => IngressUpdateIngressTlsNotFoundResponse::fromResponse($httpResponse),
            default => IngressUpdateIngressTlsDefaultResponse::fromResponse($httpResponse),
        });
    }
}
