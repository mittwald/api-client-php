<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\GetUser;

use InvalidArgumentException;

class GetUserRequest
{
    public const method = 'get';

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
     * @var GetUserRequestUserIdAlternative1|string
     */
    private GetUserRequestUserIdAlternative1|string $userId;

    private array $headers = [

    ];

    /**
     * @param GetUserRequestUserIdAlternative1|string $userId
     */
    public function __construct(GetUserRequestUserIdAlternative1|string $userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return GetUserRequestUserIdAlternative1|string
     */
    public function getUserId(): GetUserRequestUserIdAlternative1|string
    {
        return $this->userId;
    }

    /**
     * @param GetUserRequestUserIdAlternative1|string $userId
     * @return self
     */
    public function withUserId(GetUserRequestUserIdAlternative1|string $userId): self
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
     * @return GetUserRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): GetUserRequest
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $userId = match (true) {
            GetUserRequestUserIdAlternative1::tryFrom($input->{'userId'}) !== null => GetUserRequestUserIdAlternative1::from($input->{'userId'}),
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
            $this->userId instanceof GetUserRequestUserIdAlternative1 => ($this->userId)->value,
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
            $this->userId instanceof GetUserRequestUserIdAlternative1, is_string($this->userId) => $this->userId,
        };
    }

    public function getUrl(): string
    {
        $mapped = $this->toJson();
        $userId = urlencode($mapped['userId']);
        return '/v2/users/' . $userId;
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
