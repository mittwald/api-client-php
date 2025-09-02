<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\CustomerGetPaymentMethod;

use InvalidArgumentException;
use JsonSchema\Validator;

class CustomerGetPaymentMethodOKResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'cardDetails' => [
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
            ],
        ],
        'type' => 'object',
    ];

    private ?CustomerGetPaymentMethodOKResponseBodyCardDetails $cardDetails = null;

    /**
     *
     */
    public function __construct()
    {
    }

    public function getCardDetails(): ?CustomerGetPaymentMethodOKResponseBodyCardDetails
    {
        return $this->cardDetails ?? null;
    }

    public function withCardDetails(CustomerGetPaymentMethodOKResponseBodyCardDetails $cardDetails): self
    {
        $clone = clone $this;
        $clone->cardDetails = $cardDetails;

        return $clone;
    }

    public function withoutCardDetails(): self
    {
        $clone = clone $this;
        unset($clone->cardDetails);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CustomerGetPaymentMethodOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CustomerGetPaymentMethodOKResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $cardDetails = null;
        if (isset($input->{'cardDetails'})) {
            $cardDetails = CustomerGetPaymentMethodOKResponseBodyCardDetails::buildFromInput($input->{'cardDetails'}, validate: $validate);
        }

        $obj = new self();
        $obj->cardDetails = $cardDetails;
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
        if (isset($this->cardDetails)) {
            $output['cardDetails'] = ($this->cardDetails)->toJson();
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
        if (isset($this->cardDetails)) {
            $this->cardDetails = clone $this->cardDetails;
        }
    }
}
