<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Marketplace;

enum ExtensionInstanceWebhookExecutionState: string
{
    case running = 'running';
    case halted = 'halted';
    case failed = 'failed';
    case successful = 'successful';
}
