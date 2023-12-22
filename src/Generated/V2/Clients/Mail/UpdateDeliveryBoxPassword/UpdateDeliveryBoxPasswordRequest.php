<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateDeliveryBoxPassword;

use InvalidArgumentException;
use JsonSchema\Validator;

class UpdateDeliveryBoxPasswordRequest
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
                    'password' => [
                        'type' => 'string',
                    ],
                ],
                'required' => [
                    'password',
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
     * @var UpdateDeliveryBoxPasswordRequestBody
     */
    private UpdateDeliveryBoxPasswordRequestBody $body;

    private array $headers = [

    ];

    /**
     * @param string $deliveryBoxId
     * @param UpdateDeliveryBoxPasswordRequestBody $body
     */
    public function __construct(string $deliveryBoxId, UpdateDeliveryBoxPasswordRequestBody $body)
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
     * @return UpdateDeliveryBoxPasswordRequestBody
     */
    public function getBody(): UpdateDeliveryBoxPasswordRequestBody
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
     * @param UpdateDeliveryBoxPasswordRequestBody $body
     * @return self
     */
    public function withBody(UpdateDeliveryBoxPasswordRequestBody $body): self
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
     * @return UpdateDeliveryBoxPasswordRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): UpdateDeliveryBoxPasswordRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $deliveryBoxId = $input->{'deliveryBoxId'};
        $body = UpdateDeliveryBoxPasswordRequestBody::buildFromInput($input->{'body'}, validate: $validate);

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

    /**
     * Builds the URL for this request
     *
     * This method is used internally by the client to build the URL for this request.
     * You should not need to call this method directly.
     *
     * @internal
     * @return string The URL for this request
     */
    public function buildUrl(): string
    {
        $mapped = $this->toJson();
        $deliveryBoxId = urlencode($mapped['deliveryBoxId']);
        return '/v2/delivery-boxes/' . $deliveryBoxId . '/password';
    }

    /**
     * Builds the request options for this request
     *
     * This method is used internally by the client to build the Guzzle request options
     * for this request. You should not need to call this method directly.
     *
     * @internal
     * @return array The Guzzle request options for this request
     */
    public function buildRequestOptions(): array
    {
        $mapped = $this->toJson();
        $query = [];
        return [
            'query' => $query,
            'headers' => $this->headers,
            'json' => $this->getBody()->toJson(),
        ];
    }

    /**
     * Adds a header to this request
     *
     * You can use this method to add custom HTTP headers to the request.
     *
     * @param string $name The name of the header to add
     * @param string|array $value The value of the header to add
     * @return self A clone of this request with the header added
     */
    public function withHeader(string $name, string|array $value): self
    {
        $clone = clone $this;
        $clone->headers[$name] = $value;
        return $clone;
    }
}
