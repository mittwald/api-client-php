<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Marketplace;

enum UnpublishedExtensionState: string
{
    case enabled = 'enabled';
    case blocked = 'blocked';
    case disabled = 'disabled';
}
