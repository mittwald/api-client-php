<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressForwardAddresses;

use InvalidArgumentException;
use JsonSchema\Validator;

class UpdateMailAddressForwardAddressesRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'forwardAddresses' => [
                'items' => [
                    'format' => 'idn-email',
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
        ],
        'required' => [
            'forwardAddresses',
        ],
    ];

    /**
     * @var string[]
     */
    private array $forwardAddresses;

    /**
     * @param string[] $forwardAddresses
     */
    public function __construct(array $forwardAddresses)
    {
        $this->forwardAddresses = $forwardAddresses;
    }

    /**
     * @return string[]
     */
    public function getForwardAddresses(): array
    {
        return $this->forwardAddresses;
    }

    /**
     * @param string[] $forwardAddresses
     */
    public function withForwardAddresses(array $forwardAddresses): self
    {
        $validator = new Validator();
        $validator->validate($forwardAddresses, self::$internalValidationSchema['properties']['forwardAddresses']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->forwardAddresses = $forwardAddresses;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return UpdateMailAddressForwardAddressesRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): UpdateMailAddressForwardAddressesRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $forwardAddresses = $input->{'forwardAddresses'};

        $obj = new self($forwardAddresses);

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
        $output['forwardAddresses'] = $this->forwardAddresses;

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
