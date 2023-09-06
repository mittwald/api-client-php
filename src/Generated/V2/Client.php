<?php

namespace Mittwald\ApiClient\Generated\V2;

use Mittwald\ApiClient\Client\BaseClient;
use Mittwald\ApiClient\Generated\V2\Clients\App\AppClient;
use Mittwald\ApiClient\Generated\V2\Clients\Article\ArticleClient;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\BackupClient;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\ContractClient;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\ConversationClient;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\CronjobClient;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CustomerClient;
use Mittwald\ApiClient\Generated\V2\Clients\Database\DatabaseClient;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DomainClient;
use Mittwald\ApiClient\Generated\V2\Clients\File\FileClient;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MailClient;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationClient;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ProjectClient;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemClient;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\SSHSFTPUserClient;
use Mittwald\ApiClient\Generated\V2\Clients\User\UserClient;

/**
 * Auto-generated factory for mittwald mStudio v2 clients.
 *
 * @internal
 */
class Client extends BaseClient
{
    public function project(): ProjectClient
    {
        return new ProjectClient($this->client);
    }

    public function backup(): BackupClient
    {
        return new BackupClient($this->client);
    }

    public function sSHSFTPUser(): SSHSFTPUserClient
    {
        return new SSHSFTPUserClient($this->client);
    }

    public function cronjob(): CronjobClient
    {
        return new CronjobClient($this->client);
    }

    public function app(): AppClient
    {
        return new AppClient($this->client);
    }

    public function projectFileSystem(): ProjectFileSystemClient
    {
        return new ProjectFileSystemClient($this->client);
    }

    public function contract(): ContractClient
    {
        return new ContractClient($this->client);
    }

    public function database(): DatabaseClient
    {
        return new DatabaseClient($this->client);
    }

    public function domain(): DomainClient
    {
        return new DomainClient($this->client);
    }

    public function conversation(): ConversationClient
    {
        return new ConversationClient($this->client);
    }

    public function customer(): CustomerClient
    {
        return new CustomerClient($this->client);
    }

    public function user(): UserClient
    {
        return new UserClient($this->client);
    }

    public function notification(): NotificationClient
    {
        return new NotificationClient($this->client);
    }

    public function file(): FileClient
    {
        return new FileClient($this->client);
    }

    public function mail(): MailClient
    {
        return new MailClient($this->client);
    }

    public function article(): ArticleClient
    {
        return new ArticleClient($this->client);
    }
}
