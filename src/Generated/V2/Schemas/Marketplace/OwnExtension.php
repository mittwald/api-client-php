<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Marketplace;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.marketplace.OwnExtension.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class OwnExtension
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'backendComponents' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.marketplace.BackendComponents',
            ],
            'blocked' => [
                'deprecated' => true,
                'type' => 'boolean',
            ],
            'context' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.marketplace.Context',
            ],
            'contributorId' => [
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
            'name' => [
                'type' => 'string',
            ],
            'scopes' => [
                'items' => [
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
            'state' => [
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
            'name',
        ],
        'type' => 'object',
    ];

    private ?BackendComponents $backendComponents = null;

    /**
     * @deprecated
     */
    private ?bool $blocked = null;

    private ?Context $context = null;

    private string $contributorId;

    private ?ExtensionDeprecation $deprecation = null;

    private ?string $description = null;

    private ?DetailedDescriptions $detailedDescriptions = null;

    private ?bool $disabled = null;

    /**
     * @var ExternalComponent[]|null
     */
    private ?array $frontendComponents = null;

    /**
     * @var mixed[]|null
     */
    private ?array $frontendFragments = null;

    private string $id;

    private string $name;

    /**
     * @var string[]|null
     */
    private ?array $scopes = null;

    /**
     * deprecated
     */
    private ?OwnExtensionState $state = null;

    private ?SupportMeta $support = null;

    /**
     * @var string[]|null
     */
    private ?array $tags = null;

    public function __construct(string $contributorId, string $id, string $name)
    {
        $this->contributorId = $contributorId;
        $this->id = $id;
        $this->name = $name;
    }

    /**
     * @return
     * BackendComponents|null
     */
    public function getBackendComponents(): ?BackendComponents
    {
        return $this->backendComponents ?? null;
    }

    /**
     * @deprecated
     */
    public function getBlocked(): ?bool
    {
        return $this->blocked ?? null;
    }

    public function getContext(): ?Context
    {
        return $this->context ?? null;
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

    public function getDescription(): ?string
    {
        return $this->description ?? null;
    }

    /**
     * @return
     * DetailedDescriptions|null
     */
    public function getDetailedDescriptions(): ?DetailedDescriptions
    {
        return $this->detailedDescriptions ?? null;
    }

    public function getDisabled(): ?bool
    {
        return $this->disabled ?? null;
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

    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string[]|null
     */
    public function getScopes(): ?array
    {
        return $this->scopes ?? null;
    }

    public function getState(): ?OwnExtensionState
    {
        return $this->state ?? null;
    }

    public function getSupport(): ?SupportMeta
    {
        return $this->support ?? null;
    }

    /**
     * @return string[]|null
     */
    public function getTags(): ?array
    {
        return $this->tags ?? null;
    }

    public function withBackendComponents(BackendComponents $backendComponents): self
    {
        $clone = clone $this;
        $clone->backendComponents = $backendComponents;

        return $clone;
    }

    public function withoutBackendComponents(): self
    {
        $clone = clone $this;
        unset($clone->backendComponents);

        return $clone;
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

    public function withoutBlocked(): self
    {
        $clone = clone $this;
        unset($clone->blocked);

        return $clone;
    }

    public function withContext(Context $context): self
    {
        $clone = clone $this;
        $clone->context = $context;

        return $clone;
    }

    public function withoutContext(): self
    {
        $clone = clone $this;
        unset($clone->context);

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

    public function withoutDescription(): self
    {
        $clone = clone $this;
        unset($clone->description);

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

    public function withoutDisabled(): self
    {
        $clone = clone $this;
        unset($clone->disabled);

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

    public function withoutScopes(): self
    {
        $clone = clone $this;
        unset($clone->scopes);

        return $clone;
    }

    public function withState(OwnExtensionState $state): self
    {
        $clone = clone $this;
        $clone->state = $state;

        return $clone;
    }

    public function withoutState(): self
    {
        $clone = clone $this;
        unset($clone->state);

        return $clone;
    }

    public function withSupport(SupportMeta $support): self
    {
        $clone = clone $this;
        $clone->support = $support;

        return $clone;
    }

    public function withoutSupport(): self
    {
        $clone = clone $this;
        unset($clone->support);

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

    public function withoutTags(): self
    {
        $clone = clone $this;
        unset($clone->tags);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return OwnExtension Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): OwnExtension
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $backendComponents = null;
        if (isset($input->{'backendComponents'})) {
            $backendComponents = BackendComponents::buildFromInput($input->{'backendComponents'}, validate: $validate);
        }
        $blocked = null;
        if (isset($input->{'blocked'})) {
            $blocked = (bool)($input->{'blocked'});
        }
        $context = null;
        if (isset($input->{'context'})) {
            $context = Context::from($input->{'context'});
        }
        $contributorId = $input->{'contributorId'};
        $deprecation = null;
        if (isset($input->{'deprecation'})) {
            $deprecation = ExtensionDeprecation::buildFromInput($input->{'deprecation'}, validate: $validate);
        }
        $description = null;
        if (isset($input->{'description'})) {
            $description = $input->{'description'};
        }
        $detailedDescriptions = null;
        if (isset($input->{'detailedDescriptions'})) {
            $detailedDescriptions = DetailedDescriptions::buildFromInput($input->{'detailedDescriptions'}, validate: $validate);
        }
        $disabled = null;
        if (isset($input->{'disabled'})) {
            $disabled = (bool)($input->{'disabled'});
        }
        $frontendComponents = null;
        if (isset($input->{'frontendComponents'})) {
            $frontendComponents = array_map(fn (array|object $i): ExternalComponent => ExternalComponent::buildFromInput($i, validate: $validate), $input->{'frontendComponents'});
        }
        $frontendFragments = null;
        if (isset($input->{'frontendFragments'})) {
            $frontendFragments = (array)$input->{'frontendFragments'};
        }
        $id = $input->{'id'};
        $name = $input->{'name'};
        $scopes = null;
        if (isset($input->{'scopes'})) {
            $scopes = $input->{'scopes'};
        }
        $state = null;
        if (isset($input->{'state'})) {
            $state = OwnExtensionState::from($input->{'state'});
        }
        $support = null;
        if (isset($input->{'support'})) {
            $support = SupportMeta::buildFromInput($input->{'support'}, validate: $validate);
        }
        $tags = null;
        if (isset($input->{'tags'})) {
            $tags = $input->{'tags'};
        }

        $obj = new self($contributorId, $id, $name);
        $obj->backendComponents = $backendComponents;
        $obj->blocked = $blocked;
        $obj->context = $context;
        $obj->deprecation = $deprecation;
        $obj->description = $description;
        $obj->detailedDescriptions = $detailedDescriptions;
        $obj->disabled = $disabled;
        $obj->frontendComponents = $frontendComponents;
        $obj->frontendFragments = $frontendFragments;
        $obj->scopes = $scopes;
        $obj->state = $state;
        $obj->support = $support;
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
        if (isset($this->backendComponents)) {
            $output['backendComponents'] = $this->backendComponents->toJson();
        }
        if (isset($this->blocked)) {
            $output['blocked'] = $this->blocked;
        }
        if (isset($this->context)) {
            $output['context'] = $this->context->value;
        }
        $output['contributorId'] = $this->contributorId;
        if (isset($this->deprecation)) {
            $output['deprecation'] = $this->deprecation->toJson();
        }
        if (isset($this->description)) {
            $output['description'] = $this->description;
        }
        if (isset($this->detailedDescriptions)) {
            $output['detailedDescriptions'] = $this->detailedDescriptions->toJson();
        }
        if (isset($this->disabled)) {
            $output['disabled'] = $this->disabled;
        }
        if (isset($this->frontendComponents)) {
            $output['frontendComponents'] = array_map(fn (ExternalComponent $i): array => $i->toJson(), $this->frontendComponents);
        }
        if (isset($this->frontendFragments)) {
            $output['frontendFragments'] = $this->frontendFragments;
        }
        $output['id'] = $this->id;
        $output['name'] = $this->name;
        if (isset($this->scopes)) {
            $output['scopes'] = $this->scopes;
        }
        if (isset($this->state)) {
            $output['state'] = ($this->state)->value;
        }
        if (isset($this->support)) {
            $output['support'] = $this->support->toJson();
        }
        if (isset($this->tags)) {
            $output['tags'] = $this->tags;
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
