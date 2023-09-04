<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Mail;

class MailAddressMailbox
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'passwordUpdatedAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'sendingEnabled' => [
                'type' => 'boolean',
            ],
            'spamProtection' => [
                'properties' => [
                    'active' => [
                        'type' => 'boolean',
                    ],
                    'autoDeleteSpam' => [
                        'type' => 'boolean',
                    ],
                    'folder' => [
                        'enum' => [
                            'spam',
                            'inbox',
                        ],
                        'type' => 'string',
                    ],
                    'relocationMinSpamScore' => [
                        'maximum' => 10,
                        'type' => 'integer',
                    ],
                ],
                'required' => [
                    'active',
                    'folder',
                    'relocationMinSpamScore',
                    'autoDeleteSpam',
                ],
                'type' => 'object',
            ],
            'storageInBytes' => [
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
            ],
        ],
        'required' => [
            'sendingEnabled',
            'spamProtection',
            'storageInBytes',
            'passwordUpdatedAt',
        ],
        'type' => 'object',
    ];

    /**
     * @var \DateTime
     */
    private \DateTime $passwordUpdatedAt;

    /**
     * @var bool
     */
    private bool $sendingEnabled;

    /**
     * @var MailAddressMailboxSpamProtection
     */
    private MailAddressMailboxSpamProtection $spamProtection;

    /**
     * @var MailAddressMailboxStorageInBytes
     */
    private MailAddressMailboxStorageInBytes $storageInBytes;

    /**
     * @param \DateTime $passwordUpdatedAt
     * @param bool $sendingEnabled
     * @param MailAddressMailboxSpamProtection $spamProtection
     * @param MailAddressMailboxStorageInBytes $storageInBytes
     */
    public function __construct(\DateTime $passwordUpdatedAt, bool $sendingEnabled, MailAddressMailboxSpamProtection $spamProtection, MailAddressMailboxStorageInBytes $storageInBytes)
    {
        $this->passwordUpdatedAt = $passwordUpdatedAt;
        $this->sendingEnabled = $sendingEnabled;
        $this->spamProtection = $spamProtection;
        $this->storageInBytes = $storageInBytes;
    }

    /**
     * @return \DateTime
     */
    public function getPasswordUpdatedAt() : \DateTime
    {
        return $this->passwordUpdatedAt;
    }

    /**
     * @return bool
     */
    public function getSendingEnabled() : bool
    {
        return $this->sendingEnabled;
    }

    /**
     * @return MailAddressMailboxSpamProtection
     */
    public function getSpamProtection() : MailAddressMailboxSpamProtection
    {
        return $this->spamProtection;
    }

    /**
     * @return MailAddressMailboxStorageInBytes
     */
    public function getStorageInBytes() : MailAddressMailboxStorageInBytes
    {
        return $this->storageInBytes;
    }

    /**
     * @param \DateTime $passwordUpdatedAt
     * @return self
     */
    public function withPasswordUpdatedAt(\DateTime $passwordUpdatedAt) : self
    {
        $clone = clone $this;
        $clone->passwordUpdatedAt = $passwordUpdatedAt;

        return $clone;
    }

    /**
     * @param bool $sendingEnabled
     * @return self
     */
    public function withSendingEnabled(bool $sendingEnabled) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($sendingEnabled, static::$schema['properties']['sendingEnabled']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->sendingEnabled = $sendingEnabled;

        return $clone;
    }

    /**
     * @param MailAddressMailboxSpamProtection $spamProtection
     * @return self
     */
    public function withSpamProtection(MailAddressMailboxSpamProtection $spamProtection) : self
    {
        $clone = clone $this;
        $clone->spamProtection = $spamProtection;

        return $clone;
    }

    /**
     * @param MailAddressMailboxStorageInBytes $storageInBytes
     * @return self
     */
    public function withStorageInBytes(MailAddressMailboxStorageInBytes $storageInBytes) : self
    {
        $clone = clone $this;
        $clone->storageInBytes = $storageInBytes;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return MailAddressMailbox Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : MailAddressMailbox
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $passwordUpdatedAt = new \DateTime($input->{'passwordUpdatedAt'});
        $sendingEnabled = (bool)($input->{'sendingEnabled'});
        $spamProtection = MailAddressMailboxSpamProtection::buildFromInput($input->{'spamProtection'}, validate: $validate);
        $storageInBytes = MailAddressMailboxStorageInBytes::buildFromInput($input->{'storageInBytes'}, validate: $validate);

        $obj = new self($passwordUpdatedAt, $sendingEnabled, $spamProtection, $storageInBytes);

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
        $output['passwordUpdatedAt'] = ($this->passwordUpdatedAt)->format(\DateTime::ATOM);
        $output['sendingEnabled'] = $this->sendingEnabled;
        $output['spamProtection'] = ($this->spamProtection)->toJson();
        $output['storageInBytes'] = ($this->storageInBytes)->toJson();

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
        $this->passwordUpdatedAt = clone $this->passwordUpdatedAt;
        $this->spamProtection = clone $this->spamProtection;
        $this->storageInBytes = clone $this->storageInBytes;
    }
}

