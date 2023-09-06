<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Customer\UpdateCategory;

use InvalidArgumentException;

class UpdateCategoryRequest
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
            'categoryId' => [
                'type' => 'string',
            ],
            'body' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.customer.Category',
            ],
        ],
        'required' => [
            'categoryId',
            'body',
        ],
    ];

    /**
     * @var string
     */
    private string $categoryId;

    /**
     * @var \Mittwald\ApiClient\Generated\V2\Schemas\Customer\Category
     */
    private \Mittwald\ApiClient\Generated\V2\Schemas\Customer\Category $body;

    private array $headers = [

    ];

    /**
     * @param string $categoryId
     * @param \Mittwald\ApiClient\Generated\V2\Schemas\Customer\Category $body
     */
    public function __construct(string $categoryId, \Mittwald\ApiClient\Generated\V2\Schemas\Customer\Category $body)
    {
        $this->categoryId = $categoryId;
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getCategoryId(): string
    {
        return $this->categoryId;
    }

    /**
     * @return \Mittwald\ApiClient\Generated\V2\Schemas\Customer\Category
     */
    public function getBody(): \Mittwald\ApiClient\Generated\V2\Schemas\Customer\Category
    {
        return $this->body;
    }

    /**
     * @param string $categoryId
     * @return self
     */
    public function withCategoryId(string $categoryId): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($categoryId, static::$schema['properties']['categoryId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->categoryId = $categoryId;

        return $clone;
    }

    /**
     * @param \Mittwald\ApiClient\Generated\V2\Schemas\Customer\Category $body
     * @return self
     */
    public function withBody(\Mittwald\ApiClient\Generated\V2\Schemas\Customer\Category $body): self
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
     * @return UpdateCategoryRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): UpdateCategoryRequest
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $categoryId = $input->{'categoryId'};
        $body = \Mittwald\ApiClient\Generated\V2\Schemas\Customer\Category::buildFromInput($input->{'body'}, validate: $validate);

        $obj = new self($categoryId, $body);

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
        $output['categoryId'] = $this->categoryId;
        $output['body'] = $this->body->toJson();

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
        $validator = new \JsonSchema\Validator();
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
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
        $categoryId = urlencode($mapped['categoryId']);
        return '/v2/customer-categories/' . $categoryId;
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
