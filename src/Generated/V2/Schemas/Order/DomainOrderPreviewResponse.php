<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Order;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.order.DomainOrderPreviewResponse.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class DomainOrderPreviewResponse
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'domainContractDuration' => [
                'description' => 'Contract duration in months.',
                'example' => 12,
                'type' => 'number',
            ],
            'domainPrice' => [
                'example' => 800,
                'type' => 'number',
            ],
            'feePrice' => [
                'example' => 100,
                'type' => 'number',
            ],
            'totalPrice' => [
                'example' => 900,
                'type' => 'number',
            ],
        ],
        'required' => [
            'totalPrice',
            'domainPrice',
            'feePrice',
            'domainContractDuration',
        ],
        'type' => 'object',
    ];

    /**
     * Contract duration in months.
     */
    private int|float $domainContractDuration;

    private int|float $domainPrice;

    private int|float $feePrice;

    private int|float $totalPrice;

    /**
     * @param int|float $domainContractDuration
     * @param int|float $domainPrice
     * @param int|float $feePrice
     * @param int|float $totalPrice
     */
    public function __construct(int|float $domainContractDuration, int|float $domainPrice, int|float $feePrice, int|float $totalPrice)
    {
        $this->domainContractDuration = $domainContractDuration;
        $this->domainPrice = $domainPrice;
        $this->feePrice = $feePrice;
        $this->totalPrice = $totalPrice;
    }

    public function getDomainContractDuration(): int|float
    {
        return $this->domainContractDuration;
    }

    public function getDomainPrice(): int|float
    {
        return $this->domainPrice;
    }

    public function getFeePrice(): int|float
    {
        return $this->feePrice;
    }

    public function getTotalPrice(): int|float
    {
        return $this->totalPrice;
    }

    /**
     * @param int|float $domainContractDuration
     */
    public function withDomainContractDuration(int|float $domainContractDuration): self
    {
        $validator = new Validator();
        $validator->validate($domainContractDuration, static::$schema['properties']['domainContractDuration']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->domainContractDuration = $domainContractDuration;

        return $clone;
    }

    /**
     * @param int|float $domainPrice
     */
    public function withDomainPrice(int|float $domainPrice): self
    {
        $validator = new Validator();
        $validator->validate($domainPrice, static::$schema['properties']['domainPrice']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->domainPrice = $domainPrice;

        return $clone;
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
     * @return DomainOrderPreviewResponse Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): DomainOrderPreviewResponse
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $domainContractDuration = str_contains((string)($input->{'domainContractDuration'}), '.') ? (float)($input->{'domainContractDuration'}) : (int)($input->{'domainContractDuration'});
        $domainPrice = str_contains((string)($input->{'domainPrice'}), '.') ? (float)($input->{'domainPrice'}) : (int)($input->{'domainPrice'});
        $feePrice = str_contains((string)($input->{'feePrice'}), '.') ? (float)($input->{'feePrice'}) : (int)($input->{'feePrice'});
        $totalPrice = str_contains((string)($input->{'totalPrice'}), '.') ? (float)($input->{'totalPrice'}) : (int)($input->{'totalPrice'});

        $obj = new self($domainContractDuration, $domainPrice, $feePrice, $totalPrice);

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
        $output['domainContractDuration'] = $this->domainContractDuration;
        $output['domainPrice'] = $this->domainPrice;
        $output['feePrice'] = $this->feePrice;
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
