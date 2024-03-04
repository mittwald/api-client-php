<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Mailmigration;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.mailmigration.MailSystemSettings.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class MailSystemSettings
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'imapClusterId' => [
                'type' => 'string',
            ],
            'mailDirectory' => [
                'type' => 'string',
            ],
            'rateLimitId' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'imapClusterId',
            'mailDirectory',
            'rateLimitId',
        ],
        'type' => 'object',
    ];

    /**
     * @var string
     */
    private string $imapClusterId;

    /**
     * @var string
     */
    private string $mailDirectory;

    /**
     * @var string
     */
    private string $rateLimitId;

    /**
     * @param string $imapClusterId
     * @param string $mailDirectory
     * @param string $rateLimitId
     */
    public function __construct(string $imapClusterId, string $mailDirectory, string $rateLimitId)
    {
        $this->imapClusterId = $imapClusterId;
        $this->mailDirectory = $mailDirectory;
        $this->rateLimitId = $rateLimitId;
    }

    /**
     * @return string
     */
    public function getImapClusterId(): string
    {
        return $this->imapClusterId;
    }

    /**
     * @return string
     */
    public function getMailDirectory(): string
    {
        return $this->mailDirectory;
    }

    /**
     * @return string
     */
    public function getRateLimitId(): string
    {
        return $this->rateLimitId;
    }

    /**
     * @param string $imapClusterId
     * @return self
     */
    public function withImapClusterId(string $imapClusterId): self
    {
        $validator = new Validator();
        $validator->validate($imapClusterId, static::$schema['properties']['imapClusterId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->imapClusterId = $imapClusterId;

        return $clone;
    }

    /**
     * @param string $mailDirectory
     * @return self
     */
    public function withMailDirectory(string $mailDirectory): self
    {
        $validator = new Validator();
        $validator->validate($mailDirectory, static::$schema['properties']['mailDirectory']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->mailDirectory = $mailDirectory;

        return $clone;
    }

    /**
     * @param string $rateLimitId
     * @return self
     */
    public function withRateLimitId(string $rateLimitId): self
    {
        $validator = new Validator();
        $validator->validate($rateLimitId, static::$schema['properties']['rateLimitId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->rateLimitId = $rateLimitId;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return MailSystemSettings Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): MailSystemSettings
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $imapClusterId = $input->{'imapClusterId'};
        $mailDirectory = $input->{'mailDirectory'};
        $rateLimitId = $input->{'rateLimitId'};

        $obj = new self($imapClusterId, $mailDirectory, $rateLimitId);

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
        $output['imapClusterId'] = $this->imapClusterId;
        $output['mailDirectory'] = $this->mailDirectory;
        $output['rateLimitId'] = $this->rateLimitId;

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
    }
}
