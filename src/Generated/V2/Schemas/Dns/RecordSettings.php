<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Dns;

use InvalidArgumentException;
use JsonSchema\Validator;

class RecordSettings
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'ttl' => [
                'oneOf' => [
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.dns.TtlSeconds',
                    ],
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.dns.TtlAuto',
                    ],
                ],
            ],
        ],
        'type' => 'object',
    ];

    /**
     * @var TtlSeconds|TtlAuto|null
     */
    private TtlSeconds|TtlAuto|null $ttl = null;

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return
     * TtlSeconds|TtlAuto|null
     */
    public function getTtl(): TtlAuto|TtlSeconds|null
    {
        return $this->ttl;
    }

    /**
     * @param TtlSeconds|TtlAuto $ttl
     * @return self
     */
    public function withTtl(TtlAuto|TtlSeconds $ttl): self
    {
        $clone = clone $this;
        $clone->ttl = $ttl;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutTtl(): self
    {
        $clone = clone $this;
        unset($clone->ttl);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return RecordSettings Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): RecordSettings
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $ttl = null;
        if (isset($input->{'ttl'})) {
            $ttl = match (true) {
                TtlSeconds::validateInput($input->{'ttl'}, true) => TtlSeconds::buildFromInput($input->{'ttl'}, validate: $validate),
                TtlAuto::validateInput($input->{'ttl'}, true) => TtlAuto::buildFromInput($input->{'ttl'}, validate: $validate),
            };
        }

        $obj = new self();
        $obj->ttl = $ttl;
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
        if (isset($this->ttl)) {
            $output['ttl'] = match (true) {
                ($this->ttl) instanceof TtlSeconds, ($this->ttl) instanceof TtlAuto => $this->ttl->toJson(),
            };
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
        $validator = new Validator();
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
        if (isset($this->ttl)) {
            $this->ttl = match (true) {
                ($this->ttl) instanceof TtlSeconds, ($this->ttl) instanceof TtlAuto => $this->ttl,
            };
        }
    }
}
