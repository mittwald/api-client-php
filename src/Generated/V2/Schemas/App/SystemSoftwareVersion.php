<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\App;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Fee\OneTimePaymentFeeStrategy;
use Mittwald\ApiClient\Generated\V2\Schemas\Fee\PeriodBasedFeeStrategy;

/**
 * A SystemSoftwareVersion is an officially  supported version of a SystemSoftware,
 * containing the necessary and recommended configuration und dependencies.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class SystemSoftwareVersion
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'description' => 'A SystemSoftwareVersion is an officially  supported version of a SystemSoftware, containing the necessary and recommended configuration und dependencies.',
        'properties' => [
            'expiryDate' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'externalVersion' => [
                'type' => 'string',
            ],
            'fee' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.fee.FeeStrategy',
            ],
            'id' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'internalVersion' => [
                'type' => 'string',
            ],
            'recommended' => [
                'type' => 'boolean',
            ],
            'systemSoftwareDependencies' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.app.SystemSoftwareDependency',
                ],
                'type' => 'array',
            ],
            'userInputs' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.app.UserInput',
                ],
                'type' => 'array',
            ],
        ],
        'required' => [
            'id',
            'internalVersion',
            'externalVersion',
        ],
        'type' => 'object',
    ];

    private ?DateTime $expiryDate = null;

    private string $externalVersion;

    private OneTimePaymentFeeStrategy|PeriodBasedFeeStrategy|null $fee = null;

    private string $id;

    private string $internalVersion;

    private ?bool $recommended = null;

    /**
     * @var SystemSoftwareDependency[]|null
     */
    private ?array $systemSoftwareDependencies = null;

    /**
     * @var UserInput[]|null
     */
    private ?array $userInputs = null;

    public function __construct(string $externalVersion, string $id, string $internalVersion)
    {
        $this->externalVersion = $externalVersion;
        $this->id = $id;
        $this->internalVersion = $internalVersion;
    }

    public function getExpiryDate(): ?DateTime
    {
        return $this->expiryDate ?? null;
    }

    public function getExternalVersion(): string
    {
        return $this->externalVersion;
    }

    public function getFee(): OneTimePaymentFeeStrategy|PeriodBasedFeeStrategy|null
    {
        return $this->fee;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getInternalVersion(): string
    {
        return $this->internalVersion;
    }

    public function getRecommended(): ?bool
    {
        return $this->recommended ?? null;
    }

    /**
     * @return SystemSoftwareDependency[]|null
     */
    public function getSystemSoftwareDependencies(): ?array
    {
        return $this->systemSoftwareDependencies ?? null;
    }

    /**
     * @return UserInput[]|null
     */
    public function getUserInputs(): ?array
    {
        return $this->userInputs ?? null;
    }

    public function withExpiryDate(DateTime $expiryDate): self
    {
        $clone = clone $this;
        $clone->expiryDate = $expiryDate;

        return $clone;
    }

    public function withoutExpiryDate(): self
    {
        $clone = clone $this;
        unset($clone->expiryDate);

        return $clone;
    }

    public function withExternalVersion(string $externalVersion): self
    {
        $validator = new Validator();
        $validator->validate($externalVersion, self::$schema['properties']['externalVersion']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->externalVersion = $externalVersion;

        return $clone;
    }

    /**
     * @param OneTimePaymentFeeStrategy|PeriodBasedFeeStrategy $fee
     */
    public function withFee(OneTimePaymentFeeStrategy|PeriodBasedFeeStrategy $fee): self
    {
        $clone = clone $this;
        $clone->fee = $fee;

        return $clone;
    }

    public function withoutFee(): self
    {
        $clone = clone $this;
        unset($clone->fee);

        return $clone;
    }

    public function withId(string $id): self
    {
        $validator = new Validator();
        $validator->validate($id, self::$schema['properties']['id']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->id = $id;

        return $clone;
    }

    public function withInternalVersion(string $internalVersion): self
    {
        $validator = new Validator();
        $validator->validate($internalVersion, self::$schema['properties']['internalVersion']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->internalVersion = $internalVersion;

        return $clone;
    }

    public function withRecommended(bool $recommended): self
    {
        $validator = new Validator();
        $validator->validate($recommended, self::$schema['properties']['recommended']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->recommended = $recommended;

        return $clone;
    }

    public function withoutRecommended(): self
    {
        $clone = clone $this;
        unset($clone->recommended);

        return $clone;
    }

    /**
     * @param SystemSoftwareDependency[] $systemSoftwareDependencies
     */
    public function withSystemSoftwareDependencies(array $systemSoftwareDependencies): self
    {
        $clone = clone $this;
        $clone->systemSoftwareDependencies = $systemSoftwareDependencies;

        return $clone;
    }

    public function withoutSystemSoftwareDependencies(): self
    {
        $clone = clone $this;
        unset($clone->systemSoftwareDependencies);

        return $clone;
    }

    /**
     * @param UserInput[] $userInputs
     */
    public function withUserInputs(array $userInputs): self
    {
        $clone = clone $this;
        $clone->userInputs = $userInputs;

        return $clone;
    }

    public function withoutUserInputs(): self
    {
        $clone = clone $this;
        unset($clone->userInputs);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return SystemSoftwareVersion Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): SystemSoftwareVersion
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $expiryDate = null;
        if (isset($input->{'expiryDate'})) {
            $expiryDate = new DateTime($input->{'expiryDate'});
        }
        $externalVersion = $input->{'externalVersion'};
        $fee = null;
        if (isset($input->{'fee'})) {
            $fee = match (true) {
                default => throw new InvalidArgumentException("input cannot be mapped to any valid type"),
                OneTimePaymentFeeStrategy::validateInput($input->{'fee'}, true) => OneTimePaymentFeeStrategy::buildFromInput($input->{'fee'}, validate: $validate),
                PeriodBasedFeeStrategy::validateInput($input->{'fee'}, true) => PeriodBasedFeeStrategy::buildFromInput($input->{'fee'}, validate: $validate),
            };
        }
        $id = $input->{'id'};
        $internalVersion = $input->{'internalVersion'};
        $recommended = null;
        if (isset($input->{'recommended'})) {
            $recommended = (bool)($input->{'recommended'});
        }
        $systemSoftwareDependencies = null;
        if (isset($input->{'systemSoftwareDependencies'})) {
            $systemSoftwareDependencies = array_map(fn (array|object $i): SystemSoftwareDependency => SystemSoftwareDependency::buildFromInput($i, validate: $validate), $input->{'systemSoftwareDependencies'});
        }
        $userInputs = null;
        if (isset($input->{'userInputs'})) {
            $userInputs = array_map(fn (array|object $i): UserInput => UserInput::buildFromInput($i, validate: $validate), $input->{'userInputs'});
        }

        $obj = new self($externalVersion, $id, $internalVersion);
        $obj->expiryDate = $expiryDate;
        $obj->fee = $fee;
        $obj->recommended = $recommended;
        $obj->systemSoftwareDependencies = $systemSoftwareDependencies;
        $obj->userInputs = $userInputs;
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
        if (isset($this->expiryDate)) {
            $output['expiryDate'] = ($this->expiryDate)->format(DateTime::ATOM);
        }
        $output['externalVersion'] = $this->externalVersion;
        if (isset($this->fee)) {
            $output['fee'] = match (true) {
                default => throw new InvalidArgumentException("input cannot be mapped to any valid type"),
                ($this->fee) instanceof OneTimePaymentFeeStrategy, ($this->fee) instanceof PeriodBasedFeeStrategy => $this->fee->toJson(),
            };
        }
        $output['id'] = $this->id;
        $output['internalVersion'] = $this->internalVersion;
        if (isset($this->recommended)) {
            $output['recommended'] = $this->recommended;
        }
        if (isset($this->systemSoftwareDependencies)) {
            $output['systemSoftwareDependencies'] = array_map(fn (SystemSoftwareDependency $i): array => $i->toJson(), $this->systemSoftwareDependencies);
        }
        if (isset($this->userInputs)) {
            $output['userInputs'] = array_map(fn (UserInput $i): array => $i->toJson(), $this->userInputs);
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
        if (isset($this->expiryDate)) {
            $this->expiryDate = clone $this->expiryDate;
        }
    }
}
