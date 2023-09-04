<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Backup\UpdateProjectBackupSchedule;

class UpdateProjectBackupScheduleRequestBody
{
    public const method = 'patch';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'description' => [
                'description' => 'Description of the ProjectBackupSchedule. Note that the description of isSystemBackup true items cannot be changed.',
                'example' => 'I\'m a ProjectBackupSchedule',
                'type' => 'string',
            ],
            'schedule' => [
                'description' => 'Execution schedule in crontab notation. Note that the schedule of isSystemBackup true items must be daily once.',
                'example' => '5 4 * * *',
                'type' => 'string',
            ],
            'ttl' => [
                'description' => 'TTL of the ProjectBackupSchedule as time string.',
                'example' => '7d',
                'type' => 'string',
            ],
        ],
        'type' => 'object',
    ];

    /**
     * Description of the ProjectBackupSchedule. Note that the description of isSystemBackup true items cannot be changed.
     *
     * @var string|null
     */
    private ?string $description = null;

    /**
     * Execution schedule in crontab notation. Note that the schedule of isSystemBackup true items must be daily once.
     *
     * @var string|null
     */
    private ?string $schedule = null;

    /**
     * TTL of the ProjectBackupSchedule as time string.
     *
     * @var string|null
     */
    private ?string $ttl = null;

    private array $headers = [
        
    ];

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description ?? null;
    }

    /**
     * @return string|null
     */
    public function getSchedule() : ?string
    {
        return $this->schedule ?? null;
    }

    /**
     * @return string|null
     */
    public function getTtl() : ?string
    {
        return $this->ttl ?? null;
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
     * @param string $schedule
     * @return self
     */
    public function withSchedule(string $schedule) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($schedule, static::$schema['properties']['schedule']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->schedule = $schedule;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutSchedule() : self
    {
        $clone = clone $this;
        unset($clone->schedule);

        return $clone;
    }

    /**
     * @param string $ttl
     * @return self
     */
    public function withTtl(string $ttl) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($ttl, static::$schema['properties']['ttl']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->ttl = $ttl;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutTtl() : self
    {
        $clone = clone $this;
        unset($clone->ttl);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return UpdateProjectBackupScheduleRequestBody Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : UpdateProjectBackupScheduleRequestBody
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $description = null;
        if (isset($input->{'description'})) {
            $description = $input->{'description'};
        }
        $schedule = null;
        if (isset($input->{'schedule'})) {
            $schedule = $input->{'schedule'};
        }
        $ttl = null;
        if (isset($input->{'ttl'})) {
            $ttl = $input->{'ttl'};
        }

        $obj = new self();
        $obj->description = $description;
        $obj->schedule = $schedule;
        $obj->ttl = $ttl;
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
        if (isset($this->description)) {
            $output['description'] = $this->description;
        }
        if (isset($this->schedule)) {
            $output['schedule'] = $this->schedule;
        }
        if (isset($this->ttl)) {
            $output['ttl'] = $this->ttl;
        }

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
    }

    public function getUrl() : string
    {
        $mapped = $this->toJson();
        $projectBackupScheduleId = urlencode($mapped['projectBackupScheduleId']);
        return '/v2/project-backup-schedules/' . $projectBackupScheduleId;
    }

    public function getQuery() : array
    {
        $mapped = $this->toJson();
        $query = [];
        return $query;
    }

    public function getHeaders() : array
    {
        return $this->headers;
    }

    public function withHeader(string $name, string|array $value) : self
    {
        $clone = clone $this;
        $clone->headers[$name] = $value;
        return $clone;
    }
}

