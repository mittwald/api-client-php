<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Invoice;

use InvalidArgumentException;
use JsonSchema\Validator;

class ContractItemInvoiceDefinition
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'contractItemId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'isDue' => [
                'type' => 'boolean',
            ],
            'serviceDate' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.invoice.ServiceDate',
            ],
            'servicePeriod' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.invoice.DatePeriod',
            ],
            'vatRate' => [
                'example' => 19,
                'type' => 'integer',
            ],
        ],
        'required' => [
            'contractItemId',
            'vatRate',
            'servicePeriod',
        ],
        'type' => 'object',
    ];

    /**
     * @var string
     */
    private string $contractItemId;

    /**
     * @var bool|null
     */
    private ?bool $isDue = null;

    /**
     * @var string|null
     */
    private ?string $serviceDate = null;

    /**
     * @var DatePeriod
     */
    private DatePeriod $servicePeriod;

    /**
     * @var int
     */
    private int $vatRate;

    /**
     * @param string $contractItemId
     * @param DatePeriod $servicePeriod
     * @param int $vatRate
     */
    public function __construct(string $contractItemId, DatePeriod $servicePeriod, int $vatRate)
    {
        $this->contractItemId = $contractItemId;
        $this->servicePeriod = $servicePeriod;
        $this->vatRate = $vatRate;
    }

    /**
     * @return string
     */
    public function getContractItemId(): string
    {
        return $this->contractItemId;
    }

    /**
     * @return bool|null
     */
    public function getIsDue(): ?bool
    {
        return $this->isDue ?? null;
    }

    /**
     * @return string|null
     */
    public function getServiceDate(): ?string
    {
        return $this->serviceDate ?? null;
    }

    /**
     * @return DatePeriod
     */
    public function getServicePeriod(): DatePeriod
    {
        return $this->servicePeriod;
    }

    /**
     * @return int
     */
    public function getVatRate(): int
    {
        return $this->vatRate;
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
     * @param bool $isDue
     * @return self
     */
    public function withIsDue(bool $isDue): self
    {
        $validator = new Validator();
        $validator->validate($isDue, static::$schema['properties']['isDue']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->isDue = $isDue;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutIsDue(): self
    {
        $clone = clone $this;
        unset($clone->isDue);

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
     * @param int $vatRate
     * @return self
     */
    public function withVatRate(int $vatRate): self
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
     * @return ContractItemInvoiceDefinition Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ContractItemInvoiceDefinition
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $contractItemId = $input->{'contractItemId'};
        $isDue = null;
        if (isset($input->{'isDue'})) {
            $isDue = (bool)($input->{'isDue'});
        }
        $serviceDate = null;
        if (isset($input->{'serviceDate'})) {
            $serviceDate = $input->{'serviceDate'};
        }
        $servicePeriod = DatePeriod::buildFromInput($input->{'servicePeriod'}, validate: $validate);
        $vatRate = (int)($input->{'vatRate'});

        $obj = new self($contractItemId, $servicePeriod, $vatRate);
        $obj->isDue = $isDue;
        $obj->serviceDate = $serviceDate;
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
        $output['contractItemId'] = $this->contractItemId;
        if (isset($this->isDue)) {
            $output['isDue'] = $this->isDue;
        }
        if (isset($this->serviceDate)) {
            $output['serviceDate'] = $this->serviceDate;
        }
        $output['servicePeriod'] = $this->servicePeriod->toJson();
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
