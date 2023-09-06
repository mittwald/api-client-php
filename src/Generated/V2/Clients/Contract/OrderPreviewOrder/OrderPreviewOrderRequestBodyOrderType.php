<?php

namespace Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderPreviewOrder;

enum OrderPreviewOrderRequestBodyOrderType: string
{
    case domain = 'domain';
    case projectHosting = 'projectHosting';
    case server = 'server';
}
