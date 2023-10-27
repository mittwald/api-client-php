<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsDeleteDnsZone;

use InvalidArgumentException;
use JsonSchema\Validator;

class DnsDeleteDnsZoneRequest
{
    public const method = 'delete';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'type' => 'object',
        'properties' => [
            'dnsZoneId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
        ],
        'required' => [
            'dnsZoneId',
        ],
    ];

    /**
     * @var string
     */
    private string $dnsZoneId;

    private array $headers = [

    ];

    /**
     * @param string $dnsZoneId
     */
    public function __construct(string $dnsZoneId)
    {
        $this->dnsZoneId = $dnsZoneId;
    }

    /**
     * @return string
     */
    public function getDnsZoneId(): string
    {
        return $this->dnsZoneId;
    }

    /**
     * @param string $dnsZoneId
     * @return self
     */
    public function withDnsZoneId(string $dnsZoneId): self
    {
        $validator = new Validator();
        $validator->validate($dnsZoneId, static::$schema['properties']['dnsZoneId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->dnsZoneId = $dnsZoneId;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return DnsDeleteDnsZoneRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): DnsDeleteDnsZoneRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $dnsZoneId = $input->{'dnsZoneId'};

        $obj = new self($dnsZoneId);

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
        $output['dnsZoneId'] = $this->dnsZoneId;

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
        $dnsZoneId = urlencode($mapped['dnsZoneId']);
        return '/v2/dns-zones/' . $dnsZoneId;
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