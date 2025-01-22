<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Article;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.article.ReadableArticle.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class ReadableArticle
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'addons' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.article.ArticleAddons',
                ],
                'type' => 'array',
            ],
            'articleId' => [
                'example' => 'PS23-BASIC-0001',
                'minLength' => 3,
                'type' => 'string',
            ],
            'attributes' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.article.ArticleAttributes',
                ],
                'type' => 'array',
            ],
            'balanceAddonKey' => [
                'example' => 'inclusive_domains',
                'type' => 'string',
            ],
            'contractDurationInMonth' => [
                'example' => 0,
                'maximum' => 42,
                'minimum' => 0,
                'type' => 'number',
            ],
            'description' => [
                'example' => 'proSpace without dedicated resources',
                'type' => 'string',
            ],
            'forcedInvoicingPeriodInMonth' => [
                'example' => 0,
                'minimum' => 0,
                'type' => 'number',
            ],
            'hasIndependentContractPeriod' => [
                'type' => 'boolean',
            ],
            'hideOnInvoice' => [
                'type' => 'boolean',
            ],
            'machineType' => [
                'properties' => [
                    'cpu' => [
                        'example' => 1,
                        'type' => 'string',
                    ],
                    'memory' => [
                        'example' => 10,
                        'type' => 'string',
                    ],
                    'name' => [
                        'example' => 'psplus-shared',
                        'type' => 'string',
                    ],
                ],
                'required' => [
                    'name',
                    'cpu',
                    'memory',
                ],
                'type' => 'object',
            ],
            'modifierArticles' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.article.ReadableModifierArticleOptions',
                ],
                'type' => 'array',
            ],
            'name' => [
                'example' => 'proSpace lite',
                'minLength' => 3,
                'type' => 'string',
            ],
            'orderable' => [
                'enum' => [
                    'forbidden',
                    'internal',
                    'beta_testing',
                    'full',
                    'deprecated',
                ],
                'type' => 'string',
            ],
            'possibleArticleChanges' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.article.ReadableChangeArticleOptions',
                ],
                'type' => 'array',
            ],
            'price' => [
                'example' => 1000,
                'type' => 'number',
            ],
            'tags' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.article.ArticleTag',
                ],
                'type' => 'array',
            ],
            'template' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.article.ArticleTemplate',
            ],
        ],
        'required' => [
            'articleId',
            'name',
            'contractDurationInMonth',
            'orderable',
            'template',
        ],
        'type' => 'object',
    ];

    /**
     * @var ArticleAddons[]|null
     */
    private ?array $addons = null;

    private string $articleId;

    /**
     * @var ArticleAttributes[]|null
     */
    private ?array $attributes = null;

    private ?string $balanceAddonKey = null;

    private int|float $contractDurationInMonth;

    private ?string $description = null;

    private int|float|null $forcedInvoicingPeriodInMonth = null;

    private ?bool $hasIndependentContractPeriod = null;

    private ?bool $hideOnInvoice = null;

    private ?ReadableArticleMachineType $machineType = null;

    /**
     * @var ReadableModifierArticleOptions[]|null
     */
    private ?array $modifierArticles = null;

    private string $name;

    private ReadableArticleOrderable $orderable;

    /**
     * @var ReadableChangeArticleOptions[]|null
     */
    private ?array $possibleArticleChanges = null;

    private int|float|null $price = null;

    /**
     * @var ArticleTag[]|null
     */
    private ?array $tags = null;

    private ArticleTemplate $template;

    /**
     * @param int|float $contractDurationInMonth
     */
    public function __construct(string $articleId, int|float $contractDurationInMonth, string $name, ReadableArticleOrderable $orderable, ArticleTemplate $template)
    {
        $this->articleId = $articleId;
        $this->contractDurationInMonth = $contractDurationInMonth;
        $this->name = $name;
        $this->orderable = $orderable;
        $this->template = $template;
    }

    /**
     * @return ArticleAddons[]|null
     */
    public function getAddons(): ?array
    {
        return $this->addons ?? null;
    }

    public function getArticleId(): string
    {
        return $this->articleId;
    }

    /**
     * @return ArticleAttributes[]|null
     */
    public function getAttributes(): ?array
    {
        return $this->attributes ?? null;
    }

    public function getBalanceAddonKey(): ?string
    {
        return $this->balanceAddonKey ?? null;
    }

    public function getContractDurationInMonth(): int|float
    {
        return $this->contractDurationInMonth;
    }

    public function getDescription(): ?string
    {
        return $this->description ?? null;
    }

    public function getForcedInvoicingPeriodInMonth(): int|float|null
    {
        return $this->forcedInvoicingPeriodInMonth;
    }

    public function getHasIndependentContractPeriod(): ?bool
    {
        return $this->hasIndependentContractPeriod ?? null;
    }

    public function getHideOnInvoice(): ?bool
    {
        return $this->hideOnInvoice ?? null;
    }

    public function getMachineType(): ?ReadableArticleMachineType
    {
        return $this->machineType ?? null;
    }

    /**
     * @return ReadableModifierArticleOptions[]|null
     */
    public function getModifierArticles(): ?array
    {
        return $this->modifierArticles ?? null;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getOrderable(): ReadableArticleOrderable
    {
        return $this->orderable;
    }

    /**
     * @return ReadableChangeArticleOptions[]|null
     */
    public function getPossibleArticleChanges(): ?array
    {
        return $this->possibleArticleChanges ?? null;
    }

    public function getPrice(): int|float|null
    {
        return $this->price;
    }

    /**
     * @return ArticleTag[]|null
     */
    public function getTags(): ?array
    {
        return $this->tags ?? null;
    }

    public function getTemplate(): ArticleTemplate
    {
        return $this->template;
    }

    /**
     * @param ArticleAddons[] $addons
     */
    public function withAddons(array $addons): self
    {
        $clone = clone $this;
        $clone->addons = $addons;

        return $clone;
    }

    public function withoutAddons(): self
    {
        $clone = clone $this;
        unset($clone->addons);

        return $clone;
    }

    public function withArticleId(string $articleId): self
    {
        $validator = new Validator();
        $validator->validate($articleId, self::$schema['properties']['articleId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->articleId = $articleId;

        return $clone;
    }

    /**
     * @param ArticleAttributes[] $attributes
     */
    public function withAttributes(array $attributes): self
    {
        $clone = clone $this;
        $clone->attributes = $attributes;

        return $clone;
    }

    public function withoutAttributes(): self
    {
        $clone = clone $this;
        unset($clone->attributes);

        return $clone;
    }

    public function withBalanceAddonKey(string $balanceAddonKey): self
    {
        $validator = new Validator();
        $validator->validate($balanceAddonKey, self::$schema['properties']['balanceAddonKey']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->balanceAddonKey = $balanceAddonKey;

        return $clone;
    }

    public function withoutBalanceAddonKey(): self
    {
        $clone = clone $this;
        unset($clone->balanceAddonKey);

        return $clone;
    }

    /**
     * @param int|float $contractDurationInMonth
     */
    public function withContractDurationInMonth(int|float $contractDurationInMonth): self
    {
        $validator = new Validator();
        $validator->validate($contractDurationInMonth, self::$schema['properties']['contractDurationInMonth']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->contractDurationInMonth = $contractDurationInMonth;

        return $clone;
    }

    public function withDescription(string $description): self
    {
        $validator = new Validator();
        $validator->validate($description, self::$schema['properties']['description']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->description = $description;

        return $clone;
    }

    public function withoutDescription(): self
    {
        $clone = clone $this;
        unset($clone->description);

        return $clone;
    }

    /**
     * @param int|float $forcedInvoicingPeriodInMonth
     */
    public function withForcedInvoicingPeriodInMonth(int|float $forcedInvoicingPeriodInMonth): self
    {
        $validator = new Validator();
        $validator->validate($forcedInvoicingPeriodInMonth, self::$schema['properties']['forcedInvoicingPeriodInMonth']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->forcedInvoicingPeriodInMonth = $forcedInvoicingPeriodInMonth;

        return $clone;
    }

    public function withoutForcedInvoicingPeriodInMonth(): self
    {
        $clone = clone $this;
        unset($clone->forcedInvoicingPeriodInMonth);

        return $clone;
    }

    public function withHasIndependentContractPeriod(bool $hasIndependentContractPeriod): self
    {
        $validator = new Validator();
        $validator->validate($hasIndependentContractPeriod, self::$schema['properties']['hasIndependentContractPeriod']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->hasIndependentContractPeriod = $hasIndependentContractPeriod;

        return $clone;
    }

    public function withoutHasIndependentContractPeriod(): self
    {
        $clone = clone $this;
        unset($clone->hasIndependentContractPeriod);

        return $clone;
    }

    public function withHideOnInvoice(bool $hideOnInvoice): self
    {
        $validator = new Validator();
        $validator->validate($hideOnInvoice, self::$schema['properties']['hideOnInvoice']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->hideOnInvoice = $hideOnInvoice;

        return $clone;
    }

    public function withoutHideOnInvoice(): self
    {
        $clone = clone $this;
        unset($clone->hideOnInvoice);

        return $clone;
    }

    public function withMachineType(ReadableArticleMachineType $machineType): self
    {
        $clone = clone $this;
        $clone->machineType = $machineType;

        return $clone;
    }

    public function withoutMachineType(): self
    {
        $clone = clone $this;
        unset($clone->machineType);

        return $clone;
    }

    /**
     * @param ReadableModifierArticleOptions[] $modifierArticles
     */
    public function withModifierArticles(array $modifierArticles): self
    {
        $clone = clone $this;
        $clone->modifierArticles = $modifierArticles;

        return $clone;
    }

    public function withoutModifierArticles(): self
    {
        $clone = clone $this;
        unset($clone->modifierArticles);

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

    public function withOrderable(ReadableArticleOrderable $orderable): self
    {
        $clone = clone $this;
        $clone->orderable = $orderable;

        return $clone;
    }

    /**
     * @param ReadableChangeArticleOptions[] $possibleArticleChanges
     */
    public function withPossibleArticleChanges(array $possibleArticleChanges): self
    {
        $clone = clone $this;
        $clone->possibleArticleChanges = $possibleArticleChanges;

        return $clone;
    }

    public function withoutPossibleArticleChanges(): self
    {
        $clone = clone $this;
        unset($clone->possibleArticleChanges);

        return $clone;
    }

    /**
     * @param int|float $price
     */
    public function withPrice(int|float $price): self
    {
        $validator = new Validator();
        $validator->validate($price, self::$schema['properties']['price']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->price = $price;

        return $clone;
    }

    public function withoutPrice(): self
    {
        $clone = clone $this;
        unset($clone->price);

        return $clone;
    }

    /**
     * @param ArticleTag[] $tags
     */
    public function withTags(array $tags): self
    {
        $clone = clone $this;
        $clone->tags = $tags;

        return $clone;
    }

    public function withoutTags(): self
    {
        $clone = clone $this;
        unset($clone->tags);

        return $clone;
    }

    public function withTemplate(ArticleTemplate $template): self
    {
        $clone = clone $this;
        $clone->template = $template;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ReadableArticle Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ReadableArticle
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $addons = null;
        if (isset($input->{'addons'})) {
            $addons = array_map(fn (array|object $i): ArticleAddons => ArticleAddons::buildFromInput($i, validate: $validate), $input->{'addons'});
        }
        $articleId = $input->{'articleId'};
        $attributes = null;
        if (isset($input->{'attributes'})) {
            $attributes = array_map(fn (array|object $i): ArticleAttributes => ArticleAttributes::buildFromInput($i, validate: $validate), $input->{'attributes'});
        }
        $balanceAddonKey = null;
        if (isset($input->{'balanceAddonKey'})) {
            $balanceAddonKey = $input->{'balanceAddonKey'};
        }
        $contractDurationInMonth = str_contains((string)($input->{'contractDurationInMonth'}), '.') ? (float)($input->{'contractDurationInMonth'}) : (int)($input->{'contractDurationInMonth'});
        $description = null;
        if (isset($input->{'description'})) {
            $description = $input->{'description'};
        }
        $forcedInvoicingPeriodInMonth = null;
        if (isset($input->{'forcedInvoicingPeriodInMonth'})) {
            $forcedInvoicingPeriodInMonth = str_contains((string)($input->{'forcedInvoicingPeriodInMonth'}), '.') ? (float)($input->{'forcedInvoicingPeriodInMonth'}) : (int)($input->{'forcedInvoicingPeriodInMonth'});
        }
        $hasIndependentContractPeriod = null;
        if (isset($input->{'hasIndependentContractPeriod'})) {
            $hasIndependentContractPeriod = (bool)($input->{'hasIndependentContractPeriod'});
        }
        $hideOnInvoice = null;
        if (isset($input->{'hideOnInvoice'})) {
            $hideOnInvoice = (bool)($input->{'hideOnInvoice'});
        }
        $machineType = null;
        if (isset($input->{'machineType'})) {
            $machineType = ReadableArticleMachineType::buildFromInput($input->{'machineType'}, validate: $validate);
        }
        $modifierArticles = null;
        if (isset($input->{'modifierArticles'})) {
            $modifierArticles = array_map(fn (array|object $i): ReadableModifierArticleOptions => ReadableModifierArticleOptions::buildFromInput($i, validate: $validate), $input->{'modifierArticles'});
        }
        $name = $input->{'name'};
        $orderable = ReadableArticleOrderable::from($input->{'orderable'});
        $possibleArticleChanges = null;
        if (isset($input->{'possibleArticleChanges'})) {
            $possibleArticleChanges = array_map(fn (array|object $i): ReadableChangeArticleOptions => ReadableChangeArticleOptions::buildFromInput($i, validate: $validate), $input->{'possibleArticleChanges'});
        }
        $price = null;
        if (isset($input->{'price'})) {
            $price = str_contains((string)($input->{'price'}), '.') ? (float)($input->{'price'}) : (int)($input->{'price'});
        }
        $tags = null;
        if (isset($input->{'tags'})) {
            $tags = array_map(fn (array|object $i): ArticleTag => ArticleTag::buildFromInput($i, validate: $validate), $input->{'tags'});
        }
        $template = ArticleTemplate::buildFromInput($input->{'template'}, validate: $validate);

        $obj = new self($articleId, $contractDurationInMonth, $name, $orderable, $template);
        $obj->addons = $addons;
        $obj->attributes = $attributes;
        $obj->balanceAddonKey = $balanceAddonKey;
        $obj->description = $description;
        $obj->forcedInvoicingPeriodInMonth = $forcedInvoicingPeriodInMonth;
        $obj->hasIndependentContractPeriod = $hasIndependentContractPeriod;
        $obj->hideOnInvoice = $hideOnInvoice;
        $obj->machineType = $machineType;
        $obj->modifierArticles = $modifierArticles;
        $obj->possibleArticleChanges = $possibleArticleChanges;
        $obj->price = $price;
        $obj->tags = $tags;
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
            $output['addons'] = array_map(fn (ArticleAddons $i): array => $i->toJson(), $this->addons);
        }
        $output['articleId'] = $this->articleId;
        if (isset($this->attributes)) {
            $output['attributes'] = array_map(fn (ArticleAttributes $i): array => $i->toJson(), $this->attributes);
        }
        if (isset($this->balanceAddonKey)) {
            $output['balanceAddonKey'] = $this->balanceAddonKey;
        }
        $output['contractDurationInMonth'] = $this->contractDurationInMonth;
        if (isset($this->description)) {
            $output['description'] = $this->description;
        }
        if (isset($this->forcedInvoicingPeriodInMonth)) {
            $output['forcedInvoicingPeriodInMonth'] = $this->forcedInvoicingPeriodInMonth;
        }
        if (isset($this->hasIndependentContractPeriod)) {
            $output['hasIndependentContractPeriod'] = $this->hasIndependentContractPeriod;
        }
        if (isset($this->hideOnInvoice)) {
            $output['hideOnInvoice'] = $this->hideOnInvoice;
        }
        if (isset($this->machineType)) {
            $output['machineType'] = ($this->machineType)->toJson();
        }
        if (isset($this->modifierArticles)) {
            $output['modifierArticles'] = array_map(fn (ReadableModifierArticleOptions $i): array => $i->toJson(), $this->modifierArticles);
        }
        $output['name'] = $this->name;
        $output['orderable'] = ($this->orderable)->value;
        if (isset($this->possibleArticleChanges)) {
            $output['possibleArticleChanges'] = array_map(fn (ReadableChangeArticleOptions $i): array => $i->toJson(), $this->possibleArticleChanges);
        }
        if (isset($this->price)) {
            $output['price'] = $this->price;
        }
        if (isset($this->tags)) {
            $output['tags'] = array_map(fn (ArticleTag $i): array => $i->toJson(), $this->tags);
        }
        $output['template'] = $this->template->toJson();

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
        if (isset($this->machineType)) {
            $this->machineType = clone $this->machineType;
        }
    }
}
