<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Project;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;

class Project
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'clusterDomain' => [
                'example' => 'project.host',
                'format' => 'hostname',
                'type' => 'string',
            ],
            'clusterID' => [
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
                'description' => 'deprecated',
                'type' => 'boolean',
            ],
            'projectHostingId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'readiness' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.project.ProjectReadinessStatus',
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
        ],
        'type' => 'object',
    ];

    /**
     * @var string|null
     */
    private ?string $clusterDomain = null;

    /**
     * @var string|null
     */
    private ?string $clusterID = null;

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
     * @var string[]
     */
    private array $directories;

    /**
     * @var DisableReason|null
     */
    private ?DisableReason $disableReason = null;

    /**
     * @var bool
     */
    private bool $enabled;

    /**
     * @var string
     */
    private string $id;

    /**
     * @var string|null
     */
    private ?string $imageRefId = null;

    /**
     * deprecated
     *
     * @var bool
     */
    private bool $isReady;

    /**
     * @var string|null
     */
    private ?string $projectHostingId = null;

    /**
     * @var ProjectReadinessStatus
     */
    private ProjectReadinessStatus $readiness;

    /**
     * @var string|null
     */
    private ?string $serverId = null;

    /**
     * @var string|null
     */
    private ?string $serverShortId = null;

    /**
     * @var string
     */
    private string $shortId;

    /**
     * @var VisitorSpec|HardwareSpec|null
     */
    private VisitorSpec|HardwareSpec|null $spec = null;

    /**
     * @param DateTime $createdAt
     * @param string $customerId
     * @param string $description
     * @param string[] $directories
     * @param bool $enabled
     * @param string $id
     * @param bool $isReady
     * @param ProjectReadinessStatus $readiness
     * @param string $shortId
     */
    public function __construct(DateTime $createdAt, string $customerId, string $description, array $directories, bool $enabled, string $id, bool $isReady, ProjectReadinessStatus $readiness, string $shortId)
    {
        $this->createdAt = $createdAt;
        $this->customerId = $customerId;
        $this->description = $description;
        $this->directories = $directories;
        $this->enabled = $enabled;
        $this->id = $id;
        $this->isReady = $isReady;
        $this->readiness = $readiness;
        $this->shortId = $shortId;
    }

    /**
     * @return string|null
     */
    public function getClusterDomain(): ?string
    {
        return $this->clusterDomain ?? null;
    }

    /**
     * @return string|null
     */
    public function getClusterID(): ?string
    {
        return $this->clusterID ?? null;
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
     * @return string[]
     */
    public function getDirectories(): array
    {
        return $this->directories;
    }

    /**
     * @return DisableReason|null
     */
    public function getDisableReason(): ?DisableReason
    {
        return $this->disableReason ?? null;
    }

    /**
     * @return bool
     */
    public function getEnabled(): bool
    {
        return $this->enabled;
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
     * @return string|null
     */
    public function getProjectHostingId(): ?string
    {
        return $this->projectHostingId ?? null;
    }

    /**
     * @return ProjectReadinessStatus
     */
    public function getReadiness(): ProjectReadinessStatus
    {
        return $this->readiness;
    }

    /**
     * @return string|null
     */
    public function getServerId(): ?string
    {
        return $this->serverId ?? null;
    }

    /**
     * @return string|null
     */
    public function getServerShortId(): ?string
    {
        return $this->serverShortId ?? null;
    }

    /**
     * @return string
     */
    public function getShortId(): string
    {
        return $this->shortId;
    }

    /**
     * @return
     * VisitorSpec|HardwareSpec|null
     */
    public function getSpec(): HardwareSpec|VisitorSpec|null
    {
        return $this->spec;
    }

    /**
     * @param string $clusterDomain
     * @return self
     */
    public function withClusterDomain(string $clusterDomain): self
    {
        $validator = new Validator();
        $validator->validate($clusterDomain, static::$schema['properties']['clusterDomain']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->clusterDomain = $clusterDomain;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutClusterDomain(): self
    {
        $clone = clone $this;
        unset($clone->clusterDomain);

        return $clone;
    }

    /**
     * @param string $clusterID
     * @return self
     */
    public function withClusterID(string $clusterID): self
    {
        $validator = new Validator();
        $validator->validate($clusterID, static::$schema['properties']['clusterID']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->clusterID = $clusterID;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutClusterID(): self
    {
        $clone = clone $this;
        unset($clone->clusterID);

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
     * @param string[] $directories
     * @return self
     */
    public function withDirectories(array $directories): self
    {
        $validator = new Validator();
        $validator->validate($directories, static::$schema['properties']['directories']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->directories = $directories;

        return $clone;
    }

    /**
     * @param DisableReason $disableReason
     * @return self
     */
    public function withDisableReason(DisableReason $disableReason): self
    {
        $clone = clone $this;
        $clone->disableReason = $disableReason;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutDisableReason(): self
    {
        $clone = clone $this;
        unset($clone->disableReason);

        return $clone;
    }

    /**
     * @param bool $enabled
     * @return self
     */
    public function withEnabled(bool $enabled): self
    {
        $validator = new Validator();
        $validator->validate($enabled, static::$schema['properties']['enabled']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->enabled = $enabled;

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
     * @param string $projectHostingId
     * @return self
     */
    public function withProjectHostingId(string $projectHostingId): self
    {
        $validator = new Validator();
        $validator->validate($projectHostingId, static::$schema['properties']['projectHostingId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->projectHostingId = $projectHostingId;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutProjectHostingId(): self
    {
        $clone = clone $this;
        unset($clone->projectHostingId);

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
     * @param string $serverId
     * @return self
     */
    public function withServerId(string $serverId): self
    {
        $validator = new Validator();
        $validator->validate($serverId, static::$schema['properties']['serverId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->serverId = $serverId;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutServerId(): self
    {
        $clone = clone $this;
        unset($clone->serverId);

        return $clone;
    }

    /**
     * @param string $serverShortId
     * @return self
     */
    public function withServerShortId(string $serverShortId): self
    {
        $validator = new Validator();
        $validator->validate($serverShortId, static::$schema['properties']['serverShortId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->serverShortId = $serverShortId;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutServerShortId(): self
    {
        $clone = clone $this;
        unset($clone->serverShortId);

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
     * @param VisitorSpec|HardwareSpec $spec
     * @return self
     */
    public function withSpec(HardwareSpec|VisitorSpec $spec): self
    {
        $clone = clone $this;
        $clone->spec = $spec;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutSpec(): self
    {
        $clone = clone $this;
        unset($clone->spec);

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

        $clusterDomain = null;
        if (isset($input->{'clusterDomain'})) {
            $clusterDomain = $input->{'clusterDomain'};
        }
        $clusterID = null;
        if (isset($input->{'clusterID'})) {
            $clusterID = $input->{'clusterID'};
        }
        $createdAt = new DateTime($input->{'createdAt'});
        $customerId = $input->{'customerId'};
        $description = $input->{'description'};
        $directories = $input->{'directories'};
        $disableReason = null;
        if (isset($input->{'disableReason'})) {
            $disableReason = DisableReason::from($input->{'disableReason'});
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
        $readiness = ProjectReadinessStatus::from($input->{'readiness'});
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
            };
        }

        $obj = new self($createdAt, $customerId, $description, $directories, $enabled, $id, $isReady, $readiness, $shortId);
        $obj->clusterDomain = $clusterDomain;
        $obj->clusterID = $clusterID;
        $obj->disableReason = $disableReason;
        $obj->imageRefId = $imageRefId;
        $obj->projectHostingId = $projectHostingId;
        $obj->serverId = $serverId;
        $obj->serverShortId = $serverShortId;
        $obj->spec = $spec;
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
        if (isset($this->clusterDomain)) {
            $output['clusterDomain'] = $this->clusterDomain;
        }
        if (isset($this->clusterID)) {
            $output['clusterID'] = $this->clusterID;
        }
        $output['createdAt'] = ($this->createdAt)->format(DateTime::ATOM);
        $output['customerId'] = $this->customerId;
        $output['description'] = $this->description;
        $output['directories'] = $this->directories;
        if (isset($this->disableReason)) {
            $output['disableReason'] = $this->disableReason->value;
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
        if (isset($this->spec)) {
            $this->spec = match (true) {
                ($this->spec) instanceof VisitorSpec, ($this->spec) instanceof HardwareSpec => $this->spec,
            };
        }
    }
}
