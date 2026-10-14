<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Activitylog;

enum SshUserActiveUpdatedName: string
{
    case sshusersshuseractivated = 'sshuser.ssh-user-activated';
    case sshusersftpuseractivated = 'sshuser.sftp-user-activated';
    case sshusersshuserdeactivated = 'sshuser.ssh-user-deactivated';
    case sshusersftpuserdeactivated = 'sshuser.sftp-user-deactivated';
}
