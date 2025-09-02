<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorPatchContributor;

use InvalidArgumentException;
use JsonSchema\Validator;

class ContributorPatchContributorRequestBodyDescriptions
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'required' => [
            'de',
        ],
        'properties' => [
            'de' => [
                'example' => 'Ich bin ein Contributor',
                'type' => 'string',
            ],
            'en' => [
                'example' => 'I am a contributor',
                'type' => 'string',
            ],
        ],
    ];

    private string $de;

    private ?string $en = null;

    public function __construct(string $de)
    {
        $this->de = $de;
    }

    public function getDe(): string
    {
        return $this->de;
    }

    public function getEn(): ?string
    {
        return $this->en ?? null;
    }

    public function withDe(string $de): self
    {
        $validator = new Validator();
        $validator->validate($de, self::$internalValidationSchema['properties']['de']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->de = $de;

        return $clone;
    }

    public function withEn(string $en): self
    {
        $validator = new Validator();
        $validator->validate($en, self::$internalValidationSchema['properties']['en']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->en = $en;

        return $clone;
    }

    public function withoutEn(): self
    {
        $clone = clone $this;
        unset($clone->en);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ContributorPatchContributorRequestBodyDescriptions Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ContributorPatchContributorRequestBodyDescriptions
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $de = $input->{'de'};
        $en = null;
        if (isset($input->{'en'})) {
            $en = $input->{'en'};
        }

        $obj = new self($de);
        $obj->en = $en;
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
        $output['de'] = $this->de;
        if (isset($this->en)) {
            $output['en'] = $this->en;
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
}
