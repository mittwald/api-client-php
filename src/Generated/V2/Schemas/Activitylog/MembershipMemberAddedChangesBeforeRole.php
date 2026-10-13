<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Activitylog;

enum MembershipMemberAddedChangesBeforeRole: string
{
    case owner = 'owner';
    case emailadmin = 'emailadmin';
    case external = 'external';
}
