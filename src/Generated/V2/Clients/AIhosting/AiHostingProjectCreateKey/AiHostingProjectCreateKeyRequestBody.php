<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectCreateKey;

use InvalidArgumentException;
use JsonSchema\Validator;

class AiHostingProjectCreateKeyRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'createWebuiContainer' => [
                'type' => 'boolean',
            ],
            'name' => [
                'minLength' => 5,
                'type' => 'string',
            ],
        ],
        'required' => [
            'name',
        ],
        'type' => 'object',
    ];

    private ?bool $createWebuiContainer = null;

    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getCreateWebuiContainer(): ?bool
    {
        return $this->createWebuiContainer ?? null;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function withCreateWebuiContainer(bool $createWebuiContainer): self
    {
        $validator = new Validator();
        $validator->validate($createWebuiContainer, self::$internalValidationSchema['properties']['createWebuiContainer']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->createWebuiContainer = $createWebuiContainer;

        return $clone;
    }

    public function withoutCreateWebuiContainer(): self
    {
        $clone = clone $this;
        unset($clone->createWebuiContainer);

        return $clone;
    }

    public function withName(string $name): self
    {
        $validator = new Validator();
        $validator->validate($name, self::$internalValidationSchema['properties']['name']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->name = $name;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return AiHostingProjectCreateKeyRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): AiHostingProjectCreateKeyRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $createWebuiContainer = null;
        if (isset($input->{'createWebuiContainer'})) {
            $createWebuiContainer = (bool)($input->{'createWebuiContainer'});
        }
        $name = $input->{'name'};

        $obj = new self($name);
        $obj->createWebuiContainer = $createWebuiContainer;
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
        if (isset($this->createWebuiContainer)) {
            $output['createWebuiContainer'] = $this->createWebuiContainer;
        }
        $output['name'] = $this->name;

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
