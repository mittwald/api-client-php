<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Container;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use Mittwald\ApiClient\Client\EmptyResponse;
use Mittwald\ApiClient\Client\StringResponse;
use Mittwald\ApiClient\Error\UnexpectedResponseException;
use Mittwald\ApiClient\Generated\V2\Clients\Container\AddTemplateComponent\AddTemplateComponentBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\AddTemplateComponent\AddTemplateComponentConflictResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\AddTemplateComponent\AddTemplateComponentDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\AddTemplateComponent\AddTemplateComponentForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\AddTemplateComponent\AddTemplateComponentInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\AddTemplateComponent\AddTemplateComponentNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\AddTemplateComponent\AddTemplateComponentPreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\AddTemplateComponent\AddTemplateComponentRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\AddTemplateComponent\AddTemplateComponentTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\CallPullImageWebhookForService\CallPullImageWebhookForServiceBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\CallPullImageWebhookForService\CallPullImageWebhookForServiceDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\CallPullImageWebhookForService\CallPullImageWebhookForServiceInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\CallPullImageWebhookForService\CallPullImageWebhookForServiceNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\CallPullImageWebhookForService\CallPullImageWebhookForServicePreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\CallPullImageWebhookForService\CallPullImageWebhookForServiceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\CallPullImageWebhookForService\CallPullImageWebhookForServiceTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\CallPullImageWebhookForService\CallPullImageWebhookForServiceUnauthorizedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\CreateRegistry\CreateRegistryBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\CreateRegistry\CreateRegistryConflictResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\CreateRegistry\CreateRegistryCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\CreateRegistry\CreateRegistryDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\CreateRegistry\CreateRegistryForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\CreateRegistry\CreateRegistryInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\CreateRegistry\CreateRegistryNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\CreateRegistry\CreateRegistryPreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\CreateRegistry\CreateRegistryRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\CreateRegistry\CreateRegistryTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\CreateStack\CreateStackBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\CreateStack\CreateStackConflictResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\CreateStack\CreateStackCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\CreateStack\CreateStackDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\CreateStack\CreateStackForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\CreateStack\CreateStackInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\CreateStack\CreateStackNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\CreateStack\CreateStackPreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\CreateStack\CreateStackRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\CreateStack\CreateStackTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeclareStack\DeclareStackBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeclareStack\DeclareStackDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeclareStack\DeclareStackForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeclareStack\DeclareStackInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeclareStack\DeclareStackOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeclareStack\DeclareStackPreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeclareStack\DeclareStackRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeclareStack\DeclareStackTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeleteRegistry\DeleteRegistryBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeleteRegistry\DeleteRegistryDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeleteRegistry\DeleteRegistryForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeleteRegistry\DeleteRegistryInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeleteRegistry\DeleteRegistryNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeleteRegistry\DeleteRegistryRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeleteRegistry\DeleteRegistryTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeleteStack\DeleteStackBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeleteStack\DeleteStackDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeleteStack\DeleteStackForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeleteStack\DeleteStackInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeleteStack\DeleteStackNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeleteStack\DeleteStackRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeleteStack\DeleteStackTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeleteVolume\DeleteVolumeBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeleteVolume\DeleteVolumeDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeleteVolume\DeleteVolumeForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeleteVolume\DeleteVolumeInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeleteVolume\DeleteVolumePreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeleteVolume\DeleteVolumeRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeleteVolume\DeleteVolumeTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeprecatedContainerGetTemplateIcon\DeprecatedContainerGetTemplateIconBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeprecatedContainerGetTemplateIcon\DeprecatedContainerGetTemplateIconDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeprecatedContainerGetTemplateIcon\DeprecatedContainerGetTemplateIconForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeprecatedContainerGetTemplateIcon\DeprecatedContainerGetTemplateIconInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeprecatedContainerGetTemplateIcon\DeprecatedContainerGetTemplateIconNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeprecatedContainerGetTemplateIcon\DeprecatedContainerGetTemplateIconRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeprecatedContainerGetTemplateIcon\DeprecatedContainerGetTemplateIconServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeprecatedContainerGetTemplateIcon\DeprecatedContainerGetTemplateIconTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeprecatedContainerValidateContainerRegistryUri\DeprecatedContainerValidateContainerRegistryUriBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeprecatedContainerValidateContainerRegistryUri\DeprecatedContainerValidateContainerRegistryUriDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeprecatedContainerValidateContainerRegistryUri\DeprecatedContainerValidateContainerRegistryUriForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeprecatedContainerValidateContainerRegistryUri\DeprecatedContainerValidateContainerRegistryUriInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeprecatedContainerValidateContainerRegistryUri\DeprecatedContainerValidateContainerRegistryUriNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeprecatedContainerValidateContainerRegistryUri\DeprecatedContainerValidateContainerRegistryUriOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeprecatedContainerValidateContainerRegistryUri\DeprecatedContainerValidateContainerRegistryUriPreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeprecatedContainerValidateContainerRegistryUri\DeprecatedContainerValidateContainerRegistryUriRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeprecatedContainerValidateContainerRegistryUri\DeprecatedContainerValidateContainerRegistryUriTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeprecatedContainerValidateRegistryCredentials\DeprecatedContainerValidateRegistryCredentialsBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeprecatedContainerValidateRegistryCredentials\DeprecatedContainerValidateRegistryCredentialsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeprecatedContainerValidateRegistryCredentials\DeprecatedContainerValidateRegistryCredentialsForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeprecatedContainerValidateRegistryCredentials\DeprecatedContainerValidateRegistryCredentialsInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeprecatedContainerValidateRegistryCredentials\DeprecatedContainerValidateRegistryCredentialsNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeprecatedContainerValidateRegistryCredentials\DeprecatedContainerValidateRegistryCredentialsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeprecatedContainerValidateRegistryCredentials\DeprecatedContainerValidateRegistryCredentialsPreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeprecatedContainerValidateRegistryCredentials\DeprecatedContainerValidateRegistryCredentialsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeprecatedContainerValidateRegistryCredentials\DeprecatedContainerValidateRegistryCredentialsTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetContainerImageConfig\GetContainerImageConfigBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetContainerImageConfig\GetContainerImageConfigDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetContainerImageConfig\GetContainerImageConfigForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetContainerImageConfig\GetContainerImageConfigInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetContainerImageConfig\GetContainerImageConfigNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetContainerImageConfig\GetContainerImageConfigOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetContainerImageConfig\GetContainerImageConfigPreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetContainerImageConfig\GetContainerImageConfigRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetContainerImageConfig\GetContainerImageConfigTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetRegistry\GetRegistryBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetRegistry\GetRegistryDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetRegistry\GetRegistryForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetRegistry\GetRegistryInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetRegistry\GetRegistryOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetRegistry\GetRegistryRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetRegistry\GetRegistryTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetService\GetServiceBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetService\GetServiceDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetService\GetServiceForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetService\GetServiceInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetService\GetServiceNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetService\GetServiceOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetService\GetServicePreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetService\GetServiceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetService\GetServiceTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetServiceLogs\GetServiceLogsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetServiceLogs\GetServiceLogsForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetServiceLogs\GetServiceLogsInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetServiceLogs\GetServiceLogsNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetServiceLogs\GetServiceLogsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetServiceLogs\GetServiceLogsServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetServiceLogs\GetServiceLogsTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetStack\GetStackBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetStack\GetStackDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetStack\GetStackForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetStack\GetStackInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetStack\GetStackOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetStack\GetStackRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetStack\GetStackTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetTemplate\GetTemplateBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetTemplate\GetTemplateDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetTemplate\GetTemplateInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetTemplate\GetTemplateNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetTemplate\GetTemplateOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetTemplate\GetTemplateRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetTemplate\GetTemplateTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetTemplateAsset\GetTemplateAssetBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetTemplateAsset\GetTemplateAssetDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetTemplateAsset\GetTemplateAssetForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetTemplateAsset\GetTemplateAssetInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetTemplateAsset\GetTemplateAssetNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetTemplateAsset\GetTemplateAssetRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetTemplateAsset\GetTemplateAssetServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetTemplateAsset\GetTemplateAssetTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetVolume\GetVolumeBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetVolume\GetVolumeDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetVolume\GetVolumeForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetVolume\GetVolumeInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetVolume\GetVolumeNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetVolume\GetVolumeOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetVolume\GetVolumePreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetVolume\GetVolumeRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetVolume\GetVolumeTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListRegistries\ListRegistriesBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListRegistries\ListRegistriesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListRegistries\ListRegistriesForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListRegistries\ListRegistriesInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListRegistries\ListRegistriesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListRegistries\ListRegistriesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListRegistries\ListRegistriesTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListSelfStacks\ListSelfStacksBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListSelfStacks\ListSelfStacksDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListSelfStacks\ListSelfStacksForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListSelfStacks\ListSelfStacksInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListSelfStacks\ListSelfStacksOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListSelfStacks\ListSelfStacksRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListSelfStacks\ListSelfStacksTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListServices\ListServicesBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListServices\ListServicesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListServices\ListServicesForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListServices\ListServicesInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListServices\ListServicesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListServices\ListServicesPreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListServices\ListServicesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListServices\ListServicesTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListStacks\ListStacksBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListStacks\ListStacksDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListStacks\ListStacksForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListStacks\ListStacksInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListStacks\ListStacksOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListStacks\ListStacksRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListStacks\ListStacksTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListStackVolumes\ListStackVolumesBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListStackVolumes\ListStackVolumesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListStackVolumes\ListStackVolumesForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListStackVolumes\ListStackVolumesInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListStackVolumes\ListStackVolumesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListStackVolumes\ListStackVolumesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListStackVolumes\ListStackVolumesTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListTemplates\ListTemplatesBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListTemplates\ListTemplatesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListTemplates\ListTemplatesInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListTemplates\ListTemplatesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListTemplates\ListTemplatesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListTemplates\ListTemplatesTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListTemplateStatistics\ListTemplateStatisticsBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListTemplateStatistics\ListTemplateStatisticsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListTemplateStatistics\ListTemplateStatisticsInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListTemplateStatistics\ListTemplateStatisticsNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListTemplateStatistics\ListTemplateStatisticsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListTemplateStatistics\ListTemplateStatisticsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListTemplateStatistics\ListTemplateStatisticsTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListVolumes\ListVolumesBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListVolumes\ListVolumesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListVolumes\ListVolumesForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListVolumes\ListVolumesInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListVolumes\ListVolumesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListVolumes\ListVolumesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListVolumes\ListVolumesTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\PullImageForService\PullImageForServiceBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\PullImageForService\PullImageForServiceDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\PullImageForService\PullImageForServiceForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\PullImageForService\PullImageForServiceInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\PullImageForService\PullImageForServiceNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\PullImageForService\PullImageForServicePreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\PullImageForService\PullImageForServiceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\PullImageForService\PullImageForServiceTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\RecreateService\RecreateServiceBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\RecreateService\RecreateServiceDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\RecreateService\RecreateServiceForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\RecreateService\RecreateServiceInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\RecreateService\RecreateServiceNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\RecreateService\RecreateServicePreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\RecreateService\RecreateServiceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\RecreateService\RecreateServiceTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\RestartService\RestartServiceBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\RestartService\RestartServiceDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\RestartService\RestartServiceForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\RestartService\RestartServiceInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\RestartService\RestartServiceNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\RestartService\RestartServicePreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\RestartService\RestartServiceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\RestartService\RestartServiceTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\RotatePullImageWebhookForService\RotatePullImageWebhookForServiceBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\RotatePullImageWebhookForService\RotatePullImageWebhookForServiceDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\RotatePullImageWebhookForService\RotatePullImageWebhookForServiceForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\RotatePullImageWebhookForService\RotatePullImageWebhookForServiceInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\RotatePullImageWebhookForService\RotatePullImageWebhookForServiceNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\RotatePullImageWebhookForService\RotatePullImageWebhookForServiceOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\RotatePullImageWebhookForService\RotatePullImageWebhookForServicePreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\RotatePullImageWebhookForService\RotatePullImageWebhookForServiceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\RotatePullImageWebhookForService\RotatePullImageWebhookForServiceTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\StartService\StartServiceBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\StartService\StartServiceDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\StartService\StartServiceForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\StartService\StartServiceInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\StartService\StartServiceNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\StartService\StartServicePreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\StartService\StartServiceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\StartService\StartServiceTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\StopService\StopServiceBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\StopService\StopServiceDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\StopService\StopServiceForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\StopService\StopServiceInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\StopService\StopServiceNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\StopService\StopServicePreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\StopService\StopServiceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\StopService\StopServiceTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\UpdateRegistry\UpdateRegistryBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\UpdateRegistry\UpdateRegistryConflictResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\UpdateRegistry\UpdateRegistryDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\UpdateRegistry\UpdateRegistryForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\UpdateRegistry\UpdateRegistryInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\UpdateRegistry\UpdateRegistryPreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\UpdateRegistry\UpdateRegistryRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\UpdateRegistry\UpdateRegistryTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\UpdateStack\UpdateStackBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\UpdateStack\UpdateStackDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\UpdateStack\UpdateStackForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\UpdateStack\UpdateStackInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\UpdateStack\UpdateStackOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\UpdateStack\UpdateStackPreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\UpdateStack\UpdateStackRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\UpdateStack\UpdateStackTooManyRequestsResponse;

/**
 * Client for Container API
 *
 * The container API allows you to manage your stacks, containers, volumes and
 * registries.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class ContainerClientImpl implements ContainerClient
{
    private Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Add a template component to a Stack.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-add-template-component
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param AddTemplateComponentRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function addTemplateComponent(AddTemplateComponentRequest $request): EmptyResponse
    {
        $httpRequest = new Request(AddTemplateComponentRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => AddTemplateComponentBadRequestResponse::fromResponse($httpResponse),
            403 => AddTemplateComponentForbiddenResponse::fromResponse($httpResponse),
            404 => AddTemplateComponentNotFoundResponse::fromResponse($httpResponse),
            409 => AddTemplateComponentConflictResponse::fromResponse($httpResponse),
            412 => AddTemplateComponentPreconditionFailedResponse::fromResponse($httpResponse),
            429 => AddTemplateComponentTooManyRequestsResponse::fromResponse($httpResponse),
            500 => AddTemplateComponentInternalServerErrorResponse::fromResponse($httpResponse),
            default => AddTemplateComponentDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Call pull-image webhook
     *
     * Calls the pull-image webhook endpoint for a Service using a webhook token.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-call-pull-image-webhook-for-service
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CallPullImageWebhookForServiceRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function callPullImageWebhookForService(CallPullImageWebhookForServiceRequest $request): EmptyResponse
    {
        $httpRequest = new Request(CallPullImageWebhookForServiceRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => CallPullImageWebhookForServiceBadRequestResponse::fromResponse($httpResponse),
            401 => CallPullImageWebhookForServiceUnauthorizedResponse::fromResponse($httpResponse),
            404 => CallPullImageWebhookForServiceNotFoundResponse::fromResponse($httpResponse),
            412 => CallPullImageWebhookForServicePreconditionFailedResponse::fromResponse($httpResponse),
            429 => CallPullImageWebhookForServiceTooManyRequestsResponse::fromResponse($httpResponse),
            500 => CallPullImageWebhookForServiceInternalServerErrorResponse::fromResponse($httpResponse),
            default => CallPullImageWebhookForServiceDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Create a Registry.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-create-registry
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CreateRegistryRequest $request An object representing the request for this operation
     * @return CreateRegistryCreatedResponse Created
     */
    public function createRegistry(CreateRegistryRequest $request): CreateRegistryCreatedResponse
    {
        $httpRequest = new Request(CreateRegistryRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 201) {
            return CreateRegistryCreatedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => CreateRegistryBadRequestResponse::fromResponse($httpResponse),
            403 => CreateRegistryForbiddenResponse::fromResponse($httpResponse),
            404 => CreateRegistryNotFoundResponse::fromResponse($httpResponse),
            409 => CreateRegistryConflictResponse::fromResponse($httpResponse),
            412 => CreateRegistryPreconditionFailedResponse::fromResponse($httpResponse),
            429 => CreateRegistryTooManyRequestsResponse::fromResponse($httpResponse),
            500 => CreateRegistryInternalServerErrorResponse::fromResponse($httpResponse),
            default => CreateRegistryDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Create a Stack.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-create-stack
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CreateStackRequest $request An object representing the request for this operation
     * @return CreateStackCreatedResponse Created
     */
    public function createStack(CreateStackRequest $request): CreateStackCreatedResponse
    {
        $httpRequest = new Request(CreateStackRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 201) {
            return CreateStackCreatedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => CreateStackBadRequestResponse::fromResponse($httpResponse),
            403 => CreateStackForbiddenResponse::fromResponse($httpResponse),
            404 => CreateStackNotFoundResponse::fromResponse($httpResponse),
            409 => CreateStackConflictResponse::fromResponse($httpResponse),
            412 => CreateStackPreconditionFailedResponse::fromResponse($httpResponse),
            429 => CreateStackTooManyRequestsResponse::fromResponse($httpResponse),
            500 => CreateStackInternalServerErrorResponse::fromResponse($httpResponse),
            default => CreateStackDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Declaratively create, update or delete Services or Volumes belonging to a Stack.
     *
     * Note that this endpoint only declares the `services` and `volumes` of a Stack. Scalar Stack properties like `description` and `updateSchedule` are not part of this declaration and remain unchanged; use `PATCH /v2/stacks/{stackId}` to manage them. Including them in the declarative `PUT` (omitting a property then resets it) is planned for the next API version (v3).
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-declare-stack
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeclareStackRequest $request An object representing the request for this operation
     * @return DeclareStackOKResponse OK
     */
    public function declareStack(DeclareStackRequest $request): DeclareStackOKResponse
    {
        $httpRequest = new Request(DeclareStackRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return DeclareStackOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeclareStackBadRequestResponse::fromResponse($httpResponse),
            403 => DeclareStackForbiddenResponse::fromResponse($httpResponse),
            412 => DeclareStackPreconditionFailedResponse::fromResponse($httpResponse),
            429 => DeclareStackTooManyRequestsResponse::fromResponse($httpResponse),
            500 => DeclareStackInternalServerErrorResponse::fromResponse($httpResponse),
            default => DeclareStackDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Delete a Registry.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-delete-registry
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteRegistryRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function deleteRegistry(DeleteRegistryRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeleteRegistryRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeleteRegistryBadRequestResponse::fromResponse($httpResponse),
            403 => DeleteRegistryForbiddenResponse::fromResponse($httpResponse),
            404 => DeleteRegistryNotFoundResponse::fromResponse($httpResponse),
            429 => DeleteRegistryTooManyRequestsResponse::fromResponse($httpResponse),
            500 => DeleteRegistryInternalServerErrorResponse::fromResponse($httpResponse),
            default => DeleteRegistryDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Delete a Stack.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-delete-stack
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteStackRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function deleteStack(DeleteStackRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeleteStackRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeleteStackBadRequestResponse::fromResponse($httpResponse),
            403 => DeleteStackForbiddenResponse::fromResponse($httpResponse),
            404 => DeleteStackNotFoundResponse::fromResponse($httpResponse),
            429 => DeleteStackTooManyRequestsResponse::fromResponse($httpResponse),
            500 => DeleteStackInternalServerErrorResponse::fromResponse($httpResponse),
            default => DeleteStackDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Delete a Volume belonging to a Stack.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-delete-volume
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteVolumeRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function deleteVolume(DeleteVolumeRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeleteVolumeRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeleteVolumeBadRequestResponse::fromResponse($httpResponse),
            403 => DeleteVolumeForbiddenResponse::fromResponse($httpResponse),
            412 => DeleteVolumePreconditionFailedResponse::fromResponse($httpResponse),
            429 => DeleteVolumeTooManyRequestsResponse::fromResponse($httpResponse),
            500 => DeleteVolumeInternalServerErrorResponse::fromResponse($httpResponse),
            default => DeleteVolumeDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a ContainerImageConfig.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-get-container-image-config
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetContainerImageConfigRequest $request An object representing the request for this operation
     * @return GetContainerImageConfigOKResponse OK
     */
    public function getContainerImageConfig(GetContainerImageConfigRequest $request): GetContainerImageConfigOKResponse
    {
        $httpRequest = new Request(GetContainerImageConfigRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetContainerImageConfigOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => GetContainerImageConfigBadRequestResponse::fromResponse($httpResponse),
            403 => GetContainerImageConfigForbiddenResponse::fromResponse($httpResponse),
            404 => GetContainerImageConfigNotFoundResponse::fromResponse($httpResponse),
            412 => GetContainerImageConfigPreconditionFailedResponse::fromResponse($httpResponse),
            429 => GetContainerImageConfigTooManyRequestsResponse::fromResponse($httpResponse),
            500 => GetContainerImageConfigInternalServerErrorResponse::fromResponse($httpResponse),
            default => GetContainerImageConfigDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a Registry.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-get-registry
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetRegistryRequest $request An object representing the request for this operation
     * @return GetRegistryOKResponse OK
     */
    public function getRegistry(GetRegistryRequest $request): GetRegistryOKResponse
    {
        $httpRequest = new Request(GetRegistryRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetRegistryOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => GetRegistryBadRequestResponse::fromResponse($httpResponse),
            403 => GetRegistryForbiddenResponse::fromResponse($httpResponse),
            429 => GetRegistryTooManyRequestsResponse::fromResponse($httpResponse),
            500 => GetRegistryInternalServerErrorResponse::fromResponse($httpResponse),
            default => GetRegistryDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a Service belonging to a Stack.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-get-service
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetServiceRequest $request An object representing the request for this operation
     * @return GetServiceOKResponse OK
     */
    public function getService(GetServiceRequest $request): GetServiceOKResponse
    {
        $httpRequest = new Request(GetServiceRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetServiceOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => GetServiceBadRequestResponse::fromResponse($httpResponse),
            403 => GetServiceForbiddenResponse::fromResponse($httpResponse),
            404 => GetServiceNotFoundResponse::fromResponse($httpResponse),
            412 => GetServicePreconditionFailedResponse::fromResponse($httpResponse),
            429 => GetServiceTooManyRequestsResponse::fromResponse($httpResponse),
            500 => GetServiceInternalServerErrorResponse::fromResponse($httpResponse),
            default => GetServiceDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get logs belonging to a Service.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-get-service-logs
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetServiceLogsRequest $request An object representing the request for this operation
     * @return StringResponse OK
     */
    public function getServiceLogs(GetServiceLogsRequest $request): StringResponse
    {
        $httpRequest = new Request(GetServiceLogsRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return StringResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            403 => GetServiceLogsForbiddenResponse::fromResponse($httpResponse),
            404 => GetServiceLogsNotFoundResponse::fromResponse($httpResponse),
            429 => GetServiceLogsTooManyRequestsResponse::fromResponse($httpResponse),
            500 => GetServiceLogsInternalServerErrorResponse::fromResponse($httpResponse),
            503 => GetServiceLogsServiceUnavailableResponse::fromResponse($httpResponse),
            default => GetServiceLogsDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a Stack.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-get-stack
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetStackRequest $request An object representing the request for this operation
     * @return GetStackOKResponse OK
     */
    public function getStack(GetStackRequest $request): GetStackOKResponse
    {
        $httpRequest = new Request(GetStackRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetStackOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => GetStackBadRequestResponse::fromResponse($httpResponse),
            403 => GetStackForbiddenResponse::fromResponse($httpResponse),
            429 => GetStackTooManyRequestsResponse::fromResponse($httpResponse),
            500 => GetStackInternalServerErrorResponse::fromResponse($httpResponse),
            default => GetStackDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a Container Template by ID.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-get-template
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetTemplateRequest $request An object representing the request for this operation
     * @return GetTemplateOKResponse OK
     */
    public function getTemplate(GetTemplateRequest $request): GetTemplateOKResponse
    {
        $httpRequest = new Request(GetTemplateRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetTemplateOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => GetTemplateBadRequestResponse::fromResponse($httpResponse),
            404 => GetTemplateNotFoundResponse::fromResponse($httpResponse),
            429 => GetTemplateTooManyRequestsResponse::fromResponse($httpResponse),
            500 => GetTemplateInternalServerErrorResponse::fromResponse($httpResponse),
            default => GetTemplateDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a Container Template asset.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-get-template-asset
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetTemplateAssetRequest $request An object representing the request for this operation
     * @return StringResponse OK
     */
    public function getTemplateAsset(GetTemplateAssetRequest $request): StringResponse
    {
        $httpRequest = new Request(GetTemplateAssetRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return StringResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => GetTemplateAssetBadRequestResponse::fromResponse($httpResponse),
            403 => GetTemplateAssetForbiddenResponse::fromResponse($httpResponse),
            404 => GetTemplateAssetNotFoundResponse::fromResponse($httpResponse),
            429 => GetTemplateAssetTooManyRequestsResponse::fromResponse($httpResponse),
            500 => GetTemplateAssetInternalServerErrorResponse::fromResponse($httpResponse),
            503 => GetTemplateAssetServiceUnavailableResponse::fromResponse($httpResponse),
            default => GetTemplateAssetDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a Volume belonging to a Stack.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-get-volume
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetVolumeRequest $request An object representing the request for this operation
     * @return GetVolumeOKResponse OK
     */
    public function getVolume(GetVolumeRequest $request): GetVolumeOKResponse
    {
        $httpRequest = new Request(GetVolumeRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetVolumeOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => GetVolumeBadRequestResponse::fromResponse($httpResponse),
            403 => GetVolumeForbiddenResponse::fromResponse($httpResponse),
            404 => GetVolumeNotFoundResponse::fromResponse($httpResponse),
            412 => GetVolumePreconditionFailedResponse::fromResponse($httpResponse),
            429 => GetVolumeTooManyRequestsResponse::fromResponse($httpResponse),
            500 => GetVolumeInternalServerErrorResponse::fromResponse($httpResponse),
            default => GetVolumeDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List Registries belonging to a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-list-registries
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListRegistriesRequest $request An object representing the request for this operation
     * @return ListRegistriesOKResponse OK
     */
    public function listRegistries(ListRegistriesRequest $request): ListRegistriesOKResponse
    {
        $httpRequest = new Request(ListRegistriesRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListRegistriesOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ListRegistriesBadRequestResponse::fromResponse($httpResponse),
            403 => ListRegistriesForbiddenResponse::fromResponse($httpResponse),
            429 => ListRegistriesTooManyRequestsResponse::fromResponse($httpResponse),
            500 => ListRegistriesInternalServerErrorResponse::fromResponse($httpResponse),
            default => ListRegistriesDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List Stacks belonging to the executing user.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-list-self-stacks
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListSelfStacksRequest $request An object representing the request for this operation
     * @return ListSelfStacksOKResponse OK
     */
    public function listSelfStacks(ListSelfStacksRequest $request): ListSelfStacksOKResponse
    {
        $httpRequest = new Request(ListSelfStacksRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListSelfStacksOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ListSelfStacksBadRequestResponse::fromResponse($httpResponse),
            403 => ListSelfStacksForbiddenResponse::fromResponse($httpResponse),
            429 => ListSelfStacksTooManyRequestsResponse::fromResponse($httpResponse),
            500 => ListSelfStacksInternalServerErrorResponse::fromResponse($httpResponse),
            default => ListSelfStacksDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List Services belonging to a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-list-services
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListServicesRequest $request An object representing the request for this operation
     * @return ListServicesOKResponse OK
     */
    public function listServices(ListServicesRequest $request): ListServicesOKResponse
    {
        $httpRequest = new Request(ListServicesRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListServicesOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ListServicesBadRequestResponse::fromResponse($httpResponse),
            403 => ListServicesForbiddenResponse::fromResponse($httpResponse),
            412 => ListServicesPreconditionFailedResponse::fromResponse($httpResponse),
            429 => ListServicesTooManyRequestsResponse::fromResponse($httpResponse),
            500 => ListServicesInternalServerErrorResponse::fromResponse($httpResponse),
            default => ListServicesDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List Volumes belonging to a Stack.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-list-stack-volumes
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListStackVolumesRequest $request An object representing the request for this operation
     * @return ListStackVolumesOKResponse OK
     */
    public function listStackVolumes(ListStackVolumesRequest $request): ListStackVolumesOKResponse
    {
        $httpRequest = new Request(ListStackVolumesRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListStackVolumesOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ListStackVolumesBadRequestResponse::fromResponse($httpResponse),
            403 => ListStackVolumesForbiddenResponse::fromResponse($httpResponse),
            429 => ListStackVolumesTooManyRequestsResponse::fromResponse($httpResponse),
            500 => ListStackVolumesInternalServerErrorResponse::fromResponse($httpResponse),
            default => ListStackVolumesDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List Stacks belonging to a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-list-stacks
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListStacksRequest $request An object representing the request for this operation
     * @return ListStacksOKResponse OK
     */
    public function listStacks(ListStacksRequest $request): ListStacksOKResponse
    {
        $httpRequest = new Request(ListStacksRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListStacksOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ListStacksBadRequestResponse::fromResponse($httpResponse),
            403 => ListStacksForbiddenResponse::fromResponse($httpResponse),
            429 => ListStacksTooManyRequestsResponse::fromResponse($httpResponse),
            500 => ListStacksInternalServerErrorResponse::fromResponse($httpResponse),
            default => ListStacksDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List Container Template statistics.
     *
     * Deprecated. Container Statistics should no longer be public and moved to the sortOrder logic from the template list. This endpoint will be removed in a future version.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-list-template-statistics
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListTemplateStatisticsRequest $request An object representing the request for this operation
     * @deprecated
     * @return ListTemplateStatisticsOKResponse OK
     */
    public function listTemplateStatistics(ListTemplateStatisticsRequest $request): ListTemplateStatisticsOKResponse
    {
        $httpRequest = new Request(ListTemplateStatisticsRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListTemplateStatisticsOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ListTemplateStatisticsBadRequestResponse::fromResponse($httpResponse),
            404 => ListTemplateStatisticsNotFoundResponse::fromResponse($httpResponse),
            429 => ListTemplateStatisticsTooManyRequestsResponse::fromResponse($httpResponse),
            500 => ListTemplateStatisticsInternalServerErrorResponse::fromResponse($httpResponse),
            default => ListTemplateStatisticsDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List Container Templates.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-list-templates
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListTemplatesRequest $request An object representing the request for this operation
     * @return ListTemplatesOKResponse OK
     */
    public function listTemplates(ListTemplatesRequest $request): ListTemplatesOKResponse
    {
        $httpRequest = new Request(ListTemplatesRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListTemplatesOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ListTemplatesBadRequestResponse::fromResponse($httpResponse),
            429 => ListTemplatesTooManyRequestsResponse::fromResponse($httpResponse),
            500 => ListTemplatesInternalServerErrorResponse::fromResponse($httpResponse),
            default => ListTemplatesDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List Volumes belonging to a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-list-volumes
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListVolumesRequest $request An object representing the request for this operation
     * @return ListVolumesOKResponse OK
     */
    public function listVolumes(ListVolumesRequest $request): ListVolumesOKResponse
    {
        $httpRequest = new Request(ListVolumesRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListVolumesOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ListVolumesBadRequestResponse::fromResponse($httpResponse),
            403 => ListVolumesForbiddenResponse::fromResponse($httpResponse),
            429 => ListVolumesTooManyRequestsResponse::fromResponse($httpResponse),
            500 => ListVolumesInternalServerErrorResponse::fromResponse($httpResponse),
            default => ListVolumesDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Pull image and recreate
     *
     * Pulls the latest image for this container and recreates it.
     *
     * You can skip re-creation by setting the `skipRecreate` query parameter.
     *
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-pull-image-for-service
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param PullImageForServiceRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function pullImageForService(PullImageForServiceRequest $request): EmptyResponse
    {
        $httpRequest = new Request(PullImageForServiceRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => PullImageForServiceBadRequestResponse::fromResponse($httpResponse),
            403 => PullImageForServiceForbiddenResponse::fromResponse($httpResponse),
            404 => PullImageForServiceNotFoundResponse::fromResponse($httpResponse),
            412 => PullImageForServicePreconditionFailedResponse::fromResponse($httpResponse),
            429 => PullImageForServiceTooManyRequestsResponse::fromResponse($httpResponse),
            500 => PullImageForServiceInternalServerErrorResponse::fromResponse($httpResponse),
            default => PullImageForServiceDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Recreate a Service.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-recreate-service
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param RecreateServiceRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function recreateService(RecreateServiceRequest $request): EmptyResponse
    {
        $httpRequest = new Request(RecreateServiceRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => RecreateServiceBadRequestResponse::fromResponse($httpResponse),
            403 => RecreateServiceForbiddenResponse::fromResponse($httpResponse),
            404 => RecreateServiceNotFoundResponse::fromResponse($httpResponse),
            412 => RecreateServicePreconditionFailedResponse::fromResponse($httpResponse),
            429 => RecreateServiceTooManyRequestsResponse::fromResponse($httpResponse),
            500 => RecreateServiceInternalServerErrorResponse::fromResponse($httpResponse),
            default => RecreateServiceDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Restart a started Service.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-restart-service
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param RestartServiceRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function restartService(RestartServiceRequest $request): EmptyResponse
    {
        $httpRequest = new Request(RestartServiceRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => RestartServiceBadRequestResponse::fromResponse($httpResponse),
            403 => RestartServiceForbiddenResponse::fromResponse($httpResponse),
            404 => RestartServiceNotFoundResponse::fromResponse($httpResponse),
            412 => RestartServicePreconditionFailedResponse::fromResponse($httpResponse),
            429 => RestartServiceTooManyRequestsResponse::fromResponse($httpResponse),
            500 => RestartServiceInternalServerErrorResponse::fromResponse($httpResponse),
            default => RestartServiceDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Create or rotate pull-image webhook token
     *
     * Creates or rotates the pull-image webhook token for a Service.
     *
     * The returned token is shown only once.
     *
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-rotate-pull-image-webhook-for-service
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param RotatePullImageWebhookForServiceRequest $request An object representing the request for this operation
     * @return RotatePullImageWebhookForServiceOKResponse OK
     */
    public function rotatePullImageWebhookForService(RotatePullImageWebhookForServiceRequest $request): RotatePullImageWebhookForServiceOKResponse
    {
        $httpRequest = new Request(RotatePullImageWebhookForServiceRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return RotatePullImageWebhookForServiceOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => RotatePullImageWebhookForServiceBadRequestResponse::fromResponse($httpResponse),
            403 => RotatePullImageWebhookForServiceForbiddenResponse::fromResponse($httpResponse),
            404 => RotatePullImageWebhookForServiceNotFoundResponse::fromResponse($httpResponse),
            412 => RotatePullImageWebhookForServicePreconditionFailedResponse::fromResponse($httpResponse),
            429 => RotatePullImageWebhookForServiceTooManyRequestsResponse::fromResponse($httpResponse),
            500 => RotatePullImageWebhookForServiceInternalServerErrorResponse::fromResponse($httpResponse),
            default => RotatePullImageWebhookForServiceDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Start a stopped Service.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-start-service
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param StartServiceRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function startService(StartServiceRequest $request): EmptyResponse
    {
        $httpRequest = new Request(StartServiceRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => StartServiceBadRequestResponse::fromResponse($httpResponse),
            403 => StartServiceForbiddenResponse::fromResponse($httpResponse),
            404 => StartServiceNotFoundResponse::fromResponse($httpResponse),
            412 => StartServicePreconditionFailedResponse::fromResponse($httpResponse),
            429 => StartServiceTooManyRequestsResponse::fromResponse($httpResponse),
            500 => StartServiceInternalServerErrorResponse::fromResponse($httpResponse),
            default => StartServiceDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Stop a started Service.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-stop-service
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param StopServiceRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function stopService(StopServiceRequest $request): EmptyResponse
    {
        $httpRequest = new Request(StopServiceRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => StopServiceBadRequestResponse::fromResponse($httpResponse),
            403 => StopServiceForbiddenResponse::fromResponse($httpResponse),
            404 => StopServiceNotFoundResponse::fromResponse($httpResponse),
            412 => StopServicePreconditionFailedResponse::fromResponse($httpResponse),
            429 => StopServiceTooManyRequestsResponse::fromResponse($httpResponse),
            500 => StopServiceInternalServerErrorResponse::fromResponse($httpResponse),
            default => StopServiceDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update a Registry.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-update-registry
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateRegistryRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function updateRegistry(UpdateRegistryRequest $request): EmptyResponse
    {
        $httpRequest = new Request(UpdateRegistryRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateRegistryBadRequestResponse::fromResponse($httpResponse),
            403 => UpdateRegistryForbiddenResponse::fromResponse($httpResponse),
            409 => UpdateRegistryConflictResponse::fromResponse($httpResponse),
            412 => UpdateRegistryPreconditionFailedResponse::fromResponse($httpResponse),
            429 => UpdateRegistryTooManyRequestsResponse::fromResponse($httpResponse),
            500 => UpdateRegistryInternalServerErrorResponse::fromResponse($httpResponse),
            default => UpdateRegistryDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Create, update or delete Services or Volumes belonging to a Stack.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-update-stack
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateStackRequest $request An object representing the request for this operation
     * @return UpdateStackOKResponse OK
     */
    public function updateStack(UpdateStackRequest $request): UpdateStackOKResponse
    {
        $httpRequest = new Request(UpdateStackRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return UpdateStackOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateStackBadRequestResponse::fromResponse($httpResponse),
            403 => UpdateStackForbiddenResponse::fromResponse($httpResponse),
            412 => UpdateStackPreconditionFailedResponse::fromResponse($httpResponse),
            429 => UpdateStackTooManyRequestsResponse::fromResponse($httpResponse),
            500 => UpdateStackInternalServerErrorResponse::fromResponse($httpResponse),
            default => UpdateStackDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a Container Template icon.
     *
     * Deprecated. Use `GET /v2/container-templates/{templateId}/assets/icon.svg` instead.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/deprecated-container-get-template-icon
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedContainerGetTemplateIconRequest $request An object representing the request for this operation
     * @deprecated
     * @return StringResponse OK
     */
    public function deprecatedContainerGetTemplateIcon(DeprecatedContainerGetTemplateIconRequest $request): StringResponse
    {
        $httpRequest = new Request(DeprecatedContainerGetTemplateIconRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return StringResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeprecatedContainerGetTemplateIconBadRequestResponse::fromResponse($httpResponse),
            403 => DeprecatedContainerGetTemplateIconForbiddenResponse::fromResponse($httpResponse),
            404 => DeprecatedContainerGetTemplateIconNotFoundResponse::fromResponse($httpResponse),
            429 => DeprecatedContainerGetTemplateIconTooManyRequestsResponse::fromResponse($httpResponse),
            500 => DeprecatedContainerGetTemplateIconInternalServerErrorResponse::fromResponse($httpResponse),
            503 => DeprecatedContainerGetTemplateIconServiceUnavailableResponse::fromResponse($httpResponse),
            default => DeprecatedContainerGetTemplateIconDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Validate a Registries' URI.
     *
     * Deprecated. Container registry URI validation is performed automatically during resource creation; this endpoint is no longer necessary. This endpoint will be removed in a future version.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/deprecated-container-validate-container-registry-uri
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedContainerValidateContainerRegistryUriRequest $request An object representing the request for this operation
     * @deprecated
     * @return DeprecatedContainerValidateContainerRegistryUriOKResponse OK
     */
    public function deprecatedContainerValidateContainerRegistryUri(DeprecatedContainerValidateContainerRegistryUriRequest $request): DeprecatedContainerValidateContainerRegistryUriOKResponse
    {
        $httpRequest = new Request(DeprecatedContainerValidateContainerRegistryUriRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return DeprecatedContainerValidateContainerRegistryUriOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeprecatedContainerValidateContainerRegistryUriBadRequestResponse::fromResponse($httpResponse),
            403 => DeprecatedContainerValidateContainerRegistryUriForbiddenResponse::fromResponse($httpResponse),
            404 => DeprecatedContainerValidateContainerRegistryUriNotFoundResponse::fromResponse($httpResponse),
            412 => DeprecatedContainerValidateContainerRegistryUriPreconditionFailedResponse::fromResponse($httpResponse),
            429 => DeprecatedContainerValidateContainerRegistryUriTooManyRequestsResponse::fromResponse($httpResponse),
            500 => DeprecatedContainerValidateContainerRegistryUriInternalServerErrorResponse::fromResponse($httpResponse),
            default => DeprecatedContainerValidateContainerRegistryUriDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Validate a Registries' credentials.
     *
     * Deprecated. Registry credential validation is performed automatically on a scheduled basis in the backend. This endpoint will be removed in a future version.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/deprecated-container-validate-registry-credentials
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedContainerValidateRegistryCredentialsRequest $request An object representing the request for this operation
     * @deprecated
     * @return DeprecatedContainerValidateRegistryCredentialsOKResponse OK
     */
    public function deprecatedContainerValidateRegistryCredentials(DeprecatedContainerValidateRegistryCredentialsRequest $request): DeprecatedContainerValidateRegistryCredentialsOKResponse
    {
        $httpRequest = new Request(DeprecatedContainerValidateRegistryCredentialsRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return DeprecatedContainerValidateRegistryCredentialsOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeprecatedContainerValidateRegistryCredentialsBadRequestResponse::fromResponse($httpResponse),
            403 => DeprecatedContainerValidateRegistryCredentialsForbiddenResponse::fromResponse($httpResponse),
            404 => DeprecatedContainerValidateRegistryCredentialsNotFoundResponse::fromResponse($httpResponse),
            412 => DeprecatedContainerValidateRegistryCredentialsPreconditionFailedResponse::fromResponse($httpResponse),
            429 => DeprecatedContainerValidateRegistryCredentialsTooManyRequestsResponse::fromResponse($httpResponse),
            500 => DeprecatedContainerValidateRegistryCredentialsInternalServerErrorResponse::fromResponse($httpResponse),
            default => DeprecatedContainerValidateRegistryCredentialsDefaultResponse::fromResponse($httpResponse),
        });
    }
}
