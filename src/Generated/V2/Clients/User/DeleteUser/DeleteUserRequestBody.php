<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\DeleteUser;

use InvalidArgumentException;
use JsonSchema\Validator;

class DeleteUserRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'multiFactorCode' => [
                'description' => 'Multi Factor Code to authorize your request.',
                'example' => '123456',
                'maxLength' => 16,
                'minLength' => 6,
                'type' => 'string',
            ],
            'password' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'password',
        ],
        'type' => 'object',
    ];

    /**
     * Multi Factor Code to authorize your request.
     */
    private ?string $multiFactorCode = null;

    private string $password;

    public function __construct(string $password)
    {
        $this->password = $password;
    }

    public function getMultiFactorCode(): ?string
    {
        return $this->multiFactorCode ?? null;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function withMultiFactorCode(string $multiFactorCode): self
    {
        $validator = new Validator();
        $validator->validate($multiFactorCode, static::$schema['properties']['multiFactorCode']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->multiFactorCode = $multiFactorCode;

        return $clone;
    }

    public function withoutMultiFactorCode(): self
    {
        $clone = clone $this;
        unset($clone->multiFactorCode);

        return $clone;
    }

    public function withPassword(string $password): self
    {
        $validator = new Validator();
        $validator->validate($password, static::$schema['properties']['password']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->password = $password;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return DeleteUserRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): DeleteUserRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $multiFactorCode = null;
        if (isset($input->{'multiFactorCode'})) {
            $multiFactorCode = $input->{'multiFactorCode'};
        }
        $password = $input->{'password'};

        $obj = new self($password);
        $obj->multiFactorCode = $multiFactorCode;
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
        if (isset($this->multiFactorCode)) {
            $output['multiFactorCode'] = $this->multiFactorCode;
        }
        $output['password'] = $this->password;

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
