<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorRotateSecretForExtensionInstance;

use InvalidArgumentException;
use JsonSchema\Validator;

class ContributorRotateSecretForExtensionInstanceOKResponseBodyWebhookResult
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
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
    ];

    private bool $failure;

    /**
     * The status code returned by the external application.
     */
    private ?string $statusCode = null;

    public function __construct(bool $failure)
    {
        $this->failure = $failure;
    }

    public function getFailure(): bool
    {
        return $this->failure;
    }

    public function getStatusCode(): ?string
    {
        return $this->statusCode ?? null;
    }

    public function withFailure(bool $failure): self
    {
        $validator = new Validator();
        $validator->validate($failure, static::$schema['properties']['failure']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->failure = $failure;

        return $clone;
    }

    public function withStatusCode(string $statusCode): self
    {
        $validator = new Validator();
        $validator->validate($statusCode, static::$schema['properties']['statusCode']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->statusCode = $statusCode;

        return $clone;
    }

    public function withoutStatusCode(): self
    {
        $clone = clone $this;
        unset($clone->statusCode);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ContributorRotateSecretForExtensionInstanceOKResponseBodyWebhookResult Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ContributorRotateSecretForExtensionInstanceOKResponseBodyWebhookResult
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $failure = (bool)($input->{'failure'});
        $statusCode = null;
        if (isset($input->{'statusCode'})) {
            $statusCode = $input->{'statusCode'};
        }

        $obj = new self($failure);
        $obj->statusCode = $statusCode;
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
        $output['failure'] = $this->failure;
        if (isset($this->statusCode)) {
            $output['statusCode'] = $this->statusCode;
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
