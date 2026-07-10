<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\App;

enum AppInstallationSortOrder: string
{
    case newestFirst = 'newestFirst';
    case oldestFirst = 'oldestFirst';
    case sortByPhpVersionAsc = 'sortByPhpVersionAsc';
    case sortByPhpVersionDesc = 'sortByPhpVersionDesc';
}
