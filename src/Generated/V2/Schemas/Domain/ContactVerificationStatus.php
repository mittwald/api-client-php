<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Domain;

enum ContactVerificationStatus: string
{
    case created = 'created';
    case pending = 'pending';
    case completed = 'completed';
    case failed = 'failed';
}
