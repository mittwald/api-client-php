<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Customer\GetWallet;

use InvalidArgumentException;
use JsonSchema\Validator;

class GetWalletOKResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'customerId' => [
                'example' => 'edefeee4-e8e9-4e2d-ab95-9a2eb6104cfb',
                'type' => 'string',
            ],
            'points' => [
                'example' => 10,
                'type' => 'number',
            ],
            'recommendationCode' => [
                'example' => 'm-123456',
                'type' => 'string',
            ],
            'walletId' => [
                'example' => '32485364-7500-4591-b5cb-4e25e4bd1f30',
                'type' => 'string',
            ],
        ],
        'required' => [
            'customerId',
            'walletId',
            'points',
        ],
        'type' => 'object',
    ];

    private string $customerId;

    private int|float $points;

    private ?string $recommendationCode = null;

    private string $walletId;

    /**
     * @param int|float $points
     */
    public function __construct(string $customerId, int|float $points, string $walletId)
    {
        $this->customerId = $customerId;
        $this->points = $points;
        $this->walletId = $walletId;
    }

    public function getCustomerId(): string
    {
        return $this->customerId;
    }

    public function getPoints(): int|float
    {
        return $this->points;
    }

    public function getRecommendationCode(): ?string
    {
        return $this->recommendationCode ?? null;
    }

    public function getWalletId(): string
    {
        return $this->walletId;
    }

    public function withCustomerId(string $customerId): self
    {
        $validator = new Validator();
        $validator->validate($customerId, self::$schema['properties']['customerId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->customerId = $customerId;

        return $clone;
    }

    /**
     * @param int|float $points
     */
    public function withPoints(int|float $points): self
    {
        $validator = new Validator();
        $validator->validate($points, self::$schema['properties']['points']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->points = $points;

        return $clone;
    }

    public function withRecommendationCode(string $recommendationCode): self
    {
        $validator = new Validator();
        $validator->validate($recommendationCode, self::$schema['properties']['recommendationCode']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->recommendationCode = $recommendationCode;

        return $clone;
    }

    public function withoutRecommendationCode(): self
    {
        $clone = clone $this;
        unset($clone->recommendationCode);

        return $clone;
    }

    public function withWalletId(string $walletId): self
    {
        $validator = new Validator();
        $validator->validate($walletId, self::$schema['properties']['walletId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->walletId = $walletId;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return GetWalletOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): GetWalletOKResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $customerId = $input->{'customerId'};
        $points = str_contains((string)($input->{'points'}), '.') ? (float)($input->{'points'}) : (int)($input->{'points'});
        $recommendationCode = null;
        if (isset($input->{'recommendationCode'})) {
            $recommendationCode = $input->{'recommendationCode'};
        }
        $walletId = $input->{'walletId'};

        $obj = new self($customerId, $points, $walletId);
        $obj->recommendationCode = $recommendationCode;
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
        $output['customerId'] = $this->customerId;
        $output['points'] = $this->points;
        if (isset($this->recommendationCode)) {
            $output['recommendationCode'] = $this->recommendationCode;
        }
        $output['walletId'] = $this->walletId;

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
