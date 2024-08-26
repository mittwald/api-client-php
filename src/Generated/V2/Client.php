<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2;

use Mittwald\ApiClient\Generated\V2\Clients\App\AppClient;
use Mittwald\ApiClient\Generated\V2\Clients\Article\ArticleClient;
use Mittwald\ApiClient\Generated\V2\Clients\Backup\BackupClient;
use Mittwald\ApiClient\Generated\V2\Clients\Container\ContainerClient;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\ContractClient;
use Mittwald\ApiClient\Generated\V2\Clients\Conversation\ConversationClient;
use Mittwald\ApiClient\Generated\V2\Clients\Cronjob\CronjobClient;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CustomerClient;
use Mittwald\ApiClient\Generated\V2\Clients\Database\DatabaseClient;
use Mittwald\ApiClient\Generated\V2\Clients\Domain\DomainClient;
use Mittwald\ApiClient\Generated\V2\Clients\File\FileClient;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MailClient;
use Mittwald\ApiClient\Generated\V2\Clients\Marketplace\MarketplaceClient;
use Mittwald\ApiClient\Generated\V2\Clients\Metrics\MetricsClient;
use Mittwald\ApiClient\Generated\V2\Clients\Misc\MiscClient;
use Mittwald\ApiClient\Generated\V2\Clients\Nexus\NexusClient;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationClient;
use Mittwald\ApiClient\Generated\V2\Clients\PageInsights\PageInsightsClient;
use Mittwald\ApiClient\Generated\V2\Clients\Project\ProjectClient;
use Mittwald\ApiClient\Generated\V2\Clients\ProjectFileSystem\ProjectFileSystemClient;
use Mittwald\ApiClient\Generated\V2\Clients\Relocation\RelocationClient;
use Mittwald\ApiClient\Generated\V2\Clients\SSHSFTPUser\SSHSFTPUserClient;
use Mittwald\ApiClient\Generated\V2\Clients\Task\TaskClient;
use Mittwald\ApiClient\Generated\V2\Clients\User\UserClient;

/**
 * Auto-generated factory for mittwald mStudio v2 clients.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 */
interface Client
{
    public function project(): ProjectClient;
    public function backup(): BackupClient;
    public function sshSFTPUser(): SSHSFTPUserClient;
    public function cronjob(): CronjobClient;
    public function app(): AppClient;
    public function projectFileSystem(): ProjectFileSystemClient;
    public function contract(): ContractClient;
    public function database(): DatabaseClient;
    public function domain(): DomainClient;
    public function conversation(): ConversationClient;
    public function customer(): CustomerClient;
    public function user(): UserClient;
    public function notification(): NotificationClient;
    public function file(): FileClient;
    public function mail(): MailClient;
    public function article(): ArticleClient;
    public function container(): ContainerClient;
    public function pageInsights(): PageInsightsClient;
    public function relocation(): RelocationClient;
    public function marketplace(): MarketplaceClient;
    public function task(): TaskClient;
    public function nexus(): NexusClient;
    public function misc(): MiscClient;
    public function metrics(): MetricsClient;
}
