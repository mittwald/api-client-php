<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderPreviewTariffChange;

use InvalidArgumentException;

class OrderPreviewTariffChange200ResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'machineTypePrice' => [
                'example' => 100,
                'type' => 'number',
            ],
            'storagePrice' => [
                'example' => 900,
                'type' => 'number',
            ],
            'totalPrice' => [
                'example' => 1000,
                'type' => 'number',
            ],
        ],
        'required' => [
            'totalPrice',
            'storagePrice',
            'machineTypePrice',
        ],
    ];

    /**
     * @var int|float
     */
    private int|float $machineTypePrice;

    /**
     * @var int|float
     */
    private int|float $storagePrice;

    /**
     * @var int|float
     */
    private int|float $totalPrice;

    public \Psr\Http\Message\ResponseInterface|null $httpResponse = null;

    /**
     * @param int|float $machineTypePrice
     * @param int|float $storagePrice
     * @param int|float $totalPrice
     */
    public function __construct(int|float $machineTypePrice, int|float $storagePrice, int|float $totalPrice)
    {
        $this->machineTypePrice = $machineTypePrice;
        $this->storagePrice = $storagePrice;
        $this->totalPrice = $totalPrice;
    }

    /**
     * @return int|float
     */
    public function getMachineTypePrice(): int|float
    {
        return $this->machineTypePrice;
    }

    /**
     * @return int|float
     */
    public function getStoragePrice(): int|float
    {
        return $this->storagePrice;
    }

    /**
     * @return int|float
     */
    public function getTotalPrice(): int|float
    {
        return $this->totalPrice;
    }

    /**
     * @param int|float $machineTypePrice
     * @return self
     */
    public function withMachineTypePrice(int|float $machineTypePrice): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($machineTypePrice, static::$schema['properties']['machineTypePrice']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->machineTypePrice = $machineTypePrice;

        return $clone;
    }

    /**
     * @param int|float $storagePrice
     * @return self
     */
    public function withStoragePrice(int|float $storagePrice): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($storagePrice, static::$schema['properties']['storagePrice']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->storagePrice = $storagePrice;

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
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return OrderPreviewTariffChange200ResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): OrderPreviewTariffChange200ResponseBody
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $machineTypePrice = str_contains($input->{'machineTypePrice'}, '.') ? (float)($input->{'machineTypePrice'}) : (int)($input->{'machineTypePrice'});
        $storagePrice = str_contains($input->{'storagePrice'}, '.') ? (float)($input->{'storagePrice'}) : (int)($input->{'storagePrice'});
        $totalPrice = str_contains($input->{'totalPrice'}, '.') ? (float)($input->{'totalPrice'}) : (int)($input->{'totalPrice'});

        $obj = new self($machineTypePrice, $storagePrice, $totalPrice);

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
        $output['machineTypePrice'] = $this->machineTypePrice;
        $output['storagePrice'] = $this->storagePrice;
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

    public static function fromResponse(\Psr\Http\Message\ResponseInterface $httpResponse): self
    {
        $parsedBody = json_decode($httpResponse->getBody()->getContents(), associative: true);
        $response = static::buildFromInput(['body' => $parsedBody], validate: false);
        $response->httpResponse = $httpResponse;
        return $response;
    }
}
