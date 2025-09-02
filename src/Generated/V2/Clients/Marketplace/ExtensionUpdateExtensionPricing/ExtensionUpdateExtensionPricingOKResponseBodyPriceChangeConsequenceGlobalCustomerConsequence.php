<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionUpdateExtensionPricing;

enum ExtensionUpdateExtensionPricingOKResponseBodyPriceChangeConsequenceGlobalCustomerConsequence: string
{
    case NONE = 'NONE';
    case INFO = 'INFO';
    case CONFIRMREQUIRED = 'CONFIRM_REQUIRED';
}
