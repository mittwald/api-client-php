<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Database\UpdateMysqlDatabaseDefaultCharset;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Database\CharacterSettings;

class UpdateMysqlDatabaseDefaultCharsetRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'characterSettings' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.database.characterSettings',
            ],
        ],
        'required' => [
            'characterSettings',
        ],
    ];

    private CharacterSettings $characterSettings;

    public function __construct(CharacterSettings $characterSettings)
    {
        $this->characterSettings = $characterSettings;
    }

    public function getCharacterSettings(): CharacterSettings
    {
        return $this->characterSettings;
    }

    public function withCharacterSettings(CharacterSettings $characterSettings): self
    {
        $clone = clone $this;
        $clone->characterSettings = $characterSettings;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return UpdateMysqlDatabaseDefaultCharsetRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): UpdateMysqlDatabaseDefaultCharsetRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $characterSettings = CharacterSettings::buildFromInput($input->{'characterSettings'}, validate: $validate);

        $obj = new self($characterSettings);

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
        $output['characterSettings'] = $this->characterSettings->toJson();

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
