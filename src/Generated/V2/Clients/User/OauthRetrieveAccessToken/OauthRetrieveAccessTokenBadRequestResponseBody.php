<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\OauthRetrieveAccessToken;

use InvalidArgumentException;
use JsonSchema\Validator;

class OauthRetrieveAccessTokenBadRequestResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
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

    private OauthRetrieveAccessTokenBadRequestResponseBodyError $error;

    private ?string $errorDescription = null;

    public function __construct(OauthRetrieveAccessTokenBadRequestResponseBodyError $error)
    {
        $this->error = $error;
    }

    public function getError(): OauthRetrieveAccessTokenBadRequestResponseBodyError
    {
        return $this->error;
    }

    public function getErrorDescription(): ?string
    {
        return $this->errorDescription ?? null;
    }

    public function withError(OauthRetrieveAccessTokenBadRequestResponseBodyError $error): self
    {
        $clone = clone $this;
        $clone->error = $error;

        return $clone;
    }

    public function withErrorDescription(string $errorDescription): self
    {
        $validator = new Validator();
        $validator->validate($errorDescription, self::$internalValidationSchema['properties']['error_description']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->errorDescription = $errorDescription;

        return $clone;
    }

    public function withoutErrorDescription(): self
    {
        $clone = clone $this;
        unset($clone->errorDescription);

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
        $errorDescription = null;
        if (isset($input->{'error_description'})) {
            $errorDescription = $input->{'error_description'};
        }

        $obj = new self($error);
        $obj->errorDescription = $errorDescription;
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
        if (isset($this->errorDescription)) {
            $output['error_description'] = $this->errorDescription;
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
