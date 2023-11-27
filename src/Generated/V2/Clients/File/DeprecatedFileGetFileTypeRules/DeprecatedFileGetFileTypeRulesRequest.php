<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\File\DeprecatedFileGetFileTypeRules;

use InvalidArgumentException;
use JsonSchema\Validator;

class DeprecatedFileGetFileTypeRulesRequest
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
            'name' => [
                'enum' => [
                    'avatar',
                    'conversation',
                ],
                'example' => 'avatar',
                'type' => 'string',
            ],
        ],
        'required' => [
            'name',
        ],
    ];

    /**
     * @var DeprecatedFileGetFileTypeRulesRequestName
     */
    private DeprecatedFileGetFileTypeRulesRequestName $name;

    private array $headers = [

    ];

    /**
     * @param DeprecatedFileGetFileTypeRulesRequestName $name
     */
    public function __construct(DeprecatedFileGetFileTypeRulesRequestName $name)
    {
        $this->name = $name;
    }

    /**
     * @return DeprecatedFileGetFileTypeRulesRequestName
     */
    public function getName(): DeprecatedFileGetFileTypeRulesRequestName
    {
        return $this->name;
    }

    /**
     * @param DeprecatedFileGetFileTypeRulesRequestName $name
     * @return self
     */
    public function withName(DeprecatedFileGetFileTypeRulesRequestName $name): self
    {
        $clone = clone $this;
        $clone->name = $name;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return DeprecatedFileGetFileTypeRulesRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): DeprecatedFileGetFileTypeRulesRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $name = DeprecatedFileGetFileTypeRulesRequestName::from($input->{'name'});

        $obj = new self($name);

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
        $output['name'] = ($this->name)->value;

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
        $name = urlencode($mapped['name']);
        return '/v2/file-type-rules/' . $name;
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