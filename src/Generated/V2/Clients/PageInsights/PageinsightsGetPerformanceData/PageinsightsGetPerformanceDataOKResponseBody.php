<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\PageInsights\PageinsightsGetPerformanceData;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;

class PageinsightsGetPerformanceDataOKResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
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
                            'nullable' => true,
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

    private ?DateTime $createdAt = null;

    private string $domain;

    /**
     * @var PageinsightsGetPerformanceDataOKResponseBodyMetricsItem[]|null
     */
    private ?array $metrics = null;

    /**
     * @var string[]|null
     */
    private ?array $moreDataAvailable = null;

    private string $path;

    private int|float $performanceScore;

    private ?PageinsightsGetPerformanceDataOKResponseBodyScreenshot $screenshot = null;

    /**
     * @param int|float $performanceScore
     */
    public function __construct(string $domain, string $path, int|float $performanceScore)
    {
        $this->domain = $domain;
        $this->path = $path;
        $this->performanceScore = $performanceScore;
    }

    public function getCreatedAt(): ?DateTime
    {
        return $this->createdAt ?? null;
    }

    public function getDomain(): string
    {
        return $this->domain;
    }

    /**
     * @return PageinsightsGetPerformanceDataOKResponseBodyMetricsItem[]|null
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

    public function getPath(): string
    {
        return $this->path;
    }

    public function getPerformanceScore(): int|float
    {
        return $this->performanceScore;
    }

    public function getScreenshot(): ?PageinsightsGetPerformanceDataOKResponseBodyScreenshot
    {
        return $this->screenshot ?? null;
    }

    public function withCreatedAt(DateTime $createdAt): self
    {
        $clone = clone $this;
        $clone->createdAt = $createdAt;

        return $clone;
    }

    public function withoutCreatedAt(): self
    {
        $clone = clone $this;
        unset($clone->createdAt);

        return $clone;
    }

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
     * @param PageinsightsGetPerformanceDataOKResponseBodyMetricsItem[] $metrics
     */
    public function withMetrics(array $metrics): self
    {
        $clone = clone $this;
        $clone->metrics = $metrics;

        return $clone;
    }

    public function withoutMetrics(): self
    {
        $clone = clone $this;
        unset($clone->metrics);

        return $clone;
    }

    /**
     * @param string[] $moreDataAvailable
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

    public function withoutMoreDataAvailable(): self
    {
        $clone = clone $this;
        unset($clone->moreDataAvailable);

        return $clone;
    }

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

    public function withScreenshot(PageinsightsGetPerformanceDataOKResponseBodyScreenshot $screenshot): self
    {
        $clone = clone $this;
        $clone->screenshot = $screenshot;

        return $clone;
    }

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
     * @return PageinsightsGetPerformanceDataOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): PageinsightsGetPerformanceDataOKResponseBody
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
            $metrics = array_map(fn (array|object $i): PageinsightsGetPerformanceDataOKResponseBodyMetricsItem => PageinsightsGetPerformanceDataOKResponseBodyMetricsItem::buildFromInput($i, validate: $validate), $input->{'metrics'});
        }
        $moreDataAvailable = null;
        if (isset($input->{'moreDataAvailable'})) {
            $moreDataAvailable = $input->{'moreDataAvailable'};
        }
        $path = $input->{'path'};
        $performanceScore = str_contains((string)($input->{'performanceScore'}), '.') ? (float)($input->{'performanceScore'}) : (int)($input->{'performanceScore'});
        $screenshot = null;
        if (isset($input->{'screenshot'})) {
            $screenshot = PageinsightsGetPerformanceDataOKResponseBodyScreenshot::buildFromInput($input->{'screenshot'}, validate: $validate);
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
            $output['metrics'] = array_map(fn (PageinsightsGetPerformanceDataOKResponseBodyMetricsItem $i) => $i->toJson(), $this->metrics);
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
        $validator = new \Mittwald\ApiClient\Validator\Validator();
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
            $this->metrics = array_map(fn (PageinsightsGetPerformanceDataOKResponseBodyMetricsItem $i) => clone $i, $this->metrics);
        }
        if (isset($this->screenshot)) {
            $this->screenshot = clone $this->screenshot;
        }
    }
}
