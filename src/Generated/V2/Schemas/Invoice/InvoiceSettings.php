<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Invoice;

class InvoiceSettings
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'additionalEmailRecipients' => [
                'items' => [
                    'format' => 'email',
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
            'id' => [
                'example' => '5f9b9b9b-9b9b-9b9b-9b9b-9b9b9b9b9b9b',
                'type' => 'string',
            ],
            'invoicePeriod' => [
                'example' => 1,
                'type' => 'integer',
            ],
            'lastBankingInformation' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.invoice.BankingInformation',
            ],
            'paymentSettings' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.invoice.PaymentSettings',
            ],
            'printedInvoices' => [
                'type' => 'boolean',
            ],
            'recipient' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.invoice.Recipient',
            ],
            'recipientSameAsOwner' => [
                'type' => 'boolean',
            ],
            'targetDay' => [
                'example' => 15,
                'type' => 'integer',
            ],
        ],
        'required' => [
            'id',
        ],
        'type' => 'object',
    ];

    /**
     * @var string[]|null
     */
    private ?array $additionalEmailRecipients = null;

    /**
     * @var string
     */
    private string $id;

    /**
     * @var int|null
     */
    private ?int $invoicePeriod = null;

    /**
     * @var BankingInformation|null
     */
    private ?BankingInformation $lastBankingInformation = null;

    /**
     * @var PaymentSettingsDebit|PaymentSettingsInvoice|null
     */
    private PaymentSettingsDebit|PaymentSettingsInvoice|null $paymentSettings = null;

    /**
     * @var bool|null
     */
    private ?bool $printedInvoices = null;

    /**
     * @var Recipient|null
     */
    private ?Recipient $recipient = null;

    /**
     * @var bool|null
     */
    private ?bool $recipientSameAsOwner = null;

    /**
     * @var int|null
     */
    private ?int $targetDay = null;

    /**
     * @param string $id
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }

    /**
     * @return string[]|null
     */
    public function getAdditionalEmailRecipients() : ?array
    {
        return $this->additionalEmailRecipients ?? null;
    }

    /**
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }

    /**
     * @return int|null
     */
    public function getInvoicePeriod() : ?int
    {
        return $this->invoicePeriod ?? null;
    }

    /**
     * @return BankingInformation|null
     */
    public function getLastBankingInformation() : ?BankingInformation
    {
        return $this->lastBankingInformation ?? null;
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
     * @return bool|null
     */
    public function getPrintedInvoices() : ?bool
    {
        return $this->printedInvoices ?? null;
    }

    /**
     * @return Recipient|null
     */
    public function getRecipient() : ?Recipient
    {
        return $this->recipient ?? null;
    }

    /**
     * @return bool|null
     */
    public function getRecipientSameAsOwner() : ?bool
    {
        return $this->recipientSameAsOwner ?? null;
    }

    /**
     * @return int|null
     */
    public function getTargetDay() : ?int
    {
        return $this->targetDay ?? null;
    }

    /**
     * @param string[] $additionalEmailRecipients
     * @return self
     */
    public function withAdditionalEmailRecipients(array $additionalEmailRecipients) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($additionalEmailRecipients, static::$schema['properties']['additionalEmailRecipients']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->additionalEmailRecipients = $additionalEmailRecipients;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutAdditionalEmailRecipients() : self
    {
        $clone = clone $this;
        unset($clone->additionalEmailRecipients);

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
     * @param int $invoicePeriod
     * @return self
     */
    public function withInvoicePeriod(int $invoicePeriod) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($invoicePeriod, static::$schema['properties']['invoicePeriod']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->invoicePeriod = $invoicePeriod;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutInvoicePeriod() : self
    {
        $clone = clone $this;
        unset($clone->invoicePeriod);

        return $clone;
    }

    /**
     * @param BankingInformation $lastBankingInformation
     * @return self
     */
    public function withLastBankingInformation(BankingInformation $lastBankingInformation) : self
    {
        $clone = clone $this;
        $clone->lastBankingInformation = $lastBankingInformation;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutLastBankingInformation() : self
    {
        $clone = clone $this;
        unset($clone->lastBankingInformation);

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
     * @param bool $printedInvoices
     * @return self
     */
    public function withPrintedInvoices(bool $printedInvoices) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($printedInvoices, static::$schema['properties']['printedInvoices']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->printedInvoices = $printedInvoices;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutPrintedInvoices() : self
    {
        $clone = clone $this;
        unset($clone->printedInvoices);

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
     * @return self
     */
    public function withoutRecipient() : self
    {
        $clone = clone $this;
        unset($clone->recipient);

        return $clone;
    }

    /**
     * @param bool $recipientSameAsOwner
     * @return self
     */
    public function withRecipientSameAsOwner(bool $recipientSameAsOwner) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($recipientSameAsOwner, static::$schema['properties']['recipientSameAsOwner']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->recipientSameAsOwner = $recipientSameAsOwner;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutRecipientSameAsOwner() : self
    {
        $clone = clone $this;
        unset($clone->recipientSameAsOwner);

        return $clone;
    }

    /**
     * @param int $targetDay
     * @return self
     */
    public function withTargetDay(int $targetDay) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($targetDay, static::$schema['properties']['targetDay']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->targetDay = $targetDay;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutTargetDay() : self
    {
        $clone = clone $this;
        unset($clone->targetDay);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return InvoiceSettings Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : InvoiceSettings
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $additionalEmailRecipients = null;
        if (isset($input->{'additionalEmailRecipients'})) {
            $additionalEmailRecipients = $input->{'additionalEmailRecipients'};
        }
        $id = $input->{'id'};
        $invoicePeriod = null;
        if (isset($input->{'invoicePeriod'})) {
            $invoicePeriod = (int)($input->{'invoicePeriod'});
        }
        $lastBankingInformation = null;
        if (isset($input->{'lastBankingInformation'})) {
            $lastBankingInformation = BankingInformation::buildFromInput($input->{'lastBankingInformation'}, validate: $validate);
        }
        $paymentSettings = null;
        if (isset($input->{'paymentSettings'})) {
            $paymentSettings = match (true) {
                default => throw new \InvalidArgumentException("input cannot be mapped to any valid type"),
                PaymentSettingsDebit::validateInput($input->{'paymentSettings'}, true) => PaymentSettingsDebit::buildFromInput($input->{'paymentSettings'}, validate: $validate),
                PaymentSettingsInvoice::validateInput($input->{'paymentSettings'}, true) => PaymentSettingsInvoice::buildFromInput($input->{'paymentSettings'}, validate: $validate),
            };
        }
        $printedInvoices = null;
        if (isset($input->{'printedInvoices'})) {
            $printedInvoices = (bool)($input->{'printedInvoices'});
        }
        $recipient = null;
        if (isset($input->{'recipient'})) {
            $recipient = Recipient::buildFromInput($input->{'recipient'}, validate: $validate);
        }
        $recipientSameAsOwner = null;
        if (isset($input->{'recipientSameAsOwner'})) {
            $recipientSameAsOwner = (bool)($input->{'recipientSameAsOwner'});
        }
        $targetDay = null;
        if (isset($input->{'targetDay'})) {
            $targetDay = (int)($input->{'targetDay'});
        }

        $obj = new self($id);
        $obj->additionalEmailRecipients = $additionalEmailRecipients;
        $obj->invoicePeriod = $invoicePeriod;
        $obj->lastBankingInformation = $lastBankingInformation;
        $obj->paymentSettings = $paymentSettings;
        $obj->printedInvoices = $printedInvoices;
        $obj->recipient = $recipient;
        $obj->recipientSameAsOwner = $recipientSameAsOwner;
        $obj->targetDay = $targetDay;
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
        if (isset($this->additionalEmailRecipients)) {
            $output['additionalEmailRecipients'] = $this->additionalEmailRecipients;
        }
        $output['id'] = $this->id;
        if (isset($this->invoicePeriod)) {
            $output['invoicePeriod'] = $this->invoicePeriod;
        }
        if (isset($this->lastBankingInformation)) {
            $output['lastBankingInformation'] = $this->lastBankingInformation->toJson();
        }
        if (isset($this->paymentSettings)) {
            $output['paymentSettings'] = match (true) {
                default => throw new \InvalidArgumentException("input cannot be mapped to any valid type"),
                ($this->paymentSettings) instanceof PaymentSettingsDebit, ($this->paymentSettings) instanceof PaymentSettingsInvoice => $this->paymentSettings->toJson(),
            };
        }
        if (isset($this->printedInvoices)) {
            $output['printedInvoices'] = $this->printedInvoices;
        }
        if (isset($this->recipient)) {
            $output['recipient'] = $this->recipient->toJson();
        }
        if (isset($this->recipientSameAsOwner)) {
            $output['recipientSameAsOwner'] = $this->recipientSameAsOwner;
        }
        if (isset($this->targetDay)) {
            $output['targetDay'] = $this->targetDay;
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
    }
}

