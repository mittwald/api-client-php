<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Contract\TerminateContractItem;

use InvalidArgumentException;
use JsonSchema\Validator;

class TerminateContractItemRequest
{
    public const method = 'post';

    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'type' => 'object',
        'properties' => [
            'contractId' => [
                'type' => 'string',
            ],
            'contractItemId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'body' => [
                'properties' => [
                    'reason' => [
                        'description' => 'A reason for the Termination can be given as plain text.',
                        'example' => 'Server wird nicht mehr benötigt',
                        'type' => 'string',
                    ],
                    'terminationTargetDate' => [
                        'description' => 'The termination date has to be a valid date according to activation and contract period of the ContractItem. If none given, the next possible termination date will be used.',
                        'format' => 'date-time',
                        'type' => 'string',
                    ],
                ],
            ],
        ],
        'required' => [
            'contractId',
            'contractItemId',
            'body',
        ],
    ];

    private string $contractId;

    private string $contractItemId;

    private TerminateContractItemRequestBody $body;

    private array $headers = [

    ];

    public function __construct(string $contractId, string $contractItemId, TerminateContractItemRequestBody $body)
    {
        $this->contractId = $contractId;
        $this->contractItemId = $contractItemId;
        $this->body = $body;
    }

    public function getContractId(): string
    {
        return $this->contractId;
    }

    public function getContractItemId(): string
    {
        return $this->contractItemId;
    }

    public function getBody(): TerminateContractItemRequestBody
    {
        return $this->body;
    }

    public function withContractId(string $contractId): self
    {
        $validator = new Validator();
        $validator->validate($contractId, self::$internalValidationSchema['properties']['contractId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->contractId = $contractId;

        return $clone;
    }

    public function withContractItemId(string $contractItemId): self
    {
        $validator = new Validator();
        $validator->validate($contractItemId, self::$internalValidationSchema['properties']['contractItemId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->contractItemId = $contractItemId;

        return $clone;
    }

    public function withBody(TerminateContractItemRequestBody $body): self
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
     * @return TerminateContractItemRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): TerminateContractItemRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $contractId = $input->{'contractId'};
        $contractItemId = $input->{'contractItemId'};
        $body = TerminateContractItemRequestBody::buildFromInput($input->{'body'}, validate: $validate);

        $obj = new self($contractId, $contractItemId, $body);

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
        $output['contractId'] = $this->contractId;
        $output['contractItemId'] = $this->contractItemId;
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
        $contractId = urlencode($mapped['contractId']);
        $contractItemId = urlencode($mapped['contractItemId']);
        return '/v2/contracts/' . $contractId . '/items/' . $contractItemId . '/termination';
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
