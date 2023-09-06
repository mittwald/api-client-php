<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\CreateApiToken;

use InvalidArgumentException;

class CreateApiToken201Response
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
                    'token' => [
                        'description' => 'The `ApiToken`.',
                        'type' => 'string',
                    ],
                ],
                'required' => [
                    'token',
                ],
                'type' => 'object',
            ],
        ],
    ];

    /**
     * @var CreateApiToken201ResponseBody
     */
    private CreateApiToken201ResponseBody $body;

    public \Psr\Http\Message\ResponseInterface|null $httpResponse = null;

    /**
     * @param CreateApiToken201ResponseBody $body
     */
    public function __construct(CreateApiToken201ResponseBody $body)
    {
        $this->body = $body;
    }

    /**
     * @return CreateApiToken201ResponseBody
     */
    public function getBody(): CreateApiToken201ResponseBody
    {
        return $this->body;
    }

    /**
     * @param CreateApiToken201ResponseBody $body
     * @return self
     */
    public function withBody(CreateApiToken201ResponseBody $body): self
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
     * @return CreateApiToken201Response Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CreateApiToken201Response
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $body = CreateApiToken201ResponseBody::buildFromInput($input->{'body'}, validate: $validate);

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
        $this->body = clone $this->body;
    }

    public static function fromResponse(\Psr\Http\Message\ResponseInterface $httpResponse): self
    {
        $parsedBody = json_decode($httpResponse->getBody()->getContents(), associative: true);
        $response = static::buildFromInput(['body' => $parsedBody], validate: false);
        $response->httpResponse = $httpResponse;
        return $response;
    }
}
