<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Backup\CreateProjectBackupExport;

use InvalidArgumentException;
use JsonSchema\Validator;

class CreateProjectBackupExportRequest
{
    public const method = 'post';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'type' => 'object',
        'properties' => [
            'projectBackupId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'body' => [
                'properties' => [
                    'format' => [
                        'description' => 'The desired format to export the ProjectBackup in.',
                        'enum' => [
                            'tar',
                            'zip',
                        ],
                        'example' => 'tar',
                        'type' => 'string',
                    ],
                    'password' => [
                        'description' => 'Password to use to protect the archive.',
                        'example' => 'password',
                        'type' => 'string',
                    ],
                ],
                'required' => [
                    'format',
                ],
                'type' => 'object',
            ],
        ],
        'required' => [
            'projectBackupId',
            'body',
        ],
    ];

    /**
     * @var string
     */
    private string $projectBackupId;

    /**
     * @var CreateProjectBackupExportRequestBody
     */
    private CreateProjectBackupExportRequestBody $body;

    private array $headers = [

    ];

    /**
     * @param string $projectBackupId
     * @param CreateProjectBackupExportRequestBody $body
     */
    public function __construct(string $projectBackupId, CreateProjectBackupExportRequestBody $body)
    {
        $this->projectBackupId = $projectBackupId;
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getProjectBackupId(): string
    {
        return $this->projectBackupId;
    }

    /**
     * @return CreateProjectBackupExportRequestBody
     */
    public function getBody(): CreateProjectBackupExportRequestBody
    {
        return $this->body;
    }

    /**
     * @param string $projectBackupId
     * @return self
     */
    public function withProjectBackupId(string $projectBackupId): self
    {
        $validator = new Validator();
        $validator->validate($projectBackupId, static::$schema['properties']['projectBackupId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->projectBackupId = $projectBackupId;

        return $clone;
    }

    /**
     * @param CreateProjectBackupExportRequestBody $body
     * @return self
     */
    public function withBody(CreateProjectBackupExportRequestBody $body): self
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
     * @return CreateProjectBackupExportRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CreateProjectBackupExportRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $projectBackupId = $input->{'projectBackupId'};
        $body = CreateProjectBackupExportRequestBody::buildFromInput($input->{'body'}, validate: $validate);

        $obj = new self($projectBackupId, $body);

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
        $output['projectBackupId'] = $this->projectBackupId;
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
        $this->body = clone $this->body;
    }

    public function getUrl(): string
    {
        $mapped = $this->toJson();
        $projectBackupId = urlencode($mapped['projectBackupId']);
        return '/v2/project-backups/' . $projectBackupId . '/export';
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
