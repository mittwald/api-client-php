<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Article;

use InvalidArgumentException;

class ArticleAddons
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
                'minLength' => 1,
                'type' => 'string',
            ],
            'type' => [
                'type' => 'string',
            ],
            'value' => [
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

    /**
     * @var bool|null
     */
    private ?bool $hidden = null;

    /**
     * @var string
     */
    private string $key;

    /**
     * @var string|null
     */
    private ?string $type = null;

    /**
     * @var string
     */
    private string $value;

    /**
     * @var ArticleAddonsValueMergeType|null
     */
    private ?ArticleAddonsValueMergeType $valueMergeType = null;

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
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type ?? null;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @return ArticleAddonsValueMergeType|null
     */
    public function getValueMergeType(): ?ArticleAddonsValueMergeType
    {
        return $this->valueMergeType ?? null;
    }

    /**
     * @param bool $hidden
     * @return self
     */
    public function withHidden(bool $hidden): self
    {
        $validator = new \JsonSchema\Validator();
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
        $validator = new \JsonSchema\Validator();
        $validator->validate($key, static::$schema['properties']['key']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->key = $key;

        return $clone;
    }

    /**
     * @param string $type
     * @return self
     */
    public function withType(string $type): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($type, static::$schema['properties']['type']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->type = $type;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutType(): self
    {
        $clone = clone $this;
        unset($clone->type);

        return $clone;
    }

    /**
     * @param string $value
     * @return self
     */
    public function withValue(string $value): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($value, static::$schema['properties']['value']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->value = $value;

        return $clone;
    }

    /**
     * @param ArticleAddonsValueMergeType $valueMergeType
     * @return self
     */
    public function withValueMergeType(ArticleAddonsValueMergeType $valueMergeType): self
    {
        $clone = clone $this;
        $clone->valueMergeType = $valueMergeType;

        return $clone;
    }

    /**
     * @return self
     */
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
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
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
        $validator = new \JsonSchema\Validator();
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
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
