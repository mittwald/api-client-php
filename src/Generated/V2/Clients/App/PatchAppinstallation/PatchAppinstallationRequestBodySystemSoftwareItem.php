<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\App\PatchAppinstallation;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\App\SystemSoftwareUpdatePolicy;

class PatchAppinstallationRequestBodySystemSoftwareItem
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'systemSoftwareVersion' => [
                'type' => 'string',
            ],
            'updatePolicy' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.app.SystemSoftwareUpdatePolicy',
            ],
        ],
        'type' => 'object',
    ];

    private ?string $systemSoftwareVersion = null;

    private ?SystemSoftwareUpdatePolicy $updatePolicy = null;

    /**
     *
     */
    public function __construct()
    {
    }

    public function getSystemSoftwareVersion(): ?string
    {
        return $this->systemSoftwareVersion ?? null;
    }

    public function getUpdatePolicy(): ?SystemSoftwareUpdatePolicy
    {
        return $this->updatePolicy ?? null;
    }

    public function withSystemSoftwareVersion(string $systemSoftwareVersion): self
    {
        $validator = new Validator();
        $validator->validate($systemSoftwareVersion, self::$internalValidationSchema['properties']['systemSoftwareVersion']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->systemSoftwareVersion = $systemSoftwareVersion;

        return $clone;
    }

    public function withoutSystemSoftwareVersion(): self
    {
        $clone = clone $this;
        unset($clone->systemSoftwareVersion);

        return $clone;
    }

    public function withUpdatePolicy(SystemSoftwareUpdatePolicy $updatePolicy): self
    {
        $clone = clone $this;
        $clone->updatePolicy = $updatePolicy;

        return $clone;
    }

    public function withoutUpdatePolicy(): self
    {
        $clone = clone $this;
        unset($clone->updatePolicy);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return PatchAppinstallationRequestBodySystemSoftwareItem Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): PatchAppinstallationRequestBodySystemSoftwareItem
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $systemSoftwareVersion = null;
        if (isset($input->{'systemSoftwareVersion'})) {
            $systemSoftwareVersion = $input->{'systemSoftwareVersion'};
        }
        $updatePolicy = null;
        if (isset($input->{'updatePolicy'})) {
            $updatePolicy = SystemSoftwareUpdatePolicy::from($input->{'updatePolicy'});
        }

        $obj = new self();
        $obj->systemSoftwareVersion = $systemSoftwareVersion;
        $obj->updatePolicy = $updatePolicy;
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
        if (isset($this->systemSoftwareVersion)) {
            $output['systemSoftwareVersion'] = $this->systemSoftwareVersion;
        }
        if (isset($this->updatePolicy)) {
            $output['updatePolicy'] = $this->updatePolicy->value;
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
    }
}
