<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Activitylog;

enum BackupDeletedName: string
{
    case backupdeleted = 'backup.deleted';
    case backupexportdeleted = 'backup.export-deleted';
    case backupscheduledeleted = 'backup.schedule-deleted';
}
