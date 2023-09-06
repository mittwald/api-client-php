<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Database;

use InvalidArgumentException;
use JsonSchema\Validator;

class CreateMySqlDatabase
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'characterSettings' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.database.characterSettings',
            ],
            'description' => [
                'type' => 'string',
            ],
            'projectId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'version' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'projectId',
            'version',
            'description',
        ],
        'type' => 'object',
    ];

    /**
     * @var CharacterSettings|null
     */
    private ?CharacterSettings $characterSettings = null;

    /**
     * @var string
     */
    private string $description;

    /**
     * @var string
     */
    private string $projectId;

    /**
     * @var string
     */
    private string $version;

    /**
     * @param string $description
     * @param string $projectId
     * @param string $version
     */
    public function __construct(string $description, string $projectId, string $version)
    {
        $this->description = $description;
        $this->projectId = $projectId;
        $this->version = $version;
    }

    /**
     * @return CharacterSettings|null
     */
    public function getCharacterSettings(): ?CharacterSettings
    {
        return $this->characterSettings ?? null;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getProjectId(): string
    {
        return $this->projectId;
    }

    /**
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }

    /**
     * @param CharacterSettings $characterSettings
     * @return self
     */
    public function withCharacterSettings(CharacterSettings $characterSettings): self
    {
        $clone = clone $this;
        $clone->characterSettings = $characterSettings;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutCharacterSettings(): self
    {
        $clone = clone $this;
        unset($clone->characterSettings);

        return $clone;
    }

    /**
     * @param string $description
     * @return self
     */
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

    /**
     * @param string $projectId
     * @return self
     */
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
     * @param string $version
     * @return self
     */
    public function withVersion(string $version): self
    {
        $validator = new Validator();
        $validator->validate($version, static::$schema['properties']['version']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->version = $version;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CreateMySqlDatabase Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CreateMySqlDatabase
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $characterSettings = null;
        if (isset($input->{'characterSettings'})) {
            $characterSettings = CharacterSettings::buildFromInput($input->{'characterSettings'}, validate: $validate);
        }
        $description = $input->{'description'};
        $projectId = $input->{'projectId'};
        $version = $input->{'version'};

        $obj = new self($description, $projectId, $version);
        $obj->characterSettings = $characterSettings;
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
        if (isset($this->characterSettings)) {
            $output['characterSettings'] = $this->characterSettings->toJson();
        }
        $output['description'] = $this->description;
        $output['projectId'] = $this->projectId;
        $output['version'] = $this->version;

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
    }
}
