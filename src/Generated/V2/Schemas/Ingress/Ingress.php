<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Ingress;

use InvalidArgumentException;
use JsonSchema\Validator;

class Ingress
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'dnsValidationErrors' => [
                'description' => 'A list of errors that occurred while validating the ingress\'s dns before requesting a certificate.',
                'items' => [
                    'enum' => [
                        'ERROR_UNSPECIFIED',
                        'ERROR_QUAD_A',
                        'ERROR_NO_A_RECORD',
                        'ERROR_ACME_CERTIFICATE_REQUEST_DEADLINE_EXCEEDED',
                    ],
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
            'hostname' => [
                'format' => 'hostname',
                'type' => 'string',
            ],
            'id' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'ips' => [
                'properties' => [
                    'v4' => [
                        'items' => [
                            'format' => 'ipv4',
                            'type' => 'string',
                        ],
                        'type' => 'array',
                    ],
                ],
                'required' => [
                    'v4',
                ],
                'type' => 'object',
            ],
            'isDefault' => [
                'description' => 'Whether this ingress is the default ingress or not. A default ingress is automatically created, it cannot be deleted. There can be only one default ingress per project.',
                'type' => 'boolean',
            ],
            'isEnabled' => [
                'type' => 'boolean',
            ],
            'paths' => [
                'description' => 'A list of paths. The default path `/` is always present and cannot be removed.',
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.ingress.Path',
                ],
                'type' => 'array',
            ],
            'projectId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'tls' => [
                'oneOf' => [
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.ingress.TlsAcme',
                    ],
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.ingress.TlsCertificate',
                    ],
                ],
            ],
        ],
        'required' => [
            'id',
            'hostname',
            'projectId',
            'isDefault',
            'tls',
            'paths',
            'isEnabled',
            'ips',
            'dnsValidationErrors',
        ],
        'type' => 'object',
    ];

    /**
     * A list of errors that occurred while validating the ingress's dns before requesting a certificate.
     *
     * @var string[]
     */
    private array $dnsValidationErrors;

    /**
     * @var string
     */
    private string $hostname;

    /**
     * @var string
     */
    private string $id;

    /**
     * @var IngressIps
     */
    private IngressIps $ips;

    /**
     * Whether this ingress is the default ingress or not. A default ingress is automatically created, it cannot be deleted. There can be only one default ingress per project.
     *
     * @var bool
     */
    private bool $isDefault;

    /**
     * @var bool
     */
    private bool $isEnabled;

    /**
     * A list of paths. The default path `/` is always present and cannot be removed.
     *
     * @var Path[]
     */
    private array $paths;

    /**
     * @var string
     */
    private string $projectId;

    /**
     * @var TlsAcme|TlsCertificate
     */
    private TlsAcme|TlsCertificate $tls;

    /**
     * @param string[] $dnsValidationErrors
     * @param string $hostname
     * @param string $id
     * @param IngressIps $ips
     * @param bool $isDefault
     * @param bool $isEnabled
     * @param Path[] $paths
     * @param string $projectId
     * @param TlsAcme|TlsCertificate $tls
     */
    public function __construct(array $dnsValidationErrors, string $hostname, string $id, IngressIps $ips, bool $isDefault, bool $isEnabled, array $paths, string $projectId, TlsAcme|TlsCertificate $tls)
    {
        $this->dnsValidationErrors = $dnsValidationErrors;
        $this->hostname = $hostname;
        $this->id = $id;
        $this->ips = $ips;
        $this->isDefault = $isDefault;
        $this->isEnabled = $isEnabled;
        $this->paths = $paths;
        $this->projectId = $projectId;
        $this->tls = $tls;
    }

    /**
     * @return string[]
     */
    public function getDnsValidationErrors(): array
    {
        return $this->dnsValidationErrors;
    }

    /**
     * @return string
     */
    public function getHostname(): string
    {
        return $this->hostname;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return IngressIps
     */
    public function getIps(): IngressIps
    {
        return $this->ips;
    }

    /**
     * @return bool
     */
    public function getIsDefault(): bool
    {
        return $this->isDefault;
    }

    /**
     * @return bool
     */
    public function getIsEnabled(): bool
    {
        return $this->isEnabled;
    }

    /**
     * @return Path[]
     */
    public function getPaths(): array
    {
        return $this->paths;
    }

    /**
     * @return string
     */
    public function getProjectId(): string
    {
        return $this->projectId;
    }

    /**
     * @return
     * TlsAcme|TlsCertificate
     */
    public function getTls(): TlsAcme|TlsCertificate
    {
        return $this->tls;
    }

    /**
     * @param string[] $dnsValidationErrors
     * @return self
     */
    public function withDnsValidationErrors(array $dnsValidationErrors): self
    {
        $validator = new Validator();
        $validator->validate($dnsValidationErrors, static::$schema['properties']['dnsValidationErrors']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->dnsValidationErrors = $dnsValidationErrors;

        return $clone;
    }

    /**
     * @param string $hostname
     * @return self
     */
    public function withHostname(string $hostname): self
    {
        $validator = new Validator();
        $validator->validate($hostname, static::$schema['properties']['hostname']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->hostname = $hostname;

        return $clone;
    }

    /**
     * @param string $id
     * @return self
     */
    public function withId(string $id): self
    {
        $validator = new Validator();
        $validator->validate($id, static::$schema['properties']['id']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->id = $id;

        return $clone;
    }

    /**
     * @param IngressIps $ips
     * @return self
     */
    public function withIps(IngressIps $ips): self
    {
        $clone = clone $this;
        $clone->ips = $ips;

        return $clone;
    }

    /**
     * @param bool $isDefault
     * @return self
     */
    public function withIsDefault(bool $isDefault): self
    {
        $validator = new Validator();
        $validator->validate($isDefault, static::$schema['properties']['isDefault']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->isDefault = $isDefault;

        return $clone;
    }

    /**
     * @param bool $isEnabled
     * @return self
     */
    public function withIsEnabled(bool $isEnabled): self
    {
        $validator = new Validator();
        $validator->validate($isEnabled, static::$schema['properties']['isEnabled']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->isEnabled = $isEnabled;

        return $clone;
    }

    /**
     * @param Path[] $paths
     * @return self
     */
    public function withPaths(array $paths): self
    {
        $clone = clone $this;
        $clone->paths = $paths;

        return $clone;
    }

    /**
     * @param string $projectId
     * @return self
     */
    public function withProjectId(string $projectId): self
    {
        $validator = new Validator();
        $validator->validate($projectId, static::$schema['properties']['projectId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->projectId = $projectId;

        return $clone;
    }

    /**
     * @param TlsAcme|TlsCertificate $tls
     * @return self
     */
    public function withTls(TlsAcme|TlsCertificate $tls): self
    {
        $clone = clone $this;
        $clone->tls = $tls;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return Ingress Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): Ingress
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $dnsValidationErrors = $input->{'dnsValidationErrors'};
        $hostname = $input->{'hostname'};
        $id = $input->{'id'};
        $ips = IngressIps::buildFromInput($input->{'ips'}, validate: $validate);
        $isDefault = (bool)($input->{'isDefault'});
        $isEnabled = (bool)($input->{'isEnabled'});
        $paths = array_map(fn (array $i): Path => Path::buildFromInput($i, validate: $validate), $input->{'paths'});
        $projectId = $input->{'projectId'};
        $tls = match (true) {
            TlsAcme::validateInput($input->{'tls'}, true) => TlsAcme::buildFromInput($input->{'tls'}, validate: $validate),
            TlsCertificate::validateInput($input->{'tls'}, true) => TlsCertificate::buildFromInput($input->{'tls'}, validate: $validate),
        };

        $obj = new self($dnsValidationErrors, $hostname, $id, $ips, $isDefault, $isEnabled, $paths, $projectId, $tls);

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
        $output['dnsValidationErrors'] = $this->dnsValidationErrors;
        $output['hostname'] = $this->hostname;
        $output['id'] = $this->id;
        $output['ips'] = ($this->ips)->toJson();
        $output['isDefault'] = $this->isDefault;
        $output['isEnabled'] = $this->isEnabled;
        $output['paths'] = array_map(fn (Path $i): array => $i->toJson(), $this->paths);
        $output['projectId'] = $this->projectId;
        $output['tls'] = match (true) {
            ($this->tls) instanceof TlsAcme, ($this->tls) instanceof TlsCertificate => $this->tls->toJson(),
        };

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
        $this->ips = clone $this->ips;
        $this->tls = match (true) {
            ($this->tls) instanceof TlsAcme, ($this->tls) instanceof TlsCertificate => $this->tls,
        };
    }
}
