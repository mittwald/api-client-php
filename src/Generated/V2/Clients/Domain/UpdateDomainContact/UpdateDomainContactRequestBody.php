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
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'avoidEmailConfirmation' => [
                'description' => 'Whether to avoid the email confirmation if possible. If set to true, a transfer lock of 60 days might be applied to the domain.',
                'type' => 'boolean',
            ],
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
     * Whether to avoid the email confirmation if possible. If set to true, a transfer lock of 60 days might be applied to the domain.
     */
    private ?bool $avoidEmailConfirmation = null;

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

    public function getAvoidEmailConfirmation(): ?bool
    {
        return $this->avoidEmailConfirmation ?? null;
    }

    /**
     * @return HandleField[]
     */
    public function getContact(): array
    {
        return $this->contact;
    }

    public function withAvoidEmailConfirmation(bool $avoidEmailConfirmation): self
    {
        $validator = new Validator();
        $validator->validate($avoidEmailConfirmation, self::$internalValidationSchema['properties']['avoidEmailConfirmation']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->avoidEmailConfirmation = $avoidEmailConfirmation;

        return $clone;
    }

    public function withoutAvoidEmailConfirmation(): self
    {
        $clone = clone $this;
        unset($clone->avoidEmailConfirmation);

        return $clone;
    }

    /**
     * @param HandleField[] $contact
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

        $avoidEmailConfirmation = null;
        if (isset($input->{'avoidEmailConfirmation'})) {
            $avoidEmailConfirmation = (bool)($input->{'avoidEmailConfirmation'});
        }
        $contact = array_map(fn (array|object $i): HandleField => HandleField::buildFromInput($i, validate: $validate), $input->{'contact'});

        $obj = new self($contact);
        $obj->avoidEmailConfirmation = $avoidEmailConfirmation;
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
        if (isset($this->avoidEmailConfirmation)) {
            $output['avoidEmailConfirmation'] = $this->avoidEmailConfirmation;
        }
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
}
