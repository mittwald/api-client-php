<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionScheduleExtensionVariantChange;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;

class ExtensionScheduleExtensionVariantChangeCreatedResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'effectiveDate' => [
                'description' => 'The Date the variant change will be executed.',
                'format' => 'date-time',
                'type' => 'string',
            ],
            'extensionInstanceId' => [
                'description' => 'The ID of the Extension Instance the variant change was scheduled for.',
                'format' => 'uuid',
                'type' => 'string',
            ],
        ],
    ];

    /**
     * The Date the variant change will be executed.
     */
    private ?DateTime $effectiveDate = null;

    /**
     * The ID of the Extension Instance the variant change was scheduled for.
     */
    private ?string $extensionInstanceId = null;

    /**
     *
     */
    public function __construct()
    {
    }

    public function getEffectiveDate(): ?DateTime
    {
        return $this->effectiveDate ?? null;
    }

    public function getExtensionInstanceId(): ?string
    {
        return $this->extensionInstanceId ?? null;
    }

    public function withEffectiveDate(DateTime $effectiveDate): self
    {
        $clone = clone $this;
        $clone->effectiveDate = $effectiveDate;

        return $clone;
    }

    public function withoutEffectiveDate(): self
    {
        $clone = clone $this;
        unset($clone->effectiveDate);

        return $clone;
    }

    public function withExtensionInstanceId(string $extensionInstanceId): self
    {
        $validator = new Validator();
        $validator->validate($extensionInstanceId, self::$internalValidationSchema['properties']['extensionInstanceId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->extensionInstanceId = $extensionInstanceId;

        return $clone;
    }

    public function withoutExtensionInstanceId(): self
    {
        $clone = clone $this;
        unset($clone->extensionInstanceId);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ExtensionScheduleExtensionVariantChangeCreatedResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ExtensionScheduleExtensionVariantChangeCreatedResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $effectiveDate = null;
        if (isset($input->{'effectiveDate'})) {
            $effectiveDate = new DateTime($input->{'effectiveDate'});
        }
        $extensionInstanceId = null;
        if (isset($input->{'extensionInstanceId'})) {
            $extensionInstanceId = $input->{'extensionInstanceId'};
        }

        $obj = new self();
        $obj->effectiveDate = $effectiveDate;
        $obj->extensionInstanceId = $extensionInstanceId;
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
        if (isset($this->effectiveDate)) {
            $output['effectiveDate'] = ($this->effectiveDate)->format(DateTime::ATOM);
        }
        if (isset($this->extensionInstanceId)) {
            $output['extensionInstanceId'] = $this->extensionInstanceId;
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
        if (isset($this->effectiveDate)) {
            $this->effectiveDate = clone $this->effectiveDate;
        }
    }
}
