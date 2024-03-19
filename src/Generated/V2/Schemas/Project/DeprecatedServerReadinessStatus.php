<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Project;

enum DeprecatedServerReadinessStatus: string
{
    case creating = 'creating';
    case ready = 'ready';
    case unready = 'unready';
}
