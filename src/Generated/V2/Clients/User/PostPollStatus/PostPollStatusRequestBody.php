<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\PostPollStatus;

use InvalidArgumentException;
use JsonSchema\Validator;

class PostPollStatusRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'status' => [
                'enum' => [
                    'completed',
                    'muted',
                    'ignored',
                ],
                'type' => 'string',
            ],
            'userId' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'userId',
            'status',
        ],
        'type' => 'object',
    ];

    private PostPollStatusRequestBodyStatus $status;

    private string $userId;

    public function __construct(PostPollStatusRequestBodyStatus $status, string $userId)
    {
        $this->status = $status;
        $this->userId = $userId;
    }

    public function getStatus(): PostPollStatusRequestBodyStatus
    {
        return $this->status;
    }

    public function getUserId(): string
    {
        return $this->userId;
    }

    public function withStatus(PostPollStatusRequestBodyStatus $status): self
    {
        $clone = clone $this;
        $clone->status = $status;

        return $clone;
    }

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
     * @return PostPollStatusRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): PostPollStatusRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $status = PostPollStatusRequestBodyStatus::from($input->{'status'});
        $userId = $input->{'userId'};

        $obj = new self($status, $userId);

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
        $output['status'] = ($this->status)->value;
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
