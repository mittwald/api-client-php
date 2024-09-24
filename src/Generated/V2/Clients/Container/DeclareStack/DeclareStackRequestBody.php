<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Container\DeclareStack;

use InvalidArgumentException;
use JsonSchema\Validator;

class DeclareStackRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'services' => [
                'additionalProperties' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.container.ServiceDeclareRequest',
                ],
                'type' => 'object',
            ],
            'volumes' => [
                'additionalProperties' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.container.VolumeDeclareRequest',
                ],
                'description' => 'Volumes belonging to a Stack. Removing results in a detach, delete must be explicit.',
                'type' => 'object',
            ],
        ],
        'type' => 'object',
    ];

    /**
     * @var mixed[]|null
     */
    private ?array $services = null;

    /**
     * Volumes belonging to a Stack. Removing results in a detach, delete must be explicit.
     *
     * @var mixed[]|null
     */
    private ?array $volumes = null;

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return mixed[]|null
     */
    public function getServices(): ?array
    {
        return $this->services ?? null;
    }

    /**
     * @return mixed[]|null
     */
    public function getVolumes(): ?array
    {
        return $this->volumes ?? null;
    }

    /**
     * @param mixed[] $services
     */
    public function withServices(array $services): self
    {
        $validator = new Validator();
        $validator->validate($services, static::$schema['properties']['services']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

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
     * @param mixed[] $volumes
     */
    public function withVolumes(array $volumes): self
    {
        $validator = new Validator();
        $validator->validate($volumes, static::$schema['properties']['volumes']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

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
     * @return DeclareStackRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): DeclareStackRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $services = null;
        if (isset($input->{'services'})) {
            $services = (array)$input->{'services'};
        }
        $volumes = null;
        if (isset($input->{'volumes'})) {
            $volumes = (array)$input->{'volumes'};
        }

        $obj = new self();
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
        if (isset($this->services)) {
            $output['services'] = $this->services;
        }
        if (isset($this->volumes)) {
            $output['volumes'] = $this->volumes;
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
