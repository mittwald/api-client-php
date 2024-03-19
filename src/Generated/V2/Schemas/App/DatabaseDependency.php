<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\App;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * A DatabaseDependency is a generic description of need for a database, used by
 * AppVersions.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class DatabaseDependency
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'description' => 'A DatabaseDependency is a generic description of need for a database, used by AppVersions.',
        'properties' => [
            'description' => [
                'type' => 'string',
            ],
            'kind' => [
                'enum' => [
                    'mysql',
                ],
                'type' => 'string',
            ],
            'parameters' => [
                'additionalProperties' => [
                    'type' => 'string',
                ],
                'type' => 'object',
            ],
            'version' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
        ],
        'required' => [
            'version',
            'description',
            'kind',
        ],
        'type' => 'object',
    ];

    private string $description;

    private DatabaseDependencyKind $kind;

    /**
     * @var string[]|null
     */
    private ?array $parameters = null;

    private string $version;

    public function __construct(string $description, DatabaseDependencyKind $kind, string $version)
    {
        $this->description = $description;
        $this->kind = $kind;
        $this->version = $version;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getKind(): DatabaseDependencyKind
    {
        return $this->kind;
    }

    /**
     * @return string[]|null
     */
    public function getParameters(): ?array
    {
        return $this->parameters ?? null;
    }

    public function getVersion(): string
    {
        return $this->version;
    }

    public function withDescription(string $description): self
    {
        $validator = new Validator();
        $validator->validate($description, static::$schema['properties']['description']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->description = $description;

        return $clone;
    }

    public function withKind(DatabaseDependencyKind $kind): self
    {
        $clone = clone $this;
        $clone->kind = $kind;

        return $clone;
    }

    /**
     * @param string[] $parameters
     */
    public function withParameters(array $parameters): self
    {
        $validator = new Validator();
        $validator->validate($parameters, static::$schema['properties']['parameters']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->parameters = $parameters;

        return $clone;
    }

    public function withoutParameters(): self
    {
        $clone = clone $this;
        unset($clone->parameters);

        return $clone;
    }

    public function withVersion(string $version): self
    {
        $validator = new Validator();
        $validator->validate($version, static::$schema['properties']['version']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->version = $version;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return DatabaseDependency Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): DatabaseDependency
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $description = $input->{'description'};
        $kind = DatabaseDependencyKind::from($input->{'kind'});
        $parameters = null;
        if (isset($input->{'parameters'})) {
            $parameters = (array)$input->{'parameters'};
        }
        $version = $input->{'version'};

        $obj = new self($description, $kind, $version);
        $obj->parameters = $parameters;
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
        $output['description'] = $this->description;
        $output['kind'] = ($this->kind)->value;
        if (isset($this->parameters)) {
            $output['parameters'] = $this->parameters;
        }
        $output['version'] = $this->version;

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
