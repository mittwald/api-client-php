<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressQuota;

use InvalidArgumentException;
use JsonSchema\Validator;

class UpdateMailAddressQuotaRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'quotaInBytes' => [
                'minimum' => -1,
                'type' => 'number',
            ],
        ],
        'required' => [
            'quotaInBytes',
        ],
    ];

    private int|float $quotaInBytes;

    /**
     * @param int|float $quotaInBytes
     */
    public function __construct(int|float $quotaInBytes)
    {
        $this->quotaInBytes = $quotaInBytes;
    }

    public function getQuotaInBytes(): int|float
    {
        return $this->quotaInBytes;
    }

    /**
     * @param int|float $quotaInBytes
     */
    public function withQuotaInBytes(int|float $quotaInBytes): self
    {
        $validator = new Validator();
        $validator->validate($quotaInBytes, static::$schema['properties']['quotaInBytes']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->quotaInBytes = $quotaInBytes;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return UpdateMailAddressQuotaRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): UpdateMailAddressQuotaRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $quotaInBytes = str_contains((string)($input->{'quotaInBytes'}), '.') ? (float)($input->{'quotaInBytes'}) : (int)($input->{'quotaInBytes'});

        $obj = new self($quotaInBytes);

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
        $output['quotaInBytes'] = $this->quotaInBytes;

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
