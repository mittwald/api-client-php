<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRegisterExtension;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Marketplace\Context;
use Mittwald\ApiClient\Generated\V2\Schemas\Marketplace\DetailedDescriptions;
use Mittwald\ApiClient\Generated\V2\Schemas\Marketplace\ExternalComponent;
use Mittwald\ApiClient\Generated\V2\Schemas\Marketplace\SubTitle;
use Mittwald\ApiClient\Generated\V2\Schemas\Marketplace\SupportMeta;
use Mittwald\ApiClient\Generated\V2\Schemas\Marketplace\WebhookUrls;

class ExtensionRegisterExtensionRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'context' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.marketplace.Context',
            ],
            'contributorId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'description' => [
                'type' => 'string',
            ],
            'detailedDescriptions' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.marketplace.DetailedDescriptions',
            ],
            'externalFrontend' => [
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
            'webhookURLs' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.marketplace.WebhookUrls',
            ],
        ],
        'required' => [
            'contributorId',
            'name',
        ],
        'type' => 'object',
    ];

    private ?Context $context = null;

    private string $contributorId;

    private ?string $description = null;

    private ?DetailedDescriptions $detailedDescriptions = null;

    /**
     * @var ExternalComponent[]|null
     */
    private ?array $externalFrontend = null;

    /**
     * @var mixed[]|null
     */
    private ?array $frontendFragments = null;

    private string $name;

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

    private ?WebhookUrls $webhookURLs = null;

    public function __construct(string $contributorId, string $name)
    {
        $this->contributorId = $contributorId;
        $this->name = $name;
    }

    public function getContext(): ?Context
    {
        return $this->context ?? null;
    }

    public function getContributorId(): string
    {
        return $this->contributorId;
    }

    public function getDescription(): ?string
    {
        return $this->description ?? null;
    }

    public function getDetailedDescriptions(): ?DetailedDescriptions
    {
        return $this->detailedDescriptions ?? null;
    }

    /**
     * @return ExternalComponent[]|null
     */
    public function getExternalFrontend(): ?array
    {
        return $this->externalFrontend ?? null;
    }

    /**
     * @return mixed[]|null
     */
    public function getFrontendFragments(): ?array
    {
        return $this->frontendFragments ?? null;
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

    public function getWebhookURLs(): ?WebhookUrls
    {
        return $this->webhookURLs ?? null;
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
        $validator->validate($contributorId, self::$schema['properties']['contributorId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->contributorId = $contributorId;

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

    /**
     * @param ExternalComponent[] $externalFrontend
     */
    public function withExternalFrontend(array $externalFrontend): self
    {
        $clone = clone $this;
        $clone->externalFrontend = $externalFrontend;

        return $clone;
    }

    public function withoutExternalFrontend(): self
    {
        $clone = clone $this;
        unset($clone->externalFrontend);

        return $clone;
    }

    /**
     * @param mixed[] $frontendFragments
     */
    public function withFrontendFragments(array $frontendFragments): self
    {
        $validator = new Validator();
        $validator->validate($frontendFragments, self::$schema['properties']['frontendFragments']);
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
        $validator->validate($name, self::$schema['properties']['name']);
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
        $validator->validate($scopes, self::$schema['properties']['scopes']);
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
        $validator->validate($tags, self::$schema['properties']['tags']);
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

    public function withWebhookURLs(WebhookUrls $webhookURLs): self
    {
        $clone = clone $this;
        $clone->webhookURLs = $webhookURLs;

        return $clone;
    }

    public function withoutWebhookURLs(): self
    {
        $clone = clone $this;
        unset($clone->webhookURLs);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ExtensionRegisterExtensionRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ExtensionRegisterExtensionRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $context = null;
        if (isset($input->{'context'})) {
            $context = Context::from($input->{'context'});
        }
        $contributorId = $input->{'contributorId'};
        $description = null;
        if (isset($input->{'description'})) {
            $description = $input->{'description'};
        }
        $detailedDescriptions = null;
        if (isset($input->{'detailedDescriptions'})) {
            $detailedDescriptions = DetailedDescriptions::buildFromInput($input->{'detailedDescriptions'}, validate: $validate);
        }
        $externalFrontend = null;
        if (isset($input->{'externalFrontend'})) {
            $externalFrontend = array_map(fn (array|object $i): ExternalComponent => ExternalComponent::buildFromInput($i, validate: $validate), $input->{'externalFrontend'});
        }
        $frontendFragments = null;
        if (isset($input->{'frontendFragments'})) {
            $frontendFragments = (array)$input->{'frontendFragments'};
        }
        $name = $input->{'name'};
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
        $webhookURLs = null;
        if (isset($input->{'webhookURLs'})) {
            $webhookURLs = WebhookUrls::buildFromInput($input->{'webhookURLs'}, validate: $validate);
        }

        $obj = new self($contributorId, $name);
        $obj->context = $context;
        $obj->description = $description;
        $obj->detailedDescriptions = $detailedDescriptions;
        $obj->externalFrontend = $externalFrontend;
        $obj->frontendFragments = $frontendFragments;
        $obj->scopes = $scopes;
        $obj->subTitle = $subTitle;
        $obj->support = $support;
        $obj->tags = $tags;
        $obj->webhookURLs = $webhookURLs;
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
        if (isset($this->context)) {
            $output['context'] = $this->context->value;
        }
        $output['contributorId'] = $this->contributorId;
        if (isset($this->description)) {
            $output['description'] = $this->description;
        }
        if (isset($this->detailedDescriptions)) {
            $output['detailedDescriptions'] = $this->detailedDescriptions->toJson();
        }
        if (isset($this->externalFrontend)) {
            $output['externalFrontend'] = array_map(fn (ExternalComponent $i): array => $i->toJson(), $this->externalFrontend);
        }
        if (isset($this->frontendFragments)) {
            $output['frontendFragments'] = $this->frontendFragments;
        }
        $output['name'] = $this->name;
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
        if (isset($this->webhookURLs)) {
            $output['webhookURLs'] = $this->webhookURLs->toJson();
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
