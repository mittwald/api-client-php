<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Backup;

class DatabaseReference
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'kind' => [
                'type' => 'string',
            ],
            'name' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'kind',
            'name',
        ],
        'type' => 'object',
    ];

    /**
     * @var string
     */
    private string $kind;

    /**
     * @var string
     */
    private string $name;

    /**
     * @param string $kind
     * @param string $name
     */
    public function __construct(string $kind, string $name)
    {
        $this->kind = $kind;
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getKind() : string
    {
        return $this->kind;
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @param string $kind
     * @return self
     */
    public function withKind(string $kind) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($kind, static::$schema['properties']['kind']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->kind = $kind;

        return $clone;
    }

    /**
     * @param string $name
     * @return self
     */
    public function withName(string $name) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($name, static::$schema['properties']['name']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->name = $name;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return DatabaseReference Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : DatabaseReference
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $kind = $input->{'kind'};
        $name = $input->{'name'};

        $obj = new self($kind, $name);

        return $obj;
    }

    /**
     * Converts this object back to a simple array that can be JSON-serialized
     *
     * @return array Converted array
     */
    public function toJson() : array
    {
        $output = [];
        $output['kind'] = $this->kind;
        $output['name'] = $this->name;

        return $output;
    }

    /**
     * Validates an input array
     *
     * @param array|object $input Input data
     * @param bool $return Return instead of throwing errors
     * @return bool Validation result
     * @throws \InvalidArgumentException
     */
    public static function validateInput(array|object $input, bool $return = false) : bool
    {
        $validator = new \JsonSchema\Validator();
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        $validator->validate($input, static::$schema);

        if (!$validator->isValid() && !$return) {
            $errors = array_map(function(array $e): string {
                return $e["property"] . ": " . $e["message"];
            }, $validator->getErrors());
            throw new \InvalidArgumentException(join(", ", $errors));
        }

        return $validator->isValid();
    }

    public function __clone()
    {
    }
}

