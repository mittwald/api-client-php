<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Marketplace;

enum ExtensionInstanceWebhookExecutionKind: string
{
    case extensionAddedToContext = 'extensionAddedToContext';
    case instanceUpdated = 'instanceUpdated';
    case secretRotated = 'secretRotated';
    case instanceRemovedFromContext = 'instanceRemovedFromContext';
}
