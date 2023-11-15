<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Conversation\GetFileAccessToken;

use InvalidArgumentException;
use JsonSchema\Validator;

class GetFileAccessTokenRequest
{
    public const method = 'get';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'type' => 'object',
        'properties' => [
            'conversationId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'fileId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'body' => [
                'type' => 'object',
            ],
        ],
        'required' => [
            'conversationId',
            'fileId',
            'body',
        ],
    ];

    /**
     * @var string
     */
    private string $conversationId;

    /**
     * @var string
     */
    private string $fileId;

    /**
     * @var GetFileAccessTokenRequestBody
     */
    private GetFileAccessTokenRequestBody $body;

    private array $headers = [

    ];

    /**
     * @param string $conversationId
     * @param string $fileId
     * @param GetFileAccessTokenRequestBody $body
     */
    public function __construct(string $conversationId, string $fileId, GetFileAccessTokenRequestBody $body)
    {
        $this->conversationId = $conversationId;
        $this->fileId = $fileId;
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getConversationId(): string
    {
        return $this->conversationId;
    }

    /**
     * @return string
     */
    public function getFileId(): string
    {
        return $this->fileId;
    }

    /**
     * @return GetFileAccessTokenRequestBody
     */
    public function getBody(): GetFileAccessTokenRequestBody
    {
        return $this->body;
    }

    /**
     * @param string $conversationId
     * @return self
     */
    public function withConversationId(string $conversationId): self
    {
        $validator = new Validator();
        $validator->validate($conversationId, static::$schema['properties']['conversationId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->conversationId = $conversationId;

        return $clone;
    }

    /**
     * @param string $fileId
     * @return self
     */
    public function withFileId(string $fileId): self
    {
        $validator = new Validator();
        $validator->validate($fileId, static::$schema['properties']['fileId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->fileId = $fileId;

        return $clone;
    }

    /**
     * @param GetFileAccessTokenRequestBody $body
     * @return self
     */
    public function withBody(GetFileAccessTokenRequestBody $body): self
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
     * @return GetFileAccessTokenRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): GetFileAccessTokenRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $conversationId = $input->{'conversationId'};
        $fileId = $input->{'fileId'};
        $body = GetFileAccessTokenRequestBody::buildFromInput($input->{'body'}, validate: $validate);

        $obj = new self($conversationId, $fileId, $body);

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
        $output['conversationId'] = $this->conversationId;
        $output['fileId'] = $this->fileId;
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
        $conversationId = urlencode($mapped['conversationId']);
        $fileId = urlencode($mapped['fileId']);
        return '/v2/conversations/' . $conversationId . '/files/' . $fileId . '/access-token';
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
