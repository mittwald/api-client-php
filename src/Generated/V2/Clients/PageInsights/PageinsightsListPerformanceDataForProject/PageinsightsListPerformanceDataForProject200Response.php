<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\PageInsights\PageinsightsListPerformanceDataForProject;

use InvalidArgumentException;
use JsonSchema\Validator;
use Psr\Http\Message\ResponseInterface;

class PageinsightsListPerformanceDataForProject200Response
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
                        'domain' => [
                            'type' => 'string',
                        ],
                        'paths' => [
                            'items' => [
                                'properties' => [
                                    'createdAt' => [
                                        'format' => 'date-time',
                                        'type' => 'string',
                                    ],
                                    'path' => [
                                        'type' => 'string',
                                    ],
                                    'performanceScore' => [
                                        'type' => 'integer',
                                    ],
                                    'screenshotFileRef' => [
                                        'type' => 'string',
                                    ],
                                ],
                                'required' => [
                                    'path',
                                    'performanceScore',
                                    'createdAt',
                                ],
                                'type' => 'object',
                            ],
                            'type' => 'array',
                        ],
                    ],
                    'required' => [
                        'domain',
                        'paths',
                    ],
                    'type' => 'object',
                ],
                'type' => 'array',
            ],
        ],
    ];

    /**
     * @var PageinsightsListPerformanceDataForProject200ResponseBodyItem[]
     */
    private array $body;

    public ResponseInterface|null $httpResponse = null;

    /**
     * @param PageinsightsListPerformanceDataForProject200ResponseBodyItem[] $body
     */
    public function __construct(array $body)
    {
        $this->body = $body;
    }

    /**
     * @return PageinsightsListPerformanceDataForProject200ResponseBodyItem[]
     */
    public function getBody(): array
    {
        return $this->body;
    }

    /**
     * @param PageinsightsListPerformanceDataForProject200ResponseBodyItem[] $body
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
     * @return PageinsightsListPerformanceDataForProject200Response Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): PageinsightsListPerformanceDataForProject200Response
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $body = array_map(fn (array|object $i): PageinsightsListPerformanceDataForProject200ResponseBodyItem => PageinsightsListPerformanceDataForProject200ResponseBodyItem::buildFromInput($i, validate: $validate), $input->{'body'});

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
        $output['body'] = array_map(fn (PageinsightsListPerformanceDataForProject200ResponseBodyItem $i) => $i->toJson(), $this->body);

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
        $this->body = array_map(fn (PageinsightsListPerformanceDataForProject200ResponseBodyItem $i) => clone $i, $this->body);
    }

    public static function fromResponse(ResponseInterface $httpResponse): self
    {
        $parsedBody = json_decode($httpResponse->getBody()->getContents(), associative: true);
        $response = static::buildFromInput(['body' => $parsedBody], validate: false);
        $response->httpResponse = $httpResponse;
        return $response;
    }
}
