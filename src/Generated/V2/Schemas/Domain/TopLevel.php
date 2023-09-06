<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Domain;

use InvalidArgumentException;
use JsonSchema\Validator;

class TopLevel
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'rgpDays' => [
                'minimum' => 0,
                'type' => 'integer',
            ],
            'tld' => [
                'type' => 'string',
            ],
            'transitAllowed' => [
                'type' => 'boolean',
            ],
            'type' => [
                'enum' => [
                    'unknown',
                    'countryCode',
                    'generic',
                    'newGeneric',
                    'centralNic',
                    'other',
                ],
                'type' => 'string',
            ],
        ],
        'required' => [
            'tld',
            'type',
            'rgpDays',
            'transitAllowed',
        ],
        'type' => 'object',
    ];

    /**
     * @var int
     */
    private int $rgpDays;

    /**
     * @var string
     */
    private string $tld;

    /**
     * @var bool
     */
    private bool $transitAllowed;

    /**
     * @var TopLevelType
     */
    private TopLevelType $type;

    /**
     * @param int $rgpDays
     * @param string $tld
     * @param bool $transitAllowed
     * @param TopLevelType $type
     */
    public function __construct(int $rgpDays, string $tld, bool $transitAllowed, TopLevelType $type)
    {
        $this->rgpDays = $rgpDays;
        $this->tld = $tld;
        $this->transitAllowed = $transitAllowed;
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getRgpDays(): int
    {
        return $this->rgpDays;
    }

    /**
     * @return string
     */
    public function getTld(): string
    {
        return $this->tld;
    }

    /**
     * @return bool
     */
    public function getTransitAllowed(): bool
    {
        return $this->transitAllowed;
    }

    /**
     * @return TopLevelType
     */
    public function getType(): TopLevelType
    {
        return $this->type;
    }

    /**
     * @param int $rgpDays
     * @return self
     */
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

    /**
     * @param string $tld
     * @return self
     */
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
     * @param bool $transitAllowed
     * @return self
     */
    public function withTransitAllowed(bool $transitAllowed): self
    {
        $validator = new Validator();
        $validator->validate($transitAllowed, static::$schema['properties']['transitAllowed']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->transitAllowed = $transitAllowed;

        return $clone;
    }

    /**
     * @param TopLevelType $type
     * @return self
     */
    public function withType(TopLevelType $type): self
    {
        $clone = clone $this;
        $clone->type = $type;

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

        $rgpDays = (int)($input->{'rgpDays'});
        $tld = $input->{'tld'};
        $transitAllowed = (bool)($input->{'transitAllowed'});
        $type = TopLevelType::from($input->{'type'});

        $obj = new self($rgpDays, $tld, $transitAllowed, $type);

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
        $output['rgpDays'] = $this->rgpDays;
        $output['tld'] = $this->tld;
        $output['transitAllowed'] = $this->transitAllowed;
        $output['type'] = ($this->type)->value;

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
