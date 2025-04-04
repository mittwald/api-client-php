<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionStartExtensionCheckout;

use InvalidArgumentException;
use JsonSchema\Validator;

class ExtensionStartExtensionCheckoutCreatedResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'checkoutUrl' => [
                'type' => 'string',
            ],
        ],
        'type' => 'object',
    ];

    private ?string $checkoutUrl = null;

    /**
     *
     */
    public function __construct()
    {
    }

    public function getCheckoutUrl(): ?string
    {
        return $this->checkoutUrl ?? null;
    }

    public function withCheckoutUrl(string $checkoutUrl): self
    {
        $validator = new Validator();
        $validator->validate($checkoutUrl, self::$schema['properties']['checkoutUrl']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->checkoutUrl = $checkoutUrl;

        return $clone;
    }

    public function withoutCheckoutUrl(): self
    {
        $clone = clone $this;
        unset($clone->checkoutUrl);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ExtensionStartExtensionCheckoutCreatedResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ExtensionStartExtensionCheckoutCreatedResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $checkoutUrl = null;
        if (isset($input->{'checkoutUrl'})) {
            $checkoutUrl = $input->{'checkoutUrl'};
        }

        $obj = new self();
        $obj->checkoutUrl = $checkoutUrl;
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
        if (isset($this->checkoutUrl)) {
            $output['checkoutUrl'] = $this->checkoutUrl;
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
