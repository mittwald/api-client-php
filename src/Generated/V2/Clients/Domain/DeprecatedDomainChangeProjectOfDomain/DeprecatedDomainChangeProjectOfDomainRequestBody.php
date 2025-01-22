<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain\DeprecatedDomainChangeProjectOfDomain;

use InvalidArgumentException;
use JsonSchema\Validator;

class DeprecatedDomainChangeProjectOfDomainRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'projectId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
        ],
    ];

    private ?string $projectId = null;

    /**
     *
     */
    public function __construct()
    {
    }

    public function getProjectId(): ?string
    {
        return $this->projectId ?? null;
    }

    public function withProjectId(string $projectId): self
    {
        $validator = new Validator();
        $validator->validate($projectId, self::$schema['properties']['projectId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->projectId = $projectId;

        return $clone;
    }

    public function withoutProjectId(): self
    {
        $clone = clone $this;
        unset($clone->projectId);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return DeprecatedDomainChangeProjectOfDomainRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): DeprecatedDomainChangeProjectOfDomainRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $projectId = null;
        if (isset($input->{'projectId'})) {
            $projectId = $input->{'projectId'};
        }

        $obj = new self();
        $obj->projectId = $projectId;
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
        if (isset($this->projectId)) {
            $output['projectId'] = $this->projectId;
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
    }
}
