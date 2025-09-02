<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionDryRunWebhook;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Marketplace\WebhookKind;

class ExtensionDryRunWebhookRequest
{
    public const method = 'post';

    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'type' => 'object',
        'properties' => [
            'contributorId' => [
                'type' => 'string',
            ],
            'extensionId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'extensionInstanceId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'webhookKind' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.marketplace.WebhookKind',
            ],
            'contextId' => [
                'type' => 'string',
            ],
            'scopes' => [
                'items' => [
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
            'instanceDisabled' => [
                'type' => 'boolean',
            ],
            'createdAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'secret' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'contributorId',
            'extensionId',
            'extensionInstanceId',
            'webhookKind',
        ],
    ];

    private string $contributorId;

    private string $extensionId;

    private string $extensionInstanceId;

    private WebhookKind $webhookKind;

    private ?string $contextId = null;

    /**
     * @var string[]|null
     */
    private ?array $scopes = null;

    private ?bool $instanceDisabled = null;

    private ?DateTime $createdAt = null;

    private ?string $secret = null;

    private array $headers = [

    ];

    public function __construct(string $contributorId, string $extensionId, string $extensionInstanceId, WebhookKind $webhookKind)
    {
        $this->contributorId = $contributorId;
        $this->extensionId = $extensionId;
        $this->extensionInstanceId = $extensionInstanceId;
        $this->webhookKind = $webhookKind;
    }

    public function getContributorId(): string
    {
        return $this->contributorId;
    }

    public function getExtensionId(): string
    {
        return $this->extensionId;
    }

    public function getExtensionInstanceId(): string
    {
        return $this->extensionInstanceId;
    }

    public function getWebhookKind(): WebhookKind
    {
        return $this->webhookKind;
    }

    public function getContextId(): ?string
    {
        return $this->contextId ?? null;
    }

    /**
     * @return string[]|null
     */
    public function getScopes(): ?array
    {
        return $this->scopes ?? null;
    }

    public function getInstanceDisabled(): ?bool
    {
        return $this->instanceDisabled ?? null;
    }

    public function getCreatedAt(): ?DateTime
    {
        return $this->createdAt ?? null;
    }

    public function getSecret(): ?string
    {
        return $this->secret ?? null;
    }

    public function withContributorId(string $contributorId): self
    {
        $validator = new Validator();
        $validator->validate($contributorId, self::$internalValidationSchema['properties']['contributorId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->contributorId = $contributorId;

        return $clone;
    }

    public function withExtensionId(string $extensionId): self
    {
        $validator = new Validator();
        $validator->validate($extensionId, self::$internalValidationSchema['properties']['extensionId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->extensionId = $extensionId;

        return $clone;
    }

    public function withExtensionInstanceId(string $extensionInstanceId): self
    {
        $validator = new Validator();
        $validator->validate($extensionInstanceId, self::$internalValidationSchema['properties']['extensionInstanceId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->extensionInstanceId = $extensionInstanceId;

        return $clone;
    }

    public function withWebhookKind(WebhookKind $webhookKind): self
    {
        $clone = clone $this;
        $clone->webhookKind = $webhookKind;

        return $clone;
    }

    public function withContextId(string $contextId): self
    {
        $validator = new Validator();
        $validator->validate($contextId, self::$internalValidationSchema['properties']['contextId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->contextId = $contextId;

        return $clone;
    }

    public function withoutContextId(): self
    {
        $clone = clone $this;
        unset($clone->contextId);

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

    public function withInstanceDisabled(bool $instanceDisabled): self
    {
        $validator = new Validator();
        $validator->validate($instanceDisabled, self::$internalValidationSchema['properties']['instanceDisabled']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->instanceDisabled = $instanceDisabled;

        return $clone;
    }

    public function withoutInstanceDisabled(): self
    {
        $clone = clone $this;
        unset($clone->instanceDisabled);

        return $clone;
    }

    public function withCreatedAt(DateTime $createdAt): self
    {
        $clone = clone $this;
        $clone->createdAt = $createdAt;

        return $clone;
    }

    public function withoutCreatedAt(): self
    {
        $clone = clone $this;
        unset($clone->createdAt);

        return $clone;
    }

    public function withSecret(string $secret): self
    {
        $validator = new Validator();
        $validator->validate($secret, self::$internalValidationSchema['properties']['secret']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->secret = $secret;

        return $clone;
    }

    public function withoutSecret(): self
    {
        $clone = clone $this;
        unset($clone->secret);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ExtensionDryRunWebhookRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ExtensionDryRunWebhookRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $contributorId = $input->{'contributorId'};
        $extensionId = $input->{'extensionId'};
        $extensionInstanceId = $input->{'extensionInstanceId'};
        $webhookKind = WebhookKind::from($input->{'webhookKind'});
        $contextId = null;
        if (isset($input->{'contextId'})) {
            $contextId = $input->{'contextId'};
        }
        $scopes = null;
        if (isset($input->{'scopes'})) {
            $scopes = $input->{'scopes'};
        }
        $instanceDisabled = null;
        if (isset($input->{'instanceDisabled'})) {
            $instanceDisabled = (bool)($input->{'instanceDisabled'});
        }
        $createdAt = null;
        if (isset($input->{'createdAt'})) {
            $createdAt = new DateTime($input->{'createdAt'});
        }
        $secret = null;
        if (isset($input->{'secret'})) {
            $secret = $input->{'secret'};
        }

        $obj = new self($contributorId, $extensionId, $extensionInstanceId, $webhookKind);
        $obj->contextId = $contextId;
        $obj->scopes = $scopes;
        $obj->instanceDisabled = $instanceDisabled;
        $obj->createdAt = $createdAt;
        $obj->secret = $secret;
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
        $output['contributorId'] = $this->contributorId;
        $output['extensionId'] = $this->extensionId;
        $output['extensionInstanceId'] = $this->extensionInstanceId;
        $output['webhookKind'] = $this->webhookKind->value;
        if (isset($this->contextId)) {
            $output['contextId'] = $this->contextId;
        }
        if (isset($this->scopes)) {
            $output['scopes'] = $this->scopes;
        }
        if (isset($this->instanceDisabled)) {
            $output['instanceDisabled'] = $this->instanceDisabled;
        }
        if (isset($this->createdAt)) {
            $output['createdAt'] = ($this->createdAt)->format(DateTime::ATOM);
        }
        if (isset($this->secret)) {
            $output['secret'] = $this->secret;
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
        if (isset($this->createdAt)) {
            $this->createdAt = clone $this->createdAt;
        }
    }

    /**
     * Builds the URL for this request
     *
     * This method is used internally by the client to build the URL for this request.
     * You should not need to call this method directly.
     *
     * @internal
     * @return string The URL for this request
     */
    public function buildUrl(): string
    {
        $mapped = $this->toJson();
        $contributorId = urlencode($mapped['contributorId']);
        $extensionId = urlencode($mapped['extensionId']);
        $extensionInstanceId = urlencode($mapped['extensionInstanceId']);
        $webhookKind = urlencode($mapped['webhookKind']);
        return '/v2/contributors/' . $contributorId . '/extensions/' . $extensionId . '/extension-instances/' . $extensionInstanceId . '/actions/dry-run/' . $webhookKind;
    }

    /**
     * Builds the request options for this request
     *
     * This method is used internally by the client to build the Guzzle request options
     * for this request. You should not need to call this method directly.
     *
     * @internal
     * @return array The Guzzle request options for this request
     */
    public function buildRequestOptions(): array
    {
        $mapped = $this->toJson();
        $query = [];
        if (isset($mapped['contextId'])) {
            $query['contextId'] = $mapped['contextId'];
        }
        if (isset($mapped['scopes'])) {
            $query['scopes'] = $mapped['scopes'];
        }
        if (isset($mapped['instanceDisabled'])) {
            $query['instanceDisabled'] = $mapped['instanceDisabled'];
        }
        if (isset($mapped['createdAt'])) {
            $query['createdAt'] = $mapped['createdAt'];
        }
        if (isset($mapped['secret'])) {
            $query['secret'] = $mapped['secret'];
        }
        return [
            'query' => $query,
            'headers' => $this->headers,
        ];
    }

    /**
     * Adds a header to this request
     *
     * You can use this method to add custom HTTP headers to the request.
     *
     * @param string $name The name of the header to add
     * @param string|array $value The value of the header to add
     * @return self A clone of this request with the header added
     */
    public function withHeader(string $name, string|array $value): self
    {
        $clone = clone $this;
        $clone->headers[$name] = $value;
        return $clone;
    }
}
