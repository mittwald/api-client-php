<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\DeleteUser;

use InvalidArgumentException;
use JsonSchema\Validator;

class DeleteUserConflictResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'info' => [
                'description' => 'A json object, given further information about the error',
                'example' => [
                    'customerId' => 'xyz',
                ],
                'type' => 'object',
            ],
            'message' => [
                'description' => 'more information about the error',
                'example' => 'The user cannot be removed because it is the last owner of the customer with the id \'xyz\'',
                'type' => 'string',
            ],
            'name' => [
                'example' => 'RemovingLastOwnerNotAllowedError',
                'type' => 'string',
            ],
        ],
        'required' => [
            'name',
            'message',
        ],
        'type' => 'object',
    ];

    /**
     * A json object, given further information about the error
     */
    private ?DeleteUserConflictResponseBodyInfo $info = null;

    /**
     * more information about the error
     */
    private string $message;

    private string $name;

    public function __construct(string $message, string $name)
    {
        $this->message = $message;
        $this->name = $name;
    }

    public function getInfo(): ?DeleteUserConflictResponseBodyInfo
    {
        return $this->info ?? null;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function withInfo(DeleteUserConflictResponseBodyInfo $info): self
    {
        $clone = clone $this;
        $clone->info = $info;

        return $clone;
    }

    public function withoutInfo(): self
    {
        $clone = clone $this;
        unset($clone->info);

        return $clone;
    }

    public function withMessage(string $message): self
    {
        $validator = new Validator();
        $validator->validate($message, self::$schema['properties']['message']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->message = $message;

        return $clone;
    }

    public function withName(string $name): self
    {
        $validator = new Validator();
        $validator->validate($name, self::$schema['properties']['name']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->name = $name;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return DeleteUserConflictResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): DeleteUserConflictResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $info = null;
        if (isset($input->{'info'})) {
            $info = DeleteUserConflictResponseBodyInfo::buildFromInput($input->{'info'}, validate: $validate);
        }
        $message = $input->{'message'};
        $name = $input->{'name'};

        $obj = new self($message, $name);
        $obj->info = $info;
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
        if (isset($this->info)) {
            $output['info'] = ($this->info)->toJson();
        }
        $output['message'] = $this->message;
        $output['name'] = $this->name;

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
        if (isset($this->info)) {
            $this->info = clone $this->info;
        }
    }
}
