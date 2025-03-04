<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\AuthenticateWithAccessTokenRetrievalKey;

use InvalidArgumentException;
use JsonSchema\Validator;

class AuthenticateWithAccessTokenRetrievalKeyRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'accessTokenRetrievalKey' => [
                'maxLength' => 37,
                'minLength' => 37,
                'type' => 'string',
            ],
            'userId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
        ],
        'required' => [
            'userId',
            'accessTokenRetrievalKey',
        ],
        'type' => 'object',
    ];

    private string $accessTokenRetrievalKey;

    private string $userId;

    public function __construct(string $accessTokenRetrievalKey, string $userId)
    {
        $this->accessTokenRetrievalKey = $accessTokenRetrievalKey;
        $this->userId = $userId;
    }

    public function getAccessTokenRetrievalKey(): string
    {
        return $this->accessTokenRetrievalKey;
    }

    public function getUserId(): string
    {
        return $this->userId;
    }

    public function withAccessTokenRetrievalKey(string $accessTokenRetrievalKey): self
    {
        $validator = new Validator();
        $validator->validate($accessTokenRetrievalKey, self::$schema['properties']['accessTokenRetrievalKey']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->accessTokenRetrievalKey = $accessTokenRetrievalKey;

        return $clone;
    }

    public function withUserId(string $userId): self
    {
        $validator = new Validator();
        $validator->validate($userId, self::$schema['properties']['userId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->userId = $userId;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return AuthenticateWithAccessTokenRetrievalKeyRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): AuthenticateWithAccessTokenRetrievalKeyRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $accessTokenRetrievalKey = $input->{'accessTokenRetrievalKey'};
        $userId = $input->{'userId'};

        $obj = new self($accessTokenRetrievalKey, $userId);

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
        $output['accessTokenRetrievalKey'] = $this->accessTokenRetrievalKey;
        $output['userId'] = $this->userId;

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
        $validator = new \Mittwald\ApiClient\Validator\Validator();
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        $validator->validate($input, self::$schema);

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
}
