<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\AuthenticateWithAccessTokenRetrievalKey;

use InvalidArgumentException;
use JsonSchema\Validator;

class AuthenticateWithAccessTokenRetrievalKeyRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
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

    /**
     * @var string
     */
    private string $accessTokenRetrievalKey;

    /**
     * @var string
     */
    private string $userId;

    /**
     * @param string $accessTokenRetrievalKey
     * @param string $userId
     */
    public function __construct(string $accessTokenRetrievalKey, string $userId)
    {
        $this->accessTokenRetrievalKey = $accessTokenRetrievalKey;
        $this->userId = $userId;
    }

    /**
     * @return string
     */
    public function getAccessTokenRetrievalKey(): string
    {
        return $this->accessTokenRetrievalKey;
    }

    /**
     * @return string
     */
    public function getUserId(): string
    {
        return $this->userId;
    }

    /**
     * @param string $accessTokenRetrievalKey
     * @return self
     */
    public function withAccessTokenRetrievalKey(string $accessTokenRetrievalKey): self
    {
        $validator = new Validator();
        $validator->validate($accessTokenRetrievalKey, static::$schema['properties']['accessTokenRetrievalKey']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->accessTokenRetrievalKey = $accessTokenRetrievalKey;

        return $clone;
    }

    /**
     * @param string $userId
     * @return self
     */
    public function withUserId(string $userId): self
    {
        $validator = new Validator();
        $validator->validate($userId, static::$schema['properties']['userId']);
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
}
