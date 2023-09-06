<?php

namespace Mittwald\ApiClient\Generated\V2\Schemas\Customer;

enum CustomerVatIdValidationState: string
{
    case valid = 'valid';
    case invalid = 'invalid';
    case pending = 'pending';
    case unspecified = 'unspecified';
}
