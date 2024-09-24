<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Container\ValidateContainerRegistryUri;

use InvalidArgumentException;
use JsonSchema\Validator;

class ValidateContainerRegistryUriOKResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'valid' => [
                'type' => 'boolean',
            ],
        ],
        'required' => [
            'valid',
        ],
        'type' => 'object',
    ];

    private bool $valid;

    public function __construct(bool $valid)
    {
        $this->valid = $valid;
    }

    public function getValid(): bool
    {
        return $this->valid;
    }

    public function withValid(bool $valid): self
    {
        $validator = new Validator();
        $validator->validate($valid, static::$schema['properties']['valid']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->valid = $valid;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ValidateContainerRegistryUriOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ValidateContainerRegistryUriOKResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $valid = (bool)($input->{'valid'});

        $obj = new self($valid);

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
        $output['valid'] = $this->valid;

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
