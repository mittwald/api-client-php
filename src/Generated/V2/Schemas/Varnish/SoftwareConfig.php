<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Varnish;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.varnish.SoftwareConfig.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class SoftwareConfig
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'configExpiration' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.varnish.ConfigExpiration',
            ],
            'latestConfigRevision' => [
                'type' => 'number',
            ],
            'revisions' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.varnish.ConfigRevision',
                ],
                'type' => 'array',
            ],
        ],
        'type' => 'object',
    ];

    private ?ConfigExpiration $configExpiration = null;

    private int|float|null $latestConfigRevision = null;

    /**
     * @var ConfigRevision[]|null
     */
    private ?array $revisions = null;

    /**
     *
     */
    public function __construct()
    {
    }

    public function getConfigExpiration(): ?ConfigExpiration
    {
        return $this->configExpiration ?? null;
    }

    public function getLatestConfigRevision(): int|float|null
    {
        return $this->latestConfigRevision;
    }

    /**
     * @return ConfigRevision[]|null
     */
    public function getRevisions(): ?array
    {
        return $this->revisions ?? null;
    }

    public function withConfigExpiration(ConfigExpiration $configExpiration): self
    {
        $clone = clone $this;
        $clone->configExpiration = $configExpiration;

        return $clone;
    }

    public function withoutConfigExpiration(): self
    {
        $clone = clone $this;
        unset($clone->configExpiration);

        return $clone;
    }

    /**
     * @param int|float $latestConfigRevision
     */
    public function withLatestConfigRevision(int|float $latestConfigRevision): self
    {
        $validator = new Validator();
        $validator->validate($latestConfigRevision, static::$schema['properties']['latestConfigRevision']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->latestConfigRevision = $latestConfigRevision;

        return $clone;
    }

    public function withoutLatestConfigRevision(): self
    {
        $clone = clone $this;
        unset($clone->latestConfigRevision);

        return $clone;
    }

    /**
     * @param ConfigRevision[] $revisions
     */
    public function withRevisions(array $revisions): self
    {
        $clone = clone $this;
        $clone->revisions = $revisions;

        return $clone;
    }

    public function withoutRevisions(): self
    {
        $clone = clone $this;
        unset($clone->revisions);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return SoftwareConfig Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): SoftwareConfig
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $configExpiration = null;
        if (isset($input->{'configExpiration'})) {
            $configExpiration = ConfigExpiration::buildFromInput($input->{'configExpiration'}, validate: $validate);
        }
        $latestConfigRevision = null;
        if (isset($input->{'latestConfigRevision'})) {
            $latestConfigRevision = str_contains((string)($input->{'latestConfigRevision'}), '.') ? (float)($input->{'latestConfigRevision'}) : (int)($input->{'latestConfigRevision'});
        }
        $revisions = null;
        if (isset($input->{'revisions'})) {
            $revisions = array_map(fn (array|object $i): ConfigRevision => ConfigRevision::buildFromInput($i, validate: $validate), $input->{'revisions'});
        }

        $obj = new self();
        $obj->configExpiration = $configExpiration;
        $obj->latestConfigRevision = $latestConfigRevision;
        $obj->revisions = $revisions;
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
        if (isset($this->configExpiration)) {
            $output['configExpiration'] = $this->configExpiration->toJson();
        }
        if (isset($this->latestConfigRevision)) {
            $output['latestConfigRevision'] = $this->latestConfigRevision;
        }
        if (isset($this->revisions)) {
            $output['revisions'] = array_map(fn (ConfigRevision $i): array => $i->toJson(), $this->revisions);
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