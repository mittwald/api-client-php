<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Misc\ServicetokenAuthenticateService;

use InvalidArgumentException;
use JsonSchema\Validator;

class ServicetokenAuthenticateServiceOKResponseBodyAccessTokenJwtClaims
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'exp' => [
                'type' => 'string',
            ],
            'iat' => [
                'type' => 'string',
            ],
            'iss' => [
                'type' => 'string',
            ],
            'sub' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'iat',
            'iss',
            'sub',
            'exp',
        ],
        'type' => 'object',
    ];

    private string $exp;

    private string $iat;

    private string $iss;

    private string $sub;

    public function __construct(string $exp, string $iat, string $iss, string $sub)
    {
        $this->exp = $exp;
        $this->iat = $iat;
        $this->iss = $iss;
        $this->sub = $sub;
    }

    public function getExp(): string
    {
        return $this->exp;
    }

    public function getIat(): string
    {
        return $this->iat;
    }

    public function getIss(): string
    {
        return $this->iss;
    }

    public function getSub(): string
    {
        return $this->sub;
    }

    public function withExp(string $exp): self
    {
        $validator = new Validator();
        $validator->validate($exp, self::$internalValidationSchema['properties']['exp']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->exp = $exp;

        return $clone;
    }

    public function withIat(string $iat): self
    {
        $validator = new Validator();
        $validator->validate($iat, self::$internalValidationSchema['properties']['iat']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->iat = $iat;

        return $clone;
    }

    public function withIss(string $iss): self
    {
        $validator = new Validator();
        $validator->validate($iss, self::$internalValidationSchema['properties']['iss']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->iss = $iss;

        return $clone;
    }

    public function withSub(string $sub): self
    {
        $validator = new Validator();
        $validator->validate($sub, self::$internalValidationSchema['properties']['sub']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->sub = $sub;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ServicetokenAuthenticateServiceOKResponseBodyAccessTokenJwtClaims Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ServicetokenAuthenticateServiceOKResponseBodyAccessTokenJwtClaims
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $exp = $input->{'exp'};
        $iat = $input->{'iat'};
        $iss = $input->{'iss'};
        $sub = $input->{'sub'};

        $obj = new self($exp, $iat, $iss, $sub);

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
        $output['exp'] = $this->exp;
        $output['iat'] = $this->iat;
        $output['iss'] = $this->iss;
        $output['sub'] = $this->sub;

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
