<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Ssl;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.ssl.CertificateRequestCreateResponse.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class CertificateRequestCreateResponse
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'commonName' => [
                'type' => 'string',
            ],
            'contact' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.ssl.Contact',
            ],
            'dnsNames' => [
                'items' => [
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
            'id' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'issuer' => [
                'type' => 'string',
            ],
            'signingRequest' => [
                'type' => 'string',
            ],
            'validFrom' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'validTo' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
        ],
        'required' => [
            'id',
            'contact',
        ],
        'type' => 'object',
    ];

    private ?string $commonName = null;

    private Contact $contact;

    /**
     * @var string[]|null
     */
    private ?array $dnsNames = null;

    private string $id;

    private ?string $issuer = null;

    private ?string $signingRequest = null;

    private ?DateTime $validFrom = null;

    private ?DateTime $validTo = null;

    public function __construct(Contact $contact, string $id)
    {
        $this->contact = $contact;
        $this->id = $id;
    }

    public function getCommonName(): ?string
    {
        return $this->commonName ?? null;
    }

    public function getContact(): Contact
    {
        return $this->contact;
    }

    /**
     * @return string[]|null
     */
    public function getDnsNames(): ?array
    {
        return $this->dnsNames ?? null;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getIssuer(): ?string
    {
        return $this->issuer ?? null;
    }

    public function getSigningRequest(): ?string
    {
        return $this->signingRequest ?? null;
    }

    public function getValidFrom(): ?DateTime
    {
        return $this->validFrom ?? null;
    }

    public function getValidTo(): ?DateTime
    {
        return $this->validTo ?? null;
    }

    public function withCommonName(string $commonName): self
    {
        $validator = new Validator();
        $validator->validate($commonName, self::$schema['properties']['commonName']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->commonName = $commonName;

        return $clone;
    }

    public function withoutCommonName(): self
    {
        $clone = clone $this;
        unset($clone->commonName);

        return $clone;
    }

    public function withContact(Contact $contact): self
    {
        $clone = clone $this;
        $clone->contact = $contact;

        return $clone;
    }

    /**
     * @param string[] $dnsNames
     */
    public function withDnsNames(array $dnsNames): self
    {
        $validator = new Validator();
        $validator->validate($dnsNames, self::$schema['properties']['dnsNames']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->dnsNames = $dnsNames;

        return $clone;
    }

    public function withoutDnsNames(): self
    {
        $clone = clone $this;
        unset($clone->dnsNames);

        return $clone;
    }

    public function withId(string $id): self
    {
        $validator = new Validator();
        $validator->validate($id, self::$schema['properties']['id']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->id = $id;

        return $clone;
    }

    public function withIssuer(string $issuer): self
    {
        $validator = new Validator();
        $validator->validate($issuer, self::$schema['properties']['issuer']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->issuer = $issuer;

        return $clone;
    }

    public function withoutIssuer(): self
    {
        $clone = clone $this;
        unset($clone->issuer);

        return $clone;
    }

    public function withSigningRequest(string $signingRequest): self
    {
        $validator = new Validator();
        $validator->validate($signingRequest, self::$schema['properties']['signingRequest']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->signingRequest = $signingRequest;

        return $clone;
    }

    public function withoutSigningRequest(): self
    {
        $clone = clone $this;
        unset($clone->signingRequest);

        return $clone;
    }

    public function withValidFrom(DateTime $validFrom): self
    {
        $clone = clone $this;
        $clone->validFrom = $validFrom;

        return $clone;
    }

    public function withoutValidFrom(): self
    {
        $clone = clone $this;
        unset($clone->validFrom);

        return $clone;
    }

    public function withValidTo(DateTime $validTo): self
    {
        $clone = clone $this;
        $clone->validTo = $validTo;

        return $clone;
    }

    public function withoutValidTo(): self
    {
        $clone = clone $this;
        unset($clone->validTo);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CertificateRequestCreateResponse Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CertificateRequestCreateResponse
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $commonName = null;
        if (isset($input->{'commonName'})) {
            $commonName = $input->{'commonName'};
        }
        $contact = Contact::buildFromInput($input->{'contact'}, validate: $validate);
        $dnsNames = null;
        if (isset($input->{'dnsNames'})) {
            $dnsNames = $input->{'dnsNames'};
        }
        $id = $input->{'id'};
        $issuer = null;
        if (isset($input->{'issuer'})) {
            $issuer = $input->{'issuer'};
        }
        $signingRequest = null;
        if (isset($input->{'signingRequest'})) {
            $signingRequest = $input->{'signingRequest'};
        }
        $validFrom = null;
        if (isset($input->{'validFrom'})) {
            $validFrom = new DateTime($input->{'validFrom'});
        }
        $validTo = null;
        if (isset($input->{'validTo'})) {
            $validTo = new DateTime($input->{'validTo'});
        }

        $obj = new self($contact, $id);
        $obj->commonName = $commonName;
        $obj->dnsNames = $dnsNames;
        $obj->issuer = $issuer;
        $obj->signingRequest = $signingRequest;
        $obj->validFrom = $validFrom;
        $obj->validTo = $validTo;
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
        if (isset($this->commonName)) {
            $output['commonName'] = $this->commonName;
        }
        $output['contact'] = $this->contact->toJson();
        if (isset($this->dnsNames)) {
            $output['dnsNames'] = $this->dnsNames;
        }
        $output['id'] = $this->id;
        if (isset($this->issuer)) {
            $output['issuer'] = $this->issuer;
        }
        if (isset($this->signingRequest)) {
            $output['signingRequest'] = $this->signingRequest;
        }
        if (isset($this->validFrom)) {
            $output['validFrom'] = ($this->validFrom)->format(DateTime::ATOM);
        }
        if (isset($this->validTo)) {
            $output['validTo'] = ($this->validTo)->format(DateTime::ATOM);
        }

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
        if (isset($this->validFrom)) {
            $this->validFrom = clone $this->validFrom;
        }
        if (isset($this->validTo)) {
            $this->validTo = clone $this->validTo;
        }
    }
}
