<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Conversation;

enum ServiceRequestMessageContent: string
{
    case relocation = 'relocation';
    case call = 'call';
}
