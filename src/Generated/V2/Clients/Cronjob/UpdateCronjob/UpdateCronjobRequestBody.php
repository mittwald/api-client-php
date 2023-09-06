<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Cronjob\UpdateCronjob;

use InvalidArgumentException;

class UpdateCronjobRequestBody
{
    public const method = 'patch';

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
        'type' => 'object',
    ];

    /**
     * @var bool|null
     */
    private ?bool $active = null;

    /**
     * @var string|null
     */
    private ?string $description = null;

    /**
     * @var \Mittwald\ApiClient\Generated\V2\Schemas\Cronjob\CronjobUrl|\Mittwald\ApiClient\Generated\V2\Schemas\Cronjob\CronjobCommand|null
     */
    private \Mittwald\ApiClient\Generated\V2\Schemas\Cronjob\CronjobUrl|\Mittwald\ApiClient\Generated\V2\Schemas\Cronjob\CronjobCommand|null $destination = null;

    /**
     * @var string|null
     */
    private ?string $email = null;

    /**
     * @var string|null
     */
    private ?string $interval = null;

    private array $headers = [

    ];

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return bool|null
     */
    public function getActive(): ?bool
    {
        return $this->active ?? null;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description ?? null;
    }

    /**
     * @return
     * \Mittwald\ApiClient\Generated\V2\Schemas\Cronjob\CronjobUrl|\Mittwald\ApiClient\Generated\V2\Schemas\Cronjob\CronjobCommand|null
     */
    public function getDestination(): \Mittwald\ApiClient\Generated\V2\Schemas\Cronjob\CronjobCommand|\Mittwald\ApiClient\Generated\V2\Schemas\Cronjob\CronjobUrl|null
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
     * @return string|null
     */
    public function getInterval(): ?string
    {
        return $this->interval ?? null;
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
     * @return self
     */
    public function withoutActive(): self
    {
        $clone = clone $this;
        unset($clone->active);

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
     * @return self
     */
    public function withoutDescription(): self
    {
        $clone = clone $this;
        unset($clone->description);

        return $clone;
    }

    /**
     * @param \Mittwald\ApiClient\Generated\V2\Schemas\Cronjob\CronjobUrl|\Mittwald\ApiClient\Generated\V2\Schemas\Cronjob\CronjobCommand $destination
     * @return self
     */
    public function withDestination(\Mittwald\ApiClient\Generated\V2\Schemas\Cronjob\CronjobCommand|\Mittwald\ApiClient\Generated\V2\Schemas\Cronjob\CronjobUrl $destination): self
    {
        $clone = clone $this;
        $clone->destination = $destination;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutDestination(): self
    {
        $clone = clone $this;
        unset($clone->destination);

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
     * @return self
     */
    public function withoutInterval(): self
    {
        $clone = clone $this;
        unset($clone->interval);

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
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
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
                \Mittwald\ApiClient\Generated\V2\Schemas\Cronjob\CronjobUrl::validateInput($input->{'destination'}, true) => \Mittwald\ApiClient\Generated\V2\Schemas\Cronjob\CronjobUrl::buildFromInput($input->{'destination'}, validate: $validate),
                \Mittwald\ApiClient\Generated\V2\Schemas\Cronjob\CronjobCommand::validateInput($input->{'destination'}, true) => \Mittwald\ApiClient\Generated\V2\Schemas\Cronjob\CronjobCommand::buildFromInput($input->{'destination'}, validate: $validate),
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

        $obj = new self();
        $obj->active = $active;
        $obj->description = $description;
        $obj->destination = $destination;
        $obj->email = $email;
        $obj->interval = $interval;
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
                ($this->destination) instanceof \Mittwald\ApiClient\Generated\V2\Schemas\Cronjob\CronjobUrl, ($this->destination) instanceof \Mittwald\ApiClient\Generated\V2\Schemas\Cronjob\CronjobCommand => $this->destination->toJson(),
            };
        }
        if (isset($this->email)) {
            $output['email'] = $this->email;
        }
        if (isset($this->interval)) {
            $output['interval'] = $this->interval;
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
        if (isset($this->destination)) {
            $this->destination = match (true) {
                ($this->destination) instanceof \Mittwald\ApiClient\Generated\V2\Schemas\Cronjob\CronjobUrl, ($this->destination) instanceof \Mittwald\ApiClient\Generated\V2\Schemas\Cronjob\CronjobCommand => $this->destination,
            };
        }
    }

    public function getUrl(): string
    {
        $mapped = $this->toJson();
        $cronjobId = urlencode($mapped['cronjobId']);
        return '/v2/cronjobs/' . $cronjobId;
    }

    public function getQuery(): array
    {
        $mapped = $this->toJson();
        $query = [];
        return $query;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function withHeader(string $name, string|array $value): self
    {
        $clone = clone $this;
        $clone->headers[$name] = $value;
        return $clone;
    }
}
