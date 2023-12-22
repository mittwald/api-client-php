<?php

namespace Mittwald\ApiClient\Generated\V2\Clients\PageInsights;

use GuzzleHttp\Exception\GuzzleException;
use Mittwald\ApiClient\Error\UnexpectedResponseException;
use Mittwald\ApiClient\Generated\V2\Clients\PageInsights\PageinsightsGetPerformanceData\PageinsightsGetPerformanceDataOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\PageInsights\PageinsightsGetPerformanceData\PageinsightsGetPerformanceDataRequest;
use Mittwald\ApiClient\Generated\V2\Clients\PageInsights\PageinsightsGetStraceData\PageinsightsGetStraceDataOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\PageInsights\PageinsightsGetStraceData\PageinsightsGetStraceDataRequest;
use Mittwald\ApiClient\Generated\V2\Clients\PageInsights\PageinsightsListPerformanceDataForProject\PageinsightsListPerformanceDataForProjectOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\PageInsights\PageinsightsListPerformanceDataForProject\PageinsightsListPerformanceDataForProjectRequest;
use Mittwald\ApiClient\Generated\V2\Clients\PageInsights\PageinsightsScheduleStrace\PageinsightsScheduleStraceAcceptedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\PageInsights\PageinsightsScheduleStrace\PageinsightsScheduleStraceRequest;

/**
 * Client for Page Insights API
 *
 * The page insights API allows you to get page insights information.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
interface PageInsightsClient
{
    /**
     * Get detailed performance data for a given domain and path.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Page-Insights/operation/pageinsights-get-performance-data
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param PageinsightsGetPerformanceData\PageinsightsGetPerformanceDataRequest $request An object representing the request for this operation
     * @return PageinsightsGetPerformanceData\PageinsightsGetPerformanceDataOKResponse OK
     */
    public function pageinsightsGetPerformanceData(PageinsightsGetPerformanceDataRequest $request): PageinsightsGetPerformanceDataOKResponse;
    /**
     * Get all data for a given strace.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Page-Insights/operation/pageinsights-get-strace-data
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param PageinsightsGetStraceData\PageinsightsGetStraceDataRequest $request An object representing the request for this operation
     * @return PageinsightsGetStraceData\PageinsightsGetStraceDataOKResponse OK
     */
    public function pageinsightsGetStraceData(PageinsightsGetStraceDataRequest $request): PageinsightsGetStraceDataOKResponse;
    /**
     * List websites (specified as domain and path) from a project where performance data is available.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Page-Insights/operation/pageinsights-list-performance-data-for-project
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param PageinsightsListPerformanceDataForProject\PageinsightsListPerformanceDataForProjectRequest $request An object representing the request for this operation
     * @return PageinsightsListPerformanceDataForProject\PageinsightsListPerformanceDataForProjectOKResponse OK
     */
    public function pageinsightsListPerformanceDataForProject(PageinsightsListPerformanceDataForProjectRequest $request): PageinsightsListPerformanceDataForProjectOKResponse;
    /**
     * Schedule a strace measurement for a single http request.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Page-Insights/operation/pageinsights-schedule-strace
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param PageinsightsScheduleStrace\PageinsightsScheduleStraceRequest $request An object representing the request for this operation
     * @return PageinsightsScheduleStrace\PageinsightsScheduleStraceAcceptedResponse Scheduled
     */
    public function pageinsightsScheduleStrace(PageinsightsScheduleStraceRequest $request): PageinsightsScheduleStraceAcceptedResponse;
}
