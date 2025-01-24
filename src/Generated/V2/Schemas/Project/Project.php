<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Project;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.project.Project.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class Project
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'backupStorageUsageInBytes' => [
                'format' => 'int64',
                'type' => 'integer',
            ],
            'backupStorageUsageInBytesSetAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'clusterDomain' => [
                'example' => 'project.host',
                'format' => 'hostname',
                'type' => 'string',
            ],
            'clusterID' => [
                'deprecated' => true,
                'description' => 'deprecated by property clusterId',
                'example' => 'espelkamp',
                'type' => 'string',
            ],
            'clusterId' => [
                'example' => 'espelkamp',
                'type' => 'string',
            ],
            'createdAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'customerId' => [
                'example' => 'f282f1a8-2b15-4b08-9850-6788e3b20136',
                'type' => 'string',
            ],
            'description' => [
                'example' => 'My first Project!',
                'type' => 'string',
            ],
            'directories' => [
                'additionalProperties' => [
                    'type' => 'string',
                ],
                'example' => [
                    'Home' => '/home/p-4e7tz3',
                ],
                'type' => 'object',
            ],
            'disableReason' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.project.DisableReason',
            ],
            'disabledAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'enabled' => [
                'type' => 'boolean',
            ],
            'id' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'imageRefId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'isReady' => [
                'deprecated' => true,
                'description' => 'deprecated by property status',
                'type' => 'boolean',
            ],
            'projectHostingId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'readiness' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.project.DeprecatedProjectReadinessStatus',
            ],
            'serverId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'serverShortId' => [
                'type' => 'string',
            ],
            'shortId' => [
                'example' => 's-4e7tz3',
                'type' => 'string',
            ],
            'spec' => [
                'oneOf' => [
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.project.VisitorSpec',
                    ],
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.project.HardwareSpec',
                    ],
                ],
            ],
            'statisticsBaseDomain' => [
                'example' => 'pe-prod.staging.mcloud.services',
                'format' => 'hostname',
                'type' => 'string',
            ],
            'status' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.project.ProjectStatus',
            ],
            'statusSetAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'webStorageUsageInBytes' => [
                'format' => 'int64',
                'type' => 'integer',
            ],
            'webStorageUsageInBytesSetAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
        ],
        'required' => [
            'id',
            'shortId',
            'description',
            'enabled',
            'customerId',
            'directories',
            'createdAt',
            'isReady',
            'readiness',
            'status',
            'statusSetAt',
            'webStorageUsageInBytes',
            'webStorageUsageInBytesSetAt',
            'backupStorageUsageInBytes',
            'backupStorageUsageInBytesSetAt',
        ],
        'type' => 'object',
    ];

    private int $backupStorageUsageInBytes;

    private DateTime $backupStorageUsageInBytesSetAt;

    private ?string $clusterDomain = null;

    /**
     * deprecated by property clusterId
     *
     * @deprecated
     */
    private ?string $clusterID = null;

    private ?string $clusterId = null;

    private DateTime $createdAt;

    private string $customerId;

    private string $description;

    /**
     * @var string[]
     */
    private array $directories;

    private ?DisableReason $disableReason = null;

    private ?DateTime $disabledAt = null;

    private bool $enabled;

    private string $id;

    private ?string $imageRefId = null;

    /**
     * deprecated by property status
     *
     * @deprecated
     */
    private bool $isReady;

    private ?string $projectHostingId = null;

    private DeprecatedProjectReadinessStatus $readiness;

    private ?string $serverId = null;

    private ?string $serverShortId = null;

    private string $shortId;

    private VisitorSpec|HardwareSpec|null $spec = null;

    private ?string $statisticsBaseDomain = null;

    private ProjectStatus $status;

    private DateTime $statusSetAt;

    private int $webStorageUsageInBytes;

    private DateTime $webStorageUsageInBytesSetAt;

    /**
     * @param string[] $directories
     */
    public function __construct(int $backupStorageUsageInBytes, DateTime $backupStorageUsageInBytesSetAt, DateTime $createdAt, string $customerId, string $description, array $directories, bool $enabled, string $id, bool $isReady, DeprecatedProjectReadinessStatus $readiness, string $shortId, ProjectStatus $status, DateTime $statusSetAt, int $webStorageUsageInBytes, DateTime $webStorageUsageInBytesSetAt)
    {
        $this->backupStorageUsageInBytes = $backupStorageUsageInBytes;
        $this->backupStorageUsageInBytesSetAt = $backupStorageUsageInBytesSetAt;
        $this->createdAt = $createdAt;
        $this->customerId = $customerId;
        $this->description = $description;
        $this->directories = $directories;
        $this->enabled = $enabled;
        $this->id = $id;
        $this->isReady = $isReady;
        $this->readiness = $readiness;
        $this->shortId = $shortId;
        $this->status = $status;
        $this->statusSetAt = $statusSetAt;
        $this->webStorageUsageInBytes = $webStorageUsageInBytes;
        $this->webStorageUsageInBytesSetAt = $webStorageUsageInBytesSetAt;
    }

    public function getBackupStorageUsageInBytes(): int
    {
        return $this->backupStorageUsageInBytes;
    }

    public function getBackupStorageUsageInBytesSetAt(): DateTime
    {
        return $this->backupStorageUsageInBytesSetAt;
    }

    public function getClusterDomain(): ?string
    {
        return $this->clusterDomain ?? null;
    }

    public function getClusterId(): ?string
    {
        return $this->clusterId ?? null;
    }

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    public function getCustomerId(): string
    {
        return $this->customerId;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string[]
     */
    public function getDirectories(): array
    {
        return $this->directories;
    }

    public function getDisableReason(): ?DisableReason
    {
        return $this->disableReason ?? null;
    }

    public function getDisabledAt(): ?DateTime
    {
        return $this->disabledAt ?? null;
    }

    public function getEnabled(): bool
    {
        return $this->enabled;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getImageRefId(): ?string
    {
        return $this->imageRefId ?? null;
    }

    /**
     * @deprecated
     */
    public function getIsReady(): bool
    {
        return $this->isReady;
    }

    public function getProjectHostingId(): ?string
    {
        return $this->projectHostingId ?? null;
    }

    public function getReadiness(): DeprecatedProjectReadinessStatus
    {
        return $this->readiness;
    }

    public function getServerId(): ?string
    {
        return $this->serverId ?? null;
    }

    public function getServerShortId(): ?string
    {
        return $this->serverShortId ?? null;
    }

    public function getShortId(): string
    {
        return $this->shortId;
    }

    public function getSpec(): HardwareSpec|VisitorSpec|null
    {
        return $this->spec;
    }

    public function getStatisticsBaseDomain(): ?string
    {
        return $this->statisticsBaseDomain ?? null;
    }

    public function getStatus(): ProjectStatus
    {
        return $this->status;
    }

    public function getStatusSetAt(): DateTime
    {
        return $this->statusSetAt;
    }

    public function getWebStorageUsageInBytes(): int
    {
        return $this->webStorageUsageInBytes;
    }

    public function getWebStorageUsageInBytesSetAt(): DateTime
    {
        return $this->webStorageUsageInBytesSetAt;
    }

    public function withBackupStorageUsageInBytes(int $backupStorageUsageInBytes): self
    {
        $validator = new Validator();
        $validator->validate($backupStorageUsageInBytes, self::$schema['properties']['backupStorageUsageInBytes']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->backupStorageUsageInBytes = $backupStorageUsageInBytes;

        return $clone;
    }

    public function withBackupStorageUsageInBytesSetAt(DateTime $backupStorageUsageInBytesSetAt): self
    {
        $clone = clone $this;
        $clone->backupStorageUsageInBytesSetAt = $backupStorageUsageInBytesSetAt;

        return $clone;
    }

    public function withClusterDomain(string $clusterDomain): self
    {
        $validator = new Validator();
        $validator->validate($clusterDomain, self::$schema['properties']['clusterDomain']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->clusterDomain = $clusterDomain;

        return $clone;
    }

    public function withoutClusterDomain(): self
    {
        $clone = clone $this;
        unset($clone->clusterDomain);

        return $clone;
    }

    public function withClusterId(string $clusterId): self
    {
        $validator = new Validator();
        $validator->validate($clusterId, self::$schema['properties']['clusterId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->clusterId = $clusterId;

        return $clone;
    }

    public function withoutClusterId(): self
    {
        $clone = clone $this;
        unset($clone->clusterId);

        return $clone;
    }

    public function withCreatedAt(DateTime $createdAt): self
    {
        $clone = clone $this;
        $clone->createdAt = $createdAt;

        return $clone;
    }

    public function withCustomerId(string $customerId): self
    {
        $validator = new Validator();
        $validator->validate($customerId, self::$schema['properties']['customerId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->customerId = $customerId;

        return $clone;
    }

    public function withDescription(string $description): self
    {
        $validator = new Validator();
        $validator->validate($description, self::$schema['properties']['description']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->description = $description;

        return $clone;
    }

    /**
     * @param string[] $directories
     */
    public function withDirectories(array $directories): self
    {
        $validator = new Validator();
        $validator->validate($directories, self::$schema['properties']['directories']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->directories = $directories;

        return $clone;
    }

    public function withDisableReason(DisableReason $disableReason): self
    {
        $clone = clone $this;
        $clone->disableReason = $disableReason;

        return $clone;
    }

    public function withoutDisableReason(): self
    {
        $clone = clone $this;
        unset($clone->disableReason);

        return $clone;
    }

    public function withDisabledAt(DateTime $disabledAt): self
    {
        $clone = clone $this;
        $clone->disabledAt = $disabledAt;

        return $clone;
    }

    public function withoutDisabledAt(): self
    {
        $clone = clone $this;
        unset($clone->disabledAt);

        return $clone;
    }

    public function withEnabled(bool $enabled): self
    {
        $validator = new Validator();
        $validator->validate($enabled, self::$schema['properties']['enabled']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->enabled = $enabled;

        return $clone;
    }

    public function withId(string $id): self
    {
        $validator = new Validator();
        $validator->validate($id, self::$schema['properties']['id']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->id = $id;

        return $clone;
    }

    public function withImageRefId(string $imageRefId): self
    {
        $validator = new Validator();
        $validator->validate($imageRefId, self::$schema['properties']['imageRefId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->imageRefId = $imageRefId;

        return $clone;
    }

    public function withoutImageRefId(): self
    {
        $clone = clone $this;
        unset($clone->imageRefId);

        return $clone;
    }

    /**
     * @deprecated
     */
    public function withIsReady(bool $isReady): self
    {
        $validator = new Validator();
        $validator->validate($isReady, self::$schema['properties']['isReady']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->isReady = $isReady;

        return $clone;
    }

    public function withProjectHostingId(string $projectHostingId): self
    {
        $validator = new Validator();
        $validator->validate($projectHostingId, self::$schema['properties']['projectHostingId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->projectHostingId = $projectHostingId;

        return $clone;
    }

    public function withoutProjectHostingId(): self
    {
        $clone = clone $this;
        unset($clone->projectHostingId);

        return $clone;
    }

    public function withReadiness(DeprecatedProjectReadinessStatus $readiness): self
    {
        $clone = clone $this;
        $clone->readiness = $readiness;

        return $clone;
    }

    public function withServerId(string $serverId): self
    {
        $validator = new Validator();
        $validator->validate($serverId, self::$schema['properties']['serverId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->serverId = $serverId;

        return $clone;
    }

    public function withoutServerId(): self
    {
        $clone = clone $this;
        unset($clone->serverId);

        return $clone;
    }

    public function withServerShortId(string $serverShortId): self
    {
        $validator = new Validator();
        $validator->validate($serverShortId, self::$schema['properties']['serverShortId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->serverShortId = $serverShortId;

        return $clone;
    }

    public function withoutServerShortId(): self
    {
        $clone = clone $this;
        unset($clone->serverShortId);

        return $clone;
    }

    public function withShortId(string $shortId): self
    {
        $validator = new Validator();
        $validator->validate($shortId, self::$schema['properties']['shortId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->shortId = $shortId;

        return $clone;
    }

    public function withSpec(HardwareSpec|VisitorSpec $spec): self
    {
        $clone = clone $this;
        $clone->spec = $spec;

        return $clone;
    }

    public function withoutSpec(): self
    {
        $clone = clone $this;
        unset($clone->spec);

        return $clone;
    }

    public function withStatisticsBaseDomain(string $statisticsBaseDomain): self
    {
        $validator = new Validator();
        $validator->validate($statisticsBaseDomain, self::$schema['properties']['statisticsBaseDomain']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->statisticsBaseDomain = $statisticsBaseDomain;

        return $clone;
    }

    public function withoutStatisticsBaseDomain(): self
    {
        $clone = clone $this;
        unset($clone->statisticsBaseDomain);

        return $clone;
    }

    public function withStatus(ProjectStatus $status): self
    {
        $clone = clone $this;
        $clone->status = $status;

        return $clone;
    }

    public function withStatusSetAt(DateTime $statusSetAt): self
    {
        $clone = clone $this;
        $clone->statusSetAt = $statusSetAt;

        return $clone;
    }

    public function withWebStorageUsageInBytes(int $webStorageUsageInBytes): self
    {
        $validator = new Validator();
        $validator->validate($webStorageUsageInBytes, self::$schema['properties']['webStorageUsageInBytes']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->webStorageUsageInBytes = $webStorageUsageInBytes;

        return $clone;
    }

    public function withWebStorageUsageInBytesSetAt(DateTime $webStorageUsageInBytesSetAt): self
    {
        $clone = clone $this;
        $clone->webStorageUsageInBytesSetAt = $webStorageUsageInBytesSetAt;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return Project Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): Project
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $backupStorageUsageInBytes = (int)($input->{'backupStorageUsageInBytes'});
        $backupStorageUsageInBytesSetAt = new DateTime($input->{'backupStorageUsageInBytesSetAt'});
        $clusterDomain = null;
        if (isset($input->{'clusterDomain'})) {
            $clusterDomain = $input->{'clusterDomain'};
        }
        $clusterID = null;
        if (isset($input->{'clusterID'})) {
            $clusterID = $input->{'clusterID'};
        }
        $clusterId = null;
        if (isset($input->{'clusterId'})) {
            $clusterId = $input->{'clusterId'};
        }
        $createdAt = new DateTime($input->{'createdAt'});
        $customerId = $input->{'customerId'};
        $description = $input->{'description'};
        $directories = (array)$input->{'directories'};
        $disableReason = null;
        if (isset($input->{'disableReason'})) {
            $disableReason = DisableReason::from($input->{'disableReason'});
        }
        $disabledAt = null;
        if (isset($input->{'disabledAt'})) {
            $disabledAt = new DateTime($input->{'disabledAt'});
        }
        $enabled = (bool)($input->{'enabled'});
        $id = $input->{'id'};
        $imageRefId = null;
        if (isset($input->{'imageRefId'})) {
            $imageRefId = $input->{'imageRefId'};
        }
        $isReady = (bool)($input->{'isReady'});
        $projectHostingId = null;
        if (isset($input->{'projectHostingId'})) {
            $projectHostingId = $input->{'projectHostingId'};
        }
        $readiness = DeprecatedProjectReadinessStatus::from($input->{'readiness'});
        $serverId = null;
        if (isset($input->{'serverId'})) {
            $serverId = $input->{'serverId'};
        }
        $serverShortId = null;
        if (isset($input->{'serverShortId'})) {
            $serverShortId = $input->{'serverShortId'};
        }
        $shortId = $input->{'shortId'};
        $spec = null;
        if (isset($input->{'spec'})) {
            $spec = match (true) {
                VisitorSpec::validateInput($input->{'spec'}, true) => VisitorSpec::buildFromInput($input->{'spec'}, validate: $validate),
                HardwareSpec::validateInput($input->{'spec'}, true) => HardwareSpec::buildFromInput($input->{'spec'}, validate: $validate),
                default => throw new InvalidArgumentException("could not build property 'spec' from JSON"),
            };
        }
        $statisticsBaseDomain = null;
        if (isset($input->{'statisticsBaseDomain'})) {
            $statisticsBaseDomain = $input->{'statisticsBaseDomain'};
        }
        $status = ProjectStatus::from($input->{'status'});
        $statusSetAt = new DateTime($input->{'statusSetAt'});
        $webStorageUsageInBytes = (int)($input->{'webStorageUsageInBytes'});
        $webStorageUsageInBytesSetAt = new DateTime($input->{'webStorageUsageInBytesSetAt'});

        $obj = new self($backupStorageUsageInBytes, $backupStorageUsageInBytesSetAt, $createdAt, $customerId, $description, $directories, $enabled, $id, $isReady, $readiness, $shortId, $status, $statusSetAt, $webStorageUsageInBytes, $webStorageUsageInBytesSetAt);
        $obj->clusterDomain = $clusterDomain;
        $obj->clusterID = $clusterID;
        $obj->clusterId = $clusterId;
        $obj->disableReason = $disableReason;
        $obj->disabledAt = $disabledAt;
        $obj->imageRefId = $imageRefId;
        $obj->projectHostingId = $projectHostingId;
        $obj->serverId = $serverId;
        $obj->serverShortId = $serverShortId;
        $obj->spec = $spec;
        $obj->statisticsBaseDomain = $statisticsBaseDomain;
        return $obj;
    }

    /**
     * Converts this object back to a simple array that can be JSON-serialized
     *
     * @return array Converted array
     */
    public function toJson(): array
    {
        $output = [];
        $output['backupStorageUsageInBytes'] = $this->backupStorageUsageInBytes;
        $output['backupStorageUsageInBytesSetAt'] = ($this->backupStorageUsageInBytesSetAt)->format(DateTime::ATOM);
        if (isset($this->clusterDomain)) {
            $output['clusterDomain'] = $this->clusterDomain;
        }
        if (isset($this->clusterID)) {
            $output['clusterID'] = $this->clusterID;
        }
        if (isset($this->clusterId)) {
            $output['clusterId'] = $this->clusterId;
        }
        $output['createdAt'] = ($this->createdAt)->format(DateTime::ATOM);
        $output['customerId'] = $this->customerId;
        $output['description'] = $this->description;
        $output['directories'] = $this->directories;
        if (isset($this->disableReason)) {
            $output['disableReason'] = $this->disableReason->value;
        }
        if (isset($this->disabledAt)) {
            $output['disabledAt'] = ($this->disabledAt)->format(DateTime::ATOM);
        }
        $output['enabled'] = $this->enabled;
        $output['id'] = $this->id;
        if (isset($this->imageRefId)) {
            $output['imageRefId'] = $this->imageRefId;
        }
        $output['isReady'] = $this->isReady;
        if (isset($this->projectHostingId)) {
            $output['projectHostingId'] = $this->projectHostingId;
        }
        $output['readiness'] = $this->readiness->value;
        if (isset($this->serverId)) {
            $output['serverId'] = $this->serverId;
        }
        if (isset($this->serverShortId)) {
            $output['serverShortId'] = $this->serverShortId;
        }
        $output['shortId'] = $this->shortId;
        if (isset($this->spec)) {
            $output['spec'] = match (true) {
                ($this->spec) instanceof VisitorSpec, ($this->spec) instanceof HardwareSpec => $this->spec->toJson(),
            };
        }
        if (isset($this->statisticsBaseDomain)) {
            $output['statisticsBaseDomain'] = $this->statisticsBaseDomain;
        }
        $output['status'] = $this->status->value;
        $output['statusSetAt'] = ($this->statusSetAt)->format(DateTime::ATOM);
        $output['webStorageUsageInBytes'] = $this->webStorageUsageInBytes;
        $output['webStorageUsageInBytesSetAt'] = ($this->webStorageUsageInBytesSetAt)->format(DateTime::ATOM);

        return $output;
    }

    /**
     * Validates an input array
     *
     * @param array|object $input Input data
     * @param bool $return Return instead of throwing errors
     * @return bool Validation result
     * @throws InvalidArgumentException
     */
    public static function validateInput(array|object $input, bool $return = false): bool
    {
        $validator = new \Mittwald\ApiClient\Validator\Validator();
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        $validator->validate($input, self::$schema);

        if (!$validator->isValid() && !$return) {
            $errors = array_map(function (array $e): string {
                return $e["property"] . ": " . $e["message"];
            }, $validator->getErrors());
            throw new InvalidArgumentException(join(", ", $errors));
        }

        return $validator->isValid();
    }

    public function __clone()
    {
        $this->backupStorageUsageInBytesSetAt = clone $this->backupStorageUsageInBytesSetAt;
        $this->createdAt = clone $this->createdAt;
        if (isset($this->disabledAt)) {
            $this->disabledAt = clone $this->disabledAt;
        }
        if (isset($this->spec)) {
            $this->spec = match (true) {
                ($this->spec) instanceof VisitorSpec, ($this->spec) instanceof HardwareSpec => $this->spec,
            };
        }
        $this->statusSetAt = clone $this->statusSetAt;
        $this->webStorageUsageInBytesSetAt = clone $this->webStorageUsageInBytesSetAt;
    }
}
