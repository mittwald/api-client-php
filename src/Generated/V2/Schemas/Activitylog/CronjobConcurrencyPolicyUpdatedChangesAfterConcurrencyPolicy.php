<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Activitylog;

enum CronjobConcurrencyPolicyUpdatedChangesAfterConcurrencyPolicy: string
{
    case allow = 'allow';
    case forbid = 'forbid';
    case replace = 'replace';
}
