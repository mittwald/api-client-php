<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Container;

enum ServiceStatus: string
{
    case running = 'running';
    case stopped = 'stopped';
    case restarting = 'restarting';
    case error = 'error';
    case creating = 'creating';
    case starting = 'starting';
}
