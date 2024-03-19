<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsSetRecordSetManaged;

use InvalidArgumentException;
use JsonSchema\Validator;

class DnsSetRecordSetManagedRequest
{
    public const method = 'post';

    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'type' => 'object',
        'properties' => [
            'dnsZoneId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'recordSet' => [
                'enum' => [
                    'a',
                    'mx',
                ],
                'type' => 'string',
            ],
            'body' => [
                'additionalProperties' => false,
                'properties' => [

                ],
                'type' => 'object',
            ],
        ],
        'required' => [
            'dnsZoneId',
            'recordSet',
            'body',
        ],
    ];

    private string $dnsZoneId;

    private DnsSetRecordSetManagedRequestRecordSet $recordSet;

    private DnsSetRecordSetManagedRequestBody $body;

    private array $headers = [

    ];

    public function __construct(string $dnsZoneId, DnsSetRecordSetManagedRequestRecordSet $recordSet, DnsSetRecordSetManagedRequestBody $body)
    {
        $this->dnsZoneId = $dnsZoneId;
        $this->recordSet = $recordSet;
        $this->body = $body;
    }

    public function getDnsZoneId(): string
    {
        return $this->dnsZoneId;
    }

    public function getRecordSet(): DnsSetRecordSetManagedRequestRecordSet
    {
        return $this->recordSet;
    }

    public function getBody(): DnsSetRecordSetManagedRequestBody
    {
        return $this->body;
    }

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

    public function withRecordSet(DnsSetRecordSetManagedRequestRecordSet $recordSet): self
    {
        $clone = clone $this;
        $clone->recordSet = $recordSet;

        return $clone;
    }

    public function withBody(DnsSetRecordSetManagedRequestBody $body): self
    {
        $clone = clone $this;
        $clone->body = $body;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return DnsSetRecordSetManagedRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): DnsSetRecordSetManagedRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $dnsZoneId = $input->{'dnsZoneId'};
        $recordSet = DnsSetRecordSetManagedRequestRecordSet::from($input->{'recordSet'});
        $body = DnsSetRecordSetManagedRequestBody::buildFromInput($input->{'body'}, validate: $validate);

        $obj = new self($dnsZoneId, $recordSet, $body);

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
        $output['recordSet'] = ($this->recordSet)->value;
        $output['body'] = ($this->body)->toJson();

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
        $this->body = clone $this->body;
    }

    /**
     * Builds the URL for this request
     *
     * This method is used internally by the client to build the URL for this request.
     * You should not need to call this method directly.
     *
     * @internal
     * @return string The URL for this request
     */
    public function buildUrl(): string
    {
        $mapped = $this->toJson();
        $dnsZoneId = urlencode($mapped['dnsZoneId']);
        $recordSet = urlencode($mapped['recordSet']);
        return '/v2/dns-zones/' . $dnsZoneId . '/record-sets/' . $recordSet . '/actions/set-managed';
    }

    /**
     * Builds the request options for this request
     *
     * This method is used internally by the client to build the Guzzle request options
     * for this request. You should not need to call this method directly.
     *
     * @internal
     * @return array The Guzzle request options for this request
     */
    public function buildRequestOptions(): array
    {
        $mapped = $this->toJson();
        $query = [];
        return [
            'query' => $query,
            'headers' => $this->headers,
            'json' => $this->getBody()->toJson(),
        ];
    }

    /**
     * Adds a header to this request
     *
     * You can use this method to add custom HTTP headers to the request.
     *
     * @param string $name The name of the header to add
     * @param string|array $value The value of the header to add
     * @return self A clone of this request with the header added
     */
    public function withHeader(string $name, string|array $value): self
    {
        $clone = clone $this;
        $clone->headers[$name] = $value;
        return $clone;
    }
}
