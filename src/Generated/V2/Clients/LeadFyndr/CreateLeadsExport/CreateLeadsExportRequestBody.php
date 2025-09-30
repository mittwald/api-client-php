<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\CreateLeadsExport;

use InvalidArgumentException;
use JsonSchema\Validator;

class CreateLeadsExportRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'exportAllLeads' => [
                'description' => 'Whether to export all leads or only not already exported leads.',
                'type' => 'boolean',
            ],
            'fieldKeys' => [
                'description' => 'The fields to include in the export.',
                'items' => [
                    'enum' => [
                        'domain',
                        'potential',
                        'performance',
                        'generalLook',
                        'companyName',
                        'emails',
                        'phoneNumbers',
                        'address',
                        'employeeCount',
                        'revenue',
                        'a-record',
                        'nameserver',
                        'mailserver',
                        'techStack',
                    ],
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
        ],
        'required' => [
            'fieldKeys',
            'exportAllLeads',
        ],
        'type' => 'object',
    ];

    /**
     * Whether to export all leads or only not already exported leads.
     */
    private bool $exportAllLeads;

    /**
     * The fields to include in the export.
     *
     * @var string[]
     */
    private array $fieldKeys;

    /**
     * @param string[] $fieldKeys
     */
    public function __construct(bool $exportAllLeads, array $fieldKeys)
    {
        $this->exportAllLeads = $exportAllLeads;
        $this->fieldKeys = $fieldKeys;
    }

    public function getExportAllLeads(): bool
    {
        return $this->exportAllLeads;
    }

    /**
     * @return string[]
     */
    public function getFieldKeys(): array
    {
        return $this->fieldKeys;
    }

    public function withExportAllLeads(bool $exportAllLeads): self
    {
        $validator = new Validator();
        $validator->validate($exportAllLeads, self::$internalValidationSchema['properties']['exportAllLeads']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->exportAllLeads = $exportAllLeads;

        return $clone;
    }

    /**
     * @param string[] $fieldKeys
     */
    public function withFieldKeys(array $fieldKeys): self
    {
        $validator = new Validator();
        $validator->validate($fieldKeys, self::$internalValidationSchema['properties']['fieldKeys']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->fieldKeys = $fieldKeys;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CreateLeadsExportRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CreateLeadsExportRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $exportAllLeads = (bool)($input->{'exportAllLeads'});
        $fieldKeys = $input->{'fieldKeys'};

        $obj = new self($exportAllLeads, $fieldKeys);

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
        $output['exportAllLeads'] = $this->exportAllLeads;
        $output['fieldKeys'] = $this->fieldKeys;

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
