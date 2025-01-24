<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Varnish;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.varnish.ConfigExpiration.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class ConfigExpiration
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'maxVersions' => [
                'type' => 'number',
            ],
            'retentionTime' => [
                'type' => 'number',
            ],
        ],
        'type' => 'object',
    ];

    private int|float|null $maxVersions = null;

    private int|float|null $retentionTime = null;

    /**
     *
     */
    public function __construct()
    {
    }

    public function getMaxVersions(): int|float|null
    {
        return $this->maxVersions;
    }

    public function getRetentionTime(): int|float|null
    {
        return $this->retentionTime;
    }

    public function withMaxVersions(int|float $maxVersions): self
    {
        $validator = new Validator();
        $validator->validate($maxVersions, self::$schema['properties']['maxVersions']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->maxVersions = $maxVersions;

        return $clone;
    }

    public function withoutMaxVersions(): self
    {
        $clone = clone $this;
        unset($clone->maxVersions);

        return $clone;
    }

    public function withRetentionTime(int|float $retentionTime): self
    {
        $validator = new Validator();
        $validator->validate($retentionTime, self::$schema['properties']['retentionTime']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->retentionTime = $retentionTime;

        return $clone;
    }

    public function withoutRetentionTime(): self
    {
        $clone = clone $this;
        unset($clone->retentionTime);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ConfigExpiration Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ConfigExpiration
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $maxVersions = null;
        if (isset($input->{'maxVersions'})) {
            $maxVersions = str_contains((string)($input->{'maxVersions'}), '.') ? (float)($input->{'maxVersions'}) : (int)($input->{'maxVersions'});
        }
        $retentionTime = null;
        if (isset($input->{'retentionTime'})) {
            $retentionTime = str_contains((string)($input->{'retentionTime'}), '.') ? (float)($input->{'retentionTime'}) : (int)($input->{'retentionTime'});
        }

        $obj = new self();
        $obj->maxVersions = $maxVersions;
        $obj->retentionTime = $retentionTime;
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
        if (isset($this->maxVersions)) {
            $output['maxVersions'] = $this->maxVersions;
        }
        if (isset($this->retentionTime)) {
            $output['retentionTime'] = $this->retentionTime;
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
