<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Mail;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.mail.MailAddress.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class MailAddress
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'address' => [
                'format' => 'email',
                'type' => 'string',
            ],
            'autoResponder' => [
                'properties' => [
                    'active' => [
                        'type' => 'boolean',
                    ],
                    'expiresAt' => [
                        'format' => 'date-time',
                        'type' => 'string',
                    ],
                    'message' => [
                        'type' => 'string',
                    ],
                    'startsAt' => [
                        'format' => 'date-time',
                        'type' => 'string',
                    ],
                ],
                'required' => [
                    'active',
                ],
                'type' => 'object',
            ],
            'forwardAddresses' => [
                'items' => [
                    'format' => 'email',
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
            'id' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'isArchived' => [
                'type' => 'boolean',
            ],
            'isCatchAll' => [
                'type' => 'boolean',
            ],
            'mailbox' => [
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
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
                    'name',
                    'sendingEnabled',
                    'spamProtection',
                    'storageInBytes',
                    'passwordUpdatedAt',
                ],
                'type' => 'object',
            ],
            'projectId' => [
                'type' => 'string',
            ],
            'receivingDisabled' => [
                'type' => 'boolean',
            ],
            'updatedAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
        ],
        'required' => [
            'id',
            'receivingDisabled',
            'address',
            'isCatchAll',
            'projectId',
            'forwardAddresses',
            'updatedAt',
            'autoResponder',
            'isArchived',
        ],
        'type' => 'object',
    ];

    private string $address;

    private MailAddressAutoResponder $autoResponder;

    /**
     * @var string[]
     */
    private array $forwardAddresses;

    private string $id;

    private bool $isArchived;

    private bool $isCatchAll;

    private ?MailAddressMailbox $mailbox = null;

    private string $projectId;

    private bool $receivingDisabled;

    private DateTime $updatedAt;

    /**
     * @param string[] $forwardAddresses
     */
    public function __construct(string $address, MailAddressAutoResponder $autoResponder, array $forwardAddresses, string $id, bool $isArchived, bool $isCatchAll, string $projectId, bool $receivingDisabled, DateTime $updatedAt)
    {
        $this->address = $address;
        $this->autoResponder = $autoResponder;
        $this->forwardAddresses = $forwardAddresses;
        $this->id = $id;
        $this->isArchived = $isArchived;
        $this->isCatchAll = $isCatchAll;
        $this->projectId = $projectId;
        $this->receivingDisabled = $receivingDisabled;
        $this->updatedAt = $updatedAt;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function getAutoResponder(): MailAddressAutoResponder
    {
        return $this->autoResponder;
    }

    /**
     * @return string[]
     */
    public function getForwardAddresses(): array
    {
        return $this->forwardAddresses;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getIsArchived(): bool
    {
        return $this->isArchived;
    }

    public function getIsCatchAll(): bool
    {
        return $this->isCatchAll;
    }

    public function getMailbox(): ?MailAddressMailbox
    {
        return $this->mailbox ?? null;
    }

    public function getProjectId(): string
    {
        return $this->projectId;
    }

    public function getReceivingDisabled(): bool
    {
        return $this->receivingDisabled;
    }

    public function getUpdatedAt(): DateTime
    {
        return $this->updatedAt;
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

    public function withAutoResponder(MailAddressAutoResponder $autoResponder): self
    {
        $clone = clone $this;
        $clone->autoResponder = $autoResponder;

        return $clone;
    }

    /**
     * @param string[] $forwardAddresses
     */
    public function withForwardAddresses(array $forwardAddresses): self
    {
        $validator = new Validator();
        $validator->validate($forwardAddresses, static::$schema['properties']['forwardAddresses']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->forwardAddresses = $forwardAddresses;

        return $clone;
    }

    public function withId(string $id): self
    {
        $validator = new Validator();
        $validator->validate($id, static::$schema['properties']['id']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->id = $id;

        return $clone;
    }

    public function withIsArchived(bool $isArchived): self
    {
        $validator = new Validator();
        $validator->validate($isArchived, static::$schema['properties']['isArchived']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->isArchived = $isArchived;

        return $clone;
    }

    public function withIsCatchAll(bool $isCatchAll): self
    {
        $validator = new Validator();
        $validator->validate($isCatchAll, static::$schema['properties']['isCatchAll']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->isCatchAll = $isCatchAll;

        return $clone;
    }

    public function withMailbox(MailAddressMailbox $mailbox): self
    {
        $clone = clone $this;
        $clone->mailbox = $mailbox;

        return $clone;
    }

    public function withoutMailbox(): self
    {
        $clone = clone $this;
        unset($clone->mailbox);

        return $clone;
    }

    public function withProjectId(string $projectId): self
    {
        $validator = new Validator();
        $validator->validate($projectId, static::$schema['properties']['projectId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->projectId = $projectId;

        return $clone;
    }

    public function withReceivingDisabled(bool $receivingDisabled): self
    {
        $validator = new Validator();
        $validator->validate($receivingDisabled, static::$schema['properties']['receivingDisabled']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->receivingDisabled = $receivingDisabled;

        return $clone;
    }

    public function withUpdatedAt(DateTime $updatedAt): self
    {
        $clone = clone $this;
        $clone->updatedAt = $updatedAt;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return MailAddress Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): MailAddress
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $address = $input->{'address'};
        $autoResponder = MailAddressAutoResponder::buildFromInput($input->{'autoResponder'}, validate: $validate);
        $forwardAddresses = $input->{'forwardAddresses'};
        $id = $input->{'id'};
        $isArchived = (bool)($input->{'isArchived'});
        $isCatchAll = (bool)($input->{'isCatchAll'});
        $mailbox = null;
        if (isset($input->{'mailbox'})) {
            $mailbox = MailAddressMailbox::buildFromInput($input->{'mailbox'}, validate: $validate);
        }
        $projectId = $input->{'projectId'};
        $receivingDisabled = (bool)($input->{'receivingDisabled'});
        $updatedAt = new DateTime($input->{'updatedAt'});

        $obj = new self($address, $autoResponder, $forwardAddresses, $id, $isArchived, $isCatchAll, $projectId, $receivingDisabled, $updatedAt);
        $obj->mailbox = $mailbox;
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
        $output['autoResponder'] = ($this->autoResponder)->toJson();
        $output['forwardAddresses'] = $this->forwardAddresses;
        $output['id'] = $this->id;
        $output['isArchived'] = $this->isArchived;
        $output['isCatchAll'] = $this->isCatchAll;
        if (isset($this->mailbox)) {
            $output['mailbox'] = ($this->mailbox)->toJson();
        }
        $output['projectId'] = $this->projectId;
        $output['receivingDisabled'] = $this->receivingDisabled;
        $output['updatedAt'] = ($this->updatedAt)->format(DateTime::ATOM);

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
        $this->autoResponder = clone $this->autoResponder;
        if (isset($this->mailbox)) {
            $this->mailbox = clone $this->mailbox;
        }
        $this->updatedAt = clone $this->updatedAt;
    }
}
