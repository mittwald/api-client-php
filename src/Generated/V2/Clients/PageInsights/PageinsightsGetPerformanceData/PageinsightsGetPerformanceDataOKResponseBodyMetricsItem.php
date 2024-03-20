<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\PageInsights\PageinsightsGetPerformanceData;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;

class PageinsightsGetPerformanceDataOKResponseBodyMetricsItem
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
    ];

    private DateTime $createdAt;

    private string $name;

    private int|float|null $score = null;

    private int|float $value;

    /**
     * @param int|float $value
     */
    public function __construct(DateTime $createdAt, string $name, int|float $value)
    {
        $this->createdAt = $createdAt;
        $this->name = $name;
        $this->value = $value;
    }

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getScore(): int|float|null
    {
        return $this->score;
    }

    public function getValue(): int|float
    {
        return $this->value;
    }

    public function withCreatedAt(DateTime $createdAt): self
    {
        $clone = clone $this;
        $clone->createdAt = $createdAt;

        return $clone;
    }

    public function withName(string $name): self
    {
        $validator = new Validator();
        $validator->validate($name, static::$schema['properties']['name']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->name = $name;

        return $clone;
    }

    /**
     * @param int|float $score
     */
    public function withScore(int|float $score): self
    {
        $validator = new Validator();
        $validator->validate($score, static::$schema['properties']['score']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->score = $score;

        return $clone;
    }

    public function withoutScore(): self
    {
        $clone = clone $this;
        unset($clone->score);

        return $clone;
    }

    /**
     * @param int|float $value
     */
    public function withValue(int|float $value): self
    {
        $validator = new Validator();
        $validator->validate($value, static::$schema['properties']['value']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->value = $value;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return PageinsightsGetPerformanceDataOKResponseBodyMetricsItem Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): PageinsightsGetPerformanceDataOKResponseBodyMetricsItem
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $createdAt = new DateTime($input->{'createdAt'});
        $name = $input->{'name'};
        $score = null;
        if (isset($input->{'score'})) {
            $score = str_contains((string)($input->{'score'}), '.') ? (float)($input->{'score'}) : (int)($input->{'score'});
        }
        $value = str_contains((string)($input->{'value'}), '.') ? (float)($input->{'value'}) : (int)($input->{'value'});

        $obj = new self($createdAt, $name, $value);
        $obj->score = $score;
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
        $output['name'] = $this->name;
        if (isset($this->score)) {
            $output['score'] = $this->score;
        }
        $output['value'] = $this->value;

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
        $this->createdAt = clone $this->createdAt;
    }
}
