<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Project\ListProjects;

use InvalidArgumentException;
use JsonSchema\Validator;
use Psr\Http\Message\ResponseInterface;

class ListProjects200Response
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
                    'properties' => [
                        'createdAt' => [
                            'format' => 'date-time',
                            'type' => 'string',
                        ],
                        'customerId' => [
                            'type' => 'string',
                        ],
                        'customerMeta' => [
                            'properties' => [
                                'id' => [
                                    'type' => 'string',
                                ],
                            ],
                            'required' => [
                                'id',
                            ],
                            'type' => 'object',
                        ],
                        'description' => [
                            'type' => 'string',
                        ],
                        'disableReason' => [
                            '$ref' => '#/components/schemas/de.mittwald.v1.project.DisableReason',
                        ],
                        'enabled' => [
                            'type' => 'boolean',
                        ],
                        'id' => [
                            'type' => 'string',
                        ],
                        'imageRefId' => [
                            'type' => 'string',
                        ],
                        'isReady' => [
                            'description' => 'deprecated',
                            'type' => 'boolean',
                        ],
                        'projectHostingId' => [
                            'format' => 'uuid',
                            'type' => 'string',
                        ],
                        'readiness' => [
                            '$ref' => '#/components/schemas/de.mittwald.v1.project.ProjectReadinessStatus',
                        ],
                        'serverId' => [
                            'type' => 'string',
                        ],
                        'shortId' => [
                            'type' => 'string',
                        ],
                    ],
                    'required' => [
                        'id',
                        'shortId',
                        'description',
                        'enabled',
                        'customerMeta',
                        'customerId',
                        'createdAt',
                        'isReady',
                        'readiness',
                    ],
                    'type' => 'object',
                ],
                'type' => 'array',
            ],
        ],
    ];

    /**
     * @var ListProjects200ResponseBodyItem[]
     */
    private array $body;

    public ResponseInterface|null $httpResponse = null;

    /**
     * @param ListProjects200ResponseBodyItem[] $body
     */
    public function __construct(array $body)
    {
        $this->body = $body;
    }

    /**
     * @return ListProjects200ResponseBodyItem[]
     */
    public function getBody(): array
    {
        return $this->body;
    }

    /**
     * @param ListProjects200ResponseBodyItem[] $body
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
     * @return ListProjects200Response Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ListProjects200Response
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $body = array_map(fn (array|object $i): ListProjects200ResponseBodyItem => ListProjects200ResponseBodyItem::buildFromInput($i, validate: $validate), $input->{'body'});

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
        $output['body'] = array_map(fn (ListProjects200ResponseBodyItem $i) => $i->toJson(), $this->body);

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
        $this->body = array_map(fn (ListProjects200ResponseBodyItem $i) => clone $i, $this->body);
    }

    public static function fromResponse(ResponseInterface $httpResponse): self
    {
        $parsedBody = json_decode($httpResponse->getBody()->getContents(), associative: true);
        $response = static::buildFromInput(['body' => $parsedBody], validate: false);
        $response->httpResponse = $httpResponse;
        return $response;
    }
}
