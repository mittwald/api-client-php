<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain\CheckAuthinfo2;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Client\ResponseContainer;
use Psr\Http\Message\ResponseInterface;

class CheckAuthinfo2OKResponse implements ResponseContainer
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'type' => 'object',
        'required' => [
            'body',
        ],
        'properties' => [
            'body' => [
                'properties' => [
                    'eligible' => [
                        'type' => 'boolean',
                    ],
                    'reasons' => [
                        'properties' => [
                            'alreadyManaged' => [
                                'description' => 'The domain is already managed by mittwald; no AuthInfo2 is needed.',
                                'type' => 'boolean',
                            ],
                            'notRegistered' => [
                                'description' => 'The domain is not registered at DENIC.',
                                'type' => 'boolean',
                            ],
                            'recentlyTriggered' => [
                                'description' => 'An AuthInfo2 was requested for this domain within the last 30 days.',
                                'type' => 'boolean',
                            ],
                        ],
                        'required' => [
                            'notRegistered',
                            'alreadyManaged',
                            'recentlyTriggered',
                        ],
                        'type' => 'object',
                    ],
                ],
                'required' => [
                    'eligible',
                    'reasons',
                ],
                'type' => 'object',
            ],
        ],
    ];

    private CheckAuthinfo2OKResponseBody $body;

    private ResponseInterface|null $httpResponse = null;

    public function __construct(CheckAuthinfo2OKResponseBody $body)
    {
        $this->body = $body;
    }

    public function getBody(): CheckAuthinfo2OKResponseBody
    {
        return $this->body;
    }

    public function withBody(CheckAuthinfo2OKResponseBody $body): self
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
     * @return CheckAuthinfo2OKResponse Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CheckAuthinfo2OKResponse
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $body = CheckAuthinfo2OKResponseBody::buildFromInput($input->{'body'}, validate: $validate);

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
