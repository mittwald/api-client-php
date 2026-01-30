<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Backup;

enum ProjectBackupRestorePhase: string
{
    case running = 'running';
    case completed = 'completed';
}
