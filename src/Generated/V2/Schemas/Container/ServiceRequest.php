<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Container;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.container.ServiceRequest.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class ServiceRequest
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'command' => [
                'description' => 'Defaults to image config on empty',
                'example' => [
                    'mysqld',
                ],
                'items' => [
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
            'description' => [
                'example' => 'MySQL DB',
                'type' => 'string',
            ],
            'entrypoint' => [
                'description' => 'Defaults to image config on empty',
                'example' => [
                    'docker-entrypoint.sh',
                ],
                'items' => [
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
            'envs' => [
                'additionalProperties' => [
                    'type' => 'string',
                ],
                'example' => [
                    'MYSQL_DATABASE' => 'my_db',
                    'MYSQL_PASSWORD' => 'my_password',
                    'MYSQL_ROOT_PASSWORD' => 'my_root_password',
                    'MYSQL_USER' => 'my_user',
                ],
                'type' => 'object',
            ],
            'image' => [
                'example' => 'mysql',
                'type' => 'string',
            ],
            'ports' => [
                'example' => [
                    '3306:3306/tcp',
                ],
                'items' => [
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
            'volumes' => [
                'example' => [
                    'data:/var/lib/mysql:ro',
                ],
                'items' => [
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
        ],
        'type' => 'object',
    ];

    /**
     * Defaults to image config on empty
     *
     * @var string[]|null
     */
    private ?array $command = null;

    private ?string $description = null;

    /**
     * Defaults to image config on empty
     *
     * @var string[]|null
     */
    private ?array $entrypoint = null;

    /**
     * @var string[]|null
     */
    private ?array $envs = null;

    private ?string $image = null;

    /**
     * @var string[]|null
     */
    private ?array $ports = null;

    /**
     * @var string[]|null
     */
    private ?array $volumes = null;

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return string[]|null
     */
    public function getCommand(): ?array
    {
        return $this->command ?? null;
    }

    public function getDescription(): ?string
    {
        return $this->description ?? null;
    }

    /**
     * @return string[]|null
     */
    public function getEntrypoint(): ?array
    {
        return $this->entrypoint ?? null;
    }

    /**
     * @return string[]|null
     */
    public function getEnvs(): ?array
    {
        return $this->envs ?? null;
    }

    public function getImage(): ?string
    {
        return $this->image ?? null;
    }

    /**
     * @return string[]|null
     */
    public function getPorts(): ?array
    {
        return $this->ports ?? null;
    }

    /**
     * @return string[]|null
     */
    public function getVolumes(): ?array
    {
        return $this->volumes ?? null;
    }

    /**
     * @param string[] $command
     */
    public function withCommand(array $command): self
    {
        $validator = new Validator();
        $validator->validate($command, self::$schema['properties']['command']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->command = $command;

        return $clone;
    }

    public function withoutCommand(): self
    {
        $clone = clone $this;
        unset($clone->command);

        return $clone;
    }

    public function withDescription(string $description): self
    {
        $validator = new Validator();
        $validator->validate($description, self::$schema['properties']['description']);
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

    /**
     * @param string[] $entrypoint
     */
    public function withEntrypoint(array $entrypoint): self
    {
        $validator = new Validator();
        $validator->validate($entrypoint, self::$schema['properties']['entrypoint']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->entrypoint = $entrypoint;

        return $clone;
    }

    public function withoutEntrypoint(): self
    {
        $clone = clone $this;
        unset($clone->entrypoint);

        return $clone;
    }

    /**
     * @param string[] $envs
     */
    public function withEnvs(array $envs): self
    {
        $validator = new Validator();
        $validator->validate($envs, self::$schema['properties']['envs']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->envs = $envs;

        return $clone;
    }

    public function withoutEnvs(): self
    {
        $clone = clone $this;
        unset($clone->envs);

        return $clone;
    }

    public function withImage(string $image): self
    {
        $validator = new Validator();
        $validator->validate($image, self::$schema['properties']['image']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->image = $image;

        return $clone;
    }

    public function withoutImage(): self
    {
        $clone = clone $this;
        unset($clone->image);

        return $clone;
    }

    /**
     * @param string[] $ports
     */
    public function withPorts(array $ports): self
    {
        $validator = new Validator();
        $validator->validate($ports, self::$schema['properties']['ports']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->ports = $ports;

        return $clone;
    }

    public function withoutPorts(): self
    {
        $clone = clone $this;
        unset($clone->ports);

        return $clone;
    }

    /**
     * @param string[] $volumes
     */
    public function withVolumes(array $volumes): self
    {
        $validator = new Validator();
        $validator->validate($volumes, self::$schema['properties']['volumes']);
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
     * @return ServiceRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ServiceRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $command = null;
        if (isset($input->{'command'})) {
            $command = $input->{'command'};
        }
        $description = null;
        if (isset($input->{'description'})) {
            $description = $input->{'description'};
        }
        $entrypoint = null;
        if (isset($input->{'entrypoint'})) {
            $entrypoint = $input->{'entrypoint'};
        }
        $envs = null;
        if (isset($input->{'envs'})) {
            $envs = (array)$input->{'envs'};
        }
        $image = null;
        if (isset($input->{'image'})) {
            $image = $input->{'image'};
        }
        $ports = null;
        if (isset($input->{'ports'})) {
            $ports = $input->{'ports'};
        }
        $volumes = null;
        if (isset($input->{'volumes'})) {
            $volumes = $input->{'volumes'};
        }

        $obj = new self();
        $obj->command = $command;
        $obj->description = $description;
        $obj->entrypoint = $entrypoint;
        $obj->envs = $envs;
        $obj->image = $image;
        $obj->ports = $ports;
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
        if (isset($this->command)) {
            $output['command'] = $this->command;
        }
        if (isset($this->description)) {
            $output['description'] = $this->description;
        }
        if (isset($this->entrypoint)) {
            $output['entrypoint'] = $this->entrypoint;
        }
        if (isset($this->envs)) {
            $output['envs'] = $this->envs;
        }
        if (isset($this->image)) {
            $output['image'] = $this->image;
        }
        if (isset($this->ports)) {
            $output['ports'] = $this->ports;
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
