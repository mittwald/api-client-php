<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Domain;

enum OwnerVerificationStatus: string
{
    case pending = 'pending';
    case verified = 'verified';
    case failed = 'failed';
    case suspended = 'suspended';
}
