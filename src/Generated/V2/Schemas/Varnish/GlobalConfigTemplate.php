<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Varnish;

use InvalidArgumentException;
use DateTime;

class GlobalConfigTemplate
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'data' => [
                'format' => 'byte',
                'type' => 'string',
            ],
            'name' => [
                'type' => 'string',
            ],
            'updatedAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
        ],
        'required' => [
            'name',
            'data',
            'updatedAt',
        ],
        'type' => 'object',
    ];

    /**
     * @var string
     */
    private string $data;

    /**
     * @var string
     */
    private string $name;

    /**
     * @var DateTime
     */
    private DateTime $updatedAt;

    /**
     * @param string $data
     * @param string $name
     * @param DateTime $updatedAt
     */
    public function __construct(string $data, string $name, DateTime $updatedAt)
    {
        $this->data = $data;
        $this->name = $name;
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return string
     */
    public function getData(): string
    {
        return $this->data;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return DateTime
     */
    public function getUpdatedAt(): DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @param string $data
     * @return self
     */
    public function withData(string $data): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($data, static::$schema['properties']['data']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->data = $data;

        return $clone;
    }

    /**
     * @param string $name
     * @return self
     */
    public function withName(string $name): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($name, static::$schema['properties']['name']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->name = $name;

        return $clone;
    }

    /**
     * @param DateTime $updatedAt
     * @return self
     */
    public function withUpdatedAt(DateTime $updatedAt): self
    {
        $clone = clone $this;
        $clone->updatedAt = $updatedAt;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return GlobalConfigTemplate Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): GlobalConfigTemplate
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $data = $input->{'data'};
        $name = $input->{'name'};
        $updatedAt = new DateTime($input->{'updatedAt'});

        $obj = new self($data, $name, $updatedAt);

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
        $output['data'] = $this->data;
        $output['name'] = $this->name;
        $output['updatedAt'] = ($this->updatedAt)->format(DateTime::ATOM);

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
        $validator = new \JsonSchema\Validator();
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
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
        $this->updatedAt = clone $this->updatedAt;
    }
}
