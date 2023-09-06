<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Contract;

use InvalidArgumentException;
use DateTime;

class TariffChange
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'executedAtDate' => [
                'description' => 'This is only set if the tariff change has already been carried out.',
                'format' => 'date-time',
                'type' => 'string',
            ],
            'newArticles' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.contract.Article',
                ],
                'type' => 'array',
            ],
            'scheduledAtDate' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'scheduledByUserId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'targetDate' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
        ],
        'required' => [
            'scheduledAtDate',
            'targetDate',
            'newArticles',
        ],
        'type' => 'object',
    ];

    /**
     * This is only set if the tariff change has already been carried out.
     *
     * @var DateTime|null
     */
    private ?DateTime $executedAtDate = null;

    /**
     * @var Article[]
     */
    private array $newArticles;

    /**
     * @var DateTime
     */
    private DateTime $scheduledAtDate;

    /**
     * @var string|null
     */
    private ?string $scheduledByUserId = null;

    /**
     * @var DateTime
     */
    private DateTime $targetDate;

    /**
     * @param Article[] $newArticles
     * @param DateTime $scheduledAtDate
     * @param DateTime $targetDate
     */
    public function __construct(array $newArticles, DateTime $scheduledAtDate, DateTime $targetDate)
    {
        $this->newArticles = $newArticles;
        $this->scheduledAtDate = $scheduledAtDate;
        $this->targetDate = $targetDate;
    }

    /**
     * @return DateTime|null
     */
    public function getExecutedAtDate(): ?DateTime
    {
        return $this->executedAtDate ?? null;
    }

    /**
     * @return Article[]
     */
    public function getNewArticles(): array
    {
        return $this->newArticles;
    }

    /**
     * @return DateTime
     */
    public function getScheduledAtDate(): DateTime
    {
        return $this->scheduledAtDate;
    }

    /**
     * @return string|null
     */
    public function getScheduledByUserId(): ?string
    {
        return $this->scheduledByUserId ?? null;
    }

    /**
     * @return DateTime
     */
    public function getTargetDate(): DateTime
    {
        return $this->targetDate;
    }

    /**
     * @param DateTime $executedAtDate
     * @return self
     */
    public function withExecutedAtDate(DateTime $executedAtDate): self
    {
        $clone = clone $this;
        $clone->executedAtDate = $executedAtDate;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutExecutedAtDate(): self
    {
        $clone = clone $this;
        unset($clone->executedAtDate);

        return $clone;
    }

    /**
     * @param Article[] $newArticles
     * @return self
     */
    public function withNewArticles(array $newArticles): self
    {
        $clone = clone $this;
        $clone->newArticles = $newArticles;

        return $clone;
    }

    /**
     * @param DateTime $scheduledAtDate
     * @return self
     */
    public function withScheduledAtDate(DateTime $scheduledAtDate): self
    {
        $clone = clone $this;
        $clone->scheduledAtDate = $scheduledAtDate;

        return $clone;
    }

    /**
     * @param string $scheduledByUserId
     * @return self
     */
    public function withScheduledByUserId(string $scheduledByUserId): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($scheduledByUserId, static::$schema['properties']['scheduledByUserId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->scheduledByUserId = $scheduledByUserId;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutScheduledByUserId(): self
    {
        $clone = clone $this;
        unset($clone->scheduledByUserId);

        return $clone;
    }

    /**
     * @param DateTime $targetDate
     * @return self
     */
    public function withTargetDate(DateTime $targetDate): self
    {
        $clone = clone $this;
        $clone->targetDate = $targetDate;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return TariffChange Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): TariffChange
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $executedAtDate = null;
        if (isset($input->{'executedAtDate'})) {
            $executedAtDate = new DateTime($input->{'executedAtDate'});
        }
        $newArticles = array_map(fn (array $i): Article => Article::buildFromInput($i, validate: $validate), $input->{'newArticles'});
        $scheduledAtDate = new DateTime($input->{'scheduledAtDate'});
        $scheduledByUserId = null;
        if (isset($input->{'scheduledByUserId'})) {
            $scheduledByUserId = $input->{'scheduledByUserId'};
        }
        $targetDate = new DateTime($input->{'targetDate'});

        $obj = new self($newArticles, $scheduledAtDate, $targetDate);
        $obj->executedAtDate = $executedAtDate;
        $obj->scheduledByUserId = $scheduledByUserId;
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
        if (isset($this->executedAtDate)) {
            $output['executedAtDate'] = ($this->executedAtDate)->format(DateTime::ATOM);
        }
        $output['newArticles'] = array_map(fn (Article $i): array => $i->toJson(), $this->newArticles);
        $output['scheduledAtDate'] = ($this->scheduledAtDate)->format(DateTime::ATOM);
        if (isset($this->scheduledByUserId)) {
            $output['scheduledByUserId'] = $this->scheduledByUserId;
        }
        $output['targetDate'] = ($this->targetDate)->format(DateTime::ATOM);

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
        if (isset($this->executedAtDate)) {
            $this->executedAtDate = clone $this->executedAtDate;
        }
        $this->scheduledAtDate = clone $this->scheduledAtDate;
        $this->targetDate = clone $this->targetDate;
    }
}
