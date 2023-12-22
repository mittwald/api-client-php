<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain\UpdateDomainContact;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Domain\HandleField;

class UpdateDomainContactRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'contact' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.domain.HandleField',
                ],
                'minItems' => 1,
                'type' => 'array',
            ],
        ],
        'required' => [
            'contact',
        ],
    ];

    /**
     * @var HandleField[]
     */
    private array $contact;

    /**
     * @param HandleField[] $contact
     */
    public function __construct(array $contact)
    {
        $this->contact = $contact;
    }

    /**
     * @return HandleField[]
     */
    public function getContact(): array
    {
        return $this->contact;
    }

    /**
     * @param HandleField[] $contact
     * @return self
     */
    public function withContact(array $contact): self
    {
        $clone = clone $this;
        $clone->contact = $contact;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return UpdateDomainContactRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): UpdateDomainContactRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $contact = array_map(fn (array|object $i): HandleField => HandleField::buildFromInput($i, validate: $validate), $input->{'contact'});

        $obj = new self($contact);

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
        $output['contact'] = array_map(fn (HandleField $i): array => $i->toJson(), $this->contact);

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
