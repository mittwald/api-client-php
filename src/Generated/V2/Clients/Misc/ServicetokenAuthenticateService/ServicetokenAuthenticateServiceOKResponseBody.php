<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Misc\ServicetokenAuthenticateService;

use InvalidArgumentException;
use JsonSchema\Validator;

class ServicetokenAuthenticateServiceOKResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'accessToken' => [
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
            ],
        ],
        'required' => [
            'accessToken',
        ],
        'type' => 'object',
    ];

    private ServicetokenAuthenticateServiceOKResponseBodyAccessToken $accessToken;

    public function __construct(ServicetokenAuthenticateServiceOKResponseBodyAccessToken $accessToken)
    {
        $this->accessToken = $accessToken;
    }

    public function getAccessToken(): ServicetokenAuthenticateServiceOKResponseBodyAccessToken
    {
        return $this->accessToken;
    }

    public function withAccessToken(ServicetokenAuthenticateServiceOKResponseBodyAccessToken $accessToken): self
    {
        $clone = clone $this;
        $clone->accessToken = $accessToken;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ServicetokenAuthenticateServiceOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ServicetokenAuthenticateServiceOKResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $accessToken = ServicetokenAuthenticateServiceOKResponseBodyAccessToken::buildFromInput($input->{'accessToken'}, validate: $validate);

        $obj = new self($accessToken);

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
        $output['accessToken'] = ($this->accessToken)->toJson();

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
        $this->accessToken = clone $this->accessToken;
    }
}
