<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Article;

use InvalidArgumentException;

class ArticleTemplate
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
            'attributes' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.article.ArticleAttributes',
                ],
                'type' => 'array',
            ],
            'description' => [
                'example' => 'Space-Storage',
                'type' => 'string',
            ],
            'id' => [
                'example' => '054e27e4-d3ed-4ffc-a472-fbb74a6a2ec1',
                'minLength' => 1,
                'type' => 'string',
            ],
            'isManagedByDomain' => [
                'type' => 'boolean',
            ],
            'isRecurring' => [
                'type' => 'boolean',
            ],
            'modifierArticles' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.article.ReadableModifierArticleOptions',
                ],
                'type' => 'array',
            ],
            'name' => [
                'example' => 'Speicher für Space-Server aller Art',
                'minLength' => 3,
                'type' => 'string',
            ],
            'type' => [
                'enum' => [
                    'miscellaneous',
                    'base',
                    'additional',
                    'modifier',
                    'setup_fee',
                ],
                'type' => 'string',
            ],
        ],
        'required' => [
            'name',
            'isRecurring',
            'type',
            'isManagedByDomain',
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
     * @var ArticleAttributes[]|null
     */
    private ?array $attributes = null;

    /**
     * @var string|null
     */
    private ?string $description = null;

    /**
     * @var string|null
     */
    private ?string $id = null;

    /**
     * @var bool
     */
    private bool $isManagedByDomain;

    /**
     * @var bool
     */
    private bool $isRecurring;

    /**
     * @var ReadableModifierArticleOptions[]|null
     */
    private ?array $modifierArticles = null;

    /**
     * @var string
     */
    private string $name;

    /**
     * @var ArticleTemplateType
     */
    private ArticleTemplateType $type;

    /**
     * @param bool $isManagedByDomain
     * @param bool $isRecurring
     * @param string $name
     * @param ArticleTemplateType $type
     */
    public function __construct(bool $isManagedByDomain, bool $isRecurring, string $name, ArticleTemplateType $type)
    {
        $this->isManagedByDomain = $isManagedByDomain;
        $this->isRecurring = $isRecurring;
        $this->name = $name;
        $this->type = $type;
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
    public function getDescription(): ?string
    {
        return $this->description ?? null;
    }

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id ?? null;
    }

    /**
     * @return bool
     */
    public function getIsManagedByDomain(): bool
    {
        return $this->isManagedByDomain;
    }

    /**
     * @return bool
     */
    public function getIsRecurring(): bool
    {
        return $this->isRecurring;
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
     * @return ArticleTemplateType
     */
    public function getType(): ArticleTemplateType
    {
        return $this->type;
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
     * @return self
     */
    public function withoutDescription(): self
    {
        $clone = clone $this;
        unset($clone->description);

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
     * @return self
     */
    public function withoutId(): self
    {
        $clone = clone $this;
        unset($clone->id);

        return $clone;
    }

    /**
     * @param bool $isManagedByDomain
     * @return self
     */
    public function withIsManagedByDomain(bool $isManagedByDomain): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($isManagedByDomain, static::$schema['properties']['isManagedByDomain']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->isManagedByDomain = $isManagedByDomain;

        return $clone;
    }

    /**
     * @param bool $isRecurring
     * @return self
     */
    public function withIsRecurring(bool $isRecurring): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($isRecurring, static::$schema['properties']['isRecurring']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->isRecurring = $isRecurring;

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
     * @param ArticleTemplateType $type
     * @return self
     */
    public function withType(ArticleTemplateType $type): self
    {
        $clone = clone $this;
        $clone->type = $type;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ArticleTemplate Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ArticleTemplate
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
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
        $attributes = null;
        if (isset($input->{'attributes'})) {
            $attributes = array_map(fn (array $i): ArticleAttributes => ArticleAttributes::buildFromInput($i, validate: $validate), $input->{'attributes'});
        }
        $description = null;
        if (isset($input->{'description'})) {
            $description = $input->{'description'};
        }
        $id = null;
        if (isset($input->{'id'})) {
            $id = $input->{'id'};
        }
        $isManagedByDomain = (bool)($input->{'isManagedByDomain'});
        $isRecurring = (bool)($input->{'isRecurring'});
        $modifierArticles = null;
        if (isset($input->{'modifierArticles'})) {
            $modifierArticles = array_map(fn (array $i): ReadableModifierArticleOptions => ReadableModifierArticleOptions::buildFromInput($i, validate: $validate), $input->{'modifierArticles'});
        }
        $name = $input->{'name'};
        $type = ArticleTemplateType::from($input->{'type'});

        $obj = new self($isManagedByDomain, $isRecurring, $name, $type);
        $obj->additionalArticles = $additionalArticles;
        $obj->addons = $addons;
        $obj->attributes = $attributes;
        $obj->description = $description;
        $obj->id = $id;
        $obj->modifierArticles = $modifierArticles;
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
        if (isset($this->attributes)) {
            $output['attributes'] = array_map(fn (ArticleAttributes $i): array => $i->toJson(), $this->attributes);
        }
        if (isset($this->description)) {
            $output['description'] = $this->description;
        }
        if (isset($this->id)) {
            $output['id'] = $this->id;
        }
        $output['isManagedByDomain'] = $this->isManagedByDomain;
        $output['isRecurring'] = $this->isRecurring;
        if (isset($this->modifierArticles)) {
            $output['modifierArticles'] = array_map(fn (ReadableModifierArticleOptions $i): array => $i->toJson(), $this->modifierArticles);
        }
        $output['name'] = $this->name;
        $output['type'] = ($this->type)->value;

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
