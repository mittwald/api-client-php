<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\ConfirmPasswordReset;

class ConfirmPasswordResetRequestBody
{
    public const method = 'post';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
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
     *
     * @var string
     */
    private string $password;

    /**
     * Password reset token
     *
     * @var string
     */
    private string $token;

    /**
     * UserId of the user to reset the password for.
     *
     * @var string
     */
    private string $userId;

    private array $headers = [
        
    ];

    /**
     * @param string $password
     * @param string $token
     * @param string $userId
     */
    public function __construct(string $password, string $token, string $userId)
    {
        $this->password = $password;
        $this->token = $token;
        $this->userId = $userId;
    }

    /**
     * @return string
     */
    public function getPassword() : string
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getToken() : string
    {
        return $this->token;
    }

    /**
     * @return string
     */
    public function getUserId() : string
    {
        return $this->userId;
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
     * @param string $token
     * @return self
     */
    public function withToken(string $token) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($token, static::$schema['properties']['token']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->token = $token;

        return $clone;
    }

    /**
     * @param string $userId
     * @return self
     */
    public function withUserId(string $userId) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($userId, static::$schema['properties']['userId']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
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
     * @return ConfirmPasswordResetRequestBody Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : ConfirmPasswordResetRequestBody
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
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
    public function toJson() : array
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
        return '/v2/users/self/credentials/password/confirm-reset';
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

