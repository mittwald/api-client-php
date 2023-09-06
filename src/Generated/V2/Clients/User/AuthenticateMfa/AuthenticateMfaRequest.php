<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\AuthenticateMfa;

use InvalidArgumentException;
use JsonSchema\Validator;

class AuthenticateMfaRequest
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
            'body' => [
                'properties' => [
                    'email' => [
                        'description' => 'The email of the user.',
                        'example' => 'a.lovelace@example.com',
                        'format' => 'email',
                        'type' => 'string',
                    ],
                    'multiFactorCode' => [
                        'description' => 'The second factor - otp code or recovery code.',
                        'example' => '123456',
                        'maxLength' => 16,
                        'minLength' => 6,
                        'type' => 'string',
                    ],
                    'password' => [
                        'description' => 'The password of the user.',
                        'type' => 'string',
                    ],
                ],
                'required' => [
                    'multiFactorCode',
                ],
                'type' => 'object',
            ],
        ],
        'required' => [
            'body',
        ],
    ];

    /**
     * @var AuthenticateMfaRequestBody
     */
    private AuthenticateMfaRequestBody $body;

    private array $headers = [

    ];

    /**
     * @param AuthenticateMfaRequestBody $body
     */
    public function __construct(AuthenticateMfaRequestBody $body)
    {
        $this->body = $body;
    }

    /**
     * @return AuthenticateMfaRequestBody
     */
    public function getBody(): AuthenticateMfaRequestBody
    {
        return $this->body;
    }

    /**
     * @param AuthenticateMfaRequestBody $body
     * @return self
     */
    public function withBody(AuthenticateMfaRequestBody $body): self
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
     * @return AuthenticateMfaRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): AuthenticateMfaRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $body = AuthenticateMfaRequestBody::buildFromInput($input->{'body'}, validate: $validate);

        $obj = new self($body);

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
        return '/v2/authenticate-mfa';
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
