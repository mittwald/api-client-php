<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsSubZoneCreate;

use InvalidArgumentException;

class DnsSubZoneCreateRequestBody
{
    public const method = 'post';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'name' => [
                'format' => 'hostname',
                'type' => 'string',
            ],
            'parentZoneId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
        ],
        'required' => [
            'name',
            'parentZoneId',
        ],
        'type' => 'object',
    ];

    /**
     * @var string
     */
    private string $name;

    /**
     * @var string
     */
    private string $parentZoneId;

    private array $headers = [

    ];

    /**
     * @param string $name
     * @param string $parentZoneId
     */
    public function __construct(string $name, string $parentZoneId)
    {
        $this->name = $name;
        $this->parentZoneId = $parentZoneId;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getParentZoneId(): string
    {
        return $this->parentZoneId;
    }

    /**
     * @param string $name
     * @return self
     */
    public function withName(string $name): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($name, static::$schema['properties']['name']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->name = $name;

        return $clone;
    }

    /**
     * @param string $parentZoneId
     * @return self
     */
    public function withParentZoneId(string $parentZoneId): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($parentZoneId, static::$schema['properties']['parentZoneId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->parentZoneId = $parentZoneId;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return DnsSubZoneCreateRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): DnsSubZoneCreateRequestBody
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $name = $input->{'name'};
        $parentZoneId = $input->{'parentZoneId'};

        $obj = new self($name, $parentZoneId);

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
        $output['name'] = $this->name;
        $output['parentZoneId'] = $this->parentZoneId;

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
        return '/v2/dns/zones';
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
