<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionPatchExtension;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Marketplace\DescriptionFormats;

class ExtensionPatchExtensionRequestBodyDetailedDescriptions
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
                '$ref' => '#/components/schemas/de.mittwald.v1.marketplace.DescriptionFormats',
            ],
            'en' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.marketplace.DescriptionFormats',
            ],
        ],
    ];

    private DescriptionFormats $de;

    private ?DescriptionFormats $en = null;

    public function __construct(DescriptionFormats $de)
    {
        $this->de = $de;
    }

    public function getDe(): DescriptionFormats
    {
        return $this->de;
    }

    public function getEn(): ?DescriptionFormats
    {
        return $this->en ?? null;
    }

    public function withDe(DescriptionFormats $de): self
    {
        $clone = clone $this;
        $clone->de = $de;

        return $clone;
    }

    public function withEn(DescriptionFormats $en): self
    {
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
     * @return ExtensionPatchExtensionRequestBodyDetailedDescriptions Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ExtensionPatchExtensionRequestBodyDetailedDescriptions
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $de = DescriptionFormats::buildFromInput($input->{'de'}, validate: $validate);
        $en = null;
        if (isset($input->{'en'})) {
            $en = DescriptionFormats::buildFromInput($input->{'en'}, validate: $validate);
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
        $output['de'] = $this->de->toJson();
        if (isset($this->en)) {
            $output['en'] = $this->en->toJson();
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
