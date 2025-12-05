<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectGetUsage;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Aihosting\TariffUsage;

class AiHostingProjectGetUsageOKResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'keys' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.aihosting.TariffUsage',
            ],
            'projectId' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'keys',
            'projectId',
        ],
        'type' => 'object',
    ];

    private TariffUsage $keys;

    private string $projectId;

    public function __construct(TariffUsage $keys, string $projectId)
    {
        $this->keys = $keys;
        $this->projectId = $projectId;
    }

    public function getKeys(): TariffUsage
    {
        return $this->keys;
    }

    public function getProjectId(): string
    {
        return $this->projectId;
    }

    public function withKeys(TariffUsage $keys): self
    {
        $clone = clone $this;
        $clone->keys = $keys;

        return $clone;
    }

    public function withProjectId(string $projectId): self
    {
        $validator = new Validator();
        $validator->validate($projectId, self::$internalValidationSchema['properties']['projectId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->projectId = $projectId;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return AiHostingProjectGetUsageOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): AiHostingProjectGetUsageOKResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $keys = TariffUsage::buildFromInput($input->{'keys'}, validate: $validate);
        $projectId = $input->{'projectId'};

        $obj = new self($keys, $projectId);

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
        $output['keys'] = $this->keys->toJson();
        $output['projectId'] = $this->projectId;

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
