<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Dns;

enum ZoneFileImportStatus: string
{
    case running = 'running';
    case succeeded = 'succeeded';
    case completedWithErrors = 'completedWithErrors';
}
