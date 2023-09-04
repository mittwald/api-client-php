<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Dns;

class RecordTXTComponent
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'additionalProperties' => false,
        'properties' => [
            'entries' => [
                'items' => [
                    'maxLength' => 100,
                    'type' => 'string',
                ],
                'maxItems' => 20,
                'type' => 'array',
            ],
            'settings' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.dns.RecordSettings',
            ],
        ],
        'required' => [
            'settings',
            'entries',
        ],
        'type' => 'object',
    ];

    /**
     * @var string[]
     */
    private array $entries;

    /**
     * @var RecordSettings
     */
    private RecordSettings $settings;

    /**
     * @param string[] $entries
     * @param RecordSettings $settings
     */
    public function __construct(array $entries, RecordSettings $settings)
    {
        $this->entries = $entries;
        $this->settings = $settings;
    }

    /**
     * @return string[]
     */
    public function getEntries() : array
    {
        return $this->entries;
    }

    /**
     * @return RecordSettings
     */
    public function getSettings() : RecordSettings
    {
        return $this->settings;
    }

    /**
     * @param string[] $entries
     * @return self
     */
    public function withEntries(array $entries) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($entries, static::$schema['properties']['entries']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->entries = $entries;

        return $clone;
    }

    /**
     * @param RecordSettings $settings
     * @return self
     */
    public function withSettings(RecordSettings $settings) : self
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
     * @return RecordTXTComponent Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : RecordTXTComponent
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $entries = $input->{'entries'};
        $settings = RecordSettings::buildFromInput($input->{'settings'}, validate: $validate);

        $obj = new self($entries, $settings);

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
        $output['entries'] = $this->entries;
        $output['settings'] = $this->settings->toJson();

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

