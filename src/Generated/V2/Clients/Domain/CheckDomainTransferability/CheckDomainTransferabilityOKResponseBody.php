<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain\CheckDomainTransferability;

use InvalidArgumentException;
use JsonSchema\Validator;

class CheckDomainTransferabilityOKResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'reasons' => [
                'properties' => [
                    'domainAgeTooSmall' => [
                        'type' => 'boolean',
                    ],
                    'domainDoesNotExist' => [
                        'type' => 'boolean',
                    ],
                    'transferLock' => [
                        'type' => 'boolean',
                    ],
                    'wrongAuthCode' => [
                        'type' => 'boolean',
                    ],
                ],
                'required' => [
                    'domainDoesNotExist',
                    'wrongAuthCode',
                    'transferLock',
                    'domainAgeTooSmall',
                ],
                'type' => 'object',
            ],
            'transferable' => [
                'type' => 'boolean',
            ],
        ],
        'required' => [
            'transferable',
            'reasons',
        ],
        'type' => 'object',
    ];

    private CheckDomainTransferabilityOKResponseBodyReasons $reasons;

    private bool $transferable;

    public function __construct(CheckDomainTransferabilityOKResponseBodyReasons $reasons, bool $transferable)
    {
        $this->reasons = $reasons;
        $this->transferable = $transferable;
    }

    public function getReasons(): CheckDomainTransferabilityOKResponseBodyReasons
    {
        return $this->reasons;
    }

    public function getTransferable(): bool
    {
        return $this->transferable;
    }

    public function withReasons(CheckDomainTransferabilityOKResponseBodyReasons $reasons): self
    {
        $clone = clone $this;
        $clone->reasons = $reasons;

        return $clone;
    }

    public function withTransferable(bool $transferable): self
    {
        $validator = new Validator();
        $validator->validate($transferable, self::$schema['properties']['transferable']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->transferable = $transferable;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CheckDomainTransferabilityOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CheckDomainTransferabilityOKResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $reasons = CheckDomainTransferabilityOKResponseBodyReasons::buildFromInput($input->{'reasons'}, validate: $validate);
        $transferable = (bool)($input->{'transferable'});

        $obj = new self($reasons, $transferable);

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
        $output['reasons'] = ($this->reasons)->toJson();
        $output['transferable'] = $this->transferable;

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
        $this->reasons = clone $this->reasons;
    }
}
