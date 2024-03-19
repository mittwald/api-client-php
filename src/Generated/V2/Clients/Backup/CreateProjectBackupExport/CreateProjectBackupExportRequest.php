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

    private string $projectBackupId;

    private CreateProjectBackupExportRequestBody $body;

    private array $headers = [

    ];

    public function __construct(string $projectBackupId, CreateProjectBackupExportRequestBody $body)
    {
        $this->projectBackupId = $projectBackupId;
        $this->body = $body;
    }

    public function getProjectBackupId(): string
    {
        return $this->projectBackupId;
    }

    public function getBody(): CreateProjectBackupExportRequestBody
    {
        return $this->body;
    }

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

    /**
     * Builds the URL for this request
     *
     * This method is used internally by the client to build the URL for this request.
     * You should not need to call this method directly.
     *
     * @internal
     * @return string The URL for this request
     */
    public function buildUrl(): string
    {
        $mapped = $this->toJson();
        $projectBackupId = urlencode($mapped['projectBackupId']);
        return '/v2/project-backups/' . $projectBackupId . '/export';
    }

    /**
     * Builds the request options for this request
     *
     * This method is used internally by the client to build the Guzzle request options
     * for this request. You should not need to call this method directly.
     *
     * @internal
     * @return array The Guzzle request options for this request
     */
    public function buildRequestOptions(): array
    {
        $mapped = $this->toJson();
        $query = [];
        return [
            'query' => $query,
            'headers' => $this->headers,
            'json' => $this->getBody()->toJson(),
        ];
    }

    /**
     * Adds a header to this request
     *
     * You can use this method to add custom HTTP headers to the request.
     *
     * @param string $name The name of the header to add
     * @param string|array $value The value of the header to add
     * @return self A clone of this request with the header added
     */
    public function withHeader(string $name, string|array $value): self
    {
        $clone = clone $this;
        $clone->headers[$name] = $value;
        return $clone;
    }
}
