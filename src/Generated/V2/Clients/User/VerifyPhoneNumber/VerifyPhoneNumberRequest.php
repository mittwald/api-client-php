<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\VerifyPhoneNumber;

use InvalidArgumentException;

class VerifyPhoneNumberRequest
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
            'userId' => [
                'oneOf' => [
                    [
                        'enum' => [
                            'self',
                        ],
                        'type' => 'string',
                    ],
                    [
                        'format' => 'uuid',
                        'type' => 'string',
                    ],
                ],
            ],
            'body' => [
                'properties' => [
                    'code' => [
                        'example' => '123456',
                        'maxLength' => 6,
                        'minLength' => 6,
                        'type' => 'string',
                    ],
                    'phoneNumber' => [
                        'format' => 'phone',
                        'type' => 'string',
                    ],
                ],
                'required' => [
                    'phoneNumber',
                    'code',
                ],
                'type' => 'object',
            ],
        ],
        'required' => [
            'userId',
            'body',
        ],
    ];

    /**
     * @var VerifyPhoneNumberRequestUserIdAlternative1|string
     */
    private VerifyPhoneNumberRequestUserIdAlternative1|string $userId;

    /**
     * @var VerifyPhoneNumberRequestBody
     */
    private VerifyPhoneNumberRequestBody $body;

    private array $headers = [

    ];

    /**
     * @param VerifyPhoneNumberRequestUserIdAlternative1|string $userId
     * @param VerifyPhoneNumberRequestBody $body
     */
    public function __construct(VerifyPhoneNumberRequestUserIdAlternative1|string $userId, VerifyPhoneNumberRequestBody $body)
    {
        $this->userId = $userId;
        $this->body = $body;
    }

    /**
     * @return VerifyPhoneNumberRequestUserIdAlternative1|string
     */
    public function getUserId(): VerifyPhoneNumberRequestUserIdAlternative1|string
    {
        return $this->userId;
    }

    /**
     * @return VerifyPhoneNumberRequestBody
     */
    public function getBody(): VerifyPhoneNumberRequestBody
    {
        return $this->body;
    }

    /**
     * @param VerifyPhoneNumberRequestUserIdAlternative1|string $userId
     * @return self
     */
    public function withUserId(VerifyPhoneNumberRequestUserIdAlternative1|string $userId): self
    {
        $clone = clone $this;
        $clone->userId = $userId;

        return $clone;
    }

    /**
     * @param VerifyPhoneNumberRequestBody $body
     * @return self
     */
    public function withBody(VerifyPhoneNumberRequestBody $body): self
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
     * @return VerifyPhoneNumberRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): VerifyPhoneNumberRequest
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $userId = match (true) {
            VerifyPhoneNumberRequestUserIdAlternative1::tryFrom($input->{'userId'}) !== null => VerifyPhoneNumberRequestUserIdAlternative1::from($input->{'userId'}),
            is_string($input->{'userId'}) => $input->{'userId'},
        };
        $body = VerifyPhoneNumberRequestBody::buildFromInput($input->{'body'}, validate: $validate);

        $obj = new self($userId, $body);

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
        $output['userId'] = match (true) {
            $this->userId instanceof VerifyPhoneNumberRequestUserIdAlternative1 => ($this->userId)->value,
            is_string($this->userId) => $this->userId,
        };
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
        $this->userId = match (true) {
            $this->userId instanceof VerifyPhoneNumberRequestUserIdAlternative1, is_string($this->userId) => $this->userId,
        };
        $this->body = clone $this->body;
    }

    public function getUrl(): string
    {
        $mapped = $this->toJson();
        $userId = urlencode($mapped['userId']);
        return '/v2/users/' . $userId . '/phone/verify';
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
