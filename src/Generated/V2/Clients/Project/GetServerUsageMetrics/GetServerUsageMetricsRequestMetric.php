<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Project\GetServerUsageMetrics;

enum GetServerUsageMetricsRequestMetric: string
{
    case cpu = 'cpu';
    case memory = 'memory';
}
