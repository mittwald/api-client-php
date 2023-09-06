<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderCreateOrder;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Order\DomainOrder;
use Mittwald\ApiClient\Generated\V2\Schemas\Order\ProjectHostingOrder;
use Mittwald\ApiClient\Generated\V2\Schemas\Order\ServerOrder;

class OrderCreateOrderRequestBody
{
    public const method = 'post';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'orderData' => [
                'oneOf' => [
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.order.ProjectHostingOrder',
                    ],
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.order.ServerOrder',
                    ],
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.order.DomainOrder',
                    ],
                ],
            ],
            'orderType' => [
                'enum' => [
                    'domain',
                    'projectHosting',
                    'server',
                ],
                'type' => 'string',
            ],
        ],
        'type' => 'object',
    ];

    /**
     * @var ProjectHostingOrder|ServerOrder|DomainOrder|null
     */
    private ProjectHostingOrder|ServerOrder|DomainOrder|null $orderData = null;

    /**
     * @var OrderCreateOrderRequestBodyOrderType|null
     */
    private ?OrderCreateOrderRequestBodyOrderType $orderType = null;

    private array $headers = [

    ];

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return
     * \Mittwald\ApiClient\Generated\V2\Schemas\Order\ProjectHostingOrder|\Mittwald\ApiClient\Generated\V2\Schemas\Order\ServerOrder|\Mittwald\ApiClient\Generated\V2\Schemas\Order\DomainOrder|null
     */
    public function getOrderData(): DomainOrder|ProjectHostingOrder|ServerOrder|null
    {
        return $this->orderData;
    }

    /**
     * @return OrderCreateOrderRequestBodyOrderType|null
     */
    public function getOrderType(): ?OrderCreateOrderRequestBodyOrderType
    {
        return $this->orderType ?? null;
    }

    /**
     * @param ProjectHostingOrder|ServerOrder|DomainOrder $orderData
     * @return self
     */
    public function withOrderData(DomainOrder|ProjectHostingOrder|ServerOrder $orderData): self
    {
        $clone = clone $this;
        $clone->orderData = $orderData;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutOrderData(): self
    {
        $clone = clone $this;
        unset($clone->orderData);

        return $clone;
    }

    /**
     * @param OrderCreateOrderRequestBodyOrderType $orderType
     * @return self
     */
    public function withOrderType(OrderCreateOrderRequestBodyOrderType $orderType): self
    {
        $clone = clone $this;
        $clone->orderType = $orderType;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutOrderType(): self
    {
        $clone = clone $this;
        unset($clone->orderType);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return OrderCreateOrderRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): OrderCreateOrderRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $orderData = null;
        if (isset($input->{'orderData'})) {
            $orderData = match (true) {
                ProjectHostingOrder::validateInput($input->{'orderData'}, true) => ProjectHostingOrder::buildFromInput($input->{'orderData'}, validate: $validate),
                ServerOrder::validateInput($input->{'orderData'}, true) => ServerOrder::buildFromInput($input->{'orderData'}, validate: $validate),
                DomainOrder::validateInput($input->{'orderData'}, true) => DomainOrder::buildFromInput($input->{'orderData'}, validate: $validate),
            };
        }
        $orderType = null;
        if (isset($input->{'orderType'})) {
            $orderType = OrderCreateOrderRequestBodyOrderType::from($input->{'orderType'});
        }

        $obj = new self();
        $obj->orderData = $orderData;
        $obj->orderType = $orderType;
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
        if (isset($this->orderData)) {
            $output['orderData'] = match (true) {
                ($this->orderData) instanceof ProjectHostingOrder, ($this->orderData) instanceof ServerOrder, ($this->orderData) instanceof DomainOrder => $this->orderData->toJson(),
            };
        }
        if (isset($this->orderType)) {
            $output['orderType'] = ($this->orderType)->value;
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
        if (isset($this->orderData)) {
            $this->orderData = match (true) {
                ($this->orderData) instanceof ProjectHostingOrder, ($this->orderData) instanceof ServerOrder, ($this->orderData) instanceof DomainOrder => $this->orderData,
            };
        }
    }

    public function getUrl(): string
    {
        $mapped = $this->toJson();
        return '/v2/orders';
    }

    public function getQuery(): array
    {
        $mapped = $this->toJson();
        $query = [];
        return $query;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function withHeader(string $name, string|array $value): self
    {
        $clone = clone $this;
        $clone->headers[$name] = $value;
        return $clone;
    }
}
