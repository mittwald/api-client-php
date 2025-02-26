<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Relocation\CreateLegacyTariffChange;

use InvalidArgumentException;
use JsonSchema\Validator;

class CreateLegacyTariffChangeRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'pAccount' => [
                'pattern' => '^[pr][0-9]{2,8}$',
                'type' => 'string',
            ],
            'targetTariff' => [
                'minLength' => 1,
                'type' => 'string',
            ],
        ],
        'required' => [
            'pAccount',
            'targetTariff',
        ],
        'type' => 'object',
    ];

    private string $pAccount;

    private string $targetTariff;

    public function __construct(string $pAccount, string $targetTariff)
    {
        $this->pAccount = $pAccount;
        $this->targetTariff = $targetTariff;
    }

    public function getPAccount(): string
    {
        return $this->pAccount;
    }

    public function getTargetTariff(): string
    {
        return $this->targetTariff;
    }

    public function withPAccount(string $pAccount): self
    {
        $validator = new Validator();
        $validator->validate($pAccount, self::$schema['properties']['pAccount']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->pAccount = $pAccount;

        return $clone;
    }

    public function withTargetTariff(string $targetTariff): self
    {
        $validator = new Validator();
        $validator->validate($targetTariff, self::$schema['properties']['targetTariff']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->targetTariff = $targetTariff;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CreateLegacyTariffChangeRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CreateLegacyTariffChangeRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $pAccount = $input->{'pAccount'};
        $targetTariff = $input->{'targetTariff'};

        $obj = new self($pAccount, $targetTariff);

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
        $output['pAccount'] = $this->pAccount;
        $output['targetTariff'] = $this->targetTariff;

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
