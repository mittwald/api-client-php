<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Conversation;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.conversation.ConversationPreferences.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class ConversationPreferences
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'customerId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'preferredUsers' => [
                'properties' => [
                    'categoryUserPairs' => [
                        'additionalProperties' => [
                            'format' => 'uuid',
                            'type' => 'string',
                        ],
                        'type' => 'object',
                    ],
                    'fallback' => [
                        'format' => 'uuid',
                        'type' => 'string',
                    ],
                ],
                'type' => 'object',
            ],
        ],
        'required' => [
            'customerId',
            'preferredUsers',
        ],
        'type' => 'object',
    ];

    private string $customerId;

    private ConversationPreferencesPreferredUsers $preferredUsers;

    public function __construct(string $customerId, ConversationPreferencesPreferredUsers $preferredUsers)
    {
        $this->customerId = $customerId;
        $this->preferredUsers = $preferredUsers;
    }

    public function getCustomerId(): string
    {
        return $this->customerId;
    }

    public function getPreferredUsers(): ConversationPreferencesPreferredUsers
    {
        return $this->preferredUsers;
    }

    public function withCustomerId(string $customerId): self
    {
        $validator = new Validator();
        $validator->validate($customerId, self::$schema['properties']['customerId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->customerId = $customerId;

        return $clone;
    }

    public function withPreferredUsers(ConversationPreferencesPreferredUsers $preferredUsers): self
    {
        $clone = clone $this;
        $clone->preferredUsers = $preferredUsers;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ConversationPreferences Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ConversationPreferences
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $customerId = $input->{'customerId'};
        $preferredUsers = ConversationPreferencesPreferredUsers::buildFromInput($input->{'preferredUsers'}, validate: $validate);

        $obj = new self($customerId, $preferredUsers);

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
        $output['customerId'] = $this->customerId;
        $output['preferredUsers'] = ($this->preferredUsers)->toJson();

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
        $this->preferredUsers = clone $this->preferredUsers;
    }
}
