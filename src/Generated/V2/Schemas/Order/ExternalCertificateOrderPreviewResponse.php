<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Order;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for
 * de.mittwald.v1.order.ExternalCertificateOrderPreviewResponse.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class ExternalCertificateOrderPreviewResponse
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'feePrice' => [
                'example' => 900,
                'type' => 'number',
            ],
            'recurringPrice' => [
                'example' => 490,
                'type' => 'number',
            ],
            'totalPrice' => [
                'example' => 1390,
                'type' => 'number',
            ],
        ],
        'required' => [
            'totalPrice',
            'recurringPrice',
            'feePrice',
        ],
        'type' => 'object',
    ];

    private int|float $feePrice;

    private int|float $recurringPrice;

    private int|float $totalPrice;

    /**
     * @param int|float $feePrice
     * @param int|float $recurringPrice
     * @param int|float $totalPrice
     */
    public function __construct(int|float $feePrice, int|float $recurringPrice, int|float $totalPrice)
    {
        $this->feePrice = $feePrice;
        $this->recurringPrice = $recurringPrice;
        $this->totalPrice = $totalPrice;
    }

    public function getFeePrice(): int|float
    {
        return $this->feePrice;
    }

    public function getRecurringPrice(): int|float
    {
        return $this->recurringPrice;
    }

    public function getTotalPrice(): int|float
    {
        return $this->totalPrice;
    }

    /**
     * @param int|float $feePrice
     */
    public function withFeePrice(int|float $feePrice): self
    {
        $validator = new Validator();
        $validator->validate($feePrice, static::$schema['properties']['feePrice']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->feePrice = $feePrice;

        return $clone;
    }

    /**
     * @param int|float $recurringPrice
     */
    public function withRecurringPrice(int|float $recurringPrice): self
    {
        $validator = new Validator();
        $validator->validate($recurringPrice, static::$schema['properties']['recurringPrice']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->recurringPrice = $recurringPrice;

        return $clone;
    }

    /**
     * @param int|float $totalPrice
     */
    public function withTotalPrice(int|float $totalPrice): self
    {
        $validator = new Validator();
        $validator->validate($totalPrice, static::$schema['properties']['totalPrice']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->totalPrice = $totalPrice;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ExternalCertificateOrderPreviewResponse Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ExternalCertificateOrderPreviewResponse
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $feePrice = str_contains((string)($input->{'feePrice'}), '.') ? (float)($input->{'feePrice'}) : (int)($input->{'feePrice'});
        $recurringPrice = str_contains((string)($input->{'recurringPrice'}), '.') ? (float)($input->{'recurringPrice'}) : (int)($input->{'recurringPrice'});
        $totalPrice = str_contains((string)($input->{'totalPrice'}), '.') ? (float)($input->{'totalPrice'}) : (int)($input->{'totalPrice'});

        $obj = new self($feePrice, $recurringPrice, $totalPrice);

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
        $output['feePrice'] = $this->feePrice;
        $output['recurringPrice'] = $this->recurringPrice;
        $output['totalPrice'] = $this->totalPrice;

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
