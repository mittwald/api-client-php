<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\GetCurrentSessionStatus;

use InvalidArgumentException;
use JsonSchema\Validator;

class GetCurrentSessionStatusOKResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'isEmployee' => [
                'description' => 'Whether the executing user is an employee.',
                'type' => 'boolean',
            ],
            'isImpersonated' => [
                'description' => 'Whether the current session is an impersonation.',
                'type' => 'boolean',
            ],
            'tokenId' => [
                'description' => 'The ID of the token currently in use.',
                'format' => 'uuid',
                'type' => 'string',
            ],
            'userId' => [
                'description' => 'ID of the executing user.',
                'format' => 'uuid',
                'type' => 'string',
            ],
        ],
        'required' => [
            'userId',
            'tokenId',
            'isImpersonated',
            'isEmployee',
        ],
        'type' => 'object',
    ];

    /**
     * Whether the executing user is an employee.
     */
    private bool $isEmployee;

    /**
     * Whether the current session is an impersonation.
     */
    private bool $isImpersonated;

    /**
     * The ID of the token currently in use.
     */
    private string $tokenId;

    /**
     * ID of the executing user.
     */
    private string $userId;

    public function __construct(bool $isEmployee, bool $isImpersonated, string $tokenId, string $userId)
    {
        $this->isEmployee = $isEmployee;
        $this->isImpersonated = $isImpersonated;
        $this->tokenId = $tokenId;
        $this->userId = $userId;
    }

    public function getIsEmployee(): bool
    {
        return $this->isEmployee;
    }

    public function getIsImpersonated(): bool
    {
        return $this->isImpersonated;
    }

    public function getTokenId(): string
    {
        return $this->tokenId;
    }

    public function getUserId(): string
    {
        return $this->userId;
    }

    public function withIsEmployee(bool $isEmployee): self
    {
        $validator = new Validator();
        $validator->validate($isEmployee, self::$internalValidationSchema['properties']['isEmployee']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->isEmployee = $isEmployee;

        return $clone;
    }

    public function withIsImpersonated(bool $isImpersonated): self
    {
        $validator = new Validator();
        $validator->validate($isImpersonated, self::$internalValidationSchema['properties']['isImpersonated']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->isImpersonated = $isImpersonated;

        return $clone;
    }

    public function withTokenId(string $tokenId): self
    {
        $validator = new Validator();
        $validator->validate($tokenId, self::$internalValidationSchema['properties']['tokenId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->tokenId = $tokenId;

        return $clone;
    }

    public function withUserId(string $userId): self
    {
        $validator = new Validator();
        $validator->validate($userId, self::$internalValidationSchema['properties']['userId']);
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
     * @return GetCurrentSessionStatusOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): GetCurrentSessionStatusOKResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $isEmployee = (bool)($input->{'isEmployee'});
        $isImpersonated = (bool)($input->{'isImpersonated'});
        $tokenId = $input->{'tokenId'};
        $userId = $input->{'userId'};

        $obj = new self($isEmployee, $isImpersonated, $tokenId, $userId);

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
        $output['isEmployee'] = $this->isEmployee;
        $output['isImpersonated'] = $this->isImpersonated;
        $output['tokenId'] = $this->tokenId;
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
        $validator->validate($input, self::$internalValidationSchema);

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
