<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Signup;

class Location
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'city' => [
                'example' => 'Espelkamp',
                'type' => 'string',
            ],
            'country' => [
                'example' => 'DE',
                'type' => 'string',
            ],
            'ipAddress' => [
                'format' => 'ipv4',
                'type' => 'string',
            ],
        ],
        'type' => 'object',
    ];

    /**
     * @var string|null
     */
    private ?string $city = null;

    /**
     * @var string|null
     */
    private ?string $country = null;

    /**
     * @var string|null
     */
    private ?string $ipAddress = null;

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return string|null
     */
    public function getCity() : ?string
    {
        return $this->city ?? null;
    }

    /**
     * @return string|null
     */
    public function getCountry() : ?string
    {
        return $this->country ?? null;
    }

    /**
     * @return string|null
     */
    public function getIpAddress() : ?string
    {
        return $this->ipAddress ?? null;
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
     * @return self
     */
    public function withoutCity() : self
    {
        $clone = clone $this;
        unset($clone->city);

        return $clone;
    }

    /**
     * @param string $country
     * @return self
     */
    public function withCountry(string $country) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($country, static::$schema['properties']['country']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->country = $country;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutCountry() : self
    {
        $clone = clone $this;
        unset($clone->country);

        return $clone;
    }

    /**
     * @param string $ipAddress
     * @return self
     */
    public function withIpAddress(string $ipAddress) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($ipAddress, static::$schema['properties']['ipAddress']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->ipAddress = $ipAddress;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutIpAddress() : self
    {
        $clone = clone $this;
        unset($clone->ipAddress);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return Location Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : Location
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $city = null;
        if (isset($input->{'city'})) {
            $city = $input->{'city'};
        }
        $country = null;
        if (isset($input->{'country'})) {
            $country = $input->{'country'};
        }
        $ipAddress = null;
        if (isset($input->{'ipAddress'})) {
            $ipAddress = $input->{'ipAddress'};
        }

        $obj = new self();
        $obj->city = $city;
        $obj->country = $country;
        $obj->ipAddress = $ipAddress;
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
        if (isset($this->city)) {
            $output['city'] = $this->city;
        }
        if (isset($this->country)) {
            $output['country'] = $this->country;
        }
        if (isset($this->ipAddress)) {
            $output['ipAddress'] = $this->ipAddress;
        }

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

