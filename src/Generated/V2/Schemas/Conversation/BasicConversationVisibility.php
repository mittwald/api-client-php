<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Conversation;

enum BasicConversationVisibility: string
{
    case shared = 'shared';
    case private = 'private';
}
