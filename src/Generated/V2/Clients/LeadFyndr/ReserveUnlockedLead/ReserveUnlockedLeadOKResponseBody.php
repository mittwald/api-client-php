<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\ReserveUnlockedLead;

use InvalidArgumentException;
use JsonSchema\Validator;

class ReserveUnlockedLeadOKResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'leadId' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'leadId',
        ],
        'type' => 'object',
    ];

    private string $leadId;

    public function __construct(string $leadId)
    {
        $this->leadId = $leadId;
    }

    public function getLeadId(): string
    {
        return $this->leadId;
    }

    public function withLeadId(string $leadId): self
    {
        $validator = new Validator();
        $validator->validate($leadId, self::$internalValidationSchema['properties']['leadId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->leadId = $leadId;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ReserveUnlockedLeadOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ReserveUnlockedLeadOKResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $leadId = $input->{'leadId'};

        $obj = new self($leadId);

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
        $output['leadId'] = $this->leadId;

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
    }
}
