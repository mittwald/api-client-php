<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\AuthenticateMfa;

class AuthenticateMfaRequestBody
{
    public const method = 'post';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'email' => [
                'description' => 'The email of the user.',
                'example' => 'a.lovelace@example.com',
                'format' => 'email',
                'type' => 'string',
            ],
            'multiFactorCode' => [
                'description' => 'The second factor - otp code or recovery code.',
                'example' => '123456',
                'maxLength' => 16,
                'minLength' => 6,
                'type' => 'string',
            ],
            'password' => [
                'description' => 'The password of the user.',
                'type' => 'string',
            ],
        ],
        'required' => [
            'multiFactorCode',
        ],
        'type' => 'object',
    ];

    /**
     * The email of the user.
     *
     * @var string|null
     */
    private ?string $email = null;

    /**
     * The second factor - otp code or recovery code.
     *
     * @var string
     */
    private string $multiFactorCode;

    /**
     * The password of the user.
     *
     * @var string|null
     */
    private ?string $password = null;

    private array $headers = [
        
    ];

    /**
     * @param string $multiFactorCode
     */
    public function __construct(string $multiFactorCode)
    {
        $this->multiFactorCode = $multiFactorCode;
    }

    /**
     * @return string|null
     */
    public function getEmail() : ?string
    {
        return $this->email ?? null;
    }

    /**
     * @return string
     */
    public function getMultiFactorCode() : string
    {
        return $this->multiFactorCode;
    }

    /**
     * @return string|null
     */
    public function getPassword() : ?string
    {
        return $this->password ?? null;
    }

    /**
     * @param string $email
     * @return self
     */
    public function withEmail(string $email) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($email, static::$schema['properties']['email']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->email = $email;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutEmail() : self
    {
        $clone = clone $this;
        unset($clone->email);

        return $clone;
    }

    /**
     * @param string $multiFactorCode
     * @return self
     */
    public function withMultiFactorCode(string $multiFactorCode) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($multiFactorCode, static::$schema['properties']['multiFactorCode']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->multiFactorCode = $multiFactorCode;

        return $clone;
    }

    /**
     * @param string $password
     * @return self
     */
    public function withPassword(string $password) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($password, static::$schema['properties']['password']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->password = $password;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutPassword() : self
    {
        $clone = clone $this;
        unset($clone->password);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return AuthenticateMfaRequestBody Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : AuthenticateMfaRequestBody
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $email = null;
        if (isset($input->{'email'})) {
            $email = $input->{'email'};
        }
        $multiFactorCode = $input->{'multiFactorCode'};
        $password = null;
        if (isset($input->{'password'})) {
            $password = $input->{'password'};
        }

        $obj = new self($multiFactorCode);
        $obj->email = $email;
        $obj->password = $password;
        return $obj;
    }

    /**
     * Converts this object back to a simple array that can be JSON-serialized
     *
     * @return array Converted array
     */
    public function toJson() : array
    {
        $output = [];
        if (isset($this->email)) {
            $output['email'] = $this->email;
        }
        $output['multiFactorCode'] = $this->multiFactorCode;
        if (isset($this->password)) {
            $output['password'] = $this->password;
        }

        return $output;
    }

    /**
     * Validates an input array
     *
     * @param array|object $input Input data
     * @param bool $return Return instead of throwing errors
     * @return bool Validation result
     * @throws \InvalidArgumentException
     */
    public static function validateInput(array|object $input, bool $return = false) : bool
    {
        $validator = new \JsonSchema\Validator();
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        $validator->validate($input, static::$schema);

        if (!$validator->isValid() && !$return) {
            $errors = array_map(function(array $e): string {
                return $e["property"] . ": " . $e["message"];
            }, $validator->getErrors());
            throw new \InvalidArgumentException(join(", ", $errors));
        }

        return $validator->isValid();
    }

    public function __clone()
    {
    }

    public function getUrl() : string
    {
        $mapped = $this->toJson();
        return '/v2/authenticate-mfa';
    }

    public function getQuery() : array
    {
        $mapped = $this->toJson();
        $query = [];
        return $query;
    }

    public function getHeaders() : array
    {
        return $this->headers;
    }

    public function withHeader(string $name, string|array $value) : self
    {
        $clone = clone $this;
        $clone->headers[$name] = $value;
        return $clone;
    }
}

