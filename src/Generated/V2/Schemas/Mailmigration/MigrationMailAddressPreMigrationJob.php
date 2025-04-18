<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Mailmigration;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for
 * de.mittwald.v1.mailmigration.MigrationMailAddressPreMigrationJob.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class MigrationMailAddressPreMigrationJob
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'aliasSet' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.mailmigration.MigrationMailAddressPreMigrationJobAliasSet',
                ],
                'type' => 'array',
            ],
            'deliveryMigrations' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.mailmigration.MigrationMailAddressPreMigrationJobDeliveryMigration',
                ],
                'type' => 'array',
            ],
        ],
        'required' => [
            'deliveryMigrations',
            'aliasSet',
        ],
        'type' => 'object',
    ];

    /**
     * @var MigrationMailAddressPreMigrationJobAliasSet[]
     */
    private array $aliasSet;

    /**
     * @var MigrationMailAddressPreMigrationJobDeliveryMigration[]
     */
    private array $deliveryMigrations;

    /**
     * @param MigrationMailAddressPreMigrationJobAliasSet[] $aliasSet
     * @param MigrationMailAddressPreMigrationJobDeliveryMigration[] $deliveryMigrations
     */
    public function __construct(array $aliasSet, array $deliveryMigrations)
    {
        $this->aliasSet = $aliasSet;
        $this->deliveryMigrations = $deliveryMigrations;
    }

    /**
     * @return MigrationMailAddressPreMigrationJobAliasSet[]
     */
    public function getAliasSet(): array
    {
        return $this->aliasSet;
    }

    /**
     * @return MigrationMailAddressPreMigrationJobDeliveryMigration[]
     */
    public function getDeliveryMigrations(): array
    {
        return $this->deliveryMigrations;
    }

    /**
     * @param MigrationMailAddressPreMigrationJobAliasSet[] $aliasSet
     */
    public function withAliasSet(array $aliasSet): self
    {
        $clone = clone $this;
        $clone->aliasSet = $aliasSet;

        return $clone;
    }

    /**
     * @param MigrationMailAddressPreMigrationJobDeliveryMigration[] $deliveryMigrations
     */
    public function withDeliveryMigrations(array $deliveryMigrations): self
    {
        $clone = clone $this;
        $clone->deliveryMigrations = $deliveryMigrations;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return MigrationMailAddressPreMigrationJob Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): MigrationMailAddressPreMigrationJob
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $aliasSet = array_map(fn (array|object $i): MigrationMailAddressPreMigrationJobAliasSet => MigrationMailAddressPreMigrationJobAliasSet::buildFromInput($i, validate: $validate), $input->{'aliasSet'});
        $deliveryMigrations = array_map(fn (array|object $i): MigrationMailAddressPreMigrationJobDeliveryMigration => MigrationMailAddressPreMigrationJobDeliveryMigration::buildFromInput($i, validate: $validate), $input->{'deliveryMigrations'});

        $obj = new self($aliasSet, $deliveryMigrations);

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
        $output['aliasSet'] = array_map(fn (MigrationMailAddressPreMigrationJobAliasSet $i): array => $i->toJson(), $this->aliasSet);
        $output['deliveryMigrations'] = array_map(fn (MigrationMailAddressPreMigrationJobDeliveryMigration $i): array => $i->toJson(), $this->deliveryMigrations);

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
    }
}
