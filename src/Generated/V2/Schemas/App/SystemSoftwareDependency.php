<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\App;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * A SystemSoftwareDependency is a description of a need for a specific
 * SystemSoftware in a semver versionRange.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class SystemSoftwareDependency
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'description' => 'A SystemSoftwareDependency is a description of a need for a specific SystemSoftware in a semver versionRange.',
        'properties' => [
            'systemSoftwareId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'versionRange' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'systemSoftwareId',
            'versionRange',
        ],
        'type' => 'object',
    ];

    private string $systemSoftwareId;

    private string $versionRange;

    public function __construct(string $systemSoftwareId, string $versionRange)
    {
        $this->systemSoftwareId = $systemSoftwareId;
        $this->versionRange = $versionRange;
    }

    public function getSystemSoftwareId(): string
    {
        return $this->systemSoftwareId;
    }

    public function getVersionRange(): string
    {
        return $this->versionRange;
    }

    public function withSystemSoftwareId(string $systemSoftwareId): self
    {
        $validator = new Validator();
        $validator->validate($systemSoftwareId, static::$schema['properties']['systemSoftwareId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->systemSoftwareId = $systemSoftwareId;

        return $clone;
    }

    public function withVersionRange(string $versionRange): self
    {
        $validator = new Validator();
        $validator->validate($versionRange, static::$schema['properties']['versionRange']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->versionRange = $versionRange;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return SystemSoftwareDependency Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): SystemSoftwareDependency
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $systemSoftwareId = $input->{'systemSoftwareId'};
        $versionRange = $input->{'versionRange'};

        $obj = new self($systemSoftwareId, $versionRange);

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
        $output['systemSoftwareId'] = $this->systemSoftwareId;
        $output['versionRange'] = $this->versionRange;

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
