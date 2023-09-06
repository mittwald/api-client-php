<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\App\LinkDatabase;

use InvalidArgumentException;
use JsonSchema\Validator;

class LinkDatabaseRequestBody
{
    public const method = 'put';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'databaseId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'databaseUserIds' => [
                'additionalProperties' => [
                    'type' => 'string',
                ],
                'type' => 'object',
            ],
            'purpose' => [
                'enum' => [
                    'primary',
                    'cache',
                    'custom',
                ],
                'type' => 'string',
            ],
        ],
        'required' => [
            'databaseId',
            'purpose',
        ],
        'type' => 'object',
    ];

    /**
     * @var string
     */
    private string $databaseId;

    /**
     * @var string[]|null
     */
    private ?array $databaseUserIds = null;

    /**
     * @var LinkDatabaseRequestBodyPurpose
     */
    private LinkDatabaseRequestBodyPurpose $purpose;

    private array $headers = [

    ];

    /**
     * @param string $databaseId
     * @param LinkDatabaseRequestBodyPurpose $purpose
     */
    public function __construct(string $databaseId, LinkDatabaseRequestBodyPurpose $purpose)
    {
        $this->databaseId = $databaseId;
        $this->purpose = $purpose;
    }

    /**
     * @return string
     */
    public function getDatabaseId(): string
    {
        return $this->databaseId;
    }

    /**
     * @return string[]|null
     */
    public function getDatabaseUserIds(): ?array
    {
        return $this->databaseUserIds ?? null;
    }

    /**
     * @return LinkDatabaseRequestBodyPurpose
     */
    public function getPurpose(): LinkDatabaseRequestBodyPurpose
    {
        return $this->purpose;
    }

    /**
     * @param string $databaseId
     * @return self
     */
    public function withDatabaseId(string $databaseId): self
    {
        $validator = new Validator();
        $validator->validate($databaseId, static::$schema['properties']['databaseId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->databaseId = $databaseId;

        return $clone;
    }

    /**
     * @param string[] $databaseUserIds
     * @return self
     */
    public function withDatabaseUserIds(array $databaseUserIds): self
    {
        $validator = new Validator();
        $validator->validate($databaseUserIds, static::$schema['properties']['databaseUserIds']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->databaseUserIds = $databaseUserIds;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutDatabaseUserIds(): self
    {
        $clone = clone $this;
        unset($clone->databaseUserIds);

        return $clone;
    }

    /**
     * @param LinkDatabaseRequestBodyPurpose $purpose
     * @return self
     */
    public function withPurpose(LinkDatabaseRequestBodyPurpose $purpose): self
    {
        $clone = clone $this;
        $clone->purpose = $purpose;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return LinkDatabaseRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): LinkDatabaseRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $databaseId = $input->{'databaseId'};
        $databaseUserIds = null;
        if (isset($input->{'databaseUserIds'})) {
            $databaseUserIds = $input->{'databaseUserIds'};
        }
        $purpose = LinkDatabaseRequestBodyPurpose::from($input->{'purpose'});

        $obj = new self($databaseId, $purpose);
        $obj->databaseUserIds = $databaseUserIds;
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
        $output['databaseId'] = $this->databaseId;
        if (isset($this->databaseUserIds)) {
            $output['databaseUserIds'] = $this->databaseUserIds;
        }
        $output['purpose'] = ($this->purpose)->value;

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
        $validator = new Validator();
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
    }

    public function getUrl(): string
    {
        $mapped = $this->toJson();
        $appInstallationId = urlencode($mapped['appInstallationId']);
        return '/v2/appinstallations/' . $appInstallationId . '/databases';
    }

    public function getQuery(): array
    {
        $mapped = $this->toJson();
        $query = [];
        return $query;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function withHeader(string $name, string|array $value): self
    {
        $clone = clone $this;
        $clone->headers[$name] = $value;
        return $clone;
    }
}
