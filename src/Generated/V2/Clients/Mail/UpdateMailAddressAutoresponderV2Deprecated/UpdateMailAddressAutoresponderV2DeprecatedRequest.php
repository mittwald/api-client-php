<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAutoresponderV2Deprecated;

use InvalidArgumentException;
use JsonSchema\Validator;

class UpdateMailAddressAutoresponderV2DeprecatedRequest
{
    public const method = 'put';

    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'type' => 'object',
        'properties' => [
            'mailAddressId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'body' => [
                'properties' => [
                    'autoResponder' => [
                        'nullable' => true,
                        'properties' => [
                            'active' => [
                                'type' => 'boolean',
                            ],
                            'expiresAt' => [
                                'format' => 'date-time',
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'startsAt' => [
                                'format' => 'date-time',
                                'type' => 'string',
                            ],
                        ],
                        'required' => [
                            'message',
                            'active',
                        ],
                        'type' => 'object',
                    ],
                ],
                'required' => [
                    'autoResponder',
                ],
            ],
        ],
        'required' => [
            'mailAddressId',
            'body',
        ],
    ];

    private string $mailAddressId;

    private UpdateMailAddressAutoresponderV2DeprecatedRequestBody $body;

    private array $headers = [

    ];

    public function __construct(string $mailAddressId, UpdateMailAddressAutoresponderV2DeprecatedRequestBody $body)
    {
        $this->mailAddressId = $mailAddressId;
        $this->body = $body;
    }

    public function getMailAddressId(): string
    {
        return $this->mailAddressId;
    }

    public function getBody(): UpdateMailAddressAutoresponderV2DeprecatedRequestBody
    {
        return $this->body;
    }

    public function withMailAddressId(string $mailAddressId): self
    {
        $validator = new Validator();
        $validator->validate($mailAddressId, static::$schema['properties']['mailAddressId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->mailAddressId = $mailAddressId;

        return $clone;
    }

    public function withBody(UpdateMailAddressAutoresponderV2DeprecatedRequestBody $body): self
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
     * @return UpdateMailAddressAutoresponderV2DeprecatedRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): UpdateMailAddressAutoresponderV2DeprecatedRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $mailAddressId = $input->{'mailAddressId'};
        $body = UpdateMailAddressAutoresponderV2DeprecatedRequestBody::buildFromInput($input->{'body'}, validate: $validate);

        $obj = new self($mailAddressId, $body);

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
        $output['mailAddressId'] = $this->mailAddressId;
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
        $mailAddressId = urlencode($mapped['mailAddressId']);
        return '/v2/mail-addresses/' . $mailAddressId . '/autoresponder';
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
