<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Dns;

class RecordSRVComponent
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'additionalProperties' => false,
        'properties' => [
            'records' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.dns.RecordSRVRecord',
                ],
                'minItems' => 1,
                'type' => 'array',
            ],
            'settings' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.dns.RecordSettings',
            ],
        ],
        'required' => [
            'settings',
            'records',
        ],
        'type' => 'object',
    ];

    /**
     * @var RecordSRVRecord[]
     */
    private array $records;

    /**
     * @var RecordSettings
     */
    private RecordSettings $settings;

    /**
     * @param RecordSRVRecord[] $records
     * @param RecordSettings $settings
     */
    public function __construct(array $records, RecordSettings $settings)
    {
        $this->records = $records;
        $this->settings = $settings;
    }

    /**
     * @return RecordSRVRecord[]
     */
    public function getRecords() : array
    {
        return $this->records;
    }

    /**
     * @return RecordSettings
     */
    public function getSettings() : RecordSettings
    {
        return $this->settings;
    }

    /**
     * @param RecordSRVRecord[] $records
     * @return self
     */
    public function withRecords(array $records) : self
    {
        $clone = clone $this;
        $clone->records = $records;

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
     * @return RecordSRVComponent Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : RecordSRVComponent
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $records = array_map(fn(array $i): RecordSRVRecord => RecordSRVRecord::buildFromInput($i, validate: $validate), $input->{'records'});
        $settings = RecordSettings::buildFromInput($input->{'settings'}, validate: $validate);

        $obj = new self($records, $settings);

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
        $output['records'] = array_map(fn(RecordSRVRecord $i): array => $i->toJson(), $this->records);
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

