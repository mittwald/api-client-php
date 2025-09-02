<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceAvatarRequestUpload;

use InvalidArgumentException;
use JsonSchema\Validator;

class DeprecatedUserServiceAvatarRequestUploadOKResponseBodyRulesProperties
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'imageDimensions' => [
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
            ],
        ],
        'type' => 'object',
    ];

    private ?DeprecatedUserServiceAvatarRequestUploadOKResponseBodyRulesPropertiesImageDimensions $imageDimensions = null;

    /**
     *
     */
    public function __construct()
    {
    }

    public function getImageDimensions(): ?DeprecatedUserServiceAvatarRequestUploadOKResponseBodyRulesPropertiesImageDimensions
    {
        return $this->imageDimensions ?? null;
    }

    public function withImageDimensions(DeprecatedUserServiceAvatarRequestUploadOKResponseBodyRulesPropertiesImageDimensions $imageDimensions): self
    {
        $clone = clone $this;
        $clone->imageDimensions = $imageDimensions;

        return $clone;
    }

    public function withoutImageDimensions(): self
    {
        $clone = clone $this;
        unset($clone->imageDimensions);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return DeprecatedUserServiceAvatarRequestUploadOKResponseBodyRulesProperties Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): DeprecatedUserServiceAvatarRequestUploadOKResponseBodyRulesProperties
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $imageDimensions = null;
        if (isset($input->{'imageDimensions'})) {
            $imageDimensions = DeprecatedUserServiceAvatarRequestUploadOKResponseBodyRulesPropertiesImageDimensions::buildFromInput($input->{'imageDimensions'}, validate: $validate);
        }

        $obj = new self();
        $obj->imageDimensions = $imageDimensions;
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
        if (isset($this->imageDimensions)) {
            $output['imageDimensions'] = ($this->imageDimensions)->toJson();
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
        if (isset($this->imageDimensions)) {
            $this->imageDimensions = clone $this->imageDimensions;
        }
    }
}
