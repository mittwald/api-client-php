<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\OauthRetrieveAccessToken;

use InvalidArgumentException;
use JsonSchema\Validator;

class OauthRetrieveAccessTokenBadRequestResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'error' => [
                'enum' => [
                    'invalid_request',
                    'invalid_client',
                    'invalid_grant',
                    'unauthorized_client',
                    'unsupported_grant_type',
                    'invalid_scope',
                ],
                'type' => 'string',
            ],
            'error_description' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'error',
        ],
        'type' => 'object',
    ];

    /**
     * @var OauthRetrieveAccessTokenBadRequestResponseBodyError
     */
    private OauthRetrieveAccessTokenBadRequestResponseBodyError $error;

    /**
     * @var string|null
     */
    private ?string $error_description = null;

    /**
     * @param OauthRetrieveAccessTokenBadRequestResponseBodyError $error
     */
    public function __construct(OauthRetrieveAccessTokenBadRequestResponseBodyError $error)
    {
        $this->error = $error;
    }

    /**
     * @return OauthRetrieveAccessTokenBadRequestResponseBodyError
     */
    public function getError(): OauthRetrieveAccessTokenBadRequestResponseBodyError
    {
        return $this->error;
    }

    /**
     * @return string|null
     */
    public function getErrorDescription(): ?string
    {
        return $this->error_description ?? null;
    }

    /**
     * @param OauthRetrieveAccessTokenBadRequestResponseBodyError $error
     * @return self
     */
    public function withError(OauthRetrieveAccessTokenBadRequestResponseBodyError $error): self
    {
        $clone = clone $this;
        $clone->error = $error;

        return $clone;
    }

    /**
     * @param string $error_description
     * @return self
     */
    public function withErrorDescription(string $error_description): self
    {
        $validator = new Validator();
        $validator->validate($error_description, static::$schema['properties']['error_description']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->error_description = $error_description;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutErrorDescription(): self
    {
        $clone = clone $this;
        unset($clone->error_description);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return OauthRetrieveAccessTokenBadRequestResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): OauthRetrieveAccessTokenBadRequestResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $error = OauthRetrieveAccessTokenBadRequestResponseBodyError::from($input->{'error'});
        $error_description = null;
        if (isset($input->{'error_description'})) {
            $error_description = $input->{'error_description'};
        }

        $obj = new self($error);
        $obj->error_description = $error_description;
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
        $output['error'] = ($this->error)->value;
        if (isset($this->error_description)) {
            $output['error_description'] = $this->error_description;
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
