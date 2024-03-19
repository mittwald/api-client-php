<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\App;

enum LinkedDatabaseKind: string
{
    case mysql = 'mysql';
    case redis = 'redis';
}
