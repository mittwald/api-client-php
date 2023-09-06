<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Mail;

use InvalidArgumentException;
use JsonSchema\Validator;

class MailAddressMailboxStorageInBytes
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'current' => [
                'properties' => [
                    'updatedAt' => [
                        'format' => 'date-time',
                        'type' => 'string',
                    ],
                    'value' => [
                        'type' => 'number',
                    ],
                ],
                'required' => [
                    'value',
                    'updatedAt',
                ],
                'type' => 'object',
            ],
            'limit' => [
                'type' => 'number',
            ],
        ],
        'required' => [
            'limit',
            'current',
        ],
        'type' => 'object',
    ];

    /**
     * @var MailAddressMailboxStorageInBytesCurrent
     */
    private MailAddressMailboxStorageInBytesCurrent $current;

    /**
     * @var int|float
     */
    private int|float $limit;

    /**
     * @param MailAddressMailboxStorageInBytesCurrent $current
     * @param int|float $limit
     */
    public function __construct(MailAddressMailboxStorageInBytesCurrent $current, int|float $limit)
    {
        $this->current = $current;
        $this->limit = $limit;
    }

    /**
     * @return MailAddressMailboxStorageInBytesCurrent
     */
    public function getCurrent(): MailAddressMailboxStorageInBytesCurrent
    {
        return $this->current;
    }

    /**
     * @return int|float
     */
    public function getLimit(): int|float
    {
        return $this->limit;
    }

    /**
     * @param MailAddressMailboxStorageInBytesCurrent $current
     * @return self
     */
    public function withCurrent(MailAddressMailboxStorageInBytesCurrent $current): self
    {
        $clone = clone $this;
        $clone->current = $current;

        return $clone;
    }

    /**
     * @param int|float $limit
     * @return self
     */
    public function withLimit(int|float $limit): self
    {
        $validator = new Validator();
        $validator->validate($limit, static::$schema['properties']['limit']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->limit = $limit;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return MailAddressMailboxStorageInBytes Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): MailAddressMailboxStorageInBytes
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $current = MailAddressMailboxStorageInBytesCurrent::buildFromInput($input->{'current'}, validate: $validate);
        $limit = str_contains($input->{'limit'}, '.') ? (float)($input->{'limit'}) : (int)($input->{'limit'});

        $obj = new self($current, $limit);

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
        $output['current'] = ($this->current)->toJson();
        $output['limit'] = $this->limit;

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
        $this->current = clone $this->current;
    }
}
