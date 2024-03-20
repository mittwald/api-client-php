<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Sshuser;

enum AccessLevel: string
{
    case full = 'full';
    case read = 'read';
    case unspecified = 'unspecified';
}
