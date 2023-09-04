<?php

namespace Mittwald\ApiClient\Generated\V2\Schemas\Backup;

enum ProjectBackupExportPhase: string {
    case EMPTY = '';
    case Pending = 'Pending';
    case Exporting = 'Exporting';
    case Failed = 'Failed';
    case Completed = 'Completed';
    case Expired = 'Expired';
}
