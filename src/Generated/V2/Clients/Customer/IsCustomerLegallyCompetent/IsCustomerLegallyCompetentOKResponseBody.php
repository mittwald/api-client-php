<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Customer\IsCustomerLegallyCompetent;

use InvalidArgumentException;
use JsonSchema\Validator;

class IsCustomerLegallyCompetentOKResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'isLegallyCompetent' => [
                'type' => 'boolean',
            ],
        ],
        'type' => 'object',
    ];

    private ?bool $isLegallyCompetent = null;

    /**
     *
     */
    public function __construct()
    {
    }

    public function getIsLegallyCompetent(): ?bool
    {
        return $this->isLegallyCompetent ?? null;
    }

    public function withIsLegallyCompetent(bool $isLegallyCompetent): self
    {
        $validator = new Validator();
        $validator->validate($isLegallyCompetent, self::$schema['properties']['isLegallyCompetent']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->isLegallyCompetent = $isLegallyCompetent;

        return $clone;
    }

    public function withoutIsLegallyCompetent(): self
    {
        $clone = clone $this;
        unset($clone->isLegallyCompetent);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return IsCustomerLegallyCompetentOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): IsCustomerLegallyCompetentOKResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $isLegallyCompetent = null;
        if (isset($input->{'isLegallyCompetent'})) {
            $isLegallyCompetent = (bool)($input->{'isLegallyCompetent'});
        }

        $obj = new self();
        $obj->isLegallyCompetent = $isLegallyCompetent;
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
        if (isset($this->isLegallyCompetent)) {
            $output['isLegallyCompetent'] = $this->isLegallyCompetent;
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
