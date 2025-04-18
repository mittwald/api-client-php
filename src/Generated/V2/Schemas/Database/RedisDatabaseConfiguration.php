<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Database;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * The configuration for a RedisDatabase.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class RedisDatabaseConfiguration
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'description' => 'The configuration for a RedisDatabase.',
        'properties' => [
            'additionalFlags' => [
                'description' => 'Additional flags passed to the database.',
                'items' => [
                    'minLength' => 1,
                    'type' => 'string',
                ],
                'type' => 'array',
                'uniqueItems' => true,
            ],
            'maxMemory' => [
                'description' => 'The database\'s maximum memory. This may be a number, optionally suffixed by one of the IEC binary suffixes `Ki`, `Mi` or `Gi`.',
                'example' => '64Mi',
                'type' => 'string',
            ],
            'maxMemoryPolicy' => [
                'description' => 'The database\'s key eviction policy. See the [Redis documentation on key evictions](https://redis.io/docs/reference/eviction/) for more information.',
                'example' => 'allkeys-lru',
                'type' => 'string',
            ],
            'persistent' => [
                'description' => 'Persistent status of the database.',
                'type' => 'boolean',
            ],
        ],
        'type' => 'object',
    ];

    /**
     * Additional flags passed to the database.
     *
     * @var string[]|null
     */
    private ?array $additionalFlags = null;

    /**
     * The database's maximum memory. This may be a number, optionally suffixed by one of the IEC binary suffixes `Ki`, `Mi` or `Gi`.
     */
    private ?string $maxMemory = null;

    /**
     * The database's key eviction policy. See the [Redis documentation on key evictions](https://redis.io/docs/reference/eviction/) for more information.
     */
    private ?string $maxMemoryPolicy = null;

    /**
     * Persistent status of the database.
     */
    private ?bool $persistent = null;

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return string[]|null
     */
    public function getAdditionalFlags(): ?array
    {
        return $this->additionalFlags ?? null;
    }

    public function getMaxMemory(): ?string
    {
        return $this->maxMemory ?? null;
    }

    public function getMaxMemoryPolicy(): ?string
    {
        return $this->maxMemoryPolicy ?? null;
    }

    public function getPersistent(): ?bool
    {
        return $this->persistent ?? null;
    }

    /**
     * @param string[] $additionalFlags
     */
    public function withAdditionalFlags(array $additionalFlags): self
    {
        $validator = new Validator();
        $validator->validate($additionalFlags, self::$schema['properties']['additionalFlags']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->additionalFlags = $additionalFlags;

        return $clone;
    }

    public function withoutAdditionalFlags(): self
    {
        $clone = clone $this;
        unset($clone->additionalFlags);

        return $clone;
    }

    public function withMaxMemory(string $maxMemory): self
    {
        $validator = new Validator();
        $validator->validate($maxMemory, self::$schema['properties']['maxMemory']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->maxMemory = $maxMemory;

        return $clone;
    }

    public function withoutMaxMemory(): self
    {
        $clone = clone $this;
        unset($clone->maxMemory);

        return $clone;
    }

    public function withMaxMemoryPolicy(string $maxMemoryPolicy): self
    {
        $validator = new Validator();
        $validator->validate($maxMemoryPolicy, self::$schema['properties']['maxMemoryPolicy']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->maxMemoryPolicy = $maxMemoryPolicy;

        return $clone;
    }

    public function withoutMaxMemoryPolicy(): self
    {
        $clone = clone $this;
        unset($clone->maxMemoryPolicy);

        return $clone;
    }

    public function withPersistent(bool $persistent): self
    {
        $validator = new Validator();
        $validator->validate($persistent, self::$schema['properties']['persistent']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->persistent = $persistent;

        return $clone;
    }

    public function withoutPersistent(): self
    {
        $clone = clone $this;
        unset($clone->persistent);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return RedisDatabaseConfiguration Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): RedisDatabaseConfiguration
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $additionalFlags = null;
        if (isset($input->{'additionalFlags'})) {
            $additionalFlags = $input->{'additionalFlags'};
        }
        $maxMemory = null;
        if (isset($input->{'maxMemory'})) {
            $maxMemory = $input->{'maxMemory'};
        }
        $maxMemoryPolicy = null;
        if (isset($input->{'maxMemoryPolicy'})) {
            $maxMemoryPolicy = $input->{'maxMemoryPolicy'};
        }
        $persistent = null;
        if (isset($input->{'persistent'})) {
            $persistent = (bool)($input->{'persistent'});
        }

        $obj = new self();
        $obj->additionalFlags = $additionalFlags;
        $obj->maxMemory = $maxMemory;
        $obj->maxMemoryPolicy = $maxMemoryPolicy;
        $obj->persistent = $persistent;
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
        if (isset($this->additionalFlags)) {
            $output['additionalFlags'] = $this->additionalFlags;
        }
        if (isset($this->maxMemory)) {
            $output['maxMemory'] = $this->maxMemory;
        }
        if (isset($this->maxMemoryPolicy)) {
            $output['maxMemoryPolicy'] = $this->maxMemoryPolicy;
        }
        if (isset($this->persistent)) {
            $output['persistent'] = $this->persistent;
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
