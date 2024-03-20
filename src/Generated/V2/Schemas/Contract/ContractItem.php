<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Contract;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.contract.ContractItem.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class ContractItem
{
    /**
     * Schema used to validate input for creating instances of this class
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
            'freeTrialDays' => [
                'example' => 10,
                'type' => 'number',
            ],
            'groupByProjectId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'invoicingPeriod' => [
                'example' => 1,
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
            'contractPeriod',
            'articles',
            'totalPrice',
            'description',
            'isBaseItem',
        ],
        'type' => 'object',
    ];

    private ?DateTime $activationDate = null;

    private ?AggregateReference $aggregateReference = null;

    /**
     * @var Article[]
     */
    private array $articles;

    private int|float $contractPeriod;

    private string $description;

    private int|float|null $freeTrialDays = null;

    private ?string $groupByProjectId = null;

    private int|float|null $invoicingPeriod = null;

    private bool $isActivated;

    private bool $isBaseItem;

    private ?bool $isInFreeTrial = null;

    private ?bool $isInclusive = null;

    private string $itemId;

    /**
     * If this attribute is not set, termination is not allowed.
     */
    private ?DateTime $nextPossibleDowngradeDate = null;

    /**
     * If this attribute is not set, a tariff change is not allowed.
     */
    private ?DateTime $nextPossibleTerminationDate = null;

    /**
     * If this attribute is not set, a tariff change is not allowed.
     */
    private ?DateTime $nextPossibleUpgradeDate = null;

    private DateTime $orderDate;

    private ?string $orderId = null;

    private ?string $replacedByItem = null;

    private ?TariffChange $tariffChange = null;

    private ?Termination $termination = null;

    private Price $totalPrice;

    /**
     * @param Article[] $articles
     * @param int|float $contractPeriod
     */
    public function __construct(array $articles, int|float $contractPeriod, string $description, bool $isActivated, bool $isBaseItem, string $itemId, DateTime $orderDate, Price $totalPrice)
    {
        $this->articles = $articles;
        $this->contractPeriod = $contractPeriod;
        $this->description = $description;
        $this->isActivated = $isActivated;
        $this->isBaseItem = $isBaseItem;
        $this->itemId = $itemId;
        $this->orderDate = $orderDate;
        $this->totalPrice = $totalPrice;
    }

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

    public function getContractPeriod(): int|float
    {
        return $this->contractPeriod;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getFreeTrialDays(): int|float|null
    {
        return $this->freeTrialDays;
    }

    public function getGroupByProjectId(): ?string
    {
        return $this->groupByProjectId ?? null;
    }

    public function getInvoicingPeriod(): int|float|null
    {
        return $this->invoicingPeriod;
    }

    public function getIsActivated(): bool
    {
        return $this->isActivated;
    }

    public function getIsBaseItem(): bool
    {
        return $this->isBaseItem;
    }

    public function getIsInFreeTrial(): ?bool
    {
        return $this->isInFreeTrial ?? null;
    }

    public function getIsInclusive(): ?bool
    {
        return $this->isInclusive ?? null;
    }

    public function getItemId(): string
    {
        return $this->itemId;
    }

    public function getNextPossibleDowngradeDate(): ?DateTime
    {
        return $this->nextPossibleDowngradeDate ?? null;
    }

    public function getNextPossibleTerminationDate(): ?DateTime
    {
        return $this->nextPossibleTerminationDate ?? null;
    }

    public function getNextPossibleUpgradeDate(): ?DateTime
    {
        return $this->nextPossibleUpgradeDate ?? null;
    }

    public function getOrderDate(): DateTime
    {
        return $this->orderDate;
    }

    public function getOrderId(): ?string
    {
        return $this->orderId ?? null;
    }

    public function getReplacedByItem(): ?string
    {
        return $this->replacedByItem ?? null;
    }

    public function getTariffChange(): ?TariffChange
    {
        return $this->tariffChange ?? null;
    }

    public function getTermination(): ?Termination
    {
        return $this->termination ?? null;
    }

    public function getTotalPrice(): Price
    {
        return $this->totalPrice;
    }

    public function withActivationDate(DateTime $activationDate): self
    {
        $clone = clone $this;
        $clone->activationDate = $activationDate;

        return $clone;
    }

    public function withoutActivationDate(): self
    {
        $clone = clone $this;
        unset($clone->activationDate);

        return $clone;
    }

    public function withAggregateReference(AggregateReference $aggregateReference): self
    {
        $clone = clone $this;
        $clone->aggregateReference = $aggregateReference;

        return $clone;
    }

    public function withoutAggregateReference(): self
    {
        $clone = clone $this;
        unset($clone->aggregateReference);

        return $clone;
    }

    /**
     * @param Article[] $articles
     */
    public function withArticles(array $articles): self
    {
        $clone = clone $this;
        $clone->articles = $articles;

        return $clone;
    }

    /**
     * @param int|float $contractPeriod
     */
    public function withContractPeriod(int|float $contractPeriod): self
    {
        $validator = new Validator();
        $validator->validate($contractPeriod, static::$schema['properties']['contractPeriod']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->contractPeriod = $contractPeriod;

        return $clone;
    }

    public function withDescription(string $description): self
    {
        $validator = new Validator();
        $validator->validate($description, static::$schema['properties']['description']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->description = $description;

        return $clone;
    }

    /**
     * @param int|float $freeTrialDays
     */
    public function withFreeTrialDays(int|float $freeTrialDays): self
    {
        $validator = new Validator();
        $validator->validate($freeTrialDays, static::$schema['properties']['freeTrialDays']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->freeTrialDays = $freeTrialDays;

        return $clone;
    }

    public function withoutFreeTrialDays(): self
    {
        $clone = clone $this;
        unset($clone->freeTrialDays);

        return $clone;
    }

    public function withGroupByProjectId(string $groupByProjectId): self
    {
        $validator = new Validator();
        $validator->validate($groupByProjectId, static::$schema['properties']['groupByProjectId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->groupByProjectId = $groupByProjectId;

        return $clone;
    }

    public function withoutGroupByProjectId(): self
    {
        $clone = clone $this;
        unset($clone->groupByProjectId);

        return $clone;
    }

    /**
     * @param int|float $invoicingPeriod
     */
    public function withInvoicingPeriod(int|float $invoicingPeriod): self
    {
        $validator = new Validator();
        $validator->validate($invoicingPeriod, static::$schema['properties']['invoicingPeriod']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->invoicingPeriod = $invoicingPeriod;

        return $clone;
    }

    public function withoutInvoicingPeriod(): self
    {
        $clone = clone $this;
        unset($clone->invoicingPeriod);

        return $clone;
    }

    public function withIsActivated(bool $isActivated): self
    {
        $validator = new Validator();
        $validator->validate($isActivated, static::$schema['properties']['isActivated']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->isActivated = $isActivated;

        return $clone;
    }

    public function withIsBaseItem(bool $isBaseItem): self
    {
        $validator = new Validator();
        $validator->validate($isBaseItem, static::$schema['properties']['isBaseItem']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->isBaseItem = $isBaseItem;

        return $clone;
    }

    public function withIsInFreeTrial(bool $isInFreeTrial): self
    {
        $validator = new Validator();
        $validator->validate($isInFreeTrial, static::$schema['properties']['isInFreeTrial']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->isInFreeTrial = $isInFreeTrial;

        return $clone;
    }

    public function withoutIsInFreeTrial(): self
    {
        $clone = clone $this;
        unset($clone->isInFreeTrial);

        return $clone;
    }

    public function withIsInclusive(bool $isInclusive): self
    {
        $validator = new Validator();
        $validator->validate($isInclusive, static::$schema['properties']['isInclusive']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->isInclusive = $isInclusive;

        return $clone;
    }

    public function withoutIsInclusive(): self
    {
        $clone = clone $this;
        unset($clone->isInclusive);

        return $clone;
    }

    public function withItemId(string $itemId): self
    {
        $validator = new Validator();
        $validator->validate($itemId, static::$schema['properties']['itemId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->itemId = $itemId;

        return $clone;
    }

    public function withNextPossibleDowngradeDate(DateTime $nextPossibleDowngradeDate): self
    {
        $clone = clone $this;
        $clone->nextPossibleDowngradeDate = $nextPossibleDowngradeDate;

        return $clone;
    }

    public function withoutNextPossibleDowngradeDate(): self
    {
        $clone = clone $this;
        unset($clone->nextPossibleDowngradeDate);

        return $clone;
    }

    public function withNextPossibleTerminationDate(DateTime $nextPossibleTerminationDate): self
    {
        $clone = clone $this;
        $clone->nextPossibleTerminationDate = $nextPossibleTerminationDate;

        return $clone;
    }

    public function withoutNextPossibleTerminationDate(): self
    {
        $clone = clone $this;
        unset($clone->nextPossibleTerminationDate);

        return $clone;
    }

    public function withNextPossibleUpgradeDate(DateTime $nextPossibleUpgradeDate): self
    {
        $clone = clone $this;
        $clone->nextPossibleUpgradeDate = $nextPossibleUpgradeDate;

        return $clone;
    }

    public function withoutNextPossibleUpgradeDate(): self
    {
        $clone = clone $this;
        unset($clone->nextPossibleUpgradeDate);

        return $clone;
    }

    public function withOrderDate(DateTime $orderDate): self
    {
        $clone = clone $this;
        $clone->orderDate = $orderDate;

        return $clone;
    }

    public function withOrderId(string $orderId): self
    {
        $validator = new Validator();
        $validator->validate($orderId, static::$schema['properties']['orderId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->orderId = $orderId;

        return $clone;
    }

    public function withoutOrderId(): self
    {
        $clone = clone $this;
        unset($clone->orderId);

        return $clone;
    }

    public function withReplacedByItem(string $replacedByItem): self
    {
        $validator = new Validator();
        $validator->validate($replacedByItem, static::$schema['properties']['replacedByItem']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->replacedByItem = $replacedByItem;

        return $clone;
    }

    public function withoutReplacedByItem(): self
    {
        $clone = clone $this;
        unset($clone->replacedByItem);

        return $clone;
    }

    public function withTariffChange(TariffChange $tariffChange): self
    {
        $clone = clone $this;
        $clone->tariffChange = $tariffChange;

        return $clone;
    }

    public function withoutTariffChange(): self
    {
        $clone = clone $this;
        unset($clone->tariffChange);

        return $clone;
    }

    public function withTermination(Termination $termination): self
    {
        $clone = clone $this;
        $clone->termination = $termination;

        return $clone;
    }

    public function withoutTermination(): self
    {
        $clone = clone $this;
        unset($clone->termination);

        return $clone;
    }

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
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
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
        $articles = array_map(fn (array|object $i): Article => Article::buildFromInput($i, validate: $validate), $input->{'articles'});
        $contractPeriod = str_contains((string)($input->{'contractPeriod'}), '.') ? (float)($input->{'contractPeriod'}) : (int)($input->{'contractPeriod'});
        $description = $input->{'description'};
        $freeTrialDays = null;
        if (isset($input->{'freeTrialDays'})) {
            $freeTrialDays = str_contains((string)($input->{'freeTrialDays'}), '.') ? (float)($input->{'freeTrialDays'}) : (int)($input->{'freeTrialDays'});
        }
        $groupByProjectId = null;
        if (isset($input->{'groupByProjectId'})) {
            $groupByProjectId = $input->{'groupByProjectId'};
        }
        $invoicingPeriod = null;
        if (isset($input->{'invoicingPeriod'})) {
            $invoicingPeriod = str_contains((string)($input->{'invoicingPeriod'}), '.') ? (float)($input->{'invoicingPeriod'}) : (int)($input->{'invoicingPeriod'});
        }
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

        $obj = new self($articles, $contractPeriod, $description, $isActivated, $isBaseItem, $itemId, $orderDate, $totalPrice);
        $obj->activationDate = $activationDate;
        $obj->aggregateReference = $aggregateReference;
        $obj->freeTrialDays = $freeTrialDays;
        $obj->groupByProjectId = $groupByProjectId;
        $obj->invoicingPeriod = $invoicingPeriod;
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
        if (isset($this->freeTrialDays)) {
            $output['freeTrialDays'] = $this->freeTrialDays;
        }
        if (isset($this->groupByProjectId)) {
            $output['groupByProjectId'] = $this->groupByProjectId;
        }
        if (isset($this->invoicingPeriod)) {
            $output['invoicingPeriod'] = $this->invoicingPeriod;
        }
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
