<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Varnish;

use InvalidArgumentException;
use DateTime;

class ConfigTemplate
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'files' => [
                'description' => 'A set of config file references.',
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.varnish.ConfigFileRef',
                ],
                'type' => 'array',
            ],
            'isGlobal' => [
                'type' => 'boolean',
            ],
            'note' => [
                'type' => 'string',
            ],
            'projectId' => [
                'type' => 'string',
            ],
            'softwareConfigTemplateId' => [
                'type' => 'string',
            ],
            'softwareTemplateId' => [
                'type' => 'string',
            ],
            'updatedAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
        ],
        'required' => [
            'softwareConfigTemplateId',
            'softwareTemplateId',
            'files',
        ],
        'type' => 'object',
    ];

    /**
     * A set of config file references.
     *
     * @var ConfigFileRef[]
     */
    private array $files;

    /**
     * @var bool|null
     */
    private ?bool $isGlobal = null;

    /**
     * @var string|null
     */
    private ?string $note = null;

    /**
     * @var string|null
     */
    private ?string $projectId = null;

    /**
     * @var string
     */
    private string $softwareConfigTemplateId;

    /**
     * @var string
     */
    private string $softwareTemplateId;

    /**
     * @var DateTime|null
     */
    private ?DateTime $updatedAt = null;

    /**
     * @param ConfigFileRef[] $files
     * @param string $softwareConfigTemplateId
     * @param string $softwareTemplateId
     */
    public function __construct(array $files, string $softwareConfigTemplateId, string $softwareTemplateId)
    {
        $this->files = $files;
        $this->softwareConfigTemplateId = $softwareConfigTemplateId;
        $this->softwareTemplateId = $softwareTemplateId;
    }

    /**
     * @return ConfigFileRef[]
     */
    public function getFiles(): array
    {
        return $this->files;
    }

    /**
     * @return bool|null
     */
    public function getIsGlobal(): ?bool
    {
        return $this->isGlobal ?? null;
    }

    /**
     * @return string|null
     */
    public function getNote(): ?string
    {
        return $this->note ?? null;
    }

    /**
     * @return string|null
     */
    public function getProjectId(): ?string
    {
        return $this->projectId ?? null;
    }

    /**
     * @return string
     */
    public function getSoftwareConfigTemplateId(): string
    {
        return $this->softwareConfigTemplateId;
    }

    /**
     * @return string
     */
    public function getSoftwareTemplateId(): string
    {
        return $this->softwareTemplateId;
    }

    /**
     * @return DateTime|null
     */
    public function getUpdatedAt(): ?DateTime
    {
        return $this->updatedAt ?? null;
    }

    /**
     * @param ConfigFileRef[] $files
     * @return self
     */
    public function withFiles(array $files): self
    {
        $clone = clone $this;
        $clone->files = $files;

        return $clone;
    }

    /**
     * @param bool $isGlobal
     * @return self
     */
    public function withIsGlobal(bool $isGlobal): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($isGlobal, static::$schema['properties']['isGlobal']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->isGlobal = $isGlobal;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutIsGlobal(): self
    {
        $clone = clone $this;
        unset($clone->isGlobal);

        return $clone;
    }

    /**
     * @param string $note
     * @return self
     */
    public function withNote(string $note): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($note, static::$schema['properties']['note']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->note = $note;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutNote(): self
    {
        $clone = clone $this;
        unset($clone->note);

        return $clone;
    }

    /**
     * @param string $projectId
     * @return self
     */
    public function withProjectId(string $projectId): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($projectId, static::$schema['properties']['projectId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->projectId = $projectId;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutProjectId(): self
    {
        $clone = clone $this;
        unset($clone->projectId);

        return $clone;
    }

    /**
     * @param string $softwareConfigTemplateId
     * @return self
     */
    public function withSoftwareConfigTemplateId(string $softwareConfigTemplateId): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($softwareConfigTemplateId, static::$schema['properties']['softwareConfigTemplateId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->softwareConfigTemplateId = $softwareConfigTemplateId;

        return $clone;
    }

    /**
     * @param string $softwareTemplateId
     * @return self
     */
    public function withSoftwareTemplateId(string $softwareTemplateId): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($softwareTemplateId, static::$schema['properties']['softwareTemplateId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->softwareTemplateId = $softwareTemplateId;

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
     * @return self
     */
    public function withoutUpdatedAt(): self
    {
        $clone = clone $this;
        unset($clone->updatedAt);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ConfigTemplate Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ConfigTemplate
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $files = array_map(fn (array $i): ConfigFileRef => ConfigFileRef::buildFromInput($i, validate: $validate), $input->{'files'});
        $isGlobal = null;
        if (isset($input->{'isGlobal'})) {
            $isGlobal = (bool)($input->{'isGlobal'});
        }
        $note = null;
        if (isset($input->{'note'})) {
            $note = $input->{'note'};
        }
        $projectId = null;
        if (isset($input->{'projectId'})) {
            $projectId = $input->{'projectId'};
        }
        $softwareConfigTemplateId = $input->{'softwareConfigTemplateId'};
        $softwareTemplateId = $input->{'softwareTemplateId'};
        $updatedAt = null;
        if (isset($input->{'updatedAt'})) {
            $updatedAt = new DateTime($input->{'updatedAt'});
        }

        $obj = new self($files, $softwareConfigTemplateId, $softwareTemplateId);
        $obj->isGlobal = $isGlobal;
        $obj->note = $note;
        $obj->projectId = $projectId;
        $obj->updatedAt = $updatedAt;
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
        $output['files'] = array_map(fn (ConfigFileRef $i): array => $i->toJson(), $this->files);
        if (isset($this->isGlobal)) {
            $output['isGlobal'] = $this->isGlobal;
        }
        if (isset($this->note)) {
            $output['note'] = $this->note;
        }
        if (isset($this->projectId)) {
            $output['projectId'] = $this->projectId;
        }
        $output['softwareConfigTemplateId'] = $this->softwareConfigTemplateId;
        $output['softwareTemplateId'] = $this->softwareTemplateId;
        if (isset($this->updatedAt)) {
            $output['updatedAt'] = ($this->updatedAt)->format(DateTime::ATOM);
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
        if (isset($this->updatedAt)) {
            $this->updatedAt = clone $this->updatedAt;
        }
    }
}
