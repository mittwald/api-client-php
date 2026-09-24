<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\SpotlightUsage;

use InvalidArgumentException;
use JsonSchema\Validator;

class SpotlightUsageRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'acknowledged' => [
                'type' => 'boolean',
            ],
            'owner' => [
                'deprecated' => true,
                'description' => 'The Owner of the Feature the spotlight is highlighting.',
                'type' => 'string',
            ],
            'used' => [
                'type' => 'boolean',
            ],
        ],
        'required' => [

        ],
        'type' => 'object',
    ];

    private ?bool $acknowledged = null;

    /**
     * The Owner of the Feature the spotlight is highlighting.
     *
     * @deprecated
     */
    private ?string $owner = null;

    private ?bool $used = null;

    /**
     *
     */
    public function __construct()
    {
    }

    public function getAcknowledged(): ?bool
    {
        return $this->acknowledged ?? null;
    }

    /**
     * @deprecated
     */
    public function getOwner(): ?string
    {
        return $this->owner ?? null;
    }

    public function getUsed(): ?bool
    {
        return $this->used ?? null;
    }

    public function withAcknowledged(bool $acknowledged): self
    {
        $validator = new Validator();
        $validator->validate($acknowledged, self::$internalValidationSchema['properties']['acknowledged']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->acknowledged = $acknowledged;

        return $clone;
    }

    public function withoutAcknowledged(): self
    {
        $clone = clone $this;
        unset($clone->acknowledged);

        return $clone;
    }

    /**
     * @deprecated
     */
    public function withOwner(string $owner): self
    {
        $validator = new Validator();
        $validator->validate($owner, self::$internalValidationSchema['properties']['owner']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->owner = $owner;

        return $clone;
    }

    public function withoutOwner(): self
    {
        $clone = clone $this;
        unset($clone->owner);

        return $clone;
    }

    public function withUsed(bool $used): self
    {
        $validator = new Validator();
        $validator->validate($used, self::$internalValidationSchema['properties']['used']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->used = $used;

        return $clone;
    }

    public function withoutUsed(): self
    {
        $clone = clone $this;
        unset($clone->used);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return SpotlightUsageRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): SpotlightUsageRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $acknowledged = null;
        if (isset($input->{'acknowledged'})) {
            $acknowledged = (bool)($input->{'acknowledged'});
        }
        $owner = null;
        if (isset($input->{'owner'})) {
            $owner = $input->{'owner'};
        }
        $used = null;
        if (isset($input->{'used'})) {
            $used = (bool)($input->{'used'});
        }

        $obj = new self();
        $obj->acknowledged = $acknowledged;
        $obj->owner = $owner;
        $obj->used = $used;
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
        if (isset($this->acknowledged)) {
            $output['acknowledged'] = $this->acknowledged;
        }
        if (isset($this->owner)) {
            $output['owner'] = $this->owner;
        }
        if (isset($this->used)) {
            $output['used'] = $this->used;
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
        $validator->validate($input, self::$internalValidationSchema);

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
