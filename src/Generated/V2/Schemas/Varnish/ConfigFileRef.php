<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Varnish;

use InvalidArgumentException;

class ConfigFileRef
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'meta' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.varnish.ConfigFileMetadata',
            ],
            'refId' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'content',
        ],
        'type' => 'object',
    ];

    /**
     * @var ConfigFileMetadata|null
     */
    private ?ConfigFileMetadata $meta = null;

    /**
     * @var string|null
     */
    private ?string $refId = null;

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return ConfigFileMetadata|null
     */
    public function getMeta(): ?ConfigFileMetadata
    {
        return $this->meta ?? null;
    }

    /**
     * @return string|null
     */
    public function getRefId(): ?string
    {
        return $this->refId ?? null;
    }

    /**
     * @param ConfigFileMetadata $meta
     * @return self
     */
    public function withMeta(ConfigFileMetadata $meta): self
    {
        $clone = clone $this;
        $clone->meta = $meta;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutMeta(): self
    {
        $clone = clone $this;
        unset($clone->meta);

        return $clone;
    }

    /**
     * @param string $refId
     * @return self
     */
    public function withRefId(string $refId): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($refId, static::$schema['properties']['refId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->refId = $refId;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutRefId(): self
    {
        $clone = clone $this;
        unset($clone->refId);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ConfigFileRef Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ConfigFileRef
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $meta = null;
        if (isset($input->{'meta'})) {
            $meta = ConfigFileMetadata::buildFromInput($input->{'meta'}, validate: $validate);
        }
        $refId = null;
        if (isset($input->{'refId'})) {
            $refId = $input->{'refId'};
        }

        $obj = new self();
        $obj->meta = $meta;
        $obj->refId = $refId;
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
        if (isset($this->meta)) {
            $output['meta'] = $this->meta->toJson();
        }
        if (isset($this->refId)) {
            $output['refId'] = $this->refId;
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
        $validator = new \JsonSchema\Validator();
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
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
