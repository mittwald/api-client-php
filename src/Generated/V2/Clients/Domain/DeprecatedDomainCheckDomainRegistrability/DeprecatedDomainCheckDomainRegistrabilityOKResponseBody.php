<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainCheckDomainRegistrability;

use InvalidArgumentException;
use JsonSchema\Validator;

class DeprecatedDomainCheckDomainRegistrabilityOKResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'available' => [
                'type' => 'boolean',
            ],
        ],
        'required' => [
            'available',
        ],
        'type' => 'object',
    ];

    private bool $available;

    public function __construct(bool $available)
    {
        $this->available = $available;
    }

    public function getAvailable(): bool
    {
        return $this->available;
    }

    public function withAvailable(bool $available): self
    {
        $validator = new Validator();
        $validator->validate($available, self::$schema['properties']['available']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->available = $available;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return DeprecatedDomainCheckDomainRegistrabilityOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): DeprecatedDomainCheckDomainRegistrabilityOKResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $available = (bool)($input->{'available'});

        $obj = new self($available);

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
        $output['available'] = $this->available;

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
