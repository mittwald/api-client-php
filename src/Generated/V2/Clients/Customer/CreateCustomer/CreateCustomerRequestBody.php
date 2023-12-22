<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCustomer;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Customer\Contact;

class CreateCustomerRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'categoryId' => [
                'type' => 'string',
            ],
            'name' => [
                'type' => 'string',
            ],
            'owner' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.customer.Contact',
            ],
            'vatId' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'name',
        ],
        'type' => 'object',
    ];

    /**
     * @var string|null
     */
    private ?string $categoryId = null;

    /**
     * @var string
     */
    private string $name;

    /**
     * @var Contact|null
     */
    private ?Contact $owner = null;

    /**
     * @var string|null
     */
    private ?string $vatId = null;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string|null
     */
    public function getCategoryId(): ?string
    {
        return $this->categoryId ?? null;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return Contact|null
     */
    public function getOwner(): ?Contact
    {
        return $this->owner ?? null;
    }

    /**
     * @return string|null
     */
    public function getVatId(): ?string
    {
        return $this->vatId ?? null;
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
     * @return self
     */
    public function withoutCategoryId(): self
    {
        $clone = clone $this;
        unset($clone->categoryId);

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
     * @param Contact $owner
     * @return self
     */
    public function withOwner(Contact $owner): self
    {
        $clone = clone $this;
        $clone->owner = $owner;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutOwner(): self
    {
        $clone = clone $this;
        unset($clone->owner);

        return $clone;
    }

    /**
     * @param string $vatId
     * @return self
     */
    public function withVatId(string $vatId): self
    {
        $validator = new Validator();
        $validator->validate($vatId, static::$schema['properties']['vatId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->vatId = $vatId;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutVatId(): self
    {
        $clone = clone $this;
        unset($clone->vatId);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CreateCustomerRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CreateCustomerRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $categoryId = null;
        if (isset($input->{'categoryId'})) {
            $categoryId = $input->{'categoryId'};
        }
        $name = $input->{'name'};
        $owner = null;
        if (isset($input->{'owner'})) {
            $owner = Contact::buildFromInput($input->{'owner'}, validate: $validate);
        }
        $vatId = null;
        if (isset($input->{'vatId'})) {
            $vatId = $input->{'vatId'};
        }

        $obj = new self($name);
        $obj->categoryId = $categoryId;
        $obj->owner = $owner;
        $obj->vatId = $vatId;
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
        if (isset($this->categoryId)) {
            $output['categoryId'] = $this->categoryId;
        }
        $output['name'] = $this->name;
        if (isset($this->owner)) {
            $output['owner'] = $this->owner->toJson();
        }
        if (isset($this->vatId)) {
            $output['vatId'] = $this->vatId;
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
}
