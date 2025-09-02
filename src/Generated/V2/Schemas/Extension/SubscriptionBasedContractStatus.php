<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Extension;

enum SubscriptionBasedContractStatus: string
{
    case notStarted = 'notStarted';
    case pending = 'pending';
    case active = 'active';
    case terminationPending = 'terminationPending';
}
