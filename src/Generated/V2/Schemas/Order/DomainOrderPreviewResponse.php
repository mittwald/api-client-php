<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Order;

use InvalidArgumentException;

class DomainOrderPreviewResponse
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
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
        'type' => 'object',
    ];

    /**
     * @var int|float|null
     */
    private int|float|null $domainPrice = null;

    /**
     * @var int|float|null
     */
    private int|float|null $feePrice = null;

    /**
     * @var int|float|null
     */
    private int|float|null $totalPrice = null;

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return int|float|null
     */
    public function getDomainPrice(): int|float|null
    {
        return $this->domainPrice;
    }

    /**
     * @return int|float|null
     */
    public function getFeePrice(): int|float|null
    {
        return $this->feePrice;
    }

    /**
     * @return int|float|null
     */
    public function getTotalPrice(): int|float|null
    {
        return $this->totalPrice;
    }

    /**
     * @param int|float $domainPrice
     * @return self
     */
    public function withDomainPrice(int|float $domainPrice): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($domainPrice, static::$schema['properties']['domainPrice']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->domainPrice = $domainPrice;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutDomainPrice(): self
    {
        $clone = clone $this;
        unset($clone->domainPrice);

        return $clone;
    }

    /**
     * @param int|float $feePrice
     * @return self
     */
    public function withFeePrice(int|float $feePrice): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($feePrice, static::$schema['properties']['feePrice']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->feePrice = $feePrice;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutFeePrice(): self
    {
        $clone = clone $this;
        unset($clone->feePrice);

        return $clone;
    }

    /**
     * @param int|float $totalPrice
     * @return self
     */
    public function withTotalPrice(int|float $totalPrice): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($totalPrice, static::$schema['properties']['totalPrice']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->totalPrice = $totalPrice;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutTotalPrice(): self
    {
        $clone = clone $this;
        unset($clone->totalPrice);

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
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $domainPrice = null;
        if (isset($input->{'domainPrice'})) {
            $domainPrice = str_contains($input->{'domainPrice'}, '.') ? (float)($input->{'domainPrice'}) : (int)($input->{'domainPrice'});
        }
        $feePrice = null;
        if (isset($input->{'feePrice'})) {
            $feePrice = str_contains($input->{'feePrice'}, '.') ? (float)($input->{'feePrice'}) : (int)($input->{'feePrice'});
        }
        $totalPrice = null;
        if (isset($input->{'totalPrice'})) {
            $totalPrice = str_contains($input->{'totalPrice'}, '.') ? (float)($input->{'totalPrice'}) : (int)($input->{'totalPrice'});
        }

        $obj = new self();
        $obj->domainPrice = $domainPrice;
        $obj->feePrice = $feePrice;
        $obj->totalPrice = $totalPrice;
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
        if (isset($this->domainPrice)) {
            $output['domainPrice'] = $this->domainPrice;
        }
        if (isset($this->feePrice)) {
            $output['feePrice'] = $this->feePrice;
        }
        if (isset($this->totalPrice)) {
            $output['totalPrice'] = $this->totalPrice;
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
        $validator = new \JsonSchema\Validator();
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
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
