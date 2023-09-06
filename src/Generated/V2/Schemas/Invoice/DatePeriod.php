<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Invoice;

use InvalidArgumentException;
use DateTime;

class DatePeriod
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'end' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'start' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
        ],
        'required' => [
            'start',
            'end',
        ],
        'type' => 'object',
    ];

    /**
     * @var DateTime
     */
    private DateTime $end;

    /**
     * @var DateTime
     */
    private DateTime $start;

    /**
     * @param DateTime $end
     * @param DateTime $start
     */
    public function __construct(DateTime $end, DateTime $start)
    {
        $this->end = $end;
        $this->start = $start;
    }

    /**
     * @return DateTime
     */
    public function getEnd(): DateTime
    {
        return $this->end;
    }

    /**
     * @return DateTime
     */
    public function getStart(): DateTime
    {
        return $this->start;
    }

    /**
     * @param DateTime $end
     * @return self
     */
    public function withEnd(DateTime $end): self
    {
        $clone = clone $this;
        $clone->end = $end;

        return $clone;
    }

    /**
     * @param DateTime $start
     * @return self
     */
    public function withStart(DateTime $start): self
    {
        $clone = clone $this;
        $clone->start = $start;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return DatePeriod Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): DatePeriod
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $end = new DateTime($input->{'end'});
        $start = new DateTime($input->{'start'});

        $obj = new self($end, $start);

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
        $output['end'] = ($this->end)->format(DateTime::ATOM);
        $output['start'] = ($this->start)->format(DateTime::ATOM);

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
        $validator = new \JsonSchema\Validator();
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
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
        $this->end = clone $this->end;
        $this->start = clone $this->start;
    }
}
