<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Cronjob;

enum CronjobExecutionSortOrder: string
{
    case oldestFirst = 'oldestFirst';
    case newestFirst = 'newestFirst';
    case slowestFirst = 'slowestFirst';
    case fastestFirst = 'fastestFirst';
}
