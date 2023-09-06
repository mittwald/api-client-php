<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\AddPhoneNumber;

use InvalidArgumentException;
use JsonSchema\Validator;

class AddPhoneNumberRequest
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
                    'phoneNumber' => [
                        'format' => 'phone',
                        'type' => 'string',
                    ],
                ],
                'required' => [
                    'phoneNumber',
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
     * @var AddPhoneNumberRequestUserIdAlternative1|string
     */
    private AddPhoneNumberRequestUserIdAlternative1|string $userId;

    /**
     * @var AddPhoneNumberRequestBody
     */
    private AddPhoneNumberRequestBody $body;

    private array $headers = [

    ];

    /**
     * @param AddPhoneNumberRequestUserIdAlternative1|string $userId
     * @param AddPhoneNumberRequestBody $body
     */
    public function __construct(AddPhoneNumberRequestUserIdAlternative1|string $userId, AddPhoneNumberRequestBody $body)
    {
        $this->userId = $userId;
        $this->body = $body;
    }

    /**
     * @return AddPhoneNumberRequestUserIdAlternative1|string
     */
    public function getUserId(): AddPhoneNumberRequestUserIdAlternative1|string
    {
        return $this->userId;
    }

    /**
     * @return AddPhoneNumberRequestBody
     */
    public function getBody(): AddPhoneNumberRequestBody
    {
        return $this->body;
    }

    /**
     * @param AddPhoneNumberRequestUserIdAlternative1|string $userId
     * @return self
     */
    public function withUserId(AddPhoneNumberRequestUserIdAlternative1|string $userId): self
    {
        $clone = clone $this;
        $clone->userId = $userId;

        return $clone;
    }

    /**
     * @param AddPhoneNumberRequestBody $body
     * @return self
     */
    public function withBody(AddPhoneNumberRequestBody $body): self
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
     * @return AddPhoneNumberRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): AddPhoneNumberRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $userId = match (true) {
            AddPhoneNumberRequestUserIdAlternative1::tryFrom($input->{'userId'}) !== null => AddPhoneNumberRequestUserIdAlternative1::from($input->{'userId'}),
            is_string($input->{'userId'}) => $input->{'userId'},
        };
        $body = AddPhoneNumberRequestBody::buildFromInput($input->{'body'}, validate: $validate);

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
            $this->userId instanceof AddPhoneNumberRequestUserIdAlternative1 => ($this->userId)->value,
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
        $this->userId = match (true) {
            $this->userId instanceof AddPhoneNumberRequestUserIdAlternative1, is_string($this->userId) => $this->userId,
        };
        $this->body = clone $this->body;
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
