<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\UpdateSftpUser;

enum UpdateSftpUserRequestBodyAccessLevel: string
{
    case read = 'read';
    case full = 'full';
}
