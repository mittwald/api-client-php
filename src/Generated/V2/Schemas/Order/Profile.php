<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Order;

use InvalidArgumentException;
use JsonSchema\Validator;

class Profile
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'email' => [
                'format' => 'email',
                'type' => 'string',
            ],
            'first_name' => [
                'example' => 'Ada',
                'type' => 'string',
            ],
            'last_name' => [
                'example' => 'Lovelace',
                'type' => 'string',
            ],
            'title' => [
                'description' => 'the users title',
                'enum' => [
                    'other',
                    'mr',
                    'ms',
                ],
                'type' => 'string',
            ],
            'userId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
        ],
        'required' => [
            'userId',
            'email',
        ],
        'type' => 'object',
    ];

    /**
     * @var string
     */
    private string $email;

    /**
     * @var string|null
     */
    private ?string $first_name = null;

    /**
     * @var string|null
     */
    private ?string $last_name = null;

    /**
     * the users title
     *
     * @var ProfileTitle|null
     */
    private ?ProfileTitle $title = null;

    /**
     * @var string
     */
    private string $userId;

    /**
     * @param string $email
     * @param string $userId
     */
    public function __construct(string $email, string $userId)
    {
        $this->email = $email;
        $this->userId = $userId;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->first_name ?? null;
    }

    /**
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->last_name ?? null;
    }

    /**
     * @return ProfileTitle|null
     */
    public function getTitle(): ?ProfileTitle
    {
        return $this->title ?? null;
    }

    /**
     * @return string
     */
    public function getUserId(): string
    {
        return $this->userId;
    }

    /**
     * @param string $email
     * @return self
     */
    public function withEmail(string $email): self
    {
        $validator = new Validator();
        $validator->validate($email, static::$schema['properties']['email']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->email = $email;

        return $clone;
    }

    /**
     * @param string $first_name
     * @return self
     */
    public function withFirstName(string $first_name): self
    {
        $validator = new Validator();
        $validator->validate($first_name, static::$schema['properties']['first_name']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->first_name = $first_name;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutFirstName(): self
    {
        $clone = clone $this;
        unset($clone->first_name);

        return $clone;
    }

    /**
     * @param string $last_name
     * @return self
     */
    public function withLastName(string $last_name): self
    {
        $validator = new Validator();
        $validator->validate($last_name, static::$schema['properties']['last_name']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->last_name = $last_name;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutLastName(): self
    {
        $clone = clone $this;
        unset($clone->last_name);

        return $clone;
    }

    /**
     * @param ProfileTitle $title
     * @return self
     */
    public function withTitle(ProfileTitle $title): self
    {
        $clone = clone $this;
        $clone->title = $title;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutTitle(): self
    {
        $clone = clone $this;
        unset($clone->title);

        return $clone;
    }

    /**
     * @param string $userId
     * @return self
     */
    public function withUserId(string $userId): self
    {
        $validator = new Validator();
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
     * @return Profile Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): Profile
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $email = $input->{'email'};
        $first_name = null;
        if (isset($input->{'first_name'})) {
            $first_name = $input->{'first_name'};
        }
        $last_name = null;
        if (isset($input->{'last_name'})) {
            $last_name = $input->{'last_name'};
        }
        $title = null;
        if (isset($input->{'title'})) {
            $title = ProfileTitle::from($input->{'title'});
        }
        $userId = $input->{'userId'};

        $obj = new self($email, $userId);
        $obj->first_name = $first_name;
        $obj->last_name = $last_name;
        $obj->title = $title;
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
        $output['email'] = $this->email;
        if (isset($this->first_name)) {
            $output['first_name'] = $this->first_name;
        }
        if (isset($this->last_name)) {
            $output['last_name'] = $this->last_name;
        }
        if (isset($this->title)) {
            $output['title'] = ($this->title)->value;
        }
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
