<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain\CheckAuthinfo2;

use InvalidArgumentException;
use JsonSchema\Validator;

class CheckAuthinfo2OKResponseBodyReasons
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'alreadyManaged' => [
                'description' => 'The domain is already managed by mittwald; no AuthInfo2 is needed.',
                'type' => 'boolean',
            ],
            'notRegistered' => [
                'description' => 'The domain is not registered at DENIC.',
                'type' => 'boolean',
            ],
            'recentlyTriggered' => [
                'description' => 'An AuthInfo2 was requested for this domain within the last 30 days.',
                'type' => 'boolean',
            ],
        ],
        'required' => [
            'notRegistered',
            'alreadyManaged',
            'recentlyTriggered',
        ],
        'type' => 'object',
    ];

    /**
     * The domain is already managed by mittwald; no AuthInfo2 is needed.
     */
    private bool $alreadyManaged;

    /**
     * The domain is not registered at DENIC.
     */
    private bool $notRegistered;

    /**
     * An AuthInfo2 was requested for this domain within the last 30 days.
     */
    private bool $recentlyTriggered;

    public function __construct(bool $alreadyManaged, bool $notRegistered, bool $recentlyTriggered)
    {
        $this->alreadyManaged = $alreadyManaged;
        $this->notRegistered = $notRegistered;
        $this->recentlyTriggered = $recentlyTriggered;
    }

    public function getAlreadyManaged(): bool
    {
        return $this->alreadyManaged;
    }

    public function getNotRegistered(): bool
    {
        return $this->notRegistered;
    }

    public function getRecentlyTriggered(): bool
    {
        return $this->recentlyTriggered;
    }

    public function withAlreadyManaged(bool $alreadyManaged): self
    {
        $validator = new Validator();
        $validator->validate($alreadyManaged, self::$internalValidationSchema['properties']['alreadyManaged']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->alreadyManaged = $alreadyManaged;

        return $clone;
    }

    public function withNotRegistered(bool $notRegistered): self
    {
        $validator = new Validator();
        $validator->validate($notRegistered, self::$internalValidationSchema['properties']['notRegistered']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->notRegistered = $notRegistered;

        return $clone;
    }

    public function withRecentlyTriggered(bool $recentlyTriggered): self
    {
        $validator = new Validator();
        $validator->validate($recentlyTriggered, self::$internalValidationSchema['properties']['recentlyTriggered']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->recentlyTriggered = $recentlyTriggered;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CheckAuthinfo2OKResponseBodyReasons Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CheckAuthinfo2OKResponseBodyReasons
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $alreadyManaged = (bool)($input->{'alreadyManaged'});
        $notRegistered = (bool)($input->{'notRegistered'});
        $recentlyTriggered = (bool)($input->{'recentlyTriggered'});

        $obj = new self($alreadyManaged, $notRegistered, $recentlyTriggered);

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
        $output['alreadyManaged'] = $this->alreadyManaged;
        $output['notRegistered'] = $this->notRegistered;
        $output['recentlyTriggered'] = $this->recentlyTriggered;

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
