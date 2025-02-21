<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRequestLogoUpload;

use InvalidArgumentException;
use JsonSchema\Validator;

class ExtensionRequestLogoUploadOKResponseBodyRules
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
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
    ];

    /**
     * @var string[]
     */
    private array $extensions;

    /**
     * @var ExtensionRequestLogoUploadOKResponseBodyRulesFileTypesItem[]
     */
    private array $fileTypes;

    private int $maxSizeInBytes;

    /**
     * @var string[]
     */
    private array $mimeTypes;

    private ?ExtensionRequestLogoUploadOKResponseBodyRulesProperties $properties = null;

    /**
     * @param string[] $extensions
     * @param ExtensionRequestLogoUploadOKResponseBodyRulesFileTypesItem[] $fileTypes
     * @param string[] $mimeTypes
     */
    public function __construct(array $extensions, array $fileTypes, int $maxSizeInBytes, array $mimeTypes)
    {
        $this->extensions = $extensions;
        $this->fileTypes = $fileTypes;
        $this->maxSizeInBytes = $maxSizeInBytes;
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
     * @return ExtensionRequestLogoUploadOKResponseBodyRulesFileTypesItem[]
     */
    public function getFileTypes(): array
    {
        return $this->fileTypes;
    }

    public function getMaxSizeInBytes(): int
    {
        return $this->maxSizeInBytes;
    }

    /**
     * @return string[]
     */
    public function getMimeTypes(): array
    {
        return $this->mimeTypes;
    }

    public function getProperties(): ?ExtensionRequestLogoUploadOKResponseBodyRulesProperties
    {
        return $this->properties ?? null;
    }

    /**
     * @param string[] $extensions
     */
    public function withExtensions(array $extensions): self
    {
        $validator = new Validator();
        $validator->validate($extensions, self::$schema['properties']['extensions']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->extensions = $extensions;

        return $clone;
    }

    /**
     * @param ExtensionRequestLogoUploadOKResponseBodyRulesFileTypesItem[] $fileTypes
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
        $validator->validate($maxSizeInBytes, self::$schema['properties']['maxSizeInBytes']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->maxSizeInBytes = $maxSizeInBytes;

        return $clone;
    }

    /**
     * @param string[] $mimeTypes
     */
    public function withMimeTypes(array $mimeTypes): self
    {
        $validator = new Validator();
        $validator->validate($mimeTypes, self::$schema['properties']['mimeTypes']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->mimeTypes = $mimeTypes;

        return $clone;
    }

    public function withProperties(ExtensionRequestLogoUploadOKResponseBodyRulesProperties $properties): self
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
     * @return ExtensionRequestLogoUploadOKResponseBodyRules Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ExtensionRequestLogoUploadOKResponseBodyRules
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $extensions = $input->{'extensions'};
        $fileTypes = array_map(fn (array|object $i): ExtensionRequestLogoUploadOKResponseBodyRulesFileTypesItem => ExtensionRequestLogoUploadOKResponseBodyRulesFileTypesItem::buildFromInput($i, validate: $validate), $input->{'fileTypes'});
        $maxSizeInBytes = (int)($input->{'maxSizeInBytes'});
        $mimeTypes = $input->{'mimeTypes'};
        $properties = null;
        if (isset($input->{'properties'})) {
            $properties = ExtensionRequestLogoUploadOKResponseBodyRulesProperties::buildFromInput($input->{'properties'}, validate: $validate);
        }

        $obj = new self($extensions, $fileTypes, $maxSizeInBytes, $mimeTypes);
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
        $output['fileTypes'] = array_map(fn (ExtensionRequestLogoUploadOKResponseBodyRulesFileTypesItem $i) => $i->toJson(), $this->fileTypes);
        $output['maxSizeInBytes'] = $this->maxSizeInBytes;
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
        $this->fileTypes = array_map(fn (ExtensionRequestLogoUploadOKResponseBodyRulesFileTypesItem $i) => clone $i, $this->fileTypes);
        if (isset($this->properties)) {
            $this->properties = clone $this->properties;
        }
    }
}
