<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\AuthenticateMfa;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Signup\PasskeyCredential;

class AuthenticateMfaRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'captchaToken' => [
                'description' => 'The response token of a solved captcha challenge. Not needed for a short while after a
`POST /authenticate` that answered `202`; otherwise a missing, unsolved or already used token is
rejected with `CaptchaVerificationFailed` (400).
',
                'maxLength' => 2048,
                'minLength' => 1,
                'type' => 'string',
            ],
            'email' => [
                'description' => 'The email of the user.',
                'example' => 'a.lovelace@example.com',
                'format' => 'email',
                'type' => 'string',
            ],
            'multiFactorCode' => [
                'description' => 'The second factor - otp code, recovery code or the confirmation code mailed at login.',
                'example' => '123456',
                'maxLength' => 16,
                'minLength' => 6,
                'type' => 'string',
            ],
            'passkeyCredential' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.signup.PasskeyCredential',
            ],
            'password' => [
                'description' => 'The password of the user.',
                'type' => 'string',
            ],
        ],
        'required' => [
            'email',
            'password',
        ],
        'type' => 'object',
    ];

    /**
     * The response token of a solved captcha challenge. Not needed for a short while after a
     * `POST /authenticate` that answered `202`; otherwise a missing, unsolved or already used token is
     * rejected with `CaptchaVerificationFailed` (400).
     */
    private ?string $captchaToken = null;

    /**
     * The email of the user.
     */
    private string $email;

    /**
     * The second factor - otp code, recovery code or the confirmation code mailed at login.
     */
    private ?string $multiFactorCode = null;

    private ?PasskeyCredential $passkeyCredential = null;

    /**
     * The password of the user.
     */
    private string $password;

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function getCaptchaToken(): ?string
    {
        return $this->captchaToken ?? null;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getMultiFactorCode(): ?string
    {
        return $this->multiFactorCode ?? null;
    }

    public function getPasskeyCredential(): ?PasskeyCredential
    {
        return $this->passkeyCredential ?? null;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function withCaptchaToken(string $captchaToken): self
    {
        $validator = new Validator();
        $validator->validate($captchaToken, self::$internalValidationSchema['properties']['captchaToken']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->captchaToken = $captchaToken;

        return $clone;
    }

    public function withoutCaptchaToken(): self
    {
        $clone = clone $this;
        unset($clone->captchaToken);

        return $clone;
    }

    public function withEmail(string $email): self
    {
        $validator = new Validator();
        $validator->validate($email, self::$internalValidationSchema['properties']['email']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->email = $email;

        return $clone;
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

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return AuthenticateMfaRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): AuthenticateMfaRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $captchaToken = null;
        if (isset($input->{'captchaToken'})) {
            $captchaToken = $input->{'captchaToken'};
        }
        $email = $input->{'email'};
        $multiFactorCode = null;
        if (isset($input->{'multiFactorCode'})) {
            $multiFactorCode = $input->{'multiFactorCode'};
        }
        $passkeyCredential = null;
        if (isset($input->{'passkeyCredential'})) {
            $passkeyCredential = PasskeyCredential::buildFromInput($input->{'passkeyCredential'}, validate: $validate);
        }
        $password = $input->{'password'};

        $obj = new self($email, $password);
        $obj->captchaToken = $captchaToken;
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
        if (isset($this->captchaToken)) {
            $output['captchaToken'] = $this->captchaToken;
        }
        $output['email'] = $this->email;
        if (isset($this->multiFactorCode)) {
            $output['multiFactorCode'] = $this->multiFactorCode;
        }
        if (isset($this->passkeyCredential)) {
            $output['passkeyCredential'] = $this->passkeyCredential->toJson();
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
