<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRequestAssetUpload;

use InvalidArgumentException;
use JsonSchema\Validator;

class ExtensionRequestAssetUploadOKResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'assetRefId' => [
                'description' => 'Use the ID as upload token at `/v2/files/{assetRefId}`. This ID will also be the ID of your asset in extension.',
                'format' => 'uuid',
                'type' => 'string',
            ],
            'rules' => [
                'description' => 'Constraints for the asset image or video upload, defers on the given assetType.',
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
            'assetRefId',
            'rules',
        ],
        'type' => 'object',
    ];

    /**
     * Use the ID as upload token at `/v2/files/{assetRefId}`. This ID will also be the ID of your asset in extension.
     */
    private string $assetRefId;

    /**
     * Constraints for the asset image or video upload, defers on the given assetType.
     */
    private ExtensionRequestAssetUploadOKResponseBodyRules $rules;

    public function __construct(string $assetRefId, ExtensionRequestAssetUploadOKResponseBodyRules $rules)
    {
        $this->assetRefId = $assetRefId;
        $this->rules = $rules;
    }

    public function getAssetRefId(): string
    {
        return $this->assetRefId;
    }

    public function getRules(): ExtensionRequestAssetUploadOKResponseBodyRules
    {
        return $this->rules;
    }

    public function withAssetRefId(string $assetRefId): self
    {
        $validator = new Validator();
        $validator->validate($assetRefId, self::$internalValidationSchema['properties']['assetRefId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->assetRefId = $assetRefId;

        return $clone;
    }

    public function withRules(ExtensionRequestAssetUploadOKResponseBodyRules $rules): self
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
     * @return ExtensionRequestAssetUploadOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ExtensionRequestAssetUploadOKResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $assetRefId = $input->{'assetRefId'};
        $rules = ExtensionRequestAssetUploadOKResponseBodyRules::buildFromInput($input->{'rules'}, validate: $validate);

        $obj = new self($assetRefId, $rules);

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
        $output['assetRefId'] = $this->assetRefId;
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
