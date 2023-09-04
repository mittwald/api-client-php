<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Domain;

class HandleData
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'handleFields' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.domain.HandleField',
                ],
                'type' => 'array',
            ],
            'handleRef' => [
                'type' => 'string',
            ],
        ],
        'type' => 'object',
    ];

    /**
     * @var HandleField[]|null
     */
    private ?array $handleFields = null;

    /**
     * @var string|null
     */
    private ?string $handleRef = null;

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return HandleField[]|null
     */
    public function getHandleFields() : ?array
    {
        return $this->handleFields ?? null;
    }

    /**
     * @return string|null
     */
    public function getHandleRef() : ?string
    {
        return $this->handleRef ?? null;
    }

    /**
     * @param HandleField[] $handleFields
     * @return self
     */
    public function withHandleFields(array $handleFields) : self
    {
        $clone = clone $this;
        $clone->handleFields = $handleFields;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutHandleFields() : self
    {
        $clone = clone $this;
        unset($clone->handleFields);

        return $clone;
    }

    /**
     * @param string $handleRef
     * @return self
     */
    public function withHandleRef(string $handleRef) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($handleRef, static::$schema['properties']['handleRef']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->handleRef = $handleRef;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutHandleRef() : self
    {
        $clone = clone $this;
        unset($clone->handleRef);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return HandleData Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : HandleData
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $handleFields = null;
        if (isset($input->{'handleFields'})) {
            $handleFields = array_map(fn(array $i): HandleField => HandleField::buildFromInput($i, validate: $validate), $input->{'handleFields'});
        }
        $handleRef = null;
        if (isset($input->{'handleRef'})) {
            $handleRef = $input->{'handleRef'};
        }

        $obj = new self();
        $obj->handleFields = $handleFields;
        $obj->handleRef = $handleRef;
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
        if (isset($this->handleFields)) {
            $output['handleFields'] = array_map(fn(HandleField $i): array => $i->toJson(), $this->handleFields);
        }
        if (isset($this->handleRef)) {
            $output['handleRef'] = $this->handleRef;
        }

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

