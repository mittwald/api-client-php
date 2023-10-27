<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateDeliveryBoxDescription;

use InvalidArgumentException;
use JsonSchema\Validator;

class UpdateDeliveryBoxDescriptionRequest
{
    public const method = 'patch';

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
            'body' => [
                'properties' => [
                    'description' => [
                        'type' => 'string',
                    ],
                ],
                'required' => [
                    'description',
                ],
            ],
        ],
        'required' => [
            'deliveryBoxId',
            'body',
        ],
    ];

    /**
     * @var string
     */
    private string $deliveryBoxId;

    /**
     * @var UpdateDeliveryBoxDescriptionRequestBody
     */
    private UpdateDeliveryBoxDescriptionRequestBody $body;

    private array $headers = [

    ];

    /**
     * @param string $deliveryBoxId
     * @param UpdateDeliveryBoxDescriptionRequestBody $body
     */
    public function __construct(string $deliveryBoxId, UpdateDeliveryBoxDescriptionRequestBody $body)
    {
        $this->deliveryBoxId = $deliveryBoxId;
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getDeliveryBoxId(): string
    {
        return $this->deliveryBoxId;
    }

    /**
     * @return UpdateDeliveryBoxDescriptionRequestBody
     */
    public function getBody(): UpdateDeliveryBoxDescriptionRequestBody
    {
        return $this->body;
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
     * @param UpdateDeliveryBoxDescriptionRequestBody $body
     * @return self
     */
    public function withBody(UpdateDeliveryBoxDescriptionRequestBody $body): self
    {
        $clone = clone $this;
        $clone->body = $body;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return UpdateDeliveryBoxDescriptionRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): UpdateDeliveryBoxDescriptionRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $deliveryBoxId = $input->{'deliveryBoxId'};
        $body = UpdateDeliveryBoxDescriptionRequestBody::buildFromInput($input->{'body'}, validate: $validate);

        $obj = new self($deliveryBoxId, $body);

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
        $output['body'] = ($this->body)->toJson();

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
        $this->body = clone $this->body;
    }

    public function getUrl(): string
    {
        $mapped = $this->toJson();
        $deliveryBoxId = urlencode($mapped['deliveryBoxId']);
        return '/v2/delivery-boxes/' . $deliveryBoxId . '/description';
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