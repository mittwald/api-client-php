<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Marketplace;

enum WebhookKind: string
{
    case extensionaddedtocontext = 'extension-added-to-context';
    case extensioninstanceupdated = 'extension-instance-updated';
    case extensioninstancesecretrotated = 'extension-instance-secret-rotated';
    case extensioninstanceremovedfromcontext = 'extension-instance-removed-from-context';
}
