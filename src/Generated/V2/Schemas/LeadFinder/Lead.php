<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\LeadFinder;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.lead-finder.Lead.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class Lead
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'businessFields' => [
                'items' => [
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
            'company' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.lead-finder.BasicCompany',
            ],
            'description' => [
                'type' => 'string',
            ],
            'leadId' => [
                'type' => 'string',
            ],
            'mainTechnology' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.lead-finder.Technology',
            ],
            'metrics' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.lead-finder.BasicMetrics',
            ],
            'potential' => [
                'format' => 'float',
                'maximum' => 1,
                'minimum' => 0,
                'type' => 'number',
            ],
            'screenshot' => [
                'type' => 'string',
            ],
            'technologies' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.lead-finder.Technology',
                ],
                'type' => 'array',
            ],
        ],
        'required' => [
            'leadId',
            'potential',
            'screenshot',
            'company',
            'metrics',
            'businessFields',
            'description',
            'technologies',
        ],
        'type' => 'object',
    ];

    /**
     * @var string[]
     */
    private array $businessFields;

    private BasicCompany $company;

    private string $description;

    private string $leadId;

    private ?Technology $mainTechnology = null;

    private BasicMetrics $metrics;

    private int|float $potential;

    private string $screenshot;

    /**
     * @var Technology[]
     */
    private array $technologies;

    /**
     * @param string[] $businessFields
     * @param Technology[] $technologies
     */
    public function __construct(array $businessFields, BasicCompany $company, string $description, string $leadId, BasicMetrics $metrics, int|float $potential, string $screenshot, array $technologies)
    {
        $this->businessFields = $businessFields;
        $this->company = $company;
        $this->description = $description;
        $this->leadId = $leadId;
        $this->metrics = $metrics;
        $this->potential = $potential;
        $this->screenshot = $screenshot;
        $this->technologies = $technologies;
    }

    /**
     * @return string[]
     */
    public function getBusinessFields(): array
    {
        return $this->businessFields;
    }

    public function getCompany(): BasicCompany
    {
        return $this->company;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getLeadId(): string
    {
        return $this->leadId;
    }

    public function getMainTechnology(): ?Technology
    {
        return $this->mainTechnology ?? null;
    }

    public function getMetrics(): BasicMetrics
    {
        return $this->metrics;
    }

    public function getPotential(): int|float
    {
        return $this->potential;
    }

    public function getScreenshot(): string
    {
        return $this->screenshot;
    }

    /**
     * @return Technology[]
     */
    public function getTechnologies(): array
    {
        return $this->technologies;
    }

    /**
     * @param string[] $businessFields
     */
    public function withBusinessFields(array $businessFields): self
    {
        $validator = new Validator();
        $validator->validate($businessFields, self::$schema['properties']['businessFields']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->businessFields = $businessFields;

        return $clone;
    }

    public function withCompany(BasicCompany $company): self
    {
        $clone = clone $this;
        $clone->company = $company;

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

    public function withLeadId(string $leadId): self
    {
        $validator = new Validator();
        $validator->validate($leadId, self::$schema['properties']['leadId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->leadId = $leadId;

        return $clone;
    }

    public function withMainTechnology(Technology $mainTechnology): self
    {
        $clone = clone $this;
        $clone->mainTechnology = $mainTechnology;

        return $clone;
    }

    public function withoutMainTechnology(): self
    {
        $clone = clone $this;
        unset($clone->mainTechnology);

        return $clone;
    }

    public function withMetrics(BasicMetrics $metrics): self
    {
        $clone = clone $this;
        $clone->metrics = $metrics;

        return $clone;
    }

    public function withPotential(int|float $potential): self
    {
        $validator = new Validator();
        $validator->validate($potential, self::$schema['properties']['potential']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->potential = $potential;

        return $clone;
    }

    public function withScreenshot(string $screenshot): self
    {
        $validator = new Validator();
        $validator->validate($screenshot, self::$schema['properties']['screenshot']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->screenshot = $screenshot;

        return $clone;
    }

    /**
     * @param Technology[] $technologies
     */
    public function withTechnologies(array $technologies): self
    {
        $clone = clone $this;
        $clone->technologies = $technologies;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return Lead Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): Lead
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $businessFields = $input->{'businessFields'};
        $company = BasicCompany::buildFromInput($input->{'company'}, validate: $validate);
        $description = $input->{'description'};
        $leadId = $input->{'leadId'};
        $mainTechnology = null;
        if (isset($input->{'mainTechnology'})) {
            $mainTechnology = Technology::buildFromInput($input->{'mainTechnology'}, validate: $validate);
        }
        $metrics = BasicMetrics::buildFromInput($input->{'metrics'}, validate: $validate);
        $potential = str_contains((string)($input->{'potential'}), '.') ? (float)($input->{'potential'}) : (int)($input->{'potential'});
        $screenshot = $input->{'screenshot'};
        $technologies = array_map(fn (array|object $i): Technology => Technology::buildFromInput($i, validate: $validate), $input->{'technologies'});

        $obj = new self($businessFields, $company, $description, $leadId, $metrics, $potential, $screenshot, $technologies);
        $obj->mainTechnology = $mainTechnology;
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
        $output['businessFields'] = $this->businessFields;
        $output['company'] = $this->company->toJson();
        $output['description'] = $this->description;
        $output['leadId'] = $this->leadId;
        if (isset($this->mainTechnology)) {
            $output['mainTechnology'] = $this->mainTechnology->toJson();
        }
        $output['metrics'] = $this->metrics->toJson();
        $output['potential'] = $this->potential;
        $output['screenshot'] = $this->screenshot;
        $output['technologies'] = array_map(fn (Technology $i): array => $i->toJson(), $this->technologies);

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
    }
}
