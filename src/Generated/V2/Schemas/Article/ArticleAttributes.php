<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Article;

class ArticleAttributes
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
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
            'value',
        ],
        'type' => 'object',
    ];

    /**
     * @var bool|null
     */
    private ?bool $customerEditable = null;

    /**
     * @var string
     */
    private string $key;

    /**
     * @var ArticleAttributesMergeType|null
     */
    private ?ArticleAttributesMergeType $mergeType = null;

    /**
     * @var bool|null
     */
    private ?bool $readonly = null;

    /**
     * @var bool|null
     */
    private ?bool $required = null;

    /**
     * @var string|null
     */
    private ?string $unit = null;

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
    public function getCustomerEditable() : ?bool
    {
        return $this->customerEditable ?? null;
    }

    /**
     * @return string
     */
    public function getKey() : string
    {
        return $this->key;
    }

    /**
     * @return ArticleAttributesMergeType|null
     */
    public function getMergeType() : ?ArticleAttributesMergeType
    {
        return $this->mergeType ?? null;
    }

    /**
     * @return bool|null
     */
    public function getReadonly() : ?bool
    {
        return $this->readonly ?? null;
    }

    /**
     * @return bool|null
     */
    public function getRequired() : ?bool
    {
        return $this->required ?? null;
    }

    /**
     * @return string|null
     */
    public function getUnit() : ?string
    {
        return $this->unit ?? null;
    }

    /**
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }

    /**
     * @param bool $customerEditable
     * @return self
     */
    public function withCustomerEditable(bool $customerEditable) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($customerEditable, static::$schema['properties']['customerEditable']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->customerEditable = $customerEditable;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutCustomerEditable() : self
    {
        $clone = clone $this;
        unset($clone->customerEditable);

        return $clone;
    }

    /**
     * @param string $key
     * @return self
     */
    public function withKey(string $key) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($key, static::$schema['properties']['key']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->key = $key;

        return $clone;
    }

    /**
     * @param ArticleAttributesMergeType $mergeType
     * @return self
     */
    public function withMergeType(ArticleAttributesMergeType $mergeType) : self
    {
        $clone = clone $this;
        $clone->mergeType = $mergeType;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutMergeType() : self
    {
        $clone = clone $this;
        unset($clone->mergeType);

        return $clone;
    }

    /**
     * @param bool $readonly
     * @return self
     */
    public function withReadonly(bool $readonly) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($readonly, static::$schema['properties']['readonly']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->readonly = $readonly;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutReadonly() : self
    {
        $clone = clone $this;
        unset($clone->readonly);

        return $clone;
    }

    /**
     * @param bool $required
     * @return self
     */
    public function withRequired(bool $required) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($required, static::$schema['properties']['required']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->required = $required;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutRequired() : self
    {
        $clone = clone $this;
        unset($clone->required);

        return $clone;
    }

    /**
     * @param string $unit
     * @return self
     */
    public function withUnit(string $unit) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($unit, static::$schema['properties']['unit']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->unit = $unit;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutUnit() : self
    {
        $clone = clone $this;
        unset($clone->unit);

        return $clone;
    }

    /**
     * @param string $value
     * @return self
     */
    public function withValue(string $value) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($value, static::$schema['properties']['value']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
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
     * @return ArticleAttributes Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : ArticleAttributes
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
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
        $value = $input->{'value'};

        $obj = new self($key, $value);
        $obj->customerEditable = $customerEditable;
        $obj->mergeType = $mergeType;
        $obj->readonly = $readonly;
        $obj->required = $required;
        $obj->unit = $unit;
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
        $output['value'] = $this->value;

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

