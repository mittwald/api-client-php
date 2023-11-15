<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\PasswordValidationGetPasswordPolicy;

use InvalidArgumentException;
use JsonSchema\Validator;

class PasswordValidationGetPasswordPolicyRequest
{
    public const method = 'get';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'type' => 'object',
        'properties' => [
            'passwordPolicy' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'passwordPolicy',
        ],
    ];

    /**
     * @var string
     */
    private string $passwordPolicy;

    private array $headers = [

    ];

    /**
     * @param string $passwordPolicy
     */
    public function __construct(string $passwordPolicy)
    {
        $this->passwordPolicy = $passwordPolicy;
    }

    /**
     * @return string
     */
    public function getPasswordPolicy(): string
    {
        return $this->passwordPolicy;
    }

    /**
     * @param string $passwordPolicy
     * @return self
     */
    public function withPasswordPolicy(string $passwordPolicy): self
    {
        $validator = new Validator();
        $validator->validate($passwordPolicy, static::$schema['properties']['passwordPolicy']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->passwordPolicy = $passwordPolicy;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return PasswordValidationGetPasswordPolicyRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): PasswordValidationGetPasswordPolicyRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $passwordPolicy = $input->{'passwordPolicy'};

        $obj = new self($passwordPolicy);

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
        $output['passwordPolicy'] = $this->passwordPolicy;

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

    public function getUrl(): string
    {
        $mapped = $this->toJson();
        $passwordPolicy = urlencode($mapped['passwordPolicy']);
        return '/v2/password-policies/' . $passwordPolicy;
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
