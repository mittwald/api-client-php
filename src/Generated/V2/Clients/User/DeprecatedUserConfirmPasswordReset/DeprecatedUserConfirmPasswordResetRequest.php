<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserConfirmPasswordReset;

use InvalidArgumentException;

class DeprecatedUserConfirmPasswordResetRequest
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
                    'password' => [
                        'description' => 'The new password.',
                        'type' => 'string',
                    ],
                    'token' => [
                        'description' => 'Password reset token',
                        'maxLength' => 6,
                        'minLength' => 6,
                        'type' => 'string',
                    ],
                    'userId' => [
                        'description' => 'UserId of the user to reset the password for.',
                        'format' => 'uuid',
                        'type' => 'string',
                    ],
                ],
                'required' => [
                    'userId',
                    'token',
                    'password',
                ],
                'type' => 'object',
            ],
        ],
        'required' => [
            'body',
        ],
    ];

    /**
     * @var DeprecatedUserConfirmPasswordResetRequestBody
     */
    private DeprecatedUserConfirmPasswordResetRequestBody $body;

    private array $headers = [

    ];

    /**
     * @param DeprecatedUserConfirmPasswordResetRequestBody $body
     */
    public function __construct(DeprecatedUserConfirmPasswordResetRequestBody $body)
    {
        $this->body = $body;
    }

    /**
     * @return DeprecatedUserConfirmPasswordResetRequestBody
     */
    public function getBody(): DeprecatedUserConfirmPasswordResetRequestBody
    {
        return $this->body;
    }

    /**
     * @param DeprecatedUserConfirmPasswordResetRequestBody $body
     * @return self
     */
    public function withBody(DeprecatedUserConfirmPasswordResetRequestBody $body): self
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
     * @return DeprecatedUserConfirmPasswordResetRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): DeprecatedUserConfirmPasswordResetRequest
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $body = DeprecatedUserConfirmPasswordResetRequestBody::buildFromInput($input->{'body'}, validate: $validate);

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
        return '/v2/signup/password/reset/confirm';
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
