<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Backup;

enum RestorePathPhase: string
{
    case running = 'running';
    case completed = 'completed';
}
