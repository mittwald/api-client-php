<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Conversation;

enum ConversationVisibility: string
{
    case shared = 'shared';
    case private = 'private';
}
