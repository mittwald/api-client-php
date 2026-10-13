<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Activitylog;

enum MembershipMemberRemovedName: string
{
    case membershipmemberremoved = 'membership.member-removed';
    case membershipmemberleft = 'membership.member-left';
    case membershipmemberexpired = 'membership.member-expired';
}
