<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\App\DeprecatedAppLinkDatabase;

enum DeprecatedAppLinkDatabaseRequestBodyPurpose: string
{
    case primary = 'primary';
    case cache = 'cache';
    case custom = 'custom';
}
