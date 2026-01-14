<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderCreateOrder;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Order\AIHostingOrder;
use Mittwald\ApiClient\Generated\V2\Schemas\Order\DomainOrder;
use Mittwald\ApiClient\Generated\V2\Schemas\Order\ExternalCertificateOrder;
use Mittwald\ApiClient\Generated\V2\Schemas\Order\LeadFyndrOrder;
use Mittwald\ApiClient\Generated\V2\Schemas\Order\MailArchiveOrder;
use Mittwald\ApiClient\Generated\V2\Schemas\Order\ProjectHostingOrder;
use Mittwald\ApiClient\Generated\V2\Schemas\Order\ServerOrder;

class OrderCreateOrderRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
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
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.order.ExternalCertificateOrder',
                    ],
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.order.LeadFyndrOrder',
                    ],
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.order.MailArchiveOrder',
                    ],
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.order.AIHostingOrder',
                    ],
                ],
            ],
            'orderType' => [
                'enum' => [
                    'domain',
                    'projectHosting',
                    'server',
                    'externalCertificate',
                    'leadFyndr',
                    'mailArchive',
                    'aiHosting',
                ],
                'example' => 'projectHosting',
                'type' => 'string',
            ],
        ],
        'type' => 'object',
    ];

    private ProjectHostingOrder|ServerOrder|DomainOrder|ExternalCertificateOrder|LeadFyndrOrder|MailArchiveOrder|AIHostingOrder|null $orderData = null;

    private ?OrderCreateOrderRequestBodyOrderType $orderType = null;

    /**
     *
     */
    public function __construct()
    {
    }

    public function getOrderData(): AIHostingOrder|DomainOrder|ExternalCertificateOrder|LeadFyndrOrder|MailArchiveOrder|ProjectHostingOrder|ServerOrder|null
    {
        return $this->orderData;
    }

    public function getOrderType(): ?OrderCreateOrderRequestBodyOrderType
    {
        return $this->orderType ?? null;
    }

    public function withOrderData(AIHostingOrder|DomainOrder|ExternalCertificateOrder|LeadFyndrOrder|MailArchiveOrder|ProjectHostingOrder|ServerOrder $orderData): self
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

    public function withOrderType(OrderCreateOrderRequestBodyOrderType $orderType): self
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
                ExternalCertificateOrder::validateInput($input->{'orderData'}, true) => ExternalCertificateOrder::buildFromInput($input->{'orderData'}, validate: $validate),
                LeadFyndrOrder::validateInput($input->{'orderData'}, true) => LeadFyndrOrder::buildFromInput($input->{'orderData'}, validate: $validate),
                MailArchiveOrder::validateInput($input->{'orderData'}, true) => MailArchiveOrder::buildFromInput($input->{'orderData'}, validate: $validate),
                AIHostingOrder::validateInput($input->{'orderData'}, true) => AIHostingOrder::buildFromInput($input->{'orderData'}, validate: $validate),
                default => throw new InvalidArgumentException("could not build property 'orderData' from JSON"),
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
                ($this->orderData) instanceof ProjectHostingOrder, ($this->orderData) instanceof ServerOrder, ($this->orderData) instanceof DomainOrder, ($this->orderData) instanceof ExternalCertificateOrder, ($this->orderData) instanceof LeadFyndrOrder, ($this->orderData) instanceof MailArchiveOrder, ($this->orderData) instanceof AIHostingOrder => $this->orderData->toJson(),
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
        $validator->validate($input, self::$internalValidationSchema);

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
                ($this->orderData) instanceof ProjectHostingOrder, ($this->orderData) instanceof ServerOrder, ($this->orderData) instanceof DomainOrder, ($this->orderData) instanceof ExternalCertificateOrder, ($this->orderData) instanceof LeadFyndrOrder, ($this->orderData) instanceof MailArchiveOrder, ($this->orderData) instanceof AIHostingOrder => $this->orderData,
            };
        }
    }
}
