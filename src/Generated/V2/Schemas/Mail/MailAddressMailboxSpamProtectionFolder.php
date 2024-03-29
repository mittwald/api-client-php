<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Mail;

enum MailAddressMailboxSpamProtectionFolder: string
{
    case spam = 'spam';
    case inbox = 'inbox';
}
