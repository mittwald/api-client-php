<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Backup;

enum BackupSortOrder: string
{
    case oldestFirst = 'oldestFirst';
    case newestFirst = 'newestFirst';
}
