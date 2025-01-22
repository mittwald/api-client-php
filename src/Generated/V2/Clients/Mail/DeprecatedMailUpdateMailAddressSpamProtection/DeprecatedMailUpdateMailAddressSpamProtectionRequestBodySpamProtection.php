<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateMailAddressSpamProtection;

use InvalidArgumentException;
use JsonSchema\Validator;

class DeprecatedMailUpdateMailAddressSpamProtectionRequestBodySpamProtection
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
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
    ];

    private bool $active;

    private bool $autoDeleteSpam;

    private DeprecatedMailUpdateMailAddressSpamProtectionRequestBodySpamProtectionFolder $folder;

    private int $relocationMinSpamScore;

    public function __construct(bool $active, bool $autoDeleteSpam, DeprecatedMailUpdateMailAddressSpamProtectionRequestBodySpamProtectionFolder $folder, int $relocationMinSpamScore)
    {
        $this->active = $active;
        $this->autoDeleteSpam = $autoDeleteSpam;
        $this->folder = $folder;
        $this->relocationMinSpamScore = $relocationMinSpamScore;
    }

    public function getActive(): bool
    {
        return $this->active;
    }

    public function getAutoDeleteSpam(): bool
    {
        return $this->autoDeleteSpam;
    }

    public function getFolder(): DeprecatedMailUpdateMailAddressSpamProtectionRequestBodySpamProtectionFolder
    {
        return $this->folder;
    }

    public function getRelocationMinSpamScore(): int
    {
        return $this->relocationMinSpamScore;
    }

    public function withActive(bool $active): self
    {
        $validator = new Validator();
        $validator->validate($active, self::$schema['properties']['active']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->active = $active;

        return $clone;
    }

    public function withAutoDeleteSpam(bool $autoDeleteSpam): self
    {
        $validator = new Validator();
        $validator->validate($autoDeleteSpam, self::$schema['properties']['autoDeleteSpam']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->autoDeleteSpam = $autoDeleteSpam;

        return $clone;
    }

    public function withFolder(DeprecatedMailUpdateMailAddressSpamProtectionRequestBodySpamProtectionFolder $folder): self
    {
        $clone = clone $this;
        $clone->folder = $folder;

        return $clone;
    }

    public function withRelocationMinSpamScore(int $relocationMinSpamScore): self
    {
        $validator = new Validator();
        $validator->validate($relocationMinSpamScore, self::$schema['properties']['relocationMinSpamScore']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->relocationMinSpamScore = $relocationMinSpamScore;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return DeprecatedMailUpdateMailAddressSpamProtectionRequestBodySpamProtection Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): DeprecatedMailUpdateMailAddressSpamProtectionRequestBodySpamProtection
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $active = (bool)($input->{'active'});
        $autoDeleteSpam = (bool)($input->{'autoDeleteSpam'});
        $folder = DeprecatedMailUpdateMailAddressSpamProtectionRequestBodySpamProtectionFolder::from($input->{'folder'});
        $relocationMinSpamScore = (int)($input->{'relocationMinSpamScore'});

        $obj = new self($active, $autoDeleteSpam, $folder, $relocationMinSpamScore);

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
        $output['active'] = $this->active;
        $output['autoDeleteSpam'] = $this->autoDeleteSpam;
        $output['folder'] = ($this->folder)->value;
        $output['relocationMinSpamScore'] = $this->relocationMinSpamScore;

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
