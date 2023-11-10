<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\PageInsights\PageinsightsListPerformanceDataForProject;

use InvalidArgumentException;
use JsonSchema\Validator;

class PageinsightsListPerformanceDataForProjectRequest
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
            'id' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'domain' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'id',
        ],
    ];

    /**
     * @var string
     */
    private string $id;

    /**
     * @var string|null
     */
    private ?string $domain = null;

    private array $headers = [

    ];

    /**
     * @param string $id
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getDomain(): ?string
    {
        return $this->domain ?? null;
    }

    /**
     * @param string $id
     * @return self
     */
    public function withId(string $id): self
    {
        $validator = new Validator();
        $validator->validate($id, static::$schema['properties']['id']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->id = $id;

        return $clone;
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
     * @return self
     */
    public function withoutDomain(): self
    {
        $clone = clone $this;
        unset($clone->domain);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return PageinsightsListPerformanceDataForProjectRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): PageinsightsListPerformanceDataForProjectRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $id = $input->{'id'};
        $domain = null;
        if (isset($input->{'domain'})) {
            $domain = $input->{'domain'};
        }

        $obj = new self($id);
        $obj->domain = $domain;
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
        $output['id'] = $this->id;
        if (isset($this->domain)) {
            $output['domain'] = $this->domain;
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
        $id = urlencode($mapped['id']);
        return '/v2/projects/' . $id . '/pageinsights';
    }

    public function getQuery(): array
    {
        $mapped = $this->toJson();
        $query = [];
        if (isset($mapped['domain'])) {
            $query['domain'] = $mapped['domain'];
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
