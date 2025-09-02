<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\App;

enum Phase: string
{
    case pending = 'pending';
    case installing = 'installing';
    case upgrading = 'upgrading';
    case ready = 'ready';
    case disabled = 'disabled';
}
