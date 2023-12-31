<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Database;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.database.MySqlDatabase.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class MySqlDatabase
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
            'createdAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'description' => [
                'type' => 'string',
            ],
            'finalizers' => [
                'items' => [
                    'minLength' => 1,
                    'type' => 'string',
                ],
                'type' => 'array',
                'uniqueItems' => true,
            ],
            'hostname' => [
                'type' => 'string',
            ],
            'id' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'isReady' => [
                'type' => 'boolean',
            ],
            'isShared' => [
                'type' => 'boolean',
            ],
            'name' => [
                'type' => 'string',
            ],
            'projectId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'updatedAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'version' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'id',
            'createdAt',
            'updatedAt',
            'projectId',
            'name',
            'description',
            'version',
            'characterSettings',
            'hostname',
            'isShared',
            'isReady',
        ],
        'type' => 'object',
    ];

    /**
     * @var CharacterSettings
     */
    private CharacterSettings $characterSettings;

    /**
     * @var DateTime
     */
    private DateTime $createdAt;

    /**
     * @var string
     */
    private string $description;

    /**
     * @var string[]|null
     */
    private ?array $finalizers = null;

    /**
     * @var string
     */
    private string $hostname;

    /**
     * @var string
     */
    private string $id;

    /**
     * @var bool
     */
    private bool $isReady;

    /**
     * @var bool
     */
    private bool $isShared;

    /**
     * @var string
     */
    private string $name;

    /**
     * @var string
     */
    private string $projectId;

    /**
     * @var DateTime
     */
    private DateTime $updatedAt;

    /**
     * @var string
     */
    private string $version;

    /**
     * @param CharacterSettings $characterSettings
     * @param DateTime $createdAt
     * @param string $description
     * @param string $hostname
     * @param string $id
     * @param bool $isReady
     * @param bool $isShared
     * @param string $name
     * @param string $projectId
     * @param DateTime $updatedAt
     * @param string $version
     */
    public function __construct(CharacterSettings $characterSettings, DateTime $createdAt, string $description, string $hostname, string $id, bool $isReady, bool $isShared, string $name, string $projectId, DateTime $updatedAt, string $version)
    {
        $this->characterSettings = $characterSettings;
        $this->createdAt = $createdAt;
        $this->description = $description;
        $this->hostname = $hostname;
        $this->id = $id;
        $this->isReady = $isReady;
        $this->isShared = $isShared;
        $this->name = $name;
        $this->projectId = $projectId;
        $this->updatedAt = $updatedAt;
        $this->version = $version;
    }

    /**
     * @return CharacterSettings
     */
    public function getCharacterSettings(): CharacterSettings
    {
        return $this->characterSettings;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string[]|null
     */
    public function getFinalizers(): ?array
    {
        return $this->finalizers ?? null;
    }

    /**
     * @return string
     */
    public function getHostname(): string
    {
        return $this->hostname;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return bool
     */
    public function getIsReady(): bool
    {
        return $this->isReady;
    }

    /**
     * @return bool
     */
    public function getIsShared(): bool
    {
        return $this->isShared;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getProjectId(): string
    {
        return $this->projectId;
    }

    /**
     * @return DateTime
     */
    public function getUpdatedAt(): DateTime
    {
        return $this->updatedAt;
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
     * @param DateTime $createdAt
     * @return self
     */
    public function withCreatedAt(DateTime $createdAt): self
    {
        $clone = clone $this;
        $clone->createdAt = $createdAt;

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
     * @param string[] $finalizers
     * @return self
     */
    public function withFinalizers(array $finalizers): self
    {
        $validator = new Validator();
        $validator->validate($finalizers, static::$schema['properties']['finalizers']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->finalizers = $finalizers;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutFinalizers(): self
    {
        $clone = clone $this;
        unset($clone->finalizers);

        return $clone;
    }

    /**
     * @param string $hostname
     * @return self
     */
    public function withHostname(string $hostname): self
    {
        $validator = new Validator();
        $validator->validate($hostname, static::$schema['properties']['hostname']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->hostname = $hostname;

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
     * @param bool $isReady
     * @return self
     */
    public function withIsReady(bool $isReady): self
    {
        $validator = new Validator();
        $validator->validate($isReady, static::$schema['properties']['isReady']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->isReady = $isReady;

        return $clone;
    }

    /**
     * @param bool $isShared
     * @return self
     */
    public function withIsShared(bool $isShared): self
    {
        $validator = new Validator();
        $validator->validate($isShared, static::$schema['properties']['isShared']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->isShared = $isShared;

        return $clone;
    }

    /**
     * @param string $name
     * @return self
     */
    public function withName(string $name): self
    {
        $validator = new Validator();
        $validator->validate($name, static::$schema['properties']['name']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->name = $name;

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
     * @param DateTime $updatedAt
     * @return self
     */
    public function withUpdatedAt(DateTime $updatedAt): self
    {
        $clone = clone $this;
        $clone->updatedAt = $updatedAt;

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
     * @return MySqlDatabase Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): MySqlDatabase
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $characterSettings = CharacterSettings::buildFromInput($input->{'characterSettings'}, validate: $validate);
        $createdAt = new DateTime($input->{'createdAt'});
        $description = $input->{'description'};
        $finalizers = null;
        if (isset($input->{'finalizers'})) {
            $finalizers = $input->{'finalizers'};
        }
        $hostname = $input->{'hostname'};
        $id = $input->{'id'};
        $isReady = (bool)($input->{'isReady'});
        $isShared = (bool)($input->{'isShared'});
        $name = $input->{'name'};
        $projectId = $input->{'projectId'};
        $updatedAt = new DateTime($input->{'updatedAt'});
        $version = $input->{'version'};

        $obj = new self($characterSettings, $createdAt, $description, $hostname, $id, $isReady, $isShared, $name, $projectId, $updatedAt, $version);
        $obj->finalizers = $finalizers;
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
        $output['characterSettings'] = $this->characterSettings->toJson();
        $output['createdAt'] = ($this->createdAt)->format(DateTime::ATOM);
        $output['description'] = $this->description;
        if (isset($this->finalizers)) {
            $output['finalizers'] = $this->finalizers;
        }
        $output['hostname'] = $this->hostname;
        $output['id'] = $this->id;
        $output['isReady'] = $this->isReady;
        $output['isShared'] = $this->isShared;
        $output['name'] = $this->name;
        $output['projectId'] = $this->projectId;
        $output['updatedAt'] = ($this->updatedAt)->format(DateTime::ATOM);
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
        $this->createdAt = clone $this->createdAt;
        $this->updatedAt = clone $this->updatedAt;
    }
}
