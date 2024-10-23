<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Container;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.container.VolumeResponse.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class VolumeResponse
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'id' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'name' => [
                'type' => 'string',
            ],
            'orphaned' => [
                'description' => 'Whether the Volume is attached to a Stack.',
                'type' => 'boolean',
            ],
            'stackId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'storageUsageInBytes' => [
                'type' => 'integer',
            ],
            'storageUsageInBytesSetAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
        ],
        'required' => [
            'id',
            'stackId',
            'name',
            'orphaned',
            'storageUsageInBytes',
            'storageUsageInBytesSetAt',
        ],
        'type' => 'object',
    ];

    private string $id;

    private string $name;

    /**
     * Whether the Volume is attached to a Stack.
     */
    private bool $orphaned;

    private string $stackId;

    private int $storageUsageInBytes;

    private DateTime $storageUsageInBytesSetAt;

    public function __construct(string $id, string $name, bool $orphaned, string $stackId, int $storageUsageInBytes, DateTime $storageUsageInBytesSetAt)
    {
        $this->id = $id;
        $this->name = $name;
        $this->orphaned = $orphaned;
        $this->stackId = $stackId;
        $this->storageUsageInBytes = $storageUsageInBytes;
        $this->storageUsageInBytesSetAt = $storageUsageInBytesSetAt;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getOrphaned(): bool
    {
        return $this->orphaned;
    }

    public function getStackId(): string
    {
        return $this->stackId;
    }

    public function getStorageUsageInBytes(): int
    {
        return $this->storageUsageInBytes;
    }

    public function getStorageUsageInBytesSetAt(): DateTime
    {
        return $this->storageUsageInBytesSetAt;
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

    public function withOrphaned(bool $orphaned): self
    {
        $validator = new Validator();
        $validator->validate($orphaned, static::$schema['properties']['orphaned']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->orphaned = $orphaned;

        return $clone;
    }

    public function withStackId(string $stackId): self
    {
        $validator = new Validator();
        $validator->validate($stackId, static::$schema['properties']['stackId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->stackId = $stackId;

        return $clone;
    }

    public function withStorageUsageInBytes(int $storageUsageInBytes): self
    {
        $validator = new Validator();
        $validator->validate($storageUsageInBytes, static::$schema['properties']['storageUsageInBytes']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->storageUsageInBytes = $storageUsageInBytes;

        return $clone;
    }

    public function withStorageUsageInBytesSetAt(DateTime $storageUsageInBytesSetAt): self
    {
        $clone = clone $this;
        $clone->storageUsageInBytesSetAt = $storageUsageInBytesSetAt;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return VolumeResponse Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): VolumeResponse
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $id = $input->{'id'};
        $name = $input->{'name'};
        $orphaned = (bool)($input->{'orphaned'});
        $stackId = $input->{'stackId'};
        $storageUsageInBytes = (int)($input->{'storageUsageInBytes'});
        $storageUsageInBytesSetAt = new DateTime($input->{'storageUsageInBytesSetAt'});

        $obj = new self($id, $name, $orphaned, $stackId, $storageUsageInBytes, $storageUsageInBytesSetAt);

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
        $output['id'] = $this->id;
        $output['name'] = $this->name;
        $output['orphaned'] = $this->orphaned;
        $output['stackId'] = $this->stackId;
        $output['storageUsageInBytes'] = $this->storageUsageInBytes;
        $output['storageUsageInBytesSetAt'] = ($this->storageUsageInBytesSetAt)->format(DateTime::ATOM);

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
        $this->storageUsageInBytesSetAt = clone $this->storageUsageInBytesSetAt;
    }
}
