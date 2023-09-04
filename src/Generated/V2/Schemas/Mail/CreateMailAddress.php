<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Mail;

class CreateMailAddress
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'address' => [
                'format' => 'email',
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

    /**
     * @var string
     */
    private string $address;

    /**
     * @var bool
     */
    private bool $isCatchAll;

    /**
     * @var CreateMailAddressMailbox
     */
    private CreateMailAddressMailbox $mailbox;

    /**
     * @param string $address
     * @param bool $isCatchAll
     * @param CreateMailAddressMailbox $mailbox
     */
    public function __construct(string $address, bool $isCatchAll, CreateMailAddressMailbox $mailbox)
    {
        $this->address = $address;
        $this->isCatchAll = $isCatchAll;
        $this->mailbox = $mailbox;
    }

    /**
     * @return string
     */
    public function getAddress() : string
    {
        return $this->address;
    }

    /**
     * @return bool
     */
    public function getIsCatchAll() : bool
    {
        return $this->isCatchAll;
    }

    /**
     * @return CreateMailAddressMailbox
     */
    public function getMailbox() : CreateMailAddressMailbox
    {
        return $this->mailbox;
    }

    /**
     * @param string $address
     * @return self
     */
    public function withAddress(string $address) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($address, static::$schema['properties']['address']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->address = $address;

        return $clone;
    }

    /**
     * @param bool $isCatchAll
     * @return self
     */
    public function withIsCatchAll(bool $isCatchAll) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($isCatchAll, static::$schema['properties']['isCatchAll']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->isCatchAll = $isCatchAll;

        return $clone;
    }

    /**
     * @param CreateMailAddressMailbox $mailbox
     * @return self
     */
    public function withMailbox(CreateMailAddressMailbox $mailbox) : self
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
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : CreateMailAddress
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
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
    public function toJson() : array
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
     * @throws \InvalidArgumentException
     */
    public static function validateInput(array|object $input, bool $return = false) : bool
    {
        $validator = new \JsonSchema\Validator();
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        $validator->validate($input, static::$schema);

        if (!$validator->isValid() && !$return) {
            $errors = array_map(function(array $e): string {
                return $e["property"] . ": " . $e["message"];
            }, $validator->getErrors());
            throw new \InvalidArgumentException(join(", ", $errors));
        }

        return $validator->isValid();
    }

    public function __clone()
    {
        $this->mailbox = clone $this->mailbox;
    }
}

