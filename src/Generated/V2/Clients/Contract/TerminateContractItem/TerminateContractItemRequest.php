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
     *
     * @var array
     */
    private static array $schema = [
        'type' => 'object',
        'properties' => [
            'contractId' => [
                'format' => 'uuid',
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

    /**
     * @var string
     */
    private string $contractId;

    /**
     * @var string
     */
    private string $contractItemId;

    /**
     * @var TerminateContractItemRequestBody
     */
    private TerminateContractItemRequestBody $body;

    private array $headers = [

    ];

    /**
     * @param string $contractId
     * @param string $contractItemId
     * @param TerminateContractItemRequestBody $body
     */
    public function __construct(string $contractId, string $contractItemId, TerminateContractItemRequestBody $body)
    {
        $this->contractId = $contractId;
        $this->contractItemId = $contractItemId;
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getContractId(): string
    {
        return $this->contractId;
    }

    /**
     * @return string
     */
    public function getContractItemId(): string
    {
        return $this->contractItemId;
    }

    /**
     * @return TerminateContractItemRequestBody
     */
    public function getBody(): TerminateContractItemRequestBody
    {
        return $this->body;
    }

    /**
     * @param string $contractId
     * @return self
     */
    public function withContractId(string $contractId): self
    {
        $validator = new Validator();
        $validator->validate($contractId, static::$schema['properties']['contractId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->contractId = $contractId;

        return $clone;
    }

    /**
     * @param string $contractItemId
     * @return self
     */
    public function withContractItemId(string $contractItemId): self
    {
        $validator = new Validator();
        $validator->validate($contractItemId, static::$schema['properties']['contractItemId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->contractItemId = $contractItemId;

        return $clone;
    }

    /**
     * @param TerminateContractItemRequestBody $body
     * @return self
     */
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
        $contractId = urlencode($mapped['contractId']);
        $contractItemId = urlencode($mapped['contractItemId']);
        return '/v2/contracts/' . $contractId . '/items/' . $contractItemId . '/termination';
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
