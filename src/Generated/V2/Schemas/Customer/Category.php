<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Customer;

use InvalidArgumentException;

class Category
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'id' => [
                'type' => 'string',
            ],
            'isPublic' => [
                'type' => 'boolean',
            ],
            'name' => [
                'type' => 'string',
            ],
            'useAgencyDomainPrices' => [
                'type' => 'boolean',
            ],
            'useAgencySslPrices' => [
                'type' => 'boolean',
            ],
        ],
        'required' => [
            'id',
            'name',
            'isPublic',
            'useAgencyDomainPrices',
            'useAgencySslPrices',
        ],
        'type' => 'object',
    ];

    /**
     * @var string
     */
    private string $id;

    /**
     * @var bool
     */
    private bool $isPublic;

    /**
     * @var string
     */
    private string $name;

    /**
     * @var bool
     */
    private bool $useAgencyDomainPrices;

    /**
     * @var bool
     */
    private bool $useAgencySslPrices;

    /**
     * @param string $id
     * @param bool $isPublic
     * @param string $name
     * @param bool $useAgencyDomainPrices
     * @param bool $useAgencySslPrices
     */
    public function __construct(string $id, bool $isPublic, string $name, bool $useAgencyDomainPrices, bool $useAgencySslPrices)
    {
        $this->id = $id;
        $this->isPublic = $isPublic;
        $this->name = $name;
        $this->useAgencyDomainPrices = $useAgencyDomainPrices;
        $this->useAgencySslPrices = $useAgencySslPrices;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return bool
     */
    public function getIsPublic(): bool
    {
        return $this->isPublic;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return bool
     */
    public function getUseAgencyDomainPrices(): bool
    {
        return $this->useAgencyDomainPrices;
    }

    /**
     * @return bool
     */
    public function getUseAgencySslPrices(): bool
    {
        return $this->useAgencySslPrices;
    }

    /**
     * @param string $id
     * @return self
     */
    public function withId(string $id): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($id, static::$schema['properties']['id']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->id = $id;

        return $clone;
    }

    /**
     * @param bool $isPublic
     * @return self
     */
    public function withIsPublic(bool $isPublic): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($isPublic, static::$schema['properties']['isPublic']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->isPublic = $isPublic;

        return $clone;
    }

    /**
     * @param string $name
     * @return self
     */
    public function withName(string $name): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($name, static::$schema['properties']['name']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->name = $name;

        return $clone;
    }

    /**
     * @param bool $useAgencyDomainPrices
     * @return self
     */
    public function withUseAgencyDomainPrices(bool $useAgencyDomainPrices): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($useAgencyDomainPrices, static::$schema['properties']['useAgencyDomainPrices']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->useAgencyDomainPrices = $useAgencyDomainPrices;

        return $clone;
    }

    /**
     * @param bool $useAgencySslPrices
     * @return self
     */
    public function withUseAgencySslPrices(bool $useAgencySslPrices): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($useAgencySslPrices, static::$schema['properties']['useAgencySslPrices']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->useAgencySslPrices = $useAgencySslPrices;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return Category Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): Category
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $id = $input->{'id'};
        $isPublic = (bool)($input->{'isPublic'});
        $name = $input->{'name'};
        $useAgencyDomainPrices = (bool)($input->{'useAgencyDomainPrices'});
        $useAgencySslPrices = (bool)($input->{'useAgencySslPrices'});

        $obj = new self($id, $isPublic, $name, $useAgencyDomainPrices, $useAgencySslPrices);

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
        $output['id'] = $this->id;
        $output['isPublic'] = $this->isPublic;
        $output['name'] = $this->name;
        $output['useAgencyDomainPrices'] = $this->useAgencyDomainPrices;
        $output['useAgencySslPrices'] = $this->useAgencySslPrices;

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
