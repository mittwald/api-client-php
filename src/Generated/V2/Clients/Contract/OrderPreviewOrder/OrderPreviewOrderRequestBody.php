<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderPreviewOrder;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Order\DomainOrderPreview;
use Mittwald\ApiClient\Generated\V2\Schemas\Order\ProjectHostingOrderPreview;
use Mittwald\ApiClient\Generated\V2\Schemas\Order\ServerOrderPreview;

class OrderPreviewOrderRequestBody
{
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
                        '$ref' => '#/components/schemas/de.mittwald.v1.order.ProjectHostingOrderPreview',
                    ],
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.order.ServerOrderPreview',
                    ],
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.order.DomainOrderPreview',
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
     * @var ProjectHostingOrderPreview|ServerOrderPreview|DomainOrderPreview|null
     */
    private ProjectHostingOrderPreview|ServerOrderPreview|DomainOrderPreview|null $orderData = null;

    /**
     * @var OrderPreviewOrderRequestBodyOrderType|null
     */
    private ?OrderPreviewOrderRequestBodyOrderType $orderType = null;

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return
     * \Mittwald\ApiClient\Generated\V2\Schemas\Order\ProjectHostingOrderPreview|\Mittwald\ApiClient\Generated\V2\Schemas\Order\ServerOrderPreview|\Mittwald\ApiClient\Generated\V2\Schemas\Order\DomainOrderPreview|null
     */
    public function getOrderData(): DomainOrderPreview|ProjectHostingOrderPreview|ServerOrderPreview|null
    {
        return $this->orderData;
    }

    /**
     * @return OrderPreviewOrderRequestBodyOrderType|null
     */
    public function getOrderType(): ?OrderPreviewOrderRequestBodyOrderType
    {
        return $this->orderType ?? null;
    }

    /**
     * @param ProjectHostingOrderPreview|ServerOrderPreview|DomainOrderPreview $orderData
     * @return self
     */
    public function withOrderData(DomainOrderPreview|ProjectHostingOrderPreview|ServerOrderPreview $orderData): self
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
     * @param OrderPreviewOrderRequestBodyOrderType $orderType
     * @return self
     */
    public function withOrderType(OrderPreviewOrderRequestBodyOrderType $orderType): self
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
     * @return OrderPreviewOrderRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): OrderPreviewOrderRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $orderData = null;
        if (isset($input->{'orderData'})) {
            $orderData = match (true) {
                ProjectHostingOrderPreview::validateInput($input->{'orderData'}, true) => ProjectHostingOrderPreview::buildFromInput($input->{'orderData'}, validate: $validate),
                ServerOrderPreview::validateInput($input->{'orderData'}, true) => ServerOrderPreview::buildFromInput($input->{'orderData'}, validate: $validate),
                DomainOrderPreview::validateInput($input->{'orderData'}, true) => DomainOrderPreview::buildFromInput($input->{'orderData'}, validate: $validate),
            };
        }
        $orderType = null;
        if (isset($input->{'orderType'})) {
            $orderType = OrderPreviewOrderRequestBodyOrderType::from($input->{'orderType'});
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
                ($this->orderData) instanceof ProjectHostingOrderPreview, ($this->orderData) instanceof ServerOrderPreview, ($this->orderData) instanceof DomainOrderPreview => $this->orderData->toJson(),
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
                ($this->orderData) instanceof ProjectHostingOrderPreview, ($this->orderData) instanceof ServerOrderPreview, ($this->orderData) instanceof DomainOrderPreview => $this->orderData,
            };
        }
    }
}
