<?php

namespace Mittwald\ApiClient\Generated\V2\Schemas\Customer;

enum Role: string
{
    case owner = 'owner';
    case member = 'member';
    case accountant = 'accountant';
}
