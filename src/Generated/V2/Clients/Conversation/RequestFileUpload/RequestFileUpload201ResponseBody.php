<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Conversation\RequestFileUpload;

class RequestFileUpload201ResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'conversationId' => [
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
            'uploadToken' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'conversationId',
            'uploadToken',
            'rules',
        ],
        'type' => 'object',
    ];

    /**
     * @var string
     */
    private string $conversationId;

    /**
     * @var RequestFileUpload201ResponseBodyRules
     */
    private RequestFileUpload201ResponseBodyRules $rules;

    /**
     * @var string
     */
    private string $uploadToken;

    public \Psr\Http\Message\ResponseInterface|null $httpResponse = null;

    /**
     * @param string $conversationId
     * @param RequestFileUpload201ResponseBodyRules $rules
     * @param string $uploadToken
     */
    public function __construct(string $conversationId, RequestFileUpload201ResponseBodyRules $rules, string $uploadToken)
    {
        $this->conversationId = $conversationId;
        $this->rules = $rules;
        $this->uploadToken = $uploadToken;
    }

    /**
     * @return string
     */
    public function getConversationId() : string
    {
        return $this->conversationId;
    }

    /**
     * @return RequestFileUpload201ResponseBodyRules
     */
    public function getRules() : RequestFileUpload201ResponseBodyRules
    {
        return $this->rules;
    }

    /**
     * @return string
     */
    public function getUploadToken() : string
    {
        return $this->uploadToken;
    }

    /**
     * @param string $conversationId
     * @return self
     */
    public function withConversationId(string $conversationId) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($conversationId, static::$schema['properties']['conversationId']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->conversationId = $conversationId;

        return $clone;
    }

    /**
     * @param RequestFileUpload201ResponseBodyRules $rules
     * @return self
     */
    public function withRules(RequestFileUpload201ResponseBodyRules $rules) : self
    {
        $clone = clone $this;
        $clone->rules = $rules;

        return $clone;
    }

    /**
     * @param string $uploadToken
     * @return self
     */
    public function withUploadToken(string $uploadToken) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($uploadToken, static::$schema['properties']['uploadToken']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->uploadToken = $uploadToken;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return RequestFileUpload201ResponseBody Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : RequestFileUpload201ResponseBody
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $conversationId = $input->{'conversationId'};
        $rules = RequestFileUpload201ResponseBodyRules::buildFromInput($input->{'rules'}, validate: $validate);
        $uploadToken = $input->{'uploadToken'};

        $obj = new self($conversationId, $rules, $uploadToken);

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
        $output['conversationId'] = $this->conversationId;
        $output['rules'] = ($this->rules)->toJson();
        $output['uploadToken'] = $this->uploadToken;

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

