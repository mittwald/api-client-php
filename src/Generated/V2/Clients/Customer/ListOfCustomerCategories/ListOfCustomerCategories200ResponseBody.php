<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Customer\ListOfCustomerCategories;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Customer\Category;
use Psr\Http\Message\ResponseInterface;

class ListOfCustomerCategories200ResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'categories' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.customer.Category',
                ],
                'type' => 'array',
            ],
        ],
    ];

    /**
     * @var Category[]|null
     */
    private ?array $categories = null;

    public ResponseInterface|null $httpResponse = null;

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return Category[]|null
     */
    public function getCategories(): ?array
    {
        return $this->categories ?? null;
    }

    /**
     * @param Category[] $categories
     * @return self
     */
    public function withCategories(array $categories): self
    {
        $clone = clone $this;
        $clone->categories = $categories;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutCategories(): self
    {
        $clone = clone $this;
        unset($clone->categories);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ListOfCustomerCategories200ResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ListOfCustomerCategories200ResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $categories = null;
        if (isset($input->{'categories'})) {
            $categories = array_map(fn (array $i): Category => Category::buildFromInput($i, validate: $validate), $input->{'categories'});
        }

        $obj = new self();
        $obj->categories = $categories;
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
        if (isset($this->categories)) {
            $output['categories'] = array_map(fn (Category $i): array => $i->toJson(), $this->categories);
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

    public static function fromResponse(ResponseInterface $httpResponse): self
    {
        $parsedBody = json_decode($httpResponse->getBody()->getContents(), associative: true);
        $response = static::buildFromInput(['body' => $parsedBody], validate: false);
        $response->httpResponse = $httpResponse;
        return $response;
    }
}
