<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceGetFileAccessToken;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;

class InvoiceGetFileAccessTokenOKResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'accessToken' => [
                'type' => 'string',
            ],
            'expiresAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
        ],
        'required' => [
            'accessToken',
            'expiresAt',
        ],
        'type' => 'object',
    ];

    private string $accessToken;

    private DateTime $expiresAt;

    public function __construct(string $accessToken, DateTime $expiresAt)
    {
        $this->accessToken = $accessToken;
        $this->expiresAt = $expiresAt;
    }

    public function getAccessToken(): string
    {
        return $this->accessToken;
    }

    public function getExpiresAt(): DateTime
    {
        return $this->expiresAt;
    }

    public function withAccessToken(string $accessToken): self
    {
        $validator = new Validator();
        $validator->validate($accessToken, self::$schema['properties']['accessToken']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->accessToken = $accessToken;

        return $clone;
    }

    public function withExpiresAt(DateTime $expiresAt): self
    {
        $clone = clone $this;
        $clone->expiresAt = $expiresAt;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return InvoiceGetFileAccessTokenOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): InvoiceGetFileAccessTokenOKResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $accessToken = $input->{'accessToken'};
        $expiresAt = new DateTime($input->{'expiresAt'});

        $obj = new self($accessToken, $expiresAt);

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
        $output['accessToken'] = $this->accessToken;
        $output['expiresAt'] = ($this->expiresAt)->format(DateTime::ATOM);

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
        $this->expiresAt = clone $this->expiresAt;
    }
}
