<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorRotateSecretForExtensionInstance;

use InvalidArgumentException;
use JsonSchema\Validator;

class ContributorRotateSecretForExtensionInstanceRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'allowWebhookFailure' => [
                'type' => 'boolean',
            ],
        ],
        'type' => 'object',
    ];

    private ?bool $allowWebhookFailure = null;

    /**
     *
     */
    public function __construct()
    {
    }

    public function getAllowWebhookFailure(): ?bool
    {
        return $this->allowWebhookFailure ?? null;
    }

    public function withAllowWebhookFailure(bool $allowWebhookFailure): self
    {
        $validator = new Validator();
        $validator->validate($allowWebhookFailure, self::$schema['properties']['allowWebhookFailure']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->allowWebhookFailure = $allowWebhookFailure;

        return $clone;
    }

    public function withoutAllowWebhookFailure(): self
    {
        $clone = clone $this;
        unset($clone->allowWebhookFailure);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ContributorRotateSecretForExtensionInstanceRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ContributorRotateSecretForExtensionInstanceRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $allowWebhookFailure = null;
        if (isset($input->{'allowWebhookFailure'})) {
            $allowWebhookFailure = (bool)($input->{'allowWebhookFailure'});
        }

        $obj = new self();
        $obj->allowWebhookFailure = $allowWebhookFailure;
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
        if (isset($this->allowWebhookFailure)) {
            $output['allowWebhookFailure'] = $this->allowWebhookFailure;
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
