<?php

namespace Mittwald\ApiClient\Generated\V2\Schemas\App;

enum LinkedDatabasePurpose: string {
    case primary = 'primary';
    case cache = 'cache';
    case custom = 'custom';
}
