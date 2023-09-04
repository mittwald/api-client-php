<?php

namespace Mittwald\ApiClient\Generated\V2\Clients\App\LinkDatabase;

enum LinkDatabaseRequestBodyPurpose: string {
    case primary = 'primary';
    case cache = 'cache';
    case custom = 'custom';
}
