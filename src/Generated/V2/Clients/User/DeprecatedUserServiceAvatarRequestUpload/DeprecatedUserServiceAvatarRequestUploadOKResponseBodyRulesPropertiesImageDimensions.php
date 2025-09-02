<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceAvatarRequestUpload;

use InvalidArgumentException;
use JsonSchema\Validator;

class DeprecatedUserServiceAvatarRequestUploadOKResponseBodyRulesPropertiesImageDimensions
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
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

    private ?DeprecatedUserServiceAvatarRequestUploadOKResponseBodyRulesPropertiesImageDimensionsMax $max = null;

    private ?DeprecatedUserServiceAvatarRequestUploadOKResponseBodyRulesPropertiesImageDimensionsMin $min = null;

    /**
     *
     */
    public function __construct()
    {
    }

    public function getMax(): ?DeprecatedUserServiceAvatarRequestUploadOKResponseBodyRulesPropertiesImageDimensionsMax
    {
        return $this->max ?? null;
    }

    public function getMin(): ?DeprecatedUserServiceAvatarRequestUploadOKResponseBodyRulesPropertiesImageDimensionsMin
    {
        return $this->min ?? null;
    }

    public function withMax(DeprecatedUserServiceAvatarRequestUploadOKResponseBodyRulesPropertiesImageDimensionsMax $max): self
    {
        $clone = clone $this;
        $clone->max = $max;

        return $clone;
    }

    public function withoutMax(): self
    {
        $clone = clone $this;
        unset($clone->max);

        return $clone;
    }

    public function withMin(DeprecatedUserServiceAvatarRequestUploadOKResponseBodyRulesPropertiesImageDimensionsMin $min): self
    {
        $clone = clone $this;
        $clone->min = $min;

        return $clone;
    }

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
     * @return DeprecatedUserServiceAvatarRequestUploadOKResponseBodyRulesPropertiesImageDimensions Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): DeprecatedUserServiceAvatarRequestUploadOKResponseBodyRulesPropertiesImageDimensions
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $max = null;
        if (isset($input->{'max'})) {
            $max = DeprecatedUserServiceAvatarRequestUploadOKResponseBodyRulesPropertiesImageDimensionsMax::buildFromInput($input->{'max'}, validate: $validate);
        }
        $min = null;
        if (isset($input->{'min'})) {
            $min = DeprecatedUserServiceAvatarRequestUploadOKResponseBodyRulesPropertiesImageDimensionsMin::buildFromInput($input->{'min'}, validate: $validate);
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
        if (isset($this->max)) {
            $this->max = clone $this->max;
        }
        if (isset($this->min)) {
            $this->min = clone $this->min;
        }
    }
}
