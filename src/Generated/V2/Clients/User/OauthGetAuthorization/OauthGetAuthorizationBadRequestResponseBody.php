<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\OauthGetAuthorization;

use InvalidArgumentException;
use JsonSchema\Validator;

class OauthGetAuthorizationBadRequestResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'error' => [
                'enum' => [
                    'invalid_request',
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

    private OauthGetAuthorizationBadRequestResponseBodyError $error;

    private ?string $error_description = null;

    public function __construct(OauthGetAuthorizationBadRequestResponseBodyError $error)
    {
        $this->error = $error;
    }

    public function getError(): OauthGetAuthorizationBadRequestResponseBodyError
    {
        return $this->error;
    }

    public function getErrorDescription(): ?string
    {
        return $this->error_description ?? null;
    }

    public function withError(OauthGetAuthorizationBadRequestResponseBodyError $error): self
    {
        $clone = clone $this;
        $clone->error = $error;

        return $clone;
    }

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
     * @return OauthGetAuthorizationBadRequestResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): OauthGetAuthorizationBadRequestResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $error = OauthGetAuthorizationBadRequestResponseBodyError::from($input->{'error'});
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
    }
}
