<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Customer\RequestAvatarUpload;

class RequestAvatarUpload200ResponseBodyRules
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'maxSizeInKB' => [
                'type' => 'integer',
            ],
            'mimeTypes' => [
                'items' => [
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
            'mimeTypes',
            'maxSizeInKB',
        ],
        'type' => 'object',
    ];

    /**
     * @var int
     */
    private int $maxSizeInKB;

    /**
     * @var string[]
     */
    private array $mimeTypes;

    /**
     * @var RequestAvatarUpload200ResponseBodyRulesProperties|null
     */
    private ?RequestAvatarUpload200ResponseBodyRulesProperties $properties = null;

    public \Psr\Http\Message\ResponseInterface|null $httpResponse = null;

    /**
     * @param int $maxSizeInKB
     * @param string[] $mimeTypes
     */
    public function __construct(int $maxSizeInKB, array $mimeTypes)
    {
        $this->maxSizeInKB = $maxSizeInKB;
        $this->mimeTypes = $mimeTypes;
    }

    /**
     * @return int
     */
    public function getMaxSizeInKB() : int
    {
        return $this->maxSizeInKB;
    }

    /**
     * @return string[]
     */
    public function getMimeTypes() : array
    {
        return $this->mimeTypes;
    }

    /**
     * @return RequestAvatarUpload200ResponseBodyRulesProperties|null
     */
    public function getProperties() : ?RequestAvatarUpload200ResponseBodyRulesProperties
    {
        return $this->properties ?? null;
    }

    /**
     * @param int $maxSizeInKB
     * @return self
     */
    public function withMaxSizeInKB(int $maxSizeInKB) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($maxSizeInKB, static::$schema['properties']['maxSizeInKB']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->maxSizeInKB = $maxSizeInKB;

        return $clone;
    }

    /**
     * @param string[] $mimeTypes
     * @return self
     */
    public function withMimeTypes(array $mimeTypes) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($mimeTypes, static::$schema['properties']['mimeTypes']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->mimeTypes = $mimeTypes;

        return $clone;
    }

    /**
     * @param RequestAvatarUpload200ResponseBodyRulesProperties $properties
     * @return self
     */
    public function withProperties(RequestAvatarUpload200ResponseBodyRulesProperties $properties) : self
    {
        $clone = clone $this;
        $clone->properties = $properties;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutProperties() : self
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
     * @return RequestAvatarUpload200ResponseBodyRules Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : RequestAvatarUpload200ResponseBodyRules
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $maxSizeInKB = (int)($input->{'maxSizeInKB'});
        $mimeTypes = $input->{'mimeTypes'};
        $properties = null;
        if (isset($input->{'properties'})) {
            $properties = RequestAvatarUpload200ResponseBodyRulesProperties::buildFromInput($input->{'properties'}, validate: $validate);
        }

        $obj = new self($maxSizeInKB, $mimeTypes);
        $obj->properties = $properties;
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
        if (isset($this->properties)) {
            $this->properties = clone $this->properties;
        }
    }

    public static function fromResponse(\Psr\Http\Message\ResponseInterface $httpResponse) : self
    {
        $parsedBody = json_decode($httpResponse->getBody()->getContents(), associative: true);
        $response = static::buildFromInput(['body' => $parsedBody], validate: false);
        $response->httpResponse = $httpResponse;
        return $response;
    }
}

