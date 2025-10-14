<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionUpdateExtensionPricing;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;

class ExtensionUpdateExtensionPricingOKResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'extensionId' => [
                'description' => 'The ID of the Extension.',
                'format' => 'uuid',
                'type' => 'string',
            ],
            'nextPossiblePriceChange' => [
                'description' => 'The time until which the contributor is blocked from changing the price again.',
                'format' => 'date-time',
                'type' => 'string',
            ],
            'priceChangeConsequence' => [
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
            ],
        ],
        'required' => [
            'extensionId',
            'priceChangeConsequence',
        ],
        'type' => 'object',
    ];

    /**
     * The ID of the Extension.
     */
    private string $extensionId;

    /**
     * The time until which the contributor is blocked from changing the price again.
     */
    private ?DateTime $nextPossiblePriceChange = null;

    private ExtensionUpdateExtensionPricingOKResponseBodyPriceChangeConsequence $priceChangeConsequence;

    public function __construct(string $extensionId, ExtensionUpdateExtensionPricingOKResponseBodyPriceChangeConsequence $priceChangeConsequence)
    {
        $this->extensionId = $extensionId;
        $this->priceChangeConsequence = $priceChangeConsequence;
    }

    public function getExtensionId(): string
    {
        return $this->extensionId;
    }

    public function getNextPossiblePriceChange(): ?DateTime
    {
        return $this->nextPossiblePriceChange ?? null;
    }

    public function getPriceChangeConsequence(): ExtensionUpdateExtensionPricingOKResponseBodyPriceChangeConsequence
    {
        return $this->priceChangeConsequence;
    }

    public function withExtensionId(string $extensionId): self
    {
        $validator = new Validator();
        $validator->validate($extensionId, self::$internalValidationSchema['properties']['extensionId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->extensionId = $extensionId;

        return $clone;
    }

    public function withNextPossiblePriceChange(DateTime $nextPossiblePriceChange): self
    {
        $clone = clone $this;
        $clone->nextPossiblePriceChange = $nextPossiblePriceChange;

        return $clone;
    }

    public function withoutNextPossiblePriceChange(): self
    {
        $clone = clone $this;
        unset($clone->nextPossiblePriceChange);

        return $clone;
    }

    public function withPriceChangeConsequence(ExtensionUpdateExtensionPricingOKResponseBodyPriceChangeConsequence $priceChangeConsequence): self
    {
        $clone = clone $this;
        $clone->priceChangeConsequence = $priceChangeConsequence;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ExtensionUpdateExtensionPricingOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ExtensionUpdateExtensionPricingOKResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $extensionId = $input->{'extensionId'};
        $nextPossiblePriceChange = null;
        if (isset($input->{'nextPossiblePriceChange'})) {
            $nextPossiblePriceChange = new DateTime($input->{'nextPossiblePriceChange'});
        }
        $priceChangeConsequence = ExtensionUpdateExtensionPricingOKResponseBodyPriceChangeConsequence::buildFromInput($input->{'priceChangeConsequence'}, validate: $validate);

        $obj = new self($extensionId, $priceChangeConsequence);
        $obj->nextPossiblePriceChange = $nextPossiblePriceChange;
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
        $output['extensionId'] = $this->extensionId;
        if (isset($this->nextPossiblePriceChange)) {
            $output['nextPossiblePriceChange'] = ($this->nextPossiblePriceChange)->format(DateTime::ATOM);
        }
        $output['priceChangeConsequence'] = ($this->priceChangeConsequence)->toJson();

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
        if (isset($this->nextPossiblePriceChange)) {
            $this->nextPossiblePriceChange = clone $this->nextPossiblePriceChange;
        }
        $this->priceChangeConsequence = clone $this->priceChangeConsequence;
    }
}
