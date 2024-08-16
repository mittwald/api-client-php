<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Conversation;

enum Department: string
{
    case development = 'development';
    case mail = 'mail';
    case accounting = 'accounting';
    case cloudHosting = 'cloudHosting';
    case customerService = 'customerService';
    case generic = 'generic';
}
