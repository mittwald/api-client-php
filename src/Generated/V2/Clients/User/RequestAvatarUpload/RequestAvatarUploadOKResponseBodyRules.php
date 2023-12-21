<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\RequestAvatarUpload;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Client\ResponseContainer;
use Psr\Http\Message\ResponseInterface;

class RequestAvatarUploadOKResponseBodyRules implements ResponseContainer
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
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
    ];

    /**
     * Maximum size in kilobytes of the avatar image.
     *
     * @var int
     */
    private int $maxSizeInKB;

    /**
     * List of supported mime types.
     *
     * @var string[]
     */
    private array $mimeTypes;

    /**
     * @var RequestAvatarUploadOKResponseBodyRulesProperties|null
     */
    private ?RequestAvatarUploadOKResponseBodyRulesProperties $properties = null;

    private ResponseInterface|null $httpResponse = null;

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
    public function getMaxSizeInKB(): int
    {
        return $this->maxSizeInKB;
    }

    /**
     * @return string[]
     */
    public function getMimeTypes(): array
    {
        return $this->mimeTypes;
    }

    /**
     * @return RequestAvatarUploadOKResponseBodyRulesProperties|null
     */
    public function getProperties(): ?RequestAvatarUploadOKResponseBodyRulesProperties
    {
        return $this->properties ?? null;
    }

    /**
     * @param int $maxSizeInKB
     * @return self
     */
    public function withMaxSizeInKB(int $maxSizeInKB): self
    {
        $validator = new Validator();
        $validator->validate($maxSizeInKB, static::$schema['properties']['maxSizeInKB']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->maxSizeInKB = $maxSizeInKB;

        return $clone;
    }

    /**
     * @param string[] $mimeTypes
     * @return self
     */
    public function withMimeTypes(array $mimeTypes): self
    {
        $validator = new Validator();
        $validator->validate($mimeTypes, static::$schema['properties']['mimeTypes']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->mimeTypes = $mimeTypes;

        return $clone;
    }

    /**
     * @param RequestAvatarUploadOKResponseBodyRulesProperties $properties
     * @return self
     */
    public function withProperties(RequestAvatarUploadOKResponseBodyRulesProperties $properties): self
    {
        $clone = clone $this;
        $clone->properties = $properties;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutProperties(): self
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
     * @return RequestAvatarUploadOKResponseBodyRules Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): RequestAvatarUploadOKResponseBodyRules
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $maxSizeInKB = (int)($input->{'maxSizeInKB'});
        $mimeTypes = $input->{'mimeTypes'};
        $properties = null;
        if (isset($input->{'properties'})) {
            $properties = RequestAvatarUploadOKResponseBodyRulesProperties::buildFromInput($input->{'properties'}, validate: $validate);
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
    public function toJson(): array
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
        if (isset($this->properties)) {
            $this->properties = clone $this->properties;
        }
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