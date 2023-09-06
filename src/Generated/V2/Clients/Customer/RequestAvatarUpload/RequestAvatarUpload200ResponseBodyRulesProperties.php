<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Customer\RequestAvatarUpload;

use InvalidArgumentException;
use JsonSchema\Validator;
use Psr\Http\Message\ResponseInterface;

class RequestAvatarUpload200ResponseBodyRulesProperties
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
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
    ];

    /**
     * @var RequestAvatarUpload200ResponseBodyRulesPropertiesImageDimensions|null
     */
    private ?RequestAvatarUpload200ResponseBodyRulesPropertiesImageDimensions $imageDimensions = null;

    public ResponseInterface|null $httpResponse = null;

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return RequestAvatarUpload200ResponseBodyRulesPropertiesImageDimensions|null
     */
    public function getImageDimensions(): ?RequestAvatarUpload200ResponseBodyRulesPropertiesImageDimensions
    {
        return $this->imageDimensions ?? null;
    }

    /**
     * @param RequestAvatarUpload200ResponseBodyRulesPropertiesImageDimensions $imageDimensions
     * @return self
     */
    public function withImageDimensions(RequestAvatarUpload200ResponseBodyRulesPropertiesImageDimensions $imageDimensions): self
    {
        $clone = clone $this;
        $clone->imageDimensions = $imageDimensions;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutImageDimensions(): self
    {
        $clone = clone $this;
        unset($clone->imageDimensions);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return RequestAvatarUpload200ResponseBodyRulesProperties Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): RequestAvatarUpload200ResponseBodyRulesProperties
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $imageDimensions = null;
        if (isset($input->{'imageDimensions'})) {
            $imageDimensions = RequestAvatarUpload200ResponseBodyRulesPropertiesImageDimensions::buildFromInput($input->{'imageDimensions'}, validate: $validate);
        }

        $obj = new self();
        $obj->imageDimensions = $imageDimensions;
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
        if (isset($this->imageDimensions)) {
            $output['imageDimensions'] = ($this->imageDimensions)->toJson();
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
        if (isset($this->imageDimensions)) {
            $this->imageDimensions = clone $this->imageDimensions;
        }
    }

    public static function fromResponse(ResponseInterface $httpResponse): self
    {
        $parsedBody = json_decode($httpResponse->getBody()->getContents(), associative: true);
        $response = static::buildFromInput(['body' => $parsedBody], validate: false);
        $response->httpResponse = $httpResponse;
        return $response;
    }
}
