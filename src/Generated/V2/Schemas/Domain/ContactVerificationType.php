<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Domain;

enum ContactVerificationType: string
{
    case name = 'name';
    case address = 'address';
    case email = 'email';
}
