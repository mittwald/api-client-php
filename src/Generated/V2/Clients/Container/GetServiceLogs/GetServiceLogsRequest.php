<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Container\GetServiceLogs;

use InvalidArgumentException;
use JsonSchema\Validator;

class GetServiceLogsRequest
{
    public const method = 'get';

    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'type' => 'object',
        'properties' => [
            'stackId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'serviceId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'tail' => [
                'format' => 'int64',
                'type' => 'integer',
            ],
        ],
        'required' => [
            'stackId',
            'serviceId',
        ],
    ];

    private string $stackId;

    private string $serviceId;

    private ?int $tail = null;

    private array $headers = [

    ];

    public function __construct(string $stackId, string $serviceId)
    {
        $this->stackId = $stackId;
        $this->serviceId = $serviceId;
    }

    public function getStackId(): string
    {
        return $this->stackId;
    }

    public function getServiceId(): string
    {
        return $this->serviceId;
    }

    public function getTail(): ?int
    {
        return $this->tail ?? null;
    }

    public function withStackId(string $stackId): self
    {
        $validator = new Validator();
        $validator->validate($stackId, self::$internalValidationSchema['properties']['stackId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->stackId = $stackId;

        return $clone;
    }

    public function withServiceId(string $serviceId): self
    {
        $validator = new Validator();
        $validator->validate($serviceId, self::$internalValidationSchema['properties']['serviceId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->serviceId = $serviceId;

        return $clone;
    }

    public function withTail(int $tail): self
    {
        $validator = new Validator();
        $validator->validate($tail, self::$internalValidationSchema['properties']['tail']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->tail = $tail;

        return $clone;
    }

    public function withoutTail(): self
    {
        $clone = clone $this;
        unset($clone->tail);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return GetServiceLogsRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): GetServiceLogsRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $stackId = $input->{'stackId'};
        $serviceId = $input->{'serviceId'};
        $tail = null;
        if (isset($input->{'tail'})) {
            $tail = (int)($input->{'tail'});
        }

        $obj = new self($stackId, $serviceId);
        $obj->tail = $tail;
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
        $output['stackId'] = $this->stackId;
        $output['serviceId'] = $this->serviceId;
        if (isset($this->tail)) {
            $output['tail'] = $this->tail;
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
        $stackId = urlencode($mapped['stackId']);
        $serviceId = urlencode($mapped['serviceId']);
        return '/v2/stacks/' . $stackId . '/services/' . $serviceId . '/logs';
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
        if (isset($mapped['tail'])) {
            $query['tail'] = $mapped['tail'];
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
