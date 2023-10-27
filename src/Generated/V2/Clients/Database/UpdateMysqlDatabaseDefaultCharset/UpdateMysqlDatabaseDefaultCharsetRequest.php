<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Database\UpdateMysqlDatabaseDefaultCharset;

use InvalidArgumentException;
use JsonSchema\Validator;

class UpdateMysqlDatabaseDefaultCharsetRequest
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
            'mysqlDatabaseId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'body' => [
                'properties' => [
                    'characterSettings' => [
                        '$ref' => '#/components/schemas/de.mittwald.v1.database.characterSettings',
                    ],
                ],
                'required' => [
                    'characterSettings',
                ],
            ],
        ],
        'required' => [
            'mysqlDatabaseId',
            'body',
        ],
    ];

    /**
     * @var string
     */
    private string $mysqlDatabaseId;

    /**
     * @var UpdateMysqlDatabaseDefaultCharsetRequestBody
     */
    private UpdateMysqlDatabaseDefaultCharsetRequestBody $body;

    private array $headers = [

    ];

    /**
     * @param string $mysqlDatabaseId
     * @param UpdateMysqlDatabaseDefaultCharsetRequestBody $body
     */
    public function __construct(string $mysqlDatabaseId, UpdateMysqlDatabaseDefaultCharsetRequestBody $body)
    {
        $this->mysqlDatabaseId = $mysqlDatabaseId;
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getMysqlDatabaseId(): string
    {
        return $this->mysqlDatabaseId;
    }

    /**
     * @return UpdateMysqlDatabaseDefaultCharsetRequestBody
     */
    public function getBody(): UpdateMysqlDatabaseDefaultCharsetRequestBody
    {
        return $this->body;
    }

    /**
     * @param string $mysqlDatabaseId
     * @return self
     */
    public function withMysqlDatabaseId(string $mysqlDatabaseId): self
    {
        $validator = new Validator();
        $validator->validate($mysqlDatabaseId, static::$schema['properties']['mysqlDatabaseId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->mysqlDatabaseId = $mysqlDatabaseId;

        return $clone;
    }

    /**
     * @param UpdateMysqlDatabaseDefaultCharsetRequestBody $body
     * @return self
     */
    public function withBody(UpdateMysqlDatabaseDefaultCharsetRequestBody $body): self
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
     * @return UpdateMysqlDatabaseDefaultCharsetRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): UpdateMysqlDatabaseDefaultCharsetRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $mysqlDatabaseId = $input->{'mysqlDatabaseId'};
        $body = UpdateMysqlDatabaseDefaultCharsetRequestBody::buildFromInput($input->{'body'}, validate: $validate);

        $obj = new self($mysqlDatabaseId, $body);

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
        $output['mysqlDatabaseId'] = $this->mysqlDatabaseId;
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
        $mysqlDatabaseId = urlencode($mapped['mysqlDatabaseId']);
        return '/v2/mysql-databases/' . $mysqlDatabaseId . '/default-charset';
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
