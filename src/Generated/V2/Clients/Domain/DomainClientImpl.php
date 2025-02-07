<?php

declare(strict_types=1);

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
use Mittwald\ApiClient\Generated\V2\Clients\Domain\AbortDomainDeclaration\AbortDomainDeclarationTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CheckDomainRegistrability\CheckDomainRegistrabilityBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CheckDomainRegistrability\CheckDomainRegistrabilityDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CheckDomainRegistrability\CheckDomainRegistrabilityOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CheckDomainRegistrability\CheckDomainRegistrabilityRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CheckDomainRegistrability\CheckDomainRegistrabilityTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CheckDomainTransferability\CheckDomainTransferabilityBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CheckDomainTransferability\CheckDomainTransferabilityDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CheckDomainTransferability\CheckDomainTransferabilityOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CheckDomainTransferability\CheckDomainTransferabilityRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CheckDomainTransferability\CheckDomainTransferabilityTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CreateDomainAuthCode\CreateDomainAuthCodeBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CreateDomainAuthCode\CreateDomainAuthCodeCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CreateDomainAuthCode\CreateDomainAuthCodeDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CreateDomainAuthCode\CreateDomainAuthCodeNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CreateDomainAuthCode\CreateDomainAuthCodeRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CreateDomainAuthCode\CreateDomainAuthCodeTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeleteDomain\DeleteDomainBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeleteDomain\DeleteDomainDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeleteDomain\DeleteDomainNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeleteDomain\DeleteDomainOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeleteDomain\DeleteDomainPreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeleteDomain\DeleteDomainRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeleteDomain\DeleteDomainTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDnsRecordASetCustom\DeprecatedDnsRecordASetCustomBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDnsRecordASetCustom\DeprecatedDnsRecordASetCustomDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDnsRecordASetCustom\DeprecatedDnsRecordASetCustomRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDnsRecordASetCustom\DeprecatedDnsRecordASetCustomTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDnsRecordASetManagedByIngress\DeprecatedDnsRecordASetManagedByIngressBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDnsRecordASetManagedByIngress\DeprecatedDnsRecordASetManagedByIngressDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDnsRecordASetManagedByIngress\DeprecatedDnsRecordASetManagedByIngressNoContentResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDnsRecordASetManagedByIngress\DeprecatedDnsRecordASetManagedByIngressRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDnsRecordASetManagedByIngress\DeprecatedDnsRecordASetManagedByIngressTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDnsRecordCnameSet\DeprecatedDnsRecordCnameSetBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDnsRecordCnameSet\DeprecatedDnsRecordCnameSetDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDnsRecordCnameSet\DeprecatedDnsRecordCnameSetRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDnsRecordCnameSet\DeprecatedDnsRecordCnameSetTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDnsRecordMxSetCustom\DeprecatedDnsRecordMxSetCustomBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDnsRecordMxSetCustom\DeprecatedDnsRecordMxSetCustomDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDnsRecordMxSetCustom\DeprecatedDnsRecordMxSetCustomRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDnsRecordMxSetCustom\DeprecatedDnsRecordMxSetCustomTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDnsRecordMxSetManaged\DeprecatedDnsRecordMxSetManagedBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDnsRecordMxSetManaged\DeprecatedDnsRecordMxSetManagedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDnsRecordMxSetManaged\DeprecatedDnsRecordMxSetManagedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDnsRecordMxSetManaged\DeprecatedDnsRecordMxSetManagedTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDnsRecordSrvSet\DeprecatedDnsRecordSrvSetBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDnsRecordSrvSet\DeprecatedDnsRecordSrvSetDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDnsRecordSrvSet\DeprecatedDnsRecordSrvSetRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDnsRecordSrvSet\DeprecatedDnsRecordSrvSetTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDnsRecordTxtSet\DeprecatedDnsRecordTxtSetBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDnsRecordTxtSet\DeprecatedDnsRecordTxtSetDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDnsRecordTxtSet\DeprecatedDnsRecordTxtSetRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDnsRecordTxtSet\DeprecatedDnsRecordTxtSetTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainChangeOwnercOfDomain\DeprecatedDomainChangeOwnercOfDomainBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainChangeOwnercOfDomain\DeprecatedDomainChangeOwnercOfDomainDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainChangeOwnercOfDomain\DeprecatedDomainChangeOwnercOfDomainNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainChangeOwnercOfDomain\DeprecatedDomainChangeOwnercOfDomainOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainChangeOwnercOfDomain\DeprecatedDomainChangeOwnercOfDomainRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainChangeOwnercOfDomain\DeprecatedDomainChangeOwnercOfDomainTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainChangeProjectOfDomain\DeprecatedDomainChangeProjectOfDomainBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainChangeProjectOfDomain\DeprecatedDomainChangeProjectOfDomainDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainChangeProjectOfDomain\DeprecatedDomainChangeProjectOfDomainNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainChangeProjectOfDomain\DeprecatedDomainChangeProjectOfDomainRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainChangeProjectOfDomain\DeprecatedDomainChangeProjectOfDomainTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainCheckDomainRegistrability\DeprecatedDomainCheckDomainRegistrabilityBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainCheckDomainRegistrability\DeprecatedDomainCheckDomainRegistrabilityDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainCheckDomainRegistrability\DeprecatedDomainCheckDomainRegistrabilityOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainCheckDomainRegistrability\DeprecatedDomainCheckDomainRegistrabilityRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainCheckDomainRegistrability\DeprecatedDomainCheckDomainRegistrabilityTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainDeclareNameservers\DeprecatedDomainDeclareNameserversBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainDeclareNameservers\DeprecatedDomainDeclareNameserversDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainDeclareNameservers\DeprecatedDomainDeclareNameserversNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainDeclareNameservers\DeprecatedDomainDeclareNameserversRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainDeclareNameservers\DeprecatedDomainDeclareNameserversTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainDeclareProcessChangeAuthcode\DeprecatedDomainDeclareProcessChangeAuthcodeBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainDeclareProcessChangeAuthcode\DeprecatedDomainDeclareProcessChangeAuthcodeDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainDeclareProcessChangeAuthcode\DeprecatedDomainDeclareProcessChangeAuthcodeNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainDeclareProcessChangeAuthcode\DeprecatedDomainDeclareProcessChangeAuthcodeOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainDeclareProcessChangeAuthcode\DeprecatedDomainDeclareProcessChangeAuthcodeRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainDeclareProcessChangeAuthcode\DeprecatedDomainDeclareProcessChangeAuthcodeTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainDeclareProcessChangeHandles\DeprecatedDomainDeclareProcessChangeHandlesBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainDeclareProcessChangeHandles\DeprecatedDomainDeclareProcessChangeHandlesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainDeclareProcessChangeHandles\DeprecatedDomainDeclareProcessChangeHandlesNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainDeclareProcessChangeHandles\DeprecatedDomainDeclareProcessChangeHandlesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainDeclareProcessChangeHandles\DeprecatedDomainDeclareProcessChangeHandlesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainDeclareProcessChangeHandles\DeprecatedDomainDeclareProcessChangeHandlesTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainGetHandleFields\DeprecatedDomainGetHandleFieldsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainGetHandleFields\DeprecatedDomainGetHandleFieldsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainGetHandleFields\DeprecatedDomainGetHandleFieldsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainGetHandleFields\DeprecatedDomainGetHandleFieldsTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainGetScreenshotForDomain\DeprecatedDomainGetScreenshotForDomainDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainGetScreenshotForDomain\DeprecatedDomainGetScreenshotForDomainNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainGetScreenshotForDomain\DeprecatedDomainGetScreenshotForDomainOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainGetScreenshotForDomain\DeprecatedDomainGetScreenshotForDomainRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainGetScreenshotForDomain\DeprecatedDomainGetScreenshotForDomainTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainListDomains\DeprecatedDomainListDomainsBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainListDomains\DeprecatedDomainListDomainsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainListDomains\DeprecatedDomainListDomainsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainListDomains\DeprecatedDomainListDomainsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainListDomains\DeprecatedDomainListDomainsTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedIngressListIngresses\DeprecatedIngressListIngressesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedIngressListIngresses\DeprecatedIngressListIngressesNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedIngressListIngresses\DeprecatedIngressListIngressesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedIngressListIngresses\DeprecatedIngressListIngressesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedIngressListIngresses\DeprecatedIngressListIngressesTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedIngressPaths\DeprecatedIngressPathsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedIngressPaths\DeprecatedIngressPathsNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedIngressPaths\DeprecatedIngressPathsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedIngressPaths\DeprecatedIngressPathsTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedIngressTls\DeprecatedIngressTlsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedIngressTls\DeprecatedIngressTlsNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedIngressTls\DeprecatedIngressTlsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedIngressTls\DeprecatedIngressTlsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedIngressTls\DeprecatedIngressTlsTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsCreateDnsZone\DnsCreateDnsZoneBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsCreateDnsZone\DnsCreateDnsZoneCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsCreateDnsZone\DnsCreateDnsZoneDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsCreateDnsZone\DnsCreateDnsZoneRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsCreateDnsZone\DnsCreateDnsZoneTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsDeleteDnsZone\DnsDeleteDnsZoneBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsDeleteDnsZone\DnsDeleteDnsZoneDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsDeleteDnsZone\DnsDeleteDnsZoneRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsDeleteDnsZone\DnsDeleteDnsZoneTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsGetDnsZone\DnsGetDnsZoneBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsGetDnsZone\DnsGetDnsZoneDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsGetDnsZone\DnsGetDnsZoneOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsGetDnsZone\DnsGetDnsZoneRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsGetDnsZone\DnsGetDnsZoneTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsGetZoneFile\DnsGetZoneFileBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsGetZoneFile\DnsGetZoneFileDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsGetZoneFile\DnsGetZoneFileOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsGetZoneFile\DnsGetZoneFileRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsGetZoneFile\DnsGetZoneFileTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsListDnsZones\DnsListDnsZonesBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsListDnsZones\DnsListDnsZonesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsListDnsZones\DnsListDnsZonesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsListDnsZones\DnsListDnsZonesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsListDnsZones\DnsListDnsZonesTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsSetRecordSetManaged\DnsSetRecordSetManagedBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsSetRecordSetManaged\DnsSetRecordSetManagedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsSetRecordSetManaged\DnsSetRecordSetManagedNoContentResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsSetRecordSetManaged\DnsSetRecordSetManagedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsSetRecordSetManaged\DnsSetRecordSetManagedTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsUpdateRecordSet\DnsUpdateRecordSetBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsUpdateRecordSet\DnsUpdateRecordSetDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsUpdateRecordSet\DnsUpdateRecordSetRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsUpdateRecordSet\DnsUpdateRecordSetTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetDomain\GetDomainBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetDomain\GetDomainDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetDomain\GetDomainNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetDomain\GetDomainOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetDomain\GetDomainRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetDomain\GetDomainTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetLatestScreenshot\GetLatestScreenshotDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetLatestScreenshot\GetLatestScreenshotNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetLatestScreenshot\GetLatestScreenshotOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetLatestScreenshot\GetLatestScreenshotRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetLatestScreenshot\GetLatestScreenshotTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressCreateIngress\IngressCreateIngressCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressCreateIngress\IngressCreateIngressDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressCreateIngress\IngressCreateIngressNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressCreateIngress\IngressCreateIngressRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressCreateIngress\IngressCreateIngressTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressDeleteIngress\IngressDeleteIngressDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressDeleteIngress\IngressDeleteIngressNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressDeleteIngress\IngressDeleteIngressRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressDeleteIngress\IngressDeleteIngressTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressGetIngress\IngressGetIngressDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressGetIngress\IngressGetIngressNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressGetIngress\IngressGetIngressOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressGetIngress\IngressGetIngressRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressGetIngress\IngressGetIngressTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressIngressVerifyOwnership\IngressIngressVerifyOwnershipBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressIngressVerifyOwnership\IngressIngressVerifyOwnershipDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressIngressVerifyOwnership\IngressIngressVerifyOwnershipNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressIngressVerifyOwnership\IngressIngressVerifyOwnershipOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressIngressVerifyOwnership\IngressIngressVerifyOwnershipPreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressIngressVerifyOwnership\IngressIngressVerifyOwnershipRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressIngressVerifyOwnership\IngressIngressVerifyOwnershipTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressListIngresses\IngressListIngressesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressListIngresses\IngressListIngressesNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressListIngresses\IngressListIngressesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressListIngresses\IngressListIngressesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressListIngresses\IngressListIngressesTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressListIngressesCompatibleWithCertificate\IngressListIngressesCompatibleWithCertificateBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressListIngressesCompatibleWithCertificate\IngressListIngressesCompatibleWithCertificateDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressListIngressesCompatibleWithCertificate\IngressListIngressesCompatibleWithCertificateNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressListIngressesCompatibleWithCertificate\IngressListIngressesCompatibleWithCertificateOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressListIngressesCompatibleWithCertificate\IngressListIngressesCompatibleWithCertificateRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressListIngressesCompatibleWithCertificate\IngressListIngressesCompatibleWithCertificateTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressRequestIngressAcmeCertificateIssuance\IngressRequestIngressAcmeCertificateIssuanceBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressRequestIngressAcmeCertificateIssuance\IngressRequestIngressAcmeCertificateIssuanceDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressRequestIngressAcmeCertificateIssuance\IngressRequestIngressAcmeCertificateIssuanceNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressRequestIngressAcmeCertificateIssuance\IngressRequestIngressAcmeCertificateIssuanceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressRequestIngressAcmeCertificateIssuance\IngressRequestIngressAcmeCertificateIssuanceTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressUpdateIngressPaths\IngressUpdateIngressPathsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressUpdateIngressPaths\IngressUpdateIngressPathsNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressUpdateIngressPaths\IngressUpdateIngressPathsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressUpdateIngressPaths\IngressUpdateIngressPathsTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressUpdateIngressTls\IngressUpdateIngressTlsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressUpdateIngressTls\IngressUpdateIngressTlsForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressUpdateIngressTls\IngressUpdateIngressTlsNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressUpdateIngressTls\IngressUpdateIngressTlsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressUpdateIngressTls\IngressUpdateIngressTlsPreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressUpdateIngressTls\IngressUpdateIngressTlsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressUpdateIngressTls\IngressUpdateIngressTlsTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ListDomains\ListDomainsBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ListDomains\ListDomainsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ListDomains\ListDomainsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ListDomains\ListDomainsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ListDomains\ListDomainsTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ListTldContactSchemas\ListTldContactSchemasDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ListTldContactSchemas\ListTldContactSchemasOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ListTldContactSchemas\ListTldContactSchemasRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ListTldContactSchemas\ListTldContactSchemasTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ListTlds\ListTldsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ListTlds\ListTldsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ListTlds\ListTldsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ListTlds\ListTldsTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ResendDomainEmail\ResendDomainEmailBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ResendDomainEmail\ResendDomainEmailDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ResendDomainEmail\ResendDomainEmailNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ResendDomainEmail\ResendDomainEmailPreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ResendDomainEmail\ResendDomainEmailRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ResendDomainEmail\ResendDomainEmailTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslCheckReplaceCertificate\SslCheckReplaceCertificateDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslCheckReplaceCertificate\SslCheckReplaceCertificateNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslCheckReplaceCertificate\SslCheckReplaceCertificateOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslCheckReplaceCertificate\SslCheckReplaceCertificateRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslCheckReplaceCertificate\SslCheckReplaceCertificateTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslCreateCertificateRequest\SslCreateCertificateRequestBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslCreateCertificateRequest\SslCreateCertificateRequestCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslCreateCertificateRequest\SslCreateCertificateRequestDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslCreateCertificateRequest\SslCreateCertificateRequestNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslCreateCertificateRequest\SslCreateCertificateRequestRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslCreateCertificateRequest\SslCreateCertificateRequestTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslDeleteCertificate\SslDeleteCertificateDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslDeleteCertificate\SslDeleteCertificateNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslDeleteCertificate\SslDeleteCertificateRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslDeleteCertificate\SslDeleteCertificateTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslDeleteCertificateRequest\SslDeleteCertificateRequestDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslDeleteCertificateRequest\SslDeleteCertificateRequestNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslDeleteCertificateRequest\SslDeleteCertificateRequestRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslDeleteCertificateRequest\SslDeleteCertificateRequestTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslGetCertificate\SslGetCertificateDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslGetCertificate\SslGetCertificateNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslGetCertificate\SslGetCertificateOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslGetCertificate\SslGetCertificateRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslGetCertificate\SslGetCertificateTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslGetCertificateRequest\SslGetCertificateRequestDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslGetCertificateRequest\SslGetCertificateRequestNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslGetCertificateRequest\SslGetCertificateRequestOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslGetCertificateRequest\SslGetCertificateRequestRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslGetCertificateRequest\SslGetCertificateRequestTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslListCertificateRequests\SslListCertificateRequestsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslListCertificateRequests\SslListCertificateRequestsNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslListCertificateRequests\SslListCertificateRequestsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslListCertificateRequests\SslListCertificateRequestsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslListCertificateRequests\SslListCertificateRequestsTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslListCertificates\SslListCertificatesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslListCertificates\SslListCertificatesNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslListCertificates\SslListCertificatesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslListCertificates\SslListCertificatesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslListCertificates\SslListCertificatesTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslReplaceCertificate\SslReplaceCertificateBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslReplaceCertificate\SslReplaceCertificateDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslReplaceCertificate\SslReplaceCertificateNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslReplaceCertificate\SslReplaceCertificateRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslReplaceCertificate\SslReplaceCertificateTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslSetCertificateRequestCertificate\SslSetCertificateRequestCertificateBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslSetCertificateRequestCertificate\SslSetCertificateRequestCertificateDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslSetCertificateRequestCertificate\SslSetCertificateRequestCertificateNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslSetCertificateRequestCertificate\SslSetCertificateRequestCertificatePreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslSetCertificateRequestCertificate\SslSetCertificateRequestCertificateRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\SslSetCertificateRequestCertificate\SslSetCertificateRequestCertificateTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\Suggest\SuggestBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\Suggest\SuggestDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\Suggest\SuggestOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\Suggest\SuggestPreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\Suggest\SuggestRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\Suggest\SuggestTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainAuthCode\UpdateDomainAuthCodeBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainAuthCode\UpdateDomainAuthCodeDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainAuthCode\UpdateDomainAuthCodeNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainAuthCode\UpdateDomainAuthCodeOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainAuthCode\UpdateDomainAuthCodeRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainAuthCode\UpdateDomainAuthCodeTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainContact\UpdateDomainContactBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainContact\UpdateDomainContactDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainContact\UpdateDomainContactNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainContact\UpdateDomainContactOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainContact\UpdateDomainContactRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainContact\UpdateDomainContactTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainNameservers\UpdateDomainNameserversBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainNameservers\UpdateDomainNameserversDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainNameservers\UpdateDomainNameserversNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainNameservers\UpdateDomainNameserversRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainNameservers\UpdateDomainNameserversTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainProjectId\UpdateDomainProjectIdBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainProjectId\UpdateDomainProjectIdDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainProjectId\UpdateDomainProjectIdNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainProjectId\UpdateDomainProjectIdRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainProjectId\UpdateDomainProjectIdTooManyRequestsResponse;

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
class DomainClientImpl implements DomainClient
{
    private Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

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
    public function deprecatedDnsRecordASetCustom(DeprecatedDnsRecordASetCustomRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeprecatedDnsRecordASetCustomRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeprecatedDnsRecordASetCustomBadRequestResponse::fromResponse($httpResponse),
            429 => DeprecatedDnsRecordASetCustomTooManyRequestsResponse::fromResponse($httpResponse),
            default => DeprecatedDnsRecordASetCustomDefaultResponse::fromResponse($httpResponse),
        });
    }

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
    public function deprecatedDnsRecordASetManagedByIngress(DeprecatedDnsRecordASetManagedByIngressRequest $request): DeprecatedDnsRecordASetManagedByIngressNoContentResponse
    {
        $httpRequest = new Request(DeprecatedDnsRecordASetManagedByIngressRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return DeprecatedDnsRecordASetManagedByIngressNoContentResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeprecatedDnsRecordASetManagedByIngressBadRequestResponse::fromResponse($httpResponse),
            429 => DeprecatedDnsRecordASetManagedByIngressTooManyRequestsResponse::fromResponse($httpResponse),
            default => DeprecatedDnsRecordASetManagedByIngressDefaultResponse::fromResponse($httpResponse),
        });
    }

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
    public function deprecatedDnsRecordCnameSet(DeprecatedDnsRecordCnameSetRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeprecatedDnsRecordCnameSetRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeprecatedDnsRecordCnameSetBadRequestResponse::fromResponse($httpResponse),
            429 => DeprecatedDnsRecordCnameSetTooManyRequestsResponse::fromResponse($httpResponse),
            default => DeprecatedDnsRecordCnameSetDefaultResponse::fromResponse($httpResponse),
        });
    }

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
    public function deprecatedDnsRecordMxSetCustom(DeprecatedDnsRecordMxSetCustomRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeprecatedDnsRecordMxSetCustomRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeprecatedDnsRecordMxSetCustomBadRequestResponse::fromResponse($httpResponse),
            429 => DeprecatedDnsRecordMxSetCustomTooManyRequestsResponse::fromResponse($httpResponse),
            default => DeprecatedDnsRecordMxSetCustomDefaultResponse::fromResponse($httpResponse),
        });
    }

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
    public function deprecatedDnsRecordMxSetManaged(DeprecatedDnsRecordMxSetManagedRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeprecatedDnsRecordMxSetManagedRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeprecatedDnsRecordMxSetManagedBadRequestResponse::fromResponse($httpResponse),
            429 => DeprecatedDnsRecordMxSetManagedTooManyRequestsResponse::fromResponse($httpResponse),
            default => DeprecatedDnsRecordMxSetManagedDefaultResponse::fromResponse($httpResponse),
        });
    }

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
    public function deprecatedDnsRecordSrvSet(DeprecatedDnsRecordSrvSetRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeprecatedDnsRecordSrvSetRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeprecatedDnsRecordSrvSetBadRequestResponse::fromResponse($httpResponse),
            429 => DeprecatedDnsRecordSrvSetTooManyRequestsResponse::fromResponse($httpResponse),
            default => DeprecatedDnsRecordSrvSetDefaultResponse::fromResponse($httpResponse),
        });
    }

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
    public function deprecatedDnsRecordTxtSet(DeprecatedDnsRecordTxtSetRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeprecatedDnsRecordTxtSetRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeprecatedDnsRecordTxtSetBadRequestResponse::fromResponse($httpResponse),
            429 => DeprecatedDnsRecordTxtSetTooManyRequestsResponse::fromResponse($httpResponse),
            default => DeprecatedDnsRecordTxtSetDefaultResponse::fromResponse($httpResponse),
        });
    }

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
    public function deprecatedDomainChangeOwnercOfDomain(DeprecatedDomainChangeOwnercOfDomainRequest $request): DeprecatedDomainChangeOwnercOfDomainOKResponse
    {
        $httpRequest = new Request(DeprecatedDomainChangeOwnercOfDomainRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return DeprecatedDomainChangeOwnercOfDomainOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeprecatedDomainChangeOwnercOfDomainBadRequestResponse::fromResponse($httpResponse),
            404 => DeprecatedDomainChangeOwnercOfDomainNotFoundResponse::fromResponse($httpResponse),
            429 => DeprecatedDomainChangeOwnercOfDomainTooManyRequestsResponse::fromResponse($httpResponse),
            default => DeprecatedDomainChangeOwnercOfDomainDefaultResponse::fromResponse($httpResponse),
        });
    }

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
    public function deprecatedDomainChangeProjectOfDomain(DeprecatedDomainChangeProjectOfDomainRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeprecatedDomainChangeProjectOfDomainRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeprecatedDomainChangeProjectOfDomainBadRequestResponse::fromResponse($httpResponse),
            404 => DeprecatedDomainChangeProjectOfDomainNotFoundResponse::fromResponse($httpResponse),
            429 => DeprecatedDomainChangeProjectOfDomainTooManyRequestsResponse::fromResponse($httpResponse),
            default => DeprecatedDomainChangeProjectOfDomainDefaultResponse::fromResponse($httpResponse),
        });
    }

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
    public function deprecatedDomainCheckDomainRegistrability(DeprecatedDomainCheckDomainRegistrabilityRequest $request): DeprecatedDomainCheckDomainRegistrabilityOKResponse
    {
        $httpRequest = new Request(DeprecatedDomainCheckDomainRegistrabilityRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return DeprecatedDomainCheckDomainRegistrabilityOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeprecatedDomainCheckDomainRegistrabilityBadRequestResponse::fromResponse($httpResponse),
            429 => DeprecatedDomainCheckDomainRegistrabilityTooManyRequestsResponse::fromResponse($httpResponse),
            default => DeprecatedDomainCheckDomainRegistrabilityDefaultResponse::fromResponse($httpResponse),
        });
    }

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
    public function deprecatedDomainDeclareNameservers(DeprecatedDomainDeclareNameserversRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeprecatedDomainDeclareNameserversRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeprecatedDomainDeclareNameserversBadRequestResponse::fromResponse($httpResponse),
            404 => DeprecatedDomainDeclareNameserversNotFoundResponse::fromResponse($httpResponse),
            429 => DeprecatedDomainDeclareNameserversTooManyRequestsResponse::fromResponse($httpResponse),
            default => DeprecatedDomainDeclareNameserversDefaultResponse::fromResponse($httpResponse),
        });
    }

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
    public function deprecatedDomainDeclareProcessChangeAuthcode(DeprecatedDomainDeclareProcessChangeAuthcodeRequest $request): DeprecatedDomainDeclareProcessChangeAuthcodeOKResponse
    {
        $httpRequest = new Request(DeprecatedDomainDeclareProcessChangeAuthcodeRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return DeprecatedDomainDeclareProcessChangeAuthcodeOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeprecatedDomainDeclareProcessChangeAuthcodeBadRequestResponse::fromResponse($httpResponse),
            404 => DeprecatedDomainDeclareProcessChangeAuthcodeNotFoundResponse::fromResponse($httpResponse),
            429 => DeprecatedDomainDeclareProcessChangeAuthcodeTooManyRequestsResponse::fromResponse($httpResponse),
            default => DeprecatedDomainDeclareProcessChangeAuthcodeDefaultResponse::fromResponse($httpResponse),
        });
    }

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
    public function deprecatedDomainDeclareProcessChangeHandles(DeprecatedDomainDeclareProcessChangeHandlesRequest $request): DeprecatedDomainDeclareProcessChangeHandlesOKResponse
    {
        $httpRequest = new Request(DeprecatedDomainDeclareProcessChangeHandlesRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return DeprecatedDomainDeclareProcessChangeHandlesOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeprecatedDomainDeclareProcessChangeHandlesBadRequestResponse::fromResponse($httpResponse),
            404 => DeprecatedDomainDeclareProcessChangeHandlesNotFoundResponse::fromResponse($httpResponse),
            429 => DeprecatedDomainDeclareProcessChangeHandlesTooManyRequestsResponse::fromResponse($httpResponse),
            default => DeprecatedDomainDeclareProcessChangeHandlesDefaultResponse::fromResponse($httpResponse),
        });
    }

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
    public function deprecatedDomainGetHandleFields(DeprecatedDomainGetHandleFieldsRequest $request): DeprecatedDomainGetHandleFieldsOKResponse
    {
        $httpRequest = new Request(DeprecatedDomainGetHandleFieldsRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return DeprecatedDomainGetHandleFieldsOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            429 => DeprecatedDomainGetHandleFieldsTooManyRequestsResponse::fromResponse($httpResponse),
            default => DeprecatedDomainGetHandleFieldsDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get File Service Reference for a Screenshot of a domain.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/deprecated-domain-get-screenshot-for-domain
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedDomainGetScreenshotForDomainRequest $request An object representing the request for this operation
     * @deprecated
     * @return DeprecatedDomainGetScreenshotForDomainOKResponse The References.
     */
    public function deprecatedDomainGetScreenshotForDomain(DeprecatedDomainGetScreenshotForDomainRequest $request): DeprecatedDomainGetScreenshotForDomainOKResponse
    {
        $httpRequest = new Request(DeprecatedDomainGetScreenshotForDomainRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return DeprecatedDomainGetScreenshotForDomainOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => DeprecatedDomainGetScreenshotForDomainNotFoundResponse::fromResponse($httpResponse),
            429 => DeprecatedDomainGetScreenshotForDomainTooManyRequestsResponse::fromResponse($httpResponse),
            default => DeprecatedDomainGetScreenshotForDomainDefaultResponse::fromResponse($httpResponse),
        });
    }

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
    public function deprecatedDomainListDomains(DeprecatedDomainListDomainsRequest $request): DeprecatedDomainListDomainsOKResponse
    {
        $httpRequest = new Request(DeprecatedDomainListDomainsRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return DeprecatedDomainListDomainsOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeprecatedDomainListDomainsBadRequestResponse::fromResponse($httpResponse),
            429 => DeprecatedDomainListDomainsTooManyRequestsResponse::fromResponse($httpResponse),
            default => DeprecatedDomainListDomainsDefaultResponse::fromResponse($httpResponse),
        });
    }

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
    public function deprecatedIngressListIngresses(DeprecatedIngressListIngressesRequest $request): DeprecatedIngressListIngressesOKResponse
    {
        $httpRequest = new Request(DeprecatedIngressListIngressesRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return DeprecatedIngressListIngressesOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => DeprecatedIngressListIngressesNotFoundResponse::fromResponse($httpResponse),
            429 => DeprecatedIngressListIngressesTooManyRequestsResponse::fromResponse($httpResponse),
            default => DeprecatedIngressListIngressesDefaultResponse::fromResponse($httpResponse),
        });
    }

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
    public function deprecatedIngressPaths(DeprecatedIngressPathsRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeprecatedIngressPathsRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => DeprecatedIngressPathsNotFoundResponse::fromResponse($httpResponse),
            429 => DeprecatedIngressPathsTooManyRequestsResponse::fromResponse($httpResponse),
            default => DeprecatedIngressPathsDefaultResponse::fromResponse($httpResponse),
        });
    }

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
    public function deprecatedIngressTls(DeprecatedIngressTlsRequest $request): DeprecatedIngressTlsOKResponse
    {
        $httpRequest = new Request(DeprecatedIngressTlsRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return DeprecatedIngressTlsOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => DeprecatedIngressTlsNotFoundResponse::fromResponse($httpResponse),
            429 => DeprecatedIngressTlsTooManyRequestsResponse::fromResponse($httpResponse),
            default => DeprecatedIngressTlsDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Create a DNSZone.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/dns-create-dns-zone
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DnsCreateDnsZoneRequest $request An object representing the request for this operation
     * @return DnsCreateDnsZoneCreatedResponse The ID of the created DNSZone.
     */
    public function dnsCreateDnsZone(DnsCreateDnsZoneRequest $request): DnsCreateDnsZoneCreatedResponse
    {
        $httpRequest = new Request(DnsCreateDnsZoneRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 201) {
            return DnsCreateDnsZoneCreatedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DnsCreateDnsZoneBadRequestResponse::fromResponse($httpResponse),
            429 => DnsCreateDnsZoneTooManyRequestsResponse::fromResponse($httpResponse),
            default => DnsCreateDnsZoneDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Delete a DNSZone.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/dns-delete-dns-zone
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DnsDeleteDnsZoneRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function dnsDeleteDnsZone(DnsDeleteDnsZoneRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DnsDeleteDnsZoneRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DnsDeleteDnsZoneBadRequestResponse::fromResponse($httpResponse),
            429 => DnsDeleteDnsZoneTooManyRequestsResponse::fromResponse($httpResponse),
            default => DnsDeleteDnsZoneDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a DNSZone.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/dns-get-dns-zone
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DnsGetDnsZoneRequest $request An object representing the request for this operation
     * @return DnsGetDnsZoneOKResponse The requested DNSZone.
     */
    public function dnsGetDnsZone(DnsGetDnsZoneRequest $request): DnsGetDnsZoneOKResponse
    {
        $httpRequest = new Request(DnsGetDnsZoneRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return DnsGetDnsZoneOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DnsGetDnsZoneBadRequestResponse::fromResponse($httpResponse),
            429 => DnsGetDnsZoneTooManyRequestsResponse::fromResponse($httpResponse),
            default => DnsGetDnsZoneDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a zone file for a DNSZone.
     *
     * Returns a BIND-compliant DNS zone file per RFC 1035 for the specified dnsZoneId, including all sub zone information. Entering the dnsZoneId of a sub zone will result in an error.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/dns-get-zone-file
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DnsGetZoneFileRequest $request An object representing the request for this operation
     * @return DnsGetZoneFileOKResponse Returns the zone file.
     */
    public function dnsGetZoneFile(DnsGetZoneFileRequest $request): DnsGetZoneFileOKResponse
    {
        $httpRequest = new Request(DnsGetZoneFileRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return DnsGetZoneFileOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DnsGetZoneFileBadRequestResponse::fromResponse($httpResponse),
            429 => DnsGetZoneFileTooManyRequestsResponse::fromResponse($httpResponse),
            default => DnsGetZoneFileDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List DNSZones belonging to a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/dns-list-dns-zones
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DnsListDnsZonesRequest $request An object representing the request for this operation
     * @return DnsListDnsZonesOKResponse An array of DNSZone objects.
     */
    public function dnsListDnsZones(DnsListDnsZonesRequest $request): DnsListDnsZonesOKResponse
    {
        $httpRequest = new Request(DnsListDnsZonesRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return DnsListDnsZonesOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DnsListDnsZonesBadRequestResponse::fromResponse($httpResponse),
            429 => DnsListDnsZonesTooManyRequestsResponse::fromResponse($httpResponse),
            default => DnsListDnsZonesDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Set a record set on a DNSZone to managed.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/dns-set-record-set-managed
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DnsSetRecordSetManagedRequest $request An object representing the request for this operation
     * @return DnsSetRecordSetManagedNoContentResponse The ID of the Ingress the a-records were set for, or an empty object if mx-records were set.
     */
    public function dnsSetRecordSetManaged(DnsSetRecordSetManagedRequest $request): DnsSetRecordSetManagedNoContentResponse
    {
        $httpRequest = new Request(DnsSetRecordSetManagedRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return DnsSetRecordSetManagedNoContentResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DnsSetRecordSetManagedBadRequestResponse::fromResponse($httpResponse),
            429 => DnsSetRecordSetManagedTooManyRequestsResponse::fromResponse($httpResponse),
            default => DnsSetRecordSetManagedDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update a record set on a DNSZone.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/dns-update-record-set
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DnsUpdateRecordSetRequest $request An object representing the request for this operation
     * @return EmptyResponse Record set updated.
     */
    public function dnsUpdateRecordSet(DnsUpdateRecordSetRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DnsUpdateRecordSetRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DnsUpdateRecordSetBadRequestResponse::fromResponse($httpResponse),
            429 => DnsUpdateRecordSetTooManyRequestsResponse::fromResponse($httpResponse),
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
     * @param AbortDomainDeclarationRequest $request An object representing the request for this operation
     * @return EmptyResponse No Content
     */
    public function abortDomainDeclaration(AbortDomainDeclarationRequest $request): EmptyResponse
    {
        $httpRequest = new Request(AbortDomainDeclarationRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => AbortDomainDeclarationBadRequestResponse::fromResponse($httpResponse),
            404 => AbortDomainDeclarationNotFoundResponse::fromResponse($httpResponse),
            429 => AbortDomainDeclarationTooManyRequestsResponse::fromResponse($httpResponse),
            default => AbortDomainDeclarationDefaultResponse::fromResponse($httpResponse),
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
     * @param CheckDomainRegistrabilityRequest $request An object representing the request for this operation
     * @return CheckDomainRegistrabilityOKResponse OK
     */
    public function checkDomainRegistrability(CheckDomainRegistrabilityRequest $request): CheckDomainRegistrabilityOKResponse
    {
        $httpRequest = new Request(CheckDomainRegistrabilityRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return CheckDomainRegistrabilityOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => CheckDomainRegistrabilityBadRequestResponse::fromResponse($httpResponse),
            429 => CheckDomainRegistrabilityTooManyRequestsResponse::fromResponse($httpResponse),
            default => CheckDomainRegistrabilityDefaultResponse::fromResponse($httpResponse),
        });
    }

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
    public function checkDomainTransferability(CheckDomainTransferabilityRequest $request): CheckDomainTransferabilityOKResponse
    {
        $httpRequest = new Request(CheckDomainTransferabilityRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return CheckDomainTransferabilityOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => CheckDomainTransferabilityBadRequestResponse::fromResponse($httpResponse),
            429 => CheckDomainTransferabilityTooManyRequestsResponse::fromResponse($httpResponse),
            default => CheckDomainTransferabilityDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Create an auth code for a Domains transfer-out process.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-create-domain-auth-code
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CreateDomainAuthCodeRequest $request An object representing the request for this operation
     * @return CreateDomainAuthCodeCreatedResponse Created
     */
    public function createDomainAuthCode(CreateDomainAuthCodeRequest $request): CreateDomainAuthCodeCreatedResponse
    {
        $httpRequest = new Request(CreateDomainAuthCodeRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 201) {
            return CreateDomainAuthCodeCreatedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => CreateDomainAuthCodeBadRequestResponse::fromResponse($httpResponse),
            404 => CreateDomainAuthCodeNotFoundResponse::fromResponse($httpResponse),
            429 => CreateDomainAuthCodeTooManyRequestsResponse::fromResponse($httpResponse),
            default => CreateDomainAuthCodeDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Delete a Domain.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-delete-domain
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteDomainRequest $request An object representing the request for this operation
     * @return DeleteDomainOKResponse OK
     */
    public function deleteDomain(DeleteDomainRequest $request): DeleteDomainOKResponse
    {
        $httpRequest = new Request(DeleteDomainRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return DeleteDomainOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeleteDomainBadRequestResponse::fromResponse($httpResponse),
            404 => DeleteDomainNotFoundResponse::fromResponse($httpResponse),
            412 => DeleteDomainPreconditionFailedResponse::fromResponse($httpResponse),
            429 => DeleteDomainTooManyRequestsResponse::fromResponse($httpResponse),
            default => DeleteDomainDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a Domain.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-get-domain
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetDomainRequest $request An object representing the request for this operation
     * @return GetDomainOKResponse OK
     */
    public function getDomain(GetDomainRequest $request): GetDomainOKResponse
    {
        $httpRequest = new Request(GetDomainRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetDomainOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => GetDomainBadRequestResponse::fromResponse($httpResponse),
            404 => GetDomainNotFoundResponse::fromResponse($httpResponse),
            429 => GetDomainTooManyRequestsResponse::fromResponse($httpResponse),
            default => GetDomainDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get the latest screenshot's FileReference belonging to a Domain.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-get-latest-screenshot
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetLatestScreenshotRequest $request An object representing the request for this operation
     * @return GetLatestScreenshotOKResponse OK
     */
    public function getLatestScreenshot(GetLatestScreenshotRequest $request): GetLatestScreenshotOKResponse
    {
        $httpRequest = new Request(GetLatestScreenshotRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetLatestScreenshotOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => GetLatestScreenshotNotFoundResponse::fromResponse($httpResponse),
            429 => GetLatestScreenshotTooManyRequestsResponse::fromResponse($httpResponse),
            default => GetLatestScreenshotDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List Domains
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-list-domains
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListDomainsRequest $request An object representing the request for this operation
     * @return ListDomainsOKResponse OK
     */
    public function listDomains(ListDomainsRequest $request): ListDomainsOKResponse
    {
        $httpRequest = new Request(ListDomainsRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListDomainsOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ListDomainsBadRequestResponse::fromResponse($httpResponse),
            429 => ListDomainsTooManyRequestsResponse::fromResponse($httpResponse),
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
     * @param ListTldContactSchemasRequest $request An object representing the request for this operation
     * @return ListTldContactSchemasOKResponse The JSON-Schema objects.
     */
    public function listTldContactSchemas(ListTldContactSchemasRequest $request): ListTldContactSchemasOKResponse
    {
        $httpRequest = new Request(ListTldContactSchemasRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListTldContactSchemasOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            429 => ListTldContactSchemasTooManyRequestsResponse::fromResponse($httpResponse),
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
     * @param ListTldsRequest $request An object representing the request for this operation
     */
    public function listTlds(ListTldsRequest $request): ListTldsOKResponse
    {
        $httpRequest = new Request(ListTldsRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListTldsOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            429 => ListTldsTooManyRequestsResponse::fromResponse($httpResponse),
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
     * @param ResendDomainEmailRequest $request An object representing the request for this operation
     * @return EmptyResponse No Content
     */
    public function resendDomainEmail(ResendDomainEmailRequest $request): EmptyResponse
    {
        $httpRequest = new Request(ResendDomainEmailRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ResendDomainEmailBadRequestResponse::fromResponse($httpResponse),
            404 => ResendDomainEmailNotFoundResponse::fromResponse($httpResponse),
            412 => ResendDomainEmailPreconditionFailedResponse::fromResponse($httpResponse),
            429 => ResendDomainEmailTooManyRequestsResponse::fromResponse($httpResponse),
            default => ResendDomainEmailDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Suggest a list of domains based on a prompt using AI.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-suggest
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param SuggestRequest $request An object representing the request for this operation
     * @return SuggestOKResponse OK
     */
    public function suggest(SuggestRequest $request): SuggestOKResponse
    {
        $httpRequest = new Request(SuggestRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return SuggestOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => SuggestBadRequestResponse::fromResponse($httpResponse),
            412 => SuggestPreconditionFailedResponse::fromResponse($httpResponse),
            429 => SuggestTooManyRequestsResponse::fromResponse($httpResponse),
            default => SuggestDefaultResponse::fromResponse($httpResponse),
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
     * @param UpdateDomainAuthCodeRequest $request An object representing the request for this operation
     * @return UpdateDomainAuthCodeOKResponse OK
     */
    public function updateDomainAuthCode(UpdateDomainAuthCodeRequest $request): UpdateDomainAuthCodeOKResponse
    {
        $httpRequest = new Request(UpdateDomainAuthCodeRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return UpdateDomainAuthCodeOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateDomainAuthCodeBadRequestResponse::fromResponse($httpResponse),
            404 => UpdateDomainAuthCodeNotFoundResponse::fromResponse($httpResponse),
            429 => UpdateDomainAuthCodeTooManyRequestsResponse::fromResponse($httpResponse),
            default => UpdateDomainAuthCodeDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update a contact of a Domain.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-update-domain-contact
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateDomainContactRequest $request An object representing the request for this operation
     * @return UpdateDomainContactOKResponse OK
     */
    public function updateDomainContact(UpdateDomainContactRequest $request): UpdateDomainContactOKResponse
    {
        $httpRequest = new Request(UpdateDomainContactRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return UpdateDomainContactOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateDomainContactBadRequestResponse::fromResponse($httpResponse),
            404 => UpdateDomainContactNotFoundResponse::fromResponse($httpResponse),
            429 => UpdateDomainContactTooManyRequestsResponse::fromResponse($httpResponse),
            default => UpdateDomainContactDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update the nameservers of a Domain.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-update-domain-nameservers
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateDomainNameserversRequest $request An object representing the request for this operation
     * @return EmptyResponse No Content
     */
    public function updateDomainNameservers(UpdateDomainNameserversRequest $request): EmptyResponse
    {
        $httpRequest = new Request(UpdateDomainNameserversRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateDomainNameserversBadRequestResponse::fromResponse($httpResponse),
            404 => UpdateDomainNameserversNotFoundResponse::fromResponse($httpResponse),
            429 => UpdateDomainNameserversTooManyRequestsResponse::fromResponse($httpResponse),
            default => UpdateDomainNameserversDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update a Domain's project id.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-update-domain-project-id
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateDomainProjectIdRequest $request An object representing the request for this operation
     * @return EmptyResponse No Content
     */
    public function updateDomainProjectId(UpdateDomainProjectIdRequest $request): EmptyResponse
    {
        $httpRequest = new Request(UpdateDomainProjectIdRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateDomainProjectIdBadRequestResponse::fromResponse($httpResponse),
            404 => UpdateDomainProjectIdNotFoundResponse::fromResponse($httpResponse),
            429 => UpdateDomainProjectIdTooManyRequestsResponse::fromResponse($httpResponse),
            default => UpdateDomainProjectIdDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Create an Ingress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ingress-create-ingress
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param IngressCreateIngressRequest $request An object representing the request for this operation
     * @return IngressCreateIngressCreatedResponse Created
     */
    public function ingressCreateIngress(IngressCreateIngressRequest $request): IngressCreateIngressCreatedResponse
    {
        $httpRequest = new Request(IngressCreateIngressRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 201) {
            return IngressCreateIngressCreatedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => IngressCreateIngressNotFoundResponse::fromResponse($httpResponse),
            429 => IngressCreateIngressTooManyRequestsResponse::fromResponse($httpResponse),
            default => IngressCreateIngressDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Delete an Ingress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ingress-delete-ingress
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param IngressDeleteIngressRequest $request An object representing the request for this operation
     * @return EmptyResponse No Content
     */
    public function ingressDeleteIngress(IngressDeleteIngressRequest $request): EmptyResponse
    {
        $httpRequest = new Request(IngressDeleteIngressRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => IngressDeleteIngressNotFoundResponse::fromResponse($httpResponse),
            429 => IngressDeleteIngressTooManyRequestsResponse::fromResponse($httpResponse),
            default => IngressDeleteIngressDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get an Ingress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ingress-get-ingress
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param IngressGetIngressRequest $request An object representing the request for this operation
     * @return IngressGetIngressOKResponse OK
     */
    public function ingressGetIngress(IngressGetIngressRequest $request): IngressGetIngressOKResponse
    {
        $httpRequest = new Request(IngressGetIngressRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return IngressGetIngressOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => IngressGetIngressNotFoundResponse::fromResponse($httpResponse),
            429 => IngressGetIngressTooManyRequestsResponse::fromResponse($httpResponse),
            default => IngressGetIngressDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Verifiy the ownership of an Ingress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ingress-ingress-verify-ownership
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param IngressIngressVerifyOwnershipRequest $request An object representing the request for this operation
     * @return IngressIngressVerifyOwnershipOKResponse OK
     */
    public function ingressIngressVerifyOwnership(IngressIngressVerifyOwnershipRequest $request): IngressIngressVerifyOwnershipOKResponse
    {
        $httpRequest = new Request(IngressIngressVerifyOwnershipRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return IngressIngressVerifyOwnershipOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => IngressIngressVerifyOwnershipBadRequestResponse::fromResponse($httpResponse),
            404 => IngressIngressVerifyOwnershipNotFoundResponse::fromResponse($httpResponse),
            412 => IngressIngressVerifyOwnershipPreconditionFailedResponse::fromResponse($httpResponse),
            429 => IngressIngressVerifyOwnershipTooManyRequestsResponse::fromResponse($httpResponse),
            default => IngressIngressVerifyOwnershipDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List Ingresses.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ingress-list-ingresses
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param IngressListIngressesRequest $request An object representing the request for this operation
     * @return IngressListIngressesOKResponse OK
     */
    public function ingressListIngresses(IngressListIngressesRequest $request): IngressListIngressesOKResponse
    {
        $httpRequest = new Request(IngressListIngressesRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return IngressListIngressesOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => IngressListIngressesNotFoundResponse::fromResponse($httpResponse),
            429 => IngressListIngressesTooManyRequestsResponse::fromResponse($httpResponse),
            default => IngressListIngressesDefaultResponse::fromResponse($httpResponse),
        });
    }

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
    public function ingressListIngressesCompatibleWithCertificate(IngressListIngressesCompatibleWithCertificateRequest $request): IngressListIngressesCompatibleWithCertificateOKResponse
    {
        $httpRequest = new Request(IngressListIngressesCompatibleWithCertificateRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return IngressListIngressesCompatibleWithCertificateOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => IngressListIngressesCompatibleWithCertificateBadRequestResponse::fromResponse($httpResponse),
            404 => IngressListIngressesCompatibleWithCertificateNotFoundResponse::fromResponse($httpResponse),
            429 => IngressListIngressesCompatibleWithCertificateTooManyRequestsResponse::fromResponse($httpResponse),
            default => IngressListIngressesCompatibleWithCertificateDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Request the ACME certificate issuance of an Ingress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ingress-request-ingress-acme-certificate-issuance
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param IngressRequestIngressAcmeCertificateIssuanceRequest $request An object representing the request for this operation
     * @return EmptyResponse No Content
     */
    public function ingressRequestIngressAcmeCertificateIssuance(IngressRequestIngressAcmeCertificateIssuanceRequest $request): EmptyResponse
    {
        $httpRequest = new Request(IngressRequestIngressAcmeCertificateIssuanceRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => IngressRequestIngressAcmeCertificateIssuanceBadRequestResponse::fromResponse($httpResponse),
            404 => IngressRequestIngressAcmeCertificateIssuanceNotFoundResponse::fromResponse($httpResponse),
            429 => IngressRequestIngressAcmeCertificateIssuanceTooManyRequestsResponse::fromResponse($httpResponse),
            default => IngressRequestIngressAcmeCertificateIssuanceDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update the paths of an Ingress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ingress-update-ingress-paths
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param IngressUpdateIngressPathsRequest $request An object representing the request for this operation
     * @return EmptyResponse No Content
     */
    public function ingressUpdateIngressPaths(IngressUpdateIngressPathsRequest $request): EmptyResponse
    {
        $httpRequest = new Request(IngressUpdateIngressPathsRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => IngressUpdateIngressPathsNotFoundResponse::fromResponse($httpResponse),
            429 => IngressUpdateIngressPathsTooManyRequestsResponse::fromResponse($httpResponse),
            default => IngressUpdateIngressPathsDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update the tls settings of an Ingress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ingress-update-ingress-tls
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param IngressUpdateIngressTlsRequest $request An object representing the request for this operation
     * @return IngressUpdateIngressTlsOKResponse OK
     */
    public function ingressUpdateIngressTls(IngressUpdateIngressTlsRequest $request): IngressUpdateIngressTlsOKResponse
    {
        $httpRequest = new Request(IngressUpdateIngressTlsRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return IngressUpdateIngressTlsOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            403 => IngressUpdateIngressTlsForbiddenResponse::fromResponse($httpResponse),
            404 => IngressUpdateIngressTlsNotFoundResponse::fromResponse($httpResponse),
            412 => IngressUpdateIngressTlsPreconditionFailedResponse::fromResponse($httpResponse),
            429 => IngressUpdateIngressTlsTooManyRequestsResponse::fromResponse($httpResponse),
            default => IngressUpdateIngressTlsDefaultResponse::fromResponse($httpResponse),
        });
    }

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
    public function sslCheckReplaceCertificate(SslCheckReplaceCertificateRequest $request): SslCheckReplaceCertificateOKResponse
    {
        $httpRequest = new Request(SslCheckReplaceCertificateRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return SslCheckReplaceCertificateOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => SslCheckReplaceCertificateNotFoundResponse::fromResponse($httpResponse),
            429 => SslCheckReplaceCertificateTooManyRequestsResponse::fromResponse($httpResponse),
            default => SslCheckReplaceCertificateDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Create a CertificateRequest.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ssl-create-certificate-request
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param SslCreateCertificateRequestRequest $request An object representing the request for this operation
     * @return SslCreateCertificateRequestCreatedResponse Created
     */
    public function sslCreateCertificateRequest(SslCreateCertificateRequestRequest $request): SslCreateCertificateRequestCreatedResponse
    {
        $httpRequest = new Request(SslCreateCertificateRequestRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 201) {
            return SslCreateCertificateRequestCreatedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => SslCreateCertificateRequestBadRequestResponse::fromResponse($httpResponse),
            404 => SslCreateCertificateRequestNotFoundResponse::fromResponse($httpResponse),
            429 => SslCreateCertificateRequestTooManyRequestsResponse::fromResponse($httpResponse),
            default => SslCreateCertificateRequestDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Delete a Certificate.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ssl-delete-certificate
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param SslDeleteCertificateRequest $request An object representing the request for this operation
     * @return EmptyResponse No Content
     */
    public function sslDeleteCertificate(SslDeleteCertificateRequest $request): EmptyResponse
    {
        $httpRequest = new Request(SslDeleteCertificateRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => SslDeleteCertificateNotFoundResponse::fromResponse($httpResponse),
            429 => SslDeleteCertificateTooManyRequestsResponse::fromResponse($httpResponse),
            default => SslDeleteCertificateDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Delete a CertificateRequest.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ssl-delete-certificate-request
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param SslDeleteCertificateRequestRequest $request An object representing the request for this operation
     * @return EmptyResponse No Content
     */
    public function sslDeleteCertificateRequest(SslDeleteCertificateRequestRequest $request): EmptyResponse
    {
        $httpRequest = new Request(SslDeleteCertificateRequestRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => SslDeleteCertificateRequestNotFoundResponse::fromResponse($httpResponse),
            429 => SslDeleteCertificateRequestTooManyRequestsResponse::fromResponse($httpResponse),
            default => SslDeleteCertificateRequestDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a Certificate.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ssl-get-certificate
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param SslGetCertificateRequest $request An object representing the request for this operation
     * @return SslGetCertificateOKResponse OK
     */
    public function sslGetCertificate(SslGetCertificateRequest $request): SslGetCertificateOKResponse
    {
        $httpRequest = new Request(SslGetCertificateRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return SslGetCertificateOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => SslGetCertificateNotFoundResponse::fromResponse($httpResponse),
            429 => SslGetCertificateTooManyRequestsResponse::fromResponse($httpResponse),
            default => SslGetCertificateDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a CertificateRequest.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ssl-get-certificate-request
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param SslGetCertificateRequestRequest $request An object representing the request for this operation
     * @return SslGetCertificateRequestOKResponse OK
     */
    public function sslGetCertificateRequest(SslGetCertificateRequestRequest $request): SslGetCertificateRequestOKResponse
    {
        $httpRequest = new Request(SslGetCertificateRequestRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return SslGetCertificateRequestOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => SslGetCertificateRequestNotFoundResponse::fromResponse($httpResponse),
            429 => SslGetCertificateRequestTooManyRequestsResponse::fromResponse($httpResponse),
            default => SslGetCertificateRequestDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List CertificateRequests belonging to a Project or an Ingress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ssl-list-certificate-requests
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param SslListCertificateRequestsRequest $request An object representing the request for this operation
     * @return SslListCertificateRequestsOKResponse OK
     */
    public function sslListCertificateRequests(SslListCertificateRequestsRequest $request): SslListCertificateRequestsOKResponse
    {
        $httpRequest = new Request(SslListCertificateRequestsRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return SslListCertificateRequestsOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => SslListCertificateRequestsNotFoundResponse::fromResponse($httpResponse),
            429 => SslListCertificateRequestsTooManyRequestsResponse::fromResponse($httpResponse),
            default => SslListCertificateRequestsDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List Certificates belonging to a Project or an Ingress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ssl-list-certificates
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param SslListCertificatesRequest $request An object representing the request for this operation
     * @return SslListCertificatesOKResponse OK
     */
    public function sslListCertificates(SslListCertificatesRequest $request): SslListCertificatesOKResponse
    {
        $httpRequest = new Request(SslListCertificatesRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return SslListCertificatesOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => SslListCertificatesNotFoundResponse::fromResponse($httpResponse),
            429 => SslListCertificatesTooManyRequestsResponse::fromResponse($httpResponse),
            default => SslListCertificatesDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update a Certificate.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ssl-replace-certificate
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param SslReplaceCertificateRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function sslReplaceCertificate(SslReplaceCertificateRequest $request): EmptyResponse
    {
        $httpRequest = new Request(SslReplaceCertificateRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => SslReplaceCertificateBadRequestResponse::fromResponse($httpResponse),
            404 => SslReplaceCertificateNotFoundResponse::fromResponse($httpResponse),
            429 => SslReplaceCertificateTooManyRequestsResponse::fromResponse($httpResponse),
            default => SslReplaceCertificateDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update the certificate of a CertificateRequest.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ssl-set-certificate-request-certificate
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param SslSetCertificateRequestCertificateRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function sslSetCertificateRequestCertificate(SslSetCertificateRequestCertificateRequest $request): EmptyResponse
    {
        $httpRequest = new Request(SslSetCertificateRequestCertificateRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => SslSetCertificateRequestCertificateBadRequestResponse::fromResponse($httpResponse),
            404 => SslSetCertificateRequestCertificateNotFoundResponse::fromResponse($httpResponse),
            412 => SslSetCertificateRequestCertificatePreconditionFailedResponse::fromResponse($httpResponse),
            429 => SslSetCertificateRequestCertificateTooManyRequestsResponse::fromResponse($httpResponse),
            default => SslSetCertificateRequestCertificateDefaultResponse::fromResponse($httpResponse),
        });
    }
}
