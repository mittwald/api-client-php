<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\File\GetFileUploadTypeRules;

enum GetFileUploadTypeRulesRequestFileUploadType: string
{
    case avatar = 'avatar';
    case extensionAssetImage = 'extensionAssetImage';
    case extensionAssetVideo = 'extensionAssetVideo';
    case conversation = 'conversation';
}
