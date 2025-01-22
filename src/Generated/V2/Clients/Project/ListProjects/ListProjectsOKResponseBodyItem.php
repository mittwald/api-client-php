<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Project\ListProjects;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Project\DeprecatedProjectReadinessStatus;
use Mittwald\ApiClient\Generated\V2\Schemas\Project\DisableReason;
use Mittwald\ApiClient\Generated\V2\Schemas\Project\ProjectStatus;

class ListProjectsOKResponseBodyItem
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'backupStorageUsageInBytes' => [
                'type' => 'integer',
            ],
            'backupStorageUsageInBytesSetAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'createdAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'customerId' => [
                'type' => 'string',
            ],
            'customerMeta' => [
                'properties' => [
                    'id' => [
                        'type' => 'string',
                    ],
                ],
                'required' => [
                    'id',
                ],
                'type' => 'object',
            ],
            'description' => [
                'type' => 'string',
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
                'type' => 'string',
            ],
            'imageRefId' => [
                'type' => 'string',
            ],
            'isReady' => [
                'deprecated' => true,
                'description' => 'deprecated',
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
                'type' => 'string',
            ],
            'shortId' => [
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
            'customerMeta',
            'customerId',
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

    private DateTime $createdAt;

    private string $customerId;

    private ListProjectsOKResponseBodyItemCustomerMeta $customerMeta;

    private string $description;

    private ?DisableReason $disableReason = null;

    private ?DateTime $disabledAt = null;

    private bool $enabled;

    private string $id;

    private ?string $imageRefId = null;

    /**
     * deprecated
     *
     * @deprecated
     */
    private bool $isReady;

    private ?string $projectHostingId = null;

    private DeprecatedProjectReadinessStatus $readiness;

    private ?string $serverId = null;

    private string $shortId;

    private ProjectStatus $status;

    private DateTime $statusSetAt;

    private int $webStorageUsageInBytes;

    private DateTime $webStorageUsageInBytesSetAt;

    public function __construct(int $backupStorageUsageInBytes, DateTime $backupStorageUsageInBytesSetAt, DateTime $createdAt, string $customerId, ListProjectsOKResponseBodyItemCustomerMeta $customerMeta, string $description, bool $enabled, string $id, bool $isReady, DeprecatedProjectReadinessStatus $readiness, string $shortId, ProjectStatus $status, DateTime $statusSetAt, int $webStorageUsageInBytes, DateTime $webStorageUsageInBytesSetAt)
    {
        $this->backupStorageUsageInBytes = $backupStorageUsageInBytes;
        $this->backupStorageUsageInBytesSetAt = $backupStorageUsageInBytesSetAt;
        $this->createdAt = $createdAt;
        $this->customerId = $customerId;
        $this->customerMeta = $customerMeta;
        $this->description = $description;
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

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    public function getCustomerId(): string
    {
        return $this->customerId;
    }

    public function getCustomerMeta(): ListProjectsOKResponseBodyItemCustomerMeta
    {
        return $this->customerMeta;
    }

    public function getDescription(): string
    {
        return $this->description;
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

    public function getShortId(): string
    {
        return $this->shortId;
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

    public function withCustomerMeta(ListProjectsOKResponseBodyItemCustomerMeta $customerMeta): self
    {
        $clone = clone $this;
        $clone->customerMeta = $customerMeta;

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
     * @return ListProjectsOKResponseBodyItem Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ListProjectsOKResponseBodyItem
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $backupStorageUsageInBytes = (int)($input->{'backupStorageUsageInBytes'});
        $backupStorageUsageInBytesSetAt = new DateTime($input->{'backupStorageUsageInBytesSetAt'});
        $createdAt = new DateTime($input->{'createdAt'});
        $customerId = $input->{'customerId'};
        $customerMeta = ListProjectsOKResponseBodyItemCustomerMeta::buildFromInput($input->{'customerMeta'}, validate: $validate);
        $description = $input->{'description'};
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
        $shortId = $input->{'shortId'};
        $status = ProjectStatus::from($input->{'status'});
        $statusSetAt = new DateTime($input->{'statusSetAt'});
        $webStorageUsageInBytes = (int)($input->{'webStorageUsageInBytes'});
        $webStorageUsageInBytesSetAt = new DateTime($input->{'webStorageUsageInBytesSetAt'});

        $obj = new self($backupStorageUsageInBytes, $backupStorageUsageInBytesSetAt, $createdAt, $customerId, $customerMeta, $description, $enabled, $id, $isReady, $readiness, $shortId, $status, $statusSetAt, $webStorageUsageInBytes, $webStorageUsageInBytesSetAt);
        $obj->disableReason = $disableReason;
        $obj->disabledAt = $disabledAt;
        $obj->imageRefId = $imageRefId;
        $obj->projectHostingId = $projectHostingId;
        $obj->serverId = $serverId;
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
        $output['createdAt'] = ($this->createdAt)->format(DateTime::ATOM);
        $output['customerId'] = $this->customerId;
        $output['customerMeta'] = ($this->customerMeta)->toJson();
        $output['description'] = $this->description;
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
        $output['shortId'] = $this->shortId;
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
        $this->customerMeta = clone $this->customerMeta;
        if (isset($this->disabledAt)) {
            $this->disabledAt = clone $this->disabledAt;
        }
        $this->statusSetAt = clone $this->statusSetAt;
        $this->webStorageUsageInBytesSetAt = clone $this->webStorageUsageInBytesSetAt;
    }
}
