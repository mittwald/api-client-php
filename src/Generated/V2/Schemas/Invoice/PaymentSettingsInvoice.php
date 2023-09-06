<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Invoice;

use InvalidArgumentException;

class PaymentSettingsInvoice
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'method' => [
                'enum' => [
                    'invoice',
                ],
                'type' => 'string',
            ],
        ],
        'required' => [
            'method',
        ],
        'type' => 'object',
    ];

    /**
     * @var PaymentSettingsInvoiceMethod
     */
    private PaymentSettingsInvoiceMethod $method;

    /**
     * @param PaymentSettingsInvoiceMethod $method
     */
    public function __construct(PaymentSettingsInvoiceMethod $method)
    {
        $this->method = $method;
    }

    /**
     * @return PaymentSettingsInvoiceMethod
     */
    public function getMethod(): PaymentSettingsInvoiceMethod
    {
        return $this->method;
    }

    /**
     * @param PaymentSettingsInvoiceMethod $method
     * @return self
     */
    public function withMethod(PaymentSettingsInvoiceMethod $method): self
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
     * @return PaymentSettingsInvoice Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): PaymentSettingsInvoice
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $method = PaymentSettingsInvoiceMethod::from($input->{'method'});

        $obj = new self($method);

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
