<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionUpdateExtensionPricing;

use InvalidArgumentException;
use JsonSchema\Validator;

class ExtensionUpdateExtensionPricingRequestBodyAlternative1
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'dryRun' => [
                'default' => false,
                'description' => 'If set to true, the request will be validated but not executed.',
                'type' => 'boolean',
            ],
            'priceInCents' => [
                'description' => 'Price in cents.',
                'type' => 'number',
            ],
        ],
        'required' => [
            'priceInCents',
        ],
        'type' => 'object',
    ];

    /**
     * If set to true, the request will be validated but not executed.
     */
    private bool $dryRun = false;

    /**
     * Price in cents.
     */
    private int|float $priceInCents;

    public function __construct(int|float $priceInCents)
    {
        $this->priceInCents = $priceInCents;
    }

    public function getDryRun(): bool
    {
        return $this->dryRun;
    }

    public function getPriceInCents(): int|float
    {
        return $this->priceInCents;
    }

    public function withDryRun(bool $dryRun): self
    {
        $validator = new Validator();
        $validator->validate($dryRun, self::$internalValidationSchema['properties']['dryRun']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->dryRun = $dryRun;

        return $clone;
    }

    public function withPriceInCents(int|float $priceInCents): self
    {
        $validator = new Validator();
        $validator->validate($priceInCents, self::$internalValidationSchema['properties']['priceInCents']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->priceInCents = $priceInCents;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ExtensionUpdateExtensionPricingRequestBodyAlternative1 Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ExtensionUpdateExtensionPricingRequestBodyAlternative1
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $dryRun = false;
        if (isset($input->{'dryRun'})) {
            $dryRun = (bool)($input->{'dryRun'});
        }
        $priceInCents = str_contains((string)($input->{'priceInCents'}), '.') ? (float)($input->{'priceInCents'}) : (int)($input->{'priceInCents'});

        $obj = new self($priceInCents);
        $obj->dryRun = $dryRun;
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
        $output['dryRun'] = $this->dryRun;
        $output['priceInCents'] = $this->priceInCents;

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
