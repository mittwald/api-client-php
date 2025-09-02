<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Misc\ServicetokenAuthenticateService;

use InvalidArgumentException;
use JsonSchema\Validator;

class ServicetokenAuthenticateServiceOKResponseBodyAccessToken
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'id' => [
                'type' => 'string',
            ],
            'jwtClaims' => [
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
            ],
            'publicToken' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'id',
            'jwtClaims',
            'publicToken',
        ],
        'type' => 'object',
    ];

    private string $id;

    private ServicetokenAuthenticateServiceOKResponseBodyAccessTokenJwtClaims $jwtClaims;

    private string $publicToken;

    public function __construct(string $id, ServicetokenAuthenticateServiceOKResponseBodyAccessTokenJwtClaims $jwtClaims, string $publicToken)
    {
        $this->id = $id;
        $this->jwtClaims = $jwtClaims;
        $this->publicToken = $publicToken;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getJwtClaims(): ServicetokenAuthenticateServiceOKResponseBodyAccessTokenJwtClaims
    {
        return $this->jwtClaims;
    }

    public function getPublicToken(): string
    {
        return $this->publicToken;
    }

    public function withId(string $id): self
    {
        $validator = new Validator();
        $validator->validate($id, self::$internalValidationSchema['properties']['id']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->id = $id;

        return $clone;
    }

    public function withJwtClaims(ServicetokenAuthenticateServiceOKResponseBodyAccessTokenJwtClaims $jwtClaims): self
    {
        $clone = clone $this;
        $clone->jwtClaims = $jwtClaims;

        return $clone;
    }

    public function withPublicToken(string $publicToken): self
    {
        $validator = new Validator();
        $validator->validate($publicToken, self::$internalValidationSchema['properties']['publicToken']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->publicToken = $publicToken;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ServicetokenAuthenticateServiceOKResponseBodyAccessToken Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ServicetokenAuthenticateServiceOKResponseBodyAccessToken
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $id = $input->{'id'};
        $jwtClaims = ServicetokenAuthenticateServiceOKResponseBodyAccessTokenJwtClaims::buildFromInput($input->{'jwtClaims'}, validate: $validate);
        $publicToken = $input->{'publicToken'};

        $obj = new self($id, $jwtClaims, $publicToken);

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
        $output['id'] = $this->id;
        $output['jwtClaims'] = ($this->jwtClaims)->toJson();
        $output['publicToken'] = $this->publicToken;

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
        $this->jwtClaims = clone $this->jwtClaims;
    }
}
