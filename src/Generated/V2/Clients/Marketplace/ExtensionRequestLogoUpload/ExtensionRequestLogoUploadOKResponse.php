<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRequestLogoUpload;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Client\ResponseContainer;
use Psr\Http\Message\ResponseInterface;

class ExtensionRequestLogoUploadOKResponse implements ResponseContainer
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'type' => 'object',
        'required' => [
            'body',
        ],
        'properties' => [
            'body' => [
                'properties' => [
                    'logoRefId' => [
                        'description' => 'Use the logoRefId as updload token at `/v2/files/{logoRefId}`.',
                        'format' => 'uuid',
                        'type' => 'string',
                    ],
                    'rules' => [
                        'description' => 'Constraints for the logo image upload.',
                        'properties' => [
                            'extensions' => [
                                'items' => [
                                    'example' => '.png',
                                    'type' => 'string',
                                ],
                                'type' => 'array',
                            ],
                            'fileTypes' => [
                                'items' => [
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
                                ],
                                'type' => 'array',
                            ],
                            'maxSizeInBytes' => [
                                'type' => 'integer',
                            ],
                            'mimeTypes' => [
                                'items' => [
                                    'example' => 'image/png',
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
                                        'required' => [
                                            'min',
                                            'max',
                                        ],
                                        'type' => 'object',
                                    ],
                                ],
                                'type' => 'object',
                            ],
                        ],
                        'required' => [
                            'mimeTypes',
                            'extensions',
                            'fileTypes',
                            'maxSizeInBytes',
                        ],
                        'type' => 'object',
                    ],
                ],
                'required' => [
                    'logoRefId',
                    'rules',
                ],
                'type' => 'object',
            ],
        ],
    ];

    private ExtensionRequestLogoUploadOKResponseBody $body;

    private ResponseInterface|null $httpResponse = null;

    public function __construct(ExtensionRequestLogoUploadOKResponseBody $body)
    {
        $this->body = $body;
    }

    public function getBody(): ExtensionRequestLogoUploadOKResponseBody
    {
        return $this->body;
    }

    public function withBody(ExtensionRequestLogoUploadOKResponseBody $body): self
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
     * @return ExtensionRequestLogoUploadOKResponse Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ExtensionRequestLogoUploadOKResponse
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $body = ExtensionRequestLogoUploadOKResponseBody::buildFromInput($input->{'body'}, validate: $validate);

        $obj = new self($body);

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
        $output['body'] = ($this->body)->toJson();

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
        $this->body = clone $this->body;
    }

    public static function fromResponse(ResponseInterface $httpResponse): self
    {
        $parsedBody = json_decode($httpResponse->getBody()->getContents(), associative: true);
        $response = static::buildFromInput(['body' => $parsedBody], validate: false);
        $response->httpResponse = $httpResponse;
        return $response;
    }

    public function getResponse(): ResponseInterface|null
    {
        return $this->httpResponse;
    }
}
