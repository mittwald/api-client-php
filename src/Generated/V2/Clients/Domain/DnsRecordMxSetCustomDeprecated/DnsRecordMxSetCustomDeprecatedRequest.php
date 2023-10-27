<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsRecordMxSetCustomDeprecated;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Dns\RecordMXCustom;
use Mittwald\ApiClient\Generated\V2\Schemas\Dns\RecordUnset;

class DnsRecordMxSetCustomDeprecatedRequest
{
    public const method = 'put';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'type' => 'object',
        'properties' => [
            'zoneId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'body' => [
                'oneOf' => [
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.dns.RecordUnset',
                    ],
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.dns.RecordMXCustom',
                    ],
                ],
            ],
        ],
        'required' => [
            'zoneId',
            'body',
        ],
    ];

    /**
     * @var string
     */
    private string $zoneId;

    /**
     * @var RecordUnset|RecordMXCustom
     */
    private RecordUnset|RecordMXCustom $body;

    private array $headers = [

    ];

    /**
     * @param string $zoneId
     * @param RecordUnset|RecordMXCustom $body
     */
    public function __construct(string $zoneId, RecordMXCustom|RecordUnset $body)
    {
        $this->zoneId = $zoneId;
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getZoneId(): string
    {
        return $this->zoneId;
    }

    /**
     * @return
     * \Mittwald\ApiClient\Generated\V2\Schemas\Dns\RecordUnset|\Mittwald\ApiClient\Generated\V2\Schemas\Dns\RecordMXCustom
     */
    public function getBody(): RecordMXCustom|RecordUnset
    {
        return $this->body;
    }

    /**
     * @param string $zoneId
     * @return self
     */
    public function withZoneId(string $zoneId): self
    {
        $validator = new Validator();
        $validator->validate($zoneId, static::$schema['properties']['zoneId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->zoneId = $zoneId;

        return $clone;
    }

    /**
     * @param RecordUnset|RecordMXCustom $body
     * @return self
     */
    public function withBody(RecordMXCustom|RecordUnset $body): self
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
     * @return DnsRecordMxSetCustomDeprecatedRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): DnsRecordMxSetCustomDeprecatedRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $zoneId = $input->{'zoneId'};
        $body = match (true) {
            RecordUnset::validateInput($input->{'body'}, true) => RecordUnset::buildFromInput($input->{'body'}, validate: $validate),
            RecordMXCustom::validateInput($input->{'body'}, true) => RecordMXCustom::buildFromInput($input->{'body'}, validate: $validate),
        };

        $obj = new self($zoneId, $body);

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
        $output['zoneId'] = $this->zoneId;
        $output['body'] = match (true) {
            ($this->body) instanceof RecordUnset, ($this->body) instanceof RecordMXCustom => $this->body->toJson(),
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
        $this->body = match (true) {
            ($this->body) instanceof RecordUnset, ($this->body) instanceof RecordMXCustom => $this->body,
        };
    }

    public function getUrl(): string
    {
        $mapped = $this->toJson();
        $zoneId = urlencode($mapped['zoneId']);
        return '/v2/dns/zones/' . $zoneId . '/recordset/mx/custom';
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