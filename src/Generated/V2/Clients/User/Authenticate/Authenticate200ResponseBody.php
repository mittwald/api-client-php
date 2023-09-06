<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\Authenticate;

use InvalidArgumentException;
use DateTime;

class Authenticate200ResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'expires' => [
                'description' => 'Expiration unix timestamp',
                'format' => 'date-time',
                'type' => 'string',
            ],
            'token' => [
                'description' => 'Public token to identify yourself against the api gateway.',
                'type' => 'string',
            ],
        ],
        'required' => [
            'token',
            'expires',
        ],
        'type' => 'object',
    ];

    /**
     * Expiration unix timestamp
     *
     * @var DateTime
     */
    private DateTime $expires;

    /**
     * Public token to identify yourself against the api gateway.
     *
     * @var string
     */
    private string $token;

    public \Psr\Http\Message\ResponseInterface|null $httpResponse = null;

    /**
     * @param DateTime $expires
     * @param string $token
     */
    public function __construct(DateTime $expires, string $token)
    {
        $this->expires = $expires;
        $this->token = $token;
    }

    /**
     * @return DateTime
     */
    public function getExpires(): DateTime
    {
        return $this->expires;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * @param DateTime $expires
     * @return self
     */
    public function withExpires(DateTime $expires): self
    {
        $clone = clone $this;
        $clone->expires = $expires;

        return $clone;
    }

    /**
     * @param string $token
     * @return self
     */
    public function withToken(string $token): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($token, static::$schema['properties']['token']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->token = $token;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return Authenticate200ResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): Authenticate200ResponseBody
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $expires = new DateTime($input->{'expires'});
        $token = $input->{'token'};

        $obj = new self($expires, $token);

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
        $output['expires'] = ($this->expires)->format(DateTime::ATOM);
        $output['token'] = $this->token;

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
        $validator = new \JsonSchema\Validator();
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
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
        $this->expires = clone $this->expires;
    }

    public static function fromResponse(\Psr\Http\Message\ResponseInterface $httpResponse): self
    {
        $parsedBody = json_decode($httpResponse->getBody()->getContents(), associative: true);
        $response = static::buildFromInput(['body' => $parsedBody], validate: false);
        $response->httpResponse = $httpResponse;
        return $response;
    }
}
