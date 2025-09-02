<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Container;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use Mittwald\ApiClient\Client\EmptyResponse;
use Mittwald\ApiClient\Client\StringResponse;
use Mittwald\ApiClient\Error\UnexpectedResponseException;
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
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeleteVolume\DeleteVolumeBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeleteVolume\DeleteVolumeDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeleteVolume\DeleteVolumeForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeleteVolume\DeleteVolumeInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeleteVolume\DeleteVolumePreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeleteVolume\DeleteVolumeRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\DeleteVolume\DeleteVolumeTooManyRequestsResponse;
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
use Mittwald\ApiClient\Generated\V2\Clients\Container\ValidateContainerRegistryUri\ValidateContainerRegistryUriBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ValidateContainerRegistryUri\ValidateContainerRegistryUriDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ValidateContainerRegistryUri\ValidateContainerRegistryUriForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ValidateContainerRegistryUri\ValidateContainerRegistryUriInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ValidateContainerRegistryUri\ValidateContainerRegistryUriNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ValidateContainerRegistryUri\ValidateContainerRegistryUriOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ValidateContainerRegistryUri\ValidateContainerRegistryUriPreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ValidateContainerRegistryUri\ValidateContainerRegistryUriRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ValidateContainerRegistryUri\ValidateContainerRegistryUriTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ValidateRegistryCredentials\ValidateRegistryCredentialsBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ValidateRegistryCredentials\ValidateRegistryCredentialsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ValidateRegistryCredentials\ValidateRegistryCredentialsForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ValidateRegistryCredentials\ValidateRegistryCredentialsInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ValidateRegistryCredentials\ValidateRegistryCredentialsNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ValidateRegistryCredentials\ValidateRegistryCredentialsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ValidateRegistryCredentials\ValidateRegistryCredentialsPreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ValidateRegistryCredentials\ValidateRegistryCredentialsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ValidateRegistryCredentials\ValidateRegistryCredentialsTooManyRequestsResponse;

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
     * Declaratively create, update or delete Services or Volumes belonging to a Stack.
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
     * Pulls the latest version of the Service's image and optionally recreates the Service.
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
     * Validate a Registries' URI.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-validate-container-registry-uri
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ValidateContainerRegistryUriRequest $request An object representing the request for this operation
     * @return ValidateContainerRegistryUriOKResponse OK
     */
    public function validateContainerRegistryUri(ValidateContainerRegistryUriRequest $request): ValidateContainerRegistryUriOKResponse
    {
        $httpRequest = new Request(ValidateContainerRegistryUriRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ValidateContainerRegistryUriOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ValidateContainerRegistryUriBadRequestResponse::fromResponse($httpResponse),
            403 => ValidateContainerRegistryUriForbiddenResponse::fromResponse($httpResponse),
            404 => ValidateContainerRegistryUriNotFoundResponse::fromResponse($httpResponse),
            412 => ValidateContainerRegistryUriPreconditionFailedResponse::fromResponse($httpResponse),
            429 => ValidateContainerRegistryUriTooManyRequestsResponse::fromResponse($httpResponse),
            500 => ValidateContainerRegistryUriInternalServerErrorResponse::fromResponse($httpResponse),
            default => ValidateContainerRegistryUriDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Validate a Registries' credentials.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Container/operation/container-validate-registry-credentials
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ValidateRegistryCredentialsRequest $request An object representing the request for this operation
     * @return ValidateRegistryCredentialsOKResponse OK
     */
    public function validateRegistryCredentials(ValidateRegistryCredentialsRequest $request): ValidateRegistryCredentialsOKResponse
    {
        $httpRequest = new Request(ValidateRegistryCredentialsRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ValidateRegistryCredentialsOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ValidateRegistryCredentialsBadRequestResponse::fromResponse($httpResponse),
            403 => ValidateRegistryCredentialsForbiddenResponse::fromResponse($httpResponse),
            404 => ValidateRegistryCredentialsNotFoundResponse::fromResponse($httpResponse),
            412 => ValidateRegistryCredentialsPreconditionFailedResponse::fromResponse($httpResponse),
            429 => ValidateRegistryCredentialsTooManyRequestsResponse::fromResponse($httpResponse),
            500 => ValidateRegistryCredentialsInternalServerErrorResponse::fromResponse($httpResponse),
            default => ValidateRegistryCredentialsDefaultResponse::fromResponse($httpResponse),
        });
    }
}
