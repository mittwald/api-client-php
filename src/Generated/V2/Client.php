<?php

namespace Mittwald\ApiClient\Generated\V2;

/**
 * Auto-generated factory for mittwald mStudio v2 clients.
 *
 * @internal
 */
class Client extends \Mittwald\ApiClient\Client\BaseClient
{
    public function project(): Clients\Project\ProjectClient
    {
        return new \Mittwald\ApiClient\Generated\V2\Clients\Project\ProjectClient($this->client);
    }

    public function backup(): Clients\Backup\BackupClient
    {
        return new \Mittwald\ApiClient\Generated\V2\Clients\Backup\BackupClient($this->client);
    }

    public function sSHSFTPUser(): Clients\SSHSFTPUser\SSHSFTPUserClient
    {
        return new \Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\SSHSFTPUserClient($this->client);
    }

    public function cronjob(): Clients\Cronjob\CronjobClient
    {
        return new \Mittwald\ApiClient\Generated\V2\Clients\Cronjob\CronjobClient($this->client);
    }

    public function app(): Clients\App\AppClient
    {
        return new \Mittwald\ApiClient\Generated\V2\Clients\App\AppClient($this->client);
    }

    public function projectFileSystem(): Clients\ProjectFileSystem\ProjectFileSystemClient
    {
        return new \Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemClient($this->client);
    }

    public function contract(): Clients\Contract\ContractClient
    {
        return new \Mittwald\ApiClient\Generated\V2\Clients\Contract\ContractClient($this->client);
    }

    public function database(): Clients\Database\DatabaseClient
    {
        return new \Mittwald\ApiClient\Generated\V2\Clients\Database\DatabaseClient($this->client);
    }

    public function domain(): Clients\Domain\DomainClient
    {
        return new \Mittwald\ApiClient\Generated\V2\Clients\Domain\DomainClient($this->client);
    }

    public function conversation(): Clients\Conversation\ConversationClient
    {
        return new \Mittwald\ApiClient\Generated\V2\Clients\Conversation\ConversationClient($this->client);
    }

    public function customer(): Clients\Customer\CustomerClient
    {
        return new \Mittwald\ApiClient\Generated\V2\Clients\Customer\CustomerClient($this->client);
    }

    public function user(): Clients\User\UserClient
    {
        return new \Mittwald\ApiClient\Generated\V2\Clients\User\UserClient($this->client);
    }

    public function notification(): Clients\Notification\NotificationClient
    {
        return new \Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationClient($this->client);
    }

    public function file(): Clients\File\FileClient
    {
        return new \Mittwald\ApiClient\Generated\V2\Clients\File\FileClient($this->client);
    }

    public function mail(): Clients\Mail\MailClient
    {
        return new \Mittwald\ApiClient\Generated\V2\Clients\Mail\MailClient($this->client);
    }

    public function article(): Clients\Article\ArticleClient
    {
        return new \Mittwald\ApiClient\Generated\V2\Clients\Article\ArticleClient($this->client);
    }
}
