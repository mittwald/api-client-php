<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderPreviewTariffChange;

enum OrderPreviewTariffChangeRequestBodyTariffChangeType: string
{
    case projectHosting = 'projectHosting';
    case server = 'server';
}
