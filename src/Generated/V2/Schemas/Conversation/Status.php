<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Conversation;

enum Status: string
{
    case open = 'open';
    case closed = 'closed';
    case answered = 'answered';
    case inProgress = 'inProgress';
    case waiting = 'waiting';
}
