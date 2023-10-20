<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Mail\GetDeliveryBox;

use InvalidArgumentException;
use JsonSchema\Validator;

class GetDeliveryBoxRequest
{
    public const method = 'get';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'type' => 'object',
        'properties' => [
            'deliveryBoxId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
        ],
        'required' => [
            'deliveryBoxId',
        ],
    ];

    /**
     * @var string
     */
    private string $deliveryBoxId;

    private array $headers = [

    ];

    /**
     * @param string $deliveryBoxId
     */
    public function __construct(string $deliveryBoxId)
    {
        $this->deliveryBoxId = $deliveryBoxId;
    }

    /**
     * @return string
     */
    public function getDeliveryBoxId(): string
    {
        return $this->deliveryBoxId;
    }

    /**
     * @param string $deliveryBoxId
     * @return self
     */
    public function withDeliveryBoxId(string $deliveryBoxId): self
    {
        $validator = new Validator();
        $validator->validate($deliveryBoxId, static::$schema['properties']['deliveryBoxId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->deliveryBoxId = $deliveryBoxId;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return GetDeliveryBoxRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): GetDeliveryBoxRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $deliveryBoxId = $input->{'deliveryBoxId'};

        $obj = new self($deliveryBoxId);

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
        $output['deliveryBoxId'] = $this->deliveryBoxId;

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

    public function getUrl(): string
    {
        $mapped = $this->toJson();
        $deliveryBoxId = urlencode($mapped['deliveryBoxId']);
        return '/v2/delivery-boxes/' . $deliveryBoxId;
    }

    public function getQuery(): array
    {
        $mapped = $this->toJson();
        $query = [];
        return $query;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function withHeader(string $name, string|array $value): self
    {
        $clone = clone $this;
        $clone->headers[$name] = $value;
        return $clone;
    }
}
