<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Invoice;

use InvalidArgumentException;
use JsonSchema\Validator;

class ContractInvoiceDefinition
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'contractId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'items' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.invoice.ContractItemInvoiceDefinition',
                ],
                'type' => 'array',
            ],
        ],
        'required' => [
            'contractId',
            'items',
        ],
        'type' => 'object',
    ];

    /**
     * @var string
     */
    private string $contractId;

    /**
     * @var ContractItemInvoiceDefinition[]
     */
    private array $items;

    /**
     * @param string $contractId
     * @param ContractItemInvoiceDefinition[] $items
     */
    public function __construct(string $contractId, array $items)
    {
        $this->contractId = $contractId;
        $this->items = $items;
    }

    /**
     * @return string
     */
    public function getContractId(): string
    {
        return $this->contractId;
    }

    /**
     * @return
     * ContractItemInvoiceDefinition[]
     */
    public function getItems(): array
    {
        return $this->items;
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
     * @param ContractItemInvoiceDefinition[] $items
     * @return self
     */
    public function withItems(array $items): self
    {
        $clone = clone $this;
        $clone->items = $items;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ContractInvoiceDefinition Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ContractInvoiceDefinition
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $contractId = $input->{'contractId'};
        $items = array_map(fn (array $i): ContractItemInvoiceDefinition => ContractItemInvoiceDefinition::buildFromInput($i, validate: $validate), $input->{'items'});

        $obj = new self($contractId, $items);

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
        $output['items'] = array_map(fn (ContractItemInvoiceDefinition $i): array => $i->toJson(), $this->items);

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
}
