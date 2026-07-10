<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain\MigrationOrderDomainMigration;

use InvalidArgumentException;
use JsonSchema\Validator;

class MigrationOrderDomainMigrationRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'domains' => [
                'items' => [
                    'format' => 'idn-hostname',
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
            'pAccount' => [
                'description' => 'Name of the pAccount in customer center to migrate domains from.',
                'example' => 'p123456',
                'pattern' => '^p[1-9][0-9]{3,}$',
                'type' => 'string',
            ],
            'projectId' => [
                'description' => 'ID of the Project to migrate the domains into.',
                'format' => 'uuid',
                'type' => 'string',
            ],
        ],
        'required' => [
            'pAccount',
            'projectId',
            'domains',
        ],
        'type' => 'object',
    ];

    /**
     * @var string[]
     */
    private array $domains;

    /**
     * Name of the pAccount in customer center to migrate domains from.
     */
    private string $pAccount;

    /**
     * ID of the Project to migrate the domains into.
     */
    private string $projectId;

    /**
     * @param string[] $domains
     */
    public function __construct(array $domains, string $pAccount, string $projectId)
    {
        $this->domains = $domains;
        $this->pAccount = $pAccount;
        $this->projectId = $projectId;
    }

    /**
     * @return string[]
     */
    public function getDomains(): array
    {
        return $this->domains;
    }

    public function getPAccount(): string
    {
        return $this->pAccount;
    }

    public function getProjectId(): string
    {
        return $this->projectId;
    }

    /**
     * @param string[] $domains
     */
    public function withDomains(array $domains): self
    {
        $validator = new Validator();
        $validator->validate($domains, self::$internalValidationSchema['properties']['domains']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->domains = $domains;

        return $clone;
    }

    public function withPAccount(string $pAccount): self
    {
        $validator = new Validator();
        $validator->validate($pAccount, self::$internalValidationSchema['properties']['pAccount']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->pAccount = $pAccount;

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
     * @return MigrationOrderDomainMigrationRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): MigrationOrderDomainMigrationRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $domains = $input->{'domains'};
        $pAccount = $input->{'pAccount'};
        $projectId = $input->{'projectId'};

        $obj = new self($domains, $pAccount, $projectId);

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
        $output['domains'] = $this->domains;
        $output['pAccount'] = $this->pAccount;
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
