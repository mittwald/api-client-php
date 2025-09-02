<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainGetHandleFields;

use InvalidArgumentException;
use JsonSchema\Validator;

class DeprecatedDomainGetHandleFieldsOKResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'jsonSchemaAdminC' => [
                'type' => 'object',
            ],
            'jsonSchemaOwnerC' => [
                'type' => 'object',
            ],
        ],
        'required' => [
            'jsonSchemaOwnerC',
        ],
        'type' => 'object',
    ];

    private ?DeprecatedDomainGetHandleFieldsOKResponseBodyJsonSchemaAdminC $jsonSchemaAdminC = null;

    private DeprecatedDomainGetHandleFieldsOKResponseBodyJsonSchemaOwnerC $jsonSchemaOwnerC;

    public function __construct(DeprecatedDomainGetHandleFieldsOKResponseBodyJsonSchemaOwnerC $jsonSchemaOwnerC)
    {
        $this->jsonSchemaOwnerC = $jsonSchemaOwnerC;
    }

    public function getJsonSchemaAdminC(): ?DeprecatedDomainGetHandleFieldsOKResponseBodyJsonSchemaAdminC
    {
        return $this->jsonSchemaAdminC ?? null;
    }

    public function getJsonSchemaOwnerC(): DeprecatedDomainGetHandleFieldsOKResponseBodyJsonSchemaOwnerC
    {
        return $this->jsonSchemaOwnerC;
    }

    public function withJsonSchemaAdminC(DeprecatedDomainGetHandleFieldsOKResponseBodyJsonSchemaAdminC $jsonSchemaAdminC): self
    {
        $clone = clone $this;
        $clone->jsonSchemaAdminC = $jsonSchemaAdminC;

        return $clone;
    }

    public function withoutJsonSchemaAdminC(): self
    {
        $clone = clone $this;
        unset($clone->jsonSchemaAdminC);

        return $clone;
    }

    public function withJsonSchemaOwnerC(DeprecatedDomainGetHandleFieldsOKResponseBodyJsonSchemaOwnerC $jsonSchemaOwnerC): self
    {
        $clone = clone $this;
        $clone->jsonSchemaOwnerC = $jsonSchemaOwnerC;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return DeprecatedDomainGetHandleFieldsOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): DeprecatedDomainGetHandleFieldsOKResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $jsonSchemaAdminC = null;
        if (isset($input->{'jsonSchemaAdminC'})) {
            $jsonSchemaAdminC = DeprecatedDomainGetHandleFieldsOKResponseBodyJsonSchemaAdminC::buildFromInput($input->{'jsonSchemaAdminC'}, validate: $validate);
        }
        $jsonSchemaOwnerC = DeprecatedDomainGetHandleFieldsOKResponseBodyJsonSchemaOwnerC::buildFromInput($input->{'jsonSchemaOwnerC'}, validate: $validate);

        $obj = new self($jsonSchemaOwnerC);
        $obj->jsonSchemaAdminC = $jsonSchemaAdminC;
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
        if (isset($this->jsonSchemaAdminC)) {
            $output['jsonSchemaAdminC'] = ($this->jsonSchemaAdminC)->toJson();
        }
        $output['jsonSchemaOwnerC'] = ($this->jsonSchemaOwnerC)->toJson();

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
        if (isset($this->jsonSchemaAdminC)) {
            $this->jsonSchemaAdminC = clone $this->jsonSchemaAdminC;
        }
        $this->jsonSchemaOwnerC = clone $this->jsonSchemaOwnerC;
    }
}
