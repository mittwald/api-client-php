<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Misc\VerificationVerifyAddress;

use InvalidArgumentException;
use JsonSchema\Validator;

class VerificationVerifyAddressRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'city' => [
                'example' => 'Bremen',
                'type' => 'string',
            ],
            'country' => [
                'description' => 'Accepts the whole english or german name as well as the ISO 3166-2 country codes.',
                'example' => 'DE',
                'type' => 'string',
            ],
            'street' => [
                'description' => 'Includes the house number.',
                'example' => 'Bremer Straße 1',
                'type' => 'string',
            ],
            'zip' => [
                'example' => '28203',
                'type' => 'string',
            ],
        ],
        'required' => [
            'street',
            'zip',
            'city',
            'country',
        ],
        'type' => 'object',
    ];

    private string $city;

    /**
     * Accepts the whole english or german name as well as the ISO 3166-2 country codes.
     */
    private string $country;

    /**
     * Includes the house number.
     */
    private string $street;

    private string $zip;

    public function __construct(string $city, string $country, string $street, string $zip)
    {
        $this->city = $city;
        $this->country = $country;
        $this->street = $street;
        $this->zip = $zip;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function getStreet(): string
    {
        return $this->street;
    }

    public function getZip(): string
    {
        return $this->zip;
    }

    public function withCity(string $city): self
    {
        $validator = new Validator();
        $validator->validate($city, self::$schema['properties']['city']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->city = $city;

        return $clone;
    }

    public function withCountry(string $country): self
    {
        $validator = new Validator();
        $validator->validate($country, self::$schema['properties']['country']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->country = $country;

        return $clone;
    }

    public function withStreet(string $street): self
    {
        $validator = new Validator();
        $validator->validate($street, self::$schema['properties']['street']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->street = $street;

        return $clone;
    }

    public function withZip(string $zip): self
    {
        $validator = new Validator();
        $validator->validate($zip, self::$schema['properties']['zip']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->zip = $zip;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return VerificationVerifyAddressRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): VerificationVerifyAddressRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $city = $input->{'city'};
        $country = $input->{'country'};
        $street = $input->{'street'};
        $zip = $input->{'zip'};

        $obj = new self($city, $country, $street, $zip);

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
        $output['city'] = $this->city;
        $output['country'] = $this->country;
        $output['street'] = $this->street;
        $output['zip'] = $this->zip;

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
