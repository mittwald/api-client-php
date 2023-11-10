<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\PageInsights\PageinsightsGetPerformanceData;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;
use Psr\Http\Message\ResponseInterface;

class PageinsightsGetPerformanceData200ResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'createdAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'domain' => [
                'type' => 'string',
            ],
            'metrics' => [
                'items' => [
                    'properties' => [
                        'createdAt' => [
                            'format' => 'date-time',
                            'type' => 'string',
                        ],
                        'name' => [
                            'type' => 'string',
                        ],
                        'score' => [
                            'format' => 'double',
                            'type' => 'number',
                        ],
                        'value' => [
                            'format' => 'double',
                            'type' => 'number',
                        ],
                    ],
                    'required' => [
                        'name',
                        'value',
                        'score',
                        'createdAt',
                    ],
                    'type' => 'object',
                ],
                'type' => 'array',
            ],
            'moreDataAvailable' => [
                'items' => [
                    'format' => 'date',
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
            'path' => [
                'type' => 'string',
            ],
            'performanceScore' => [
                'format' => 'double',
                'type' => 'number',
            ],
            'screenshot' => [
                'properties' => [
                    'createdAt' => [
                        'format' => 'date-time',
                        'type' => 'string',
                    ],
                    'fileRef' => [
                        'type' => 'string',
                    ],
                ],
                'required' => [
                    'fileRef',
                    'createdAt',
                ],
                'type' => 'object',
            ],
        ],
        'required' => [
            'domain',
            'path',
            'performanceScore',
        ],
        'type' => 'object',
    ];

    /**
     * @var DateTime|null
     */
    private ?DateTime $createdAt = null;

    /**
     * @var string
     */
    private string $domain;

    /**
     * @var PageinsightsGetPerformanceData200ResponseBodyMetricsItem[]|null
     */
    private ?array $metrics = null;

    /**
     * @var string[]|null
     */
    private ?array $moreDataAvailable = null;

    /**
     * @var string
     */
    private string $path;

    /**
     * @var int|float
     */
    private int|float $performanceScore;

    /**
     * @var PageinsightsGetPerformanceData200ResponseBodyScreenshot|null
     */
    private ?PageinsightsGetPerformanceData200ResponseBodyScreenshot $screenshot = null;

    public ResponseInterface|null $httpResponse = null;

    /**
     * @param string $domain
     * @param string $path
     * @param int|float $performanceScore
     */
    public function __construct(string $domain, string $path, int|float $performanceScore)
    {
        $this->domain = $domain;
        $this->path = $path;
        $this->performanceScore = $performanceScore;
    }

    /**
     * @return DateTime|null
     */
    public function getCreatedAt(): ?DateTime
    {
        return $this->createdAt ?? null;
    }

    /**
     * @return string
     */
    public function getDomain(): string
    {
        return $this->domain;
    }

    /**
     * @return PageinsightsGetPerformanceData200ResponseBodyMetricsItem[]|null
     */
    public function getMetrics(): ?array
    {
        return $this->metrics ?? null;
    }

    /**
     * @return string[]|null
     */
    public function getMoreDataAvailable(): ?array
    {
        return $this->moreDataAvailable ?? null;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @return int|float
     */
    public function getPerformanceScore(): int|float
    {
        return $this->performanceScore;
    }

    /**
     * @return PageinsightsGetPerformanceData200ResponseBodyScreenshot|null
     */
    public function getScreenshot(): ?PageinsightsGetPerformanceData200ResponseBodyScreenshot
    {
        return $this->screenshot ?? null;
    }

    /**
     * @param DateTime $createdAt
     * @return self
     */
    public function withCreatedAt(DateTime $createdAt): self
    {
        $clone = clone $this;
        $clone->createdAt = $createdAt;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutCreatedAt(): self
    {
        $clone = clone $this;
        unset($clone->createdAt);

        return $clone;
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
     * @param PageinsightsGetPerformanceData200ResponseBodyMetricsItem[] $metrics
     * @return self
     */
    public function withMetrics(array $metrics): self
    {
        $clone = clone $this;
        $clone->metrics = $metrics;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutMetrics(): self
    {
        $clone = clone $this;
        unset($clone->metrics);

        return $clone;
    }

    /**
     * @param string[] $moreDataAvailable
     * @return self
     */
    public function withMoreDataAvailable(array $moreDataAvailable): self
    {
        $validator = new Validator();
        $validator->validate($moreDataAvailable, static::$schema['properties']['moreDataAvailable']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->moreDataAvailable = $moreDataAvailable;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutMoreDataAvailable(): self
    {
        $clone = clone $this;
        unset($clone->moreDataAvailable);

        return $clone;
    }

    /**
     * @param string $path
     * @return self
     */
    public function withPath(string $path): self
    {
        $validator = new Validator();
        $validator->validate($path, static::$schema['properties']['path']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->path = $path;

        return $clone;
    }

    /**
     * @param int|float $performanceScore
     * @return self
     */
    public function withPerformanceScore(int|float $performanceScore): self
    {
        $validator = new Validator();
        $validator->validate($performanceScore, static::$schema['properties']['performanceScore']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->performanceScore = $performanceScore;

        return $clone;
    }

    /**
     * @param PageinsightsGetPerformanceData200ResponseBodyScreenshot $screenshot
     * @return self
     */
    public function withScreenshot(PageinsightsGetPerformanceData200ResponseBodyScreenshot $screenshot): self
    {
        $clone = clone $this;
        $clone->screenshot = $screenshot;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutScreenshot(): self
    {
        $clone = clone $this;
        unset($clone->screenshot);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return PageinsightsGetPerformanceData200ResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): PageinsightsGetPerformanceData200ResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $createdAt = null;
        if (isset($input->{'createdAt'})) {
            $createdAt = new DateTime($input->{'createdAt'});
        }
        $domain = $input->{'domain'};
        $metrics = null;
        if (isset($input->{'metrics'})) {
            $metrics = array_map(fn (array|object $i): PageinsightsGetPerformanceData200ResponseBodyMetricsItem => PageinsightsGetPerformanceData200ResponseBodyMetricsItem::buildFromInput($i, validate: $validate), $input->{'metrics'});
        }
        $moreDataAvailable = null;
        if (isset($input->{'moreDataAvailable'})) {
            $moreDataAvailable = $input->{'moreDataAvailable'};
        }
        $path = $input->{'path'};
        $performanceScore = str_contains($input->{'performanceScore'}, '.') ? (float)($input->{'performanceScore'}) : (int)($input->{'performanceScore'});
        $screenshot = null;
        if (isset($input->{'screenshot'})) {
            $screenshot = PageinsightsGetPerformanceData200ResponseBodyScreenshot::buildFromInput($input->{'screenshot'}, validate: $validate);
        }

        $obj = new self($domain, $path, $performanceScore);
        $obj->createdAt = $createdAt;
        $obj->metrics = $metrics;
        $obj->moreDataAvailable = $moreDataAvailable;
        $obj->screenshot = $screenshot;
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
        if (isset($this->createdAt)) {
            $output['createdAt'] = ($this->createdAt)->format(DateTime::ATOM);
        }
        $output['domain'] = $this->domain;
        if (isset($this->metrics)) {
            $output['metrics'] = array_map(fn (PageinsightsGetPerformanceData200ResponseBodyMetricsItem $i) => $i->toJson(), $this->metrics);
        }
        if (isset($this->moreDataAvailable)) {
            $output['moreDataAvailable'] = $this->moreDataAvailable;
        }
        $output['path'] = $this->path;
        $output['performanceScore'] = $this->performanceScore;
        if (isset($this->screenshot)) {
            $output['screenshot'] = ($this->screenshot)->toJson();
        }

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
        if (isset($this->createdAt)) {
            $this->createdAt = clone $this->createdAt;
        }
        if (isset($this->metrics)) {
            $this->metrics = array_map(fn (PageinsightsGetPerformanceData200ResponseBodyMetricsItem $i) => clone $i, $this->metrics);
        }
        if (isset($this->screenshot)) {
            $this->screenshot = clone $this->screenshot;
        }
    }

    public static function fromResponse(ResponseInterface $httpResponse): self
    {
        $parsedBody = json_decode($httpResponse->getBody()->getContents(), associative: true);
        $response = static::buildFromInput(['body' => $parsedBody], validate: false);
        $response->httpResponse = $httpResponse;
        return $response;
    }
}
