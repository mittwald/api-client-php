<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Project;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.project.Server.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class Server
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'clusterName' => [
                'type' => 'string',
            ],
            'createdAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'customerId' => [
                'example' => '673c107f-75e1-451c-8eaa-5bf101bd2b2c',
                'type' => 'string',
            ],
            'description' => [
                'example' => 'My first Server!',
                'type' => 'string',
            ],
            'disabledReason' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.project.ServerDisableReason',
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
                'type' => 'boolean',
            ],
            'machineType' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.project.MachineType',
            ],
            'readiness' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.project.ProjectReadinessStatus',
            ],
            'shortId' => [
                'example' => 's-4e7tz3',
                'type' => 'string',
            ],
            'statisticsBaseDomain' => [
                'example' => 'pe-prod.staging.mcloud.services',
                'format' => 'hostname',
                'type' => 'string',
            ],
            'storage' => [
                'example' => '50Gi',
                'type' => 'string',
            ],
        ],
        'required' => [
            'id',
            'shortId',
            'customerId',
            'machineType',
            'storage',
            'description',
            'isReady',
            'readiness',
            'createdAt',
            'clusterName',
        ],
        'type' => 'object',
    ];

    /**
     * @var string
     */
    private string $clusterName;

    /**
     * @var DateTime
     */
    private DateTime $createdAt;

    /**
     * @var string
     */
    private string $customerId;

    /**
     * @var string
     */
    private string $description;

    /**
     * @var ServerDisableReason|null
     */
    private ?ServerDisableReason $disabledReason = null;

    /**
     * @var string
     */
    private string $id;

    /**
     * @var string|null
     */
    private ?string $imageRefId = null;

    /**
     * @var bool
     */
    private bool $isReady;

    /**
     * @var MachineType
     */
    private MachineType $machineType;

    /**
     * @var ProjectReadinessStatus
     */
    private ProjectReadinessStatus $readiness;

    /**
     * @var string
     */
    private string $shortId;

    /**
     * @var string|null
     */
    private ?string $statisticsBaseDomain = null;

    /**
     * @var string
     */
    private string $storage;

    /**
     * @param string $clusterName
     * @param DateTime $createdAt
     * @param string $customerId
     * @param string $description
     * @param string $id
     * @param bool $isReady
     * @param MachineType $machineType
     * @param ProjectReadinessStatus $readiness
     * @param string $shortId
     * @param string $storage
     */
    public function __construct(string $clusterName, DateTime $createdAt, string $customerId, string $description, string $id, bool $isReady, MachineType $machineType, ProjectReadinessStatus $readiness, string $shortId, string $storage)
    {
        $this->clusterName = $clusterName;
        $this->createdAt = $createdAt;
        $this->customerId = $customerId;
        $this->description = $description;
        $this->id = $id;
        $this->isReady = $isReady;
        $this->machineType = $machineType;
        $this->readiness = $readiness;
        $this->shortId = $shortId;
        $this->storage = $storage;
    }

    /**
     * @return string
     */
    public function getClusterName(): string
    {
        return $this->clusterName;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    /**
     * @return string
     */
    public function getCustomerId(): string
    {
        return $this->customerId;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return
     * ServerDisableReason|null
     */
    public function getDisabledReason(): ?ServerDisableReason
    {
        return $this->disabledReason ?? null;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getImageRefId(): ?string
    {
        return $this->imageRefId ?? null;
    }

    /**
     * @return bool
     */
    public function getIsReady(): bool
    {
        return $this->isReady;
    }

    /**
     * @return MachineType
     */
    public function getMachineType(): MachineType
    {
        return $this->machineType;
    }

    /**
     * @return ProjectReadinessStatus
     */
    public function getReadiness(): ProjectReadinessStatus
    {
        return $this->readiness;
    }

    /**
     * @return string
     */
    public function getShortId(): string
    {
        return $this->shortId;
    }

    /**
     * @return string|null
     */
    public function getStatisticsBaseDomain(): ?string
    {
        return $this->statisticsBaseDomain ?? null;
    }

    /**
     * @return string
     */
    public function getStorage(): string
    {
        return $this->storage;
    }

    /**
     * @param string $clusterName
     * @return self
     */
    public function withClusterName(string $clusterName): self
    {
        $validator = new Validator();
        $validator->validate($clusterName, static::$schema['properties']['clusterName']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->clusterName = $clusterName;

        return $clone;
    }

    /**
     * @param DateTime $createdAt
     * @return self
     */
    public function withCreatedAt(DateTime $createdAt): self
    {
        $clone = clone $this;
        $clone->createdAt = $createdAt;

        return $clone;
    }

    /**
     * @param string $customerId
     * @return self
     */
    public function withCustomerId(string $customerId): self
    {
        $validator = new Validator();
        $validator->validate($customerId, static::$schema['properties']['customerId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->customerId = $customerId;

        return $clone;
    }

    /**
     * @param string $description
     * @return self
     */
    public function withDescription(string $description): self
    {
        $validator = new Validator();
        $validator->validate($description, static::$schema['properties']['description']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->description = $description;

        return $clone;
    }

    /**
     * @param ServerDisableReason $disabledReason
     * @return self
     */
    public function withDisabledReason(ServerDisableReason $disabledReason): self
    {
        $clone = clone $this;
        $clone->disabledReason = $disabledReason;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutDisabledReason(): self
    {
        $clone = clone $this;
        unset($clone->disabledReason);

        return $clone;
    }

    /**
     * @param string $id
     * @return self
     */
    public function withId(string $id): self
    {
        $validator = new Validator();
        $validator->validate($id, static::$schema['properties']['id']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->id = $id;

        return $clone;
    }

    /**
     * @param string $imageRefId
     * @return self
     */
    public function withImageRefId(string $imageRefId): self
    {
        $validator = new Validator();
        $validator->validate($imageRefId, static::$schema['properties']['imageRefId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->imageRefId = $imageRefId;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutImageRefId(): self
    {
        $clone = clone $this;
        unset($clone->imageRefId);

        return $clone;
    }

    /**
     * @param bool $isReady
     * @return self
     */
    public function withIsReady(bool $isReady): self
    {
        $validator = new Validator();
        $validator->validate($isReady, static::$schema['properties']['isReady']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->isReady = $isReady;

        return $clone;
    }

    /**
     * @param MachineType $machineType
     * @return self
     */
    public function withMachineType(MachineType $machineType): self
    {
        $clone = clone $this;
        $clone->machineType = $machineType;

        return $clone;
    }

    /**
     * @param ProjectReadinessStatus $readiness
     * @return self
     */
    public function withReadiness(ProjectReadinessStatus $readiness): self
    {
        $clone = clone $this;
        $clone->readiness = $readiness;

        return $clone;
    }

    /**
     * @param string $shortId
     * @return self
     */
    public function withShortId(string $shortId): self
    {
        $validator = new Validator();
        $validator->validate($shortId, static::$schema['properties']['shortId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->shortId = $shortId;

        return $clone;
    }

    /**
     * @param string $statisticsBaseDomain
     * @return self
     */
    public function withStatisticsBaseDomain(string $statisticsBaseDomain): self
    {
        $validator = new Validator();
        $validator->validate($statisticsBaseDomain, static::$schema['properties']['statisticsBaseDomain']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->statisticsBaseDomain = $statisticsBaseDomain;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutStatisticsBaseDomain(): self
    {
        $clone = clone $this;
        unset($clone->statisticsBaseDomain);

        return $clone;
    }

    /**
     * @param string $storage
     * @return self
     */
    public function withStorage(string $storage): self
    {
        $validator = new Validator();
        $validator->validate($storage, static::$schema['properties']['storage']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->storage = $storage;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return Server Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): Server
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $clusterName = $input->{'clusterName'};
        $createdAt = new DateTime($input->{'createdAt'});
        $customerId = $input->{'customerId'};
        $description = $input->{'description'};
        $disabledReason = null;
        if (isset($input->{'disabledReason'})) {
            $disabledReason = ServerDisableReason::from($input->{'disabledReason'});
        }
        $id = $input->{'id'};
        $imageRefId = null;
        if (isset($input->{'imageRefId'})) {
            $imageRefId = $input->{'imageRefId'};
        }
        $isReady = (bool)($input->{'isReady'});
        $machineType = MachineType::buildFromInput($input->{'machineType'}, validate: $validate);
        $readiness = ProjectReadinessStatus::from($input->{'readiness'});
        $shortId = $input->{'shortId'};
        $statisticsBaseDomain = null;
        if (isset($input->{'statisticsBaseDomain'})) {
            $statisticsBaseDomain = $input->{'statisticsBaseDomain'};
        }
        $storage = $input->{'storage'};

        $obj = new self($clusterName, $createdAt, $customerId, $description, $id, $isReady, $machineType, $readiness, $shortId, $storage);
        $obj->disabledReason = $disabledReason;
        $obj->imageRefId = $imageRefId;
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
        $output['clusterName'] = $this->clusterName;
        $output['createdAt'] = ($this->createdAt)->format(DateTime::ATOM);
        $output['customerId'] = $this->customerId;
        $output['description'] = $this->description;
        if (isset($this->disabledReason)) {
            $output['disabledReason'] = $this->disabledReason->value;
        }
        $output['id'] = $this->id;
        if (isset($this->imageRefId)) {
            $output['imageRefId'] = $this->imageRefId;
        }
        $output['isReady'] = $this->isReady;
        $output['machineType'] = $this->machineType->toJson();
        $output['readiness'] = $this->readiness->value;
        $output['shortId'] = $this->shortId;
        if (isset($this->statisticsBaseDomain)) {
            $output['statisticsBaseDomain'] = $this->statisticsBaseDomain;
        }
        $output['storage'] = $this->storage;

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
        $validator = new Validator();
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        $validator->validate($input, static::$schema);

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
        $this->createdAt = clone $this->createdAt;
    }
}
