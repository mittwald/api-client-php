<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\OauthRetrieveAccessToken;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Client\ResponseContainer;
use Psr\Http\Message\ResponseInterface;

class OauthRetrieveAccessTokenOKResponse implements ResponseContainer
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
                    'access_token' => [
                        'description' => 'The access token issued by the authorization server.
',
                        'type' => 'string',
                    ],
                    'expires_in' => [
                        'description' => 'The lifetime in seconds of the access token. For
example, the value "3600" denotes that the access
token will expire in one hour from the time the
response was generated.
',
                        'type' => 'integer',
                    ],
                    'refresh_token' => [
                        'description' => 'The refresh token issued by the authorization server.
',
                        'type' => 'string',
                    ],
                    'scope' => [
                        'description' => 'The scope of the access token as described by
[RFC6749](https://datatracker.ietf.org/doc/html/rfc6749#section-3.3).
',
                        'type' => 'string',
                    ],
                    'token_type' => [
                        'description' => 'The type of the token issued as described in
[RFC6749](https://datatracker.ietf.org/doc/html/rfc6749#section-7.1).
',
                        'enum' => [
                            'bearer',
                        ],
                        'type' => 'string',
                    ],
                ],
                'required' => [
                    'access_token',
                    'refresh_token',
                    'token_type',
                    'expires_in',
                ],
                'type' => 'object',
            ],
        ],
    ];

    private OauthRetrieveAccessTokenOKResponseBody $body;

    private ResponseInterface|null $httpResponse = null;

    public function __construct(OauthRetrieveAccessTokenOKResponseBody $body)
    {
        $this->body = $body;
    }

    public function getBody(): OauthRetrieveAccessTokenOKResponseBody
    {
        return $this->body;
    }

    public function withBody(OauthRetrieveAccessTokenOKResponseBody $body): self
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
     * @return OauthRetrieveAccessTokenOKResponse Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): OauthRetrieveAccessTokenOKResponse
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $body = OauthRetrieveAccessTokenOKResponseBody::buildFromInput($input->{'body'}, validate: $validate);

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
