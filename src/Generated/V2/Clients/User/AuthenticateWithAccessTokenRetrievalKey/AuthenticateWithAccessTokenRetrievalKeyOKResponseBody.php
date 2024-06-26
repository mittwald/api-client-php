<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\AuthenticateWithAccessTokenRetrievalKey;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;

class AuthenticateWithAccessTokenRetrievalKeyOKResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'expiresAt' => [
                'description' => 'The expiration date of the token.',
                'format' => 'date-time',
                'type' => 'string',
            ],
            'refreshToken' => [
                'description' => 'Refresh token to refresh your access token even after it has expired.',
                'type' => 'string',
            ],
            'token' => [
                'description' => 'Public token to identify yourself against the public api.',
                'type' => 'string',
            ],
        ],
        'required' => [
            'token',
            'refreshToken',
            'expiresAt',
        ],
        'type' => 'object',
    ];

    /**
     * The expiration date of the token.
     */
    private DateTime $expiresAt;

    /**
     * Refresh token to refresh your access token even after it has expired.
     */
    private string $refreshToken;

    /**
     * Public token to identify yourself against the public api.
     */
    private string $token;

    public function __construct(DateTime $expiresAt, string $refreshToken, string $token)
    {
        $this->expiresAt = $expiresAt;
        $this->refreshToken = $refreshToken;
        $this->token = $token;
    }

    public function getExpiresAt(): DateTime
    {
        return $this->expiresAt;
    }

    public function getRefreshToken(): string
    {
        return $this->refreshToken;
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function withExpiresAt(DateTime $expiresAt): self
    {
        $clone = clone $this;
        $clone->expiresAt = $expiresAt;

        return $clone;
    }

    public function withRefreshToken(string $refreshToken): self
    {
        $validator = new Validator();
        $validator->validate($refreshToken, static::$schema['properties']['refreshToken']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->refreshToken = $refreshToken;

        return $clone;
    }

    public function withToken(string $token): self
    {
        $validator = new Validator();
        $validator->validate($token, static::$schema['properties']['token']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->token = $token;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return AuthenticateWithAccessTokenRetrievalKeyOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): AuthenticateWithAccessTokenRetrievalKeyOKResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $expiresAt = new DateTime($input->{'expiresAt'});
        $refreshToken = $input->{'refreshToken'};
        $token = $input->{'token'};

        $obj = new self($expiresAt, $refreshToken, $token);

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
        $output['expiresAt'] = ($this->expiresAt)->format(DateTime::ATOM);
        $output['refreshToken'] = $this->refreshToken;
        $output['token'] = $this->token;

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
        $this->expiresAt = clone $this->expiresAt;
    }
}
