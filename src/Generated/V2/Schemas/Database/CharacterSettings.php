<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Database;

class CharacterSettings
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'characterSet' => [
                'type' => 'string',
            ],
            'collation' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'characterSet',
            'collation',
        ],
        'type' => 'object',
    ];

    /**
     * @var string
     */
    private string $characterSet;

    /**
     * @var string
     */
    private string $collation;

    /**
     * @param string $characterSet
     * @param string $collation
     */
    public function __construct(string $characterSet, string $collation)
    {
        $this->characterSet = $characterSet;
        $this->collation = $collation;
    }

    /**
     * @return string
     */
    public function getCharacterSet() : string
    {
        return $this->characterSet;
    }

    /**
     * @return string
     */
    public function getCollation() : string
    {
        return $this->collation;
    }

    /**
     * @param string $characterSet
     * @return self
     */
    public function withCharacterSet(string $characterSet) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($characterSet, static::$schema['properties']['characterSet']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->characterSet = $characterSet;

        return $clone;
    }

    /**
     * @param string $collation
     * @return self
     */
    public function withCollation(string $collation) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($collation, static::$schema['properties']['collation']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->collation = $collation;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CharacterSettings Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : CharacterSettings
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $characterSet = $input->{'characterSet'};
        $collation = $input->{'collation'};

        $obj = new self($characterSet, $collation);

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
        $output['characterSet'] = $this->characterSet;
        $output['collation'] = $this->collation;

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

