<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Dns;

use InvalidArgumentException;
use JsonSchema\Validator;

class RecordCNAMEComponent
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'fqdn' => [
                'format' => 'hostname',
                'type' => 'string',
            ],
            'settings' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.dns.RecordSettings',
            ],
        ],
        'required' => [
            'settings',
            'fqdn',
        ],
        'type' => 'object',
    ];

    /**
     * @var string
     */
    private string $fqdn;

    /**
     * @var RecordSettings
     */
    private RecordSettings $settings;

    /**
     * @param string $fqdn
     * @param RecordSettings $settings
     */
    public function __construct(string $fqdn, RecordSettings $settings)
    {
        $this->fqdn = $fqdn;
        $this->settings = $settings;
    }

    /**
     * @return string
     */
    public function getFqdn(): string
    {
        return $this->fqdn;
    }

    /**
     * @return RecordSettings
     */
    public function getSettings(): RecordSettings
    {
        return $this->settings;
    }

    /**
     * @param string $fqdn
     * @return self
     */
    public function withFqdn(string $fqdn): self
    {
        $validator = new Validator();
        $validator->validate($fqdn, static::$schema['properties']['fqdn']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->fqdn = $fqdn;

        return $clone;
    }

    /**
     * @param RecordSettings $settings
     * @return self
     */
    public function withSettings(RecordSettings $settings): self
    {
        $clone = clone $this;
        $clone->settings = $settings;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return RecordCNAMEComponent Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): RecordCNAMEComponent
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $fqdn = $input->{'fqdn'};
        $settings = RecordSettings::buildFromInput($input->{'settings'}, validate: $validate);

        $obj = new self($fqdn, $settings);

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
        $output['fqdn'] = $this->fqdn;
        $output['settings'] = $this->settings->toJson();

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
