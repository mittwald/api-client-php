<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCategoryDeprecated;

use InvalidArgumentException;
use JsonSchema\Validator;
use Psr\Http\Message\ResponseInterface;

class CreateCategoryDeprecated201Response
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
                    'customerId' => [
                        'type' => 'string',
                    ],
                    'isPublic' => [
                        'type' => 'boolean',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'useAgencyDomainPrices' => [
                        'type' => 'boolean',
                    ],
                    'useAgencySslPrices' => [
                        'type' => 'boolean',
                    ],
                ],
                'required' => [
                    'categoryId',
                ],
                'type' => 'object',
            ],
        ],
    ];

    /**
     * @var CreateCategoryDeprecated201ResponseBody
     */
    private CreateCategoryDeprecated201ResponseBody $body;

    public ResponseInterface|null $httpResponse = null;

    /**
     * @param CreateCategoryDeprecated201ResponseBody $body
     */
    public function __construct(CreateCategoryDeprecated201ResponseBody $body)
    {
        $this->body = $body;
    }

    /**
     * @return CreateCategoryDeprecated201ResponseBody
     */
    public function getBody(): CreateCategoryDeprecated201ResponseBody
    {
        return $this->body;
    }

    /**
     * @param CreateCategoryDeprecated201ResponseBody $body
     * @return self
     */
    public function withBody(CreateCategoryDeprecated201ResponseBody $body): self
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
     * @return CreateCategoryDeprecated201Response Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CreateCategoryDeprecated201Response
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $body = CreateCategoryDeprecated201ResponseBody::buildFromInput($input->{'body'}, validate: $validate);

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
}
