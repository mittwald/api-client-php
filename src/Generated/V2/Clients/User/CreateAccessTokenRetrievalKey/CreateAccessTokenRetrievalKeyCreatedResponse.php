<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\CreateAccessTokenRetrievalKey;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Client\ResponseContainer;
use Psr\Http\Message\ResponseInterface;

class CreateAccessTokenRetrievalKeyCreatedResponse implements ResponseContainer
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'type' => 'object',
        'required' => [
            'body',
        ],
        'properties' => [
            'body' => [
                'properties' => [
                    'accessTokenRetrievalKey' => [
                        'description' => 'This retrieval can be used as a one time password. It is only valid once and for a short time.',
                        'example' => 'mwrk-abcdefghijklmnopqrstuvwxyz012345',
                        'maxLength' => 37,
                        'minLength' => 37,
                        'type' => 'string',
                    ],
                    'userId' => [
                        'format' => 'uuid',
                        'type' => 'string',
                    ],
                ],
                'required' => [
                    'userId',
                    'accessTokenRetrievalKey',
                ],
                'type' => 'object',
            ],
        ],
    ];

    /**
     * @var CreateAccessTokenRetrievalKeyCreatedResponseBody
     */
    private CreateAccessTokenRetrievalKeyCreatedResponseBody $body;

    private ResponseInterface|null $httpResponse = null;

    /**
     * @param CreateAccessTokenRetrievalKeyCreatedResponseBody $body
     */
    public function __construct(CreateAccessTokenRetrievalKeyCreatedResponseBody $body)
    {
        $this->body = $body;
    }

    /**
     * @return CreateAccessTokenRetrievalKeyCreatedResponseBody
     */
    public function getBody(): CreateAccessTokenRetrievalKeyCreatedResponseBody
    {
        return $this->body;
    }

    /**
     * @param CreateAccessTokenRetrievalKeyCreatedResponseBody $body
     * @return self
     */
    public function withBody(CreateAccessTokenRetrievalKeyCreatedResponseBody $body): self
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
     * @return CreateAccessTokenRetrievalKeyCreatedResponse Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CreateAccessTokenRetrievalKeyCreatedResponse
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $body = CreateAccessTokenRetrievalKeyCreatedResponseBody::buildFromInput($input->{'body'}, validate: $validate);

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
        $validator = new Validator();
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
