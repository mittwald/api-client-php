<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\App\RequestAppinstallationCopy;

use InvalidArgumentException;
use JsonSchema\Validator;

class RequestAppinstallationCopyRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'description' => [
                'type' => 'string',
            ],
            'targetProjectId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
        ],
        'required' => [
            'description',
        ],
        'type' => 'object',
    ];

    private string $description;

    private ?string $targetProjectId = null;

    public function __construct(string $description)
    {
        $this->description = $description;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getTargetProjectId(): ?string
    {
        return $this->targetProjectId ?? null;
    }

    public function withDescription(string $description): self
    {
        $validator = new Validator();
        $validator->validate($description, self::$internalValidationSchema['properties']['description']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->description = $description;

        return $clone;
    }

    public function withTargetProjectId(string $targetProjectId): self
    {
        $validator = new Validator();
        $validator->validate($targetProjectId, self::$internalValidationSchema['properties']['targetProjectId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->targetProjectId = $targetProjectId;

        return $clone;
    }

    public function withoutTargetProjectId(): self
    {
        $clone = clone $this;
        unset($clone->targetProjectId);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return RequestAppinstallationCopyRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): RequestAppinstallationCopyRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $description = $input->{'description'};
        $targetProjectId = null;
        if (isset($input->{'targetProjectId'})) {
            $targetProjectId = $input->{'targetProjectId'};
        }

        $obj = new self($description);
        $obj->targetProjectId = $targetProjectId;
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
        $output['description'] = $this->description;
        if (isset($this->targetProjectId)) {
            $output['targetProjectId'] = $this->targetProjectId;
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
