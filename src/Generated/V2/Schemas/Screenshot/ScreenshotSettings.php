<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Screenshot;

use InvalidArgumentException;
use JsonSchema\Validator;

class ScreenshotSettings
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'dataType' => [
                'enum' => [
                    'jpeg',
                    'png',
                    'webp',
                ],
                'type' => 'string',
            ],
            'delay' => [
                'type' => 'number',
            ],
            'height' => [
                'type' => 'number',
            ],
            'quality' => [
                'type' => 'number',
            ],
            'width' => [
                'type' => 'number',
            ],
        ],
        'required' => [
            'width',
            'height',
            'quality',
            'delay',
            'dataType',
        ],
        'type' => 'object',
    ];

    /**
     * @var ScreenshotSettingsDataType
     */
    private ScreenshotSettingsDataType $dataType;

    /**
     * @var int|float
     */
    private int|float $delay;

    /**
     * @var int|float
     */
    private int|float $height;

    /**
     * @var int|float
     */
    private int|float $quality;

    /**
     * @var int|float
     */
    private int|float $width;

    /**
     * @param ScreenshotSettingsDataType $dataType
     * @param int|float $delay
     * @param int|float $height
     * @param int|float $quality
     * @param int|float $width
     */
    public function __construct(ScreenshotSettingsDataType $dataType, int|float $delay, int|float $height, int|float $quality, int|float $width)
    {
        $this->dataType = $dataType;
        $this->delay = $delay;
        $this->height = $height;
        $this->quality = $quality;
        $this->width = $width;
    }

    /**
     * @return ScreenshotSettingsDataType
     */
    public function getDataType(): ScreenshotSettingsDataType
    {
        return $this->dataType;
    }

    /**
     * @return int|float
     */
    public function getDelay(): int|float
    {
        return $this->delay;
    }

    /**
     * @return int|float
     */
    public function getHeight(): int|float
    {
        return $this->height;
    }

    /**
     * @return int|float
     */
    public function getQuality(): int|float
    {
        return $this->quality;
    }

    /**
     * @return int|float
     */
    public function getWidth(): int|float
    {
        return $this->width;
    }

    /**
     * @param ScreenshotSettingsDataType $dataType
     * @return self
     */
    public function withDataType(ScreenshotSettingsDataType $dataType): self
    {
        $clone = clone $this;
        $clone->dataType = $dataType;

        return $clone;
    }

    /**
     * @param int|float $delay
     * @return self
     */
    public function withDelay(int|float $delay): self
    {
        $validator = new Validator();
        $validator->validate($delay, static::$schema['properties']['delay']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->delay = $delay;

        return $clone;
    }

    /**
     * @param int|float $height
     * @return self
     */
    public function withHeight(int|float $height): self
    {
        $validator = new Validator();
        $validator->validate($height, static::$schema['properties']['height']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->height = $height;

        return $clone;
    }

    /**
     * @param int|float $quality
     * @return self
     */
    public function withQuality(int|float $quality): self
    {
        $validator = new Validator();
        $validator->validate($quality, static::$schema['properties']['quality']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->quality = $quality;

        return $clone;
    }

    /**
     * @param int|float $width
     * @return self
     */
    public function withWidth(int|float $width): self
    {
        $validator = new Validator();
        $validator->validate($width, static::$schema['properties']['width']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->width = $width;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ScreenshotSettings Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ScreenshotSettings
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $dataType = ScreenshotSettingsDataType::from($input->{'dataType'});
        $delay = str_contains($input->{'delay'}, '.') ? (float)($input->{'delay'}) : (int)($input->{'delay'});
        $height = str_contains($input->{'height'}, '.') ? (float)($input->{'height'}) : (int)($input->{'height'});
        $quality = str_contains($input->{'quality'}, '.') ? (float)($input->{'quality'}) : (int)($input->{'quality'});
        $width = str_contains($input->{'width'}, '.') ? (float)($input->{'width'}) : (int)($input->{'width'});

        $obj = new self($dataType, $delay, $height, $quality, $width);

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
        $output['dataType'] = ($this->dataType)->value;
        $output['delay'] = $this->delay;
        $output['height'] = $this->height;
        $output['quality'] = $this->quality;
        $output['width'] = $this->width;

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
    }
}
