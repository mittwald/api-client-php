<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Mailmigration;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for
 * de.mittwald.v1.mailmigration.CheckMigrationIsPossibleResponse.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class CheckMigrationIsPossibleResponse
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'checkMigrationIsPossibleErrors' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.mailmigration.PossibleCheckErrors',
            ],
            'migrationFinalizeJobs' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.mailmigration.MigrationFinalizeJob',
            ],
            'migrationMailAddress' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.mailmigration.MigrationMailAddress',
                ],
                'type' => 'array',
            ],
            'migrationMailbox' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.mailmigration.MigrationMailbox',
                ],
                'type' => 'array',
            ],
        ],
        'required' => [
            'migrationMailAddress',
            'migrationMailbox',
            'migrationFinalizeJobs',
        ],
        'type' => 'object',
    ];

    private ?PossibleCheckErrors $checkMigrationIsPossibleErrors = null;

    private MigrationFinalizeJob $migrationFinalizeJobs;

    /**
     * @var MigrationMailAddress[]
     */
    private array $migrationMailAddress;

    /**
     * @var MigrationMailbox[]
     */
    private array $migrationMailbox;

    /**
     * @param MigrationMailAddress[] $migrationMailAddress
     * @param MigrationMailbox[] $migrationMailbox
     */
    public function __construct(MigrationFinalizeJob $migrationFinalizeJobs, array $migrationMailAddress, array $migrationMailbox)
    {
        $this->migrationFinalizeJobs = $migrationFinalizeJobs;
        $this->migrationMailAddress = $migrationMailAddress;
        $this->migrationMailbox = $migrationMailbox;
    }

    /**
     * @return
     * PossibleCheckErrors|null
     */
    public function getCheckMigrationIsPossibleErrors(): ?PossibleCheckErrors
    {
        return $this->checkMigrationIsPossibleErrors ?? null;
    }

    /**
     * @return
     * MigrationFinalizeJob
     */
    public function getMigrationFinalizeJobs(): MigrationFinalizeJob
    {
        return $this->migrationFinalizeJobs;
    }

    /**
     * @return
     * MigrationMailAddress[]
     */
    public function getMigrationMailAddress(): array
    {
        return $this->migrationMailAddress;
    }

    /**
     * @return
     * MigrationMailbox[]
     */
    public function getMigrationMailbox(): array
    {
        return $this->migrationMailbox;
    }

    public function withCheckMigrationIsPossibleErrors(PossibleCheckErrors $checkMigrationIsPossibleErrors): self
    {
        $clone = clone $this;
        $clone->checkMigrationIsPossibleErrors = $checkMigrationIsPossibleErrors;

        return $clone;
    }

    public function withoutCheckMigrationIsPossibleErrors(): self
    {
        $clone = clone $this;
        unset($clone->checkMigrationIsPossibleErrors);

        return $clone;
    }

    public function withMigrationFinalizeJobs(MigrationFinalizeJob $migrationFinalizeJobs): self
    {
        $clone = clone $this;
        $clone->migrationFinalizeJobs = $migrationFinalizeJobs;

        return $clone;
    }

    /**
     * @param MigrationMailAddress[] $migrationMailAddress
     */
    public function withMigrationMailAddress(array $migrationMailAddress): self
    {
        $clone = clone $this;
        $clone->migrationMailAddress = $migrationMailAddress;

        return $clone;
    }

    /**
     * @param MigrationMailbox[] $migrationMailbox
     */
    public function withMigrationMailbox(array $migrationMailbox): self
    {
        $clone = clone $this;
        $clone->migrationMailbox = $migrationMailbox;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CheckMigrationIsPossibleResponse Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CheckMigrationIsPossibleResponse
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $checkMigrationIsPossibleErrors = null;
        if (isset($input->{'checkMigrationIsPossibleErrors'})) {
            $checkMigrationIsPossibleErrors = PossibleCheckErrors::buildFromInput($input->{'checkMigrationIsPossibleErrors'}, validate: $validate);
        }
        $migrationFinalizeJobs = MigrationFinalizeJob::buildFromInput($input->{'migrationFinalizeJobs'}, validate: $validate);
        $migrationMailAddress = array_map(fn (array|object $i): MigrationMailAddress => MigrationMailAddress::buildFromInput($i, validate: $validate), $input->{'migrationMailAddress'});
        $migrationMailbox = array_map(fn (array|object $i): MigrationMailbox => MigrationMailbox::buildFromInput($i, validate: $validate), $input->{'migrationMailbox'});

        $obj = new self($migrationFinalizeJobs, $migrationMailAddress, $migrationMailbox);
        $obj->checkMigrationIsPossibleErrors = $checkMigrationIsPossibleErrors;
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
        if (isset($this->checkMigrationIsPossibleErrors)) {
            $output['checkMigrationIsPossibleErrors'] = $this->checkMigrationIsPossibleErrors->toJson();
        }
        $output['migrationFinalizeJobs'] = $this->migrationFinalizeJobs->toJson();
        $output['migrationMailAddress'] = array_map(fn (MigrationMailAddress $i): array => $i->toJson(), $this->migrationMailAddress);
        $output['migrationMailbox'] = array_map(fn (MigrationMailbox $i): array => $i->toJson(), $this->migrationMailbox);

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
