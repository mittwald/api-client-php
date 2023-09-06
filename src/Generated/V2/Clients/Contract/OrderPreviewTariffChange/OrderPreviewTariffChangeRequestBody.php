<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderPreviewTariffChange;

use InvalidArgumentException;

class OrderPreviewTariffChangeRequestBody
{
    public const method = 'post';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'tariffChangeData' => [
                'oneOf' => [
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.order.ProjectHostingTariffChange',
                    ],
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.order.ServerTariffChange',
                    ],
                ],
            ],
            'tariffChangeType' => [
                'enum' => [
                    'projectHosting',
                    'server',
                ],
                'type' => 'string',
            ],
        ],
        'type' => 'object',
    ];

    /**
     * @var \Mittwald\ApiClient\Generated\V2\Schemas\Order\ProjectHostingTariffChange|\Mittwald\ApiClient\Generated\V2\Schemas\Order\ServerTariffChange|null
     */
    private \Mittwald\ApiClient\Generated\V2\Schemas\Order\ProjectHostingTariffChange|\Mittwald\ApiClient\Generated\V2\Schemas\Order\ServerTariffChange|null $tariffChangeData = null;

    /**
     * @var OrderPreviewTariffChangeRequestBodyTariffChangeType|null
     */
    private ?OrderPreviewTariffChangeRequestBodyTariffChangeType $tariffChangeType = null;

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
     * \Mittwald\ApiClient\Generated\V2\Schemas\Order\ProjectHostingTariffChange|\Mittwald\ApiClient\Generated\V2\Schemas\Order\ServerTariffChange|null
     */
    public function getTariffChangeData(): \Mittwald\ApiClient\Generated\V2\Schemas\Order\ProjectHostingTariffChange|\Mittwald\ApiClient\Generated\V2\Schemas\Order\ServerTariffChange|null
    {
        return $this->tariffChangeData;
    }

    /**
     * @return OrderPreviewTariffChangeRequestBodyTariffChangeType|null
     */
    public function getTariffChangeType(): ?OrderPreviewTariffChangeRequestBodyTariffChangeType
    {
        return $this->tariffChangeType ?? null;
    }

    /**
     * @param \Mittwald\ApiClient\Generated\V2\Schemas\Order\ProjectHostingTariffChange|\Mittwald\ApiClient\Generated\V2\Schemas\Order\ServerTariffChange $tariffChangeData
     * @return self
     */
    public function withTariffChangeData(\Mittwald\ApiClient\Generated\V2\Schemas\Order\ProjectHostingTariffChange|\Mittwald\ApiClient\Generated\V2\Schemas\Order\ServerTariffChange $tariffChangeData): self
    {
        $clone = clone $this;
        $clone->tariffChangeData = $tariffChangeData;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutTariffChangeData(): self
    {
        $clone = clone $this;
        unset($clone->tariffChangeData);

        return $clone;
    }

    /**
     * @param OrderPreviewTariffChangeRequestBodyTariffChangeType $tariffChangeType
     * @return self
     */
    public function withTariffChangeType(OrderPreviewTariffChangeRequestBodyTariffChangeType $tariffChangeType): self
    {
        $clone = clone $this;
        $clone->tariffChangeType = $tariffChangeType;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutTariffChangeType(): self
    {
        $clone = clone $this;
        unset($clone->tariffChangeType);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return OrderPreviewTariffChangeRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): OrderPreviewTariffChangeRequestBody
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $tariffChangeData = null;
        if (isset($input->{'tariffChangeData'})) {
            $tariffChangeData = match (true) {
                \Mittwald\ApiClient\Generated\V2\Schemas\Order\ProjectHostingTariffChange::validateInput($input->{'tariffChangeData'}, true) => \Mittwald\ApiClient\Generated\V2\Schemas\Order\ProjectHostingTariffChange::buildFromInput($input->{'tariffChangeData'}, validate: $validate),
                \Mittwald\ApiClient\Generated\V2\Schemas\Order\ServerTariffChange::validateInput($input->{'tariffChangeData'}, true) => \Mittwald\ApiClient\Generated\V2\Schemas\Order\ServerTariffChange::buildFromInput($input->{'tariffChangeData'}, validate: $validate),
            };
        }
        $tariffChangeType = null;
        if (isset($input->{'tariffChangeType'})) {
            $tariffChangeType = OrderPreviewTariffChangeRequestBodyTariffChangeType::from($input->{'tariffChangeType'});
        }

        $obj = new self();
        $obj->tariffChangeData = $tariffChangeData;
        $obj->tariffChangeType = $tariffChangeType;
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
        if (isset($this->tariffChangeData)) {
            $output['tariffChangeData'] = match (true) {
                ($this->tariffChangeData) instanceof \Mittwald\ApiClient\Generated\V2\Schemas\Order\ProjectHostingTariffChange, ($this->tariffChangeData) instanceof \Mittwald\ApiClient\Generated\V2\Schemas\Order\ServerTariffChange => $this->tariffChangeData->toJson(),
            };
        }
        if (isset($this->tariffChangeType)) {
            $output['tariffChangeType'] = ($this->tariffChangeType)->value;
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
        if (isset($this->tariffChangeData)) {
            $this->tariffChangeData = match (true) {
                ($this->tariffChangeData) instanceof \Mittwald\ApiClient\Generated\V2\Schemas\Order\ProjectHostingTariffChange, ($this->tariffChangeData) instanceof \Mittwald\ApiClient\Generated\V2\Schemas\Order\ServerTariffChange => $this->tariffChangeData,
            };
        }
    }

    public function getUrl(): string
    {
        $mapped = $this->toJson();
        return '/v2/tariff-change-previews';
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
