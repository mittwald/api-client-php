<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Invoice;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.invoice.InvoiceItem.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class InvoiceItem
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'additionalDescription' => [
                'example' => 'Short-ID: "s-123456"',
                'type' => 'string',
            ],
            'contractItemId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'description' => [
                'example' => 'Space-Server: "Mein Space-Server"',
                'type' => 'string',
            ],
            'itemCancelledOrCorrectedBy' => [
                'items' => [
                    'properties' => [
                        'sourceInvoiceId' => [
                            'format' => 'uuid',
                            'type' => 'string',
                        ],
                        'sourceInvoiceItemId' => [
                            'format' => 'uuid',
                            'type' => 'string',
                        ],
                    ],
                    'type' => 'object',
                ],
                'type' => 'array',
            ],
            'itemId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'price' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.invoice.Price',
            ],
            'reference' => [
                'properties' => [
                    'sourceInvoiceId' => [
                        'format' => 'uuid',
                        'type' => 'string',
                    ],
                    'sourceInvoiceItemId' => [
                        'format' => 'uuid',
                        'type' => 'string',
                    ],
                ],
                'required' => [
                    'sourceInvoiceId',
                    'sourceInvoiceItemId',
                ],
                'type' => 'object',
            ],
            'serviceDate' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'servicePeriod' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.invoice.DatePeriod',
            ],
            'vatRate' => [
                'example' => 19,
                'type' => 'number',
            ],
        ],
        'required' => [
            'itemId',
            'price',
            'vatRate',
            'contractItemId',
            'description',
        ],
        'type' => 'object',
    ];

    private ?string $additionalDescription = null;

    private string $contractItemId;

    private string $description;

    /**
     * @var InvoiceItemItemCancelledOrCorrectedByItem[]|null
     */
    private ?array $itemCancelledOrCorrectedBy = null;

    private string $itemId;

    private Price $price;

    private ?InvoiceItemReference $reference = null;

    private ?DateTime $serviceDate = null;

    private ?DatePeriod $servicePeriod = null;

    private int|float $vatRate;

    /**
     * @param int|float $vatRate
     */
    public function __construct(string $contractItemId, string $description, string $itemId, Price $price, int|float $vatRate)
    {
        $this->contractItemId = $contractItemId;
        $this->description = $description;
        $this->itemId = $itemId;
        $this->price = $price;
        $this->vatRate = $vatRate;
    }

    public function getAdditionalDescription(): ?string
    {
        return $this->additionalDescription ?? null;
    }

    public function getContractItemId(): string
    {
        return $this->contractItemId;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return InvoiceItemItemCancelledOrCorrectedByItem[]|null
     */
    public function getItemCancelledOrCorrectedBy(): ?array
    {
        return $this->itemCancelledOrCorrectedBy ?? null;
    }

    public function getItemId(): string
    {
        return $this->itemId;
    }

    public function getPrice(): Price
    {
        return $this->price;
    }

    public function getReference(): ?InvoiceItemReference
    {
        return $this->reference ?? null;
    }

    public function getServiceDate(): ?DateTime
    {
        return $this->serviceDate ?? null;
    }

    public function getServicePeriod(): ?DatePeriod
    {
        return $this->servicePeriod ?? null;
    }

    public function getVatRate(): int|float
    {
        return $this->vatRate;
    }

    public function withAdditionalDescription(string $additionalDescription): self
    {
        $validator = new Validator();
        $validator->validate($additionalDescription, static::$schema['properties']['additionalDescription']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->additionalDescription = $additionalDescription;

        return $clone;
    }

    public function withoutAdditionalDescription(): self
    {
        $clone = clone $this;
        unset($clone->additionalDescription);

        return $clone;
    }

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
     * @param InvoiceItemItemCancelledOrCorrectedByItem[] $itemCancelledOrCorrectedBy
     */
    public function withItemCancelledOrCorrectedBy(array $itemCancelledOrCorrectedBy): self
    {
        $clone = clone $this;
        $clone->itemCancelledOrCorrectedBy = $itemCancelledOrCorrectedBy;

        return $clone;
    }

    public function withoutItemCancelledOrCorrectedBy(): self
    {
        $clone = clone $this;
        unset($clone->itemCancelledOrCorrectedBy);

        return $clone;
    }

    public function withItemId(string $itemId): self
    {
        $validator = new Validator();
        $validator->validate($itemId, static::$schema['properties']['itemId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->itemId = $itemId;

        return $clone;
    }

    public function withPrice(Price $price): self
    {
        $clone = clone $this;
        $clone->price = $price;

        return $clone;
    }

    public function withReference(InvoiceItemReference $reference): self
    {
        $clone = clone $this;
        $clone->reference = $reference;

        return $clone;
    }

    public function withoutReference(): self
    {
        $clone = clone $this;
        unset($clone->reference);

        return $clone;
    }

    public function withServiceDate(DateTime $serviceDate): self
    {
        $clone = clone $this;
        $clone->serviceDate = $serviceDate;

        return $clone;
    }

    public function withoutServiceDate(): self
    {
        $clone = clone $this;
        unset($clone->serviceDate);

        return $clone;
    }

    public function withServicePeriod(DatePeriod $servicePeriod): self
    {
        $clone = clone $this;
        $clone->servicePeriod = $servicePeriod;

        return $clone;
    }

    public function withoutServicePeriod(): self
    {
        $clone = clone $this;
        unset($clone->servicePeriod);

        return $clone;
    }

    /**
     * @param int|float $vatRate
     */
    public function withVatRate(int|float $vatRate): self
    {
        $validator = new Validator();
        $validator->validate($vatRate, static::$schema['properties']['vatRate']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->vatRate = $vatRate;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return InvoiceItem Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): InvoiceItem
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $additionalDescription = null;
        if (isset($input->{'additionalDescription'})) {
            $additionalDescription = $input->{'additionalDescription'};
        }
        $contractItemId = $input->{'contractItemId'};
        $description = $input->{'description'};
        $itemCancelledOrCorrectedBy = null;
        if (isset($input->{'itemCancelledOrCorrectedBy'})) {
            $itemCancelledOrCorrectedBy = array_map(fn (array|object $i): InvoiceItemItemCancelledOrCorrectedByItem => InvoiceItemItemCancelledOrCorrectedByItem::buildFromInput($i, validate: $validate), $input->{'itemCancelledOrCorrectedBy'});
        }
        $itemId = $input->{'itemId'};
        $price = Price::buildFromInput($input->{'price'}, validate: $validate);
        $reference = null;
        if (isset($input->{'reference'})) {
            $reference = InvoiceItemReference::buildFromInput($input->{'reference'}, validate: $validate);
        }
        $serviceDate = null;
        if (isset($input->{'serviceDate'})) {
            $serviceDate = new DateTime($input->{'serviceDate'});
        }
        $servicePeriod = null;
        if (isset($input->{'servicePeriod'})) {
            $servicePeriod = DatePeriod::buildFromInput($input->{'servicePeriod'}, validate: $validate);
        }
        $vatRate = str_contains((string)($input->{'vatRate'}), '.') ? (float)($input->{'vatRate'}) : (int)($input->{'vatRate'});

        $obj = new self($contractItemId, $description, $itemId, $price, $vatRate);
        $obj->additionalDescription = $additionalDescription;
        $obj->itemCancelledOrCorrectedBy = $itemCancelledOrCorrectedBy;
        $obj->reference = $reference;
        $obj->serviceDate = $serviceDate;
        $obj->servicePeriod = $servicePeriod;
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
        if (isset($this->additionalDescription)) {
            $output['additionalDescription'] = $this->additionalDescription;
        }
        $output['contractItemId'] = $this->contractItemId;
        $output['description'] = $this->description;
        if (isset($this->itemCancelledOrCorrectedBy)) {
            $output['itemCancelledOrCorrectedBy'] = array_map(fn (InvoiceItemItemCancelledOrCorrectedByItem $i) => $i->toJson(), $this->itemCancelledOrCorrectedBy);
        }
        $output['itemId'] = $this->itemId;
        $output['price'] = $this->price->toJson();
        if (isset($this->reference)) {
            $output['reference'] = ($this->reference)->toJson();
        }
        if (isset($this->serviceDate)) {
            $output['serviceDate'] = ($this->serviceDate)->format(DateTime::ATOM);
        }
        if (isset($this->servicePeriod)) {
            $output['servicePeriod'] = $this->servicePeriod->toJson();
        }
        $output['vatRate'] = $this->vatRate;

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
        if (isset($this->itemCancelledOrCorrectedBy)) {
            $this->itemCancelledOrCorrectedBy = array_map(fn (InvoiceItemItemCancelledOrCorrectedByItem $i) => clone $i, $this->itemCancelledOrCorrectedBy);
        }
        if (isset($this->reference)) {
            $this->reference = clone $this->reference;
        }
        if (isset($this->serviceDate)) {
            $this->serviceDate = clone $this->serviceDate;
        }
    }
}
