<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Leadfyndr;

enum ProfileRequestStatus: string
{
    case AUTOTESTINIT = 'AUTOTEST_INIT';
    case MANUALVERIFICATION = 'MANUAL_VERIFICATION';
    case REJECTED = 'REJECTED';
    case APPROVED = 'APPROVED';
}
