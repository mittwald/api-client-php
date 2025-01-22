<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain\CheckDomainRegistrability;

use InvalidArgumentException;
use JsonSchema\Validator;

class CheckDomainRegistrabilityOKResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'isPremium' => [
                'type' => 'boolean',
            ],
            'registrable' => [
                'type' => 'boolean',
            ],
        ],
        'required' => [
            'registrable',
            'isPremium',
        ],
        'type' => 'object',
    ];

    private bool $isPremium;

    private bool $registrable;

    public function __construct(bool $isPremium, bool $registrable)
    {
        $this->isPremium = $isPremium;
        $this->registrable = $registrable;
    }

    public function getIsPremium(): bool
    {
        return $this->isPremium;
    }

    public function getRegistrable(): bool
    {
        return $this->registrable;
    }

    public function withIsPremium(bool $isPremium): self
    {
        $validator = new Validator();
        $validator->validate($isPremium, self::$schema['properties']['isPremium']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->isPremium = $isPremium;

        return $clone;
    }

    public function withRegistrable(bool $registrable): self
    {
        $validator = new Validator();
        $validator->validate($registrable, self::$schema['properties']['registrable']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->registrable = $registrable;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CheckDomainRegistrabilityOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CheckDomainRegistrabilityOKResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $isPremium = (bool)($input->{'isPremium'});
        $registrable = (bool)($input->{'registrable'});

        $obj = new self($isPremium, $registrable);

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
        $output['isPremium'] = $this->isPremium;
        $output['registrable'] = $this->registrable;

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
