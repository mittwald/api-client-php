<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Cronjob;

use InvalidArgumentException;

class CronjobRequest
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'active' => [
                'type' => 'boolean',
            ],
            'appId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'description' => [
                'example' => 'i am a cronjob',
                'type' => 'string',
            ],
            'destination' => [
                'oneOf' => [
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.cronjob.CronjobUrl',
                    ],
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.cronjob.CronjobCommand',
                    ],
                ],
            ],
            'email' => [
                'format' => 'email',
                'type' => 'string',
            ],
            'interval' => [
                'example' => '*/5 * * * *',
                'type' => 'string',
            ],
        ],
        'required' => [
            'appId',
            'description',
            'destination',
            'interval',
            'active',
        ],
        'type' => 'object',
    ];

    /**
     * @var bool
     */
    private bool $active;

    /**
     * @var string
     */
    private string $appId;

    /**
     * @var string
     */
    private string $description;

    /**
     * @var CronjobUrl|CronjobCommand
     */
    private CronjobUrl|CronjobCommand $destination;

    /**
     * @var string|null
     */
    private ?string $email = null;

    /**
     * @var string
     */
    private string $interval;

    /**
     * @param bool $active
     * @param string $appId
     * @param string $description
     * @param CronjobUrl|CronjobCommand $destination
     * @param string $interval
     */
    public function __construct(bool $active, string $appId, string $description, CronjobCommand|CronjobUrl $destination, string $interval)
    {
        $this->active = $active;
        $this->appId = $appId;
        $this->description = $description;
        $this->destination = $destination;
        $this->interval = $interval;
    }

    /**
     * @return bool
     */
    public function getActive(): bool
    {
        return $this->active;
    }

    /**
     * @return string
     */
    public function getAppId(): string
    {
        return $this->appId;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return
     * CronjobUrl|CronjobCommand
     */
    public function getDestination(): CronjobCommand|CronjobUrl
    {
        return $this->destination;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email ?? null;
    }

    /**
     * @return string
     */
    public function getInterval(): string
    {
        return $this->interval;
    }

    /**
     * @param bool $active
     * @return self
     */
    public function withActive(bool $active): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($active, static::$schema['properties']['active']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->active = $active;

        return $clone;
    }

    /**
     * @param string $appId
     * @return self
     */
    public function withAppId(string $appId): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($appId, static::$schema['properties']['appId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->appId = $appId;

        return $clone;
    }

    /**
     * @param string $description
     * @return self
     */
    public function withDescription(string $description): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($description, static::$schema['properties']['description']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->description = $description;

        return $clone;
    }

    /**
     * @param CronjobUrl|CronjobCommand $destination
     * @return self
     */
    public function withDestination(CronjobCommand|CronjobUrl $destination): self
    {
        $clone = clone $this;
        $clone->destination = $destination;

        return $clone;
    }

    /**
     * @param string $email
     * @return self
     */
    public function withEmail(string $email): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($email, static::$schema['properties']['email']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->email = $email;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutEmail(): self
    {
        $clone = clone $this;
        unset($clone->email);

        return $clone;
    }

    /**
     * @param string $interval
     * @return self
     */
    public function withInterval(string $interval): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($interval, static::$schema['properties']['interval']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->interval = $interval;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CronjobRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CronjobRequest
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $active = (bool)($input->{'active'});
        $appId = $input->{'appId'};
        $description = $input->{'description'};
        $destination = match (true) {
            CronjobUrl::validateInput($input->{'destination'}, true) => CronjobUrl::buildFromInput($input->{'destination'}, validate: $validate),
            CronjobCommand::validateInput($input->{'destination'}, true) => CronjobCommand::buildFromInput($input->{'destination'}, validate: $validate),
        };
        $email = null;
        if (isset($input->{'email'})) {
            $email = $input->{'email'};
        }
        $interval = $input->{'interval'};

        $obj = new self($active, $appId, $description, $destination, $interval);
        $obj->email = $email;
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
        $output['active'] = $this->active;
        $output['appId'] = $this->appId;
        $output['description'] = $this->description;
        $output['destination'] = match (true) {
            ($this->destination) instanceof CronjobUrl, ($this->destination) instanceof CronjobCommand => $this->destination->toJson(),
        };
        if (isset($this->email)) {
            $output['email'] = $this->email;
        }
        $output['interval'] = $this->interval;

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
        $this->destination = match (true) {
            ($this->destination) instanceof CronjobUrl, ($this->destination) instanceof CronjobCommand => $this->destination,
        };
    }
}
