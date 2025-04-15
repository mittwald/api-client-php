<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\LeadFinder;

enum ProfileRequestStatus: string
{
    case NEW = 'NEW';
    case AUTOTESTINIT = 'AUTOTEST_INIT';
    case MANUALVERIFICATION = 'MANUAL_VERIFICATION';
    case REJECTED = 'REJECTED';
    case APPROVED = 'APPROVED';
}
