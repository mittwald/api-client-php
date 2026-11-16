<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain\CheckAuthinfo2;

use InvalidArgumentException;
use JsonSchema\Validator;

class CheckAuthinfo2OKResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'eligible' => [
                'type' => 'boolean',
            ],
            'reasons' => [
                'properties' => [
                    'alreadyManaged' => [
                        'description' => 'The domain is already managed by mittwald; no AuthInfo2 is needed.',
                        'type' => 'boolean',
                    ],
                    'notRegistered' => [
                        'description' => 'The domain is not registered at DENIC.',
                        'type' => 'boolean',
                    ],
                    'recentlyTriggered' => [
                        'description' => 'An AuthInfo2 was requested for this domain within the last 30 days.',
                        'type' => 'boolean',
                    ],
                ],
                'required' => [
                    'notRegistered',
                    'alreadyManaged',
                    'recentlyTriggered',
                ],
                'type' => 'object',
            ],
        ],
        'required' => [
            'eligible',
            'reasons',
        ],
        'type' => 'object',
    ];

    private bool $eligible;

    private CheckAuthinfo2OKResponseBodyReasons $reasons;

    public function __construct(bool $eligible, CheckAuthinfo2OKResponseBodyReasons $reasons)
    {
        $this->eligible = $eligible;
        $this->reasons = $reasons;
    }

    public function getEligible(): bool
    {
        return $this->eligible;
    }

    public function getReasons(): CheckAuthinfo2OKResponseBodyReasons
    {
        return $this->reasons;
    }

    public function withEligible(bool $eligible): self
    {
        $validator = new Validator();
        $validator->validate($eligible, self::$internalValidationSchema['properties']['eligible']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->eligible = $eligible;

        return $clone;
    }

    public function withReasons(CheckAuthinfo2OKResponseBodyReasons $reasons): self
    {
        $clone = clone $this;
        $clone->reasons = $reasons;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CheckAuthinfo2OKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CheckAuthinfo2OKResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $eligible = (bool)($input->{'eligible'});
        $reasons = CheckAuthinfo2OKResponseBodyReasons::buildFromInput($input->{'reasons'}, validate: $validate);

        $obj = new self($eligible, $reasons);

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
        $output['eligible'] = $this->eligible;
        $output['reasons'] = ($this->reasons)->toJson();

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
        $this->reasons = clone $this->reasons;
    }
}
