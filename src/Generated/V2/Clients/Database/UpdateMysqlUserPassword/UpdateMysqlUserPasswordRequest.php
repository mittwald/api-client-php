<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Database\UpdateMysqlUserPassword;

use InvalidArgumentException;
use JsonSchema\Validator;

class UpdateMysqlUserPasswordRequest
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
            'mysqlUserId' => [
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
            'mysqlUserId',
            'body',
        ],
    ];

    /**
     * @var string
     */
    private string $mysqlUserId;

    /**
     * @var UpdateMysqlUserPasswordRequestBody
     */
    private UpdateMysqlUserPasswordRequestBody $body;

    private array $headers = [

    ];

    /**
     * @param string $mysqlUserId
     * @param UpdateMysqlUserPasswordRequestBody $body
     */
    public function __construct(string $mysqlUserId, UpdateMysqlUserPasswordRequestBody $body)
    {
        $this->mysqlUserId = $mysqlUserId;
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getMysqlUserId(): string
    {
        return $this->mysqlUserId;
    }

    /**
     * @return UpdateMysqlUserPasswordRequestBody
     */
    public function getBody(): UpdateMysqlUserPasswordRequestBody
    {
        return $this->body;
    }

    /**
     * @param string $mysqlUserId
     * @return self
     */
    public function withMysqlUserId(string $mysqlUserId): self
    {
        $validator = new Validator();
        $validator->validate($mysqlUserId, static::$schema['properties']['mysqlUserId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->mysqlUserId = $mysqlUserId;

        return $clone;
    }

    /**
     * @param UpdateMysqlUserPasswordRequestBody $body
     * @return self
     */
    public function withBody(UpdateMysqlUserPasswordRequestBody $body): self
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
     * @return UpdateMysqlUserPasswordRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): UpdateMysqlUserPasswordRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $mysqlUserId = $input->{'mysqlUserId'};
        $body = UpdateMysqlUserPasswordRequestBody::buildFromInput($input->{'body'}, validate: $validate);

        $obj = new self($mysqlUserId, $body);

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
        $output['mysqlUserId'] = $this->mysqlUserId;
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
        $mysqlUserId = urlencode($mapped['mysqlUserId']);
        return '/v2/mysql-users/' . $mysqlUserId . '/password';
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
