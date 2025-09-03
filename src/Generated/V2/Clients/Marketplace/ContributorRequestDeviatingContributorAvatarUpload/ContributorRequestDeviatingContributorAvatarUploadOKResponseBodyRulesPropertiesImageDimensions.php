<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorRequestDeviatingContributorAvatarUpload;

use InvalidArgumentException;
use JsonSchema\Validator;

class ContributorRequestDeviatingContributorAvatarUploadOKResponseBodyRulesPropertiesImageDimensions
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
        'required' => [
            'min',
            'max',
        ],
        'type' => 'object',
    ];

    private ContributorRequestDeviatingContributorAvatarUploadOKResponseBodyRulesPropertiesImageDimensionsMax $max;

    private ContributorRequestDeviatingContributorAvatarUploadOKResponseBodyRulesPropertiesImageDimensionsMin $min;

    public function __construct(ContributorRequestDeviatingContributorAvatarUploadOKResponseBodyRulesPropertiesImageDimensionsMax $max, ContributorRequestDeviatingContributorAvatarUploadOKResponseBodyRulesPropertiesImageDimensionsMin $min)
    {
        $this->max = $max;
        $this->min = $min;
    }

    public function getMax(): ContributorRequestDeviatingContributorAvatarUploadOKResponseBodyRulesPropertiesImageDimensionsMax
    {
        return $this->max;
    }

    public function getMin(): ContributorRequestDeviatingContributorAvatarUploadOKResponseBodyRulesPropertiesImageDimensionsMin
    {
        return $this->min;
    }

    public function withMax(ContributorRequestDeviatingContributorAvatarUploadOKResponseBodyRulesPropertiesImageDimensionsMax $max): self
    {
        $clone = clone $this;
        $clone->max = $max;

        return $clone;
    }

    public function withMin(ContributorRequestDeviatingContributorAvatarUploadOKResponseBodyRulesPropertiesImageDimensionsMin $min): self
    {
        $clone = clone $this;
        $clone->min = $min;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ContributorRequestDeviatingContributorAvatarUploadOKResponseBodyRulesPropertiesImageDimensions Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ContributorRequestDeviatingContributorAvatarUploadOKResponseBodyRulesPropertiesImageDimensions
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $max = ContributorRequestDeviatingContributorAvatarUploadOKResponseBodyRulesPropertiesImageDimensionsMax::buildFromInput($input->{'max'}, validate: $validate);
        $min = ContributorRequestDeviatingContributorAvatarUploadOKResponseBodyRulesPropertiesImageDimensionsMin::buildFromInput($input->{'min'}, validate: $validate);

        $obj = new self($max, $min);

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
        $output['max'] = ($this->max)->toJson();
        $output['min'] = ($this->min)->toJson();

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
        $this->max = clone $this->max;
        $this->min = clone $this->min;
    }
}
