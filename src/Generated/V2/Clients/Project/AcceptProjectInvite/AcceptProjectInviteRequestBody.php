<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Project\AcceptProjectInvite;

use InvalidArgumentException;
use JsonSchema\Validator;

class AcceptProjectInviteRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'invitationToken' => [
                'description' => 'Token contained in the invite for authentication.',
                'type' => 'string',
            ],
        ],
        'type' => 'object',
    ];

    /**
     * Token contained in the invite for authentication.
     */
    private ?string $invitationToken = null;

    /**
     *
     */
    public function __construct()
    {
    }

    public function getInvitationToken(): ?string
    {
        return $this->invitationToken ?? null;
    }

    public function withInvitationToken(string $invitationToken): self
    {
        $validator = new Validator();
        $validator->validate($invitationToken, self::$internalValidationSchema['properties']['invitationToken']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->invitationToken = $invitationToken;

        return $clone;
    }

    public function withoutInvitationToken(): self
    {
        $clone = clone $this;
        unset($clone->invitationToken);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return AcceptProjectInviteRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): AcceptProjectInviteRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $invitationToken = null;
        if (isset($input->{'invitationToken'})) {
            $invitationToken = $input->{'invitationToken'};
        }

        $obj = new self();
        $obj->invitationToken = $invitationToken;
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
        if (isset($this->invitationToken)) {
            $output['invitationToken'] = $this->invitationToken;
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
