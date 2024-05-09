<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Domain;

enum TransferAuthentication: string
{
    case unspecified = 'unspecified';
    case code = 'code';
    case email = 'email';
}
