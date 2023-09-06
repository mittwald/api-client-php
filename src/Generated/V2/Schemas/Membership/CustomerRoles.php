<?php

namespace Mittwald\ApiClient\Generated\V2\Schemas\Membership;

enum CustomerRoles: string
{
    case owner = 'owner';
    case member = 'member';
    case accountant = 'accountant';
}
