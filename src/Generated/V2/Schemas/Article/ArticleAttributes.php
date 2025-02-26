<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Article;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.article.ArticleAttributes.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class ArticleAttributes
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'customerEditable' => [
                'type' => 'boolean',
            ],
            'key' => [
                'example' => 'cpu',
                'minLength' => 1,
                'type' => 'string',
            ],
            'mergeType' => [
                'enum' => [
                    'add',
                    'set',
                ],
                'type' => 'string',
            ],
            'readonly' => [
                'type' => 'boolean',
            ],
            'required' => [
                'type' => 'boolean',
            ],
            'unit' => [
                'example' => 'GHz',
                'type' => 'string',
            ],
            'value' => [
                'example' => '4',
                'type' => 'string',
            ],
        ],
        'required' => [
            'key',
        ],
        'type' => 'object',
    ];

    private ?bool $customerEditable = null;

    private string $key;

    private ?ArticleAttributesMergeType $mergeType = null;

    private ?bool $readonly = null;

    private ?bool $required = null;

    private ?string $unit = null;

    private ?string $value = null;

    public function __construct(string $key)
    {
        $this->key = $key;
    }

    public function getCustomerEditable(): ?bool
    {
        return $this->customerEditable ?? null;
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function getMergeType(): ?ArticleAttributesMergeType
    {
        return $this->mergeType ?? null;
    }

    public function getReadonly(): ?bool
    {
        return $this->readonly ?? null;
    }

    public function getRequired(): ?bool
    {
        return $this->required ?? null;
    }

    public function getUnit(): ?string
    {
        return $this->unit ?? null;
    }

    public function getValue(): ?string
    {
        return $this->value ?? null;
    }

    public function withCustomerEditable(bool $customerEditable): self
    {
        $validator = new Validator();
        $validator->validate($customerEditable, self::$schema['properties']['customerEditable']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->customerEditable = $customerEditable;

        return $clone;
    }

    public function withoutCustomerEditable(): self
    {
        $clone = clone $this;
        unset($clone->customerEditable);

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

    public function withMergeType(ArticleAttributesMergeType $mergeType): self
    {
        $clone = clone $this;
        $clone->mergeType = $mergeType;

        return $clone;
    }

    public function withoutMergeType(): self
    {
        $clone = clone $this;
        unset($clone->mergeType);

        return $clone;
    }

    public function withReadonly(bool $readonly): self
    {
        $validator = new Validator();
        $validator->validate($readonly, self::$schema['properties']['readonly']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->readonly = $readonly;

        return $clone;
    }

    public function withoutReadonly(): self
    {
        $clone = clone $this;
        unset($clone->readonly);

        return $clone;
    }

    public function withRequired(bool $required): self
    {
        $validator = new Validator();
        $validator->validate($required, self::$schema['properties']['required']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->required = $required;

        return $clone;
    }

    public function withoutRequired(): self
    {
        $clone = clone $this;
        unset($clone->required);

        return $clone;
    }

    public function withUnit(string $unit): self
    {
        $validator = new Validator();
        $validator->validate($unit, self::$schema['properties']['unit']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->unit = $unit;

        return $clone;
    }

    public function withoutUnit(): self
    {
        $clone = clone $this;
        unset($clone->unit);

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

    public function withoutValue(): self
    {
        $clone = clone $this;
        unset($clone->value);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ArticleAttributes Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ArticleAttributes
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $customerEditable = null;
        if (isset($input->{'customerEditable'})) {
            $customerEditable = (bool)($input->{'customerEditable'});
        }
        $key = $input->{'key'};
        $mergeType = null;
        if (isset($input->{'mergeType'})) {
            $mergeType = ArticleAttributesMergeType::from($input->{'mergeType'});
        }
        $readonly = null;
        if (isset($input->{'readonly'})) {
            $readonly = (bool)($input->{'readonly'});
        }
        $required = null;
        if (isset($input->{'required'})) {
            $required = (bool)($input->{'required'});
        }
        $unit = null;
        if (isset($input->{'unit'})) {
            $unit = $input->{'unit'};
        }
        $value = null;
        if (isset($input->{'value'})) {
            $value = $input->{'value'};
        }

        $obj = new self($key);
        $obj->customerEditable = $customerEditable;
        $obj->mergeType = $mergeType;
        $obj->readonly = $readonly;
        $obj->required = $required;
        $obj->unit = $unit;
        $obj->value = $value;
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
        if (isset($this->customerEditable)) {
            $output['customerEditable'] = $this->customerEditable;
        }
        $output['key'] = $this->key;
        if (isset($this->mergeType)) {
            $output['mergeType'] = ($this->mergeType)->value;
        }
        if (isset($this->readonly)) {
            $output['readonly'] = $this->readonly;
        }
        if (isset($this->required)) {
            $output['required'] = $this->required;
        }
        if (isset($this->unit)) {
            $output['unit'] = $this->unit;
        }
        if (isset($this->value)) {
            $output['value'] = $this->value;
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
