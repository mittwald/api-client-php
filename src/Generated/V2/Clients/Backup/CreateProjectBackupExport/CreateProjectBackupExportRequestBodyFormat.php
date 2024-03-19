<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Backup\CreateProjectBackupExport;

enum CreateProjectBackupExportRequestBodyFormat: string
{
    case tar = 'tar';
    case zip = 'zip';
}
