<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain;

use GuzzleHttp\Exception\GuzzleException;
use Mittwald\ApiClient\Client\EmptyResponse;
use Mittwald\ApiClient\Error\UnexpectedResponseException;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\AbortDomainDeclaration\AbortDomainDeclarationRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CheckDomainRegistrability\CheckDomainRegistrabilityOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CheckDomainRegistrability\CheckDomainRegistrabilityRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CheckDomainTransferability\CheckDomainTransferabilityOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CheckDomainTransferability\CheckDomainTransferabilityRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CreateDomainAuthCode\CreateDomainAuthCodeCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CreateDomainAuthCode\CreateDomainAuthCodeRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeleteDomain\DeleteDomainOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeleteDomain\DeleteDomainRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDnsRecordASetCustom\DeprecatedDnsRecordASetCustomRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDnsRecordASetManagedByIngress\DeprecatedDnsRecordASetManagedByIngressNoContentResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDnsRecordASetManagedByIngress\DeprecatedDnsRecordASetManagedByIngressRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDnsRecordCnameSet\DeprecatedDnsRecordCnameSetRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDnsRecordMxSetCustom\DeprecatedDnsRecordMxSetCustomRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDnsRecordMxSetManaged\DeprecatedDnsRecordMxSetManagedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDnsRecordSrvSet\DeprecatedDnsRecordSrvSetRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDnsRecordTxtSet\DeprecatedDnsRecordTxtSetRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainChangeOwnercOfDomain\DeprecatedDomainChangeOwnercOfDomainOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainChangeOwnercOfDomain\DeprecatedDomainChangeOwnercOfDomainRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainChangeProjectOfDomain\DeprecatedDomainChangeProjectOfDomainRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainCheckDomainRegistrability\DeprecatedDomainCheckDomainRegistrabilityOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainCheckDomainRegistrability\DeprecatedDomainCheckDomainRegistrabilityRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainDeclareNameservers\DeprecatedDomainDeclareNameserversRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainDeclareProcessChangeAuthcode\DeprecatedDomainDeclareProcessChangeAuthcodeOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainDeclareProcessChangeAuthcode\DeprecatedDomainDeclareProcessChangeAuthcodeRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainDeclareProcessChangeHandles\DeprecatedDomainDeclareProcessChangeHandlesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainDeclareProcessChangeHandles\DeprecatedDomainDeclareProcessChangeHandlesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainGetHandleFields\DeprecatedDomainGetHandleFieldsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainGetHandleFields\DeprecatedDomainGetHandleFieldsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainGetScreenshotForDomain\DeprecatedDomainGetScreenshotForDomainOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainGetScreenshotForDomain\DeprecatedDomainGetScreenshotForDomainRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainListDomains\DeprecatedDomainListDomainsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainListDomains\DeprecatedDomainListDomainsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedIngressListIngresses\DeprecatedIngressListIngressesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedIngressListIngresses\DeprecatedIngressListIngressesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedIngressPaths\DeprecatedIngressPathsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedIngressTls\DeprecatedIngressTlsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedIngressTls\DeprecatedIngressTlsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsCreateDnsZone\DnsCreateDnsZoneCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsCreateDnsZone\DnsCreateDnsZoneRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsDeleteDnsZone\DnsDeleteDnsZoneRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsGetDnsZone\DnsGetDnsZoneOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsGetDnsZone\DnsGetDnsZoneRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsListDnsZones\DnsListDnsZonesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsListDnsZones\DnsListDnsZonesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsSetRecordSetManaged\DnsSetRecordSetManagedOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsSetRecordSetManaged\DnsSetRecordSetManagedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsUpdateRecordSet\DnsUpdateRecordSetRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetDomain\GetDomainOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetDomain\GetDomainRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetLatestScreenshot\GetLatestScreenshotOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetLatestScreenshot\GetLatestScreenshotRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressCreateIngress\IngressCreateIngressCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressCreateIngress\IngressCreateIngressRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressDeleteIngress\IngressDeleteIngressRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressGetIngress\IngressGetIngressOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressGetIngress\IngressGetIngressRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressIngressVerifyOwnership\IngressIngressVerifyOwnershipOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressIngressVerifyOwnership\IngressIngressVerifyOwnershipRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressListIngresses\IngressListIngressesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressListIngresses\IngressListIngressesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressListIngressesCompatibleWithCertificate\IngressListIngressesCompatibleWithCertificateOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressListIngressesCompatibleWithCertificate\IngressListIngressesCompatibleWithCertificateRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressRequestIngressAcmeCertificateIssuance\IngressRequestIngressAcmeCertificateIssuanceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressUpdateIngressPaths\IngressUpdateIngressPathsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressUpdateIngressTls\IngressUpdateIngressTlsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressUpdateIngressTls\IngressUpdateIngressTlsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ListDomains\ListDomainsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ListDomains\ListDomainsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ListTldContactSchemas\ListTldContactSchemasOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ListTldContactSchemas\ListTldContactSchemasRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ListTlds\ListTldsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ListTlds\ListTldsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ResendDomainEmail\ResendDomainEmailRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslCheckReplaceCertificate\SslCheckReplaceCertificateOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslCheckReplaceCertificate\SslCheckReplaceCertificateRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslCreateCertificateRequest\SslCreateCertificateRequestCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslCreateCertificateRequest\SslCreateCertificateRequestRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslDeleteCertificate\SslDeleteCertificateRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslDeleteCertificateRequest\SslDeleteCertificateRequestRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslGetCertificate\SslGetCertificateOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslGetCertificate\SslGetCertificateRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslGetCertificateRequest\SslGetCertificateRequestOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslGetCertificateRequest\SslGetCertificateRequestRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslListCertificateRequests\SslListCertificateRequestsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslListCertificateRequests\SslListCertificateRequestsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslListCertificates\SslListCertificatesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslListCertificates\SslListCertificatesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslReplaceCertificate\SslReplaceCertificateRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\Suggest\SuggestOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\Suggest\SuggestRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainAuthCode\UpdateDomainAuthCodeOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainAuthCode\UpdateDomainAuthCodeRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainContact\UpdateDomainContactOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainContact\UpdateDomainContactRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainNameservers\UpdateDomainNameserversRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainProjectId\UpdateDomainProjectIdRequest;

/**
 * Client for Domain API
 *
 * The domain API allows you to manage your domains, DNS records, SSL certificates
 * and ingress resources.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
interface DomainClient
{
    /**
     * updates a-records for a specific zone
     *
     * This operation is deprecated. Use the PUT v2/dns-zones/{dnsZoneId}/record-sets/{recordSet} endpoint instead.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/deprecated-dns-record-a-set-custom
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedDnsRecordASetCustomRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse recordset updated
     */
    public function deprecatedDnsRecordASetCustom(DeprecatedDnsRecordASetCustomRequest $request): EmptyResponse;
    /**
     * set a-records managed by ingress for a specific zone
     *
     * This operation is deprecated. Use the POST v2/dns-zones/{dnsZoneId}/record-sets/{recordSet}/actions/set-managed endpoint instead.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/deprecated-dns-record-a-set-managed-by-ingress
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedDnsRecordASetManagedByIngressRequest $request An object representing the request for this operation
     * @deprecated
     * @return DeprecatedDnsRecordASetManagedByIngressNoContentResponse zone set managed by ingressId
     */
    public function deprecatedDnsRecordASetManagedByIngress(DeprecatedDnsRecordASetManagedByIngressRequest $request): DeprecatedDnsRecordASetManagedByIngressNoContentResponse;
    /**
     * updates cname-record for a specific zone
     *
     * This operation is deprecated. Use the PUT v2/dns-zones/{dnsZoneId}/record-sets/{recordSet} endpoint instead.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/deprecated-dns-record-cname-set
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedDnsRecordCnameSetRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse recordset updated
     */
    public function deprecatedDnsRecordCnameSet(DeprecatedDnsRecordCnameSetRequest $request): EmptyResponse;
    /**
     * updates mx-records for a specific zone
     *
     * This operation is deprecated. Use the PUT v2/dns-zones/{dnsZoneId}/record-sets/{recordSet} endpoint instead.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/deprecated-dns-record-mx-set-custom
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedDnsRecordMxSetCustomRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse recordset updated
     */
    public function deprecatedDnsRecordMxSetCustom(DeprecatedDnsRecordMxSetCustomRequest $request): EmptyResponse;
    /**
     * sets mx-records to managed for a specific zone
     *
     * This operation is deprecated. Use the POST v2/dns-zones/{dnsZoneId}/record-sets/{recordSet}/actions/set-managed endpoint instead.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/deprecated-dns-record-mx-set-managed
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedDnsRecordMxSetManagedRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse recordset updated
     */
    public function deprecatedDnsRecordMxSetManaged(DeprecatedDnsRecordMxSetManagedRequest $request): EmptyResponse;
    /**
     * updates srv-records for a specific zone
     *
     * This operation is deprecated. Use the PUT v2/dns-zones/{dnsZoneId}/record-sets/{recordSet} endpoint instead.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/deprecated-dns-record-srv-set
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedDnsRecordSrvSetRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse recordset updated
     */
    public function deprecatedDnsRecordSrvSet(DeprecatedDnsRecordSrvSetRequest $request): EmptyResponse;
    /**
     * updates txt-records for a specific zone
     *
     * This operation is deprecated. Use the PUT v2/dns-zones/{dnsZoneId}/record-sets/{recordSet} endpoint instead.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/deprecated-dns-record-txt-set
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedDnsRecordTxtSetRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse recordset updated
     */
    public function deprecatedDnsRecordTxtSet(DeprecatedDnsRecordTxtSetRequest $request): EmptyResponse;
    /**
     * Change the owner contact of a domain.
     *
     * This operation is deprecated. Use the PATCH /v2/domains/{domainId}/contacts/{contact} endpoint instead.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/deprecated-domain-change-ownerc-of-domain
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedDomainChangeOwnercOfDomainRequest $request An object representing the request for this operation
     * @deprecated
     * @return DeprecatedDomainChangeOwnercOfDomainOKResponse OK
     */
    public function deprecatedDomainChangeOwnercOfDomain(DeprecatedDomainChangeOwnercOfDomainRequest $request): DeprecatedDomainChangeOwnercOfDomainOKResponse;
    /**
     * Change the Project relation of a Domain.
     *
     * This operation is deprecated. Use the PATCH /v2/domains/{domainId}/project-id endpoint instead.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/deprecated-domain-change-project-of-domain
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedDomainChangeProjectOfDomainRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse No Content
     */
    public function deprecatedDomainChangeProjectOfDomain(DeprecatedDomainChangeProjectOfDomainRequest $request): EmptyResponse;
    /**
     * Check if a Domain is available to register.
     *
     * This operation is deprecated. Use the POST /v2/domain-registrable endpoint instead.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/deprecated-domain-check-domain-registrability
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedDomainCheckDomainRegistrabilityRequest $request An object representing the request for this operation
     * @deprecated
     * @return DeprecatedDomainCheckDomainRegistrabilityOKResponse OK
     */
    public function deprecatedDomainCheckDomainRegistrability(DeprecatedDomainCheckDomainRegistrabilityRequest $request): DeprecatedDomainCheckDomainRegistrabilityOKResponse;
    /**
     * Change all nameservers of a Domain.
     *
     * This operation is deprecated. Use the PATCH /v2/domains/{domainId}/nameservers endpoint instead.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/deprecated-domain-declare-nameservers
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedDomainDeclareNameserversRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse No Content
     */
    public function deprecatedDomainDeclareNameservers(DeprecatedDomainDeclareNameserversRequest $request): EmptyResponse;
    /**
     * Update an AuthCode.
     *
     * This operation is deprecated. Use the PATCH /v2/domains/{domainId}/auth-code endpoint instead.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/deprecated-domain-declare-process-change-authcode
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedDomainDeclareProcessChangeAuthcodeRequest $request An object representing the request for this operation
     * @deprecated
     * @return DeprecatedDomainDeclareProcessChangeAuthcodeOKResponse OK
     */
    public function deprecatedDomainDeclareProcessChangeAuthcode(DeprecatedDomainDeclareProcessChangeAuthcodeRequest $request): DeprecatedDomainDeclareProcessChangeAuthcodeOKResponse;
    /**
     * Update a Domain's OwnerC handle.
     *
     * This operation is deprecated and does not have an alternative.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/deprecated-domain-declare-process-change-handles
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedDomainDeclareProcessChangeHandlesRequest $request An object representing the request for this operation
     * @deprecated
     * @return DeprecatedDomainDeclareProcessChangeHandlesOKResponse OK
     */
    public function deprecatedDomainDeclareProcessChangeHandles(DeprecatedDomainDeclareProcessChangeHandlesRequest $request): DeprecatedDomainDeclareProcessChangeHandlesOKResponse;
    /**
     * Get a HandleSchema.
     *
     * This operation is deprecated. Use the GET /v2/domain-tlds/{tld}/contact-schemas endpoint instead.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/deprecated-domain-get-handle-fields
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedDomainGetHandleFieldsRequest $request An object representing the request for this operation
     * @deprecated
     * @return DeprecatedDomainGetHandleFieldsOKResponse The parseable json schema objects
     */
    public function deprecatedDomainGetHandleFields(DeprecatedDomainGetHandleFieldsRequest $request): DeprecatedDomainGetHandleFieldsOKResponse;
    /**
     * Get File Service Reference for a Screenshot of a domain.
     *
     * Deprecated by `GET /v2/domains/{domainId}/latest-screenshot`.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/deprecated-domain-get-screenshot-for-domain
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedDomainGetScreenshotForDomainRequest $request An object representing the request for this operation
     * @deprecated
     * @return DeprecatedDomainGetScreenshotForDomainOKResponse The References.
     */
    public function deprecatedDomainGetScreenshotForDomain(DeprecatedDomainGetScreenshotForDomainRequest $request): DeprecatedDomainGetScreenshotForDomainOKResponse;
    /**
     * List Domains belonging to a Project.
     *
     * This operation is deprecated. Use the GET /v2/domains endpoint instead.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/deprecated-domain-list-domains
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedDomainListDomainsRequest $request An object representing the request for this operation
     * @deprecated
     * @return DeprecatedDomainListDomainsOKResponse OK
     */
    public function deprecatedDomainListDomains(DeprecatedDomainListDomainsRequest $request): DeprecatedDomainListDomainsOKResponse;
    /**
     * List Ingresses belonging to a project.
     *
     * This operation is deprecated. Use the GET /v2/ingresses endpoint instead.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/deprecated-ingress-list-ingresses
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedIngressListIngressesRequest $request An object representing the request for this operation
     * @deprecated
     * @return DeprecatedIngressListIngressesOKResponse OK
     */
    public function deprecatedIngressListIngresses(DeprecatedIngressListIngressesRequest $request): DeprecatedIngressListIngressesOKResponse;
    /**
     * Update an Ingresses paths.
     *
     * This operation is deprecated. Use the PATCH /v2/ingresses/{ingressId}/paths endpoint instead.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/deprecated-ingress-paths
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedIngressPathsRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse No Content
     */
    public function deprecatedIngressPaths(DeprecatedIngressPathsRequest $request): EmptyResponse;
    /**
     * Update an Ingresses tls settings.
     *
     * This operation is deprecated. Use the PATCH /v2/ingresses/{ingressId}/tls endpoint instead.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/deprecated-ingress-tls
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedIngressTlsRequest $request An object representing the request for this operation
     * @deprecated
     * @return DeprecatedIngressTlsOKResponse OK
     */
    public function deprecatedIngressTls(DeprecatedIngressTlsRequest $request): DeprecatedIngressTlsOKResponse;
    /**
     * Create a DNSZone.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/dns-create-dns-zone
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DnsCreateDnsZoneRequest $request An object representing the request for this operation
     * @return DnsCreateDnsZoneCreatedResponse The ID of the created DNSZone.
     */
    public function dnsCreateDnsZone(DnsCreateDnsZoneRequest $request): DnsCreateDnsZoneCreatedResponse;
    /**
     * Delete a DNSZone.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/dns-delete-dns-zone
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DnsDeleteDnsZoneRequest $request An object representing the request for this operation
     * @return EmptyResponse No Content
     */
    public function dnsDeleteDnsZone(DnsDeleteDnsZoneRequest $request): EmptyResponse;
    /**
     * Get a DNSZone.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/dns-get-dns-zone
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DnsGetDnsZoneRequest $request An object representing the request for this operation
     * @return DnsGetDnsZoneOKResponse The requested DNSZone.
     */
    public function dnsGetDnsZone(DnsGetDnsZoneRequest $request): DnsGetDnsZoneOKResponse;
    /**
     * List DNSZones belonging to a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/dns-list-dns-zones
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DnsListDnsZonesRequest $request An object representing the request for this operation
     * @return DnsListDnsZonesOKResponse An array of DNSZone objects.
     */
    public function dnsListDnsZones(DnsListDnsZonesRequest $request): DnsListDnsZonesOKResponse;
    /**
     * Set a record set on a DNSZone to managed.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/dns-set-record-set-managed
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DnsSetRecordSetManagedRequest $request An object representing the request for this operation
     * @return DnsSetRecordSetManagedOKResponse The ID of the Ingress the a-records were set for, or an empty object if mx-records were set.
     */
    public function dnsSetRecordSetManaged(DnsSetRecordSetManagedRequest $request): DnsSetRecordSetManagedOKResponse;
    /**
     * Update a record set on a DNSZone.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/dns-update-record-set
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DnsUpdateRecordSetRequest $request An object representing the request for this operation
     * @return EmptyResponse Record set updated.
     */
    public function dnsUpdateRecordSet(DnsUpdateRecordSetRequest $request): EmptyResponse;
    /**
     * Abort a Domain declaration.
     *
     * Abort an incomplete Domain registration/transfer.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-abort-domain-declaration
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param AbortDomainDeclarationRequest $request An object representing the request for this operation
     * @return EmptyResponse No Content
     */
    public function abortDomainDeclaration(AbortDomainDeclarationRequest $request): EmptyResponse;
    /**
     * Check if a Domain is available to register.
     *
     * If false, you have to start a transfer with an auth code instead.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-check-domain-registrability
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CheckDomainRegistrabilityRequest $request An object representing the request for this operation
     * @return CheckDomainRegistrabilityOKResponse OK
     */
    public function checkDomainRegistrability(CheckDomainRegistrabilityRequest $request): CheckDomainRegistrabilityOKResponse;
    /**
     * Check if a Domain is available to transfer.
     *
     * For some TLDs (e.g., .de), transferability cannot be evaluated. In these cases, transferable = true is returned.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-check-domain-transferability
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CheckDomainTransferabilityRequest $request An object representing the request for this operation
     * @return CheckDomainTransferabilityOKResponse OK
     */
    public function checkDomainTransferability(CheckDomainTransferabilityRequest $request): CheckDomainTransferabilityOKResponse;
    /**
     * Create an auth code for a Domains transfer-out process.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-create-domain-auth-code
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CreateDomainAuthCodeRequest $request An object representing the request for this operation
     * @return CreateDomainAuthCodeCreatedResponse Created
     */
    public function createDomainAuthCode(CreateDomainAuthCodeRequest $request): CreateDomainAuthCodeCreatedResponse;
    /**
     * Delete a Domain.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-delete-domain
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteDomainRequest $request An object representing the request for this operation
     * @return DeleteDomainOKResponse OK
     */
    public function deleteDomain(DeleteDomainRequest $request): DeleteDomainOKResponse;
    /**
     * Get a Domain.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-get-domain
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetDomainRequest $request An object representing the request for this operation
     * @return GetDomainOKResponse OK
     */
    public function getDomain(GetDomainRequest $request): GetDomainOKResponse;
    /**
     * Get the latest screenshot's FileReference belonging to a Domain.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-get-latest-screenshot
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetLatestScreenshotRequest $request An object representing the request for this operation
     * @return GetLatestScreenshotOKResponse OK
     */
    public function getLatestScreenshot(GetLatestScreenshotRequest $request): GetLatestScreenshotOKResponse;
    /**
     * List Domains
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-list-domains
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListDomainsRequest $request An object representing the request for this operation
     * @return ListDomainsOKResponse OK
     */
    public function listDomains(ListDomainsRequest $request): ListDomainsOKResponse;
    /**
     * List the contact schemas for a TLD.
     *
     * List the contact schemas describing the fields required to register/transfer a Domain.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-list-tld-contact-schemas
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListTldContactSchemasRequest $request An object representing the request for this operation
     * @return ListTldContactSchemasOKResponse The JSON-Schema objects.
     */
    public function listTldContactSchemas(ListTldContactSchemasRequest $request): ListTldContactSchemasOKResponse;
    /**
     * List TLDs.
     *
     * List the top level domains currently supported by our API.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-list-tlds
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListTldsRequest $request An object representing the request for this operation
     */
    public function listTlds(ListTldsRequest $request): ListTldsOKResponse;
    /**
     * Resend a Domain email.
     *
     * Trigger a resend of a confirmation or registrant verification email. Has no effect on .de Domains.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-resend-domain-email
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ResendDomainEmailRequest $request An object representing the request for this operation
     * @return EmptyResponse No Content
     */
    public function resendDomainEmail(ResendDomainEmailRequest $request): EmptyResponse;
    /**
     * Suggest a list of domains based on a prompt using AI.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-suggest
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param SuggestRequest $request An object representing the request for this operation
     * @return SuggestOKResponse OK
     */
    public function suggest(SuggestRequest $request): SuggestOKResponse;
    /**
     * Update the auth code of a Domain.
     *
     * Update an incorrect auth code of an ongoing/failed Domain transfer. This route will also restart the transfer itself.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-update-domain-auth-code
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateDomainAuthCodeRequest $request An object representing the request for this operation
     * @return UpdateDomainAuthCodeOKResponse OK
     */
    public function updateDomainAuthCode(UpdateDomainAuthCodeRequest $request): UpdateDomainAuthCodeOKResponse;
    /**
     * Update a contact of a Domain.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-update-domain-contact
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateDomainContactRequest $request An object representing the request for this operation
     * @return UpdateDomainContactOKResponse OK
     */
    public function updateDomainContact(UpdateDomainContactRequest $request): UpdateDomainContactOKResponse;
    /**
     * Update the nameservers of a Domain.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-update-domain-nameservers
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateDomainNameserversRequest $request An object representing the request for this operation
     * @return EmptyResponse No Content
     */
    public function updateDomainNameservers(UpdateDomainNameserversRequest $request): EmptyResponse;
    /**
     * Update a Domain's project id.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-update-domain-project-id
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateDomainProjectIdRequest $request An object representing the request for this operation
     * @return EmptyResponse No Content
     */
    public function updateDomainProjectId(UpdateDomainProjectIdRequest $request): EmptyResponse;
    /**
     * Create an Ingress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ingress-create-ingress
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param IngressCreateIngressRequest $request An object representing the request for this operation
     * @return IngressCreateIngressCreatedResponse Created
     */
    public function ingressCreateIngress(IngressCreateIngressRequest $request): IngressCreateIngressCreatedResponse;
    /**
     * Delete an Ingress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ingress-delete-ingress
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param IngressDeleteIngressRequest $request An object representing the request for this operation
     * @return EmptyResponse No Content
     */
    public function ingressDeleteIngress(IngressDeleteIngressRequest $request): EmptyResponse;
    /**
     * Get an Ingress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ingress-get-ingress
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param IngressGetIngressRequest $request An object representing the request for this operation
     * @return IngressGetIngressOKResponse OK
     */
    public function ingressGetIngress(IngressGetIngressRequest $request): IngressGetIngressOKResponse;
    /**
     * Verifiy the ownership of an Ingress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ingress-ingress-verify-ownership
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param IngressIngressVerifyOwnershipRequest $request An object representing the request for this operation
     * @return IngressIngressVerifyOwnershipOKResponse OK
     */
    public function ingressIngressVerifyOwnership(IngressIngressVerifyOwnershipRequest $request): IngressIngressVerifyOwnershipOKResponse;
    /**
     * List Ingresses.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ingress-list-ingresses
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param IngressListIngressesRequest $request An object representing the request for this operation
     * @return IngressListIngressesOKResponse OK
     */
    public function ingressListIngresses(IngressListIngressesRequest $request): IngressListIngressesOKResponse;
    /**
     * List Ingresses compatible with a certificate.
     *
     * List Ingresses in a Project compatible with a certificate.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ingress-list-ingresses-compatible-with-certificate
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param IngressListIngressesCompatibleWithCertificateRequest $request An object representing the request for this operation
     * @return IngressListIngressesCompatibleWithCertificateOKResponse OK
     */
    public function ingressListIngressesCompatibleWithCertificate(IngressListIngressesCompatibleWithCertificateRequest $request): IngressListIngressesCompatibleWithCertificateOKResponse;
    /**
     * Request the ACME certificate issuance of an Ingress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ingress-request-ingress-acme-certificate-issuance
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param IngressRequestIngressAcmeCertificateIssuanceRequest $request An object representing the request for this operation
     * @return EmptyResponse No Content
     */
    public function ingressRequestIngressAcmeCertificateIssuance(IngressRequestIngressAcmeCertificateIssuanceRequest $request): EmptyResponse;
    /**
     * Update the paths of an Ingress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ingress-update-ingress-paths
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param IngressUpdateIngressPathsRequest $request An object representing the request for this operation
     * @return EmptyResponse No Content
     */
    public function ingressUpdateIngressPaths(IngressUpdateIngressPathsRequest $request): EmptyResponse;
    /**
     * Update the tls settings of an Ingress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ingress-update-ingress-tls
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param IngressUpdateIngressTlsRequest $request An object representing the request for this operation
     * @return IngressUpdateIngressTlsOKResponse OK
     */
    public function ingressUpdateIngressTls(IngressUpdateIngressTlsRequest $request): IngressUpdateIngressTlsOKResponse;
    /**
     * Check the replacement of a Certificate.
     *
     * Checks the replacement of a Certificate and shows differences between the current and the new Certificate.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ssl-check-replace-certificate
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param SslCheckReplaceCertificateRequest $request An object representing the request for this operation
     * @return SslCheckReplaceCertificateOKResponse OK
     */
    public function sslCheckReplaceCertificate(SslCheckReplaceCertificateRequest $request): SslCheckReplaceCertificateOKResponse;
    /**
     * Create a CertificateRequest.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ssl-create-certificate-request
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param SslCreateCertificateRequestRequest $request An object representing the request for this operation
     * @return SslCreateCertificateRequestCreatedResponse Created
     */
    public function sslCreateCertificateRequest(SslCreateCertificateRequestRequest $request): SslCreateCertificateRequestCreatedResponse;
    /**
     * Delete a Certificate.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ssl-delete-certificate
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param SslDeleteCertificateRequest $request An object representing the request for this operation
     * @return EmptyResponse No Content
     */
    public function sslDeleteCertificate(SslDeleteCertificateRequest $request): EmptyResponse;
    /**
     * Delete a CertificateRequest.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ssl-delete-certificate-request
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param SslDeleteCertificateRequestRequest $request An object representing the request for this operation
     * @return EmptyResponse No Content
     */
    public function sslDeleteCertificateRequest(SslDeleteCertificateRequestRequest $request): EmptyResponse;
    /**
     * Get a Certificate.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ssl-get-certificate
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param SslGetCertificateRequest $request An object representing the request for this operation
     * @return SslGetCertificateOKResponse OK
     */
    public function sslGetCertificate(SslGetCertificateRequest $request): SslGetCertificateOKResponse;
    /**
     * Get a CertificateRequest.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ssl-get-certificate-request
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param SslGetCertificateRequestRequest $request An object representing the request for this operation
     * @return SslGetCertificateRequestOKResponse OK
     */
    public function sslGetCertificateRequest(SslGetCertificateRequestRequest $request): SslGetCertificateRequestOKResponse;
    /**
     * List CertificateRequests belonging to a Project or an Ingress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ssl-list-certificate-requests
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param SslListCertificateRequestsRequest $request An object representing the request for this operation
     * @return SslListCertificateRequestsOKResponse OK
     */
    public function sslListCertificateRequests(SslListCertificateRequestsRequest $request): SslListCertificateRequestsOKResponse;
    /**
     * List Certificates belonging to a Project or an Ingress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ssl-list-certificates
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param SslListCertificatesRequest $request An object representing the request for this operation
     * @return SslListCertificatesOKResponse OK
     */
    public function sslListCertificates(SslListCertificatesRequest $request): SslListCertificatesOKResponse;
    /**
     * Update a Certificate.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ssl-replace-certificate
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param SslReplaceCertificateRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function sslReplaceCertificate(SslReplaceCertificateRequest $request): EmptyResponse;
}
