<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Mailmigration;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.mailmigration.MigrationFinalizeJob.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class MigrationFinalizeJob
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'projectSettingMigrations' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.mailmigration.MigrationFinalizeJobProjectSetting',
            ],
        ],
        'type' => 'object',
    ];

    private ?MigrationFinalizeJobProjectSetting $projectSettingMigrations = null;

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return
     * MigrationFinalizeJobProjectSetting|null
     */
    public function getProjectSettingMigrations(): ?MigrationFinalizeJobProjectSetting
    {
        return $this->projectSettingMigrations ?? null;
    }

    public function withProjectSettingMigrations(MigrationFinalizeJobProjectSetting $projectSettingMigrations): self
    {
        $clone = clone $this;
        $clone->projectSettingMigrations = $projectSettingMigrations;

        return $clone;
    }

    public function withoutProjectSettingMigrations(): self
    {
        $clone = clone $this;
        unset($clone->projectSettingMigrations);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return MigrationFinalizeJob Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): MigrationFinalizeJob
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $projectSettingMigrations = null;
        if (isset($input->{'projectSettingMigrations'})) {
            $projectSettingMigrations = MigrationFinalizeJobProjectSetting::buildFromInput($input->{'projectSettingMigrations'}, validate: $validate);
        }

        $obj = new self();
        $obj->projectSettingMigrations = $projectSettingMigrations;
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
        if (isset($this->projectSettingMigrations)) {
            $output['projectSettingMigrations'] = $this->projectSettingMigrations->toJson();
        }

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
