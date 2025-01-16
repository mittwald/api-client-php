<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Marketplace;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.marketplace.Extension.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class Extension
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'blocked' => [
                'deprecated' => true,
                'type' => 'boolean',
            ],
            'context' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.marketplace.Context',
            ],
            'contributorId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'deprecation' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.marketplace.ExtensionDeprecation',
            ],
            'description' => [
                'type' => 'string',
            ],
            'detailedDescriptions' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.marketplace.DetailedDescriptions',
            ],
            'disabled' => [
                'type' => 'boolean',
            ],
            'frontendComponents' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.marketplace.ExternalComponent',
                ],
                'type' => 'array',
            ],
            'frontendFragments' => [
                'additionalProperties' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.marketplace.FrontendFragment',
                ],
                'type' => 'object',
            ],
            'id' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'logoRefId' => [
                'description' => 'This is the FileId of the Logo. Retrieve the file with this id on `/v2/files/{logoRefId}`.',
                'format' => 'uuid',
                'type' => 'string',
            ],
            'name' => [
                'type' => 'string',
            ],
            'published' => [
                'description' => 'Whether the extension has been published by the contributor.',
                'type' => 'boolean',
            ],
            'scopes' => [
                'items' => [
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
            'state' => [
                'deprecated' => true,
                'description' => 'deprecated',
                'enum' => [
                    'enabled',
                    'blocked',
                    'disabled',
                ],
                'type' => 'string',
            ],
            'support' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.marketplace.SupportMeta',
            ],
            'tags' => [
                'items' => [
                    'type' => 'string',
                ],
                'minItems' => 0,
                'type' => 'array',
            ],
        ],
        'required' => [
            'id',
            'contributorId',
            'support',
            'state',
            'published',
            'name',
            'description',
            'tags',
            'context',
            'scopes',
            'disabled',
            'blocked',
        ],
        'type' => 'object',
    ];

    /**
     * @deprecated
     */
    private bool $blocked;

    private Context $context;

    private string $contributorId;

    private ?ExtensionDeprecation $deprecation = null;

    private string $description;

    private ?DetailedDescriptions $detailedDescriptions = null;

    private bool $disabled;

    /**
     * @var ExternalComponent[]|null
     */
    private ?array $frontendComponents = null;

    /**
     * @var mixed[]|null
     */
    private ?array $frontendFragments = null;

    private string $id;

    /**
     * This is the FileId of the Logo. Retrieve the file with this id on `/v2/files/{logoRefId}`.
     */
    private ?string $logoRefId = null;

    private string $name;

    /**
     * Whether the extension has been published by the contributor.
     */
    private bool $published;

    /**
     * @var string[]
     */
    private array $scopes;

    /**
     * deprecated
     *
     * @deprecated
     */
    private ExtensionState $state;

    private SupportMeta $support;

    /**
     * @var string[]
     */
    private array $tags;

    /**
     * @param string[] $scopes
     * @param string[] $tags
     */
    public function __construct(bool $blocked, Context $context, string $contributorId, string $description, bool $disabled, string $id, string $name, bool $published, array $scopes, ExtensionState $state, SupportMeta $support, array $tags)
    {
        $this->blocked = $blocked;
        $this->context = $context;
        $this->contributorId = $contributorId;
        $this->description = $description;
        $this->disabled = $disabled;
        $this->id = $id;
        $this->name = $name;
        $this->published = $published;
        $this->scopes = $scopes;
        $this->state = $state;
        $this->support = $support;
        $this->tags = $tags;
    }

    /**
     * @deprecated
     */
    public function getBlocked(): bool
    {
        return $this->blocked;
    }

    public function getContext(): Context
    {
        return $this->context;
    }

    public function getContributorId(): string
    {
        return $this->contributorId;
    }

    /**
     * @return
     * ExtensionDeprecation|null
     */
    public function getDeprecation(): ?ExtensionDeprecation
    {
        return $this->deprecation ?? null;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return
     * DetailedDescriptions|null
     */
    public function getDetailedDescriptions(): ?DetailedDescriptions
    {
        return $this->detailedDescriptions ?? null;
    }

    public function getDisabled(): bool
    {
        return $this->disabled;
    }

    /**
     * @return
     * ExternalComponent[]|null
     */
    public function getFrontendComponents(): ?array
    {
        return $this->frontendComponents ?? null;
    }

    /**
     * @return mixed[]|null
     */
    public function getFrontendFragments(): ?array
    {
        return $this->frontendFragments ?? null;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getLogoRefId(): ?string
    {
        return $this->logoRefId ?? null;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPublished(): bool
    {
        return $this->published;
    }

    /**
     * @return string[]
     */
    public function getScopes(): array
    {
        return $this->scopes;
    }

    /**
     * @deprecated
     */
    public function getState(): ExtensionState
    {
        return $this->state;
    }

    public function getSupport(): SupportMeta
    {
        return $this->support;
    }

    /**
     * @return string[]
     */
    public function getTags(): array
    {
        return $this->tags;
    }

    /**
     * @deprecated
     */
    public function withBlocked(bool $blocked): self
    {
        $validator = new Validator();
        $validator->validate($blocked, static::$schema['properties']['blocked']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->blocked = $blocked;

        return $clone;
    }

    public function withContext(Context $context): self
    {
        $clone = clone $this;
        $clone->context = $context;

        return $clone;
    }

    public function withContributorId(string $contributorId): self
    {
        $validator = new Validator();
        $validator->validate($contributorId, static::$schema['properties']['contributorId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->contributorId = $contributorId;

        return $clone;
    }

    public function withDeprecation(ExtensionDeprecation $deprecation): self
    {
        $clone = clone $this;
        $clone->deprecation = $deprecation;

        return $clone;
    }

    public function withoutDeprecation(): self
    {
        $clone = clone $this;
        unset($clone->deprecation);

        return $clone;
    }

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

    public function withDetailedDescriptions(DetailedDescriptions $detailedDescriptions): self
    {
        $clone = clone $this;
        $clone->detailedDescriptions = $detailedDescriptions;

        return $clone;
    }

    public function withoutDetailedDescriptions(): self
    {
        $clone = clone $this;
        unset($clone->detailedDescriptions);

        return $clone;
    }

    public function withDisabled(bool $disabled): self
    {
        $validator = new Validator();
        $validator->validate($disabled, static::$schema['properties']['disabled']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->disabled = $disabled;

        return $clone;
    }

    /**
     * @param ExternalComponent[] $frontendComponents
     */
    public function withFrontendComponents(array $frontendComponents): self
    {
        $clone = clone $this;
        $clone->frontendComponents = $frontendComponents;

        return $clone;
    }

    public function withoutFrontendComponents(): self
    {
        $clone = clone $this;
        unset($clone->frontendComponents);

        return $clone;
    }

    /**
     * @param mixed[] $frontendFragments
     */
    public function withFrontendFragments(array $frontendFragments): self
    {
        $validator = new Validator();
        $validator->validate($frontendFragments, static::$schema['properties']['frontendFragments']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->frontendFragments = $frontendFragments;

        return $clone;
    }

    public function withoutFrontendFragments(): self
    {
        $clone = clone $this;
        unset($clone->frontendFragments);

        return $clone;
    }

    public function withId(string $id): self
    {
        $validator = new Validator();
        $validator->validate($id, static::$schema['properties']['id']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->id = $id;

        return $clone;
    }

    public function withLogoRefId(string $logoRefId): self
    {
        $validator = new Validator();
        $validator->validate($logoRefId, static::$schema['properties']['logoRefId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->logoRefId = $logoRefId;

        return $clone;
    }

    public function withoutLogoRefId(): self
    {
        $clone = clone $this;
        unset($clone->logoRefId);

        return $clone;
    }

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

    public function withPublished(bool $published): self
    {
        $validator = new Validator();
        $validator->validate($published, static::$schema['properties']['published']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->published = $published;

        return $clone;
    }

    /**
     * @param string[] $scopes
     */
    public function withScopes(array $scopes): self
    {
        $validator = new Validator();
        $validator->validate($scopes, static::$schema['properties']['scopes']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->scopes = $scopes;

        return $clone;
    }

    /**
     * @deprecated
     */
    public function withState(ExtensionState $state): self
    {
        $clone = clone $this;
        $clone->state = $state;

        return $clone;
    }

    public function withSupport(SupportMeta $support): self
    {
        $clone = clone $this;
        $clone->support = $support;

        return $clone;
    }

    /**
     * @param string[] $tags
     */
    public function withTags(array $tags): self
    {
        $validator = new Validator();
        $validator->validate($tags, static::$schema['properties']['tags']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->tags = $tags;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return Extension Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): Extension
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $blocked = (bool)($input->{'blocked'});
        $context = Context::from($input->{'context'});
        $contributorId = $input->{'contributorId'};
        $deprecation = null;
        if (isset($input->{'deprecation'})) {
            $deprecation = ExtensionDeprecation::buildFromInput($input->{'deprecation'}, validate: $validate);
        }
        $description = $input->{'description'};
        $detailedDescriptions = null;
        if (isset($input->{'detailedDescriptions'})) {
            $detailedDescriptions = DetailedDescriptions::buildFromInput($input->{'detailedDescriptions'}, validate: $validate);
        }
        $disabled = (bool)($input->{'disabled'});
        $frontendComponents = null;
        if (isset($input->{'frontendComponents'})) {
            $frontendComponents = array_map(fn (array|object $i): ExternalComponent => ExternalComponent::buildFromInput($i, validate: $validate), $input->{'frontendComponents'});
        }
        $frontendFragments = null;
        if (isset($input->{'frontendFragments'})) {
            $frontendFragments = (array)$input->{'frontendFragments'};
        }
        $id = $input->{'id'};
        $logoRefId = null;
        if (isset($input->{'logoRefId'})) {
            $logoRefId = $input->{'logoRefId'};
        }
        $name = $input->{'name'};
        $published = (bool)($input->{'published'});
        $scopes = $input->{'scopes'};
        $state = ExtensionState::from($input->{'state'});
        $support = SupportMeta::buildFromInput($input->{'support'}, validate: $validate);
        $tags = $input->{'tags'};

        $obj = new self($blocked, $context, $contributorId, $description, $disabled, $id, $name, $published, $scopes, $state, $support, $tags);
        $obj->deprecation = $deprecation;
        $obj->detailedDescriptions = $detailedDescriptions;
        $obj->frontendComponents = $frontendComponents;
        $obj->frontendFragments = $frontendFragments;
        $obj->logoRefId = $logoRefId;
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
        $output['blocked'] = $this->blocked;
        $output['context'] = $this->context->value;
        $output['contributorId'] = $this->contributorId;
        if (isset($this->deprecation)) {
            $output['deprecation'] = $this->deprecation->toJson();
        }
        $output['description'] = $this->description;
        if (isset($this->detailedDescriptions)) {
            $output['detailedDescriptions'] = $this->detailedDescriptions->toJson();
        }
        $output['disabled'] = $this->disabled;
        if (isset($this->frontendComponents)) {
            $output['frontendComponents'] = array_map(fn (ExternalComponent $i): array => $i->toJson(), $this->frontendComponents);
        }
        if (isset($this->frontendFragments)) {
            $output['frontendFragments'] = $this->frontendFragments;
        }
        $output['id'] = $this->id;
        if (isset($this->logoRefId)) {
            $output['logoRefId'] = $this->logoRefId;
        }
        $output['name'] = $this->name;
        $output['published'] = $this->published;
        $output['scopes'] = $this->scopes;
        $output['state'] = ($this->state)->value;
        $output['support'] = $this->support->toJson();
        $output['tags'] = $this->tags;

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
