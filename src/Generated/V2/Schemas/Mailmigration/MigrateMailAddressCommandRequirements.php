<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Mailmigration;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for
 * de.mittwald.v1.mailmigration.MigrateMailAddressCommandRequirements.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class MigrateMailAddressCommandRequirements
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'address' => [
                'type' => 'string',
            ],
            'autoResponder' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.mailmigration.AutoResponder',
            ],
            'forwardAddresses' => [
                'items' => [
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
            'isCatchAll' => [
                'type' => 'boolean',
            ],
            'mailbox' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.mailmigration.Mailbox',
            ],
            'projectId' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'projectId',
        ],
        'type' => 'object',
    ];

    private ?string $address = null;

    private ?AutoResponder $autoResponder = null;

    /**
     * @var string[]|null
     */
    private ?array $forwardAddresses = null;

    private ?bool $isCatchAll = null;

    private ?Mailbox $mailbox = null;

    private string $projectId;

    public function __construct(string $projectId)
    {
        $this->projectId = $projectId;
    }

    public function getAddress(): ?string
    {
        return $this->address ?? null;
    }

    public function getAutoResponder(): ?AutoResponder
    {
        return $this->autoResponder ?? null;
    }

    /**
     * @return string[]|null
     */
    public function getForwardAddresses(): ?array
    {
        return $this->forwardAddresses ?? null;
    }

    public function getIsCatchAll(): ?bool
    {
        return $this->isCatchAll ?? null;
    }

    public function getMailbox(): ?Mailbox
    {
        return $this->mailbox ?? null;
    }

    public function getProjectId(): string
    {
        return $this->projectId;
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

    public function withoutAddress(): self
    {
        $clone = clone $this;
        unset($clone->address);

        return $clone;
    }

    public function withAutoResponder(AutoResponder $autoResponder): self
    {
        $clone = clone $this;
        $clone->autoResponder = $autoResponder;

        return $clone;
    }

    public function withoutAutoResponder(): self
    {
        $clone = clone $this;
        unset($clone->autoResponder);

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

    public function withoutForwardAddresses(): self
    {
        $clone = clone $this;
        unset($clone->forwardAddresses);

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

    public function withoutIsCatchAll(): self
    {
        $clone = clone $this;
        unset($clone->isCatchAll);

        return $clone;
    }

    public function withMailbox(Mailbox $mailbox): self
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

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return MigrateMailAddressCommandRequirements Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): MigrateMailAddressCommandRequirements
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $address = null;
        if (isset($input->{'address'})) {
            $address = $input->{'address'};
        }
        $autoResponder = null;
        if (isset($input->{'autoResponder'})) {
            $autoResponder = AutoResponder::buildFromInput($input->{'autoResponder'}, validate: $validate);
        }
        $forwardAddresses = null;
        if (isset($input->{'forwardAddresses'})) {
            $forwardAddresses = $input->{'forwardAddresses'};
        }
        $isCatchAll = null;
        if (isset($input->{'isCatchAll'})) {
            $isCatchAll = (bool)($input->{'isCatchAll'});
        }
        $mailbox = null;
        if (isset($input->{'mailbox'})) {
            $mailbox = Mailbox::buildFromInput($input->{'mailbox'}, validate: $validate);
        }
        $projectId = $input->{'projectId'};

        $obj = new self($projectId);
        $obj->address = $address;
        $obj->autoResponder = $autoResponder;
        $obj->forwardAddresses = $forwardAddresses;
        $obj->isCatchAll = $isCatchAll;
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
        if (isset($this->address)) {
            $output['address'] = $this->address;
        }
        if (isset($this->autoResponder)) {
            $output['autoResponder'] = $this->autoResponder->toJson();
        }
        if (isset($this->forwardAddresses)) {
            $output['forwardAddresses'] = $this->forwardAddresses;
        }
        if (isset($this->isCatchAll)) {
            $output['isCatchAll'] = $this->isCatchAll;
        }
        if (isset($this->mailbox)) {
            $output['mailbox'] = $this->mailbox->toJson();
        }
        $output['projectId'] = $this->projectId;

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
