<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Conversation;

use InvalidArgumentException;
use JsonSchema\Validator;

class Category
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'categoryId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'name' => [
                'type' => 'string',
            ],
            'referenceType' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.conversation.CategoryReferenceType',
            ],
        ],
        'required' => [
            'categoryId',
            'name',
            'referenceType',
        ],
        'type' => 'object',
    ];

    /**
     * @var string
     */
    private string $categoryId;

    /**
     * @var string
     */
    private string $name;

    /**
     * @var CategoryReferenceTypeItem[]
     */
    private array $referenceType;

    /**
     * @param string $categoryId
     * @param string $name
     * @param CategoryReferenceTypeItem[] $referenceType
     */
    public function __construct(string $categoryId, string $name, array $referenceType)
    {
        $this->categoryId = $categoryId;
        $this->name = $name;
        $this->referenceType = $referenceType;
    }

    /**
     * @return string
     */
    public function getCategoryId(): string
    {
        return $this->categoryId;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return
     * CategoryReferenceTypeItem[]
     */
    public function getReferenceType(): array
    {
        return $this->referenceType;
    }

    /**
     * @param string $categoryId
     * @return self
     */
    public function withCategoryId(string $categoryId): self
    {
        $validator = new Validator();
        $validator->validate($categoryId, static::$schema['properties']['categoryId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->categoryId = $categoryId;

        return $clone;
    }

    /**
     * @param string $name
     * @return self
     */
    public function withName(string $name): self
    {
        $validator = new Validator();
        $validator->validate($name, static::$schema['properties']['name']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->name = $name;

        return $clone;
    }

    /**
     * @param CategoryReferenceTypeItem[] $referenceType
     * @return self
     */
    public function withReferenceType(array $referenceType): self
    {
        $clone = clone $this;
        $clone->referenceType = $referenceType;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return Category Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): Category
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $categoryId = $input->{'categoryId'};
        $name = $input->{'name'};
        $referenceType = array_map(fn (string $item): CategoryReferenceTypeItem => CategoryReferenceTypeItem::from($item), $input->{'referenceType'});

        $obj = new self($categoryId, $name, $referenceType);

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
        $output['name'] = $this->name;
        $output['referenceType'] = array_map(fn ($item): string => $item->value, $this->referenceType);

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
}
