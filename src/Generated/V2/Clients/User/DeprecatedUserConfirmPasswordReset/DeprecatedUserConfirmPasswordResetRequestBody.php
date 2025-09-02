<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserConfirmPasswordReset;

use InvalidArgumentException;
use JsonSchema\Validator;

class DeprecatedUserConfirmPasswordResetRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
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
    ];

    /**
     * The new password.
     */
    private string $password;

    /**
     * Password reset token
     */
    private string $token;

    /**
     * UserId of the user to reset the password for.
     */
    private string $userId;

    public function __construct(string $password, string $token, string $userId)
    {
        $this->password = $password;
        $this->token = $token;
        $this->userId = $userId;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function getUserId(): string
    {
        return $this->userId;
    }

    public function withPassword(string $password): self
    {
        $validator = new Validator();
        $validator->validate($password, self::$internalValidationSchema['properties']['password']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->password = $password;

        return $clone;
    }

    public function withToken(string $token): self
    {
        $validator = new Validator();
        $validator->validate($token, self::$internalValidationSchema['properties']['token']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->token = $token;

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
     * @return DeprecatedUserConfirmPasswordResetRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): DeprecatedUserConfirmPasswordResetRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $password = $input->{'password'};
        $token = $input->{'token'};
        $userId = $input->{'userId'};

        $obj = new self($password, $token, $userId);

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
        $output['password'] = $this->password;
        $output['token'] = $this->token;
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
