<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Contract\CancelContractTariffChange;

use InvalidArgumentException;
use JsonSchema\Validator;

class CancelContractTariffChangeRequest
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
            'contractId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'contractItemId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'body' => [
                'type' => 'object',
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
     * @var CancelContractTariffChangeRequestBody
     */
    private CancelContractTariffChangeRequestBody $body;

    private array $headers = [

    ];

    /**
     * @param string $contractId
     * @param string $contractItemId
     * @param CancelContractTariffChangeRequestBody $body
     */
    public function __construct(string $contractId, string $contractItemId, CancelContractTariffChangeRequestBody $body)
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
     * @return CancelContractTariffChangeRequestBody
     */
    public function getBody(): CancelContractTariffChangeRequestBody
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
     * @param CancelContractTariffChangeRequestBody $body
     * @return self
     */
    public function withBody(CancelContractTariffChangeRequestBody $body): self
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
     * @return CancelContractTariffChangeRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CancelContractTariffChangeRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $contractId = $input->{'contractId'};
        $contractItemId = $input->{'contractItemId'};
        $body = CancelContractTariffChangeRequestBody::buildFromInput($input->{'body'}, validate: $validate);

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
        return '/v2/contracts/' . $contractId . '/items/' . $contractItemId . '/tariff-change';
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
