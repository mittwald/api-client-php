<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\App\PatchAppinstallation;

class PatchAppinstallationRequestBodySystemSoftwareItem
{
    public const method = 'patch';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
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

    /**
     * @var string|null
     */
    private ?string $systemSoftwareVersion = null;

    /**
     * @var \Mittwald\ApiClient\Generated\V2\Schemas\App\SystemSoftwareUpdatePolicy|null
     */
    private ?\Mittwald\ApiClient\Generated\V2\Schemas\App\SystemSoftwareUpdatePolicy $updatePolicy = null;

    private array $headers = [
        
    ];

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return string|null
     */
    public function getSystemSoftwareVersion() : ?string
    {
        return $this->systemSoftwareVersion ?? null;
    }

    /**
     * @return
     * \Mittwald\ApiClient\Generated\V2\Schemas\App\SystemSoftwareUpdatePolicy|null
     */
    public function getUpdatePolicy() : ?\Mittwald\ApiClient\Generated\V2\Schemas\App\SystemSoftwareUpdatePolicy
    {
        return $this->updatePolicy ?? null;
    }

    /**
     * @param string $systemSoftwareVersion
     * @return self
     */
    public function withSystemSoftwareVersion(string $systemSoftwareVersion) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($systemSoftwareVersion, static::$schema['properties']['systemSoftwareVersion']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->systemSoftwareVersion = $systemSoftwareVersion;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutSystemSoftwareVersion() : self
    {
        $clone = clone $this;
        unset($clone->systemSoftwareVersion);

        return $clone;
    }

    /**
     * @param \Mittwald\ApiClient\Generated\V2\Schemas\App\SystemSoftwareUpdatePolicy $updatePolicy
     * @return self
     */
    public function withUpdatePolicy(\Mittwald\ApiClient\Generated\V2\Schemas\App\SystemSoftwareUpdatePolicy $updatePolicy) : self
    {
        $clone = clone $this;
        $clone->updatePolicy = $updatePolicy;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutUpdatePolicy() : self
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
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : PatchAppinstallationRequestBodySystemSoftwareItem
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $systemSoftwareVersion = null;
        if (isset($input->{'systemSoftwareVersion'})) {
            $systemSoftwareVersion = $input->{'systemSoftwareVersion'};
        }
        $updatePolicy = null;
        if (isset($input->{'updatePolicy'})) {
            $updatePolicy = \Mittwald\ApiClient\Generated\V2\Schemas\App\SystemSoftwareUpdatePolicy::from($input->{'updatePolicy'});
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
    public function toJson() : array
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
     * @throws \InvalidArgumentException
     */
    public static function validateInput(array|object $input, bool $return = false) : bool
    {
        $validator = new \JsonSchema\Validator();
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        $validator->validate($input, static::$schema);

        if (!$validator->isValid() && !$return) {
            $errors = array_map(function(array $e): string {
                return $e["property"] . ": " . $e["message"];
            }, $validator->getErrors());
            throw new \InvalidArgumentException(join(", ", $errors));
        }

        return $validator->isValid();
    }

    public function __clone()
    {
    }

    public function getUrl() : string
    {
        $mapped = $this->toJson();
        $appInstallationId = urlencode($mapped['appInstallationId']);
        return '/v2/appinstallations/' . $appInstallationId;
    }

    public function getQuery() : array
    {
        $mapped = $this->toJson();
        $query = [];
        return $query;
    }

    public function getHeaders() : array
    {
        return $this->headers;
    }

    public function withHeader(string $name, string|array $value) : self
    {
        $clone = clone $this;
        $clone->headers[$name] = $value;
        return $clone;
    }
}

