<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Mail\MailaddressUpdateSpamprotection;

use InvalidArgumentException;

class MailaddressUpdateSpamprotectionRequest
{
    public const method = 'put';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'type' => 'object',
        'properties' => [
            'id' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'body' => [
                'properties' => [
                    'spamProtection' => [
                        'properties' => [
                            'active' => [
                                'type' => 'boolean',
                            ],
                            'autoDeleteSpam' => [
                                'type' => 'boolean',
                            ],
                            'folder' => [
                                'enum' => [
                                    'inbox',
                                    'spam',
                                ],
                                'type' => 'string',
                            ],
                            'relocationMinSpamScore' => [
                                'maximum' => 10,
                                'type' => 'integer',
                            ],
                        ],
                        'required' => [
                            'active',
                            'folder',
                            'relocationMinSpamScore',
                            'autoDeleteSpam',
                        ],
                        'type' => 'object',
                    ],
                ],
                'required' => [
                    'spamProtection',
                ],
            ],
        ],
        'required' => [
            'id',
            'body',
        ],
    ];

    /**
     * @var string
     */
    private string $id;

    /**
     * @var MailaddressUpdateSpamprotectionRequestBody
     */
    private MailaddressUpdateSpamprotectionRequestBody $body;

    private array $headers = [

    ];

    /**
     * @param string $id
     * @param MailaddressUpdateSpamprotectionRequestBody $body
     */
    public function __construct(string $id, MailaddressUpdateSpamprotectionRequestBody $body)
    {
        $this->id = $id;
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return MailaddressUpdateSpamprotectionRequestBody
     */
    public function getBody(): MailaddressUpdateSpamprotectionRequestBody
    {
        return $this->body;
    }

    /**
     * @param string $id
     * @return self
     */
    public function withId(string $id): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($id, static::$schema['properties']['id']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->id = $id;

        return $clone;
    }

    /**
     * @param MailaddressUpdateSpamprotectionRequestBody $body
     * @return self
     */
    public function withBody(MailaddressUpdateSpamprotectionRequestBody $body): self
    {
        $clone = clone $this;
        $clone->body = $body;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return MailaddressUpdateSpamprotectionRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): MailaddressUpdateSpamprotectionRequest
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $id = $input->{'id'};
        $body = MailaddressUpdateSpamprotectionRequestBody::buildFromInput($input->{'body'}, validate: $validate);

        $obj = new self($id, $body);

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
        $output['id'] = $this->id;
        $output['body'] = ($this->body)->toJson();

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
        $this->body = clone $this->body;
    }

    public function getUrl(): string
    {
        $mapped = $this->toJson();
        $id = urlencode($mapped['id']);
        return '/v2/mailaddresses/' . $id . '/spamprotection';
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
