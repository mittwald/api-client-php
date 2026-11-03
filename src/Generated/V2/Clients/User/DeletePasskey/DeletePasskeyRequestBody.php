<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\DeletePasskey;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Signup\PasskeyCredential;

class DeletePasskeyRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'multiFactorCode' => [
                'description' => 'A TOTP code or recovery code.',
                'example' => '123456',
                'maxLength' => 16,
                'minLength' => 6,
                'type' => 'string',
            ],
            'passkeyCredential' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.signup.PasskeyCredential',
            ],
        ],
        'type' => 'object',
    ];

    /**
     * A TOTP code or recovery code.
     */
    private ?string $multiFactorCode = null;

    private ?PasskeyCredential $passkeyCredential = null;

    /**
     *
     */
    public function __construct()
    {
    }

    public function getMultiFactorCode(): ?string
    {
        return $this->multiFactorCode ?? null;
    }

    public function getPasskeyCredential(): ?PasskeyCredential
    {
        return $this->passkeyCredential ?? null;
    }

    public function withMultiFactorCode(string $multiFactorCode): self
    {
        $validator = new Validator();
        $validator->validate($multiFactorCode, self::$internalValidationSchema['properties']['multiFactorCode']);
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

    public function withPasskeyCredential(PasskeyCredential $passkeyCredential): self
    {
        $clone = clone $this;
        $clone->passkeyCredential = $passkeyCredential;

        return $clone;
    }

    public function withoutPasskeyCredential(): self
    {
        $clone = clone $this;
        unset($clone->passkeyCredential);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return DeletePasskeyRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): DeletePasskeyRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $multiFactorCode = null;
        if (isset($input->{'multiFactorCode'})) {
            $multiFactorCode = $input->{'multiFactorCode'};
        }
        $passkeyCredential = null;
        if (isset($input->{'passkeyCredential'})) {
            $passkeyCredential = PasskeyCredential::buildFromInput($input->{'passkeyCredential'}, validate: $validate);
        }

        $obj = new self();
        $obj->multiFactorCode = $multiFactorCode;
        $obj->passkeyCredential = $passkeyCredential;
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
        if (isset($this->passkeyCredential)) {
            $output['passkeyCredential'] = $this->passkeyCredential->toJson();
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
