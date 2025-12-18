<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionUpdateExtensionPricing;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;

class ExtensionUpdateExtensionPricingOKResponseBodyPriceChangeConsequenceVariantConsequencesItem
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'consequence' => [
                'description' => 'The individual consequence for customers of a specific variant of the Extension. Values: * "NONE": No consequence. * "INFO": Customers will be informed about the upcoming changes to their contracts. * "CONFIRM_REQUIRED": Customers will have to confirm or select the accepted changes to their contracts within 30 days or their contracts will be automatically cancelled.
',
                'enum' => [
                    'NONE',
                    'INFO',
                    'CONFIRM_REQUIRED',
                ],
                'type' => 'string',
            ],
            'deletionDeadline' => [
                'description' => 'The date the variant will ne deleted',
                'format' => 'date-time',
                'type' => 'string',
            ],
            'variantKey' => [
                'description' => 'The key of the variant of the Extension.',
                'type' => 'string',
            ],
        ],
        'type' => 'object',
    ];

    /**
     * The individual consequence for customers of a specific variant of the Extension. Values: * "NONE": No consequence. * "INFO": Customers will be informed about the upcoming changes to their contracts. * "CONFIRM_REQUIRED": Customers will have to confirm or select the accepted changes to their contracts within 30 days or their contracts will be automatically cancelled.
     *
     */
    private ?ExtensionUpdateExtensionPricingOKResponseBodyPriceChangeConsequenceVariantConsequencesItemConsequence $consequence = null;

    /**
     * The date the variant will ne deleted
     */
    private ?DateTime $deletionDeadline = null;

    /**
     * The key of the variant of the Extension.
     */
    private ?string $variantKey = null;

    /**
     *
     */
    public function __construct()
    {
    }

    public function getConsequence(): ?ExtensionUpdateExtensionPricingOKResponseBodyPriceChangeConsequenceVariantConsequencesItemConsequence
    {
        return $this->consequence ?? null;
    }

    public function getDeletionDeadline(): ?DateTime
    {
        return $this->deletionDeadline ?? null;
    }

    public function getVariantKey(): ?string
    {
        return $this->variantKey ?? null;
    }

    public function withConsequence(ExtensionUpdateExtensionPricingOKResponseBodyPriceChangeConsequenceVariantConsequencesItemConsequence $consequence): self
    {
        $clone = clone $this;
        $clone->consequence = $consequence;

        return $clone;
    }

    public function withoutConsequence(): self
    {
        $clone = clone $this;
        unset($clone->consequence);

        return $clone;
    }

    public function withDeletionDeadline(DateTime $deletionDeadline): self
    {
        $clone = clone $this;
        $clone->deletionDeadline = $deletionDeadline;

        return $clone;
    }

    public function withoutDeletionDeadline(): self
    {
        $clone = clone $this;
        unset($clone->deletionDeadline);

        return $clone;
    }

    public function withVariantKey(string $variantKey): self
    {
        $validator = new Validator();
        $validator->validate($variantKey, self::$internalValidationSchema['properties']['variantKey']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->variantKey = $variantKey;

        return $clone;
    }

    public function withoutVariantKey(): self
    {
        $clone = clone $this;
        unset($clone->variantKey);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ExtensionUpdateExtensionPricingOKResponseBodyPriceChangeConsequenceVariantConsequencesItem Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ExtensionUpdateExtensionPricingOKResponseBodyPriceChangeConsequenceVariantConsequencesItem
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $consequence = null;
        if (isset($input->{'consequence'})) {
            $consequence = ExtensionUpdateExtensionPricingOKResponseBodyPriceChangeConsequenceVariantConsequencesItemConsequence::from($input->{'consequence'});
        }
        $deletionDeadline = null;
        if (isset($input->{'deletionDeadline'})) {
            $deletionDeadline = new DateTime($input->{'deletionDeadline'});
        }
        $variantKey = null;
        if (isset($input->{'variantKey'})) {
            $variantKey = $input->{'variantKey'};
        }

        $obj = new self();
        $obj->consequence = $consequence;
        $obj->deletionDeadline = $deletionDeadline;
        $obj->variantKey = $variantKey;
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
        if (isset($this->consequence)) {
            $output['consequence'] = ($this->consequence)->value;
        }
        if (isset($this->deletionDeadline)) {
            $output['deletionDeadline'] = ($this->deletionDeadline)->format(DateTime::ATOM);
        }
        if (isset($this->variantKey)) {
            $output['variantKey'] = $this->variantKey;
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
        if (isset($this->deletionDeadline)) {
            $this->deletionDeadline = clone $this->deletionDeadline;
        }
    }
}
