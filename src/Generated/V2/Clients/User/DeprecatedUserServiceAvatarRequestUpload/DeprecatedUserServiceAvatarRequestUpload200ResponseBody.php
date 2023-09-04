<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceAvatarRequestUpload;

class DeprecatedUserServiceAvatarRequestUpload200ResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'refId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'rules' => [
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
            ],
        ],
        'required' => [
            'refId',
            'rules',
        ],
        'type' => 'object',
    ];

    /**
     * @var string
     */
    private string $refId;

    /**
     * @var DeprecatedUserServiceAvatarRequestUpload200ResponseBodyRules
     */
    private DeprecatedUserServiceAvatarRequestUpload200ResponseBodyRules $rules;

    public \Psr\Http\Message\ResponseInterface|null $httpResponse = null;

    /**
     * @param string $refId
     * @param DeprecatedUserServiceAvatarRequestUpload200ResponseBodyRules $rules
     */
    public function __construct(string $refId, DeprecatedUserServiceAvatarRequestUpload200ResponseBodyRules $rules)
    {
        $this->refId = $refId;
        $this->rules = $rules;
    }

    /**
     * @return string
     */
    public function getRefId() : string
    {
        return $this->refId;
    }

    /**
     * @return DeprecatedUserServiceAvatarRequestUpload200ResponseBodyRules
     */
    public function getRules() : DeprecatedUserServiceAvatarRequestUpload200ResponseBodyRules
    {
        return $this->rules;
    }

    /**
     * @param string $refId
     * @return self
     */
    public function withRefId(string $refId) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($refId, static::$schema['properties']['refId']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->refId = $refId;

        return $clone;
    }

    /**
     * @param DeprecatedUserServiceAvatarRequestUpload200ResponseBodyRules $rules
     * @return self
     */
    public function withRules(DeprecatedUserServiceAvatarRequestUpload200ResponseBodyRules $rules) : self
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
     * @return DeprecatedUserServiceAvatarRequestUpload200ResponseBody Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : DeprecatedUserServiceAvatarRequestUpload200ResponseBody
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $refId = $input->{'refId'};
        $rules = DeprecatedUserServiceAvatarRequestUpload200ResponseBodyRules::buildFromInput($input->{'rules'}, validate: $validate);

        $obj = new self($refId, $rules);

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
        $output['refId'] = $this->refId;
        $output['rules'] = ($this->rules)->toJson();

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
        $this->rules = clone $this->rules;
    }

    public static function fromResponse(\Psr\Http\Message\ResponseInterface $httpResponse) : self
    {
        $parsedBody = json_decode($httpResponse->getBody()->getContents(), associative: true);
        $response = static::buildFromInput(['body' => $parsedBody], validate: false);
        $response->httpResponse = $httpResponse;
        return $response;
    }
}

