<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\LeadFinder;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.lead-finder.DetailCompany.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class DetailCompany
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'required' => [
            'city',
            'targetGroup',
            'coreProduct',
            'name',
        ],
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
            'coreProduct' => [
                'items' => [
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
            'name' => [
                'type' => 'string',
            ],
            'targetGroup' => [
                'items' => [
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
        ],
    ];

    private string $city;

    private int|float|null $employeeCount = null;

    private int|float|null $foundingYear = null;

    private int|float|null $salesVolume = null;

    /**
     * @var string[]
     */
    private array $coreProduct;

    private string $name;

    /**
     * @var string[]
     */
    private array $targetGroup;

    /**
     * @param string[] $coreProduct
     * @param string[] $targetGroup
     */
    public function __construct(string $city, array $coreProduct, string $name, array $targetGroup)
    {
        $this->city = $city;
        $this->coreProduct = $coreProduct;
        $this->name = $name;
        $this->targetGroup = $targetGroup;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getEmployeeCount(): int|float|null
    {
        return $this->employeeCount;
    }

    public function getFoundingYear(): int|float|null
    {
        return $this->foundingYear;
    }

    public function getSalesVolume(): int|float|null
    {
        return $this->salesVolume;
    }

    /**
     * @return string[]
     */
    public function getCoreProduct(): array
    {
        return $this->coreProduct;
    }

    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string[]
     */
    public function getTargetGroup(): array
    {
        return $this->targetGroup;
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

    public function withoutEmployeeCount(): self
    {
        $clone = clone $this;
        unset($clone->employeeCount);

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

    public function withoutFoundingYear(): self
    {
        $clone = clone $this;
        unset($clone->foundingYear);

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

    public function withoutSalesVolume(): self
    {
        $clone = clone $this;
        unset($clone->salesVolume);

        return $clone;
    }

    /**
     * @param string[] $coreProduct
     */
    public function withCoreProduct(array $coreProduct): self
    {
        $validator = new Validator();
        $validator->validate($coreProduct, self::$schema['properties']['coreProduct']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->coreProduct = $coreProduct;

        return $clone;
    }

    public function withName(string $name): self
    {
        $validator = new Validator();
        $validator->validate($name, self::$schema['properties']['name']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->name = $name;

        return $clone;
    }

    /**
     * @param string[] $targetGroup
     */
    public function withTargetGroup(array $targetGroup): self
    {
        $validator = new Validator();
        $validator->validate($targetGroup, self::$schema['properties']['targetGroup']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->targetGroup = $targetGroup;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return DetailCompany Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): DetailCompany
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $city = $input->{'city'};
        $employeeCount = null;
        if (isset($input->{'employeeCount'})) {
            $employeeCount = str_contains((string)($input->{'employeeCount'}), '.') ? (float)($input->{'employeeCount'}) : (int)($input->{'employeeCount'});
        }
        $foundingYear = null;
        if (isset($input->{'foundingYear'})) {
            $foundingYear = str_contains((string)($input->{'foundingYear'}), '.') ? (float)($input->{'foundingYear'}) : (int)($input->{'foundingYear'});
        }
        $salesVolume = null;
        if (isset($input->{'salesVolume'})) {
            $salesVolume = str_contains((string)($input->{'salesVolume'}), '.') ? (float)($input->{'salesVolume'}) : (int)($input->{'salesVolume'});
        }
        $coreProduct = $input->{'coreProduct'};
        $name = $input->{'name'};
        $targetGroup = $input->{'targetGroup'};

        $obj = new self($city, $coreProduct, $name, $targetGroup);
        $obj->employeeCount = $employeeCount;
        $obj->foundingYear = $foundingYear;
        $obj->salesVolume = $salesVolume;
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
        if (isset($this->employeeCount)) {
            $output['employeeCount'] = $this->employeeCount;
        }
        if (isset($this->foundingYear)) {
            $output['foundingYear'] = $this->foundingYear;
        }
        if (isset($this->salesVolume)) {
            $output['salesVolume'] = $this->salesVolume;
        }
        $output['coreProduct'] = $this->coreProduct;
        $output['name'] = $this->name;
        $output['targetGroup'] = $this->targetGroup;

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
