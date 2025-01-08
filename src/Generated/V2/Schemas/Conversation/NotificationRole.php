<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Conversation;

enum NotificationRole: string
{
    case customerowner = 'customer_owner';
    case customeraccountant = 'customer_accountant';
    case customermember = 'customer_member';
    case projectowner = 'project_owner';
    case projectemailadmin = 'project_emailadmin';
    case projectexternal = 'project_external';
}
