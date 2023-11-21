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
     *
     * @var array
     */
    private static array $schema = [
        'type' => 'object',
        'properties' => [
            'fileUploadType' => [
                'enum' => [
                    'avatar',
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

    /**
     * @var GetFileUploadTypeRulesRequestFileUploadType
     */
    private GetFileUploadTypeRulesRequestFileUploadType $fileUploadType;

    private array $headers = [

    ];

    /**
     * @param GetFileUploadTypeRulesRequestFileUploadType $fileUploadType
     */
    public function __construct(GetFileUploadTypeRulesRequestFileUploadType $fileUploadType)
    {
        $this->fileUploadType = $fileUploadType;
    }

    /**
     * @return GetFileUploadTypeRulesRequestFileUploadType
     */
    public function getFileUploadType(): GetFileUploadTypeRulesRequestFileUploadType
    {
        return $this->fileUploadType;
    }

    /**
     * @param GetFileUploadTypeRulesRequestFileUploadType $fileUploadType
     * @return self
     */
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
        $fileUploadType = urlencode($mapped['fileUploadType']);
        return '/v2/file-upload-types/' . $fileUploadType . '/rules';
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
