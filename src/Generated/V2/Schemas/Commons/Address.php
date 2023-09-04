<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Commons;

class Address
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'type' => 'object',
        'properties' => [
            'street' => [
                'type' => 'string',
                'example' => 'Königsberger Straße',
            ],
            'houseNumber' => [
                'type' => 'string',
                'example' => '4-6',
            ],
            'city' => [
                'type' => 'string',
                'example' => 'Espelkamp',
            ],
            'zip' => [
                'type' => 'string',
                'example' => '32339',
            ],
            'countryCode' => [
                'type' => 'string',
                'example' => 'DE',
                'description' => 'ISO 3166-1 alpha-2 country code',
            ],
        ],
        'required' => [
            'street',
            'houseNumber',
            'city',
            'zip',
            'countryCode',
        ],
    ];

    /**
     * @var string
     */
    private string $street;

    /**
     * @var string
     */
    private string $houseNumber;

    /**
     * @var string
     */
    private string $city;

    /**
     * @var string
     */
    private string $zip;

    /**
     * ISO 3166-1 alpha-2 country code
     *
     * @var string
     */
    private string $countryCode;

    /**
     * @param string $street
     * @param string $houseNumber
     * @param string $city
     * @param string $zip
     * @param string $countryCode
     */
    public function __construct(string $street, string $houseNumber, string $city, string $zip, string $countryCode)
    {
        $this->street = $street;
        $this->houseNumber = $houseNumber;
        $this->city = $city;
        $this->zip = $zip;
        $this->countryCode = $countryCode;
    }

    /**
     * @return string
     */
    public function getStreet() : string
    {
        return $this->street;
    }

    /**
     * @return string
     */
    public function getHouseNumber() : string
    {
        return $this->houseNumber;
    }

    /**
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function getZip() : string
    {
        return $this->zip;
    }

    /**
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }

    /**
     * @param string $street
     * @return self
     */
    public function withStreet(string $street) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($street, static::$schema['properties']['street']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->street = $street;

        return $clone;
    }

    /**
     * @param string $houseNumber
     * @return self
     */
    public function withHouseNumber(string $houseNumber) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($houseNumber, static::$schema['properties']['houseNumber']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->houseNumber = $houseNumber;

        return $clone;
    }

    /**
     * @param string $city
     * @return self
     */
    public function withCity(string $city) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($city, static::$schema['properties']['city']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->city = $city;

        return $clone;
    }

    /**
     * @param string $zip
     * @return self
     */
    public function withZip(string $zip) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($zip, static::$schema['properties']['zip']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->zip = $zip;

        return $clone;
    }

    /**
     * @param string $countryCode
     * @return self
     */
    public function withCountryCode(string $countryCode) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($countryCode, static::$schema['properties']['countryCode']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->countryCode = $countryCode;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return Address Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : Address
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $street = $input->{'street'};
        $houseNumber = $input->{'houseNumber'};
        $city = $input->{'city'};
        $zip = $input->{'zip'};
        $countryCode = $input->{'countryCode'};

        $obj = new self($street, $houseNumber, $city, $zip, $countryCode);

        return $obj;
    }

    /**
     * Converts this object back to a simple array that can be JSON-serialized
     *
     * @return array Converted array
     */
    public function toJson() : array
    {
        $output = [];
        $output['street'] = $this->street;
        $output['houseNumber'] = $this->houseNumber;
        $output['city'] = $this->city;
        $output['zip'] = $this->zip;
        $output['countryCode'] = $this->countryCode;

        return $output;
    }

    /**
     * Validates an input array
     *
     * @param array|object $input Input data
     * @param bool $return Return instead of throwing errors
     * @return bool Validation result
     * @throws \InvalidArgumentException
     */
    public static function validateInput(array|object $input, bool $return = false) : bool
    {
        $validator = new \JsonSchema\Validator();
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        $validator->validate($input, static::$schema);

        if (!$validator->isValid() && !$return) {
            $errors = array_map(function(array $e): string {
                return $e["property"] . ": " . $e["message"];
            }, $validator->getErrors());
            throw new \InvalidArgumentException(join(", ", $errors));
        }

        return $validator->isValid();
    }

    public function __clone()
    {
    }
}

