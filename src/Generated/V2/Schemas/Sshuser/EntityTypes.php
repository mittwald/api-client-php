<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Sshuser;

enum EntityTypes: string
{
    case ssh = 'ssh';
    case sftp = 'sftp';
}
