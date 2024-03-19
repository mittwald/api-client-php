<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\CreateSftpUser;

enum CreateSftpUserRequestBodyAccessLevel: string
{
    case read = 'read';
    case full = 'full';
}
