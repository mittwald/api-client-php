<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorListIncomingInvoices;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Invoice\Recipient;

class ContributorListIncomingInvoicesOKResponseBodyItem
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'currency' => [
                'example' => 'EUR',
                'type' => 'string',
            ],
            'customerId' => [
                'example' => '6439a2f4-5de2-4314-bae2-b6edb4eb4c37',
                'type' => 'string',
            ],
            'customerName' => [
                'example' => 'Meine Organisation',
                'type' => 'string',
            ],
            'customerNumber' => [
                'example' => '4151123',
                'type' => 'string',
            ],
            'date' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'id' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'invoiceNumber' => [
                'example' => 'PG1234567',
                'type' => 'string',
            ],
            'pdfId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'recipient' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.invoice.Recipient',
            ],
            'totalGross' => [
                'example' => 595,
                'type' => 'number',
            ],
            'totalNet' => [
                'example' => 500,
                'type' => 'number',
            ],
        ],
        'required' => [
            'id',
            'invoiceNumber',
            'customerId',
            'customerNumber',
            'customerName',
            'date',
            'pdfId',
            'recipient',
            'totalNet',
            'totalGross',
            'currency',
        ],
        'type' => 'object',
    ];

    private string $currency;

    private string $customerId;

    private string $customerName;

    private string $customerNumber;

    private DateTime $date;

    private string $id;

    private string $invoiceNumber;

    private string $pdfId;

    private Recipient $recipient;

    private int|float $totalGross;

    private int|float $totalNet;

    public function __construct(string $currency, string $customerId, string $customerName, string $customerNumber, DateTime $date, string $id, string $invoiceNumber, string $pdfId, Recipient $recipient, int|float $totalGross, int|float $totalNet)
    {
        $this->currency = $currency;
        $this->customerId = $customerId;
        $this->customerName = $customerName;
        $this->customerNumber = $customerNumber;
        $this->date = $date;
        $this->id = $id;
        $this->invoiceNumber = $invoiceNumber;
        $this->pdfId = $pdfId;
        $this->recipient = $recipient;
        $this->totalGross = $totalGross;
        $this->totalNet = $totalNet;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getCustomerId(): string
    {
        return $this->customerId;
    }

    public function getCustomerName(): string
    {
        return $this->customerName;
    }

    public function getCustomerNumber(): string
    {
        return $this->customerNumber;
    }

    public function getDate(): DateTime
    {
        return $this->date;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getInvoiceNumber(): string
    {
        return $this->invoiceNumber;
    }

    public function getPdfId(): string
    {
        return $this->pdfId;
    }

    public function getRecipient(): Recipient
    {
        return $this->recipient;
    }

    public function getTotalGross(): int|float
    {
        return $this->totalGross;
    }

    public function getTotalNet(): int|float
    {
        return $this->totalNet;
    }

    public function withCurrency(string $currency): self
    {
        $validator = new Validator();
        $validator->validate($currency, self::$schema['properties']['currency']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->currency = $currency;

        return $clone;
    }

    public function withCustomerId(string $customerId): self
    {
        $validator = new Validator();
        $validator->validate($customerId, self::$schema['properties']['customerId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->customerId = $customerId;

        return $clone;
    }

    public function withCustomerName(string $customerName): self
    {
        $validator = new Validator();
        $validator->validate($customerName, self::$schema['properties']['customerName']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->customerName = $customerName;

        return $clone;
    }

    public function withCustomerNumber(string $customerNumber): self
    {
        $validator = new Validator();
        $validator->validate($customerNumber, self::$schema['properties']['customerNumber']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->customerNumber = $customerNumber;

        return $clone;
    }

    public function withDate(DateTime $date): self
    {
        $clone = clone $this;
        $clone->date = $date;

        return $clone;
    }

    public function withId(string $id): self
    {
        $validator = new Validator();
        $validator->validate($id, self::$schema['properties']['id']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->id = $id;

        return $clone;
    }

    public function withInvoiceNumber(string $invoiceNumber): self
    {
        $validator = new Validator();
        $validator->validate($invoiceNumber, self::$schema['properties']['invoiceNumber']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->invoiceNumber = $invoiceNumber;

        return $clone;
    }

    public function withPdfId(string $pdfId): self
    {
        $validator = new Validator();
        $validator->validate($pdfId, self::$schema['properties']['pdfId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->pdfId = $pdfId;

        return $clone;
    }

    public function withRecipient(Recipient $recipient): self
    {
        $clone = clone $this;
        $clone->recipient = $recipient;

        return $clone;
    }

    public function withTotalGross(int|float $totalGross): self
    {
        $validator = new Validator();
        $validator->validate($totalGross, self::$schema['properties']['totalGross']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->totalGross = $totalGross;

        return $clone;
    }

    public function withTotalNet(int|float $totalNet): self
    {
        $validator = new Validator();
        $validator->validate($totalNet, self::$schema['properties']['totalNet']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->totalNet = $totalNet;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ContributorListIncomingInvoicesOKResponseBodyItem Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ContributorListIncomingInvoicesOKResponseBodyItem
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $currency = $input->{'currency'};
        $customerId = $input->{'customerId'};
        $customerName = $input->{'customerName'};
        $customerNumber = $input->{'customerNumber'};
        $date = new DateTime($input->{'date'});
        $id = $input->{'id'};
        $invoiceNumber = $input->{'invoiceNumber'};
        $pdfId = $input->{'pdfId'};
        $recipient = Recipient::buildFromInput($input->{'recipient'}, validate: $validate);
        $totalGross = str_contains((string)($input->{'totalGross'}), '.') ? (float)($input->{'totalGross'}) : (int)($input->{'totalGross'});
        $totalNet = str_contains((string)($input->{'totalNet'}), '.') ? (float)($input->{'totalNet'}) : (int)($input->{'totalNet'});

        $obj = new self($currency, $customerId, $customerName, $customerNumber, $date, $id, $invoiceNumber, $pdfId, $recipient, $totalGross, $totalNet);

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
        $output['currency'] = $this->currency;
        $output['customerId'] = $this->customerId;
        $output['customerName'] = $this->customerName;
        $output['customerNumber'] = $this->customerNumber;
        $output['date'] = ($this->date)->format(DateTime::ATOM);
        $output['id'] = $this->id;
        $output['invoiceNumber'] = $this->invoiceNumber;
        $output['pdfId'] = $this->pdfId;
        $output['recipient'] = $this->recipient->toJson();
        $output['totalGross'] = $this->totalGross;
        $output['totalNet'] = $this->totalNet;

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
        $validator->validate($input, self::$schema);

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
        $this->date = clone $this->date;
    }
}
