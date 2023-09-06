<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Contract;

use InvalidArgumentException;

class Article
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'amount' => [
                'example' => 1,
                'minimum' => 1,
                'type' => 'integer',
            ],
            'articleTemplateId' => [
                'example' => 'a1b8f0e9-904f-4716-a1c0-81ccf5342a56',
                'type' => 'string',
            ],
            'description' => [
                'example' => 'Musterbeschreibung',
                'type' => 'string',
            ],
            'id' => [
                'example' => 'a1b8f0e9-904f-4716-a1c0-81ccf5342a56',
                'type' => 'string',
            ],
            'name' => [
                'example' => 'Musterartikel',
                'type' => 'string',
            ],
            'unitPrice' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.contract.Price',
            ],
        ],
        'required' => [
            'id',
            'name',
            'description',
            'articleTemplateId',
            'amount',
            'unitPrice',
        ],
        'type' => 'object',
    ];

    /**
     * @var int
     */
    private int $amount;

    /**
     * @var string
     */
    private string $articleTemplateId;

    /**
     * @var string
     */
    private string $description;

    /**
     * @var string
     */
    private string $id;

    /**
     * @var string
     */
    private string $name;

    /**
     * @var Price
     */
    private Price $unitPrice;

    /**
     * @param int $amount
     * @param string $articleTemplateId
     * @param string $description
     * @param string $id
     * @param string $name
     * @param Price $unitPrice
     */
    public function __construct(int $amount, string $articleTemplateId, string $description, string $id, string $name, Price $unitPrice)
    {
        $this->amount = $amount;
        $this->articleTemplateId = $articleTemplateId;
        $this->description = $description;
        $this->id = $id;
        $this->name = $name;
        $this->unitPrice = $unitPrice;
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @return string
     */
    public function getArticleTemplateId(): string
    {
        return $this->articleTemplateId;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return Price
     */
    public function getUnitPrice(): Price
    {
        return $this->unitPrice;
    }

    /**
     * @param int $amount
     * @return self
     */
    public function withAmount(int $amount): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($amount, static::$schema['properties']['amount']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->amount = $amount;

        return $clone;
    }

    /**
     * @param string $articleTemplateId
     * @return self
     */
    public function withArticleTemplateId(string $articleTemplateId): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($articleTemplateId, static::$schema['properties']['articleTemplateId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->articleTemplateId = $articleTemplateId;

        return $clone;
    }

    /**
     * @param string $description
     * @return self
     */
    public function withDescription(string $description): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($description, static::$schema['properties']['description']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->description = $description;

        return $clone;
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
     * @param Price $unitPrice
     * @return self
     */
    public function withUnitPrice(Price $unitPrice): self
    {
        $clone = clone $this;
        $clone->unitPrice = $unitPrice;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return Article Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): Article
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $amount = (int)($input->{'amount'});
        $articleTemplateId = $input->{'articleTemplateId'};
        $description = $input->{'description'};
        $id = $input->{'id'};
        $name = $input->{'name'};
        $unitPrice = Price::buildFromInput($input->{'unitPrice'}, validate: $validate);

        $obj = new self($amount, $articleTemplateId, $description, $id, $name, $unitPrice);

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
        $output['amount'] = $this->amount;
        $output['articleTemplateId'] = $this->articleTemplateId;
        $output['description'] = $this->description;
        $output['id'] = $this->id;
        $output['name'] = $this->name;
        $output['unitPrice'] = $this->unitPrice->toJson();

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
