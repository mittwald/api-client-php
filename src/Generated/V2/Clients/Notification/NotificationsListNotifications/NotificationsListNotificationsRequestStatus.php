<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsListNotifications;

enum NotificationsListNotificationsRequestStatus: string
{
    case unread = 'unread';
    case read = 'read';
}
