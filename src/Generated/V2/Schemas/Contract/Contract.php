<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Contract;

use InvalidArgumentException;
use JsonSchema\Validator;

class Contract
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'additionalItems' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.contract.ContractItem',
                ],
                'type' => 'array',
            ],
            'baseItem' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.contract.ContractItem',
            ],
            'contractId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'contractNumber' => [
                'example' => 'V1234567',
                'type' => 'string',
            ],
            'customerId' => [
                'example' => '3a201faa-5160-47e0-a758-325ba794b543',
                'type' => 'string',
            ],
            'isInvoicingDeactivated' => [
                'type' => 'boolean',
            ],
            'isInvoicingPaused' => [
                'type' => 'boolean',
            ],
            'owner' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.contract.Contact',
            ],
            'termination' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.contract.Termination',
            ],
        ],
        'required' => [
            'contractId',
            'contractNumber',
            'customerId',
            'owner',
            'baseItem',
        ],
        'type' => 'object',
    ];

    /**
     * @var ContractItem[]|null
     */
    private ?array $additionalItems = null;

    /**
     * @var ContractItem
     */
    private ContractItem $baseItem;

    /**
     * @var string
     */
    private string $contractId;

    /**
     * @var string
     */
    private string $contractNumber;

    /**
     * @var string
     */
    private string $customerId;

    /**
     * @var bool|null
     */
    private ?bool $isInvoicingDeactivated = null;

    /**
     * @var bool|null
     */
    private ?bool $isInvoicingPaused = null;

    /**
     * @var Contact
     */
    private Contact $owner;

    /**
     * @var Termination|null
     */
    private ?Termination $termination = null;

    /**
     * @param ContractItem $baseItem
     * @param string $contractId
     * @param string $contractNumber
     * @param string $customerId
     * @param Contact $owner
     */
    public function __construct(ContractItem $baseItem, string $contractId, string $contractNumber, string $customerId, Contact $owner)
    {
        $this->baseItem = $baseItem;
        $this->contractId = $contractId;
        $this->contractNumber = $contractNumber;
        $this->customerId = $customerId;
        $this->owner = $owner;
    }

    /**
     * @return ContractItem[]|null
     */
    public function getAdditionalItems(): ?array
    {
        return $this->additionalItems ?? null;
    }

    /**
     * @return ContractItem
     */
    public function getBaseItem(): ContractItem
    {
        return $this->baseItem;
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
    public function getContractNumber(): string
    {
        return $this->contractNumber;
    }

    /**
     * @return string
     */
    public function getCustomerId(): string
    {
        return $this->customerId;
    }

    /**
     * @return bool|null
     */
    public function getIsInvoicingDeactivated(): ?bool
    {
        return $this->isInvoicingDeactivated ?? null;
    }

    /**
     * @return bool|null
     */
    public function getIsInvoicingPaused(): ?bool
    {
        return $this->isInvoicingPaused ?? null;
    }

    /**
     * @return Contact
     */
    public function getOwner(): Contact
    {
        return $this->owner;
    }

    /**
     * @return Termination|null
     */
    public function getTermination(): ?Termination
    {
        return $this->termination ?? null;
    }

    /**
     * @param ContractItem[] $additionalItems
     * @return self
     */
    public function withAdditionalItems(array $additionalItems): self
    {
        $clone = clone $this;
        $clone->additionalItems = $additionalItems;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutAdditionalItems(): self
    {
        $clone = clone $this;
        unset($clone->additionalItems);

        return $clone;
    }

    /**
     * @param ContractItem $baseItem
     * @return self
     */
    public function withBaseItem(ContractItem $baseItem): self
    {
        $clone = clone $this;
        $clone->baseItem = $baseItem;

        return $clone;
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
     * @param string $contractNumber
     * @return self
     */
    public function withContractNumber(string $contractNumber): self
    {
        $validator = new Validator();
        $validator->validate($contractNumber, static::$schema['properties']['contractNumber']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->contractNumber = $contractNumber;

        return $clone;
    }

    /**
     * @param string $customerId
     * @return self
     */
    public function withCustomerId(string $customerId): self
    {
        $validator = new Validator();
        $validator->validate($customerId, static::$schema['properties']['customerId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->customerId = $customerId;

        return $clone;
    }

    /**
     * @param bool $isInvoicingDeactivated
     * @return self
     */
    public function withIsInvoicingDeactivated(bool $isInvoicingDeactivated): self
    {
        $validator = new Validator();
        $validator->validate($isInvoicingDeactivated, static::$schema['properties']['isInvoicingDeactivated']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->isInvoicingDeactivated = $isInvoicingDeactivated;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutIsInvoicingDeactivated(): self
    {
        $clone = clone $this;
        unset($clone->isInvoicingDeactivated);

        return $clone;
    }

    /**
     * @param bool $isInvoicingPaused
     * @return self
     */
    public function withIsInvoicingPaused(bool $isInvoicingPaused): self
    {
        $validator = new Validator();
        $validator->validate($isInvoicingPaused, static::$schema['properties']['isInvoicingPaused']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->isInvoicingPaused = $isInvoicingPaused;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutIsInvoicingPaused(): self
    {
        $clone = clone $this;
        unset($clone->isInvoicingPaused);

        return $clone;
    }

    /**
     * @param Contact $owner
     * @return self
     */
    public function withOwner(Contact $owner): self
    {
        $clone = clone $this;
        $clone->owner = $owner;

        return $clone;
    }

    /**
     * @param Termination $termination
     * @return self
     */
    public function withTermination(Termination $termination): self
    {
        $clone = clone $this;
        $clone->termination = $termination;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutTermination(): self
    {
        $clone = clone $this;
        unset($clone->termination);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return Contract Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): Contract
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $additionalItems = null;
        if (isset($input->{'additionalItems'})) {
            $additionalItems = array_map(fn (array $i): ContractItem => ContractItem::buildFromInput($i, validate: $validate), $input->{'additionalItems'});
        }
        $baseItem = ContractItem::buildFromInput($input->{'baseItem'}, validate: $validate);
        $contractId = $input->{'contractId'};
        $contractNumber = $input->{'contractNumber'};
        $customerId = $input->{'customerId'};
        $isInvoicingDeactivated = null;
        if (isset($input->{'isInvoicingDeactivated'})) {
            $isInvoicingDeactivated = (bool)($input->{'isInvoicingDeactivated'});
        }
        $isInvoicingPaused = null;
        if (isset($input->{'isInvoicingPaused'})) {
            $isInvoicingPaused = (bool)($input->{'isInvoicingPaused'});
        }
        $owner = Contact::buildFromInput($input->{'owner'}, validate: $validate);
        $termination = null;
        if (isset($input->{'termination'})) {
            $termination = Termination::buildFromInput($input->{'termination'}, validate: $validate);
        }

        $obj = new self($baseItem, $contractId, $contractNumber, $customerId, $owner);
        $obj->additionalItems = $additionalItems;
        $obj->isInvoicingDeactivated = $isInvoicingDeactivated;
        $obj->isInvoicingPaused = $isInvoicingPaused;
        $obj->termination = $termination;
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
        if (isset($this->additionalItems)) {
            $output['additionalItems'] = array_map(fn (ContractItem $i): array => $i->toJson(), $this->additionalItems);
        }
        $output['baseItem'] = $this->baseItem->toJson();
        $output['contractId'] = $this->contractId;
        $output['contractNumber'] = $this->contractNumber;
        $output['customerId'] = $this->customerId;
        if (isset($this->isInvoicingDeactivated)) {
            $output['isInvoicingDeactivated'] = $this->isInvoicingDeactivated;
        }
        if (isset($this->isInvoicingPaused)) {
            $output['isInvoicingPaused'] = $this->isInvoicingPaused;
        }
        $output['owner'] = $this->owner->toJson();
        if (isset($this->termination)) {
            $output['termination'] = $this->termination->toJson();
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
