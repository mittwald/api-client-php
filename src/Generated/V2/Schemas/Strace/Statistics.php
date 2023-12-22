<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Strace;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.strace.Statistics.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class Statistics
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'count' => [
                'description' => 'Syscall count.',
                'example' => 4321,
                'type' => 'integer',
            ],
            'kernelMs' => [
                'description' => 'Elapsed kernel space time in milliseconds.',
                'example' => 1.2345,
                'type' => 'number',
            ],
            'occurrences' => [
                'description' => 'The number of times this group occurred.',
                'example' => 25,
                'type' => 'integer',
            ],
            'userspaceMs' => [
                'description' => 'Elapsed user space time in milliseconds.',
                'example' => 1.2345,
                'type' => 'number',
            ],
        ],
        'required' => [
            'kernelMs',
            'userspaceMs',
            'count',
            'occurrences',
        ],
        'type' => 'object',
    ];

    /**
     * Syscall count.
     *
     * @var int
     */
    private int $count;

    /**
     * Elapsed kernel space time in milliseconds.
     *
     * @var int|float
     */
    private int|float $kernelMs;

    /**
     * The number of times this group occurred.
     *
     * @var int
     */
    private int $occurrences;

    /**
     * Elapsed user space time in milliseconds.
     *
     * @var int|float
     */
    private int|float $userspaceMs;

    /**
     * @param int $count
     * @param int|float $kernelMs
     * @param int $occurrences
     * @param int|float $userspaceMs
     */
    public function __construct(int $count, int|float $kernelMs, int $occurrences, int|float $userspaceMs)
    {
        $this->count = $count;
        $this->kernelMs = $kernelMs;
        $this->occurrences = $occurrences;
        $this->userspaceMs = $userspaceMs;
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @return int|float
     */
    public function getKernelMs(): int|float
    {
        return $this->kernelMs;
    }

    /**
     * @return int
     */
    public function getOccurrences(): int
    {
        return $this->occurrences;
    }

    /**
     * @return int|float
     */
    public function getUserspaceMs(): int|float
    {
        return $this->userspaceMs;
    }

    /**
     * @param int $count
     * @return self
     */
    public function withCount(int $count): self
    {
        $validator = new Validator();
        $validator->validate($count, static::$schema['properties']['count']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->count = $count;

        return $clone;
    }

    /**
     * @param int|float $kernelMs
     * @return self
     */
    public function withKernelMs(int|float $kernelMs): self
    {
        $validator = new Validator();
        $validator->validate($kernelMs, static::$schema['properties']['kernelMs']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->kernelMs = $kernelMs;

        return $clone;
    }

    /**
     * @param int $occurrences
     * @return self
     */
    public function withOccurrences(int $occurrences): self
    {
        $validator = new Validator();
        $validator->validate($occurrences, static::$schema['properties']['occurrences']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->occurrences = $occurrences;

        return $clone;
    }

    /**
     * @param int|float $userspaceMs
     * @return self
     */
    public function withUserspaceMs(int|float $userspaceMs): self
    {
        $validator = new Validator();
        $validator->validate($userspaceMs, static::$schema['properties']['userspaceMs']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->userspaceMs = $userspaceMs;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return Statistics Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): Statistics
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $count = (int)($input->{'count'});
        $kernelMs = str_contains($input->{'kernelMs'}, '.') ? (float)($input->{'kernelMs'}) : (int)($input->{'kernelMs'});
        $occurrences = (int)($input->{'occurrences'});
        $userspaceMs = str_contains($input->{'userspaceMs'}, '.') ? (float)($input->{'userspaceMs'}) : (int)($input->{'userspaceMs'});

        $obj = new self($count, $kernelMs, $occurrences, $userspaceMs);

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
        $output['count'] = $this->count;
        $output['kernelMs'] = $this->kernelMs;
        $output['occurrences'] = $this->occurrences;
        $output['userspaceMs'] = $this->userspaceMs;

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
