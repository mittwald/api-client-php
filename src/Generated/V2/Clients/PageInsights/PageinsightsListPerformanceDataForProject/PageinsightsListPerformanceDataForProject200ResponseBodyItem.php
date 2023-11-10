<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\PageInsights\PageinsightsListPerformanceDataForProject;

use InvalidArgumentException;
use JsonSchema\Validator;
use Psr\Http\Message\ResponseInterface;

class PageinsightsListPerformanceDataForProject200ResponseBodyItem
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
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
    ];

    /**
     * @var string
     */
    private string $domain;

    /**
     * @var PageinsightsListPerformanceDataForProject200ResponseBodyItemPathsItem[]
     */
    private array $paths;

    public ResponseInterface|null $httpResponse = null;

    /**
     * @param string $domain
     * @param PageinsightsListPerformanceDataForProject200ResponseBodyItemPathsItem[] $paths
     */
    public function __construct(string $domain, array $paths)
    {
        $this->domain = $domain;
        $this->paths = $paths;
    }

    /**
     * @return string
     */
    public function getDomain(): string
    {
        return $this->domain;
    }

    /**
     * @return PageinsightsListPerformanceDataForProject200ResponseBodyItemPathsItem[]
     */
    public function getPaths(): array
    {
        return $this->paths;
    }

    /**
     * @param string $domain
     * @return self
     */
    public function withDomain(string $domain): self
    {
        $validator = new Validator();
        $validator->validate($domain, static::$schema['properties']['domain']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->domain = $domain;

        return $clone;
    }

    /**
     * @param PageinsightsListPerformanceDataForProject200ResponseBodyItemPathsItem[] $paths
     * @return self
     */
    public function withPaths(array $paths): self
    {
        $clone = clone $this;
        $clone->paths = $paths;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return PageinsightsListPerformanceDataForProject200ResponseBodyItem Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): PageinsightsListPerformanceDataForProject200ResponseBodyItem
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $domain = $input->{'domain'};
        $paths = array_map(fn (array|object $i): PageinsightsListPerformanceDataForProject200ResponseBodyItemPathsItem => PageinsightsListPerformanceDataForProject200ResponseBodyItemPathsItem::buildFromInput($i, validate: $validate), $input->{'paths'});

        $obj = new self($domain, $paths);

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
        $output['domain'] = $this->domain;
        $output['paths'] = array_map(fn (PageinsightsListPerformanceDataForProject200ResponseBodyItemPathsItem $i) => $i->toJson(), $this->paths);

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
        $this->paths = array_map(fn (PageinsightsListPerformanceDataForProject200ResponseBodyItemPathsItem $i) => clone $i, $this->paths);
    }

    public static function fromResponse(ResponseInterface $httpResponse): self
    {
        $parsedBody = json_decode($httpResponse->getBody()->getContents(), associative: true);
        $response = static::buildFromInput(['body' => $parsedBody], validate: false);
        $response->httpResponse = $httpResponse;
        return $response;
    }
}
