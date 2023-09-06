<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Backup;

use InvalidArgumentException;
use DateTime;

class ProjectBackupSchedule
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

    /**
     * @var DateTime|null
     */
    private ?DateTime $createdAt = null;

    /**
     * Description of this ProjectBackupSchedule.
     *
     * @var string|null
     */
    private ?string $description = null;

    /**
     * ID of this ProjectBackupSchedule.
     *
     * @var string
     */
    private string $id;

    /**
     * True if this ProjectBackupSchedule was created and is managed by mittwald.
     *
     * @var bool
     */
    private bool $isSystemBackup;

    /**
     * ID of the Project this ProjectBackupSchedule belongs to.
     *
     * @var string
     */
    private string $projectId;

    /**
     * Execution schedule in crontab notation.
     *
     * @var string
     */
    private string $schedule;

    /**
     * TTL of the ProjectBackupSchedule as time string.
     *
     * @var string|null
     */
    private ?string $ttl = null;

    /**
     * @var DateTime|null
     */
    private ?DateTime $updatedAt = null;

    /**
     * @param string $id
     * @param bool $isSystemBackup
     * @param string $projectId
     * @param string $schedule
     */
    public function __construct(string $id, bool $isSystemBackup, string $projectId, string $schedule)
    {
        $this->id = $id;
        $this->isSystemBackup = $isSystemBackup;
        $this->projectId = $projectId;
        $this->schedule = $schedule;
    }

    /**
     * @return DateTime|null
     */
    public function getCreatedAt(): ?DateTime
    {
        return $this->createdAt ?? null;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description ?? null;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return bool
     */
    public function getIsSystemBackup(): bool
    {
        return $this->isSystemBackup;
    }

    /**
     * @return string
     */
    public function getProjectId(): string
    {
        return $this->projectId;
    }

    /**
     * @return string
     */
    public function getSchedule(): string
    {
        return $this->schedule;
    }

    /**
     * @return string|null
     */
    public function getTtl(): ?string
    {
        return $this->ttl ?? null;
    }

    /**
     * @return DateTime|null
     */
    public function getUpdatedAt(): ?DateTime
    {
        return $this->updatedAt ?? null;
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
     * @return self
     */
    public function withoutCreatedAt(): self
    {
        $clone = clone $this;
        unset($clone->createdAt);

        return $clone;
    }

    /**
     * @param string $description
     * @return self
     */
    public function withDescription(string $description): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($description, static::$schema['properties']['description']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->description = $description;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutDescription(): self
    {
        $clone = clone $this;
        unset($clone->description);

        return $clone;
    }

    /**
     * @param string $id
     * @return self
     */
    public function withId(string $id): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($id, static::$schema['properties']['id']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->id = $id;

        return $clone;
    }

    /**
     * @param bool $isSystemBackup
     * @return self
     */
    public function withIsSystemBackup(bool $isSystemBackup): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($isSystemBackup, static::$schema['properties']['isSystemBackup']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->isSystemBackup = $isSystemBackup;

        return $clone;
    }

    /**
     * @param string $projectId
     * @return self
     */
    public function withProjectId(string $projectId): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($projectId, static::$schema['properties']['projectId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->projectId = $projectId;

        return $clone;
    }

    /**
     * @param string $schedule
     * @return self
     */
    public function withSchedule(string $schedule): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($schedule, static::$schema['properties']['schedule']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->schedule = $schedule;

        return $clone;
    }

    /**
     * @param string $ttl
     * @return self
     */
    public function withTtl(string $ttl): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($ttl, static::$schema['properties']['ttl']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->ttl = $ttl;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutTtl(): self
    {
        $clone = clone $this;
        unset($clone->ttl);

        return $clone;
    }

    /**
     * @param DateTime $updatedAt
     * @return self
     */
    public function withUpdatedAt(DateTime $updatedAt): self
    {
        $clone = clone $this;
        $clone->updatedAt = $updatedAt;

        return $clone;
    }

    /**
     * @return self
     */
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
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
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
        $validator = new \JsonSchema\Validator();
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
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
