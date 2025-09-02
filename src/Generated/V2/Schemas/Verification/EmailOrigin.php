<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Verification;

enum EmailOrigin: string
{
    case ISMITTWALD = 'IS_MITTWALD';
    case ISNOTMITTWALD = 'IS_NOT_MITTWALD';
    case COULDBEMITTWALD = 'COULD_BE_MITTWALD';
}
