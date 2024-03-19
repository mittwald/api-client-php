<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Database\UpdateMysqlUser;

enum UpdateMysqlUserRequestBodyAccessLevel: string
{
    case full = 'full';
    case readonly = 'readonly';
}
