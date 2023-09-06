<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Conversation;

use InvalidArgumentException;
use JsonSchema\Validator;

class StatusUpdateMeta
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'user' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.conversation.User',
            ],
        ],
        'type' => 'object',
    ];

    /**
     * @var User|null
     */
    private ?User $user = null;

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return User|null
     */
    public function getUser(): ?User
    {
        return $this->user ?? null;
    }

    /**
     * @param User $user
     * @return self
     */
    public function withUser(User $user): self
    {
        $clone = clone $this;
        $clone->user = $user;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutUser(): self
    {
        $clone = clone $this;
        unset($clone->user);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return StatusUpdateMeta Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): StatusUpdateMeta
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $user = null;
        if (isset($input->{'user'})) {
            $user = User::buildFromInput($input->{'user'}, validate: $validate);
        }

        $obj = new self();
        $obj->user = $user;
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
        if (isset($this->user)) {
            $output['user'] = $this->user->toJson();
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
