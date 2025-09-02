<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRequestLogoUpload;

use InvalidArgumentException;
use JsonSchema\Validator;

class ExtensionRequestLogoUploadOKResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'logoRefId' => [
                'description' => 'Use the logoRefId as updload token at `/v2/files/{logoRefId}`.',
                'format' => 'uuid',
                'type' => 'string',
            ],
            'rules' => [
                'description' => 'Constraints for the logo image upload.',
                'properties' => [
                    'extensions' => [
                        'items' => [
                            'example' => '.png',
                            'type' => 'string',
                        ],
                        'type' => 'array',
                    ],
                    'fileTypes' => [
                        'items' => [
                            'properties' => [
                                'extensions' => [
                                    'items' => [
                                        'example' => '.png',
                                        'type' => 'string',
                                    ],
                                    'type' => 'array',
                                ],
                                'mimeType' => [
                                    'example' => 'image/png',
                                    'type' => 'string',
                                ],
                            ],
                            'required' => [
                                'mimeType',
                                'extensions',
                            ],
                            'type' => 'object',
                        ],
                        'type' => 'array',
                    ],
                    'maxSizeInBytes' => [
                        'type' => 'integer',
                    ],
                    'mimeTypes' => [
                        'items' => [
                            'example' => 'image/png',
                            'type' => 'string',
                        ],
                        'type' => 'array',
                    ],
                    'properties' => [
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
                                'required' => [
                                    'min',
                                    'max',
                                ],
                                'type' => 'object',
                            ],
                        ],
                        'type' => 'object',
                    ],
                ],
                'required' => [
                    'mimeTypes',
                    'extensions',
                    'fileTypes',
                    'maxSizeInBytes',
                ],
                'type' => 'object',
            ],
        ],
        'required' => [
            'logoRefId',
            'rules',
        ],
        'type' => 'object',
    ];

    /**
     * Use the logoRefId as updload token at `/v2/files/{logoRefId}`.
     */
    private string $logoRefId;

    /**
     * Constraints for the logo image upload.
     */
    private ExtensionRequestLogoUploadOKResponseBodyRules $rules;

    public function __construct(string $logoRefId, ExtensionRequestLogoUploadOKResponseBodyRules $rules)
    {
        $this->logoRefId = $logoRefId;
        $this->rules = $rules;
    }

    public function getLogoRefId(): string
    {
        return $this->logoRefId;
    }

    public function getRules(): ExtensionRequestLogoUploadOKResponseBodyRules
    {
        return $this->rules;
    }

    public function withLogoRefId(string $logoRefId): self
    {
        $validator = new Validator();
        $validator->validate($logoRefId, self::$internalValidationSchema['properties']['logoRefId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->logoRefId = $logoRefId;

        return $clone;
    }

    public function withRules(ExtensionRequestLogoUploadOKResponseBodyRules $rules): self
    {
        $clone = clone $this;
        $clone->rules = $rules;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ExtensionRequestLogoUploadOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ExtensionRequestLogoUploadOKResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $logoRefId = $input->{'logoRefId'};
        $rules = ExtensionRequestLogoUploadOKResponseBodyRules::buildFromInput($input->{'rules'}, validate: $validate);

        $obj = new self($logoRefId, $rules);

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
        $output['logoRefId'] = $this->logoRefId;
        $output['rules'] = ($this->rules)->toJson();

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
        $this->rules = clone $this->rules;
    }
}
