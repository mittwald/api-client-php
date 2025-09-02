<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Backup\CreateProjectBackupExport;

use InvalidArgumentException;
use JsonSchema\Validator;

class CreateProjectBackupExportRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
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
     */
    private CreateProjectBackupExportRequestBodyFormat $format;

    /**
     * Password to use to protect the archive.
     */
    private ?string $password = null;

    public function __construct(CreateProjectBackupExportRequestBodyFormat $format)
    {
        $this->format = $format;
    }

    public function getFormat(): CreateProjectBackupExportRequestBodyFormat
    {
        return $this->format;
    }

    public function getPassword(): ?string
    {
        return $this->password ?? null;
    }

    public function withFormat(CreateProjectBackupExportRequestBodyFormat $format): self
    {
        $clone = clone $this;
        $clone->format = $format;

        return $clone;
    }

    public function withPassword(string $password): self
    {
        $validator = new Validator();
        $validator->validate($password, self::$internalValidationSchema['properties']['password']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->password = $password;

        return $clone;
    }

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
