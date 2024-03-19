<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Mail\CreateMailAddress;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Mail\CreateForwardAddress;
use Mittwald\ApiClient\Generated\V2\Schemas\Mail\CreateMailAddress;

class CreateMailAddressRequest
{
    public const method = 'post';

    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'type' => 'object',
        'properties' => [
            'projectId' => [
                'type' => 'string',
            ],
            'body' => [
                'oneOf' => [
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.mail.CreateForwardAddress',
                    ],
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.mail.CreateMailAddress',
                    ],
                ],
            ],
        ],
        'required' => [
            'projectId',
            'body',
        ],
    ];

    private string $projectId;

    private CreateForwardAddress|CreateMailAddress $body;

    private array $headers = [

    ];

    /**
     * @param CreateForwardAddress|CreateMailAddress $body
     */
    public function __construct(string $projectId, CreateForwardAddress|CreateMailAddress $body)
    {
        $this->projectId = $projectId;
        $this->body = $body;
    }

    public function getProjectId(): string
    {
        return $this->projectId;
    }

    /**
     * @return
     * \Mittwald\ApiClient\Generated\V2\Schemas\Mail\CreateForwardAddress|\Mittwald\ApiClient\Generated\V2\Schemas\Mail\CreateMailAddress
     */
    public function getBody(): CreateForwardAddress|CreateMailAddress
    {
        return $this->body;
    }

    public function withProjectId(string $projectId): self
    {
        $validator = new Validator();
        $validator->validate($projectId, static::$schema['properties']['projectId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->projectId = $projectId;

        return $clone;
    }

    /**
     * @param CreateForwardAddress|CreateMailAddress $body
     */
    public function withBody(CreateForwardAddress|CreateMailAddress $body): self
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
     * @return CreateMailAddressRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CreateMailAddressRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $projectId = $input->{'projectId'};
        $body = match (true) {
            CreateForwardAddress::validateInput($input->{'body'}, true) => CreateForwardAddress::buildFromInput($input->{'body'}, validate: $validate),
            CreateMailAddress::validateInput($input->{'body'}, true) => CreateMailAddress::buildFromInput($input->{'body'}, validate: $validate),
        };

        $obj = new self($projectId, $body);

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
        $output['projectId'] = $this->projectId;
        $output['body'] = match (true) {
            ($this->body) instanceof CreateForwardAddress, ($this->body) instanceof CreateMailAddress => $this->body->toJson(),
        };

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
        $this->body = match (true) {
            ($this->body) instanceof CreateForwardAddress, ($this->body) instanceof CreateMailAddress => $this->body,
        };
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
        $projectId = urlencode($mapped['projectId']);
        return '/v2/projects/' . $projectId . '/mail-addresses';
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
