<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserResendVerificationEmail;

use InvalidArgumentException;
use JsonSchema\Validator;

class DeprecatedUserResendVerificationEmailRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'email' => [
                'example' => 'ada.lovelace@example.com',
                'format' => 'email',
                'type' => 'string',
            ],
            'userId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
        ],
        'required' => [
            'multiFactorCode',
        ],
        'type' => 'object',
    ];

    private ?string $email = null;

    private ?string $userId = null;

    /**
     *
     */
    public function __construct()
    {
    }

    public function getEmail(): ?string
    {
        return $this->email ?? null;
    }

    public function getUserId(): ?string
    {
        return $this->userId ?? null;
    }

    public function withEmail(string $email): self
    {
        $validator = new Validator();
        $validator->validate($email, self::$schema['properties']['email']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->email = $email;

        return $clone;
    }

    public function withoutEmail(): self
    {
        $clone = clone $this;
        unset($clone->email);

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

    public function withoutUserId(): self
    {
        $clone = clone $this;
        unset($clone->userId);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return DeprecatedUserResendVerificationEmailRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): DeprecatedUserResendVerificationEmailRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $email = null;
        if (isset($input->{'email'})) {
            $email = $input->{'email'};
        }
        $userId = null;
        if (isset($input->{'userId'})) {
            $userId = $input->{'userId'};
        }

        $obj = new self();
        $obj->email = $email;
        $obj->userId = $userId;
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
        if (isset($this->email)) {
            $output['email'] = $this->email;
        }
        if (isset($this->userId)) {
            $output['userId'] = $this->userId;
        }

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
