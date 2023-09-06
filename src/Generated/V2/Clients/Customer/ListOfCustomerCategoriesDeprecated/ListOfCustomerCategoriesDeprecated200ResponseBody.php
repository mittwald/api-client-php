<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Customer\ListOfCustomerCategoriesDeprecated;

use InvalidArgumentException;

class ListOfCustomerCategoriesDeprecated200ResponseBody
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
     * @var \Mittwald\ApiClient\Generated\V2\Schemas\Customer\Category[]|null
     */
    private ?array $categories = null;

    public \Psr\Http\Message\ResponseInterface|null $httpResponse = null;

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return \Mittwald\ApiClient\Generated\V2\Schemas\Customer\Category[]|null
     */
    public function getCategories(): ?array
    {
        return $this->categories ?? null;
    }

    /**
     * @param \Mittwald\ApiClient\Generated\V2\Schemas\Customer\Category[] $categories
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
     * @return ListOfCustomerCategoriesDeprecated200ResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ListOfCustomerCategoriesDeprecated200ResponseBody
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $categories = null;
        if (isset($input->{'categories'})) {
            $categories = array_map(fn (array $i): \Mittwald\ApiClient\Generated\V2\Schemas\Customer\Category => \Mittwald\ApiClient\Generated\V2\Schemas\Customer\Category::buildFromInput($i, validate: $validate), $input->{'categories'});
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
            $output['categories'] = array_map(fn (\Mittwald\ApiClient\Generated\V2\Schemas\Customer\Category $i): array => $i->toJson(), $this->categories);
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

    public static function fromResponse(\Psr\Http\Message\ResponseInterface $httpResponse): self
    {
        $parsedBody = json_decode($httpResponse->getBody()->getContents(), associative: true);
        $response = static::buildFromInput(['body' => $parsedBody], validate: false);
        $response->httpResponse = $httpResponse;
        return $response;
    }
}
