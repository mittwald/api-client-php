<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\OauthRetrieveAccessToken;

use InvalidArgumentException;
use JsonSchema\Validator;

class OauthRetrieveAccessTokenOKResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'access_token' => [
                'description' => 'The access token issued by the authorization server.
',
                'type' => 'string',
            ],
            'expires_in' => [
                'description' => 'The lifetime in seconds of the access token. For
example, the value "3600" denotes that the access
token will expire in one hour from the time the
response was generated.
',
                'type' => 'integer',
            ],
            'scope' => [
                'description' => 'The scope of the access token as described by
[RFC6749](https://datatracker.ietf.org/doc/html/rfc6749#section-3.3).
',
                'type' => 'string',
            ],
            'token_type' => [
                'description' => 'The type of the token issued as described in
[RFC6749](https://datatracker.ietf.org/doc/html/rfc6749#section-7.1).
',
                'enum' => [
                    'bearer',
                ],
                'type' => 'string',
            ],
        ],
        'required' => [
            'access_token',
            'token_type',
            'expires_in',
        ],
        'type' => 'object',
    ];

    /**
     * The access token issued by the authorization server.
     *
     */
    private string $access_token;

    /**
     * The lifetime in seconds of the access token. For
     * example, the value "3600" denotes that the access
     * token will expire in one hour from the time the
     * response was generated.
     *
     */
    private int $expires_in;

    /**
     * The scope of the access token as described by
     * [RFC6749](https://datatracker.ietf.org/doc/html/rfc6749#section-3.3).
     *
     */
    private ?string $scope = null;

    /**
     * The type of the token issued as described in
     * [RFC6749](https://datatracker.ietf.org/doc/html/rfc6749#section-7.1).
     *
     */
    private OauthRetrieveAccessTokenOKResponseBodyToken_type $token_type;

    public function __construct(string $accessToken, int $expiresIn, OauthRetrieveAccessTokenOKResponseBodyToken_type $tokenType)
    {
        $this->access_token = $accessToken;
        $this->expires_in = $expiresIn;
        $this->token_type = $tokenType;
    }

    public function getAccessToken(): string
    {
        return $this->access_token;
    }

    public function getExpiresIn(): int
    {
        return $this->expires_in;
    }

    public function getScope(): ?string
    {
        return $this->scope ?? null;
    }

    public function getTokenType(): OauthRetrieveAccessTokenOKResponseBodyToken_type
    {
        return $this->token_type;
    }

    public function withAccessToken(string $access_token): self
    {
        $validator = new Validator();
        $validator->validate($access_token, static::$schema['properties']['access_token']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->access_token = $access_token;

        return $clone;
    }

    public function withExpiresIn(int $expires_in): self
    {
        $validator = new Validator();
        $validator->validate($expires_in, static::$schema['properties']['expires_in']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->expires_in = $expires_in;

        return $clone;
    }

    public function withScope(string $scope): self
    {
        $validator = new Validator();
        $validator->validate($scope, static::$schema['properties']['scope']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->scope = $scope;

        return $clone;
    }

    public function withoutScope(): self
    {
        $clone = clone $this;
        unset($clone->scope);

        return $clone;
    }

    public function withTokenType(OauthRetrieveAccessTokenOKResponseBodyToken_type $token_type): self
    {
        $clone = clone $this;
        $clone->token_type = $token_type;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return OauthRetrieveAccessTokenOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): OauthRetrieveAccessTokenOKResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $access_token = $input->{'access_token'};
        $expires_in = (int)($input->{'expires_in'});
        $scope = null;
        if (isset($input->{'scope'})) {
            $scope = $input->{'scope'};
        }
        $token_type = OauthRetrieveAccessTokenOKResponseBodyToken_type::from($input->{'token_type'});

        $obj = new self($access_token, $expires_in, $token_type);
        $obj->scope = $scope;
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
        $output['access_token'] = $this->access_token;
        $output['expires_in'] = $this->expires_in;
        if (isset($this->scope)) {
            $output['scope'] = $this->scope;
        }
        $output['token_type'] = ($this->token_type)->value;

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
