<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain\GetScreenshotForDomain;

use InvalidArgumentException;

class GetScreenshotForDomainRequestBody
{
    public const method = 'get';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'domainName' => [
                'example' => 'example.com',
                'type' => 'string',
            ],
            'path' => [
                'example' => '/var/www',
                'type' => 'string',
            ],
        ],
        'required' => [
            'domainName',
            'path',
        ],
        'type' => 'object',
    ];

    /**
     * @var string
     */
    private string $domainName;

    /**
     * @var string
     */
    private string $path;

    private array $headers = [

    ];

    /**
     * @param string $domainName
     * @param string $path
     */
    public function __construct(string $domainName, string $path)
    {
        $this->domainName = $domainName;
        $this->path = $path;
    }

    /**
     * @return string
     */
    public function getDomainName(): string
    {
        return $this->domainName;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @param string $domainName
     * @return self
     */
    public function withDomainName(string $domainName): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($domainName, static::$schema['properties']['domainName']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->domainName = $domainName;

        return $clone;
    }

    /**
     * @param string $path
     * @return self
     */
    public function withPath(string $path): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($path, static::$schema['properties']['path']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->path = $path;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return GetScreenshotForDomainRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): GetScreenshotForDomainRequestBody
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $domainName = $input->{'domainName'};
        $path = $input->{'path'};

        $obj = new self($domainName, $path);

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
        $output['domainName'] = $this->domainName;
        $output['path'] = $this->path;

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
        $domainId = urlencode($mapped['domainId']);
        return '/v2/domains/' . $domainId . '/screenshots/newest';
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
