<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Mail;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;

class MailAddressMailboxStorageInBytesCurrent
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
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
    ];

    /**
     * @var DateTime
     */
    private DateTime $updatedAt;

    /**
     * @var int|float
     */
    private int|float $value;

    /**
     * @param DateTime $updatedAt
     * @param int|float $value
     */
    public function __construct(DateTime $updatedAt, int|float $value)
    {
        $this->updatedAt = $updatedAt;
        $this->value = $value;
    }

    /**
     * @return DateTime
     */
    public function getUpdatedAt(): DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @return int|float
     */
    public function getValue(): int|float
    {
        return $this->value;
    }

    /**
     * @param DateTime $updatedAt
     * @return self
     */
    public function withUpdatedAt(DateTime $updatedAt): self
    {
        $clone = clone $this;
        $clone->updatedAt = $updatedAt;

        return $clone;
    }

    /**
     * @param int|float $value
     * @return self
     */
    public function withValue(int|float $value): self
    {
        $validator = new Validator();
        $validator->validate($value, static::$schema['properties']['value']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->value = $value;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return MailAddressMailboxStorageInBytesCurrent Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): MailAddressMailboxStorageInBytesCurrent
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $updatedAt = new DateTime($input->{'updatedAt'});
        $value = str_contains($input->{'value'}, '.') ? (float)($input->{'value'}) : (int)($input->{'value'});

        $obj = new self($updatedAt, $value);

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
        $output['updatedAt'] = ($this->updatedAt)->format(DateTime::ATOM);
        $output['value'] = $this->value;

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
        $this->updatedAt = clone $this->updatedAt;
    }
}
