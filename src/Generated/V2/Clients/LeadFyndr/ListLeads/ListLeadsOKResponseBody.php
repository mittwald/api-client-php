<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\ListLeads;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Leadfyndr\Lead;

class ListLeadsOKResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'leads' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.leadfyndr.Lead',
                ],
                'type' => 'array',
            ],
            'limit' => [
                'type' => 'number',
            ],
            'skip' => [
                'type' => 'number',
            ],
            'totalCount' => [
                'type' => 'number',
            ],
        ],
        'required' => [
            'leads',
            'totalCount',
            'skip',
            'limit',
        ],
        'type' => 'object',
    ];

    /**
     * @var Lead[]
     */
    private array $leads;

    private int|float $limit;

    private int|float $skip;

    private int|float $totalCount;

    /**
     * @param Lead[] $leads
     */
    public function __construct(array $leads, int|float $limit, int|float $skip, int|float $totalCount)
    {
        $this->leads = $leads;
        $this->limit = $limit;
        $this->skip = $skip;
        $this->totalCount = $totalCount;
    }

    /**
     * @return Lead[]
     */
    public function getLeads(): array
    {
        return $this->leads;
    }

    public function getLimit(): int|float
    {
        return $this->limit;
    }

    public function getSkip(): int|float
    {
        return $this->skip;
    }

    public function getTotalCount(): int|float
    {
        return $this->totalCount;
    }

    /**
     * @param Lead[] $leads
     */
    public function withLeads(array $leads): self
    {
        $clone = clone $this;
        $clone->leads = $leads;

        return $clone;
    }

    public function withLimit(int|float $limit): self
    {
        $validator = new Validator();
        $validator->validate($limit, self::$internalValidationSchema['properties']['limit']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->limit = $limit;

        return $clone;
    }

    public function withSkip(int|float $skip): self
    {
        $validator = new Validator();
        $validator->validate($skip, self::$internalValidationSchema['properties']['skip']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->skip = $skip;

        return $clone;
    }

    public function withTotalCount(int|float $totalCount): self
    {
        $validator = new Validator();
        $validator->validate($totalCount, self::$internalValidationSchema['properties']['totalCount']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->totalCount = $totalCount;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ListLeadsOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ListLeadsOKResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $leads = array_map(fn (array|object $i): Lead => Lead::buildFromInput($i, validate: $validate), $input->{'leads'});
        $limit = str_contains((string)($input->{'limit'}), '.') ? (float)($input->{'limit'}) : (int)($input->{'limit'});
        $skip = str_contains((string)($input->{'skip'}), '.') ? (float)($input->{'skip'}) : (int)($input->{'skip'});
        $totalCount = str_contains((string)($input->{'totalCount'}), '.') ? (float)($input->{'totalCount'}) : (int)($input->{'totalCount'});

        $obj = new self($leads, $limit, $skip, $totalCount);

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
        $output['leads'] = array_map(fn (Lead $i): array => $i->toJson(), $this->leads);
        $output['limit'] = $this->limit;
        $output['skip'] = $this->skip;
        $output['totalCount'] = $this->totalCount;

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
