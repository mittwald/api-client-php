<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Relocation\CreateRelocation;

enum CreateRelocationRequestBodyArticleType: string
{
    case cmshosting = 'cms-hosting';
    case cmshostingexpress = 'cms-hosting-express';
    case onlineshop = 'onlineshop';
    case onlineshopexpress = 'onlineshop-express';
}
