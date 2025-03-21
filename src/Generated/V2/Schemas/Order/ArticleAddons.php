<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Order;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.order.ArticleAddons.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class ArticleAddons
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'hidden' => [
                'type' => 'boolean',
            ],
            'key' => [
                'minLength' => 1,
                'type' => 'string',
            ],
            'type' => [
                'type' => 'string',
            ],
            'value' => [
                'minLength' => 1,
                'type' => 'string',
            ],
            'valueMergeType' => [
                'enum' => [
                    'add',
                    'set',
                ],
                'type' => 'string',
            ],
        ],
        'required' => [
            'key',
            'value',
        ],
        'type' => 'object',
    ];

    private ?bool $hidden = null;

    private string $key;

    private ?string $type = null;

    private string $value;

    private ?ArticleAddonsValueMergeType $valueMergeType = null;

    public function __construct(string $key, string $value)
    {
        $this->key = $key;
        $this->value = $value;
    }

    public function getHidden(): ?bool
    {
        return $this->hidden ?? null;
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function getType(): ?string
    {
        return $this->type ?? null;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function getValueMergeType(): ?ArticleAddonsValueMergeType
    {
        return $this->valueMergeType ?? null;
    }

    public function withHidden(bool $hidden): self
    {
        $validator = new Validator();
        $validator->validate($hidden, self::$schema['properties']['hidden']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->hidden = $hidden;

        return $clone;
    }

    public function withoutHidden(): self
    {
        $clone = clone $this;
        unset($clone->hidden);

        return $clone;
    }

    public function withKey(string $key): self
    {
        $validator = new Validator();
        $validator->validate($key, self::$schema['properties']['key']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->key = $key;

        return $clone;
    }

    public function withType(string $type): self
    {
        $validator = new Validator();
        $validator->validate($type, self::$schema['properties']['type']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->type = $type;

        return $clone;
    }

    public function withoutType(): self
    {
        $clone = clone $this;
        unset($clone->type);

        return $clone;
    }

    public function withValue(string $value): self
    {
        $validator = new Validator();
        $validator->validate($value, self::$schema['properties']['value']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->value = $value;

        return $clone;
    }

    public function withValueMergeType(ArticleAddonsValueMergeType $valueMergeType): self
    {
        $clone = clone $this;
        $clone->valueMergeType = $valueMergeType;

        return $clone;
    }

    public function withoutValueMergeType(): self
    {
        $clone = clone $this;
        unset($clone->valueMergeType);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ArticleAddons Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ArticleAddons
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
        $type = null;
        if (isset($input->{'type'})) {
            $type = $input->{'type'};
        }
        $value = $input->{'value'};
        $valueMergeType = null;
        if (isset($input->{'valueMergeType'})) {
            $valueMergeType = ArticleAddonsValueMergeType::from($input->{'valueMergeType'});
        }

        $obj = new self($key, $value);
        $obj->hidden = $hidden;
        $obj->type = $type;
        $obj->valueMergeType = $valueMergeType;
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
        if (isset($this->type)) {
            $output['type'] = $this->type;
        }
        $output['value'] = $this->value;
        if (isset($this->valueMergeType)) {
            $output['valueMergeType'] = ($this->valueMergeType)->value;
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
        $validator->validate($input, self::$schema);

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
