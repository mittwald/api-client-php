<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Invoice;

class Invoice
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'amountPaid' => [
                'example' => 500,
                'type' => 'number',
            ],
            'cancellation' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.invoice.Cancellation',
            ],
            'cancellationOf' => [
                'description' => 'The ID of the invoice that this invoice cancels.',
                'format' => 'uuid',
                'type' => 'string',
            ],
            'currency' => [
                'example' => 'EUR',
                'type' => 'string',
            ],
            'customerId' => [
                'example' => 'e0a3b0e0-0e0e-0e0e-0e0e-0e0e0e0e0e0e',
                'type' => 'string',
            ],
            'date' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'groups' => [
                'items' => [
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
                ],
                'type' => 'array',
            ],
            'id' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'invoiceNumber' => [
                'example' => 'RG1234567',
                'type' => 'string',
            ],
            'invoiceType' => [
                'enum' => [
                    'REGULAR',
                    'REISSUE',
                    'CORRECTION',
                    'CANCELLATION',
                ],
                'type' => 'string',
            ],
            'paymentSettings' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.invoice.PaymentSettings',
            ],
            'pdfId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'recipient' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.invoice.Recipient',
            ],
            'status' => [
                'enum' => [
                    'NEW',
                    'CONFIRMED',
                    'DENIED',
                    'PAID',
                    'PARTIALLY_PAID',
                    'OVERPAID',
                ],
                'type' => 'string',
            ],
            'totalGross' => [
                'example' => 595,
                'type' => 'number',
            ],
            'totalNet' => [
                'example' => 500,
                'type' => 'number',
            ],
            'vatId' => [
                'example' => 'DE123456789',
                'type' => 'string',
            ],
        ],
        'required' => [
            'id',
            'customerId',
            'invoiceNumber',
            'date',
            'pdfId',
            'groups',
            'status',
            'amountPaid',
            'recipient',
            'totalNet',
            'totalGross',
            'currency',
            'invoiceType',
        ],
        'type' => 'object',
    ];

    /**
     * @var int|float
     */
    private int|float $amountPaid;

    /**
     * @var Cancellation|null
     */
    private ?Cancellation $cancellation = null;

    /**
     * The ID of the invoice that this invoice cancels.
     *
     * @var string|null
     */
    private ?string $cancellationOf = null;

    /**
     * @var string
     */
    private string $currency;

    /**
     * @var string
     */
    private string $customerId;

    /**
     * @var \DateTime
     */
    private \DateTime $date;

    /**
     * @var InvoiceGroupsItem[]
     */
    private array $groups;

    /**
     * @var string
     */
    private string $id;

    /**
     * @var string
     */
    private string $invoiceNumber;

    /**
     * @var InvoiceInvoiceType
     */
    private InvoiceInvoiceType $invoiceType;

    /**
     * @var PaymentSettingsDebit|PaymentSettingsInvoice|null
     */
    private PaymentSettingsDebit|PaymentSettingsInvoice|null $paymentSettings = null;

    /**
     * @var string
     */
    private string $pdfId;

    /**
     * @var Recipient
     */
    private Recipient $recipient;

    /**
     * @var InvoiceStatus
     */
    private InvoiceStatus $status;

    /**
     * @var int|float
     */
    private int|float $totalGross;

    /**
     * @var int|float
     */
    private int|float $totalNet;

    /**
     * @var string|null
     */
    private ?string $vatId = null;

    /**
     * @param int|float $amountPaid
     * @param string $currency
     * @param string $customerId
     * @param \DateTime $date
     * @param InvoiceGroupsItem[] $groups
     * @param string $id
     * @param string $invoiceNumber
     * @param InvoiceInvoiceType $invoiceType
     * @param string $pdfId
     * @param Recipient $recipient
     * @param InvoiceStatus $status
     * @param int|float $totalGross
     * @param int|float $totalNet
     */
    public function __construct(int|float $amountPaid, string $currency, string $customerId, \DateTime $date, array $groups, string $id, string $invoiceNumber, InvoiceInvoiceType $invoiceType, string $pdfId, Recipient $recipient, InvoiceStatus $status, int|float $totalGross, int|float $totalNet)
    {
        $this->amountPaid = $amountPaid;
        $this->currency = $currency;
        $this->customerId = $customerId;
        $this->date = $date;
        $this->groups = $groups;
        $this->id = $id;
        $this->invoiceNumber = $invoiceNumber;
        $this->invoiceType = $invoiceType;
        $this->pdfId = $pdfId;
        $this->recipient = $recipient;
        $this->status = $status;
        $this->totalGross = $totalGross;
        $this->totalNet = $totalNet;
    }

    /**
     * @return int|float
     */
    public function getAmountPaid() : int|float
    {
        return $this->amountPaid;
    }

    /**
     * @return Cancellation|null
     */
    public function getCancellation() : ?Cancellation
    {
        return $this->cancellation ?? null;
    }

    /**
     * @return string|null
     */
    public function getCancellationOf() : ?string
    {
        return $this->cancellationOf ?? null;
    }

    /**
     * @return string
     */
    public function getCurrency() : string
    {
        return $this->currency;
    }

    /**
     * @return string
     */
    public function getCustomerId() : string
    {
        return $this->customerId;
    }

    /**
     * @return \DateTime
     */
    public function getDate() : \DateTime
    {
        return $this->date;
    }

    /**
     * @return InvoiceGroupsItem[]
     */
    public function getGroups() : array
    {
        return $this->groups;
    }

    /**
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getInvoiceNumber() : string
    {
        return $this->invoiceNumber;
    }

    /**
     * @return InvoiceInvoiceType
     */
    public function getInvoiceType() : InvoiceInvoiceType
    {
        return $this->invoiceType;
    }

    /**
     * @return
     * PaymentSettingsDebit|PaymentSettingsInvoice|null
     */
    public function getPaymentSettings() : PaymentSettingsDebit|PaymentSettingsInvoice|null
    {
        return $this->paymentSettings;
    }

    /**
     * @return string
     */
    public function getPdfId() : string
    {
        return $this->pdfId;
    }

    /**
     * @return Recipient
     */
    public function getRecipient() : Recipient
    {
        return $this->recipient;
    }

    /**
     * @return InvoiceStatus
     */
    public function getStatus() : InvoiceStatus
    {
        return $this->status;
    }

    /**
     * @return int|float
     */
    public function getTotalGross() : int|float
    {
        return $this->totalGross;
    }

    /**
     * @return int|float
     */
    public function getTotalNet() : int|float
    {
        return $this->totalNet;
    }

    /**
     * @return string|null
     */
    public function getVatId() : ?string
    {
        return $this->vatId ?? null;
    }

    /**
     * @param int|float $amountPaid
     * @return self
     */
    public function withAmountPaid(int|float $amountPaid) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($amountPaid, static::$schema['properties']['amountPaid']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->amountPaid = $amountPaid;

        return $clone;
    }

    /**
     * @param Cancellation $cancellation
     * @return self
     */
    public function withCancellation(Cancellation $cancellation) : self
    {
        $clone = clone $this;
        $clone->cancellation = $cancellation;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutCancellation() : self
    {
        $clone = clone $this;
        unset($clone->cancellation);

        return $clone;
    }

    /**
     * @param string $cancellationOf
     * @return self
     */
    public function withCancellationOf(string $cancellationOf) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($cancellationOf, static::$schema['properties']['cancellationOf']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->cancellationOf = $cancellationOf;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutCancellationOf() : self
    {
        $clone = clone $this;
        unset($clone->cancellationOf);

        return $clone;
    }

    /**
     * @param string $currency
     * @return self
     */
    public function withCurrency(string $currency) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($currency, static::$schema['properties']['currency']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->currency = $currency;

        return $clone;
    }

    /**
     * @param string $customerId
     * @return self
     */
    public function withCustomerId(string $customerId) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($customerId, static::$schema['properties']['customerId']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->customerId = $customerId;

        return $clone;
    }

    /**
     * @param \DateTime $date
     * @return self
     */
    public function withDate(\DateTime $date) : self
    {
        $clone = clone $this;
        $clone->date = $date;

        return $clone;
    }

    /**
     * @param InvoiceGroupsItem[] $groups
     * @return self
     */
    public function withGroups(array $groups) : self
    {
        $clone = clone $this;
        $clone->groups = $groups;

        return $clone;
    }

    /**
     * @param string $id
     * @return self
     */
    public function withId(string $id) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($id, static::$schema['properties']['id']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->id = $id;

        return $clone;
    }

    /**
     * @param string $invoiceNumber
     * @return self
     */
    public function withInvoiceNumber(string $invoiceNumber) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($invoiceNumber, static::$schema['properties']['invoiceNumber']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->invoiceNumber = $invoiceNumber;

        return $clone;
    }

    /**
     * @param InvoiceInvoiceType $invoiceType
     * @return self
     */
    public function withInvoiceType(InvoiceInvoiceType $invoiceType) : self
    {
        $clone = clone $this;
        $clone->invoiceType = $invoiceType;

        return $clone;
    }

    /**
     * @param PaymentSettingsDebit|PaymentSettingsInvoice $paymentSettings
     * @return self
     */
    public function withPaymentSettings(PaymentSettingsDebit|PaymentSettingsInvoice $paymentSettings) : self
    {
        $clone = clone $this;
        $clone->paymentSettings = $paymentSettings;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutPaymentSettings() : self
    {
        $clone = clone $this;
        unset($clone->paymentSettings);

        return $clone;
    }

    /**
     * @param string $pdfId
     * @return self
     */
    public function withPdfId(string $pdfId) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($pdfId, static::$schema['properties']['pdfId']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->pdfId = $pdfId;

        return $clone;
    }

    /**
     * @param Recipient $recipient
     * @return self
     */
    public function withRecipient(Recipient $recipient) : self
    {
        $clone = clone $this;
        $clone->recipient = $recipient;

        return $clone;
    }

    /**
     * @param InvoiceStatus $status
     * @return self
     */
    public function withStatus(InvoiceStatus $status) : self
    {
        $clone = clone $this;
        $clone->status = $status;

        return $clone;
    }

    /**
     * @param int|float $totalGross
     * @return self
     */
    public function withTotalGross(int|float $totalGross) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($totalGross, static::$schema['properties']['totalGross']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->totalGross = $totalGross;

        return $clone;
    }

    /**
     * @param int|float $totalNet
     * @return self
     */
    public function withTotalNet(int|float $totalNet) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($totalNet, static::$schema['properties']['totalNet']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->totalNet = $totalNet;

        return $clone;
    }

    /**
     * @param string $vatId
     * @return self
     */
    public function withVatId(string $vatId) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($vatId, static::$schema['properties']['vatId']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->vatId = $vatId;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutVatId() : self
    {
        $clone = clone $this;
        unset($clone->vatId);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return Invoice Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : Invoice
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $amountPaid = str_contains($input->{'amountPaid'}, '.') ? (float)($input->{'amountPaid'}) : (int)($input->{'amountPaid'});
        $cancellation = null;
        if (isset($input->{'cancellation'})) {
            $cancellation = Cancellation::buildFromInput($input->{'cancellation'}, validate: $validate);
        }
        $cancellationOf = null;
        if (isset($input->{'cancellationOf'})) {
            $cancellationOf = $input->{'cancellationOf'};
        }
        $currency = $input->{'currency'};
        $customerId = $input->{'customerId'};
        $date = new \DateTime($input->{'date'});
        $groups = array_map(fn (array|object $i): InvoiceGroupsItem => InvoiceGroupsItem::buildFromInput($i, validate: $validate), $input->{'groups'});
        $id = $input->{'id'};
        $invoiceNumber = $input->{'invoiceNumber'};
        $invoiceType = InvoiceInvoiceType::from($input->{'invoiceType'});
        $paymentSettings = null;
        if (isset($input->{'paymentSettings'})) {
            $paymentSettings = match (true) {
                default => throw new \InvalidArgumentException("input cannot be mapped to any valid type"),
                PaymentSettingsDebit::validateInput($input->{'paymentSettings'}, true) => PaymentSettingsDebit::buildFromInput($input->{'paymentSettings'}, validate: $validate),
                PaymentSettingsInvoice::validateInput($input->{'paymentSettings'}, true) => PaymentSettingsInvoice::buildFromInput($input->{'paymentSettings'}, validate: $validate),
            };
        }
        $pdfId = $input->{'pdfId'};
        $recipient = Recipient::buildFromInput($input->{'recipient'}, validate: $validate);
        $status = InvoiceStatus::from($input->{'status'});
        $totalGross = str_contains($input->{'totalGross'}, '.') ? (float)($input->{'totalGross'}) : (int)($input->{'totalGross'});
        $totalNet = str_contains($input->{'totalNet'}, '.') ? (float)($input->{'totalNet'}) : (int)($input->{'totalNet'});
        $vatId = null;
        if (isset($input->{'vatId'})) {
            $vatId = $input->{'vatId'};
        }

        $obj = new self($amountPaid, $currency, $customerId, $date, $groups, $id, $invoiceNumber, $invoiceType, $pdfId, $recipient, $status, $totalGross, $totalNet);
        $obj->cancellation = $cancellation;
        $obj->cancellationOf = $cancellationOf;
        $obj->paymentSettings = $paymentSettings;
        $obj->vatId = $vatId;
        return $obj;
    }

    /**
     * Converts this object back to a simple array that can be JSON-serialized
     *
     * @return array Converted array
     */
    public function toJson() : array
    {
        $output = [];
        $output['amountPaid'] = $this->amountPaid;
        if (isset($this->cancellation)) {
            $output['cancellation'] = $this->cancellation->toJson();
        }
        if (isset($this->cancellationOf)) {
            $output['cancellationOf'] = $this->cancellationOf;
        }
        $output['currency'] = $this->currency;
        $output['customerId'] = $this->customerId;
        $output['date'] = ($this->date)->format(\DateTime::ATOM);
        $output['groups'] = array_map(fn (InvoiceGroupsItem $i) => $i->toJson(), $this->groups);
        $output['id'] = $this->id;
        $output['invoiceNumber'] = $this->invoiceNumber;
        $output['invoiceType'] = ($this->invoiceType)->value;
        if (isset($this->paymentSettings)) {
            $output['paymentSettings'] = match (true) {
                default => throw new \InvalidArgumentException("input cannot be mapped to any valid type"),
                ($this->paymentSettings) instanceof PaymentSettingsDebit, ($this->paymentSettings) instanceof PaymentSettingsInvoice => $this->paymentSettings->toJson(),
            };
        }
        $output['pdfId'] = $this->pdfId;
        $output['recipient'] = $this->recipient->toJson();
        $output['status'] = ($this->status)->value;
        $output['totalGross'] = $this->totalGross;
        $output['totalNet'] = $this->totalNet;
        if (isset($this->vatId)) {
            $output['vatId'] = $this->vatId;
        }

        return $output;
    }

    /**
     * Validates an input array
     *
     * @param array|object $input Input data
     * @param bool $return Return instead of throwing errors
     * @return bool Validation result
     * @throws \InvalidArgumentException
     */
    public static function validateInput(array|object $input, bool $return = false) : bool
    {
        $validator = new \JsonSchema\Validator();
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        $validator->validate($input, static::$schema);

        if (!$validator->isValid() && !$return) {
            $errors = array_map(function(array $e): string {
                return $e["property"] . ": " . $e["message"];
            }, $validator->getErrors());
            throw new \InvalidArgumentException(join(", ", $errors));
        }

        return $validator->isValid();
    }

    public function __clone()
    {
        $this->date = clone $this->date;
        $this->groups = array_map(fn (InvoiceGroupsItem $i) => clone $i, $this->groups);
    }
}

