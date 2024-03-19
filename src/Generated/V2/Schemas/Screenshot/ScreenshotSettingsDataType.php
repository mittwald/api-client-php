<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Screenshot;

enum ScreenshotSettingsDataType: string
{
    case jpeg = 'jpeg';
    case png = 'png';
    case webp = 'webp';
}
