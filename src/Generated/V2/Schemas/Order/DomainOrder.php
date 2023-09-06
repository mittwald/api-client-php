<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Order;

use InvalidArgumentException;

class DomainOrder
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'authCode' => [
                'example' => 'XXXXXXX',
                'type' => 'string',
            ],
            'domain' => [
                'example' => 'mittwald.example',
                'type' => 'string',
            ],
            'handleData' => [
                'properties' => [
                    'adminC' => [
                        'items' => [
                            '$ref' => '#/components/schemas/de.mittwald.v1.order.DomainHandleField',
                        ],
                        'type' => 'array',
                    ],
                    'ownerC' => [
                        'items' => [
                            '$ref' => '#/components/schemas/de.mittwald.v1.order.DomainHandleField',
                        ],
                        'minItems' => 1,
                        'type' => 'array',
                    ],
                ],
                'required' => [
                    'ownerC',
                ],
                'type' => 'object',
            ],
            'projectId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
        ],
        'required' => [
            'projectId',
            'domain',
            'handleData',
        ],
        'type' => 'object',
    ];

    /**
     * @var string|null
     */
    private ?string $authCode = null;

    /**
     * @var string
     */
    private string $domain;

    /**
     * @var DomainOrderHandleData
     */
    private DomainOrderHandleData $handleData;

    /**
     * @var string
     */
    private string $projectId;

    /**
     * @param string $domain
     * @param DomainOrderHandleData $handleData
     * @param string $projectId
     */
    public function __construct(string $domain, DomainOrderHandleData $handleData, string $projectId)
    {
        $this->domain = $domain;
        $this->handleData = $handleData;
        $this->projectId = $projectId;
    }

    /**
     * @return string|null
     */
    public function getAuthCode(): ?string
    {
        return $this->authCode ?? null;
    }

    /**
     * @return string
     */
    public function getDomain(): string
    {
        return $this->domain;
    }

    /**
     * @return DomainOrderHandleData
     */
    public function getHandleData(): DomainOrderHandleData
    {
        return $this->handleData;
    }

    /**
     * @return string
     */
    public function getProjectId(): string
    {
        return $this->projectId;
    }

    /**
     * @param string $authCode
     * @return self
     */
    public function withAuthCode(string $authCode): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($authCode, static::$schema['properties']['authCode']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->authCode = $authCode;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutAuthCode(): self
    {
        $clone = clone $this;
        unset($clone->authCode);

        return $clone;
    }

    /**
     * @param string $domain
     * @return self
     */
    public function withDomain(string $domain): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($domain, static::$schema['properties']['domain']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->domain = $domain;

        return $clone;
    }

    /**
     * @param DomainOrderHandleData $handleData
     * @return self
     */
    public function withHandleData(DomainOrderHandleData $handleData): self
    {
        $clone = clone $this;
        $clone->handleData = $handleData;

        return $clone;
    }

    /**
     * @param string $projectId
     * @return self
     */
    public function withProjectId(string $projectId): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($projectId, static::$schema['properties']['projectId']);
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
     * @return DomainOrder Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): DomainOrder
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $authCode = null;
        if (isset($input->{'authCode'})) {
            $authCode = $input->{'authCode'};
        }
        $domain = $input->{'domain'};
        $handleData = DomainOrderHandleData::buildFromInput($input->{'handleData'}, validate: $validate);
        $projectId = $input->{'projectId'};

        $obj = new self($domain, $handleData, $projectId);
        $obj->authCode = $authCode;
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
        if (isset($this->authCode)) {
            $output['authCode'] = $this->authCode;
        }
        $output['domain'] = $this->domain;
        $output['handleData'] = ($this->handleData)->toJson();
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
        $validator = new \JsonSchema\Validator();
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
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
        $this->handleData = clone $this->handleData;
    }
}
