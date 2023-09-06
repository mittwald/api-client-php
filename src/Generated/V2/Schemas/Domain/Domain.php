<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Domain;

use InvalidArgumentException;

class Domain
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'authCode' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.domain.AuthCode',
            ],
            'authCode2' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.domain.AuthCode2',
            ],
            'connected' => [
                'type' => 'boolean',
            ],
            'deleted' => [
                'type' => 'boolean',
            ],
            'domain' => [
                'format' => 'hostname',
                'type' => 'string',
            ],
            'domainId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'handles' => [
                'properties' => [
                    'adminC' => [
                        '$ref' => '#/components/schemas/de.mittwald.v1.domain.HandleReadable',
                    ],
                    'ownerC' => [
                        '$ref' => '#/components/schemas/de.mittwald.v1.domain.HandleReadable',
                    ],
                ],
                'required' => [
                    'ownerC',
                ],
                'type' => 'object',
            ],
            'hasAuthCode' => [
                'type' => 'boolean',
            ],
            'nameservers' => [
                'items' => [
                    'format' => 'hostname',
                    'type' => 'string',
                ],
                'minItems' => 2,
                'type' => 'array',
                'uniqueItems' => true,
            ],
            'processes' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.domain.Process',
                ],
                'type' => 'array',
            ],
            'projectId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'transferInAuthCode' => [
                'type' => 'string',
            ],
            'usesDefaultNameserver' => [
                'type' => 'boolean',
            ],
        ],
        'required' => [
            'domainId',
            'domain',
            'projectId',
            'deleted',
            'nameservers',
            'handles',
            'connected',
            'usesDefaultNameserver',
            'hasAuthCode',
        ],
        'type' => 'object',
    ];

    /**
     * @var AuthCode|null
     */
    private ?AuthCode $authCode = null;

    /**
     * @var AuthCode2|null
     */
    private ?AuthCode2 $authCode2 = null;

    /**
     * @var bool
     */
    private bool $connected;

    /**
     * @var bool
     */
    private bool $deleted;

    /**
     * @var string
     */
    private string $domain;

    /**
     * @var string
     */
    private string $domainId;

    /**
     * @var DomainHandles
     */
    private DomainHandles $handles;

    /**
     * @var bool
     */
    private bool $hasAuthCode;

    /**
     * @var string[]
     */
    private array $nameservers;

    /**
     * @var Process[]|null
     */
    private ?array $processes = null;

    /**
     * @var string
     */
    private string $projectId;

    /**
     * @var string|null
     */
    private ?string $transferInAuthCode = null;

    /**
     * @var bool
     */
    private bool $usesDefaultNameserver;

    /**
     * @param bool $connected
     * @param bool $deleted
     * @param string $domain
     * @param string $domainId
     * @param DomainHandles $handles
     * @param bool $hasAuthCode
     * @param string[] $nameservers
     * @param string $projectId
     * @param bool $usesDefaultNameserver
     */
    public function __construct(bool $connected, bool $deleted, string $domain, string $domainId, DomainHandles $handles, bool $hasAuthCode, array $nameservers, string $projectId, bool $usesDefaultNameserver)
    {
        $this->connected = $connected;
        $this->deleted = $deleted;
        $this->domain = $domain;
        $this->domainId = $domainId;
        $this->handles = $handles;
        $this->hasAuthCode = $hasAuthCode;
        $this->nameservers = $nameservers;
        $this->projectId = $projectId;
        $this->usesDefaultNameserver = $usesDefaultNameserver;
    }

    /**
     * @return AuthCode|null
     */
    public function getAuthCode(): ?AuthCode
    {
        return $this->authCode ?? null;
    }

    /**
     * @return AuthCode2|null
     */
    public function getAuthCode2(): ?AuthCode2
    {
        return $this->authCode2 ?? null;
    }

    /**
     * @return bool
     */
    public function getConnected(): bool
    {
        return $this->connected;
    }

    /**
     * @return bool
     */
    public function getDeleted(): bool
    {
        return $this->deleted;
    }

    /**
     * @return string
     */
    public function getDomain(): string
    {
        return $this->domain;
    }

    /**
     * @return string
     */
    public function getDomainId(): string
    {
        return $this->domainId;
    }

    /**
     * @return DomainHandles
     */
    public function getHandles(): DomainHandles
    {
        return $this->handles;
    }

    /**
     * @return bool
     */
    public function getHasAuthCode(): bool
    {
        return $this->hasAuthCode;
    }

    /**
     * @return string[]
     */
    public function getNameservers(): array
    {
        return $this->nameservers;
    }

    /**
     * @return Process[]|null
     */
    public function getProcesses(): ?array
    {
        return $this->processes ?? null;
    }

    /**
     * @return string
     */
    public function getProjectId(): string
    {
        return $this->projectId;
    }

    /**
     * @return string|null
     */
    public function getTransferInAuthCode(): ?string
    {
        return $this->transferInAuthCode ?? null;
    }

    /**
     * @return bool
     */
    public function getUsesDefaultNameserver(): bool
    {
        return $this->usesDefaultNameserver;
    }

    /**
     * @param AuthCode $authCode
     * @return self
     */
    public function withAuthCode(AuthCode $authCode): self
    {
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
     * @param AuthCode2 $authCode2
     * @return self
     */
    public function withAuthCode2(AuthCode2 $authCode2): self
    {
        $clone = clone $this;
        $clone->authCode2 = $authCode2;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutAuthCode2(): self
    {
        $clone = clone $this;
        unset($clone->authCode2);

        return $clone;
    }

    /**
     * @param bool $connected
     * @return self
     */
    public function withConnected(bool $connected): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($connected, static::$schema['properties']['connected']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->connected = $connected;

        return $clone;
    }

    /**
     * @param bool $deleted
     * @return self
     */
    public function withDeleted(bool $deleted): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($deleted, static::$schema['properties']['deleted']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->deleted = $deleted;

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
     * @param string $domainId
     * @return self
     */
    public function withDomainId(string $domainId): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($domainId, static::$schema['properties']['domainId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->domainId = $domainId;

        return $clone;
    }

    /**
     * @param DomainHandles $handles
     * @return self
     */
    public function withHandles(DomainHandles $handles): self
    {
        $clone = clone $this;
        $clone->handles = $handles;

        return $clone;
    }

    /**
     * @param bool $hasAuthCode
     * @return self
     */
    public function withHasAuthCode(bool $hasAuthCode): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($hasAuthCode, static::$schema['properties']['hasAuthCode']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->hasAuthCode = $hasAuthCode;

        return $clone;
    }

    /**
     * @param string[] $nameservers
     * @return self
     */
    public function withNameservers(array $nameservers): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($nameservers, static::$schema['properties']['nameservers']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->nameservers = $nameservers;

        return $clone;
    }

    /**
     * @param Process[] $processes
     * @return self
     */
    public function withProcesses(array $processes): self
    {
        $clone = clone $this;
        $clone->processes = $processes;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutProcesses(): self
    {
        $clone = clone $this;
        unset($clone->processes);

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
     * @param string $transferInAuthCode
     * @return self
     */
    public function withTransferInAuthCode(string $transferInAuthCode): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($transferInAuthCode, static::$schema['properties']['transferInAuthCode']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->transferInAuthCode = $transferInAuthCode;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutTransferInAuthCode(): self
    {
        $clone = clone $this;
        unset($clone->transferInAuthCode);

        return $clone;
    }

    /**
     * @param bool $usesDefaultNameserver
     * @return self
     */
    public function withUsesDefaultNameserver(bool $usesDefaultNameserver): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($usesDefaultNameserver, static::$schema['properties']['usesDefaultNameserver']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->usesDefaultNameserver = $usesDefaultNameserver;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return Domain Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): Domain
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $authCode = null;
        if (isset($input->{'authCode'})) {
            $authCode = AuthCode::buildFromInput($input->{'authCode'}, validate: $validate);
        }
        $authCode2 = null;
        if (isset($input->{'authCode2'})) {
            $authCode2 = AuthCode2::buildFromInput($input->{'authCode2'}, validate: $validate);
        }
        $connected = (bool)($input->{'connected'});
        $deleted = (bool)($input->{'deleted'});
        $domain = $input->{'domain'};
        $domainId = $input->{'domainId'};
        $handles = DomainHandles::buildFromInput($input->{'handles'}, validate: $validate);
        $hasAuthCode = (bool)($input->{'hasAuthCode'});
        $nameservers = $input->{'nameservers'};
        $processes = null;
        if (isset($input->{'processes'})) {
            $processes = array_map(fn (array $i): Process => Process::buildFromInput($i, validate: $validate), $input->{'processes'});
        }
        $projectId = $input->{'projectId'};
        $transferInAuthCode = null;
        if (isset($input->{'transferInAuthCode'})) {
            $transferInAuthCode = $input->{'transferInAuthCode'};
        }
        $usesDefaultNameserver = (bool)($input->{'usesDefaultNameserver'});

        $obj = new self($connected, $deleted, $domain, $domainId, $handles, $hasAuthCode, $nameservers, $projectId, $usesDefaultNameserver);
        $obj->authCode = $authCode;
        $obj->authCode2 = $authCode2;
        $obj->processes = $processes;
        $obj->transferInAuthCode = $transferInAuthCode;
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
            $output['authCode'] = $this->authCode->toJson();
        }
        if (isset($this->authCode2)) {
            $output['authCode2'] = $this->authCode2->toJson();
        }
        $output['connected'] = $this->connected;
        $output['deleted'] = $this->deleted;
        $output['domain'] = $this->domain;
        $output['domainId'] = $this->domainId;
        $output['handles'] = ($this->handles)->toJson();
        $output['hasAuthCode'] = $this->hasAuthCode;
        $output['nameservers'] = $this->nameservers;
        if (isset($this->processes)) {
            $output['processes'] = array_map(fn (Process $i): array => $i->toJson(), $this->processes);
        }
        $output['projectId'] = $this->projectId;
        if (isset($this->transferInAuthCode)) {
            $output['transferInAuthCode'] = $this->transferInAuthCode;
        }
        $output['usesDefaultNameserver'] = $this->usesDefaultNameserver;

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
        $this->handles = clone $this->handles;
    }
}
