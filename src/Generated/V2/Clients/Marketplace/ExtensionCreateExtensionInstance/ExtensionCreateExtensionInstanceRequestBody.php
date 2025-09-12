<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionCreateExtensionInstance;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Marketplace\Context;

class ExtensionCreateExtensionInstanceRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'consentedScopes' => [
                'items' => [
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
            'context' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.marketplace.Context',
            ],
            'contextId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'extensionId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'variantKey' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'extensionId',
            'consentedScopes',
            'context',
            'contextId',
        ],
        'type' => 'object',
    ];

    /**
     * @var string[]
     */
    private array $consentedScopes;

    private Context $context;

    private string $contextId;

    private string $extensionId;

    private ?string $variantKey = null;

    /**
     * @param string[] $consentedScopes
     */
    public function __construct(array $consentedScopes, Context $context, string $contextId, string $extensionId)
    {
        $this->consentedScopes = $consentedScopes;
        $this->context = $context;
        $this->contextId = $contextId;
        $this->extensionId = $extensionId;
    }

    /**
     * @return string[]
     */
    public function getConsentedScopes(): array
    {
        return $this->consentedScopes;
    }

    public function getContext(): Context
    {
        return $this->context;
    }

    public function getContextId(): string
    {
        return $this->contextId;
    }

    public function getExtensionId(): string
    {
        return $this->extensionId;
    }

    public function getVariantKey(): ?string
    {
        return $this->variantKey ?? null;
    }

    /**
     * @param string[] $consentedScopes
     */
    public function withConsentedScopes(array $consentedScopes): self
    {
        $validator = new Validator();
        $validator->validate($consentedScopes, self::$internalValidationSchema['properties']['consentedScopes']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->consentedScopes = $consentedScopes;

        return $clone;
    }

    public function withContext(Context $context): self
    {
        $clone = clone $this;
        $clone->context = $context;

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

    public function withVariantKey(string $variantKey): self
    {
        $validator = new Validator();
        $validator->validate($variantKey, self::$internalValidationSchema['properties']['variantKey']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->variantKey = $variantKey;

        return $clone;
    }

    public function withoutVariantKey(): self
    {
        $clone = clone $this;
        unset($clone->variantKey);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ExtensionCreateExtensionInstanceRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ExtensionCreateExtensionInstanceRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $consentedScopes = $input->{'consentedScopes'};
        $context = Context::from($input->{'context'});
        $contextId = $input->{'contextId'};
        $extensionId = $input->{'extensionId'};
        $variantKey = null;
        if (isset($input->{'variantKey'})) {
            $variantKey = $input->{'variantKey'};
        }

        $obj = new self($consentedScopes, $context, $contextId, $extensionId);
        $obj->variantKey = $variantKey;
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
        $output['consentedScopes'] = $this->consentedScopes;
        $output['context'] = $this->context->value;
        $output['contextId'] = $this->contextId;
        $output['extensionId'] = $this->extensionId;
        if (isset($this->variantKey)) {
            $output['variantKey'] = $this->variantKey;
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
    }
}
