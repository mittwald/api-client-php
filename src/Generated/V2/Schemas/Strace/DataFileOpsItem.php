<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Strace;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.strace.Data.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class DataFileOpsItem
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'filename' => [
                'example' => 'my_file.php',
                'type' => 'string',
            ],
            'filepath' => [
                'example' => '/html/my-project',
                'type' => 'string',
            ],
            'stats' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.strace.Statistics',
            ],
            'warnLevel' => [
                'description' => 'Alerts when the time, syscall count or occurrence count of this group are abnormal.',
                'enum' => [
                    'NO',
                    'WARN',
                    'SEVERE',
                ],
                'type' => 'string',
            ],
        ],
        'required' => [
            'stats',
            'warnLevel',
        ],
        'type' => 'object',
    ];

    private ?string $filename = null;

    private ?string $filepath = null;

    private Statistics $stats;

    /**
     * Alerts when the time, syscall count or occurrence count of this group are abnormal.
     */
    private DataFileOpsItemWarnLevel $warnLevel;

    public function __construct(Statistics $stats, DataFileOpsItemWarnLevel $warnLevel)
    {
        $this->stats = $stats;
        $this->warnLevel = $warnLevel;
    }

    public function getFilename(): ?string
    {
        return $this->filename ?? null;
    }

    public function getFilepath(): ?string
    {
        return $this->filepath ?? null;
    }

    public function getStats(): Statistics
    {
        return $this->stats;
    }

    public function getWarnLevel(): DataFileOpsItemWarnLevel
    {
        return $this->warnLevel;
    }

    public function withFilename(string $filename): self
    {
        $validator = new Validator();
        $validator->validate($filename, self::$schema['properties']['filename']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->filename = $filename;

        return $clone;
    }

    public function withoutFilename(): self
    {
        $clone = clone $this;
        unset($clone->filename);

        return $clone;
    }

    public function withFilepath(string $filepath): self
    {
        $validator = new Validator();
        $validator->validate($filepath, self::$schema['properties']['filepath']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->filepath = $filepath;

        return $clone;
    }

    public function withoutFilepath(): self
    {
        $clone = clone $this;
        unset($clone->filepath);

        return $clone;
    }

    public function withStats(Statistics $stats): self
    {
        $clone = clone $this;
        $clone->stats = $stats;

        return $clone;
    }

    public function withWarnLevel(DataFileOpsItemWarnLevel $warnLevel): self
    {
        $clone = clone $this;
        $clone->warnLevel = $warnLevel;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return DataFileOpsItem Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): DataFileOpsItem
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $filename = null;
        if (isset($input->{'filename'})) {
            $filename = $input->{'filename'};
        }
        $filepath = null;
        if (isset($input->{'filepath'})) {
            $filepath = $input->{'filepath'};
        }
        $stats = Statistics::buildFromInput($input->{'stats'}, validate: $validate);
        $warnLevel = DataFileOpsItemWarnLevel::from($input->{'warnLevel'});

        $obj = new self($stats, $warnLevel);
        $obj->filename = $filename;
        $obj->filepath = $filepath;
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
        if (isset($this->filename)) {
            $output['filename'] = $this->filename;
        }
        if (isset($this->filepath)) {
            $output['filepath'] = $this->filepath;
        }
        $output['stats'] = $this->stats->toJson();
        $output['warnLevel'] = ($this->warnLevel)->value;

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
        $validator->validate($input, self::$schema);

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
