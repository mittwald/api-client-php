<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Activitylog;

enum SshUserPublicKeysUpdatedName: string
{
    case sshusersshuserpublickeysupdated = 'sshuser.ssh-user-public-keys-updated';
    case sshusersftpuserpublickeysupdated = 'sshuser.sftp-user-public-keys-updated';
}
