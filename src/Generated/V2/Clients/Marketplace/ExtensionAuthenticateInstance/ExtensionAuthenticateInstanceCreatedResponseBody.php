<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionAuthenticateInstance;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;

class ExtensionAuthenticateInstanceCreatedResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'expiry' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'publicToken' => [
                'description' => 'Set this in the \'x-access-token\' header when performing domain actions.',
                'type' => 'string',
            ],
        ],
        'required' => [
            'publicToken',
            'expiry',
        ],
        'type' => 'object',
    ];

    private DateTime $expiry;

    /**
     * Set this in the 'x-access-token' header when performing domain actions.
     */
    private string $publicToken;

    public function __construct(DateTime $expiry, string $publicToken)
    {
        $this->expiry = $expiry;
        $this->publicToken = $publicToken;
    }

    public function getExpiry(): DateTime
    {
        return $this->expiry;
    }

    public function getPublicToken(): string
    {
        return $this->publicToken;
    }

    public function withExpiry(DateTime $expiry): self
    {
        $clone = clone $this;
        $clone->expiry = $expiry;

        return $clone;
    }

    public function withPublicToken(string $publicToken): self
    {
        $validator = new Validator();
        $validator->validate($publicToken, static::$schema['properties']['publicToken']);
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
     * @return ExtensionAuthenticateInstanceCreatedResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ExtensionAuthenticateInstanceCreatedResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $expiry = new DateTime($input->{'expiry'});
        $publicToken = $input->{'publicToken'};

        $obj = new self($expiry, $publicToken);

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
        $output['expiry'] = ($this->expiry)->format(DateTime::ATOM);
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
        $this->expiry = clone $this->expiry;
    }
}
