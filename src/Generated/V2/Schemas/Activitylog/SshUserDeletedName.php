<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Activitylog;

enum SshUserDeletedName: string
{
    case sshusersshuserdeleted = 'sshuser.ssh-user-deleted';
    case sshusersftpuserdeleted = 'sshuser.sftp-user-deleted';
    case sshusersshuserexpired = 'sshuser.ssh-user-expired';
    case sshusersftpuserexpired = 'sshuser.sftp-user-expired';
}
