<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Backup\GetProjectBackupSchedule;

use InvalidArgumentException;
use JsonSchema\Validator;

class GetProjectBackupScheduleRequest
{
    public const method = 'get';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'type' => 'object',
        'properties' => [
            'projectBackupScheduleId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
        ],
        'required' => [
            'projectBackupScheduleId',
        ],
    ];

    /**
     * @var string
     */
    private string $projectBackupScheduleId;

    private array $headers = [

    ];

    /**
     * @param string $projectBackupScheduleId
     */
    public function __construct(string $projectBackupScheduleId)
    {
        $this->projectBackupScheduleId = $projectBackupScheduleId;
    }

    /**
     * @return string
     */
    public function getProjectBackupScheduleId(): string
    {
        return $this->projectBackupScheduleId;
    }

    /**
     * @param string $projectBackupScheduleId
     * @return self
     */
    public function withProjectBackupScheduleId(string $projectBackupScheduleId): self
    {
        $validator = new Validator();
        $validator->validate($projectBackupScheduleId, static::$schema['properties']['projectBackupScheduleId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->projectBackupScheduleId = $projectBackupScheduleId;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return GetProjectBackupScheduleRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): GetProjectBackupScheduleRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $projectBackupScheduleId = $input->{'projectBackupScheduleId'};

        $obj = new self($projectBackupScheduleId);

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
        $output['projectBackupScheduleId'] = $this->projectBackupScheduleId;

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
    }

    public function getUrl(): string
    {
        $mapped = $this->toJson();
        $projectBackupScheduleId = urlencode($mapped['projectBackupScheduleId']);
        return '/v2/project-backup-schedules/' . $projectBackupScheduleId;
    }

    public function getQuery(): array
    {
        $mapped = $this->toJson();
        $query = [];
        return $query;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function withHeader(string $name, string|array $value): self
    {
        $clone = clone $this;
        $clone->headers[$name] = $value;
        return $clone;
    }
}
