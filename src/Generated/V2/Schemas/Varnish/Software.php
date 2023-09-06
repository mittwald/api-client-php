<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Varnish;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;

class Software
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'config' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.varnish.SoftwareConfig',
            ],
            'projectId' => [
                'type' => 'string',
            ],
            'settings' => [
                'additionalProperties' => [
                    'type' => 'string',
                ],
                'type' => 'object',
            ],
            'softwareId' => [
                'type' => 'string',
            ],
            'softwareTemplateId' => [
                'type' => 'string',
            ],
            'softwareVersion' => [
                'type' => 'string',
            ],
            'updatedAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
        ],
        'required' => [
            'softwareId',
            'updatedAt',
            'softwareTemplateId',
            'softwareVersion',
            'projectId',
            'config',
        ],
        'type' => 'object',
    ];

    /**
     * @var SoftwareConfig
     */
    private SoftwareConfig $config;

    /**
     * @var string
     */
    private string $projectId;

    /**
     * @var string[]|null
     */
    private ?array $settings = null;

    /**
     * @var string
     */
    private string $softwareId;

    /**
     * @var string
     */
    private string $softwareTemplateId;

    /**
     * @var string
     */
    private string $softwareVersion;

    /**
     * @var DateTime
     */
    private DateTime $updatedAt;

    /**
     * @param SoftwareConfig $config
     * @param string $projectId
     * @param string $softwareId
     * @param string $softwareTemplateId
     * @param string $softwareVersion
     * @param DateTime $updatedAt
     */
    public function __construct(SoftwareConfig $config, string $projectId, string $softwareId, string $softwareTemplateId, string $softwareVersion, DateTime $updatedAt)
    {
        $this->config = $config;
        $this->projectId = $projectId;
        $this->softwareId = $softwareId;
        $this->softwareTemplateId = $softwareTemplateId;
        $this->softwareVersion = $softwareVersion;
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return SoftwareConfig
     */
    public function getConfig(): SoftwareConfig
    {
        return $this->config;
    }

    /**
     * @return string
     */
    public function getProjectId(): string
    {
        return $this->projectId;
    }

    /**
     * @return string[]|null
     */
    public function getSettings(): ?array
    {
        return $this->settings ?? null;
    }

    /**
     * @return string
     */
    public function getSoftwareId(): string
    {
        return $this->softwareId;
    }

    /**
     * @return string
     */
    public function getSoftwareTemplateId(): string
    {
        return $this->softwareTemplateId;
    }

    /**
     * @return string
     */
    public function getSoftwareVersion(): string
    {
        return $this->softwareVersion;
    }

    /**
     * @return DateTime
     */
    public function getUpdatedAt(): DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @param SoftwareConfig $config
     * @return self
     */
    public function withConfig(SoftwareConfig $config): self
    {
        $clone = clone $this;
        $clone->config = $config;

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
     * @param string[] $settings
     * @return self
     */
    public function withSettings(array $settings): self
    {
        $validator = new Validator();
        $validator->validate($settings, static::$schema['properties']['settings']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->settings = $settings;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutSettings(): self
    {
        $clone = clone $this;
        unset($clone->settings);

        return $clone;
    }

    /**
     * @param string $softwareId
     * @return self
     */
    public function withSoftwareId(string $softwareId): self
    {
        $validator = new Validator();
        $validator->validate($softwareId, static::$schema['properties']['softwareId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->softwareId = $softwareId;

        return $clone;
    }

    /**
     * @param string $softwareTemplateId
     * @return self
     */
    public function withSoftwareTemplateId(string $softwareTemplateId): self
    {
        $validator = new Validator();
        $validator->validate($softwareTemplateId, static::$schema['properties']['softwareTemplateId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->softwareTemplateId = $softwareTemplateId;

        return $clone;
    }

    /**
     * @param string $softwareVersion
     * @return self
     */
    public function withSoftwareVersion(string $softwareVersion): self
    {
        $validator = new Validator();
        $validator->validate($softwareVersion, static::$schema['properties']['softwareVersion']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->softwareVersion = $softwareVersion;

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
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return Software Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): Software
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $config = SoftwareConfig::buildFromInput($input->{'config'}, validate: $validate);
        $projectId = $input->{'projectId'};
        $settings = null;
        if (isset($input->{'settings'})) {
            $settings = $input->{'settings'};
        }
        $softwareId = $input->{'softwareId'};
        $softwareTemplateId = $input->{'softwareTemplateId'};
        $softwareVersion = $input->{'softwareVersion'};
        $updatedAt = new DateTime($input->{'updatedAt'});

        $obj = new self($config, $projectId, $softwareId, $softwareTemplateId, $softwareVersion, $updatedAt);
        $obj->settings = $settings;
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
        $output['config'] = $this->config->toJson();
        $output['projectId'] = $this->projectId;
        if (isset($this->settings)) {
            $output['settings'] = $this->settings;
        }
        $output['softwareId'] = $this->softwareId;
        $output['softwareTemplateId'] = $this->softwareTemplateId;
        $output['softwareVersion'] = $this->softwareVersion;
        $output['updatedAt'] = ($this->updatedAt)->format(DateTime::ATOM);

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
        $this->updatedAt = clone $this->updatedAt;
    }
}
