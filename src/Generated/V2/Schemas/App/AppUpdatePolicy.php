<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\App;

enum AppUpdatePolicy: string
{
    case none = 'none';
    case patchLevel = 'patchLevel';
    case all = 'all';
}
