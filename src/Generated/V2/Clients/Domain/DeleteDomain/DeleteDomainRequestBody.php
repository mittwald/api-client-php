<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain\DeleteDomain;

use InvalidArgumentException;
use JsonSchema\Validator;

class DeleteDomainRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'transit' => [
                'description' => 'Only for .de Domains.',
                'type' => 'boolean',
            ],
        ],
        'type' => 'object',
    ];

    /**
     * Only for .de Domains.
     */
    private ?bool $transit = null;

    /**
     *
     */
    public function __construct()
    {
    }

    public function getTransit(): ?bool
    {
        return $this->transit ?? null;
    }

    public function withTransit(bool $transit): self
    {
        $validator = new Validator();
        $validator->validate($transit, static::$schema['properties']['transit']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->transit = $transit;

        return $clone;
    }

    public function withoutTransit(): self
    {
        $clone = clone $this;
        unset($clone->transit);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return DeleteDomainRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): DeleteDomainRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $transit = null;
        if (isset($input->{'transit'})) {
            $transit = (bool)($input->{'transit'});
        }

        $obj = new self();
        $obj->transit = $transit;
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
        if (isset($this->transit)) {
            $output['transit'] = $this->transit;
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
