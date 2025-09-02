<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\CustomerUpdatePaymentMethod;

use InvalidArgumentException;
use JsonSchema\Validator;

class CustomerUpdatePaymentMethodRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'customReturnUrl' => [
                'example' => 'https://mittwald.studio/app/marketplace',
                'format' => 'uri',
                'type' => 'string',
            ],
        ],
        'type' => 'object',
    ];

    private ?string $customReturnUrl = null;

    /**
     *
     */
    public function __construct()
    {
    }

    public function getCustomReturnUrl(): ?string
    {
        return $this->customReturnUrl ?? null;
    }

    public function withCustomReturnUrl(string $customReturnUrl): self
    {
        $validator = new Validator();
        $validator->validate($customReturnUrl, self::$internalValidationSchema['properties']['customReturnUrl']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->customReturnUrl = $customReturnUrl;

        return $clone;
    }

    public function withoutCustomReturnUrl(): self
    {
        $clone = clone $this;
        unset($clone->customReturnUrl);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CustomerUpdatePaymentMethodRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CustomerUpdatePaymentMethodRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $customReturnUrl = null;
        if (isset($input->{'customReturnUrl'})) {
            $customReturnUrl = $input->{'customReturnUrl'};
        }

        $obj = new self();
        $obj->customReturnUrl = $customReturnUrl;
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
        if (isset($this->customReturnUrl)) {
            $output['customReturnUrl'] = $this->customReturnUrl;
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
