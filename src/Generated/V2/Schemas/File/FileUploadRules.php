<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\File;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.file.FileUploadRules.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class FileUploadRules
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'extensions' => [
                'items' => [
                    'example' => [
                        '.png',
                        '.jpeg',
                        '.jpg',
                    ],
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
            'fileTypes' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.file.FileType',
                ],
                'type' => 'array',
            ],
            'maxSizeInBytes' => [
                'example' => 1000000,
                'type' => 'integer',
            ],
            'maxSizeInKB' => [
                'deprecated' => true,
                'description' => 'deprecated, see maxSizeInBytes',
                'example' => 1000,
                'type' => 'integer',
            ],
            'mimeTypes' => [
                'items' => [
                    'example' => [
                        'image/png',
                        'image/jpeg',
                    ],
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
                        'type' => 'object',
                    ],
                ],
                'type' => 'object',
            ],
        ],
        'required' => [
            'maxSizeInBytes',
            'maxSizeInKB',
            'mimeTypes',
            'fileTypes',
            'extensions',
        ],
        'type' => 'object',
    ];

    /**
     * @var string[]
     */
    private array $extensions;

    /**
     * @var FileType[]
     */
    private array $fileTypes;

    private int $maxSizeInBytes;

    /**
     * deprecated, see maxSizeInBytes
     */
    private int $maxSizeInKB;

    /**
     * @var string[]
     */
    private array $mimeTypes;

    private ?FileUploadRulesProperties $properties = null;

    /**
     * @param string[] $extensions
     * @param FileType[] $fileTypes
     * @param string[] $mimeTypes
     */
    public function __construct(array $extensions, array $fileTypes, int $maxSizeInBytes, int $maxSizeInKB, array $mimeTypes)
    {
        $this->extensions = $extensions;
        $this->fileTypes = $fileTypes;
        $this->maxSizeInBytes = $maxSizeInBytes;
        $this->maxSizeInKB = $maxSizeInKB;
        $this->mimeTypes = $mimeTypes;
    }

    /**
     * @return string[]
     */
    public function getExtensions(): array
    {
        return $this->extensions;
    }

    /**
     * @return FileType[]
     */
    public function getFileTypes(): array
    {
        return $this->fileTypes;
    }

    public function getMaxSizeInBytes(): int
    {
        return $this->maxSizeInBytes;
    }

    public function getMaxSizeInKB(): int
    {
        return $this->maxSizeInKB;
    }

    /**
     * @return string[]
     */
    public function getMimeTypes(): array
    {
        return $this->mimeTypes;
    }

    public function getProperties(): ?FileUploadRulesProperties
    {
        return $this->properties ?? null;
    }

    /**
     * @param string[] $extensions
     */
    public function withExtensions(array $extensions): self
    {
        $validator = new Validator();
        $validator->validate($extensions, static::$schema['properties']['extensions']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->extensions = $extensions;

        return $clone;
    }

    /**
     * @param FileType[] $fileTypes
     */
    public function withFileTypes(array $fileTypes): self
    {
        $clone = clone $this;
        $clone->fileTypes = $fileTypes;

        return $clone;
    }

    public function withMaxSizeInBytes(int $maxSizeInBytes): self
    {
        $validator = new Validator();
        $validator->validate($maxSizeInBytes, static::$schema['properties']['maxSizeInBytes']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->maxSizeInBytes = $maxSizeInBytes;

        return $clone;
    }

    public function withMaxSizeInKB(int $maxSizeInKB): self
    {
        $validator = new Validator();
        $validator->validate($maxSizeInKB, static::$schema['properties']['maxSizeInKB']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->maxSizeInKB = $maxSizeInKB;

        return $clone;
    }

    /**
     * @param string[] $mimeTypes
     */
    public function withMimeTypes(array $mimeTypes): self
    {
        $validator = new Validator();
        $validator->validate($mimeTypes, static::$schema['properties']['mimeTypes']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->mimeTypes = $mimeTypes;

        return $clone;
    }

    public function withProperties(FileUploadRulesProperties $properties): self
    {
        $clone = clone $this;
        $clone->properties = $properties;

        return $clone;
    }

    public function withoutProperties(): self
    {
        $clone = clone $this;
        unset($clone->properties);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return FileUploadRules Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): FileUploadRules
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $extensions = $input->{'extensions'};
        $fileTypes = array_map(fn (array|object $i): FileType => FileType::buildFromInput($i, validate: $validate), $input->{'fileTypes'});
        $maxSizeInBytes = (int)($input->{'maxSizeInBytes'});
        $maxSizeInKB = (int)($input->{'maxSizeInKB'});
        $mimeTypes = $input->{'mimeTypes'};
        $properties = null;
        if (isset($input->{'properties'})) {
            $properties = FileUploadRulesProperties::buildFromInput($input->{'properties'}, validate: $validate);
        }

        $obj = new self($extensions, $fileTypes, $maxSizeInBytes, $maxSizeInKB, $mimeTypes);
        $obj->properties = $properties;
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
        $output['extensions'] = $this->extensions;
        $output['fileTypes'] = array_map(fn (FileType $i): array => $i->toJson(), $this->fileTypes);
        $output['maxSizeInBytes'] = $this->maxSizeInBytes;
        $output['maxSizeInKB'] = $this->maxSizeInKB;
        $output['mimeTypes'] = $this->mimeTypes;
        if (isset($this->properties)) {
            $output['properties'] = ($this->properties)->toJson();
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
        if (isset($this->properties)) {
            $this->properties = clone $this->properties;
        }
    }
}
