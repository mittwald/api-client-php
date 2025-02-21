<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRequestLogoUpload;

use InvalidArgumentException;
use JsonSchema\Validator;

class ExtensionRequestLogoUploadOKResponseBodyRulesFileTypesItem
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
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
    ];

    /**
     * @var string[]
     */
    private array $extensions;

    private string $mimeType;

    /**
     * @param string[] $extensions
     */
    public function __construct(array $extensions, string $mimeType)
    {
        $this->extensions = $extensions;
        $this->mimeType = $mimeType;
    }

    /**
     * @return string[]
     */
    public function getExtensions(): array
    {
        return $this->extensions;
    }

    public function getMimeType(): string
    {
        return $this->mimeType;
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

    public function withMimeType(string $mimeType): self
    {
        $validator = new Validator();
        $validator->validate($mimeType, self::$schema['properties']['mimeType']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->mimeType = $mimeType;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ExtensionRequestLogoUploadOKResponseBodyRulesFileTypesItem Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ExtensionRequestLogoUploadOKResponseBodyRulesFileTypesItem
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $extensions = $input->{'extensions'};
        $mimeType = $input->{'mimeType'};

        $obj = new self($extensions, $mimeType);

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
        $output['mimeType'] = $this->mimeType;

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
