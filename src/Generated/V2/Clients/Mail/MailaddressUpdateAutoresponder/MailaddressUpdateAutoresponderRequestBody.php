<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Mail\MailaddressUpdateAutoresponder;

use InvalidArgumentException;

class MailaddressUpdateAutoresponderRequestBody
{
    public const method = 'put';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'autoResponder' => [
                'nullable' => true,
                'properties' => [
                    'active' => [
                        'type' => 'boolean',
                    ],
                    'expiresAt' => [
                        'format' => 'date-time',
                        'type' => 'string',
                    ],
                    'message' => [
                        'type' => 'string',
                    ],
                    'startsAt' => [
                        'format' => 'date-time',
                        'type' => 'string',
                    ],
                ],
                'required' => [
                    'message',
                    'active',
                ],
                'type' => 'object',
            ],
        ],
        'required' => [
            'autoResponder',
        ],
    ];

    /**
     * @var MailaddressUpdateAutoresponderRequestBodyAutoResponder
     */
    private MailaddressUpdateAutoresponderRequestBodyAutoResponder $autoResponder;

    private array $headers = [

    ];

    /**
     * @param MailaddressUpdateAutoresponderRequestBodyAutoResponder $autoResponder
     */
    public function __construct(MailaddressUpdateAutoresponderRequestBodyAutoResponder $autoResponder)
    {
        $this->autoResponder = $autoResponder;
    }

    /**
     * @return MailaddressUpdateAutoresponderRequestBodyAutoResponder
     */
    public function getAutoResponder(): MailaddressUpdateAutoresponderRequestBodyAutoResponder
    {
        return $this->autoResponder;
    }

    /**
     * @param MailaddressUpdateAutoresponderRequestBodyAutoResponder $autoResponder
     * @return self
     */
    public function withAutoResponder(MailaddressUpdateAutoresponderRequestBodyAutoResponder $autoResponder): self
    {
        $clone = clone $this;
        $clone->autoResponder = $autoResponder;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return MailaddressUpdateAutoresponderRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): MailaddressUpdateAutoresponderRequestBody
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $autoResponder = MailaddressUpdateAutoresponderRequestBodyAutoResponder::buildFromInput($input->{'autoResponder'}, validate: $validate);

        $obj = new self($autoResponder);

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
        $output['autoResponder'] = ($this->autoResponder)->toJson();

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
        $this->autoResponder = clone $this->autoResponder;
    }

    public function getUrl(): string
    {
        $mapped = $this->toJson();
        $id = urlencode($mapped['id']);
        return '/v2/mailaddresses/' . $id . '/autoResponder';
    }

    public function getQuery(): array
    {
        $mapped = $this->toJson();
        $query = [];
        return $query;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function withHeader(string $name, string|array $value): self
    {
        $clone = clone $this;
        $clone->headers[$name] = $value;
        return $clone;
    }
}
