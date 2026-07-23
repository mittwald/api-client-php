<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Container\UpdateStack;

use InvalidArgumentException;
use JsonSchema\Validator;

class UpdateStackRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'description' => [
                'example' => 'uptime kuma',
                'type' => 'string',
            ],
            'services' => [
                'additionalProperties' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.container.ServiceRequest',
                ],
                'description' => 'A set of containers that should be started in this stack. The key is relevant for
network connectivity between containers, because you can use it as DNS name to
resolve this containers from other containers running in the same project (or from
managed apps running in the same project).

To **delete** an existing container from a stack using a `PUT` request, simply omit
it from the request body. Using a `PATCH` request, set it to an empty object `{}`.

Keys must be strings of max 63 characters.
',
                'type' => 'object',
            ],
            'updateSchedule' => [
                'description' => 'Schedule for automatic image updates of this stack. Set to `null` to remove the
schedule; omit the property to leave it unchanged.
',
                'nullable' => true,
                'properties' => [
                    'cron' => [
                        'example' => '* * * * *',
                        'type' => 'string',
                    ],
                    'timezone' => [
                        'description' => 'Valid timezones can be retrieved via GET /v2/time-zones',
                        'example' => 'Europe/Berlin',
                        'type' => 'string',
                    ],
                ],
                'required' => [
                    'cron',
                ],
                'type' => 'object',
            ],
            'volumes' => [
                'additionalProperties' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.container.VolumeRequest',
                ],
                'description' => 'A set of named volumes that should be created for this stack. Removing a volume
from this set will not delete the volume (for safety), but only detach it from the
stack. To delete a volume, use the `DELETE /stacks/{stackId}/volumes/{volumeId}` endpoint.
',
                'type' => 'object',
            ],
        ],
        'type' => 'object',
    ];

    private ?string $description = null;

    /**
     * A set of containers that should be started in this stack. The key is relevant for
     * network connectivity between containers, because you can use it as DNS name to
     * resolve this containers from other containers running in the same project (or from
     * managed apps running in the same project).
     *
     * To **delete** an existing container from a stack using a `PUT` request, simply omit
     * it from the request body. Using a `PATCH` request, set it to an empty object `{}`.
     *
     * Keys must be strings of max 63 characters.
     *
     *
     * @var mixed[]|null
     */
    private ?array $services = null;

    /**
     * Schedule for automatic image updates of this stack. Set to `null` to remove the
     * schedule; omit the property to leave it unchanged.
     *
     */
    private ?UpdateStackRequestBodyUpdateSchedule $updateSchedule = null;

    /**
     * A set of named volumes that should be created for this stack. Removing a volume
     * from this set will not delete the volume (for safety), but only detach it from the
     * stack. To delete a volume, use the `DELETE /stacks/{stackId}/volumes/{volumeId}` endpoint.
     *
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

    public function getDescription(): ?string
    {
        return $this->description ?? null;
    }

    /**
     * @return mixed[]|null
     */
    public function getServices(): ?array
    {
        return $this->services ?? null;
    }

    public function getUpdateSchedule(): ?UpdateStackRequestBodyUpdateSchedule
    {
        return $this->updateSchedule ?? null;
    }

    /**
     * @return mixed[]|null
     */
    public function getVolumes(): ?array
    {
        return $this->volumes ?? null;
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

    /**
     * @param mixed[] $services
     */
    public function withServices(array $services): self
    {
        $validator = new Validator();
        $validator->validate($services, self::$internalValidationSchema['properties']['services']);
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

    public function withUpdateSchedule(UpdateStackRequestBodyUpdateSchedule $updateSchedule): self
    {
        $clone = clone $this;
        $clone->updateSchedule = $updateSchedule;

        return $clone;
    }

    public function withoutUpdateSchedule(): self
    {
        $clone = clone $this;
        unset($clone->updateSchedule);

        return $clone;
    }

    /**
     * @param mixed[] $volumes
     */
    public function withVolumes(array $volumes): self
    {
        $validator = new Validator();
        $validator->validate($volumes, self::$internalValidationSchema['properties']['volumes']);
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
     * @return UpdateStackRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): UpdateStackRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $description = null;
        if (isset($input->{'description'})) {
            $description = $input->{'description'};
        }
        $services = null;
        if (isset($input->{'services'})) {
            $services = (array)$input->{'services'};
        }
        $updateSchedule = null;
        if (isset($input->{'updateSchedule'})) {
            $updateSchedule = UpdateStackRequestBodyUpdateSchedule::buildFromInput($input->{'updateSchedule'}, validate: $validate);
        }
        $volumes = null;
        if (isset($input->{'volumes'})) {
            $volumes = (array)$input->{'volumes'};
        }

        $obj = new self();
        $obj->description = $description;
        $obj->services = $services;
        $obj->updateSchedule = $updateSchedule;
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
        if (isset($this->description)) {
            $output['description'] = $this->description;
        }
        if (isset($this->services)) {
            $output['services'] = $this->services;
        }
        if (isset($this->updateSchedule)) {
            $output['updateSchedule'] = ($this->updateSchedule)->toJson();
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
        if (isset($this->updateSchedule)) {
            $this->updateSchedule = clone $this->updateSchedule;
        }
    }
}
