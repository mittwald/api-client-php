<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Domain;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.domain.TopLevel.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class TopLevel
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'irtp' => [
                'type' => 'boolean',
            ],
            'rgpDays' => [
                'minimum' => 0,
                'type' => 'integer',
            ],
            'tld' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'tld',
            'rgpDays',
            'irtp',
        ],
        'type' => 'object',
    ];

    private bool $irtp;

    private int $rgpDays;

    private string $tld;

    public function __construct(bool $irtp, int $rgpDays, string $tld)
    {
        $this->irtp = $irtp;
        $this->rgpDays = $rgpDays;
        $this->tld = $tld;
    }

    public function getIrtp(): bool
    {
        return $this->irtp;
    }

    public function getRgpDays(): int
    {
        return $this->rgpDays;
    }

    public function getTld(): string
    {
        return $this->tld;
    }

    public function withIrtp(bool $irtp): self
    {
        $validator = new Validator();
        $validator->validate($irtp, static::$schema['properties']['irtp']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->irtp = $irtp;

        return $clone;
    }

    public function withRgpDays(int $rgpDays): self
    {
        $validator = new Validator();
        $validator->validate($rgpDays, static::$schema['properties']['rgpDays']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->rgpDays = $rgpDays;

        return $clone;
    }

    public function withTld(string $tld): self
    {
        $validator = new Validator();
        $validator->validate($tld, static::$schema['properties']['tld']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->tld = $tld;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return TopLevel Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): TopLevel
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $irtp = (bool)($input->{'irtp'});
        $rgpDays = (int)($input->{'rgpDays'});
        $tld = $input->{'tld'};

        $obj = new self($irtp, $rgpDays, $tld);

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
        $output['irtp'] = $this->irtp;
        $output['rgpDays'] = $this->rgpDays;
        $output['tld'] = $this->tld;

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
