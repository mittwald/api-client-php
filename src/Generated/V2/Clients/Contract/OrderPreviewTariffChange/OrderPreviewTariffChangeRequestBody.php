<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderPreviewTariffChange;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Order\LeadFyndrTariffChange;
use Mittwald\ApiClient\Generated\V2\Schemas\Order\ProjectHostingTariffChange;
use Mittwald\ApiClient\Generated\V2\Schemas\Order\ServerTariffChange;

class OrderPreviewTariffChangeRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'tariffChangeData' => [
                'oneOf' => [
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.order.ProjectHostingTariffChange',
                    ],
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.order.ServerTariffChange',
                    ],
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.order.LeadFyndrTariffChange',
                    ],
                ],
            ],
            'tariffChangeType' => [
                'enum' => [
                    'projectHosting',
                    'server',
                    'leadFyndr',
                ],
                'type' => 'string',
            ],
        ],
        'type' => 'object',
    ];

    private ProjectHostingTariffChange|ServerTariffChange|LeadFyndrTariffChange|null $tariffChangeData = null;

    private ?OrderPreviewTariffChangeRequestBodyTariffChangeType $tariffChangeType = null;

    /**
     *
     */
    public function __construct()
    {
    }

    public function getTariffChangeData(): LeadFyndrTariffChange|ProjectHostingTariffChange|ServerTariffChange|null
    {
        return $this->tariffChangeData;
    }

    public function getTariffChangeType(): ?OrderPreviewTariffChangeRequestBodyTariffChangeType
    {
        return $this->tariffChangeType ?? null;
    }

    public function withTariffChangeData(LeadFyndrTariffChange|ProjectHostingTariffChange|ServerTariffChange $tariffChangeData): self
    {
        $clone = clone $this;
        $clone->tariffChangeData = $tariffChangeData;

        return $clone;
    }

    public function withoutTariffChangeData(): self
    {
        $clone = clone $this;
        unset($clone->tariffChangeData);

        return $clone;
    }

    public function withTariffChangeType(OrderPreviewTariffChangeRequestBodyTariffChangeType $tariffChangeType): self
    {
        $clone = clone $this;
        $clone->tariffChangeType = $tariffChangeType;

        return $clone;
    }

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
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $tariffChangeData = null;
        if (isset($input->{'tariffChangeData'})) {
            $tariffChangeData = match (true) {
                ProjectHostingTariffChange::validateInput($input->{'tariffChangeData'}, true) => ProjectHostingTariffChange::buildFromInput($input->{'tariffChangeData'}, validate: $validate),
                ServerTariffChange::validateInput($input->{'tariffChangeData'}, true) => ServerTariffChange::buildFromInput($input->{'tariffChangeData'}, validate: $validate),
                LeadFyndrTariffChange::validateInput($input->{'tariffChangeData'}, true) => LeadFyndrTariffChange::buildFromInput($input->{'tariffChangeData'}, validate: $validate),
                default => throw new InvalidArgumentException("could not build property 'tariffChangeData' from JSON"),
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
                ($this->tariffChangeData) instanceof ProjectHostingTariffChange, ($this->tariffChangeData) instanceof ServerTariffChange, ($this->tariffChangeData) instanceof LeadFyndrTariffChange => $this->tariffChangeData->toJson(),
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
        if (isset($this->tariffChangeData)) {
            $this->tariffChangeData = match (true) {
                ($this->tariffChangeData) instanceof ProjectHostingTariffChange, ($this->tariffChangeData) instanceof ServerTariffChange, ($this->tariffChangeData) instanceof LeadFyndrTariffChange => $this->tariffChangeData,
            };
        }
    }
}
