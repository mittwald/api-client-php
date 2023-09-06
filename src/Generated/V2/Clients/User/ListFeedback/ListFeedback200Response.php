<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\ListFeedback;

use InvalidArgumentException;

class ListFeedback200Response
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
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.user.UserFeedback',
                ],
                'type' => 'array',
            ],
        ],
    ];

    /**
     * @var \Mittwald\ApiClient\Generated\V2\Schemas\User\UserFeedback[]
     */
    private array $body;

    public \Psr\Http\Message\ResponseInterface|null $httpResponse = null;

    /**
     * @param \Mittwald\ApiClient\Generated\V2\Schemas\User\UserFeedback[] $body
     */
    public function __construct(array $body)
    {
        $this->body = $body;
    }

    /**
     * @return \Mittwald\ApiClient\Generated\V2\Schemas\User\UserFeedback[]
     */
    public function getBody(): array
    {
        return $this->body;
    }

    /**
     * @param \Mittwald\ApiClient\Generated\V2\Schemas\User\UserFeedback[] $body
     * @return self
     */
    public function withBody(array $body): self
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
     * @return ListFeedback200Response Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ListFeedback200Response
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $body = array_map(fn (array $i): \Mittwald\ApiClient\Generated\V2\Schemas\User\UserFeedback => \Mittwald\ApiClient\Generated\V2\Schemas\User\UserFeedback::buildFromInput($i, validate: $validate), $input->{'body'});

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
        $output['body'] = array_map(fn (\Mittwald\ApiClient\Generated\V2\Schemas\User\UserFeedback $i): array => $i->toJson(), $this->body);

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
    }

    public static function fromResponse(\Psr\Http\Message\ResponseInterface $httpResponse): self
    {
        $parsedBody = json_decode($httpResponse->getBody()->getContents(), associative: true);
        $response = static::buildFromInput(['body' => $parsedBody], validate: false);
        $response->httpResponse = $httpResponse;
        return $response;
    }
}
