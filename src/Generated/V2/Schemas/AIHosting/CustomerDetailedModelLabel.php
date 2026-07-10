<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\AIHosting;

enum CustomerDetailedModelLabel: string
{
    case lts = 'lts';
    case stable = 'stable';
    case experimental = 'experimental';
    case legacystable = 'legacy stable';
    case preview = 'preview';
}
