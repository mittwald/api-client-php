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

    /**
     * @var string
     */
    private string $dnsZoneId;

    /**
     * @var DnsSetRecordSetManagedRequestRecordSet
     */
    private DnsSetRecordSetManagedRequestRecordSet $recordSet;

    /**
     * @var DnsSetRecordSetManagedRequestBody
     */
    private DnsSetRecordSetManagedRequestBody $body;

    private array $headers = [

    ];

    /**
     * @param string $dnsZoneId
     * @param DnsSetRecordSetManagedRequestRecordSet $recordSet
     * @param DnsSetRecordSetManagedRequestBody $body
     */
    public function __construct(string $dnsZoneId, DnsSetRecordSetManagedRequestRecordSet $recordSet, DnsSetRecordSetManagedRequestBody $body)
    {
        $this->dnsZoneId = $dnsZoneId;
        $this->recordSet = $recordSet;
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getDnsZoneId(): string
    {
        return $this->dnsZoneId;
    }

    /**
     * @return DnsSetRecordSetManagedRequestRecordSet
     */
    public function getRecordSet(): DnsSetRecordSetManagedRequestRecordSet
    {
        return $this->recordSet;
    }

    /**
     * @return DnsSetRecordSetManagedRequestBody
     */
    public function getBody(): DnsSetRecordSetManagedRequestBody
    {
        return $this->body;
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
     * @param DnsSetRecordSetManagedRequestRecordSet $recordSet
     * @return self
     */
    public function withRecordSet(DnsSetRecordSetManagedRequestRecordSet $recordSet): self
    {
        $clone = clone $this;
        $clone->recordSet = $recordSet;

        return $clone;
    }

    /**
     * @param DnsSetRecordSetManagedRequestBody $body
     * @return self
     */
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

    public function getUrl(): string
    {
        $mapped = $this->toJson();
        $dnsZoneId = urlencode($mapped['dnsZoneId']);
        $recordSet = urlencode($mapped['recordSet']);
        return '/v2/dns-zones/' . $dnsZoneId . '/record-sets/' . $recordSet . '/actions/set-managed';
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
