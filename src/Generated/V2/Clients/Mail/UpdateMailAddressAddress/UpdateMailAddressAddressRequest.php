<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAddress;

use InvalidArgumentException;
use JsonSchema\Validator;

class UpdateMailAddressAddressRequest
{
    public const method = 'patch';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
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
                    'address' => [
                        'format' => 'email',
                        'type' => 'string',
                    ],
                ],
                'required' => [
                    'address',
                ],
            ],
        ],
        'required' => [
            'mailAddressId',
            'body',
        ],
    ];

    /**
     * @var string
     */
    private string $mailAddressId;

    /**
     * @var UpdateMailAddressAddressRequestBody
     */
    private UpdateMailAddressAddressRequestBody $body;

    private array $headers = [

    ];

    /**
     * @param string $mailAddressId
     * @param UpdateMailAddressAddressRequestBody $body
     */
    public function __construct(string $mailAddressId, UpdateMailAddressAddressRequestBody $body)
    {
        $this->mailAddressId = $mailAddressId;
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getMailAddressId(): string
    {
        return $this->mailAddressId;
    }

    /**
     * @return UpdateMailAddressAddressRequestBody
     */
    public function getBody(): UpdateMailAddressAddressRequestBody
    {
        return $this->body;
    }

    /**
     * @param string $mailAddressId
     * @return self
     */
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

    /**
     * @param UpdateMailAddressAddressRequestBody $body
     * @return self
     */
    public function withBody(UpdateMailAddressAddressRequestBody $body): self
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
     * @return UpdateMailAddressAddressRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): UpdateMailAddressAddressRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $mailAddressId = $input->{'mailAddressId'};
        $body = UpdateMailAddressAddressRequestBody::buildFromInput($input->{'body'}, validate: $validate);

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

    public function getUrl(): string
    {
        $mapped = $this->toJson();
        $mailAddressId = urlencode($mapped['mailAddressId']);
        return '/v2/mail-addresses/' . $mailAddressId . '/address';
    }

    public function getQuery(): array
    {
        $mapped = $this->toJson();
        $query = [];
        return $query;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function withHeader(string $name, string|array $value): self
    {
        $clone = clone $this;
        $clone->headers[$name] = $value;
        return $clone;
    }
}