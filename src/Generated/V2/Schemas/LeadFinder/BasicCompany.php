<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\LeadFinder;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.lead-finder.BasicCompany.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class BasicCompany
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'city' => [
                'type' => 'string',
            ],
            'employeeCount' => [
                'type' => 'number',
            ],
            'foundingYear' => [
                'type' => 'number',
            ],
            'salesVolume' => [
                'type' => 'number',
            ],
        ],
        'required' => [
            'employeeCount',
            'foundingYear',
            'salesVolume',
            'city',
        ],
        'type' => 'object',
    ];

    private string $city;

    private int|float $employeeCount;

    private int|float $foundingYear;

    private int|float $salesVolume;

    public function __construct(string $city, int|float $employeeCount, int|float $foundingYear, int|float $salesVolume)
    {
        $this->city = $city;
        $this->employeeCount = $employeeCount;
        $this->foundingYear = $foundingYear;
        $this->salesVolume = $salesVolume;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getEmployeeCount(): int|float
    {
        return $this->employeeCount;
    }

    public function getFoundingYear(): int|float
    {
        return $this->foundingYear;
    }

    public function getSalesVolume(): int|float
    {
        return $this->salesVolume;
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

    public function withEmployeeCount(int|float $employeeCount): self
    {
        $validator = new Validator();
        $validator->validate($employeeCount, self::$schema['properties']['employeeCount']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->employeeCount = $employeeCount;

        return $clone;
    }

    public function withFoundingYear(int|float $foundingYear): self
    {
        $validator = new Validator();
        $validator->validate($foundingYear, self::$schema['properties']['foundingYear']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->foundingYear = $foundingYear;

        return $clone;
    }

    public function withSalesVolume(int|float $salesVolume): self
    {
        $validator = new Validator();
        $validator->validate($salesVolume, self::$schema['properties']['salesVolume']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->salesVolume = $salesVolume;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return BasicCompany Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): BasicCompany
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $city = $input->{'city'};
        $employeeCount = str_contains((string)($input->{'employeeCount'}), '.') ? (float)($input->{'employeeCount'}) : (int)($input->{'employeeCount'});
        $foundingYear = str_contains((string)($input->{'foundingYear'}), '.') ? (float)($input->{'foundingYear'}) : (int)($input->{'foundingYear'});
        $salesVolume = str_contains((string)($input->{'salesVolume'}), '.') ? (float)($input->{'salesVolume'}) : (int)($input->{'salesVolume'});

        $obj = new self($city, $employeeCount, $foundingYear, $salesVolume);

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
        $output['employeeCount'] = $this->employeeCount;
        $output['foundingYear'] = $this->foundingYear;
        $output['salesVolume'] = $this->salesVolume;

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
