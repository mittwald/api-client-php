<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorUpdateBillingInformation;

use InvalidArgumentException;
use JsonSchema\Validator;

class ContributorUpdateBillingInformationRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'invoiceFooter' => [
                'example' => 'USTID-Nr: DE123456789',
                'type' => 'string',
            ],
        ],
        'type' => 'object',
    ];

    private ?string $invoiceFooter = null;

    /**
     *
     */
    public function __construct()
    {
    }

    public function getInvoiceFooter(): ?string
    {
        return $this->invoiceFooter ?? null;
    }

    public function withInvoiceFooter(string $invoiceFooter): self
    {
        $validator = new Validator();
        $validator->validate($invoiceFooter, self::$internalValidationSchema['properties']['invoiceFooter']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->invoiceFooter = $invoiceFooter;

        return $clone;
    }

    public function withoutInvoiceFooter(): self
    {
        $clone = clone $this;
        unset($clone->invoiceFooter);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ContributorUpdateBillingInformationRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ContributorUpdateBillingInformationRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $invoiceFooter = null;
        if (isset($input->{'invoiceFooter'})) {
            $invoiceFooter = $input->{'invoiceFooter'};
        }

        $obj = new self();
        $obj->invoiceFooter = $invoiceFooter;
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
        if (isset($this->invoiceFooter)) {
            $output['invoiceFooter'] = $this->invoiceFooter;
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
    }
}
