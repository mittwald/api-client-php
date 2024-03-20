<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Relocation\CreateRelocation;

enum CreateRelocationRequestBodyTargetProductAlternative2: string
{
    case SpaceServer = 'Space-Server';
    case proSpace = 'proSpace';
    case AgenturServer = 'Agentur-Server';
    case CMSHosting = 'CMS-Hosting';
    case ShopHosting = 'Shop-Hosting';
}
