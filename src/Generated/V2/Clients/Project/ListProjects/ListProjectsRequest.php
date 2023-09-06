<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Project\ListProjects;

use InvalidArgumentException;

class ListProjectsRequest
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
            'customerId' => [
                'example' => '15b8a787-8d46-43b0-907e-01af35032c0a',
                'type' => 'string',
            ],
            'serverId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
        ],
        'required' => [

        ],
    ];

    /**
     * @var string|null
     */
    private ?string $customerId = null;

    /**
     * @var string|null
     */
    private ?string $serverId = null;

    private array $headers = [

    ];

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return string|null
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId ?? null;
    }

    /**
     * @return string|null
     */
    public function getServerId(): ?string
    {
        return $this->serverId ?? null;
    }

    /**
     * @param string $customerId
     * @return self
     */
    public function withCustomerId(string $customerId): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($customerId, static::$schema['properties']['customerId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->customerId = $customerId;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutCustomerId(): self
    {
        $clone = clone $this;
        unset($clone->customerId);

        return $clone;
    }

    /**
     * @param string $serverId
     * @return self
     */
    public function withServerId(string $serverId): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($serverId, static::$schema['properties']['serverId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->serverId = $serverId;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutServerId(): self
    {
        $clone = clone $this;
        unset($clone->serverId);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ListProjectsRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ListProjectsRequest
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $customerId = null;
        if (isset($input->{'customerId'})) {
            $customerId = $input->{'customerId'};
        }
        $serverId = null;
        if (isset($input->{'serverId'})) {
            $serverId = $input->{'serverId'};
        }

        $obj = new self();
        $obj->customerId = $customerId;
        $obj->serverId = $serverId;
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
        if (isset($this->customerId)) {
            $output['customerId'] = $this->customerId;
        }
        if (isset($this->serverId)) {
            $output['serverId'] = $this->serverId;
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
        return '/v2/projects';
    }

    public function getQuery(): array
    {
        $mapped = $this->toJson();
        $query = [];
        if (isset($mapped['customerId'])) {
            $query['customerId'] = $mapped['customerId'];
        }
        if (isset($mapped['serverId'])) {
            $query['serverId'] = $mapped['serverId'];
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
