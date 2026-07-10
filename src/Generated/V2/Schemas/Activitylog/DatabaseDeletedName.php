<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Activitylog;

enum DatabaseDeletedName: string
{
    case databasemysqldeleted = 'database.mysql-deleted';
    case databaseredisdeleted = 'database.redis-deleted';
}
