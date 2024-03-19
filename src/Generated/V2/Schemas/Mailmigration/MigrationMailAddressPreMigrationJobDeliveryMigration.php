<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Mailmigration;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for
 * de.mittwald.v1.mailmigration.MigrationMailAddressPreMigrationJobDeliveryMigration.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class MigrationMailAddressPreMigrationJobDeliveryMigration
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'sourceCoabDeliveryMailbox' => [
                'type' => 'string',
            ],
            'sourceCoabDeliveryUid' => [
                'type' => 'integer',
            ],
            'targetNexusDeliveryAddress' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'sourceCoabDeliveryUid',
            'sourceCoabDeliveryMailbox',
            'targetNexusDeliveryAddress',
        ],
        'type' => 'object',
    ];

    private string $sourceCoabDeliveryMailbox;

    private int $sourceCoabDeliveryUid;

    private string $targetNexusDeliveryAddress;

    public function __construct(string $sourceCoabDeliveryMailbox, int $sourceCoabDeliveryUid, string $targetNexusDeliveryAddress)
    {
        $this->sourceCoabDeliveryMailbox = $sourceCoabDeliveryMailbox;
        $this->sourceCoabDeliveryUid = $sourceCoabDeliveryUid;
        $this->targetNexusDeliveryAddress = $targetNexusDeliveryAddress;
    }

    public function getSourceCoabDeliveryMailbox(): string
    {
        return $this->sourceCoabDeliveryMailbox;
    }

    public function getSourceCoabDeliveryUid(): int
    {
        return $this->sourceCoabDeliveryUid;
    }

    public function getTargetNexusDeliveryAddress(): string
    {
        return $this->targetNexusDeliveryAddress;
    }

    public function withSourceCoabDeliveryMailbox(string $sourceCoabDeliveryMailbox): self
    {
        $validator = new Validator();
        $validator->validate($sourceCoabDeliveryMailbox, static::$schema['properties']['sourceCoabDeliveryMailbox']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->sourceCoabDeliveryMailbox = $sourceCoabDeliveryMailbox;

        return $clone;
    }

    public function withSourceCoabDeliveryUid(int $sourceCoabDeliveryUid): self
    {
        $validator = new Validator();
        $validator->validate($sourceCoabDeliveryUid, static::$schema['properties']['sourceCoabDeliveryUid']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->sourceCoabDeliveryUid = $sourceCoabDeliveryUid;

        return $clone;
    }

    public function withTargetNexusDeliveryAddress(string $targetNexusDeliveryAddress): self
    {
        $validator = new Validator();
        $validator->validate($targetNexusDeliveryAddress, static::$schema['properties']['targetNexusDeliveryAddress']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->targetNexusDeliveryAddress = $targetNexusDeliveryAddress;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return MigrationMailAddressPreMigrationJobDeliveryMigration Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): MigrationMailAddressPreMigrationJobDeliveryMigration
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $sourceCoabDeliveryMailbox = $input->{'sourceCoabDeliveryMailbox'};
        $sourceCoabDeliveryUid = (int)($input->{'sourceCoabDeliveryUid'});
        $targetNexusDeliveryAddress = $input->{'targetNexusDeliveryAddress'};

        $obj = new self($sourceCoabDeliveryMailbox, $sourceCoabDeliveryUid, $targetNexusDeliveryAddress);

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
        $output['sourceCoabDeliveryMailbox'] = $this->sourceCoabDeliveryMailbox;
        $output['sourceCoabDeliveryUid'] = $this->sourceCoabDeliveryUid;
        $output['targetNexusDeliveryAddress'] = $this->targetNexusDeliveryAddress;

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
