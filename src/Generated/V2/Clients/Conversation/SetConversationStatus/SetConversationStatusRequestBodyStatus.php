<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Conversation\SetConversationStatus;

enum SetConversationStatusRequestBodyStatus: string
{
    case open = 'open';
    case answered = 'answered';
    case closed = 'closed';
}
