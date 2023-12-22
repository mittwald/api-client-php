<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain\CheckDomainRegistrabilityV2Deprecated;

use InvalidArgumentException;
use JsonSchema\Validator;

class CheckDomainRegistrabilityV2DeprecatedOKResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
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

    /**
     * @var bool
     */
    private bool $available;

    /**
     * @param bool $available
     */
    public function __construct(bool $available)
    {
        $this->available = $available;
    }

    /**
     * @return bool
     */
    public function getAvailable(): bool
    {
        return $this->available;
    }

    /**
     * @param bool $available
     * @return self
     */
    public function withAvailable(bool $available): self
    {
        $validator = new Validator();
        $validator->validate($available, static::$schema['properties']['available']);
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
     * @return CheckDomainRegistrabilityV2DeprecatedOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CheckDomainRegistrabilityV2DeprecatedOKResponseBody
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
