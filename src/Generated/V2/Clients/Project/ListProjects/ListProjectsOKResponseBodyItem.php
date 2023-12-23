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
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
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
        ],
        'type' => 'object',
    ];

    /**
     * @var DateTime
     */
    private DateTime $createdAt;

    /**
     * @var string
     */
    private string $customerId;

    /**
     * @var ListProjectsOKResponseBodyItemCustomerMeta
     */
    private ListProjectsOKResponseBodyItemCustomerMeta $customerMeta;

    /**
     * @var string
     */
    private string $description;

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
     * @var DeprecatedProjectReadinessStatus
     */
    private DeprecatedProjectReadinessStatus $readiness;

    /**
     * @var string|null
     */
    private ?string $serverId = null;

    /**
     * @var string
     */
    private string $shortId;

    /**
     * @var ProjectStatus
     */
    private ProjectStatus $status;

    /**
     * @param DateTime $createdAt
     * @param string $customerId
     * @param ListProjectsOKResponseBodyItemCustomerMeta $customerMeta
     * @param string $description
     * @param bool $enabled
     * @param string $id
     * @param bool $isReady
     * @param DeprecatedProjectReadinessStatus $readiness
     * @param string $shortId
     * @param ProjectStatus $status
     */
    public function __construct(DateTime $createdAt, string $customerId, ListProjectsOKResponseBodyItemCustomerMeta $customerMeta, string $description, bool $enabled, string $id, bool $isReady, DeprecatedProjectReadinessStatus $readiness, string $shortId, ProjectStatus $status)
    {
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
     * @return ListProjectsOKResponseBodyItemCustomerMeta
     */
    public function getCustomerMeta(): ListProjectsOKResponseBodyItemCustomerMeta
    {
        return $this->customerMeta;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
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
     * @return
     * \Mittwald\ApiClient\Generated\V2\Schemas\Project\DeprecatedProjectReadinessStatus
     */
    public function getReadiness(): DeprecatedProjectReadinessStatus
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
     * @return string
     */
    public function getShortId(): string
    {
        return $this->shortId;
    }

    /**
     * @return ProjectStatus
     */
    public function getStatus(): ProjectStatus
    {
        return $this->status;
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
     * @param ListProjectsOKResponseBodyItemCustomerMeta $customerMeta
     * @return self
     */
    public function withCustomerMeta(ListProjectsOKResponseBodyItemCustomerMeta $customerMeta): self
    {
        $clone = clone $this;
        $clone->customerMeta = $customerMeta;

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
     * @param DeprecatedProjectReadinessStatus $readiness
     * @return self
     */
    public function withReadiness(DeprecatedProjectReadinessStatus $readiness): self
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
     * @param ProjectStatus $status
     * @return self
     */
    public function withStatus(ProjectStatus $status): self
    {
        $clone = clone $this;
        $clone->status = $status;

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

        $createdAt = new DateTime($input->{'createdAt'});
        $customerId = $input->{'customerId'};
        $customerMeta = ListProjectsOKResponseBodyItemCustomerMeta::buildFromInput($input->{'customerMeta'}, validate: $validate);
        $description = $input->{'description'};
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
        $readiness = DeprecatedProjectReadinessStatus::from($input->{'readiness'});
        $serverId = null;
        if (isset($input->{'serverId'})) {
            $serverId = $input->{'serverId'};
        }
        $shortId = $input->{'shortId'};
        $status = ProjectStatus::from($input->{'status'});

        $obj = new self($createdAt, $customerId, $customerMeta, $description, $enabled, $id, $isReady, $readiness, $shortId, $status);
        $obj->disableReason = $disableReason;
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
        $output['createdAt'] = ($this->createdAt)->format(DateTime::ATOM);
        $output['customerId'] = $this->customerId;
        $output['customerMeta'] = ($this->customerMeta)->toJson();
        $output['description'] = $this->description;
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
        $output['shortId'] = $this->shortId;
        $output['status'] = $this->status->value;

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
        $this->customerMeta = clone $this->customerMeta;
    }
}
