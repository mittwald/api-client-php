<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\RemovePhoneNumber;

use InvalidArgumentException;

class RemovePhoneNumberRequest
{
    public const method = 'delete';

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
        ],
        'required' => [
            'userId',
        ],
    ];

    /**
     * @var RemovePhoneNumberRequestUserIdAlternative1|string
     */
    private RemovePhoneNumberRequestUserIdAlternative1|string $userId;

    private array $headers = [

    ];

    /**
     * @param RemovePhoneNumberRequestUserIdAlternative1|string $userId
     */
    public function __construct(RemovePhoneNumberRequestUserIdAlternative1|string $userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return RemovePhoneNumberRequestUserIdAlternative1|string
     */
    public function getUserId(): RemovePhoneNumberRequestUserIdAlternative1|string
    {
        return $this->userId;
    }

    /**
     * @param RemovePhoneNumberRequestUserIdAlternative1|string $userId
     * @return self
     */
    public function withUserId(RemovePhoneNumberRequestUserIdAlternative1|string $userId): self
    {
        $clone = clone $this;
        $clone->userId = $userId;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return RemovePhoneNumberRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): RemovePhoneNumberRequest
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $userId = match (true) {
            RemovePhoneNumberRequestUserIdAlternative1::tryFrom($input->{'userId'}) !== null => RemovePhoneNumberRequestUserIdAlternative1::from($input->{'userId'}),
            is_string($input->{'userId'}) => $input->{'userId'},
        };

        $obj = new self($userId);

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
            $this->userId instanceof RemovePhoneNumberRequestUserIdAlternative1 => ($this->userId)->value,
            is_string($this->userId) => $this->userId,
        };

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
            $this->userId instanceof RemovePhoneNumberRequestUserIdAlternative1, is_string($this->userId) => $this->userId,
        };
    }

    public function getUrl(): string
    {
        $mapped = $this->toJson();
        $userId = urlencode($mapped['userId']);
        return '/v2/users/' . $userId . '/phone';
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
