<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionOrderExtension;

use InvalidArgumentException;
use JsonSchema\Validator;

class ExtensionOrderExtensionRequestBodyAlternative2
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
            'projectId' => [
                'description' => 'The project the extension should be installed in. Either customerId or projectId is required.',
                'format' => 'uuid',
                'type' => 'string',
            ],
            'variantKey' => [
                'description' => 'The Variant Key of the selected Variant of the Extension. This is only required if the Extension has multiple Variants.',
                'example' => 'default',
                'type' => 'string',
            ],
        ],
        'required' => [
            'consentedScopes',
            'projectId',
        ],
        'type' => 'object',
    ];

    /**
     * @var string[]
     */
    private array $consentedScopes;

    /**
     * The project the extension should be installed in. Either customerId or projectId is required.
     */
    private string $projectId;

    /**
     * The Variant Key of the selected Variant of the Extension. This is only required if the Extension has multiple Variants.
     */
    private ?string $variantKey = null;

    /**
     * @param string[] $consentedScopes
     */
    public function __construct(array $consentedScopes, string $projectId)
    {
        $this->consentedScopes = $consentedScopes;
        $this->projectId = $projectId;
    }

    /**
     * @return string[]
     */
    public function getConsentedScopes(): array
    {
        return $this->consentedScopes;
    }

    public function getProjectId(): string
    {
        return $this->projectId;
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

    public function withProjectId(string $projectId): self
    {
        $validator = new Validator();
        $validator->validate($projectId, self::$internalValidationSchema['properties']['projectId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->projectId = $projectId;

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
     * @return ExtensionOrderExtensionRequestBodyAlternative2 Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ExtensionOrderExtensionRequestBodyAlternative2
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $consentedScopes = $input->{'consentedScopes'};
        $projectId = $input->{'projectId'};
        $variantKey = null;
        if (isset($input->{'variantKey'})) {
            $variantKey = $input->{'variantKey'};
        }

        $obj = new self($consentedScopes, $projectId);
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
        $output['projectId'] = $this->projectId;
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
