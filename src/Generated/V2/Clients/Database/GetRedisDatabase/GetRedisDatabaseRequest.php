<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Database\GetRedisDatabase;

use InvalidArgumentException;
use JsonSchema\Validator;

class GetRedisDatabaseRequest
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
            'redisDatabaseId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
        ],
        'required' => [
            'redisDatabaseId',
        ],
    ];

    /**
     * @var string
     */
    private string $redisDatabaseId;

    private array $headers = [

    ];

    /**
     * @param string $redisDatabaseId
     */
    public function __construct(string $redisDatabaseId)
    {
        $this->redisDatabaseId = $redisDatabaseId;
    }

    /**
     * @return string
     */
    public function getRedisDatabaseId(): string
    {
        return $this->redisDatabaseId;
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
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return GetRedisDatabaseRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): GetRedisDatabaseRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $redisDatabaseId = $input->{'redisDatabaseId'};

        $obj = new self($redisDatabaseId);

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
        $redisDatabaseId = urlencode($mapped['redisDatabaseId']);
        return '/v2/redis-databases/' . $redisDatabaseId;
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
