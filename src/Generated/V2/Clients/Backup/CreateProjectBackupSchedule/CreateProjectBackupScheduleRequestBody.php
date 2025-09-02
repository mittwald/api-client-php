<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Backup\CreateProjectBackupSchedule;

use InvalidArgumentException;
use JsonSchema\Validator;

class CreateProjectBackupScheduleRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'description' => [
                'description' => 'Description of the BackupSchedule.',
                'type' => 'string',
            ],
            'schedule' => [
                'description' => 'Execution schedule in crontab notation.',
                'example' => '5 4 * * *',
                'type' => 'string',
            ],
            'ttl' => [
                'description' => 'TTL of the BackupSchedule as time string.',
                'example' => '7d',
                'type' => 'string',
            ],
        ],
        'required' => [
            'ttl',
            'schedule',
        ],
        'type' => 'object',
    ];

    /**
     * Description of the BackupSchedule.
     */
    private ?string $description = null;

    /**
     * Execution schedule in crontab notation.
     */
    private string $schedule;

    /**
     * TTL of the BackupSchedule as time string.
     */
    private string $ttl;

    public function __construct(string $schedule, string $ttl)
    {
        $this->schedule = $schedule;
        $this->ttl = $ttl;
    }

    public function getDescription(): ?string
    {
        return $this->description ?? null;
    }

    public function getSchedule(): string
    {
        return $this->schedule;
    }

    public function getTtl(): string
    {
        return $this->ttl;
    }

    public function withDescription(string $description): self
    {
        $validator = new Validator();
        $validator->validate($description, self::$internalValidationSchema['properties']['description']);
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

    public function withSchedule(string $schedule): self
    {
        $validator = new Validator();
        $validator->validate($schedule, self::$internalValidationSchema['properties']['schedule']);
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
        $validator->validate($ttl, self::$internalValidationSchema['properties']['ttl']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->ttl = $ttl;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CreateProjectBackupScheduleRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CreateProjectBackupScheduleRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $description = null;
        if (isset($input->{'description'})) {
            $description = $input->{'description'};
        }
        $schedule = $input->{'schedule'};
        $ttl = $input->{'ttl'};

        $obj = new self($schedule, $ttl);
        $obj->description = $description;
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
        if (isset($this->description)) {
            $output['description'] = $this->description;
        }
        $output['schedule'] = $this->schedule;
        $output['ttl'] = $this->ttl;

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
        $validator->validate($input, self::$internalValidationSchema);

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
    }
}
