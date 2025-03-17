<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Marketplace;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * The following assets are the media that are associated with the extension and
 * will be shown in extension details page.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class ExtensionAsset
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'description' => 'The following assets are the media that are associated with the extension and will be shown in extension details page.',
        'properties' => [
            'assetType' => [
                'enum' => [
                    'image',
                    'video',
                ],
                'example' => 'image',
                'type' => 'string',
            ],
            'fileName' => [
                'deprecated' => true,
                'example' => 'myFile.png',
                'type' => 'string',
            ],
            'id' => [
                'description' => 'The asset ID and reference ID to its file. Retrieve the file with this id on `/v2/files/{id}',
                'format' => 'uuid',
                'type' => 'string',
            ],
            'index' => [
                'description' => 'The index of the asset. Does not have to be successive. Can be used to order the assets.',
                'example' => 1,
                'type' => 'integer',
            ],
        ],
        'required' => [
            'id',
            'index',
            'assetType',
        ],
        'type' => 'object',
    ];

    private ExtensionAssetAssetType $assetType;

    /**
     * @deprecated
     */
    private ?string $fileName = null;

    /**
     * The asset ID and reference ID to its file. Retrieve the file with this id on `/v2/files/{id}
     */
    private string $id;

    /**
     * The index of the asset. Does not have to be successive. Can be used to order the assets.
     */
    private int $index;

    public function __construct(ExtensionAssetAssetType $assetType, string $id, int $index)
    {
        $this->assetType = $assetType;
        $this->id = $id;
        $this->index = $index;
    }

    public function getAssetType(): ExtensionAssetAssetType
    {
        return $this->assetType;
    }

    /**
     * @deprecated
     */
    public function getFileName(): ?string
    {
        return $this->fileName ?? null;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getIndex(): int
    {
        return $this->index;
    }

    public function withAssetType(ExtensionAssetAssetType $assetType): self
    {
        $clone = clone $this;
        $clone->assetType = $assetType;

        return $clone;
    }

    /**
     * @deprecated
     */
    public function withFileName(string $fileName): self
    {
        $validator = new Validator();
        $validator->validate($fileName, self::$schema['properties']['fileName']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->fileName = $fileName;

        return $clone;
    }

    public function withoutFileName(): self
    {
        $clone = clone $this;
        unset($clone->fileName);

        return $clone;
    }

    public function withId(string $id): self
    {
        $validator = new Validator();
        $validator->validate($id, self::$schema['properties']['id']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->id = $id;

        return $clone;
    }

    public function withIndex(int $index): self
    {
        $validator = new Validator();
        $validator->validate($index, self::$schema['properties']['index']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->index = $index;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ExtensionAsset Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ExtensionAsset
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $assetType = ExtensionAssetAssetType::from($input->{'assetType'});
        $fileName = null;
        if (isset($input->{'fileName'})) {
            $fileName = $input->{'fileName'};
        }
        $id = $input->{'id'};
        $index = (int)($input->{'index'});

        $obj = new self($assetType, $id, $index);
        $obj->fileName = $fileName;
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
        if (isset($this->fileName)) {
            $output['fileName'] = $this->fileName;
        }
        $output['id'] = $this->id;
        $output['index'] = $this->index;

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
