<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Database;

enum DatabaseStatus: string
{
    case pending = 'pending';
    case ready = 'ready';
    case migrating = 'migrating';
    case importing = 'importing';
    case error = 'error';
}
