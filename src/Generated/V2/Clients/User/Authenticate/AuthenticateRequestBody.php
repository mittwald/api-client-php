<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\Authenticate;

use InvalidArgumentException;
use JsonSchema\Validator;

class AuthenticateRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'captchaToken' => [
                'description' => 'The response token of a solved captcha challenge, as issued by the captcha widget of the login
form. A missing, unsolved or already used token is rejected with `CaptchaVerificationFailed` (400).
',
                'maxLength' => 2048,
                'minLength' => 1,
                'type' => 'string',
            ],
            'email' => [
                'description' => 'The users Email-Address.',
                'example' => 'a.lovelace@example.com',
                'type' => 'string',
            ],
            'password' => [
                'description' => 'Password of the User.',
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
     * The response token of a solved captcha challenge, as issued by the captcha widget of the login
     * form. A missing, unsolved or already used token is rejected with `CaptchaVerificationFailed` (400).
     */
    private ?string $captchaToken = null;

    /**
     * The users Email-Address.
     */
    private string $email;

    /**
     * Password of the User.
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
     * @return AuthenticateRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): AuthenticateRequestBody
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
        $password = $input->{'password'};

        $obj = new self($email, $password);
        $obj->captchaToken = $captchaToken;
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
