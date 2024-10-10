<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Marketplace;

enum OptionalExtensionState: string
{
    case enabled = 'enabled';
    case blocked = 'blocked';
    case disabled = 'disabled';
}
