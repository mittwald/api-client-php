<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Backup;

class ProjectBackup
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
            'deletable' => [
                'type' => 'boolean',
            ],
            'description' => [
                'example' => 'I\'m a ProjectBackup',
                'type' => 'string',
            ],
            'expiresAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'export' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.backup.ProjectBackupExport',
            ],
            'id' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'parentId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'projectId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'status' => [
                'example' => 'Completed',
                'type' => 'string',
            ],
        ],
        'required' => [
            'id',
            'projectId',
            'status',
            'deletable',
        ],
        'type' => 'object',
    ];

    /**
     * @var \DateTime|null
     */
    private ?\DateTime $createdAt = null;

    /**
     * @var bool
     */
    private bool $deletable;

    /**
     * @var string|null
     */
    private ?string $description = null;

    /**
     * @var \DateTime|null
     */
    private ?\DateTime $expiresAt = null;

    /**
     * @var ProjectBackupExport|null
     */
    private ?ProjectBackupExport $export = null;

    /**
     * @var string
     */
    private string $id;

    /**
     * @var string|null
     */
    private ?string $parentId = null;

    /**
     * @var string
     */
    private string $projectId;

    /**
     * @var string
     */
    private string $status;

    /**
     * @param bool $deletable
     * @param string $id
     * @param string $projectId
     * @param string $status
     */
    public function __construct(bool $deletable, string $id, string $projectId, string $status)
    {
        $this->deletable = $deletable;
        $this->id = $id;
        $this->projectId = $projectId;
        $this->status = $status;
    }

    /**
     * @return \DateTime|null
     */
    public function getCreatedAt() : ?\DateTime
    {
        return $this->createdAt ?? null;
    }

    /**
     * @return bool
     */
    public function getDeletable() : bool
    {
        return $this->deletable;
    }

    /**
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description ?? null;
    }

    /**
     * @return \DateTime|null
     */
    public function getExpiresAt() : ?\DateTime
    {
        return $this->expiresAt ?? null;
    }

    /**
     * @return ProjectBackupExport|null
     */
    public function getExport() : ?ProjectBackupExport
    {
        return $this->export ?? null;
    }

    /**
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getParentId() : ?string
    {
        return $this->parentId ?? null;
    }

    /**
     * @return string
     */
    public function getProjectId() : string
    {
        return $this->projectId;
    }

    /**
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }

    /**
     * @param \DateTime $createdAt
     * @return self
     */
    public function withCreatedAt(\DateTime $createdAt) : self
    {
        $clone = clone $this;
        $clone->createdAt = $createdAt;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutCreatedAt() : self
    {
        $clone = clone $this;
        unset($clone->createdAt);

        return $clone;
    }

    /**
     * @param bool $deletable
     * @return self
     */
    public function withDeletable(bool $deletable) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($deletable, static::$schema['properties']['deletable']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->deletable = $deletable;

        return $clone;
    }

    /**
     * @param string $description
     * @return self
     */
    public function withDescription(string $description) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($description, static::$schema['properties']['description']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->description = $description;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutDescription() : self
    {
        $clone = clone $this;
        unset($clone->description);

        return $clone;
    }

    /**
     * @param \DateTime $expiresAt
     * @return self
     */
    public function withExpiresAt(\DateTime $expiresAt) : self
    {
        $clone = clone $this;
        $clone->expiresAt = $expiresAt;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutExpiresAt() : self
    {
        $clone = clone $this;
        unset($clone->expiresAt);

        return $clone;
    }

    /**
     * @param ProjectBackupExport $export
     * @return self
     */
    public function withExport(ProjectBackupExport $export) : self
    {
        $clone = clone $this;
        $clone->export = $export;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutExport() : self
    {
        $clone = clone $this;
        unset($clone->export);

        return $clone;
    }

    /**
     * @param string $id
     * @return self
     */
    public function withId(string $id) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($id, static::$schema['properties']['id']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->id = $id;

        return $clone;
    }

    /**
     * @param string $parentId
     * @return self
     */
    public function withParentId(string $parentId) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($parentId, static::$schema['properties']['parentId']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->parentId = $parentId;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutParentId() : self
    {
        $clone = clone $this;
        unset($clone->parentId);

        return $clone;
    }

    /**
     * @param string $projectId
     * @return self
     */
    public function withProjectId(string $projectId) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($projectId, static::$schema['properties']['projectId']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->projectId = $projectId;

        return $clone;
    }

    /**
     * @param string $status
     * @return self
     */
    public function withStatus(string $status) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($status, static::$schema['properties']['status']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->status = $status;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ProjectBackup Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : ProjectBackup
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $createdAt = null;
        if (isset($input->{'createdAt'})) {
            $createdAt = new \DateTime($input->{'createdAt'});
        }
        $deletable = (bool)($input->{'deletable'});
        $description = null;
        if (isset($input->{'description'})) {
            $description = $input->{'description'};
        }
        $expiresAt = null;
        if (isset($input->{'expiresAt'})) {
            $expiresAt = new \DateTime($input->{'expiresAt'});
        }
        $export = null;
        if (isset($input->{'export'})) {
            $export = ProjectBackupExport::buildFromInput($input->{'export'}, validate: $validate);
        }
        $id = $input->{'id'};
        $parentId = null;
        if (isset($input->{'parentId'})) {
            $parentId = $input->{'parentId'};
        }
        $projectId = $input->{'projectId'};
        $status = $input->{'status'};

        $obj = new self($deletable, $id, $projectId, $status);
        $obj->createdAt = $createdAt;
        $obj->description = $description;
        $obj->expiresAt = $expiresAt;
        $obj->export = $export;
        $obj->parentId = $parentId;
        return $obj;
    }

    /**
     * Converts this object back to a simple array that can be JSON-serialized
     *
     * @return array Converted array
     */
    public function toJson() : array
    {
        $output = [];
        if (isset($this->createdAt)) {
            $output['createdAt'] = ($this->createdAt)->format(\DateTime::ATOM);
        }
        $output['deletable'] = $this->deletable;
        if (isset($this->description)) {
            $output['description'] = $this->description;
        }
        if (isset($this->expiresAt)) {
            $output['expiresAt'] = ($this->expiresAt)->format(\DateTime::ATOM);
        }
        if (isset($this->export)) {
            $output['export'] = $this->export->toJson();
        }
        $output['id'] = $this->id;
        if (isset($this->parentId)) {
            $output['parentId'] = $this->parentId;
        }
        $output['projectId'] = $this->projectId;
        $output['status'] = $this->status;

        return $output;
    }

    /**
     * Validates an input array
     *
     * @param array|object $input Input data
     * @param bool $return Return instead of throwing errors
     * @return bool Validation result
     * @throws \InvalidArgumentException
     */
    public static function validateInput(array|object $input, bool $return = false) : bool
    {
        $validator = new \JsonSchema\Validator();
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        $validator->validate($input, static::$schema);

        if (!$validator->isValid() && !$return) {
            $errors = array_map(function(array $e): string {
                return $e["property"] . ": " . $e["message"];
            }, $validator->getErrors());
            throw new \InvalidArgumentException(join(", ", $errors));
        }

        return $validator->isValid();
    }

    public function __clone()
    {
        if (isset($this->createdAt)) {
            $this->createdAt = clone $this->createdAt;
        }
        if (isset($this->expiresAt)) {
            $this->expiresAt = clone $this->expiresAt;
        }
    }
}

