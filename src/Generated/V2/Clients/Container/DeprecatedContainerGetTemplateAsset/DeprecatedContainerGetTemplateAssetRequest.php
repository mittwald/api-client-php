<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Container\DeprecatedContainerGetTemplateAsset;

use InvalidArgumentException;
use JsonSchema\Validator;

class DeprecatedContainerGetTemplateAssetRequest
{
    public const method = 'get';

    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'type' => 'object',
        'properties' => [
            'templateId' => [
                'type' => 'string',
            ],
            'assetPath' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'templateId',
            'assetPath',
        ],
    ];

    private string $templateId;

    private string $assetPath;

    private array $headers = [

    ];

    public function __construct(string $templateId, string $assetPath)
    {
        $this->templateId = $templateId;
        $this->assetPath = $assetPath;
    }

    public function getTemplateId(): string
    {
        return $this->templateId;
    }

    public function getAssetPath(): string
    {
        return $this->assetPath;
    }

    public function withTemplateId(string $templateId): self
    {
        $validator = new Validator();
        $validator->validate($templateId, self::$internalValidationSchema['properties']['templateId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->templateId = $templateId;

        return $clone;
    }

    public function withAssetPath(string $assetPath): self
    {
        $validator = new Validator();
        $validator->validate($assetPath, self::$internalValidationSchema['properties']['assetPath']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->assetPath = $assetPath;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return DeprecatedContainerGetTemplateAssetRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): DeprecatedContainerGetTemplateAssetRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $templateId = $input->{'templateId'};
        $assetPath = $input->{'assetPath'};

        $obj = new self($templateId, $assetPath);

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
        $output['templateId'] = $this->templateId;
        $output['assetPath'] = $this->assetPath;

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
    }

    /**
     * Builds the URL for this request
     *
     * This method is used internally by the client to build the URL for this request.
     * You should not need to call this method directly.
     *
     * @internal
     * @return string The URL for this request
     */
    public function buildUrl(): string
    {
        $mapped = $this->toJson();
        $templateId = urlencode($mapped['templateId']);
        $assetPath = urlencode($mapped['assetPath']);
        return '/v2/container-templates/' . $templateId . '/assets/' . $assetPath;
    }

    /**
     * Builds the request options for this request
     *
     * This method is used internally by the client to build the Guzzle request options
     * for this request. You should not need to call this method directly.
     *
     * @internal
     * @return array The Guzzle request options for this request
     */
    public function buildRequestOptions(): array
    {
        $mapped = $this->toJson();
        $query = [];
        return [
            'query' => $query,
            'headers' => $this->headers,
        ];
    }

    /**
     * Adds a header to this request
     *
     * You can use this method to add custom HTTP headers to the request.
     *
     * @param string $name The name of the header to add
     * @param string|array $value The value of the header to add
     * @return self A clone of this request with the header added
     */
    public function withHeader(string $name, string|array $value): self
    {
        $clone = clone $this;
        $clone->headers[$name] = $value;
        return $clone;
    }
}
