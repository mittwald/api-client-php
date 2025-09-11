<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Aihosting;

enum ContainerMetaStatus: string
{
    case created = 'created';
    case requested = 'requested';
    case failed = 'failed';
}
