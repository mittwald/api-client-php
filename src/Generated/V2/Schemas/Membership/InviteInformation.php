<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Membership;

use InvalidArgumentException;

class InviteInformation
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'invitationToken' => [
                'description' => 'Token for authentication purposes.',
                'type' => 'string',
            ],
            'invitedBy' => [
                'description' => 'ID of the user that created the invite.',
                'format' => 'uuid',
                'type' => 'string',
            ],
            'userId' => [
                'description' => 'ID of the user this invite is for.',
                'format' => 'uuid',
                'type' => 'string',
            ],
        ],
        'required' => [
            'userId',
            'invitationToken',
            'invitedBy',
        ],
        'type' => 'object',
    ];

    /**
     * Token for authentication purposes.
     *
     * @var string
     */
    private string $invitationToken;

    /**
     * ID of the user that created the invite.
     *
     * @var string
     */
    private string $invitedBy;

    /**
     * ID of the user this invite is for.
     *
     * @var string
     */
    private string $userId;

    /**
     * @param string $invitationToken
     * @param string $invitedBy
     * @param string $userId
     */
    public function __construct(string $invitationToken, string $invitedBy, string $userId)
    {
        $this->invitationToken = $invitationToken;
        $this->invitedBy = $invitedBy;
        $this->userId = $userId;
    }

    /**
     * @return string
     */
    public function getInvitationToken(): string
    {
        return $this->invitationToken;
    }

    /**
     * @return string
     */
    public function getInvitedBy(): string
    {
        return $this->invitedBy;
    }

    /**
     * @return string
     */
    public function getUserId(): string
    {
        return $this->userId;
    }

    /**
     * @param string $invitationToken
     * @return self
     */
    public function withInvitationToken(string $invitationToken): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($invitationToken, static::$schema['properties']['invitationToken']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->invitationToken = $invitationToken;

        return $clone;
    }

    /**
     * @param string $invitedBy
     * @return self
     */
    public function withInvitedBy(string $invitedBy): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($invitedBy, static::$schema['properties']['invitedBy']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->invitedBy = $invitedBy;

        return $clone;
    }

    /**
     * @param string $userId
     * @return self
     */
    public function withUserId(string $userId): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($userId, static::$schema['properties']['userId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->userId = $userId;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return InviteInformation Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): InviteInformation
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $invitationToken = $input->{'invitationToken'};
        $invitedBy = $input->{'invitedBy'};
        $userId = $input->{'userId'};

        $obj = new self($invitationToken, $invitedBy, $userId);

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
        $output['invitationToken'] = $this->invitationToken;
        $output['invitedBy'] = $this->invitedBy;
        $output['userId'] = $this->userId;

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
    }
}
