<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Backup;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.backup.ProjectBackupSchedule.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class ProjectBackupSchedule
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'createdAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'description' => [
                'description' => 'Description of this ProjectBackupSchedule.',
                'example' => 'I\'m a ProjectBackupSchedule',
                'type' => 'string',
            ],
            'id' => [
                'description' => 'ID of this ProjectBackupSchedule.',
                'format' => 'uuid',
                'type' => 'string',
            ],
            'isSystemBackup' => [
                'description' => 'True if this ProjectBackupSchedule was created and is managed by mittwald.',
                'type' => 'boolean',
            ],
            'projectId' => [
                'description' => 'ID of the Project this ProjectBackupSchedule belongs to.',
                'format' => 'uuid',
                'type' => 'string',
            ],
            'schedule' => [
                'description' => 'Execution schedule in crontab notation.',
                'example' => '5 4 * * *',
                'type' => 'string',
            ],
            'ttl' => [
                'description' => 'TTL of the ProjectBackupSchedule as time string.',
                'example' => '7d',
                'type' => 'string',
            ],
            'updatedAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
        ],
        'required' => [
            'id',
            'projectId',
            'schedule',
            'isSystemBackup',
        ],
        'type' => 'object',
    ];

    private ?DateTime $createdAt = null;

    /**
     * Description of this ProjectBackupSchedule.
     */
    private ?string $description = null;

    /**
     * ID of this ProjectBackupSchedule.
     */
    private string $id;

    /**
     * True if this ProjectBackupSchedule was created and is managed by mittwald.
     */
    private bool $isSystemBackup;

    /**
     * ID of the Project this ProjectBackupSchedule belongs to.
     */
    private string $projectId;

    /**
     * Execution schedule in crontab notation.
     */
    private string $schedule;

    /**
     * TTL of the ProjectBackupSchedule as time string.
     */
    private ?string $ttl = null;

    private ?DateTime $updatedAt = null;

    public function __construct(string $id, bool $isSystemBackup, string $projectId, string $schedule)
    {
        $this->id = $id;
        $this->isSystemBackup = $isSystemBackup;
        $this->projectId = $projectId;
        $this->schedule = $schedule;
    }

    public function getCreatedAt(): ?DateTime
    {
        return $this->createdAt ?? null;
    }

    public function getDescription(): ?string
    {
        return $this->description ?? null;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getIsSystemBackup(): bool
    {
        return $this->isSystemBackup;
    }

    public function getProjectId(): string
    {
        return $this->projectId;
    }

    public function getSchedule(): string
    {
        return $this->schedule;
    }

    public function getTtl(): ?string
    {
        return $this->ttl ?? null;
    }

    public function getUpdatedAt(): ?DateTime
    {
        return $this->updatedAt ?? null;
    }

    public function withCreatedAt(DateTime $createdAt): self
    {
        $clone = clone $this;
        $clone->createdAt = $createdAt;

        return $clone;
    }

    public function withoutCreatedAt(): self
    {
        $clone = clone $this;
        unset($clone->createdAt);

        return $clone;
    }

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

    public function withoutDescription(): self
    {
        $clone = clone $this;
        unset($clone->description);

        return $clone;
    }

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

    public function withIsSystemBackup(bool $isSystemBackup): self
    {
        $validator = new Validator();
        $validator->validate($isSystemBackup, static::$schema['properties']['isSystemBackup']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->isSystemBackup = $isSystemBackup;

        return $clone;
    }

    public function withProjectId(string $projectId): self
    {
        $validator = new Validator();
        $validator->validate($projectId, static::$schema['properties']['projectId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->projectId = $projectId;

        return $clone;
    }

    public function withSchedule(string $schedule): self
    {
        $validator = new Validator();
        $validator->validate($schedule, static::$schema['properties']['schedule']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->schedule = $schedule;

        return $clone;
    }

    public function withTtl(string $ttl): self
    {
        $validator = new Validator();
        $validator->validate($ttl, static::$schema['properties']['ttl']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->ttl = $ttl;

        return $clone;
    }

    public function withoutTtl(): self
    {
        $clone = clone $this;
        unset($clone->ttl);

        return $clone;
    }

    public function withUpdatedAt(DateTime $updatedAt): self
    {
        $clone = clone $this;
        $clone->updatedAt = $updatedAt;

        return $clone;
    }

    public function withoutUpdatedAt(): self
    {
        $clone = clone $this;
        unset($clone->updatedAt);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ProjectBackupSchedule Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ProjectBackupSchedule
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $createdAt = null;
        if (isset($input->{'createdAt'})) {
            $createdAt = new DateTime($input->{'createdAt'});
        }
        $description = null;
        if (isset($input->{'description'})) {
            $description = $input->{'description'};
        }
        $id = $input->{'id'};
        $isSystemBackup = (bool)($input->{'isSystemBackup'});
        $projectId = $input->{'projectId'};
        $schedule = $input->{'schedule'};
        $ttl = null;
        if (isset($input->{'ttl'})) {
            $ttl = $input->{'ttl'};
        }
        $updatedAt = null;
        if (isset($input->{'updatedAt'})) {
            $updatedAt = new DateTime($input->{'updatedAt'});
        }

        $obj = new self($id, $isSystemBackup, $projectId, $schedule);
        $obj->createdAt = $createdAt;
        $obj->description = $description;
        $obj->ttl = $ttl;
        $obj->updatedAt = $updatedAt;
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
        if (isset($this->createdAt)) {
            $output['createdAt'] = ($this->createdAt)->format(DateTime::ATOM);
        }
        if (isset($this->description)) {
            $output['description'] = $this->description;
        }
        $output['id'] = $this->id;
        $output['isSystemBackup'] = $this->isSystemBackup;
        $output['projectId'] = $this->projectId;
        $output['schedule'] = $this->schedule;
        if (isset($this->ttl)) {
            $output['ttl'] = $this->ttl;
        }
        if (isset($this->updatedAt)) {
            $output['updatedAt'] = ($this->updatedAt)->format(DateTime::ATOM);
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
        if (isset($this->createdAt)) {
            $this->createdAt = clone $this->createdAt;
        }
        if (isset($this->updatedAt)) {
            $this->updatedAt = clone $this->updatedAt;
        }
    }
}
