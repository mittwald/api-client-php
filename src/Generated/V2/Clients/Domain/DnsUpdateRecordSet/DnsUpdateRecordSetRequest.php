<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsUpdateRecordSet;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Dns\CombinedACustom;
use Mittwald\ApiClient\Generated\V2\Schemas\Dns\RecordCNAMEComponent;
use Mittwald\ApiClient\Generated\V2\Schemas\Dns\RecordMXCustom;
use Mittwald\ApiClient\Generated\V2\Schemas\Dns\RecordSRVComponent;
use Mittwald\ApiClient\Generated\V2\Schemas\Dns\RecordTXTComponent;
use Mittwald\ApiClient\Generated\V2\Schemas\Dns\RecordUnset;

class DnsUpdateRecordSetRequest
{
    public const method = 'put';

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
                    'txt',
                    'srv',
                    'cname',
                ],
                'type' => 'string',
            ],
            'body' => [
                'oneOf' => [
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.dns.RecordUnset',
                    ],
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.dns.CombinedACustom',
                    ],
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.dns.RecordMXCustom',
                    ],
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.dns.RecordTXTComponent',
                    ],
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.dns.RecordSRVComponent',
                    ],
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.dns.RecordCNAMEComponent',
                    ],
                ],
            ],
        ],
        'required' => [
            'dnsZoneId',
            'recordSet',
            'body',
        ],
    ];

    private string $dnsZoneId;

    private DnsUpdateRecordSetRequestRecordSet $recordSet;

    private RecordUnset|CombinedACustom|RecordMXCustom|RecordTXTComponent|RecordSRVComponent|RecordCNAMEComponent $body;

    private array $headers = [

    ];

    /**
     * @param RecordUnset|CombinedACustom|RecordMXCustom|RecordTXTComponent|RecordSRVComponent|RecordCNAMEComponent $body
     */
    public function __construct(string $dnsZoneId, DnsUpdateRecordSetRequestRecordSet $recordSet, CombinedACustom|RecordCNAMEComponent|RecordMXCustom|RecordSRVComponent|RecordTXTComponent|RecordUnset $body)
    {
        $this->dnsZoneId = $dnsZoneId;
        $this->recordSet = $recordSet;
        $this->body = $body;
    }

    public function getDnsZoneId(): string
    {
        return $this->dnsZoneId;
    }

    public function getRecordSet(): DnsUpdateRecordSetRequestRecordSet
    {
        return $this->recordSet;
    }

    /**
     * @return
     * \Mittwald\ApiClient\Generated\V2\Schemas\Dns\RecordUnset|\Mittwald\ApiClient\Generated\V2\Schemas\Dns\CombinedACustom|\Mittwald\ApiClient\Generated\V2\Schemas\Dns\RecordMXCustom|\Mittwald\ApiClient\Generated\V2\Schemas\Dns\RecordTXTComponent|\Mittwald\ApiClient\Generated\V2\Schemas\Dns\RecordSRVComponent|\Mittwald\ApiClient\Generated\V2\Schemas\Dns\RecordCNAMEComponent
     */
    public function getBody(): CombinedACustom|RecordCNAMEComponent|RecordMXCustom|RecordSRVComponent|RecordTXTComponent|RecordUnset
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

    public function withRecordSet(DnsUpdateRecordSetRequestRecordSet $recordSet): self
    {
        $clone = clone $this;
        $clone->recordSet = $recordSet;

        return $clone;
    }

    /**
     * @param RecordUnset|CombinedACustom|RecordMXCustom|RecordTXTComponent|RecordSRVComponent|RecordCNAMEComponent $body
     */
    public function withBody(CombinedACustom|RecordCNAMEComponent|RecordMXCustom|RecordSRVComponent|RecordTXTComponent|RecordUnset $body): self
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
     * @return DnsUpdateRecordSetRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): DnsUpdateRecordSetRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $dnsZoneId = $input->{'dnsZoneId'};
        $recordSet = DnsUpdateRecordSetRequestRecordSet::from($input->{'recordSet'});
        $body = match (true) {
            RecordUnset::validateInput($input->{'body'}, true) => RecordUnset::buildFromInput($input->{'body'}, validate: $validate),
            CombinedACustom::validateInput($input->{'body'}, true) => CombinedACustom::buildFromInput($input->{'body'}, validate: $validate),
            RecordMXCustom::validateInput($input->{'body'}, true) => RecordMXCustom::buildFromInput($input->{'body'}, validate: $validate),
            RecordTXTComponent::validateInput($input->{'body'}, true) => RecordTXTComponent::buildFromInput($input->{'body'}, validate: $validate),
            RecordSRVComponent::validateInput($input->{'body'}, true) => RecordSRVComponent::buildFromInput($input->{'body'}, validate: $validate),
            RecordCNAMEComponent::validateInput($input->{'body'}, true) => RecordCNAMEComponent::buildFromInput($input->{'body'}, validate: $validate),
        };

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
        $output['body'] = match (true) {
            ($this->body) instanceof RecordUnset, ($this->body) instanceof CombinedACustom, ($this->body) instanceof RecordMXCustom, ($this->body) instanceof RecordTXTComponent, ($this->body) instanceof RecordSRVComponent, ($this->body) instanceof RecordCNAMEComponent => $this->body->toJson(),
        };

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
        $this->body = match (true) {
            ($this->body) instanceof RecordUnset, ($this->body) instanceof CombinedACustom, ($this->body) instanceof RecordMXCustom, ($this->body) instanceof RecordTXTComponent, ($this->body) instanceof RecordSRVComponent, ($this->body) instanceof RecordCNAMEComponent => $this->body,
        };
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
        return '/v2/dns-zones/' . $dnsZoneId . '/record-sets/' . $recordSet;
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
