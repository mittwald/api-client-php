<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\App\GetSystemsoftwareversion;

use InvalidArgumentException;

class GetSystemsoftwareversionRequest
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
            'systemSoftwareId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'systemSoftwareVersionId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
        ],
        'required' => [
            'systemSoftwareId',
            'systemSoftwareVersionId',
        ],
    ];

    /**
     * @var string
     */
    private string $systemSoftwareId;

    /**
     * @var string
     */
    private string $systemSoftwareVersionId;

    private array $headers = [

    ];

    /**
     * @param string $systemSoftwareId
     * @param string $systemSoftwareVersionId
     */
    public function __construct(string $systemSoftwareId, string $systemSoftwareVersionId)
    {
        $this->systemSoftwareId = $systemSoftwareId;
        $this->systemSoftwareVersionId = $systemSoftwareVersionId;
    }

    /**
     * @return string
     */
    public function getSystemSoftwareId(): string
    {
        return $this->systemSoftwareId;
    }

    /**
     * @return string
     */
    public function getSystemSoftwareVersionId(): string
    {
        return $this->systemSoftwareVersionId;
    }

    /**
     * @param string $systemSoftwareId
     * @return self
     */
    public function withSystemSoftwareId(string $systemSoftwareId): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($systemSoftwareId, static::$schema['properties']['systemSoftwareId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->systemSoftwareId = $systemSoftwareId;

        return $clone;
    }

    /**
     * @param string $systemSoftwareVersionId
     * @return self
     */
    public function withSystemSoftwareVersionId(string $systemSoftwareVersionId): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($systemSoftwareVersionId, static::$schema['properties']['systemSoftwareVersionId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->systemSoftwareVersionId = $systemSoftwareVersionId;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return GetSystemsoftwareversionRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): GetSystemsoftwareversionRequest
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $systemSoftwareId = $input->{'systemSoftwareId'};
        $systemSoftwareVersionId = $input->{'systemSoftwareVersionId'};

        $obj = new self($systemSoftwareId, $systemSoftwareVersionId);

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
        $output['systemSoftwareId'] = $this->systemSoftwareId;
        $output['systemSoftwareVersionId'] = $this->systemSoftwareVersionId;

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
        $validator = new \JsonSchema\Validator();
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
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
        $systemSoftwareId = urlencode($mapped['systemSoftwareId']);
        $systemSoftwareVersionId = urlencode($mapped['systemSoftwareVersionId']);
        return '/v2/systemsoftware/' . $systemSoftwareId . '/versions/' . $systemSoftwareVersionId;
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
