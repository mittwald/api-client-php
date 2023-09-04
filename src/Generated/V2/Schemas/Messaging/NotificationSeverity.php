<?php

namespace Mittwald\ApiClient\Generated\V2\Schemas\Messaging;

enum NotificationSeverity: string {
    case success = 'success';
    case info = 'info';
    case warning = 'warning';
    case error = 'error';
}
