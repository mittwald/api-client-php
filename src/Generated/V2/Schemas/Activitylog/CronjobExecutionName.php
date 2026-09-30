<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Activitylog;

enum CronjobExecutionName: string
{
    case cronjobexecutiontriggered = 'cronjob.execution-triggered';
    case cronjobexecutionaborted = 'cronjob.execution-aborted';
}
