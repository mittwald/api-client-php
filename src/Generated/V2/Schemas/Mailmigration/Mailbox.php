<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Mailmigration;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.mailmigration.Mailbox.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class Mailbox
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'mailsystem' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.mailmigration.MailSystemSettings',
            ],
            'name' => [
                'type' => 'string',
            ],
            'quotaInBytes' => [
                'type' => 'integer',
            ],
            'spamProtection' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.mailmigration.SpamProtection',
            ],
        ],
        'required' => [
            'name',
            'quotaInBytes',
            'mailsystem',
        ],
        'type' => 'object',
    ];

    private MailSystemSettings $mailsystem;

    private string $name;

    private int $quotaInBytes;

    private ?SpamProtection $spamProtection = null;

    public function __construct(MailSystemSettings $mailsystem, string $name, int $quotaInBytes)
    {
        $this->mailsystem = $mailsystem;
        $this->name = $name;
        $this->quotaInBytes = $quotaInBytes;
    }

    public function getMailsystem(): MailSystemSettings
    {
        return $this->mailsystem;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getQuotaInBytes(): int
    {
        return $this->quotaInBytes;
    }

    public function getSpamProtection(): ?SpamProtection
    {
        return $this->spamProtection ?? null;
    }

    public function withMailsystem(MailSystemSettings $mailsystem): self
    {
        $clone = clone $this;
        $clone->mailsystem = $mailsystem;

        return $clone;
    }

    public function withName(string $name): self
    {
        $validator = new Validator();
        $validator->validate($name, self::$schema['properties']['name']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->name = $name;

        return $clone;
    }

    public function withQuotaInBytes(int $quotaInBytes): self
    {
        $validator = new Validator();
        $validator->validate($quotaInBytes, self::$schema['properties']['quotaInBytes']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->quotaInBytes = $quotaInBytes;

        return $clone;
    }

    public function withSpamProtection(SpamProtection $spamProtection): self
    {
        $clone = clone $this;
        $clone->spamProtection = $spamProtection;

        return $clone;
    }

    public function withoutSpamProtection(): self
    {
        $clone = clone $this;
        unset($clone->spamProtection);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return Mailbox Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): Mailbox
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $mailsystem = MailSystemSettings::buildFromInput($input->{'mailsystem'}, validate: $validate);
        $name = $input->{'name'};
        $quotaInBytes = (int)($input->{'quotaInBytes'});
        $spamProtection = null;
        if (isset($input->{'spamProtection'})) {
            $spamProtection = SpamProtection::buildFromInput($input->{'spamProtection'}, validate: $validate);
        }

        $obj = new self($mailsystem, $name, $quotaInBytes);
        $obj->spamProtection = $spamProtection;
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
        $output['mailsystem'] = $this->mailsystem->toJson();
        $output['name'] = $this->name;
        $output['quotaInBytes'] = $this->quotaInBytes;
        if (isset($this->spamProtection)) {
            $output['spamProtection'] = $this->spamProtection->toJson();
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
