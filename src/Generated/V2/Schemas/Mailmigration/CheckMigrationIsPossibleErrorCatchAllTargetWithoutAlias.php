<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Mailmigration;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for
 * de.mittwald.v1.mailmigration.CheckMigrationIsPossibleErrorCatchAllTargetWithoutAlias.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class CheckMigrationIsPossibleErrorCatchAllTargetWithoutAlias
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'address' => [
                'type' => 'string',
            ],
            'mailboxName' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'address',
            'mailboxName',
        ],
        'type' => 'object',
    ];

    private string $address;

    private string $mailboxName;

    public function __construct(string $address, string $mailboxName)
    {
        $this->address = $address;
        $this->mailboxName = $mailboxName;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function getMailboxName(): string
    {
        return $this->mailboxName;
    }

    public function withAddress(string $address): self
    {
        $validator = new Validator();
        $validator->validate($address, static::$schema['properties']['address']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->address = $address;

        return $clone;
    }

    public function withMailboxName(string $mailboxName): self
    {
        $validator = new Validator();
        $validator->validate($mailboxName, static::$schema['properties']['mailboxName']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->mailboxName = $mailboxName;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CheckMigrationIsPossibleErrorCatchAllTargetWithoutAlias Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CheckMigrationIsPossibleErrorCatchAllTargetWithoutAlias
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $address = $input->{'address'};
        $mailboxName = $input->{'mailboxName'};

        $obj = new self($address, $mailboxName);

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
        $output['address'] = $this->address;
        $output['mailboxName'] = $this->mailboxName;

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