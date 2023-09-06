<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Mail\MailaddressUpdateSpamprotection;

use InvalidArgumentException;

class MailaddressUpdateSpamprotectionRequestBody
{
    public const method = 'put';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
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
    ];

    /**
     * @var MailaddressUpdateSpamprotectionRequestBodySpamProtection
     */
    private MailaddressUpdateSpamprotectionRequestBodySpamProtection $spamProtection;

    private array $headers = [

    ];

    /**
     * @param MailaddressUpdateSpamprotectionRequestBodySpamProtection $spamProtection
     */
    public function __construct(MailaddressUpdateSpamprotectionRequestBodySpamProtection $spamProtection)
    {
        $this->spamProtection = $spamProtection;
    }

    /**
     * @return MailaddressUpdateSpamprotectionRequestBodySpamProtection
     */
    public function getSpamProtection(): MailaddressUpdateSpamprotectionRequestBodySpamProtection
    {
        return $this->spamProtection;
    }

    /**
     * @param MailaddressUpdateSpamprotectionRequestBodySpamProtection $spamProtection
     * @return self
     */
    public function withSpamProtection(MailaddressUpdateSpamprotectionRequestBodySpamProtection $spamProtection): self
    {
        $clone = clone $this;
        $clone->spamProtection = $spamProtection;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return MailaddressUpdateSpamprotectionRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): MailaddressUpdateSpamprotectionRequestBody
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $spamProtection = MailaddressUpdateSpamprotectionRequestBodySpamProtection::buildFromInput($input->{'spamProtection'}, validate: $validate);

        $obj = new self($spamProtection);

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
        $output['spamProtection'] = ($this->spamProtection)->toJson();

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
        $this->spamProtection = clone $this->spamProtection;
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
