<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Activitylog;

enum LogEntryCredentialKind: string
{
    case unknown = 'unknown';
    case userSession = 'userSession';
    case apiToken = 'apiToken';
    case scopedToken = 'scopedToken';
    case extensionInstance = 'extensionInstance';
    case extensionSession = 'extensionSession';
    case serviceToken = 'serviceToken';
    case atrek = 'atrek';
    case classicIdentity = 'classicIdentity';
}
