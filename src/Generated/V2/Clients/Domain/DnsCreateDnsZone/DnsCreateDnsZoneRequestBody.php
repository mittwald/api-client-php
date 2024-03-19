<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsCreateDnsZone;

use InvalidArgumentException;
use JsonSchema\Validator;

class DnsCreateDnsZoneRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'name' => [
                'format' => 'hostname',
                'type' => 'string',
            ],
            'parentZoneId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
        ],
        'required' => [
            'name',
            'parentZoneId',
        ],
        'type' => 'object',
    ];

    private string $name;

    private string $parentZoneId;

    public function __construct(string $name, string $parentZoneId)
    {
        $this->name = $name;
        $this->parentZoneId = $parentZoneId;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getParentZoneId(): string
    {
        return $this->parentZoneId;
    }

    public function withName(string $name): self
    {
        $validator = new Validator();
        $validator->validate($name, static::$schema['properties']['name']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->name = $name;

        return $clone;
    }

    public function withParentZoneId(string $parentZoneId): self
    {
        $validator = new Validator();
        $validator->validate($parentZoneId, static::$schema['properties']['parentZoneId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->parentZoneId = $parentZoneId;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return DnsCreateDnsZoneRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): DnsCreateDnsZoneRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $name = $input->{'name'};
        $parentZoneId = $input->{'parentZoneId'};

        $obj = new self($name, $parentZoneId);

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
        $output['name'] = $this->name;
        $output['parentZoneId'] = $this->parentZoneId;

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
