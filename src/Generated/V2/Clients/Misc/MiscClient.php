<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Misc;

use GuzzleHttp\Exception\GuzzleException;
use Mittwald\ApiClient\Error\UnexpectedResponseException;
use Mittwald\ApiClient\Generated\V2\Clients\Misc\ServicetokenAuthenticateService\ServicetokenAuthenticateServiceOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Misc\ServicetokenAuthenticateService\ServicetokenAuthenticateServiceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Misc\VerificationVerifyAddress\VerificationVerifyAddressOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Misc\VerificationVerifyAddress\VerificationVerifyAddressRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Misc\VerificationVerifyCompany\VerificationVerifyCompanyOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Misc\VerificationVerifyCompany\VerificationVerifyCompanyRequest;

/**
 * Client for Misc API
 *
 * API endpoints that are not related to any specific API domain
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
interface MiscClient
{
    /**
     * Obtain a service token.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Misc/operation/servicetoken-authenticate-service
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ServicetokenAuthenticateServiceRequest $request An object representing the request for this operation
     * @return ServicetokenAuthenticateServiceOKResponse Authentication has been successful.
     */
    public function servicetokenAuthenticateService(ServicetokenAuthenticateServiceRequest $request): ServicetokenAuthenticateServiceOKResponse;
    /**
     * Check if an address exists.
     *
     * Only the DACH region is currently supported.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Misc/operation/verification-verify-address
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param VerificationVerifyAddressRequest $request An object representing the request for this operation
     * @return VerificationVerifyAddressOKResponse Success
     */
    public function verificationVerifyAddress(VerificationVerifyAddressRequest $request): VerificationVerifyAddressOKResponse;
    /**
     * Check if a company exists.
     *
     * Only companies registered in the german company register are currently supported.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Misc/operation/verification-verify-company
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param VerificationVerifyCompanyRequest $request An object representing the request for this operation
     * @return VerificationVerifyCompanyOKResponse Success
     */
    public function verificationVerifyCompany(VerificationVerifyCompanyRequest $request): VerificationVerifyCompanyOKResponse;
}
