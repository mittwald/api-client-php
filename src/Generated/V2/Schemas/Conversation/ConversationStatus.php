<?php

namespace Mittwald\ApiClient\Generated\V2\Schemas\Conversation;

enum ConversationStatus: string {
    case open = 'open';
    case closed = 'closed';
    case answered = 'answered';
}
