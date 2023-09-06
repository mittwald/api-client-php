<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Ingress;

use InvalidArgumentException;
use JsonSchema\Validator;

class TlsAcme
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'acme' => [
                'description' => 'Has to be `true`, as ssl cannot be deactivated.',
                'type' => 'boolean',
            ],
        ],
        'required' => [
            'acme',
        ],
        'type' => 'object',
    ];

    /**
     * Has to be `true`, as ssl cannot be deactivated.
     *
     * @var bool
     */
    private bool $acme;

    /**
     * @param bool $acme
     */
    public function __construct(bool $acme)
    {
        $this->acme = $acme;
    }

    /**
     * @return bool
     */
    public function getAcme(): bool
    {
        return $this->acme;
    }

    /**
     * @param bool $acme
     * @return self
     */
    public function withAcme(bool $acme): self
    {
        $validator = new Validator();
        $validator->validate($acme, static::$schema['properties']['acme']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->acme = $acme;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return TlsAcme Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): TlsAcme
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $acme = (bool)($input->{'acme'});

        $obj = new self($acme);

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
        $output['acme'] = $this->acme;

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
