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
     *
     * @var array
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
    ];

    /**
     * @var DateTime
     */
    private DateTime $createdAt;

    /**
     * @var string
     */
    private string $name;

    /**
     * @var int|float
     */
    private int|float $score;

    /**
     * @var int|float
     */
    private int|float $value;

    /**
     * @param DateTime $createdAt
     * @param string $name
     * @param int|float $score
     * @param int|float $value
     */
    public function __construct(DateTime $createdAt, string $name, int|float $score, int|float $value)
    {
        $this->createdAt = $createdAt;
        $this->name = $name;
        $this->score = $score;
        $this->value = $value;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int|float
     */
    public function getScore(): int|float
    {
        return $this->score;
    }

    /**
     * @return int|float
     */
    public function getValue(): int|float
    {
        return $this->value;
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
     * @param string $name
     * @return self
     */
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
     * @return self
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

    /**
     * @param int|float $value
     * @return self
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
        $score = str_contains($input->{'score'}, '.') ? (float)($input->{'score'}) : (int)($input->{'score'});
        $value = str_contains($input->{'value'}, '.') ? (float)($input->{'value'}) : (int)($input->{'value'});

        $obj = new self($createdAt, $name, $score, $value);

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
        $output['score'] = $this->score;
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
