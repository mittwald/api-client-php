<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Relocation\CreateRelocation;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Directus\Domain;

class CreateRelocationRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'allDomains' => [
                'description' => 'Should all project releated domains should be transferred to mittwald?',
                'type' => 'boolean',
            ],
            'allowPasswordChange' => [
                'description' => 'Has to be true. Do you accept that our mittwald team can change and get password from your current provider?',
                'type' => 'boolean',
            ],
            'contact' => [
                'properties' => [
                    'email' => [
                        'format' => 'email',
                        'minLength' => 1,
                        'type' => 'string',
                    ],
                    'firstName' => [
                        'minLength' => 1,
                        'type' => 'string',
                    ],
                    'lastName' => [
                        'minLength' => 1,
                        'type' => 'string',
                    ],
                    'phoneNumber' => [
                        'pattern' => '|^\\+([0-9]{2,3}|1)-[0-9]{2,5}-[0-9]+$',
                        'type' => 'string',
                    ],
                ],
                'required' => [
                    'firstName',
                    'lastName',
                    'email',
                ],
                'type' => 'object',
            ],
            'domains' => [
                'description' => 'List of domains which should be transferred (when allDomains is not checked).',
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.directus.Domain',
                ],
                'type' => 'array',
            ],
            'notes' => [
                'description' => 'Anything our customer service needs to know for the relocation process.',
                'type' => 'string',
            ],
            'provider' => [
                'properties' => [
                    'loginUrl' => [
                        'description' => 'Url to the control panel of the provider',
                        'minLength' => 1,
                        'type' => 'string',
                    ],
                    'name' => [
                        'description' => 'Name of your provider',
                        'oneOf' => [
                            [
                                'minLength' => 1,
                                'type' => 'string',
                            ],
                            [
                                'enum' => [
                                    '1und1',
                                    'strato',
                                ],
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'password' => [
                        'minLength' => 1,
                        'type' => 'string',
                    ],
                    'sourceAccount' => [
                        'description' => 'Which account of your provider should be moved?',
                        'minLength' => 1,
                        'type' => 'string',
                    ],
                    'userName' => [
                        'description' => 'Login name to your provider',
                        'minLength' => 1,
                        'type' => 'string',
                    ],
                ],
                'required' => [
                    'name',
                    'loginUrl',
                    'userName',
                    'password',
                    'sourceAccount',
                ],
                'type' => 'object',
            ],
            'target' => [
                'properties' => [
                    'organisation' => [
                        'description' => 'Your customer or organisation number',
                        'minLength' => 1,
                        'type' => 'string',
                    ],
                    'product' => [
                        'description' => 'Help our customer service finding your target account',
                        'oneOf' => [
                            [
                                'minLength' => 1,
                                'type' => 'string',
                            ],
                            [
                                'enum' => [
                                    'Space-Server',
                                    'proSpace',
                                    'Agentur-Server',
                                    'CMS-Hosting',
                                    'Shop-Hosting',
                                ],
                                'type' => 'string',
                            ],
                        ],
                        'type' => 'string',
                    ],
                    'projectName' => [
                        'description' => 'In which p-account or short project id your project should be moved.',
                        'minLength' => 1,
                        'type' => 'string',
                    ],
                    'system' => [
                        'description' => 'Which mittwald system does the targetProject use?',
                        'enum' => [
                            'kc',
                            'mstudio',
                        ],
                        'type' => 'string',
                    ],
                ],
                'required' => [
                    'organisation',
                    'projectName',
                    'system',
                    'product',
                ],
                'type' => 'object',
            ],
        ],
        'required' => [
            'provider',
            'contact',
            'target',
            'allowPasswordChange',
        ],
        'type' => 'object',
    ];

    /**
     * Should all project releated domains should be transferred to mittwald?
     */
    private ?bool $allDomains = null;

    /**
     * Has to be true. Do you accept that our mittwald team can change and get password from your current provider?
     */
    private bool $allowPasswordChange;

    private CreateRelocationRequestBodyContact $contact;

    /**
     * List of domains which should be transferred (when allDomains is not checked).
     *
     * @var Domain[]|null
     */
    private ?array $domains = null;

    /**
     * Anything our customer service needs to know for the relocation process.
     */
    private ?string $notes = null;

    private CreateRelocationRequestBodyProvider $provider;

    private CreateRelocationRequestBodyTarget $target;

    public function __construct(bool $allowPasswordChange, CreateRelocationRequestBodyContact $contact, CreateRelocationRequestBodyProvider $provider, CreateRelocationRequestBodyTarget $target)
    {
        $this->allowPasswordChange = $allowPasswordChange;
        $this->contact = $contact;
        $this->provider = $provider;
        $this->target = $target;
    }

    public function getAllDomains(): ?bool
    {
        return $this->allDomains ?? null;
    }

    public function getAllowPasswordChange(): bool
    {
        return $this->allowPasswordChange;
    }

    public function getContact(): CreateRelocationRequestBodyContact
    {
        return $this->contact;
    }

    /**
     * @return Domain[]|null
     */
    public function getDomains(): ?array
    {
        return $this->domains ?? null;
    }

    public function getNotes(): ?string
    {
        return $this->notes ?? null;
    }

    public function getProvider(): CreateRelocationRequestBodyProvider
    {
        return $this->provider;
    }

    public function getTarget(): CreateRelocationRequestBodyTarget
    {
        return $this->target;
    }

    public function withAllDomains(bool $allDomains): self
    {
        $validator = new Validator();
        $validator->validate($allDomains, static::$schema['properties']['allDomains']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->allDomains = $allDomains;

        return $clone;
    }

    public function withoutAllDomains(): self
    {
        $clone = clone $this;
        unset($clone->allDomains);

        return $clone;
    }

    public function withAllowPasswordChange(bool $allowPasswordChange): self
    {
        $validator = new Validator();
        $validator->validate($allowPasswordChange, static::$schema['properties']['allowPasswordChange']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->allowPasswordChange = $allowPasswordChange;

        return $clone;
    }

    public function withContact(CreateRelocationRequestBodyContact $contact): self
    {
        $clone = clone $this;
        $clone->contact = $contact;

        return $clone;
    }

    /**
     * @param Domain[] $domains
     */
    public function withDomains(array $domains): self
    {
        $clone = clone $this;
        $clone->domains = $domains;

        return $clone;
    }

    public function withoutDomains(): self
    {
        $clone = clone $this;
        unset($clone->domains);

        return $clone;
    }

    public function withNotes(string $notes): self
    {
        $validator = new Validator();
        $validator->validate($notes, static::$schema['properties']['notes']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->notes = $notes;

        return $clone;
    }

    public function withoutNotes(): self
    {
        $clone = clone $this;
        unset($clone->notes);

        return $clone;
    }

    public function withProvider(CreateRelocationRequestBodyProvider $provider): self
    {
        $clone = clone $this;
        $clone->provider = $provider;

        return $clone;
    }

    public function withTarget(CreateRelocationRequestBodyTarget $target): self
    {
        $clone = clone $this;
        $clone->target = $target;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CreateRelocationRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CreateRelocationRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $allDomains = null;
        if (isset($input->{'allDomains'})) {
            $allDomains = (bool)($input->{'allDomains'});
        }
        $allowPasswordChange = (bool)($input->{'allowPasswordChange'});
        $contact = CreateRelocationRequestBodyContact::buildFromInput($input->{'contact'}, validate: $validate);
        $domains = null;
        if (isset($input->{'domains'})) {
            $domains = array_map(fn (array|object $i): Domain => Domain::buildFromInput($i, validate: $validate), $input->{'domains'});
        }
        $notes = null;
        if (isset($input->{'notes'})) {
            $notes = $input->{'notes'};
        }
        $provider = CreateRelocationRequestBodyProvider::buildFromInput($input->{'provider'}, validate: $validate);
        $target = CreateRelocationRequestBodyTarget::buildFromInput($input->{'target'}, validate: $validate);

        $obj = new self($allowPasswordChange, $contact, $provider, $target);
        $obj->allDomains = $allDomains;
        $obj->domains = $domains;
        $obj->notes = $notes;
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
        if (isset($this->allDomains)) {
            $output['allDomains'] = $this->allDomains;
        }
        $output['allowPasswordChange'] = $this->allowPasswordChange;
        $output['contact'] = ($this->contact)->toJson();
        if (isset($this->domains)) {
            $output['domains'] = array_map(fn (Domain $i): array => $i->toJson(), $this->domains);
        }
        if (isset($this->notes)) {
            $output['notes'] = $this->notes;
        }
        $output['provider'] = ($this->provider)->toJson();
        $output['target'] = ($this->target)->toJson();

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
        $this->contact = clone $this->contact;
        $this->provider = clone $this->provider;
        $this->target = clone $this->target;
    }
}
