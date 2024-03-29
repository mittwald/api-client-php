<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Database;

enum MySqlUserAccessLevel: string
{
    case full = 'full';
    case readonly = 'readonly';
}
