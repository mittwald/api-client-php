<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionPatchExtension;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Marketplace\ExtensionDeprecation;
use Mittwald\ApiClient\Generated\V2\Schemas\Marketplace\ExternalComponent;
use Mittwald\ApiClient\Generated\V2\Schemas\Marketplace\SubTitle;
use Mittwald\ApiClient\Generated\V2\Schemas\Marketplace\SupportMeta;

class ExtensionPatchExtensionRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'assets' => [
                'description' => 'Used to patch asset order.',
                'items' => [
                    'format' => 'uuid',
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
            'deprecation' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.marketplace.ExtensionDeprecation',
            ],
            'description' => [
                'type' => 'string',
            ],
            'detailedDescriptions' => [
                'allOf' => [
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.marketplace.DetailedDescriptions',
                    ],
                ],
                'nullable' => true,
            ],
            'externalFrontends' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.marketplace.ExternalComponent',
                ],
                'nullable' => true,
                'type' => 'array',
            ],
            'frontendFragments' => [
                'additionalProperties' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.marketplace.FrontendFragment',
                ],
                'nullable' => true,
                'type' => 'object',
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
            'subTitle' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.marketplace.SubTitle',
            ],
            'support' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.marketplace.SupportMeta',
            ],
            'tags' => [
                'items' => [
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
            'webhookUrls' => [
                'allOf' => [
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.marketplace.WebhookUrls',
                    ],
                ],
                'nullable' => true,
            ],
        ],
        'type' => 'object',
    ];

    /**
     * Used to patch asset order.
     *
     * @var string[]|null
     */
    private ?array $assets = null;

    private ?ExtensionDeprecation $deprecation = null;

    private ?string $description = null;

    private ?ExtensionPatchExtensionRequestBodyDetailedDescriptions $detailedDescriptions = null;

    /**
     * @var ExternalComponent[]|null
     */
    private ?array $externalFrontends = null;

    /**
     * @var mixed[]|null
     */
    private ?array $frontendFragments = null;

    private ?string $name = null;

    /**
     * @var string[]|null
     */
    private ?array $scopes = null;

    private ?SubTitle $subTitle = null;

    private ?SupportMeta $support = null;

    /**
     * @var string[]|null
     */
    private ?array $tags = null;

    private ?ExtensionPatchExtensionRequestBodyWebhookUrls $webhookUrls = null;

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return string[]|null
     */
    public function getAssets(): ?array
    {
        return $this->assets ?? null;
    }

    public function getDeprecation(): ?ExtensionDeprecation
    {
        return $this->deprecation ?? null;
    }

    public function getDescription(): ?string
    {
        return $this->description ?? null;
    }

    public function getDetailedDescriptions(): ?ExtensionPatchExtensionRequestBodyDetailedDescriptions
    {
        return $this->detailedDescriptions ?? null;
    }

    /**
     * @return ExternalComponent[]|null
     */
    public function getExternalFrontends(): ?array
    {
        return $this->externalFrontends ?? null;
    }

    /**
     * @return mixed[]|null
     */
    public function getFrontendFragments(): ?array
    {
        return $this->frontendFragments ?? null;
    }

    public function getName(): ?string
    {
        return $this->name ?? null;
    }

    /**
     * @return string[]|null
     */
    public function getScopes(): ?array
    {
        return $this->scopes ?? null;
    }

    public function getSubTitle(): ?SubTitle
    {
        return $this->subTitle ?? null;
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

    public function getWebhookUrls(): ?ExtensionPatchExtensionRequestBodyWebhookUrls
    {
        return $this->webhookUrls ?? null;
    }

    /**
     * @param string[] $assets
     */
    public function withAssets(array $assets): self
    {
        $validator = new Validator();
        $validator->validate($assets, self::$internalValidationSchema['properties']['assets']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->assets = $assets;

        return $clone;
    }

    public function withoutAssets(): self
    {
        $clone = clone $this;
        unset($clone->assets);

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
        $validator->validate($description, self::$internalValidationSchema['properties']['description']);
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

    public function withDetailedDescriptions(ExtensionPatchExtensionRequestBodyDetailedDescriptions $detailedDescriptions): self
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

    /**
     * @param ExternalComponent[] $externalFrontends
     */
    public function withExternalFrontends(array $externalFrontends): self
    {
        $clone = clone $this;
        $clone->externalFrontends = $externalFrontends;

        return $clone;
    }

    public function withoutExternalFrontends(): self
    {
        $clone = clone $this;
        unset($clone->externalFrontends);

        return $clone;
    }

    /**
     * @param mixed[] $frontendFragments
     */
    public function withFrontendFragments(array $frontendFragments): self
    {
        $validator = new Validator();
        $validator->validate($frontendFragments, self::$internalValidationSchema['properties']['frontendFragments']);
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

    public function withName(string $name): self
    {
        $validator = new Validator();
        $validator->validate($name, self::$internalValidationSchema['properties']['name']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->name = $name;

        return $clone;
    }

    public function withoutName(): self
    {
        $clone = clone $this;
        unset($clone->name);

        return $clone;
    }

    /**
     * @param string[] $scopes
     */
    public function withScopes(array $scopes): self
    {
        $validator = new Validator();
        $validator->validate($scopes, self::$internalValidationSchema['properties']['scopes']);
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

    public function withSubTitle(SubTitle $subTitle): self
    {
        $clone = clone $this;
        $clone->subTitle = $subTitle;

        return $clone;
    }

    public function withoutSubTitle(): self
    {
        $clone = clone $this;
        unset($clone->subTitle);

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
        $validator->validate($tags, self::$internalValidationSchema['properties']['tags']);
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

    public function withWebhookUrls(ExtensionPatchExtensionRequestBodyWebhookUrls $webhookUrls): self
    {
        $clone = clone $this;
        $clone->webhookUrls = $webhookUrls;

        return $clone;
    }

    public function withoutWebhookUrls(): self
    {
        $clone = clone $this;
        unset($clone->webhookUrls);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ExtensionPatchExtensionRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ExtensionPatchExtensionRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $assets = null;
        if (isset($input->{'assets'})) {
            $assets = $input->{'assets'};
        }
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
            $detailedDescriptions = ExtensionPatchExtensionRequestBodyDetailedDescriptions::buildFromInput($input->{'detailedDescriptions'}, validate: $validate);
        }
        $externalFrontends = null;
        if (isset($input->{'externalFrontends'})) {
            $externalFrontends = array_map(fn (array|object $i): ExternalComponent => ExternalComponent::buildFromInput($i, validate: $validate), $input->{'externalFrontends'});
        }
        $frontendFragments = null;
        if (isset($input->{'frontendFragments'})) {
            $frontendFragments = (array)$input->{'frontendFragments'};
        }
        $name = null;
        if (isset($input->{'name'})) {
            $name = $input->{'name'};
        }
        $scopes = null;
        if (isset($input->{'scopes'})) {
            $scopes = $input->{'scopes'};
        }
        $subTitle = null;
        if (isset($input->{'subTitle'})) {
            $subTitle = SubTitle::buildFromInput($input->{'subTitle'}, validate: $validate);
        }
        $support = null;
        if (isset($input->{'support'})) {
            $support = SupportMeta::buildFromInput($input->{'support'}, validate: $validate);
        }
        $tags = null;
        if (isset($input->{'tags'})) {
            $tags = $input->{'tags'};
        }
        $webhookUrls = null;
        if (isset($input->{'webhookUrls'})) {
            $webhookUrls = ExtensionPatchExtensionRequestBodyWebhookUrls::buildFromInput($input->{'webhookUrls'}, validate: $validate);
        }

        $obj = new self();
        $obj->assets = $assets;
        $obj->deprecation = $deprecation;
        $obj->description = $description;
        $obj->detailedDescriptions = $detailedDescriptions;
        $obj->externalFrontends = $externalFrontends;
        $obj->frontendFragments = $frontendFragments;
        $obj->name = $name;
        $obj->scopes = $scopes;
        $obj->subTitle = $subTitle;
        $obj->support = $support;
        $obj->tags = $tags;
        $obj->webhookUrls = $webhookUrls;
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
        if (isset($this->assets)) {
            $output['assets'] = $this->assets;
        }
        if (isset($this->deprecation)) {
            $output['deprecation'] = $this->deprecation->toJson();
        }
        if (isset($this->description)) {
            $output['description'] = $this->description;
        }
        if (isset($this->detailedDescriptions)) {
            $output['detailedDescriptions'] = ($this->detailedDescriptions)->toJson();
        }
        if (isset($this->externalFrontends)) {
            $output['externalFrontends'] = array_map(fn (ExternalComponent $i): array => $i->toJson(), $this->externalFrontends);
        }
        if (isset($this->frontendFragments)) {
            $output['frontendFragments'] = $this->frontendFragments;
        }
        if (isset($this->name)) {
            $output['name'] = $this->name;
        }
        if (isset($this->scopes)) {
            $output['scopes'] = $this->scopes;
        }
        if (isset($this->subTitle)) {
            $output['subTitle'] = $this->subTitle->toJson();
        }
        if (isset($this->support)) {
            $output['support'] = $this->support->toJson();
        }
        if (isset($this->tags)) {
            $output['tags'] = $this->tags;
        }
        if (isset($this->webhookUrls)) {
            $output['webhookUrls'] = ($this->webhookUrls)->toJson();
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
        $validator->validate($input, self::$internalValidationSchema);

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
        if (isset($this->detailedDescriptions)) {
            $this->detailedDescriptions = clone $this->detailedDescriptions;
        }
        if (isset($this->webhookUrls)) {
            $this->webhookUrls = clone $this->webhookUrls;
        }
    }
}
