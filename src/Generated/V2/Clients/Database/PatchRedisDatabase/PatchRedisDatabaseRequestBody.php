<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Database\PatchRedisDatabase;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Database\RedisDatabaseConfiguration;

class PatchRedisDatabaseRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'configuration' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.database.RedisDatabaseConfiguration',
            ],
            'description' => [
                'example' => 'I am a database',
                'type' => 'string',
            ],
            'version' => [
                'example' => 8.1,
                'type' => 'string',
            ],
        ],
        'type' => 'object',
    ];

    private ?RedisDatabaseConfiguration $configuration = null;

    private ?string $description = null;

    private ?string $version = null;

    /**
     *
     */
    public function __construct()
    {
    }

    public function getConfiguration(): ?RedisDatabaseConfiguration
    {
        return $this->configuration ?? null;
    }

    public function getDescription(): ?string
    {
        return $this->description ?? null;
    }

    public function getVersion(): ?string
    {
        return $this->version ?? null;
    }

    public function withConfiguration(RedisDatabaseConfiguration $configuration): self
    {
        $clone = clone $this;
        $clone->configuration = $configuration;

        return $clone;
    }

    public function withoutConfiguration(): self
    {
        $clone = clone $this;
        unset($clone->configuration);

        return $clone;
    }

    public function withDescription(string $description): self
    {
        $validator = new Validator();
        $validator->validate($description, self::$internalValidationSchema['properties']['description']);
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

    public function withVersion(string $version): self
    {
        $validator = new Validator();
        $validator->validate($version, self::$internalValidationSchema['properties']['version']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->version = $version;

        return $clone;
    }

    public function withoutVersion(): self
    {
        $clone = clone $this;
        unset($clone->version);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return PatchRedisDatabaseRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): PatchRedisDatabaseRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $configuration = null;
        if (isset($input->{'configuration'})) {
            $configuration = RedisDatabaseConfiguration::buildFromInput($input->{'configuration'}, validate: $validate);
        }
        $description = null;
        if (isset($input->{'description'})) {
            $description = $input->{'description'};
        }
        $version = null;
        if (isset($input->{'version'})) {
            $version = $input->{'version'};
        }

        $obj = new self();
        $obj->configuration = $configuration;
        $obj->description = $description;
        $obj->version = $version;
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
        if (isset($this->configuration)) {
            $output['configuration'] = $this->configuration->toJson();
        }
        if (isset($this->description)) {
            $output['description'] = $this->description;
        }
        if (isset($this->version)) {
            $output['version'] = $this->version;
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
        $validator->validate($input, self::$internalValidationSchema);

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
