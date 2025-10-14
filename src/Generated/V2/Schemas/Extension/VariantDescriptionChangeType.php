<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Extension;

enum VariantDescriptionChangeType: string
{
    case FEATURESETMODIFIED = 'FEATURE_SET_MODIFIED';
    case FEATURESETUNCHANGED = 'FEATURE_SET_UNCHANGED';
}
