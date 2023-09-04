<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Database;

class MySqlVersion
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'disabled' => [
                'type' => 'boolean',
            ],
            'id' => [
                'type' => 'string',
            ],
            'name' => [
                'type' => 'string',
            ],
            'number' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'id',
            'name',
            'number',
            'disabled',
        ],
        'type' => 'object',
    ];

    /**
     * @var bool
     */
    private bool $disabled;

    /**
     * @var string
     */
    private string $id;

    /**
     * @var string
     */
    private string $name;

    /**
     * @var string
     */
    private string $number;

    /**
     * @param bool $disabled
     * @param string $id
     * @param string $name
     * @param string $number
     */
    public function __construct(bool $disabled, string $id, string $name, string $number)
    {
        $this->disabled = $disabled;
        $this->id = $id;
        $this->name = $name;
        $this->number = $number;
    }

    /**
     * @return bool
     */
    public function getDisabled() : bool
    {
        return $this->disabled;
    }

    /**
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getNumber() : string
    {
        return $this->number;
    }

    /**
     * @param bool $disabled
     * @return self
     */
    public function withDisabled(bool $disabled) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($disabled, static::$schema['properties']['disabled']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->disabled = $disabled;

        return $clone;
    }

    /**
     * @param string $id
     * @return self
     */
    public function withId(string $id) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($id, static::$schema['properties']['id']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->id = $id;

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
     * @param string $number
     * @return self
     */
    public function withNumber(string $number) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($number, static::$schema['properties']['number']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->number = $number;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return MySqlVersion Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : MySqlVersion
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $disabled = (bool)($input->{'disabled'});
        $id = $input->{'id'};
        $name = $input->{'name'};
        $number = $input->{'number'};

        $obj = new self($disabled, $id, $name, $number);

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
        $output['disabled'] = $this->disabled;
        $output['id'] = $this->id;
        $output['name'] = $this->name;
        $output['number'] = $this->number;

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

