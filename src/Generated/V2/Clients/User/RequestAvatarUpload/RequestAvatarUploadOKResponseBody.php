<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\RequestAvatarUpload;

use InvalidArgumentException;
use JsonSchema\Validator;

class RequestAvatarUploadOKResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
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
    ];

    /**
     * The `refId` to be used to upload your avatar to the /v2/files/:refId route.
     */
    private string $refId;

    /**
     * Contstraints for the avatar image upload.
     */
    private RequestAvatarUploadOKResponseBodyRules $rules;

    public function __construct(string $refId, RequestAvatarUploadOKResponseBodyRules $rules)
    {
        $this->refId = $refId;
        $this->rules = $rules;
    }

    public function getRefId(): string
    {
        return $this->refId;
    }

    public function getRules(): RequestAvatarUploadOKResponseBodyRules
    {
        return $this->rules;
    }

    public function withRefId(string $refId): self
    {
        $validator = new Validator();
        $validator->validate($refId, static::$schema['properties']['refId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->refId = $refId;

        return $clone;
    }

    public function withRules(RequestAvatarUploadOKResponseBodyRules $rules): self
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
     * @return RequestAvatarUploadOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): RequestAvatarUploadOKResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $refId = $input->{'refId'};
        $rules = RequestAvatarUploadOKResponseBodyRules::buildFromInput($input->{'rules'}, validate: $validate);

        $obj = new self($refId, $rules);

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
        $this->rules = clone $this->rules;
    }
}
