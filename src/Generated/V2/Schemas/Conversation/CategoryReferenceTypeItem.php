<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Conversation;

enum CategoryReferenceTypeItem: string
{
    case unspecified = 'unspecified';
    case server = 'server';
    case project = 'project';
    case organisation = 'organisation';
    case extensionInstance = 'extensionInstance';
}
