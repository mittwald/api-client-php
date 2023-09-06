<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Article\GetArticle;

use InvalidArgumentException;
use JsonSchema\Validator;

class GetArticleRequest
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
            'articleId' => [
                'type' => 'string',
            ],
            'customerId' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'articleId',
        ],
    ];

    /**
     * @var string
     */
    private string $articleId;

    /**
     * @var string|null
     */
    private ?string $customerId = null;

    private array $headers = [

    ];

    /**
     * @param string $articleId
     */
    public function __construct(string $articleId)
    {
        $this->articleId = $articleId;
    }

    /**
     * @return string
     */
    public function getArticleId(): string
    {
        return $this->articleId;
    }

    /**
     * @return string|null
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId ?? null;
    }

    /**
     * @param string $articleId
     * @return self
     */
    public function withArticleId(string $articleId): self
    {
        $validator = new Validator();
        $validator->validate($articleId, static::$schema['properties']['articleId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->articleId = $articleId;

        return $clone;
    }

    /**
     * @param string $customerId
     * @return self
     */
    public function withCustomerId(string $customerId): self
    {
        $validator = new Validator();
        $validator->validate($customerId, static::$schema['properties']['customerId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->customerId = $customerId;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutCustomerId(): self
    {
        $clone = clone $this;
        unset($clone->customerId);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return GetArticleRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): GetArticleRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $articleId = $input->{'articleId'};
        $customerId = null;
        if (isset($input->{'customerId'})) {
            $customerId = $input->{'customerId'};
        }

        $obj = new self($articleId);
        $obj->customerId = $customerId;
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
        $output['articleId'] = $this->articleId;
        if (isset($this->customerId)) {
            $output['customerId'] = $this->customerId;
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
    }

    public function getUrl(): string
    {
        $mapped = $this->toJson();
        $articleId = urlencode($mapped['articleId']);
        return '/v2/articles/' . $articleId;
    }

    public function getQuery(): array
    {
        $mapped = $this->toJson();
        $query = [];
        if (isset($mapped['customerId'])) {
            $query['customerId'] = $mapped['customerId'];
        }
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
