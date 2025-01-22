<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainDeclareNameservers;

use InvalidArgumentException;
use JsonSchema\Validator;

class DeprecatedDomainDeclareNameserversRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'nameservers' => [
                'items' => [
                    'format' => 'idn-hostname',
                    'type' => 'string',
                ],
                'minItems' => 2,
                'type' => 'array',
                'uniqueItems' => true,
            ],
        ],
    ];

    /**
     * @var string[]|null
     */
    private ?array $nameservers = null;

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return string[]|null
     */
    public function getNameservers(): ?array
    {
        return $this->nameservers ?? null;
    }

    /**
     * @param string[] $nameservers
     */
    public function withNameservers(array $nameservers): self
    {
        $validator = new Validator();
        $validator->validate($nameservers, self::$schema['properties']['nameservers']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->nameservers = $nameservers;

        return $clone;
    }

    public function withoutNameservers(): self
    {
        $clone = clone $this;
        unset($clone->nameservers);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return DeprecatedDomainDeclareNameserversRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): DeprecatedDomainDeclareNameserversRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $nameservers = null;
        if (isset($input->{'nameservers'})) {
            $nameservers = $input->{'nameservers'};
        }

        $obj = new self();
        $obj->nameservers = $nameservers;
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
        if (isset($this->nameservers)) {
            $output['nameservers'] = $this->nameservers;
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
