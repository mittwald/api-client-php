<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Ingress;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.ingress.IngressDeprecated.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class IngressDeprecated
{
    /**
     * Schema used to validate input for creating instances of this class
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
                'format' => 'idn-hostname',
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
            'isDomain' => [
                'type' => 'boolean',
            ],
            'isEnabled' => [
                'type' => 'boolean',
            ],
            'ownership' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.ingress.Ownership',
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
                        '$ref' => '#/components/schemas/de.mittwald.v1.ingress.TlsAcmeDeprecated',
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
            'ownership',
        ],
        'type' => 'object',
    ];

    /**
     * A list of errors that occurred while validating the ingress's dns before requesting a certificate.
     *
     * @var string[]
     */
    private array $dnsValidationErrors;

    private string $hostname;

    private string $id;

    private IngressDeprecatedIps $ips;

    /**
     * Whether this ingress is the default ingress or not. A default ingress is automatically created, it cannot be deleted. There can be only one default ingress per project.
     */
    private bool $isDefault;

    private ?bool $isDomain = null;

    private bool $isEnabled;

    private Ownership $ownership;

    /**
     * A list of paths. The default path `/` is always present and cannot be removed.
     *
     * @var Path[]
     */
    private array $paths;

    private string $projectId;

    private TlsAcmeDeprecated|TlsCertificate $tls;

    /**
     * @param string[] $dnsValidationErrors
     * @param Path[] $paths
     * @param TlsAcmeDeprecated|TlsCertificate $tls
     */
    public function __construct(array $dnsValidationErrors, string $hostname, string $id, IngressDeprecatedIps $ips, bool $isDefault, bool $isEnabled, Ownership $ownership, array $paths, string $projectId, TlsAcmeDeprecated|TlsCertificate $tls)
    {
        $this->dnsValidationErrors = $dnsValidationErrors;
        $this->hostname = $hostname;
        $this->id = $id;
        $this->ips = $ips;
        $this->isDefault = $isDefault;
        $this->isEnabled = $isEnabled;
        $this->ownership = $ownership;
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

    public function getHostname(): string
    {
        return $this->hostname;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getIps(): IngressDeprecatedIps
    {
        return $this->ips;
    }

    public function getIsDefault(): bool
    {
        return $this->isDefault;
    }

    public function getIsDomain(): ?bool
    {
        return $this->isDomain ?? null;
    }

    public function getIsEnabled(): bool
    {
        return $this->isEnabled;
    }

    public function getOwnership(): Ownership
    {
        return $this->ownership;
    }

    /**
     * @return Path[]
     */
    public function getPaths(): array
    {
        return $this->paths;
    }

    public function getProjectId(): string
    {
        return $this->projectId;
    }

    public function getTls(): TlsAcmeDeprecated|TlsCertificate
    {
        return $this->tls;
    }

    /**
     * @param string[] $dnsValidationErrors
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

    public function withIps(IngressDeprecatedIps $ips): self
    {
        $clone = clone $this;
        $clone->ips = $ips;

        return $clone;
    }

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

    public function withIsDomain(bool $isDomain): self
    {
        $validator = new Validator();
        $validator->validate($isDomain, static::$schema['properties']['isDomain']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->isDomain = $isDomain;

        return $clone;
    }

    public function withoutIsDomain(): self
    {
        $clone = clone $this;
        unset($clone->isDomain);

        return $clone;
    }

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

    public function withOwnership(Ownership $ownership): self
    {
        $clone = clone $this;
        $clone->ownership = $ownership;

        return $clone;
    }

    /**
     * @param Path[] $paths
     */
    public function withPaths(array $paths): self
    {
        $clone = clone $this;
        $clone->paths = $paths;

        return $clone;
    }

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
     * @param TlsAcmeDeprecated|TlsCertificate $tls
     */
    public function withTls(TlsAcmeDeprecated|TlsCertificate $tls): self
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
     * @return IngressDeprecated Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): IngressDeprecated
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $dnsValidationErrors = $input->{'dnsValidationErrors'};
        $hostname = $input->{'hostname'};
        $id = $input->{'id'};
        $ips = IngressDeprecatedIps::buildFromInput($input->{'ips'}, validate: $validate);
        $isDefault = (bool)($input->{'isDefault'});
        $isDomain = null;
        if (isset($input->{'isDomain'})) {
            $isDomain = (bool)($input->{'isDomain'});
        }
        $isEnabled = (bool)($input->{'isEnabled'});
        $ownership = Ownership::buildFromInput($input->{'ownership'}, validate: $validate);
        $paths = array_map(fn (array|object $i): Path => Path::buildFromInput($i, validate: $validate), $input->{'paths'});
        $projectId = $input->{'projectId'};
        $tls = match (true) {
            TlsAcmeDeprecated::validateInput($input->{'tls'}, true) => TlsAcmeDeprecated::buildFromInput($input->{'tls'}, validate: $validate),
            TlsCertificate::validateInput($input->{'tls'}, true) => TlsCertificate::buildFromInput($input->{'tls'}, validate: $validate),
        };

        $obj = new self($dnsValidationErrors, $hostname, $id, $ips, $isDefault, $isEnabled, $ownership, $paths, $projectId, $tls);
        $obj->isDomain = $isDomain;
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
        if (isset($this->isDomain)) {
            $output['isDomain'] = $this->isDomain;
        }
        $output['isEnabled'] = $this->isEnabled;
        $output['ownership'] = $this->ownership->toJson();
        $output['paths'] = array_map(fn (Path $i): array => $i->toJson(), $this->paths);
        $output['projectId'] = $this->projectId;
        $output['tls'] = match (true) {
            ($this->tls) instanceof TlsAcmeDeprecated, ($this->tls) instanceof TlsCertificate => $this->tls->toJson(),
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
        $validator = new \Mittwald\ApiClient\Validator\Validator();
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
            ($this->tls) instanceof TlsAcmeDeprecated, ($this->tls) instanceof TlsCertificate => $this->tls,
        };
    }
}
