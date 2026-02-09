<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Project;

enum ServerStatus: string
{
    case pending = 'pending';
    case ready = 'ready';
    case unready = 'unready';
    case suspended = 'suspended';
    case migrating = 'migrating';
}
