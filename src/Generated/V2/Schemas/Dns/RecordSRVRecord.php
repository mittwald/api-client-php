<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Dns;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.dns.RecordSRVRecord.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class RecordSRVRecord
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'additionalProperties' => false,
        'properties' => [
            'fqdn' => [
                'format' => 'hostname',
                'maxLength' => 50,
                'minLength' => 1,
                'type' => 'string',
            ],
            'port' => [
                'maximum' => 65535,
                'minimum' => 0,
                'type' => 'integer',
            ],
            'priority' => [
                'maximum' => 65535,
                'minimum' => 0,
                'type' => 'integer',
            ],
            'weight' => [
                'maximum' => 65535,
                'minimum' => 0,
                'type' => 'integer',
            ],
        ],
        'required' => [
            'priority',
            'weight',
            'port',
            'fqdn',
        ],
        'type' => 'object',
    ];

    private string $fqdn;

    private int $port;

    private int $priority;

    private int $weight;

    public function __construct(string $fqdn, int $port, int $priority, int $weight)
    {
        $this->fqdn = $fqdn;
        $this->port = $port;
        $this->priority = $priority;
        $this->weight = $weight;
    }

    public function getFqdn(): string
    {
        return $this->fqdn;
    }

    public function getPort(): int
    {
        return $this->port;
    }

    public function getPriority(): int
    {
        return $this->priority;
    }

    public function getWeight(): int
    {
        return $this->weight;
    }

    public function withFqdn(string $fqdn): self
    {
        $validator = new Validator();
        $validator->validate($fqdn, static::$schema['properties']['fqdn']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->fqdn = $fqdn;

        return $clone;
    }

    public function withPort(int $port): self
    {
        $validator = new Validator();
        $validator->validate($port, static::$schema['properties']['port']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->port = $port;

        return $clone;
    }

    public function withPriority(int $priority): self
    {
        $validator = new Validator();
        $validator->validate($priority, static::$schema['properties']['priority']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->priority = $priority;

        return $clone;
    }

    public function withWeight(int $weight): self
    {
        $validator = new Validator();
        $validator->validate($weight, static::$schema['properties']['weight']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->weight = $weight;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return RecordSRVRecord Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): RecordSRVRecord
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $fqdn = $input->{'fqdn'};
        $port = (int)($input->{'port'});
        $priority = (int)($input->{'priority'});
        $weight = (int)($input->{'weight'});

        $obj = new self($fqdn, $port, $priority, $weight);

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
        $output['fqdn'] = $this->fqdn;
        $output['port'] = $this->port;
        $output['priority'] = $this->priority;
        $output['weight'] = $this->weight;

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
