<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\App;

use InvalidArgumentException;

class UserInput
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'dataSource' => [
                'description' => 'Optional field to tell the frontend, which data to put into the select',
                'type' => 'string',
            ],
            'dataType' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.app.UserInputDataType',
            ],
            'defaultValue' => [
                'type' => 'string',
            ],
            'format' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.app.UserInputFormat',
            ],
            'lifecycleConstraint' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.app.AppInstallationLifecycle',
            ],
            'name' => [
                'type' => 'string',
            ],
            'positionMeta' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.app.UserInputPositionMeta',
            ],
            'required' => [
                'type' => 'boolean',
            ],
            'validationSchema' => [
                'description' => 'JSON Schema formatted (https://json-schema.org/)',
                'type' => 'string',
            ],
        ],
        'required' => [
            'name',
            'dataType',
            'validationSchema',
            'lifecycleConstraint',
            'required',
        ],
        'type' => 'object',
    ];

    /**
     * Optional field to tell the frontend, which data to put into the select
     *
     * @var string|null
     */
    private ?string $dataSource = null;

    /**
     * @var UserInputDataType
     */
    private UserInputDataType $dataType;

    /**
     * @var string|null
     */
    private ?string $defaultValue = null;

    /**
     * @var UserInputFormat|null
     */
    private ?UserInputFormat $format = null;

    /**
     * @var AppInstallationLifecycle
     */
    private AppInstallationLifecycle $lifecycleConstraint;

    /**
     * @var string
     */
    private string $name;

    /**
     * @var UserInputPositionMeta|null
     */
    private ?UserInputPositionMeta $positionMeta = null;

    /**
     * @var bool
     */
    private bool $required;

    /**
     * JSON Schema formatted (https://json-schema.org/)
     *
     * @var string
     */
    private string $validationSchema;

    /**
     * @param UserInputDataType $dataType
     * @param AppInstallationLifecycle $lifecycleConstraint
     * @param string $name
     * @param bool $required
     * @param string $validationSchema
     */
    public function __construct(UserInputDataType $dataType, AppInstallationLifecycle $lifecycleConstraint, string $name, bool $required, string $validationSchema)
    {
        $this->dataType = $dataType;
        $this->lifecycleConstraint = $lifecycleConstraint;
        $this->name = $name;
        $this->required = $required;
        $this->validationSchema = $validationSchema;
    }

    /**
     * @return string|null
     */
    public function getDataSource(): ?string
    {
        return $this->dataSource ?? null;
    }

    /**
     * @return UserInputDataType
     */
    public function getDataType(): UserInputDataType
    {
        return $this->dataType;
    }

    /**
     * @return string|null
     */
    public function getDefaultValue(): ?string
    {
        return $this->defaultValue ?? null;
    }

    /**
     * @return UserInputFormat|null
     */
    public function getFormat(): ?UserInputFormat
    {
        return $this->format ?? null;
    }

    /**
     * @return AppInstallationLifecycle
     */
    public function getLifecycleConstraint(): AppInstallationLifecycle
    {
        return $this->lifecycleConstraint;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return UserInputPositionMeta|null
     */
    public function getPositionMeta(): ?UserInputPositionMeta
    {
        return $this->positionMeta ?? null;
    }

    /**
     * @return bool
     */
    public function getRequired(): bool
    {
        return $this->required;
    }

    /**
     * @return string
     */
    public function getValidationSchema(): string
    {
        return $this->validationSchema;
    }

    /**
     * @param string $dataSource
     * @return self
     */
    public function withDataSource(string $dataSource): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($dataSource, static::$schema['properties']['dataSource']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->dataSource = $dataSource;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutDataSource(): self
    {
        $clone = clone $this;
        unset($clone->dataSource);

        return $clone;
    }

    /**
     * @param UserInputDataType $dataType
     * @return self
     */
    public function withDataType(UserInputDataType $dataType): self
    {
        $clone = clone $this;
        $clone->dataType = $dataType;

        return $clone;
    }

    /**
     * @param string $defaultValue
     * @return self
     */
    public function withDefaultValue(string $defaultValue): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($defaultValue, static::$schema['properties']['defaultValue']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->defaultValue = $defaultValue;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutDefaultValue(): self
    {
        $clone = clone $this;
        unset($clone->defaultValue);

        return $clone;
    }

    /**
     * @param UserInputFormat $format
     * @return self
     */
    public function withFormat(UserInputFormat $format): self
    {
        $clone = clone $this;
        $clone->format = $format;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutFormat(): self
    {
        $clone = clone $this;
        unset($clone->format);

        return $clone;
    }

    /**
     * @param AppInstallationLifecycle $lifecycleConstraint
     * @return self
     */
    public function withLifecycleConstraint(AppInstallationLifecycle $lifecycleConstraint): self
    {
        $clone = clone $this;
        $clone->lifecycleConstraint = $lifecycleConstraint;

        return $clone;
    }

    /**
     * @param string $name
     * @return self
     */
    public function withName(string $name): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($name, static::$schema['properties']['name']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->name = $name;

        return $clone;
    }

    /**
     * @param UserInputPositionMeta $positionMeta
     * @return self
     */
    public function withPositionMeta(UserInputPositionMeta $positionMeta): self
    {
        $clone = clone $this;
        $clone->positionMeta = $positionMeta;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutPositionMeta(): self
    {
        $clone = clone $this;
        unset($clone->positionMeta);

        return $clone;
    }

    /**
     * @param bool $required
     * @return self
     */
    public function withRequired(bool $required): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($required, static::$schema['properties']['required']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->required = $required;

        return $clone;
    }

    /**
     * @param string $validationSchema
     * @return self
     */
    public function withValidationSchema(string $validationSchema): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($validationSchema, static::$schema['properties']['validationSchema']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->validationSchema = $validationSchema;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return UserInput Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): UserInput
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $dataSource = null;
        if (isset($input->{'dataSource'})) {
            $dataSource = $input->{'dataSource'};
        }
        $dataType = UserInputDataType::from($input->{'dataType'});
        $defaultValue = null;
        if (isset($input->{'defaultValue'})) {
            $defaultValue = $input->{'defaultValue'};
        }
        $format = null;
        if (isset($input->{'format'})) {
            $format = UserInputFormat::from($input->{'format'});
        }
        $lifecycleConstraint = AppInstallationLifecycle::from($input->{'lifecycleConstraint'});
        $name = $input->{'name'};
        $positionMeta = null;
        if (isset($input->{'positionMeta'})) {
            $positionMeta = UserInputPositionMeta::buildFromInput($input->{'positionMeta'}, validate: $validate);
        }
        $required = (bool)($input->{'required'});
        $validationSchema = $input->{'validationSchema'};

        $obj = new self($dataType, $lifecycleConstraint, $name, $required, $validationSchema);
        $obj->dataSource = $dataSource;
        $obj->defaultValue = $defaultValue;
        $obj->format = $format;
        $obj->positionMeta = $positionMeta;
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
        if (isset($this->dataSource)) {
            $output['dataSource'] = $this->dataSource;
        }
        $output['dataType'] = $this->dataType->value;
        if (isset($this->defaultValue)) {
            $output['defaultValue'] = $this->defaultValue;
        }
        if (isset($this->format)) {
            $output['format'] = $this->format->value;
        }
        $output['lifecycleConstraint'] = $this->lifecycleConstraint->value;
        $output['name'] = $this->name;
        if (isset($this->positionMeta)) {
            $output['positionMeta'] = $this->positionMeta->toJson();
        }
        $output['required'] = $this->required;
        $output['validationSchema'] = $this->validationSchema;

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
