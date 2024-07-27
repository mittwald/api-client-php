<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderPreviewOrder;

enum OrderPreviewOrderRequestBodyOrderType: string
{
    case domain = 'domain';
    case projectHosting = 'projectHosting';
    case server = 'server';
    case externalCertificate = 'externalCertificate';
}
