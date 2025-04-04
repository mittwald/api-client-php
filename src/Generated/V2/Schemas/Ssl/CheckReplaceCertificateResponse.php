<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Ssl;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.ssl.CheckReplaceCertificateResponse.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class CheckReplaceCertificateResponse
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'changes' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.ssl.CheckReplaceChanges',
            ],
            'errors' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.ssl.CertificateError',
                ],
                'type' => 'array',
            ],
            'isReplaceable' => [
                'type' => 'boolean',
            ],
        ],
        'required' => [
            'isReplaceable',
        ],
        'type' => 'object',
    ];

    private ?CheckReplaceChanges $changes = null;

    /**
     * @var CertificateError[]|null
     */
    private ?array $errors = null;

    private bool $isReplaceable;

    public function __construct(bool $isReplaceable)
    {
        $this->isReplaceable = $isReplaceable;
    }

    public function getChanges(): ?CheckReplaceChanges
    {
        return $this->changes ?? null;
    }

    /**
     * @return CertificateError[]|null
     */
    public function getErrors(): ?array
    {
        return $this->errors ?? null;
    }

    public function getIsReplaceable(): bool
    {
        return $this->isReplaceable;
    }

    public function withChanges(CheckReplaceChanges $changes): self
    {
        $clone = clone $this;
        $clone->changes = $changes;

        return $clone;
    }

    public function withoutChanges(): self
    {
        $clone = clone $this;
        unset($clone->changes);

        return $clone;
    }

    /**
     * @param CertificateError[] $errors
     */
    public function withErrors(array $errors): self
    {
        $clone = clone $this;
        $clone->errors = $errors;

        return $clone;
    }

    public function withoutErrors(): self
    {
        $clone = clone $this;
        unset($clone->errors);

        return $clone;
    }

    public function withIsReplaceable(bool $isReplaceable): self
    {
        $validator = new Validator();
        $validator->validate($isReplaceable, self::$schema['properties']['isReplaceable']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->isReplaceable = $isReplaceable;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CheckReplaceCertificateResponse Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CheckReplaceCertificateResponse
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $changes = null;
        if (isset($input->{'changes'})) {
            $changes = CheckReplaceChanges::buildFromInput($input->{'changes'}, validate: $validate);
        }
        $errors = null;
        if (isset($input->{'errors'})) {
            $errors = array_map(fn (array|object $i): CertificateError => CertificateError::buildFromInput($i, validate: $validate), $input->{'errors'});
        }
        $isReplaceable = (bool)($input->{'isReplaceable'});

        $obj = new self($isReplaceable);
        $obj->changes = $changes;
        $obj->errors = $errors;
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
        if (isset($this->changes)) {
            $output['changes'] = $this->changes->toJson();
        }
        if (isset($this->errors)) {
            $output['errors'] = array_map(fn (CertificateError $i): array => $i->toJson(), $this->errors);
        }
        $output['isReplaceable'] = $this->isReplaceable;

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
    }
}
