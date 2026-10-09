<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\AIHosting\CustomerRotateKey;

use InvalidArgumentException;
use JsonSchema\Validator;

class CustomerRotateKeyRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'gracePeriod' => [
                'description' => 'How long the old secret keeps working alongside the new one, as a number followed by s, m, h or d. Omit to invalidate the old secret immediately.',
                'example' => '24h',
                'pattern' => '^\\d+[smhd]$',
                'type' => 'string',
            ],
        ],
        'type' => 'object',
    ];

    /**
     * How long the old secret keeps working alongside the new one, as a number followed by s, m, h or d. Omit to invalidate the old secret immediately.
     */
    private ?string $gracePeriod = null;

    /**
     *
     */
    public function __construct()
    {
    }

    public function getGracePeriod(): ?string
    {
        return $this->gracePeriod ?? null;
    }

    public function withGracePeriod(string $gracePeriod): self
    {
        $validator = new Validator();
        $validator->validate($gracePeriod, self::$internalValidationSchema['properties']['gracePeriod']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->gracePeriod = $gracePeriod;

        return $clone;
    }

    public function withoutGracePeriod(): self
    {
        $clone = clone $this;
        unset($clone->gracePeriod);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CustomerRotateKeyRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CustomerRotateKeyRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $gracePeriod = null;
        if (isset($input->{'gracePeriod'})) {
            $gracePeriod = $input->{'gracePeriod'};
        }

        $obj = new self();
        $obj->gracePeriod = $gracePeriod;
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
        if (isset($this->gracePeriod)) {
            $output['gracePeriod'] = $this->gracePeriod;
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
        $validator->validate($input, self::$internalValidationSchema);

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
