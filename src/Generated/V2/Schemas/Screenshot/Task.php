<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Screenshot;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Commons\Error;

class Task
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'executedAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'fileReference' => [
                'type' => 'string',
            ],
            'id' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'priority' => [
                'type' => 'number',
            ],
            'settings' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.screenshot.ScreenshotSettings',
            ],
            'target' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.screenshot.Target',
            ],
            'taskState' => [
                'oneOf' => [
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.screenshot.LifecycleState',
                    ],
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.commons.Error',
                    ],
                ],
            ],
        ],
        'required' => [
            'id',
            'settings',
            'target',
            'priority',
        ],
        'type' => 'object',
    ];

    /**
     * @var DateTime|null
     */
    private ?DateTime $executedAt = null;

    /**
     * @var string|null
     */
    private ?string $fileReference = null;

    /**
     * @var string
     */
    private string $id;

    /**
     * @var int|float
     */
    private int|float $priority;

    /**
     * @var ScreenshotSettings
     */
    private ScreenshotSettings $settings;

    /**
     * @var Target
     */
    private Target $target;

    /**
     * @var string|Error|null
     */
    private string|Error|null $taskState = null;

    /**
     * @param string $id
     * @param int|float $priority
     * @param ScreenshotSettings $settings
     * @param Target $target
     */
    public function __construct(string $id, int|float $priority, ScreenshotSettings $settings, Target $target)
    {
        $this->id = $id;
        $this->priority = $priority;
        $this->settings = $settings;
        $this->target = $target;
    }

    /**
     * @return DateTime|null
     */
    public function getExecutedAt(): ?DateTime
    {
        return $this->executedAt ?? null;
    }

    /**
     * @return string|null
     */
    public function getFileReference(): ?string
    {
        return $this->fileReference ?? null;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return int|float
     */
    public function getPriority(): int|float
    {
        return $this->priority;
    }

    /**
     * @return ScreenshotSettings
     */
    public function getSettings(): ScreenshotSettings
    {
        return $this->settings;
    }

    /**
     * @return Target
     */
    public function getTarget(): Target
    {
        return $this->target;
    }

    /**
     * @return string|Error|null
     */
    public function getTaskState(): Error|string|null
    {
        return $this->taskState;
    }

    /**
     * @param DateTime $executedAt
     * @return self
     */
    public function withExecutedAt(DateTime $executedAt): self
    {
        $clone = clone $this;
        $clone->executedAt = $executedAt;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutExecutedAt(): self
    {
        $clone = clone $this;
        unset($clone->executedAt);

        return $clone;
    }

    /**
     * @param string $fileReference
     * @return self
     */
    public function withFileReference(string $fileReference): self
    {
        $validator = new Validator();
        $validator->validate($fileReference, static::$schema['properties']['fileReference']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->fileReference = $fileReference;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutFileReference(): self
    {
        $clone = clone $this;
        unset($clone->fileReference);

        return $clone;
    }

    /**
     * @param string $id
     * @return self
     */
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

    /**
     * @param int|float $priority
     * @return self
     */
    public function withPriority(int|float $priority): self
    {
        $validator = new Validator();
        $validator->validate($priority, static::$schema['properties']['priority']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->priority = $priority;

        return $clone;
    }

    /**
     * @param ScreenshotSettings $settings
     * @return self
     */
    public function withSettings(ScreenshotSettings $settings): self
    {
        $clone = clone $this;
        $clone->settings = $settings;

        return $clone;
    }

    /**
     * @param Target $target
     * @return self
     */
    public function withTarget(Target $target): self
    {
        $clone = clone $this;
        $clone->target = $target;

        return $clone;
    }

    /**
     * @param string|Error $taskState
     * @return self
     */
    public function withTaskState(Error|string $taskState): self
    {
        $clone = clone $this;
        $clone->taskState = $taskState;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutTaskState(): self
    {
        $clone = clone $this;
        unset($clone->taskState);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return Task Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): Task
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $executedAt = null;
        if (isset($input->{'executedAt'})) {
            $executedAt = new DateTime($input->{'executedAt'});
        }
        $fileReference = null;
        if (isset($input->{'fileReference'})) {
            $fileReference = $input->{'fileReference'};
        }
        $id = $input->{'id'};
        $priority = str_contains($input->{'priority'}, '.') ? (float)($input->{'priority'}) : (int)($input->{'priority'});
        $settings = ScreenshotSettings::buildFromInput($input->{'settings'}, validate: $validate);
        $target = Target::buildFromInput($input->{'target'}, validate: $validate);
        $taskState = null;
        if (isset($input->{'taskState'})) {
            $taskState = match (true) {
                is_string($input->{'taskState'}) => $input->{'taskState'},
                Error::validateInput($input->{'taskState'}, true) => Error::buildFromInput($input->{'taskState'}, validate: $validate),
            };
        }

        $obj = new self($id, $priority, $settings, $target);
        $obj->executedAt = $executedAt;
        $obj->fileReference = $fileReference;
        $obj->taskState = $taskState;
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
        if (isset($this->executedAt)) {
            $output['executedAt'] = ($this->executedAt)->format(DateTime::ATOM);
        }
        if (isset($this->fileReference)) {
            $output['fileReference'] = $this->fileReference;
        }
        $output['id'] = $this->id;
        $output['priority'] = $this->priority;
        $output['settings'] = $this->settings->toJson();
        $output['target'] = $this->target->toJson();
        if (isset($this->taskState)) {
            $output['taskState'] = match (true) {
                is_string($this->taskState) => $this->taskState,
                ($this->taskState) instanceof Error => $this->taskState->toJson(),
            };
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
        $validator = new Validator();
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
        if (isset($this->executedAt)) {
            $this->executedAt = clone $this->executedAt;
        }
        if (isset($this->taskState)) {
            $this->taskState = match (true) {
                is_string($this->taskState), ($this->taskState) instanceof Error => $this->taskState,
            };
        }
    }
}
