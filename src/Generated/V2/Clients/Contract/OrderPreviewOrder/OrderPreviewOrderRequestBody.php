<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderPreviewOrder;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Order\DomainOrderPreview;
use Mittwald\ApiClient\Generated\V2\Schemas\Order\ExternalCertificateOrderPreview;
use Mittwald\ApiClient\Generated\V2\Schemas\Order\ProjectHostingOrderPreview;
use Mittwald\ApiClient\Generated\V2\Schemas\Order\ServerOrderPreview;

class OrderPreviewOrderRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
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
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.order.ExternalCertificateOrderPreview',
                    ],
                ],
            ],
            'orderType' => [
                'enum' => [
                    'domain',
                    'projectHosting',
                    'server',
                    'externalCertificate',
                ],
                'type' => 'string',
            ],
        ],
        'type' => 'object',
    ];

    private ProjectHostingOrderPreview|ServerOrderPreview|DomainOrderPreview|ExternalCertificateOrderPreview|null $orderData = null;

    private ?OrderPreviewOrderRequestBodyOrderType $orderType = null;

    /**
     *
     */
    public function __construct()
    {
    }

    public function getOrderData(): DomainOrderPreview|ExternalCertificateOrderPreview|ProjectHostingOrderPreview|ServerOrderPreview|null
    {
        return $this->orderData;
    }

    public function getOrderType(): ?OrderPreviewOrderRequestBodyOrderType
    {
        return $this->orderType ?? null;
    }

    public function withOrderData(DomainOrderPreview|ExternalCertificateOrderPreview|ProjectHostingOrderPreview|ServerOrderPreview $orderData): self
    {
        $clone = clone $this;
        $clone->orderData = $orderData;

        return $clone;
    }

    public function withoutOrderData(): self
    {
        $clone = clone $this;
        unset($clone->orderData);

        return $clone;
    }

    public function withOrderType(OrderPreviewOrderRequestBodyOrderType $orderType): self
    {
        $clone = clone $this;
        $clone->orderType = $orderType;

        return $clone;
    }

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
                ExternalCertificateOrderPreview::validateInput($input->{'orderData'}, true) => ExternalCertificateOrderPreview::buildFromInput($input->{'orderData'}, validate: $validate),
                default => throw new InvalidArgumentException("could not build property 'orderData' from JSON"),
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
                ($this->orderData) instanceof ProjectHostingOrderPreview, ($this->orderData) instanceof ServerOrderPreview, ($this->orderData) instanceof DomainOrderPreview, ($this->orderData) instanceof ExternalCertificateOrderPreview => $this->orderData->toJson(),
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
        $validator = new \Mittwald\ApiClient\Validator\Validator();
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        $validator->validate($input, self::$schema);

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
                ($this->orderData) instanceof ProjectHostingOrderPreview, ($this->orderData) instanceof ServerOrderPreview, ($this->orderData) instanceof DomainOrderPreview, ($this->orderData) instanceof ExternalCertificateOrderPreview => $this->orderData,
            };
        }
    }
}
