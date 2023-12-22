<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Customer\AcceptCustomerInvite;

use InvalidArgumentException;
use JsonSchema\Validator;

class AcceptCustomerInviteRequest
{
    public const method = 'post';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'type' => 'object',
        'properties' => [
            'customerInviteId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'body' => [
                'properties' => [
                    'invitationToken' => [
                        'description' => 'Token contained in the invite for authentication.',
                        'type' => 'string',
                    ],
                ],
                'type' => 'object',
            ],
        ],
        'required' => [
            'customerInviteId',
            'body',
        ],
    ];

    /**
     * @var string
     */
    private string $customerInviteId;

    /**
     * @var AcceptCustomerInviteRequestBody
     */
    private AcceptCustomerInviteRequestBody $body;

    private array $headers = [

    ];

    /**
     * @param string $customerInviteId
     * @param AcceptCustomerInviteRequestBody $body
     */
    public function __construct(string $customerInviteId, AcceptCustomerInviteRequestBody $body)
    {
        $this->customerInviteId = $customerInviteId;
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getCustomerInviteId(): string
    {
        return $this->customerInviteId;
    }

    /**
     * @return AcceptCustomerInviteRequestBody
     */
    public function getBody(): AcceptCustomerInviteRequestBody
    {
        return $this->body;
    }

    /**
     * @param string $customerInviteId
     * @return self
     */
    public function withCustomerInviteId(string $customerInviteId): self
    {
        $validator = new Validator();
        $validator->validate($customerInviteId, static::$schema['properties']['customerInviteId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->customerInviteId = $customerInviteId;

        return $clone;
    }

    /**
     * @param AcceptCustomerInviteRequestBody $body
     * @return self
     */
    public function withBody(AcceptCustomerInviteRequestBody $body): self
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
     * @return AcceptCustomerInviteRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): AcceptCustomerInviteRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $customerInviteId = $input->{'customerInviteId'};
        $body = AcceptCustomerInviteRequestBody::buildFromInput($input->{'body'}, validate: $validate);

        $obj = new self($customerInviteId, $body);

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
        $output['customerInviteId'] = $this->customerInviteId;
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
        $validator = new Validator();
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
        $customerInviteId = urlencode($mapped['customerInviteId']);
        return '/v2/customer-invites/' . $customerInviteId . '/actions/accept';
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
