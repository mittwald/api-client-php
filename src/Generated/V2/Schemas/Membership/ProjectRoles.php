<?php

namespace Mittwald\ApiClient\Generated\V2\Schemas\Membership;

enum ProjectRoles: string
{
    case notset = 'notset';
    case owner = 'owner';
    case emailadmin = 'emailadmin';
    case external = 'external';
}
