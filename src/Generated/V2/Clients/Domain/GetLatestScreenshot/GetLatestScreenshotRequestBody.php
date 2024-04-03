<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain\GetLatestScreenshot;

use InvalidArgumentException;
use JsonSchema\Validator;

class GetLatestScreenshotRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
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

    private string $domainName;

    private string $path;

    public function __construct(string $domainName, string $path)
    {
        $this->domainName = $domainName;
        $this->path = $path;
    }

    public function getDomainName(): string
    {
        return $this->domainName;
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function withDomainName(string $domainName): self
    {
        $validator = new Validator();
        $validator->validate($domainName, static::$schema['properties']['domainName']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->domainName = $domainName;

        return $clone;
    }

    public function withPath(string $path): self
    {
        $validator = new Validator();
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
     * @return GetLatestScreenshotRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): GetLatestScreenshotRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
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
        $validator = new \Mittwald\ApiClient\Validator\Validator();
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
}
