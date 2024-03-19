<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderCreateTariffChange;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Order\ProjectHostingTariffChange;
use Mittwald\ApiClient\Generated\V2\Schemas\Order\ServerTariffChange;

class OrderCreateTariffChangeRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
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

    private ProjectHostingTariffChange|ServerTariffChange|null $tariffChangeData = null;

    private ?OrderCreateTariffChangeRequestBodyTariffChangeType $tariffChangeType = null;

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
    public function getTariffChangeData(): ProjectHostingTariffChange|ServerTariffChange|null
    {
        return $this->tariffChangeData;
    }

    public function getTariffChangeType(): ?OrderCreateTariffChangeRequestBodyTariffChangeType
    {
        return $this->tariffChangeType ?? null;
    }

    /**
     * @param ProjectHostingTariffChange|ServerTariffChange $tariffChangeData
     */
    public function withTariffChangeData(ProjectHostingTariffChange|ServerTariffChange $tariffChangeData): self
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

    public function withTariffChangeType(OrderCreateTariffChangeRequestBodyTariffChangeType $tariffChangeType): self
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
     * @return OrderCreateTariffChangeRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): OrderCreateTariffChangeRequestBody
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
            };
        }
        $tariffChangeType = null;
        if (isset($input->{'tariffChangeType'})) {
            $tariffChangeType = OrderCreateTariffChangeRequestBodyTariffChangeType::from($input->{'tariffChangeType'});
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
                ($this->tariffChangeData) instanceof ProjectHostingTariffChange, ($this->tariffChangeData) instanceof ServerTariffChange => $this->tariffChangeData->toJson(),
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
        if (isset($this->tariffChangeData)) {
            $this->tariffChangeData = match (true) {
                ($this->tariffChangeData) instanceof ProjectHostingTariffChange, ($this->tariffChangeData) instanceof ServerTariffChange => $this->tariffChangeData,
            };
        }
    }
}
