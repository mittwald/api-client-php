<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\RequestAvatarUpload;

class RequestAvatarUpload200Response
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'type' => 'object',
        'required' => [
            'body',
        ],
        'properties' => [
            'body' => [
                'properties' => [
                    'refId' => [
                        'description' => 'The `refId` to be used to upload your avatar to the /v2/files/:refId route.',
                        'format' => 'uuid',
                        'type' => 'string',
                    ],
                    'rules' => [
                        'description' => 'Contstraints for the avatar image upload.',
                        'properties' => [
                            'maxSizeInKB' => [
                                'description' => 'Maximum size in kilobytes of the avatar image.',
                                'example' => 3000,
                                'type' => 'integer',
                            ],
                            'mimeTypes' => [
                                'description' => 'List of supported mime types.',
                                'items' => [
                                    'example' => 'image/png',
                                    'type' => 'string',
                                ],
                                'type' => 'array',
                            ],
                            'properties' => [
                                'properties' => [
                                    'imageDimensions' => [
                                        'description' => 'Supported range of dimensions for the avatar image.',
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
            ],
        ],
    ];

    /**
     * @var RequestAvatarUpload200ResponseBody
     */
    private RequestAvatarUpload200ResponseBody $body;

    public \Psr\Http\Message\ResponseInterface|null $httpResponse = null;

    /**
     * @param RequestAvatarUpload200ResponseBody $body
     */
    public function __construct(RequestAvatarUpload200ResponseBody $body)
    {
        $this->body = $body;
    }

    /**
     * @return RequestAvatarUpload200ResponseBody
     */
    public function getBody() : RequestAvatarUpload200ResponseBody
    {
        return $this->body;
    }

    /**
     * @param RequestAvatarUpload200ResponseBody $body
     * @return self
     */
    public function withBody(RequestAvatarUpload200ResponseBody $body) : self
    {
        $clone = clone $this;
        $clone->body = $body;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return RequestAvatarUpload200Response Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : RequestAvatarUpload200Response
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $body = RequestAvatarUpload200ResponseBody::buildFromInput($input->{'body'}, validate: $validate);

        $obj = new self($body);

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
        $output['body'] = ($this->body)->toJson();

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
        $this->body = clone $this->body;
    }

    public static function fromResponse(\Psr\Http\Message\ResponseInterface $httpResponse) : self
    {
        $parsedBody = json_decode($httpResponse->getBody()->getContents(), associative: true);
        $response = static::buildFromInput(['body' => $parsedBody], validate: false);
        $response->httpResponse = $httpResponse;
        return $response;
    }
}

