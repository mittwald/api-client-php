<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Database\CreateMysqlUser;

use InvalidArgumentException;

class CreateMysqlUserRequest
{
    public const method = 'post';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'type' => 'object',
        'properties' => [
            'databaseId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'body' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.database.CreateMySqlUser',
            ],
        ],
        'required' => [
            'databaseId',
            'body',
        ],
    ];

    /**
     * @var string
     */
    private string $databaseId;

    /**
     * @var \Mittwald\ApiClient\Generated\V2\Schemas\Database\CreateMySqlUser
     */
    private \Mittwald\ApiClient\Generated\V2\Schemas\Database\CreateMySqlUser $body;

    private array $headers = [

    ];

    /**
     * @param string $databaseId
     * @param \Mittwald\ApiClient\Generated\V2\Schemas\Database\CreateMySqlUser $body
     */
    public function __construct(string $databaseId, \Mittwald\ApiClient\Generated\V2\Schemas\Database\CreateMySqlUser $body)
    {
        $this->databaseId = $databaseId;
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getDatabaseId(): string
    {
        return $this->databaseId;
    }

    /**
     * @return \Mittwald\ApiClient\Generated\V2\Schemas\Database\CreateMySqlUser
     */
    public function getBody(): \Mittwald\ApiClient\Generated\V2\Schemas\Database\CreateMySqlUser
    {
        return $this->body;
    }

    /**
     * @param string $databaseId
     * @return self
     */
    public function withDatabaseId(string $databaseId): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($databaseId, static::$schema['properties']['databaseId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->databaseId = $databaseId;

        return $clone;
    }

    /**
     * @param \Mittwald\ApiClient\Generated\V2\Schemas\Database\CreateMySqlUser $body
     * @return self
     */
    public function withBody(\Mittwald\ApiClient\Generated\V2\Schemas\Database\CreateMySqlUser $body): self
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
     * @return CreateMysqlUserRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CreateMysqlUserRequest
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $databaseId = $input->{'databaseId'};
        $body = \Mittwald\ApiClient\Generated\V2\Schemas\Database\CreateMySqlUser::buildFromInput($input->{'body'}, validate: $validate);

        $obj = new self($databaseId, $body);

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
        $output['databaseId'] = $this->databaseId;
        $output['body'] = $this->body->toJson();

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

    public function getUrl(): string
    {
        $mapped = $this->toJson();
        $databaseId = urlencode($mapped['databaseId']);
        return '/v2/mysql-databases/' . $databaseId . '/users';
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
