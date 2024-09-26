<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Container;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.container.StackResponse.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class StackResponse
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'description' => [
                'type' => 'string',
            ],
            'disabled' => [
                'type' => 'boolean',
            ],
            'id' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'prefix' => [
                'description' => 'Prefix for all service-names in this stack.',
                'type' => 'string',
            ],
            'projectId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'services' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.container.ServiceResponse',
                ],
                'type' => 'array',
            ],
            'volumes' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.container.VolumeResponse',
                ],
                'type' => 'array',
            ],
        ],
        'required' => [
            'id',
            'projectId',
            'description',
            'disabled',
            'prefix',
        ],
        'type' => 'object',
    ];

    private string $description;

    private bool $disabled;

    private string $id;

    /**
     * Prefix for all service-names in this stack.
     */
    private string $prefix;

    private string $projectId;

    /**
     * @var ServiceResponse[]|null
     */
    private ?array $services = null;

    /**
     * @var VolumeResponse[]|null
     */
    private ?array $volumes = null;

    public function __construct(string $description, bool $disabled, string $id, string $prefix, string $projectId)
    {
        $this->description = $description;
        $this->disabled = $disabled;
        $this->id = $id;
        $this->prefix = $prefix;
        $this->projectId = $projectId;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getDisabled(): bool
    {
        return $this->disabled;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getPrefix(): string
    {
        return $this->prefix;
    }

    public function getProjectId(): string
    {
        return $this->projectId;
    }

    /**
     * @return
     * ServiceResponse[]|null
     */
    public function getServices(): ?array
    {
        return $this->services ?? null;
    }

    /**
     * @return VolumeResponse[]|null
     */
    public function getVolumes(): ?array
    {
        return $this->volumes ?? null;
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

    public function withDisabled(bool $disabled): self
    {
        $validator = new Validator();
        $validator->validate($disabled, static::$schema['properties']['disabled']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->disabled = $disabled;

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

    public function withPrefix(string $prefix): self
    {
        $validator = new Validator();
        $validator->validate($prefix, static::$schema['properties']['prefix']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->prefix = $prefix;

        return $clone;
    }

    public function withProjectId(string $projectId): self
    {
        $validator = new Validator();
        $validator->validate($projectId, static::$schema['properties']['projectId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->projectId = $projectId;

        return $clone;
    }

    /**
     * @param ServiceResponse[] $services
     */
    public function withServices(array $services): self
    {
        $clone = clone $this;
        $clone->services = $services;

        return $clone;
    }

    public function withoutServices(): self
    {
        $clone = clone $this;
        unset($clone->services);

        return $clone;
    }

    /**
     * @param VolumeResponse[] $volumes
     */
    public function withVolumes(array $volumes): self
    {
        $clone = clone $this;
        $clone->volumes = $volumes;

        return $clone;
    }

    public function withoutVolumes(): self
    {
        $clone = clone $this;
        unset($clone->volumes);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return StackResponse Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): StackResponse
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $description = $input->{'description'};
        $disabled = (bool)($input->{'disabled'});
        $id = $input->{'id'};
        $prefix = $input->{'prefix'};
        $projectId = $input->{'projectId'};
        $services = null;
        if (isset($input->{'services'})) {
            $services = array_map(fn (array|object $i): ServiceResponse => ServiceResponse::buildFromInput($i, validate: $validate), $input->{'services'});
        }
        $volumes = null;
        if (isset($input->{'volumes'})) {
            $volumes = array_map(fn (array|object $i): VolumeResponse => VolumeResponse::buildFromInput($i, validate: $validate), $input->{'volumes'});
        }

        $obj = new self($description, $disabled, $id, $prefix, $projectId);
        $obj->services = $services;
        $obj->volumes = $volumes;
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
        $output['description'] = $this->description;
        $output['disabled'] = $this->disabled;
        $output['id'] = $this->id;
        $output['prefix'] = $this->prefix;
        $output['projectId'] = $this->projectId;
        if (isset($this->services)) {
            $output['services'] = array_map(fn (ServiceResponse $i): array => $i->toJson(), $this->services);
        }
        if (isset($this->volumes)) {
            $output['volumes'] = array_map(fn (VolumeResponse $i): array => $i->toJson(), $this->volumes);
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