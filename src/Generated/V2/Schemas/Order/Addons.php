<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Order;

use InvalidArgumentException;
use JsonSchema\Validator;

class Addons
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'hidden' => [
                'type' => 'boolean',
            ],
            'key' => [
                'type' => 'string',
            ],
            'value' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'key',
            'value',
        ],
        'type' => 'object',
    ];

    /**
     * @var bool|null
     */
    private ?bool $hidden = null;

    /**
     * @var string
     */
    private string $key;

    /**
     * @var string
     */
    private string $value;

    /**
     * @param string $key
     * @param string $value
     */
    public function __construct(string $key, string $value)
    {
        $this->key = $key;
        $this->value = $value;
    }

    /**
     * @return bool|null
     */
    public function getHidden(): ?bool
    {
        return $this->hidden ?? null;
    }

    /**
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param bool $hidden
     * @return self
     */
    public function withHidden(bool $hidden): self
    {
        $validator = new Validator();
        $validator->validate($hidden, static::$schema['properties']['hidden']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->hidden = $hidden;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutHidden(): self
    {
        $clone = clone $this;
        unset($clone->hidden);

        return $clone;
    }

    /**
     * @param string $key
     * @return self
     */
    public function withKey(string $key): self
    {
        $validator = new Validator();
        $validator->validate($key, static::$schema['properties']['key']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->key = $key;

        return $clone;
    }

    /**
     * @param string $value
     * @return self
     */
    public function withValue(string $value): self
    {
        $validator = new Validator();
        $validator->validate($value, static::$schema['properties']['value']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->value = $value;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return Addons Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): Addons
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $hidden = null;
        if (isset($input->{'hidden'})) {
            $hidden = (bool)($input->{'hidden'});
        }
        $key = $input->{'key'};
        $value = $input->{'value'};

        $obj = new self($key, $value);
        $obj->hidden = $hidden;
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
        if (isset($this->hidden)) {
            $output['hidden'] = $this->hidden;
        }
        $output['key'] = $this->key;
        $output['value'] = $this->value;

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
