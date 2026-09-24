<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\SpotlightFeedback;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\User\UserFeedbackSpotlightDecision;

class SpotlightFeedbackRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'decision' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.user.UserFeedbackSpotlightDecision',
            ],
            'message' => [
                'description' => 'Personal feedback message.',
                'maxLength' => 5000,
                'type' => 'string',
            ],
            'owner' => [
                'deprecated' => true,
                'description' => 'The Owner of the spotlight is no longer writable.',
                'type' => 'string',
            ],
        ],
        'required' => [
            'decision',
        ],
        'type' => 'object',
    ];

    private UserFeedbackSpotlightDecision $decision;

    /**
     * Personal feedback message.
     */
    private ?string $message = null;

    /**
     * The Owner of the spotlight is no longer writable.
     *
     * @deprecated
     */
    private ?string $owner = null;

    public function __construct(UserFeedbackSpotlightDecision $decision)
    {
        $this->decision = $decision;
    }

    public function getDecision(): UserFeedbackSpotlightDecision
    {
        return $this->decision;
    }

    public function getMessage(): ?string
    {
        return $this->message ?? null;
    }

    /**
     * @deprecated
     */
    public function getOwner(): ?string
    {
        return $this->owner ?? null;
    }

    public function withDecision(UserFeedbackSpotlightDecision $decision): self
    {
        $clone = clone $this;
        $clone->decision = $decision;

        return $clone;
    }

    public function withMessage(string $message): self
    {
        $validator = new Validator();
        $validator->validate($message, self::$internalValidationSchema['properties']['message']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->message = $message;

        return $clone;
    }

    public function withoutMessage(): self
    {
        $clone = clone $this;
        unset($clone->message);

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

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return SpotlightFeedbackRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): SpotlightFeedbackRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $decision = UserFeedbackSpotlightDecision::from($input->{'decision'});
        $message = null;
        if (isset($input->{'message'})) {
            $message = $input->{'message'};
        }
        $owner = null;
        if (isset($input->{'owner'})) {
            $owner = $input->{'owner'};
        }

        $obj = new self($decision);
        $obj->message = $message;
        $obj->owner = $owner;
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
        $output['decision'] = $this->decision->value;
        if (isset($this->message)) {
            $output['message'] = $this->message;
        }
        if (isset($this->owner)) {
            $output['owner'] = $this->owner;
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
