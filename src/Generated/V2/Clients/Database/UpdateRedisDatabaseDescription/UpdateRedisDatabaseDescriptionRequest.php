<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Database\UpdateRedisDatabaseDescription;

use InvalidArgumentException;
use JsonSchema\Validator;

class UpdateRedisDatabaseDescriptionRequest
{
    public const method = 'patch';

    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'type' => 'object',
        'properties' => [
            'redisDatabaseId' => [
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
            'redisDatabaseId',
            'body',
        ],
    ];

    private string $redisDatabaseId;

    private UpdateRedisDatabaseDescriptionRequestBody $body;

    private array $headers = [

    ];

    public function __construct(string $redisDatabaseId, UpdateRedisDatabaseDescriptionRequestBody $body)
    {
        $this->redisDatabaseId = $redisDatabaseId;
        $this->body = $body;
    }

    public function getRedisDatabaseId(): string
    {
        return $this->redisDatabaseId;
    }

    public function getBody(): UpdateRedisDatabaseDescriptionRequestBody
    {
        return $this->body;
    }

    public function withRedisDatabaseId(string $redisDatabaseId): self
    {
        $validator = new Validator();
        $validator->validate($redisDatabaseId, self::$internalValidationSchema['properties']['redisDatabaseId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->redisDatabaseId = $redisDatabaseId;

        return $clone;
    }

    public function withBody(UpdateRedisDatabaseDescriptionRequestBody $body): self
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
     * @return UpdateRedisDatabaseDescriptionRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): UpdateRedisDatabaseDescriptionRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $redisDatabaseId = $input->{'redisDatabaseId'};
        $body = UpdateRedisDatabaseDescriptionRequestBody::buildFromInput($input->{'body'}, validate: $validate);

        $obj = new self($redisDatabaseId, $body);

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
        $output['redisDatabaseId'] = $this->redisDatabaseId;
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
        $redisDatabaseId = urlencode($mapped['redisDatabaseId']);
        return '/v2/redis-databases/' . $redisDatabaseId . '/description';
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
