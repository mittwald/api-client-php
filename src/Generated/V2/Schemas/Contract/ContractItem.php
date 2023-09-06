<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Contract;

use InvalidArgumentException;
use DateTime;

class ContractItem
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'activationDate' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'aggregateReference' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.contract.AggregateReference',
            ],
            'articles' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.contract.Article',
                ],
                'type' => 'array',
            ],
            'contractPeriod' => [
                'example' => 1,
                'minimum' => 0,
                'type' => 'number',
            ],
            'description' => [
                'example' => 'Space-Server: "Mein Space-Server"',
                'type' => 'string',
            ],
            'groupByProjectId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'invoicingPeriod' => [
                'example' => 1,
                'minimum' => 1,
                'type' => 'number',
            ],
            'isActivated' => [
                'type' => 'boolean',
            ],
            'isBaseItem' => [
                'type' => 'boolean',
            ],
            'isInFreeTrial' => [
                'type' => 'boolean',
            ],
            'isInclusive' => [
                'type' => 'boolean',
            ],
            'itemId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'nextPossibleDowngradeDate' => [
                'description' => 'If this attribute is not set, termination is not allowed.',
                'format' => 'date-time',
                'type' => 'string',
            ],
            'nextPossibleTerminationDate' => [
                'description' => 'If this attribute is not set, a tariff change is not allowed.',
                'format' => 'date-time',
                'type' => 'string',
            ],
            'nextPossibleUpgradeDate' => [
                'description' => 'If this attribute is not set, a tariff change is not allowed.',
                'format' => 'date-time',
                'type' => 'string',
            ],
            'orderDate' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'orderId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'replacedByItem' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'tariffChange' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.contract.TariffChange',
            ],
            'termination' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.contract.Termination',
            ],
            'totalPrice' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.contract.Price',
            ],
        ],
        'required' => [
            'itemId',
            'orderDate',
            'isActivated',
            'invoicingPeriod',
            'contractPeriod',
            'articles',
            'totalPrice',
            'description',
            'isBaseItem',
        ],
        'type' => 'object',
    ];

    /**
     * @var DateTime|null
     */
    private ?DateTime $activationDate = null;

    /**
     * @var AggregateReference|null
     */
    private ?AggregateReference $aggregateReference = null;

    /**
     * @var Article[]
     */
    private array $articles;

    /**
     * @var int|float
     */
    private int|float $contractPeriod;

    /**
     * @var string
     */
    private string $description;

    /**
     * @var string|null
     */
    private ?string $groupByProjectId = null;

    /**
     * @var int|float
     */
    private int|float $invoicingPeriod;

    /**
     * @var bool
     */
    private bool $isActivated;

    /**
     * @var bool
     */
    private bool $isBaseItem;

    /**
     * @var bool|null
     */
    private ?bool $isInFreeTrial = null;

    /**
     * @var bool|null
     */
    private ?bool $isInclusive = null;

    /**
     * @var string
     */
    private string $itemId;

    /**
     * If this attribute is not set, termination is not allowed.
     *
     * @var DateTime|null
     */
    private ?DateTime $nextPossibleDowngradeDate = null;

    /**
     * If this attribute is not set, a tariff change is not allowed.
     *
     * @var DateTime|null
     */
    private ?DateTime $nextPossibleTerminationDate = null;

    /**
     * If this attribute is not set, a tariff change is not allowed.
     *
     * @var DateTime|null
     */
    private ?DateTime $nextPossibleUpgradeDate = null;

    /**
     * @var DateTime
     */
    private DateTime $orderDate;

    /**
     * @var string|null
     */
    private ?string $orderId = null;

    /**
     * @var string|null
     */
    private ?string $replacedByItem = null;

    /**
     * @var TariffChange|null
     */
    private ?TariffChange $tariffChange = null;

    /**
     * @var Termination|null
     */
    private ?Termination $termination = null;

    /**
     * @var Price
     */
    private Price $totalPrice;

    /**
     * @param Article[] $articles
     * @param int|float $contractPeriod
     * @param string $description
     * @param int|float $invoicingPeriod
     * @param bool $isActivated
     * @param bool $isBaseItem
     * @param string $itemId
     * @param DateTime $orderDate
     * @param Price $totalPrice
     */
    public function __construct(array $articles, int|float $contractPeriod, string $description, int|float $invoicingPeriod, bool $isActivated, bool $isBaseItem, string $itemId, DateTime $orderDate, Price $totalPrice)
    {
        $this->articles = $articles;
        $this->contractPeriod = $contractPeriod;
        $this->description = $description;
        $this->invoicingPeriod = $invoicingPeriod;
        $this->isActivated = $isActivated;
        $this->isBaseItem = $isBaseItem;
        $this->itemId = $itemId;
        $this->orderDate = $orderDate;
        $this->totalPrice = $totalPrice;
    }

    /**
     * @return DateTime|null
     */
    public function getActivationDate(): ?DateTime
    {
        return $this->activationDate ?? null;
    }

    /**
     * @return
     * AggregateReference|null
     */
    public function getAggregateReference(): ?AggregateReference
    {
        return $this->aggregateReference ?? null;
    }

    /**
     * @return Article[]
     */
    public function getArticles(): array
    {
        return $this->articles;
    }

    /**
     * @return int|float
     */
    public function getContractPeriod(): int|float
    {
        return $this->contractPeriod;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string|null
     */
    public function getGroupByProjectId(): ?string
    {
        return $this->groupByProjectId ?? null;
    }

    /**
     * @return int|float
     */
    public function getInvoicingPeriod(): int|float
    {
        return $this->invoicingPeriod;
    }

    /**
     * @return bool
     */
    public function getIsActivated(): bool
    {
        return $this->isActivated;
    }

    /**
     * @return bool
     */
    public function getIsBaseItem(): bool
    {
        return $this->isBaseItem;
    }

    /**
     * @return bool|null
     */
    public function getIsInFreeTrial(): ?bool
    {
        return $this->isInFreeTrial ?? null;
    }

    /**
     * @return bool|null
     */
    public function getIsInclusive(): ?bool
    {
        return $this->isInclusive ?? null;
    }

    /**
     * @return string
     */
    public function getItemId(): string
    {
        return $this->itemId;
    }

    /**
     * @return DateTime|null
     */
    public function getNextPossibleDowngradeDate(): ?DateTime
    {
        return $this->nextPossibleDowngradeDate ?? null;
    }

    /**
     * @return DateTime|null
     */
    public function getNextPossibleTerminationDate(): ?DateTime
    {
        return $this->nextPossibleTerminationDate ?? null;
    }

    /**
     * @return DateTime|null
     */
    public function getNextPossibleUpgradeDate(): ?DateTime
    {
        return $this->nextPossibleUpgradeDate ?? null;
    }

    /**
     * @return DateTime
     */
    public function getOrderDate(): DateTime
    {
        return $this->orderDate;
    }

    /**
     * @return string|null
     */
    public function getOrderId(): ?string
    {
        return $this->orderId ?? null;
    }

    /**
     * @return string|null
     */
    public function getReplacedByItem(): ?string
    {
        return $this->replacedByItem ?? null;
    }

    /**
     * @return TariffChange|null
     */
    public function getTariffChange(): ?TariffChange
    {
        return $this->tariffChange ?? null;
    }

    /**
     * @return Termination|null
     */
    public function getTermination(): ?Termination
    {
        return $this->termination ?? null;
    }

    /**
     * @return Price
     */
    public function getTotalPrice(): Price
    {
        return $this->totalPrice;
    }

    /**
     * @param DateTime $activationDate
     * @return self
     */
    public function withActivationDate(DateTime $activationDate): self
    {
        $clone = clone $this;
        $clone->activationDate = $activationDate;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutActivationDate(): self
    {
        $clone = clone $this;
        unset($clone->activationDate);

        return $clone;
    }

    /**
     * @param AggregateReference $aggregateReference
     * @return self
     */
    public function withAggregateReference(AggregateReference $aggregateReference): self
    {
        $clone = clone $this;
        $clone->aggregateReference = $aggregateReference;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutAggregateReference(): self
    {
        $clone = clone $this;
        unset($clone->aggregateReference);

        return $clone;
    }

    /**
     * @param Article[] $articles
     * @return self
     */
    public function withArticles(array $articles): self
    {
        $clone = clone $this;
        $clone->articles = $articles;

        return $clone;
    }

    /**
     * @param int|float $contractPeriod
     * @return self
     */
    public function withContractPeriod(int|float $contractPeriod): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($contractPeriod, static::$schema['properties']['contractPeriod']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->contractPeriod = $contractPeriod;

        return $clone;
    }

    /**
     * @param string $description
     * @return self
     */
    public function withDescription(string $description): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($description, static::$schema['properties']['description']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->description = $description;

        return $clone;
    }

    /**
     * @param string $groupByProjectId
     * @return self
     */
    public function withGroupByProjectId(string $groupByProjectId): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($groupByProjectId, static::$schema['properties']['groupByProjectId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->groupByProjectId = $groupByProjectId;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutGroupByProjectId(): self
    {
        $clone = clone $this;
        unset($clone->groupByProjectId);

        return $clone;
    }

    /**
     * @param int|float $invoicingPeriod
     * @return self
     */
    public function withInvoicingPeriod(int|float $invoicingPeriod): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($invoicingPeriod, static::$schema['properties']['invoicingPeriod']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->invoicingPeriod = $invoicingPeriod;

        return $clone;
    }

    /**
     * @param bool $isActivated
     * @return self
     */
    public function withIsActivated(bool $isActivated): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($isActivated, static::$schema['properties']['isActivated']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->isActivated = $isActivated;

        return $clone;
    }

    /**
     * @param bool $isBaseItem
     * @return self
     */
    public function withIsBaseItem(bool $isBaseItem): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($isBaseItem, static::$schema['properties']['isBaseItem']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->isBaseItem = $isBaseItem;

        return $clone;
    }

    /**
     * @param bool $isInFreeTrial
     * @return self
     */
    public function withIsInFreeTrial(bool $isInFreeTrial): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($isInFreeTrial, static::$schema['properties']['isInFreeTrial']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->isInFreeTrial = $isInFreeTrial;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutIsInFreeTrial(): self
    {
        $clone = clone $this;
        unset($clone->isInFreeTrial);

        return $clone;
    }

    /**
     * @param bool $isInclusive
     * @return self
     */
    public function withIsInclusive(bool $isInclusive): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($isInclusive, static::$schema['properties']['isInclusive']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->isInclusive = $isInclusive;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutIsInclusive(): self
    {
        $clone = clone $this;
        unset($clone->isInclusive);

        return $clone;
    }

    /**
     * @param string $itemId
     * @return self
     */
    public function withItemId(string $itemId): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($itemId, static::$schema['properties']['itemId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->itemId = $itemId;

        return $clone;
    }

    /**
     * @param DateTime $nextPossibleDowngradeDate
     * @return self
     */
    public function withNextPossibleDowngradeDate(DateTime $nextPossibleDowngradeDate): self
    {
        $clone = clone $this;
        $clone->nextPossibleDowngradeDate = $nextPossibleDowngradeDate;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutNextPossibleDowngradeDate(): self
    {
        $clone = clone $this;
        unset($clone->nextPossibleDowngradeDate);

        return $clone;
    }

    /**
     * @param DateTime $nextPossibleTerminationDate
     * @return self
     */
    public function withNextPossibleTerminationDate(DateTime $nextPossibleTerminationDate): self
    {
        $clone = clone $this;
        $clone->nextPossibleTerminationDate = $nextPossibleTerminationDate;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutNextPossibleTerminationDate(): self
    {
        $clone = clone $this;
        unset($clone->nextPossibleTerminationDate);

        return $clone;
    }

    /**
     * @param DateTime $nextPossibleUpgradeDate
     * @return self
     */
    public function withNextPossibleUpgradeDate(DateTime $nextPossibleUpgradeDate): self
    {
        $clone = clone $this;
        $clone->nextPossibleUpgradeDate = $nextPossibleUpgradeDate;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutNextPossibleUpgradeDate(): self
    {
        $clone = clone $this;
        unset($clone->nextPossibleUpgradeDate);

        return $clone;
    }

    /**
     * @param DateTime $orderDate
     * @return self
     */
    public function withOrderDate(DateTime $orderDate): self
    {
        $clone = clone $this;
        $clone->orderDate = $orderDate;

        return $clone;
    }

    /**
     * @param string $orderId
     * @return self
     */
    public function withOrderId(string $orderId): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($orderId, static::$schema['properties']['orderId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->orderId = $orderId;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutOrderId(): self
    {
        $clone = clone $this;
        unset($clone->orderId);

        return $clone;
    }

    /**
     * @param string $replacedByItem
     * @return self
     */
    public function withReplacedByItem(string $replacedByItem): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($replacedByItem, static::$schema['properties']['replacedByItem']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->replacedByItem = $replacedByItem;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutReplacedByItem(): self
    {
        $clone = clone $this;
        unset($clone->replacedByItem);

        return $clone;
    }

    /**
     * @param TariffChange $tariffChange
     * @return self
     */
    public function withTariffChange(TariffChange $tariffChange): self
    {
        $clone = clone $this;
        $clone->tariffChange = $tariffChange;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutTariffChange(): self
    {
        $clone = clone $this;
        unset($clone->tariffChange);

        return $clone;
    }

    /**
     * @param Termination $termination
     * @return self
     */
    public function withTermination(Termination $termination): self
    {
        $clone = clone $this;
        $clone->termination = $termination;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutTermination(): self
    {
        $clone = clone $this;
        unset($clone->termination);

        return $clone;
    }

    /**
     * @param Price $totalPrice
     * @return self
     */
    public function withTotalPrice(Price $totalPrice): self
    {
        $clone = clone $this;
        $clone->totalPrice = $totalPrice;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ContractItem Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ContractItem
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $activationDate = null;
        if (isset($input->{'activationDate'})) {
            $activationDate = new DateTime($input->{'activationDate'});
        }
        $aggregateReference = null;
        if (isset($input->{'aggregateReference'})) {
            $aggregateReference = AggregateReference::buildFromInput($input->{'aggregateReference'}, validate: $validate);
        }
        $articles = array_map(fn (array $i): Article => Article::buildFromInput($i, validate: $validate), $input->{'articles'});
        $contractPeriod = str_contains($input->{'contractPeriod'}, '.') ? (float)($input->{'contractPeriod'}) : (int)($input->{'contractPeriod'});
        $description = $input->{'description'};
        $groupByProjectId = null;
        if (isset($input->{'groupByProjectId'})) {
            $groupByProjectId = $input->{'groupByProjectId'};
        }
        $invoicingPeriod = str_contains($input->{'invoicingPeriod'}, '.') ? (float)($input->{'invoicingPeriod'}) : (int)($input->{'invoicingPeriod'});
        $isActivated = (bool)($input->{'isActivated'});
        $isBaseItem = (bool)($input->{'isBaseItem'});
        $isInFreeTrial = null;
        if (isset($input->{'isInFreeTrial'})) {
            $isInFreeTrial = (bool)($input->{'isInFreeTrial'});
        }
        $isInclusive = null;
        if (isset($input->{'isInclusive'})) {
            $isInclusive = (bool)($input->{'isInclusive'});
        }
        $itemId = $input->{'itemId'};
        $nextPossibleDowngradeDate = null;
        if (isset($input->{'nextPossibleDowngradeDate'})) {
            $nextPossibleDowngradeDate = new DateTime($input->{'nextPossibleDowngradeDate'});
        }
        $nextPossibleTerminationDate = null;
        if (isset($input->{'nextPossibleTerminationDate'})) {
            $nextPossibleTerminationDate = new DateTime($input->{'nextPossibleTerminationDate'});
        }
        $nextPossibleUpgradeDate = null;
        if (isset($input->{'nextPossibleUpgradeDate'})) {
            $nextPossibleUpgradeDate = new DateTime($input->{'nextPossibleUpgradeDate'});
        }
        $orderDate = new DateTime($input->{'orderDate'});
        $orderId = null;
        if (isset($input->{'orderId'})) {
            $orderId = $input->{'orderId'};
        }
        $replacedByItem = null;
        if (isset($input->{'replacedByItem'})) {
            $replacedByItem = $input->{'replacedByItem'};
        }
        $tariffChange = null;
        if (isset($input->{'tariffChange'})) {
            $tariffChange = TariffChange::buildFromInput($input->{'tariffChange'}, validate: $validate);
        }
        $termination = null;
        if (isset($input->{'termination'})) {
            $termination = Termination::buildFromInput($input->{'termination'}, validate: $validate);
        }
        $totalPrice = Price::buildFromInput($input->{'totalPrice'}, validate: $validate);

        $obj = new self($articles, $contractPeriod, $description, $invoicingPeriod, $isActivated, $isBaseItem, $itemId, $orderDate, $totalPrice);
        $obj->activationDate = $activationDate;
        $obj->aggregateReference = $aggregateReference;
        $obj->groupByProjectId = $groupByProjectId;
        $obj->isInFreeTrial = $isInFreeTrial;
        $obj->isInclusive = $isInclusive;
        $obj->nextPossibleDowngradeDate = $nextPossibleDowngradeDate;
        $obj->nextPossibleTerminationDate = $nextPossibleTerminationDate;
        $obj->nextPossibleUpgradeDate = $nextPossibleUpgradeDate;
        $obj->orderId = $orderId;
        $obj->replacedByItem = $replacedByItem;
        $obj->tariffChange = $tariffChange;
        $obj->termination = $termination;
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
        if (isset($this->activationDate)) {
            $output['activationDate'] = ($this->activationDate)->format(DateTime::ATOM);
        }
        if (isset($this->aggregateReference)) {
            $output['aggregateReference'] = $this->aggregateReference->toJson();
        }
        $output['articles'] = array_map(fn (Article $i): array => $i->toJson(), $this->articles);
        $output['contractPeriod'] = $this->contractPeriod;
        $output['description'] = $this->description;
        if (isset($this->groupByProjectId)) {
            $output['groupByProjectId'] = $this->groupByProjectId;
        }
        $output['invoicingPeriod'] = $this->invoicingPeriod;
        $output['isActivated'] = $this->isActivated;
        $output['isBaseItem'] = $this->isBaseItem;
        if (isset($this->isInFreeTrial)) {
            $output['isInFreeTrial'] = $this->isInFreeTrial;
        }
        if (isset($this->isInclusive)) {
            $output['isInclusive'] = $this->isInclusive;
        }
        $output['itemId'] = $this->itemId;
        if (isset($this->nextPossibleDowngradeDate)) {
            $output['nextPossibleDowngradeDate'] = ($this->nextPossibleDowngradeDate)->format(DateTime::ATOM);
        }
        if (isset($this->nextPossibleTerminationDate)) {
            $output['nextPossibleTerminationDate'] = ($this->nextPossibleTerminationDate)->format(DateTime::ATOM);
        }
        if (isset($this->nextPossibleUpgradeDate)) {
            $output['nextPossibleUpgradeDate'] = ($this->nextPossibleUpgradeDate)->format(DateTime::ATOM);
        }
        $output['orderDate'] = ($this->orderDate)->format(DateTime::ATOM);
        if (isset($this->orderId)) {
            $output['orderId'] = $this->orderId;
        }
        if (isset($this->replacedByItem)) {
            $output['replacedByItem'] = $this->replacedByItem;
        }
        if (isset($this->tariffChange)) {
            $output['tariffChange'] = $this->tariffChange->toJson();
        }
        if (isset($this->termination)) {
            $output['termination'] = $this->termination->toJson();
        }
        $output['totalPrice'] = $this->totalPrice->toJson();

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
        if (isset($this->activationDate)) {
            $this->activationDate = clone $this->activationDate;
        }
        if (isset($this->nextPossibleDowngradeDate)) {
            $this->nextPossibleDowngradeDate = clone $this->nextPossibleDowngradeDate;
        }
        if (isset($this->nextPossibleTerminationDate)) {
            $this->nextPossibleTerminationDate = clone $this->nextPossibleTerminationDate;
        }
        if (isset($this->nextPossibleUpgradeDate)) {
            $this->nextPossibleUpgradeDate = clone $this->nextPossibleUpgradeDate;
        }
        $this->orderDate = clone $this->orderDate;
    }
}
