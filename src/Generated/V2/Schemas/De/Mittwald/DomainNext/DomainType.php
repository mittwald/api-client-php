<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\De\Mittwald\DomainNext;

enum DomainType: string
{
    case domain = 'domain';
    case subdomain = 'subdomain';
    case vhost = 'vhost';
}
