<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\File\GetFileWithName;

use InvalidArgumentException;
use JsonSchema\Validator;

class GetFileWithNameRequest
{
    public const method = 'get';

    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'type' => 'object',
        'properties' => [
            'fileId' => [
                'example' => '3fa85f64-5717-4562-b3fc-2c963f66afa6',
                'format' => 'uuid',
                'type' => 'string',
            ],
            'fileName' => [
                'example' => 'me.jpeg',
                'type' => 'string',
            ],
            'accept' => [
                'default' => 'application/octet-stream',
                'enum' => [
                    'application/octet-stream',
                    'text/plain;base64',
                ],
                'example' => 'application/octet-stream',
                'type' => 'string',
            ],
            'content-disposition' => [
                'default' => 'inline',
                'enum' => [
                    'inline',
                    'attachment',
                ],
                'example' => 'inline',
                'type' => 'string',
            ],
            'token' => [
                'example' => 'jwt',
                'type' => 'string',
            ],
        ],
        'required' => [
            'fileId',
            'fileName',
        ],
    ];

    private string $fileId;

    private string $fileName;

    private GetFileWithNameRequestAccept $accept = GetFileWithNameRequestAccept::applicationoctetstream;

    private GetFileWithNameRequestContentDisposition $contentDisposition = GetFileWithNameRequestContentDisposition::inline;

    private ?string $token = null;

    private array $headers = [

    ];

    public function __construct(string $fileId, string $fileName)
    {
        $this->fileId = $fileId;
        $this->fileName = $fileName;
    }

    public function getFileId(): string
    {
        return $this->fileId;
    }

    public function getFileName(): string
    {
        return $this->fileName;
    }

    public function getAccept(): GetFileWithNameRequestAccept
    {
        return $this->accept;
    }

    public function getContentDisposition(): GetFileWithNameRequestContentDisposition
    {
        return $this->contentDisposition;
    }

    public function getToken(): ?string
    {
        return $this->token ?? null;
    }

    public function withFileId(string $fileId): self
    {
        $validator = new Validator();
        $validator->validate($fileId, self::$internalValidationSchema['properties']['fileId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->fileId = $fileId;

        return $clone;
    }

    public function withFileName(string $fileName): self
    {
        $validator = new Validator();
        $validator->validate($fileName, self::$internalValidationSchema['properties']['fileName']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->fileName = $fileName;

        return $clone;
    }

    public function withAccept(GetFileWithNameRequestAccept $accept): self
    {
        $clone = clone $this;
        $clone->accept = $accept;

        return $clone;
    }

    public function withContentDisposition(GetFileWithNameRequestContentDisposition $contentDisposition): self
    {
        $clone = clone $this;
        $clone->contentDisposition = $contentDisposition;

        return $clone;
    }

    public function withToken(string $token): self
    {
        $validator = new Validator();
        $validator->validate($token, self::$internalValidationSchema['properties']['token']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->token = $token;

        return $clone;
    }

    public function withoutToken(): self
    {
        $clone = clone $this;
        unset($clone->token);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return GetFileWithNameRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): GetFileWithNameRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $fileId = $input->{'fileId'};
        $fileName = $input->{'fileName'};
        $accept = GetFileWithNameRequestAccept::applicationoctetstream;
        if (isset($input->{'accept'})) {
            $accept = GetFileWithNameRequestAccept::from($input->{'accept'});
        }
        $contentDisposition = GetFileWithNameRequestContentDisposition::inline;
        if (isset($input->{'content-disposition'})) {
            $contentDisposition = GetFileWithNameRequestContentDisposition::from($input->{'content-disposition'});
        }
        $token = null;
        if (isset($input->{'token'})) {
            $token = $input->{'token'};
        }

        $obj = new self($fileId, $fileName);
        $obj->accept = $accept;
        $obj->contentDisposition = $contentDisposition;
        $obj->token = $token;
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
        $output['fileId'] = $this->fileId;
        $output['fileName'] = $this->fileName;
        $output['accept'] = ($this->accept)->value;
        $output['content-disposition'] = ($this->contentDisposition)->value;
        if (isset($this->token)) {
            $output['token'] = $this->token;
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
        $fileId = urlencode($mapped['fileId']);
        $fileName = urlencode($mapped['fileName']);
        return '/v2/files/' . $fileId . '/' . $fileName;
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
        if (isset($mapped['accept'])) {
            $query['accept'] = $mapped['accept'];
        }
        if (isset($mapped['content-disposition'])) {
            $query['content-disposition'] = $mapped['content-disposition'];
        }
        if (isset($mapped['token'])) {
            $query['token'] = $mapped['token'];
        }
        return [
            'query' => $query,
            'headers' => $this->headers,
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
