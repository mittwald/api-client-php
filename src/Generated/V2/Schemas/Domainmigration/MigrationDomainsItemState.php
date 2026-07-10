<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Domainmigration;

enum MigrationDomainsItemState: string
{
    case pending = 'pending';
    case succeeded = 'succeeded';
    case failed = 'failed';
}
