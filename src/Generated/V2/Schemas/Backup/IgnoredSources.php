<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Backup;

use InvalidArgumentException;
use JsonSchema\Validator;

class IgnoredSources
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'databases' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.backup.DatabaseReference',
                ],
                'type' => 'array',
            ],
            'files' => [
                'type' => 'boolean',
            ],
        ],
        'required' => [
            'files',
        ],
        'type' => 'object',
    ];

    /**
     * @var DatabaseReference[]|null
     */
    private ?array $databases = null;

    /**
     * @var bool
     */
    private bool $files;

    /**
     * @param bool $files
     */
    public function __construct(bool $files)
    {
        $this->files = $files;
    }

    /**
     * @return DatabaseReference[]|null
     */
    public function getDatabases(): ?array
    {
        return $this->databases ?? null;
    }

    /**
     * @return bool
     */
    public function getFiles(): bool
    {
        return $this->files;
    }

    /**
     * @param DatabaseReference[] $databases
     * @return self
     */
    public function withDatabases(array $databases): self
    {
        $clone = clone $this;
        $clone->databases = $databases;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutDatabases(): self
    {
        $clone = clone $this;
        unset($clone->databases);

        return $clone;
    }

    /**
     * @param bool $files
     * @return self
     */
    public function withFiles(bool $files): self
    {
        $validator = new Validator();
        $validator->validate($files, static::$schema['properties']['files']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->files = $files;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return IgnoredSources Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): IgnoredSources
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $databases = null;
        if (isset($input->{'databases'})) {
            $databases = array_map(fn (array $i): DatabaseReference => DatabaseReference::buildFromInput($i, validate: $validate), $input->{'databases'});
        }
        $files = (bool)($input->{'files'});

        $obj = new self($files);
        $obj->databases = $databases;
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
        if (isset($this->databases)) {
            $output['databases'] = array_map(fn (DatabaseReference $i): array => $i->toJson(), $this->databases);
        }
        $output['files'] = $this->files;

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
}
