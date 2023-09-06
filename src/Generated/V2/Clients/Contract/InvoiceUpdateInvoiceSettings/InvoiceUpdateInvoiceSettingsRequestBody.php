<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceUpdateInvoiceSettings;

use InvalidArgumentException;

class InvoiceUpdateInvoiceSettingsRequestBody
{
    public const method = 'put';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
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

    /**
     * @var int
     */
    private int $invoicePeriod;

    /**
     * @var \Mittwald\ApiClient\Generated\V2\Schemas\Invoice\PaymentSettingsDebit|\Mittwald\ApiClient\Generated\V2\Schemas\Invoice\PaymentSettingsInvoice
     */
    private \Mittwald\ApiClient\Generated\V2\Schemas\Invoice\PaymentSettingsDebit|\Mittwald\ApiClient\Generated\V2\Schemas\Invoice\PaymentSettingsInvoice $paymentSettings;

    /**
     * @var bool|null
     */
    private ?bool $printedInvoices = null;

    /**
     * @var \Mittwald\ApiClient\Generated\V2\Schemas\Invoice\Recipient|null
     */
    private ?\Mittwald\ApiClient\Generated\V2\Schemas\Invoice\Recipient $recipient = null;

    /**
     * @var bool|null
     */
    private ?bool $recipientSameAsOwner = null;

    /**
     * @var int|null
     */
    private ?int $targetDay = null;

    private array $headers = [

    ];

    /**
     * @param int $invoicePeriod
     * @param \Mittwald\ApiClient\Generated\V2\Schemas\Invoice\PaymentSettingsDebit|\Mittwald\ApiClient\Generated\V2\Schemas\Invoice\PaymentSettingsInvoice $paymentSettings
     */
    public function __construct(int $invoicePeriod, \Mittwald\ApiClient\Generated\V2\Schemas\Invoice\PaymentSettingsDebit|\Mittwald\ApiClient\Generated\V2\Schemas\Invoice\PaymentSettingsInvoice $paymentSettings)
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

    /**
     * @return int
     */
    public function getInvoicePeriod(): int
    {
        return $this->invoicePeriod;
    }

    /**
     * @return
     * \Mittwald\ApiClient\Generated\V2\Schemas\Invoice\PaymentSettingsDebit|\Mittwald\ApiClient\Generated\V2\Schemas\Invoice\PaymentSettingsInvoice
     */
    public function getPaymentSettings(): \Mittwald\ApiClient\Generated\V2\Schemas\Invoice\PaymentSettingsDebit|\Mittwald\ApiClient\Generated\V2\Schemas\Invoice\PaymentSettingsInvoice
    {
        return $this->paymentSettings;
    }

    /**
     * @return bool|null
     */
    public function getPrintedInvoices(): ?bool
    {
        return $this->printedInvoices ?? null;
    }

    /**
     * @return \Mittwald\ApiClient\Generated\V2\Schemas\Invoice\Recipient|null
     */
    public function getRecipient(): ?\Mittwald\ApiClient\Generated\V2\Schemas\Invoice\Recipient
    {
        return $this->recipient ?? null;
    }

    /**
     * @return bool|null
     */
    public function getRecipientSameAsOwner(): ?bool
    {
        return $this->recipientSameAsOwner ?? null;
    }

    /**
     * @return int|null
     */
    public function getTargetDay(): ?int
    {
        return $this->targetDay ?? null;
    }

    /**
     * @param string[] $additionalEmailRecipients
     * @return self
     */
    public function withAdditionalEmailRecipients(array $additionalEmailRecipients): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($additionalEmailRecipients, static::$schema['properties']['additionalEmailRecipients']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->additionalEmailRecipients = $additionalEmailRecipients;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutAdditionalEmailRecipients(): self
    {
        $clone = clone $this;
        unset($clone->additionalEmailRecipients);

        return $clone;
    }

    /**
     * @param int $invoicePeriod
     * @return self
     */
    public function withInvoicePeriod(int $invoicePeriod): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($invoicePeriod, static::$schema['properties']['invoicePeriod']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->invoicePeriod = $invoicePeriod;

        return $clone;
    }

    /**
     * @param \Mittwald\ApiClient\Generated\V2\Schemas\Invoice\PaymentSettingsDebit|\Mittwald\ApiClient\Generated\V2\Schemas\Invoice\PaymentSettingsInvoice $paymentSettings
     * @return self
     */
    public function withPaymentSettings(\Mittwald\ApiClient\Generated\V2\Schemas\Invoice\PaymentSettingsDebit|\Mittwald\ApiClient\Generated\V2\Schemas\Invoice\PaymentSettingsInvoice $paymentSettings): self
    {
        $clone = clone $this;
        $clone->paymentSettings = $paymentSettings;

        return $clone;
    }

    /**
     * @param bool $printedInvoices
     * @return self
     */
    public function withPrintedInvoices(bool $printedInvoices): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($printedInvoices, static::$schema['properties']['printedInvoices']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->printedInvoices = $printedInvoices;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutPrintedInvoices(): self
    {
        $clone = clone $this;
        unset($clone->printedInvoices);

        return $clone;
    }

    /**
     * @param \Mittwald\ApiClient\Generated\V2\Schemas\Invoice\Recipient $recipient
     * @return self
     */
    public function withRecipient(\Mittwald\ApiClient\Generated\V2\Schemas\Invoice\Recipient $recipient): self
    {
        $clone = clone $this;
        $clone->recipient = $recipient;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutRecipient(): self
    {
        $clone = clone $this;
        unset($clone->recipient);

        return $clone;
    }

    /**
     * @param bool $recipientSameAsOwner
     * @return self
     */
    public function withRecipientSameAsOwner(bool $recipientSameAsOwner): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($recipientSameAsOwner, static::$schema['properties']['recipientSameAsOwner']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->recipientSameAsOwner = $recipientSameAsOwner;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutRecipientSameAsOwner(): self
    {
        $clone = clone $this;
        unset($clone->recipientSameAsOwner);

        return $clone;
    }

    /**
     * @param int $targetDay
     * @return self
     */
    public function withTargetDay(int $targetDay): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($targetDay, static::$schema['properties']['targetDay']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->targetDay = $targetDay;

        return $clone;
    }

    /**
     * @return self
     */
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
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
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
            \Mittwald\ApiClient\Generated\V2\Schemas\Invoice\PaymentSettingsDebit::validateInput($input->{'paymentSettings'}, true) => \Mittwald\ApiClient\Generated\V2\Schemas\Invoice\PaymentSettingsDebit::buildFromInput($input->{'paymentSettings'}, validate: $validate),
            \Mittwald\ApiClient\Generated\V2\Schemas\Invoice\PaymentSettingsInvoice::validateInput($input->{'paymentSettings'}, true) => \Mittwald\ApiClient\Generated\V2\Schemas\Invoice\PaymentSettingsInvoice::buildFromInput($input->{'paymentSettings'}, validate: $validate),
        };
        $printedInvoices = null;
        if (isset($input->{'printedInvoices'})) {
            $printedInvoices = (bool)($input->{'printedInvoices'});
        }
        $recipient = null;
        if (isset($input->{'recipient'})) {
            $recipient = \Mittwald\ApiClient\Generated\V2\Schemas\Invoice\Recipient::buildFromInput($input->{'recipient'}, validate: $validate);
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
            ($this->paymentSettings) instanceof \Mittwald\ApiClient\Generated\V2\Schemas\Invoice\PaymentSettingsDebit, ($this->paymentSettings) instanceof \Mittwald\ApiClient\Generated\V2\Schemas\Invoice\PaymentSettingsInvoice => $this->paymentSettings->toJson(),
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
    }

    public function getUrl(): string
    {
        $mapped = $this->toJson();
        $customerId = urlencode($mapped['customerId']);
        return '/v2/customers/' . $customerId . '/invoice-settings';
    }

    public function getQuery(): array
    {
        $mapped = $this->toJson();
        $query = [];
        return $query;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function withHeader(string $name, string|array $value): self
    {
        $clone = clone $this;
        $clone->headers[$name] = $value;
        return $clone;
    }
}
