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
    private static array $internalValidationSchema = [
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
            'refresh_token' => [
                'description' => 'The refresh token issued by the authorization server.
',
                'type' => 'string',
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
            'refresh_token',
            'token_type',
            'expires_in',
        ],
        'type' => 'object',
    ];

    /**
     * The access token issued by the authorization server.
     *
     */
    private string $accessToken;

    /**
     * The lifetime in seconds of the access token. For
     * example, the value "3600" denotes that the access
     * token will expire in one hour from the time the
     * response was generated.
     *
     */
    private int $expiresIn;

    /**
     * The refresh token issued by the authorization server.
     *
     */
    private string $refreshToken;

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
    private OauthRetrieveAccessTokenOKResponseBodyTokenType $tokenType;

    public function __construct(string $accessToken, int $expiresIn, string $refreshToken, OauthRetrieveAccessTokenOKResponseBodyTokenType $tokenType)
    {
        $this->accessToken = $accessToken;
        $this->expiresIn = $expiresIn;
        $this->refreshToken = $refreshToken;
        $this->tokenType = $tokenType;
    }

    public function getAccessToken(): string
    {
        return $this->accessToken;
    }

    public function getExpiresIn(): int
    {
        return $this->expiresIn;
    }

    public function getRefreshToken(): string
    {
        return $this->refreshToken;
    }

    public function getScope(): ?string
    {
        return $this->scope ?? null;
    }

    public function getTokenType(): OauthRetrieveAccessTokenOKResponseBodyTokenType
    {
        return $this->tokenType;
    }

    public function withAccessToken(string $accessToken): self
    {
        $validator = new Validator();
        $validator->validate($accessToken, self::$internalValidationSchema['properties']['access_token']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->accessToken = $accessToken;

        return $clone;
    }

    public function withExpiresIn(int $expiresIn): self
    {
        $validator = new Validator();
        $validator->validate($expiresIn, self::$internalValidationSchema['properties']['expires_in']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->expiresIn = $expiresIn;

        return $clone;
    }

    public function withRefreshToken(string $refreshToken): self
    {
        $validator = new Validator();
        $validator->validate($refreshToken, self::$internalValidationSchema['properties']['refresh_token']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->refreshToken = $refreshToken;

        return $clone;
    }

    public function withScope(string $scope): self
    {
        $validator = new Validator();
        $validator->validate($scope, self::$internalValidationSchema['properties']['scope']);
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

    public function withTokenType(OauthRetrieveAccessTokenOKResponseBodyTokenType $tokenType): self
    {
        $clone = clone $this;
        $clone->tokenType = $tokenType;

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

        $accessToken = $input->{'access_token'};
        $expiresIn = (int)($input->{'expires_in'});
        $refreshToken = $input->{'refresh_token'};
        $scope = null;
        if (isset($input->{'scope'})) {
            $scope = $input->{'scope'};
        }
        $tokenType = OauthRetrieveAccessTokenOKResponseBodyTokenType::from($input->{'token_type'});

        $obj = new self($accessToken, $expiresIn, $refreshToken, $tokenType);
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
        $output['access_token'] = $this->accessToken;
        $output['expires_in'] = $this->expiresIn;
        $output['refresh_token'] = $this->refreshToken;
        if (isset($this->scope)) {
            $output['scope'] = $this->scope;
        }
        $output['token_type'] = ($this->tokenType)->value;

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
