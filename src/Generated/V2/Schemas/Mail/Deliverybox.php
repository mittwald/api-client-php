<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Mail;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.mail.Deliverybox.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class Deliverybox
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'authenticationEnabled' => [
                'type' => 'boolean',
            ],
            'description' => [
                'type' => 'string',
            ],
            'id' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'name' => [
                'type' => 'string',
            ],
            'passwordUpdatedAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'projectId' => [
                'type' => 'string',
            ],
            'sendingEnabled' => [
                'type' => 'boolean',
            ],
            'updatedAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
        ],
        'required' => [
            'id',
            'name',
            'projectId',
            'description',
            'authenticationEnabled',
            'sendingEnabled',
            'passwordUpdatedAt',
            'updatedAt',
        ],
        'type' => 'object',
    ];

    private bool $authenticationEnabled;

    private string $description;

    private string $id;

    private string $name;

    private DateTime $passwordUpdatedAt;

    private string $projectId;

    private bool $sendingEnabled;

    private DateTime $updatedAt;

    public function __construct(bool $authenticationEnabled, string $description, string $id, string $name, DateTime $passwordUpdatedAt, string $projectId, bool $sendingEnabled, DateTime $updatedAt)
    {
        $this->authenticationEnabled = $authenticationEnabled;
        $this->description = $description;
        $this->id = $id;
        $this->name = $name;
        $this->passwordUpdatedAt = $passwordUpdatedAt;
        $this->projectId = $projectId;
        $this->sendingEnabled = $sendingEnabled;
        $this->updatedAt = $updatedAt;
    }

    public function getAuthenticationEnabled(): bool
    {
        return $this->authenticationEnabled;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPasswordUpdatedAt(): DateTime
    {
        return $this->passwordUpdatedAt;
    }

    public function getProjectId(): string
    {
        return $this->projectId;
    }

    public function getSendingEnabled(): bool
    {
        return $this->sendingEnabled;
    }

    public function getUpdatedAt(): DateTime
    {
        return $this->updatedAt;
    }

    public function withAuthenticationEnabled(bool $authenticationEnabled): self
    {
        $validator = new Validator();
        $validator->validate($authenticationEnabled, self::$schema['properties']['authenticationEnabled']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->authenticationEnabled = $authenticationEnabled;

        return $clone;
    }

    public function withDescription(string $description): self
    {
        $validator = new Validator();
        $validator->validate($description, self::$schema['properties']['description']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->description = $description;

        return $clone;
    }

    public function withId(string $id): self
    {
        $validator = new Validator();
        $validator->validate($id, self::$schema['properties']['id']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->id = $id;

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

    public function withPasswordUpdatedAt(DateTime $passwordUpdatedAt): self
    {
        $clone = clone $this;
        $clone->passwordUpdatedAt = $passwordUpdatedAt;

        return $clone;
    }

    public function withProjectId(string $projectId): self
    {
        $validator = new Validator();
        $validator->validate($projectId, self::$schema['properties']['projectId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->projectId = $projectId;

        return $clone;
    }

    public function withSendingEnabled(bool $sendingEnabled): self
    {
        $validator = new Validator();
        $validator->validate($sendingEnabled, self::$schema['properties']['sendingEnabled']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->sendingEnabled = $sendingEnabled;

        return $clone;
    }

    public function withUpdatedAt(DateTime $updatedAt): self
    {
        $clone = clone $this;
        $clone->updatedAt = $updatedAt;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return Deliverybox Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): Deliverybox
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $authenticationEnabled = (bool)($input->{'authenticationEnabled'});
        $description = $input->{'description'};
        $id = $input->{'id'};
        $name = $input->{'name'};
        $passwordUpdatedAt = new DateTime($input->{'passwordUpdatedAt'});
        $projectId = $input->{'projectId'};
        $sendingEnabled = (bool)($input->{'sendingEnabled'});
        $updatedAt = new DateTime($input->{'updatedAt'});

        $obj = new self($authenticationEnabled, $description, $id, $name, $passwordUpdatedAt, $projectId, $sendingEnabled, $updatedAt);

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
        $output['authenticationEnabled'] = $this->authenticationEnabled;
        $output['description'] = $this->description;
        $output['id'] = $this->id;
        $output['name'] = $this->name;
        $output['passwordUpdatedAt'] = ($this->passwordUpdatedAt)->format(DateTime::ATOM);
        $output['projectId'] = $this->projectId;
        $output['sendingEnabled'] = $this->sendingEnabled;
        $output['updatedAt'] = ($this->updatedAt)->format(DateTime::ATOM);

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
        $this->passwordUpdatedAt = clone $this->passwordUpdatedAt;
        $this->updatedAt = clone $this->updatedAt;
    }
}
