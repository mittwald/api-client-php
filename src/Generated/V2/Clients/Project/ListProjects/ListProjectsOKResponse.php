<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Project\ListProjects;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Client\ResponseContainer;
use Psr\Http\Message\ResponseInterface;

class ListProjectsOKResponse implements ResponseContainer
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
                            'deprecated' => true,
                            'description' => 'deprecated',
                            'type' => 'boolean',
                        ],
                        'projectHostingId' => [
                            'format' => 'uuid',
                            'type' => 'string',
                        ],
                        'readiness' => [
                            '$ref' => '#/components/schemas/de.mittwald.v1.project.DeprecatedProjectReadinessStatus',
                        ],
                        'serverId' => [
                            'type' => 'string',
                        ],
                        'shortId' => [
                            'type' => 'string',
                        ],
                        'status' => [
                            '$ref' => '#/components/schemas/de.mittwald.v1.project.ProjectStatus',
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
                        'status',
                    ],
                    'type' => 'object',
                ],
                'type' => 'array',
            ],
        ],
    ];

    /**
     * @var ListProjectsOKResponseBodyItem[]
     */
    private array $body;

    private ResponseInterface|null $httpResponse = null;

    /**
     * @param ListProjectsOKResponseBodyItem[] $body
     */
    public function __construct(array $body)
    {
        $this->body = $body;
    }

    /**
     * @return ListProjectsOKResponseBodyItem[]
     */
    public function getBody(): array
    {
        return $this->body;
    }

    /**
     * @param ListProjectsOKResponseBodyItem[] $body
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
     * @return ListProjectsOKResponse Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ListProjectsOKResponse
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $body = array_map(fn (array|object $i): ListProjectsOKResponseBodyItem => ListProjectsOKResponseBodyItem::buildFromInput($i, validate: $validate), $input->{'body'});

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
        $output['body'] = array_map(fn (ListProjectsOKResponseBodyItem $i) => $i->toJson(), $this->body);

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
        $this->body = array_map(fn (ListProjectsOKResponseBodyItem $i) => clone $i, $this->body);
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
