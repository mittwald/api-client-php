<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\PageInsights\PageinsightsListPerformanceDataForProject;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;

class PageinsightsListPerformanceDataForProjectOKResponseBodyItemPathsItem
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
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
    ];

    private DateTime $createdAt;

    private string $path;

    private int $performanceScore;

    private ?string $screenshotFileRef = null;

    public function __construct(DateTime $createdAt, string $path, int $performanceScore)
    {
        $this->createdAt = $createdAt;
        $this->path = $path;
        $this->performanceScore = $performanceScore;
    }

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function getPerformanceScore(): int
    {
        return $this->performanceScore;
    }

    public function getScreenshotFileRef(): ?string
    {
        return $this->screenshotFileRef ?? null;
    }

    public function withCreatedAt(DateTime $createdAt): self
    {
        $clone = clone $this;
        $clone->createdAt = $createdAt;

        return $clone;
    }

    public function withPath(string $path): self
    {
        $validator = new Validator();
        $validator->validate($path, self::$internalValidationSchema['properties']['path']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->path = $path;

        return $clone;
    }

    public function withPerformanceScore(int $performanceScore): self
    {
        $validator = new Validator();
        $validator->validate($performanceScore, self::$internalValidationSchema['properties']['performanceScore']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->performanceScore = $performanceScore;

        return $clone;
    }

    public function withScreenshotFileRef(string $screenshotFileRef): self
    {
        $validator = new Validator();
        $validator->validate($screenshotFileRef, self::$internalValidationSchema['properties']['screenshotFileRef']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->screenshotFileRef = $screenshotFileRef;

        return $clone;
    }

    public function withoutScreenshotFileRef(): self
    {
        $clone = clone $this;
        unset($clone->screenshotFileRef);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return PageinsightsListPerformanceDataForProjectOKResponseBodyItemPathsItem Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): PageinsightsListPerformanceDataForProjectOKResponseBodyItemPathsItem
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $createdAt = new DateTime($input->{'createdAt'});
        $path = $input->{'path'};
        $performanceScore = (int)($input->{'performanceScore'});
        $screenshotFileRef = null;
        if (isset($input->{'screenshotFileRef'})) {
            $screenshotFileRef = $input->{'screenshotFileRef'};
        }

        $obj = new self($createdAt, $path, $performanceScore);
        $obj->screenshotFileRef = $screenshotFileRef;
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
        $output['createdAt'] = ($this->createdAt)->format(DateTime::ATOM);
        $output['path'] = $this->path;
        $output['performanceScore'] = $this->performanceScore;
        if (isset($this->screenshotFileRef)) {
            $output['screenshotFileRef'] = $this->screenshotFileRef;
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
        $this->createdAt = clone $this->createdAt;
    }
}
