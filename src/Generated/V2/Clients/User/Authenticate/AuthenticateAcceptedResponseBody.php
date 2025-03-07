<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\Authenticate;

use InvalidArgumentException;
use JsonSchema\Validator;

class AuthenticateAcceptedResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'name' => [
                'enum' => [
                    'SecondFactorRequired',
                ],
                'type' => 'string',
            ],
        ],
        'type' => 'object',
    ];

    private ?AuthenticateAcceptedResponseBodyName $name = null;

    /**
     *
     */
    public function __construct()
    {
    }

    public function getName(): ?AuthenticateAcceptedResponseBodyName
    {
        return $this->name ?? null;
    }

    public function withName(AuthenticateAcceptedResponseBodyName $name): self
    {
        $clone = clone $this;
        $clone->name = $name;

        return $clone;
    }

    public function withoutName(): self
    {
        $clone = clone $this;
        unset($clone->name);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return AuthenticateAcceptedResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): AuthenticateAcceptedResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $name = null;
        if (isset($input->{'name'})) {
            $name = AuthenticateAcceptedResponseBodyName::from($input->{'name'});
        }

        $obj = new self();
        $obj->name = $name;
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
        if (isset($this->name)) {
            $output['name'] = ($this->name)->value;
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
        $validator->validate($input, self::$schema);

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
