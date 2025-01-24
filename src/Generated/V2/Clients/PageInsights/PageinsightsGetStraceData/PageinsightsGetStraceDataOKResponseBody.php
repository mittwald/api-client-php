<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\PageInsights\PageinsightsGetStraceData;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Strace\Data;
use Mittwald\ApiClient\Generated\V2\Schemas\Strace\Error;

class PageinsightsGetStraceDataOKResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'executedAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'id' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'result' => [
                'oneOf' => [
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.strace.Error',
                    ],
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.strace.Data',
                    ],
                ],
            ],
        ],
        'required' => [
            'id',
            'executedAt',
            'result',
        ],
        'type' => 'object',
    ];

    private DateTime $executedAt;

    private string $id;

    private Error|Data $result;

    public function __construct(DateTime $executedAt, string $id, Data|Error $result)
    {
        $this->executedAt = $executedAt;
        $this->id = $id;
        $this->result = $result;
    }

    public function getExecutedAt(): DateTime
    {
        return $this->executedAt;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getResult(): Data|Error
    {
        return $this->result;
    }

    public function withExecutedAt(DateTime $executedAt): self
    {
        $clone = clone $this;
        $clone->executedAt = $executedAt;

        return $clone;
    }

    public function withId(string $id): self
    {
        $validator = new Validator();
        $validator->validate($id, self::$schema['properties']['id']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->id = $id;

        return $clone;
    }

    public function withResult(Data|Error $result): self
    {
        $clone = clone $this;
        $clone->result = $result;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return PageinsightsGetStraceDataOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): PageinsightsGetStraceDataOKResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $executedAt = new DateTime($input->{'executedAt'});
        $id = $input->{'id'};
        $result = match (true) {
            Error::validateInput($input->{'result'}, true) => Error::buildFromInput($input->{'result'}, validate: $validate),
            Data::validateInput($input->{'result'}, true) => Data::buildFromInput($input->{'result'}, validate: $validate),
            default => throw new InvalidArgumentException("could not build property 'result' from JSON"),
        };

        $obj = new self($executedAt, $id, $result);

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
        $output['executedAt'] = ($this->executedAt)->format(DateTime::ATOM);
        $output['id'] = $this->id;
        $output['result'] = match (true) {
            ($this->result) instanceof Error, ($this->result) instanceof Data => $this->result->toJson(),
        };

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
        $this->executedAt = clone $this->executedAt;
        $this->result = match (true) {
            ($this->result) instanceof Error, ($this->result) instanceof Data => $this->result,
        };
    }
}
