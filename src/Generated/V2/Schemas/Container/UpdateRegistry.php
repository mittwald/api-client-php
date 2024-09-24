<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Container;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.container.UpdateRegistry.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class UpdateRegistry
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'credentials' => [
                'allOf' => [
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.container.SetRegistryCredentials',
                    ],
                ],
                'nullable' => true,
            ],
            'description' => [
                'example' => 'DockerHub',
                'type' => 'string',
            ],
            'uri' => [
                'example' => 'index.docker.io',
                'type' => 'string',
            ],
        ],
        'type' => 'object',
    ];

    private ?UpdateRegistryCredentials $credentials = null;

    private ?string $description = null;

    private ?string $uri = null;

    /**
     *
     */
    public function __construct()
    {
    }

    public function getCredentials(): ?UpdateRegistryCredentials
    {
        return $this->credentials ?? null;
    }

    public function getDescription(): ?string
    {
        return $this->description ?? null;
    }

    public function getUri(): ?string
    {
        return $this->uri ?? null;
    }

    public function withCredentials(UpdateRegistryCredentials $credentials): self
    {
        $clone = clone $this;
        $clone->credentials = $credentials;

        return $clone;
    }

    public function withoutCredentials(): self
    {
        $clone = clone $this;
        unset($clone->credentials);

        return $clone;
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

    public function withUri(string $uri): self
    {
        $validator = new Validator();
        $validator->validate($uri, static::$schema['properties']['uri']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->uri = $uri;

        return $clone;
    }

    public function withoutUri(): self
    {
        $clone = clone $this;
        unset($clone->uri);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return UpdateRegistry Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): UpdateRegistry
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $credentials = null;
        if (isset($input->{'credentials'})) {
            $credentials = UpdateRegistryCredentials::buildFromInput($input->{'credentials'}, validate: $validate);
        }
        $description = null;
        if (isset($input->{'description'})) {
            $description = $input->{'description'};
        }
        $uri = null;
        if (isset($input->{'uri'})) {
            $uri = $input->{'uri'};
        }

        $obj = new self();
        $obj->credentials = $credentials;
        $obj->description = $description;
        $obj->uri = $uri;
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
        if (isset($this->credentials)) {
            $output['credentials'] = ($this->credentials)->toJson();
        }
        if (isset($this->description)) {
            $output['description'] = $this->description;
        }
        if (isset($this->uri)) {
            $output['uri'] = $this->uri;
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
        if (isset($this->credentials)) {
            $this->credentials = clone $this->credentials;
        }
    }
}
