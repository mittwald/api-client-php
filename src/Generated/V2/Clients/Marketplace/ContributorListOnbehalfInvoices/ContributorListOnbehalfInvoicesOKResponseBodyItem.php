<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorListOnbehalfInvoices;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;

class ContributorListOnbehalfInvoicesOKResponseBodyItem
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'invoiceDate' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'invoiceId' => [
                'type' => 'string',
            ],
            'invoiceNumber' => [
                'type' => 'string',
            ],
            'invoiceType' => [
                'enum' => [
                    'INVOICE',
                    'CREDIT_NOTE',
                ],
                'type' => 'string',
            ],
            'pdfLink' => [
                'type' => 'string',
            ],
            'totalGross' => [
                'type' => 'number',
            ],
            'totalNet' => [
                'type' => 'number',
            ],
            'webLink' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'invoiceId',
            'invoiceNumber',
            'invoiceDate',
            'totalNet',
            'totalGross',
            'pdfLink',
            'invoiceType',
        ],
        'type' => 'object',
    ];

    private DateTime $invoiceDate;

    private string $invoiceId;

    private string $invoiceNumber;

    private ContributorListOnbehalfInvoicesOKResponseBodyItemInvoiceType $invoiceType;

    private string $pdfLink;

    private int|float $totalGross;

    private int|float $totalNet;

    private ?string $webLink = null;

    public function __construct(DateTime $invoiceDate, string $invoiceId, string $invoiceNumber, ContributorListOnbehalfInvoicesOKResponseBodyItemInvoiceType $invoiceType, string $pdfLink, int|float $totalGross, int|float $totalNet)
    {
        $this->invoiceDate = $invoiceDate;
        $this->invoiceId = $invoiceId;
        $this->invoiceNumber = $invoiceNumber;
        $this->invoiceType = $invoiceType;
        $this->pdfLink = $pdfLink;
        $this->totalGross = $totalGross;
        $this->totalNet = $totalNet;
    }

    public function getInvoiceDate(): DateTime
    {
        return $this->invoiceDate;
    }

    public function getInvoiceId(): string
    {
        return $this->invoiceId;
    }

    public function getInvoiceNumber(): string
    {
        return $this->invoiceNumber;
    }

    public function getInvoiceType(): ContributorListOnbehalfInvoicesOKResponseBodyItemInvoiceType
    {
        return $this->invoiceType;
    }

    public function getPdfLink(): string
    {
        return $this->pdfLink;
    }

    public function getTotalGross(): int|float
    {
        return $this->totalGross;
    }

    public function getTotalNet(): int|float
    {
        return $this->totalNet;
    }

    public function getWebLink(): ?string
    {
        return $this->webLink ?? null;
    }

    public function withInvoiceDate(DateTime $invoiceDate): self
    {
        $clone = clone $this;
        $clone->invoiceDate = $invoiceDate;

        return $clone;
    }

    public function withInvoiceId(string $invoiceId): self
    {
        $validator = new Validator();
        $validator->validate($invoiceId, self::$internalValidationSchema['properties']['invoiceId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->invoiceId = $invoiceId;

        return $clone;
    }

    public function withInvoiceNumber(string $invoiceNumber): self
    {
        $validator = new Validator();
        $validator->validate($invoiceNumber, self::$internalValidationSchema['properties']['invoiceNumber']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->invoiceNumber = $invoiceNumber;

        return $clone;
    }

    public function withInvoiceType(ContributorListOnbehalfInvoicesOKResponseBodyItemInvoiceType $invoiceType): self
    {
        $clone = clone $this;
        $clone->invoiceType = $invoiceType;

        return $clone;
    }

    public function withPdfLink(string $pdfLink): self
    {
        $validator = new Validator();
        $validator->validate($pdfLink, self::$internalValidationSchema['properties']['pdfLink']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->pdfLink = $pdfLink;

        return $clone;
    }

    public function withTotalGross(int|float $totalGross): self
    {
        $validator = new Validator();
        $validator->validate($totalGross, self::$internalValidationSchema['properties']['totalGross']);
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
        $validator->validate($totalNet, self::$internalValidationSchema['properties']['totalNet']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->totalNet = $totalNet;

        return $clone;
    }

    public function withWebLink(string $webLink): self
    {
        $validator = new Validator();
        $validator->validate($webLink, self::$internalValidationSchema['properties']['webLink']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->webLink = $webLink;

        return $clone;
    }

    public function withoutWebLink(): self
    {
        $clone = clone $this;
        unset($clone->webLink);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ContributorListOnbehalfInvoicesOKResponseBodyItem Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ContributorListOnbehalfInvoicesOKResponseBodyItem
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $invoiceDate = new DateTime($input->{'invoiceDate'});
        $invoiceId = $input->{'invoiceId'};
        $invoiceNumber = $input->{'invoiceNumber'};
        $invoiceType = ContributorListOnbehalfInvoicesOKResponseBodyItemInvoiceType::from($input->{'invoiceType'});
        $pdfLink = $input->{'pdfLink'};
        $totalGross = str_contains((string)($input->{'totalGross'}), '.') ? (float)($input->{'totalGross'}) : (int)($input->{'totalGross'});
        $totalNet = str_contains((string)($input->{'totalNet'}), '.') ? (float)($input->{'totalNet'}) : (int)($input->{'totalNet'});
        $webLink = null;
        if (isset($input->{'webLink'})) {
            $webLink = $input->{'webLink'};
        }

        $obj = new self($invoiceDate, $invoiceId, $invoiceNumber, $invoiceType, $pdfLink, $totalGross, $totalNet);
        $obj->webLink = $webLink;
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
        $output['invoiceDate'] = ($this->invoiceDate)->format(DateTime::ATOM);
        $output['invoiceId'] = $this->invoiceId;
        $output['invoiceNumber'] = $this->invoiceNumber;
        $output['invoiceType'] = ($this->invoiceType)->value;
        $output['pdfLink'] = $this->pdfLink;
        $output['totalGross'] = $this->totalGross;
        $output['totalNet'] = $this->totalNet;
        if (isset($this->webLink)) {
            $output['webLink'] = $this->webLink;
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
        $this->invoiceDate = clone $this->invoiceDate;
    }
}
