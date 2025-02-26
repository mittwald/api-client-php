<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Invoice;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.invoice.PaymentSettingsDebit.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class PaymentSettingsDebit
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'accountHolder' => [
                'example' => 'Ada Lovelace',
                'type' => 'string',
            ],
            'bic' => [
                'description' => 'Optional. Required for payments outside of the European Union.',
                'example' => 'DEUTDEDB123',
                'type' => 'string',
            ],
            'iban' => [
                'example' => 'DE12345678901234567890',
                'type' => 'string',
            ],
            'method' => [
                'enum' => [
                    'debit',
                ],
                'type' => 'string',
            ],
        ],
        'required' => [
            'method',
            'iban',
            'accountHolder',
        ],
        'type' => 'object',
    ];

    private string $accountHolder;

    /**
     * Optional. Required for payments outside of the European Union.
     */
    private ?string $bic = null;

    private string $iban;

    private PaymentSettingsDebitMethod $method;

    public function __construct(string $accountHolder, string $iban, PaymentSettingsDebitMethod $method)
    {
        $this->accountHolder = $accountHolder;
        $this->iban = $iban;
        $this->method = $method;
    }

    public function getAccountHolder(): string
    {
        return $this->accountHolder;
    }

    public function getBic(): ?string
    {
        return $this->bic ?? null;
    }

    public function getIban(): string
    {
        return $this->iban;
    }

    public function getMethod(): PaymentSettingsDebitMethod
    {
        return $this->method;
    }

    public function withAccountHolder(string $accountHolder): self
    {
        $validator = new Validator();
        $validator->validate($accountHolder, self::$schema['properties']['accountHolder']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->accountHolder = $accountHolder;

        return $clone;
    }

    public function withBic(string $bic): self
    {
        $validator = new Validator();
        $validator->validate($bic, self::$schema['properties']['bic']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->bic = $bic;

        return $clone;
    }

    public function withoutBic(): self
    {
        $clone = clone $this;
        unset($clone->bic);

        return $clone;
    }

    public function withIban(string $iban): self
    {
        $validator = new Validator();
        $validator->validate($iban, self::$schema['properties']['iban']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->iban = $iban;

        return $clone;
    }

    public function withMethod(PaymentSettingsDebitMethod $method): self
    {
        $clone = clone $this;
        $clone->method = $method;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return PaymentSettingsDebit Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): PaymentSettingsDebit
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $accountHolder = $input->{'accountHolder'};
        $bic = null;
        if (isset($input->{'bic'})) {
            $bic = $input->{'bic'};
        }
        $iban = $input->{'iban'};
        $method = PaymentSettingsDebitMethod::from($input->{'method'});

        $obj = new self($accountHolder, $iban, $method);
        $obj->bic = $bic;
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
        $output['accountHolder'] = $this->accountHolder;
        if (isset($this->bic)) {
            $output['bic'] = $this->bic;
        }
        $output['iban'] = $this->iban;
        $output['method'] = ($this->method)->value;

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
