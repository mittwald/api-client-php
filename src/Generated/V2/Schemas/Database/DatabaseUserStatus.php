<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Database;

enum DatabaseUserStatus: string
{
    case pending = 'pending';
    case ready = 'ready';
    case error = 'error';
    case terminating = 'terminating';
    case disabled = 'disabled';
}
