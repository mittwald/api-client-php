<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Marketplace;

enum Scope: string
{
    case mailread = 'mail:read';
    case mailwrite = 'mail:write';
}
