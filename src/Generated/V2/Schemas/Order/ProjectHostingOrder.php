<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Order;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.order.ProjectHostingOrder.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class ProjectHostingOrder
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'customerId' => [
                'type' => 'string',
            ],
            'description' => [
                'example' => 'My first project',
                'type' => 'string',
            ],
            'diskspaceInGiB' => [
                'example' => 10,
                'type' => 'number',
            ],
            'promotionCode' => [
                'example' => '123456',
                'type' => 'string',
            ],
            'recommendationCode' => [
                'example' => 'm-123456',
                'type' => 'string',
            ],
            'spec' => [
                'oneOf' => [
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.order.MachineTypeSpec',
                    ],
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.order.HardwareSpec',
                    ],
                ],
            ],
            'useFreeTrial' => [
                'type' => 'boolean',
            ],
        ],
        'required' => [
            'customerId',
            'diskspaceInGiB',
            'description',
            'spec',
        ],
        'type' => 'object',
    ];

    private string $customerId;

    private string $description;

    private int|float $diskspaceInGiB;

    private ?string $promotionCode = null;

    private ?string $recommendationCode = null;

    private MachineTypeSpec|HardwareSpec $spec;

    private ?bool $useFreeTrial = null;

    /**
     * @param int|float $diskspaceInGiB
     * @param MachineTypeSpec|HardwareSpec $spec
     */
    public function __construct(string $customerId, string $description, int|float $diskspaceInGiB, HardwareSpec|MachineTypeSpec $spec)
    {
        $this->customerId = $customerId;
        $this->description = $description;
        $this->diskspaceInGiB = $diskspaceInGiB;
        $this->spec = $spec;
    }

    public function getCustomerId(): string
    {
        return $this->customerId;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getDiskspaceInGiB(): int|float
    {
        return $this->diskspaceInGiB;
    }

    public function getPromotionCode(): ?string
    {
        return $this->promotionCode ?? null;
    }

    public function getRecommendationCode(): ?string
    {
        return $this->recommendationCode ?? null;
    }

    /**
     * @return
     * MachineTypeSpec|HardwareSpec
     */
    public function getSpec(): HardwareSpec|MachineTypeSpec
    {
        return $this->spec;
    }

    public function getUseFreeTrial(): ?bool
    {
        return $this->useFreeTrial ?? null;
    }

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
     * @param int|float $diskspaceInGiB
     */
    public function withDiskspaceInGiB(int|float $diskspaceInGiB): self
    {
        $validator = new Validator();
        $validator->validate($diskspaceInGiB, static::$schema['properties']['diskspaceInGiB']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->diskspaceInGiB = $diskspaceInGiB;

        return $clone;
    }

    public function withPromotionCode(string $promotionCode): self
    {
        $validator = new Validator();
        $validator->validate($promotionCode, static::$schema['properties']['promotionCode']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->promotionCode = $promotionCode;

        return $clone;
    }

    public function withoutPromotionCode(): self
    {
        $clone = clone $this;
        unset($clone->promotionCode);

        return $clone;
    }

    public function withRecommendationCode(string $recommendationCode): self
    {
        $validator = new Validator();
        $validator->validate($recommendationCode, static::$schema['properties']['recommendationCode']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->recommendationCode = $recommendationCode;

        return $clone;
    }

    public function withoutRecommendationCode(): self
    {
        $clone = clone $this;
        unset($clone->recommendationCode);

        return $clone;
    }

    /**
     * @param MachineTypeSpec|HardwareSpec $spec
     */
    public function withSpec(HardwareSpec|MachineTypeSpec $spec): self
    {
        $clone = clone $this;
        $clone->spec = $spec;

        return $clone;
    }

    public function withUseFreeTrial(bool $useFreeTrial): self
    {
        $validator = new Validator();
        $validator->validate($useFreeTrial, static::$schema['properties']['useFreeTrial']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->useFreeTrial = $useFreeTrial;

        return $clone;
    }

    public function withoutUseFreeTrial(): self
    {
        $clone = clone $this;
        unset($clone->useFreeTrial);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ProjectHostingOrder Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ProjectHostingOrder
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $customerId = $input->{'customerId'};
        $description = $input->{'description'};
        $diskspaceInGiB = str_contains((string)($input->{'diskspaceInGiB'}), '.') ? (float)($input->{'diskspaceInGiB'}) : (int)($input->{'diskspaceInGiB'});
        $promotionCode = null;
        if (isset($input->{'promotionCode'})) {
            $promotionCode = $input->{'promotionCode'};
        }
        $recommendationCode = null;
        if (isset($input->{'recommendationCode'})) {
            $recommendationCode = $input->{'recommendationCode'};
        }
        $spec = match (true) {
            MachineTypeSpec::validateInput($input->{'spec'}, true) => MachineTypeSpec::buildFromInput($input->{'spec'}, validate: $validate),
            HardwareSpec::validateInput($input->{'spec'}, true) => HardwareSpec::buildFromInput($input->{'spec'}, validate: $validate),
        };
        $useFreeTrial = null;
        if (isset($input->{'useFreeTrial'})) {
            $useFreeTrial = (bool)($input->{'useFreeTrial'});
        }

        $obj = new self($customerId, $description, $diskspaceInGiB, $spec);
        $obj->promotionCode = $promotionCode;
        $obj->recommendationCode = $recommendationCode;
        $obj->useFreeTrial = $useFreeTrial;
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
        $output['customerId'] = $this->customerId;
        $output['description'] = $this->description;
        $output['diskspaceInGiB'] = $this->diskspaceInGiB;
        if (isset($this->promotionCode)) {
            $output['promotionCode'] = $this->promotionCode;
        }
        if (isset($this->recommendationCode)) {
            $output['recommendationCode'] = $this->recommendationCode;
        }
        $output['spec'] = match (true) {
            ($this->spec) instanceof MachineTypeSpec, ($this->spec) instanceof HardwareSpec => $this->spec->toJson(),
        };
        if (isset($this->useFreeTrial)) {
            $output['useFreeTrial'] = $this->useFreeTrial;
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
        $this->spec = match (true) {
            ($this->spec) instanceof MachineTypeSpec, ($this->spec) instanceof HardwareSpec => $this->spec,
        };
    }
}
