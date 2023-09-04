<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Messaging;

class Notification
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'createdAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'id' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'read' => [
                'type' => 'boolean',
            ],
            'reference' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.messaging.AggregateReference',
            ],
            'severity' => [
                'enum' => [
                    'success',
                    'info',
                    'warning',
                    'error',
                ],
                'type' => 'string',
            ],
            'type' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'id',
            'type',
            'reference',
            'severity',
            'read',
            'createdAt',
        ],
        'type' => 'object',
    ];

    /**
     * @var \DateTime
     */
    private \DateTime $createdAt;

    /**
     * @var string
     */
    private string $id;

    /**
     * @var bool
     */
    private bool $read;

    /**
     * @var AggregateReference
     */
    private AggregateReference $reference;

    /**
     * @var NotificationSeverity
     */
    private NotificationSeverity $severity;

    /**
     * @var string
     */
    private string $type;

    /**
     * @param \DateTime $createdAt
     * @param string $id
     * @param bool $read
     * @param AggregateReference $reference
     * @param NotificationSeverity $severity
     * @param string $type
     */
    public function __construct(\DateTime $createdAt, string $id, bool $read, AggregateReference $reference, NotificationSeverity $severity, string $type)
    {
        $this->createdAt = $createdAt;
        $this->id = $id;
        $this->read = $read;
        $this->reference = $reference;
        $this->severity = $severity;
        $this->type = $type;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt() : \DateTime
    {
        return $this->createdAt;
    }

    /**
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }

    /**
     * @return bool
     */
    public function getRead() : bool
    {
        return $this->read;
    }

    /**
     * @return AggregateReference
     */
    public function getReference() : AggregateReference
    {
        return $this->reference;
    }

    /**
     * @return NotificationSeverity
     */
    public function getSeverity() : NotificationSeverity
    {
        return $this->severity;
    }

    /**
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }

    /**
     * @param \DateTime $createdAt
     * @return self
     */
    public function withCreatedAt(\DateTime $createdAt) : self
    {
        $clone = clone $this;
        $clone->createdAt = $createdAt;

        return $clone;
    }

    /**
     * @param string $id
     * @return self
     */
    public function withId(string $id) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($id, static::$schema['properties']['id']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->id = $id;

        return $clone;
    }

    /**
     * @param bool $read
     * @return self
     */
    public function withRead(bool $read) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($read, static::$schema['properties']['read']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->read = $read;

        return $clone;
    }

    /**
     * @param AggregateReference $reference
     * @return self
     */
    public function withReference(AggregateReference $reference) : self
    {
        $clone = clone $this;
        $clone->reference = $reference;

        return $clone;
    }

    /**
     * @param NotificationSeverity $severity
     * @return self
     */
    public function withSeverity(NotificationSeverity $severity) : self
    {
        $clone = clone $this;
        $clone->severity = $severity;

        return $clone;
    }

    /**
     * @param string $type
     * @return self
     */
    public function withType(string $type) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($type, static::$schema['properties']['type']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->type = $type;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return Notification Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : Notification
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $createdAt = new \DateTime($input->{'createdAt'});
        $id = $input->{'id'};
        $read = (bool)($input->{'read'});
        $reference = AggregateReference::buildFromInput($input->{'reference'}, validate: $validate);
        $severity = NotificationSeverity::from($input->{'severity'});
        $type = $input->{'type'};

        $obj = new self($createdAt, $id, $read, $reference, $severity, $type);

        return $obj;
    }

    /**
     * Converts this object back to a simple array that can be JSON-serialized
     *
     * @return array Converted array
     */
    public function toJson() : array
    {
        $output = [];
        $output['createdAt'] = ($this->createdAt)->format(\DateTime::ATOM);
        $output['id'] = $this->id;
        $output['read'] = $this->read;
        $output['reference'] = $this->reference->toJson();
        $output['severity'] = ($this->severity)->value;
        $output['type'] = $this->type;

        return $output;
    }

    /**
     * Validates an input array
     *
     * @param array|object $input Input data
     * @param bool $return Return instead of throwing errors
     * @return bool Validation result
     * @throws \InvalidArgumentException
     */
    public static function validateInput(array|object $input, bool $return = false) : bool
    {
        $validator = new \JsonSchema\Validator();
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        $validator->validate($input, static::$schema);

        if (!$validator->isValid() && !$return) {
            $errors = array_map(function(array $e): string {
                return $e["property"] . ": " . $e["message"];
            }, $validator->getErrors());
            throw new \InvalidArgumentException(join(", ", $errors));
        }

        return $validator->isValid();
    }

    public function __clone()
    {
        $this->createdAt = clone $this->createdAt;
    }
}

