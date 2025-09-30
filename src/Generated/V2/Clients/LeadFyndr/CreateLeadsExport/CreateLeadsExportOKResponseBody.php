<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\CreateLeadsExport;

use InvalidArgumentException;
use JsonSchema\Validator;

class CreateLeadsExportOKResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'contentBase64' => [
                'description' => 'The base64 encoded csv content of the export.',
                'type' => 'string',
            ],
            'exportId' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'exportId',
            'contentBase64',
        ],
        'type' => 'object',
    ];

    /**
     * The base64 encoded csv content of the export.
     */
    private string $contentBase64;

    private string $exportId;

    public function __construct(string $contentBase64, string $exportId)
    {
        $this->contentBase64 = $contentBase64;
        $this->exportId = $exportId;
    }

    public function getContentBase64(): string
    {
        return $this->contentBase64;
    }

    public function getExportId(): string
    {
        return $this->exportId;
    }

    public function withContentBase64(string $contentBase64): self
    {
        $validator = new Validator();
        $validator->validate($contentBase64, self::$internalValidationSchema['properties']['contentBase64']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->contentBase64 = $contentBase64;

        return $clone;
    }

    public function withExportId(string $exportId): self
    {
        $validator = new Validator();
        $validator->validate($exportId, self::$internalValidationSchema['properties']['exportId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->exportId = $exportId;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CreateLeadsExportOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CreateLeadsExportOKResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $contentBase64 = $input->{'contentBase64'};
        $exportId = $input->{'exportId'};

        $obj = new self($contentBase64, $exportId);

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
        $output['contentBase64'] = $this->contentBase64;
        $output['exportId'] = $this->exportId;

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
