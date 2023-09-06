<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\App;

use InvalidArgumentException;

class InstalledSystemSoftware
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'systemSoftwareId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'systemSoftwareVersion' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.app.VersionStatus',
            ],
            'updatePolicy' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.app.SystemSoftwareUpdatePolicy',
            ],
        ],
        'required' => [
            'systemSoftwareId',
            'updatePolicy',
            'systemSoftwareVersion',
        ],
        'type' => 'object',
    ];

    /**
     * @var string
     */
    private string $systemSoftwareId;

    /**
     * @var VersionStatus
     */
    private VersionStatus $systemSoftwareVersion;

    /**
     * @var SystemSoftwareUpdatePolicy
     */
    private SystemSoftwareUpdatePolicy $updatePolicy;

    /**
     * @param string $systemSoftwareId
     * @param VersionStatus $systemSoftwareVersion
     * @param SystemSoftwareUpdatePolicy $updatePolicy
     */
    public function __construct(string $systemSoftwareId, VersionStatus $systemSoftwareVersion, SystemSoftwareUpdatePolicy $updatePolicy)
    {
        $this->systemSoftwareId = $systemSoftwareId;
        $this->systemSoftwareVersion = $systemSoftwareVersion;
        $this->updatePolicy = $updatePolicy;
    }

    /**
     * @return string
     */
    public function getSystemSoftwareId(): string
    {
        return $this->systemSoftwareId;
    }

    /**
     * @return VersionStatus
     */
    public function getSystemSoftwareVersion(): VersionStatus
    {
        return $this->systemSoftwareVersion;
    }

    /**
     * @return SystemSoftwareUpdatePolicy
     */
    public function getUpdatePolicy(): SystemSoftwareUpdatePolicy
    {
        return $this->updatePolicy;
    }

    /**
     * @param string $systemSoftwareId
     * @return self
     */
    public function withSystemSoftwareId(string $systemSoftwareId): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($systemSoftwareId, static::$schema['properties']['systemSoftwareId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->systemSoftwareId = $systemSoftwareId;

        return $clone;
    }

    /**
     * @param VersionStatus $systemSoftwareVersion
     * @return self
     */
    public function withSystemSoftwareVersion(VersionStatus $systemSoftwareVersion): self
    {
        $clone = clone $this;
        $clone->systemSoftwareVersion = $systemSoftwareVersion;

        return $clone;
    }

    /**
     * @param SystemSoftwareUpdatePolicy $updatePolicy
     * @return self
     */
    public function withUpdatePolicy(SystemSoftwareUpdatePolicy $updatePolicy): self
    {
        $clone = clone $this;
        $clone->updatePolicy = $updatePolicy;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return InstalledSystemSoftware Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): InstalledSystemSoftware
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $systemSoftwareId = $input->{'systemSoftwareId'};
        $systemSoftwareVersion = VersionStatus::buildFromInput($input->{'systemSoftwareVersion'}, validate: $validate);
        $updatePolicy = SystemSoftwareUpdatePolicy::from($input->{'updatePolicy'});

        $obj = new self($systemSoftwareId, $systemSoftwareVersion, $updatePolicy);

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
        $output['systemSoftwareVersion'] = $this->systemSoftwareVersion->toJson();
        $output['updatePolicy'] = $this->updatePolicy->value;

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
