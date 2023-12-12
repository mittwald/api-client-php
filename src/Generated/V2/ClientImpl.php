<?php

namespace Mittwald\ApiClient\Generated\V2;

use Mittwald\ApiClient\Client\BaseClient;
use Mittwald\ApiClient\Generated\V2\Clients\App\AppClient;
use Mittwald\ApiClient\Generated\V2\Clients\App\AppClientImpl;
use Mittwald\ApiClient\Generated\V2\Clients\Article\ArticleClient;
use Mittwald\ApiClient\Generated\V2\Clients\Article\ArticleClientImpl;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\BackupClient;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\BackupClientImpl;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ContainerClient;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ContainerClientImpl;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\ContractClient;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\ContractClientImpl;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\ConversationClient;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\ConversationClientImpl;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\CronjobClient;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\CronjobClientImpl;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CustomerClient;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CustomerClientImpl;
use Mittwald\ApiClient\Generated\V2\Clients\Database\DatabaseClient;
use Mittwald\ApiClient\Generated\V2\Clients\Database\DatabaseClientImpl;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DomainClient;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DomainClientImpl;
use Mittwald\ApiClient\Generated\V2\Clients\File\FileClient;
use Mittwald\ApiClient\Generated\V2\Clients\File\FileClientImpl;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MailClient;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MailClientImpl;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationClient;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationClientImpl;
use Mittwald\ApiClient\Generated\V2\Clients\PageInsights\PageInsightsClient;
use Mittwald\ApiClient\Generated\V2\Clients\PageInsights\PageInsightsClientImpl;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ProjectClient;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ProjectClientImpl;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemClient;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemClientImpl;
use Mittwald\ApiClient\Generated\V2\Clients\Relocation\RelocationClient;
use Mittwald\ApiClient\Generated\V2\Clients\Relocation\RelocationClientImpl;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\SSHSFTPUserClient;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\SSHSFTPUserClientImpl;
use Mittwald\ApiClient\Generated\V2\Clients\User\UserClient;
use Mittwald\ApiClient\Generated\V2\Clients\User\UserClientImpl;

/**
 * Auto-generated factory for mittwald mStudio v2 clients.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 */
class ClientImpl extends BaseClient implements Client
{
    public function project(): ProjectClient
    {
        return new ProjectClientImpl($this->client);
    }

    public function backup(): BackupClient
    {
        return new BackupClientImpl($this->client);
    }

    public function sshSFTPUser(): SSHSFTPUserClient
    {
        return new SSHSFTPUserClientImpl($this->client);
    }

    public function cronjob(): CronjobClient
    {
        return new CronjobClientImpl($this->client);
    }

    public function app(): AppClient
    {
        return new AppClientImpl($this->client);
    }

    public function projectFileSystem(): ProjectFileSystemClient
    {
        return new ProjectFileSystemClientImpl($this->client);
    }

    public function contract(): ContractClient
    {
        return new ContractClientImpl($this->client);
    }

    public function database(): DatabaseClient
    {
        return new DatabaseClientImpl($this->client);
    }

    public function domain(): DomainClient
    {
        return new DomainClientImpl($this->client);
    }

    public function conversation(): ConversationClient
    {
        return new ConversationClientImpl($this->client);
    }

    public function customer(): CustomerClient
    {
        return new CustomerClientImpl($this->client);
    }

    public function user(): UserClient
    {
        return new UserClientImpl($this->client);
    }

    public function notification(): NotificationClient
    {
        return new NotificationClientImpl($this->client);
    }

    public function file(): FileClient
    {
        return new FileClientImpl($this->client);
    }

    public function mail(): MailClient
    {
        return new MailClientImpl($this->client);
    }

    public function article(): ArticleClient
    {
        return new ArticleClientImpl($this->client);
    }

    public function container(): ContainerClient
    {
        return new ContainerClientImpl($this->client);
    }

    public function pageInsights(): PageInsightsClient
    {
        return new PageInsightsClientImpl($this->client);
    }

    public function relocation(): RelocationClient
    {
        return new RelocationClientImpl($this->client);
    }
}
