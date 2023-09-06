<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Article;

use InvalidArgumentException;
use JsonSchema\Validator;

class ReadableArticle
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'additionalArticles' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.article.ReadableBookableArticleOptions',
                ],
                'type' => 'array',
            ],
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
                'example' => 'proSpace without dedicated ressources',
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
            'picture' => [
                'example' => 'https://mittwald.example/picture.png',
                'format' => 'uri',
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
            'description',
            'contractDurationInMonth',
            'orderable',
            'template',
        ],
        'type' => 'object',
    ];

    /**
     * @var ReadableBookableArticleOptions[]|null
     */
    private ?array $additionalArticles = null;

    /**
     * @var ArticleAddons[]|null
     */
    private ?array $addons = null;

    /**
     * @var string
     */
    private string $articleId;

    /**
     * @var ArticleAttributes[]|null
     */
    private ?array $attributes = null;

    /**
     * @var string|null
     */
    private ?string $balanceAddonKey = null;

    /**
     * @var int|float
     */
    private int|float $contractDurationInMonth;

    /**
     * @var string
     */
    private string $description;

    /**
     * @var int|float|null
     */
    private int|float|null $forcedInvoicingPeriodInMonth = null;

    /**
     * @var bool|null
     */
    private ?bool $hasIndependentContractPeriod = null;

    /**
     * @var bool|null
     */
    private ?bool $hideOnInvoice = null;

    /**
     * @var ReadableArticleMachineType|null
     */
    private ?ReadableArticleMachineType $machineType = null;

    /**
     * @var ReadableModifierArticleOptions[]|null
     */
    private ?array $modifierArticles = null;

    /**
     * @var string
     */
    private string $name;

    /**
     * @var ReadableArticleOrderable
     */
    private ReadableArticleOrderable $orderable;

    /**
     * @var string|null
     */
    private ?string $picture = null;

    /**
     * @var ReadableChangeArticleOptions[]|null
     */
    private ?array $possibleArticleChanges = null;

    /**
     * @var int|float|null
     */
    private int|float|null $price = null;

    /**
     * @var ArticleTag[]|null
     */
    private ?array $tags = null;

    /**
     * @var ArticleTemplate
     */
    private ArticleTemplate $template;

    /**
     * @param string $articleId
     * @param int|float $contractDurationInMonth
     * @param string $description
     * @param string $name
     * @param ReadableArticleOrderable $orderable
     * @param ArticleTemplate $template
     */
    public function __construct(string $articleId, int|float $contractDurationInMonth, string $description, string $name, ReadableArticleOrderable $orderable, ArticleTemplate $template)
    {
        $this->articleId = $articleId;
        $this->contractDurationInMonth = $contractDurationInMonth;
        $this->description = $description;
        $this->name = $name;
        $this->orderable = $orderable;
        $this->template = $template;
    }

    /**
     * @return
     * ReadableBookableArticleOptions[]|null
     */
    public function getAdditionalArticles(): ?array
    {
        return $this->additionalArticles ?? null;
    }

    /**
     * @return ArticleAddons[]|null
     */
    public function getAddons(): ?array
    {
        return $this->addons ?? null;
    }

    /**
     * @return string
     */
    public function getArticleId(): string
    {
        return $this->articleId;
    }

    /**
     * @return
     * ArticleAttributes[]|null
     */
    public function getAttributes(): ?array
    {
        return $this->attributes ?? null;
    }

    /**
     * @return string|null
     */
    public function getBalanceAddonKey(): ?string
    {
        return $this->balanceAddonKey ?? null;
    }

    /**
     * @return int|float
     */
    public function getContractDurationInMonth(): int|float
    {
        return $this->contractDurationInMonth;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return int|float|null
     */
    public function getForcedInvoicingPeriodInMonth(): int|float|null
    {
        return $this->forcedInvoicingPeriodInMonth;
    }

    /**
     * @return bool|null
     */
    public function getHasIndependentContractPeriod(): ?bool
    {
        return $this->hasIndependentContractPeriod ?? null;
    }

    /**
     * @return bool|null
     */
    public function getHideOnInvoice(): ?bool
    {
        return $this->hideOnInvoice ?? null;
    }

    /**
     * @return ReadableArticleMachineType|null
     */
    public function getMachineType(): ?ReadableArticleMachineType
    {
        return $this->machineType ?? null;
    }

    /**
     * @return
     * ReadableModifierArticleOptions[]|null
     */
    public function getModifierArticles(): ?array
    {
        return $this->modifierArticles ?? null;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return ReadableArticleOrderable
     */
    public function getOrderable(): ReadableArticleOrderable
    {
        return $this->orderable;
    }

    /**
     * @return string|null
     */
    public function getPicture(): ?string
    {
        return $this->picture ?? null;
    }

    /**
     * @return
     * ReadableChangeArticleOptions[]|null
     */
    public function getPossibleArticleChanges(): ?array
    {
        return $this->possibleArticleChanges ?? null;
    }

    /**
     * @return int|float|null
     */
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

    /**
     * @return ArticleTemplate
     */
    public function getTemplate(): ArticleTemplate
    {
        return $this->template;
    }

    /**
     * @param ReadableBookableArticleOptions[] $additionalArticles
     * @return self
     */
    public function withAdditionalArticles(array $additionalArticles): self
    {
        $clone = clone $this;
        $clone->additionalArticles = $additionalArticles;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutAdditionalArticles(): self
    {
        $clone = clone $this;
        unset($clone->additionalArticles);

        return $clone;
    }

    /**
     * @param ArticleAddons[] $addons
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
     * @param ArticleAttributes[] $attributes
     * @return self
     */
    public function withAttributes(array $attributes): self
    {
        $clone = clone $this;
        $clone->attributes = $attributes;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutAttributes(): self
    {
        $clone = clone $this;
        unset($clone->attributes);

        return $clone;
    }

    /**
     * @param string $balanceAddonKey
     * @return self
     */
    public function withBalanceAddonKey(string $balanceAddonKey): self
    {
        $validator = new Validator();
        $validator->validate($balanceAddonKey, static::$schema['properties']['balanceAddonKey']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->balanceAddonKey = $balanceAddonKey;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutBalanceAddonKey(): self
    {
        $clone = clone $this;
        unset($clone->balanceAddonKey);

        return $clone;
    }

    /**
     * @param int|float $contractDurationInMonth
     * @return self
     */
    public function withContractDurationInMonth(int|float $contractDurationInMonth): self
    {
        $validator = new Validator();
        $validator->validate($contractDurationInMonth, static::$schema['properties']['contractDurationInMonth']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->contractDurationInMonth = $contractDurationInMonth;

        return $clone;
    }

    /**
     * @param string $description
     * @return self
     */
    public function withDescription(string $description): self
    {
        $validator = new Validator();
        $validator->validate($description, static::$schema['properties']['description']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->description = $description;

        return $clone;
    }

    /**
     * @param int|float $forcedInvoicingPeriodInMonth
     * @return self
     */
    public function withForcedInvoicingPeriodInMonth(int|float $forcedInvoicingPeriodInMonth): self
    {
        $validator = new Validator();
        $validator->validate($forcedInvoicingPeriodInMonth, static::$schema['properties']['forcedInvoicingPeriodInMonth']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->forcedInvoicingPeriodInMonth = $forcedInvoicingPeriodInMonth;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutForcedInvoicingPeriodInMonth(): self
    {
        $clone = clone $this;
        unset($clone->forcedInvoicingPeriodInMonth);

        return $clone;
    }

    /**
     * @param bool $hasIndependentContractPeriod
     * @return self
     */
    public function withHasIndependentContractPeriod(bool $hasIndependentContractPeriod): self
    {
        $validator = new Validator();
        $validator->validate($hasIndependentContractPeriod, static::$schema['properties']['hasIndependentContractPeriod']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->hasIndependentContractPeriod = $hasIndependentContractPeriod;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutHasIndependentContractPeriod(): self
    {
        $clone = clone $this;
        unset($clone->hasIndependentContractPeriod);

        return $clone;
    }

    /**
     * @param bool $hideOnInvoice
     * @return self
     */
    public function withHideOnInvoice(bool $hideOnInvoice): self
    {
        $validator = new Validator();
        $validator->validate($hideOnInvoice, static::$schema['properties']['hideOnInvoice']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->hideOnInvoice = $hideOnInvoice;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutHideOnInvoice(): self
    {
        $clone = clone $this;
        unset($clone->hideOnInvoice);

        return $clone;
    }

    /**
     * @param ReadableArticleMachineType $machineType
     * @return self
     */
    public function withMachineType(ReadableArticleMachineType $machineType): self
    {
        $clone = clone $this;
        $clone->machineType = $machineType;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutMachineType(): self
    {
        $clone = clone $this;
        unset($clone->machineType);

        return $clone;
    }

    /**
     * @param ReadableModifierArticleOptions[] $modifierArticles
     * @return self
     */
    public function withModifierArticles(array $modifierArticles): self
    {
        $clone = clone $this;
        $clone->modifierArticles = $modifierArticles;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutModifierArticles(): self
    {
        $clone = clone $this;
        unset($clone->modifierArticles);

        return $clone;
    }

    /**
     * @param string $name
     * @return self
     */
    public function withName(string $name): self
    {
        $validator = new Validator();
        $validator->validate($name, static::$schema['properties']['name']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->name = $name;

        return $clone;
    }

    /**
     * @param ReadableArticleOrderable $orderable
     * @return self
     */
    public function withOrderable(ReadableArticleOrderable $orderable): self
    {
        $clone = clone $this;
        $clone->orderable = $orderable;

        return $clone;
    }

    /**
     * @param string $picture
     * @return self
     */
    public function withPicture(string $picture): self
    {
        $validator = new Validator();
        $validator->validate($picture, static::$schema['properties']['picture']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->picture = $picture;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutPicture(): self
    {
        $clone = clone $this;
        unset($clone->picture);

        return $clone;
    }

    /**
     * @param ReadableChangeArticleOptions[] $possibleArticleChanges
     * @return self
     */
    public function withPossibleArticleChanges(array $possibleArticleChanges): self
    {
        $clone = clone $this;
        $clone->possibleArticleChanges = $possibleArticleChanges;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutPossibleArticleChanges(): self
    {
        $clone = clone $this;
        unset($clone->possibleArticleChanges);

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
     * @return self
     */
    public function withoutPrice(): self
    {
        $clone = clone $this;
        unset($clone->price);

        return $clone;
    }

    /**
     * @param ArticleTag[] $tags
     * @return self
     */
    public function withTags(array $tags): self
    {
        $clone = clone $this;
        $clone->tags = $tags;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutTags(): self
    {
        $clone = clone $this;
        unset($clone->tags);

        return $clone;
    }

    /**
     * @param ArticleTemplate $template
     * @return self
     */
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

        $additionalArticles = null;
        if (isset($input->{'additionalArticles'})) {
            $additionalArticles = array_map(fn (array $i): ReadableBookableArticleOptions => ReadableBookableArticleOptions::buildFromInput($i, validate: $validate), $input->{'additionalArticles'});
        }
        $addons = null;
        if (isset($input->{'addons'})) {
            $addons = array_map(fn (array $i): ArticleAddons => ArticleAddons::buildFromInput($i, validate: $validate), $input->{'addons'});
        }
        $articleId = $input->{'articleId'};
        $attributes = null;
        if (isset($input->{'attributes'})) {
            $attributes = array_map(fn (array $i): ArticleAttributes => ArticleAttributes::buildFromInput($i, validate: $validate), $input->{'attributes'});
        }
        $balanceAddonKey = null;
        if (isset($input->{'balanceAddonKey'})) {
            $balanceAddonKey = $input->{'balanceAddonKey'};
        }
        $contractDurationInMonth = str_contains($input->{'contractDurationInMonth'}, '.') ? (float)($input->{'contractDurationInMonth'}) : (int)($input->{'contractDurationInMonth'});
        $description = $input->{'description'};
        $forcedInvoicingPeriodInMonth = null;
        if (isset($input->{'forcedInvoicingPeriodInMonth'})) {
            $forcedInvoicingPeriodInMonth = str_contains($input->{'forcedInvoicingPeriodInMonth'}, '.') ? (float)($input->{'forcedInvoicingPeriodInMonth'}) : (int)($input->{'forcedInvoicingPeriodInMonth'});
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
            $modifierArticles = array_map(fn (array $i): ReadableModifierArticleOptions => ReadableModifierArticleOptions::buildFromInput($i, validate: $validate), $input->{'modifierArticles'});
        }
        $name = $input->{'name'};
        $orderable = ReadableArticleOrderable::from($input->{'orderable'});
        $picture = null;
        if (isset($input->{'picture'})) {
            $picture = $input->{'picture'};
        }
        $possibleArticleChanges = null;
        if (isset($input->{'possibleArticleChanges'})) {
            $possibleArticleChanges = array_map(fn (array $i): ReadableChangeArticleOptions => ReadableChangeArticleOptions::buildFromInput($i, validate: $validate), $input->{'possibleArticleChanges'});
        }
        $price = null;
        if (isset($input->{'price'})) {
            $price = str_contains($input->{'price'}, '.') ? (float)($input->{'price'}) : (int)($input->{'price'});
        }
        $tags = null;
        if (isset($input->{'tags'})) {
            $tags = array_map(fn (array $i): ArticleTag => ArticleTag::buildFromInput($i, validate: $validate), $input->{'tags'});
        }
        $template = ArticleTemplate::buildFromInput($input->{'template'}, validate: $validate);

        $obj = new self($articleId, $contractDurationInMonth, $description, $name, $orderable, $template);
        $obj->additionalArticles = $additionalArticles;
        $obj->addons = $addons;
        $obj->attributes = $attributes;
        $obj->balanceAddonKey = $balanceAddonKey;
        $obj->forcedInvoicingPeriodInMonth = $forcedInvoicingPeriodInMonth;
        $obj->hasIndependentContractPeriod = $hasIndependentContractPeriod;
        $obj->hideOnInvoice = $hideOnInvoice;
        $obj->machineType = $machineType;
        $obj->modifierArticles = $modifierArticles;
        $obj->picture = $picture;
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
        if (isset($this->additionalArticles)) {
            $output['additionalArticles'] = array_map(fn (ReadableBookableArticleOptions $i): array => $i->toJson(), $this->additionalArticles);
        }
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
        $output['description'] = $this->description;
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
        if (isset($this->picture)) {
            $output['picture'] = $this->picture;
        }
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
        if (isset($this->machineType)) {
            $this->machineType = clone $this->machineType;
        }
    }
}
