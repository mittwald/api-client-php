<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Dns;

class CombinedACustom
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'a' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.dns.CombinedAManagedARecord',
                ],
                'maxItems' => 6,
                'type' => 'array',
            ],
            'aaaa' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.dns.CombinedAManagedAAAARecord',
                ],
                'maxItems' => 6,
                'type' => 'array',
            ],
            'settings' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.dns.RecordSettings',
            ],
        ],
        'required' => [
            'settings',
            'a',
            'aaaa',
        ],
        'type' => 'object',
    ];

    /**
     * @var string[]
     */
    private array $a;

    /**
     * @var string[]
     */
    private array $aaaa;

    /**
     * @var RecordSettings
     */
    private RecordSettings $settings;

    /**
     * @param string[] $a
     * @param string[] $aaaa
     * @param RecordSettings $settings
     */
    public function __construct(array $a, array $aaaa, RecordSettings $settings)
    {
        $this->a = $a;
        $this->aaaa = $aaaa;
        $this->settings = $settings;
    }

    /**
     * @return string[]
     */
    public function getA() : array
    {
        return $this->a;
    }

    /**
     * @return string[]
     */
    public function getAaaa() : array
    {
        return $this->aaaa;
    }

    /**
     * @return RecordSettings
     */
    public function getSettings() : RecordSettings
    {
        return $this->settings;
    }

    /**
     * @param string[] $a
     * @return self
     */
    public function withA(array $a) : self
    {
        $clone = clone $this;
        $clone->a = $a;

        return $clone;
    }

    /**
     * @param string[] $aaaa
     * @return self
     */
    public function withAaaa(array $aaaa) : self
    {
        $clone = clone $this;
        $clone->aaaa = $aaaa;

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
     * @return CombinedACustom Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : CombinedACustom
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $a = array_map(fn(string $i): string => $i, $input->{'a'});
        $aaaa = array_map(fn(string $i): string => $i, $input->{'aaaa'});
        $settings = RecordSettings::buildFromInput($input->{'settings'}, validate: $validate);

        $obj = new self($a, $aaaa, $settings);

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
        $output['a'] = array_map(fn(string $i): string => $i, $this->a);
        $output['aaaa'] = array_map(fn(string $i): string => $i, $this->aaaa);
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

