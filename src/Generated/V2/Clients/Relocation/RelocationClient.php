<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Relocation;

use GuzzleHttp\Exception\GuzzleException;
use Mittwald\ApiClient\Client\EmptyResponse;
use Mittwald\ApiClient\Error\UnexpectedResponseException;
use Mittwald\ApiClient\Generated\V2\Clients\Relocation\CreateLegacyTariffChange\CreateLegacyTariffChangeCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Relocation\CreateLegacyTariffChange\CreateLegacyTariffChangeRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Relocation\CreateRelocation\CreateRelocationRequest;

/**
 * Client for Relocation API
 *
 * The relocation API allows you to manage your relocations.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
interface RelocationClient
{
    /**
     * Register a tariff change for a legacy tariff.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Relocation/operation/relocation-create-legacy-tariff-change
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CreateLegacyTariffChange\CreateLegacyTariffChangeRequest $request An object representing the request for this operation
     */
    public function createLegacyTariffChange(CreateLegacyTariffChangeRequest $request): CreateLegacyTariffChangeCreatedResponse;
    /**
     * Relocate an external Project to mittwald.
     *
     * Give mittwald access to your Provider and let them move your Project to mittwald.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Relocation/operation/relocation-create-relocation
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CreateRelocation\CreateRelocationRequest $request An object representing the request for this operation
     * @return EmptyResponse No content
     */
    public function createRelocation(CreateRelocationRequest $request): EmptyResponse;
}
