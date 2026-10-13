<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Activitylog;

enum MembershipInviteStatusChangedName: string
{
    case membershipinviteresent = 'membership.invite-resent';
    case membershipinviteaccepted = 'membership.invite-accepted';
    case membershipinvitedeclined = 'membership.invite-declined';
    case membershipinviterevoked = 'membership.invite-revoked';
    case membershipinviteexpired = 'membership.invite-expired';
}
