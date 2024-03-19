<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Mail;

enum MailAddressInternalMailboxSpamProtectionFolder: string
{
    case spam = 'spam';
    case inbox = 'inbox';
}
