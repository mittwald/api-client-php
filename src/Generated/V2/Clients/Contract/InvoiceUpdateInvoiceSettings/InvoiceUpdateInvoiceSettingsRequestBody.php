<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceUpdateInvoiceSettings;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Invoice\PaymentSettingsDebit;
use Mittwald\ApiClient\Generated\V2\Schemas\Invoice\PaymentSettingsInvoice;
use Mittwald\ApiClient\Generated\V2\Schemas\Invoice\Recipient;

class InvoiceUpdateInvoiceSettingsRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'additionalEmailRecipients' => [
                'example' => [
                    'hallo@test.de',
                ],
                'items' => [
                    'format' => 'email',
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
            'invoicePeriod' => [
                'example' => 1,
                'minimum' => 0,
                'type' => 'integer',
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
                'maximum' => 28,
                'minimum' => 0,
                'type' => 'integer',
            ],
        ],
        'required' => [
            'invoicePeriod',
            'paymentSettings',
        ],
        'type' => 'object',
    ];

    /**
     * @var string[]|null
     */
    private ?array $additionalEmailRecipients = null;

    private int $invoicePeriod;

    private PaymentSettingsDebit|PaymentSettingsInvoice $paymentSettings;

    private ?bool $printedInvoices = null;

    private ?Recipient $recipient = null;

    private ?bool $recipientSameAsOwner = null;

    private ?int $targetDay = null;

    public function __construct(int $invoicePeriod, PaymentSettingsDebit|PaymentSettingsInvoice $paymentSettings)
    {
        $this->invoicePeriod = $invoicePeriod;
        $this->paymentSettings = $paymentSettings;
    }

    /**
     * @return string[]|null
     */
    public function getAdditionalEmailRecipients(): ?array
    {
        return $this->additionalEmailRecipients ?? null;
    }

    public function getInvoicePeriod(): int
    {
        return $this->invoicePeriod;
    }

    public function getPaymentSettings(): PaymentSettingsDebit|PaymentSettingsInvoice
    {
        return $this->paymentSettings;
    }

    public function getPrintedInvoices(): ?bool
    {
        return $this->printedInvoices ?? null;
    }

    public function getRecipient(): ?Recipient
    {
        return $this->recipient ?? null;
    }

    public function getRecipientSameAsOwner(): ?bool
    {
        return $this->recipientSameAsOwner ?? null;
    }

    public function getTargetDay(): ?int
    {
        return $this->targetDay ?? null;
    }

    /**
     * @param string[] $additionalEmailRecipients
     */
    public function withAdditionalEmailRecipients(array $additionalEmailRecipients): self
    {
        $validator = new Validator();
        $validator->validate($additionalEmailRecipients, self::$schema['properties']['additionalEmailRecipients']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->additionalEmailRecipients = $additionalEmailRecipients;

        return $clone;
    }

    public function withoutAdditionalEmailRecipients(): self
    {
        $clone = clone $this;
        unset($clone->additionalEmailRecipients);

        return $clone;
    }

    public function withInvoicePeriod(int $invoicePeriod): self
    {
        $validator = new Validator();
        $validator->validate($invoicePeriod, self::$schema['properties']['invoicePeriod']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->invoicePeriod = $invoicePeriod;

        return $clone;
    }

    public function withPaymentSettings(PaymentSettingsDebit|PaymentSettingsInvoice $paymentSettings): self
    {
        $clone = clone $this;
        $clone->paymentSettings = $paymentSettings;

        return $clone;
    }

    public function withPrintedInvoices(bool $printedInvoices): self
    {
        $validator = new Validator();
        $validator->validate($printedInvoices, self::$schema['properties']['printedInvoices']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->printedInvoices = $printedInvoices;

        return $clone;
    }

    public function withoutPrintedInvoices(): self
    {
        $clone = clone $this;
        unset($clone->printedInvoices);

        return $clone;
    }

    public function withRecipient(Recipient $recipient): self
    {
        $clone = clone $this;
        $clone->recipient = $recipient;

        return $clone;
    }

    public function withoutRecipient(): self
    {
        $clone = clone $this;
        unset($clone->recipient);

        return $clone;
    }

    public function withRecipientSameAsOwner(bool $recipientSameAsOwner): self
    {
        $validator = new Validator();
        $validator->validate($recipientSameAsOwner, self::$schema['properties']['recipientSameAsOwner']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->recipientSameAsOwner = $recipientSameAsOwner;

        return $clone;
    }

    public function withoutRecipientSameAsOwner(): self
    {
        $clone = clone $this;
        unset($clone->recipientSameAsOwner);

        return $clone;
    }

    public function withTargetDay(int $targetDay): self
    {
        $validator = new Validator();
        $validator->validate($targetDay, self::$schema['properties']['targetDay']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->targetDay = $targetDay;

        return $clone;
    }

    public function withoutTargetDay(): self
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
     * @return InvoiceUpdateInvoiceSettingsRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): InvoiceUpdateInvoiceSettingsRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $additionalEmailRecipients = null;
        if (isset($input->{'additionalEmailRecipients'})) {
            $additionalEmailRecipients = $input->{'additionalEmailRecipients'};
        }
        $invoicePeriod = (int)($input->{'invoicePeriod'});
        $paymentSettings = match (true) {
            default => throw new InvalidArgumentException("input cannot be mapped to any valid type"),
            PaymentSettingsDebit::validateInput($input->{'paymentSettings'}, true) => PaymentSettingsDebit::buildFromInput($input->{'paymentSettings'}, validate: $validate),
            PaymentSettingsInvoice::validateInput($input->{'paymentSettings'}, true) => PaymentSettingsInvoice::buildFromInput($input->{'paymentSettings'}, validate: $validate),
        };
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

        $obj = new self($invoicePeriod, $paymentSettings);
        $obj->additionalEmailRecipients = $additionalEmailRecipients;
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
    public function toJson(): array
    {
        $output = [];
        if (isset($this->additionalEmailRecipients)) {
            $output['additionalEmailRecipients'] = $this->additionalEmailRecipients;
        }
        $output['invoicePeriod'] = $this->invoicePeriod;
        $output['paymentSettings'] = match (true) {
            default => throw new InvalidArgumentException("input cannot be mapped to any valid type"),
            ($this->paymentSettings) instanceof PaymentSettingsDebit, ($this->paymentSettings) instanceof PaymentSettingsInvoice => $this->paymentSettings->toJson(),
        };
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
    }
}
