<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetProjectExtensionInstanceOrders;

use InvalidArgumentException;
use JsonSchema\Validator;

class ExtensionGetProjectExtensionInstanceOrdersOKResponseBodyItem
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'context' => [
                'enum' => [
                    'project',
                    'customer',
                ],
                'type' => 'string',
            ],
            'extensionId' => [
                'type' => 'string',
            ],
            'referencedId' => [
                'type' => 'string',
            ],
        ],
        'type' => 'object',
    ];

    private ?ExtensionGetProjectExtensionInstanceOrdersOKResponseBodyItemContext $context = null;

    private ?string $extensionId = null;

    private ?string $referencedId = null;

    /**
     *
     */
    public function __construct()
    {
    }

    public function getContext(): ?ExtensionGetProjectExtensionInstanceOrdersOKResponseBodyItemContext
    {
        return $this->context ?? null;
    }

    public function getExtensionId(): ?string
    {
        return $this->extensionId ?? null;
    }

    public function getReferencedId(): ?string
    {
        return $this->referencedId ?? null;
    }

    public function withContext(ExtensionGetProjectExtensionInstanceOrdersOKResponseBodyItemContext $context): self
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

    public function withoutExtensionId(): self
    {
        $clone = clone $this;
        unset($clone->extensionId);

        return $clone;
    }

    public function withReferencedId(string $referencedId): self
    {
        $validator = new Validator();
        $validator->validate($referencedId, self::$internalValidationSchema['properties']['referencedId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->referencedId = $referencedId;

        return $clone;
    }

    public function withoutReferencedId(): self
    {
        $clone = clone $this;
        unset($clone->referencedId);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ExtensionGetProjectExtensionInstanceOrdersOKResponseBodyItem Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ExtensionGetProjectExtensionInstanceOrdersOKResponseBodyItem
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $context = null;
        if (isset($input->{'context'})) {
            $context = ExtensionGetProjectExtensionInstanceOrdersOKResponseBodyItemContext::from($input->{'context'});
        }
        $extensionId = null;
        if (isset($input->{'extensionId'})) {
            $extensionId = $input->{'extensionId'};
        }
        $referencedId = null;
        if (isset($input->{'referencedId'})) {
            $referencedId = $input->{'referencedId'};
        }

        $obj = new self();
        $obj->context = $context;
        $obj->extensionId = $extensionId;
        $obj->referencedId = $referencedId;
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
            $output['context'] = ($this->context)->value;
        }
        if (isset($this->extensionId)) {
            $output['extensionId'] = $this->extensionId;
        }
        if (isset($this->referencedId)) {
            $output['referencedId'] = $this->referencedId;
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
