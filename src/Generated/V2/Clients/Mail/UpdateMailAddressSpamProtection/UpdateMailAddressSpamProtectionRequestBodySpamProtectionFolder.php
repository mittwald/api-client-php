<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressSpamProtection;

enum UpdateMailAddressSpamProtectionRequestBodySpamProtectionFolder: string
{
    case inbox = 'inbox';
    case spam = 'spam';
}
