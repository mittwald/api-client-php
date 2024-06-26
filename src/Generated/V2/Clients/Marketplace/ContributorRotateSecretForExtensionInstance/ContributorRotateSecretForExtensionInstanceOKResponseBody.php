<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorRotateSecretForExtensionInstance;

use InvalidArgumentException;
use JsonSchema\Validator;

class ContributorRotateSecretForExtensionInstanceOKResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'secret' => [
                'type' => 'string',
            ],
            'webhookResult' => [
                'properties' => [
                    'failure' => [
                        'type' => 'boolean',
                    ],
                    'statusCode' => [
                        'description' => 'The status code returned by the external application.',
                        'type' => 'string',
                    ],
                ],
                'required' => [
                    'failure',
                ],
                'type' => 'object',
            ],
        ],
        'required' => [
            'secret',
            'webhookResult',
        ],
        'type' => 'object',
    ];

    private string $secret;

    private ContributorRotateSecretForExtensionInstanceOKResponseBodyWebhookResult $webhookResult;

    public function __construct(string $secret, ContributorRotateSecretForExtensionInstanceOKResponseBodyWebhookResult $webhookResult)
    {
        $this->secret = $secret;
        $this->webhookResult = $webhookResult;
    }

    public function getSecret(): string
    {
        return $this->secret;
    }

    public function getWebhookResult(): ContributorRotateSecretForExtensionInstanceOKResponseBodyWebhookResult
    {
        return $this->webhookResult;
    }

    public function withSecret(string $secret): self
    {
        $validator = new Validator();
        $validator->validate($secret, static::$schema['properties']['secret']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->secret = $secret;

        return $clone;
    }

    public function withWebhookResult(ContributorRotateSecretForExtensionInstanceOKResponseBodyWebhookResult $webhookResult): self
    {
        $clone = clone $this;
        $clone->webhookResult = $webhookResult;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ContributorRotateSecretForExtensionInstanceOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ContributorRotateSecretForExtensionInstanceOKResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $secret = $input->{'secret'};
        $webhookResult = ContributorRotateSecretForExtensionInstanceOKResponseBodyWebhookResult::buildFromInput($input->{'webhookResult'}, validate: $validate);

        $obj = new self($secret, $webhookResult);

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
        $output['secret'] = $this->secret;
        $output['webhookResult'] = ($this->webhookResult)->toJson();

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
        $this->webhookResult = clone $this->webhookResult;
    }
}
