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
     *
     * @var array
     */
    private static array $schema = [
        'type' => 'object',
        'properties' => [
            'redisDatabaseId' => [
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
            'redisDatabaseId',
            'body',
        ],
    ];

    /**
     * @var string
     */
    private string $redisDatabaseId;

    /**
     * @var UpdateRedisDatabaseDescriptionRequestBody
     */
    private UpdateRedisDatabaseDescriptionRequestBody $body;

    private array $headers = [

    ];

    /**
     * @param string $redisDatabaseId
     * @param UpdateRedisDatabaseDescriptionRequestBody $body
     */
    public function __construct(string $redisDatabaseId, UpdateRedisDatabaseDescriptionRequestBody $body)
    {
        $this->redisDatabaseId = $redisDatabaseId;
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getRedisDatabaseId(): string
    {
        return $this->redisDatabaseId;
    }

    /**
     * @return UpdateRedisDatabaseDescriptionRequestBody
     */
    public function getBody(): UpdateRedisDatabaseDescriptionRequestBody
    {
        return $this->body;
    }

    /**
     * @param string $redisDatabaseId
     * @return self
     */
    public function withRedisDatabaseId(string $redisDatabaseId): self
    {
        $validator = new Validator();
        $validator->validate($redisDatabaseId, static::$schema['properties']['redisDatabaseId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->redisDatabaseId = $redisDatabaseId;

        return $clone;
    }

    /**
     * @param UpdateRedisDatabaseDescriptionRequestBody $body
     * @return self
     */
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
        $redisDatabaseId = urlencode($mapped['redisDatabaseId']);
        return '/v2/redis-databases/' . $redisDatabaseId . '/description';
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
