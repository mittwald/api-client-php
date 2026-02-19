<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Verification;

enum VerifyAddressConfidence: string
{
    case EXISTS = 'EXISTS';
    case UNSURE = 'UNSURE';
    case NONEXISTENT = 'NON_EXISTENT';
}
