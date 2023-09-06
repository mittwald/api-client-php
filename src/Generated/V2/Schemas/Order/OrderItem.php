<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Order;

use InvalidArgumentException;
use JsonSchema\Validator;

class OrderItem
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'addons' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.order.Addons',
                ],
                'type' => 'array',
            ],
            'amount' => [
                'type' => 'number',
            ],
            'articleId' => [
                'example' => 'PS23-PLUS-0004',
                'type' => 'string',
            ],
            'articleTemplateName' => [
                'example' => 'Pro-Space-Hosting',
                'type' => 'string',
            ],
            'attributeConfiguration' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.order.AttributeConfiguration',
                ],
                'type' => 'array',
            ],
            'isInclusive' => [
                'type' => 'boolean',
            ],
            'orderItemId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'predefinedDomainAggregateId' => [
                'example' => 'aa38d836-fe72-4c43-aad3-9472b51edf61',
                'type' => 'string',
            ],
            'price' => [
                'example' => 1000,
                'type' => 'number',
            ],
            'reference' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.order.Reference',
            ],
        ],
        'required' => [
            'orderItemId',
            'articleId',
            'price',
            'isInclusive',
            'amount',
        ],
        'type' => 'object',
    ];

    /**
     * @var Addons[]|null
     */
    private ?array $addons = null;

    /**
     * @var int|float
     */
    private int|float $amount;

    /**
     * @var string
     */
    private string $articleId;

    /**
     * @var string|null
     */
    private ?string $articleTemplateName = null;

    /**
     * @var AttributeConfiguration[]|null
     */
    private ?array $attributeConfiguration = null;

    /**
     * @var bool
     */
    private bool $isInclusive;

    /**
     * @var string
     */
    private string $orderItemId;

    /**
     * @var string|null
     */
    private ?string $predefinedDomainAggregateId = null;

    /**
     * @var int|float
     */
    private int|float $price;

    /**
     * @var Reference|null
     */
    private ?Reference $reference = null;

    /**
     * @param int|float $amount
     * @param string $articleId
     * @param bool $isInclusive
     * @param string $orderItemId
     * @param int|float $price
     */
    public function __construct(int|float $amount, string $articleId, bool $isInclusive, string $orderItemId, int|float $price)
    {
        $this->amount = $amount;
        $this->articleId = $articleId;
        $this->isInclusive = $isInclusive;
        $this->orderItemId = $orderItemId;
        $this->price = $price;
    }

    /**
     * @return Addons[]|null
     */
    public function getAddons(): ?array
    {
        return $this->addons ?? null;
    }

    /**
     * @return int|float
     */
    public function getAmount(): int|float
    {
        return $this->amount;
    }

    /**
     * @return string
     */
    public function getArticleId(): string
    {
        return $this->articleId;
    }

    /**
     * @return string|null
     */
    public function getArticleTemplateName(): ?string
    {
        return $this->articleTemplateName ?? null;
    }

    /**
     * @return
     * AttributeConfiguration[]|null
     */
    public function getAttributeConfiguration(): ?array
    {
        return $this->attributeConfiguration ?? null;
    }

    /**
     * @return bool
     */
    public function getIsInclusive(): bool
    {
        return $this->isInclusive;
    }

    /**
     * @return string
     */
    public function getOrderItemId(): string
    {
        return $this->orderItemId;
    }

    /**
     * @return string|null
     */
    public function getPredefinedDomainAggregateId(): ?string
    {
        return $this->predefinedDomainAggregateId ?? null;
    }

    /**
     * @return int|float
     */
    public function getPrice(): int|float
    {
        return $this->price;
    }

    /**
     * @return Reference|null
     */
    public function getReference(): ?Reference
    {
        return $this->reference ?? null;
    }

    /**
     * @param Addons[] $addons
     * @return self
     */
    public function withAddons(array $addons): self
    {
        $clone = clone $this;
        $clone->addons = $addons;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutAddons(): self
    {
        $clone = clone $this;
        unset($clone->addons);

        return $clone;
    }

    /**
     * @param int|float $amount
     * @return self
     */
    public function withAmount(int|float $amount): self
    {
        $validator = new Validator();
        $validator->validate($amount, static::$schema['properties']['amount']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->amount = $amount;

        return $clone;
    }

    /**
     * @param string $articleId
     * @return self
     */
    public function withArticleId(string $articleId): self
    {
        $validator = new Validator();
        $validator->validate($articleId, static::$schema['properties']['articleId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->articleId = $articleId;

        return $clone;
    }

    /**
     * @param string $articleTemplateName
     * @return self
     */
    public function withArticleTemplateName(string $articleTemplateName): self
    {
        $validator = new Validator();
        $validator->validate($articleTemplateName, static::$schema['properties']['articleTemplateName']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->articleTemplateName = $articleTemplateName;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutArticleTemplateName(): self
    {
        $clone = clone $this;
        unset($clone->articleTemplateName);

        return $clone;
    }

    /**
     * @param AttributeConfiguration[] $attributeConfiguration
     * @return self
     */
    public function withAttributeConfiguration(array $attributeConfiguration): self
    {
        $clone = clone $this;
        $clone->attributeConfiguration = $attributeConfiguration;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutAttributeConfiguration(): self
    {
        $clone = clone $this;
        unset($clone->attributeConfiguration);

        return $clone;
    }

    /**
     * @param bool $isInclusive
     * @return self
     */
    public function withIsInclusive(bool $isInclusive): self
    {
        $validator = new Validator();
        $validator->validate($isInclusive, static::$schema['properties']['isInclusive']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->isInclusive = $isInclusive;

        return $clone;
    }

    /**
     * @param string $orderItemId
     * @return self
     */
    public function withOrderItemId(string $orderItemId): self
    {
        $validator = new Validator();
        $validator->validate($orderItemId, static::$schema['properties']['orderItemId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->orderItemId = $orderItemId;

        return $clone;
    }

    /**
     * @param string $predefinedDomainAggregateId
     * @return self
     */
    public function withPredefinedDomainAggregateId(string $predefinedDomainAggregateId): self
    {
        $validator = new Validator();
        $validator->validate($predefinedDomainAggregateId, static::$schema['properties']['predefinedDomainAggregateId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->predefinedDomainAggregateId = $predefinedDomainAggregateId;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutPredefinedDomainAggregateId(): self
    {
        $clone = clone $this;
        unset($clone->predefinedDomainAggregateId);

        return $clone;
    }

    /**
     * @param int|float $price
     * @return self
     */
    public function withPrice(int|float $price): self
    {
        $validator = new Validator();
        $validator->validate($price, static::$schema['properties']['price']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->price = $price;

        return $clone;
    }

    /**
     * @param Reference $reference
     * @return self
     */
    public function withReference(Reference $reference): self
    {
        $clone = clone $this;
        $clone->reference = $reference;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutReference(): self
    {
        $clone = clone $this;
        unset($clone->reference);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return OrderItem Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): OrderItem
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $addons = null;
        if (isset($input->{'addons'})) {
            $addons = array_map(fn (array $i): Addons => Addons::buildFromInput($i, validate: $validate), $input->{'addons'});
        }
        $amount = str_contains($input->{'amount'}, '.') ? (float)($input->{'amount'}) : (int)($input->{'amount'});
        $articleId = $input->{'articleId'};
        $articleTemplateName = null;
        if (isset($input->{'articleTemplateName'})) {
            $articleTemplateName = $input->{'articleTemplateName'};
        }
        $attributeConfiguration = null;
        if (isset($input->{'attributeConfiguration'})) {
            $attributeConfiguration = array_map(fn (array $i): AttributeConfiguration => AttributeConfiguration::buildFromInput($i, validate: $validate), $input->{'attributeConfiguration'});
        }
        $isInclusive = (bool)($input->{'isInclusive'});
        $orderItemId = $input->{'orderItemId'};
        $predefinedDomainAggregateId = null;
        if (isset($input->{'predefinedDomainAggregateId'})) {
            $predefinedDomainAggregateId = $input->{'predefinedDomainAggregateId'};
        }
        $price = str_contains($input->{'price'}, '.') ? (float)($input->{'price'}) : (int)($input->{'price'});
        $reference = null;
        if (isset($input->{'reference'})) {
            $reference = Reference::buildFromInput($input->{'reference'}, validate: $validate);
        }

        $obj = new self($amount, $articleId, $isInclusive, $orderItemId, $price);
        $obj->addons = $addons;
        $obj->articleTemplateName = $articleTemplateName;
        $obj->attributeConfiguration = $attributeConfiguration;
        $obj->predefinedDomainAggregateId = $predefinedDomainAggregateId;
        $obj->reference = $reference;
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
        if (isset($this->addons)) {
            $output['addons'] = array_map(fn (Addons $i): array => $i->toJson(), $this->addons);
        }
        $output['amount'] = $this->amount;
        $output['articleId'] = $this->articleId;
        if (isset($this->articleTemplateName)) {
            $output['articleTemplateName'] = $this->articleTemplateName;
        }
        if (isset($this->attributeConfiguration)) {
            $output['attributeConfiguration'] = array_map(fn (AttributeConfiguration $i): array => $i->toJson(), $this->attributeConfiguration);
        }
        $output['isInclusive'] = $this->isInclusive;
        $output['orderItemId'] = $this->orderItemId;
        if (isset($this->predefinedDomainAggregateId)) {
            $output['predefinedDomainAggregateId'] = $this->predefinedDomainAggregateId;
        }
        $output['price'] = $this->price;
        if (isset($this->reference)) {
            $output['reference'] = $this->reference->toJson();
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
        $validator = new Validator();
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
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
