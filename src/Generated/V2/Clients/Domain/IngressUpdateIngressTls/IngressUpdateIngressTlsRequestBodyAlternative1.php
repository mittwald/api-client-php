<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressUpdateIngressTls;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;

class IngressUpdateIngressTlsRequestBodyAlternative1
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'additionalProperties' => false,
        'properties' => [
            'acme' => [
                'description' => 'Has to be `true`, as ssl cannot be deactivated.',
                'type' => 'boolean',
            ],
            'isCreated' => [
                'deprecated' => true,
                'description' => 'Was added by mistake. Never did anything.',
                'type' => 'boolean',
            ],
            'requestDeadline' => [
                'deprecated' => true,
                'description' => 'Was added by mistake. Never did anything.',
                'format' => 'date-time',
                'type' => 'string',
            ],
        ],
        'required' => [
            'acme',
        ],
        'type' => 'object',
    ];

    /**
     * Has to be `true`, as ssl cannot be deactivated.
     */
    private bool $acme;

    /**
     * Was added by mistake. Never did anything.
     */
    private ?bool $isCreated = null;

    /**
     * Was added by mistake. Never did anything.
     */
    private ?DateTime $requestDeadline = null;

    public function __construct(bool $acme)
    {
        $this->acme = $acme;
    }

    public function getAcme(): bool
    {
        return $this->acme;
    }

    public function getIsCreated(): ?bool
    {
        return $this->isCreated ?? null;
    }

    public function getRequestDeadline(): ?DateTime
    {
        return $this->requestDeadline ?? null;
    }

    public function withAcme(bool $acme): self
    {
        $validator = new Validator();
        $validator->validate($acme, static::$schema['properties']['acme']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->acme = $acme;

        return $clone;
    }

    public function withIsCreated(bool $isCreated): self
    {
        $validator = new Validator();
        $validator->validate($isCreated, static::$schema['properties']['isCreated']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->isCreated = $isCreated;

        return $clone;
    }

    public function withoutIsCreated(): self
    {
        $clone = clone $this;
        unset($clone->isCreated);

        return $clone;
    }

    public function withRequestDeadline(DateTime $requestDeadline): self
    {
        $clone = clone $this;
        $clone->requestDeadline = $requestDeadline;

        return $clone;
    }

    public function withoutRequestDeadline(): self
    {
        $clone = clone $this;
        unset($clone->requestDeadline);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return IngressUpdateIngressTlsRequestBodyAlternative1 Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): IngressUpdateIngressTlsRequestBodyAlternative1
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $acme = (bool)($input->{'acme'});
        $isCreated = null;
        if (isset($input->{'isCreated'})) {
            $isCreated = (bool)($input->{'isCreated'});
        }
        $requestDeadline = null;
        if (isset($input->{'requestDeadline'})) {
            $requestDeadline = new DateTime($input->{'requestDeadline'});
        }

        $obj = new self($acme);
        $obj->isCreated = $isCreated;
        $obj->requestDeadline = $requestDeadline;
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
        $output['acme'] = $this->acme;
        if (isset($this->isCreated)) {
            $output['isCreated'] = $this->isCreated;
        }
        if (isset($this->requestDeadline)) {
            $output['requestDeadline'] = ($this->requestDeadline)->format(DateTime::ATOM);
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
        $validator = new \Mittwald\ApiClient\Validator\Validator();
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
        if (isset($this->requestDeadline)) {
            $this->requestDeadline = clone $this->requestDeadline;
        }
    }
}
