<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Order;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;

class CustomerOrder
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'contractChangeContractId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'customerId' => [
                'example' => '4317f5c5-1ea8-4084-a9f1-3a8e7e1c94ff',
                'minLength' => 1,
                'type' => 'string',
            ],
            'dueDate' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'invoicingPeriod' => [
                'description' => 'Invoicing period in months',
                'example' => 12,
                'type' => 'number',
            ],
            'items' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.order.OrderItem',
                ],
                'type' => 'array',
            ],
            'orderDate' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'orderId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'orderNumber' => [
                'example' => '5XXXXXX',
                'minLength' => 1,
                'type' => 'string',
            ],
            'profile' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.order.Profile',
            ],
            'status' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.order.OrderStatus',
            ],
            'summary' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.order.OrderSummary',
            ],
            'type' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.order.OrderType',
            ],
        ],
        'required' => [
            'orderId',
            'orderNumber',
            'orderDate',
            'summary',
            'customerId',
            'invoicingPeriod',
            'type',
            'status',
            'items',
        ],
        'type' => 'object',
    ];

    /**
     * @var string|null
     */
    private ?string $contractChangeContractId = null;

    /**
     * @var string
     */
    private string $customerId;

    /**
     * @var DateTime|null
     */
    private ?DateTime $dueDate = null;

    /**
     * Invoicing period in months
     *
     * @var int|float
     */
    private int|float $invoicingPeriod;

    /**
     * @var OrderItem[]
     */
    private array $items;

    /**
     * @var DateTime
     */
    private DateTime $orderDate;

    /**
     * @var string
     */
    private string $orderId;

    /**
     * @var string
     */
    private string $orderNumber;

    /**
     * @var Profile|null
     */
    private ?Profile $profile = null;

    /**
     * @var OrderStatus
     */
    private OrderStatus $status;

    /**
     * @var OrderSummary
     */
    private OrderSummary $summary;

    /**
     * @var OrderType
     */
    private OrderType $type;

    /**
     * @param string $customerId
     * @param int|float $invoicingPeriod
     * @param OrderItem[] $items
     * @param DateTime $orderDate
     * @param string $orderId
     * @param string $orderNumber
     * @param OrderStatus $status
     * @param OrderSummary $summary
     * @param OrderType $type
     */
    public function __construct(string $customerId, int|float $invoicingPeriod, array $items, DateTime $orderDate, string $orderId, string $orderNumber, OrderStatus $status, OrderSummary $summary, OrderType $type)
    {
        $this->customerId = $customerId;
        $this->invoicingPeriod = $invoicingPeriod;
        $this->items = $items;
        $this->orderDate = $orderDate;
        $this->orderId = $orderId;
        $this->orderNumber = $orderNumber;
        $this->status = $status;
        $this->summary = $summary;
        $this->type = $type;
    }

    /**
     * @return string|null
     */
    public function getContractChangeContractId(): ?string
    {
        return $this->contractChangeContractId ?? null;
    }

    /**
     * @return string
     */
    public function getCustomerId(): string
    {
        return $this->customerId;
    }

    /**
     * @return DateTime|null
     */
    public function getDueDate(): ?DateTime
    {
        return $this->dueDate ?? null;
    }

    /**
     * @return int|float
     */
    public function getInvoicingPeriod(): int|float
    {
        return $this->invoicingPeriod;
    }

    /**
     * @return OrderItem[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @return DateTime
     */
    public function getOrderDate(): DateTime
    {
        return $this->orderDate;
    }

    /**
     * @return string
     */
    public function getOrderId(): string
    {
        return $this->orderId;
    }

    /**
     * @return string
     */
    public function getOrderNumber(): string
    {
        return $this->orderNumber;
    }

    /**
     * @return Profile|null
     */
    public function getProfile(): ?Profile
    {
        return $this->profile ?? null;
    }

    /**
     * @return OrderStatus
     */
    public function getStatus(): OrderStatus
    {
        return $this->status;
    }

    /**
     * @return OrderSummary
     */
    public function getSummary(): OrderSummary
    {
        return $this->summary;
    }

    /**
     * @return OrderType
     */
    public function getType(): OrderType
    {
        return $this->type;
    }

    /**
     * @param string $contractChangeContractId
     * @return self
     */
    public function withContractChangeContractId(string $contractChangeContractId): self
    {
        $validator = new Validator();
        $validator->validate($contractChangeContractId, static::$schema['properties']['contractChangeContractId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->contractChangeContractId = $contractChangeContractId;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutContractChangeContractId(): self
    {
        $clone = clone $this;
        unset($clone->contractChangeContractId);

        return $clone;
    }

    /**
     * @param string $customerId
     * @return self
     */
    public function withCustomerId(string $customerId): self
    {
        $validator = new Validator();
        $validator->validate($customerId, static::$schema['properties']['customerId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->customerId = $customerId;

        return $clone;
    }

    /**
     * @param DateTime $dueDate
     * @return self
     */
    public function withDueDate(DateTime $dueDate): self
    {
        $clone = clone $this;
        $clone->dueDate = $dueDate;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutDueDate(): self
    {
        $clone = clone $this;
        unset($clone->dueDate);

        return $clone;
    }

    /**
     * @param int|float $invoicingPeriod
     * @return self
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

    /**
     * @param OrderItem[] $items
     * @return self
     */
    public function withItems(array $items): self
    {
        $clone = clone $this;
        $clone->items = $items;

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
        $validator = new Validator();
        $validator->validate($orderId, static::$schema['properties']['orderId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->orderId = $orderId;

        return $clone;
    }

    /**
     * @param string $orderNumber
     * @return self
     */
    public function withOrderNumber(string $orderNumber): self
    {
        $validator = new Validator();
        $validator->validate($orderNumber, static::$schema['properties']['orderNumber']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->orderNumber = $orderNumber;

        return $clone;
    }

    /**
     * @param Profile $profile
     * @return self
     */
    public function withProfile(Profile $profile): self
    {
        $clone = clone $this;
        $clone->profile = $profile;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutProfile(): self
    {
        $clone = clone $this;
        unset($clone->profile);

        return $clone;
    }

    /**
     * @param OrderStatus $status
     * @return self
     */
    public function withStatus(OrderStatus $status): self
    {
        $clone = clone $this;
        $clone->status = $status;

        return $clone;
    }

    /**
     * @param OrderSummary $summary
     * @return self
     */
    public function withSummary(OrderSummary $summary): self
    {
        $clone = clone $this;
        $clone->summary = $summary;

        return $clone;
    }

    /**
     * @param OrderType $type
     * @return self
     */
    public function withType(OrderType $type): self
    {
        $clone = clone $this;
        $clone->type = $type;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CustomerOrder Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CustomerOrder
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $contractChangeContractId = null;
        if (isset($input->{'contractChangeContractId'})) {
            $contractChangeContractId = $input->{'contractChangeContractId'};
        }
        $customerId = $input->{'customerId'};
        $dueDate = null;
        if (isset($input->{'dueDate'})) {
            $dueDate = new DateTime($input->{'dueDate'});
        }
        $invoicingPeriod = str_contains($input->{'invoicingPeriod'}, '.') ? (float)($input->{'invoicingPeriod'}) : (int)($input->{'invoicingPeriod'});
        $items = array_map(fn (array $i): OrderItem => OrderItem::buildFromInput($i, validate: $validate), $input->{'items'});
        $orderDate = new DateTime($input->{'orderDate'});
        $orderId = $input->{'orderId'};
        $orderNumber = $input->{'orderNumber'};
        $profile = null;
        if (isset($input->{'profile'})) {
            $profile = Profile::buildFromInput($input->{'profile'}, validate: $validate);
        }
        $status = OrderStatus::from($input->{'status'});
        $summary = OrderSummary::buildFromInput($input->{'summary'}, validate: $validate);
        $type = OrderType::from($input->{'type'});

        $obj = new self($customerId, $invoicingPeriod, $items, $orderDate, $orderId, $orderNumber, $status, $summary, $type);
        $obj->contractChangeContractId = $contractChangeContractId;
        $obj->dueDate = $dueDate;
        $obj->profile = $profile;
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
        if (isset($this->contractChangeContractId)) {
            $output['contractChangeContractId'] = $this->contractChangeContractId;
        }
        $output['customerId'] = $this->customerId;
        if (isset($this->dueDate)) {
            $output['dueDate'] = ($this->dueDate)->format(DateTime::ATOM);
        }
        $output['invoicingPeriod'] = $this->invoicingPeriod;
        $output['items'] = array_map(fn (OrderItem $i): array => $i->toJson(), $this->items);
        $output['orderDate'] = ($this->orderDate)->format(DateTime::ATOM);
        $output['orderId'] = $this->orderId;
        $output['orderNumber'] = $this->orderNumber;
        if (isset($this->profile)) {
            $output['profile'] = $this->profile->toJson();
        }
        $output['status'] = $this->status->value;
        $output['summary'] = $this->summary->toJson();
        $output['type'] = $this->type->value;

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
        if (isset($this->dueDate)) {
            $this->dueDate = clone $this->dueDate;
        }
        $this->orderDate = clone $this->orderDate;
    }
}
