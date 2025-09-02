<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\File\GetFileUploadTypeRules;

use InvalidArgumentException;
use JsonSchema\Validator;

class GetFileUploadTypeRulesRequest
{
    public const method = 'get';

    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'type' => 'object',
        'properties' => [
            'fileUploadType' => [
                'enum' => [
                    'avatar',
                    'extensionAssetImage',
                    'extensionAssetVideo',
                    'anchorIcon',
                    'conversation',
                ],
                'example' => 'avatar',
                'type' => 'string',
            ],
        ],
        'required' => [
            'fileUploadType',
        ],
    ];

    private GetFileUploadTypeRulesRequestFileUploadType $fileUploadType;

    private array $headers = [

    ];

    public function __construct(GetFileUploadTypeRulesRequestFileUploadType $fileUploadType)
    {
        $this->fileUploadType = $fileUploadType;
    }

    public function getFileUploadType(): GetFileUploadTypeRulesRequestFileUploadType
    {
        return $this->fileUploadType;
    }

    public function withFileUploadType(GetFileUploadTypeRulesRequestFileUploadType $fileUploadType): self
    {
        $clone = clone $this;
        $clone->fileUploadType = $fileUploadType;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return GetFileUploadTypeRulesRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): GetFileUploadTypeRulesRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $fileUploadType = GetFileUploadTypeRulesRequestFileUploadType::from($input->{'fileUploadType'});

        $obj = new self($fileUploadType);

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
        $output['fileUploadType'] = ($this->fileUploadType)->value;

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
        $fileUploadType = urlencode($mapped['fileUploadType']);
        return '/v2/file-upload-types/' . $fileUploadType . '/rules';
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
