<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\VerifyEmail;

use InvalidArgumentException;

class VerifyEmailRequest
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
                        'description' => 'The Email-Address to verify.',
                        'example' => 'ada.lovelace@example.com',
                        'format' => 'email',
                        'type' => 'string',
                    ],
                    'token' => [
                        'description' => 'The token found in the verification email.',
                        'example' => '123456',
                        'type' => 'string',
                    ],
                ],
                'required' => [
                    'email',
                ],
                'type' => 'object',
            ],
        ],
        'required' => [
            'body',
        ],
    ];

    /**
     * @var VerifyEmailRequestBody
     */
    private VerifyEmailRequestBody $body;

    private array $headers = [

    ];

    /**
     * @param VerifyEmailRequestBody $body
     */
    public function __construct(VerifyEmailRequestBody $body)
    {
        $this->body = $body;
    }

    /**
     * @return VerifyEmailRequestBody
     */
    public function getBody(): VerifyEmailRequestBody
    {
        return $this->body;
    }

    /**
     * @param VerifyEmailRequestBody $body
     * @return self
     */
    public function withBody(VerifyEmailRequestBody $body): self
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
     * @return VerifyEmailRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): VerifyEmailRequest
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $body = VerifyEmailRequestBody::buildFromInput($input->{'body'}, validate: $validate);

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
        $this->body = clone $this->body;
    }

    public function getUrl(): string
    {
        $mapped = $this->toJson();
        return '/v2/users/self/credentials/email/actions/verify-email';
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
