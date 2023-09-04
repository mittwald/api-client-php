<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\RequestAvatarUpload;

class RequestAvatarUpload200ResponseBodyRulesPropertiesImageDimensionsMax
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
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

    /**
     * @var int|null
     */
    private ?int $height = null;

    /**
     * @var int|null
     */
    private ?int $width = null;

    public \Psr\Http\Message\ResponseInterface|null $httpResponse = null;

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return int|null
     */
    public function getHeight() : ?int
    {
        return $this->height ?? null;
    }

    /**
     * @return int|null
     */
    public function getWidth() : ?int
    {
        return $this->width ?? null;
    }

    /**
     * @param int $height
     * @return self
     */
    public function withHeight(int $height) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($height, static::$schema['properties']['height']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->height = $height;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutHeight() : self
    {
        $clone = clone $this;
        unset($clone->height);

        return $clone;
    }

    /**
     * @param int $width
     * @return self
     */
    public function withWidth(int $width) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($width, static::$schema['properties']['width']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->width = $width;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutWidth() : self
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
     * @return RequestAvatarUpload200ResponseBodyRulesPropertiesImageDimensionsMax Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : RequestAvatarUpload200ResponseBodyRulesPropertiesImageDimensionsMax
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
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
    public function toJson() : array
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
     * @throws \InvalidArgumentException
     */
    public static function validateInput(array|object $input, bool $return = false) : bool
    {
        $validator = new \JsonSchema\Validator();
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        $validator->validate($input, static::$schema);

        if (!$validator->isValid() && !$return) {
            $errors = array_map(function(array $e): string {
                return $e["property"] . ": " . $e["message"];
            }, $validator->getErrors());
            throw new \InvalidArgumentException(join(", ", $errors));
        }

        return $validator->isValid();
    }

    public function __clone()
    {
    }

    public static function fromResponse(\Psr\Http\Message\ResponseInterface $httpResponse) : self
    {
        $parsedBody = json_decode($httpResponse->getBody()->getContents(), associative: true);
        $response = static::buildFromInput(['body' => $parsedBody], validate: false);
        $response->httpResponse = $httpResponse;
        return $response;
    }
}

