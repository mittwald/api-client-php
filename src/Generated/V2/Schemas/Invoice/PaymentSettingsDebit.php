<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Invoice;

use InvalidArgumentException;

class PaymentSettingsDebit
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'accountHolder' => [
                'example' => 'Ada Lovelace',
                'type' => 'string',
            ],
            'bic' => [
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
            'bic',
            'accountHolder',
        ],
        'type' => 'object',
    ];

    /**
     * @var string
     */
    private string $accountHolder;

    /**
     * @var string
     */
    private string $bic;

    /**
     * @var string
     */
    private string $iban;

    /**
     * @var PaymentSettingsDebitMethod
     */
    private PaymentSettingsDebitMethod $method;

    /**
     * @param string $accountHolder
     * @param string $bic
     * @param string $iban
     * @param PaymentSettingsDebitMethod $method
     */
    public function __construct(string $accountHolder, string $bic, string $iban, PaymentSettingsDebitMethod $method)
    {
        $this->accountHolder = $accountHolder;
        $this->bic = $bic;
        $this->iban = $iban;
        $this->method = $method;
    }

    /**
     * @return string
     */
    public function getAccountHolder(): string
    {
        return $this->accountHolder;
    }

    /**
     * @return string
     */
    public function getBic(): string
    {
        return $this->bic;
    }

    /**
     * @return string
     */
    public function getIban(): string
    {
        return $this->iban;
    }

    /**
     * @return PaymentSettingsDebitMethod
     */
    public function getMethod(): PaymentSettingsDebitMethod
    {
        return $this->method;
    }

    /**
     * @param string $accountHolder
     * @return self
     */
    public function withAccountHolder(string $accountHolder): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($accountHolder, static::$schema['properties']['accountHolder']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->accountHolder = $accountHolder;

        return $clone;
    }

    /**
     * @param string $bic
     * @return self
     */
    public function withBic(string $bic): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($bic, static::$schema['properties']['bic']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->bic = $bic;

        return $clone;
    }

    /**
     * @param string $iban
     * @return self
     */
    public function withIban(string $iban): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($iban, static::$schema['properties']['iban']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->iban = $iban;

        return $clone;
    }

    /**
     * @param PaymentSettingsDebitMethod $method
     * @return self
     */
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
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $accountHolder = $input->{'accountHolder'};
        $bic = $input->{'bic'};
        $iban = $input->{'iban'};
        $method = PaymentSettingsDebitMethod::from($input->{'method'});

        $obj = new self($accountHolder, $bic, $iban, $method);

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
        $output['bic'] = $this->bic;
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
}
