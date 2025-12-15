<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain\CreateScheduledDeletion;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;

class CreateScheduledDeletionRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'deleteIngresses' => [
                'description' => 'Whether to also delete the corresponding Ingress and subdomain Ingresses.',
                'type' => 'boolean',
            ],
            'deletionDate' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
        ],
        'required' => [
            'deletionDate',
        ],
    ];

    /**
     * Whether to also delete the corresponding Ingress and subdomain Ingresses.
     */
    private ?bool $deleteIngresses = null;

    private DateTime $deletionDate;

    public function __construct(DateTime $deletionDate)
    {
        $this->deletionDate = $deletionDate;
    }

    public function getDeleteIngresses(): ?bool
    {
        return $this->deleteIngresses ?? null;
    }

    public function getDeletionDate(): DateTime
    {
        return $this->deletionDate;
    }

    public function withDeleteIngresses(bool $deleteIngresses): self
    {
        $validator = new Validator();
        $validator->validate($deleteIngresses, self::$internalValidationSchema['properties']['deleteIngresses']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->deleteIngresses = $deleteIngresses;

        return $clone;
    }

    public function withoutDeleteIngresses(): self
    {
        $clone = clone $this;
        unset($clone->deleteIngresses);

        return $clone;
    }

    public function withDeletionDate(DateTime $deletionDate): self
    {
        $clone = clone $this;
        $clone->deletionDate = $deletionDate;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CreateScheduledDeletionRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CreateScheduledDeletionRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $deleteIngresses = null;
        if (isset($input->{'deleteIngresses'})) {
            $deleteIngresses = (bool)($input->{'deleteIngresses'});
        }
        $deletionDate = new DateTime($input->{'deletionDate'});

        $obj = new self($deletionDate);
        $obj->deleteIngresses = $deleteIngresses;
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
        if (isset($this->deleteIngresses)) {
            $output['deleteIngresses'] = $this->deleteIngresses;
        }
        $output['deletionDate'] = ($this->deletionDate)->format(DateTime::ATOM);

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
        $validator->validate($input, self::$internalValidationSchema);

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
        $this->deletionDate = clone $this->deletionDate;
    }
}
