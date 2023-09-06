<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Backup\UpdateProjectBackupSchedule;

use InvalidArgumentException;

class UpdateProjectBackupScheduleRequest
{
    public const method = 'patch';

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
            'body' => [
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
            ],
        ],
        'required' => [
            'projectBackupScheduleId',
            'body',
        ],
    ];

    /**
     * @var string
     */
    private string $projectBackupScheduleId;

    /**
     * @var UpdateProjectBackupScheduleRequestBody
     */
    private UpdateProjectBackupScheduleRequestBody $body;

    private array $headers = [

    ];

    /**
     * @param string $projectBackupScheduleId
     * @param UpdateProjectBackupScheduleRequestBody $body
     */
    public function __construct(string $projectBackupScheduleId, UpdateProjectBackupScheduleRequestBody $body)
    {
        $this->projectBackupScheduleId = $projectBackupScheduleId;
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getProjectBackupScheduleId(): string
    {
        return $this->projectBackupScheduleId;
    }

    /**
     * @return UpdateProjectBackupScheduleRequestBody
     */
    public function getBody(): UpdateProjectBackupScheduleRequestBody
    {
        return $this->body;
    }

    /**
     * @param string $projectBackupScheduleId
     * @return self
     */
    public function withProjectBackupScheduleId(string $projectBackupScheduleId): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($projectBackupScheduleId, static::$schema['properties']['projectBackupScheduleId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->projectBackupScheduleId = $projectBackupScheduleId;

        return $clone;
    }

    /**
     * @param UpdateProjectBackupScheduleRequestBody $body
     * @return self
     */
    public function withBody(UpdateProjectBackupScheduleRequestBody $body): self
    {
        $clone = clone $this;
        $clone->body = $body;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return UpdateProjectBackupScheduleRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): UpdateProjectBackupScheduleRequest
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $projectBackupScheduleId = $input->{'projectBackupScheduleId'};
        $body = UpdateProjectBackupScheduleRequestBody::buildFromInput($input->{'body'}, validate: $validate);

        $obj = new self($projectBackupScheduleId, $body);

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
        $output['body'] = ($this->body)->toJson();

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
        $this->body = clone $this->body;
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
