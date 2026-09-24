<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\GetSpotlightInfo;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\User\UserFeedbackSpotlightDecision;

class GetSpotlightInfoOKResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'acknowledged' => [
                'type' => 'boolean',
            ],
            'decision' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.user.UserFeedbackSpotlightDecision',
            ],
            'spotlightId' => [
                'type' => 'string',
            ],
            'used' => [
                'type' => 'boolean',
            ],
        ],
        'required' => [
            'spotlightId',
            'used',
            'acknowledged',
        ],
        'type' => 'object',
    ];

    private bool $acknowledged;

    private ?UserFeedbackSpotlightDecision $decision = null;

    private string $spotlightId;

    private bool $used;

    public function __construct(bool $acknowledged, string $spotlightId, bool $used)
    {
        $this->acknowledged = $acknowledged;
        $this->spotlightId = $spotlightId;
        $this->used = $used;
    }

    public function getAcknowledged(): bool
    {
        return $this->acknowledged;
    }

    public function getDecision(): ?UserFeedbackSpotlightDecision
    {
        return $this->decision ?? null;
    }

    public function getSpotlightId(): string
    {
        return $this->spotlightId;
    }

    public function getUsed(): bool
    {
        return $this->used;
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

    public function withDecision(UserFeedbackSpotlightDecision $decision): self
    {
        $clone = clone $this;
        $clone->decision = $decision;

        return $clone;
    }

    public function withoutDecision(): self
    {
        $clone = clone $this;
        unset($clone->decision);

        return $clone;
    }

    public function withSpotlightId(string $spotlightId): self
    {
        $validator = new Validator();
        $validator->validate($spotlightId, self::$internalValidationSchema['properties']['spotlightId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->spotlightId = $spotlightId;

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

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return GetSpotlightInfoOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): GetSpotlightInfoOKResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $acknowledged = (bool)($input->{'acknowledged'});
        $decision = null;
        if (isset($input->{'decision'})) {
            $decision = (UserFeedbackSpotlightDecision::tryFrom($input->{'decision'}) ?? UserFeedbackSpotlightDecision::unknown);
        }
        $spotlightId = $input->{'spotlightId'};
        $used = (bool)($input->{'used'});

        $obj = new self($acknowledged, $spotlightId, $used);
        $obj->decision = $decision;
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
        $output['acknowledged'] = $this->acknowledged;
        if (isset($this->decision)) {
            $output['decision'] = $this->decision->value;
        }
        $output['spotlightId'] = $this->spotlightId;
        $output['used'] = $this->used;

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
