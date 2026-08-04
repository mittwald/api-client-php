<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Container;

use GuzzleHttp\Exception\GuzzleException;
use Mittwald\ApiClient\Client\EmptyResponse;
use Mittwald\ApiClient\Client\StringResponse;
use Mittwald\ApiClient\Error\UnexpectedResponseException;
use Mittwald\ApiClient\Generated\V2\Clients\Container\AddTemplateComponent\AddTemplateComponentRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\CallPullImageWebhookForService\CallPullImageWebhookForServiceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\CreateRegistry\CreateRegistryCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\CreateRegistry\CreateRegistryRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\CreateStack\CreateStackCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\CreateStack\CreateStackRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeclareStack\DeclareStackOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeclareStack\DeclareStackRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeleteRegistry\DeleteRegistryRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeleteStack\DeleteStackRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeleteVolume\DeleteVolumeRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeprecatedContainerGetTemplateAsset\DeprecatedContainerGetTemplateAssetRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeprecatedContainerGetTemplateIcon\DeprecatedContainerGetTemplateIconRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeprecatedContainerSetStackUpdateSchedule\DeprecatedContainerSetStackUpdateScheduleRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeprecatedContainerValidateContainerRegistryUri\DeprecatedContainerValidateContainerRegistryUriOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeprecatedContainerValidateContainerRegistryUri\DeprecatedContainerValidateContainerRegistryUriRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeprecatedContainerValidateRegistryCredentials\DeprecatedContainerValidateRegistryCredentialsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeprecatedContainerValidateRegistryCredentials\DeprecatedContainerValidateRegistryCredentialsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetContainerImageConfig\GetContainerImageConfigOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetContainerImageConfig\GetContainerImageConfigRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetRegistry\GetRegistryOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetRegistry\GetRegistryRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetService\GetServiceOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetService\GetServiceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetServiceLogs\GetServiceLogsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetStack\GetStackOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetStack\GetStackRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetTemplate\GetTemplateOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetTemplate\GetTemplateRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetVolume\GetVolumeOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\GetVolume\GetVolumeRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListRegistries\ListRegistriesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListRegistries\ListRegistriesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListSelfStacks\ListSelfStacksOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListSelfStacks\ListSelfStacksRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListServices\ListServicesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListServices\ListServicesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListStacks\ListStacksOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListStacks\ListStacksRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListStackVolumes\ListStackVolumesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListStackVolumes\ListStackVolumesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListTemplates\ListTemplatesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListTemplates\ListTemplatesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListTemplateStatistics\ListTemplateStatisticsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListTemplateStatistics\ListTemplateStatisticsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListVolumes\ListVolumesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ListVolumes\ListVolumesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\PullImageForService\PullImageForServiceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\RecreateService\RecreateServiceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\RestartService\RestartServiceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\RotatePullImageWebhookForService\RotatePullImageWebhookForServiceOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\RotatePullImageWebhookForService\RotatePullImageWebhookForServiceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\StartService\StartServiceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\StopService\StopServiceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\UpdateRegistry\UpdateRegistryRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\UpdateStack\UpdateStackOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\UpdateStack\UpdateStackRequest;

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
interface ContainerClient
{
    /**
     * Add a template component to a Stack.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-add-template-component
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param AddTemplateComponentRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function addTemplateComponent(AddTemplateComponentRequest $request): EmptyResponse;
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
    public function callPullImageWebhookForService(CallPullImageWebhookForServiceRequest $request): EmptyResponse;
    /**
     * Create a Registry.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-create-registry
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CreateRegistryRequest $request An object representing the request for this operation
     * @return CreateRegistryCreatedResponse Created
     */
    public function createRegistry(CreateRegistryRequest $request): CreateRegistryCreatedResponse;
    /**
     * Create a Stack.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-create-stack
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CreateStackRequest $request An object representing the request for this operation
     * @return CreateStackCreatedResponse Created
     */
    public function createStack(CreateStackRequest $request): CreateStackCreatedResponse;
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
    public function declareStack(DeclareStackRequest $request): DeclareStackOKResponse;
    /**
     * Delete a Registry.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-delete-registry
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteRegistryRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function deleteRegistry(DeleteRegistryRequest $request): EmptyResponse;
    /**
     * Delete a Stack.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-delete-stack
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteStackRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function deleteStack(DeleteStackRequest $request): EmptyResponse;
    /**
     * Delete a Volume belonging to a Stack.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-delete-volume
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteVolumeRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function deleteVolume(DeleteVolumeRequest $request): EmptyResponse;
    /**
     * Get a ContainerImageConfig.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-get-container-image-config
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetContainerImageConfigRequest $request An object representing the request for this operation
     * @return GetContainerImageConfigOKResponse OK
     */
    public function getContainerImageConfig(GetContainerImageConfigRequest $request): GetContainerImageConfigOKResponse;
    /**
     * Get a Registry.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-get-registry
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetRegistryRequest $request An object representing the request for this operation
     * @return GetRegistryOKResponse OK
     */
    public function getRegistry(GetRegistryRequest $request): GetRegistryOKResponse;
    /**
     * Get a Service belonging to a Stack.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-get-service
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetServiceRequest $request An object representing the request for this operation
     * @return GetServiceOKResponse OK
     */
    public function getService(GetServiceRequest $request): GetServiceOKResponse;
    /**
     * Get logs belonging to a Service.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-get-service-logs
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetServiceLogsRequest $request An object representing the request for this operation
     * @return StringResponse OK
     */
    public function getServiceLogs(GetServiceLogsRequest $request): StringResponse;
    /**
     * Get a Stack.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-get-stack
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetStackRequest $request An object representing the request for this operation
     * @return GetStackOKResponse OK
     */
    public function getStack(GetStackRequest $request): GetStackOKResponse;
    /**
     * Get a Container Template by ID.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-get-template
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetTemplateRequest $request An object representing the request for this operation
     * @return GetTemplateOKResponse OK
     */
    public function getTemplate(GetTemplateRequest $request): GetTemplateOKResponse;
    /**
     * Get a Volume belonging to a Stack.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-get-volume
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetVolumeRequest $request An object representing the request for this operation
     * @return GetVolumeOKResponse OK
     */
    public function getVolume(GetVolumeRequest $request): GetVolumeOKResponse;
    /**
     * List Registries belonging to a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-list-registries
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListRegistriesRequest $request An object representing the request for this operation
     * @return ListRegistriesOKResponse OK
     */
    public function listRegistries(ListRegistriesRequest $request): ListRegistriesOKResponse;
    /**
     * List Stacks belonging to the executing user.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-list-self-stacks
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListSelfStacksRequest $request An object representing the request for this operation
     * @return ListSelfStacksOKResponse OK
     */
    public function listSelfStacks(ListSelfStacksRequest $request): ListSelfStacksOKResponse;
    /**
     * List Services belonging to a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-list-services
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListServicesRequest $request An object representing the request for this operation
     * @return ListServicesOKResponse OK
     */
    public function listServices(ListServicesRequest $request): ListServicesOKResponse;
    /**
     * List Volumes belonging to a Stack.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-list-stack-volumes
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListStackVolumesRequest $request An object representing the request for this operation
     * @return ListStackVolumesOKResponse OK
     */
    public function listStackVolumes(ListStackVolumesRequest $request): ListStackVolumesOKResponse;
    /**
     * List Stacks belonging to a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-list-stacks
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListStacksRequest $request An object representing the request for this operation
     * @return ListStacksOKResponse OK
     */
    public function listStacks(ListStacksRequest $request): ListStacksOKResponse;
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
    public function listTemplateStatistics(ListTemplateStatisticsRequest $request): ListTemplateStatisticsOKResponse;
    /**
     * List Container Templates.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-list-templates
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListTemplatesRequest $request An object representing the request for this operation
     * @return ListTemplatesOKResponse OK
     */
    public function listTemplates(ListTemplatesRequest $request): ListTemplatesOKResponse;
    /**
     * List Volumes belonging to a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-list-volumes
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListVolumesRequest $request An object representing the request for this operation
     * @return ListVolumesOKResponse OK
     */
    public function listVolumes(ListVolumesRequest $request): ListVolumesOKResponse;
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
    public function pullImageForService(PullImageForServiceRequest $request): EmptyResponse;
    /**
     * Recreate a Service.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-recreate-service
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param RecreateServiceRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function recreateService(RecreateServiceRequest $request): EmptyResponse;
    /**
     * Restart a started Service.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-restart-service
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param RestartServiceRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function restartService(RestartServiceRequest $request): EmptyResponse;
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
    public function rotatePullImageWebhookForService(RotatePullImageWebhookForServiceRequest $request): RotatePullImageWebhookForServiceOKResponse;
    /**
     * Start a stopped Service.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-start-service
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param StartServiceRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function startService(StartServiceRequest $request): EmptyResponse;
    /**
     * Stop a started Service.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-stop-service
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param StopServiceRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function stopService(StopServiceRequest $request): EmptyResponse;
    /**
     * Update a Registry.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-update-registry
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateRegistryRequest $request An object representing the request for this operation
     * @return EmptyResponse NoContent
     */
    public function updateRegistry(UpdateRegistryRequest $request): EmptyResponse;
    /**
     * Create, update or delete Services or Volumes belonging to a Stack.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-update-stack
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateStackRequest $request An object representing the request for this operation
     * @return UpdateStackOKResponse OK
     */
    public function updateStack(UpdateStackRequest $request): UpdateStackOKResponse;
    /**
     * Get a Container Template asset.
     *
     * Deprecated. Use the direct asset URLs returned in the Template's `iconUrl` and `screenshots` fields instead.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/deprecated-container-get-template-asset
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedContainerGetTemplateAssetRequest $request An object representing the request for this operation
     * @deprecated
     * @return StringResponse OK
     */
    public function deprecatedContainerGetTemplateAsset(DeprecatedContainerGetTemplateAssetRequest $request): StringResponse;
    /**
     * Get a Container Template icon.
     *
     * Deprecated. Use the direct URL returned in the Template's `iconUrl` field instead.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/deprecated-container-get-template-icon
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedContainerGetTemplateIconRequest $request An object representing the request for this operation
     * @deprecated
     * @return StringResponse OK
     */
    public function deprecatedContainerGetTemplateIcon(DeprecatedContainerGetTemplateIconRequest $request): StringResponse;
    /**
     * Set an update schedule for a Stack.
     *
     * Deprecated by `PATCH /v2/stacks/{stackId}`.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/deprecated-container-set-stack-update-schedule
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedContainerSetStackUpdateScheduleRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse NoContent
     */
    public function deprecatedContainerSetStackUpdateSchedule(DeprecatedContainerSetStackUpdateScheduleRequest $request): EmptyResponse;
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
    public function deprecatedContainerValidateContainerRegistryUri(DeprecatedContainerValidateContainerRegistryUriRequest $request): DeprecatedContainerValidateContainerRegistryUriOKResponse;
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
    public function deprecatedContainerValidateRegistryCredentials(DeprecatedContainerValidateRegistryCredentialsRequest $request): DeprecatedContainerValidateRegistryCredentialsOKResponse;
}
