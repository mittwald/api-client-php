<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Database\PatchMysqlDatabase;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Database\CharacterSettings;

class PatchMysqlDatabaseRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'characterSettings' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.database.characterSettings',
            ],
            'description' => [
                'example' => 'I am a database',
                'type' => 'string',
            ],
            'version' => [
                'example' => 8.1,
                'type' => 'string',
            ],
        ],
        'type' => 'object',
    ];

    private ?CharacterSettings $characterSettings = null;

    private ?string $description = null;

    private ?string $version = null;

    /**
     *
     */
    public function __construct()
    {
    }

    public function getCharacterSettings(): ?CharacterSettings
    {
        return $this->characterSettings ?? null;
    }

    public function getDescription(): ?string
    {
        return $this->description ?? null;
    }

    public function getVersion(): ?string
    {
        return $this->version ?? null;
    }

    public function withCharacterSettings(CharacterSettings $characterSettings): self
    {
        $clone = clone $this;
        $clone->characterSettings = $characterSettings;

        return $clone;
    }

    public function withoutCharacterSettings(): self
    {
        $clone = clone $this;
        unset($clone->characterSettings);

        return $clone;
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

    public function withoutDescription(): self
    {
        $clone = clone $this;
        unset($clone->description);

        return $clone;
    }

    public function withVersion(string $version): self
    {
        $validator = new Validator();
        $validator->validate($version, self::$internalValidationSchema['properties']['version']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->version = $version;

        return $clone;
    }

    public function withoutVersion(): self
    {
        $clone = clone $this;
        unset($clone->version);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return PatchMysqlDatabaseRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): PatchMysqlDatabaseRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $characterSettings = null;
        if (isset($input->{'characterSettings'})) {
            $characterSettings = CharacterSettings::buildFromInput($input->{'characterSettings'}, validate: $validate);
        }
        $description = null;
        if (isset($input->{'description'})) {
            $description = $input->{'description'};
        }
        $version = null;
        if (isset($input->{'version'})) {
            $version = $input->{'version'};
        }

        $obj = new self();
        $obj->characterSettings = $characterSettings;
        $obj->description = $description;
        $obj->version = $version;
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
        if (isset($this->characterSettings)) {
            $output['characterSettings'] = $this->characterSettings->toJson();
        }
        if (isset($this->description)) {
            $output['description'] = $this->description;
        }
        if (isset($this->version)) {
            $output['version'] = $this->version;
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
