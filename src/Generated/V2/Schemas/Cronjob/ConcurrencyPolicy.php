<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Cronjob;

enum ConcurrencyPolicy: string
{
    case allow = 'allow';
    case forbid = 'forbid';
    case replace = 'replace';
}
