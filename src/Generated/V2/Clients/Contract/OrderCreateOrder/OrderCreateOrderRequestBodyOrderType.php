<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderCreateOrder;

enum OrderCreateOrderRequestBodyOrderType: string
{
    case domain = 'domain';
    case projectHosting = 'projectHosting';
    case server = 'server';
    case externalCertificate = 'externalCertificate';
    case leadFyndr = 'leadFyndr';
}
