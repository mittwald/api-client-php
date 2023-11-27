<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\File\GetFileUploadTokenRules;

use InvalidArgumentException;
use JsonSchema\Validator;

class GetFileUploadTokenRulesRequest
{
    public const method = 'get';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'type' => 'object',
        'properties' => [
            'fileUploadToken' => [
                'example' => '3fa85f64-5717-4562-b3fc-2c963f66afa6',
                'format' => 'uuid',
                'type' => 'string',
            ],
        ],
        'required' => [
            'fileUploadToken',
        ],
    ];

    /**
     * @var string
     */
    private string $fileUploadToken;

    private array $headers = [

    ];

    /**
     * @param string $fileUploadToken
     */
    public function __construct(string $fileUploadToken)
    {
        $this->fileUploadToken = $fileUploadToken;
    }

    /**
     * @return string
     */
    public function getFileUploadToken(): string
    {
        return $this->fileUploadToken;
    }

    /**
     * @param string $fileUploadToken
     * @return self
     */
    public function withFileUploadToken(string $fileUploadToken): self
    {
        $validator = new Validator();
        $validator->validate($fileUploadToken, static::$schema['properties']['fileUploadToken']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->fileUploadToken = $fileUploadToken;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return GetFileUploadTokenRulesRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): GetFileUploadTokenRulesRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $fileUploadToken = $input->{'fileUploadToken'};

        $obj = new self($fileUploadToken);

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
        $output['fileUploadToken'] = $this->fileUploadToken;

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
    }

    public function getUrl(): string
    {
        $mapped = $this->toJson();
        $fileUploadToken = urlencode($mapped['fileUploadToken']);
        return '/v2/file-upload-tokens/' . $fileUploadToken . '/rules';
    }

    public function getQuery(): array
    {
        $mapped = $this->toJson();
        $query = [];
        return $query;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function withHeader(string $name, string|array $value): self
    {
        $clone = clone $this;
        $clone->headers[$name] = $value;
        return $clone;
    }
}