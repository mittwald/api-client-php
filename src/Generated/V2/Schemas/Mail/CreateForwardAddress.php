<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Mail;

use InvalidArgumentException;

class CreateForwardAddress
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'address' => [
                'format' => 'email',
                'type' => 'string',
            ],
            'forwardAddresses' => [
                'items' => [
                    'format' => 'email',
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
        ],
        'required' => [
            'address',
            'forwardAddresses',
        ],
        'type' => 'object',
    ];

    /**
     * @var string
     */
    private string $address;

    /**
     * @var string[]
     */
    private array $forwardAddresses;

    /**
     * @param string $address
     * @param string[] $forwardAddresses
     */
    public function __construct(string $address, array $forwardAddresses)
    {
        $this->address = $address;
        $this->forwardAddresses = $forwardAddresses;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @return string[]
     */
    public function getForwardAddresses(): array
    {
        return $this->forwardAddresses;
    }

    /**
     * @param string $address
     * @return self
     */
    public function withAddress(string $address): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($address, static::$schema['properties']['address']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->address = $address;

        return $clone;
    }

    /**
     * @param string[] $forwardAddresses
     * @return self
     */
    public function withForwardAddresses(array $forwardAddresses): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($forwardAddresses, static::$schema['properties']['forwardAddresses']);
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
     * @return CreateForwardAddress Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CreateForwardAddress
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $address = $input->{'address'};
        $forwardAddresses = $input->{'forwardAddresses'};

        $obj = new self($address, $forwardAddresses);

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
        $output['address'] = $this->address;
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
