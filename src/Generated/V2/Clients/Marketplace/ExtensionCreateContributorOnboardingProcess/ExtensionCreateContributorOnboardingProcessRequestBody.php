<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionCreateContributorOnboardingProcess;

use InvalidArgumentException;
use JsonSchema\Validator;

class ExtensionCreateContributorOnboardingProcessRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'shippingCountryRestriction' => [
                'description' => 'You can restrict your customers to certain countries.',
                'enum' => [
                    'onlyDomestic',
                ],
                'type' => 'string',
            ],
        ],
        'type' => 'object',
    ];

    /**
     * You can restrict your customers to certain countries.
     */
    private ?ExtensionCreateContributorOnboardingProcessRequestBodyShippingCountryRestriction $shippingCountryRestriction = null;

    /**
     *
     */
    public function __construct()
    {
    }

    public function getShippingCountryRestriction(): ?ExtensionCreateContributorOnboardingProcessRequestBodyShippingCountryRestriction
    {
        return $this->shippingCountryRestriction ?? null;
    }

    public function withShippingCountryRestriction(ExtensionCreateContributorOnboardingProcessRequestBodyShippingCountryRestriction $shippingCountryRestriction): self
    {
        $clone = clone $this;
        $clone->shippingCountryRestriction = $shippingCountryRestriction;

        return $clone;
    }

    public function withoutShippingCountryRestriction(): self
    {
        $clone = clone $this;
        unset($clone->shippingCountryRestriction);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ExtensionCreateContributorOnboardingProcessRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ExtensionCreateContributorOnboardingProcessRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $shippingCountryRestriction = null;
        if (isset($input->{'shippingCountryRestriction'})) {
            $shippingCountryRestriction = ExtensionCreateContributorOnboardingProcessRequestBodyShippingCountryRestriction::from($input->{'shippingCountryRestriction'});
        }

        $obj = new self();
        $obj->shippingCountryRestriction = $shippingCountryRestriction;
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
        if (isset($this->shippingCountryRestriction)) {
            $output['shippingCountryRestriction'] = ($this->shippingCountryRestriction)->value;
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
