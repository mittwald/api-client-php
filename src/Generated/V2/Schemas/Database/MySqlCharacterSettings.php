<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Database;

use InvalidArgumentException;
use JsonSchema\Validator;

class MySqlCharacterSettings
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'collations' => [
                'example' => [
                    'utf8_general_ci',
                    'utf8_bin',
                    'utf8_unicode_ci',
                ],
                'items' => [
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
            'name' => [
                'example' => 'utf8',
                'type' => 'string',
            ],
            'versionId' => [
                'example' => 'mysql57',
                'type' => 'string',
            ],
        ],
        'required' => [
            'name',
            'collations',
            'versionId',
        ],
        'type' => 'object',
    ];

    /**
     * @var string[]
     */
    private array $collations;

    /**
     * @var string
     */
    private string $name;

    /**
     * @var string
     */
    private string $versionId;

    /**
     * @param string[] $collations
     * @param string $name
     * @param string $versionId
     */
    public function __construct(array $collations, string $name, string $versionId)
    {
        $this->collations = $collations;
        $this->name = $name;
        $this->versionId = $versionId;
    }

    /**
     * @return string[]
     */
    public function getCollations(): array
    {
        return $this->collations;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getVersionId(): string
    {
        return $this->versionId;
    }

    /**
     * @param string[] $collations
     * @return self
     */
    public function withCollations(array $collations): self
    {
        $validator = new Validator();
        $validator->validate($collations, static::$schema['properties']['collations']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->collations = $collations;

        return $clone;
    }

    /**
     * @param string $name
     * @return self
     */
    public function withName(string $name): self
    {
        $validator = new Validator();
        $validator->validate($name, static::$schema['properties']['name']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->name = $name;

        return $clone;
    }

    /**
     * @param string $versionId
     * @return self
     */
    public function withVersionId(string $versionId): self
    {
        $validator = new Validator();
        $validator->validate($versionId, static::$schema['properties']['versionId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->versionId = $versionId;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return MySqlCharacterSettings Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): MySqlCharacterSettings
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $collations = $input->{'collations'};
        $name = $input->{'name'};
        $versionId = $input->{'versionId'};

        $obj = new self($collations, $name, $versionId);

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
        $output['collations'] = $this->collations;
        $output['name'] = $this->name;
        $output['versionId'] = $this->versionId;

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
