<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\ChangePassword;

use InvalidArgumentException;
use JsonSchema\Validator;

class ChangePasswordRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'multiFactorCode' => [
                'description' => 'Multi Factor Code to confirm MFA.
This is optional, depending on the MFA activation status of the profile.
',
                'example' => '123456',
                'maxLength' => 16,
                'minLength' => 6,
                'type' => 'string',
            ],
            'newPassword' => [
                'description' => 'The new password.',
                'type' => 'string',
            ],
            'oldPassword' => [
                'description' => 'The old password.',
                'type' => 'string',
            ],
        ],
        'required' => [
            'oldPassword',
            'newPassword',
        ],
        'type' => 'object',
    ];

    /**
     * Multi Factor Code to confirm MFA.
     * This is optional, depending on the MFA activation status of the profile.
     *
     *
     * @var string|null
     */
    private ?string $multiFactorCode = null;

    /**
     * The new password.
     *
     * @var string
     */
    private string $newPassword;

    /**
     * The old password.
     *
     * @var string
     */
    private string $oldPassword;

    /**
     * @param string $newPassword
     * @param string $oldPassword
     */
    public function __construct(string $newPassword, string $oldPassword)
    {
        $this->newPassword = $newPassword;
        $this->oldPassword = $oldPassword;
    }

    /**
     * @return string|null
     */
    public function getMultiFactorCode(): ?string
    {
        return $this->multiFactorCode ?? null;
    }

    /**
     * @return string
     */
    public function getNewPassword(): string
    {
        return $this->newPassword;
    }

    /**
     * @return string
     */
    public function getOldPassword(): string
    {
        return $this->oldPassword;
    }

    /**
     * @param string $multiFactorCode
     * @return self
     */
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

    /**
     * @return self
     */
    public function withoutMultiFactorCode(): self
    {
        $clone = clone $this;
        unset($clone->multiFactorCode);

        return $clone;
    }

    /**
     * @param string $newPassword
     * @return self
     */
    public function withNewPassword(string $newPassword): self
    {
        $validator = new Validator();
        $validator->validate($newPassword, static::$schema['properties']['newPassword']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->newPassword = $newPassword;

        return $clone;
    }

    /**
     * @param string $oldPassword
     * @return self
     */
    public function withOldPassword(string $oldPassword): self
    {
        $validator = new Validator();
        $validator->validate($oldPassword, static::$schema['properties']['oldPassword']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->oldPassword = $oldPassword;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ChangePasswordRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ChangePasswordRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $multiFactorCode = null;
        if (isset($input->{'multiFactorCode'})) {
            $multiFactorCode = $input->{'multiFactorCode'};
        }
        $newPassword = $input->{'newPassword'};
        $oldPassword = $input->{'oldPassword'};

        $obj = new self($newPassword, $oldPassword);
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
        $output['newPassword'] = $this->newPassword;
        $output['oldPassword'] = $this->oldPassword;

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
