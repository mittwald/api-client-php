<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserEditApiToken;

use InvalidArgumentException;
use JsonSchema\Validator;

class DeprecatedUserEditApiTokenRequest
{
    public const method = 'put';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'type' => 'object',
        'properties' => [
            'apiTokenId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'body' => [
                'properties' => [
                    'description' => [
                        'example' => 'Api Token for ...',
                        'type' => 'string',
                    ],
                    'expiresAt' => [
                        'format' => 'date-time',
                        'type' => 'string',
                    ],
                ],
                'required' => [
                    'description',
                ],
                'type' => 'object',
            ],
        ],
        'required' => [
            'apiTokenId',
            'body',
        ],
    ];

    /**
     * @var string
     */
    private string $apiTokenId;

    /**
     * @var DeprecatedUserEditApiTokenRequestBody
     */
    private DeprecatedUserEditApiTokenRequestBody $body;

    private array $headers = [

    ];

    /**
     * @param string $apiTokenId
     * @param DeprecatedUserEditApiTokenRequestBody $body
     */
    public function __construct(string $apiTokenId, DeprecatedUserEditApiTokenRequestBody $body)
    {
        $this->apiTokenId = $apiTokenId;
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getApiTokenId(): string
    {
        return $this->apiTokenId;
    }

    /**
     * @return DeprecatedUserEditApiTokenRequestBody
     */
    public function getBody(): DeprecatedUserEditApiTokenRequestBody
    {
        return $this->body;
    }

    /**
     * @param string $apiTokenId
     * @return self
     */
    public function withApiTokenId(string $apiTokenId): self
    {
        $validator = new Validator();
        $validator->validate($apiTokenId, static::$schema['properties']['apiTokenId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->apiTokenId = $apiTokenId;

        return $clone;
    }

    /**
     * @param DeprecatedUserEditApiTokenRequestBody $body
     * @return self
     */
    public function withBody(DeprecatedUserEditApiTokenRequestBody $body): self
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
     * @return DeprecatedUserEditApiTokenRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): DeprecatedUserEditApiTokenRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $apiTokenId = $input->{'apiTokenId'};
        $body = DeprecatedUserEditApiTokenRequestBody::buildFromInput($input->{'body'}, validate: $validate);

        $obj = new self($apiTokenId, $body);

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
        $output['apiTokenId'] = $this->apiTokenId;
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
        $apiTokenId = urlencode($mapped['apiTokenId']);
        return '/v2/signup/token/api/' . $apiTokenId;
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
