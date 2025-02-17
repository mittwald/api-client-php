<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Marketplace;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.marketplace.WebhookUrls.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class WebhookUrls
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'extensionAddedToContext' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.marketplace.WebhookUrl',
            ],
            'extensionInstanceRemovedFromContext' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.marketplace.WebhookUrl',
            ],
            'extensionInstanceSecretRotated' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.marketplace.WebhookUrl',
            ],
            'extensionInstanceUpdated' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.marketplace.WebhookUrl',
            ],
        ],
        'required' => [
            'extensionAddedToContext',
            'extensionInstanceUpdated',
            'extensionInstanceSecretRotated',
            'extensionInstanceRemovedFromContext',
        ],
        'type' => 'object',
    ];

    private WebhookUrl $extensionAddedToContext;

    private WebhookUrl $extensionInstanceRemovedFromContext;

    private WebhookUrl $extensionInstanceSecretRotated;

    private WebhookUrl $extensionInstanceUpdated;

    public function __construct(WebhookUrl $extensionAddedToContext, WebhookUrl $extensionInstanceRemovedFromContext, WebhookUrl $extensionInstanceSecretRotated, WebhookUrl $extensionInstanceUpdated)
    {
        $this->extensionAddedToContext = $extensionAddedToContext;
        $this->extensionInstanceRemovedFromContext = $extensionInstanceRemovedFromContext;
        $this->extensionInstanceSecretRotated = $extensionInstanceSecretRotated;
        $this->extensionInstanceUpdated = $extensionInstanceUpdated;
    }

    public function getExtensionAddedToContext(): WebhookUrl
    {
        return $this->extensionAddedToContext;
    }

    public function getExtensionInstanceRemovedFromContext(): WebhookUrl
    {
        return $this->extensionInstanceRemovedFromContext;
    }

    public function getExtensionInstanceSecretRotated(): WebhookUrl
    {
        return $this->extensionInstanceSecretRotated;
    }

    public function getExtensionInstanceUpdated(): WebhookUrl
    {
        return $this->extensionInstanceUpdated;
    }

    public function withExtensionAddedToContext(WebhookUrl $extensionAddedToContext): self
    {
        $clone = clone $this;
        $clone->extensionAddedToContext = $extensionAddedToContext;

        return $clone;
    }

    public function withExtensionInstanceRemovedFromContext(WebhookUrl $extensionInstanceRemovedFromContext): self
    {
        $clone = clone $this;
        $clone->extensionInstanceRemovedFromContext = $extensionInstanceRemovedFromContext;

        return $clone;
    }

    public function withExtensionInstanceSecretRotated(WebhookUrl $extensionInstanceSecretRotated): self
    {
        $clone = clone $this;
        $clone->extensionInstanceSecretRotated = $extensionInstanceSecretRotated;

        return $clone;
    }

    public function withExtensionInstanceUpdated(WebhookUrl $extensionInstanceUpdated): self
    {
        $clone = clone $this;
        $clone->extensionInstanceUpdated = $extensionInstanceUpdated;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return WebhookUrls Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): WebhookUrls
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $extensionAddedToContext = WebhookUrl::buildFromInput($input->{'extensionAddedToContext'}, validate: $validate);
        $extensionInstanceRemovedFromContext = WebhookUrl::buildFromInput($input->{'extensionInstanceRemovedFromContext'}, validate: $validate);
        $extensionInstanceSecretRotated = WebhookUrl::buildFromInput($input->{'extensionInstanceSecretRotated'}, validate: $validate);
        $extensionInstanceUpdated = WebhookUrl::buildFromInput($input->{'extensionInstanceUpdated'}, validate: $validate);

        $obj = new self($extensionAddedToContext, $extensionInstanceRemovedFromContext, $extensionInstanceSecretRotated, $extensionInstanceUpdated);

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
        $output['extensionAddedToContext'] = $this->extensionAddedToContext->toJson();
        $output['extensionInstanceRemovedFromContext'] = $this->extensionInstanceRemovedFromContext->toJson();
        $output['extensionInstanceSecretRotated'] = $this->extensionInstanceSecretRotated->toJson();
        $output['extensionInstanceUpdated'] = $this->extensionInstanceUpdated->toJson();

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
