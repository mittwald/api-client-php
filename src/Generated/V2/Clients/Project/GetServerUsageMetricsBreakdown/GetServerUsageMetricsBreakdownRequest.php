<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Project\GetServerUsageMetricsBreakdown;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;

class GetServerUsageMetricsBreakdownRequest
{
    public const method = 'get';

    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'type' => 'object',
        'properties' => [
            'serverId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'metric' => [
                'enum' => [
                    'cpu',
                    'memory',
                ],
                'type' => 'string',
            ],
            'from' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'to' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
        ],
        'required' => [
            'serverId',
            'metric',
        ],
    ];

    private string $serverId;

    private GetServerUsageMetricsBreakdownRequestMetric $metric;

    private ?DateTime $from = null;

    private ?DateTime $to = null;

    private array $headers = [

    ];

    public function __construct(string $serverId, GetServerUsageMetricsBreakdownRequestMetric $metric)
    {
        $this->serverId = $serverId;
        $this->metric = $metric;
    }

    public function getServerId(): string
    {
        return $this->serverId;
    }

    public function getMetric(): GetServerUsageMetricsBreakdownRequestMetric
    {
        return $this->metric;
    }

    public function getFrom(): ?DateTime
    {
        return $this->from ?? null;
    }

    public function getTo(): ?DateTime
    {
        return $this->to ?? null;
    }

    public function withServerId(string $serverId): self
    {
        $validator = new Validator();
        $validator->validate($serverId, self::$internalValidationSchema['properties']['serverId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->serverId = $serverId;

        return $clone;
    }

    public function withMetric(GetServerUsageMetricsBreakdownRequestMetric $metric): self
    {
        $clone = clone $this;
        $clone->metric = $metric;

        return $clone;
    }

    public function withFrom(DateTime $from): self
    {
        $clone = clone $this;
        $clone->from = $from;

        return $clone;
    }

    public function withoutFrom(): self
    {
        $clone = clone $this;
        unset($clone->from);

        return $clone;
    }

    public function withTo(DateTime $to): self
    {
        $clone = clone $this;
        $clone->to = $to;

        return $clone;
    }

    public function withoutTo(): self
    {
        $clone = clone $this;
        unset($clone->to);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return GetServerUsageMetricsBreakdownRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): GetServerUsageMetricsBreakdownRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $serverId = $input->{'serverId'};
        $metric = GetServerUsageMetricsBreakdownRequestMetric::from($input->{'metric'});
        $from = null;
        if (isset($input->{'from'})) {
            $from = new DateTime($input->{'from'});
        }
        $to = null;
        if (isset($input->{'to'})) {
            $to = new DateTime($input->{'to'});
        }

        $obj = new self($serverId, $metric);
        $obj->from = $from;
        $obj->to = $to;
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
        $output['serverId'] = $this->serverId;
        $output['metric'] = ($this->metric)->value;
        if (isset($this->from)) {
            $output['from'] = ($this->from)->format(DateTime::ATOM);
        }
        if (isset($this->to)) {
            $output['to'] = ($this->to)->format(DateTime::ATOM);
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
        $validator = new \Mittwald\ApiClient\Validator\Validator();
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        $validator->validate($input, self::$internalValidationSchema);

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
        if (isset($this->from)) {
            $this->from = clone $this->from;
        }
        if (isset($this->to)) {
            $this->to = clone $this->to;
        }
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
        $serverId = urlencode($mapped['serverId']);
        return '/v2/servers/' . $serverId . '/usage-metrics/breakdown';
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
        if (isset($mapped['metric'])) {
            $query['metric'] = $mapped['metric'];
        }
        if (isset($mapped['from'])) {
            $query['from'] = $mapped['from'];
        }
        if (isset($mapped['to'])) {
            $query['to'] = $mapped['to'];
        }
        return [
            'query' => $query,
            'headers' => $this->headers,
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
