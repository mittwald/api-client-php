<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Activitylog;

enum AppInstallationDatabaseUnlinkedChangesBeforePurpose: string
{
    case unspecified = 'unspecified';
    case primary = 'primary';
    case cache = 'cache';
    case custom = 'custom';
}
