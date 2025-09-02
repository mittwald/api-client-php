<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\CustomerGetPaymentMethod;

use InvalidArgumentException;
use JsonSchema\Validator;

class CustomerGetPaymentMethodOKResponseBodyCardDetails
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'brand' => [
                'type' => 'string',
            ],
            'last4' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'brand',
            'last4',
        ],
        'type' => 'object',
    ];

    private string $brand;

    private string $last4;

    public function __construct(string $brand, string $last4)
    {
        $this->brand = $brand;
        $this->last4 = $last4;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function getLast4(): string
    {
        return $this->last4;
    }

    public function withBrand(string $brand): self
    {
        $validator = new Validator();
        $validator->validate($brand, self::$internalValidationSchema['properties']['brand']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->brand = $brand;

        return $clone;
    }

    public function withLast4(string $last4): self
    {
        $validator = new Validator();
        $validator->validate($last4, self::$internalValidationSchema['properties']['last4']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->last4 = $last4;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CustomerGetPaymentMethodOKResponseBodyCardDetails Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CustomerGetPaymentMethodOKResponseBodyCardDetails
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $brand = $input->{'brand'};
        $last4 = $input->{'last4'};

        $obj = new self($brand, $last4);

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
        $output['brand'] = $this->brand;
        $output['last4'] = $this->last4;

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
