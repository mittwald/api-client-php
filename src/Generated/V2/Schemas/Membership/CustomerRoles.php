<?php

namespace Mittwald\ApiClient\Generated\V2\Schemas\Membership;

enum CustomerRoles: string
{
    case notset = 'notset';
    case owner = 'owner';
    case member = 'member';
    case accountant = 'accountant';
}
