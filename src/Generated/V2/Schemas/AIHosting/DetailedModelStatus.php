<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\AIHosting;

enum DetailedModelStatus: string
{
    case active = 'active';
    case needApproval = 'needApproval';
    case deprecated = 'deprecated';
}
