<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\App;

class SystemSoftwareDependency
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

    /**
     * @var string
     */
    private string $systemSoftwareId;

    /**
     * @var string
     */
    private string $versionRange;

    /**
     * @param string $systemSoftwareId
     * @param string $versionRange
     */
    public function __construct(string $systemSoftwareId, string $versionRange)
    {
        $this->systemSoftwareId = $systemSoftwareId;
        $this->versionRange = $versionRange;
    }

    /**
     * @return string
     */
    public function getSystemSoftwareId() : string
    {
        return $this->systemSoftwareId;
    }

    /**
     * @return string
     */
    public function getVersionRange() : string
    {
        return $this->versionRange;
    }

    /**
     * @param string $systemSoftwareId
     * @return self
     */
    public function withSystemSoftwareId(string $systemSoftwareId) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($systemSoftwareId, static::$schema['properties']['systemSoftwareId']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->systemSoftwareId = $systemSoftwareId;

        return $clone;
    }

    /**
     * @param string $versionRange
     * @return self
     */
    public function withVersionRange(string $versionRange) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($versionRange, static::$schema['properties']['versionRange']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
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
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : SystemSoftwareDependency
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
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
    public function toJson() : array
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
}

