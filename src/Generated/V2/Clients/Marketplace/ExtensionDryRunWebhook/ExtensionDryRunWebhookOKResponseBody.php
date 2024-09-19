<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionDryRunWebhook;

use InvalidArgumentException;
use JsonSchema\Validator;

class ExtensionDryRunWebhookOKResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'errorMessage' => [
                'description' => 'The error message of an internal error.',
                'example' => 'The url httpsecurity is not a valid protocol',
                'type' => 'string',
            ],
            'responseBody' => [
                'type' => 'string',
            ],
            'responseCode' => [
                'description' => 'The http status code that the external application responded with.',
                'example' => 200,
                'type' => 'number',
            ],
            'responseHeaders' => [
                'type' => 'string',
            ],
            'routeCalled' => [
                'example' => 'https://example.com/extension/e1a9370f-cc3c-42b9-98b4-8e3ac54c9710/instance/f567441d-2429-48fd-8fe9-6c5dc18722d8/add?dry-run=true',
                'type' => 'string',
            ],
            'successful' => [
                'description' => 'This shows if the response of the external application has been accepted as successful.',
                'example' => true,
                'type' => 'boolean',
            ],
        ],
        'required' => [
            'successful',
            'routeCalled',
        ],
        'type' => 'object',
    ];

    /**
     * The error message of an internal error.
     */
    private ?string $errorMessage = null;

    private ?string $responseBody = null;

    /**
     * The http status code that the external application responded with.
     */
    private int|float|null $responseCode = null;

    private ?string $responseHeaders = null;

    private string $routeCalled;

    /**
     * This shows if the response of the external application has been accepted as successful.
     */
    private bool $successful;

    public function __construct(string $routeCalled, bool $successful)
    {
        $this->routeCalled = $routeCalled;
        $this->successful = $successful;
    }

    public function getErrorMessage(): ?string
    {
        return $this->errorMessage ?? null;
    }

    public function getResponseBody(): ?string
    {
        return $this->responseBody ?? null;
    }

    public function getResponseCode(): int|float|null
    {
        return $this->responseCode;
    }

    public function getResponseHeaders(): ?string
    {
        return $this->responseHeaders ?? null;
    }

    public function getRouteCalled(): string
    {
        return $this->routeCalled;
    }

    public function getSuccessful(): bool
    {
        return $this->successful;
    }

    public function withErrorMessage(string $errorMessage): self
    {
        $validator = new Validator();
        $validator->validate($errorMessage, static::$schema['properties']['errorMessage']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->errorMessage = $errorMessage;

        return $clone;
    }

    public function withoutErrorMessage(): self
    {
        $clone = clone $this;
        unset($clone->errorMessage);

        return $clone;
    }

    public function withResponseBody(string $responseBody): self
    {
        $validator = new Validator();
        $validator->validate($responseBody, static::$schema['properties']['responseBody']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->responseBody = $responseBody;

        return $clone;
    }

    public function withoutResponseBody(): self
    {
        $clone = clone $this;
        unset($clone->responseBody);

        return $clone;
    }

    /**
     * @param int|float $responseCode
     */
    public function withResponseCode(int|float $responseCode): self
    {
        $validator = new Validator();
        $validator->validate($responseCode, static::$schema['properties']['responseCode']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->responseCode = $responseCode;

        return $clone;
    }

    public function withoutResponseCode(): self
    {
        $clone = clone $this;
        unset($clone->responseCode);

        return $clone;
    }

    public function withResponseHeaders(string $responseHeaders): self
    {
        $validator = new Validator();
        $validator->validate($responseHeaders, static::$schema['properties']['responseHeaders']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->responseHeaders = $responseHeaders;

        return $clone;
    }

    public function withoutResponseHeaders(): self
    {
        $clone = clone $this;
        unset($clone->responseHeaders);

        return $clone;
    }

    public function withRouteCalled(string $routeCalled): self
    {
        $validator = new Validator();
        $validator->validate($routeCalled, static::$schema['properties']['routeCalled']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->routeCalled = $routeCalled;

        return $clone;
    }

    public function withSuccessful(bool $successful): self
    {
        $validator = new Validator();
        $validator->validate($successful, static::$schema['properties']['successful']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->successful = $successful;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ExtensionDryRunWebhookOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ExtensionDryRunWebhookOKResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $errorMessage = null;
        if (isset($input->{'errorMessage'})) {
            $errorMessage = $input->{'errorMessage'};
        }
        $responseBody = null;
        if (isset($input->{'responseBody'})) {
            $responseBody = $input->{'responseBody'};
        }
        $responseCode = null;
        if (isset($input->{'responseCode'})) {
            $responseCode = str_contains((string)($input->{'responseCode'}), '.') ? (float)($input->{'responseCode'}) : (int)($input->{'responseCode'});
        }
        $responseHeaders = null;
        if (isset($input->{'responseHeaders'})) {
            $responseHeaders = $input->{'responseHeaders'};
        }
        $routeCalled = $input->{'routeCalled'};
        $successful = (bool)($input->{'successful'});

        $obj = new self($routeCalled, $successful);
        $obj->errorMessage = $errorMessage;
        $obj->responseBody = $responseBody;
        $obj->responseCode = $responseCode;
        $obj->responseHeaders = $responseHeaders;
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
        if (isset($this->errorMessage)) {
            $output['errorMessage'] = $this->errorMessage;
        }
        if (isset($this->responseBody)) {
            $output['responseBody'] = $this->responseBody;
        }
        if (isset($this->responseCode)) {
            $output['responseCode'] = $this->responseCode;
        }
        if (isset($this->responseHeaders)) {
            $output['responseHeaders'] = $this->responseHeaders;
        }
        $output['routeCalled'] = $this->routeCalled;
        $output['successful'] = $this->successful;

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
