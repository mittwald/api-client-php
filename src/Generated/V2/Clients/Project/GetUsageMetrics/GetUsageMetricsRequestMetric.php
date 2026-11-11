<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Project\GetUsageMetrics;

enum GetUsageMetricsRequestMetric: string
{
    case cpu = 'cpu';
    case memory = 'memory';
}
