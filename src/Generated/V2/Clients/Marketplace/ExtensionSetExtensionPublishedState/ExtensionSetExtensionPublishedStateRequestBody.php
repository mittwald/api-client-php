<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionSetExtensionPublishedState;

use InvalidArgumentException;
use JsonSchema\Validator;

class ExtensionSetExtensionPublishedStateRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'published' => [
                'default' => true,
                'description' => 'Whether the extension should be publicly visible.',
                'type' => 'boolean',
            ],
            'reason' => [
                'description' => 'When setting withdrawing an extension a reason is required.',
                'type' => 'string',
            ],
        ],
        'required' => [
            'published',
        ],
        'type' => 'object',
    ];

    /**
     * Whether the extension should be publicly visible.
     */
    private bool $published = true;

    /**
     * When setting withdrawing an extension a reason is required.
     */
    private ?string $reason = null;

    /**
     *
     */
    public function __construct()
    {
    }

    public function getPublished(): bool
    {
        return $this->published;
    }

    public function getReason(): ?string
    {
        return $this->reason ?? null;
    }

    public function withPublished(bool $published): self
    {
        $validator = new Validator();
        $validator->validate($published, self::$schema['properties']['published']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->published = $published;

        return $clone;
    }

    public function withReason(string $reason): self
    {
        $validator = new Validator();
        $validator->validate($reason, self::$schema['properties']['reason']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->reason = $reason;

        return $clone;
    }

    public function withoutReason(): self
    {
        $clone = clone $this;
        unset($clone->reason);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ExtensionSetExtensionPublishedStateRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ExtensionSetExtensionPublishedStateRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $published = true;
        if (isset($input->{'published'})) {
            $published = (bool)($input->{'published'});
        }
        $reason = null;
        if (isset($input->{'reason'})) {
            $reason = $input->{'reason'};
        }

        $obj = new self();
        $obj->published = $published;
        $obj->reason = $reason;
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
        $output['published'] = $this->published;
        if (isset($this->reason)) {
            $output['reason'] = $this->reason;
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
