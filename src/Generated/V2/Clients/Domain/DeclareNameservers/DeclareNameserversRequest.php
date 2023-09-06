<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain\DeclareNameservers;

use InvalidArgumentException;
use JsonSchema\Validator;

class DeclareNameserversRequest
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
            'domainId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'body' => [
                'properties' => [
                    'nameservers' => [
                        'items' => [
                            'format' => 'hostname',
                            'type' => 'string',
                        ],
                        'minItems' => 2,
                        'type' => 'array',
                        'uniqueItems' => true,
                    ],
                ],
            ],
        ],
        'required' => [
            'domainId',
            'body',
        ],
    ];

    /**
     * @var string
     */
    private string $domainId;

    /**
     * @var DeclareNameserversRequestBody
     */
    private DeclareNameserversRequestBody $body;

    private array $headers = [

    ];

    /**
     * @param string $domainId
     * @param DeclareNameserversRequestBody $body
     */
    public function __construct(string $domainId, DeclareNameserversRequestBody $body)
    {
        $this->domainId = $domainId;
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getDomainId(): string
    {
        return $this->domainId;
    }

    /**
     * @return DeclareNameserversRequestBody
     */
    public function getBody(): DeclareNameserversRequestBody
    {
        return $this->body;
    }

    /**
     * @param string $domainId
     * @return self
     */
    public function withDomainId(string $domainId): self
    {
        $validator = new Validator();
        $validator->validate($domainId, static::$schema['properties']['domainId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->domainId = $domainId;

        return $clone;
    }

    /**
     * @param DeclareNameserversRequestBody $body
     * @return self
     */
    public function withBody(DeclareNameserversRequestBody $body): self
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
     * @return DeclareNameserversRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): DeclareNameserversRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $domainId = $input->{'domainId'};
        $body = DeclareNameserversRequestBody::buildFromInput($input->{'body'}, validate: $validate);

        $obj = new self($domainId, $body);

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
        $output['domainId'] = $this->domainId;
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
        $domainId = urlencode($mapped['domainId']);
        return '/v2/domains/' . $domainId . '/nameservers';
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
