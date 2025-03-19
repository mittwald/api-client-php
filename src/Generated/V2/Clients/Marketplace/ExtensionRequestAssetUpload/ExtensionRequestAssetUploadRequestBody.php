<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRequestAssetUpload;

use InvalidArgumentException;
use JsonSchema\Validator;

class ExtensionRequestAssetUploadRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'assetType' => [
                'enum' => [
                    'image',
                    'video',
                ],
                'type' => 'string',
            ],
        ],
        'required' => [
            'assetType',
        ],
        'type' => 'object',
    ];

    private ExtensionRequestAssetUploadRequestBodyAssetType $assetType;

    public function __construct(ExtensionRequestAssetUploadRequestBodyAssetType $assetType)
    {
        $this->assetType = $assetType;
    }

    public function getAssetType(): ExtensionRequestAssetUploadRequestBodyAssetType
    {
        return $this->assetType;
    }

    public function withAssetType(ExtensionRequestAssetUploadRequestBodyAssetType $assetType): self
    {
        $clone = clone $this;
        $clone->assetType = $assetType;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ExtensionRequestAssetUploadRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ExtensionRequestAssetUploadRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $assetType = ExtensionRequestAssetUploadRequestBodyAssetType::from($input->{'assetType'});

        $obj = new self($assetType);

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
        $output['assetType'] = ($this->assetType)->value;

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
