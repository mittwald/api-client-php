<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionUpdateExtensionPricing;

use InvalidArgumentException;
use JsonSchema\Validator;

class ExtensionUpdateExtensionPricingOKResponseBodyPriceChangeConsequence
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'contributorConsequence' => [
                'description' => 'Description of the consequence for the Extension from the perspective of the contributor. Values: * "NONE": No consequence. * "EDIT_BLOCK": The Extension will be blocked for editing by the contributor for 30 days.
',
                'enum' => [
                    'NONE',
                    'EDIT_BLOCK',
                ],
                'type' => 'string',
            ],
            'globalCustomerConsequence' => [
                'description' => 'Description of the consequence for all Customers of the Extension. Values: * "NONE": No consequence. * "INFO": Customers will be informed about the upcoming changes to their contracts. * "CONFIRM_REQUIRED": Customers will have to confirm or select the accepted changes to their contracts within 30 days or their contracts will be automatically cancelled.
',
                'enum' => [
                    'NONE',
                    'INFO',
                    'CONFIRM_REQUIRED',
                ],
                'type' => 'string',
            ],
            'variantConsequences' => [
                'items' => [
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
                ],
                'type' => 'array',
            ],
        ],
        'required' => [
            'contributorConsequence',
            'globalCustomerConsequence',
            'variantConsequences',
        ],
        'type' => 'object',
    ];

    /**
     * Description of the consequence for the Extension from the perspective of the contributor. Values: * "NONE": No consequence. * "EDIT_BLOCK": The Extension will be blocked for editing by the contributor for 30 days.
     *
     */
    private ExtensionUpdateExtensionPricingOKResponseBodyPriceChangeConsequenceContributorConsequence $contributorConsequence;

    /**
     * Description of the consequence for all Customers of the Extension. Values: * "NONE": No consequence. * "INFO": Customers will be informed about the upcoming changes to their contracts. * "CONFIRM_REQUIRED": Customers will have to confirm or select the accepted changes to their contracts within 30 days or their contracts will be automatically cancelled.
     *
     */
    private ExtensionUpdateExtensionPricingOKResponseBodyPriceChangeConsequenceGlobalCustomerConsequence $globalCustomerConsequence;

    /**
     * @var ExtensionUpdateExtensionPricingOKResponseBodyPriceChangeConsequenceVariantConsequencesItem[]
     */
    private array $variantConsequences;

    /**
     * @param ExtensionUpdateExtensionPricingOKResponseBodyPriceChangeConsequenceVariantConsequencesItem[] $variantConsequences
     */
    public function __construct(ExtensionUpdateExtensionPricingOKResponseBodyPriceChangeConsequenceContributorConsequence $contributorConsequence, ExtensionUpdateExtensionPricingOKResponseBodyPriceChangeConsequenceGlobalCustomerConsequence $globalCustomerConsequence, array $variantConsequences)
    {
        $this->contributorConsequence = $contributorConsequence;
        $this->globalCustomerConsequence = $globalCustomerConsequence;
        $this->variantConsequences = $variantConsequences;
    }

    public function getContributorConsequence(): ExtensionUpdateExtensionPricingOKResponseBodyPriceChangeConsequenceContributorConsequence
    {
        return $this->contributorConsequence;
    }

    public function getGlobalCustomerConsequence(): ExtensionUpdateExtensionPricingOKResponseBodyPriceChangeConsequenceGlobalCustomerConsequence
    {
        return $this->globalCustomerConsequence;
    }

    /**
     * @return ExtensionUpdateExtensionPricingOKResponseBodyPriceChangeConsequenceVariantConsequencesItem[]
     */
    public function getVariantConsequences(): array
    {
        return $this->variantConsequences;
    }

    public function withContributorConsequence(ExtensionUpdateExtensionPricingOKResponseBodyPriceChangeConsequenceContributorConsequence $contributorConsequence): self
    {
        $clone = clone $this;
        $clone->contributorConsequence = $contributorConsequence;

        return $clone;
    }

    public function withGlobalCustomerConsequence(ExtensionUpdateExtensionPricingOKResponseBodyPriceChangeConsequenceGlobalCustomerConsequence $globalCustomerConsequence): self
    {
        $clone = clone $this;
        $clone->globalCustomerConsequence = $globalCustomerConsequence;

        return $clone;
    }

    /**
     * @param ExtensionUpdateExtensionPricingOKResponseBodyPriceChangeConsequenceVariantConsequencesItem[] $variantConsequences
     */
    public function withVariantConsequences(array $variantConsequences): self
    {
        $clone = clone $this;
        $clone->variantConsequences = $variantConsequences;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ExtensionUpdateExtensionPricingOKResponseBodyPriceChangeConsequence Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ExtensionUpdateExtensionPricingOKResponseBodyPriceChangeConsequence
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $contributorConsequence = ExtensionUpdateExtensionPricingOKResponseBodyPriceChangeConsequenceContributorConsequence::from($input->{'contributorConsequence'});
        $globalCustomerConsequence = ExtensionUpdateExtensionPricingOKResponseBodyPriceChangeConsequenceGlobalCustomerConsequence::from($input->{'globalCustomerConsequence'});
        $variantConsequences = array_map(fn (array|object $i): ExtensionUpdateExtensionPricingOKResponseBodyPriceChangeConsequenceVariantConsequencesItem => ExtensionUpdateExtensionPricingOKResponseBodyPriceChangeConsequenceVariantConsequencesItem::buildFromInput($i, validate: $validate), $input->{'variantConsequences'});

        $obj = new self($contributorConsequence, $globalCustomerConsequence, $variantConsequences);

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
        $output['contributorConsequence'] = ($this->contributorConsequence)->value;
        $output['globalCustomerConsequence'] = ($this->globalCustomerConsequence)->value;
        $output['variantConsequences'] = array_map(fn (ExtensionUpdateExtensionPricingOKResponseBodyPriceChangeConsequenceVariantConsequencesItem $i) => $i->toJson(), $this->variantConsequences);

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
        $this->variantConsequences = array_map(fn (ExtensionUpdateExtensionPricingOKResponseBodyPriceChangeConsequenceVariantConsequencesItem $i) => clone $i, $this->variantConsequences);
    }
}
