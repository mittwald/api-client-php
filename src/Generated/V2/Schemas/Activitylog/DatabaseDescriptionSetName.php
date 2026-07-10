<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Activitylog;

enum DatabaseDescriptionSetName: string
{
    case databasemysqldescriptionset = 'database.mysql-description-set';
    case databaseredisdescriptionset = 'database.redis-description-set';
}
