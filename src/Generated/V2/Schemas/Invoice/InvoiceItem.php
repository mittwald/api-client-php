<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Invoice;

use InvalidArgumentException;

class InvoiceItem
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
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
            'id' => [
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
                '$ref' => '#/components/schemas/de.mittwald.v1.invoice.ServiceDate',
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
            'id',
            'price',
            'vatRate',
            'contractItemId',
            'description',
        ],
        'type' => 'object',
    ];

    /**
     * @var string|null
     */
    private ?string $additionalDescription = null;

    /**
     * @var string
     */
    private string $contractItemId;

    /**
     * @var string
     */
    private string $description;

    /**
     * @var string
     */
    private string $id;

    /**
     * @var Price
     */
    private Price $price;

    /**
     * @var InvoiceItemReference|null
     */
    private ?InvoiceItemReference $reference = null;

    /**
     * @var string|null
     */
    private ?string $serviceDate = null;

    /**
     * @var DatePeriod|null
     */
    private ?DatePeriod $servicePeriod = null;

    /**
     * @var int|float
     */
    private int|float $vatRate;

    /**
     * @param string $contractItemId
     * @param string $description
     * @param string $id
     * @param Price $price
     * @param int|float $vatRate
     */
    public function __construct(string $contractItemId, string $description, string $id, Price $price, int|float $vatRate)
    {
        $this->contractItemId = $contractItemId;
        $this->description = $description;
        $this->id = $id;
        $this->price = $price;
        $this->vatRate = $vatRate;
    }

    /**
     * @return string|null
     */
    public function getAdditionalDescription(): ?string
    {
        return $this->additionalDescription ?? null;
    }

    /**
     * @return string
     */
    public function getContractItemId(): string
    {
        return $this->contractItemId;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return Price
     */
    public function getPrice(): Price
    {
        return $this->price;
    }

    /**
     * @return InvoiceItemReference|null
     */
    public function getReference(): ?InvoiceItemReference
    {
        return $this->reference ?? null;
    }

    /**
     * @return string|null
     */
    public function getServiceDate(): ?string
    {
        return $this->serviceDate ?? null;
    }

    /**
     * @return DatePeriod|null
     */
    public function getServicePeriod(): ?DatePeriod
    {
        return $this->servicePeriod ?? null;
    }

    /**
     * @return int|float
     */
    public function getVatRate(): int|float
    {
        return $this->vatRate;
    }

    /**
     * @param string $additionalDescription
     * @return self
     */
    public function withAdditionalDescription(string $additionalDescription): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($additionalDescription, static::$schema['properties']['additionalDescription']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->additionalDescription = $additionalDescription;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutAdditionalDescription(): self
    {
        $clone = clone $this;
        unset($clone->additionalDescription);

        return $clone;
    }

    /**
     * @param string $contractItemId
     * @return self
     */
    public function withContractItemId(string $contractItemId): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($contractItemId, static::$schema['properties']['contractItemId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->contractItemId = $contractItemId;

        return $clone;
    }

    /**
     * @param string $description
     * @return self
     */
    public function withDescription(string $description): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($description, static::$schema['properties']['description']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->description = $description;

        return $clone;
    }

    /**
     * @param string $id
     * @return self
     */
    public function withId(string $id): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($id, static::$schema['properties']['id']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->id = $id;

        return $clone;
    }

    /**
     * @param Price $price
     * @return self
     */
    public function withPrice(Price $price): self
    {
        $clone = clone $this;
        $clone->price = $price;

        return $clone;
    }

    /**
     * @param InvoiceItemReference $reference
     * @return self
     */
    public function withReference(InvoiceItemReference $reference): self
    {
        $clone = clone $this;
        $clone->reference = $reference;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutReference(): self
    {
        $clone = clone $this;
        unset($clone->reference);

        return $clone;
    }

    /**
     * @param string $serviceDate
     * @return self
     */
    public function withServiceDate(string $serviceDate): self
    {
        $clone = clone $this;
        $clone->serviceDate = $serviceDate;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutServiceDate(): self
    {
        $clone = clone $this;
        unset($clone->serviceDate);

        return $clone;
    }

    /**
     * @param DatePeriod $servicePeriod
     * @return self
     */
    public function withServicePeriod(DatePeriod $servicePeriod): self
    {
        $clone = clone $this;
        $clone->servicePeriod = $servicePeriod;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutServicePeriod(): self
    {
        $clone = clone $this;
        unset($clone->servicePeriod);

        return $clone;
    }

    /**
     * @param int|float $vatRate
     * @return self
     */
    public function withVatRate(int|float $vatRate): self
    {
        $validator = new \JsonSchema\Validator();
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
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $additionalDescription = null;
        if (isset($input->{'additionalDescription'})) {
            $additionalDescription = $input->{'additionalDescription'};
        }
        $contractItemId = $input->{'contractItemId'};
        $description = $input->{'description'};
        $id = $input->{'id'};
        $price = Price::buildFromInput($input->{'price'}, validate: $validate);
        $reference = null;
        if (isset($input->{'reference'})) {
            $reference = InvoiceItemReference::buildFromInput($input->{'reference'}, validate: $validate);
        }
        $serviceDate = null;
        if (isset($input->{'serviceDate'})) {
            $serviceDate = $input->{'serviceDate'};
        }
        $servicePeriod = null;
        if (isset($input->{'servicePeriod'})) {
            $servicePeriod = DatePeriod::buildFromInput($input->{'servicePeriod'}, validate: $validate);
        }
        $vatRate = str_contains($input->{'vatRate'}, '.') ? (float)($input->{'vatRate'}) : (int)($input->{'vatRate'});

        $obj = new self($contractItemId, $description, $id, $price, $vatRate);
        $obj->additionalDescription = $additionalDescription;
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
        $output['id'] = $this->id;
        $output['price'] = $this->price->toJson();
        if (isset($this->reference)) {
            $output['reference'] = ($this->reference)->toJson();
        }
        if (isset($this->serviceDate)) {
            $output['serviceDate'] = $this->serviceDate;
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
        $validator = new \JsonSchema\Validator();
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
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
        if (isset($this->reference)) {
            $this->reference = clone $this->reference;
        }
    }
}
