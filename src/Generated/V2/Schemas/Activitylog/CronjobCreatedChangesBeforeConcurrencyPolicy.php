<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Activitylog;

enum CronjobCreatedChangesBeforeConcurrencyPolicy: string
{
    case allow = 'allow';
    case forbid = 'forbid';
    case replace = 'replace';
}
