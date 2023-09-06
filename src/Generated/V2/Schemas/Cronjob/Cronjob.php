<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Cronjob;

use InvalidArgumentException;
use DateTime;

class Cronjob
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
            'createdAt' => [
                'format' => 'date-time',
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
            'id' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'interval' => [
                'example' => '*/5 * * * *',
                'type' => 'string',
            ],
            'latestExecution' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.cronjob.CronjobExecution',
            ],
            'nextExecutionTime' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'projectId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'shortId' => [
                'example' => 'cron-bd26li',
                'type' => 'string',
            ],
            'updatedAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
        ],
        'required' => [
            'id',
            'appId',
            'shortId',
            'interval',
            'active',
            'createdAt',
            'updatedAt',
            'description',
            'destination',
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
     * @var DateTime
     */
    private DateTime $createdAt;

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
    private string $id;

    /**
     * @var string
     */
    private string $interval;

    /**
     * @var CronjobExecution|null
     */
    private ?CronjobExecution $latestExecution = null;

    /**
     * @var DateTime|null
     */
    private ?DateTime $nextExecutionTime = null;

    /**
     * @var string|null
     */
    private ?string $projectId = null;

    /**
     * @var string
     */
    private string $shortId;

    /**
     * @var DateTime
     */
    private DateTime $updatedAt;

    /**
     * @param bool $active
     * @param string $appId
     * @param DateTime $createdAt
     * @param string $description
     * @param CronjobUrl|CronjobCommand $destination
     * @param string $id
     * @param string $interval
     * @param string $shortId
     * @param DateTime $updatedAt
     */
    public function __construct(bool $active, string $appId, DateTime $createdAt, string $description, CronjobCommand|CronjobUrl $destination, string $id, string $interval, string $shortId, DateTime $updatedAt)
    {
        $this->active = $active;
        $this->appId = $appId;
        $this->createdAt = $createdAt;
        $this->description = $description;
        $this->destination = $destination;
        $this->id = $id;
        $this->interval = $interval;
        $this->shortId = $shortId;
        $this->updatedAt = $updatedAt;
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
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
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
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getInterval(): string
    {
        return $this->interval;
    }

    /**
     * @return CronjobExecution|null
     */
    public function getLatestExecution(): ?CronjobExecution
    {
        return $this->latestExecution ?? null;
    }

    /**
     * @return DateTime|null
     */
    public function getNextExecutionTime(): ?DateTime
    {
        return $this->nextExecutionTime ?? null;
    }

    /**
     * @return string|null
     */
    public function getProjectId(): ?string
    {
        return $this->projectId ?? null;
    }

    /**
     * @return string
     */
    public function getShortId(): string
    {
        return $this->shortId;
    }

    /**
     * @return DateTime
     */
    public function getUpdatedAt(): DateTime
    {
        return $this->updatedAt;
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
     * @param DateTime $createdAt
     * @return self
     */
    public function withCreatedAt(DateTime $createdAt): self
    {
        $clone = clone $this;
        $clone->createdAt = $createdAt;

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
     * @param string $id
     * @return self
     */
    public function withId(string $id): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($id, static::$schema['properties']['id']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->id = $id;

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
     * @param CronjobExecution $latestExecution
     * @return self
     */
    public function withLatestExecution(CronjobExecution $latestExecution): self
    {
        $clone = clone $this;
        $clone->latestExecution = $latestExecution;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutLatestExecution(): self
    {
        $clone = clone $this;
        unset($clone->latestExecution);

        return $clone;
    }

    /**
     * @param DateTime $nextExecutionTime
     * @return self
     */
    public function withNextExecutionTime(DateTime $nextExecutionTime): self
    {
        $clone = clone $this;
        $clone->nextExecutionTime = $nextExecutionTime;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutNextExecutionTime(): self
    {
        $clone = clone $this;
        unset($clone->nextExecutionTime);

        return $clone;
    }

    /**
     * @param string $projectId
     * @return self
     */
    public function withProjectId(string $projectId): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($projectId, static::$schema['properties']['projectId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->projectId = $projectId;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutProjectId(): self
    {
        $clone = clone $this;
        unset($clone->projectId);

        return $clone;
    }

    /**
     * @param string $shortId
     * @return self
     */
    public function withShortId(string $shortId): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($shortId, static::$schema['properties']['shortId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->shortId = $shortId;

        return $clone;
    }

    /**
     * @param DateTime $updatedAt
     * @return self
     */
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
     * @return Cronjob Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): Cronjob
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $active = (bool)($input->{'active'});
        $appId = $input->{'appId'};
        $createdAt = new DateTime($input->{'createdAt'});
        $description = $input->{'description'};
        $destination = match (true) {
            CronjobUrl::validateInput($input->{'destination'}, true) => CronjobUrl::buildFromInput($input->{'destination'}, validate: $validate),
            CronjobCommand::validateInput($input->{'destination'}, true) => CronjobCommand::buildFromInput($input->{'destination'}, validate: $validate),
        };
        $email = null;
        if (isset($input->{'email'})) {
            $email = $input->{'email'};
        }
        $id = $input->{'id'};
        $interval = $input->{'interval'};
        $latestExecution = null;
        if (isset($input->{'latestExecution'})) {
            $latestExecution = CronjobExecution::buildFromInput($input->{'latestExecution'}, validate: $validate);
        }
        $nextExecutionTime = null;
        if (isset($input->{'nextExecutionTime'})) {
            $nextExecutionTime = new DateTime($input->{'nextExecutionTime'});
        }
        $projectId = null;
        if (isset($input->{'projectId'})) {
            $projectId = $input->{'projectId'};
        }
        $shortId = $input->{'shortId'};
        $updatedAt = new DateTime($input->{'updatedAt'});

        $obj = new self($active, $appId, $createdAt, $description, $destination, $id, $interval, $shortId, $updatedAt);
        $obj->email = $email;
        $obj->latestExecution = $latestExecution;
        $obj->nextExecutionTime = $nextExecutionTime;
        $obj->projectId = $projectId;
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
        $output['createdAt'] = ($this->createdAt)->format(DateTime::ATOM);
        $output['description'] = $this->description;
        $output['destination'] = match (true) {
            ($this->destination) instanceof CronjobUrl, ($this->destination) instanceof CronjobCommand => $this->destination->toJson(),
        };
        if (isset($this->email)) {
            $output['email'] = $this->email;
        }
        $output['id'] = $this->id;
        $output['interval'] = $this->interval;
        if (isset($this->latestExecution)) {
            $output['latestExecution'] = $this->latestExecution->toJson();
        }
        if (isset($this->nextExecutionTime)) {
            $output['nextExecutionTime'] = ($this->nextExecutionTime)->format(DateTime::ATOM);
        }
        if (isset($this->projectId)) {
            $output['projectId'] = $this->projectId;
        }
        $output['shortId'] = $this->shortId;
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
        $this->createdAt = clone $this->createdAt;
        $this->destination = match (true) {
            ($this->destination) instanceof CronjobUrl, ($this->destination) instanceof CronjobCommand => $this->destination,
        };
        if (isset($this->nextExecutionTime)) {
            $this->nextExecutionTime = clone $this->nextExecutionTime;
        }
        $this->updatedAt = clone $this->updatedAt;
    }
}
