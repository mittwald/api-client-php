<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\RefreshSession;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Client\ResponseContainer;
use Psr\Http\Message\ResponseInterface;

class RefreshSessionOKResponse implements ResponseContainer
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'type' => 'object',
        'required' => [
            'body',
        ],
        'properties' => [
            'body' => [
                'properties' => [
                    'expiresAt' => [
                        'description' => 'The expiration date of the token.',
                        'format' => 'date-time',
                        'type' => 'string',
                    ],
                    'refreshToken' => [
                        'description' => 'Refresh token to refresh your access token even after it has expired.',
                        'type' => 'string',
                    ],
                    'token' => [
                        'description' => 'Public token to identify yourself against the public api.',
                        'type' => 'string',
                    ],
                ],
                'required' => [
                    'token',
                    'refreshToken',
                    'expiresAt',
                ],
                'type' => 'object',
            ],
        ],
    ];

    private RefreshSessionOKResponseBody $body;

    private ResponseInterface|null $httpResponse = null;

    public function __construct(RefreshSessionOKResponseBody $body)
    {
        $this->body = $body;
    }

    public function getBody(): RefreshSessionOKResponseBody
    {
        return $this->body;
    }

    public function withBody(RefreshSessionOKResponseBody $body): self
    {
        $clone = clone $this;
        $clone->body = $body;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return RefreshSessionOKResponse Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): RefreshSessionOKResponse
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $body = RefreshSessionOKResponseBody::buildFromInput($input->{'body'}, validate: $validate);

        $obj = new self($body);

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
        $output['body'] = ($this->body)->toJson();

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
        $this->body = clone $this->body;
    }

    public static function fromResponse(ResponseInterface $httpResponse): self
    {
        $parsedBody = json_decode($httpResponse->getBody()->getContents(), associative: true);
        $response = static::buildFromInput(['body' => $parsedBody], validate: false);
        $response->httpResponse = $httpResponse;
        return $response;
    }

    public function getResponse(): ResponseInterface|null
    {
        return $this->httpResponse;
    }
}
