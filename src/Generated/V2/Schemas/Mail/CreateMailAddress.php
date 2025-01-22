<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Mail;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.mail.CreateMailAddress.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class CreateMailAddress
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'address' => [
                'format' => 'idn-email',
                'type' => 'string',
            ],
            'isCatchAll' => [
                'type' => 'boolean',
            ],
            'mailbox' => [
                'properties' => [
                    'enableSpamProtection' => [
                        'type' => 'boolean',
                    ],
                    'password' => [
                        'type' => 'string',
                    ],
                    'quotaInBytes' => [
                        'description' => '2 GB',
                        'example' => 2147483648,
                        'minimum' => -1,
                        'type' => 'number',
                    ],
                ],
                'required' => [
                    'password',
                    'quotaInBytes',
                    'enableSpamProtection',
                ],
                'type' => 'object',
            ],
        ],
        'required' => [
            'address',
            'mailbox',
            'isCatchAll',
        ],
        'type' => 'object',
    ];

    private string $address;

    private bool $isCatchAll;

    private CreateMailAddressMailbox $mailbox;

    public function __construct(string $address, bool $isCatchAll, CreateMailAddressMailbox $mailbox)
    {
        $this->address = $address;
        $this->isCatchAll = $isCatchAll;
        $this->mailbox = $mailbox;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function getIsCatchAll(): bool
    {
        return $this->isCatchAll;
    }

    public function getMailbox(): CreateMailAddressMailbox
    {
        return $this->mailbox;
    }

    public function withAddress(string $address): self
    {
        $validator = new Validator();
        $validator->validate($address, self::$schema['properties']['address']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->address = $address;

        return $clone;
    }

    public function withIsCatchAll(bool $isCatchAll): self
    {
        $validator = new Validator();
        $validator->validate($isCatchAll, self::$schema['properties']['isCatchAll']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->isCatchAll = $isCatchAll;

        return $clone;
    }

    public function withMailbox(CreateMailAddressMailbox $mailbox): self
    {
        $clone = clone $this;
        $clone->mailbox = $mailbox;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CreateMailAddress Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CreateMailAddress
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $address = $input->{'address'};
        $isCatchAll = (bool)($input->{'isCatchAll'});
        $mailbox = CreateMailAddressMailbox::buildFromInput($input->{'mailbox'}, validate: $validate);

        $obj = new self($address, $isCatchAll, $mailbox);

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
        $output['isCatchAll'] = $this->isCatchAll;
        $output['mailbox'] = ($this->mailbox)->toJson();

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
        $this->mailbox = clone $this->mailbox;
    }
}
