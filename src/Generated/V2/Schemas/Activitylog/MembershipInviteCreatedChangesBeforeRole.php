<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Activitylog;

enum MembershipInviteCreatedChangesBeforeRole: string
{
    case owner = 'owner';
    case emailadmin = 'emailadmin';
    case external = 'external';
}
