<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Database\UpdateMysqlDatabaseDefaultCharset;

class UpdateMysqlDatabaseDefaultCharsetRequestBody
{
    public const method = 'patch';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
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

    /**
     * @var \Mittwald\ApiClient\Generated\V2\Schemas\Database\CharacterSettings
     */
    private \Mittwald\ApiClient\Generated\V2\Schemas\Database\CharacterSettings $characterSettings;

    private array $headers = [
        
    ];

    /**
     * @param \Mittwald\ApiClient\Generated\V2\Schemas\Database\CharacterSettings $characterSettings
     */
    public function __construct(\Mittwald\ApiClient\Generated\V2\Schemas\Database\CharacterSettings $characterSettings)
    {
        $this->characterSettings = $characterSettings;
    }

    /**
     * @return \Mittwald\ApiClient\Generated\V2\Schemas\Database\CharacterSettings
     */
    public function getCharacterSettings() : \Mittwald\ApiClient\Generated\V2\Schemas\Database\CharacterSettings
    {
        return $this->characterSettings;
    }

    /**
     * @param \Mittwald\ApiClient\Generated\V2\Schemas\Database\CharacterSettings $characterSettings
     * @return self
     */
    public function withCharacterSettings(\Mittwald\ApiClient\Generated\V2\Schemas\Database\CharacterSettings $characterSettings) : self
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
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : UpdateMysqlDatabaseDefaultCharsetRequestBody
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $characterSettings = \Mittwald\ApiClient\Generated\V2\Schemas\Database\CharacterSettings::buildFromInput($input->{'characterSettings'}, validate: $validate);

        $obj = new self($characterSettings);

        return $obj;
    }

    /**
     * Converts this object back to a simple array that can be JSON-serialized
     *
     * @return array Converted array
     */
    public function toJson() : array
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
     * @throws \InvalidArgumentException
     */
    public static function validateInput(array|object $input, bool $return = false) : bool
    {
        $validator = new \JsonSchema\Validator();
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        $validator->validate($input, static::$schema);

        if (!$validator->isValid() && !$return) {
            $errors = array_map(function(array $e): string {
                return $e["property"] . ": " . $e["message"];
            }, $validator->getErrors());
            throw new \InvalidArgumentException(join(", ", $errors));
        }

        return $validator->isValid();
    }

    public function __clone()
    {
    }

    public function getUrl() : string
    {
        $mapped = $this->toJson();
        $id = urlencode($mapped['id']);
        return '/v2/mysql-databases/' . $id . '/default-charset';
    }

    public function getQuery() : array
    {
        $mapped = $this->toJson();
        $query = [];
        return $query;
    }

    public function getHeaders() : array
    {
        return $this->headers;
    }

    public function withHeader(string $name, string|array $value) : self
    {
        $clone = clone $this;
        $clone->headers[$name] = $value;
        return $clone;
    }
}

