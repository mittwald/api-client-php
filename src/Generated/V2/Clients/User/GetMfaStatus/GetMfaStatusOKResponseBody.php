<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\GetMfaStatus;

use InvalidArgumentException;
use JsonSchema\Validator;

class GetMfaStatusOKResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'confirmed' => [
                'type' => 'boolean',
            ],
            'initialized' => [
                'type' => 'boolean',
            ],
        ],
        'required' => [
            'initialized',
            'confirmed',
        ],
        'type' => 'object',
    ];

    private bool $confirmed;

    private bool $initialized;

    public function __construct(bool $confirmed, bool $initialized)
    {
        $this->confirmed = $confirmed;
        $this->initialized = $initialized;
    }

    public function getConfirmed(): bool
    {
        return $this->confirmed;
    }

    public function getInitialized(): bool
    {
        return $this->initialized;
    }

    public function withConfirmed(bool $confirmed): self
    {
        $validator = new Validator();
        $validator->validate($confirmed, self::$schema['properties']['confirmed']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->confirmed = $confirmed;

        return $clone;
    }

    public function withInitialized(bool $initialized): self
    {
        $validator = new Validator();
        $validator->validate($initialized, self::$schema['properties']['initialized']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->initialized = $initialized;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return GetMfaStatusOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): GetMfaStatusOKResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $confirmed = (bool)($input->{'confirmed'});
        $initialized = (bool)($input->{'initialized'});

        $obj = new self($confirmed, $initialized);

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
        $output['confirmed'] = $this->confirmed;
        $output['initialized'] = $this->initialized;

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
