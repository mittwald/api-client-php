<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Varnish;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.varnish.ConfigFileRef.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class ConfigFileRef
{
    /**
     * Schema used to validate input for creating instances of this class
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
            'refId',
        ],
        'type' => 'object',
    ];

    private ?ConfigFileMetadata $meta = null;

    private string $refId;

    public function __construct(string $refId)
    {
        $this->refId = $refId;
    }

    public function getMeta(): ?ConfigFileMetadata
    {
        return $this->meta ?? null;
    }

    public function getRefId(): string
    {
        return $this->refId;
    }

    public function withMeta(ConfigFileMetadata $meta): self
    {
        $clone = clone $this;
        $clone->meta = $meta;

        return $clone;
    }

    public function withoutMeta(): self
    {
        $clone = clone $this;
        unset($clone->meta);

        return $clone;
    }

    public function withRefId(string $refId): self
    {
        $validator = new Validator();
        $validator->validate($refId, static::$schema['properties']['refId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->refId = $refId;

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
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $meta = null;
        if (isset($input->{'meta'})) {
            $meta = ConfigFileMetadata::buildFromInput($input->{'meta'}, validate: $validate);
        }
        $refId = $input->{'refId'};

        $obj = new self($refId);
        $obj->meta = $meta;
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
        $output['refId'] = $this->refId;

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
