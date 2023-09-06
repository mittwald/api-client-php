<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Invoice;

use InvalidArgumentException;
use JsonSchema\Validator;

class InvoiceGroupsItem
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
            'description' => [
                'example' => 'Space-Server: "Mein Space-Server"',
                'type' => 'string',
            ],
            'items' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.invoice.InvoiceItem',
                ],
                'type' => 'array',
            ],
        ],
        'required' => [
            'description',
            'items',
        ],
        'type' => 'object',
    ];

    /**
     * @var string|null
     */
    private ?string $contractId = null;

    /**
     * @var string
     */
    private string $description;

    /**
     * @var InvoiceItem[]
     */
    private array $items;

    /**
     * @param string $description
     * @param InvoiceItem[] $items
     */
    public function __construct(string $description, array $items)
    {
        $this->description = $description;
        $this->items = $items;
    }

    /**
     * @return string|null
     */
    public function getContractId(): ?string
    {
        return $this->contractId ?? null;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return InvoiceItem[]
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
     * @return self
     */
    public function withoutContractId(): self
    {
        $clone = clone $this;
        unset($clone->contractId);

        return $clone;
    }

    /**
     * @param string $description
     * @return self
     */
    public function withDescription(string $description): self
    {
        $validator = new Validator();
        $validator->validate($description, static::$schema['properties']['description']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->description = $description;

        return $clone;
    }

    /**
     * @param InvoiceItem[] $items
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
     * @return InvoiceGroupsItem Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): InvoiceGroupsItem
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $contractId = null;
        if (isset($input->{'contractId'})) {
            $contractId = $input->{'contractId'};
        }
        $description = $input->{'description'};
        $items = array_map(fn (array $i): InvoiceItem => InvoiceItem::buildFromInput($i, validate: $validate), $input->{'items'});

        $obj = new self($description, $items);
        $obj->contractId = $contractId;
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
        if (isset($this->contractId)) {
            $output['contractId'] = $this->contractId;
        }
        $output['description'] = $this->description;
        $output['items'] = array_map(fn (InvoiceItem $i): array => $i->toJson(), $this->items);

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
