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
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ChangeOwnercOfDomainV2Deprecated\ChangeOwnercOfDomainV2DeprecatedBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ChangeOwnercOfDomainV2Deprecated\ChangeOwnercOfDomainV2DeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ChangeOwnercOfDomainV2Deprecated\ChangeOwnercOfDomainV2DeprecatedNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ChangeOwnercOfDomainV2Deprecated\ChangeOwnercOfDomainV2DeprecatedOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ChangeOwnercOfDomainV2Deprecated\ChangeOwnercOfDomainV2DeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ChangeOwnercOfDomainV2Deprecated\ChangeOwnercOfDomainV2DeprecatedTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ChangeProjectOfDomainV2Deprecated\ChangeProjectOfDomainV2DeprecatedBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ChangeProjectOfDomainV2Deprecated\ChangeProjectOfDomainV2DeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ChangeProjectOfDomainV2Deprecated\ChangeProjectOfDomainV2DeprecatedNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ChangeProjectOfDomainV2Deprecated\ChangeProjectOfDomainV2DeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ChangeProjectOfDomainV2Deprecated\ChangeProjectOfDomainV2DeprecatedTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CheckDomainRegistrability\CheckDomainRegistrabilityBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CheckDomainRegistrability\CheckDomainRegistrabilityDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CheckDomainRegistrability\CheckDomainRegistrabilityOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CheckDomainRegistrability\CheckDomainRegistrabilityRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CheckDomainRegistrability\CheckDomainRegistrabilityTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CheckDomainRegistrabilityV2Deprecated\CheckDomainRegistrabilityV2DeprecatedBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CheckDomainRegistrabilityV2Deprecated\CheckDomainRegistrabilityV2DeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CheckDomainRegistrabilityV2Deprecated\CheckDomainRegistrabilityV2DeprecatedOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CheckDomainRegistrabilityV2Deprecated\CheckDomainRegistrabilityV2DeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\CheckDomainRegistrabilityV2Deprecated\CheckDomainRegistrabilityV2DeprecatedTooManyRequestsResponse;
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
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareNameserversV2Deprecated\DeclareNameserversV2DeprecatedBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareNameserversV2Deprecated\DeclareNameserversV2DeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareNameserversV2Deprecated\DeclareNameserversV2DeprecatedNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareNameserversV2Deprecated\DeclareNameserversV2DeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareNameserversV2Deprecated\DeclareNameserversV2DeprecatedTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareProcessChangeAuthcodeV2Deprecated\DeclareProcessChangeAuthcodeV2DeprecatedBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareProcessChangeAuthcodeV2Deprecated\DeclareProcessChangeAuthcodeV2DeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareProcessChangeAuthcodeV2Deprecated\DeclareProcessChangeAuthcodeV2DeprecatedNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareProcessChangeAuthcodeV2Deprecated\DeclareProcessChangeAuthcodeV2DeprecatedOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareProcessChangeAuthcodeV2Deprecated\DeclareProcessChangeAuthcodeV2DeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareProcessChangeAuthcodeV2Deprecated\DeclareProcessChangeAuthcodeV2DeprecatedTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareProcessChangeHandlesV2Deprecated\DeclareProcessChangeHandlesV2DeprecatedBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareProcessChangeHandlesV2Deprecated\DeclareProcessChangeHandlesV2DeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareProcessChangeHandlesV2Deprecated\DeclareProcessChangeHandlesV2DeprecatedNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareProcessChangeHandlesV2Deprecated\DeclareProcessChangeHandlesV2DeprecatedOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareProcessChangeHandlesV2Deprecated\DeclareProcessChangeHandlesV2DeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareProcessChangeHandlesV2Deprecated\DeclareProcessChangeHandlesV2DeprecatedTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeleteDomain\DeleteDomainBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeleteDomain\DeleteDomainDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeleteDomain\DeleteDomainNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeleteDomain\DeleteDomainOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeleteDomain\DeleteDomainPreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeleteDomain\DeleteDomainRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeleteDomain\DeleteDomainTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainGetScreenshotForDomain\DeprecatedDomainGetScreenshotForDomainDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainGetScreenshotForDomain\DeprecatedDomainGetScreenshotForDomainNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainGetScreenshotForDomain\DeprecatedDomainGetScreenshotForDomainOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainGetScreenshotForDomain\DeprecatedDomainGetScreenshotForDomainRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainGetScreenshotForDomain\DeprecatedDomainGetScreenshotForDomainTooManyRequestsResponse;
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
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsListDnsZones\DnsListDnsZonesBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsListDnsZones\DnsListDnsZonesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsListDnsZones\DnsListDnsZonesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsListDnsZones\DnsListDnsZonesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsListDnsZones\DnsListDnsZonesTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordASetCustomDeprecated\DnsRecordASetCustomDeprecatedBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordASetCustomDeprecated\DnsRecordASetCustomDeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordASetCustomDeprecated\DnsRecordASetCustomDeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordASetCustomDeprecated\DnsRecordASetCustomDeprecatedTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordASetManagedByIngressDeprecated\DnsRecordASetManagedByIngressDeprecatedBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordASetManagedByIngressDeprecated\DnsRecordASetManagedByIngressDeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordASetManagedByIngressDeprecated\DnsRecordASetManagedByIngressDeprecatedNoContentResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordASetManagedByIngressDeprecated\DnsRecordASetManagedByIngressDeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordASetManagedByIngressDeprecated\DnsRecordASetManagedByIngressDeprecatedTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordCnameSetDeprecated\DnsRecordCnameSetDeprecatedBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordCnameSetDeprecated\DnsRecordCnameSetDeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordCnameSetDeprecated\DnsRecordCnameSetDeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordCnameSetDeprecated\DnsRecordCnameSetDeprecatedTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordMxSetCustomDeprecated\DnsRecordMxSetCustomDeprecatedBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordMxSetCustomDeprecated\DnsRecordMxSetCustomDeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordMxSetCustomDeprecated\DnsRecordMxSetCustomDeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordMxSetCustomDeprecated\DnsRecordMxSetCustomDeprecatedTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordMxSetManagedDeprecated\DnsRecordMxSetManagedDeprecatedBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordMxSetManagedDeprecated\DnsRecordMxSetManagedDeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordMxSetManagedDeprecated\DnsRecordMxSetManagedDeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordMxSetManagedDeprecated\DnsRecordMxSetManagedDeprecatedTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordSrvSetDeprecated\DnsRecordSrvSetDeprecatedBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordSrvSetDeprecated\DnsRecordSrvSetDeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordSrvSetDeprecated\DnsRecordSrvSetDeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordSrvSetDeprecated\DnsRecordSrvSetDeprecatedTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordTxtSetDeprecated\DnsRecordTxtSetDeprecatedBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordTxtSetDeprecated\DnsRecordTxtSetDeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordTxtSetDeprecated\DnsRecordTxtSetDeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordTxtSetDeprecated\DnsRecordTxtSetDeprecatedTooManyRequestsResponse;
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
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetHandleFieldsV2Deprecated\GetHandleFieldsV2DeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetHandleFieldsV2Deprecated\GetHandleFieldsV2DeprecatedOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetHandleFieldsV2Deprecated\GetHandleFieldsV2DeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\GetHandleFieldsV2Deprecated\GetHandleFieldsV2DeprecatedTooManyRequestsResponse;
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
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressListIngressesV2Deprecated\IngressListIngressesV2DeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressListIngressesV2Deprecated\IngressListIngressesV2DeprecatedNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressListIngressesV2Deprecated\IngressListIngressesV2DeprecatedOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressListIngressesV2Deprecated\IngressListIngressesV2DeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressListIngressesV2Deprecated\IngressListIngressesV2DeprecatedTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressPathsDeprecated\IngressPathsDeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressPathsDeprecated\IngressPathsDeprecatedNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressPathsDeprecated\IngressPathsDeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressPathsDeprecated\IngressPathsDeprecatedTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressRequestIngressAcmeCertificateIssuance\IngressRequestIngressAcmeCertificateIssuanceBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressRequestIngressAcmeCertificateIssuance\IngressRequestIngressAcmeCertificateIssuanceDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressRequestIngressAcmeCertificateIssuance\IngressRequestIngressAcmeCertificateIssuanceNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressRequestIngressAcmeCertificateIssuance\IngressRequestIngressAcmeCertificateIssuanceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressRequestIngressAcmeCertificateIssuance\IngressRequestIngressAcmeCertificateIssuanceTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressTlsDeprecated\IngressTlsDeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressTlsDeprecated\IngressTlsDeprecatedNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressTlsDeprecated\IngressTlsDeprecatedOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressTlsDeprecated\IngressTlsDeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressTlsDeprecated\IngressTlsDeprecatedTooManyRequestsResponse;
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
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ListDomainsV2Deprecated\ListDomainsV2DeprecatedBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ListDomainsV2Deprecated\ListDomainsV2DeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ListDomainsV2Deprecated\ListDomainsV2DeprecatedOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ListDomainsV2Deprecated\ListDomainsV2DeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\ListDomainsV2Deprecated\ListDomainsV2DeprecatedTooManyRequestsResponse;
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
     * updates a-records for a specific zone
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/dns-record-a-set-custom-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DnsRecordASetCustomDeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse recordset updated
     */
    public function dnsRecordASetCustomDeprecated(DnsRecordASetCustomDeprecatedRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DnsRecordASetCustomDeprecatedRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DnsRecordASetCustomDeprecatedBadRequestResponse::fromResponse($httpResponse),
            429 => DnsRecordASetCustomDeprecatedTooManyRequestsResponse::fromResponse($httpResponse),
            default => DnsRecordASetCustomDeprecatedDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * set a-records managed by ingress for a specific zone
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/dns-record-a-set-managed-by-ingress-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DnsRecordASetManagedByIngressDeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return DnsRecordASetManagedByIngressDeprecatedNoContentResponse zone set managed by ingressId
     */
    public function dnsRecordASetManagedByIngressDeprecated(DnsRecordASetManagedByIngressDeprecatedRequest $request): DnsRecordASetManagedByIngressDeprecatedNoContentResponse
    {
        $httpRequest = new Request(DnsRecordASetManagedByIngressDeprecatedRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return DnsRecordASetManagedByIngressDeprecatedNoContentResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DnsRecordASetManagedByIngressDeprecatedBadRequestResponse::fromResponse($httpResponse),
            429 => DnsRecordASetManagedByIngressDeprecatedTooManyRequestsResponse::fromResponse($httpResponse),
            default => DnsRecordASetManagedByIngressDeprecatedDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * updates cname-record for a specific zone
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/dns-record-cname-set-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DnsRecordCnameSetDeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse recordset updated
     */
    public function dnsRecordCnameSetDeprecated(DnsRecordCnameSetDeprecatedRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DnsRecordCnameSetDeprecatedRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DnsRecordCnameSetDeprecatedBadRequestResponse::fromResponse($httpResponse),
            429 => DnsRecordCnameSetDeprecatedTooManyRequestsResponse::fromResponse($httpResponse),
            default => DnsRecordCnameSetDeprecatedDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * updates mx-records for a specific zone
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/dns-record-mx-set-custom-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DnsRecordMxSetCustomDeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse recordset updated
     */
    public function dnsRecordMxSetCustomDeprecated(DnsRecordMxSetCustomDeprecatedRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DnsRecordMxSetCustomDeprecatedRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DnsRecordMxSetCustomDeprecatedBadRequestResponse::fromResponse($httpResponse),
            429 => DnsRecordMxSetCustomDeprecatedTooManyRequestsResponse::fromResponse($httpResponse),
            default => DnsRecordMxSetCustomDeprecatedDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * sets mx-records to managed for a specific zone
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/dns-record-mx-set-managed-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DnsRecordMxSetManagedDeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse recordset updated
     */
    public function dnsRecordMxSetManagedDeprecated(DnsRecordMxSetManagedDeprecatedRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DnsRecordMxSetManagedDeprecatedRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DnsRecordMxSetManagedDeprecatedBadRequestResponse::fromResponse($httpResponse),
            429 => DnsRecordMxSetManagedDeprecatedTooManyRequestsResponse::fromResponse($httpResponse),
            default => DnsRecordMxSetManagedDeprecatedDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * updates srv-records for a specific zone
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/dns-record-srv-set-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DnsRecordSrvSetDeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse recordset updated
     */
    public function dnsRecordSrvSetDeprecated(DnsRecordSrvSetDeprecatedRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DnsRecordSrvSetDeprecatedRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DnsRecordSrvSetDeprecatedBadRequestResponse::fromResponse($httpResponse),
            429 => DnsRecordSrvSetDeprecatedTooManyRequestsResponse::fromResponse($httpResponse),
            default => DnsRecordSrvSetDeprecatedDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * updates txt-records for a specific zone
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/dns-record-txt-set-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DnsRecordTxtSetDeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse recordset updated
     */
    public function dnsRecordTxtSetDeprecated(DnsRecordTxtSetDeprecatedRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DnsRecordTxtSetDeprecatedRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DnsRecordTxtSetDeprecatedBadRequestResponse::fromResponse($httpResponse),
            429 => DnsRecordTxtSetDeprecatedTooManyRequestsResponse::fromResponse($httpResponse),
            default => DnsRecordTxtSetDeprecatedDefaultResponse::fromResponse($httpResponse),
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
     * Change the owner contact of a domain.
     *
     * Change the domain owner of a fully registered domain.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-change-ownerc-of-domain-v2-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ChangeOwnercOfDomainV2DeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return ChangeOwnercOfDomainV2DeprecatedOKResponse OK
     */
    public function changeOwnercOfDomainV2Deprecated(ChangeOwnercOfDomainV2DeprecatedRequest $request): ChangeOwnercOfDomainV2DeprecatedOKResponse
    {
        $httpRequest = new Request(ChangeOwnercOfDomainV2DeprecatedRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ChangeOwnercOfDomainV2DeprecatedOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ChangeOwnercOfDomainV2DeprecatedBadRequestResponse::fromResponse($httpResponse),
            404 => ChangeOwnercOfDomainV2DeprecatedNotFoundResponse::fromResponse($httpResponse),
            429 => ChangeOwnercOfDomainV2DeprecatedTooManyRequestsResponse::fromResponse($httpResponse),
            default => ChangeOwnercOfDomainV2DeprecatedDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Change the Project relation of a Domain.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-change-project-of-domain-v2-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ChangeProjectOfDomainV2DeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse No Content
     */
    public function changeProjectOfDomainV2Deprecated(ChangeProjectOfDomainV2DeprecatedRequest $request): EmptyResponse
    {
        $httpRequest = new Request(ChangeProjectOfDomainV2DeprecatedRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ChangeProjectOfDomainV2DeprecatedBadRequestResponse::fromResponse($httpResponse),
            404 => ChangeProjectOfDomainV2DeprecatedNotFoundResponse::fromResponse($httpResponse),
            429 => ChangeProjectOfDomainV2DeprecatedTooManyRequestsResponse::fromResponse($httpResponse),
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
     * Check if a Domain is available to register.
     *
     * If false, you have to start a transfer with an auth code instead.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-check-domain-registrability-v2-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CheckDomainRegistrabilityV2DeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return CheckDomainRegistrabilityV2DeprecatedOKResponse OK
     */
    public function checkDomainRegistrabilityV2Deprecated(CheckDomainRegistrabilityV2DeprecatedRequest $request): CheckDomainRegistrabilityV2DeprecatedOKResponse
    {
        $httpRequest = new Request(CheckDomainRegistrabilityV2DeprecatedRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return CheckDomainRegistrabilityV2DeprecatedOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => CheckDomainRegistrabilityV2DeprecatedBadRequestResponse::fromResponse($httpResponse),
            429 => CheckDomainRegistrabilityV2DeprecatedTooManyRequestsResponse::fromResponse($httpResponse),
            default => CheckDomainRegistrabilityV2DeprecatedDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Check if a Domain is available to transfer.
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
     * Change all nameservers of a Domain.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-declare-nameservers-v2-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeclareNameserversV2DeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse No Content
     */
    public function declareNameserversV2Deprecated(DeclareNameserversV2DeprecatedRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeclareNameserversV2DeprecatedRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeclareNameserversV2DeprecatedBadRequestResponse::fromResponse($httpResponse),
            404 => DeclareNameserversV2DeprecatedNotFoundResponse::fromResponse($httpResponse),
            429 => DeclareNameserversV2DeprecatedTooManyRequestsResponse::fromResponse($httpResponse),
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
     * @param DeclareProcessChangeAuthcodeV2DeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return DeclareProcessChangeAuthcodeV2DeprecatedOKResponse OK
     */
    public function declareProcessChangeAuthcodeV2Deprecated(DeclareProcessChangeAuthcodeV2DeprecatedRequest $request): DeclareProcessChangeAuthcodeV2DeprecatedOKResponse
    {
        $httpRequest = new Request(DeclareProcessChangeAuthcodeV2DeprecatedRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return DeclareProcessChangeAuthcodeV2DeprecatedOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeclareProcessChangeAuthcodeV2DeprecatedBadRequestResponse::fromResponse($httpResponse),
            404 => DeclareProcessChangeAuthcodeV2DeprecatedNotFoundResponse::fromResponse($httpResponse),
            429 => DeclareProcessChangeAuthcodeV2DeprecatedTooManyRequestsResponse::fromResponse($httpResponse),
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
     * @param DeclareProcessChangeHandlesV2DeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return DeclareProcessChangeHandlesV2DeprecatedOKResponse OK
     */
    public function declareProcessChangeHandlesV2Deprecated(DeclareProcessChangeHandlesV2DeprecatedRequest $request): DeclareProcessChangeHandlesV2DeprecatedOKResponse
    {
        $httpRequest = new Request(DeclareProcessChangeHandlesV2DeprecatedRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return DeclareProcessChangeHandlesV2DeprecatedOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeclareProcessChangeHandlesV2DeprecatedBadRequestResponse::fromResponse($httpResponse),
            404 => DeclareProcessChangeHandlesV2DeprecatedNotFoundResponse::fromResponse($httpResponse),
            429 => DeclareProcessChangeHandlesV2DeprecatedTooManyRequestsResponse::fromResponse($httpResponse),
            default => DeclareProcessChangeHandlesV2DeprecatedDefaultResponse::fromResponse($httpResponse),
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
     * Get a HandleSchema.
     *
     * Get required handle fields of a registrar for your domain process (transfer/registration).
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-get-handle-fields-v2-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetHandleFieldsV2DeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return GetHandleFieldsV2DeprecatedOKResponse The parseable json schema objects
     */
    public function getHandleFieldsV2Deprecated(GetHandleFieldsV2DeprecatedRequest $request): GetHandleFieldsV2DeprecatedOKResponse
    {
        $httpRequest = new Request(GetHandleFieldsV2DeprecatedRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetHandleFieldsV2DeprecatedOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            429 => GetHandleFieldsV2DeprecatedTooManyRequestsResponse::fromResponse($httpResponse),
            default => GetHandleFieldsV2DeprecatedDefaultResponse::fromResponse($httpResponse),
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
     * List Domains belonging to a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/domain-list-domains-v2-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListDomainsV2DeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return ListDomainsV2DeprecatedOKResponse OK
     */
    public function listDomainsV2Deprecated(ListDomainsV2DeprecatedRequest $request): ListDomainsV2DeprecatedOKResponse
    {
        $httpRequest = new Request(ListDomainsV2DeprecatedRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListDomainsV2DeprecatedOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ListDomainsV2DeprecatedBadRequestResponse::fromResponse($httpResponse),
            429 => ListDomainsV2DeprecatedTooManyRequestsResponse::fromResponse($httpResponse),
            default => ListDomainsV2DeprecatedDefaultResponse::fromResponse($httpResponse),
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
     * List Ingresses belonging to a project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ingress-list-ingresses-v2-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param IngressListIngressesV2DeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return IngressListIngressesV2DeprecatedOKResponse OK
     */
    public function ingressListIngressesV2Deprecated(IngressListIngressesV2DeprecatedRequest $request): IngressListIngressesV2DeprecatedOKResponse
    {
        $httpRequest = new Request(IngressListIngressesV2DeprecatedRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return IngressListIngressesV2DeprecatedOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => IngressListIngressesV2DeprecatedNotFoundResponse::fromResponse($httpResponse),
            429 => IngressListIngressesV2DeprecatedTooManyRequestsResponse::fromResponse($httpResponse),
            default => IngressListIngressesV2DeprecatedDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update an Ingresses paths.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ingress-paths-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param IngressPathsDeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse No Content
     */
    public function ingressPathsDeprecated(IngressPathsDeprecatedRequest $request): EmptyResponse
    {
        $httpRequest = new Request(IngressPathsDeprecatedRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => IngressPathsDeprecatedNotFoundResponse::fromResponse($httpResponse),
            429 => IngressPathsDeprecatedTooManyRequestsResponse::fromResponse($httpResponse),
            default => IngressPathsDeprecatedDefaultResponse::fromResponse($httpResponse),
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
     * Update an Ingresses tls settings.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Domain/operation/ingress-tls-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param IngressTlsDeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return IngressTlsDeprecatedOKResponse OK
     */
    public function ingressTlsDeprecated(IngressTlsDeprecatedRequest $request): IngressTlsDeprecatedOKResponse
    {
        $httpRequest = new Request(IngressTlsDeprecatedRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return IngressTlsDeprecatedOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => IngressTlsDeprecatedNotFoundResponse::fromResponse($httpResponse),
            429 => IngressTlsDeprecatedTooManyRequestsResponse::fromResponse($httpResponse),
            default => IngressTlsDeprecatedDefaultResponse::fromResponse($httpResponse),
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
}
