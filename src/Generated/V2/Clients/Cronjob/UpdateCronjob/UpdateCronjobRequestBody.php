<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Cronjob\UpdateCronjob;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Cronjob\CronjobCommand;
use Mittwald\ApiClient\Generated\V2\Schemas\Cronjob\CronjobUrl;

class UpdateCronjobRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'active' => [
                'type' => 'boolean',
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
            'timeout' => [
                'maximum' => 86400,
                'minimum' => 1,
                'type' => 'number',
            ],
        ],
        'type' => 'object',
    ];

    private ?bool $active = null;

    private ?string $description = null;

    private CronjobUrl|CronjobCommand|null $destination = null;

    private ?string $email = null;

    private ?string $interval = null;

    private int|float|null $timeout = null;

    /**
     *
     */
    public function __construct()
    {
    }

    public function getActive(): ?bool
    {
        return $this->active ?? null;
    }

    public function getDescription(): ?string
    {
        return $this->description ?? null;
    }

    /**
     * @return
     * \Mittwald\ApiClient\Generated\V2\Schemas\Cronjob\CronjobUrl|\Mittwald\ApiClient\Generated\V2\Schemas\Cronjob\CronjobCommand|null
     */
    public function getDestination(): CronjobCommand|CronjobUrl|null
    {
        return $this->destination;
    }

    public function getEmail(): ?string
    {
        return $this->email ?? null;
    }

    public function getInterval(): ?string
    {
        return $this->interval ?? null;
    }

    public function getTimeout(): int|float|null
    {
        return $this->timeout;
    }

    public function withActive(bool $active): self
    {
        $validator = new Validator();
        $validator->validate($active, static::$schema['properties']['active']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->active = $active;

        return $clone;
    }

    public function withoutActive(): self
    {
        $clone = clone $this;
        unset($clone->active);

        return $clone;
    }

    public function withDescription(string $description): self
    {
        $validator = new Validator();
        $validator->validate($description, static::$schema['properties']['description']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->description = $description;

        return $clone;
    }

    public function withoutDescription(): self
    {
        $clone = clone $this;
        unset($clone->description);

        return $clone;
    }

    /**
     * @param CronjobUrl|CronjobCommand $destination
     */
    public function withDestination(CronjobCommand|CronjobUrl $destination): self
    {
        $clone = clone $this;
        $clone->destination = $destination;

        return $clone;
    }

    public function withoutDestination(): self
    {
        $clone = clone $this;
        unset($clone->destination);

        return $clone;
    }

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

    public function withoutEmail(): self
    {
        $clone = clone $this;
        unset($clone->email);

        return $clone;
    }

    public function withInterval(string $interval): self
    {
        $validator = new Validator();
        $validator->validate($interval, static::$schema['properties']['interval']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->interval = $interval;

        return $clone;
    }

    public function withoutInterval(): self
    {
        $clone = clone $this;
        unset($clone->interval);

        return $clone;
    }

    /**
     * @param int|float $timeout
     */
    public function withTimeout(int|float $timeout): self
    {
        $validator = new Validator();
        $validator->validate($timeout, static::$schema['properties']['timeout']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->timeout = $timeout;

        return $clone;
    }

    public function withoutTimeout(): self
    {
        $clone = clone $this;
        unset($clone->timeout);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return UpdateCronjobRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): UpdateCronjobRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $active = null;
        if (isset($input->{'active'})) {
            $active = (bool)($input->{'active'});
        }
        $description = null;
        if (isset($input->{'description'})) {
            $description = $input->{'description'};
        }
        $destination = null;
        if (isset($input->{'destination'})) {
            $destination = match (true) {
                CronjobUrl::validateInput($input->{'destination'}, true) => CronjobUrl::buildFromInput($input->{'destination'}, validate: $validate),
                CronjobCommand::validateInput($input->{'destination'}, true) => CronjobCommand::buildFromInput($input->{'destination'}, validate: $validate),
            };
        }
        $email = null;
        if (isset($input->{'email'})) {
            $email = $input->{'email'};
        }
        $interval = null;
        if (isset($input->{'interval'})) {
            $interval = $input->{'interval'};
        }
        $timeout = null;
        if (isset($input->{'timeout'})) {
            $timeout = str_contains((string)($input->{'timeout'}), '.') ? (float)($input->{'timeout'}) : (int)($input->{'timeout'});
        }

        $obj = new self();
        $obj->active = $active;
        $obj->description = $description;
        $obj->destination = $destination;
        $obj->email = $email;
        $obj->interval = $interval;
        $obj->timeout = $timeout;
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
        if (isset($this->active)) {
            $output['active'] = $this->active;
        }
        if (isset($this->description)) {
            $output['description'] = $this->description;
        }
        if (isset($this->destination)) {
            $output['destination'] = match (true) {
                ($this->destination) instanceof CronjobUrl, ($this->destination) instanceof CronjobCommand => $this->destination->toJson(),
            };
        }
        if (isset($this->email)) {
            $output['email'] = $this->email;
        }
        if (isset($this->interval)) {
            $output['interval'] = $this->interval;
        }
        if (isset($this->timeout)) {
            $output['timeout'] = $this->timeout;
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
        if (isset($this->destination)) {
            $this->destination = match (true) {
                ($this->destination) instanceof CronjobUrl, ($this->destination) instanceof CronjobCommand => $this->destination,
            };
        }
    }
}
