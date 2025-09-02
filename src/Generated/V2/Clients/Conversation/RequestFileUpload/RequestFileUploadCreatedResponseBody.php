<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Conversation\RequestFileUpload;

use InvalidArgumentException;
use JsonSchema\Validator;

class RequestFileUploadCreatedResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
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

    private string $conversationId;

    private RequestFileUploadCreatedResponseBodyRules $rules;

    private string $uploadToken;

    public function __construct(string $conversationId, RequestFileUploadCreatedResponseBodyRules $rules, string $uploadToken)
    {
        $this->conversationId = $conversationId;
        $this->rules = $rules;
        $this->uploadToken = $uploadToken;
    }

    public function getConversationId(): string
    {
        return $this->conversationId;
    }

    public function getRules(): RequestFileUploadCreatedResponseBodyRules
    {
        return $this->rules;
    }

    public function getUploadToken(): string
    {
        return $this->uploadToken;
    }

    public function withConversationId(string $conversationId): self
    {
        $validator = new Validator();
        $validator->validate($conversationId, self::$internalValidationSchema['properties']['conversationId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->conversationId = $conversationId;

        return $clone;
    }

    public function withRules(RequestFileUploadCreatedResponseBodyRules $rules): self
    {
        $clone = clone $this;
        $clone->rules = $rules;

        return $clone;
    }

    public function withUploadToken(string $uploadToken): self
    {
        $validator = new Validator();
        $validator->validate($uploadToken, self::$internalValidationSchema['properties']['uploadToken']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
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
     * @return RequestFileUploadCreatedResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): RequestFileUploadCreatedResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $conversationId = $input->{'conversationId'};
        $rules = RequestFileUploadCreatedResponseBodyRules::buildFromInput($input->{'rules'}, validate: $validate);
        $uploadToken = $input->{'uploadToken'};

        $obj = new self($conversationId, $rules, $uploadToken);

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
        $this->rules = clone $this->rules;
    }
}
