<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Cronjob;

enum StatusSummary: string
{
    case unspecified = 'unspecified';
    case active = 'active';
    case complete = 'complete';
    case suspended = 'suspended';
    case failed = 'failed';
    case orphaned = 'orphaned';
    case timeout = 'timeout';
    case error = 'error';
}
