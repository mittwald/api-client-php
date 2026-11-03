<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\CreatePasskey;

use InvalidArgumentException;
use JsonSchema\Validator;

class CreatePasskeyCreatedResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'id' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'recoveryCodes' => [
                'description' => 'Only set if the passkey is the first second factor of the user.',
                'items' => [
                    'example' => '1234123412341234',
                    'maxLength' => 16,
                    'minLength' => 16,
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
        ],
        'required' => [
            'id',
        ],
        'type' => 'object',
    ];

    private string $id;

    /**
     * Only set if the passkey is the first second factor of the user.
     *
     * @var string[]|null
     */
    private ?array $recoveryCodes = null;

    public function __construct(string $id)
    {
        $this->id = $id;
    }

    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string[]|null
     */
    public function getRecoveryCodes(): ?array
    {
        return $this->recoveryCodes ?? null;
    }

    public function withId(string $id): self
    {
        $validator = new Validator();
        $validator->validate($id, self::$internalValidationSchema['properties']['id']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->id = $id;

        return $clone;
    }

    /**
     * @param string[] $recoveryCodes
     */
    public function withRecoveryCodes(array $recoveryCodes): self
    {
        $validator = new Validator();
        $validator->validate($recoveryCodes, self::$internalValidationSchema['properties']['recoveryCodes']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->recoveryCodes = $recoveryCodes;

        return $clone;
    }

    public function withoutRecoveryCodes(): self
    {
        $clone = clone $this;
        unset($clone->recoveryCodes);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CreatePasskeyCreatedResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CreatePasskeyCreatedResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $id = $input->{'id'};
        $recoveryCodes = null;
        if (isset($input->{'recoveryCodes'})) {
            $recoveryCodes = $input->{'recoveryCodes'};
        }

        $obj = new self($id);
        $obj->recoveryCodes = $recoveryCodes;
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
        $output['id'] = $this->id;
        if (isset($this->recoveryCodes)) {
            $output['recoveryCodes'] = $this->recoveryCodes;
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
    }
}
