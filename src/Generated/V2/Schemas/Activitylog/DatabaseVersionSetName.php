<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Activitylog;

enum DatabaseVersionSetName: string
{
    case databasemysqlversionset = 'database.mysql-version-set';
    case databaseredisversionset = 'database.redis-version-set';
}
