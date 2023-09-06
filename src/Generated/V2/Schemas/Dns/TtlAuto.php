<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Dns;

use InvalidArgumentException;
use JsonSchema\Validator;

class TtlAuto
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'auto' => [
                'description' => 'this will always be true',
                'type' => 'boolean',
            ],
        ],
        'required' => [
            'auto',
        ],
        'type' => 'object',
    ];

    /**
     * this will always be true
     *
     * @var bool
     */
    private bool $auto;

    /**
     * @param bool $auto
     */
    public function __construct(bool $auto)
    {
        $this->auto = $auto;
    }

    /**
     * @return bool
     */
    public function getAuto(): bool
    {
        return $this->auto;
    }

    /**
     * @param bool $auto
     * @return self
     */
    public function withAuto(bool $auto): self
    {
        $validator = new Validator();
        $validator->validate($auto, static::$schema['properties']['auto']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->auto = $auto;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return TtlAuto Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): TtlAuto
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $auto = (bool)($input->{'auto'});

        $obj = new self($auto);

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
        $output['auto'] = $this->auto;

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
