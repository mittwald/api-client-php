<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionRegisterExtension;

use InvalidArgumentException;
use JsonSchema\Validator;

class ExtensionRegisterExtensionRequest
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
            'body' => [
                'properties' => [
                    'context' => [
                        '$ref' => '#/components/schemas/de.mittwald.v1.marketplace.Context',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'detailedDescriptions' => [
                        '$ref' => '#/components/schemas/de.mittwald.v1.marketplace.DetailedDescriptions',
                    ],
                    'externalFrontend' => [
                        'deprecated' => true,
                        'items' => [
                            '$ref' => '#/components/schemas/de.mittwald.v1.marketplace.ExternalComponent',
                        ],
                        'type' => 'array',
                    ],
                    'externalFrontends' => [
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
                        'allOf' => [
                            [
                                '$ref' => '#/components/schemas/de.mittwald.v1.marketplace.WebhookUrls',
                            ],
                            [
                                'deprecated' => true,
                                'type' => 'object',
                            ],
                        ],
                    ],
                    'webhookUrls' => [
                        '$ref' => '#/components/schemas/de.mittwald.v1.marketplace.WebhookUrls',
                    ],
                ],
                'required' => [
                    'name',
                ],
                'type' => 'object',
            ],
        ],
        'required' => [
            'contributorId',
            'body',
        ],
    ];

    private string $contributorId;

    private ExtensionRegisterExtensionRequestBody $body;

    private array $headers = [

    ];

    public function __construct(string $contributorId, ExtensionRegisterExtensionRequestBody $body)
    {
        $this->contributorId = $contributorId;
        $this->body = $body;
    }

    public function getContributorId(): string
    {
        return $this->contributorId;
    }

    public function getBody(): ExtensionRegisterExtensionRequestBody
    {
        return $this->body;
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

    public function withBody(ExtensionRegisterExtensionRequestBody $body): self
    {
        $clone = clone $this;
        $clone->body = $body;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ExtensionRegisterExtensionRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ExtensionRegisterExtensionRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $contributorId = $input->{'contributorId'};
        $body = ExtensionRegisterExtensionRequestBody::buildFromInput($input->{'body'}, validate: $validate);

        $obj = new self($contributorId, $body);

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
        $output['body'] = ($this->body)->toJson();

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
        $this->body = clone $this->body;
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
        return '/v2/contributors/' . $contributorId . '/extensions';
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
        return [
            'query' => $query,
            'headers' => $this->headers,
            'json' => $this->getBody()->toJson(),
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
