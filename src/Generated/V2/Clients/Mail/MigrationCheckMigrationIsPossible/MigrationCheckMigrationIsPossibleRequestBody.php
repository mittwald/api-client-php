<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Mail\MigrationCheckMigrationIsPossible;

use InvalidArgumentException;
use JsonSchema\Validator;

class MigrationCheckMigrationIsPossibleRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'sourceLegacyProjectId' => [
                'type' => 'string',
            ],
            'targetProjectId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
        ],
        'required' => [
            'sourceLegacyProjectId',
            'targetProjectId',
        ],
        'type' => 'object',
    ];

    private string $sourceLegacyProjectId;

    private string $targetProjectId;

    public function __construct(string $sourceLegacyProjectId, string $targetProjectId)
    {
        $this->sourceLegacyProjectId = $sourceLegacyProjectId;
        $this->targetProjectId = $targetProjectId;
    }

    public function getSourceLegacyProjectId(): string
    {
        return $this->sourceLegacyProjectId;
    }

    public function getTargetProjectId(): string
    {
        return $this->targetProjectId;
    }

    public function withSourceLegacyProjectId(string $sourceLegacyProjectId): self
    {
        $validator = new Validator();
        $validator->validate($sourceLegacyProjectId, static::$schema['properties']['sourceLegacyProjectId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->sourceLegacyProjectId = $sourceLegacyProjectId;

        return $clone;
    }

    public function withTargetProjectId(string $targetProjectId): self
    {
        $validator = new Validator();
        $validator->validate($targetProjectId, static::$schema['properties']['targetProjectId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->targetProjectId = $targetProjectId;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return MigrationCheckMigrationIsPossibleRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): MigrationCheckMigrationIsPossibleRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $sourceLegacyProjectId = $input->{'sourceLegacyProjectId'};
        $targetProjectId = $input->{'targetProjectId'};

        $obj = new self($sourceLegacyProjectId, $targetProjectId);

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
        $output['sourceLegacyProjectId'] = $this->sourceLegacyProjectId;
        $output['targetProjectId'] = $this->targetProjectId;

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
    }
}
