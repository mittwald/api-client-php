<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressForwardAddressesV2Deprecated;

use InvalidArgumentException;
use JsonSchema\Validator;

class UpdateMailAddressForwardAddressesV2DeprecatedRequest
{
    public const method = 'put';

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
                    'forwardAddresses' => [
                        'items' => [
                            'format' => 'email',
                            'type' => 'string',
                        ],
                        'type' => 'array',
                    ],
                ],
                'required' => [
                    'forwardAddresses',
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
     * @var UpdateMailAddressForwardAddressesV2DeprecatedRequestBody
     */
    private UpdateMailAddressForwardAddressesV2DeprecatedRequestBody $body;

    private array $headers = [

    ];

    /**
     * @param string $mailAddressId
     * @param UpdateMailAddressForwardAddressesV2DeprecatedRequestBody $body
     */
    public function __construct(string $mailAddressId, UpdateMailAddressForwardAddressesV2DeprecatedRequestBody $body)
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
     * @return UpdateMailAddressForwardAddressesV2DeprecatedRequestBody
     */
    public function getBody(): UpdateMailAddressForwardAddressesV2DeprecatedRequestBody
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
     * @param UpdateMailAddressForwardAddressesV2DeprecatedRequestBody $body
     * @return self
     */
    public function withBody(UpdateMailAddressForwardAddressesV2DeprecatedRequestBody $body): self
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
     * @return UpdateMailAddressForwardAddressesV2DeprecatedRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): UpdateMailAddressForwardAddressesV2DeprecatedRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $mailAddressId = $input->{'mailAddressId'};
        $body = UpdateMailAddressForwardAddressesV2DeprecatedRequestBody::buildFromInput($input->{'body'}, validate: $validate);

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
        return '/v2/mail-addresses/' . $mailAddressId . '/forward-addresses';
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
