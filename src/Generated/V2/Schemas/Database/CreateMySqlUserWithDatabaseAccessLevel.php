<?php

namespace Mittwald\ApiClient\Generated\V2\Schemas\Database;

enum CreateMySqlUserWithDatabaseAccessLevel: string
{
    case full = 'full';
    case readonly = 'readonly';
}
