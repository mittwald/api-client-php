<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Screenshot;

use InvalidArgumentException;
use JsonSchema\Validator;

class Target
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'domain' => [
                'example' => 'example.com',
                'type' => 'string',
            ],
            'path' => [
                'type' => 'string',
            ],
            'scheme' => [
                'enum' => [
                    'http',
                    'https',
                ],
                'example' => 'https',
                'type' => 'string',
            ],
        ],
        'required' => [
            'scheme',
            'domain',
        ],
        'type' => 'object',
    ];

    /**
     * @var string
     */
    private string $domain;

    /**
     * @var string|null
     */
    private ?string $path = null;

    /**
     * @var TargetScheme
     */
    private TargetScheme $scheme;

    /**
     * @param string $domain
     * @param TargetScheme $scheme
     */
    public function __construct(string $domain, TargetScheme $scheme)
    {
        $this->domain = $domain;
        $this->scheme = $scheme;
    }

    /**
     * @return string
     */
    public function getDomain(): string
    {
        return $this->domain;
    }

    /**
     * @return string|null
     */
    public function getPath(): ?string
    {
        return $this->path ?? null;
    }

    /**
     * @return TargetScheme
     */
    public function getScheme(): TargetScheme
    {
        return $this->scheme;
    }

    /**
     * @param string $domain
     * @return self
     */
    public function withDomain(string $domain): self
    {
        $validator = new Validator();
        $validator->validate($domain, static::$schema['properties']['domain']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->domain = $domain;

        return $clone;
    }

    /**
     * @param string $path
     * @return self
     */
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
     * @return self
     */
    public function withoutPath(): self
    {
        $clone = clone $this;
        unset($clone->path);

        return $clone;
    }

    /**
     * @param TargetScheme $scheme
     * @return self
     */
    public function withScheme(TargetScheme $scheme): self
    {
        $clone = clone $this;
        $clone->scheme = $scheme;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return Target Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): Target
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $domain = $input->{'domain'};
        $path = null;
        if (isset($input->{'path'})) {
            $path = $input->{'path'};
        }
        $scheme = TargetScheme::from($input->{'scheme'});

        $obj = new self($domain, $scheme);
        $obj->path = $path;
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
        $output['domain'] = $this->domain;
        if (isset($this->path)) {
            $output['path'] = $this->path;
        }
        $output['scheme'] = ($this->scheme)->value;

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
}
