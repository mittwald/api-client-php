<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Mailmigration;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.mailmigration.MigrationMailbox.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class MigrationMailbox
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'description' => [
                'type' => 'string',
            ],
            'finished' => [
                'type' => 'boolean',
            ],
            'id' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'migrationJobs' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.mailmigration.MigrationMailboxJob',
            ],
            'name' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'id',
            'name',
            'migrationJobs',
            'finished',
        ],
        'type' => 'object',
    ];

    private ?string $description = null;

    private bool $finished;

    private string $id;

    private MigrationMailboxJob $migrationJobs;

    private string $name;

    public function __construct(bool $finished, string $id, MigrationMailboxJob $migrationJobs, string $name)
    {
        $this->finished = $finished;
        $this->id = $id;
        $this->migrationJobs = $migrationJobs;
        $this->name = $name;
    }

    public function getDescription(): ?string
    {
        return $this->description ?? null;
    }

    public function getFinished(): bool
    {
        return $this->finished;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getMigrationJobs(): MigrationMailboxJob
    {
        return $this->migrationJobs;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function withDescription(string $description): self
    {
        $validator = new Validator();
        $validator->validate($description, static::$schema['properties']['description']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->description = $description;

        return $clone;
    }

    public function withoutDescription(): self
    {
        $clone = clone $this;
        unset($clone->description);

        return $clone;
    }

    public function withFinished(bool $finished): self
    {
        $validator = new Validator();
        $validator->validate($finished, static::$schema['properties']['finished']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->finished = $finished;

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

    public function withMigrationJobs(MigrationMailboxJob $migrationJobs): self
    {
        $clone = clone $this;
        $clone->migrationJobs = $migrationJobs;

        return $clone;
    }

    public function withName(string $name): self
    {
        $validator = new Validator();
        $validator->validate($name, static::$schema['properties']['name']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->name = $name;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return MigrationMailbox Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): MigrationMailbox
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $description = null;
        if (isset($input->{'description'})) {
            $description = $input->{'description'};
        }
        $finished = (bool)($input->{'finished'});
        $id = $input->{'id'};
        $migrationJobs = MigrationMailboxJob::buildFromInput($input->{'migrationJobs'}, validate: $validate);
        $name = $input->{'name'};

        $obj = new self($finished, $id, $migrationJobs, $name);
        $obj->description = $description;
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
        if (isset($this->description)) {
            $output['description'] = $this->description;
        }
        $output['finished'] = $this->finished;
        $output['id'] = $this->id;
        $output['migrationJobs'] = $this->migrationJobs->toJson();
        $output['name'] = $this->name;

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
