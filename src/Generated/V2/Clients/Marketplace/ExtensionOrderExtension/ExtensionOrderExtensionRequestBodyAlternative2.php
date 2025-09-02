<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionOrderExtension;

use InvalidArgumentException;
use JsonSchema\Validator;

class ExtensionOrderExtensionRequestBodyAlternative2
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'consentedScopes' => [
                'items' => [
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
            'projectId' => [
                'description' => 'The project the extension should be installed in. Either customerId or projectId is required.',
                'format' => 'uuid',
                'type' => 'string',
            ],
        ],
        'required' => [
            'consentedScopes',
            'projectId',
        ],
        'type' => 'object',
    ];

    /**
     * @var string[]
     */
    private array $consentedScopes;

    /**
     * The project the extension should be installed in. Either customerId or projectId is required.
     */
    private string $projectId;

    /**
     * @param string[] $consentedScopes
     */
    public function __construct(array $consentedScopes, string $projectId)
    {
        $this->consentedScopes = $consentedScopes;
        $this->projectId = $projectId;
    }

    /**
     * @return string[]
     */
    public function getConsentedScopes(): array
    {
        return $this->consentedScopes;
    }

    public function getProjectId(): string
    {
        return $this->projectId;
    }

    /**
     * @param string[] $consentedScopes
     */
    public function withConsentedScopes(array $consentedScopes): self
    {
        $validator = new Validator();
        $validator->validate($consentedScopes, self::$internalValidationSchema['properties']['consentedScopes']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->consentedScopes = $consentedScopes;

        return $clone;
    }

    public function withProjectId(string $projectId): self
    {
        $validator = new Validator();
        $validator->validate($projectId, self::$internalValidationSchema['properties']['projectId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->projectId = $projectId;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ExtensionOrderExtensionRequestBodyAlternative2 Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ExtensionOrderExtensionRequestBodyAlternative2
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $consentedScopes = $input->{'consentedScopes'};
        $projectId = $input->{'projectId'};

        $obj = new self($consentedScopes, $projectId);

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
        $output['consentedScopes'] = $this->consentedScopes;
        $output['projectId'] = $this->projectId;

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
