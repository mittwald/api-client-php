<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\File;

use InvalidArgumentException;
use JsonSchema\Validator;

class FileUploadRulesPropertiesImageDimensions
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'max' => [
                'properties' => [
                    'height' => [
                        'type' => 'integer',
                    ],
                    'width' => [
                        'type' => 'integer',
                    ],
                ],
                'type' => 'object',
            ],
            'min' => [
                'properties' => [
                    'height' => [
                        'type' => 'integer',
                    ],
                    'width' => [
                        'type' => 'integer',
                    ],
                ],
                'type' => 'object',
            ],
        ],
        'type' => 'object',
    ];

    /**
     * @var FileUploadRulesPropertiesImageDimensionsMax|null
     */
    private ?FileUploadRulesPropertiesImageDimensionsMax $max = null;

    /**
     * @var FileUploadRulesPropertiesImageDimensionsMin|null
     */
    private ?FileUploadRulesPropertiesImageDimensionsMin $min = null;

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return FileUploadRulesPropertiesImageDimensionsMax|null
     */
    public function getMax(): ?FileUploadRulesPropertiesImageDimensionsMax
    {
        return $this->max ?? null;
    }

    /**
     * @return FileUploadRulesPropertiesImageDimensionsMin|null
     */
    public function getMin(): ?FileUploadRulesPropertiesImageDimensionsMin
    {
        return $this->min ?? null;
    }

    /**
     * @param FileUploadRulesPropertiesImageDimensionsMax $max
     * @return self
     */
    public function withMax(FileUploadRulesPropertiesImageDimensionsMax $max): self
    {
        $clone = clone $this;
        $clone->max = $max;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutMax(): self
    {
        $clone = clone $this;
        unset($clone->max);

        return $clone;
    }

    /**
     * @param FileUploadRulesPropertiesImageDimensionsMin $min
     * @return self
     */
    public function withMin(FileUploadRulesPropertiesImageDimensionsMin $min): self
    {
        $clone = clone $this;
        $clone->min = $min;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutMin(): self
    {
        $clone = clone $this;
        unset($clone->min);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return FileUploadRulesPropertiesImageDimensions Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): FileUploadRulesPropertiesImageDimensions
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $max = null;
        if (isset($input->{'max'})) {
            $max = FileUploadRulesPropertiesImageDimensionsMax::buildFromInput($input->{'max'}, validate: $validate);
        }
        $min = null;
        if (isset($input->{'min'})) {
            $min = FileUploadRulesPropertiesImageDimensionsMin::buildFromInput($input->{'min'}, validate: $validate);
        }

        $obj = new self();
        $obj->max = $max;
        $obj->min = $min;
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
        if (isset($this->max)) {
            $output['max'] = ($this->max)->toJson();
        }
        if (isset($this->min)) {
            $output['min'] = ($this->min)->toJson();
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
        if (isset($this->max)) {
            $this->max = clone $this->max;
        }
        if (isset($this->min)) {
            $this->min = clone $this->min;
        }
    }
}
