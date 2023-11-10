<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\PageInsights\PageinsightsGetPerformanceData;

use InvalidArgumentException;
use JsonSchema\Validator;

class PageinsightsGetPerformanceDataRequest
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
            'domain' => [
                'type' => 'string',
            ],
            'path' => [
                'type' => 'string',
            ],
            'date' => [
                'format' => 'date',
                'type' => 'string',
            ],
        ],
        'required' => [
            'domain',
            'path',
        ],
    ];

    /**
     * @var string
     */
    private string $domain;

    /**
     * @var string
     */
    private string $path;

    /**
     * @var string|null
     */
    private ?string $date = null;

    private array $headers = [

    ];

    /**
     * @param string $domain
     * @param string $path
     */
    public function __construct(string $domain, string $path)
    {
        $this->domain = $domain;
        $this->path = $path;
    }

    /**
     * @return string
     */
    public function getDomain(): string
    {
        return $this->domain;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->date ?? null;
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
     * @param string $date
     * @return self
     */
    public function withDate(string $date): self
    {
        $validator = new Validator();
        $validator->validate($date, static::$schema['properties']['date']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->date = $date;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutDate(): self
    {
        $clone = clone $this;
        unset($clone->date);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return PageinsightsGetPerformanceDataRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): PageinsightsGetPerformanceDataRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $domain = $input->{'domain'};
        $path = $input->{'path'};
        $date = null;
        if (isset($input->{'date'})) {
            $date = $input->{'date'};
        }

        $obj = new self($domain, $path);
        $obj->date = $date;
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
        $output['path'] = $this->path;
        if (isset($this->date)) {
            $output['date'] = $this->date;
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
    }

    public function getUrl(): string
    {
        $mapped = $this->toJson();
        return '/v2/pageinsights';
    }

    public function getQuery(): array
    {
        $mapped = $this->toJson();
        $query = [];
        if (isset($mapped['domain'])) {
            $query['domain'] = $mapped['domain'];
        }
        if (isset($mapped['path'])) {
            $query['path'] = $mapped['path'];
        }
        if (isset($mapped['date'])) {
            $query['date'] = $mapped['date'];
        }
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
