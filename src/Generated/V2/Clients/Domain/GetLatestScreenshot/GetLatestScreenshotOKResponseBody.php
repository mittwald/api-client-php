<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain\GetLatestScreenshot;

use InvalidArgumentException;
use JsonSchema\Validator;

class GetLatestScreenshotOKResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'reference' => [
                'type' => 'string',
            ],
        ],
        'type' => 'object',
    ];

    private ?string $reference = null;

    /**
     *
     */
    public function __construct()
    {
    }

    public function getReference(): ?string
    {
        return $this->reference ?? null;
    }

    public function withReference(string $reference): self
    {
        $validator = new Validator();
        $validator->validate($reference, self::$schema['properties']['reference']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->reference = $reference;

        return $clone;
    }

    public function withoutReference(): self
    {
        $clone = clone $this;
        unset($clone->reference);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return GetLatestScreenshotOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): GetLatestScreenshotOKResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $reference = null;
        if (isset($input->{'reference'})) {
            $reference = $input->{'reference'};
        }

        $obj = new self();
        $obj->reference = $reference;
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
        if (isset($this->reference)) {
            $output['reference'] = $this->reference;
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
        $validator->validate($input, self::$schema);

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
