<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use Mittwald\ApiClient\Client\UntypedResponse;
use Mittwald\ApiClient\Error\UnexpectedResponseException;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\CreateLeadFyndrAccessRequest\CreateLeadFyndrAccessRequestBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\CreateLeadFyndrAccessRequest\CreateLeadFyndrAccessRequestConflictResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\CreateLeadFyndrAccessRequest\CreateLeadFyndrAccessRequestCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\CreateLeadFyndrAccessRequest\CreateLeadFyndrAccessRequestDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\CreateLeadFyndrAccessRequest\CreateLeadFyndrAccessRequestForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\CreateLeadFyndrAccessRequest\CreateLeadFyndrAccessRequestNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\CreateLeadFyndrAccessRequest\CreateLeadFyndrAccessRequestRequest;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\CreateLeadFyndrAccessRequest\CreateLeadFyndrAccessRequestTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\CreateLeadsExport\CreateLeadsExportBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\CreateLeadsExport\CreateLeadsExportConflictResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\CreateLeadsExport\CreateLeadsExportDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\CreateLeadsExport\CreateLeadsExportForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\CreateLeadsExport\CreateLeadsExportNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\CreateLeadsExport\CreateLeadsExportOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\CreateLeadsExport\CreateLeadsExportRequest;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\CreateLeadsExport\CreateLeadsExportTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\GetCities\GetCitiesBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\GetCities\GetCitiesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\GetCities\GetCitiesForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\GetCities\GetCitiesNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\GetCities\GetCitiesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\GetCities\GetCitiesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\GetCities\GetCitiesTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\GetLead\GetLeadBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\GetLead\GetLeadDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\GetLead\GetLeadForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\GetLead\GetLeadNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\GetLead\GetLeadOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\GetLead\GetLeadRequest;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\GetLead\GetLeadTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\GetLeadFyndrProfile\GetLeadFyndrProfileBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\GetLeadFyndrProfile\GetLeadFyndrProfileDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\GetLeadFyndrProfile\GetLeadFyndrProfileForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\GetLeadFyndrProfile\GetLeadFyndrProfileNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\GetLeadFyndrProfile\GetLeadFyndrProfileRequest;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\GetLeadFyndrProfile\GetLeadFyndrProfileTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\GetLeadFyndrProfileRequest\GetLeadFyndrProfileRequestBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\GetLeadFyndrProfileRequest\GetLeadFyndrProfileRequestDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\GetLeadFyndrProfileRequest\GetLeadFyndrProfileRequestForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\GetLeadFyndrProfileRequest\GetLeadFyndrProfileRequestNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\GetLeadFyndrProfileRequest\GetLeadFyndrProfileRequestOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\GetLeadFyndrProfileRequest\GetLeadFyndrProfileRequestRequest;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\GetLeadFyndrProfileRequest\GetLeadFyndrProfileRequestTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\GetLeadFyndrProfileTariffOptions\GetLeadFyndrProfileTariffOptionsBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\GetLeadFyndrProfileTariffOptions\GetLeadFyndrProfileTariffOptionsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\GetLeadFyndrProfileTariffOptions\GetLeadFyndrProfileTariffOptionsForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\GetLeadFyndrProfileTariffOptions\GetLeadFyndrProfileTariffOptionsNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\GetLeadFyndrProfileTariffOptions\GetLeadFyndrProfileTariffOptionsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\GetLeadFyndrProfileTariffOptions\GetLeadFyndrProfileTariffOptionsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\GetLeadFyndrProfileTariffOptions\GetLeadFyndrProfileTariffOptionsTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\GetLeadsExportHistory\GetLeadsExportHistoryBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\GetLeadsExportHistory\GetLeadsExportHistoryDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\GetLeadsExportHistory\GetLeadsExportHistoryForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\GetLeadsExportHistory\GetLeadsExportHistoryNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\GetLeadsExportHistory\GetLeadsExportHistoryOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\GetLeadsExportHistory\GetLeadsExportHistoryRequest;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\GetLeadsExportHistory\GetLeadsExportHistoryTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\GetUnlockedLead\GetUnlockedLeadBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\GetUnlockedLead\GetUnlockedLeadDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\GetUnlockedLead\GetUnlockedLeadForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\GetUnlockedLead\GetUnlockedLeadNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\GetUnlockedLead\GetUnlockedLeadOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\GetUnlockedLead\GetUnlockedLeadRequest;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\GetUnlockedLead\GetUnlockedLeadTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\ListLeads\ListLeadsBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\ListLeads\ListLeadsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\ListLeads\ListLeadsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\ListLeads\ListLeadsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\ListLeads\ListLeadsTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\ListUnlockedLeads\ListUnlockedLeadsBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\ListUnlockedLeads\ListUnlockedLeadsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\ListUnlockedLeads\ListUnlockedLeadsForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\ListUnlockedLeads\ListUnlockedLeadsNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\ListUnlockedLeads\ListUnlockedLeadsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\ListUnlockedLeads\ListUnlockedLeadsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\ListUnlockedLeads\ListUnlockedLeadsTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\RemoveUnlockedLeadReservation\RemoveUnlockedLeadReservationBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\RemoveUnlockedLeadReservation\RemoveUnlockedLeadReservationConflictResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\RemoveUnlockedLeadReservation\RemoveUnlockedLeadReservationDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\RemoveUnlockedLeadReservation\RemoveUnlockedLeadReservationForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\RemoveUnlockedLeadReservation\RemoveUnlockedLeadReservationNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\RemoveUnlockedLeadReservation\RemoveUnlockedLeadReservationOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\RemoveUnlockedLeadReservation\RemoveUnlockedLeadReservationRequest;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\RemoveUnlockedLeadReservation\RemoveUnlockedLeadReservationTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\ReserveUnlockedLead\ReserveUnlockedLeadBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\ReserveUnlockedLead\ReserveUnlockedLeadConflictResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\ReserveUnlockedLead\ReserveUnlockedLeadDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\ReserveUnlockedLead\ReserveUnlockedLeadForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\ReserveUnlockedLead\ReserveUnlockedLeadNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\ReserveUnlockedLead\ReserveUnlockedLeadOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\ReserveUnlockedLead\ReserveUnlockedLeadRequest;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\ReserveUnlockedLead\ReserveUnlockedLeadTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\UnlockLead\UnlockLeadBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\UnlockLead\UnlockLeadDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\UnlockLead\UnlockLeadForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\UnlockLead\UnlockLeadNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\UnlockLead\UnlockLeadOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\UnlockLead\UnlockLeadRequest;
use Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\UnlockLead\UnlockLeadTooManyRequestsResponse;

/**
 * Client for LeadFyndr API
 *
 * The lead fyndr api allow you to manage you leads and your fyndr profile.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class LeadFyndrClientImpl implements LeadFyndrClient
{
    private Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Create a new access request for LeadFyndr.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/LeadFyndr/operation/leadfyndr-create-lead-fyndr-access-request
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CreateLeadFyndrAccessRequestRequest $request An object representing the request for this operation
     */
    public function createLeadFyndrAccessRequest(CreateLeadFyndrAccessRequestRequest $request): CreateLeadFyndrAccessRequestCreatedResponse
    {
        $httpRequest = new Request(CreateLeadFyndrAccessRequestRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 201) {
            return CreateLeadFyndrAccessRequestCreatedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => CreateLeadFyndrAccessRequestBadRequestResponse::fromResponse($httpResponse),
            403 => CreateLeadFyndrAccessRequestForbiddenResponse::fromResponse($httpResponse),
            404 => CreateLeadFyndrAccessRequestNotFoundResponse::fromResponse($httpResponse),
            409 => CreateLeadFyndrAccessRequestConflictResponse::fromResponse($httpResponse),
            429 => CreateLeadFyndrAccessRequestTooManyRequestsResponse::fromResponse($httpResponse),
            default => CreateLeadFyndrAccessRequestDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Create an export of unlocked leads for the given customerId.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/LeadFyndr/operation/leadfyndr-create-leads-export
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CreateLeadsExportRequest $request An object representing the request for this operation
     */
    public function createLeadsExport(CreateLeadsExportRequest $request): CreateLeadsExportOKResponse
    {
        $httpRequest = new Request(CreateLeadsExportRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return CreateLeadsExportOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => CreateLeadsExportBadRequestResponse::fromResponse($httpResponse),
            403 => CreateLeadsExportForbiddenResponse::fromResponse($httpResponse),
            404 => CreateLeadsExportNotFoundResponse::fromResponse($httpResponse),
            409 => CreateLeadsExportConflictResponse::fromResponse($httpResponse),
            429 => CreateLeadsExportTooManyRequestsResponse::fromResponse($httpResponse),
            default => CreateLeadsExportDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get cities in DACH.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/LeadFyndr/operation/leadfyndr-get-cities
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetCitiesRequest $request An object representing the request for this operation
     * @return GetCitiesOKResponse The list of cities.
     */
    public function getCities(GetCitiesRequest $request): GetCitiesOKResponse
    {
        $httpRequest = new Request(GetCitiesRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetCitiesOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => GetCitiesBadRequestResponse::fromResponse($httpResponse),
            403 => GetCitiesForbiddenResponse::fromResponse($httpResponse),
            404 => GetCitiesNotFoundResponse::fromResponse($httpResponse),
            429 => GetCitiesTooManyRequestsResponse::fromResponse($httpResponse),
            default => GetCitiesDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a simple lead. Use the unlocked route for more detail leads.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/LeadFyndr/operation/leadfyndr-get-lead
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetLeadRequest $request An object representing the request for this operation
     * @return GetLeadOKResponse The lead preview of a lead which is not unlocked yet.
     */
    public function getLead(GetLeadRequest $request): GetLeadOKResponse
    {
        $httpRequest = new Request(GetLeadRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetLeadOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => GetLeadBadRequestResponse::fromResponse($httpResponse),
            403 => GetLeadForbiddenResponse::fromResponse($httpResponse),
            404 => GetLeadNotFoundResponse::fromResponse($httpResponse),
            429 => GetLeadTooManyRequestsResponse::fromResponse($httpResponse),
            default => GetLeadDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get your LeadFyndr profile.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/LeadFyndr/operation/leadfyndr-get-lead-fyndr-profile
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetLeadFyndrProfileRequest $request An object representing the request for this operation
     * @return UntypedResponse The LeadFyndr profile.
     */
    public function getLeadFyndrProfile(GetLeadFyndrProfileRequest $request): UntypedResponse
    {
        $httpRequest = new Request(GetLeadFyndrProfileRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return UntypedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => GetLeadFyndrProfileBadRequestResponse::fromResponse($httpResponse),
            403 => GetLeadFyndrProfileForbiddenResponse::fromResponse($httpResponse),
            404 => GetLeadFyndrProfileNotFoundResponse::fromResponse($httpResponse),
            429 => GetLeadFyndrProfileTooManyRequestsResponse::fromResponse($httpResponse),
            default => GetLeadFyndrProfileDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get your LeadFyndr request.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/LeadFyndr/operation/leadfyndr-get-lead-fyndr-profile-request
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetLeadFyndrProfileRequestRequest $request An object representing the request for this operation
     * @return GetLeadFyndrProfileRequestOKResponse The LeadFyndr request.
     */
    public function getLeadFyndrProfileRequest(GetLeadFyndrProfileRequestRequest $request): GetLeadFyndrProfileRequestOKResponse
    {
        $httpRequest = new Request(GetLeadFyndrProfileRequestRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetLeadFyndrProfileRequestOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => GetLeadFyndrProfileRequestBadRequestResponse::fromResponse($httpResponse),
            403 => GetLeadFyndrProfileRequestForbiddenResponse::fromResponse($httpResponse),
            404 => GetLeadFyndrProfileRequestNotFoundResponse::fromResponse($httpResponse),
            429 => GetLeadFyndrProfileRequestTooManyRequestsResponse::fromResponse($httpResponse),
            default => GetLeadFyndrProfileRequestDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get lead tariff options. How many leads did you unlock this month?
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/LeadFyndr/operation/leadfyndr-get-lead-fyndr-profile-tariff-options
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetLeadFyndrProfileTariffOptionsRequest $request An object representing the request for this operation
     * @return GetLeadFyndrProfileTariffOptionsOKResponse The lead tariff options.
     */
    public function getLeadFyndrProfileTariffOptions(GetLeadFyndrProfileTariffOptionsRequest $request): GetLeadFyndrProfileTariffOptionsOKResponse
    {
        $httpRequest = new Request(GetLeadFyndrProfileTariffOptionsRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetLeadFyndrProfileTariffOptionsOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => GetLeadFyndrProfileTariffOptionsBadRequestResponse::fromResponse($httpResponse),
            403 => GetLeadFyndrProfileTariffOptionsForbiddenResponse::fromResponse($httpResponse),
            404 => GetLeadFyndrProfileTariffOptionsNotFoundResponse::fromResponse($httpResponse),
            429 => GetLeadFyndrProfileTariffOptionsTooManyRequestsResponse::fromResponse($httpResponse),
            default => GetLeadFyndrProfileTariffOptionsDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get unlocked leads export history for the given customerId.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/LeadFyndr/operation/leadfyndr-get-leads-export-history
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetLeadsExportHistoryRequest $request An object representing the request for this operation
     * @return GetLeadsExportHistoryOKResponse A list of unlocked leads exports.
     */
    public function getLeadsExportHistory(GetLeadsExportHistoryRequest $request): GetLeadsExportHistoryOKResponse
    {
        $httpRequest = new Request(GetLeadsExportHistoryRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetLeadsExportHistoryOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => GetLeadsExportHistoryBadRequestResponse::fromResponse($httpResponse),
            403 => GetLeadsExportHistoryForbiddenResponse::fromResponse($httpResponse),
            404 => GetLeadsExportHistoryNotFoundResponse::fromResponse($httpResponse),
            429 => GetLeadsExportHistoryTooManyRequestsResponse::fromResponse($httpResponse),
            default => GetLeadsExportHistoryDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a detail of a unlocked lead. Organisation can unlock leads.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/LeadFyndr/operation/leadfyndr-get-unlocked-lead
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetUnlockedLeadRequest $request An object representing the request for this operation
     * @return GetUnlockedLeadOKResponse The unlocked lead.
     */
    public function getUnlockedLead(GetUnlockedLeadRequest $request): GetUnlockedLeadOKResponse
    {
        $httpRequest = new Request(GetUnlockedLeadRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetUnlockedLeadOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => GetUnlockedLeadBadRequestResponse::fromResponse($httpResponse),
            403 => GetUnlockedLeadForbiddenResponse::fromResponse($httpResponse),
            404 => GetUnlockedLeadNotFoundResponse::fromResponse($httpResponse),
            429 => GetUnlockedLeadTooManyRequestsResponse::fromResponse($httpResponse),
            default => GetUnlockedLeadDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get all leads. Use the unlocked routes for more lead details.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/LeadFyndr/operation/leadfyndr-list-leads
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListLeadsRequest $request An object representing the request for this operation
     * @return ListLeadsOKResponse The leads list. Remember: more details will be given in the unlocked routes.
     */
    public function listLeads(ListLeadsRequest $request): ListLeadsOKResponse
    {
        $httpRequest = new Request(ListLeadsRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListLeadsOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ListLeadsBadRequestResponse::fromResponse($httpResponse),
            429 => ListLeadsTooManyRequestsResponse::fromResponse($httpResponse),
            default => ListLeadsDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get all unlocked leads. Organisation can unlock leads.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/LeadFyndr/operation/leadfyndr-list-unlocked-leads
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListUnlockedLeadsRequest $request An object representing the request for this operation
     * @return ListUnlockedLeadsOKResponse The unlocked leads list.
     */
    public function listUnlockedLeads(ListUnlockedLeadsRequest $request): ListUnlockedLeadsOKResponse
    {
        $httpRequest = new Request(ListUnlockedLeadsRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListUnlockedLeadsOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ListUnlockedLeadsBadRequestResponse::fromResponse($httpResponse),
            403 => ListUnlockedLeadsForbiddenResponse::fromResponse($httpResponse),
            404 => ListUnlockedLeadsNotFoundResponse::fromResponse($httpResponse),
            429 => ListUnlockedLeadsTooManyRequestsResponse::fromResponse($httpResponse),
            default => ListUnlockedLeadsDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Removes a reservation on a unlocked lead for the given customerId.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/LeadFyndr/operation/leadfyndr-remove-unlocked-lead-reservation
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param RemoveUnlockedLeadReservationRequest $request An object representing the request for this operation
     */
    public function removeUnlockedLeadReservation(RemoveUnlockedLeadReservationRequest $request): RemoveUnlockedLeadReservationOKResponse
    {
        $httpRequest = new Request(RemoveUnlockedLeadReservationRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return RemoveUnlockedLeadReservationOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => RemoveUnlockedLeadReservationBadRequestResponse::fromResponse($httpResponse),
            403 => RemoveUnlockedLeadReservationForbiddenResponse::fromResponse($httpResponse),
            404 => RemoveUnlockedLeadReservationNotFoundResponse::fromResponse($httpResponse),
            409 => RemoveUnlockedLeadReservationConflictResponse::fromResponse($httpResponse),
            429 => RemoveUnlockedLeadReservationTooManyRequestsResponse::fromResponse($httpResponse),
            default => RemoveUnlockedLeadReservationDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Reserve a unlocked lead for the given customerId.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/LeadFyndr/operation/leadfyndr-reserve-unlocked-lead
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ReserveUnlockedLeadRequest $request An object representing the request for this operation
     */
    public function reserveUnlockedLead(ReserveUnlockedLeadRequest $request): ReserveUnlockedLeadOKResponse
    {
        $httpRequest = new Request(ReserveUnlockedLeadRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ReserveUnlockedLeadOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ReserveUnlockedLeadBadRequestResponse::fromResponse($httpResponse),
            403 => ReserveUnlockedLeadForbiddenResponse::fromResponse($httpResponse),
            404 => ReserveUnlockedLeadNotFoundResponse::fromResponse($httpResponse),
            409 => ReserveUnlockedLeadConflictResponse::fromResponse($httpResponse),
            429 => ReserveUnlockedLeadTooManyRequestsResponse::fromResponse($httpResponse),
            default => ReserveUnlockedLeadDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Unlock a lead for the given customerId.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/LeadFyndr/operation/leadfyndr-unlock-lead
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UnlockLeadRequest $request An object representing the request for this operation
     */
    public function unlockLead(UnlockLeadRequest $request): UnlockLeadOKResponse
    {
        $httpRequest = new Request(UnlockLeadRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return UnlockLeadOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UnlockLeadBadRequestResponse::fromResponse($httpResponse),
            403 => UnlockLeadForbiddenResponse::fromResponse($httpResponse),
            404 => UnlockLeadNotFoundResponse::fromResponse($httpResponse),
            429 => UnlockLeadTooManyRequestsResponse::fromResponse($httpResponse),
            default => UnlockLeadDefaultResponse::fromResponse($httpResponse),
        });
    }
}
