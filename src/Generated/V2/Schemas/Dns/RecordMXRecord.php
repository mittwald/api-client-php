<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Dns;

class RecordMXRecord
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'fqdn' => [
                'format' => 'hostname',
                'maxLength' => 50,
                'minLength' => 1,
                'type' => 'string',
            ],
            'priority' => [
                'maximum' => 100,
                'minimum' => 0,
                'type' => 'integer',
            ],
        ],
        'required' => [
            'priority',
            'fqdn',
        ],
        'type' => 'object',
    ];

    /**
     * @var string
     */
    private string $fqdn;

    /**
     * @var int
     */
    private int $priority;

    /**
     * @param string $fqdn
     * @param int $priority
     */
    public function __construct(string $fqdn, int $priority)
    {
        $this->fqdn = $fqdn;
        $this->priority = $priority;
    }

    /**
     * @return string
     */
    public function getFqdn() : string
    {
        return $this->fqdn;
    }

    /**
     * @return int
     */
    public function getPriority() : int
    {
        return $this->priority;
    }

    /**
     * @param string $fqdn
     * @return self
     */
    public function withFqdn(string $fqdn) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($fqdn, static::$schema['properties']['fqdn']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->fqdn = $fqdn;

        return $clone;
    }

    /**
     * @param int $priority
     * @return self
     */
    public function withPriority(int $priority) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($priority, static::$schema['properties']['priority']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->priority = $priority;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return RecordMXRecord Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : RecordMXRecord
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $fqdn = $input->{'fqdn'};
        $priority = (int)($input->{'priority'});

        $obj = new self($fqdn, $priority);

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
        $output['fqdn'] = $this->fqdn;
        $output['priority'] = $this->priority;

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
}

