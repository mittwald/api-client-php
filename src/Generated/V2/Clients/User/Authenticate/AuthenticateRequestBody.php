<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\Authenticate;

use InvalidArgumentException;

class AuthenticateRequestBody
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
     * The users Email-Address.
     *
     * @var string
     */
    private string $email;

    /**
     * Password of the User.
     *
     * @var string
     */
    private string $password;

    private array $headers = [

    ];

    /**
     * @param string $email
     * @param string $password
     */
    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $email
     * @return self
     */
    public function withEmail(string $email): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($email, static::$schema['properties']['email']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->email = $email;

        return $clone;
    }

    /**
     * @param string $password
     * @return self
     */
    public function withPassword(string $password): self
    {
        $validator = new \JsonSchema\Validator();
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
     * @return AuthenticateRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): AuthenticateRequestBody
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $email = $input->{'email'};
        $password = $input->{'password'};

        $obj = new self($email, $password);

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
        $validator = new \JsonSchema\Validator();
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
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

    public function getUrl(): string
    {
        $mapped = $this->toJson();
        return '/v2/authenticate';
    }

    public function getQuery(): array
    {
        $mapped = $this->toJson();
        $query = [];
        return $query;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function withHeader(string $name, string|array $value): self
    {
        $clone = clone $this;
        $clone->headers[$name] = $value;
        return $clone;
    }
}
