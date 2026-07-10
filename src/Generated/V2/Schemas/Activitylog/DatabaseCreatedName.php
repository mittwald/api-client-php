<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Activitylog;

enum DatabaseCreatedName: string
{
    case databasemysqlcreated = 'database.mysql-created';
    case databaserediscreated = 'database.redis-created';
}
