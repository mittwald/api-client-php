<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Customer\RequestAvatarUpload;

use InvalidArgumentException;
use JsonSchema\Validator;

class RequestAvatarUploadOKResponseBodyRulesPropertiesImageDimensionsMin
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'height' => [
                'type' => 'integer',
            ],
            'width' => [
                'type' => 'integer',
            ],
        ],
        'type' => 'object',
    ];

    private ?int $height = null;

    private ?int $width = null;

    /**
     *
     */
    public function __construct()
    {
    }

    public function getHeight(): ?int
    {
        return $this->height ?? null;
    }

    public function getWidth(): ?int
    {
        return $this->width ?? null;
    }

    public function withHeight(int $height): self
    {
        $validator = new Validator();
        $validator->validate($height, self::$internalValidationSchema['properties']['height']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->height = $height;

        return $clone;
    }

    public function withoutHeight(): self
    {
        $clone = clone $this;
        unset($clone->height);

        return $clone;
    }

    public function withWidth(int $width): self
    {
        $validator = new Validator();
        $validator->validate($width, self::$internalValidationSchema['properties']['width']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->width = $width;

        return $clone;
    }

    public function withoutWidth(): self
    {
        $clone = clone $this;
        unset($clone->width);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return RequestAvatarUploadOKResponseBodyRulesPropertiesImageDimensionsMin Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): RequestAvatarUploadOKResponseBodyRulesPropertiesImageDimensionsMin
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $height = null;
        if (isset($input->{'height'})) {
            $height = (int)($input->{'height'});
        }
        $width = null;
        if (isset($input->{'width'})) {
            $width = (int)($input->{'width'});
        }

        $obj = new self();
        $obj->height = $height;
        $obj->width = $width;
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
        if (isset($this->height)) {
            $output['height'] = $this->height;
        }
        if (isset($this->width)) {
            $output['width'] = $this->width;
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
    }
}
