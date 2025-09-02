<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Container;

enum VolumeSortOrder: string
{
    case nameAsc = 'nameAsc';
    case nameDesc = 'nameDesc';
    case storageAsc = 'storageAsc';
    case storageDesc = 'storageDesc';
}
