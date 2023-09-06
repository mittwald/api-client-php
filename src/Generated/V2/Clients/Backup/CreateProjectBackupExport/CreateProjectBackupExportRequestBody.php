<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Backup\CreateProjectBackupExport;

use InvalidArgumentException;
use JsonSchema\Validator;

class CreateProjectBackupExportRequestBody
{
    public const method = 'post';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
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
    ];

    /**
     * The desired format to export the ProjectBackup in.
     *
     * @var CreateProjectBackupExportRequestBodyFormat
     */
    private CreateProjectBackupExportRequestBodyFormat $format;

    /**
     * Password to use to protect the archive.
     *
     * @var string|null
     */
    private ?string $password = null;

    private array $headers = [

    ];

    /**
     * @param CreateProjectBackupExportRequestBodyFormat $format
     */
    public function __construct(CreateProjectBackupExportRequestBodyFormat $format)
    {
        $this->format = $format;
    }

    /**
     * @return CreateProjectBackupExportRequestBodyFormat
     */
    public function getFormat(): CreateProjectBackupExportRequestBodyFormat
    {
        return $this->format;
    }

    /**
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password ?? null;
    }

    /**
     * @param CreateProjectBackupExportRequestBodyFormat $format
     * @return self
     */
    public function withFormat(CreateProjectBackupExportRequestBodyFormat $format): self
    {
        $clone = clone $this;
        $clone->format = $format;

        return $clone;
    }

    /**
     * @param string $password
     * @return self
     */
    public function withPassword(string $password): self
    {
        $validator = new Validator();
        $validator->validate($password, static::$schema['properties']['password']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->password = $password;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutPassword(): self
    {
        $clone = clone $this;
        unset($clone->password);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CreateProjectBackupExportRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CreateProjectBackupExportRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $format = CreateProjectBackupExportRequestBodyFormat::from($input->{'format'});
        $password = null;
        if (isset($input->{'password'})) {
            $password = $input->{'password'};
        }

        $obj = new self($format);
        $obj->password = $password;
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
        $output['format'] = ($this->format)->value;
        if (isset($this->password)) {
            $output['password'] = $this->password;
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
