<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Conversation;

enum Department: string
{
    case development = 'development';
    case mail = 'mail';
    case infra = 'infra';
    case marketing = 'marketing';
    case network = 'network';
    case dataCenter = 'dataCenter';
    case accounting = 'accounting';
    case customerService = 'customerService';
    case cloudHosting = 'cloudHosting';
    case software = 'software';
    case generic = 'generic';
    case security = 'security';
}
